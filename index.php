<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addis Hotel - Home</title>
    <link rel="stylesheet" href="assets/common.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body class="bg-light">
    <?php require('inc/header.php')?>
    <!------ cayousel ------>
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/im1.jpg" class="d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/im5.jpg" class="d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/im3.jpg" class="d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/im4.jpg" class="d-block" />
                </div>
            </div>
        </div>
    </div>
    <!----- check availability ---->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 bg-white shadow m-10 P-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3">
                            <label class="form-label" style="font-weight: 500">Check-in</label>
                            <input type="date" class="form-control shadow-none ">
                        </div>
                        <div class="col-lg-3">
                            <label class="form-label" style="font-weight: 500">Check-out</label>
                            <input type="date" class="form-control shadow-none ">
                        </div>
                        <div class="col-lg-2">
                            <label class="form-label" style="font-weight: 500">Adult</label>
                            <select class="form-select shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <label class="form-label" style="font-weight: 500">Children</label>
                            <select class="form-select shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1">
                            <button type="submit" class="btn btn-dark text-black shadow-none boarder white customer-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br><br><br>
    <br><br><br>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </script>
    <script src="assets/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
    var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        lickable: true,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        }
    });
    </script>

</body>

</html>