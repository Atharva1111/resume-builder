<?php

include("../../config.php");

if(isset($_POST['skillId']) && isset($_POST['resume_id'])){

    $skill_id = $_POST['skillId'];
    $resume_id = $_POST['resume_id'];
    
    $query = mysqli_query($con, "DELETE FROM skill WHERE skill_id=$skill_id AND resume_id=$resume_id");
    echo 'Success';        
}
else{
    echo "fail";
}

?>