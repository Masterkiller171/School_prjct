<html lang="en">

<head>
    <?php include 'Functions.php'?>
    <title>InnoForm</title>
    <link rel="stylesheet" type="text/css" href="<?php $url?> /CSS/Main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="right_floater">
        <div class="right_floater">
        <?php button() ?></div>
    </div>
    <div class="filler"></div>
    <nav>
   <ul>
       <li class="sub-menu-parent"><a href="<?php $url ?>/PHP/Main.php"> Home</a>
       </li>
     <li class="sub-menu-parent">
         
       <a> Posts</a>
       <ul class="sub-menu">
         <li><a href="<?php $url ?> /PHP/post-page.php">New Posts</a></li>
         <li><a href="<?php $url ?> /PHP/post-page.php">Hot Posts</a></li>
         <li><a href="<?php $url ?> /PHP/post-page.php">Trending</a></li>
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
         <li><a href="<?php $url ?>/PHP/Projects.php">Projects</a></li>
       </ul></li>
        <li class="sub-menu-parent"><a>Support</a>
       <ul class="sub-menu">
         <li><a href="<?php $url?>/PHP/Contact.php">Contact</a></li>
       </ul></li>
   </ul>
 </nav>
    <div class="filler two"></div>
    <div class="left-filler"></div>
    <div class="body">
        <strong><h1>Title</h1></strong>
        <ol>
            <li>Don't spam the post section.</li>
            <br/>
            <li>Don't insult others</li>
            <br/>
            <li>Don't upload inpropriate content.</li>
            <br/>
            <li>lol</li>
            <br/>
            <li>lol</li>
            <br/>
            <li>lol</li>
        </ol>
    </div>


</body>

</html>
