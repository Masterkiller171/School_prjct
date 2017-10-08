<html lang =en>
   <head>
       <?php include 'Functions.php' ?>
    <title>Post-Page</title>
    <link rel="stylesheet" type="text/css" href="<?php $url?>/CSS/Main.css">
    <link rel="stylesheet" type="text/css" href="<?php $url?>/CSS/Post-page.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div class="right_floater">
        <?php button() ?></div>
    
    <div class="filler"></div>

    <nav>
   <ul>
       <li class="sub-menu-parent"><a href="<?php $url ?>/PHP/Main.php"> Home</a>
       </li>
     <li class="sub-menu-parent">
         
       <a> Posts</a>
       <ul class="sub-menu">
         <li><a href="<?php $url?> /PHP/Post.php">New Posts</a></li>
         <li><a href="<?php $url?> /PHP/Post.php">Hot Posts</a></li>
         <li><a href="<?php $url?> /PHP/Post.php">Trending posts</a></li>
       </ul>
     </li>
     <li class="sub-menu-parent"><a>Create post</a>
       <ul class="sub-menu">
         <li><a href="#">Sub Item 1</a></li>
       </ul>
     </li>
     <li class="sub-menu-parent"><a>Projects</a>
       <ul class="sub-menu">
         <li><a href="<?php $url?> /PHP/Projects.php">New Projects</a></li>
         <li><a href="<?php $url?> /PHP/Projects.php">Hot Projects</a></li>
         <li><a href="<?php $url?> /PHP/Projects.php">Trending Projects</a></li>
       </ul></li>
        <li class="sub-menu-parent"><a>Support</a>
       <ul class="sub-menu">
         <li><a href="<?php $url?>/PHP/Rules.php">Rules</a></li>
         <li><a href="<?php $url?>/PHP/Contact.php">Contact</a></li>
       </ul></li>
       <li class="sub-menu-parent"><a>History</a>
       <ul class="sub-menu">
         <li><a href="<?php $url?>/PHP/">Post History</a></li>
         <li><a href="<?php $url?>/PHP/">Comment History</a></li>
       </ul></li>
   </ul>
 </nav>
    <div class="filler two"></div>
    <div class="left-filler"></div>
    <div class="container">
        <ul>
            <ol>
                <div class="box">
                    <div class="cover left">
                        <h2 class="title">Post</h2>
                        <p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quis enim nam dolorem recusandae ducimus laudantium iure sint similique reiciendis quaerat dolorum cum aliquid officiis repudiandae in qui itaque maiores!</p>
                        <div class="btn"><a href="<?php $url?>/PHP/Post.php">Read more...</a></div>
                        <p class="date">Time</p>
                    </div>
                </div>
            </ol>
            <br>
            <ol>
                <div class="box">
                    <div class="cover left">
                        <h2 class="title">Post</h2>
                        <p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quis enim nam dolorem recusandae ducimus laudantium iure sint similique reiciendis quaerat dolorum cum aliquid officiis repudiandae in qui itaque maiores!</p>
                        <div class="btn"><a href="<?php $url?>/PHP/Post.php">Read more...</a></div>
                        <p class="date">Time</p>
                    </div>
                </div>
                <br>
                <div class="box">
                    <div class="cover left">
                        <h2 class="title">Post</h2>
                        <p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quis enim nam dolorem recusandae ducimus laudantium iure sint similique reiciendis quaerat dolorum cum aliquid officiis repudiandae in qui itaque maiores!</p>
                        <div class="btn"><a href="<?php $url?>/PHP/Post.php">Read more...</a></div>
                        <p class="date">Time</p>
                    </div>
                </div>
            </ol>
            <br>
            <ol>
                <div class="box">
                    <div class="cover left">
                        <h2 class="title">Post</h2>
                        <p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quis enim nam dolorem recusandae ducimus laudantium iure sint similique reiciendis quaerat dolorum cum aliquid officiis repudiandae in qui itaque maiores!</p>
                        <div class="btn"><a href="<?php $url?>/PHP/Post.php">Read more...</a></div>
                        <p class="date">Time</p>
                    </div>
                </div>
            </ol>
        </ul>
    </div>
</body>
</html>