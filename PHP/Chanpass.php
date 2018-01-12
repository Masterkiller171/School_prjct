<?php
include "Functions.php";
if(isset($_SESSION['Mail']) && isset($_SESSION['Recover'])){
$mail = $_SESSION['Mail'];
$recover = $_SESSION['Recover'];
$result = $conn->query("SELECT * FROM userinfo WHERE Email='$mail' AND Recode='$recover'");
$sql = $result -> fetch_assoc();
$pass = $sql['Password'];
}
?>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="../CSS/Main.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Reg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <br>
    <?php navbar() ?>
        <div class="filler"></div>
    <form method="post">
    <div class="login-box" style="height: auto; opacity: 0.9;">
        <text-align-cent>
            <div class="u-form">
                <p>Your email = <?php echo $_SESSION['Mail']; ?> </p>
                <p>Your Recovery = <?php echo $_SESSION['Recover']; ?> </p>
                <p>Your Password = <?php echo $pass; ?> </p>
               </div>
    </text-align-cent> 
        <button class="button">Get password</button>
        </div>
    </form>
</body>
</html>

