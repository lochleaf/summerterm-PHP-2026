<?php

    //this adds the session file so we can use the session class
    require_once "session.php";

    //start the SESSION
    session::start();

    //Logs the user & out and clears the seesion info
    session::logout();

    //this make the user come back to the home page where the login after they finish with their session
    header("Location: ../views/home.php");
    exit;

?>