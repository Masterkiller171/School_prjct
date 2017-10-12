<head>
    <link rel="stylesheet" type="text/css" href="<?php $url?>/CSS/Main.css">
    <link rel="stylesheet" type="text/css" href="<?php $url?>/CSS/Post-input.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $JSim ?>
    <?php echo $JSimvs?>
    <title>Creating Form- <?php echo $Username?></title>
</head>

<body>
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
             <a href="<?php $url ?> /PHP/Post-input.php">Create post</a>
         </li>
       </ul>
     </li>
     <li class="sub-menu-parent"><a href="#">Projects</a>
       <ul class="sub-menu">
         <li><a href="#">Sub Item 1</a></li>
       </ul></li>
        <li class="sub-menu-parent"><a>Support</a>
       <ul class="sub-menu">
         <li><a href="<?php $url?>/PHP/Rules.php">Rules</a></li>
         <li><a href="<?php $url?>/PHP/Contact.php">Contact</a></li>
       </ul></li>
   </ul>
 </nav>
    <text-align-cent>
        <div class="post-box">

            <div class="filler"></div>
            <p1>Title</p1>
            <form class="signup">

                <div class="u-form">
                    <input type="title" placeholder="Title..." style="margin-left: 121px; margin-top: 13px; width: 575px;">
                </div>
                <p1>Title</p1>
                <div class="u-form">
                    <input type="title" placeholder="Title..." style="height: 47px; width: 574px; margin-left: 124px; margin-top: 13px;">
                </div>
                <p1>Title</p1>
                <div class="u-form">
                    <textarea name="textarea" placeholder="Explain your problem" style="margin-left: 126px; margin-top: 62px; width: 572px; height: 193px;"></textarea>
                </div>
                <button class="button buttonc" style="margin-top: 2px; margin-left: 129px; width: 568px;">Post...</button>
            </form>
        </div>
    </text-align-cent>





</body>