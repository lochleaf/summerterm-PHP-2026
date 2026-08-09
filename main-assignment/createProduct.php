<?php include_once __DIR__ . '/includes/header.php'; ?>
<?php
require_once __DIR__ . '/includes/database.php';
require_once __DIR__ . '/includes/ProductCRUD.php';

$database = new Database();
$conn = $database->connect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $database = new Database();
    $conn = $database->connect();

    $productName = $_POST['productName'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $image = $_POST['image'];

    $query = "INSERT INTO products (productName, description, price, quantity, image) VALUES (:productName, :description, :price, :quantity, :image)";
    $stmt = $conn->prepare($query);
    $stmt->execute([
        ':productName' => $productName,
        ':description' => $description,
        ':price' => $price,
        ':quantity' => $quantity,
        ':image' => $image
    ]);

    header("Location: product_list.php");
    exit;
}


?>


<main>
    <form action="createProduct.php" method="POST">
        <div>
            <lable for="productName">Product Name</lable>
            <input type="text" name="productName" id="productName" placeholder="Product Name">
        </div>
        <div>
            <lable for="description">Description</lable>
            <input type="text" name="description" id="description" placeholder="Description">
        </div>
        <div>
            <lable for="price">Price</lable>
            <input type="number" name="price" id="price" placeholder="Price">
        </div>
        <div>
            <lable for="quantity">Quantity</lable>
            <input type="number" name="quantity" id="quantity" placeholder="Quantity">
        </div>
        <div>
            <lable for="image">Image</lable>
            <input type="text" name="image" id="image" placeholder="Image URL">
        </div>
        <button type="submit">Add Product</button>
    </form>


</main>




<?php include_once __DIR__ . '/includes/footer.php'; ?>