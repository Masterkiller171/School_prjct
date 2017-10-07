
<?php
//Defining all global variables.
$Username = "";
$Name= "";
$Surname= "";
$Password= "";
$Passwordrpt= "";
$Comment= "";
$Email = "";
$gender= "";
$id= "";
$Specialty= "";
$str = "";

$butreg = 'color: Blue;
    padding: 5 1%;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    background-color: lightblue;';

//Setting url for every page
$url = 'http://' . $_SERVER['HTTP_HOST'];

//getting an hash code for verifaction
$hash = md5($str);

$DBname = "school_website";
$servername = "localhost:3306";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
function button(){
//style for registration button
$regbutt= '<a href ="<?php $url>/PHP/Reg.php" style="<?php echo$butreg ?>"> Login/Register</a>';

//Profile
$probutt= '<a href ="<?php $url>/PHP/Profile.php" style="<?php echo$butreg ?>"> My Profile</a>';

    if("SELECT active FROM userinfo" == 1){
        echo $regbutt;
    }else
        {
    echo $probutt;
    }
}
 
//creating a loop untill 12 months   
    function month_loop(){
    for($month = 1; $month <=12; $month++){
        echo '<option value="monsel" name="mon' . $month . ' " required>'.$month.'</option>';
    }
    }
    
 //creating a loop from current year - 120 to current year
 function year_loop(){
    for($year = date("Y") - 120; $year <= date("Y"); $year++){
        echo '<option value="yearsel" name="year' . $year . ' " required>'.$year.'</option>';
    } 
        }
        
          
//Creating a loop for the amount of days in a month
function days_loop(){  
  
    for($days = 1; $days <=31; $days++){
        echo '<option value="daysel" name="day' . $days . ' " required>'.$days.'</option>';
        
    }
    
}

  

