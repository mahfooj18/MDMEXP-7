<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Dummy credentials
    if ($username == "admin" && $password == "1234") {
        $_SESSION['user'] = $username;

        // Cookie set (valid for 1 hour)
        setcookie("user", $username, time() + 3600);

        header("Location: dashboard.php");
    } else {
        echo "Invalid Login!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stytle.css">
    <title>Document</title>
    
</head>
<body>


<div class="main">
    

    <form method="POST">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <button type="submit">Login</button>
</form>


</div>
    
</body>
</html>

