<?php
require_once 'includes/UserCRUD.php';
require_once 'includes/User.php';
require_once 'includes/database.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];




    $database = new Database();
    $userCRUD = new UserCRUD($database);

    // Add the user to the database
    $result = $userCRUD->addUser(
        $username,
        $email,
        $password,
        $confirm_password
    );

    if ($result) {
        echo "User added successfully!";
    } else {
        echo "Error adding user.";
    }
}

?>
<?php include_once __DIR__ . '/includes/header.php'; ?>
<main>
    <h1>Add User</h1>
    <form action="addUsers.php" method="POST">
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
        <button type="submit">add user</button>


    </form>


</main>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
