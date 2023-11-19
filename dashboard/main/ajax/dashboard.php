<?php 
    require_once '../../../datab.php';
    $res = [];

    $sql = mysqli_query($conn, "SELECT count(*)AS p_count FROM product_data WHERE status='Active'");
    $product_fetch = mysqli_fetch_assoc($sql);

    $sql2 = mysqli_query($conn,"SELECT count(*)AS c_count FROM customer_data WHERE status='Active'");
    $customer_fetch = mysqli_fetch_assoc($sql2);
    
    $sql3 = mysqli_query($conn,"SELECT count(*)AS o_count FROM orders WHERE status='Active'");
    $order_fetch = mysqli_fetch_assoc($sql3);

    $res['product_count'] = $product_fetch['p_count'];
    $res['customer_count'] = $customer_fetch['c_count'];
    $res['order_count'] = $order_fetch['o_count'];
    $res['status'] = 'Success';
    $res['remarks'] = 'Data sent';

    echo json_encode($res);
?>