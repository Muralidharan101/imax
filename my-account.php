<?php
    require_once 'datab.php';
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
        <title>My Account - Hema Multipurpose eCommerce Bootstrap 5 Html Template</title>
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
                                            <h2>Hello, <span class="text-primary">Jecno Janesen</span></h2>
                                            <p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
                                        </div>

                                      

                                        <div class="account-box">
                                            <h3 class="mb-3">Account Information</h3>
                                            <div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-1 row-cols-1">
                                                <div class="box-info mb-4">
                                                    <div class="box-title d-flex-center">
                                                        <h4>Contact Information</h4> <a href="#" class="btn-link ms-auto">Edit</a>
                                                    </div>
                                                    <div class="box-content mt-3">
                                                      
                                                        <p><a href="#" class="btn-link ps-3">Change Password</a></p>
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
                                                        <th scope="col">image</th>
                                                        <th scope="col">Order Id</th>
                                                        <th scope="col">Product Details</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">View</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><img class="blur-up lazyload" data-src="<?php echo $path;?>/assets/images/products/product1-120x170.jpg" src="<?php echo $path;?>/assets/images/products/product1-120x170.jpg" width="50" alt="product" title="product" /></td>
                                                        <td><span class="id">#12301</span></td>
                                                        <td><span class="name">Oxford Cuban Shirt</span></td>
                                                        <td><span class="price fw-500">$99.00</span></td>
                                                        <td><span class="badge rounded-pill bg-success custom-badge">Shipped</span></td>
                                                        <td><a href="product-layout1.html" class="view"><i class="icon anm anm-eye btn-link fs-6"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class="blur-up lazyload" data-src="<?php echo $path;?>/assets/images/products/product2-120x170.jpg" src="<?php echo $path;?>/assets/images/products/product2-120x170.jpg" width="50" alt="product" title="product" /></td>
                                                        <td><span class="id">#12302</span></td>
                                                        <td><span class="name">Cuff Beanie Cap</span></td>
                                                        <td><span class="price fw-500">$128.00</span></td>
                                                        <td><span class="badge rounded-pill bg-danger custom-badge">Pending</span></td>
                                                        <td><a href="product-layout2.html" class="view"><i class="icon anm anm-eye btn-link fs-6"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class="blur-up lazyload" data-src="<?php echo $path;?>/assets/images/products/product3-120x170.jpg" src="<?php echo $path;?>/assets/images/products/product3-120x170.jpg" width="50" alt="product" title="product" /></td>
                                                        <td><span class="id">#12303</span></td>
                                                        <td><span class="name">Flannel Collar Shirt</span></td>
                                                        <td><span class="price fw-500">$114.00</span></td>
                                                        <td><span class="badge rounded-pill bg-dark custom-badge">Processing</span></td>
                                                        <td><a href="product-layout3.html" class="view"><i class="icon anm anm-eye btn-link fs-6"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class="blur-up lazyload" data-src="<?php echo $path;?>/assets/images/products/product4-120x170.jpg" src="<?php echo $path;?>/assets/images/products/product4-120x170.jpg" width="50" alt="product" title="product" /></td>
                                                        <td><span class="id">#12304</span></td>
                                                        <td><span class="name">Cotton Hooded Hoodie</span></td>
                                                        <td><span class="price fw-500">$198.00</span></td>
                                                        <td><span class="badge rounded-pill bg-secondary custom-badge">Canceled</span></td>
                                                        <td><a href="product-layout4.html" class="view"><i class="icon anm anm-eye btn-link fs-6"></i></a></td>
                                                    </tr>
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

            <!--MiniCart Drawer-->
            <div id="minicart-drawer" class="minicart-right-drawer offcanvas offcanvas-end" tabindex="-1">
                <!--MiniCart Empty-->
                <div id="cartEmpty" class="cartEmpty d-flex-justify-center flex-column text-center p-3 text-muted d-none">
                    <div class="minicart-header d-flex-center justify-content-between w-100">
                        <h4 class="fs-6">Your cart (0 Items)</h4>
                        <button class="close-cart border-0" data-bs-dismiss="offcanvas" aria-label="Close"><i class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="left" title="Close"></i></button>
                    </div>
                    <div class="cartEmpty-content mt-4">
                        <i class="icon anm anm-cart-l fs-1 text-muted"></i> 
                        <p class="my-3">No Products in the Cart</p>
                        <a href="index.html" class="btn btn-primary cart-btn">Continue shopping</a>
                    </div>
                </div>
                <!--End MiniCart Empty-->

                <!--MiniCart Content-->
                <div id="cart-drawer" class="block block-cart">
                    <div class="minicart-header">
                        <button class="close-cart border-0" data-bs-dismiss="offcanvas" aria-label="Close"><i class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="left" title="Close"></i></button>
                        <h4 class="fs-6">Your cart (2 Items)</h4>
                    </div>
                    <div class="minicart-content">
                        <ul class="m-0 clearfix">
                            <li class="item d-flex justify-content-center align-items-center">
                                <a class="product-image rounded-0" href="product-layout1.html">
                                    <img class="rounded-0 blur-up lazyload" data-src="<?php echo $path;?>/assets/images/products/cart-product-img1.jpg" src="<?php echo $path;?>/assets/images/products/cart-product-img1.jpg" alt="product" title="Product" width="120" height="170" />
                                </a>
                                <div class="product-details">
                                    <a class="product-title" href="product-layout1.html">Women Sandals</a>
                                    <div class="variant-cart my-2">Black / XL</div>
                                    <div class="priceRow">
                                        <div class="product-price">
                                            <span class="price">$54.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="qtyDetail text-center">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                        <input type="text" name="quantity" value="1" class="qty">
                                        <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                    </div>
                                    <a href="#" class="edit-i remove"><i class="icon anm anm-pencil-ar" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                    <a href="#" class="remove"><i class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></a>
                                </div>
                            </li>
                            <li class="item d-flex justify-content-center align-items-center">
                                <a class="product-image rounded-0" href="product-layout1.html">
                                    <img class="rounded-0 blur-up lazyload" data-src="<?php echo $path;?>/assets/images/products/cart-product-img2.jpg" src="<?php echo $path;?>/assets/images/products/cart-product-img2.jpg" alt="product" title="Product" width="120" height="170" />
                                </a>
                                <div class="product-details">
                                    <a class="product-title" href="product-layout1.html">High Waist Jeans</a>
                                    <div class="variant-cart my-2">Yellow / M</div>
                                    <div class="priceRow">
                                        <div class="product-price">
                                            <span class="price old-price">$114.00</span><span class="price">$99.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="qtyDetail text-center">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                        <input type="text" name="quantity" value="1" class="qty">
                                        <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                    </div>
                                    <a href="#" class="edit-i remove"><i class="icon anm anm-pencil-ar" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                    <a href="#" class="remove"><i class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="minicart-bottom">
                        <div class="shipinfo">
                            <div class="progress mb-2"><div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div></div>
                            <div class="freeShipMsg"><i class="icon anm anm-truck-l fs-6 me-2 align-middle"></i>Only <span class="money" data-currency-usd="$199.00" data-currency="USD">$199.00</span> away from <b>Free Shipping</b></div>
                            <div class="freeShipMsg d-none"><i class="icon anm anm-truck-l fs-6 me-2 align-middle"></i>Congrats! You are eligible for <b>Free Shipping</b></div>
                        </div>
                        <div class="subtotal clearfix my-3">
                            <div class="totalInfo clearfix mb-1 d-none"><span>Shipping:</span><span class="item product-price">$10.00</span></div>
                            <div class="totalInfo clearfix mb-1 d-none"><span>Tax:</span><span class="item product-price">$0.00</span></div>
                            <div class="totalInfo clearfix"><span>Total:</span><span class="item product-price">$163.00</span></div>

                        </div>
                        <div class="agree-check customCheckbox">
                            <input id="prTearm" name="tearm" type="checkbox" value="tearm" required />
                            <label for="prTearm"> I agree with the </label><a href="#" class="ms-1 text-link">Terms &amp; conditions</a>
                        </div>
                        <div class="minicart-action d-flex mt-3">
                            <a href="checkout-style1.html" class="proceed-to-checkout btn btn-primary w-50 me-1">Check Out</a>
                            <a href="cart-style1.html" class="cart-btn btn btn-secondary w-50 ms-1">View Cart</a>
                        </div>
                    </div>
                </div>
                <!--MiniCart Content-->
            </div>
            <!--End MiniCart Drawer-->


            <!-- Including Jquery/Javascript -->
            <!-- Plugins JS -->
            <script src="<?php echo $path;?>/assets/js/plugins.js"></script>
            <!-- Main JS -->
            <script src="<?php echo $path;?>/assets/js/main.js"></script>

        </div>
        <!--End Page Wrapper-->
    </body>

<!-- Mirrored from www.annimexweb.com/items/hema/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2023 19:36:44 GMT -->
</html>