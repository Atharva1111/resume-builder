<?php
    class User {

        private $userid;
        private $con;
        private $name;
        private $username;
        private $email;
        private $address;
        private $contact;


        public function __construct($con, $userid) {
            $this->userid = $userid;
            $this->con = $con;

            $query = mysqli_query($this->con, "SELECT * FROM user WHERE id='$this->userid'");
            $user = mysqli_fetch_array($query);
            $this->name = $user['name'];
            $this->username = $user['username'];
            $this->email = $user['email'];
            $this->address = $user['address'];
            $this->contact = $user['contact'];
        }

        public function getUsername() {
            return $this->username;
        }

        public function getName() {
            return $this->name;
        }

        public function getUserId() {
            return $this->userid;
        }
        
        public function getEmail() {
            return $this->email;
        }
        public function getAddress() {
            return $this->address;
        }
        public function getContact() {
            return $this->contact;
        }

    }
?>