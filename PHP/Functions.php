
<?php
include "Libary.php";
session_start();
//Defining all global variables.
$Username = $Name= $Surname= $Password= $Passwordrpt= $Comment= $Email = $gender= $id= $Specialty= $str = $mysqli = $jobs ="";

//Declaring message session
$_SESSION['message'] = '';

//Setting time to London time
date_default_timezone_set('GMT'); 

//Getting today's date
$today = date("F j, Y, g:i a");

//Setting url for every page
$url = '';

//getting an hash code for verifaction
$hash = md5($str);
 
$DBname = "innoform";
$servername = "localhost:3307";
$username = "root";
$password = "usbw";

// Create connection to database
$conn = new mysqli($servername, $username, $password, $DBname);
// Check connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn -> connect_error);
} 

//create the database
//if ( !$conn->query('CREATE DATABASE innoform') ) {
//   printf("Errormessage: %s\n", $conn->error);
//}

//create users table with all the fields
//$conn->query('
//CREATE TABLE `userinfo`(
//`Username` varchar(255) NOT NULL, 
//`Name` varchar(255) NOT NULL, 
//`Surname` varchar(255) NOT NULL, 
//`Email` varchar(255) NOT NULL, 
//`Password` varchar(255) NOT NULL, 
//`avatar` VARCHAR(100) NOT NULL, 
//`Comment` varchar(255) NOT NULL, 
//`Gender` varchar(255) NOT NULL, 
//`Specialty` varchar(255) NOT NULL, 
//`id` varchar(255) NOT NULL, 
//`days` INT(2) NOT NULL, 
//`month` INT(2) NOT NULL, 
//`year` INT(4) NOT NULL
//);') or die($conn->error);
if (!function_exists('button')) {
function button($conn){ 
    global $butreg;
    $id = '';
    if(isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
    }

$logout = $conn -> query("UPDATE userinfo SET active='0' WHERE id= '.$id.'");

//style for registration button
$regbutt= '<a href ="Reg.php" style="'.$butreg.'"> Login/Register</a>';

//Profile
$probutt= '<a href ="Profile.php" style="'.$butreg.'"> My Profile</a>';

//logout
$outbut= '<a href ="" style="'.$butreg.' float: left;" onclick="'. $logout . '"> Logout</a>';

if($conn -> query("SELECT active FROM userinfo WHERE id = ' . $id . '") !== 1 || 2){
    echo $regbutt;
    }else{
    echo $probutt && $outbut;
    }
}
}
$curtim = date($str);

//Creating function for creating a post if you're logged in
if (!function_exists('create_post()')) {
function create_post(){
  global $conn;
  global $Login;
  global $Create;
//variable for selecting active
$active = $conn -> query("SELECT active FROM userinfo"); 

 if($active !== "1" || "2"){
 echo $Login;
 }else{
     echo $Create;
 }
}
}
//creating a loop untill 12 months 
if (!function_exists('month_loop')) {
function month_loop(){
    for($month = 1; $month <=12; $month++){
        echo '<option value="monsel" name="mon' . $month . ' " id="mon' . $month . '" required>'.$month.'</option>';
    }
    }
}
 //creating a loop from current year - 120 to current year
if (!function_exists('year_loop')) {
 function year_loop(){
    for($year = date("Y") - 117; $year <= date("Y"); $year++){
        echo '<option value="yearsel" name="year' . $year . ' " id="year' . $year . '" required>'.$year.'</option>';
    } 
        }
}
          
//Creating a loop for the amount of days in a month
if (!function_exists('days_loop')) {
function days_loop(){ 
for($days = 1; $days <=31; $days++){
        echo '<option value="daysel" name="day' . $days . ' " required>'.$days.'</option>';
    }
    }
}
//function for myposts on profile page --only usefull when posts are finished
//function my_posts(){
//    foreach($posts as $$p){
//        echo '<div class="filler1"></div>
//              <div class="box2 shadow">'. $post .'</div>';
//    }
//}

//Function loop for testing posts on profile page
if (!function_exists('my_loop')) {
function my_loop(){
    global $myloop;
    for($l ="";$l <= 100; $l++){
        echo $myloop ;
    }
}
}
function navbar(){
    global $navbar;
    echo $navbar;
}
