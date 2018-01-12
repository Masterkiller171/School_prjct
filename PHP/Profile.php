<?php
include 'Functions.php';
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
    </body>
</html>
