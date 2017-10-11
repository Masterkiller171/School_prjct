<?php
include "Functions.php";
include "Hints.php";

session_start();
$_SESSION['message'] = '';


if($_SERVER['REQUEST_METHOD']== 'POST')
    {
    if(($_POST['Password']) === ($_POST['Passwordconfirm']))//Checking if passwords are the same
        {
        
$id = rand(1000,5000);   
$Username = $conn-> real_escape_string($_POST['Username']);
$Email = $conn-> real_escape_string($_POST['Email']);
$Password = rand(1000,5000); //Generating hash code for Password
$picture_path = $conn->real_escape_string('image/'.$_FILES['avatar']['Name']);//Path of picture
$Email= md5($id);//Generating an id for every specific user
$year = $_POST['year'];
$Name = $conn-> real_escape_string($_POST['Name']);
$Surname = $conn-> real_escape_string($_POST['Surname']);
$Comment = $conn-> real_escape_string($_POST['Comment']);

//Will check if email has already been used once
if(($_POST ['Email']) == ($_POST['Email'])){
   
   $_SESSION['message'] = 'This email has already been used, please use another!';
}

//Checking if comment contains less than 200 characters
if(200 < strlen($_POST['comment'])){
    $_SESSION['message'] = 'Please keep your story below 200 characters please!';
}

//Checking if gender equals male or female
if($gender == ($_POST['Female']))
    {
    return 1;
}
elseif ($gender == ($_POST['Male']))
    {
    return 0;
}

/*Checking if the file is an actual picture*/
    if (preg_match ("!images!",$_FILES['avatar']['type']))
            {
        
//Putting picture into database
        if(copy($_FILES['avatar']['tmp_name'], $picture_path))
                {
            
            $_SESSION['Username'] = $Username;
            $_SESSION['picture'] = $picture_path;
            
            $sql = "INSERT INTO reg/log (Username, Name, Surname, Email, Password, Picture, Comment, Gender, Specialty, hash, days, month, year)"
                ."VALUES ('$Username','$Name',' $Surname',' $Password',' $Comment',' $Email ','$gender','$Specialty '.'$hash'.'$dayss'.'$months'.'$years')";
            
            //Registration succesfull
            if($conn->quert($sql) === true)
                {
                $_SESSION['message'] = 'Registration is Succesfull!';
                header("location: welcome.php");
 
                
            }
        }
        else {
            $_SESSION['message']= "File Upload Failed!";
        }
        
            }
        else{
            $_SESSION['message']= "Please only upload JPG, GIF or PNG images!";
        }
    
    }
        else{
            $_SESSION['message']= "The two given passwords don't match!";
        }
        
}


?>

<html lang='en'>
    <body>
    <head>
   <title>Register</title>
    <link rel="stylesheet" type="text/css" href="<?php $url?> /CSS/Main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php $url?>  /CSS/Reg.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <?php echo $JSim?>
    <?php echo $JSimvs?>
</head>
    <div class="login-box">
        <div class="lb-header">
            <p3>Or if you don't have an account:</p3>
            <a href="<?php $url?> Login.php" class="active" id="login-box-link">Login</a>
        </div>
        <div class="alert alert-error"><?php echo $_SESSION['message']?></div>
        <div class="filler-small"></div>
        <form class="signup">
            <div class="u-form">
<p3>What's your gender?</p3>
<input value="1" name="Female" class="subject-list" type="checkbox" id="fem" >Female 
<input value="2" name="Male" class="subject-list" type="checkbox" id="mal"  >Male

    <script type="text/javascript">
	    $('.subject-list').on('change', 
            function() {
		    $('.subject-list').not(this).prop('checked', false);  
		});
             
    </script>
            </div>
   
            
                                <p3>When were you born?</p3>
                                <select name="days">
                                    <?php days_loop() ?>

                                </select>
                                
                                <select name="month">
                                    
                                   <?php month_loop() ?>

                                </select>
                                
                                <select name="year">
                                    <?php year_loop() ?>

                                </select>
                            
    <div class="u-form">
                <input type="username" placeholder="Username..." name='Username' required>
            </div>
            <div class="u-form">
                <input type="name" placeholder="Name..."name='Name' required>
            </div>
            <div class="u-form">
                <input type="sirname" placeholder="Surname..." name='Surname'required>
            </div>
            <div class="u-form">
                <input type="email" placeholder="Email..." name='Email'required> 
            </div>
             <div class="u-form">   
                 <input type="text" onkeyup="Hints(this.value)" placeholder="Specialty" id="Hint" name="Hint" required>
                 <span id="Hints"><p>Suggestions:</p></span>
             </div>
            <div class="u-form">
                <span><input type="password" placeholder="Password..." name='Password' required></span>
                
            </div>
            <div class="u-form">
                <input type="password" placeholder="Confirm Password..." name='Passwordrpt' required>
            </div>
                <div class="filler-small"></div>
            <div class="avatar"><label>Select profile picture: </label>
                <input type="file" name="avatar" accept="image/*" required name="Picture" required/></div>
            <div class="u-form">
                <textarea name="textarea" placeholder="Tell something about yourself" style="width:250px;height:150px;" name="Comment" required></textarea>
                <div class="u-form">
                    <a href="<?php $url?> Verify-Page.php"  <button type="submit" value="register" name="register" class="button buttonc" onclick="CheckBox()" required> Submit</button></a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>