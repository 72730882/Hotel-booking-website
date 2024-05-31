
let carousel_s_form = document.getElementById('carousel_s_form');
let carousel_picture_inp = document.getElementById('carousel_picture_inp');

carousel_s_form.addEventListener('submit',function(e){
    e.preventDefault();
    add_image();
})

function add_image(){
    let data = new FormData();
    data.append('picture',carousel_picture_inp.files[0]);
    data.append('add_image','');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/carousel_crud.php", true);
   

    xhr.onload = function() {
        var myModal = document.getElementById('carousel-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if(this.responseText == 'inv_img'){
            alert('error', 'Only JPG and PNG images are allowed');
        }
        else if(this.responseText == 'inv_size'){
            alert('error', 'Images should be less that 2MB!');
        }
        else if(this.responseText == 'upd_failed'){
            alert('error', 'Image upload faile. Server Down!');

        }
        else{
            alert('Success','New Image added!');
            carousel_picture_inp.value='';
            get_carousel() // to display the image on the dashboard
        }
    }
    
    xhr.send(data);
    }


    window.onload = function() {
    get_general();
    get_contacts();

}

function get_carousel(){
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
        document.getElementById('team-data').innerHTML = this.responseText;
        
    
    }

    

    xhr.send('get_carousel');
}

function rem_member(va1){
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
        if(this.responseText==1){
            alert('success','Member removed!');
            get_carousel();
        }
        else{
            alert('error','Server down!');
        }

    }

    xhr.send('rem_members=' + val);

}


window.onload = function() {
    get_carousel();

}




function alert(type, msg) {
    let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
    let element = document.createElement('div');
    element.innerHTML = ` <div class="alert ${$bs_Class} alert-warning alert-dismissible fade show custom-alert" role="alert><strong  class="me-3">${$msg}</strong>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>`;
    document.body.append(element);
}
