<?php

    include("../../config.php");

    if(
        isset($_POST['experienceTitle']) && $_POST['experienceTitle']!="" && 
        isset($_POST['experienceStartDate']) && $_POST['experienceStartDate']!="" && 
        isset($_POST['experienceEndDate']) && $_POST['experienceEndDate']!="" && 
        isset($_POST['experienceDescription']) && $_POST['experienceDescription']!="" && 
        isset($_POST['experienceCompany']) && $_POST['experienceCompany']!="" && 
    
        isset($_POST['resume_id'])){

        $experienceTitle = strip_tags($_POST['experienceTitle']);
        $experienceStartDate = strip_tags($_POST['experienceStartDate']);
        $experienceEndDate = strip_tags($_POST['experienceEndDate']);
        $experienceDescription = strip_tags($_POST['experienceDescription']);
        $experienceCompany = strip_tags($_POST['experienceCompany']);
        $resume_id = $_POST['resume_id'];
        
        $query = mysqli_query($con, "INSERT INTO experience (experience_id, title, start_date, end_date, description, resume_id, company) VALUES ('', '$experienceTitle', '$experienceStartDate', '$experienceEndDate', '$experienceDescription', '$resume_id', '$experienceCompany')");

        echo "Success";
    }
    else{
        echo "fail";
    }

?>