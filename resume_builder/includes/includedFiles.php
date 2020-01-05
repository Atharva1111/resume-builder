<?php
    if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
        include("includes/config.php");
        include("includes/classes/User.php");
        include("includes/classes/Skill.php");
        include("includes/classes/Achievement.php");
        include("includes/classes/Website.php");
        include("includes/classes/Language.php");
        include("includes/classes/Education.php");
        include("includes/classes/Experience.php");

        if(isset($_GET['userLoggedInId'])){
            $userLoggedIn = new User($con, $_GET['userLoggedInId']);
        }
        else{
            echo "User name variable not passed into the page.";
        }


    }
    else {
        include("includes/header.php");
        include("includes/footer.php");

        $url = $_SERVER['REQUEST_URI'];
        echo "<script>openPage('$url')</script>";
        exit();
    }
?>