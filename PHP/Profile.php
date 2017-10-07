<?php
$info = ['SELECT `userinfo`.`Username`,
    `userinfo`.`Name`,
    `userinfo`.`Password`,
    `userinfo`.`Surname`,
    `userinfo`.`Email`,
    `userinfo`.`Picture`,
    `userinfo`.`Comment`,
    `userinfo`.`Gender`,
    `userinfo`.`Specialty`,
    `userinfo`.`Hash`
FROM `school_project`.`userinfo`;
']

?>
<html lang="en">
    <head>
        <?php include 'Functions.php';  ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php $url?>/CSS/Profile.css"> 
    <link rel="stylesheet" href="<?php $url?>/CSS/Main.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           <a href="edit.html" >Edit Profile</a>


       <br>
<p class=" text-info">May 05,2014,03:00 PM </p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Youri Bontekoe</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="#"> </div>

                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Department:</td>
                        <td><?php echo $info['Specialty']?></td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>25/05/2001</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td>Female</td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td>dorecht,netherlands</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com">info@support.com</a></td>
                      </tr>
                       <tr>
                        <td>Phone Number</td>
                    <br><td>345345345345(Mobile)</td>
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
    </body>
</html>