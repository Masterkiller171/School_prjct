<?php 
include "Functions.php";

$_SESSION['msg'] = '';

if($_SERVER['REQUEST_METHOD']== 'POST'){
 if(isset($_POST['mail']) && !empty($_POST['mail']) AND isset($_POST['pass']) && !empty($_POST['pass'])){
    $search = $conn -> query("SELECT Username, Password FROM users") or die(mysql_error()); 
    $match  = $search -> num_rows;

 if(isset($_POST['mail']) == "specialemail@gmail.com" && isset($_POST['pass']) == "specialpassword"){
    $_SESSION['Email'] = $_POST['mail']; //Getting Email from email input
    $_SESSION['Password'] = $_POST['pass']; //Geting  password from password input
    $_SESSION['active'] = 2;
    header('location: Profile.php');
    
 }elseif($match == 1){
    $conn -> query("UPDATE userinfo SET active = 1"); //Updatting active to 1 for normies(normal customers) in database
    $_SESSION['active'] = 1;
     
    $quary = $conn -> query("SELECT * FROM userinfo");
    $sql = mysqli_fetch_array($quary, MYSQLI_ASSOC);
             
    $_SESSION['Username'] = $sql['Username'];
    $_SESSION['Name'] = $sql['Name'];
    $_SESSION['Surname'] = $sql['Surname'];
    $_SESSION['Email'] = $sql['Email'];
    $_SESSION['Password'] = $sql['Password'];
    $_SESSION['avatar'] = $sql['avatar'];
    $_SESSION['Comment'] = $sql['Comment'];
    $_SESSION['Gender'] = $sql['Gender'];
    $_SESSION['Specialty'] = $sql['Specialty'];
    $_SESSION['days'] = $sql['days'];
    $_SESSION['month'] = $sql['month'];
    $_SESSION['year'] = $sql['year'];
    $_SESSION['time'] = $sql['time'];
    $_SESSION['Website'] = $sql['Website'];

    header('location: Profile.php');
  }
 }else{
     $_SESSION['msg'] = 'Login Failed! Please make sure that you enter the correct details and that you have an activated account.'; //Fail message when there is no match in query search
 }
}


?>
<html lang= en>
    <head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="../CSS/Login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>
<form method="post">
			<div class="login-form">
				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="Email Adress" id="login-name" name="mail">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
                                    <input type="password" class="login-field" value="" placeholder="password" id="login-pass" name="pass">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>

                            <button type="submit" class="btn" required/>login
			</div>
    </form>
		</div>
	</div>
</body>
</html>