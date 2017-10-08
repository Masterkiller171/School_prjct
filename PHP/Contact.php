<html lang="en">

<head>
    <title>Contact Page</title>
    <?php include 'Functions.php';?>
    <link rel="stylesheet" type="text/css" href="<?php $url?>/CSS/Main.css">
    <link rel="stylesheet" type="text/css" href="<?php $url?>/CSS/Reg.css">
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
     <li class="sub-menu-parent"><a href="#">Projects</a>
       <ul class="sub-menu">
         <li><a href="#">Sub Item 1</a></li>
       </ul></li>
        <li class="sub-menu-parent"><a>Support</a>
       <ul class="sub-menu">
         <li><a href="<?php $url?>/PHP/Rules.php">Rules</a></li>
       </ul></li>
   </ul>
 </nav>
    <div class="filler two"></div>
    <div class="left-filler"></div>
    <div class="body">
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
   
    </div>


</body>

</html>
