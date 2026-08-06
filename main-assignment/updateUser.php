<?php

require_once "includes/database.php";

$database = new Database();
$conn = $database->connect();

$id = $_GET["id"];

$query = "SELECT * FROM users WHERE id=:id";
$stmt = $conn->prepare($query);
$stmt->execute([
":id"=>$id
]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $query = "UPDATE users
              SET username=:username,
                  email=:email
              WHERE id=:id";

    $stmt = $conn->prepare($query);

    $stmt->execute([

        ":username"=>$_POST["username"],
        ":email"=>$_POST["email"],
        ":id"=>$id

    ]);

    header("Location: dashboard.php");
    exit;
}

?>

<form method="post">

Username

<input
type="text"
name="username"
value="<?php echo htmlspecialchars($user["username"]); ?>">

Email

<input
type="email"
name="email"
value="<?php echo htmlspecialchars($user["email"]); ?>">

<button>

Update User

</button>

</form>