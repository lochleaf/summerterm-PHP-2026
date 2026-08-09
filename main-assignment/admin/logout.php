<?php

    require_once "session.php";

    session::start();

    session::logout();

    header("Location: login.php");
    exit;

?>