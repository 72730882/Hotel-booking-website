<?php
session_start();

// Perform logout logic
if (isset($_SESSION['user'])) {
    session_destroy(); // Destroy the session
    header("Location: index.php");
    exit();
} else {
    echo "logout_failure"; // Return a simple string
}
?>
