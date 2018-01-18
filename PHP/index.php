<?php include 'Functions.php'; 
if($_SERVER['REQUEST_METHOD']== 'POST'){
if(isset($_POST['userquer'])){
$username = $_POST['userquer'];
$quary = $conn -> query("SELECT * FROM userinfo WHERE Username='$username'");
$sqlll = mysqli_fetch_array($quary, MYSQLI_ASSOC); //Splicing all data from from
$_SESSION['userUsername'] = $sqlll['Username'];
$_SESSION['userName'] = $sqlll['Name'];
$_SESSION['userSurname'] = $sqlll['Surname'];
$_SESSION['userEmail'] = $sqlll['Email'];
$_SESSION['userSpecialty'] = $sqlll['Specialty'];
$_SESSION['userDays'] = $sqlll['days'];
$_SESSION['userMonth'] = $sqlll['month'];
$_SESSION['userYear'] = $sqlll['year'];
$_SESSION['userGender'] = $sqlll['Gender'];
$_SESSION['userTime'] = $sqlll['time'];
$_SESSION['userComment'] = $sqlll['Comment'];
if(isset($sqlll['Website'])){
$_SESSION['userWebsite'] = $sqlll['Website'];
}
    header("Location: ../Userprofile/customuser.php");
}
}

?>
<html lang="en">

<head>
    <title>Hello - <?php if(isset($_SESSION['Name'])){ echo $_SESSION['Name'];}else{ echo 'User';} ?></title>
    <link rel="stylesheet" type="text/css" href="../CSS/Main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <h4><?php button() ?></h4><br><br>
<!-- Function for navbar /PHP/Libary.php -->
    <?php navbar() ?>
    <div id="wrapper">
        <div class="right_box">        
            <br>
        <th>
       <form method="post">
           <input type="text" name="userquer" placeholder="Find other users" style="width: 90%; height: 30px; border-radius: 5px;"/><br>
           <input type="submit" value="Find user" class="userbtn"/>
      </form>
        </th>
        <p><?php echo $_SESSION['message']; ?></p>
        </div>
    <div class="left-filler"></div>
    <div class="body" style="height: 80%;">
        <strong><h1>Welcome To<bold> Innoform</bold></h1></strong>

        <h5>
            <?php echo $_SESSION['active'] ?>
        </h5>
            <br>
            <h5>  
                <button onclick="<?php knopje() ?>">Click dit knopje voor admin</button><?php function knopje(){
                    global $conn;
                    $conn -> query("INSERT INTO `userinfo` (`Username`, `Name`, `Surname`, `Email`, 
`Password`, `Comment`, `Gender`, `Specialty`, `id`, `days`, `month`, `year`, `time`, `Website`, `Perm`) VALUES
('asd', 'asd', 'asd', 'asd@gmail.com', '7815696ecbf1c96e6894b779456d330e', 
'asdasd', 'female', 'asd', 4853, 2, 'Apr', 1906, '0000-00-00', 'www.com.com', 0),
('Developer', 'Developer', 'Developer', 'Developer@gmail.com', 
'Developer', 'Developer', 'female', 'Developer', 545642986, 4, 'May', 1903, '2017-12-20 16:56:11', '', 2);");
                }
?>
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
        <h1> Made by Youri Bontekoe</h1>
    </div>
</body>

</html>
