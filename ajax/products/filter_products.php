<?php
    require_once '../../datab.php';
    $res = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Validate and sanitize input
        $product_type = isset($_POST['product_type']) ? mysqli_real_escape_string($conn, $_POST['product_type']) : '';
        $category = isset($_POST['Category']) ? mysqli_real_escape_string($conn, $_POST['Category']) : '';
        $start = isset($_POST['start']) ? mysqli_real_escape_string($conn, $_POST['start']) : '';
        $end = isset($_POST['end']) ? mysqli_real_escape_string($conn, $_POST['end']) : '';

        // Check the presence of required parameters
        if (empty($product_type)) {
            $res['status'] = 'Error';
            $res['message'] = 'Product type is missing.';
        } else {
            // Build the query based on the provided parameters
            $query = "SELECT pd.id AS product_id, pd.product_name, pd.product_price, pd.product_category, pd.product_desc,
                            pi.id AS product_img_id, pi.product_img, pi.img_category
                    FROM product_data pd
                    JOIN product_images pi ON pd.id = pi.product_id
                    WHERE pd.status='Active'";

            if (!empty($category)) {
                $query .= " AND pd.product_category='$category'";
            }

            if (!empty($start) && !empty($end)) {
                $query .= " AND pd.product_price BETWEEN '$start' AND '$end'";
            }

            if (!empty($product_type)) {
                $query .= " AND pd.product_type='$product_type'";
            }

            $result = mysqli_query($conn, $query);

            if ($result) {
                if (mysqli_num_rows($result) > 0) {
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
                $res['message'] = 'Error executing the query: ' . mysqli_error($conn);
            }
        }
    } else {
        $res['status'] = 'Error';
        $res['message'] = 'Invalid request method';
    }

    echo json_encode($res);
?>
