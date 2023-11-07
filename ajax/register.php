<?php
require_once '../datab.php';
$res = [];

$user_name = mysqli_real_escape_string($conn, $_POST['Username']);
$phone  = mysqli_real_escape_string($conn, $_POST['Number']);
$pass  = mysqli_real_escape_string($conn, $_POST['password']);

$enc_pass = md5("Imax" . $pass);

$check_query = "SELECT * FROM customer_data WHERE status='Active' AND phone='$phone'";
$check_result = mysqli_query($conn, $check_query);

if (mysqli_num_rows($check_result) > 0) {
    $res['status'] = 'Failed';
    $res['remarks'] = 'User Already registered';
} else {
    $insert_query = "INSERT INTO customer_data (`user_name`, `phone`, `password`, `status`, `dateTime`) VALUES ('$user_name', '$phone', '$enc_pass', 'Active', NOW())";
    $insert_result = mysqli_query($conn, $insert_query);
    
    if ($insert_result) {
        $res['status'] = 'Success';
        $res['remarks'] = 'Registered Successfully';
    } else {
        $res['status'] = 'Failed';
        $res['remarks'] = 'Registration Failed';
    }
}

echo json_encode($res);
?>
