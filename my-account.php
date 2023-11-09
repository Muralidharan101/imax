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
                <div class="page-header text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                                <div class="page-title"><h1>My Account</h1></div>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Page Header-->

                <!--Main Content-->
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 mb-4 mb-lg-0">
                            <!-- Dashboard sidebar -->
                            <div class="dashboard-sidebar bg-block">
                               
                                <div class="dashboard-tab">
                                    <ul class="nav nav-tabs flex-lg-column border-bottom-0" id="top-tab" role="tablist">
                                        <li class="nav-item"><a href="#" data-bs-toggle="tab" data-bs-target="#info" class="nav-link active">Account Info</a></li>
                                        <li class="nav-item"><a href="#" data-bs-toggle="tab" data-bs-target="#orders" class="nav-link">My Orders</a></li>
                                        <li class="nav-item"><a href="login.html" class="nav-link">Log Out</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Dashboard sidebar -->
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                            <div class="dashboard-content tab-content h-100" id="top-tabContent">
                                <!-- Account Info -->
                                <div class="tab-pane fade h-100 show active" id="info">
                                    <div class="account-info h-100">
                                        <div class="welcome-msg mb-4">
                                            <h2>Hello, <span class="text-primary" id="acc_name"></span></h2>
                                            <p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
                                        </div>
                                        <div class="account-box">
                                            <h3 class="mb-3">Account Information</h3>
                                            <div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-1 row-cols-1">
                                                <div class="box-info mb-4">
                                                    <div class="box-title d-flex-center">
                                                        <h4>Contact Information:<span id="acc_phone"></span></h4> <a href="javascript:void(0)" id="editLink" class="btn-link ms-auto">Edit</a>
                                                    </div>
                                                    <div class="form-group d-none" id="edt_grp">
                                                        <input type="text" class="form-control" id="edit_contact" oninput="onlyNum(this)">
                                                        <button class="btn btn-danger btn-sm mt-2" id="update_phone">Update</button>
                                                    </div>
                                                    <div class="box-content mt-3">
                                                        <p><a href="javascript:void(0)" id="pass_link" class="btn-link ps-3">Change Password</a></p>
                                                    </div>
                                                    <div class="form-group d-none" id="pass_grp">
                                                        <input type="text" class="form-control" id="pass">
                                                        <button class="btn btn-danger btn-sm mt-2" id="update_pass">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Account Info -->


                                <!-- My Orders -->
                                <div class="tab-pane fade h-100" id="orders">
                                    <div class="orders-card mt-0 h-100">    
                                        <div class="top-sec d-flex-justify-center justify-content-between mb-4">
                                            <h2 class="mb-0">My Orders</h2>
                                        </div>

                                        <div class="table-bottom-brd table-responsive">
                                            <table class="table align-middle text-center order-table">
                                                <thead>
                                                    <tr class="table-head text-nowrap">
                                                        <th scope="col">Order Id</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">View</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="order_table">
                                                </tbody>
                                            </table>
                                        </div>                                               
                                    </div>
                                </div>
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
            <!-- Plugins JS -->
            <script src="<?php echo $path;?>/assets/js/plugins.js"></script>
            <!-- Main JS -->
            <script src="<?php echo $path;?>/assets/js/main.js"></script>

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


                function fetchAccountData() {
                    var fd = new FormData();
                    fd.append('customer_id', customer_id); 
                    var acc_phone = document.getElementById('acc_phone');
                    
                    $.ajax({
                        url: 'ajax/account/account_data_using_id.php',
                        method: 'post',
                        contentType: false,
                        processData: false,
                        data: fd,

                        success:function(response) {
                            var result = JSON.parse(response);

                            if(result.status == 'Success') {
                                var acc_name = document.getElementById('acc_name');
                                
                                var data = result.data;

                                if(data.length > 0) {
                                    acc_name.innerHTML = data[0].user_name;
                                    acc_phone.innerHTML = data[0].phone;
                                }
                            } else {
                                toastr.error("Account data unavailable","Error")
                            }
                        }
                    })
                } fetchAccountData()

                function onlyNum(e) {
                    e.value = e.value.replace(/[^0-9]/g, '');
                }

                function fetchOrderData() {
                    var fd = new FormData();
                    fd.append('customer_id', customer_id);
                    $.ajax({
                        url: 'ajax/order/list_orders_using_id.php',
                        method: 'post',
                        contentType:false,
                        processData:false,
                        data:fd,

                        success:function (response) {
                            var result = JSON.parse(response);
                            
                            if(result.status == 'Success') {
                                var data = result.data;

                                var table = $('#order_table');

                                data.map(function(value){
                                    
                                    console.log(1);
                                    // <td><img class="blur-up lazyload" data-src="<?php echo $path;?>/assets/images/products/product1-120x170.jpg" src="<?php echo $path;?>/assets/images/products/product1-120x170.jpg" width="50" alt="product" title="product" /></td>
                                    
                                    let table_html=`
                                        <tr data-orderId="${value.id}" data-customerId="${value.customer_id}">
                                            <td><span class="id">${value.ref_no}</span></td>
                                            <td><span class="price fw-500">${value.total_price}</span></td>
                                            <td><span class="badge rounded-pill bg-success custom-badge">${value.order_status}</span></td>
                                            <td><a href="javascript:void(0)" class="view"><i class="icon anm anm-eye btn-link fs-6"></i></a></td>
                                        </tr>
                                    `;

                                    table.insertAdjacentHTML('beforeend', table_html);
                                })
                            } else {

                            }
                        }
                    })
                } fetchOrderData();

                $(document).ready(function() {
                    $('#editLink').click(function(){
                        var edt_grp = document.getElementById('edt_grp');

                        edt_grp.classList.toggle('d-none');
                    })

                    $('#update_phone').click(function() {
                        var new_con = document.getElementById('edit_contact').innerHTML;
                        
                        var fd = new FormData();

                        fd.append('phone', new_con);
                        $.ajax({
                            url: 'ajax/account/edit_phone.php',
                            method: 'post',
                            contentType: false,
                            processData: false,
                            data: fd,
                            
                            success:function(response) {
                                var result = JSON.parse(response);

                                if(result.status == 'Success') {
                                    toastr.success('Contact information updated');
                                } else {
                                    toastr.error('Unable to update');
                                }
                            }
                        })        
                    })

                    $('#pass_link').click(function(){
                        var pass_input = document.getElementById('pass_grp');
                        
                        pass_input.classList.toggle('d-none');
                    })

                    $('#update_pass').click(function(){
                        var pass = $('#pass').val();

                        var fd = new FormData();

                        fd.append('pass', pass);
                        $.ajax({
                            url: 'ajax/account/edit_phone.php',
                            method: 'post',
                            contentType: false,
                            processData: false,
                            data: fd,
                            
                            success:function(response) {
                                var result = JSON.parse(response);

                                if(result.status == 'Success') {
                                    toastr.success('Contact information updated');
                                } else {
                                    toastr.error('Unable to update');
                                }
                            }
                        })
                    })
                })
            </script>

        </div>
        <!--End Page Wrapper-->
    </body>

<!-- Mirrored from www.annimexweb.com/items/hema/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2023 19:36:44 GMT -->
</html>