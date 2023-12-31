<?php
    require_once '../datab.php';
    $res = [];

    $customer_id = mysqli_real_escape_string($conn, $_POST['customer_id']);
    $product_id_arr = json_decode($_POST['product_id'], true);
    $quantities = json_decode($_POST['quantity'], true);
    $total_prices = json_decode($_POST['total_price'], true);
    $total_order_price = mysqli_real_escape_string($conn, $_POST['total_order_price']);

    if (empty($product_id_arr)) {
        $res['status'] = 'Error';
        $res['remarks'] = 'Select products';
    } else {
        $select_query_order = mysqli_query($conn, "SELECT o.id, o.ref_no, GROUP_CONCAT(od.product_id ORDER BY od.product_id) AS product_set
                                                    FROM orders o
                                                    LEFT JOIN order_data od ON o.id = od.order_id
                                                    WHERE o.status='Active' AND o.order_status='Unconfirmed' 
                                                    AND o.customer_id='$customer_id'
                                                    GROUP BY o.id, o.ref_no");

        if (mysqli_num_rows($select_query_order) > 0) {
            while ($row = mysqli_fetch_assoc($select_query_order)) {
                $existing_product_set = $row['product_set'];
                $order_id = $row['id'];

                if (compareProductSets($existing_product_set, $product_id_arr)) {
                    $res['status'] = 'Success';
                    $res['remarks'] = 'Order already exists';
                    $res['ref_no'] = $row['ref_no'];
                    $res['order_id'] = $order_id;
                    break;
                }
            }

            if (!isset($res['status'])) {
                createNewOrder($conn, $customer_id, $product_id_arr, $quantities, $total_prices, $total_order_price, $res);
            }
        } else {
            createNewOrder($conn, $customer_id, $product_id_arr, $quantities, $total_prices, $total_order_price, $res);
        }
    }

    function compareProductSets($existing_set, $new_set)
    {
        $existing_array = explode(",", $existing_set);
        $new_array = $new_set;

        sort($existing_array);
        sort($new_array);

        return implode(",", $existing_array) === implode(",", $new_array);
    }

    function createNewOrder($conn, $customer_id, $product_id_arr, $quantities, $total_prices, $total_order_price, &$res)
    {
        $latest_reference_query = mysqli_query($conn, "SELECT MAX(CAST(SUBSTRING(ref_no, 3) AS UNSIGNED)) AS max_reference FROM orders WHERE `status`='Active'");
        $latest_reference_row = mysqli_fetch_assoc($latest_reference_query);
        $latest_reference = $latest_reference_row['max_reference'];

        $starting_value = 10000001;
        $next_reference = ($latest_reference !== null) ? $latest_reference + 1 : $starting_value;
        $ref_no = sprintf("OR%08d", $next_reference);

        $sql = mysqli_query($conn, "INSERT INTO orders (`ref_no`, `customer_id`, `total_price`, `order_status`, `status`,`dateTime`) 
        VALUES ('$ref_no', '$customer_id', '$total_order_price','Unconfirmed','Active', NOW())");

        if ($sql && $ref_no) {

            $order_id = mysqli_insert_id($conn);

            foreach ($product_id_arr as $key => $product_id) {
                $quantity = mysqli_real_escape_string($conn, $quantities[$key]);
                $total_price = mysqli_real_escape_string($conn, $total_prices[$key]);

                $sql_order_data = mysqli_query($conn, "INSERT INTO order_data (`order_id`,`ref_no` ,`product_id`, `customer_id`, `quantity`, `total_price`, `order_status`, `status`, `dateTime`)
                VALUES ('$order_id','$ref_no' ,'$product_id', '$customer_id', '$quantity', '$total_price', 'Unconfirmed', 'Active', NOW())");

                if (!$sql_order_data) {
                    $res['status'] = 'Failed';
                    $res['remarks'] = 'Unable to insert order data';
                    break;
                }
            }

            $res['order_id'] = $order_id;
            $res['ref_no'] = $ref_no;
            $res['status'] = 'Success';
            $res['remarks'] = 'Checked Out Successfully';
        } else {
            $res['status'] = 'Failed';
            $res['remarks'] = 'Unable to insert order';
        }
    }

    echo json_encode($res);
?>
