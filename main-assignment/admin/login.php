<?php
//this connect to the database class
require_once '../includes/database.php';

//this includes my session class so the admin works when the enter and end session
require_once 'session.php';

//starts the php session
Session::start();

//this will check if the user has check/login in and if they are login send them to the dashboard
if(Session::isLoggedIn()){
    header('Location: ../views/dashboard.php');
    exit;
}

//this help to output a error message if the login doesnt work 
$errorMessage = '';
//checks if the form was submitted hehe
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // it will try to get the email/password that was previously register that is taken from the SQL table that was saved for the login
    //annndd removes spaces for email
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    try{

        //creates a new database object
        $database = new Database();

        //connects to the database
        $conn = $database->connect();

        //this is to get the SQL query that searches for a user email that was stored in the SQL table
        $query = "SELECT * FROM admin_users WHERE email = :email";
        
        //this helps to prepare the SQL query beofre sending it to the database
        $stmt = $conn->prepare($query);
        
        //this will executes the query and sends the user email info into a value/placeholder
        $stmt->execute([":email" => $email]);

        //gets the user info from the databse and returns the info as a array
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        //saves the users Id in the session
        if($user && password_verify($password, $user["password"])){

            //saves the users id & username inthe session
            Session::set("user_id", $user["id"]);
            Session::set("username", $user["username"]);

            //sends the user to the dashboard after logging in yay
            header("Location: ../views/dashboard.php");
            exit;
//errors messages
        }
        else{
            //this will tell the user if the eamil or password is wrong 
            $errorMessage = "Invalid email or password or username.";

        }

    }catch(PDOException $e){

        //this will tell if there is a database error 
        $errorMessage = "Database Error: " . $e->getMessage();

    }

}
//checks if there is an error message 
if ($errorMessage != '') {
    //this will output error message safely on the page prevents html code from being interpreted 
    echo "<p>" . htmlspecialchars($errorMessage) . "</p>";
}
?>