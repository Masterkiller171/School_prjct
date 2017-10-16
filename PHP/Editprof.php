<?php
include 'Functions.php';

//User update
function Username(){
$User = $_POST["Username"];
$Usersel = "SELECT Username FROM userinfo";
$Username = "UPDATE userinfo SET Username= ". $User . " WHERE Username = ". $Usersel . ""; 
return $Username;
}

function Name(){
//Name update
$Name = $_POST["Name"];
$Namesel = "SELECT Name FROM userinfo";
$Nameup = "UPDATE userinfo SET Name = ". $Name . " WHERE Name = ". $Namesel . "";
return $Nameup;
}

function Surname(){
//Surname update
$Surname = $_POST["Surname"];
$Surnamesel = "SELECT Surname FROM userinfo";
$Surnameup = "UPDATE userinfo SET Surname = ". $Surname . " WHERE Surname = ". $Surnamesel . ""; 
return $Surnameup;
}

function Specialty(){
//Specialty update
$Specialty = $_POST["Specialty"];
$Specialtysel = "SELECT Surname FROM userinfo";
$Specialtyup = "UPDATE userinfo SET Specialty = ". $Specialty . " WHERE Specialty = ". $Specialtysel . ""; 
return $Specialtyup;
}

function Gender(){
//Gender update
$Gender = $_POST["Male,Female"];
$Gendersel = "SELECT Gender FROM userinfo";
$Genderup = "UPDATE userinfo SET Gender = ". $Gender . " WHERE Gender = ". $Gendersel . ""; 
return $Genderup;
}

function Email(){
//Email update
$Email = $_POST["Email"];
$Emailsel = "SELECT Email FROM userinfo";
$Emailup = "UPDATE userinfo SET Email = ". $Email . " WHERE Email = ". $Emailsel . ""; 
return $Emailup;
}

function Comment(){
//Comment update
$Comment = $_POST["Comment"];
$Commentsel = "SELECT Comment FROM userinfo";
$Commentup = "UPDATE userinfo SET Comment = ". $Comment . " WHERE Comment = ". $Commentsel . ""; 
return $Commentup;
}
?>
<html lang="en">
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php $url?>/CSS/Profile.css"> 
    <link rel="stylesheet" href="<?php $url?>/CSS/Main.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $JSim ?>
    <?php echo $JSimvs?>

    </head>
    <body>
       <A href="edit.html" >Logout</A>
       
       
    <nav>
          <ul>
       <li class="sub-menu-parent"><a href="<?php $url ?>/PHP/Main.php" > Home</a>
       </li>
     <li class="sub-menu-parent">
       <a> Posts</a>
       <ul class="sub-menu">
         <li><a href="<?php $url ?>/PHP/Post-Page.php">New Posts</a></li>
         <li><a href="<?php $url ?>/PHP/Post-Page.php">Hot Posts</a></li>
         <li><a href="<?php $url ?>/PHP/Post-Page.php">Trending</a></li>
       </ul>
     </li>
     <li class="sub-menu-parent"><a>Create post</a>
       <ul class="sub-menu">
         <li>
             <a href="<?php $url ?> /PHP/Post-input.php">Create post</a>
         </li>
       </ul>
     </li>
     <li class="sub-menu-parent"><a href="#">Projects</a>
       <ul class="sub-menu">
         <li><a href="#">Sub Item 1</a></li>
       </ul></li>
        <li class="sub-menu-parent"><a href="#">Support</a>
       <ul class="sub-menu">
         <li><a href="<?php $url?>/PHP/Rules.php">Rules</a></li>
         <li><a href="<?php $url?>/PHP/Contact.php">Contact</a></li>
       </ul></li>
   </ul>
 </nav>
     <div class="container">
      <div class="row">
      <div class="col-md-5  toppad">
           <a href="<?php $url?>/PHP/Editprof.php" >Apply to Profile</a>
      </div>
          
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <div class="panel-title"><h3>Random Users</h3>
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
                        <td><input value="1" name="Female" class="subject-list" type="checkbox" id="fem" >Female 
<input value="2" name="Male" class="subject-list" type="checkbox" id="mal"  >Male

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

