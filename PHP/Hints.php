<?php
//An array with all avaible scientific jobs

$j[] = 'Analyst';
$j[] = 'Analytical Lab Technician';
$j[] = 'Analytical Services Chemist';
$j[] = 'Assay Development Specialist';
$j[] = 'Assistant Field Technician';
$j[] = 'Assistant Technician';
$j[] = 'Associate Professor';
$j[] = 'Bioanalytical Scientist';
$j[] = 'Biochemist';
$j[] = 'Bioinformatics Research Scientist';
$j[] = 'Biology Professor';
$j[] = 'Business Analyst';
$j[] = 'Business System Analyst';
$j[] = 'Cell Biology Scientist';
$j[] = 'Cell Line Development Manager';
$j[] = 'Chemical Engineer';
$j[] = 'Chemical Technician';
$j[] = 'Climate Data Analyst';
$j[] = 'Clinical Data Research';
$j[] = 'Clinical Pharmacology Professor';
$j[] = 'Clinical Pharmacy Assistant';
$j[] = 'Clinical Research Associate';
$j[] = 'Clinical Research Coordinator';
$j[] = 'Clinical Research Director';
$j[] = 'Compliance Technician';
$j[] = 'Computational Chemistry Manager';
$j[] = 'Computer Programmer';
$j[] = 'Computing Consultant';
$j[] = 'Conservation Technician';
$j[] = 'Development Technologist';
$j[] = 'Drug Evaluator';
$j[] = 'Drug Regulatory Affairs Manager';
$j[] = 'Environmental Data Analyst';
$j[] = 'Environmental Emergencies Assistant';
$j[] = 'Environmental Emergencies Planner';
$j[] = 'Environmental Health Scientist';
$j[] = 'Environmental Project Analyst';
$j[] = 'Environmental Research Assistant';
$j[] = 'Environmental Scientist';
$j[] = 'Environmental Services Representative';
$j[] = 'Environmental Specialist';
$j[] = 'Exploration Director';
$j[] = 'Field Applications Specialist';
$j[] = 'Field Technician';
$j[] = 'Financial Analyst';
$j[] = 'Forensic Chemist';
$j[] = 'Forensic Scientist';
$j[] = 'Gene Editing Manager';
$j[] = 'Genetic Counselor';
$j[] = 'Grants/Proposal Writer';
$j[] = 'Groundwater Technician';
$j[] = 'Hardware Designer';
$j[] = 'Health Research Assistant';
$j[] = 'Health Technology Assistant';
$j[] = 'Hospital Accounting Analyst';
$j[] = 'Hospital Research Assistant';
$j[] = 'Human Factors Engineer';
$j[] = 'Immunology Scientist';
$j[] = 'Industrial Designer';
$j[] = 'IT Support Staff';
$j[] = 'Institutional Research Director';
$j[] = 'Insurance Representative';
$j[] = 'Intranet Specialist';
$j[] = 'Intranet Support';
$j[] = 'Junior Analyst';
$j[] = 'Laboratory Assistant';
$j[] = 'Laboratory Instructor';
$j[] = 'Laboratory Manager';
$j[] = 'Laboratory Technician';
$j[] = 'Market Access Analyst';
$j[] = 'Market Access Associate';
$j[] = 'Marketing Consultant';
$j[] = 'Medical Communications Director';
$j[] = 'Medical Physics Researcher';
$j[] = 'Medical Research Assistant';
$j[] = 'Medical Research Technician';
$j[] = 'Medical Scientist';
$j[] = 'Medical Services Assistant';
$j[] = 'Molecular Biologist';
$j[] = 'Molecular Scientist';
$j[] = 'Oncology Researcher';
$j[] = 'Operations Clerk';
$j[] = 'Operations Research Analysis Manager';
$j[] = 'Operations Section Manager';
$j[] = 'Operations Supervisor';
$j[] = 'Operations Team Leader';
$j[] = 'Operations Unit Manager';
$j[] = 'Organic Lab Research Assistant';
$j[] = 'Organic Lab Worker';
$j[] = 'Pharmaceutical Assistant';
$j[] = 'Pharmaceutical Marketing Assistant';
$j[] = 'Pharmaceutical Research Analyst';
$j[] = 'Pharmaceutical Research Assistant';
$j[] = 'Pharmaceutical Research Technician';
$j[] = 'Pharmaceutical Technician';
$j[] = 'Pharmacovigilance Supervisor';
$j[] = 'Pharmacy Affairs Assistant';
$j[] = 'Pharmacy Assistant';
$j[] = 'Pharmacy Innovation Assistant';
$j[] = 'Power Regulator';
$j[] = 'Process Engineer';
$j[] = 'Process Inspector';
$j[] = 'Process Research Manager';
$j[] = 'Product Engineer';
$j[] = 'Product Test Specialist';
$j[] = 'Production Team Leader';
$j[] = 'Production Test Supervisor';
$j[] = 'Professional Programs Assistant';
$j[] = 'Project Manager';
$j[] = 'Public Health Specialist';
$j[] = 'Quality Assistant';
$j[] = 'Quality Assurance Manager';
$j[] = 'Quality Assurance Technologist';
$j[] = 'Quality Control Analyst';
$j[] = 'Quality Control Manager';
$j[] = 'Quality Control Supervisor';
$j[] = 'Regulatory Affairs Associate';
$j[] = 'Regulatory Affairs Director';
$j[] = 'Regulatory Officer';
$j[] = 'Rehabilitation Engineering Assistant';
$j[] = 'Reimbursement Analyst';
$j[] = 'Research Assistant';
$j[] = 'Research Chemist';
$j[] = 'Research Team Leader';
$j[] = 'Research Technician';
$j[] = 'Research and Development Associate';
$j[] = 'Research and Development Chemist';
$j[] = 'Research and Development Director';
$j[] = 'Research and Development Manager';
$j[] = 'Research and Development Supervisor';
$j[] = 'Research and Development Technician';
$j[] = 'Research and Development Tester';
$j[] = 'Research and Innovation Manager';
$j[] = 'Research Scientist';
$j[] = 'Researcher';
$j[] = 'Retail Analyst';
$j[] = 'Safety Data Specialist';
$j[] = 'Sales Analyst';
$j[] = 'Satellite Data Analyst';
$j[] = 'Science Technician';
$j[] = 'Scientific Artist';
$j[] = 'Scientific Programmer';
$j[] = 'Scientific Project Manager';
$j[] = 'Scientific Writer';
$j[] = 'Senior Pharmacy Student';
$j[] = 'Software Developer';
$j[] = 'Software Engineering Assistant';
$j[] = 'Solid Waste Field Technician';
$j[] = 'Special Projects Coordinator';
$j[] = 'Statistician';
$j[] = 'Stem Cell Researcher';
$j[] = 'STEM Career Advisor';
$j[] = 'Structural Biologist';
$j[] = 'Structural Engineer';
$j[] = 'Systems Analyst';
$j[] = 'Technical Application Specialist';
$j[] = 'Technical Support Technician';
$j[] = 'Technical Writer';
$j[] = 'Technology Research Analyst';
$j[] = 'Technology Research Manager';
$j[] = 'Technology Specialist';
$j[] = 'Therapeutic Director';
$j[] = 'Total Quality Management Director';
$j[] = 'Total Quality Manager';
$j[] = 'Toxicologist';
$j[] = 'Transportation Project Manager';

$q = $_REQUEST["q"]; 
//echo "<pre>";
//print_r  ($_GET);
$Hint = "";

if(!empty($q)){
    $q = strtolower($q);
    $len=  strlen($q);
    
    foreach($j as $job){
        if(stristr($q,  substr($job = strtoupper($job),0,$len))){
            if($Hint ===""){
                $Hint = $job;
            }else{
                $Hint .=",$job";
            }
        }
    }
}
echo $Hint === "" ? "no suggestions":$Hint;