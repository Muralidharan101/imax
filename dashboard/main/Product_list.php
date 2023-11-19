<?php
  require_once '../../datab.php';
    require_once 'ajax/auth/session.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/tivo/template/datatable-basic-init.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 08:42:04 GMT -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="tivo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, Tivo admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <!-- <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <title>IMAX | Products List</title>

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
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/datatables.css">
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
</head>

<body>
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
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
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-sm-6">
                <h3>Products List</h3>
              </div>
              <div class="col-sm-6">

              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
          <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
              <div class="card">

                <div class="card-body">
                  <div class="table-responsive theme-scrollbar">
                    <table class="display" id="basic-1">
                      <thead>
                        <tr>
                          <th>Product Image</th>
                          <th>Product Name</th>
                          <th>Product Price</th>
                          <th>Product Description</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- Zero Configuration  Ends-->


          </div>
        </div>
        <!-- Container-fluid Ends-->
      </div>
    
    </script>
      <!-- footer start-->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 p-0 footer-left">
              <p class="mb-0">Copyright © 2023 Tivo. All rights reserved.</p>
            </div>
            <div class="col-md-6 p-0 footer-right">
              <p class="mb-0">Hand-crafted & made with <i class="fa fa-heart font-danger"></i></p>
            </div>
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
  <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
  <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
  <script src="../assets/js/tooltip-init.js"></script>
  <!-- Template js-->
  <script src="../assets/js/script.js"></script>
  <script src="../assets/js/theme-customizer/customizer.js"> </script>
  <!-- login js-->

  <script>
    
    var product_id; //trophy_size,trophy_color;

    function fetchdata() {
      $.ajax({
        url: 'ajax/product/list_product.php',
        type: 'get',

        success: function (response) {
          var result = JSON.parse(response);
          console.log(result);

         
          dataTable = $('#basic-1').DataTable();

          if (result.status == 'Success') {
            var data = result.data;
            console.log(data);

          


            data.map(function (value) {
              product_id = value.id;
              // console.log()

          var product_size_parsed = JSON.stringify(value.product_size);
          var product_color_parsed = JSON.stringify(value.product_color);


          console.log('product size'+ product_size_parsed);
          console.log('product color'+product_color_parsed);

              var editButton =
                `<a href="Product_edit.php?id=${value.id}" class='text-success me-2'><i class="bi bi-pencil-fill h6"></i></a>`;
              // var viewButton =
              //   `<a href=".php?id=${value.id}" class=text-success' me-2'><i class="bi bi-box-arrow-up-right pt-2 h6"></i></a>`;
              dataTable.row.add([
                `<img src="../../product_images/${value.id}/main/${value.product_img}" width="70" height="100"/>`,
               
                value.product_name,
                value.product_price,
                value.product_desc,
                `${editButton}<a data-id="${value.id}" class='text-danger me-2 delete_button'><i class="bi bi-trash3-fill h6"></i></a>`
              ]).draw(false);
            });
          }
        }
      })
    }
    fetchdata();


    $(document).on('click', '.delete_button', function () {
      var deleteId = $(this).data("id");
      console.log(deleteId);

      var fd = new FormData();

      fd.append('id', deleteId);

      $.ajax({
        url: 'ajax',
        data: fd,
        type: 'post',
        contentType: false,
        processData: false,

        success: function (response) {
          dataTable.clear().draw();
          data = JSON.parse(response);

          if (data.status == "Success") {
            toastr.success("Product Deleted !", "Success")

            fetchdata();
          } else {
            toastr.error("Error", "Error Found!")
          }
        }
      });
    });
  </script>

</body>

</html>