<?php
    require_once '../../../../datab.php';
    require_once 'pdf/fpdf.php';
    require_once 'pdf/imax.php';
    $res = [];

    $order_id = mysqli_real_escape_string($conn, $_POST["order_id"]);

    $sql = mysqli_query($conn, "UPDATE orders SET `order_status`='Paid' WHERE id='$order_id'");

    if (mysqli_affected_rows($conn) > 0) {

        $sql2 = mysqli_query($conn, "UPDATE order_data SET `order_status`='Paid' WHERE `order_id`='$order_id' ");

        if (mysqli_affected_rows($conn) > 0) {

            $pdfGenerator = new PDF();
            $pdfPath = '../../../../invoice/'.$order_id.'/invoice.pdf';
            if(!file_exists($pdfPath)) {
                mkdir($pdfPath, 0777, true);    
            }

            $pdfGenerator->Output($pdfPath, 'F');

            if ($pdfPath) {

                $insert_sql = mysqli_query($conn, "INSERT INTO invoice (`order_id`, `status`, `dateTime`, `pdfPath`) VALUES ('$order_id', 'Active', NOW()), '$pdfPath' ");

                if($insert_sql) {
                    $res['status'] = 'Success';
                    $res['remarks'] = 'Payment confirmed';
                    $res['pdf_path'] = $pdfPath;
                } else {
                    $res['status'] = 'Error';
                    $res['remarks'] = 'Error while inserting invoice';
                }
            }
        } else {
            $res['status'] = 'Error';
            $res['remarks'] = 'Error while updating order_data';
        }
    } else {
        $res['status'] = 'Error';
        $res['remarks'] = 'Error while updating orders';
    }

    echo json_encode($res);
?>
