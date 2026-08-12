
   <body>

        <!-- contain the main content of the webpage -->
        <main>

            <!-- creates the login form and sends the information to the login.php page -->
            <form action="admin/login.php" method="POST">

                <!-- creates section for the email input -->
                <div class="form-group">
                    <!-- label for the email input -->
                    <label for="email">Email</label>
                    <!-- allow the user to enter their email address -->
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                 
                <!-- create a section for the password input -->
                <div class="form-group">
                    <!-- label for the password input -->
                    <label for="address">Password</label>
                    <!-- allow the user to enter their password -->
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>

                <!-- button used to submit the login form  -->
                <button type="submit">Login</button>

            </form>

        </main>