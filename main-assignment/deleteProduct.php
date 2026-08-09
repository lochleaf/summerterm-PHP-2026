<?php

require_once "includes/database.php";

$database = new Database();
$conn = $database->connect();

if(isset($_GET["id"])){

    $query = "DELETE FROM products WHERE id=:id";

    $stmt = $conn->prepare($query);

    $stmt->execute([
        ":id"=>$_GET["id"]
    ]);
}

header("Location: product_list.php");
exit;

?>