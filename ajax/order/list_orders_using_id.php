<?php
    require_once '../../datab.php';
    $res = [];

    $customer_id = mysqli_real_escape_string($conn, $_POST['customer_id']);
  
    $sql = "SELECT * FROM orders WHERE `status`='Active' AND `customer_id`='$customer_id' ";
    
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