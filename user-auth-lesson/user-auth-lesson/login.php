<?php

?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Lesson Portal Access Login</h4>
            </div>
            <div class="card-body">
                
                <?php  ?>
                    <div class="alert alert-danger">
                        <?php  ?>
                    </div>
                <?php  ?>

                <form action="login.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Authenticate Identity</button>
                </form>
            </div>
            <div class="card-footer text-center">
                <a href="register.php" class="text-decoration-none">Create a new demonstration account</a>
            </div>
        </div>
    </div>
</div>

<?php  ?>