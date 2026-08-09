
        <form action="admin/register.php" method="POST">

            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
                            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
                            
            <div class="form-group">
                <label for="address">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="address">Confirm_Password</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
            </div>

            <button type="submit">Register</button>

        </form>
