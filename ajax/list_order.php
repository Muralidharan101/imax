<?php
    require_once '../datab.php';
    $res = [];

    $sql = "SELECT pi.product_img, pd.product_name,pd.product_price, pd.product_size, pd.product_category, pd.product_type,
            cd.user_name, cd.phone,
            od.quantity, od.size, od.total_price, od.order_status
            FROM order_data od
            JOIN product_data pd
            ON od.product_id = pd.id
            JOIN customer_data cd
            ON od.customer_id = cd.id
            JOIN product_images pi
            ON od.product_id = pi.id
            WHERE od.status='Active' ";

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