<?php
$hname = 'localhost';
$uname = 'root';
$pass = '';
$db = 'hotel-booking-website';

$con = mysqli_connect($hname, $uname, $pass, $db);
if (!$con) {
    die("cannot connect to database" . mysqli_connect_error());
}
<<<<<<< HEAD
function filteration($data)
{
    foreach ($data as $key => $value) {
=======

function filteration($data){
    foreach($data as $key => $value){
>>>>>>> 888fb11cc77db59a19f86ac09d440b9e169b0b9c
        $data[$key] = trim($value);
        $data[$key] = stripslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);
    }
    return $data; 
}
<<<<<<< HEAD
function select($sql, $values, $datatypes)
=======

function selectAll($table)
{
    $con = $GLOBALS['con'];
    $res = mysqli_query($con,"SELECT * FROM $table");
    return $res;
}

function select($sql,$values,$datatypes)
>>>>>>> 888fb11cc77db59a19f86ac09d440b9e169b0b9c
{
    global $con;
    $stmt = mysqli_prepare($con, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Select");
        }
    } else {
        die("Query cannot be prepared - Select");
    }
}
function update($sql, $values, $datatypes)
{
<<<<<<< HEAD
    global $con;
    $stmt = mysqli_prepare($con, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        if (mysqli_stmt_execute($stmt)) {
=======
    $con = $GLOBALS['con'];
    if($stmt = mysqli_prepare($con, $sql))
    {
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt)){
>>>>>>> 888fb11cc77db59a19f86ac09d440b9e169b0b9c
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - update");
        }
    } else {
        die("Query cannot be prepared - update");
    }
}
<<<<<<< HEAD
=======
function insert($sql,$values,$datatypes)
{
    $con = $GLOBALS['con'];
    if($stmt = mysqli_prepare($con, $sql))
    {
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Insert");
        }
    }
    else{
        die("Query cannot be prepared - Insert");
    }
}

function delete($sql,$values,$datatypes)
{
    $con = $GLOBALS['con'];
    if($stmt = mysqli_prepare($con, $sql))
    {
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Delete");
        }
    }
    else{
        die("Query cannot be prepared - Delete");
    }
}



?>
>>>>>>> 888fb11cc77db59a19f86ac09d440b9e169b0b9c
