<?php

?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Lesson 4 Account Registration</h4>
            </div>
            <div class="card-body">
                
                <?php  ?>
                    <div class="alert alert-<?php  ?>">
                        <?php  ?>
                    </div>
                <?php  ?>

                <form action="register.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Desired Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Secure Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password Verification</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Register Account</button>
                </form>
            </div>
            <div class="card-footer text-center">
                <a href="login.php" class="text-decoration-none">Return to login interface</a>
            </div>
        </div>
    </div>
</div>

<?php  ?>