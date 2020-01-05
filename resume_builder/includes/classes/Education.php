<?php 
    class Education{

        private $con;
        private $education_id;
        private $degree;
        private $institute;
        private $start_date;
        private $end_date;
        private $description;
        private $resume_id;
        
        public function __construct($con, $education_id){
            $this->con = $con;
            $this->education_id = $education_id;
            $education_query = mysqli_query($this->con, "SELECT * FROM education WHERE education_id='$this->education_id'");
            $education = mysqli_fetch_array($education_query);

            $this->degree = $education['degree'];
            $this->institute = $education['institute'];
            $this->start_date = $education['start_date'];
            $this->end_date = $education['end_date'];
            $this->description = $education['description'];
            $this->resume_id = $education['resume_id'];
        }

        public function getDegree(){
            return $this->degree;
        }
        public function getInstitute(){
            return $this->institute;
        }
        public function getStartDate(){
            return $this->start_date;
        }
        public function getEndDate(){
            return $this->end_date;
        }
        public function getDescription(){
            return $this->description;
        }
        public function getResumeId(){
            return $this->resume_id;
        }

    }
?>