<?php
include 'Functions.php';
$id = $_SESSION['id'];
$Following = $conn -> query("SELECT Following FROM userinfo WHERE id='$id'");
foreach($Following as $out){
   $following =  implode($out);
}
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
if($_SERVER['REQUEST_METHOD']== 'POST'){
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
        <div class="fllwbox"><br>
            <form method="post">
                <div class="fllwinbox"><div class="fllwtxt">
                        <input type="submit" value="go to <?php echo $following ?> 's"style="background: transparent; border: none;"> 
                            <br><?php echo $following .'- '.$name.', '.$surname .'<br>'. $comment?>
                    </div></div>
            </form>
        </div>
     <div class="container">
      <div class="row">
      <div class="col-md-5  toppad">
          
          <strong><h4 class="shad">Member Since:</h4></strong>
          <br>
          <strong><h5 class="shad"><?php echo $_SESSION['time'] ?></h5></strong>
           <a href="Editprof.php" >Edit Profile</a>
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
              <div class="panel-title"><h3><?php echo $_SESSION['Name'].','.$_SESSION['Surname'] ?></h3>
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
            <div class="filler two">
    </div>
    <div class="footer">
        <h1> Made by Youri Bontekoe</h1>
    </div>
</body>
    </body>
</html>
