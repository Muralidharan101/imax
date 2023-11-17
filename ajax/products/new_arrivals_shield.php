<?php
    require_once '../../datab.php';
    $res = [];

    $alt_sql = mysqli_query($conn, "SELECT pd.id AS product_id, pd.product_name, pd.product_price, pd.product_category, pd.product_desc,
                                        pi.id AS product_img_id, pi.product_img, pi.img_category
                                    FROM product_data pd
                                    JOIN product_images pi ON pd.id = pi.product_id
                                    WHERE pd.status='Active' AND pd.product_type='shield'
                                    ORDER BY pd.id DESC
                                    LIMIT 10");

    if(mysqli_num_rows($alt_sql) > 0) {
        $data = [];
        while($row = mysqli_fetch_assoc($alt_sql)) {
            $data[] = $row;
        }
        $res['data'] = $data;
        $res['status'] = 'Success';
        $res['remarks'] = 'Data sent';
    } else {
        $res['status'] = 'Error';
        $res['remarks'] = 'Error on query';
    }

    echo json_encode($res);
?>