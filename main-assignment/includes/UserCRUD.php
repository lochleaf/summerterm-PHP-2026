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

        //creates a function to add new user info into the database
        public function User_info(
          string $username,
          string $email,
          string $hashed_password
        ){

          //sql query to add the username & email and hashed password into the admin_users table
          $query = "INSERT INTO admin_users(username, email, password) VALUES (:username, :email, :password)";

          //prepare the sql statement before itis executed 
          $stmt = $this->conn->prepare($query);
          //executes the query and puts the user info to the placeholders
          $result = $stmt->execute([":username" => $username,":email" => $email,":password" => $hashed_password]);
          //return the result
          return $result;
        }
        //get all users from the admin_users table
        public function getAllUsers(){
          //sql query to select all users from the database
          $query = "SELECT * FROM admin_users";
          //prepares the sql statement before itis executed
          $stmt = $this->conn->prepare($query);
          //it now executed
          $stmt->execute();
          //get all users and returns them into array
          return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

      //create function to add new user to the database 
      public function addUser( $username,  $email, $password, $confirm_password){
      //sql to add to the new user info into the database 
      $query = "INSERT INTO admin_users (username, email, password) VALUES (:username, :email, :password)";
      //prepare the sql statement before itis executed   
      $stmt = $this->conn->prepare($query);
      //check if the password and confirm password match
        if ($password !== $confirm_password) {
            throw new Exception("Passwords do not match.");
        }
        //hashes the password and store to database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        //start the query and adds the user info to placeholders 
        return $stmt->execute([":username" => $username,":email" => $email,":password" => $hashed_password]);
        }
    }
?>