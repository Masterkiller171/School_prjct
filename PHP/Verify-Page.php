<?php
include 'Functions.php';
function submit(){
$to = $Email;
$subject = 'Signup | Verification';
$message = 'Thanks for signing up at Innoform! we hope you will get your information here! 
 
your username: ' . $Username. ' 
Password: ' . $Password. ' 
    

Please click this link to activate your account:
http://www.innoform.org/Verify-Page.php?Email=' .$Email. '&hash=' .$hash.' 

Thank you!';
}
if(isset($_GET['Email']) && !empty($_GET['Email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verify data
    $email = mysql_escape_string($_GET['Email']); // Set email variable
    $hash = mysql_escape_string($_GET['hash']); // Set hash variable
                 
    $search = mysql_query("SELECT Email, id, active FROM users WHERE email='".$Email."' AND hash='".$hash."' AND active='0'") or die(mysql_error()); 
    $match  = mysql_num_rows($search);
                 
    if($match > 0){
        // Active = 1 wihich means that account may be activated
        mysql_query("UPDATE users SET active='1' WHERE email='".$Email."' AND hash='".$hash."' AND active='0'") or die(mysql_error());
        echo 'Your account has been activated, you can now login';
    }else{
        //There's no match so no activation
        echo 'The url is either invalid or you already have activated your account.';
    }
                 
}else{
    //wrong link
    echo 'wrong link, please use the link that has been send to your email.</div>';
}

function checker(){
if(isset($_POST['yes'])) {
   echo '<div class="u-form">
            <input type="email" placeholder="Email">
        </div>';
}
}
?>
<html lang="en">
<head>
    <title>Verify</title>
    <link rel="stylesheet" type="text/css" href="<?php $url?>/CSS/Main.css">
    <link rel="stylesheet" type="text/css" href="<?php $url?>/CSS/Reg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
    <div class="login-box" style="height: 15%;">
        <text-align-cent>
            <div class="u-form">
    <p3>You're almost done!</p3>
    
    <?php echo "<p3>Is this your email?" . $Email . "</p3>";?>
    <br>
    <label for="yes">Yes</label>
    <input type="checkbox" name="yes" class="subject-list" value="1">
    <label for="no">No</label>
    <input type="checkbox" name="no" class="subject-list" value="2">
    <br>
    <script type="text/javascript">
	    $('.subject-list').on('change', 
            function() {
		    $('.subject-list').not(this).prop('checked', false);  
		});
             
    </script>
<?php checker() ?>
                    <button name ="submit" class="button buttonc" onlcick="<?php submit()?>">Verify!</button>
    </text-align-cent> 
</body>
</html>