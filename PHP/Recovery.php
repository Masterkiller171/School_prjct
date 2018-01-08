<?php
include "Functions.php";

$_SESSION['message'] = "";
$Recovery1 = rand(0,999);   $count1 = strlen($Recovery1); 
$Recovery2 = rand(0,999);   $count2 = strlen($Recovery2); 
$Recovery3 = rand(0,999);   $count3 = strlen($Recovery3);
$Recovery4 = rand(0,999);   $count4 = strlen($Recovery4);

        switch($count1){
            case 1 : 
                $Rec1 = "00".$Recovery1;
                break;
            case 2 :
                $Rec1 = "0".$Recovery1;
                break;
            case 3 :
                $Rec1 = $Recovery1;        
        }
        switch($count2){
            case 1 : 
                $Rec2 = "00".$Recovery2;
                break;
            case 2 :
                $Rec2 = "0".$Recovery2;
                break;
            case 3 :
                $Rec2 = $Recovery2;        
        }
        switch($count3){
            case 1 : 
                $Rec3 = "00".$Recovery3;
                break;
            case 2 :
                $Rec3 = "0".$Recovery3;
                break;
            case 3 :
                $Rec3 = $Recovery3;        
        }
        switch($count4){
            case 1 : 
                $Rec4 = "00".$Recovery4;
                break;
            case 2 :
                $Rec4 = "0".$Recovery4;
                break;
            case 3 :
                $Rec4 = $Recovery4;        
        }
        // We have a match, activate the account
        $_SESSION['message'] = 'Your account has been activated, you can now login';
            $time = date('d-m-Y');//Setting time since account creation
            $Username =  $_SESSION['Username'];
            //$_SESSION['Avatar'] = $picture_path;  
            $Name      = $_SESSION['Name'];
            $Surname   = $_SESSION['Surname'];  
            $Email     = $_SESSION['Email'];
            $Password  = $_SESSION['Password'];
            $Comment   = $_SESSION['Comment'];
            $Gender    = $_SESSION['Gender'];
            $Specialty = $_SESSION['Specialty'];
            $Website   = $_SESSION['Website'];
            $days      = $_SESSION['days'];
            $month     = $_SESSION['month'];
            $year      = $_SESSION['year'];
            $active    = 1;
            $id        = $_SESSION['id'];
            $perm      = $_SESSION['perm'];
            $sql  = "INSERT INTO userinfo (Username, Name, Surname, Email, Password, Comment, Gender, Specialty, days, month, year, time, Website, id, Perm)"
            . "VALUES ('$Username', '$Name', '$Surname', '$Email', '$Password', '$Comment', '$Gender', '$Specialty', '$days', '$month', '$year', '$time', '$Website', '$id', '$perm')";
        $_SESSION['Login'] = '<a href="Login.php">Continue to login page</a>';

        ?>
<html lang="en">
<head>
    <title>Verify - Innoform</title>
    <link rel="stylesheet" type="text/css" href="../CSS/Main.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Reg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="filler"></div>
    <form method="post">
    <div class="login-box" style="height: 15%;">
        <text-align-cent>
            <div class="u-form">
                <p3>You're almost done!</p3><br>
    
    <?php Echo $Rec1.'-'.$Rec2.'-'.$Rec3.'-'.$Rec4?>
    </text-align-cent> 
    </form>
</body>
</html>
        