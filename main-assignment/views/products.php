<?php
require_once "../includes/database.php";
include_once "../includes/header.php";

$database = new Database();
$conn = $database->connect();

$query = "SELECT * FROM products";
$stmt = $conn->prepare($query);
$stmt->execute();

$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<main class="">

    <h1>All Products</h1>

    <div class="">

        <?php foreach($products as $product){ ?>

            <div class="">

               
                <img src="../images/IMG_4635.png?php echo htmlspecialchars($product['image']); ?>"
                     alt="<?php echo htmlspecialchars($product['productName']); ?>">

                <h2>
                    <?php echo htmlspecialchars($product['productName']); ?>
                </h2>

                <p>
                    <strong>Price:</strong>
                    $<?php echo htmlspecialchars($product['price']); ?>
                </p>

                <p>
                    <strong>In Stock:</strong>
                    <?php echo htmlspecialchars($product['quantity']); ?>
                </p>

                <a href="product.php?id=<?php echo $product['id']; ?>">
                    View Product
                </a>

            </div>

        <?php } ?>

    </div>

</main>

<?php
include_once "../includes/footer.php";
?>