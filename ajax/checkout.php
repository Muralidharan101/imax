<?php
    require_once '../datab.php';
    $res = [];

    $customer_id = mysqli_real_escape_string($conn, $_POST['customer_id']);
    $product_id_arr = json_decode($_POST['product_id'], true);
    $sizes = json_decode($_POST['size'], true);
    $quantities = json_decode($_POST['quantity'], true);
    $total_prices = json_decode($_POST['total_price'], true);

    $sql = mysqli_query($conn, "INSERT INTO orders (`ref_no`, `customer_id`, `total_price`, `order_status`, `status`,`dateTime`) VALUES ('1', '$customer_id', '$total_price','Unpaid','Active', NOW())");
    $order_id = mysqli_insert_id($conn);

    foreach ($product_id_arr as $key => $product_id) {
        $size = mysqli_real_escape_string($conn, $sizes[$key]);
        $quantity = mysqli_real_escape_string($conn, $quantities[$key]);
        $total_price = mysqli_real_escape_string($conn, $total_prices[$key]);

        $sql = "INSERT INTO order_data (`order_id`, `product_id`, `customer_id`, `quantity`, `total_price`, `order_status`, `status`, `dateTime`)
                VALUES ('$order_id', '$product_id', '$customer_id', '$quantity', '$total_price', 'Unpaid', 'Active', NOW())";

        if(mysqli_query($conn, $sql)) {
            $res['status'] = 'Success';
            $res['remarks'] = 'Checked Out Successfully';
        } else {
            $res['status'] = 'Failed';
            $res['remarks'] = 'Unable to checkout';
        }
    }
    echo json_encode($res);
?>
