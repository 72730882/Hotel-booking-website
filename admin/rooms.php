<?php
require('inc/essentials.php');
require('inc/db_config.php');

if (isset($_GET['seen'])) {
    $frm_data = filteration($_GET);

    if ($frm_data['seen'] == 'all') {
        $q = "UPDATE `user_queries` SET `seen`=?";
        $values = [1];
        if (update($q, $values, 'i')) {
            alert('success', 'Marked all as read');
        } else {
            alert('error', 'operation failed');
        }
    } else {
        $q = "UPDATE `user_queries` SET `seen`=? WHERE `sr_no`=?";
        $values = [1, $frm_data['seen']];
        if (update($q, $values, 'ii')) {
            alert('success', 'Marked as read');
        } else {
            alert('error', 'operation failed');
        }
    }
}
if (isset($_GET['del'])) {
    $frm_data = filteration($_GET);
    if ($frm_data['del'] == 'all') {
        $q = "DELETE FROM `user_queries`";
        if (mysqli_query($con, $q)) {
            alert('success', ' All data deleted!');
        } else {
            alert('error', 'operation failed!');
        }
    } else {
        $q = "DELETE FROM `user_queries` WHERE `sr_no`=?";
        $values = [$frm_data['del']];
        if (delete($q, $values, 'i')) {
            alert('success', 'data deleted!');
        } else {
            alert('error', 'operation failed!');
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel - Rooms </title>
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
                <h3 class="mb-4">Rooms</h3>
                <!--Features...-->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="text-end mb-4">
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add-room"><i class="bi bi-plus-square"></i> Add
                            </button>
                        </div>

                        <div class=" table-responsive-lg" style="height: 450px; overflow-y: scroll;">
                            <table class="table table-hover border text-center">
                                <thead>
                                    <tr class="bg-dark text-light">
                                        <th scope=" col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Area</th>
                                        <th scope="col">Guests</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id ="room-data">
                                    
                                </tbody>
                            </table>

                        </div>


                    </div>
                </div>

         


            </div>
        </div>
    </div>
    

    <!----------Add room modal --------------->
    <div class="modal fade" id="add-room" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addRoomModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form id="add_room_form" autocomplete="off">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addRoomModalLabel">Add Room</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Name</label>
                                <input type="text" name="name" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Area</label>
                                <input type="number" min="1" name="area" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Price</label>
                                <input type="number" min="1" name="price" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Quantity</label>
                                <input type="number" min="1" name="quantity" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Adults (Max.)</label>
                                <input type="number" min="1" name="adult" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Children (Max.)</label>
                                <input type="number" min="1" name="children" class="form-control shadow-none" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Features</label>
                                <div class="row">
                                    <?php
                                    $res = selectAll('features');
                                    while ($opt = mysqli_fetch_assoc($res)) {
                                        echo "
                                        <div class='col-md-3 mb-1'>
                                            <label>
                                                <input type='checkbox' name='features' value='{$opt['id']}' class='form-check-input shadow-none'> {$opt['name']}
                                            </label>
                                        </div>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Facilities</label>
                                <div class="row">
                                    <?php
                                    $res = selectAll('facilities');
                                    while ($opt = mysqli_fetch_assoc($res)) {
                                        echo "
                                        <div class='col-md-3 mb-1'>
                                            <label>
                                                <input type='checkbox' name='facilities' value='{$opt['id']}' class='form-check-input shadow-none'> {$opt['name']}
                                            </label>
                                        </div>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Description</label>
                                <textarea name="desc" rows="4" class="form-control shadow-none" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-primary text-white bg-dark shadow-none">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!----------Edit room modal --------------->
    <div class="modal fade" id="edit-room" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addRoomModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form id="edit_room_form" autocomplete="off">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addRoomModalLabel">Edit Room</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Name</label>
                                <input type="text" name="name" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Area</label>
                                <input type="number" min="1" name="area" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Price</label>
                                <input type="number" min="1" name="price" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Quantity</label>
                                <input type="number" min="1" name="quantity" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Adults (Max.)</label>
                                <input type="number" min="1" name="adult" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Children (Max.)</label>
                                <input type="number" min="1" name="children" class="form-control shadow-none" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Features</label>
                                <div class="row">
                                    <?php
                                    $res = selectAll('features');
                                    while ($opt = mysqli_fetch_assoc($res)) {
                                        echo "
                                        <div class='col-md-3 mb-1'>
                                            <label>
                                                <input type='checkbox' name='features' value='{$opt['id']}' class='form-check-input shadow-none'> {$opt['name']}
                                            </label>
                                        </div>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Facilities</label>
                                <div class="row">
                                    <?php
                                    $res = selectAll('facilities');
                                    while ($opt = mysqli_fetch_assoc($res)) {
                                        echo "
                                        <div class='col-md-3 mb-1'>
                                            <label>
                                                <input type='checkbox' name='facilities' value='{$opt['id']}' class='form-check-input shadow-none'> {$opt['name']}
                                            </label>
                                        </div>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Description</label>
                                <textarea name="desc" rows="4" class="form-control shadow-none" required></textarea>
                            </div>
                            <input type="hidden" name="room_id">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-primary text-white bg-dark shadow-none">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<!----------Manage room images modal --------------->
            <div class="modal fade" id="room-images" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> room Name</h5>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id ="image-alert"></div>
                    <div class="border-bottom border-3 pb-3 mb-3">
                        <form id="add_image_form">
                        <label class="form-label fw-bold">Add Image</label>
                         <input type="file" name="Image" accept=".jbg, .png, .webp, .jpeg" class="form-control shadow-none mb-3" required>
                         <button class="btn btn-primary text-white bg-dark shadow-none">ADD</button>
                         <input type="hidden" name="room_id">
                        </form>
                    </div>
                    <div class=" table-responsive-lg" style="height: 350px; overflow-y: scroll;">
                    <table class="table table-hover border text-center">
                        <thead>
                            <tr class="bg-dark text-light sticky-top">
                                <th scope=" col"width ="60%">Image</th>
                                <th scope="col">Thumb</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody id ="room-image-data">
                            
                        </tbody>
                    </table>

                </div>
                </div>
                </div>
            </div>
            </div>

 


    <?php require('inc/scripts.php') ?>

                                    
    <script>
       let add_room_form = document.getElementById('add_room_form');
       add_room_form.addEventListener('submit', function(e){
        e.preventDefault();
        add_room();
    });

    function add_room(){
        let data = new FormData();
        data.append('add_room', '');                
        data.append('name', add_room_form.elements['name'].value);
        data.append('area', add_room_form.elements['area'].value);
        data.append('price', add_room_form.elements['price'].value);
        data.append('quantity', add_room_form.elements['quantity'].value);
        data.append('adult', add_room_form.elements['adult'].value);
        data.append('children', add_room_form.elements['children'].value);
        data.append('desc', add_room_form.elements['desc'].value);

        let features = [];
        add_room_form.querySelectorAll('input[name="features"]:checked').forEach(el => {//i used querySelectorAll instead of elements 
            features.push(el.value);
        });

        let facilities = [];
        add_room_form.querySelectorAll('input[name="facilities"]:checked').forEach(el => {
            facilities.push(el.value);
        });

        data.append('features', JSON.stringify(features));
        data.append('facilities', JSON.stringify(facilities));

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/rooms.php", true);
        
        xhr.onload = function() { 
            var myModal = document.getElementById('add-room');
            var modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();
            if(this.responseText == 1){
                alert('success', 'New room added!');
                add_room_form.reset();
                get_all_rooms();
            }
            else{
                alert('error', 'Server Down!');
            }
        }
        
        xhr.send(data);
    }

    function get_all_rooms(){

        
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/rooms.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
        xhr.onload = function() { 
           document.getElementById('room-data').innerHTML = this.responseText;
        }
        
        xhr.send('get_all_rooms');
    }

    let edit_room_form = document.getElementById('edit_room_form');

function edit_details(id) {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/rooms.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            
        xhr.onload = function() { 
            let data = JSON.parse(this.responseText);
            edit_room_form.elements['name'].value = data.roomdata.name;
            edit_room_form.elements['area'].value = data.roomdata.area;
            edit_room_form.elements['price'].value = data.roomdata.price;
            edit_room_form.elements['quantity'].value = data.roomdata.quantity;
            edit_room_form.elements['adult'].value = data.roomdata.adult;
            edit_room_form.elements['children'].value = data.roomdata.children;
            edit_room_form.elements['desc'].value = data.roomdata.description;
            edit_room_form.elements['room_id'].value = data.roomdata.id;

            edit_room_form.elements['features'].forEach(el=>{
                if(data.features.includes(Number(el.value))){
                    el.checked = true;
                }
            });


            edit_room_form.elements['facilities'].forEach(el=>{
                if(data.facilities.includes(Number(el.value))){
                    el.checked = true;
                }
            });

            featureCheckboxes.forEach(checkbox => {
                checkbox.checked = data.features.includes(parseInt(checkbox.value));
            });
            xhr.send('get_room=' + id);
    }

        
}



    edit_room_form.addEventListener('submit', function(e){
            e.preventDefault();
            submit_edit_room();
        });
    function submit_edit_room(){
        let data = new FormData();
        data.append('edit_room', ''); 
        data.append('room_id', edit_room_form.elements['room_id'].value);                   
        data.append('name', edit_room_form.elements['name'].value);
        data.append('area', edit_room_form.elements['area'].value);
        data.append('price', edit_room_form.elements['price'].value);
        data.append('quantity', edit_room_form.elements['quantity'].value);
        data.append('adult', edit_room_form.elements['adult'].value);
        data.append('children', edit_room_form.elements['children'].value);
        data.append('desc', edit_room_form.elements['desc'].value);

        let features = [];
        edit_room_form.querySelectorAll('input[name="features"]:checked').forEach(el => {//i used querySelectorAll instead of elements 
            features.push(el.value);
        });

        let facilities = [];
        edit_room_form.querySelectorAll('input[name="facilities"]:checked').forEach(el => {
            facilities.push(el.value);
        });

        data.append('features', JSON.stringify(features));
        data.append('facilities', JSON.stringify(facilities));

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/rooms.php", true);
        
        xhr.onload = function() { 
            var myModal = document.getElementById('edit-room');
            var modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();
            if(this.responseText == 1){
                alert('success', 'Room data edited!');
                edit_room_form.reset();
                get_all_rooms();
            }
            else{
                alert('error', 'Server Down!');
            }
        }
        
        xhr.send(data);
    }
        

    function toggle_status(id, val) 
    {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/rooms.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
        if (this.responseText == 1) {
            alert('success', 'Status toggled!');
            get_all_rooms();
        } else {
            alert('error', 'Server down');
        }
    }

    xhr.send('toggle_status=' + id + '&value=' + val);
}

    let add_image_form =document.getElementById ('add_image_form');
    add_image_form.addEventListener('submit', function(e){
        e.preventDefault();
        add_image();

    });
    function add_image(){
                let data = new FormData();
            data.append('image',add_image_form.elements['image'].files[0]);
            data.append('room_id',add_image_form.elements['room_id'].value);
            data.append('add_image','');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/rooms.php", true);


            xhr.onload = function() {
              

                if(this.responseText == 'inv_img'){
                    alert('error', 'Only JPG, WEBP or PNG images are allowed', 'image-alert');
                }
                else if(this.responseText == 'inv_size'){
                    alert('error', 'Images should be less that 2MB!', 'image-alert');
                }
                else if(this.responseText == 'upd_failed'){
                    alert('error', 'Image upload faile. Server Down!', 'image-alert');

                }
                else{
                    alert('Success','New Image added!', 'image-alert');
                    room_images(add_image_form.elements['room_id'].value,document.querySelector("#room-images .modal-title").innerText)
                    add_image_form.reset();
                    
                
                }
            }
            xhr.send(data);
           
    }
   
    function room_images(id, rname)
    {
        document.querySelector("#room-images .modal-title").innerText =rname;
        add_image_form.elements['room_id'].value=id;
        add_image_form.elements['image'].value='';
        let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/rooms.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
        document.getElementById('room-image-data').innerHTML=this.responseText;
    }

    xhr.send('get_room_images'+id);

    }
    function rem_image(img_id, room_id)
    {
        let data = new FormData();
            data.append('image_id', img_id);
            data.append('room_id',room_id);
            data.append('rem_image','');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/rooms.php", true);


            xhr.onload = function() {
              

                if(this.responseText == 1){
                    alert('Success','Image romeved!', 'image-alert');
                    room_images(room_id, document.querySelector("#room-images .modal-title").innerText);
                }
                else{
                    alert('error', 'Image revoedal failed!', 'image-alert');
                    
                    
                
                }
            }
            xhr.send(data);
              
    }
    function thumb_image(img_id, room_id)
    {
        let data = new FormData();
            data.append('image_id', img_id);
            data.append('room_id',room_id);
            data.append('thumb_image','');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/rooms.php", true);


            xhr.onload = function() {
              

                if(this.responseText == 1){
                    alert('Success','Image Thumbnail changed!', 'image-alert');
                    room_images(room_id, document.querySelector("#room-images .modal-title").innerText);
                }
                else{
                    alert('error', 'Thumbnal change failed!', 'image-alert');
                    
                    
                
                }
            }
            xhr.send(data);
              
    }

    window.onload = function(){
        get_all_rooms();
    }

    </script>

</body>

</html>