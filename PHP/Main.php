
<html lang="en">

<head>
    <title>InnoForm</title>
    <?php include 'Functions.php';?>
    <link rel="stylesheet" type="text/css" href="<?php $url?>/CSS/Main.css">
    <link rel="stylesheet" type="text/css" href="P<?php $url?>/CSS/Reg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div class="right_floater">
    <h4><a href="<?php $url?> /PHP/Reg.php" 
    style="<?php echo$butreg ?>">
    <?php button() ?></a></h4></div>
    <div class="filler"></div>

    <nav>
   <ul>
       <li class="sub-menu-parent"><a href="<?php $url ?>/PHP/Main.php"> Home</a>
       </li>
     <li class="sub-menu-parent">
       <a> Posts</a>
       <ul class="sub-menu">
         <li><a href="<?php $url?> /PHP/Post-page.php">New Posts</a></li>
         <li><a href="<?php $url?> /PHP/Post-page.php">Hot Posts</a></li>
         <li><a href="<?php $url?> /PHP/Post-page.php">Trending</a></li>
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
       <li class="sub-menu-parent"><a>About us</a>
       <ul class="sub-menu">
         <li><a href="<?php $url?>/PHP/Aboutus.php">Our project</a></li>
         <li><a href="<?php $url?>/PHP/">Background story</a></li>
       </ul></li>
   </ul>
 </nav>
    <div class="filler two"></div>
    <div class="left-filler"></div>
        <div class="right_box">
        <th>
            <li>
                <a href="<?php $url?>Post-page.php">Post</a>
            </li>
            <li>
                <a href="<?php $url?>Post-page.php">Latest posts</a>
            </li>
            <li>
                <a href="<?php $url?>Post-page.php">New Posts</a>
            </li>
            <li>
                <a href="<?php $url?>Projects.php">Projects</a>
            </li>
            <li>
                <a href="<?php $url?>Post-page.php">Popular posts</a>
            </li>

        </th>
    </div>
    <div class="left-filler"></div>
    <div class="body">
        <strong><h1>Welcome To<bold> Innoform</bold></h1></strong>

        <h5>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
            Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. 
        </h5>
            <br>
            <h5>  
            Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. 
            Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
            </h5>
            <br>
            <h5>  
            Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. 
            Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
            </h5>
            <br>
            <h5>  
            Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. 
            Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
            </h5>
            <br>
            <h5>  
            Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. 
            Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
            </h5>
</div>

   
    <div class="filler two">
    </div>
    <div class="footer">
        <h1> Made By Tijmen And Youri</h1>
    </div>
</body>

</html>
