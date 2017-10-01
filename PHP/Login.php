<?php 
$match="";
if(isset($_POST['Email']) && !empty($_POST['Email']) AND isset($_POST['Password']) && !empty($_POST['Password']))
    {
    $search = mysql_query("SELECT Username, Password, active FROM users WHERE username='".$Username."' AND password='".$Password."' AND active='1'") or die(mysql_error()); 
    $match  = mysql_num_rows($search);
}

if($match > 0){
    $msg = 'Login Complete! You may now continue.';
}else{
    $msg = 'Login Failed! Please make sure that you enter the correct details and that you have activated your account.';
}


?>
<html lang=en>
    <head>
    <?php include 'Functions.php';?>
    <?php include 'Verify-Page.php';?>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="<?php $url?>/CSS/Reg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

   <text-align-cent>
    <p> Some Shit to explain</p>
    </text-align-cent>

    <form class="login">
        <div class="u-form">
            <input type="email" placeholder="Email">
        </div>
        <div class="u-form">
            <input type="password" placeholder="Password">
        </div>
        <div class="u-form">
            <button class="button">Log in</button>
        </div>
    </form>

    <text-align-cent>
        <p>Don't have an account yet? Sign one up here:
            <a href="Reg.php">
                <button class=" button buttonc">Sign Up!</button>
            </a>Or Go Back to the homepage here:
            <a href="Main.php">
                <button type="button" class="button buttonc"> GoBack!</button>
            </a>
        </p>
    </text-align-cent>

</body>
</html>