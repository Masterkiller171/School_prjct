<?php
include '../PHP/Functions.php';
$id = $_SESSION['id'];
$_SESSION['message'] = '';
    $fllw = $conn -> query("SELECT * FROM following WHERE id='$id'");
    $fllw2 = $conn -> query("SELECT Following2 FROM following WHERE id='$id'");
    $fllw3 = $conn -> query("SELECT Following3 FROM following WHERE id='$id'");
    $fllw4 = $conn -> query("SELECT Following4 FROM following WHERE id='$id'");
    $fllw5 = $conn -> query("SELECT Following5 FROM following WHERE id='$id'");
    $sql = $fllw -> fetch_assoc();
    
if($_SERVER['REQUEST_METHOD']== 'POST'){
   if($_SESSION['active'] > 0){   
    $follow = $_SESSION['userUsername'];
    //$addtabl = "ALTER TABLE `following` ADD '$follow' VARCHAR( 255 ) NOT NULL";
    //$addfllwr = "UPDATE userinfo SET Following = '$follow'";
    //$conn -> query($addfllwr);
    if($sql['Following1'] === NULL){
        $conn -> query("UPDATE following SET Following1 = '$follow' WHERE id='$id'");
    }
    elseif($fllw2 === NULL){
        $conn -> query("UPDATE following SET Following2 = '$follow' WHERE id='$id'");
    }
    elseif($fllw3 === NULL){
        $conn -> query("UPDATE following SET Following3 = '$follow' WHERE id='$id'");
    }
    elseif($fllw4 === NULL){
        $conn -> query("UPDATE following SET Following4 = '$follow' WHERE id='$id'");
    }
    elseif($fllw5 === NULL){
        $conn -> query("UPDATE following SET Following5 = '$follow' WHERE id='$id'");
    }
        
   }else{
        $_SESSION['message'] = "To perform that action you must be signed in";
       header("Location: ../PHP/Login.php");
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
    </body>
</html>