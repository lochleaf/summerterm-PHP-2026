
        <!-- creates the registration form and sends the information to register.php -->
        <form action="admin/register.php" method="POST">

            <!-- creates section for the username input -->
            <div class="form-group">
                <!-- label for the username input -->
                <label for="name">Username</label>
                <!-- inputs the username -->
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
                        
            <!-- creates section for the email input -->
            <div class="form-group">
                <!-- label for the email input -->
                <label for="email">Email</label>
                <!-- inputs the email -->
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
                 
            <!-- creates section for the password input -->
            <div class="form-group">
                <!-- label for the password input -->
                <label for="address">Password</label>
                <!-- inputs the password -->
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <!-- creates section for the confirm_password input -->
            <div class="form-group">
                <!-- label for the confirm_password input -->
                <label for="address">Confirm_Password</label>
                <!-- inputs the confirm_password -->
                <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
            </div>

            <!-- button submit the register form -->
            <button type="submit">Register</button>

        </form>
