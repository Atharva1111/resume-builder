<?php
    ob_start();
    session_start();

    $time_zone = date_default_timezone_set("Asia/Kolkata");

    $con = mysqli_connect("localhost", "root", "", "resume_builder"); 

    if(mysqli_connect_errno()){
        echo "Failed to connect: " . mysqli_connect_errno();
    }

?>