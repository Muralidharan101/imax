<?php
    require_once '../../../../datab.php';
    $res = [];

    $id = mysqli_real_escape_string($conn, $_POST['editId']);
    $category = mysqli_real_escape_string($conn, $_POST['edit_Category']);

    $result = mysqli_query($conn, "UPDATE category_master SET category='$category' WHERE status='Active' AND id='$id'");

    if(mysqli_affected_rows($conn) > 0) {
        $res['status'] = 'Success';
        $res['remarks'] = 'Category deleted';
    } else {
        $res['status'] = 'Failed';
        $res['remarks'] = 'Unable to delete category';
    }
    echo json_encode($res);
?>