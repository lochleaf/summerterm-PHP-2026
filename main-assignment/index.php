<!-- include the header template that will connect the css o the index -->
<?php include_once 'includes/header.php'; ?>
    
<?php

        $page = $_GET["page"] ?? "home";

        switch ($page) {

            case "home":
                require "views/home.php";
                break;

            case "products":
                require "views/products.php";
                break;

            case "product":
                require "views/product.php";
                break;

            case "register":
                require "views/registerForm.php";
                break;

            default:
                require "views/home.php";
                break;
        }

?>

<!-- includes the footer -->
<?php include_once 'includes/footer.php'; ?>