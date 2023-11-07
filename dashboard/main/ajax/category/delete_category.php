<?php
    require_once '../../../../datab.php';
    $res = [];

    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $sql = mysqli_query($conn, "UPDATE category_master SET `status`='Inactive' WHERE `id`='$id'");

    if(mysqli_affected_rows($conn) > 0) {
        $res['status'] = 'Success';
        $res['remarks'] = 'Category Updated';
    } else {
        $res['status'] = 'Failed';
        $res['remarks'] = 'Unable to update category';
    }

    echo json_encode($res);
?>