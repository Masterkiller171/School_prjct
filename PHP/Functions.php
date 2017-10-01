
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
$password = "Banana171";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
function button(){
//style for registration button
$regbutt= 'Login/Register';

//Profile
$probutt= 'My Profile';

    if("SELECT active FROM userinfo" == 1){
        echo $regbutt;
    }else
        {
    echo $probutt;
    }
}
