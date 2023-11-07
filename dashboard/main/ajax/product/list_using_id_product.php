<?php
    // Use this code to list the products in ecommerce detatils page and edit page.
    // Because you only get the data of a single product of the id that you sent from frontend.
    require_once '../../../../datab.php';
    $res = [];

    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $sql = "SELECT  pd.id,pd.product_name,pd.product_price,pd.product_size,pd.product_color,pd.product_desc,
                    pi.product_img,pi.img_category
            FROM product_data AS pd
            JOIN product_images AS pi 
            ON pd.id = pi.product_id
            WHERE pd.id = '$id' 
            AND pd.status='Active' ";

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
        $res['remarks'] = 'Error in backend';
    }
    echo json_encode($res);
?>