<?php
    require_once '../../../../datab.php';
    $res = [];

    $sql = "SELECT o.ref_no, o.total_price, o.id, o.order_status,o.order_by_name,
            cd.user_name, cd.phone 
            FROM orders o
            JOIN customer_data cd
            ON o.customer_id = cd.id
            WHERE o.status='Active' AND o.order_status='Paid' ";

    if($result = mysqli_query($conn, $sql)) {
        $data = [];
        while($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        $res['data'] = $data;
        $res['status'] = 'Success';
        $res['remarks'] = 'Data Sent';
    } else {
        $res['status'] = 'Failed';
        $res['remarks'] = 'No data available';
    }
    echo json_encode($res);
?>