<?php
require_once "includes/database.php";
include_once "includes/header.php";

$database = new Database();
$conn = $database->connect();

if(!isset($_GET["id"])){
    die("Product not found.");
}

$id = $_GET["id"];

$query = "SELECT * FROM products WHERE id = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam(":id", $id);
$stmt->execute();

$product = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$product){
    die("Product not found.");
}
?>

<main>

    <h1><?php echo htmlspecialchars($product["productName"]); ?></h1>

    <img src="../images/<?php echo htmlspecialchars($product["image"]); ?>" width="300">

    <p><strong>Price:</strong> $<?php echo $product["price"]; ?></p>

    <p><strong>Quantity:</strong> <?php echo $product["quantity"]; ?></p>

    <p><?php echo htmlspecialchars($product["description"]); ?></p>

</main>

<?php include_once "includes/footer.php"; ?>