<?php
include 'Functions.php';
$id = $_SESSION['id'];
$Following = $conn -> query("SELECT Following FROM userinfo WHERE id='$id'");
/*Looping trough all array elements*/
foreach($Following as $out){ 
   $following =  implode($out);
}
/* Getting all information from  follower */
$quary = $conn -> query("SELECT * FROM userinfo WHERE Username='$following'");

$sqlll = mysqli_fetch_array($quary, MYSQLI_ASSOC); //Splicing all data from from
$name = $sqlll['Name'];
$surname = $sqlll['Surname'];
$_SESSION['userSurname'] = $sqlll['Surname'];
$ccomment = $sqlll['Comment'];
$comlen = strlen($ccomment);
if($comlen > 20){
  $comment =  substr($ccomment, 20);
}else{
    $comment = '...'.$sqlll['Comment'] ;
}

$online = $conn -> query("SELECT Online FROM userinfo WHERE Username='$following'");
 if(isset($online)){
 if($online == '1'){
     $ofnile = "Online";
     $offn = ' 
               <div class="fllwinbox" style="background-color:#7fff7f"><div class="fllwtxt">           
                         <input type="submit" value="  '.$following.'" name="fllws" style="background: transparent; border: none;" /></div><p style="float: right;">'.$ofnile.'</p>
                         <p>'.$name.", ".$surname.'</p>  
                         <div class="hidden"> '.$comment.'</div><br> 
                        </div>';
 }else{
     $ofnile = "Offline";
     $offn = '
                 <div class="fllwinbox" style="background-color:#ff7f7f"><div class="fllwtxt">           
                         <input type="submit" value=" '. $following.'"  name="fllws" style="background: transparent; border: none;" /></div><p style="float: right;">'.$ofnile.'</p>
                         <p">'.$name.", ".$surname.'</p>
                         <div class="hidden">'. $comment.'</div><br> 
                         </div>';
 }
 }
$user = $_SESSION['Username'];
$quarie = $conn -> query("SELECT * FROM userinfo WHERE Following='$user'");
$quarei = mysqli_fetch_array($quarie, MYSQLI_ASSOC); //Splicing all data from from
$followings = $quarei['Username'];
$namee = $quarei['Name'];
$surnamee = $quarei['Surname'];
$_SESSION['userSurname'] = $quarei['Surname'];
$ccomments = $quarei['Comment'];
$Onlines = $quarei['Online'];
$comlens = strlen($ccomments);
if($comlen > 20){
  $comments =  '...'. substr($ccomment, 20) ;
}else{
    $comments = $quarei['Comment'] ;
}
if(isset($quarei)){
    if($Onlines == '1'){
     $ofniles = 'Online';
     $fllwrs = '<div class="fllwinbox" style="background-color:#7fff7f"><div class="fllwtxt">           
                        <input type="submit" value="  '.$followings.'" name="fllwrs" style="background: transparent; border: none;"/></div> <p style="float: right;">'.$ofniles.'</p>
                        <p>'.$namee.", ".$surnamee.'</p>  
                        <div class="hidden"> '.$comments.'</div><br>                         
                    </div>';
 }elseif($Onlines == '0'){
     $ofniles = 'Offline';
       $fllwrs = '<div class="fllwinbox" style="background-color:#ff7f7f"><div class="fllwtxt">           
                        <input type="submit" value=" '. $followings.'"  name="fllwrs" style="background: transparent; border: none;"/></div> <p style="float: right;">'.$ofniles.'</p>
                        <p>'.$namee.", ".$surnamee.'</p>
                       <div class="hidden">'. $comments.' </div><br>
                       </div>';        
}
}
if($_SERVER['REQUEST_METHOD']== 'POST'){
    if(isset($_POST['fllws'])){    
$_SESSION['userUsername'] = $sqlll['Username'];
$_SESSION['userName'] = $sqlll['Name'];
$_SESSION['userSurname'] = $sqlll['Surname'];
$_SESSION['userEmail'] = $sqlll['Email'];
$_SESSION['userSpecialty'] = $sqlll['Specialty'];
$_SESSION['userDays'] = $sqlll['days'];
$_SESSION['userMonth'] = $sqlll['month'];
$_SESSION['userYear'] = $sqlll['year'];
$_SESSION['userGender'] = $sqlll['Gender'];
$_SESSION['userTime'] = $sqlll['time'];
$_SESSION['userComment'] = $sqlll['Comment'];
if(isset($sqlll['Website'])){
$_SESSION['userWebsite'] = $sqlll['Website'];
$_SESSION['userFollowing'] = $sqlll['Following'];
}
if(isset($_SESSION['userUsername'])){
    header("Location: ../Userprofile/customuser.php");
}
}
if(isset($_POST['fllwrs'])){
 $_SESSION['userUsername'] = $quarei['Username'];
$_SESSION['userName'] = $quarei['Name'];
$_SESSION['userSurname'] = $quarei['Surname'];
$_SESSION['userEmail'] = $quarei['Email'];
$_SESSION['userSpecialty'] = $quarei['Specialty'];
$_SESSION['userDays'] = $quarei['days'];
$_SESSION['userMonth'] = $quarei['month'];
$_SESSION['userYear'] = $quarei['year'];
$_SESSION['userGender'] = $quarei['Gender'];
$_SESSION['userTime'] = $quarei['time'];
$_SESSION['userComment'] = $quarei['Comment'];
if(isset($quarei['Website'])){
$_SESSION['userWebsite'] = $quarei['Website'];
$_SESSION['userFollowing'] = $quarei['Following'];
}
if(isset($_SESSION['userUsername'])){
    header("Location: ../Userprofile/customuser.php");
}   
} 
}
?>
<html lang="en">
    <head>
    <title>Innoform - <?php echo $_SESSION['Username'] ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/Profile.css"> 
    <link rel="stylesheet" href="../CSS/Main.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
