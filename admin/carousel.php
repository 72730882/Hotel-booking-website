<?php
require('inc/essentials.php');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel - Carousel</title>
    <?php require('inc/links.php');  ?>
    <link rel="stylesheet" href="assets/common.css">

    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css " rel="stylesheet">
    <style>
    #dashboard-menu {
        position: fixed;
        height: 100%;
    }

    @media screen and (max-width: 991px) {
        #dashboard-menu {
            height: auto;
            width: 100%;
        }

        #main-content {
            margin-top: 60px;
        }

    }
    </style>
</head>

<body class="bg-light">

    <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
        <h3 class="mb-0 h-font">HOTEL BOOKING WEBSITE</h3>
        <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
    </div>

    <?php require('inc/header.php')  ?>
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4">
                <h3 class="mb-4">CAROUSEL</h3>
                <!------------Carousel section----------->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Images</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                            data-bs-target="#carousel-s"><i class="bi bi-plus-square"></i>  Add
                        </button>
    
                    </div>
                   <div class="row" id="carousel-data">
                    <div class="col-md-2 mb-3">
                    <div class="card bg-dark text-white">
                    <img src="../images/about/team.jpg" class="card-img" >
                    <div class="card-img-overlay text-end">
                        <button type="button" class="btn btn-danger btn-sm shadow-none">
                        <i class="bi bi-trash"></i>Delete
                        </button>
                        
                    </div>
                    <p class="card-text text-center px-3 py-2">Random name</p>
                    </div>
                    </div>

                   </div>
                </div>

                <!---------Carousel modal --------------->
                <div class="modal fade" id="carousel-s" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="carousel_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Image</h5>

                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Picture</label>
                                        <input type="file" name="carousel_picture" id="carousel_picture_inp"
                                            accept=".jbg, .png, .webp, .jpeg" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button"
                                        onclick="member_name.value='', carousel_picture.value=''"
                                        class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" onclick="upd_general(site_title.value, site_about.value)"
                                        class="btn btn-primary text-white bg-dark shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

           

            </div>
        </div>
    </div>
    <?php require('inc/scripts.php')?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="scripts/carousel.js"></script>
</body>

</html>