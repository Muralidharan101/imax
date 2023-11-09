<?php
    require_once '../../datab.php';
    $res = [];

    $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);
    $customer_id = mysqli_real_escape_string($conn, $_POST['customer_id']);

    $sql = mysqli_query($conn, "UPDATE cart_data SET `status`='Inactive' WHERE `customer_id`='$customer_id' AND `product_id`='$product_id' AND `status`='Active' ");

    if(mysqli_affected_rows($conn) > 0) {
        $res['status'] = 'Success';
        $res['remarks'] = 'Row removed';
    } else {
        $res['status'] = 'Error';
        $res['remarks'] = 'Unable to remove row';
    }
    echo json_encode($res);
?>