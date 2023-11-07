<?php
    require_once '../datab.php';
    $res = [];
    $cookie_value = 0;
    $cookie_id  = 0;

    $phone = mysqli_real_escape_string($conn, $_POST['mobileNumber']);
    $pass = mysqli_real_escape_string($conn, $_POST['Password']);
    
    $enc_pass = md5("Imax".$pass);

    $check_query = "SELECT * FROM customer_data WHERE status='Active' AND `phone`='$phone' AND `password`='$enc_pass'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        while ($row = mysqli_fetch_assoc($check_result)) {
            $cookie_value = $row['phone'];
            $cookie_id = $row['id'];
        }

        $cookie_name = "imax_login_user_phone";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30 * 12), "/");
    
        $username_login = "imax_login_user_id";
        setcookie($username_login, $cookie_id, time() + (86400 * 30 * 12), "/");

        $res['status'] = 'Success';
        $res['remarks'] = 'Login Successfully';
    } else {
        $res['status'] = 'Failed';
        $res['remarks'] = 'Login Failed';
    }

    echo json_encode($res);
?>