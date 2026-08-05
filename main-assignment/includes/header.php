<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Course Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <header>

        <div>
            <img src="" alt="" width="">
        </div>

        <nav>

            <ul>

                <li><a>HOME</a></li>
                <li><a>PRODUCTS</a></li>
                <li><a>REGISTER</a></li>

            </ul>
        </nav>

        <form action="../admin/login.php" method="POST">

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

            <button type="submit">Login</button>

        </form>

    </header>

</body>