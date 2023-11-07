<?php
require_once '../../../../datab.php';
$res = [];

$id = mysqli_real_escape_string($conn, $_POST['id']);

$sql = mysqli_query($conn, "UPDATE product_data SET status='Inactive' WHERE id='$id'");

if ($sql) {
    // Check if the update affected rows, if positive, proceed
    if (mysqli_affected_rows($conn) > 0) {
        $up_sql = mysqli_query($conn, "UPDATE product_images SET status='Inactive' WHERE product_id ='$id'");

        if ($up_sql) {
            // Check if the update affected rows in the second query
            if (mysqli_affected_rows($conn) > 0) {
                $res['status'] = 'Success';
                $res['remarks'] = 'Product Deleted';
            } else {
                $res['status'] = 'Failed';
                $res['remarks'] = 'Unable to delete product images';
            }
        } else {
            $res['status'] = 'Failed';
            $res['remarks'] = 'Unable to update product images';
        }
    } else {
        $res['status'] = 'Failed';
        $res['remarks'] = 'No product found to delete';
    }
} else {
    $res['status'] = 'Failed';
    $res['remarks'] = 'Unable to delete product';
}

echo json_encode($res);
?>
