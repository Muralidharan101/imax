<?php
    require_once '../../../../datab.php';
    $res = [];

    $color = mysqli_real_escape_string($conn, $_POST['color']);

    $sql = mysqli_query($conn,"INSERT INTO color (`color`, `status`, `dateTime`) VALUES ('$color', 'Active', NOW())");

    if($sql) {
        $res['status'] = 'Success';
        $res['remarks'] = 'color created';
    } else {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Unable to create color';
    }
    echo json_encode($res);
?>