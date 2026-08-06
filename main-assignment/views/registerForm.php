        
<!-- include the header template that will connect the css o the index -->
<?php include_once 'includes/header.php'; ?>

        <form action="admin/register.php" method="POST">

            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
                            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
                            
            <div class="form-group">
                <label for="address">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <button type="submit">Register</button>

        </form>

<!-- includes the footer -->
<?php include_once 'includes/footer.php'; ?>