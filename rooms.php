<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Addis Hotel - contact</title>
  <link rel="stylesheet" href="assets/common.css">
  <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css " rel="stylesheet">

  <?php require ('inc/links.php'); ?>

</head>

<body class="bg-light">
  <?php require ('inc/header.php') ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
    <div class="h-line bg-dark"></div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3  col-md-12 mb-lg-0 mb-4 ps-4">
        <nav class="navbar navbar-expand-lg bg-light bg-white rounded shadow">
          <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2">FILTERS</h4>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
              data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column width=30px align-items-stretch mt-2" id="filterDropdown">
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                <label class="form-label">Check-in</label>
                <input type="date" class="form-control shadow-none mb-3">
                <label class="form-label">Check-out</label>
                <input type="date" class="form-control shadow-none">

              </div>
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                <div class="nb-2">
                  <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                  <label class="form-check-label" for="f1">Facility one</label>

                </div>
                <div class="nb-2">
                  <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                  <label class="form-check-label" for="f2">Facility two</label>

                </div>
                <div class="nb-2">
                  <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                  <label class="form-check-label" for="f3">Facility three</label>

                </div>

              </div>
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                <div class="d-flex">
                  <div class="me-3">
                    <label class="form-lable">Adults</label>
                    <input type="number" class="form-control shadow-none">
                  </div>
                  <div>
                    <label class="form-lable">Children</label>
                    <input type="number" class="form-control shadow-none">
                  </div>
                </div>



              </div>

            </div>
          </div>
        </nav>
      </div>
      <?php
      $room_res = select(
        " SELECT * FROM `rooms` WHERE `status`=? AND `removed`=? ORDER BY `id` DESC LIMIT 3 ",
        [1, 0],
        'ii'
      );
      while ($room_data == mysqli_fetch_assoc($room_res)) {

        //get features of room
      
        $fea_q = mysqli_query($con, "SELECT * FROM `features` f
          INNER JOIN `room_features` rfea ON f.id =rfea.features_id
          WHERE rfea.room_id='$room_data[id]'");

        $features_data = "";
        while ($fea_row = mysqli_fetch_assoc($fea_q)) {
          $features_data .= "<span class='badge rounded-pill bg-light text-dark  text-wrap me-1 mb-1'> $fea_row[name]</span>
         ";
        }

        //get facilities of room
      
        $fac_q = mysqli_query($con, "SELECT * FROM `facilities` f
           INNER JOIN `room_facilities` rfac ON f.id = rfac.facilities_id
           WHERE rfac.room_id='$room_data[id]'");

        $facilities_data = "";
        while ($fea_row = mysqli_fetch_assoc($fea_q)) {
          $facilities_data .= "<span class='badge rounded-pill bg-light text-dark  text-wrap me-1 mb-1'> $fea_row[name]</span>
         ";
        }

        // get thumbnail of images
      
        $room_thumb = ROOMS_IMG_PATH . "thumbnail.jpg";
        $thumb_q = mysqli_query($con, "SELECT * FROM `room_images` 
        WHERE `room_id`= '$room_data[id]'
        AND `thumb`='1'");

        if (mysqli_num_rows($thumb_q) > 0) {
          $thumb_res = mysqli_fetch_assoc($thumb_q);
          $room_thumb = ROOMS_IMG_PATH . $thumb['image'];
        }

        //print room card
      
        echo <<<data
          <div class="col-lg-9 col-md-12 px-4">
            <div class="card mb-4 border-0 shadow-none">
              <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                  <img src="$room_thumb" class="img-fluid rounded">
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-8">
                  <h5 class="mb-1">$room_data[name]</h5>
                  <div class="features mb-3">
                    <h6 class="mb-1">Features</h6>
                    $features_data
                  </div>
                  <div class="facilities mb-3">
                    <h6 class="mb-1 mt-3">Facilities</h6>
                    $facilities_data
                  </div>
                  <div class="guests mb-3">
                    <h6 class="mb-1 mt-3">Guests</h6>
                    <span class="badge rounded-pill bg-light text-dark  text-wrap">$room_data[adult] Adults</span>
                    <span class="badge rounded-pill bg-light text-dark  text-wrap">$room_data[children] children</span>
                  </div>
                </div>

                <div class="col-md-2 text-center">
                  <h6 class="mb-4">$room_data[price]USD per night</h6>
                  <a href="#" class="btn btn-primary text-white w-100 shadow-none mb-2">Book Now</a>
                  <a href="room_details.php?id=$room_data[id]" class="btn btn-sa btn-outline-dark w-100 rounded-0 fw-bold shadow-none">More
                    details</a>

                </div>
              </div>
            </div> 
            <div class="card mb-4 border-0 shadow-none">
              <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                  <img src="images/rooms/room_img/room2.jpg" class="img-fluid rounded">
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-8">
                  <h5 class="mb-1">Simple Room Name</h5>
                  <div class="features mb-3">
                    <h6 class="mb-1">
                      Features</h6>
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
                  <div class="  mb-3">
                    <h6 class="mb-1 mt-3">Guests</h6>
                    <span class="badge rounded-pill bg-light text-dark  text-wrap">5 Adults</span>
                    <span class="badge rounded-pill bg-light text-dark  text-wrap">4 children</span>
                  </div>
                </div>

                <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                  <h6 class="mb-4">100USD per night</h6>
                  <a href="#" class="btn btn-primary text-white w-100 shadow-none mb-2">Book Now</a>
                  <a href="#" class="btn btn-sa btn-outline-dark w-100 rounded-0 fw-bold shadow-none">More
                    details</a>

                </div>
              </div>
            </div>
            <div class="card mb-4 border-0 shadow-none">
              <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                  <img src="images/rooms/room_img/room3.jpg" class="img-fluid rounded">
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-8">
                  <h5 class="mb-1">Simple Room Name</h5>
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
                  <div class="guests mb-3">
                    <h6 class="mb-1 mt-3">Guests</h6>
                    <span class="badge rounded-pill bg-light text-dark  text-wrap">5 Adults</span>
                    <span class="badge rounded-pill bg-light text-dark  text-wrap">4 children</span>
                  </div>
                </div>

                <div class="col-md-2 text-center">
                  <h6 class="mb-4">100USD per night</h6>
                  <a href="#" class="btn btn-primary text-white w-100 shadow-none mb-2">Book Now</a>
                  <a href="#" class="btn btn-sa btn-outline-dark w-100 rounded-0 fw-bold shadow-none">More
                    details</a>

                </div>
              </div>
            </div>
          </div>


        data;

      }

      ?>




    </div>
  </div>


  <?php require ('inc/footer.php') ?>
  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js "></script>


</body>

</html>