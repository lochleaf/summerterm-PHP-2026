<?php
//this fo the to connect to the database info
require_once __DIR__ . '/database.php';

//made class for crud 
    class UserCRUD{
      //store the database connection
      private PDO $conn;
  //the constructor will run automatically when a new ordercrud object is created/it will connect and save to the database
      public function __construct(Database $db){
        $this->conn = $db->connect();
      }


        public function User_info(
          string $username,
          string $email,
          string $hashed_password
        ){

          $query = "INSERT INTO admin_users
            (username, email, password)
            VALUES
            (:username, :email, :password)";

          $stmt = $this->conn->prepare($query);

          $result = $stmt->execute([
            ":username" => $username,
            ":email" => $email,
            ":password" => $hashed_password
          ]);

          return $result;
        }

        public function getAllUsers(){
          $query = "SELECT * FROM admin_users";
          $stmt = $this->conn->prepare($query);
          $stmt->execute();
          return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }


      public function addUser( $username,  $email, $password, $confirm_password){
        $query = "INSERT INTO admin_users (username, email, password) VALUES (:username, :email, :password)";
        $stmt = $this->conn->prepare($query);
        if ($password !== $confirm_password) {
            throw new Exception("Passwords do not match.");
        }
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);


        return $stmt->execute([
            ":username" => $username,
            ":email" => $email,
            ":password" => $hashed_password
        ]);
        }

      //made function to create insert the html information to the sql table
      #public function User_info(string $username, string $email, string $password, string $hashed_password){
      /*  $query = "INSERT INTO admin_users(username, email, password) VALUES (:username, :email, :password)";
        
        //prepare the SQL statement before it executes 
        $stmt = $this->conn->prepare($query);

        //execute the query and pass to the values for each placeholder for the table 
        return $stmt->execute([
          ":username"=>$username,
          ":email"=>$email,
          ":password"=>$hashed_password
       ]);
        
      }*/
    }
?>