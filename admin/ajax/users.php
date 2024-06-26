<?php
require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin();

if (isset($_POST['get_users'])) {
    $res = selectAll('user_cred');
    $i = 1;
    $data = "";

    while ($row = mysqli_fetch_assoc($res)) {
        $del_btn = "<button type='button' onclick='remove_user($row[id])' class='btn btn-danger shadow-none btn-sm'><i class='bi bi-trash'></i>
        </button>";
       
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
        <td>$del_btn</td>


        
        </tr>
        ";
        $i++;
    }
    echo $data;
}


if (isset($_POST['remove_user'])){
    $frm_data = filteration($_POST);

    
    $res=delete("DELETE FROM `user_cred` WHERE 'id'=?", [1,$frm_data['user_id']], 'ii');
    if($res){
        echo 1;

    }

else{
    echo 0;
}
}

if (isset($_POST['toggle_status']))
 {
    $frm_data = filteration($_POST);

    $q = "UPDATE `users` SET `status`=? WHERE `id`=?";
    $values = [$frm_data['value'], $frm_data['toggle_status']];

    if (update($q, $values, 'ii')) {
        echo 1;
    } else {
        echo 0;
    }
}
?>
