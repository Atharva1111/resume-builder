<?php 
    class Skill{

        private $con;
        private $skill_id;
        private $name;
        private $resume_id;
        
        public function __construct($con, $skill_id){
            $this->con = $con;
            $this->skill_id = $skill_id;
            $skill_query = mysqli_query($this->con, "SELECT * FROM skill WHERE skill_id='$this->skill_id'");
            $skill = mysqli_fetch_array($skill_query);

            $this->name = $skill['name'];
            $this->resume_id = $skill['resume_id'];
        }

        public function getName(){
            return $this->name;
        }

        public function getResumeId(){
            return $this->resume_id;
        }
    }
?>