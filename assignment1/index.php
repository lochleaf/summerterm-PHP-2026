<?php

require_once "config.php";
require_once "randomHandler.php";

// Instantiate using the newly named class
$randomHandlerInstance = new randomHandler(RANDOM_BASE_URL);
$randomUsers = $randomHandlerInstance->fetchInfo();

// Include the isolated markup layer
require_once "views/random.view.php";

?>
