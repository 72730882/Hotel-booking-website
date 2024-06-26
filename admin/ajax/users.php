<?php
require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin();

if (isset($_POST['get_users'])) {
    $res = selectAll('user_cred');
    $i = 1;
    $data = "";

    while ($row = mysqli_fetch_assoc($res)) {
       
        $data.= "
        <tr>
        <td>$i</td>
        <td>$row[name]</td>
        <td>$row[email]</td>
        <td>$row[phonenum]</td>
        <td>$row[address]</td>
        <td>$row[pincode]</td>
        <td>$row[dob]</td>
        <td>$row[profile]</td>
        
        </tr>
        ";
        $i++;
    }
    echo $data;
}

// if (isset($_POST['toggle_status']))
//  {
//     $frm_data = filteration($_POST);

//     $q = "UPDATE `rooms` SET `status`=? WHERE `id`=?";
//     $values = [$frm_data['value'], $frm_data['toggle_status']];

//     if (update($q, $values, 'ii')) {
//         echo 1;
//     } else {
//         echo 0;
//     }
// }

// if (isset($_POST['remove_room'])){
//     $frm_data = filteration($_POST);
//     $res1=select("SELECT * FROM `rooms` WHERE  `room_id`=? ", [$frm_data['room_id']], 'i');
//     while(
//         $row=mysqli_fetch_assoc($res1)){
//             deleteImage($row['image'],ROOMS_FOLDER);

//         }

//     $res2=delete("DELETE FROM `room_images` WHERE 'room_id'=?", [$frm_data['room_id']], 'i');

//     $res3=delete("DELETE FROM `room_features` WHERE 'room_id'=?", [$frm_data['room_id']], 'i');
//     $res4=delete("DELETE FROM `room_facilities` WHERE 'room_id'=?", [$frm_data['room_id']], 'i');
//     $res5=update("UPDATE `room_facilities` SET `removed`=? WHERE 'id'=?", [1,$frm_data['room_id']], 'ii');
//     if($res2|| $res3 ||  $res4 ||  $res5){
//         echo 1;

//     }

// else{
//     echo 0;
// }
// }
?>
