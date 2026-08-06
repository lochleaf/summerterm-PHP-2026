<?php 
require_once '../config.php';
//this connect to my SQL account and table 
    class Database{
        private string $host = DB_HOST;
        private string $db_name = DB_NAME;
        private string $username = DB_USER;
        private string $password = DB_PASS;

        //function that returns a connection to the database
        public function connect(){

        //create source name
            $dsn = "mysql:host={$this->host};dbname={$this->db_name};charset=utf8mb4";
        //create PDO database connection   
            $this->conn = new PDO($dsn, $this->username, $this->password);
        //this to tell PDO if error occurs throw it hehe    
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //return the database connection so files can use it     
            return $this->conn;
        }
    }
?>