<?php include 'Functions.php'; 
 error_reporting(E_ALL);
?>
<html lang="en">

<head>
    <title>Hello - <?php $_SESSION['Name'] ?></title>
    <link rel="stylesheet" type="text/css" href="../CSS/Main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <h4><?php button() ?></h4><br><br>
<!-- Function for navbar /PHP/Libary.php -->
    <?php navbar() ?>
    <div id="wrapper">
        <div class="right_box">         
        <th>
            <ol>
                <a href="Post-page.php" class="bruv">Post</a>
            </ol>
            <ol>
                <a href="Post-page.php" class="bruv">Latest posts</a>
            </ol>
            <ol>
                <a href="Post-page.php" class="bruv">New Posts</a>
            </ol>
            <ol>
                <a href="Projects.php" class="bruv">Projects</a>
            </ol>
            <ol>
                <a href="Post-page.php" class="bruv">Popular posts</a>
            </ol>

        </th>
    </div>
    
    <div class="left-filler"></div>
    <div class="body" style="height: 80%;">
        <strong><h1>Welcome To<bold> Innoform</bold></h1></strong>

        <h5>
            <?php echo $_SESSION['active'] ?>
        </h5>
            <br>
            <h5>  
            test u test
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
    </div>
   
    <div class="filler two">
    </div>
    <div class="footer">
        <h1> Made by Tijmen and Youri</h1>
    </div>
</body>

</html>
