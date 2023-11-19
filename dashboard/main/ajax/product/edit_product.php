<?php
    require_once '../../../../datab.php';
    $res = [];

    $id = mysqli_real_escape_string($conn, $_POST['id']); 
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']); 
    $product_price = mysqli_real_escape_string($conn, $_POST['product_price']); 
    $product_description = mysqli_real_escape_string($conn, $_POST['product_description']); 

    $sql = mysqli_query($conn,"UPDATE product_data SET `product_name`='$product_name', `product_price`='$product_price', `product_desc`='$product_description' WHERE id='$id' ");

    if(mysqli_affected_rows($conn) > 0) {
        $res['status'] = 'Success';
        $res['remarks'] = 'Product updated';
    } else {
        $res['status'] = 'Error';
        $res['remarks'] = 'Unable to updated product';
    }

    echo json_encode($res);
?>