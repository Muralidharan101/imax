<?php
    require_once '../../../../datab.php';
    $res = [];

    $sql = "SELECT * FROM color WHERE status='Active' ";

    if($result = mysqli_query($conn, $sql)) {
        $data = [];
        while($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        $res['data'] = $data;
        $res['status'] = 'Success';
        $res['remarks'] = 'Data sent';
    } else {
        $res['status'] = 'Error';
        $res['remarks'] = 'Error in backend';
    }
    echo json_encode($res);
?>