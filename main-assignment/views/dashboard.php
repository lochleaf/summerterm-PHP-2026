<?php
    //adds the session file so we can use the session class
    require_once '../admin/session.php';

    //start the session
    Session::start();

    //check if the user is not logged in
    if(!Session::isLoggedIn()){
        //so I bee trying to redirect the user back to the normal home page 
        //but it not working so it another file error test and error honestly 
        //now I cant really do more edits but just wanted u to know
        header('Location: ../admin/login.php');
        exit;
    }
    //get the username stored in the session
    $activeUsername = Session::get('username');
    //adds the header file for the webpage
    require_once '../includes/header.php';
?>
<!-- create bootstrap row and center the content -->
<div class="row justify-content-center">
    <!-- set the width of the content using bootstrap -->
    <div class="col-md-8">
        <!-- create bootstrap card with small shadow -->
        <div class="card shadow-sm">
            <!--  -->
            <div class="card-header bg-dark text-white">
                <!-- shows a title of the protected user area -->
                <h4 class="mb-0">Protected User Space</h4>
            </div>
            <!-- create the main body of the card -->
            <div class="card-body">
                <!-- welcome message using the logged in user username and safely output it too -->
                <h5 class="card-title text-success">Welcome Back, <?php echo htmlspecialchars($activeUsername); ?>!</h5>
                <p class="card-text">You have passed security access barriers via object-oriented tracking metrics.</p>
                <!-- add horizontal line to separate the content -->
                <hr>
                <!-- create logout button that takes the user to the logout page -->
                <a href="../admin/logout.php" class="btn btn-danger">Terminate Session Link (Logout)</a>
            </div>
        </div>
    </div>
</div>
<!-- adds the footer file for the webpage -->
<?php require_once '../includes/footer.php'; ?>