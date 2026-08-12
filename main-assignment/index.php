<!-- add the header includes that will connect the css to the index -->
<?php include_once 'includes/header.php'; ?>
    
<?php
        //get the page value from the linked file and connects to the nav in the header
        //and uses home as default page
        $page = $_GET["page"] ?? "home";

        //check which page the user click on the nav
        switch ($page) {

            //first case if the user click on home goes to home and stop case
            case "home":
                require "views/home.php";
                break;
            //secong case if the user click on registerform goes to the registerform
            case "register":
                require "views/registerForm.php";
                break;
        //I just want to let you know I made this because it was to make sure the nav work because 
        //I had so many file issus and im scared to take this off now and break things which now I dont have time to fix sadly
        }

?>

<!-- adds the footer file -->
<?php include_once 'includes/footer.php'; ?>