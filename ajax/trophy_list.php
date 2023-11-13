<?php
require_once '../datab.php';
$res = [];

$itemsPerPage = 30;

// Get the current page number from the URL parameter, default to 1
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Calculate the offset based on the current page and items per page
$offset = ($currentPage - 1) * $itemsPerPage;

$sql = "SELECT pd.id AS product_id, pd.product_name, pd.product_price, pd.product_size, pd.product_color, pd.product_desc, pd.product_category, 
        pi.product_img, pi.img_category 
        FROM product_data AS pd
        JOIN product_images AS pi ON pd.id = pi.product_id
        WHERE pi.img_category='main' AND pd.status = 'Active' AND pd.product_type='trophy'
        LIMIT $offset, $itemsPerPage";

if($result = mysqli_query($conn, $sql)) {
    $data = [];
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    // Get the total number of products for pagination
    $totalCountQuery = "SELECT COUNT(*) AS total FROM product_data WHERE status = 'Active' AND product_type='trophy'";
    $totalCountResult = mysqli_query($conn, $totalCountQuery);
    $totalCountRow = mysqli_fetch_assoc($totalCountResult);
    $totalItems = $totalCountRow['total'];

    // Calculate the total number of pages
    $totalPages = ceil($totalItems / $itemsPerPage);

    $res['data']       = $data;
    $res['status']     = 'Success';
    $res['remarks']    = 'Data Sent Successfully';
    $res['pagination'] = [
        'currentPage' => $currentPage,
        'totalPages'   => $totalPages
    ];
} else {
    $res['status']  = 'Error';
    $res['remarks'] = 'Error on query';
}

echo json_encode($res);
?>
