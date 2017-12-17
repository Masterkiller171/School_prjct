<?php 
include "Functions.php";

$_SESSION['msg'] = '';

if($_SERVER['REQUEST_METHOD']== 'POST'){
 if(isset($_POST['mail']) && !empty($_POST['mail']) AND isset($_POST['pass']) && !empty($_POST['pass'])){
    $search = $conn -> query("SELECT Username, Password FROM users") or die(mysql_error()); 
    $match  = $search -> num_rows;

 if(isset($_POST['mail']) == "pepenormie@gmail.com" && isset($_POST['pass']) == "normiepass"){
    $_SESSION['Email'] = $_POST['mail']; //Getting Email from email input
    $_SESSION['Password'] = $_POST['pass']; //Geting  password from password input
    $_SESSION['active'] = 2;
    header('location: Profile.php');
    
 }elseif($match == 1){
    $conn -> query("UPDATE userinfo SET active = 1"); //Updatting active to 1 for normies(normal customers) in database
    $_SESSION['active'] = 1;
     
    $quary = $conn -> query("SELECT * FROM userinfo");
    $sql = mysqli_fetch_array($quary, MYSQLI_ASSOC);
             
    $_SESSION['Username']= $sql['Username'];
    $_SESSION['Name']    = $sql['Name'];
    $_SESSION['Surname'] = $sql['Surname'];
    $_SESSION['Email']   = $sql['Email'];
    $_SESSION['Password']= $sql['Password'];
    $_SESSION['avatar']  = $sql['avatar'];
    $_SESSION['Comment'] = $sql['Comment'];
    $_SESSION['Gender']  = $sql['Gender'];
    $_SESSION['Specialty']= $sql['Specialty'];
    $_SESSION['days']    = $sql['days'];
    $_SESSION['month']   = $sql['month'];
    $_SESSION['year']    = $sql['year'];
    $_SESSION['time']    = $sql['time'];
    $_SESSION['Website'] = $sql['Website'];

    header('location: Profile.php');
  }
 }else{
     header("location: Login.php");
     $_SESSION['msg'] = '<bigfc>*Please fill in all the fields!</bigfc>'; //Fail message when there is no match in query search
 }
}


?>
<html lang= en>
    <head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="../CSS/Login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
<div class="wrapper">
	<div class="login">
		<div class="login-screen">
                    <div class="lb-header">
            <p3>Or if you already have an account:</p3>
            <a href="Reg.php" class="active" id="login-box-link">Register</a>
        </div>
			<div class="app-title">
				<h1>Login</h1>
            
			</div>
            <?php $_SESSION['msg']; ?>
                    <aligner><small>Please fill in your name and password</small></aligner>
       
<form method="post">
			<div class="login-form">
				<div class="control-group">                               
                                <input type="email" class="login-field" value="" placeholder="Email Adress" id="login-name" name="mail" required/>
				<label class="login-field-icon fui-user" for="login-name"></label>                          
				</div>                           
				<div class="control-group">                                   
                <input class="Password" type="password"  placeholder="Password..." name='pass' autocomplete="on" required/>                                   
                <input type="button" value="show" id="showHide"  onclick="change()" style="width: 60px;"/>
                                
 <script type="text/javascript">
  $(document).ready(function() {
  $("#showHide").click(function() {  //Checking the button has been pressed
    if ($(".Password").attr("type") === "password") {  //Checking if text field is password
      $(".Password").attr("type", "text"); //If imput is password it will change to text(visible)

    } else {
      $(".Password").attr("type", "password"); //And if its already on text it will change to password
    }
  });
});
 
function change(){
   var Check = document.getElementById("showHide").value; //Getting value from hide/show button
   
    /* will check whether check has a value of show and if not change it to show*/
   if(Check === "show"){ 
      return  document.getElementById("showHide").value = "hide";
   }else{
     return  document.getElementById("showHide").value = "show";
        }
};
 </script><br>
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
                            <button type="submit" class="btn" required/>login
        </div>
    </form>
    <br>
               <div class="lb-header">
            <p3>Or if you want to go back:</p3>
            <a href="index.php" class="active" id="login-box-link">Go Back!</a>
        </div>
			</div>
			
    
            </div>
		</div>
</body>
</html>