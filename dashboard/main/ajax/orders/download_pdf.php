<?php
require_once '../../../../datab.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $order_id = mysqli_real_escape_string($conn, $_POST['order_id']);

    $query = mysqli_query($conn, "SELECT * FROM invoices WHERE order_id='$order_id' WHERE status='Active' ");

    if ($query) {
        $row = mysqli_fetch_assoc($query);
        $pdfPath = $row['pdfPath'];

        if (file_exists($pdfPath)) {
            header('Content-Type: application/pdf');
            header('Content-Disposition: attachment; filename="invoice.pdf"');
            readfile($pdfPath);
        } else {
            http_response_code(404);
            echo "File not found.";
        }
    } else {
        http_response_code(500);
        echo "Error retrieving invoice data.";
    }
} else {
    http_response_code(400);
    echo "Bad Request.";
}
?>
