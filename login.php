<?php
session_start();
require('admin/inc/db_config.php');
require('admin/inc/essentials.php');

// Database connection details (replace with your own)
$servername = "localhost";
$username = "root";
$password = "";
$database = "hotel-booking-website";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get login credentials
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare SQL statement to fetch user data
$stmt = $conn->prepare("SELECT * FROM user_cred WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    // Store user information in the session
    $_SESSION['user'] = [
        'name' => $user['name'],
        'email' => $user['email'],
        'profile' => 'uploads/' . $user['profile']
    ];

    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid login credentials']);
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
