<?php
    require_once '../../datab.php';
    $res = [];

    $sql = mysqli_query($conn, "SELECT pi.product_img, pd.id AS product_id, pd.product_name,pd.product_price,pd.product_type,
                                SUM(od.quantity) AS total_quantity_sold,COUNT(od.product_id) AS order_count,cd.user_name,cd.phone AS login_phone,
                                o.order_by_name,o.email,o.phone AS order_phone,o.address,o.total_price AS total_order_value,o.order_status,o.id AS order_id
                                FROM order_data od
                                JOIN product_data pd ON od.product_id = pd.id
                                JOIN product_images pi ON od.product_id = pi.product_id
                                JOIN orders o ON od.order_id = o.id
                                JOIN customer_data cd ON od.customer_id = cd.id
                                WHERE pd.status = 'Active'
                                GROUP BY od.product_id
                                ORDER BY total_quantity_sold DESC
                                LIMIT 10");

    if(mysqli_num_rows($sql) > 6) {
        $data = [];
        while($row = mysqli_fetch_array($sql)) {
            $data[] = $row;
        }
        $res['data'] = $data;
        $res['status'] = 'Success';
        $res['remarks'] = 'Data sent';
    } else {
        $alt_sql = mysqli_query($conn, "SELECT pd.id AS product_id, pd.product_name, pd.product_price, pd.product_category, pd.product_desc,
                                                pi.id AS product_img_id, pi.product_img, pi.img_category
                                        FROM product_data pd
                                        JOIN product_images pi ON pd.id = pi.product_id
                                        WHERE pd.status='Active'
                                        LIMIT 10");
        if(mysqli_num_rows($alt_sql) > 0) {
            $data = [];
            while($row = mysqli_fetch_array($alt_sql)) {
                $data[] = $row;
            }
            $res["data"] = $data;
            $res["status"] = "Success";
            $res["remarks"] = "Alt data sent";
        } else {
            $res['status'] = 'Error';
            $res['remarks'] = 'Error on query';
        }
    }

    echo json_encode($res);
?>