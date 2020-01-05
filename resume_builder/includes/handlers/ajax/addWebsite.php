<?php

    include("../../config.php");

    if(isset($_POST['websiteName']) && isset($_POST['resume_id']) && $_POST['websiteName']!="" && isset($_POST['websiteURL']) && $_POST['websiteURL']!=""){

        $websiteURL = strip_tags($_POST['websiteURL']);
        $websiteName = strip_tags($_POST['websiteName']);
        $resume_id = $_POST['resume_id'];
        
        $query = mysqli_query($con, "INSERT INTO website (website_id, name, url, resume_id) VALUES ('', '$websiteName', '$websiteURL', '$resume_id')");
        echo "Success";
    }
    else{
        echo "fail";
    }

?>