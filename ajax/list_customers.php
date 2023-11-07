<?php
    require_once '../datab.php';
    $res = [];

    $sql = "SELECT id, user_name, phone FROM customer_data WHERE `status`='Active' ";

    if($result= mysqli_query($conn, $sql)) {
        $data = [];
        while($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        $res['data'] = $data;
        $res['status'] = 'Success';
        $res['remarks'] = 'Data sent';
    } else {
        $res['status'] = 'Error';
        $res['remarks'] = 'Unable to fetch Data';
    }

    echo json_encode($res);
?>