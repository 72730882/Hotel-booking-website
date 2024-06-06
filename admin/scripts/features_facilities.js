 
let feature_s_form = document.getElementById('feature_s_form');
let facility_s_form = document.getElementById('facility_s_form');


feature_s_form.addEventListener('submit',function(e){
    e.preventDefault();
    add_feature();
})

function add_feature(){
    let data = new FormData();
    data.append('name',feature_s_form.elements['feature_name'].value);                
    data.append('add_feature','');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/features_facilities.php", true);


    xhr.onload = function() { 
        var myModal = document.getElementById('feature-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if(this.responseText == '1'){
            alert('success','New Feature added!');
            feature_s_form.elements['feature_name'].value = '';
            get_features();
        }
        else{
            alert('error', 'Server Down!');
        }
    }
    
    xhr.send(data);
}

function rem_feature(val){
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/features_facilities.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
        if(this.responseText==1){
            alert('success','Feature removed!');
            get_features();
        }
        else{
            alert('error','Server down!');
        }

    }

    xhr.send('rem_feature=' + val);

}

function get_features(){
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/features_facilities.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
        document.getElementById('features-data').innerHTML = this.responseText;
        
    
    }

    

    xhr.send('get_features');
}

facility_s_form.addEventListener('submit',function(e){
    e.preventDefault();
    add_facility();
})

function add_facility(){
    let data = new FormData();
    data.append('name',facility_s_form.elements['facility_name'].value);  
    data.append('icon',facility_s_form.elements['facility_icon'].files[0]); 
    data.append('description',facility_s_form.elements['facility_description'].value);              
    data.append('add_facility','');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/features_facilities.php", true);


    xhr.onload = function() { 
        var myModal = document.getElementById('facility-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        console.log(this.responseText); // Debugging

        if(this.responseText == 'inv_img'){
            alert('error', 'Only SVG images are allowed');
        }
        else if(this.responseText == 'inv_size'){
            alert('error', 'Images should be less that 1MB!');
        }
        else if(this.responseText == 'upd_failed'){
            alert('error', 'Image upload faile. Server Down!');
        }
        else if (this.responseText == '1') {
            alert('success', 'New Facility added!');
            facility_s_form.reset();
            get_facilities();
        } else {
            alert('error', 'Unknown error occurred!');
        }
    }
    
    xhr.send(data);
}

function get_facilities() {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/features_facilities.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
        console.log(this.responseText); // Debugging
        document.getElementById('facility-data').innerHTML = this.responseText;
    }

    xhr.send('get_facilities');
}

function rem_facility(val){
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/features_facilities.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
        if(this.responseText==1){
            alert('success','Facility removed!');
            get_facilities();
        }
        
        else{
            alert('error','Server down!');
        }

    }

    xhr.send('rem_facility=' + val);

}

window.onload = function(){
    get_features();
    get_facilities();
}