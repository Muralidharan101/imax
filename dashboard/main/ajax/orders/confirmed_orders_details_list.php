<?php
    require_once '../../../../datab.php';
    $res = [];

    $order_id = mysqli_real_escape_string($conn, $_POST["order_id"]);

    $sql = "SELECT pi.product_img, 
                   (pd.id) AS product_id, pd.product_name, pd.product_price, pd.product_type,
                   (od.id) order_data_id, od.ref_no, od.quantity, od.total_price,
                   cd.user_name,
                   o.order_by_name, o.email, o.phone, o.address, (o.total_price) AS total_order_value
            FROM order_data od
            JOIN product_data pd
            ON od.product_id=pd.id
            JOIN product_images pi
            ON od.product_id=pi.product_id
            JOIN orders o
            ON od.order_id = o.id
            JOIN customer_data cd
            ON od.customer_id = cd.id
            WHERE od.order_status='Confirmed'
            AND od.status='Active' 
            AND od.order_id='$order_id' ";

        if($result = mysqli_query($conn, $sql)) {
            $data = [];
            while($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
            $res["data"] = $data;
            $res['status'] = 'Success';
            $res['remarks'] = 'Data sent';
        } else {
            $res['status'] = 'Error';
            $res['remarks'] = 'Error while fetching data';
        }

    echo json_encode($res);
?>