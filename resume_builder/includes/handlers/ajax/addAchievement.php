<?php

    include("../../config.php");

    if(isset($_POST['achievementName']) && isset($_POST['resume_id']) && $_POST['achievementName']!=""){

        $achievementName = strip_tags($_POST['achievementName']);
        $resume_id = $_POST['resume_id'];
        
        $query = mysqli_query($con, "INSERT INTO achievement (achievement_id, achievement, resume_id) VALUES ('', '$achievementName', '$resume_id')");
        echo 'Success';        
    }
    else{
        echo "fail";
    }

?>