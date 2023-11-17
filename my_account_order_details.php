<?php
    require_once 'datab.php';
    include 'ajax/session.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    
<!-- Mirrored from www.annimexweb.com/items/hema/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2023 19:36:35 GMT -->
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title Of Site -->
        <title>My Account - Imax Trophies</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo $path;?>assets/images/favicon.png" />
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="<?php echo $path;?>assets/css/plugins.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="<?php echo $path;?>assets/css/style-min.css">
        <link rel="stylesheet" href="<?php echo $path;?>assets/css/responsive.css">
        
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
        
    </head>

    <body class="account-page my-account-page">
        <!--Page Wrapper-->
        <div class="page-wrapper">
           

            <!--Header-->
        <?php include 'header.php'; ?>
          
            <!--End Header-->
            

            <!-- Body Container -->
            <div id="page-content"> 
                <!--Page Header-->
                <!-- <div class="page-header text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                                <div class="page-title"><h1>My Account</h1></div>
                              
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--End Page Header-->

                <!--Main Content-->
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="dashboard-content tab-content h-100" id="top-tabContent">
                                <!-- Account Info -->
                                <div class="tab-pane fade h-100 show active" id="orders">
                                
                                    <div class="orders-card mt-0 h-100">    
                                        <div class="top-sec d-flex-justify-center justify-content-between mb-4">
                                            <h2 class="mb-0">My Orders</h2>
                                        </div>

                                        <div class="table">
                                            <table class="table align-middle text-center order-table" id="order_table">
                                                <thead>
                                                    <tr class="table-head text-nowrap text-center">
                                                        <th scope="col">Product Image</th>
                                                        <th scope="col">Product Name</th>
                                                        <th scope="col">Quantity</th>
                                                        <th scope="col">Product Price</th>
                                                        <th scope="col">Total Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>                                               
                                    </div>
                                
                                </div>
                                <!-- End Account Info -->


                                <!-- My Orders -->
                                <!-- <div class="tab-pane fade h-100" id="orders">
                                    <div class="orders-card mt-0 h-100">    
                                        <div class="top-sec d-flex-justify-center justify-content-between mb-4">
                                            <h2 class="mb-0">My Orders</h2>
                                        </div>

                                        <div class="table-bottom-brd table-responsive">
                                            <table class="table align-middle text-center order-table" id="order_table">
                                                <thead>
                                                    <tr class="table-head text-nowrap text-center">
                                                        <th scope="col">Order Id</th>
                                                        <th scope="col">Total Price</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">View</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>                                               
                                    </div>
                                </div> -->
                                <!-- End My Orders -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Main Content-->
            </div>
            <!-- End Body Container -->

            <!--Footer-->
            <?php include('footer.php'); ?>
         
            <!--End Footer-->

            <!--Scoll Top-->
            <div id="site-scroll"><i class="icon anm anm-arw-up"></i></div>
            <!--End Scoll Top-->

   


            <!-- Including Jquery/Javascript -->
            <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
            <!-- Plugins JS -->
            <script src="<?php echo $path;?>/assets/js/plugins.js"></script>
            <!-- Main JS -->
            <script src="<?php echo $path;?>/assets/js/main.js"></script>
            <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
            
            <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

           <script>
                function getCookie(cookieName) {
                    var name = cookieName + "=";
                    var decodedCookie = decodeURIComponent(document.cookie);
                    var cookieArray = decodedCookie.split(';');

                    for (var i = 0; i < cookieArray.length; i++) {
                        var cookie = cookieArray[i].trim();
                        if (cookie.indexOf(name) === 0) {
                            return cookie.substring(name.length, cookie.length);
                        }
                    }
                    return "";
                }

                const customer_id = getCookie('imax_login_user_id');
                // console.log(customer_id);

                var params = new URLSearchParams(window.location.search);

                if(params.has('order_id')) {
                    var order_id = params.get('order_id');

                } 


                // function fetchAccountData() {
                //     var fd = new FormData();
                //     fd.append('customer_id', customer_id); 
                //     var acc_phone = document.getElementById('acc_phone');
                    
                //     $.ajax({
                //         url: 'ajax/account/account_data_using_id.php',
                //         method: 'post',
                //         contentType: false,
                //         processData: false,
                //         data: fd,

                //         success:function(response) {
                //             var result = JSON.parse(response);

                //             if(result.status == 'Success') {
                //                 var acc_name = document.getElementById('acc_name');
                                
                //                 var data = result.data;

                //                 if(data.length > 0) {
                //                     acc_name.innerHTML = data[0].user_name;
                //                     acc_phone.innerHTML = data[0].phone;
                //                 }
                //             } else {
                //                 toastr.error("Account data unavailable","Error")
                //             }
                //         }
                //     })
                // } fetchAccountData()

                // function onlyNum(e) {
                //     e.value = e.value.replace(/[^0-9]/g, '');
                // }

                function fetchOrderData() {
                    var fd = new FormData();
                    // fd.append('customer_id', customer_id);
                    fd.append('order_id', order_id);

                    $.ajax({
                        url: 'ajax/account/account_order_details_list.php',
                        method: 'post',
                        contentType:false,
                        processData:false,
                        data:fd,

                        success:function (response) {
                            var result = JSON.parse(response);
                            
                            if(result.status == 'Success') {
                                var data = result.data;
                                var table = $('#order_table').DataTable();

                                data.forEach(function (value) {
                                    table.row.add([
                                        `<img src="product_images/${value.product_id}/main/${value.product_img}" width="70" height="100"/>`,
               
                                        value.product_name,
                                        value.quantity,
                                        value.product_price,
                                        value.total_price
                                    ]).draw();
                                });
                                
                            } else {
                                toastr.error('Error');
                            }
                        }
                    })
                } fetchOrderData();


            </script>

        </div>
        <!--End Page Wrapper-->
    </body>

<!-- Mirrored from www.annimexweb.com/items/hema/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2023 19:36:44 GMT -->
</html>