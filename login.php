<?php
    require_once 'datab.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from www.annimexweb.com/items/hema/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2023 19:22:07 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title Of Site -->
    <title>Imax Trophies | Login</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $path ?>assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo $path ?>assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo $path ?>assets/css/style-min.css">
    <link rel="stylesheet" href="<?php echo $path ?>assets/css/responsive.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        .passshow {
            position: relative;
        }

        .passshow .showpass {
            position: absolute;
            top: 25%;
            left: 90%;
        }


        @media (max-width:425px) {
            .passshow .showpass {
                position: absolute;
                top: 25%;
                left: 85%;
            }


        }

        .showpass button {
            background: none !important;
            border: 0px !important;
        }

        input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    #sign{
        background-color:#fe030c;
        border:0px !important;
    }

    #sign:hover{
        background-color:#bd001fd0;
        border:0px !important;
    }
    </style>

</head>

<body class="account-page login-page">
    <!--Page Wrapper-->
    <div class="page-wrapper">


        <!--Header-->

        <!--End Header-->
        <!--Mobile Menu-->
        <!-- <div class="mobile-nav-wrapper" role="navigation">
                <div class="closemobileMenu">Close Menu <i class="icon anm anm-times-l"></i></div>
                <ul id="MobileNav" class="mobile-nav">
                    <li class="lvl1 parent dropdown"><a href="index.html">Home <i class="icon anm anm-angle-down-l"></i></a>
                        <ul class="lvl-2">
                            <li><a href="index.html" class="site-nav">Home 01 - Fashion</a></li>
                            <li><a href="index2-footwear.html" class="site-nav">Home 02 - Footwear</a></li>
                            <li><a href="index3-bags.html" class="site-nav">Home 03 - Bags</a></li>
                            <li><a href="index4-electronic.html" class="site-nav">Home 04 - Electronic</a></li>
                            <li><a href="index5-tools-parts.html" class="site-nav">Home 05 - Tools &amp; Parts</a></li>
                            <li><a href="index6-jewelry.html" class="site-nav">Home 06 - Jewelry</a></li>
                            <li><a href="index7-organic-food.html" class="site-nav">Home 07 - Organic Food</a></li>
                            <li><a href="index8-cosmetics.html" class="site-nav">Home 08 - Cosmetics</a></li>
                            <li><a href="index9-furniture.html" class="site-nav">Home 09 - Furniture</a></li>
                            <li><a href="index10-sunglasses.html" class="site-nav last">Home 10 - Sunglasses</a></li>                     
                        </ul>
                    </li>
                    <li class="lvl1 parent megamenu"><a href="#">Shop <i class="icon anm anm-angle-down-l"></i></a>
                        <ul class="lvl-2">
                            <li><a href="#;" class="site-nav">Collection Page <i class="icon anm anm-angle-down-l"></i></a>
                                <ul class="lvl-3">
                                    <li><a href="collection-style1.html" class="site-nav">Collection style1</a></li>
                                    <li><a href="collection-style2.html" class="site-nav">Collection style2</a></li>
                                    <li><a href="collection-style3.html" class="site-nav">Collection style3</a></li>
                                    <li><a href="collection-style4.html" class="site-nav">Collection style4</a></li>
                                    <li><a href="sub-collection-style1.html" class="site-nav">Sub Collection style1</a></li>
                                    <li><a href="sub-collection-style2.html" class="site-nav">Sub Collection style2</a></li>
                                    <li><a href="collection-empty.html" class="site-nav">Collection Empty</a></li>
                                    <li><a href="shop-search-results.html" class="site-nav">Shop Search Results</a></li>
                                    <li><a href="shop-swatches-style.html" class="site-nav last">Shop Swatches style</a></li>
                                </ul>
                            </li>
                            <li><a href="#;" class="site-nav">Shop Page <i class="icon anm anm-angle-down-l"></i></a>
                                <ul class="lvl-3">
                                    <li><a href="shop-grid-view.html" class="site-nav">Shop Grid View</a></li>
                                    <li><a href="shop-list-view.html" class="site-nav">Shop List View</a></li>
                                    <li><a href="shop-left-sidebar.html" class="site-nav">Shop Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html" class="site-nav">Shop Right Sidebar</a></li>
                                    <li><a href="shop-top-filter.html" class="site-nav">Shop Top Filter</a></li>
                                    <li><a href="shop-masonry-grid.html" class="site-nav">Shop Masonry Grid</a></li>
                                    <li><a href="shop-with-category.html" class="site-nav">Shop With Category</a></li>
                                    <li><a href="shop-grid-view.html" class="site-nav">Classic Pagination</a></li>
                                    <li><a href="shop-right-sidebar.html" class="site-nav last">Infinite Scrolling</a></li>
                                </ul>
                            </li>
                            <li><a href="#;" class="site-nav">Shop Other Page <i class="icon anm anm-angle-down-l"></i></a>
                                <ul class="lvl-3">
                                    <li><a href="wishlist-style1.html" class="site-nav">Wishlist Style1</a></li>
                                    <li><a href="wishlist-style2.html" class="site-nav">Wishlist Style2</a></li>
                                    <li><a href="compare-style1.html" class="site-nav">Compare Style1</a></li>
                                    <li><a href="compare-style2.html" class="site-nav">Compare Style2</a></li>
                                    <li><a href="cart-style1.html" class="site-nav">Cart Style1</a></li>
                                    <li><a href="cart-style2.html" class="site-nav">Cart Style2</a></li>
                                    <li><a href="checkout-style1.html" class="site-nav">Checkout Style1</a></li>
                                    <li><a href="checkout-style2.html" class="site-nav">Checkout Style2</a></li>
                                    <li><a href="order-success.html" class="site-nav last">Order Success</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="lvl1 parent megamenu"><a href="product-layout1.html">Product <i class="icon anm anm-angle-down-l"></i></a>
                        <ul class="lvl-2">
                            <li><a href="product-layout1.html" class="site-nav">Product Page <i class="icon anm anm-angle-down-l"></i></a>
                                <ul class="lvl-3">
                                    <li><a href="product-layout1.html" class="site-nav">Product Layout1</a></li>
                                    <li><a href="product-layout2.html" class="site-nav">Product Layout2</a></li>
                                    <li><a href="product-layout3.html" class="site-nav">Product Layout3</a></li>
                                    <li><a href="product-layout4.html" class="site-nav">Product Layout4</a></li>
                                    <li><a href="product-layout5.html" class="site-nav">Product Layout5</a></li>
                                    <li><a href="product-layout6.html" class="site-nav">Product Layout6</a></li>
                                    <li><a href="product-layout7.html" class="site-nav">Product Layout7</a></li>
                                    <li><a href="product-3d-ar-models.html" class="site-nav last">Product 3D, AR models</a></li>
                                </ul>
                            </li>
                            <li><a href="product-standard.html" class="site-nav">Product Page Types <i class="icon anm anm-angle-down-l"></i></a>
                                <ul class="lvl-3">
                                    <li><a href="product-standard.html" class="site-nav">Standard Product</a></li>
                                    <li><a href="product-variable.html" class="site-nav">Variable Product</a></li>
                                    <li><a href="product-grouped.html" class="site-nav">Grouped Product</a></li>
                                    <li><a href="product-layout4.html" class="site-nav">Product Back in stock</a></li>
                                    <li><a href="product-layout6.html" class="site-nav">Product Accordion</a></li>
                                    <li><a href="product-layout7.html" class="site-nav">Product Tabs Left</a></li>
                                    <li><a href="product-layout6.html" class="site-nav">Product Bundle</a></li>
                                    <li><a href="prodcut-360-view.html" class="site-nav last">Product 360 View</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="lvl1 parent dropdown"><a href="#;">Pages <i class="icon anm anm-angle-down-l"></i></a>
                        <ul class="lvl-2">
                            <li><a href="aboutus-style1.html" class="site-nav">About Us <i class="icon anm anm-angle-down-l"></i></a>
                                <ul class="lvl-3 dropdown">
                                    <li><a href="aboutus-style1.html" class="site-nav">About Us Style1</a></li>
                                    <li><a href="aboutus-style2.html" class="site-nav">About Us Style2</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-style1.html" class="site-nav">Contact Us <i class="icon anm anm-angle-down-l"></i></a>
                                <ul class="lvl-3 dropdown">
                                    <li><a href="contact-style1.html" class="site-nav">Contact Us Style1</a></li>
                                    <li><a href="contact-style2.html" class="site-nav">Contact Us Style2</a></li>
                                </ul>
                            </li>
                            <li><a href="my-account.html" class="site-nav">My Account <i class="icon anm anm-angle-down-l"></i></a>
                                <ul class="lvl-3 dropdown">
                                    <li><a href="my-account.html" class="site-nav">My Account</a></li>
                                    <li><a href="login.html" class="site-nav">Login</a></li>
                                    <li><a href="register.html" class="site-nav">Register</a></li>
                                    <li><a href="forgot-password.html" class="site-nav">Forgot Password</a></li>
                                </ul>
                            </li>
                            <li><a href="lookbook-grid.html" class="site-nav">Lookbook <i class="icon anm anm-angle-down-l"></i></a>
                                <ul class="lvl-3 dropdown">
                                    <li><a href="lookbook-grid.html" class="site-nav">Lookbook Grid</a></li>
                                    <li><a href="lookbook-masonry.html" class="site-nav">Lookbook Masonry</a></li>
                                    <li><a href="lookbook-shop.html" class="site-nav">Lookbook Shop</a></li>
                                </ul>
                            </li>
                            <li><a href="portfolio-page.html" class="site-nav">Portfolio Page</a></li>
                            <li><a href="faqs-page.html" class="site-nav">FAQs Page</a></li>
                            <li><a href="brands-page.html" class="site-nav">Brands Page</a></li>
                            <li><a href="cms-page.html" class="site-nav">CMS Page</a></li>
                            <li><a href="elements-icons.html" class="site-nav">Icons</a></li>
                            <li><a href="error-404.html" class="site-nav">Error 404</a></li>
                            <li><a href="coming-soon.html" class="site-nav">Coming soon <span class="lbl nm_label2">New</span></a></li>
                        </ul>
                    </li>
                    <li class="lvl1 parent dropdown"><a href="blog-grid.html">Blog <i class="icon anm anm-angle-down-l"></i></a>
                        <ul class="lvl-2">
                            <li><a href="blog-grid.html" class="site-nav">Grid View</a></li>
                            <li><a href="blog-list.html" class="site-nav">List View</a></li>
                            <li><a href="blog-grid-sidebar.html" class="site-nav">Left Sidebar</a></li>
                            <li><a href="blog-list-sidebar.html" class="site-nav">Right Sidebar</a></li>
                            <li><a href="blog-masonry.html" class="site-nav">Masonry Grid</a></li>
                            <li><a href="blog-details.html" class="site-nav">Blog Details</a></li>
                        </ul>
                    </li>

                    <li class="mobile-menu-bottom">
                        <div class="mobile-links"> 
                            <ul class="list-inline d-inline-flex flex-column w-100">
                                <li><a href="login.html" class="d-flex align-items-center"><i class="icon anm anm-sign-in-al"></i>Sign In</a></li>
                                <li><a href="register.html" class="d-flex align-items-center"><i class="icon anm anm-user-al"></i>Register</a></li>
                                <li><a href="my-account.html" class="d-flex align-items-center"><i class="icon anm anm-user-cil"></i>My Account</a></li>
                                <li class="title h5">Need Help?</li>
                                <li><a href="tel:401234567890" class="d-flex align-items-center"><i class="icon anm anm-phone-l"></i> (+40) 123 456 7890</a></li>
                                <li><a href="mailto:info@example.com" class="d-flex align-items-center"><i class="icon anm anm-envelope-l"></i> info@example.com</a></li>
                            </ul>
                        </div>
                        <div class="mobile-follow mt-2">  
                            <h5 class="title">Follow Us</h5>
                            <ul class="list-inline social-icons d-inline-flex mt-1">
                                <li class="list-inline-item"><a href="#" title="Facebook"><i class="icon anm anm-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#" title="Twitter"><i class="icon anm anm-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" title="Pinterest"><i class="icon anm anm-pinterest-p"></i></a></li>
                                <li class="list-inline-item"><a href="#" title="Linkedin"><i class="icon anm anm-linkedin-in"></i></a></li>
                                <li class="list-inline-item"><a href="#" title="Instagram"><i class="icon anm anm-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#" title="Youtube"><i class="icon anm anm-youtube"></i></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div> -->
        <!--End Mobile Menu-->

        <!-- Body Container -->
        <div id="page-content">
            <!--Page Header-->
            <div class="page-header text-center bg-white mb-4">
                <div class="container">
                    <div class="row">

                    </div>
                </div>
            </div>
            <!--End Page Header-->

            <!--Main Content-->
            <div class="container">
                <div class="login-register pt-2">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                            <div class="inner h-100">
                                <div class="customer-form  ">
                                    <h2 class="text-center fs-4 mb-3">Registered Customers</h2>
                                    <p class="text-center mb-4">If you have an account with us, please log in.</p>
                                    <div class="form-row justify-content-center">
                                        <div class="form-group col-10">
                                            <label for="num" class="d-none">Phone Number <span
                                                    class="required">*</span></label>
                                            <input type="number" placeholder="Enter Your Number" id="num" />
                                        </div>
                                        <div class="form-group col-10 passshow">
                                            <label for="CustomerPassword" class="d-none">Password <span
                                                    class="required">*</span></label>
                                            <input type="password" placeholder="Enter Password" id="password"
                                                value="" />
                                            <div class="showpass"><button id="show"><i
                                                        class="bi bi-eye-fill h2"></i></button></div>
                                        </div>
                                        <!-- <div class="form-group col-10">
                                            <div
                                                class="login-remember-forgot d-flex justify-content-between align-items-center">
                                                <div class="remember-check customCheckbox">
                                                    <input id="remember" name="remember" type="checkbox"
                                                        value="remember" required />
                                                    <label for="remember"> Remember me</label>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="form-group col-10 mb-0">
                                            <input type="submit" id="sign" class="btn btn-primary btn-lg w-100"
                                                value="Sign In" />
                                        </div>
                                    </div>

                                    <div class="login-signup-text mt-4 mb-2 fs-6 text-center text-muted">Didn't have an
                                        account? <a href="register.php" class="btn-link">Sign up now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Main Content-->
        </div>
        <!-- End Body Container -->






        <!-- Including Jquery/Javascript -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Plugins JS -->
        <script src="assets/js/plugins.js"></script>
        <!-- Main JS -->
        <script src="assets/js/main.js"></script>

        <!--Toastr  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
            integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    </div>
    <!--End Page Wrapper-->

    <script>
        
        
            var pass = $("#password");
            var show = $("#show");

            $("#show").click(function () {
                if (pass.attr("type") === "password") {
                    pass.attr("type", "text");
                } else {
                    pass.attr("type", "password");
                }
            });

            $(document).ready(function () {
            $("#sign").click(function () {
                var num = $("#num").val().trim();
                var password = $("#password").val();

                if (num == "")
                {
                    toastr.error("Enter Mobile Number","Empty !")
                } else if (password == "") {
                    toastr.error("Enter Password","Empty !")
                } else {
                    var fd = new FormData();
                    fd.append("mobileNumber",num);
                    fd.append("Password",password);

                    $.ajax({
                        url:'ajax/login.php',
                        type:'post',
                        contentType:false,
                        processData:false,
                        data:fd,

                        success:function(response){
                            var result = JSON.parse(response);

                            if(result.status == "Success")
                            {
                                toastr.success("Signed Up Successfully","Welcome !")
                                $("#num").val("");
                                $("#password").val("");
                                window.location.href='home';
                            }
                            else
                            {
                                toastr.error("Unable to sign up ","Error !")
                            }
                        }
                    });
                }
            })

        });
    </script>
</body>

<!-- Mirrored from www.annimexweb.com/items/hema/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2023 19:36:44 GMT -->

</html>