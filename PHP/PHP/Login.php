<?php 
include "Functions.php";

$_SESSION['msg'] = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
 if(isset($_POST['mail']) && !empty($_POST['mail']) && isset($_POST['pass']) && !empty($_POST['pass'])){
    $search = $conn -> query("SELECT Username, Password FROM users") or die(mysql_error()); 
    $match  = $search -> num_rows; //Dividing all data rows into countable numbers

 if(isset($_POST['mail']) == "youribontekoe@gmail.com" || isset($_POST['mail']) == "tijmenvanderwerf@gmail.com" && isset($_POST['pass']) == "tijmen" ||isset($_POST['pass']) == "youri"){ //Checking whether the input is a valid match for admin permssions
    $_SESSION['Email'] = $_POST['mail']; //Getting Email from email input
    $_SESSION['Password'] = $_POST['pass']; //Geting  password from password input
    $_SESSION['active'] = 2; //upodating active session to 2
    $conn -> query("UPDATE userinfo SET active = 2"); //Updating active to 2 (admin permissions)
    header('location: Profile.php'); //Redirecting to Profile.php
    
 }elseif($match == 1){ //checking whether there is a match 
    
    $_SESSION['active'] = 1; //Updating active session to 1
    $query = $conn -> query("SELECT Username, Name, Surname, Email, Password, avatar, Comment, Gender, Specialty, days, month, year, time, Website FROM userinfo");
    $sql =  $query -> fetch_array; //Deviding all data into an array

     /* All data from database and put into sessions */
    $sql['Username'] = $_SESSION['Username'];
    $sql['Name'] = $_SESSION['Name'];
    $sql['Surname'] = $_SESSION['Surname'];
    $sql['Email'] = $_SESSION['Email'];
    $sql['Password'] = $_SESSION['Password'];
    $sql['avatar'] = $_SESSION['avatar'];
    $sql['Comment'] = $_SESSION['Comment'];
    $sql['Gender'] = $_SESSION['Gender'];
    $sql['Specialty'] = $_SESSION['Specialty'];
    $sql['days'] = $_SESSION['days'];
    $sql['month'] = $_SESSION['month'];
    $sql['year'] = $_SESSION['year'];
    $sql['time'] = $_SESSION['time'];
    $sql['Website'] = $_SESSION['Website'];
     
    $conn -> query("UPDATE userinfo SET active = 1"); //Updatting active to 1 for normies(normal customers);
     
    header('location: Profile.php'); //Redirecting to Profile.php
   }
 }else{
    $_SESSION['msg'] = 'Login Failed! Please make sure that you enter the correct details and that you have an activated account!'; //Fail message when there is no match in query search
 }
}


?>
<html lang= en>
    <head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="../CSS/Reg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

   <text-align-cent>
       <p> <strong><i>Please login with your email and password</i></strong> </p>
    </text-align-cent>

<form class="login" method="post">
        <p style="color: red;"><?php echo $_SESSION['msg'] ?></p>
        <div class="u-form">
            <input type="email" placeholder="Email" name="mail" required />
        </div>
        <div class="u-form">
            <input type="password" placeholder="Password" name="pass" required />
        </div>
        <div class="u-form">
            <input type="submit" value="Log in" class="button" required/>
        </div>
    </form>

    <text-align-cent>
        <p>Don't have an account yet? Sign one up here:
            <a href="Reg.php">
                <button class=" button buttonc">Sign Up!</button>
            </a>Or Go Back to the homepage here:
            <a href="index.php">
                <button type="button" class="button buttonc"> GoBack!</button>
            </a>
        </p>
    </text-align-cent>

</body>
</html>