<?php
include '../PHP/Functions.php';
$id = $_SESSION['id'];
$_SESSION['message'] = '';
$follow = $_SESSION['userUsername'];
$Following = $conn -> query("SELECT Following FROM userinfo WHERE Username='$follow'");
foreach($Following as $out){
   $following =  implode($out);
}
if($_SERVER['REQUEST_METHOD']== 'POST'){
if(isset($_POST['fllwrs'])){
 if(isset($following)){
$quary = $conn -> query("SELECT * FROM userinfo WHERE Username='$following'");
if(isset($quary) AND !empty($quary)){
$sqlll = mysqli_fetch_array($quary, MYSQLI_ASSOC); //Splicing all data from from
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
}
 }else{
   if($_SESSION['active'] > 0){   
    //$addtabl = "ALTER TABLE `following` ADD '$follow' VARCHAR( 255 ) NOT NULL";
    $addfllwr = "UPDATE userinfo SET Following = '$follow' WHERE id='$id'";
    $conn -> query($addfllwr);
      //$conn -> query("UPDATE following SET Following1='$follow' WHERE Following1 IS NULL AND id='$id'");
      //$fllw1 = $conn -> query("SELECT * FROM following WHERE Following1 IS NULL AND id='$id'");
      //$fllw2 = $conn -> query("SELECT * FROM following WHERE Following2 IS NULL AND id='$id'");
      //$fllw3 = $conn -> query("SELECT * FROM following WHERE Following3 IS NULL AND id='$id'");
      //$fllw4 = $conn -> query("SELECT * FROM following WHERE Following4 IS NULL AND id='$id'");
      //$fllw5 = $conn -> query("SELECT * FROM following WHERE Following5 IS NULL AND id='$id'");
      //if($fllw1){
       //   $conn -> query("UPDATE following SET Following1='$follow' WHERE Following1 IS NULL AND id='$id'");
      //}elseif($fllw2){
      //    $conn -> query("UPDATE following SET Following2='$follow' WHERE Following2 IS NULL AND id='$id'");
      //}elseif($fllw3){
      //    $conn -> query("UPDATE following SET Following3='$follow' WHERE Following3 IS NULL AND id='$id'");
      //}elseif($fllw4){
      //    $conn -> query("UPDATE following SET Following4='$follow' WHERE Following4 IS NULL AND id='$id'");
      //}elseif($fllw5){
       //   $conn -> query("UPDATE following SET Following5='$follow' WHERE Following5 IS NULL AND id='$id'");
      //}
   
   }else{
        $_SESSION['message'] = "To perform that action you must be signed in";
       header("Location: ../PHP/Login.php");
   }
}
}
?>
<html lang="en">
    <head>
    <title>Innoform - <?php echo $_SESSION['userUsername'] ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/Profile.css"> 
    <link rel="stylesheet" href="../CSS/Main.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>      
        <?php navbar()?>
                <div class="fllwbox"><br>
            <form method="post">
                <div class="fllwinbox"><div class="fllwtxt"><input type="submit" name="fllwrs" value="<?php if(isset($following)){ echo $following; }else{ echo 'No followings';} /*.'-'. $name.','.$surname*/ ?>"
                    style="background: transparent; border: none;"> 
                    </div></div>
            </form>
        </div>
     <div class="container">
      <div class="row">
      <div class="col-md-5  toppad">
          <form method="post">
              <button type="submit"><strong>Follow <?php echo $_SESSION['userUsername']?></strong></button>
          </form>
          <strong><h4 class="shad">Member Since:</h4></strong>
          <br>
          <strong><h5 class="shad"><?php echo $_SESSION['userTime'] ?></h5></strong>          
           <div class="boxp shadow">
            <div class="cover left">
               <p style="text-align: center;">My posts</p>
               <p style="text-align: center;">------------------------------------------------------</p>
           <?php my_loop() ?>
            </div>
           </div>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <div class="panel-title"><h3><?php ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../Images/Home.png" style=""> </div>
                  <tabb>
                <div class=" col-md-9 col-lg-9 ">
                   
                  <table class="table table-user-information">
                    <tbody>
                        <tr> 
                        <td>Username</td>
                        <td><?php echo $_SESSION['userUsername'];?>
                      </tr>
                      <tr>
                        <td>Name</td>
                        <td><?php echo $_SESSION['userName'];?>
                      </tr>
                      <tr>
                        <td>SurName</td>
                        <td><?php echo $_SESSION['userSurname']?>
                      </tr>
                      <tr>
                        <td>Department:</td>
                        <td><?php echo $_SESSION['userSpecialty']?>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td><?php echo $_SESSION['userDays']. "/" .$_SESSION['userMonth']. "/" .$_SESSION['userYear'] ?>
                      </tr>
                             <tr>
                        <td>Gender</td>
                        <td><?php echo $_SESSION['userGender']?>
                             </tr>
                      <tr>
                        <td>Email</td>
                        <td><?php echo $_SESSION['userEmail']?>         
                      </tr>
                       <tr>
                        <td>Comment</td>
                        <td><?php echo $_SESSION['userComment']?>
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
            <div class="filler two">
    </div>
    <div class="footer">
        <h1> Made by Youri Bontekoe</h1>
    </div>
    </body>
</html>