<?php

    include("../../config.php");

    if(
        isset($_POST['educationDegree']) && $_POST['educationDegree']!="" && 
        isset($_POST['educationInstitute']) && $_POST['educationInstitute']!="" && 
        isset($_POST['educationStartDate']) && $_POST['educationStartDate']!="" && 
        isset($_POST['educationEndDate']) && $_POST['educationEndDate']!="" && 
        isset($_POST['educationDescription']) && $_POST['educationDescription']!="" && 
    
        isset($_POST['resume_id'])){

        $educationDegree = strip_tags($_POST['educationDegree']);
        $educationInstitute = strip_tags($_POST['educationInstitute']);
        $educationStartDate = strip_tags($_POST['educationStartDate']);
        $educationEndDate = strip_tags($_POST['educationEndDate']);
        $educationDescription = strip_tags($_POST['educationDescription']);
        $resume_id = $_POST['resume_id'];
        
        $query = mysqli_query($con, "INSERT INTO education (education_id, degree, institute, start_date, end_date, description, resume_id) VALUES ('', '$educationDegree', '$educationInstitute', '$educationStartDate', '$educationEndDate', '$educationDescription', '$resume_id')");
        echo "Success";
    }
    else{
        echo "fail";
    }

?>