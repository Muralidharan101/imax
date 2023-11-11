<?php
    require_once '../../datab.php';
    $res = [];

    $order_id = mysqli_real_escape_string($conn, $_POST['order_id']);
    $customer_id = mysqli_real_escape_string($conn, $_POST['customer_id']);
    $ref_no = mysqli_real_escape_string($conn, $_POST['ref_no']);
    $user_name = mysqli_real_escape_string($conn, $_POST['username']); 
    $useremail = mysqli_real_escape_string($conn, $_POST['useremail']); 
    $usermobile = mysqli_real_escape_string($conn, $_POST['usermobile']); 
    $useraddress = mysqli_real_escape_string($conn, $_POST['useraddress']); 

    $clear_cart = mysqli_query($conn,"UPDATE cart_data SET `status`='Inactive' WHERE `customer_id`='$customer_id'");
    

    $sql = mysqli_query($conn,"UPDATE orders SET `order_by_name`='$user_name', `email`='$useremail', `phone`='$usermobile', `address`='$useraddress', `order_status`='Confirmed' WHERE id='$order_id' AND customer_id='$customer_id' AND ref_no='$ref_no' AND `status`='Active' ");

    if(mysqli_affected_rows($conn) > 0) {

        $update_order_data = mysqli_query($conn, "UPDATE order_data SET `order_status`='Confirmed' WHERE `order_id`='$order_id' AND `customer_id`='$customer_id' AND `ref_no`='$ref_no' ");
        
        if(mysqli_affected_rows($conn) > 0){
            $res["status"] = "Success";
            $res['remarks'] = 'Order Confirmed';
        }
    } else {
        $res['status'] = 'Error';
        $res['remarks'] = 'Order Failed';
    }

    echo json_encode($res);
?>