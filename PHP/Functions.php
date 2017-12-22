        
<?php
include "Libary.php";
include "Connector.php";
session_start();

//Declaring message session
$_SESSION['message'] = $_SESSION['message'] = $_SESSION['pass'] = $_SESSION['Email'] = $_SESSION['Surname'] = $_SESSION['Name'] = $_SESSION['Username'] = '';
//Setting default time to greenwich time
date_default_timezone_set('GMT');
//Getting today's date (current UK greenwich time)
$_SESSION['nowtime'] = date("F j, Y, g:i a");
//Defining all variables whom'st were not defined
$Username = $Name = $Surname = $Password = $Passwordrpt = $Comment = $Email = $gender = $id = $Specialty = $str = $mysqli = $jobs = $match="";

//Setting default time to greenwich time
date_default_timezone_set('GMT');

//Getting today's date (current UK greenwich time)
$_SESSION['nowtime'] = date("F j, Y, g:i a");

//Checking if function button already exists
if (!function_exists('button')) {  
//Function for button on login
function button(){ 
global $conn;

    //Getting $butreg from PHP/Libary.php
    global $butreg;

    //Getting $butout from PHP/Libary.php
    global $butout;
    
  //style for registration button
  $regbutt= '<a href ="Login.php" style="'.$butreg.' class="href"> Login/Register</a>';

  //Profile
  $probutt= '<a href ="Profile.php" style="'.$butreg.' class="href"> My Profile</a>';

   //logout
  $outbut= '<a href ="Logout.php" style="'. $butout .' float: left;""> Logout</a>';
if(isset($_SESSION['id'])){
$id= $_SESSION['id'];
$quary = $conn -> query("SELECT * FROM userinfo WHERE id='$id'");
$sql = mysqli_fetch_array($quary, MYSQLI_ASSOC);
if(!empty($sql)){
 if($_SESSION['active'] = 1){
      echo $probutt, $outbut;
}
 } 
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
 if($_SESSION['active'] == 1){
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
    global $conn;
    if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
$quary = $conn -> query("SELECT * FROM userinfo WHERE id='$id'");
$sql = mysqli_fetch_array($quary, MYSQLI_ASSOC);
if($sql['Perm'] == 2){
        echo $navbaradmin;
   }else{
       echo $navbar;
   }
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

