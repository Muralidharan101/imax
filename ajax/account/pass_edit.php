<?php
    require_once '../../datab.php';
    $res = [];

    $customer_id = mysqli_real_escape_string($conn ,$_POST['customer_id']);
    $password = mysqli_real_escape_string($conn ,$_POST['password']);

    $sql = mysqli_query($conn, "UPDATE customer_data SET `password`='$password' WHERE `id`='$customer_id' ");

    if(mysqli_affected_rows($conn) > 0) {
        $res['status'] = 'Success';
        $res['remarks'] = 'Password updated';
    } else {
        $res['status'] = 'Error';
        $res['remarks'] = 'Unable to update';
    }
    echo json_encode($res);
?>