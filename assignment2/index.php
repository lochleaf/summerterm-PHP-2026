<?php

$page = $_GET["page"] ?? "pizza";

if ($page == "pizza") {
    require "views/pizzaform.view.php";
}

elseif ($page == "location") {
    require "views/location.view.php";
}

elseif ($page == "cart") {
    require "views/cart.view.php";
}

?>