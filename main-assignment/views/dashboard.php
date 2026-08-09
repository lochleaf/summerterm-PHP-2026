<?php
    require_once '../admin/session.php';

    Session::start();

    if(!Session::isLoggedIn()){
        header('Location: ../admin/login.php');
        exit;
    }
    
    $activeUsername = Session::get('username');

    require_once '../includes/header.php';
?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">
                <h4 class="mb-0">Protected User Space</h4>
            </div>
            <div class="card-body">
                <h5 class="card-title text-success">Welcome Back, <?php echo htmlspecialchars($activeUsername); ?>!</h5>
                <p class="card-text">You have passed security access barriers via object-oriented tracking metrics.</p>
                <hr>
                <a href="../admin/logout.php" class="btn btn-danger">Terminate Session Link (Logout)</a>
            </div>
        </div>
    </div>
</div>

<?php require_once '../includes/footer.php'; ?>