<?php
include_once 'templates/header.php';
require_once 'inc/database.php';
require_once 'inc/orderCRUD.php';

    if($_SERVER['REQUEST_METHOD'] !== 'POST'){
        header('Location: index.php');
        exit;
    }

    try{
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = $_POST['phone'];
        $address= $_POST['address'];

        $size = $_POST['size'];
        $shape= $_POST['shape'];

        $type = implode(", ", $_POST['type']);
        $toppings = implode(", ", $_POST['toppings']);
        $breads = implode(", ", $_POST['breads']);
        $drinks = implode(", ", $_POST['drinks']);
        $sauces = implode(", ", $_POST['sauces']);

        $request= $_POST['request'];

        $database = new Database();

        $order = new OrderCRUD($database);

        if($order->create_order($name, $email, $phone, $address, $size, $shape, $type, $toppings, $breads, $drinks, $sauces, $request)){
            //if it returns try print a nice green allert message
            echo "<div class='alert alert-success'> Order Created</div>";
        }

        }catch (PDOException $e){
            if($e->getCode() == 23000){
                echo "<div class='alert alert-danger'>Order Failed ...</div>";
            }
            else{
                echo "<div class='alert alert-danger'>Database Error: " . htmlspecialchars($e->getMessage()) . "</div>";
            }
        }
        include_once 'templates/footer.php';
?>