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
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
          <h4>Member Since:</h4>
          <br>
          <h5><?php echo $today ?></h5>
           <a href="<?php $url?>/PHP/Editprof.php" >Edit Profile</a>
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
                        <td><?php "SELECT Username, active FROM users WHERE username='".$Username."' AND password='".$Password."' AND active='1'"?>
                            <button> edit</button><button class="">cancel</button></td>
                      </tr>
                      <tr>
                        <td>Name</td>
                        <td><?php "SELECT Name, active FROM users WHERE username='".$Username."' AND password='".$Password."' AND active='1'"?>
                        <button> edit</button><button class="">cancel</button></td>
                      </tr>
                      <tr>
                        <td>SurName</td>
                        <td><?php "SELECT Surname, active FROM users WHERE username='".$Username."' AND password='".$Password."' AND active='1'"?>
                        <button> edit</button><button class="">cancel</button></td>
                      </tr>
                      <tr>
                        <td>Department:</td>
                        <td><?php "SELECT Specialty, active FROM users WHERE username='".$Username."' AND password='".$Password."' AND active='1'"?>
                        <button> edit</button><button class="">cancel</button></td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td><?php "SELECT Date, active FROM users WHERE username='".$Username."' AND password='".$Password."' AND active='1'"?>
                        <button> edit</button><button class="">cancel</button></td>
                      </tr>
                             <tr>
                        <td>Gender</td>
                        <td><?php "SELECT Gender, active FROM users WHERE username='".$Username."' AND password='".$Password."' AND active='1'"?>
                        <button> edit</button><button class="">cancel</button></td>
                             </tr>
                      <tr>
                        <td>Email</td>
                        <td><?php "SELECT Email, active FROM users WHERE username='".$Username."' AND password='".$Password."' AND active='1'"?> 
                        <div id='content'>
<input type='button' id='hideshow' value='show'></div>
                            <script> 
                             show();
                            </script>
                                   
                      </tr>
                       <tr>
                        <td>Comment</td>
                        <td><?php "SELECT Comment, active FROM users WHERE username='".$Username."' AND password='".$Password."' AND active='1'"?>
                            <button class="">edit</button><button id="hide">cancel</button></td>
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

