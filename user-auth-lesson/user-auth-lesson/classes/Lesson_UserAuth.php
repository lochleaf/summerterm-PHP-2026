<?php 

    class userAuth{

        private $db;
        public function __construct($db_connection){
            $this->db = $db_connection;
        }
    
            @param string
            @return mixed

        public function locateUser($username){
            
            try{
                $stmt = $this->db->prepare("SELECT * FROM users WHERE username = ?");
                $stmt->execute([$username]);
                return $stmt->fetch();
            }
            catch(PDOException $e){
                return false;
            }
        }

        public function processRegistration($username, $password, $confirm_password){
            if(empty($username) || empty($password) || empty($confirm_password)){
                return "all form fields are required";
            }

            if($password !== $confirm_password){
                return "passwords do not match";
            }

            if($this->locateUser($username)){
                return "sorry this username is taken";
            }

            $secure_hash = password_hash($password, PASSWORD_DEFAULT);

            try{
                $stmt = $this->db->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
                $stmt->execute([$username, $secure_hash]);
                return "user created!! you can now log in";
            }
            catch(PDOException $e){
                return "could not create user: " . $e->getMessage();
            }

        }

        public function processLogin($username, $password){
            if(empty($username) || empty($password)){
                return false;
            }

            $userRecord = $this->locateUser($username);

            if($userRecord && password_verify($password, $userRecord['password'])){
                return $userRecord;
            }
            return false;
        }
    }

?>