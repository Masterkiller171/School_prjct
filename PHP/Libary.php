<?php
$dec = 'style="text-decoration: none;" color: #705090;';

$butreg = '
    color: #705090;
    padding: 5 1%;
    text-align: center;
    text-decoration: none;
    float: right;
    display: absolute;';

$butout = '
    color: #705090;
    padding: 5 1%;
    text-align: center;
    text-decoration: none;
    float: left;
    display: absolute;';

//Loop on profile page for posts
$myloop='<div class="filler1"></div>
         <div class="cover left">
         <div class="box2 shadow"> Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum... <div class="btn">
         <a href="Post.php">Read more...</a></div></div></div>';

//Link to login page
$Login ='<a href ="Reg.php"> Please Login</a>';

//Link to Create Post page
$Create ='<a href="Post-input.php">Create post</a>';

//The navbar for (almost) every page
$navbar =' 
    <nav>
   <ul>
       <li class="sub-menu-parent"><a href="../PHP/index.php" '. $dec .'> Home</a>
       </li>
     <li class="sub-menu-parent">
       <a '. $dec .'> Posts</a>
       <ul class="sub-menu">
         <li><a href="Post-page.php" '. $dec .'>New Posts</a></li>
         <li><a href="Post-page.php" '. $dec .'>Hot Posts</a></li>
       </ul>
     </li>
     <a href="Post-input.php" class="sub-menu-parent" >Create post</a>
     <li class="sub-menu-parent"><a '. $dec .'>Projects</a>
       <ul class="sub-menu">
         <li><a href="../PHP/Projects.php" '. $dec .'>New Projects</a></li>
         <li><a href="../PHP/Projects.php" '. $dec .'>Hot Projects</a></li>
       </ul></li>
        <li class="sub-menu-parent"><a '. $dec .'>Support</a>
       <ul class="sub-menu">
         <li><a href="../PHP/Rules.php" '. $dec .'>Rules</a></li>
         <li><a href="../PHP/Contact.php" '. $dec .'>Contact</a></li>
       </ul></li>
       <li class="sub-menu-parent"><a '. $dec .'>History</a>
       <ul class="sub-menu">
         <li><a href="../PHP/" '. $dec .'>Post History</a></li>
         <li><a href="../PHP/" '. $dec .'>Comment History</a></li>
       </ul></li>
       <li class="sub-menu-parent"><a '. $dec .'>About us</a>
       <ul class="sub-menu">
         <li><a href="../PHP/Aboutus.php" '. $dec .'>Our project</a></li>
         <li><a href="../PHP/" '. $dec .'>Background story</a></li>
       </ul></li>
   </ul>
   
 </nav>
    <div class="filler two"></div>';

$navbaradmin =' <nav>
     <ul>
       <li class="sub-menu-parent"><a href="../PHP/index.php" '. $dec .'> Home</a>
       </li>
     <li class="sub-menu-parent">
       <a '. $dec .'> Posts</a>
       <ul class="sub-menu">
         <li><a href="Post-page.php" '. $dec .'>New Posts</a></li>
         <li><a href="Post-page.php" '. $dec .'>Hot Posts</a></li>
       </ul>
     </li>
     <a href="Post-input.php" class="sub-menu-parent" '. $dec .'>Create post</a>
     <li class="sub-menu-parent"><a '. $dec .'>Projects</a>
       <ul class="sub-menu">
         <li><a href="../PHP/Projects.php" '. $dec .'>New Projects</a></li>
         <li><a href="../PHP/Projects.php" '. $dec .'>Hot Projects</a></li>
       </ul></li>
        <li class="sub-menu-parent"><a '. $dec .'>Support</a>
       <ul class="sub-menu">
         <li><a href="../PHP/Rules.php" '. $dec .'>Rules</a></li>
         <li><a href="../PHP/Contact.php" '. $dec .'>Contact</a></li>
       </ul></li>
       <li class="sub-menu-parent"><a '. $dec .'>History</a>
       <ul class="sub-menu">
         <li><a href="../PHP/" '. $dec .'>Post History</a></li>
         <li><a href="../PHP/" '. $dec .'>Comment History</a></li>
       </ul></li>
       <li class="sub-menu-parent"><a '. $dec .'>About us</a>
       <ul class="sub-menu">
         <li><a href="../PHP/Aboutus.php" '. $dec .'>Our project</a></li>
         <li><a href="../PHP/" '. $dec .'>Background story</a></li>
       </ul></li>
       <li class="sub-menu-parent"><a '. $dec .'>logboek</a>
       <ul class="sub-menu">
         <li><a href="../SCL/PHP/Verslag.php" '. $dec .'>Verslag</a></li>
             <li><a href="../SCL/PHP/logboek.php" '. $dec .'>Logboek</a></li>
       </ul></li>
   </ul>
 </nav>
    <div class="filler two"></div>';

//$logout = ' <A href="" style="color: Blue;
//    padding: 5 1%;
//    text-align: center;
//    text-decoration: none;
//    display: inline-block;
//    background-color: lightblue;" onclick=" '. logout($conn)  . ' " >
//    Logout</A>';
