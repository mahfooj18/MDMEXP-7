<?php
include("config.php");

session_destroy();

// Delete cookie
setcookie("user", "", time() - 3600);

header("Location: login.php");
?>