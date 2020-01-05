<?php 
    class Website{

        private $con;
        private $website_id;
        private $name;
        private $url;
        private $resume_id;
        
        public function __construct($con, $website_id){
            $this->con = $con;
            $this->website_id = $website_id;
            $website_query = mysqli_query($this->con, "SELECT * FROM website WHERE website_id='$this->website_id'");
            $website = mysqli_fetch_array($website_query);

            $this->name = $website['name'];
            $this->url = $website['url'];
            $this->resume_id = $website['resume_id'];
        }

        public function getName(){
            return $this->name;
        }

        public function getURL(){
            return $this->url;
        }

        public function getResumeId(){
            return $this->resume_id;
        }
    }
?>