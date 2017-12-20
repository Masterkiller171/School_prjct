<?php
$_SESSION['dec'] = 'style="text-decoration: none;" color: #705090;';

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
       <li class="sub-menu-parent"><a href="../PHP/index.php" '. $_SESSION['dec'] .'> Home</a>
       </li>
     <li class="sub-menu-parent">
       <a '. $_SESSION['dec'] .'> Posts</a>
       <ul class="sub-menu">
         <li><a href="Post-page.php" '. $_SESSION['dec'] .'>New Posts</a></li>
         <li><a href="Post-page.php" '. $_SESSION['dec'] .'>Hot Posts</a></li>
       </ul>
     </li>
     <a href="Post-input.php" class="sub-menu-parent" >Create post</a>
     <li class="sub-menu-parent"><a '. $_SESSION['dec'] .'>Projects</a>
       <ul class="sub-menu">
         <li><a href="../PHP/Projects.php" '. $_SESSION['dec'] .'>New Projects</a></li>
         <li><a href="../PHP/Projects.php" '. $_SESSION['dec'] .'>Hot Projects</a></li>
       </ul></li>
        <li class="sub-menu-parent"><a '. $_SESSION['dec'] .'>Support</a>
       <ul class="sub-menu">
         <li><a href="../PHP/Rules.php" '. $_SESSION['dec'] .'>Rules</a></li>
         <li><a href="../PHP/Contact.php" '. $_SESSION['dec'] .'>Contact</a></li>
       </ul></li>
       <li class="sub-menu-parent"><a '. $_SESSION['dec'] .'>History</a>
       <ul class="sub-menu">
         <li><a href="../PHP/" '. $_SESSION['dec'] .'>Post History</a></li>
         <li><a href="../PHP/" '. $_SESSION['dec'] .'>Comment History</a></li>
       </ul></li>
       <li class="sub-menu-parent"><a '. $_SESSION['dec'] .'>About us</a>
       <ul class="sub-menu">
         <li><a href="../PHP/Aboutus.php" '. $_SESSION['dec'] .'>Our project</a></li>
         <li><a href="../PHP/" '. $_SESSION['dec'] .'>Background story</a></li>
       </ul></li>
   </ul>
 </nav>
    <div class="filler two"></div>';

$navbaradmin =' <nav>
     <ul>
       <li class="sub-menu-parent"><a href="../PHP/index.php" '. $_SESSION['dec'] .'> Home</a>
       </li>
     <li class="sub-menu-parent">
       <a '. $_SESSION['dec'] .'> Posts</a>
       <ul class="sub-menu">
         <li><a href="Post-page.php" '. $_SESSION['dec'] .'>New Posts</a></li>
         <li><a href="Post-page.php" '. $_SESSION['dec'] .'>Hot Posts</a></li>
       </ul>
     </li>
     <a href="Post-input.php" class="sub-menu-parent" '. $_SESSION['dec'] .'>Create post</a>
     <li class="sub-menu-parent"><a '. $_SESSION['dec'] .'>Projects</a>
       <ul class="sub-menu">
         <li><a href="../PHP/Projects.php" '. $_SESSION['dec'] .'>New Projects</a></li>
         <li><a href="../PHP/Projects.php" '. $_SESSION['dec'] .'>Hot Projects</a></li>
       </ul></li>
        <li class="sub-menu-parent"><a '. $_SESSION['dec'] .'>Support</a>
       <ul class="sub-menu">
         <li><a href="../PHP/Rules.php" '. $_SESSION['dec'] .'>Rules</a></li>
         <li><a href="../PHP/Contact.php" '. $_SESSION['dec'] .'>Contact</a></li>
       </ul></li>
       <li class="sub-menu-parent"><a '. $_SESSION['dec'] .'>History</a>
       <ul class="sub-menu">
         <li><a href="../PHP/" '. $_SESSION['dec'] .'>Post History</a></li>
         <li><a href="../PHP/" '. $_SESSION['dec'] .'>Comment History</a></li>
       </ul></li>
       <li class="sub-menu-parent"><a '. $_SESSION['dec'] .'>About us</a>
       <ul class="sub-menu">
         <li><a href="../PHP/Aboutus.php" '. $_SESSION['dec'] .'>Our project</a></li>
         <li><a href="../PHP/" '. $_SESSION['dec'] .'>Background story</a></li>
       </ul></li>
       <li class="sub-menu-parent"><a '. $_SESSION['dec'] .'>logboek</a>
       <ul class="sub-menu">
         <li><a href="../SCL/PHP/Verslag.php" '. $_SESSION['dec'] .'>Verslag</a></li>
             <li><a href="../SCL/PHP/logboek.php" '. $_SESSION['dec'] .'>Logboek</a></li>
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
