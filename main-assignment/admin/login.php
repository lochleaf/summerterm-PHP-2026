<?php
require_once '../includes/database.php';
require_once 'session.php';

Session::start();

if(Session::isLoggedIn()){
    header('Location: ../views/dashboard.php');
    exit;
}

$errorMessage = '';
if($_SERVER["REQUEST_METHOD"] == "POST"){

    #$username = $_POST["username"];
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    try{

        
        $database = new Database();
        $conn = $database->connect();

      
        $query = "SELECT * FROM admin_users WHERE email = :email";
        
        $stmt = $conn->prepare($query);
        
        #$stmt->bindParam(":email", $email);
        
        $stmt->execute([":email" => $email]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        
        if($user && password_verify($password, $user["password"])){

            Session::set("user_id", $user["id"]);
            Session::set("username", $user["username"]);

            header("Location: ../views/dashboard.php");
            exit;

        }else{

            $errorMessage = "Invalid email or password or username.";

        }

    }catch(PDOException $e){

        $errorMessage = "Database Error: " . $e->getMessage();

    }

}

if ($errorMessage != '') {
    echo "<p>" . htmlspecialchars($errorMessage) . "</p>";
}
?>