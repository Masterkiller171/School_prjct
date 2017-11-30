
<?php
include "Libary.php";

session_start();
//Defining all variables whom'st were not defined
$Username = $Name = $Surname = $Password = $Passwordrpt = $Comment = $Email = $gender = $id = $Specialty = $str = $mysqli = $jobs = $match="";
 
$DBname = "innofurm"; //Database name
$servername = "localhost:3307"; //Servername
$username = "root"; //Username for datebase
$password = "usbw"; //Password for database

// Create connection to database
$conn = new mysqli($servername, $username, $password, $DBname);
$_SESSION['conn'] = $conn;
// Check connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn -> connect_error);
} 
//Declaring message session
$_SESSION['message'] = '';

//Checking whether active is set or not
$active = "SELECT id FROM userinfo";
$actives = mysqli_query($conn, $active);
$sql = mysqli_fetch_array($actives, MYSQLI_ASSOC);
        $sql['id'] = $_SESSION['id'];
//Setting default time to greenwich time
date_default_timezone_set('GMT');

//Setting the session ID into a variable
$ids = $conn -> query("SELECT id FROM userinfo");
$array =  array();
   while($sql = $ids -> fetch_array(MYSQLI_ASSOC)){ 
       $array[] = $sql;
       $sql['id'] = $_SESSION['id'];
    }
//Getting today's date (current UK greenwich time)
$_SESSION['nowtime'] = date("F j, Y, g:i a");

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
if (!function_exists('data')) {
function data(){
    
    //Getting connection of database
    global $conn;
    
/* Gathering all data from database*/
$quary = $conn -> query("SELECT Username, Name, Surname, Email, Password, avatar, Comment, Gender, Specialty, days, month, year, time, Website, active FROM userinfo WHERE id= ". $_SESSION['id'] ."");
  $arra =  array(); //Creating array for $sql splicing
  
   while($sql = $quary -> fetch_array(MYSQLI_ASSOC)){ //Splicing all data from from database values
       $arra[] = $sql;
       
       /* All data from database spliced up to sessions*/
        $sql['Username'] = $_SESSION['Username']; //Username of normie
        $sql['Name'] = $_SESSION['Name']; //Getting data of normie
        $sql['Surname'] = $_SESSION['Surname'];
        $sql['Email'] = $_SESSION['Email'];
        $sql['Password'] = $_SESSION['Password'];
        $sql['avatar'] = $_SESSION['avatar'];
        $sql['Comment'] = $_SESSION['Comment'];
        $sql['Gender'] = $_SESSION['Gender'];
        $sql['Specialty'] = $_SESSION['Specialty'];
        $sql['days'] = $_SESSION['days'];
        $sql['month'] = $_SESSION['month'];
        $sql['year'] = $_SESSION['year'];
        $sql['time'] = $_SESSION['time'];
        $sql['Website'] = $_SESSION['Website'];
    }
}
}
if (!function_exists('logout')) {
function logout(){
 global  $conn;
 $conn -> query("UPDATE userinfo SET active='0'"); //Logging out onclick
 session_destroy(); //Destroying all sessions
 $_SESSION['active'] = '0';
}
}

//Transmitting logout function as variable
$logout = logout();

//Declaring logout function as global session
$_SESSION['logout'] = $logout;

//Checking if function button already exists
if (!function_exists('button')) {  
//Function for button on login
function button(){ 
    //Getting $butreg from PHP/Libary.php
    global $butreg;
    
    //Getting $butout from PHP/Libary.php
    global $butout;
    
  //style for registration button
  $regbutt= '<a href ="Reg.php" style="'.$butreg.'"> Login/Register</a>';

  //Profile
  $probutt= '<a href ="Profile.php" style="'.$butreg.'"> My Profile</a>';

   //logout
  $outbut= '<a href ="" style="'. $butout .' float: left;" onclick="'. $_SESSION['logout'] . '"> Logout</a>';
 
   if($_SESSION['active'] == 1 || 2){
     echo $probutt, $outbut;
      }else{
     echo $regbutt;
   }
  }
 }
$curtim = date($str);

//Checking if function already exists
if (!function_exists('create_post()')) {
//Creating function for creating a post if you're logged in
function create_post(){
  global $Login; //Login text and make-up
  global $Create; //Create post text and make-up

//Checking whether $active is one or two (logged-in and logged-out)
 if($_SESSION['active'] == 1 || 2){
  echo $Create;
   }else{
     echo $Login;
  }
 }
}

//Checking if user has admin permissions or not
if (!function_exists('navbar')) {
function navbar(){
    global $navbaradmin; //Getting navbar for superior human beings from Libary.php
    global $navbar; //Getting navbar for normies from Libary.php
if(!empty($_SESSION['active']) == 2){
        echo $navbaradmin;
   }else{
       echo $navbar;
   }
}
}
//creating a loop untill 12 months 
if (!function_exists('month_loop')) {
function month_loop(){
    $months = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dec");
    $counter = count($months);
    for ($month = 0; $month < $counter; $month++){
        echo '<option value="' . $months[$month] . '" name="mon' . $months[$month] . ' " id="mon' . $months[$month] . '" required>'. $months[$month] .'</option>';
  }
 }
}
 //creating a loop from current year - 117 to current year
if (!function_exists('year_loop')) {
 function year_loop(){
    for ($year = date("Y") - 117; $year <= date("Y"); $year++){
        echo '<option value="' . $year . '" name="year' . $year . ' " id="year' . $year . '" required>'.$year.'</option>';
    } 
  }
}
          
//Creating a loop for the amount of days in a month
if (!function_exists('days_loop')) {
 function days_loop(){ 
  for ($days = 1; $days <=31; $days++){
        echo '<option value="'. $days .'" name="day' . $days . ' " required>'.$days.'</option>';
  }
 }
}
//function for myposts on profile page --only usefull when posts are finished
//function my_posts(){
//    foreach($posts as $p){
//        echo '<div class="filler1"></div>
//              <div class="box2 shadow">'. $post .'</div>';
//     $p++;
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


//function indexpost(){ 
  //  $count = "";
  //  $bool = "";
//do{
// echo '<li><a href="Post-page.php">Post</a></li>'; $count++;       if($count = 10){
//        return $bool ==  false;}
//    while(
//     $bool == true;
//  }
 //)
//}

