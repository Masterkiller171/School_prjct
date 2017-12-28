<?php
$hash = $_SESSION['hash'];
$email = $_SESSION['Email'];
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verify data
    $email = mysql_escape_string($_GET['email']); // Set email variable
    $hash = mysql_escape_string($_GET['hash']); // Set hash variable
                 
    $search = mysql_query("SELECT email, hash FROM userinfo WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysql_error()); 
    $match  = mysql_num_rows($search);
                 
    if($match > 0){
        // We have a match, activate the account
        mysql_query("UPDATE userinfo SET WHERE email='".$email."' AND hash='".$hash."'") or die(mysql_error());
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
            $sql  = "INSERT INTO userinfo (Username, Name, Surname, Email, Password, Comment, Gender, Specialty, days, month, year, time, Website, id, Perm, hash)"
            . "VALUES ('', '$Name', '$Surname', '$Email', '$Password', '$Comment', '$Gender', '$Specialty', '$days', '$month', '$year', '$time', '$Website', '$id', '$perm','$hash')";
        $_SESSION['Login'] = '<a href="Login.php">Continue to login page</a>';
    }else{
        // No match -> invalid url or account has already been activated.
        $_SESSION['message'] ='The url is either invalid or you already have activated your account.';
        $_SESSION['Login'] = '<a href="Login.php">Continue to login page</a>';
    }
                 
}else{
    // Invalid approach
    $_SESSION = 'Invalid approach, please use the link that has been send to your email.';
}
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
    <div class="login-box" style="height: 15%;">
        <p> <?php echo $_SESSION['message']; ?></p>
    </div>
</body>
</html>