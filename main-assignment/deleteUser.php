<?php
//add database file
require_once "includes/database.php";
//create new object database and connects to it
$database = new Database();
$conn = $database->connect();
//check if user id was in the link
if(isset($_GET["id"])){

    //sql query to delete the user with the matching id
    $query="DELETE FROM admin_users WHERE id=:id";

    //prepare the sql statement before it is executed
    $stmt=$conn->prepare($query);

    //executes the query and adds the user id to the placeholder
    $stmt->execute([":id"=>$_GET["id"]]);
}
//brings the user back to the user list after deleting the user
header("Location: users_list.php");
exit;

?>