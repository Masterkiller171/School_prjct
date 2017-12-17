<?php
include "Functions.php";

global  $conn;
 $conn -> query("UPDATE userinfo SET active='0'"); //Logging out onclick
 session_destroy();
 $_SESSION['active'] = '0';
 
 header('location: index.php');
