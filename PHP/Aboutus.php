<?php

?>
<head>
    <title>InnoForm</title>
    <?php include 'Functions.php';?>
    <link rel="stylesheet" type="text/css" href="<?php $url?>/CSS/Main.css">
    <link rel="stylesheet" type="text/css" href="<?php $url?>/Reg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="right_floater">
        <h4><a href="<?php $url?> /PHP/Reg.php" 
    style="<?php echo$butreg ?>">
    <?php button() ?></a></h4></div>
    </div>
    <div class="filler"></div>
    <nav>
   <ul>
       <li class="sub-menu-parent"><a href="<?php $url ?>/PHP/Main.php"> Home</a>
       </li>
     <li class="sub-menu-parent">
         
       <a> Posts</a>
       <ul class="sub-menu">
         <li><a href="#">New Posts</a></li>
         <li><a href="#">Hot Posts</a></li>
         <li><a href="#">Trending</a></li>
       </ul>
     </li>
     <li class="sub-menu-parent"><a>Create post</a>
       <ul class="sub-menu">
         <li>
             <?php echo create_post() ?>
         </li>
       </ul>
     </li>
     <li class="sub-menu-parent"><a>Projects</a>
       <ul class="sub-menu">
         <li><a href="<?php $url ?> /PHP/Projects.php">Projects</a></li>
       </ul></li>
        <li class="sub-menu-parent"><a href="#">Support</a>
       <ul class="sub-menu">
         <li><a href="<?php $url?>/PHP/Contact.php">Contact</a></li>
       </ul></li>
   </ul>
 </nav>
    <div class="filler two"></div>
    <div class="left-filler"></div>
    <div class="body">
        <strong><h1>About us</h1></strong>
    </div>


</body>