<?php include_once __DIR__ . '/../includes/header.php'; ?>
<?php
require_once __DIR__ . '/../includes/UserCRUD.php';
require_once __DIR__ . '/../includes/database.php';

$allUsers = new UserCRUD(new Database());
$users = $allUsers->getAllUsers();


?>
<main>
    <h1>Users</h1>
    <a href="../addUsers.php">Add user</a>
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                <p>
                    <span>email:
                        <?php echo htmlspecialchars($user['email']); ?>
                    </span>
                    <span>
                        username:
                        <?php echo htmlspecialchars($user['username']); ?>
                    </span>
                    <a class="btn btn-primary" href="../updateUser.php?id=<?php echo $user['id']; ?>">Edit</a>
                    <a class="btn btn-danger" href="../deleteUser.php?id=<?php echo $user['id']; ?>">Delete</a>
                </p>


            </li>


        <?php endforeach; ?>
    </ul>
</main>



<?php include_once __DIR__ . '/../includes/footer.php'; ?>