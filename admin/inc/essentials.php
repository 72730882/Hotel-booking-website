
<?php

function adminLogin()
{
   
    if (!(isset($session['adminLogin']) && $session['adminLogin'] === true)) {
        echo "<script>
              window.location.href='index.php';
              </script>";
    }
}




function redirect($url){
    echo"<script>
    window.location.href='$url';</script>";
}


function alert($type, $msg){
   $bsClass = ($type == "success")? "alert-success" : "alert-danger";
    echo <<<alert
    <div class="alert $bsClass alert-warning alert-dismissible fade show custom-alert" role="alert><strong  class="me-3">$msg</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    alert;
}

?>