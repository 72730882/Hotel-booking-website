<?php
// booking_success.php

// Mock booking details (replace with actual booking details)
$bookingDetails = [
    'name' => 'John Doe',
    'email' => 'john.doe@example.com',
    'phone' => '+1234567890',
    'checkin' => '2024-07-01',
    'checkout' => '2024-07-05',
    'adults' => 2,
    'children' => 1,
    'total_price' => 400.00, // in USD
];

// Generate a unique payment code
$paymentCode = strtoupper(substr(md5(time()), 0, 10));

// Include header and links
include('inc/header.php');
include('inc/links.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Success - Addis Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/common.css">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <h2 class="text-center text-success">Booking Successful!</h2>
                <p class="text-center">Thank you for booking with Addis Hotel. Your booking details are as follows:</p>
                <div class="row mt-4">
                    <div class="col-md-6 mb-3">
                        <h5>Booking Details</h5>
                        <ul class="list-group">
                            <li class="list-group-item">Name: <?php echo $bookingDetails['name']; ?></li>
                            <li class="list-group-item">Email: <?php echo $bookingDetails['email']; ?></li>
                            <li class="list-group-item">Phone: <?php echo $bookingDetails['phone']; ?></li>
                            <li class="list-group-item">Check-in Date: <?php echo $bookingDetails['checkin']; ?></li>
                            <li class="list-group-item">Check-out Date: <?php echo $bookingDetails['checkout']; ?></li>
                            <li class="list-group-item">Adults: <?php echo $bookingDetails['adults']; ?></li>
                            <li class="list-group-item">Children: <?php echo $bookingDetails['children']; ?></li>
                            <li class="list-group-item">Total Price: $<?php echo number_format($bookingDetails['total_price'], 2); ?> USD</li>
                        </ul>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h5>Payment Details</h5>
                        <p>Your payment code is: <strong><?php echo $paymentCode; ?></strong></p>
                        <p>Please use the following methods to complete your payment:</p>
                        <ul class="list-group">
                            <li class="list-group-item">Credit/Debit Card</li>
                            <li class="list-group-item">Bank Transfer</li>
                            <li class="list-group-item">Mobile Payment</li>
                            <li class="list-group-item">PayPal</li>
                        </ul>
                        <p class="mt-3">Once your payment is confirmed, you will receive a confirmation email with your booking details.</p>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a href="index.php" class="btn btn-primary">Return to Home</a>
                    <a href="rooms.php" class="btn btn-secondary">Book Another Room</a>
                </div>
            </div>
        </div>
    </div>

    <?php include('inc/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
