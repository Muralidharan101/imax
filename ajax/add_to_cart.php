<?php
    require_once '../datab.php';
    $res = [];

    $pro_id = mysqli_real_escape_string($conn, $_POST['product_id']);
    $cus_id = mysqli_real_escape_string($conn, $_POST['customer_id']);
    // $size = mysqli_real_escape_string($conn, $_POST['product_size']);
    $quantity = mysqli_real_escape_string($conn, $_POST['Quantity']);

    $select_query = "SELECT * FROM cart_data WHERE `product_id`='$pro_id' AND `customer_id`='$cus_id' AND `status`='Active'";
    $result = mysqli_query($conn, $select_query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $existing_quantity = $row['quantity'];
        $increased_quantity = $quantity + $existing_quantity;

        $update_query = mysqli_query($conn, "UPDATE cart_data SET `quantity`='$increased_quantity' WHERE `product_id`='$pro_id' AND `customer_id`='$cus_id' AND `status`='Active'");

        if (mysqli_affected_rows($conn) > 0) {
            $res['status'] = 'Success';
            $res['remarks'] = 'Cart Updated';
        }
    } else {
        $sql = "INSERT INTO cart_data (`product_id`, `customer_id`, `quantity`, `status`, `dateTime`) VALUES ('$pro_id', '$cus_id', '$quantity', 'Active', NOW()) ";

        if ($result = mysqli_query($conn, $sql)) {
            $res['status'] = 'Success';
            $res['remarks'] = 'Product added to cart';
        } else {
            $res['status'] = 'Failed';
            $res['remarks'] = 'Unable to add to cart';
        }
    }

    echo json_encode($res);
?>
