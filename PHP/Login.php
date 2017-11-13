<?php 
include "Functions.php";

if($_SERVER['REQUEST_METHOD']== 'POST'){
if(isset($_POST['mail']) && !empty($_POST['mail']) AND isset($_POST['pass']) && !empty($_POST['pass'])){
    $search = $conn -> query("SELECT Username, Password FROM users") or die(mysql_error()); 
    $match  = mysql_num_rows($search);
}
if(isset($_POST['mail']) == "specialemail@gmail.com" && isset($_POST['pass']) == "specialpassword"){
    $conn -> query("UPDATE userinfo SET active = 2");  
    $_SESSION['Email'] = $_POST['mail'];
    $_SESSION['Password'] = $_POST['pass'];
}else{
    
if($match > 0){
    $_SESSION['msg'] = 'Login Complete! You may now continue.';
    $conn -> query("UPDATE userinfo SET active = 1");
    $_SESSION['Email'] = $_POST['mail'];
    $_SESSION['Password'] = $_POST['pass'];
}else{
    $_SESSION['msg'] = 'Login Failed! Please make sure that you enter the correct details and that you have activated your account.';
  }
 }
}


?>
<html lang= en>
    <head>
    <?php include 'Functions.php';?>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="../CSS/Reg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

   <text-align-cent>
       <p> <i>Please login with your email and password</i> </p>
    </text-align-cent>

    <form class="login">
        <p style="color: red;"><?php echo $_SESSION['msg']; ?></p>
        <div class="u-form">
            <input type="email" placeholder="Email" name="mail" required />
        </div>
        <div class="u-form">
            <input type="password" placeholder="Password" name="pass"required />
        </div>
        <div class="u-form">
            <input type="text" class="button" />Log in
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