<?php
    require_once '../../datab.php';
    $res = [];

    $order_id = mysqli_real_escape_string($conn, $_POST['order_id']);
    $customer_id = mysqli_real_escape_string($conn, $_POST['customer_id']);

    $sql = "SELECT pi.product_img, pd.product_name,pd.product_price, pd.product_size, pd.product_category, pd.product_type,
            cd.user_name, cd.phone,
            od.quantity, od.size, od.total_price,
            o.order_status, o.ref_no, (o.id) AS order_id
            FROM order_data od
            JOIN product_data pd
            ON od.product_id = pd.id
            JOIN customer_data cd
            ON od.customer_id = cd.id
            JOIN product_images pi
            ON od.product_id = pi.id
            JOIN orders o
            ON o.id = od.order_id
            WHERE o.status='Active'
            AND o.customer_id='$customer_id'
            AND o.id='$order_id' ";

    if($result = mysqli_query($conn, $sql)) {
        $data = [];
        while($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        $res['data'] = $data;
        $res['status'] = 'Success';
        $res['remarks'] = 'Data Sent';
    } else {
        $res['status'] = 'Failed';
        $res['remarks'] = 'No data available';
    }
    echo json_encode($res);
?>