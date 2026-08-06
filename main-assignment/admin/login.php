<?php
require_once '../includes/database.php';
require_once '../config.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["username"];
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    try{

        
        $database = new Database();
        $conn = $database->connect();

      
        $query = "SELECT * FROM admin_users WHERE email = :email";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        
        if($user && password_verify($password, $user["password"])){

            $_SESSION["user_id"] = $user["id"];
            $_SESSION["username"] = $user["username"];

            header("Location: ../dashboard.php");
            exit;

        }else{

            echo "Invalid email or password or username.";

        }

    }catch(PDOException $e){

        echo "Database Error: " . $e->getMessage();

    }

}
?>