<?php
    require_once '../../../../datab.php';
    // require_once 'pdf/fpdf.php';
    // require_once 'imax.php';
    $res = [];

    $order_id = mysqli_real_escape_string($conn, $_POST["order_id"]);

    $sql = mysqli_query($conn, "UPDATE orders SET `order_status`='Paid' WHERE id='$order_id'");

    if (mysqli_affected_rows($conn) > 0) {

        $sql2 = mysqli_query($conn, "UPDATE order_data SET `order_status`='Paid' WHERE `order_id`='$order_id' ");

        $res['status'] = 'Success';
        $res['remarks'] = 'Payment confirmed';
    } else {
        $res['status'] = 'Error';
        $res['remarks'] = 'Error while updating orders';
    }

    $res['test'] = mysqli_affected_rows($conn);
    echo json_encode($res);
?>
