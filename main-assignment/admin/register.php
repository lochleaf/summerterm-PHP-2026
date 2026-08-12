<?php 
    //adds the database connection to the database file
    require_once '../includes/database.php';
    //adds the UserCRUD file
    require_once '../includes/UserCRUD.php';

    //this checks to see if the form was not submitted
    if($_SERVER['REQUEST_METHOD'] !== 'POST'){
        //this brings the user back to the register page
        header('Location: ../index.php?page=register');
        exit;
    }
    //this is message to show the user and me cuz wanna make sure loif it was registered
    echo "<section>Registration Processing Status</section>";

    try{
        //gets the username from the form and remove extra spaces 
        $username = trim($_POST['username']);
        //gets the email from the form and removes extra spaces
        $email = trim($_POST['email']);
        //gets the password from the user
        $password = $_POST['password'];
        //gets the password confirmation from the user 
        $confirm_password = $_POST['confirm_password'];
        //checks if the password & confirm password are the same or not 
        if($password !== $confirm_password){
            //print out error that passwords dont match
            throw new Exception("Passwords do not match");
        }
        //hashes the password before storing it in the database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        //checks if the password hashing failed
        if($hashed_password === false){
            //creates an error if the password could not be hashed
            throw new Exception("Password hashing runtime error");
        }
        //creates new database object
        $database = new Database();
        //output message confirming that the database objectthis was to help to see if worked
        echo "<p>Database object created.</p>";
        //creates userCRUD object & gives it to the database obj
        $crud = new UserCRUD($database);
        //another message to check if worked cuz my connection/filepath
        echo "<p>Database object created.</p>";
        //this sends the username and email and hashed password to userCRUD and create a new user in the database
        $result = $crud->User_info($username, $email, $hashed_password);
        //checks if the user was successfully created
        if($result){
            echo "<div class='alert alert-success'>";
            echo "User Created!";
            echo "</div>";
        }
        //
        else{
            echo "<div class='alert alert-danger'>";
            echo "User was not created.";
            echo "</div>";
        }
    
    } 
    catch (PDOException $e) {
        //error message if there is a database error
        echo "<div class='alert alert-danger'>";
        echo "Database Error: " . htmlspecialchars($e->getMessage());
        echo "</div>";

    } 
    catch (Exception $e) {

        //error message for other errors and such as passwords not matching
        echo "<div class='alert alert-danger'>";
        echo "Error: " . htmlspecialchars($e->getMessage());
        echo "</div>";
    }

?>