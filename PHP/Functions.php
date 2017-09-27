
<?php
//Setting url for every page
$url = 'http://' . $_SERVER['HTTP_HOST'];


$DBname = "school_website";
$servername = "localhost:3306";
$username = "root";
$password = "root";

//try catch 
try {
    $conn = new PDO("mysql:host=$servername;$DBname, $username, $password");

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
    }
catch(PDOException $e)
    {
    die();
    }

    ?>