<?php
include 'Functions.php';
include 'Reg.php';
?>
<html lang="en">
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php $url?>/CSS/Profile.css"> 
    <link rel="stylesheet" href="<?php $url?>/CSS/Main.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <A href="" style="color: Blue;
    padding: 5 1%;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    background-color: lightblue;" onclick="" >Logout</A>
       
       
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
          <h4>Member Since:</h4>
          <br>
          <h5><?php echo $today ?></h5>
           <a href="<?php $url?>/PHP/Editprof.php" >Edit Profile</a>
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
                        <td><?php "SELECT Username FROM userinfo WHERE id='$id ' AND active='1'"?>
                      </tr>
                      <tr>
                        <td>Name</td>
                        <td><?php "SELECT Name FROM userinfo WHERE id='$id ' AND active='1'"?>
                      </tr>
                      <tr>
                        <td>SurName</td>
                        <td><?php "SELECT Surname FROM userinfo WHERE id='$id ' AND active='1'"?>
                      </tr>
                      <tr>
                        <td>Department:</td>
                        <td><?php "SELECT Specialty FROM userinfo WHERE id='$id ' AND active='1'"?>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td><?php "SELECT Date FROM userinfo WHERE id='$id ' AND active='1'"?>
                      </tr>
                             <tr>
                        <td>Gender</td>
                        <td><?php "SELECT Gender FROM userinfo WHERE id='$id ' AND active='1'"?>
                             </tr>
                      <tr>
                        <td>Email</td>
                        <td><?php "SELECT Email FROM userinfo WHERE id='$id ' AND active='1'"?>         
                      </tr>
                       <tr>
                        <td>Comment</td>
                        <td><?php "SELECT Comment FROM userinfo WHERE id='$id ' AND active='1'"?>
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

