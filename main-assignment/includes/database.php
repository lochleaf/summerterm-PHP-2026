<?php 
//this connect to my SQL account and table 
    class Database{
        private string $host = '172.31.22.43';
        private string $db_name = 'MarieEve200536258';
        private string $username = 'MarieEve200536258';
        private string $password = 'IfMrdZRXvE';
        
        //stores the database connection
        private PDO $conn;

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