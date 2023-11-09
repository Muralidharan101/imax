<?php
    require_once '../../datab.php';
    $res =[];

    $sql = mysqli_query($conn,"SELECT * FROM customer_data WHERE `status`='Active' ");

    if(mysqli_num_rows($sql) > 0) { 
        $data = [];
        while($row = mysqli_fetch_assoc($sql)) { 
            $data[] = $row;
        }
        $res['data'] = $data;
        $res['status'] = 'Success';
        $res['remarks'] = 'Data sent';
    } else { 
        $res['status'] = 'Error';
        $res['remarks'] = 'Error on fetching data';
    }
    echo json_encode($res);
?>