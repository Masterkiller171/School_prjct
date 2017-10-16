<?php
include "Functions.php";

session_start();
$_SESSION['message'] = '';

function submit($in){
if($_SERVER['REQUEST_METHOD']== 'POST')
    {
    if(($_POST['Password']) === ($_POST['Passwordconfirm']))//Checking if passwords are the same
        {
        
$id = rand(1000,5000);   
$Username = $conn-> real_escape_string($_POST['Username']);
$Email = $conn-> real_escape_string($_POST['Email']);
$Password = rand(1000,5000); //Generating hash code for Password
$picture_path = $conn->real_escape_string('images/'.$_FILES['avatar']['Name']);//Path of picture
$Email= $conn->real_escape_string(md5($id));//Generating an id for every specific user
$year = $conn->real_escape_string($_POST['year']);
$Name = $conn-> real_escape_string($_POST['Name']);
$Surname = $conn-> real_escape_string($_POST['Surname']);
$Comment = $conn-> real_escape_string($_POST['Comment']);

//Defining variables for input and comparing 
$string_url= $_POST('website');
$reg_exp = "/^(http(s?):\/\/)?(www\.)+[a-zA-Z0-9\.\-\_]+(\.[a-zA-Z]{2,3})+(\/[a-zA-Z0-9\_\-\s\.\/\?\%\#\&\=]*)?$/";

//Checking if it's a valid url
if(!preg_match($reg_exp, $string_url) == TRUE){
        echo "URL is invalid format";
   }
   
//Will check if email has already been used once
if(($_POST ['Email']) == ($_POST['Email'])){
   
   $_SESSION['message'] = 'This email has already been used, please use another!';
}

//Checking if comment contains less than 200 characters
if(200 < strlen($_POST['comment'])){
    $_SESSION['message'] = 'Please keep your story below 200 characters please!';
}

//Checking if gender equals male or female
if($gender == ($_POST['Female']))
    {
    return 1;
}
elseif ($gender == ($_POST['Male']))
    {
    return 0;
}

/*Checking if the file is an actual picture*/
    if (preg_match ("!images!",$_FILES['avatar']['type']))
            {
        
//Putting picture into database
        if(copy($_FILES['avatar']['tmp_name'], $picture_path))
                {
            
            $_SESSION['Username'] = $Username;
            $_SESSION['picture'] = $picture_path;
            
            $sql = "INSERT INTO userinfo (Username, Name, Surname, Email, Password, avatar, Comment, Gender, Specialty, hash, days, month, year)"
                ."VALUES ('$Username','$Name',' $Surname',' $Password',' $Comment',' $Email ','$gender','$Specialty '.'$hash'.'$dayss'.'$months'.'$years'.$picture')";
            
            //Registration succesfull
            if($conn->quert($sql) === true)
                {
                $_SESSION['message'] = 'Registration is Succesfull!';
                header("location: welcome.php");
 
                
            }
        }
        else {
            $_SESSION['message']= "File Upload Failed!";
        }
        
            }
        else{
            $_SESSION['message']= "Please only upload JPG, GIF or PNG images!";
        }
    
    }
        else{
            $_SESSION['message']= "The two given passwords don't match!";
        }
        
}
}

?>

<html lang='en'>
    <body>
    <head>
   <title>Register</title>
    <link rel="stylesheet" type="text/css" href="<?php $url?> /CSS/Main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php $url?>  /CSS/Reg.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <?php echo $JSim?>
    <?php echo $JSimvs?>
</head>
    <div class="login-box">
        <div class="lb-header">
            <p3>Or if you don't have an account:</p3>
            <a href="<?php $url?> Login.php" class="active" id="login-box-link">Login</a>
        </div>
        <div class="alert alert-error"><?php echo $_SESSION['message']?></div>
        <div class="filler-small"></div>
        <form class="signup">
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
                                    <?php days_loop() ?>

                                </select>
                                
                                <select name="month">
                                    
                                   <?php month_loop() ?>

                                </select>
                                
                                <select name="year">
                                    <?php year_loop() ?>

                                </select>
                            
    <div class="u-form">
                <input type="username" placeholder="Username..." name='Username' required>
            </div>
            <div class="u-form">
                <input type="name" placeholder="Name..."name='Name' required>
            </div>
            <div class="u-form">
                <input type="sirname" placeholder="Surname..." name='Surname'required>
            </div>
            <div class="u-form">
                <input type="email" placeholder="Email..." name='Email'required> 
            </div>
            <div class="u-form">
                <input type="website" placeholder="www.yourwebsite.com (not required)" name='Website'>
            </div>
             <div class="u-form">   
                 <input type="text" id="searchBox" 
class="search-field"  placeholder="Your job" autoFocus required/>
                 <ul id="searchResults"></ul>
