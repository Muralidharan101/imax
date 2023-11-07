<?php
    require_once '../../../../datab.php';
    $res = [];

    $size = mysqli_real_escape_string($conn, $_POST['size']);

    $sql = mysqli_query($conn,"INSERT INTO size (`size`, `status`, `dateTime`) VALUES ('$size', 'Active', NOW())");

    if($sql) {
        $res['status'] = 'Success';
        $res['remarks'] = 'Size created';
    } else {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Unable to create size';
    }
    echo json_encode($res);
?>