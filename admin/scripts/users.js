
function get_users() {


    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/users.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        document.getElementById('users-data').innerHTML = this.responseText;
    }

    xhr.send('get_users');
}

function toggle_status(id, val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/users.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        if (this.responseText == 1) {
            alert('success', 'Status toggled!');
            get_users();
        } else {
            alert('error', 'Server down');
        }
    }
xhr.send('toggle_status=' + id + '&value=' + val);
}

// let add_image_form = document.getElementById('add_image_form');
// add_image_form.addEventListener('submit', function (e) {
//     e.preventDefault();
//     add_image();

// });
// function add_image() {
//     let data = new FormData();
//     data.append('image', add_image_form.elements['image'].files[0]);
//     data.append('room_id', add_image_form.elements['room_id'].value);
//     data.append('add_image', '');

//     let xhr = new XMLHttpRequest();
//     xhr.open("POST", "ajax/rooms.php", true);


//     xhr.onload = function () {


//         if (this.responseText == 'inv_img') {
//             alert('error', 'Only JPG, WEBP or PNG images are allowed', 'image-alert');
//         }
//         else if (this.responseText == 'inv_size') {
//             alert('error', 'Images should be less that 2MB!', 'image-alert');
//         }
//         else if (this.responseText == 'upd_failed') {
//             alert('error', 'Image upload faile. Server Down!', 'image-alert');

//         }
//         else {
//             alert('Success', 'New Image added!', 'image-alert');
//             room_images(add_image_form.elements['room_id'].value, document.querySelector("#room-images .modal-title").innerText)
//             add_image_form.reset();


//         }
//     }
//     xhr.send(data);

// }

// function room_images(id, rname) {
//     document.querySelector("#room-images .modal-title").innerText = rname;
//     add_image_form.elements['room_id'].value = id;
//     add_image_form.elements['image'].value = '';
//     let xhr = new XMLHttpRequest();
//     xhr.open("POST", "ajax/rooms.php", true);
//     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

//     xhr.onload = function () {
//         document.getElementById('room-image-data').innerHTML = this.responseText;
//     }

//     xhr.send('get_room_images' + id);

// }
// function rem_image(img_id, room_id) {
//     let data = new FormData();
//     data.append('image_id', img_id);
//     data.append('room_id', room_id);
//     data.append('rem_image', '');

//     let xhr = new XMLHttpRequest();
//     xhr.open("POST", "ajax/rooms.php", true);


//     xhr.onload = function () {


//         if (this.responseText == 1) {
//             alert('Success', 'Image romeved!', 'image-alert');
//             room_images(room_id, document.querySelector("#room-images .modal-title").innerText);
//         }
//         else {
//             alert('error', 'Image revoedal failed!', 'image-alert');



//         }
//     }
//     xhr.send(data);

// }
// function thumb_image(img_id, room_id) {
//     let data = new FormData();
//     data.append('image_id', img_id);
//     data.append('room_id', room_id);
//     data.append('thumb_image', '');

//     let xhr = new XMLHttpRequest();
//     xhr.open("POST", "ajax/rooms.php", true);


//     xhr.onload = function () {


//         if (this.responseText == 1) {
//             alert('Success', 'Image Thumbnail changed!', 'image-alert');
//             room_images(room_id, document.querySelector("#room-images .modal-title").innerText);
//         }
//         else {
//             alert('error', 'Thumbnal change failed!', 'image-alert');



//         }
//     }
//     xhr.send(data);

// }
function remove_user(user_id) {
    if (confirm("Are you sure, you want to remove this user?")) {
        let data = new FormData();
        data.append('user_id', user_id);
        data.append('remove_user', '');

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/users.php", true);


        xhr.onload = function () {


            if (this.responseText == 1) {
                alert('Success', 'user removed!');
                get_users();
            }
            else {
                alert('error', 'user removal failed!');



            }
        }
        xhr.send(data);
    }

}

window.onload = function () {
    get_users();
}
