<?php
include 'Functions.php';

    
//User update
function Username($conn){
$User = $_POST["Username"];

if(isset($User)){
$Usersel = $conn ->query("SELECT Username FROM userinfo");
$Username = $conn ->query("UPDATE userinfo SET Username= ". $User . " WHERE Username = ". $Usersel . ""); 
return $Username;
}
}

function Name($conn){
//Name update
$Name = $_POST["Name"];

if(isset($Name)){
$Namesel = $conn ->query("SELECT Name FROM userinfo");
$Nameup = $conn ->query("UPDATE userinfo SET Name = ". $Name . " WHERE Name = ". $Namesel . "");
return $Nameup;
}
}
function Surname($conn){
//Surname update
$Surname = $_POST["Surname"];

if(isset($Surname)){
$Surnamesel = $conn ->query("SELECT Surname FROM userinfo");
$Surnameup = $conn ->query("UPDATE userinfo SET Surname = ". $Surname . " WHERE Surname = ". $Surnamesel . ""); 
return $Surnameup;
}
}
function Specialty($conn){
//Specialty update
$Specialty = $_POST["Specialty"];

if(isset($Specialty)){
$Specialtysel = $conn ->query("SELECT Surname FROM userinfo");
$Specialtyup = $conn ->query("UPDATE userinfo SET Specialty = ". $Specialty . " WHERE Specialty = ". $Specialtysel . ""); 
return $Specialtyup;
}
}
function Gender($conn){
//Gender update
$Gender = $_POST["Male,Female"];

if(isset($Gender)){
$Gendersel = $conn ->query("SELECT Gender FROM userinfo");
$Genderup = $conn ->query("UPDATE userinfo SET Gender = ". $Gender . " WHERE Gender = ". $Gendersel . ""); 
return $Genderup;
}
}
function Email($conn){
//Email update
$Email = $_POST["Email"];

if(isset($Email)){
$Emailsel = $conn ->query("SELECT Email FROM userinfo");
$Emailup = $conn ->query("UPDATE userinfo SET Email = ". $Email . " WHERE Email = ". $Emailsel . ""); 
return $Emailup;
}
}
function Comment($conn){
//Comment update
$Comment = $_POST["Comment"];

if(isset($Comment)){
$Commentsel = $conn ->query("SELECT Comment FROM userinfo");
$Commentup = $conn ->query("UPDATE userinfo SET Comment = ". $Comment . " WHERE Comment = ". $Commentsel . ""); 
return $Commentup;
}
}
?>
<html lang="en">
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/Profile.css"> 
    <link rel="stylesheet" href="../CSS/Main.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <A href="edit.html" >Logout</A>
       
  <!-- Function for navbar /PHP/Libary.php -->
    <?php navbar()?>
     <div class="container">
      <div class="row">
      <div class="col-md-5  toppad">
           <a href="Editprof.php" >Apply to Profile</a>
      </div>
          
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <div class="panel-title"><h3> <?php  echo $names =$conn-> query("Username FROM userinfo WHERE id='".$id."'" );?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="#" style=""> </div>
                                                    
                <div class=" col-md-9 col-lg-9 "> 
                   
                  <table class="table table-user-information">
                    <tbody>
                        <tr> 
                        <td>Username</td>
                        <td><input type="text" name="Username" style="width:250px;"></td>
                        <td><span><button onclick="<?php Username() ?>"> Apply</button></span></td>
                      </tr>
                      <tr>
                        <td>Name</td>
                        <td><input type="text" name="Name" style="width:250px;"></td>
                        <td><span><button onclick="<?php Name() ?>"> Apply</button></span></td>
                      </tr>
                      <tr>
                        <td>SurName</td>
                        <td><input type="text" name="SurName" style="width:250px;"></td>
                        <td><span><button onclick="<?php Surname() ?>"> Apply</button></span></td>
                      </tr>
                      <tr>
                        <td>Department:</td>
                        <td><input type="text" name="Department" style="width:250px;"></td>
                        <td><span><button onclick="<?php Specialty() ?>"> Apply</button></span></td>
                      </tr>
                             <tr>
                        <td>Gender</td>
<td><input value="1" name="Female" class="subject-list" type="checkbox" id="fem">Female 
<input value="2" name="Male" class="subject-list" type="checkbox" id="mal"> Male
    <script type="text/javascript">
	    $('.subject-list').on('change', 
            function() {
		    $('.subject-list').not(this).prop('checked', false);  
		});
             
    </script></td>
                        <td><span><button onclick="<?php Gender()?>"> Apply</button></span></td>
                             </tr>
                      <tr>
                        <td>Email</td>
                        <td><input type="email" name="Username" style="width:250px;"></td>
                        <td><span><button onclick="<?php Email()?>"> Apply</button></span></td>
                                   
                      </tr>
                       <tr>
                        <td>Comment</td>
                        <td><textarea name="textarea" style="width:250px;height:150px;" name="Comment"></textarea></td>
                        <td><span><button onclick="<?php Comment()?>"> Apply</button></span></td>
                     </tr>
                      </tbody>
                    </table>
      </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    </body>
</html>

