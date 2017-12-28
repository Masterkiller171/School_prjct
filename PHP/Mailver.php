<?php
require('Verify-Page.php');
$hash = md5( rand(0,1000) );
$_SESSION['hash'] = $hash;

$to      = $_SESSION['Email']; // Send email to our user
$subject = 'Signup | Verification for '; // Give the email a subject 
$message = '
 
Thanks for signing up for Innoforum!
Your account has been created, you can login with the following information after you have activated your account by pressing the url below.
 
------------------------
Username: '.$_SESSION['Name'].'
Password: '.$_SESSION['Pass'].'
------------------------
 
Please click this link to activate your account:
http://www.innoforum.org/Verify.php?email='.$_SESSION['Email'].'&hash='.$hash.'
 
'; // Our message above including the link
                     
$headers = 'From:noreply@yourwebsite.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email

 header('location: Verify.php');