<?php
    require_once '../../../../datab.php';
    $res = [];

    $id = mysqli_real_escape_string($conn, $_POST['edit_Id']);
    $size = mysqli_real_escape_string($conn, $_POST['size']);

    $sql = mysqli_query($conn,"UPDATE size SET `size`='$size' WHERE id='$id'");
    
    if(mysqli_affected_rows($conn) > 0) {
        $res['status'] = 'Success';
        $res['remarks'] = 'Size Updated';
    } else {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Unable to update size';
    }
    echo json_encode($res);
?>