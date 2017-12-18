<?php
include 'Functions.php'; 
//User update
function Username($conn){
$User = $_POST["Username"];

if(isset($User)){
$Usersel = $conn ->query("SELECT Username FROM userinfo WHERE id= ". $_SESSION['id'] ."");
$Username = $conn ->query("UPDATE userinfo SET Username= ". $User . " WHERE id = ". $_SESSION['id'] . ""); 
$_SESSION['Username'] = $User;
return $Username;
}
}

function Name($conn){
//Name update
$Name = $_POST["Name"];

if(isset($Name)){
$Namesel = $conn ->query("SELECT Name FROM userinfo WHERE id= ". $_SESSION['id'] ."");
$Nameup = $conn ->query("UPDATE userinfo SET Name = ". $Name . " WHERE id = ". $_SESSION['id'] . "");
$_SESSION['Name'] = $_POST["Name"];
return $Nameup;
}
}
function Surname($conn){
//Surname update
$Surname = $_POST["Surname"];

if(isset($Surname)){
$Surnamesel = $conn ->query("SELECT Surname FROM userinfo WHERE id= ". $_SESSION['id'] ."");
$Surnameup = $conn ->query("UPDATE userinfo SET Surname = ". $Surname . " WHERE id = ". $_SESSION['id'] . ""); 
$_SESSION['Surname'] = $_POST["Surname"];
return $Surnameup;
 }
}
function Specialty($conn){
//Specialty update
$Specialty = $_POST["Specialty"];

if(isset($Specialty)){
$Specialtysel = $conn ->query("SELECT Specialty FROM userinfo WHERE id= ". $_SESSION['id'] ."");
$Specialtyup = $conn ->query("UPDATE userinfo SET Specialty = ". $Specialty . " WHERE id = ". $_SESSION['id'] . ""); 
$_SESSION['Specialty'] = $_POST["Specialty"];
return $Specialtyup;
}
}
function Gender($conn){
//Gender update
$Gender = $_POST["Male,Female"];

if(isset($Gender)){
$Gendersel = $conn ->query("SELECT Gender FROM userinfo WHERE id= ". $_SESSION['id'] ."");
$Genderup = $conn ->query("UPDATE userinfo SET Gender = ". $Gender . " WHERE id = ". $_SESSION['id'] . ""); 
$_SESSION['Gender'] = $Gender; 
return $Genderup;
}
}
function Email($conn){
//Email update
$Email = $_POST["Email"];

if(isset($Email)){
$Emailsel = $conn ->query("SELECT Email FROM userinfo WHERE id= ". $_SESSION['id'] ."");
$Emailup = $conn ->query("UPDATE userinfo SET Email = ". $Email . " WHERE id = ". $_SESSION['id'] . ""); 
$_SESSION['Email'] = $Email;
return $Emailup;
}
}
function Comment($conn){
//Comment update
$Comment = $_POST["Comment"];

if(isset($Comment)){
$Commentsel = $conn ->query("SELECT Comment FROM userinfo WHERE id= ". $_SESSION['id'] ."");
$Commentup = $conn ->query("UPDATE userinfo SET Comment = ". $Comment . " WHERE id = ". $_SESSION['id'] . ""); 
$_SESSION['Comment'] = $_POST["Comment"];
return $Commentup;
}
}

function days($conn){
//Days update
$days = $_POST["days"];

if(isset($days)){
$Commentsel = $conn ->query("SELECT days FROM userinfo WHERE id= ". $_SESSION['id'] ."");
$Commentup = $conn ->query("UPDATE userinfo SET days = ". $days . " WHERE id = ". $_SESSION['id'] . ""); 
$_SESSION['days'] = $_POST["days"];
return $daysup;
}
}
function month($conn){
//Month update
$month = $_POST["month"];

if(isset($month)){
$Commentsel = $conn ->query("SELECT month FROM userinfo WHERE id= ". $_SESSION['id'] ."");
$Commentup = $conn ->query("UPDATE userinfo SET month = ". $month . " WHERE id = ". $_SESSION['id'] . ""); 
$_SESSION['month'] = $_POST["month"];
return $monthup;
}
}
function year($conn){
//Year update
$Comment = $_POST["year"];

if(isset($year)){
$Commentsel = $conn ->query("SELECT year FROM userinfo WHERE id= ". $_SESSION['id'] ."");
$Commentup = $conn ->query("UPDATE userinfo SET year = ". $Comment . " WHERE id = ". $_SESSION['id'] . ""); 
$_SESSION['year'] = $_POST["year"];
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
<input value="2" name="Male" class="subject-list" type="checkbox" id="mal"> Male</td>
    <script type="text/javascript">
	    $('.subject-list').on('change', 
            function() {
		    $('.subject-list').not(this).prop('checked', false);  
		});
             
    </script>
                        <td><span><button onclick="<?php Gender()?>"> Apply</button></span></td>
                             </tr>
							    <tr>                          <p3>When were you born?</p3>
                                <span><select name="days">
                                    <option value="dayemp" name="dayemp" id="dayemp" required>---</option>
                                    <?php days_loop() //Loop from Funtions.php wich will output 30 days?>

                                </select></span>
                                
                                <span><select name="month">
                                    <option value="monthemp" name="monthemp" id="monthemp" required>---</option>
                                   <?php month_loop() //Loop from Funtions.php wich will output 12 months?>

                                </select></span>
                                
                                <select name="year">
                                    <option value="yearemp" name="yearemp" id="yearemp" required>------</option>
                                    <?php year_loop() //Loop from Funtions.php wich will output current - 117 (117 because the oldest human was 117) ?>

                                </select>
								<span><button onclick="<?php days(); month(); year(); ?>"> Apply</button></span></tr>
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

