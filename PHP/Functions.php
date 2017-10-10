
<?php
//Defining all global variables.
$Username = $Name= $Surname= $Password= $Passwordrpt= $Comment= $Email = $gender= $id= $Specialty= $str = "";

//Setting time to London time
date_default_timezone_set('GMT'); 

//Getting today's date
$today = date("F j, Y, g:i a");

//Setting url for every page
$url = 'http://' . $_SERVER['HTTP_HOST'];

//getting an hash code for verifaction
$hash = md5($str);

$DBname = "school_website";
$servername = "localhost:3307";
$username = "root";
$password = "usbw";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
function button(){
    
    $butreg = 'color: Blue;
    padding: 5 1%;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    background-color: lightblue;';

//style for registration button
$regbutt= '<a href ="<?php $url>/PHP/Reg.php" style="'.$butreg.'"> Login/Register</a>';

//Profile
$probutt= '<a href ="<?php $url>/PHP/Profile.php" style="'.$butreg.'"> My Profile</a>';

    if("SELECT active FROM userinfo" == 1){
        echo $regbutt;
    }else
        {
    echo $probutt;
    }
}
$curtim = date($str);

//Creating function for creating a post if you're logged in
function create_post(){
 if("SELECT active FROM userinfo" == 1){
 echo '<a href ="<?php $url>/PHP/Reg.php"> Please Login</a>';
 }else{
     echo '<a href="<?php $url ?> /PHP/Post-input.php">Create post</a>';
 }
}

//creating a loop untill 12 months   
    function month_loop(){
    for($month = 1; $month <=12; $month++){
        echo '<option value="monsel" name="mon' . $month . ' " id="mon' . $month . '" required>'.$month.'</option>';
    }
    }
    
 //creating a loop from current year - 120 to current year
 function year_loop(){
    for($year = date("Y") - 120; $year <= date("Y"); $year++){
        echo '<option value="yearsel" name="year' . $year . ' " id="year' . $year . '" required>'.$year.'</option>';
    } 
        }
        
          
//Creating a loop for the amount of days in a month
function days_loop(){  
  
    for($days = 1; $days <=31; $days++){
        echo '<option value="daysel" name="day' . $days . ' " required>'.$days.'</option>';
        
    }
    
}

 $ids = array("Username","Name","SurName","Department","Date","Gender","Email","Comment");

$JSim= '<script src="<?php $url ?>/JS/Functions.js"></script>';
$JSimvs= '<script src="<?php $url ?>/JS/Visuals.js"></script>';
