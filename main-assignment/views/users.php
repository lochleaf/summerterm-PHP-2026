<!-- adds the header file -->
<?php include_once __DIR__ . '/../includes/header.php'; ?>
<?php
//adds the userCRUD class to manage user database info 
require_once __DIR__ . '/../includes/UserCRUD.php';
//adds the database file
require_once __DIR__ . '/../includes/database.php';

//create userCRUD object and connects it to the database 
$allUsers = new UserCRUD(new Database());
//get all users from the database
$users = $allUsers->getAllUsers();


?>
<main>
    <h1>Users</h1>
    <!-- link to the page where new user can be added -->
    <a href="addUsers.php">Add user</a>
    <!-- list show all users -->
    <ul>
        <!-- loop through each user in the user array -->
        <?php foreach ($users as $user): ?>
            <!-- create a list item for each user -->
            <li>
                <p>
                    <!-- show the user email -->
                    <span>email:
                        <?php echo htmlspecialchars($user['email']); ?>
                    </span>
                    <!-- show the user username -->
                    <span>
                        username:
                        <?php echo htmlspecialchars($user['username']); ?>
                   
                    </span>
                    <!-- creates edit button and delete button using the user id  -->
                    <a class="btn btn-primary" href="./updateUser.php?id=<?php echo $user['id']; ?>">Edit</a>
                    <a class="btn btn-danger" href="./deleteUser.php?id=<?php echo $user['id']; ?>">Delete</a>
                </p>


            </li>

        <!-- end the loop through all users -->
        <?php endforeach; ?>
    </ul>
</main>

<!-- adds the footer file -->
<?php include_once __DIR__ . '/../includes/footer.php'; ?>