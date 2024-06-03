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
    <title>Admin panel - Features & Facilites</title>
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
                <h3 class="mb-4">Features & Facilites</h3>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Features</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#feature-s"><i class="bi bi-plus-square"></i> Add
                            </button>
                        </div>

                        <div class=" table-responsive-md" style="height: 350px; overflow-y: scroll;">
                            <table class="table table-hover border">
                                <thead class="stikcy-top">
                                    <tr class="bg-dark text-light">
                                        <th scope=" col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id ="features-data">
                                    
                                </tbody>
                            </table>

                        </div>


                    </div>

                </div>
            </div>
        </div>

        <!----------Feature modal --------------->
        <div class="modal fade" id="feature-s" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form id="feature_s_form">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Feature</h5>

                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Name</label>
                                <input type="text" name="feature_name" id="feature_name_inp" class="form-control shadow-none" required>
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



        <?php require('inc/scripts.php') ?>

        <script> 
            let feature_s_form = document.getElementById('feature_s_form');
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
                        alert('Success','New Feature added!');
                        feature_s_form.elements['feature_name'].value = '';
                        get_features();
                    }
                    else{
                       alert('error', 'Server Down!');
                    }
                }
                
                xhr.send(data);
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

            window.onload = function(){
                get_features();
            }
        </script>

</body>

</html>