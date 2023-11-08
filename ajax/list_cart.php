<?php
    require_once '../datab.php';
    $res =[];

    $customer_id = mysqli_real_escape_string($conn, $_POST['customer_id']);

    $sql = "SELECT DISTINCT cd.quantity,(cd.id) AS cart_id,
            (pd.id) AS product_id, pd.product_name, pd.product_price, pd.product_category,
            pi.product_img, (pi.product_id) AS img_id
            FROM cart_data cd 
            LEFT JOIN product_data pd
            ON cd.product_id = pd.id
            LEFT JOIN product_images pi 
            ON cd.product_id = pi.product_id
            WHERE cd.status='Active' AND cd.customer_id='$customer_id' AND pi.img_category = 'main' ";

    if($result = mysqli_query($conn, $sql)) {
        $data = [];
        while($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        $res['data'] = $data;
        $res['status'] = 'Success';
        $res['remarks'] = 'Data sent';
    } else {
        $res['status'] = 'Failed';
        $res['remarks'] = 'No data available';
    }

    echo json_encode($res);
?>