<A href="Logout.php" style="
    padding: 5 1%;
    text-align: center;
    text-decoration: none;
    display: inline-block;">
    Logout</A>
       
       
        <?php navbar()?>
        <div class="leftfiller"></div>
        <div class="left-filler"></div>
<div class="fllwbox"> 
    <strong> 
    <p style="   
    text-align: center; 
    width: 100%; 
    height: auto; 
    padding: 5px;
    background-color: #d6ebf2">Following</p></strong>
    <div class="padders">
<form method="post">
<?php 
 if(isset($offn)){
    echo $offn;
 }else{
     echo "No followings";
 }
?>
               </form>
    </div>
                </div>
<div class="fllwbox">  
    <strong> <p style='
    text-align: center; 
    width: 100%; 
    height: auto; 
    padding: 5px;
    background-color: #d6ebf2'>Followers</p></strong>
    
    <div class="padders">
 <form method="post">   
<?php 
if(isset($fllwrs)){
    echo $fllwrs;
}else{
    echo "No followers";
}
?>
 </form>
    </div>
</div>
        <div class="container" style="float: right;">         
      <div class="row">
      <div class="col-md-5 toppad" style="background-color: white; border-radius: 10px; height: 70%;">      
          <strong><h4 class="shad">Member Since:</h4></strong>         
          <br>
          <strong><h5 class="shad"><?php echo $_SESSION['time'] ?></h5></strong>
           <a href="Editprof.php" >Edit Profile</a>
           <div class="boxp" style="height: 70%">
               <div class="cover left">
               <p style="text-align: center;">My posts</p>
              <hr>
           <?php echo my_loop() ?>
           </div>
           </div>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
            
          <div class="panel panel-info">
            <div class="panel-heading">
            <div class="panel-body">
              <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../Images/Home.png"> </div>
                  <tabb>
                      <div class=" col-md-9 col-lg-9 " style="height: 70%;">
                   
                  <table class="table table-user-information">
                    <tbody>
<div class="panel-title" style="background-color: white; opacity: 0.8; border-radius: 10px; white-space: nowrap;"><h3><?php echo $_SESSION['Name'].', '.$_SESSION['Surname'] ?></h3>
</div>
                    <hr><div class="filler"></div>
                        <tr> 
                        <td>Username</td>
                        <td><?php echo $_SESSION['Username'];?>
                      </tr>
                      <tr>
                        <td>Name</td>
                        <td><?php echo $_SESSION['Name'];?>
                      </tr>
                      <tr>
                        <td>SurName</td>
                        <td><?php echo $_SESSION['Surname']?>
                      </tr>
                      <tr>
                        <td>Department:</td>
                        <td><?php echo $_SESSION['Specialty']?>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td><?php echo $_SESSION['days']. "/" .$_SESSION['month']. "/" .$_SESSION['year'] ?>
                      </tr>
                             <tr>
                        <td>Gender</td>
                        <td><?php echo $_SESSION['Gender']?>
                             </tr>
                      <tr>
                        <td>Email</td>
                        <td><?php echo $_SESSION['Email']?>         
                      </tr>
                       <tr>
                        <td>Comment</td>
                        <td><?php echo $_SESSION['Comment']?>
                     </tr>
                      </tbody>
                    </table>
                </div>
                  </tabb>
                </div>             
              </div> 
            </div>
          </div>
                          
        </div>
      </div>
    </div>
        <div class="filler two"></div>
    <div class="footer">
        <h2> Made by Youri Bontekoe</h2>
    </div>
</body>
</html>
