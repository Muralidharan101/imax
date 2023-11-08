<?php
require_once '../../../../datab.php';
$res = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    $pro_type = $_POST["pro_type"];
    // $product_size = $_POST["product_size"];
    $product_description = $_POST["product_description"];
    $product_category  = mysqli_real_escape_string($conn, $_POST['category']);

    $insertProduct = mysqli_query($conn, "INSERT INTO product_data (product_name, product_price,  product_desc, product_type,product_category,status, dateTime)
                                        VALUES ('$product_name', $product_price, '$product_description', '$pro_type','$product_category','Active', NOW())");

    if ($insertProduct) {
        $product_id = mysqli_insert_id($conn);

        // Main image
        if (isset($_FILES["main_Img"]) && $_FILES["main_Img"]["error"] == UPLOAD_ERR_OK) {
            $mainImageName = $_FILES["main_Img"]["name"];
            $mainImagePath = '../../../../product_images/' . $product_id . '/main/' . $mainImageName;
            
            // Ensure the directory exists
            $mainImageDirectory = '../../../../product_images/' . $product_id . '/main/';
            if (!is_dir($mainImageDirectory)) {
                mkdir($mainImageDirectory, 0777, true);
            }

            if (move_uploaded_file($_FILES["main_Img"]["tmp_name"], $mainImagePath)) {
                // Insert the main image path and product association into the "product_images" table
                $insertMainImage = mysqli_query($conn, "INSERT INTO product_images (product_id, product_img, img_category, status, dateTime)
                                                     VALUES ($product_id, '$mainImageName', 'main', 'Active', NOW())");
            }
        }

        // Check if there are additional images uploaded
        $additionalImagesUploaded = false;
        foreach ($_FILES as $file) {
            if ($file["error"] == UPLOAD_ERR_OK) {
                $additionalImagesUploaded = true;
                break;
            }
        }

        if ($additionalImagesUploaded) {
            // Insert additional images if uploaded
            for ($i = 0; $i < count($_FILES); $i++) {
                $additionalImageKey = "additionalImage" . $i;

                if (isset($_FILES[$additionalImageKey]) && $_FILES[$additionalImageKey]["error"] == UPLOAD_ERR_OK) {
                    $additionalImageName = $_FILES[$additionalImageKey]["name"];
                    $additionalImagePath = '../../../../product_images/' . $product_id . '/alt/' . $additionalImageName;

                    $additionalImageDirectory = '../../../../product_images/' . $product_id . '/alt/';
                    if (!is_dir($additionalImageDirectory)) {
                        mkdir($additionalImageDirectory, 0777, true);
                    }

                    if (move_uploaded_file($_FILES[$additionalImageKey]["tmp_name"], $additionalImagePath)) {
                        // Insert the additional image path and product association into the "product_images" table
                        $insertAdditionalImage = mysqli_query($conn, "INSERT INTO product_images (product_id, product_img, img_category, status, dateTime)
                        VALUES ($product_id, '$additionalImageName', 'alt', 'Active', NOW())");
                    }
                }
            }

            // Check for successful insertion of additional images
            if (isset($insertMainImage) && $insertMainImage) {
                $res['status'] = 'Success';
                $res['remarks'] = 'Product Created';
            } else {
                $res['status'] = 'Failed';
                $res['remarks'] = 'Error Inserting Additional Images into Database'.mysqli_error($conn);
            }
        } else {
            // No additional images were uploaded
            $res['status'] = 'Success';
            $res['remarks'] = 'Product Created (No Additional Images)';
        }
    }
} else {
    $res['status'] = 'Failed';
    $res['remarks'] = 'Unable to Create Product'.mysqli_error($conn);
}

echo json_encode($res);
?>
