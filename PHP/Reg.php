<?php
include "Functions.php";
include "Jobs.php";


if($_SERVER['REQUEST_METHOD']== 'POST')
    {
    if(isset($_POST['password']) === isset($_POST['Passwordrpt']))//Checking if passwords are the same
        {   
$id = rand(1000,5000);
$Username = $conn-> real_escape_string($_POST['Username']);
$Email = $conn-> real_escape_string($_POST['Email']);
$Password= $_POST['password'];
$Name = $conn-> real_escape_string($_POST['Name']);
$Surname = $conn-> real_escape_string($_POST['Surname']);
$days = $_POST['days'];
$daysname = $_POST['-'];
$month = $_POST['month'];
$monthname = $_POST['--'];
$year = $_POST['year'];
$yearname = $_POST['---'];
$Comment = $conn-> real_escape_string($_POST['Comment']);

if(isset($yearname) == false){
    
if(isset($monthname) == false){
    
if(isset($daysname) == false){
    
//Checking if Job is filled in
if(isset($_POST["Job"]))
{
    $Specialty = $_POST["Job"] ;
}
else
{
    $Specialty =  "" ;
}

//Putting a new job into an array (work in progress)
//if(in_array($job,$jobs )){
//    return $job;
//}else{
//    array_push($jobs,"$job");
//}

//Defining variables for input and comparing 
$string_url= $_POST['Website'];
$reg_exp = "/^(http(s?):\/\/)?(www\.)+[a-zA-Z0-9\.\-\_]+(\.[a-zA-Z]{2,3})+(\/[a-zA-Z0-9\_\-\s\.\/\?\%\#\&\=]*)?$/";

//Checking if it's a valid url
if(preg_match($reg_exp, $string_url) == TRUE){
        
$Website =$string_url;

//Checking if comment contains less than 200 characters
if(200 >= strlen($_POST['Comment'])){
    
//Checking if gender equals male or female
if($gender == isset($_POST['Female']))
    {
    return $Gender = "F";
}
elseif($gender == isset($_POST['Male']))
    {
    return $Gender = "M";
}
elseif($gender !== isset($_POST['Female']) || isset($_POST['Male'])){
    $_SESSION['message'] = "Please select a gender";
}

/*Checking if the file is an actual picture*/
$picture_path = $conn->real_escape_string('images/'.$_FILES['avatar']['name']);//Path of picture
    if (preg_match ("!image!",$_FILES['avatar']['type']))
            {
        
//Putting picture into database
        if(copy($_FILES['avatar']['tmp_name'], $picture_path))
                {
            
            $_SESSION['Username'] = $Username;
            $_SESSION['picture'] = $picture_path;
            
            $time = date('Y-m-d H:i:s');
            $sql = $conn ->query("INSERT INTO userinfo (`Username`, `Name`, `Surname`, `Email`, `Password`, `avatar`, `Comment`, `Gender`, `Specialty`, `days`, `month`, `year`,`time`)"
            ."VALUES ('$Username','$Name',' $Surname',' $Email',' $Password',' $picture_path ','$Comment','$Gender'.'$Specialty'.'$days'.'$month'.'$year'.'$time')");
            $_SESSION['id'] = $id;
              //Registration succesfull
              if($conn->quert($sql) === true){
                  $_SESSION['message'] = 'Registration is Succesfull!';
                  $conn ->query("UPDATE `active` SET active = '1' WHERE id='. $id .'"); 
                  header("location: Profile.php"); 
}else{
     $_SESSION['message'] = "Registration has failed!"; 
     }
}else{
     $_SESSION['message'] = "File Upload Failed!";
     }              
}else{
     $_SESSION['message']= "Please only upload JPG, GIF or PNG images!";
     }
}else{
     $_SESSION['message'] = 'Please keep your story below 200 characters please!';
     }
}else{
     $_SESSION['message'] = 'Invalid website url!';
     }
}else{
     $_SESSION['message'] = "Please choose a day";
     }
}else{
     $_SESSION['message'] = "Please choose a month";
     }
}else{
     $_SESSION['message'] = "Please choose a year";
     }
}else{
     $_SESSION['message']= "The two given passwords don't match!";
     }
        
}


?>
<html lang='en'>
<head>
   <title>Register</title>
    <link rel="stylesheet" href="../CSS/Reg.css"> 
    <link rel="stylesheet" href="../CSS/Main.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
    <div class="login-box">
        <div class="lb-header">
            <p3>Or if you don't have an account:</p3>
            <a href="Login.php" class="active" id="login-box-link">Login</a>
        </div>
        <p style="color: red;"><?php echo $_SESSION['message']?></p>
        <div class="filler-small"></div>
        <form class="signup" method="post" autocomplete="off">
            <div class="u-form">
