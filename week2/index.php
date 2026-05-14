<?php
/**
 * Returns a span with a specific class name 
 */
function getStockStatues($quantity){
    if ($quantity == 0){
        return "<span class='status-out'>Out of stock.</span>";
    }
    elseif($quantity < 5){
        return "<span class='status-low'>Low stock, only $quantity left</span>";
    }
    else{
        return "<span class='stautes-ok'>In stock.</span>";
    }
}

function formatCurrency($amount){
    return "$" . number_format($amount, 2);
}

/**
 * Our data set (array)
 */
$products = [
    ["name"=> "Wireless Mouse", "price" => 29.99, "stock" => 12, "category" => "Accessories"],
    ["name"=> "Keyboard", "price" => 150.00, "stock" => 3, "category" => "Accessories"],
    ["name"=> "USB-C Cable", "price" => 15.75, "stock" => 0, "category" => "Cables"],
    ["name"=> "27-inch Monitor", "price" => 350.99, "stock" => 8, "category" => "Screens"]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, device-width=width">
    <title>Week Two | Logic & Data Structures</title>
    <meta name="description" content="this week we are looking at arrays and functions">
    <meta name="robots" content="noindex, nofollow">
    <!-- CSS Link -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <main>
            <section class="product-grid">
                <?php if(empty($products)): ?>
                    <p>No products found.</p>
                    <?php  foreach($products as $item): ?>
                        <div class="products-card">
                            <h3><?php htmlspecialchars($item['name']); ?> </h3>
                            <p class="category">Category: <?php htmlspecialchars($item['name']); ?> </p>
                            <p class="price">Price: <?php echo formatCurrency($item['price']); ?> </p>
                            <p class="status">Status: <?php echo getStockStatues($item['stock']); ?> </p>
                        </div>

                        <?php endforeach; ?>
                        <?php endif; ?>
            </section>

            <section class="system-logs">
                <?php 
                    $checks = 0;
                    $max_checks = 3;
                    while($checks < $max_checks){
                        $checks++;
                        echo"Dianostic $checks: <span class='status-diag'>Pass</span>";
                    }
                ?>
            </section>             

        </main>
        <footer>
            <p>&copy; <?php date("Y"); ?> </p>
        </footer>
    </header>
</body>

</html>