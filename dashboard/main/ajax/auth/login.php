<?php
    require_once '../../../../datab.php';
    $res = [];
    
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $pass = mysqli_real_escape_string($conn, $_POST["pass"]);

    if($phone == "7010303571" && $pass == "1") {
        session_start();
        $res['status'] = 'Success';
        $res['remarks'] = 'Logged in';
        $_SESSION['logged'] = 'check';
    } else {
        $res['status'] = 'Error';
        $res['remarks'] = 'Error while login';
    } 
    echo json_encode($res);
?>