<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addis Hotel - ABOUT</title>
    <link rel="stylesheet" href="assets/common.css">
    <?php require('inc/links.php')?>
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css " rel="stylesheet">

    <style>
        .box{
            border-top-color: var(--teal) !important;
        }
        .swiper-container {
            height: 300px; /* Adjust the height as needed */
        }
        .swiper-slide img {
            height: 100%;
            width: auto;
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

    <h3 class = "my-5 fw-bold h-font text-center">MANGEMENT TEAM</h3>

    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
            <?php
                $about_r=selectAll('team_details');
                $path=ABOUT_IMG_PATH;
                while ($row=mysqli_fetch_assoc($about_r)){
                    echo<<<data
                    <div class="swiper-slide text-center overflow-hidden rounded">
                    <img src="$path$row[picture]" class="w-100">
                    <h5 class = "mt-2">$row[name]</h5>
                    </div>
                    data;
                }
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <?php require('inc/footer.php')?>
    <script  src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper-->
    <script>
        var swiper = new Swiper(".mySwiper",{
            slidesPreview: 4,
            spaceBetween:40,
            pagination:{
                el:".swiper-pagination",
            },
            breakpoints:{
                320:{
                    slidesPreview:1,
                },
                640:{
                    slidesPreview:1,
                },
                768:{
                    slidesPreview:3,
                },
                1024:{
                    slidesPreview:3,
                },
            }
        });
    </script>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js "></script>


</body>

</html>