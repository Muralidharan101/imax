<?php
    require_once '../datab.php';
    $res = [];

    $sql = mysqli_query($conn, "SELECT category, COUNT(*) as count FROM category_master WHERE status='Active' GROUP BY category");

    if(mysqli_num_rows($sql) > 0) {
        $data = [];
        while($row = mysqli_fetch_assoc($sql)) {
            $category = $row['category'];
            $count = $row['count'];
            $data[] = array("category" => $category, "count" => $count);
        }
        $res["data"] = $data;
        $res["status"] = 'Success';
        $res['remarks'] = 'Data sent';
    } else {
        $res['status'] = 'Error';
        $res['remarks'] = 'Unable to send data';
    }
    
    echo json_encode($res);
?>
