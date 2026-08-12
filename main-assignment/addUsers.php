<?php
//adds the userCRUD class 
require_once 'includes/UserCRUD.php';
//adds user file
require_once 'includes/user.php';
//add database file
require_once 'includes/database.php';

//checks if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    //get the username, email, password and comfirm_password from user in the form
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    //creates new objects for database and usercrud 
    $database = new Database();
    $userCRUD = new UserCRUD($database);

    // add the user to the database
    $result = $userCRUD->addUser(
        $username,
        $email,
        $password,
        $confirm_password
    );

    //checks if the user was successfully added
    if ($result) {
        echo "User added successfully!";
    } 
    else {
        echo "Error adding user.";
    }
}

?>
<!-- adds the header file -->
<?php include_once __DIR__ . '/includes/header.php'; ?>
<main>
    <!-- title -->
    <h1>Add User</h1>
    <!-- create form aand send info to addusers -->
    <form action="addUsers.php" method="POST">

        <!-- label for the username, email, password, comfirmpassword input -->
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required />
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required />
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required />
        </div>
        <div>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required />
        </div>
        <!-- submit user button -->
        <button type="submit">add user</button>


    </form>


</main>
<!-- adds the footer file -->
<?php include_once __DIR__ . '/includes/footer.php'; ?>
