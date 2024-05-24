<?php
$hname = 'localhost';
$uname = 'root';
$pass = '';
$db = 'hotel-booking-website';

$con = mysqli_connect($hname,$uname,$pass,$db);
if(!$con){
    die("cannot connect to database".mysqli_connect_error());

}
function filteration($data){
    foreach($data as $key => $value){
        $data[$key] = trim($value);
        $data[$key] = stripslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);

    }
    return $data;
}
function select($sql,$values,$datatypes)
{
    global $con;
    $stmt = mysqli_prepare($con, $sql);
    if($stmt)
    {
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Select");
        }
    }
    else{
        die("Query cannot be prepared - Select");
    }
}

?>
