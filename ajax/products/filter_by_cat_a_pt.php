<?php
    require_once '../../datab.php';
    $res = [];

    $category = mysqli_real_escape_string($conn, $_POST['Category']);
    $product_type = mysqli_real_escape_string($conn, $_POST['product_type']);

    $sql = "SELECT pd.id AS product_id, pd.product_name, pd.product_price, pd.product_category, pd.product_desc,
                pi.id AS product_img_id, pi.product_img, pi.img_category
            FROM product_data pd
            JOIN product_images pi ON pd.id = pi.product_id
            WHERE pd.status='Active' AND pd.product_category ='$category' AND pd.product_type='$product_type' ";

    
    if($result = mysqli_query($conn, $sql)) {
        $data = [];
        while($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        $res['data'] = $data;
        $res['status'] = 'Success';
        $res['remarks'] = 'Data sent';
    } else {
        $res['status'] = 'Error';
        $res['remarks'] = 'Error in query';
    }

    echo json_encode($res);
?>