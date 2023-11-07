<?php
    require_once '../../../../datab.php';
    $res = [];
    
    $id = mysqli_real_escape_string($conn, $_POST['editId']);

    $result = mysqli_query($conn, "SELECT id, category FROM category_master WHERE status='Active' AND id='$id'");

    if($result) {
        $data = [];
        while($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        $res['data'] = $data;
        $res['status'] = 'Success';
        $res['remarks'] = 'Data sent';
    } else {
        $res['status'] = 'Failed';
        $res['remarks'] = 'Unable to send data';
    }
    echo json_encode($res);
?>