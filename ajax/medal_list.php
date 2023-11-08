<?php
require_once '../datab.php';
$res = [];

$sql = "SELECT pd.id, pd.product_name, pd.product_price, pd.product_size, pd.product_color, pd.product_desc, pd.product_category, pi.product_img, pi.img_category 
        FROM product_data AS pd
        JOIN product_images AS pi ON pd.id = pi.product_id
        WHERE pi.img_category ='main' AND pd.status = 'Active' AND pd.product_type='medal'";
    
if($result = mysqli_query($conn, $sql)) {
    $data = [];
    while($row = mysqli_fetch_assoc($result)) {
        $data[$row['id']][] = $row;
    }
    $res['data']    = $data;
    $res['status']  = 'Success';
    $res['remarks'] = 'Data Sent Successfully'; 
} else {
    $res['status']  = 'Error';
    $res['remarks'] = 'Error on query';
}

echo json_encode($res);
?>
