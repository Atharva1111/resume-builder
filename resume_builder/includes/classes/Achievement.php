<?php 
    class Achievement{

        private $con;
        private $achievement_id;
        private $achievement_name;
        private $resume_id;
        
        public function __construct($con, $achievement_id){
            $this->con = $con;
            $this->achievement_id = $achievement_id;
            $achievement_query = mysqli_query($this->con, "SELECT * FROM achievement WHERE achievement_id='$this->achievement_id'");
            $achievement = mysqli_fetch_array($achievement_query);

            $this->achievement_name = $achievement['achievement'];
            $this->resume_id = $achievement['resume_id'];
        }

        public function getName(){
            return $this->achievement_name;
        }

        public function getResumeId(){
            return $this->resume_id;
        }
    }
?>