<?php
session_start();

// Perform logout logic
if (isset($_SESSION['user'])) {
    //unset($_SESSION['user']); // Unset or destroy session data
    session_destroy(); // Destroy the session
    $response = ['success' => true];
} else {
    $response = ['success' => false, 'message' => 'User session not found.'];
}

// Send JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
