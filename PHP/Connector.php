<?php
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

//create the database
$conn -> query('CREATE TABLE IF NOT EXISTS `userinfo` (
  `Username` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Comment` longtext NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Specialty` varchar(255) NOT NULL,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `days` int(2) NOT NULL,
  `month` varchar(3) NOT NULL,
  `year` int(4) NOT NULL,
  `time` text NOT NULL,
  `Website` varchar(100) NOT NULL,
  `Perm` int(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=545642987 ;');

$quary = $conn -> query("SELECT * FROM userinfo");
$sql = mysqli_fetch_array($quary, MYSQLI_ASSOC);  
/* Gathering all data from database*/
if(isset($_SESSION['id'])){
$id= $_SESSION['id'];
$quary = $conn -> query("SELECT * FROM userinfo WHERE id='$id'");
$sqlll = mysqli_fetch_array($quary, MYSQLI_ASSOC); //Splicing all data from from database values
       //WHERE id= ". $_SESSION['id'] ."
       /* All data from database spliced up to sessions*/
switch($sqlll){
       case $sqlll['Username']: 
	   if(!isset($_SESSION['Username'])){
       $_SESSION['Username'] = $sqlll['Username'];
       }
       break;
	   
	case $sqlll['Name']:
        if(!isset($_SESSION['Name'])){
            $_SESSION['Name'] = $sqlll['Name'];
        } //Getting data of normie
        break;
		
	case $sqlll['Surname']:
        if(!isset($_SESSION['Surname'])){ 
            $_SESSION['Surname'] = $sqlll['Surname'];
        }
        break;
		
	case $sqlll['Email']:
        if(!isset($_SESSION['Email'])){ 
            $_SESSION['Email'] = $sqlll['Email'];
        }
        break;
		
	case $sqlll['Password']:
        if(!isset($_SESSION['Password'])){
            $_SESSION['Password'] = $sqlll['Password'];
        }
        break;
				
	case $sqlll['Comment']:
        if(!isset($_SESSION['Comment'])){
            $_SESSION['Comment'] = $sqlll['Comment'];
        }
        break;
		
	case $sqlll['Gender']:
        if(!isset($_SESSION['Gender'])){
            $_SESSION['Gender'] = $sqlll['Gender'];
        }
        break;
		
	case $sqlll['Specialty']:
        if(!isset($_SESSION['Specialty'])){
            $_SESSION['Specialty'] = $sqlll['Specialty'];
        }
        break;
		
	case $sqlll['days']:
        if(!isset($_SESSION['days'])){
            $_SESSION['days'] = $sqlll['days'];
        }
        break;
		
	case $sqlll['month']:
        if(!isset($_SESSION['month'])){
            $_SESSION['month'] = $sqlll['month'];
        }
        break;
		
	case $sqlll['year']:
        if(!isset($_SESSION['year'])){
            $_SESSION['year'] = $sqlll['year'];
        }

	case $sqlll['time']:
        if(!isset($_SESSION['time'])){
            $_SESSION['time'] = $sqlll['time'];
        }
        break;
		
	case $sqlll['Website']:
        if(!isset($_SESSION['Website'])){
            $_SESSION['Website'] = $sqlll['Website'];
        }
        break;              
}
}

