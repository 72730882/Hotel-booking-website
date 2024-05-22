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
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
            <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Addis Hotel</a>
            <button class="navbar-toggler shadow-none" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active me-2" aria-current="page" href="#">Home <span
                                class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="facilities.php">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="about.php">About</a>
                    </li>

                </ul>
                
                <div class="d-flex">
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal"
                        data-bs-target="#registerModal">
                        Login
                    </button>
                    <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal"
                        data-bs-target="#registerModal">
                        Register
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i>User Login
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forget Password</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i> </i>User Registration
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row"></div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 p-0" mb-3>
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">phone Number</label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Picture</label>
                                <input type="file" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Address</label>
                                <textarea class="form-control shadow-none" rows="1"></textarea>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">pincode</label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 p-0 mb-10">
                                <label class="form-label">Age</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">password</label>
                                <input type="password" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Confirm password</label>
                                <input type="password" class="form-control shadow-none">
                            </div>
                        </div>
                    </div>
                    <div clas="text-center my-1">
                        <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
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
                    <img src="images/carousel/im4.jpg" class="d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/im3.jpg" class="d-block" />
                </div>
            </div>
        </div>
    </div>
    <!----- check availability form---->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow m-10 P-4 rounded">
                <h5 class="mb-4 mt-3">Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500">Check-in</label>
                            <input type="date" class="form-control shadow-none ">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500">Check-out</label>
                            <input type="date" class="form-control shadow-none ">
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500">Adult</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500">Children</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit"
                                class="btn btn-dark text-black shadow-none boarder white customer-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!------- our rooms ----->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3 ">
                <div class="card border-0 shadow" style="max-width: 300px; margin: auto;">
                    <img src="images/rooms/I1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Simple Room</h5>
                        <h6 class="mb-3">100USD per night</h6>
                        <div class="features mb-3">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">2 Rooms</span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">1 Bathroom</span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">1 Bed</span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">Kitchen</span>
                        </div>
                        <div class="facilities mb-3">
                            <h6 class="mb-1 mt-3">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">wi fi</span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">Room Heater</span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">Television</span>
                        </div>
                        <div class="rating mb-3">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-1">
                            <a href="#" class="btn btn-primary">Book Now</a>
                            <a href="#" class="btn btn-sa btn-outline-dark rounded-0 fw-bold shadow-none">More
                                details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3 ">
                <div class="card border-0 shadow" style="max-width: 300px; margin: auto;">
                    <img src="images/rooms/I2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Luxury Room</h5>
                        <h6 class="mb-3">200USD per night</h6>
                        <div class="features mb-3">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">2 Rooms</span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">1 Bathroom</span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">2 Bed</span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">Kitchen</span>
                        </div>
                        <div class="facilities mb-3">
                            <h6 class="mb-1 mt-3">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">wi fi</span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">Room Heater</span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">Ac</span>
                        </div>
                        <div class="rating mb-3">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-1">
                            <a href="#" class="btn btn-primary">Book Now</a>
                            <a href="#" class="btn btn-sa btn-outline-dark rounded-0 fw-bold shadow-none">More
                                details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3 ">
                <div class="card border-0 shadow" style="max-width: 300px; margin: auto;">
                    <img src="images/rooms/I3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Luxury Room </h5>
                        <h6 class="mb-3">300USD per night</h6>
                        <div class="features mb-3">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">2 Rooms</span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">2 Bathroom</span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">3 Bed</span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">Kitchen</span>
                        </div>
                        <div class="facilities mb-3">
                            <h6 class="mb-1 mt-3">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">wi fi</span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">Room Heater</span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">Television</span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">Ac</span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">spa</span>
                        </div>
                        <div class="rating mb-3">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-1">
                            <a href="#" class="btn btn-primary">Book Now</a>
                            <a href="#" class="btn btn-sa btn-outline-dark rounded-0 fw-bold shadow-none">More
                                details</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
            </div>
            <!--------- our facilities --------->

            <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
            <div class="container">
                <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                        <img src="images/features/F1.jpg" width="100px">
                        <h5 class="mt-3">Wifi</h5>
                    </div>
                    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                        <img src="images/features/FT.jpg" width="100px">
                        <h5 class="mt-3">Television</h5>
                    </div>
                    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                        <img src="images/features/FA.png" width="100px">
                        <h5 class="mt-3">Air conditioner</h5>
                    </div>
                    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                        <img src="images/features/FH.png" width="100px">
                        <h5 class="mt-3">Room heater</h5>
                    </div>
                    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                        <img src="images/features/Ff.jpg" width="100px">
                        <h5 class="mt-3">fitness center</h5>
                    </div>
                    <div class="col-lg-12 text-center mt-5">
                        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities
                            >>></a>
                    </div>
                </div>
            </div>

            <!---------- Testimonials ---------------->
            <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
            <div class="container">
                <div class="swiper swiper-testimonials ">
                    <div class="swiper-wrapper  bg-white ">
                        <div class="swiper-slide bg-white p-4  ">
                            <div class="profile d-flex  align-items-center m-4">
                                <img src="images/testimonial/david.jpg" width="30px">
                                <h6 class="m-0 ms-2">David</h6>
                            </div>
                            <p> Addis Hotel is now my go-to choice whenever I visit the city."</p>
                            <div class="rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>
                        <div class="swiper-slide bg-white py-2 px-5">
                            <div class="profile d-flex  align-items-center m-4">
                                <img src="images/testimonial/mich.jpg" width="30px">
                                <h6 class="m-0 ms-2">Michael</h6>
                            </div>
                            <p>As a seasoned traveler, I can confidently say that Addis Hotel is a true gem. The
                                combination of luxurious accommodations, world-class facilities, and impeccable service
                                is unparalleled. </p>
                            <div class="rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>
                        <div class="swiper-slide bg-white py-2 px-5">
                            <div class="profile d-flex  align-items-center m-4">
                                <img src="images/testimonial/sara.jpg" width="30px">
                                <h6 class="m-0 ms-2">Salah</h6>
                            </div>
                            <p>I had the pleasure of hosting a corporate event at Addis Hotel, and I must say, the
                                experience was flawless.</p>
                            <div class="rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>
                        <div class="swiper-slide bg-white py-2 px-5">
                            <div class="profile d-flex  align-items-center m-4">
                                <img src="images/testimonial/eml.jpg" width="30px">
                                <h6 class="m-0 ms-2">Emily</h6>
                            </div>
                            <p>As a frequent business traveler, I've stayed at many hotels, but Addis Hotel stands out
                                as the best. The level of service and attention to detail is truly remarkable.</p>
                            <div class="rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>
                        <div class="swiper-slide bg-white py-2 px-5">
                            <div class="profile d-flex  align-items-center m-4">
                                <img src="images/testimonial/gex.jpg" width="30px">
                                <h6 class="m-0 ms-2">Gexe</h6>
                            </div>
                            <p>"My family and I recently stayed at Addis Hotel for a week-long vacation, and it was an
                                absolute delight. The spacious rooms, impressive facilities, and delicious dining
                                options made our trip truly exceptional.</p>
                            <div class="rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <!---------- reach us ---------------->

            <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                        <iframe class="w-100 rounded" height="320px"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126115.11523351159!2d38.7781448!3d8.96317685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85cef5ab402d%3A0x8467b6b037a24d49!2sAddis%20Ababa%2C%20Ethiopia!5e0!3m2!1sen!2sus!4v1715893357712!5m2!1sen!2sus"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="bg-white p-4 rounded mb-4">
                            <h5>Call Us</h5>
                            <a href="tel: +111 2222 333 3444"
                                class="d-inline-block mb-2 text-decoration-none text-dark"><i
                                    class="bi bi-telephone-fill"></i>+111 2222 333 3444</a><br>
                            <a href="tel: +111 2222 333 3444"
                                class="d-inline-block mb-2 text-decoration-none text-dark"><i
                                    class="bi bi-telephone-fill"></i>+111 2222 333 3444</a>
                        </div>
                        <div class="bg-white p-4 rounded mb-4">
                            <h5>Follow Us</h5>
                            <a href="#" class="d-inline-block mb-3 "><span class="badge bg-light text-dark fs-6 p-2"><i
                                        class="bi bi-twitter me-1"></i>Twitter</span></a><br>
                            <a href="#" class="d-inline-block mb-3 "><span class="badge bg-light text-dark fs-6 p-2"><i
                                        class="bi bi-facebook me-1"></i>Facebook</span></a><br>
                            <a href="#" class="d-inline-block "><span class="badge bg-light text-dark fs-6 p-2"><i
                                        class="bi bi-instagram me-1"></i>Instagram</span></a><br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid bg-white mt-5">
                <div class="row">
                    <div class="col-lg-4 p-4">
                        <h3 class="h-font fw-bold fs-3 mb-2">ADDIS HOTEL</h3>
                        <p class="text">
                            Welcome to Addis Hotel, a premier destination for travelers seeking a blend of comfort,
                            convenience, and exceptional service. Nestled in the vibrant heart of the city.
                        </p>
                    </div>
                    <div class="col-lg-4 p-4">
                        <h5 class="mb-3">LINKS</h5>
                        <a href="#"
                            class="d-inline-block mb-2 text-dark text-alignment -flex text-decoration-none">Home</a><br>
                        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
                        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a><br>
                        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About us</a>
                    </div>
                    <div class="col-lg-4 p-4">
                        <h5 class="mb-3">Follow Us</h5>
                        <a href="#" class="d-inline-block mb-2 text-dark text-alignment -flex text-decoration-none"><i
                                class="bi bi-twitter me-1"></i>Twitter</a><br>
                        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none"><i
                                class="bi bi-facebook me-1"></i>facebook</a><br>
                        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none"><i
                                class="bi bi-instagram me-1"></i>Instagram</a><br>
                    </div>
                </div>
            </div>
            <footer class="text-center bg-dark text-white p-4 m-0 ">Designed and Developed by Addis Hotel</footer>

           
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
            <script>
            var swiper = new Swiper(".swiper-testimonials", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                slidesPerView: "3",
                loop: true,
                coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                    },
                    640: {
                        slidesPerView: 1,
                    },
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    }
                }
            });
            </script>
             <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
            </script>
            <script src="assets/script.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


</body>
</html>