<?php 
    class Language{

        private $con;
        private $language_id;
        private $language_name;
        
        public function __construct($con, $language_id){
            $this->con = $con;
            $this->language_id = $language_id;
            $language_query = mysqli_query($this->con, "SELECT * FROM language WHERE language_id='$this->language_id'");
            $language = mysqli_fetch_array($language_query);

            $this->language_name = $language['language'];
        }

        public function getName(){
            return $this->language_name;
        }

    }
?>