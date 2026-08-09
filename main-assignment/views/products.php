<?php include_once __DIR__ . '/../includes/header.php'; ?>
<?php
require_once __DIR__ . '/../includes/ProductCRUD.php';
require_once __DIR__ . '/../includes/database.php';
$database = new Database();
$products = new ProductCRUD($database);
$allProducts = $products->getAllProducts();


?>

<main>
  <ul>
        <a href="./createProduct.php">Add Product</a>

      <?php foreach ($allProducts as $product): ?>
        <li>
            <h2><?php echo htmlspecialchars($product['productName']); ?></h2>
            <p><?php echo htmlspecialchars($product['description']); ?></p>
            <p>Price: $<?php echo htmlspecialchars($product['price']); ?></p>
            <p>Stock: <?php echo htmlspecialchars($product['quantity']); ?></p>
            <p><img width="100" heigh="100" src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['productName']); ?>"></p>
            <a class="btn btn-primary" href="./updateProduct.php?id=<?php echo $product['id']; ?>">Edit</a>
            <a  class='btn btn-danger' href="./deleteProduct.php?id=<?php echo $product['id']; ?>">Delete</a>
        
        </li>
      <?php endforeach; ?>


    </ul>

</main>


<?php require_once __DIR__ . './../includes/footer.php'; ?>

