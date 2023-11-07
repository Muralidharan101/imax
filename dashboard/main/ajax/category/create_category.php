<?php
    require_once '../../../../datab.php';
    $res =[];

    $cat = mysqli_real_escape_string($conn, $_POST['category']);

    $result = mysqli_query($conn, "INSERT INTO category_master (`category`, `status`, `dateTime`) VALUES ('$cat', 'Active', NOW() )");

    if($result) {
        $res['status'] = 'Success';
        $res['remarks'] = 'Category created successfully';
    } else {
        $res['status'] = 'Failed';
        $res['remarks'] = 'Unable to create category';
    }
    echo json_encode($res);
?>