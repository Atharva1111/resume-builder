<?php

    include("../../config.php");

    if(isset($_POST['achievementId']) && isset($_POST['resume_id'])){

        $achievementId = $_POST['achievementId'];
        $resume_id = $_POST['resume_id'];
        
        $query = mysqli_query($con, "DELETE FROM achievement WHERE achievement_id=$achievementId AND resume_id=$resume_id");
        echo 'Success';        
    }
    else{
        echo "fail";
    }

?>