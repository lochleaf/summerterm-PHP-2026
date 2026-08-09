<?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
   
    require_once '../includes/database.php';
    require_once '../includes/UserCRUD.php';

    if($_SERVER['REQUEST_METHOD'] !== 'POST'){
        header('Location: ../index.php?page=register');
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

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        if($hashed_password === false){
            throw new Exception("Password hashing runtime error");
        }
        $database = new Database();
        echo "<p>Database object created.</p>";
        $crud = new UserCRUD($database);
        echo "<p>Database object created.</p>";
        $result = $crud->User_info($username, $email, $hashed_password);
        if($result){
            echo "<div class='alert alert-success'>";
            echo "User Created!";
            echo "</div>";
        }

        #if($crud->User_info($username, $email, $hashed_password)){
            //if it returns try print a nice green allert message
            #echo "<div class='alert alert-success'> User Created</div>";
        #}
        else{
            echo "<div class='alert alert-danger'>";
            echo "User was not created.";
            echo "</div>";
        }
    #}catch (PDOException $e){
        #if($e->getCode() == 23000){
            #echo "<div class='alert alert-danger'>Registration Failed ... the username or email has already been taken</div>";
        #}
        #else{
           # echo "<div class='alert alert-danger'>Database Error: " . htmlspecialchars($e->getMessage()) . "</div>";
        #}
    
    } catch (PDOException $e) {

        echo "<div class='alert alert-danger'>";
        echo "Database Error: " . htmlspecialchars($e->getMessage());
        echo "</div>";

    } catch (Exception $e) {

        echo "<div class='alert alert-danger'>";
        echo "Error: " . htmlspecialchars($e->getMessage());
        echo "</div>";
    }

    #include_once 'includes/footer.php';
?>