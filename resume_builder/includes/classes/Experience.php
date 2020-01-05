<?php 
    class Experience{

        private $con;
        private $experience_id;
        private $title;
        private $start_date;
        private $end_date;
        private $description;
        private $resume_id;
        private $company;

        
        public function __construct($con, $experience_id){
            $this->con = $con;
            $this->experience_id = $experience_id;
            $experience_query = mysqli_query($this->con, "SELECT * FROM experience WHERE experience_id='$this->experience_id'");
            $experience = mysqli_fetch_array($experience_query);

            $this->title = $experience['title'];
            $this->start_date = $experience['start_date'];
            $this->end_date = $experience['end_date'];
            $this->description = $experience['description'];
            $this->resume_id = $experience['resume_id'];
            $this->company = $experience['company'];
        }

        public function getTitle(){
            return $this->title;
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
        public function getCompany(){
            return $this->company;
        }
    }
?>