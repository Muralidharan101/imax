<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/tivo/template/base-input.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 08:42:00 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="tivo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Tivo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
   -->
    <title>IMAX | Products Edit</title>

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;

        }

        .danger {

            background-color: #fe030c;
            border: 0px !important;
        }

        #submit {
            background-color: #fe030c;
            border: 0px !important;
        }

        #submit:hover {
            background-color: #bd001fd0;
            border: 0px !important;
        }

        .tooltip-inner {
            color: red !important;
        }
    </style>

</head>

<body>
    <!-- tap on top starts-->
    <div class="tap-top" style="background-color:#fe030c;"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"> </div>
        <div class="dot"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <?php include "navbar.php" ;?>
        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php include "sidebar.php" ;?>
            <!-- Page Sidebar Ends-->



            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-body">
                            <div class="container-fluid">
                                <div class="page-title">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h3>Product Edit</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Container-fluid starts -->
                            <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-body">
                        <!-- <div class="table-responsive theme-scrollbar"> -->
                          <!-- <table class="table" id="mainImageTable"> -->
                            <!-- <thead> -->
                              <!-- <tr class="border-bottom-info">

                                <th scope="col">Main Image File<button class="btn text-danger" type="button"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Choose image less
                                  than 2mb"><i class="bi bi-info-circle-fill"></i></button>


                                </th>
                                <th scope="col">Main Image Preview</th>
                              </tr> -->
                            <!-- </thead> -->
                            <!-- <tbody> -->
                              <!-- Template row for adding images -->
                              <!-- <tr class="border-bottom-info" id="mainRowTemplate"> -->
                                <!-- <td> -->
                                  <!-- Replace your button with this code -->

                                  <!-- <input type="file" class="mt-4" id="mainImg" accept=".jpg, .jpeg, .png"
                                    onchange="previewImage(this)"> -->


                                  <!-- Hidden file input -->
                                  <!-- <p class="pt-3 fsize"></p>
                                </td> -->


                                <!-- <td> -->
                                  <!-- Image preview initially hidden -->
                                  <!-- <img class="mainprev" width="100%" height="100px" style="display: none;">
                                  <br>
                                </td> -->
                            <!-- </tbody> -->
                          <!-- </table>
                        </div> -->

                        <!-- <br><br><br><br><br> -->

                        <!-- <div class="mtable-responsive theme-scrollbar">
                          <table class="table" id="imageTable">
                            <thead>
                              <tr class="border-bottom-info">

                                <th scope="col">Addditional Image File<button class="btn text-danger" type="button"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Choose image less
                                  than 2mb"><i class="bi bi-info-circle-fill"></i></button>


                                </th>
                                <th scope="col">Additional Image Preview</th>
                                <th scope="col">Actions</th>
                              </tr>
                            </thead>
                            <tbody> -->
                              <!-- Template row for adding images -->
                              <!-- <tr class="border-bottom-info" id="rowTemplate">
                                <td> -->
                                  <!-- Replace your button with this code -->

                                  <!-- <input type="file" class="mt-4" id="additionalImageInput" accept=".jpg, .jpeg, .png"
                                    onchange="previewImage(this)" data-main="0">
 -->

                                  <!-- Hidden file input -->
                                  <!-- <p class="pt-3 fsize"></p>
                                </td> -->


                                <!-- <td> -->
                                  <!-- Image preview initially hidden -->
                                  <!-- <img class="mainprev" width="100%" height="100px" style="display: none;">
                                  <br>
                                </td> -->

                                <!-- <td> -->
                                  <!-- Container for the delete button -->
                                  <!-- <div class="delete-container mt-4"></div>
                                </td>
                              </tr>
                            </tbody>
                          </table> -->
                          <!-- Button to add new images -->
                          <!-- <button class="btn btn-info mt-2 float-end" id="addImage">Add Image</button>
                        </div> -->


                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="mb-3">
                              <label class="form-label" for="proName">Product Name</label>
                              <input type="text" class="form-control" id="proName" style="border:.5px solid #9b9999;"
                                placeholder="Enter Product Name">
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="mb-3">
                              <label class="form-label" for="proPrice">Product Price</label>
                              <input type="number" class="form-control" id="proPrice" style="border:.5px solid #9b9999;"
                                placeholder='Enter Product Price'>
                            </div>
                          </div>
                          <!-- <div class="col-lg-4">
                            <div class="mb-3">
                              <label class="form-label" for="proSize">Product Size</label>
                              <select class="form-select" id="proSize" style="border:.5px solid #9b9999;">
                                <option value="">--SELECT PRODUCT SIZE--</option>
                              </select>

                            </div>
                          </div> -->
                        </div>
                        <div class="row">
                          <!-- <div class="col-lg-4">
                            <div class="mb-3">
                              <label class="form-label" for="proColor">Product Color</label>
                              <select class="form-select" id="proColor" style="border:.5px solid #9b9999;">
                                <option value="">--SELECT PRODUCT SIZE--</option>
                              </select>

                            </div>
                          </div> -->
                          <div class="col-lg-8">
                            <div class="mb-3">
                              <label class="form-label" for="proDescription">Product Description</label>
                              <textarea style="border:.5px solid #9b9999;" id="proDescription" class="form-control"
                                rows="4" placeholder="Product Description"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                            <div class="card-footer text-end">
                                <button class="btn text-white" id="submit" >Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 p-0 footer-left">
                            <p class="mb-0">Copyright © . All rights reserved Designed By <a
                                    href="https://cryptographicsolutions.in/">Cryptographic Solutions</a>.</p>
                        </div>
                        <!-- <div class="col-md-6 p-0 footer-right">
               <a href="https://cryptographicsolutions.in/"></a>
            </div> -->
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/config.js"></script>
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <!-- Template js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"> </script>
    <!-- login js-->

    <!--Toastr  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        // document.getElementById('addImage').addEventListener('click', function () {
        //     const table = document.getElementById('imageTable').getElementsByTagName('tbody')[0];
        //     const rowTemplate = document.getElementById('rowTemplate');
        //     const newRow = rowTemplate.cloneNode(true); // Clone the template row
        //     newRow.style.display = ''; // Make the cloned row visible

        //     // Reset the file input and image preview for the new row
        //     const fileInput = newRow.querySelector('input[type="file"]');
        //     const imagePreview = newRow.querySelector('img');
        //     const fileSizeMessage = newRow.querySelector('.fsize');
        //     const deleteContainer = newRow.querySelector('.delete-container');
        //     const submit_btn = document.getElementById('submit');

        //     fileInput.value = '';
        //     imagePreview.src = '';
        //     imagePreview.style.display = 'none';
        //     fileSizeMessage.textContent = '';

        //     // Add a delete button to the new row
        //     const deleteButton = document.createElement('button');
        //     deleteButton.innerHTML = '<i class="bi bi-trash-fill h6 mt-2"></i>';
        //     deleteButton.className = 'btn danger text-white';
        //     deleteButton.addEventListener('click', function () {
        //         table.removeChild(newRow);
        //     });

        //     deleteContainer.appendChild(deleteButton);

        //     // Remove any additional default rows created by the JavaScript
        //     const defaultRows = table.getElementsByClassName('default-row');
        //     if (defaultRows.length > 1) {
        //         table.removeChild(defaultRows[defaultRows.length - 1]);
        //     }

        //     table.appendChild(newRow);

        // });

      


        // function previewImage(input) {
        //     const preview = input.closest('tr').querySelector('img.mainprev');
        //     const fileSizeMessage = input.closest('td').querySelector('.fsize');
        //     const submit_btn = document.getElementById('submit'); // Get the submit button

        //     if (input.files && input.files[0]) {
        //         const selectedFile = input.files[0];
        //         const maxSizeInBytes = 1024 * 200; // 2MB

        //         if (selectedFile.size > maxSizeInBytes) {
        //             fileSizeMessage.textContent = 'File size exceeds the allowed limit.';
        //             fileSizeMessage.style.color = 'red';
        //             preview.style.display = 'none'; // Hide the image preview

        //         } else {
        //             fileSizeMessage.textContent = 'File Size is within the limit';
        //             fileSizeMessage.style.color = 'green';
        //             submit_btn.style.display = 'inline-block'; // Show the submit butto

        //             const reader = new FileReader();
        //             reader.onload = function (e) {
        //                 preview.src = e.target.result;
        //                 preview.style.display = 'block'; // Show the image preview
        //             };
        //             reader.readAsDataURL(input.files[0]);
        //         }
        //     } else {
        //         fileSizeMessage.textContent = '';
        //         preview.style.display = 'none'; // Hide the image preview
        //         submit_btn.style.display = 'none'; // Hide the submit button
        //     }
        // }




        $(document).ready(function () {

            var queryParams = new URLSearchParams(window.location.search);

            if (queryParams.has('id')) {
                var productID = queryParams.get('id');
            }

            function fetchdata() {
                console.log("Product ID: " + productID);

                var fd = new FormData();

                fd.append('id', productID);

                $.ajax({
                    url: 'ajax/product/list_using_id_product.php',
                    type: 'post',
                    contentType: false,
                    processData: false,
                    data: fd,

                    success: function (response) {
                        var result = JSON.parse(response);
                        console.log(result);

                        if (result.status == 'Success') {
                            var data = result.data;
                            console.log(data);

                            if (data.length > 0) {
                                var product_img = data[0].product_img;
                                var product_name = data[0].product_name;
                                var product_price = data[0].product_price;
                                var product_size = data[0].product_size;
                                var product_color = data[0].product_color;
                                var product_desc = data[0].product_desc;
                            } else {
                                console.log('No data found');
                            }
                            // document.getElementById('proImage').innerHTML = product_img;
                            document.getElementById('proName').value = product_name;
                            document.getElementById('proPrice').value = product_price;
                            // document.getElementById('proSize').value = product_size;
                            // document.getElementById('proColor').value = product_color;
                            document.getElementById('proDescription').value = product_desc;
                        }
                    }
                })
            }
            fetchdata();

            // Initialize a FormData object to store the data
            var formData = new FormData();

            // // Additional image input change event
            // $("input[data-main='0']").change(function () {
            //     var fileSizeMessage = $(this).closest('td').find('.fsize');
            //     var mainPreview = $(this).closest('td').find('img.mainprev');

            //     // Assuming previewAdditionalImage is a function that displays the selected image
            //     previewAdditionalImage(this, mainPreview, fileSizeMessage);

            //     // Update the additional image selection
            //     var additionalImage = this.files[0];

            //     // Don't append here; we'll append them all when the form is submitted
            // });

            // Submit button click event
            $("#submit").click(function (e) {

                console.log(1);
                // e.preventDefault();
                formData = new FormData();

                // Gather other form data
                // var mainImg = $("#mainImg")[0].files[0];
                var proname = $("#proName").val();
                var proprice = $("#proPrice").val();
                // var prosize = $("#proSize").val().trim();
                // var procolor = $("#proColor").val();
                var prodes = $("#proDescription").val();

                if (proname == "") {
                    toastr.error("Enter Product Name", "Empty!");
                } else if(proprice == ""){
                  toastr.error("Enter Product Price", "Empty!");
                } else if (prodes == "") {
                    toastr.error("Enter Description", "Empty!");
                } else {
                    formData.append("id", productID);
                    formData.append("product_name", proname);
                    formData.append("product_price", proprice);
                    // formData.append("product_color", procolor);
                    // formData.append("product_size", prosize);
                    formData.append("product_description", prodes);
                    // formData.append("main_Img", mainImg);

                    // Append all additional images to the formData
                    // $("input[data-main='0']").each(function (index, input) {
                    //     var additionalImage = input.files[0];
                    //     if (additionalImage) {
                    //         formData.append("additionalImage" + index, additionalImage);
                    //     }
                    // });

                    // Send the formData to the server
                    uploadImage(formData);
                }
            });

            // Function to preview and upload the image via AJAX
            function uploadImage(formData) {
                $.ajax({
                    url: 'ajax/product/edit_product.php',
                    type: 'post',
                    contentType: false,
                    processData: false,
                    data: formData,
                    success: function (response) {
                        var result = JSON.parse(response);
                        if (result.status == "Success") {
                            toastr.success("Product Created Successfully", "Welcome!");

                            // $("#proName").val("");
                            // $("#proPrice").val("");
                            // $("#proColor").val("");
                            // $("#proSize").val("");
                            // $("#proDescription").val("");
                        } else {
                            toastr.error("Unable To Create Product", "Error");
                        }
                    }
                });
            }
        });
    </script>

</body>

</html>