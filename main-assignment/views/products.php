<?php include_once __DIR__ . '/../includes/header.php'; ?>
<?php
require_once __DIR__ . '/../includes/ProductCRUD.php';
require_once __DIR__ . '/../includes/database.php';
$database = new Database();
$products = new ProductCRUD($database);
$allProducts = $products->getAllProducts();


?>

<main>
  <!-- creates a list of the products -->
  <ul>
        <!-- link to the page where new product can be added -->
        <a href="./createProduct.php">Add Product</a>

      <!-- loop through each product in the $allProducts array -->
      <?php foreach ($allProducts as $product): ?>
        <li>
            <!-- output the product name safely on the page also outputs product price and the amount of product currently in stock and addds image and puts the name and text to the image -->
            <h2><?php echo htmlspecialchars($product['productName']); ?></h2>
            <p><?php echo htmlspecialchars($product['description']); ?></p>
            <p>Price: $<?php echo htmlspecialchars($product['price']); ?></p>
            <p>Stock: <?php echo htmlspecialchars($product['quantity']); ?></p>
            <p><img width="100" heigh="100" src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['productName']); ?>"></p>
            <a class="btn btn-primary" href="./updateProduct.php?id=<?php echo $product['id']; ?>">Edit</a>
            <a  class='btn btn-danger' href="./deleteProduct.php?id=<?php echo $product['id']; ?>">Delete</a>
            <!-- heres the edit and delete button that is connected to the update page that is connected to the id of the product-->
        </li>
      <!-- end the loop through all the products -->  
      <?php endforeach; ?>


    </ul>

</main>

<!-- adds the footer file for the webpage -->
<?php require_once __DIR__ . './../includes/footer.php'; ?>

