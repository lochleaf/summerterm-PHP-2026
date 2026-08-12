<?php
//add the database file
require_once "includes/database.php";

//create new object database and connects to it
$database = new Database();
$conn = $database->connect();
//get the product id from the link
$id = $_GET["id"];

//get current product info
$query = "SELECT * FROM products WHERE id=:id";
//prepare the sql statement before it is executed
$stmt = $conn->prepare($query);
//execute the query and add the id of the product placeholder
$stmt->execute([":id"=>$id]);

//get the product info as array
$product = $stmt->fetch(PDO::FETCH_ASSOC);

//checks if the update form was submitted
if($_SERVER["REQUEST_METHOD"]=="POST"){

    //sql query to update the product info
    $query = "UPDATE products SET productName=:name, description=:description, price=:price, quantity=:quantity WHERE id=:id";

    //prepare the sql statement before it is executed 
    $stmt = $conn->prepare($query);

    //execute the query and adds the product info into placeholders
    $stmt->execute([":name"=>$_POST["name"],":description"=>$_POST["description"],":price"=>$_POST["price"],":quantity"=>$_POST["quantity"],":id"=>$id]);

    //bring the user to the product list after updating the products yeshhh
    header("Location: product_list.php");
    exit;
}
?>
<!-- create the form -->
<form method="post">

    <!-- create product name, description, price, quantity -->
    <h2>Name</h2>
    <input type="text" name="name"
    value="<?php echo htmlspecialchars($product["productName"]); ?>">

    <h2>Description</h2>
    <textarea name="description"><?php echo htmlspecialchars($product["description"]); ?></textarea>

    <h2>Price</h2>
    <input type="number" step="0.01"
    name="price"
    value="<?php echo $product["price"]; ?>">

    <h2>Quantity</h2>
    <input type="number"
    name="quantity"
    value="<?php echo $product["quantity"]; ?>">

    <!-- submit button for updating the product -->
    <button type="submit">Update Product</button>

</form>