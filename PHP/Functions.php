
<?php
//Defining all global variables.
$Username = $Name= $Surname= $Password= $Passwordrpt= $Comment= $Email = $gender= $id= $Specialty= $str = $mysqli = $jobs ="";

//Setting time to London time
date_default_timezone_set('GMT'); 

//Getting today's date
$today = date("F j, Y, g:i a");

//Setting url for every page
$url = 'http://' . $_SERVER['HTTP_HOST'];

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
    die("Connection failed: " . $conn->connect_error);
} 

//create the database
//if ( !$conn->query('CREATE DATABASE innoform') ) {
  //  printf("Errormessage: %s\n", $conn->error);
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
//Gender` varchar(255) NOT NULL, 
//`Specialty` varchar(255) NOT NULL, 
//`hash` varchar(255) NOT NULL, 
//days` INT(2) NOT NULL, 
//`month` INT(2) NOT NULL, 
//`year` INT(4) NOT NULL,
//);') or die($conn->error);

function button(){ 
    $butreg = 'color: Blue;
    padding: 5 1%;
    text-align: center;
    text-decoration: none;
    background-color: lightblue;';
 
    
//testing variable
$id= 1; 

$logup = mysql_query("UPDATE userinfo SET active='0' WHERE id= '".$id."'");

//style for registration button
$regbutt= '<a href ="<?php $url>/PHP/Reg.php" style="'.$butreg.'"> Login/Register</a>';

//Profile
$probutt= '<a href ="<?php $url>/PHP/Profile.php" style="'.$butreg.'"> My Profile</a>';

//logout
$outbut= '<a href ="" style="'.$butreg.' float: left;" onclick="'. $logup . '"> Logout</a>';

    if("SELECT active FROM userinfo" == 1){
        echo $regbutt;
    }else
        {
    echo $probutt,$outbut;
    }
}
$curtim = date($str);

//Creating function for creating a post if you're logged in
function create_post(){
    
//variable for selecting active
$active =mysql_query("SELECT active FROM userinfo"); 

 if($active !== 1){
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
    for($year = date("Y") - 117; $year <= date("Y"); $year++){
        echo '<option value="yearsel" name="year' . $year . ' " id="year' . $year . '" required>'.$year.'</option>';
    } 
        }
        
          
//Creating a loop for the amount of days in a month
function days_loop(){ 
for($days = 1; $days <=31; $days++){
        echo '<option value="daysel" name="day' . $days . ' " required>'.$days.'</option>';
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
function my_loop(){
    for($l ="";$l <= 100; $l++){
        echo '               <div class="filler1"></div>
               <div class="cover left">
               <div class="box2 shadow"> Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum... <div class="btn">
                       <a href="<?php $url?>/PHP/Post.php">Read more...</a></div></div></div>';
    }
}
