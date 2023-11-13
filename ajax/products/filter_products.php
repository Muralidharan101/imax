<?php
    require_once '../../datab.php';
    $res = [];

    $product_type = mysqli_real_escape_string($conn, $_POST['product_type']);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['Category']) && !isset( $_POST['start'])) {
            $product_type = mysqli_real_escape_string($conn, $_POST['product_type']);
            $category = mysqli_real_escape_string($conn, $_POST['Category']);
            
            $query = "SELECT (pd.id) AS product_id, pd.product_name, pd.product_price, pd.product_category, pd.product_price, pd.product_desc,
                                pi.id as product_img_id, pi.product_img, pi.img_category
                        FROM product_data pd
                        JOIN product_images pi ON pd.id = pi.product_id
                        WHERE pd.status='Active' AND pd.product_category='$category' AND pd.product_type='$product_type' ";
            
            $result = mysqli_query($conn, $query);

        } else if(isset($_POST['Category']) && isset($_POST['start']) && isset($_POST['end'])) {

            $category = mysqli_real_escape_string($conn, $_POST['Category']);
            $product_type = mysqli_real_escape_string($conn, $_POST['product_type']);
            $start = mysqli_real_escape_string($conn, $_POST['start']);
            $end = mysqli_real_escape_string($conn, $_POST['end']);

            $query = "SELECT (pd.id) AS product_id, pd.product_name, pd.product_price, pd.product_category, pd.product_price, pd.product_desc,
                            pi.id as product_img_id, pi.product_img, pi.img_category
                    FROM product_data pd
                    JOIN product_images pi ON pd.id = pi.product_id
                    WHERE pd.status='Active' AND pd.product_category='$category' AND pd.product_type='$product_type' AND pd.product_price BETWEEN '$start' AND '$end' ";

            $result = mysqli_query($conn, $query);

        } else if (isset($_POST['product_type']) && isset($_POST['start']) && isset($_POST['end'])) {
            $product_type = mysqli_real_escape_string($conn, $_POST['product_type']);
            $start = mysqli_real_escape_string($conn, $_POST['start']);
            $end = mysqli_real_escape_string($conn, $_POST['end']);

            $query = "SELECT (pd.id) AS product_id, pd.product_name, pd.product_price, pd.product_category, pd.product_price, pd.product_desc,
                                pi.id as product_img_id, pi.product_img, pi.img_category
                        FROM product_data pd
                        JOIN product_images pi 
                        ON pd.id = pi.product_id
                        WHERE pd.status='Active' AND pd.product_type='$product_type' AND pd.product_price BETWEEN '$start' AND '$end' ";

            $result = mysqli_query($conn, $query);
        } else {
            $query = "SELECT (pd.id) AS product_id, pd.product_name, pd.product_price, pd.product_category, pd.product_price, pd.product_desc,
                                pi.id as product_img_id, pi.product_img, pi.img_category
                        FROM product_data pd
                        JOIN product_images pi 
                        ON pd.id = pi.product_id
                        WHERE pd.status='Active' AND pd.product_type='$product_type'";

        }

        if ($result) {

            if(mysqli_num_rows($result) > 0) {
                $data = [];
                while ($row = mysqli_fetch_assoc($result)) {
                    $data[] = $row;
                }
                $res['status'] = 'Success';
                $res['remarks'] = 'Data sent';
                $res['data'] = $data;   
            } else {
                $res['status'] = 'Failed';
                $res['remarks'] = 'No data in that category';
            }
           
        } else {
            $res['status'] = 'Error';
            $res['message'] = 'Error executing the query';
        }
    } else {
        $res['status'] = 'Error';
        $res['message'] = 'Invalid request method';
    }
    echo json_encode($res);
?>
