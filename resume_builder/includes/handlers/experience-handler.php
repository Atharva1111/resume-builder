<?php

    function sanitizeFormText($inputText) {
        $inputText = strip_tags($inputText);
        return $inputText;
    }
    
    if(isset($_POST['experienceButton'])){

        $experienceTitle = sanitizeFormText($_POST['experienceTitle']);
        $experienceStartDate = sanitizeFormText($_POST['experienceStartDate']);
        $experienceEndDate = sanitizeFormText($_POST['experienceEndDate']);
        $experienceDescription = sanitizeFormText($_POST['experienceDescription']);
        
        $query = mysqli_query($con, "INSERT INTO experience (experience_id, title, start_date, end_date, description, resume_id) VALUES ('', '$experienceTitle', '$experienceStartDate', '$experienceEndDate', '$experienceDescription', '$resume_id')");
        if($query){
            $_SESSION['userLoggedIn'] = $userLoggedIn;
            header("Location: experience.php");  
        }
    }

?>