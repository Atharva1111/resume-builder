<?php

    include("../../config.php");

    if(isset($_POST['skill']) && $_POST['skill']!="" && isset($_POST['resume_id'])){

        $skillname = strip_tags($_POST['skill']);
        $resume_id = $_POST['resume_id'];
        
        $query = mysqli_query($con, "INSERT INTO skill (skill_id, name, resume_id) VALUES ('', '$skillname', '$resume_id')");
        echo "Success";
    }
    else{
        echo "fail";
    }

?>