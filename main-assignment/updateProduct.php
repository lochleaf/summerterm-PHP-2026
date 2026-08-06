<?php
require_once "includes/database.php";

$database = new Database();
$conn = $database->connect();

$id = $_GET["id"];

// Get current product
$query = "SELECT * FROM products WHERE id=:id";
$stmt = $conn->prepare($query);
$stmt->execute([":id"=>$id]);

$product = $stmt->fetch(PDO::FETCH_ASSOC);

// Update
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $query = "UPDATE products
              SET productName=:name,
                  description=:description,
                  price=:price,
                  quantity=:quantity
              WHERE id=:id";

    $stmt = $conn->prepare($query);

    $stmt->execute([
        ":name"=>$_POST["name"],
        ":description"=>$_POST["description"],
        ":price"=>$_POST["price"],
        ":quantity"=>$_POST["quantity"],
        ":id"=>$id
    ]);

    header("Location: views/products.php");
    exit;
}
?>

<form method="post">

Name
<input type="text" name="name"
value="<?php echo htmlspecialchars($product["productName"]); ?>">

Description
<textarea name="description"><?php echo htmlspecialchars($product["description"]); ?></textarea>

Price
<input type="number" step="0.01"
name="price"
value="<?php echo $product["price"]; ?>">

Quantity
<input type="number"
name="quantity"
value="<?php echo $product["quantity"]; ?>">

<button type="submit">
Update Product
</button>

</form>