<p3>What's your gender?</p3>
<input value="1" name="Female" class="subject-list" type="checkbox" id="fem" >Female 
<input value="2" name="Male" class="subject-list" type="checkbox" id="mal"  >Male

    <script type="text/javascript">
	    $('.subject-list').on('change', 
            function() {
		    $('.subject-list').not(this).prop('checked', false);  
		});
             
    </script>
            </div>
   
            
                                <p3>When were you born?</p3>
                                <select name="days">
                                    <option value="dayemp" name="-" id="dayemp" required>---</option>
                                    <?php days_loop() ?>

                                </select>
                                
                                <select name="month">
                                    <option value="monthemp" name="--" id="monthemp" required>---</option>
                                   <?php month_loop() ?>

                                </select>
                                
                                <select name="year">
                                    <option value="yearemp" name="---" id="yearemp" required>------</option>
                                    <?php year_loop() ?>

                                </select>
                            
    <div class="u-form">
                <input type="username" placeholder="Username..." name='Username' required/>
            </div>
            <div class="u-form">
                <input type="name" placeholder="Name..."name='Name' required/>
            </div>
            <div class="u-form">
                <input type="sirname" placeholder="Surname..." name='Surname'required/>
            </div>
            
            <div class="u-form">
                <input type="email" placeholder="Email..." name='Email'required/> 
            </div>
            <div class="u-form">
                <input type="website" placeholder="www.yourwebsite.com (not required)" name='Website'/>
            </div>
             <div class="u-form">   
                 <input type="text" name='Job' id="searchBox" placeholder="Your job..." required/>
                 <ul id="searchResults"></ul>
<script type="text/javascript">
var job = <?php echo json_encode($jobs)?>;
 
//Defining all variables
var input = document.getElementById("searchBox"),
    order = document.getElementById("searchResults"),
    jobs, jobsArray, prej, jobc, results, sortedResults;
    
//Function for searching the array for jobs
var search = function() {
  jobs = input.value.toLowerCase();
  results = [];
  jobsArray = jobs.split(" ");
  prej = jobsArray.length === 1 ? "" : jobsArray.slice(0, -1).join(" ") + " ";
  jobc = jobsArray[jobsArray.length -1].toLowerCase();
  
  for (var i = 0; i < job.length; i++) {
    var a = job[i].toLowerCase(),
        t = a.indexOf(jobc);
    
    if (t > -1) {
      results.push(a);
    }
  }
  
  evaluateResults();
};
var evaluateResults = function() {
  if (results.length > 0 && jobs.length > 0 && jobc.length !== 0) {
    sortedResults = results.sort(sortResults);
    oder();
  } 
  else {
    clearResults();
  }
};
var sortResults = function (a,b) {
  if (a.indexOf(jobc) < b.indexOf(jobc)) return -1;
  if (a.indexOf(jobc) > b.indexOf(jobc)) return 1;
  return 0;
};
//Odering results under input
var oder = function () {
  clearResults();
  
  for (var i=0; i < sortedResults.length && i < 5; i++) {
    var ol = document.createElement("ol"),
        result = prej 
          + sortedResults[i].toLowerCase().replace(jobc, "<strong>"
          + jobc 
          +"</strong>");
  
    ol.innerHTML = result;
    order.appendChild(ol);
  }
};
// deleting histroy of type characters
var clearResults = function() {
  order.innerHTML = "";
};
 
//An event listener for onkeyup
input.addEventListener("keyup", search, false); 
</script>
             </div>
            <div class="u-form">
                <span><input class="password" type="password" placeholder="Password..." name='password' id="pass2" required/></span>
                <span><input type="button" class="buttonf" value="show" id="showHide"  onclick="change()"/></span>
            </div>
            <div class="u-form">
                <span><input class="Passwordrpt" type="password" placeholder="Confirm Password..." name='Passwordrpt'id="rpt" required/></span>
                <span><input type="button" class="buttonf" id="hideShow" value="show" onclick="changerpt()"/></span>

<script type="text/javascript">
 $(document).ready(function() {
  $("#showHide").click(function() {
    if ($(".password").attr("type") === "password") {
      $(".password").attr("type", "text");

    } else {
      $(".password").attr("type", "password");
    }
  });
 });

 $(document).ready(function() {
  $("#hideShow").click(function() {
    if ($(".Passwordrpt").attr("type") === "password") {
      $(".Passwordrpt").attr("type", "text");

    } else {
      $(".Passwordrpt").attr("type", "password");
    }
  });
});

function change()
{
   var Check = document.getElementById("showHide").value;
   
   if(Check === "show"){
      return  document.getElementById("showHide").value = "hide";
   }else{
     return  document.getElementById("showHide").value = "show";
   }
};

function changerpt()
{
   var Check = document.getElementById("hideShow").value;
   
   if(Check === "show"){
      return  document.getElementById("hideShow").value = "hide";
   }else{
     return  document.getElementById("hideShow").value = "show";
   }
};
                </script>
            </div>                            
                <div class="filler-small"></div>
            <div class="avatar"><label>Select profile picture: </label>
                <input type="file" name="avatar" accept="image/*" required/></div>
            <div class="u-form">
                <textarea type='textarea' name='Comment' placeholder="Tell something about yourself" style="width:250px;height:150px;" required/></textarea>
                <div class="u-form">
                    <button type="submit" value="register" name="register" class="buttonc button" style="width: calc(50% - 22px);" id="submit" required/> Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>