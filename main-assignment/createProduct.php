<!-- add the header file -->
<?php include_once __DIR__ . '/includes/header.php'; ?>
<?php
//add the database file
require_once __DIR__ . '/includes/database.php';
//add the productCRUD file
require_once __DIR__ . '/includes/ProductCRUD.php';

//check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //create new object database and connects to it 
    $database = new Database();
    $conn = $database->connect();

    //get the product name,description,price,quantity,image enter in the form 
    $productName = $_POST['productName'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $image = $_POST['image'];

    //sql query to add the product info into the product table 
    $query = "INSERT INTO products (productName, description, price, quantity, image) VALUES (:productName, :description, :price, :quantity, :image)";
    //prepare the sql statement before it is executed
    $stmt = $conn->prepare($query);
    //execute the query and adds the product info into placeholders
    $stmt->execute([':productName' => $productName,':description' => $description,':price' => $price,':quantity' => $quantity,':image' => $image]);
    //bring the user to the product list after adding the products yeshhh
    header("Location: product_list.php");
    exit;
}

?>

<main>
    <!-- create the form and send the product info to createproduct-->
    <form action="createProduct.php" method="POST">
        <!-- create a section for the product name, description, price, quantity, image -->
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
        <!-- button submit so to addproduct -->
        <button type="submit">Add Product</button>
    </form>

</main>

<!-- adds footer file -->
<?php include_once __DIR__ . '/includes/footer.php'; ?>