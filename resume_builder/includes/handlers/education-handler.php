<?php

    function sanitizeFormText($inputText) {
        $inputText = strip_tags($inputText);
        return $inputText;
    }
    
    if(isset($_POST['educationButton'])){

        $educationDegree = sanitizeFormText($_POST['educationDegree']);
        $educationInstitute = sanitizeFormText($_POST['educationInstitute']);
        $educationStartDate = sanitizeFormText($_POST['educationStartDate']);
        $educationEndDate = sanitizeFormText($_POST['educationEndDate']);
        $educationDescription = sanitizeFormText($_POST['educationDescription']);
        
        $query = mysqli_query($con, "INSERT INTO education (education_id, degree, institute, start_date, end_date, description, resume_id) VALUES ('', '$educationDegree', '$educationInstitute', '$educationStartDate', '$educationEndDate', '$educationDescription', '$resume_id')");
        if($query){
            $_SESSION['userLoggedIn'] = $userLoggedIn;
            header("Location: education.php");  
        }
    }

    if(isset($_POST['nextButton'])){
        header("Location: experience.php");
    }

?>