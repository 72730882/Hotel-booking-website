<?php
// login.php

require('admin/inc/db_config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Hash the password (consider using bcrypt or a stronger hashing method)
        $hashed_password = md5($password); // Example: using MD5 (not recommended for real applications)

        // Prepare SQL statement
        $stmt = $conn->prepare("SELECT * FROM `user_cred` WHERE `email`=? AND `password`=?");
        $stmt->bind_param("ss", $email, $hashed_password); // 'ss' indicates two string parameters
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Login successful
            session_start(); // Start session if not already started
            $_SESSION['email'] = $email; // Store user data in session if needed

            // Redirect or send response indicating success
            echo json_encode(['success' => true]);
            exit;
        } else {
            // Login failed
            echo json_encode(['success' => false, 'message' => 'Invalid credentials']);
            exit;
        }
    } else {
        // Handle case where email or password is missing
        echo json_encode(['success' => false, 'message' => 'Email and password are required']);
        exit;
    }
}
?>
