<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addis Hotel - ABOUT</title>
    <link rel="stylesheet" href="assets/common.css">
    <?php require('inc/links.php')?>
    <style>
        .box{
            border-top-color: var(--teal) !important;
        }
    </style>

</head>

<body class="bg-light">
    <?php require('inc/header.php')?>
    
    <div class="my-5 px-4">
        <h2 class = "fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class = "text-center mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
             Odit molestiae quod repudiandae <br> similique dolores ipsa repellendus ullam fuga iure velit.</p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Lorem ipsum dolor sit</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                     Possimus nobis praesentium incidunt aliquam placeat. Inventore, consequatur?
                </p>
            </div>
            <div class="col lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1" >
                <img src="images/about/about.png" class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class = "bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/hotel.svg" width="70px">
                    <h4 class="mt-3">100+ ROOMS</h4>
                </div>

            </div>
             <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class = "bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/customers.svg" width="70px">
                    <h4 class="mt-3">200+CUSTOMERS</h4>
                </div>

            </div>
             <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class = "bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/rating.svg" width="70px">
                    <h4 class="mt-3">150+ RATINGS</h4>
                </div>

            </div>
             <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class = "bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/staff.svg" width="70px">
                    <h4 class="mt-3">200+ STAFS</h4>
                </div>

            </div>
        </div>
    </div>

    <h3 >MANGEMENT TEAM</h3>

    <?php require('inc/footer.php')?>

</body>

</html>