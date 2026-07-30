<?php
//this will include the template/meta info
include_once 'templates/header.php';
//this will connect autamatically to the database once/to get info from those files
require_once 'inc/database.php';
//this will connect autamatically to the CRUD once/to get info from those files
require_once 'inc/orderCRUD.php';

    //this is to check if the page was accessed and if the user did not submit form and then send them back to index.php
    if($_SERVER['REQUEST_METHOD'] !== 'POST'){
        header('Location: index.php');
        exit;
    }
    
    try{
        //get the name/email of the customer and remove spaces
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        //get phone/address of the customer
        $phone = $_POST['phone'];
        $address= $_POST['address'];

        //get Customer order
        $size = $_POST['size'];
        $shape= $_POST['shape'];

        //converted the selected checkboxes into string that has added comma if user checks mutiple/when info form is submitted to the SQL FOrm
        $type = implode(", ", $_POST['type']);
        $toppings = implode(", ", $_POST['toppings']);
        $breads = implode(", ", $_POST['breads']);
        $drinks = implode(", ", $_POST['drinks']);
        $sauces = implode(", ", $_POST['sauces']);

        //get special request from the customer has enter yuppie
        $request= $_POST['request'];

        //creates a new Database object
        $database = new Database();

        //creates an OrderCRUD object that get passed in the database connection
        $order = new OrderCRUD($database);

        //so if this is successfully created it will echo the message 
        if($order->create_order($name, $email, $phone, $address, $size, $shape, $type, $toppings, $breads, $drinks, $sauces, $request)){
            //if it returns try print a nice green allert message
            echo "<div class='alert alert-success'> Order Created</div>";
        }
        //this will catch errors Oh no which has worked when I was working on my database part of the project
        }catch (PDOException $e){
            if($e->getCode() == 23000){
                echo "<div class='alert alert-danger'>Order Failed ...</div>";
            }
            else{
                echo "<div class='alert alert-danger'>Database Error: " . htmlspecialchars($e->getMessage()) . "</div>";
            }
        }
        //this includes the footer so will still see it hehe
        include_once 'templates/footer.php';
?>