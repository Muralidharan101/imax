<?php
    require_once '../../../../datab.php';
    $res = [];

    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $sql = mysqli_query($conn,"UPDATE size SET `status`='Inactive' WHERE id='$id'");

    if($sql) {
        $res['status'] = 'Success';
        $res['remarks'] = 'Size created';
    } else {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Unable to create size';
    }
    echo json_encode($res);
?>