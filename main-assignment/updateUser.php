<?php

require_once "includes/database.php";

    //create new object database and connects to it
    $database = new Database();
    $conn = $database->connect();
    //get the product id from the link
    $id = $_GET["id"];

    //get current user info
    $query = "SELECT * FROM admin_users WHERE id=:id";
    //prepare the sql statement before it is executed
    $stmt = $conn->prepare($query);
    //execute the query and add the id of the product placeholder
    $stmt->execute([":id" => $id]);
    //get the user info as array
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //checks if the update form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //sql query to update the user info
        $query = "UPDATE admin_users SET username=:username, email=:email WHERE id=:id";

        //prepare the sql statement before it is executed 
        $stmt = $conn->prepare($query);

        //execute the query and adds the user info into placeholders
        $stmt->execute([":username" => $_POST["username"],":email" => $_POST["email"],":id" => $id]);
        //bring the user to the user list after updating the user yeshhh
        header("Location: users_list.php");
        exit;
    }

?>
<!-- create the form and send the user info to updateuser -->
<form method="post" action="updateUser.php?id=<?php echo $id; ?>">

    <h2>Username</h2>

    <input type="text" name="username" value="<?php echo htmlspecialchars($user["username"]); ?>">

    <h2>Email</h2>

    <input type="email" name="email" value="<?php echo htmlspecialchars($user["email"]); ?>">

    <!-- submit button to update user -->
    <button type="submit">Update User</button>

</form>
