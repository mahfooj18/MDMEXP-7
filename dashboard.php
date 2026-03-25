<?php
include("config.php");

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<h2>Welcome <?php echo $_SESSION['user']; ?></h2>

<?php
if (isset($_COOKIE['user'])) {
    echo "<p>Cookie User: " . $_COOKIE['user'] . "</p>";
}
?>

<a href="logout.php">Logout</a>