<?php
include 'Functions.php';
include 'Reg.php';

$urll = "../<?php $url?>/PHP/Profile.php";

if($_SERVER['REQUEST_METHOD']== 'POST'){
    if(isset($_POST["inputiet"])){
        $update = $conn -> query("UPDATE `userinfo` SET `Email`=". $_POST["inputiet"] ."  WHERE `active` = 1");
    }
    if(isset($_POST['no'])){
        
    } 
}
    
?>
<html lang="en">
<head>
    <title>Verify</title>
    <link rel="stylesheet" type="text/css" href="../CSS/Main.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Reg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body onload="disabled()">
    <script type="text/javascript">
    $('.subject-list').on('change', 
            function() {
		    $('.subject-list').not(this).prop('checked', false);  
		});
    </script>
    <div class="login-box" style="height: 15%;">
        <text-align-cent>
            <div class="u-form">
    <p3>You're almost done!</p3>
    
    <?php echo '<p3>Is this "'. $Email .'" your email?</p3>';?>
    <br>
    <label for="yes">Yes</label>
    <input type="checkbox" name="yes" class="subject-list" value="1" id="yes">
    <input type="ver" id="outmail" name="inputiet" required>
                <script type="text/javascript">
        document.getElementById('yes').onchange = function() {
            document.getElementById('outmail').disabled = !this.checked;
              };
                    
    function disabled(){
        document.getElementById('outmail').disabled = true;
}; 
        </script>
    <label for="no">No</label>
    <input type="checkbox" name="no" class="subject-list" value="2">
    <br>
                    <button name ="submit" class="button buttonc" onlcick="<?php ?>">Verify!</button>
    </text-align-cent> 
</body>
</html>