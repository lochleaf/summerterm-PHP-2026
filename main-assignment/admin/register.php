<?php 
    require_once 'includes/database.php';
    require_once 'includes/UserCRUD.php';

    include_once 'includes/header.php';
    if($_SERVER['REQUEST_METHOD'] !== 'POST'){
        header('Location: index.php');
        exit;
    }
    echo "<section>Registration Processing Status</section>";

    try{
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        if($password !== $confirm_password){
            throw new Exception("Passwords do not match");
            //this is ethe solution for the assignment2
        }
        /**
         * We never save plain text passwords. password_hash() scrambles the password 
         * using a strong modern cryptographic algorithm (like bcrypt).
         */

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        if($hashed_password === false){
            throw new Exception("Password hashing runtime error");
        }
        $database = new Database();
        $crud = new UserCRUD($database);
        if($crud->create_user($username, $email, $hashed_password)){
            //if it returns try print a nice green allert message
            echo "<div class='alert alert-success'> User Created</div>";
        }
    }catch (PDOException $e){
        if($e->getCode() == 23000){
            echo "<div class='alert alert-danger'>Registration Failed ... the username or email has already been taken</div>";
        }
        else{
            echo "<div class='alert alert-danger'>Database Error: " . htmlspecialchars($e->getMessage()) . "</div>";
        }
    }
    include_once 'includes/footer.php';
?>