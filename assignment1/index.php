<?php

require_once "config.php";
require_once "dogHandler.php";

// Modified variables to explicitly state "lesson" context
$activePage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Instantiate using the newly named classroom class
$dogHandlerInstance = new dogHandler(DOG_BASE_URL, DOG_API_KEY);
$dogRecords = $dogHandlerInstance->fetchCurrentPopular($activePage);

// Include the isolated markup layer
require_once "views/dogs.view.php";

?>