<script>
var job = [ 
"Analyst", 
"Analytical Lab Technician", 
"Analytical Services Chemist", 
"Assay Development Specialist", 
"Assistant Field Technician", 
"Assistant Technician", 
"Associate Professor", 
"Bioanalytical Scientist", 
"Biochemist", 
"Bioinformatics Research Scientist", 
"Biology Professor", 
"Business Analyst", 
"Business System Analyst", 
"Cell Biology Scientist", 
"Cell Line Development Manager", 
"Chemical Engineer", 
"Chemical Technician", 
"Climate Data Analyst", 
"Clinical Data Research", 
"Clinical Pharmacology Professor", 
"Clinical Pharmacy Assistant", 
"Clinical Research Associate", 
"Clinical Research Coordinator", 
"Clinical Research Director", 
"Compliance Technician", 
"Computational Chemistry Manager", 
"Computer Programmer", 
"Computing Consultant", 
"Conservation Technician", 
"Development Technologist", 
"Drug Evaluator", 
"Drug Regulatory Affairs Manager", 
"Environmental Data Analyst", 
"Environmental Emergencies Assistant", 
"Environmental Emergencies Planner", 
"Environmental Health Scientist", 
"Environmental Project Analyst", 
"Environmental Research Assistant", 
"Environmental Scientist", 
"Environmental Services Representative", 
"Environmental Specialist", 
"Exploration Director", 
"Field Applications Specialist", 
"Field Technician", 
"Financial Analyst", 
"Forensic Chemist", 
"Forensic Scientist", 
"Gene Editing Manager", 
"Genetic Counselor", 
"Grants/Proposal Writer", 
"Groundwater Technician", 
"Hardware Designer", 
"Health Research Assistant", 
"Health Technology Assistant", 
"Hospital Accounting Analyst", 
"Hospital Research Assistant", 
"Human Factors Engineer", 
"Immunology Scientist", 
"Industrial Designer", 
"IT Support Staff", 
"Institutional Research Director", 
"Insurance Representative", 
"Intranet Specialist", 
"Intranet Support", 
"Junior Analyst", 
"Laboratory Assistant", 
"Laboratory Instructor", 
"Laboratory Manager", 
"Laboratory Technician", 
"Market Access Analyst", 
"Market Access Associate", 
"Marketing Consultant", 
"Medical Communications Director", 
"Medical Physics Researcher", 
"Medical Research Assistant", 
"Medical Research Technician", 
"Medical Scientist", 
"Medical Services Assistant", 
"Molecular Biologist", 
"Molecular Scientist", 
"Oncology Researcher", 
"Operations Clerk", 
"Operations Research Analysis Manager", 
"Operations Section Manager", 
"Operations Supervisor", 
"Operations Team Leader", 
"Operations Unit Manager", 
"Organic Lab Research Assistant", 
"Organic Lab Worker", 
"Pharmaceutical Assistant", 
"Pharmaceutical Marketing Assistant", 
"Pharmaceutical Research Analyst", 
"Pharmaceutical Research Assistant", 
"Pharmaceutical Research Technician", 
"Pharmaceutical Technician", 
"Pharmacovigilance Supervisor", 
"Pharmacy Affairs Assistant", 
"Pharmacy Assistant", 
"Pharmacy Innovation Assistant", 
"Power Regulator", 
"Process Engineer", 
"Process Inspector", 
"Process Research Manager", 
"Product Engineer", 
"Product Test Specialist", 
"Production Team Leader", 
"Production Test Supervisor", 
"Professional Programs Assistant", 
"Project Manager", 
"Public Health Specialist", 
"Quality Assistant", 
"Quality Assurance Manager", 
"Quality Assurance Technologist", 
"Quality Control Analyst", 
"Quality Control Manager", 
"Quality Control Supervisor", 
"Regulatory Affairs Associate", 
"Regulatory Affairs Director", 
"Regulatory Officer", 
"Rehabilitation Engineering Assistant", 
"Reimbursement Analyst", 
"Research Assistant", 
"Research Chemist", 
"Research Team Leader", 
"Research Technician",
"Research and Development Associate", 
"Research and Development Chemist", 
"Research and Development Director", 
"Research and Development Manager", 
"Research and Development Supervisor", 
"Research and Development Technician", 
"Research and Development Tester", 
"Research and Innovation Manager", 
"Research Scientist", 
"Researcher", 
"Retail Analyst", 
"Safety Data Specialist", 
"Sales Analyst", 
"Satellite Data Analyst", 
"Science Technician", 
"Scientific Artist", 
"Scientific Programmer", 
"Scientific Project Manager", 
"Scientific Writer", 
"Senior Pharmacy Student", 
"Software Developer", 
"Software Engineering Assistant", 
"Solid Waste Field Technician", 
"Special Projects Coordinator", 
"Statistician", 
"Stem Cell Researcher", 
"STEM Career Advisor", 
"Structural Biologist", 
"Structural Engineer", 
"Systems Analyst", 
"Technical Application Specialist", 
"Technical Support Technician", 
"Technical Writer", 
"Technology Research Analyst", 
"Technology Research Manager", 
"Technology Specialist", 
"Therapeutic Director", 
"Total Quality Management Director", 
"Total Quality Manager", 
"Toxicologist", 
"Transportation Project Manager",
"bob the builder"];
 
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
                <span><input type="password" placeholder="Password..." name='Password' required></span>
                
            </div>
            <div class="u-form">
                <input type="password" placeholder="Confirm Password..." name='Passwordrpt' required>
            </div>
                <div class="filler-small"></div>
            <div class="avatar"><label>Select profile picture: </label>
                <input type="file" name="avatar" accept="image/*" required name="Picture" required/></div>
            <div class="u-form">
                <textarea name="textarea" placeholder="Tell something about yourself" style="width:250px;height:150px;" name="Comment" required></textarea>
                <div class="u-form">
                    <a href="<?php $url?> Verify-Page.php"  <button type="submit" value="register" name="register" class="buttonc button" style="width: calc(50% - 22px);" onclick="submit()" required> Submit</button></a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>