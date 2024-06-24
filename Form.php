<?php
session_start();

// Database connection details
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

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phonenum'];
$pin = $_POST['pincode'];
$dob = $_POST['dob'];
$profile = $_POST['profile'];
$password = $_POST['pass'];
$cpass = $_POST['cpass'];

// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO user_cred (name, email, address, phonenum, pincode, dob, profile, password, confirm_password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssss", $name, $email, $address, $phone, $pin, $dob, $profile, $password, $cpass);

// Execute the statement
if ($stmt->execute()) {
    header("Location: success.php");
    exit;
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>