<?php
//adds the database file
require_once "includes/database.php";

//create new object database and connects to it 
$database = new Database();
$conn = $database->connect();

//check if id was in the link
if(isset($_GET["id"])){

    //sql query to delete the product with the matching id
    $query = "DELETE FROM products WHERE id=:id";

    //prepare the sql statement before it is executed
    $stmt = $conn->prepare($query);

    //executes the query andadds the product id to the placeholder
    $stmt->execute([":id"=>$_GET["id"] ]);
}
//brings the user back to the product list after deleting the product 
header("Location: product_list.php");
exit;

?>