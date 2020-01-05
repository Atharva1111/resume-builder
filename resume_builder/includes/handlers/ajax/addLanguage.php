<?php

    include("../../config.php");

    if(isset($_POST['languageName']) && isset($_POST['resume_id']) && $_POST['languageName']!=""){

        $languagename = strip_tags($_POST['languageName']);
        $resume_id = $_POST['resume_id'];
        
        $query = mysqli_query($con, "SELECT language_id FROM language WHERE language='$languagename'");
        if(mysqli_num_rows($query) == 1){
            $language = mysqli_fetch_array($query);
            $language_id = $language['language_id'];
            $query3 = mysqli_query($con, "SELECT * FROM resume_language WHERE language_id=$language_id");
            if(!(mysqli_num_rows($query3) == 1)){
                $query2 = mysqli_query($con, "INSERT INTO resume_language (resume_id, language_id) VALUES ('$resume_id', '$language_id')");                
            }
        }
        else{
            $query2 = mysqli_query($con, "INSERT INTO language (language_id, language) VALUES ('', '$languagename')");
            $query3 = mysqli_query($con, "SELECT language_id FROM language WHERE language='$languagename'");
            $language = mysqli_fetch_array($query3);
            $language_id = $language['language_id'];
            $query4 = mysqli_query($con, "INSERT INTO resume_language (resume_id, language_id) VALUES ('$resume_id', '$language_id')");
        }        
        echo "Success";
    }
    else{
        echo "fail";
    }

?>