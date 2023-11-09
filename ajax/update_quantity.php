<?php
    require_once '../datab.php';
    $res =[];

    $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);
    $customer_id = mysqli_real_escape_string($conn, $_POST['customer_id']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);

    $sql = "UPDATE cart_data SET `quantity`='$quantity' WHERE `product_id`='$product_id' AND `customer_id`='$customer_id' ";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0 ) {
        $res['status'] = 'Success';
        $res['remarks'] = 'Quantity updated';
    } else {
        $res['status'] = 'Error';
        $res['remarks'] = 'Unable to update quantity';
    }

    echo json_encode($res);
?>