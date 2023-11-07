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
    <title>Imax Trophies | Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $path ?>assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo $path ?>assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo $path ?>assets/css/style-min.css">
    <link rel="stylesheet" href="<?php echo $path ?>assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
    view-collection


    <style>
        /* CSS for the preloader */
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        /* CSS for the loader animation */
        .loader {
            border: 5px solid #f3f3f3;
            border-top: 5px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .owl-dots {
            text-align: center !important;
            margin-top: 10px !important;
        }

        .owl-dot {
            background-color: #007BFF !important;
            /* display: inline-block !important; */
            width: 10px !important;
            height: 10px !important;
            border-radius: 50% !important;
            margin: 0 5px !important;
            cursor: pointer !important;
            /* for cursor arrow to hand*/
        }

        .owl-dot.active {
            background-color: #FF5733 !important;
        }
    </style>

    <script>
        window.onload = function () {
            // After the page content has loaded, hide the preloader
            document.querySelector('.preloader').style.display = 'none';
        }
    </script>
</head>

<body class="template-index index-demo1">
    <!--Page Wrapper-->
    <div class="page-wrapper">
        <!-- Marquee Text-->
        <!-- <div class="topbar-slider clearfix">
                <div class="container-fluid">
                    <div class="marquee-text">
                        <div class="top-info-bar d-flex">
                            <div class="flex-item center">
                                <a href="#">
                                    <span> <i class="anm anm-worldwide"></i> BUY ONLINE PICK UP IN STORE</span>
                                    <span> <i class="anm anm-truck-l"></i> FREE WORLDWIDE SHIPPING ON ALL ORDERS ABOVE $100</span>
                                    <span> <i class="anm anm-redo-ar"></i> EXTENDED RETURN UNTIL 30 DAYS</span>
                                </a>
                            </div>
                            <div class="flex-item center">
                                <a href="#">
                                    <span> <i class="anm anm-worldwide"></i> BUY ONLINE PICK UP IN STORE</span>
                                    <span> <i class="anm anm-truck-l"></i> FREE WORLDWIDE SHIPPING ON ALL ORDERS ABOVE $100</span>
                                    <span> <i class="anm anm-redo-ar"></i> EXTENDED RETURN UNTIL 30 DAYS</span>
                                </a>
                            </div>
                            <div class="flex-item center">
                                <a href="#">
                                    <span> <i class="anm anm-worldwide"></i> BUY ONLINE PICK UP IN STORE</span>
                                    <span> <i class="anm anm-truck-l"></i> FREE WORLDWIDE SHIPPING ON ALL ORDERS ABOVE $100</span>
                                    <span> <i class="anm anm-redo-ar"></i> EXTENDED RETURN UNTIL 30 DAYS</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        <!-- End Marquee Text -->
        <div class="preloader">
            <div class="loader"></div>
        </div>


        <!--Header-->
        <?php include('header.php'); ?>
        <!--End Header-->

        <!--Mobile Menu-->

        <!--End Mobile Menu-->

        <style>
            .slideshow-wrap img {
                height: 300px;
            }
        </style>
        <!-- Body Container -->
        <div id="page-content" class="mb-0">
            <!--Home Slideshow-->
            <section class="slideshow slideshow-wrapper">
                <div class="home-slideshow slick-arrow-dots">
                    <div class="slide">
                        <div class="slideshow-wrap">
                            <picture>
                                <img class="blur-up lazyload" src="<?php echo $path ?>img\slider\cup 11.jpg"
                                    alt="slideshow" title="" width="1420" height="395" />
                            </picture>
                            <!-- <div class="container">
                                    <div class="slideshow-content slideshow-overlay middle-left">
                                        <div class="slideshow-content-in">
                                            <div class="wrap-caption animation style1">
                                                <p class="ss-small-title">Elegant design</p>
                                                <h2 class="ss-mega-title">Making someone feel <br>pretty is an art</h2>
                                                <p class="ss-sub-title xs-hide">Perfectly designed to ensures ultimate comfort and style</p>
                                                <div class="ss-btnWrap">
                                                    <a class="btn btn-primary" href="shop-grid-view.html">Shop Women</a>
                                                    <a class="btn btn-secondary" href="shop-grid-view.html">Shop Men</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slideshow-wrap">
                            <picture>
                                <img class="blur-up lazyload" src="<?php echo $path ?>img\slider\cup 11 (2).jpg"
                                    alt="slideshow" title="" width="1420" height="395" />
                            </picture>
                            <!-- <div class="container">
                                    <div class="slideshow-content slideshow-overlay middle-right">
                                        <div class="slideshow-content-in">
                                            <div class="wrap-caption animation style1">
                                                <h2 class="ss-mega-title">Spread Positive <br>Energy With Hema</h2>
                                                <p class="ss-sub-title xs-hide">The must-have closet essential women wardrobe for the year</p>
                                                <div class="ss-btnWrap d-flex-justify-start">
                                                    <a class="btn btn-primary" href="shop-grid-view.html">Explore Now!</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slideshow-wrap">
                            <picture>
                                <img class="blur-up lazyload" src="<?php echo $path ?>img\slider\cup 11 (3).jpg"
                                    alt="slideshow" title="" width="1420" height="395" />
                            </picture>
                            <!-- <div class="container">
                                    <div class="slideshow-content slideshow-overlay middle-right">
                                        <div class="slideshow-content-in">
                                            <div class="wrap-caption animation style1">
                                                <h2 class="ss-mega-title">Design Your Next <br>Favourite Wear</h2>
                                                <p class="ss-sub-title xs-hide">The outfit that blend elegance and style for your casual wear</p>
                                                <div class="ss-btnWrap">
                                                    <a class="btn btn-primary" href="shop-grid-view.html">Shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                </div>
            </section>
            <!--End Home Slideshow-->
            <style>
                .collection-slider-6items .category-item img {
                    width: 200px;
                    height: 220px;
                }

                @media screen and (max-width: 567.67px) {
                    .collection-slider-6items .category-item img {
                        width: 200px;
                        height: 205px;
                    }
                }
            </style>





            <!--Popular Categories-->
            <section class="section collection-slider pb-0">
                <div class="container">
                    <div class="section-header">
                        <!-- <p class="mb-2 mt-0"></p> -->
                        <h2>Shop by category</h2>
                    </div>

                    <div class="collection-slider-6items gp10 slick-arrow-dots sub-collection section pt-0 mt-5">
                        <div class="category-item zoomscal-hov">
                            <a href="javascript:void(0)" class="category-link clr-none">
                                <div class="zoom-scal zoom-scal-nopb rounded-0"><img class="rounded-0 blur-up lazyload"
                                        data-src="<?php echo $path ?>img\used\cup1.jpg"
                                        src="<?php echo $path ?>img\used\cup1.jpg" alt="Men's" title="Men's" width="365"
                                        height="365" /></div>
                                <div class="details text-center">
                                    <h4 class="category-title mb-0">Football</h4>
                                    <p class="counts">20 Items</p>
                                </div>
                            </a>
                        </div>
                        <div class="category-item zoomscal-hov">
                            <a href="javascript:void(0)" class="category-link clr-none">
                                <div class="zoom-scal zoom-scal-nopb rounded-0"><img class="rounded-0 blur-up lazyload"
                                        data-src="<?php echo $path ?>img/index\th-3610389770.jpg"
                                        src="<?php echo $path ?>img/index\th-3610389770.jpg" alt="Women's"
                                        title="Women's" width="365" height="365" /></div>
                                <div class="details text-center">
                                    <h4 class="category-title mb-0">Kabaadi</h4>
                                    <p class="counts">24 Items</p>
                                </div>
                            </a>
                        </div>
                        <div class="category-item zoomscal-hov">
                            <a href="javascript:void(0)" class="category-link clr-none">
                                <div class="zoom-scal zoom-scal-nopb rounded-0"><img class="rounded-0 blur-up lazyload"
                                        data-src="<?php echo $path ?>img/used\cup9.jpg"
                                        src="<?php echo $path ?>img/used\cup9.jpg" alt="Top" title="Top" width="365"
                                        height="365" /></div>
                                <div class="details text-center">
                                    <h4 class="category-title mb-0">Volleyball</h4>
                                    <p class="counts">13 Items</p>
                                </div>
                            </a>
                        </div>
                        <div class="category-item zoomscal-hov">
                            <a href="javascript:void(0)" class="category-link clr-none">
                                <div class="zoom-scal zoom-scal-nopb rounded-0"><img class="rounded-0 blur-up lazyload"
                                        data-src="<?php echo $path ?>img/used\cup3.jpg"
                                        src="<?php echo $path ?>img/used\cup3.jpg" alt="Bottom" title="Bottom"
                                        width="365" height="365" /></div>
                                <div class="details text-center">
                                    <h4 class="category-title mb-0">Badmition</h4>
                                    <p class="counts">26 Items</p>
                                </div>
                            </a>
                        </div>
                        <div class="category-item zoomscal-hov">
                            <a href="javascript:void(0)" class="category-link clr-none">
                                <div class="zoom-scal zoom-scal-nopb rounded-0"><img class="rounded-0 blur-up lazyload"
                                        data-src="<?php echo $path ?>img/used\cup7.jpg"
                                        src="<?php echo $path ?>img/used\cup7.jpg" alt="T-Shirts" title="T-Shirts"
                                        width="365" height="365" /></div>
                                <div class="details text-center">
                                    <h4 class="category-title mb-0">Jalikattu</h4>
                                    <p class="counts">18 Items</p>
                                </div>
                            </a>
                        </div>
                        <div class="category-item zoomscal-hov">
                            <a href="javascript:void(0)" class="category-link clr-none">
                                <div class="zoom-scal zoom-scal-nopb rounded-0"><img class="rounded-0 blur-up lazyload"
                                        data-src="<?php echo $path ?>img/used\cup11.jpg"
                                        src="<?php echo $path ?>img/used\cup11.jpg" alt="Shirts" title="Shirts"
                                        width="365" height="365" /></div>
                                <div class="details text-center">
                                    <h4 class="category-title mb-0">Silambam</h4>
                                    <p class="counts">11 Items</p>
                                </div>
                            </a>
                        </div>
                        <div class="category-item zoomscal-hov">
                            <a href="javascript:void(0)" class="category-link clr-none">
                                <div class="zoom-scal zoom-scal-nopb rounded-0"><img class="rounded-0 blur-up lazyload"
                                        data-src="<?php echo $path ?>img/used\cup3.jpg"
                                        src="<?php echo $path ?>img/used\cup3.jpg" alt="Jeans" title="Jeans" width="365"
                                        height="365" /></div>
                                <div class="details text-center">
                                    <h4 class="category-title mb-0">Karate</h4>
                                    <p class="counts">28 Items</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Popular Categories-->

            <!--Products With Tabs-->
            <section class="section product-slider tab-slider-product">
                <div class="container">
                    <div class="section-header d-none">
                        <h2>Special Offers</h2>
                        <!-- <p>Browse the huge variety of our best seller</p> -->
                    </div>

                    <!-- Best seller -->
                    <div class="grid-products grid-view-items mt-5 mb-5">
                        <div class="section-header">
                            <h2>Best sellers</h2>
                            <!-- <p>Browse the huge variety of our best seller</p> -->
                        </div>
                        

                        <div
                            class="row col-row product-options row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">
                            <div class="item col-item">
                                <div class="product-box">
                                    <!-- Start Product Image -->
                                    <div class="product-image">
                                        <!-- Start Product Image -->
                                        <a href="javascript:void(0)" class="product-img rounded-0">
                                            <!-- Image -->
                                            <img class="primary rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/index\th-3610389770.jpg"
                                                src="<?php echo $path ?>img/index\th-3610389770.jpg" alt="Product"
                                                title="Product" width="625" height="808" />
                                            <!-- End Image -->
                                            <!-- Hover Image -->
                                            <img class="hover rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/index\th-61153702.jpg"
                                                src="<?php echo $path ?>img/index\th-61153702.jpg" alt="Product"
                                                title="Product" width="625" height="808" />
                                            <!-- End Hover Image -->
                                        </a>
                                        <!-- End Product Image -->
                                        <!--Product Button-->
                                        <div class="button-set style1">
                                            <!--Cart Button-->
                                            <a href="#addtocart-modal" class="btn-icon addtocart quick-shop-modal"
                                                data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                    data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Select Options"><i class="icon anm anm-cart-l"></i><span
                                                        class="text">Select Options</span></span>
                                            </a>
                                            <!--End Cart Button-->
                                            <!--Quick View Button-->
                                            <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                                data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                                <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                    data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Quick View"><i class="icon anm anm-search-plus-l"></i><span
                                                        class="text">Quick View</span></span>
                                            </a>
                                            <!--End Quick View Button-->
                                            <!--Wishlist Button-->
                                            <a href="javascript:void(0)" class="btn-icon wishlist"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span
                                                    class="text">Add To Wishlist</span></a>
                                            <!--End Wishlist Button-->
                                            <!--Compare Button-->
                                            <!-- <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a> -->
                                            <!--End Compare Button-->
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- End Product Image -->
                                    <!-- Start Product Details -->
                                    <div class="product-details text-center">
                                        <!--Product Vendor-->
                                        <div class="product-vendor">Football Trophies</div>
                                        <!--End Product Vendor-->
                                        <!-- Product Name -->
                                        <div class="product-name">
                                            <a href="javascript:void(0)">Golden trophy</a>
                                        </div>
                                        <!-- End Product Name -->
                                        <!-- Product Price -->
                                        <div class="product-price">
                                            <span class="price">₹1200.00</span>
                                        </div>
                                        <!-- <div class="add-cart text-center">
                                                    <a href="javascript:void(0)" class="btn btn-secondary btn-lg" style="background: red;">Add to cart</a>
                                                </div> -->
                                        <!-- End Product Price -->
                                        <!-- Product Review -->
                                        <div class="product-review">
                                            <!-- <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i> -->
                                            <span class="caption hidden ms-1">8 Reviews</span>
                                        </div>
                                        <!-- End Product Review -->
                                        <!--Sort Description-->
                                        <p class="sort-desc hidden">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage...</p>
                                        <!--End Sort Description-->
                                        <!--Color Variant -->
                                        <!-- <ul class="variants-clr swatches">
                                                    <li class="swatch medium radius"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Navy"><img src="<?php echo $path ?>assets//images/products/product2.jpg" alt="img" width="625" height="808"></span></li>
                                                    <li class="swatch medium radius"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Green"><img src="<?php echo $path ?>assets//images/products/product2-1.jpg" alt="img" width="625" height="808"></span></li>
                                                    <li class="swatch medium radius"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Gray"><img src="<?php echo $path ?>assets//images/products/product2-2.jpg" alt="img" width="625" height="808"></span></li>
                                                    <li class="swatch medium radius"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Orange"><img src="<?php echo $path ?>assets//images/products/product2-3.jpg" alt="img" width="625" height="808"></span></li>
                                                    <li class="swatch medium radius"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Yellow"><img src="<?php echo $path ?>assets//images/products/product2-4.jpg" alt="img" width="625" height="808"></span></li>
                                                    <li class="swatch medium radius"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue"><img src="<?php echo $path ?>assets//images/products/product2-5.jpg" alt="img" width="625" height="808"></span></li>
                                                </ul> -->
                                        <!-- End Variant -->
                                        <!-- Product Button -->
                                        <div class="button-action hidden">
                                            <div class="addtocart-btn">
                                                <form class="addtocart" action="#" method="post">
                                                    <a href="#quickshop-modal"
                                                        class="btn btn-md quick-shop quick-shop-modal"
                                                        data-bs-toggle="modal" data-bs-target="#quickshop_modal">
                                                        <i class="icon anm anm-cart-l me-2"></i><span
                                                            class="text">Select Options</span>
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Product Button -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                            <div class="item col-item">
                                <div class="product-box">
                                    <!-- Start Product Image -->
                                    <div class="product-image">
                                        <!-- Start Product Image -->
                                        <a href="javascript:void(0)" class="product-img rounded-0">
                                            <!-- Image -->
                                            <img class="primary rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/index\cup1.jpg"
                                                src="<?php echo $path ?>img/index\cup1.jpg" alt="Product"
                                                title="Product" width="625" height="808" />
                                            <!-- End Image -->
                                            <!-- Hover Image -->
                                            <img class="hover rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/index\cup3.jpg"
                                                src="<?php echo $path ?>img/index\cup3.jpg" alt="Product"
                                                title="Product" width="625" height="808" />
                                            <!-- End Hover Image -->
                                        </a>
                                        <!-- End Product Image -->
                                        <!-- Product label -->
                                        <!-- <div class="product-labels"><span class="lbl pr-label3">Trending</span></div> -->
                                        <!-- End Product label -->
                                        <!--Product Button-->

                                        <!--End Product Button-->
                                    </div>
                                    <!-- End Product Image -->
                                    <!-- Start Product Details -->
                                    <div class="product-details text-center">
                                        <!--Product Vendor-->
                                        <div class="product-vendor">Kabaadi Trophies</div>
                                        <!--End Product Vendor-->
                                        <!-- Product Name -->
                                        <div class="product-name">
                                            <a href="javascript:void(0)">Star Crest</a>
                                        </div>
                                        <!-- End Product Name -->
                                        <!-- Product Price -->
                                        <div class="product-price">
                                            <span class="price">₹999.00</span>
                                        </div>
                                        <!-- <div class="add-cart text-center">
                                                    <a href="javascript:void(0)" class="btn btn-secondary btn-lg" style="background: red;">Add to cart</a>
                                                </div> -->
                                        <!-- End Product Price -->
                                        <!-- Product Review -->
                                        <div class="product-review">
                                            <!-- <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i> -->
                                            <span class="caption hidden ms-1">10 Reviews</span>
                                        </div>
                                        <!-- End Product Review -->
                                        <!--Sort Description-->
                                        <p class="sort-desc hidden">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage...</p>
                                        <!--End Sort Description-->
                                        <!-- Variant -->
                                        <!-- <ul class="variants-clr swatches">
                                                    <li class="swatch medium radius red"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="red"></span></li>
                                                    <li class="swatch medium radius orange"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="orange"></span></li>
                                                    <li class="swatch medium radius yellow"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="yellow"></span></li>
                                                </ul> -->
                                        <!-- End Variant -->
                                        <!-- Product Button -->
                                        <div class="button-action hidden">
                                            <div class="addtocart-btn">
                                                <form class="addtocart" action="#" method="post">
                                                    <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <i class="icon anm anm-cart-l me-2"></i><span class="text">Add
                                                            to Cart</span>
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Product Button -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                            <div class="item col-item">
                                <div class="product-box">
                                    <!-- Start Product Image -->
                                    <div class="product-image">
                                        <!-- Start Product Image -->
                                        <a href="javascript:void(0)" class="product-img rounded-0">
                                            <!-- Image -->
                                            <img class="primary rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/index\th-81932006.jpg"
                                                src="<?php echo $path ?>img/index\th-81932006.jpg" alt="Product"
                                                title="Product" width="625" height="808" />
                                            <!-- End Image -->
                                            <!-- Hover Image -->
                                            <img class="hover rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/index\th-61153702.jpg"
                                                src="<?php echo $path ?>img/index\th-61153702.jpg" alt="Product"
                                                title="Product" width="625" height="808" />
                                            <!-- End Hover Image -->
                                        </a>
                                        <!-- End Product Image -->
                                        <!-- Product label -->
                                        <!-- <div class="product-labels"><span class="lbl on-sale">50% Off</span></div> -->
                                        <!-- End Product label -->
                                        <!--Product Button-->

                                        <!--End Product Button-->
                                        <!--Product Availability-->
                                        <!-- <div class="product-availability rounded-5">
                                                    <div class="lh-1 d-flex justify-content-between">
                                                        <div class="text-sold">Sold:<strong class="text-primary ms-1">34</strong></div>
                                                        <div class="text-available">Available:<strong class="text-primary ms-1">16</strong></div>
                                                    </div>
                                                    <div class="progress"><div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div></div>
                                                </div> -->
                                        <!--End Product Availability-->
                                    </div>
                                    <!-- End Product Image -->
                                    <!-- Start Product Details -->
                                    <div class="product-details text-center">
                                        <!--Product Vendor-->
                                        <div class="product-vendor">Football Trophies</div>
                                        <!--End Product Vendor-->
                                        <!-- Product Name -->
                                        <div class="product-name">
                                            <a href="javascript:void(0)">Globe Top</a>
                                        </div>
                                        <!-- End Product Name -->
                                        <!-- Product Price -->
                                        <div class="product-price">
                                            <!-- <span class="price old-price">₹2000.00</span> -->
                                            <span class="price">₹1599.00</span>
                                        </div>
                                        <!-- <div class="add-cart text-center">
                                                    <a href="javascript:void(0)" class="btn btn-secondary btn-lg" style="background: red;">Add to cart</a>
                                                </div> -->
                                        <!-- End Product Price -->
                                        <!-- Product Review -->
                                        <div class="product-review">
                                            <!-- <i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i> -->
                                            <span class="caption hidden ms-1">0 Reviews</span>
                                        </div>
                                        <!-- End Product Review -->
                                        <!--Sort Description-->
                                        <p class="sort-desc hidden">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage...</p>
                                        <!--End Sort Description-->
                                        <!-- Variant -->
                                        <!-- <ul class="variants-clr swatches">
                                                    <li class="swatch medium radius black"><img src="<?php echo $path ?>assets//images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="black" /></li>
                                                    <li class="swatch medium radius navy"><img src="<?php echo $path ?>assets//images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="navy" /></li>
                                                    <li class="swatch medium radius darkgreen"><img src="<?php echo $path ?>assets//images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="darkgreen" /></li>
                                                </ul> -->
                                        <!-- End Variant -->
                                        <!-- Product Button -->
                                        <div class="button-action hidden">
                                            <div class="addtocart-btn">
                                                <form class="addtocart" action="#" method="post">
                                                    <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <i class="icon anm anm-cart-l me-2"></i><span class="text">Add
                                                            to Cart</span>
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Product Button -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                            <div class="item col-item">
                                <div class="product-box">
                                    <!-- Start Product Image -->
                                    <div class="product-image">
                                        <!-- Start Product Image -->
                                        <a href="javascript:void(0)" class="product-img rounded-0">
                                            <!-- Image -->
                                            <img class="primary rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/used\cup9.jpg"
                                                src="<?php echo $path ?>img/used\cup9.jpg" alt="Product" title="Product"
                                                width="625" height="808" />
                                            <!-- End Image -->
                                            <!-- Hover Image -->
                                            <img class="hover rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/index\th-2839210236.jpg"
                                                src="<?php echo $path ?>img/index\th-2839210236.jpg" alt="Product"
                                                title="Product" width="625" height="808" />
                                            <!-- End Hover Image -->
                                        </a>
                                        <!-- End Product Image -->
                                        <!-- Product label -->
                                        <!-- <div class="product-labels"><span class="lbl pr-label2">Hot</span></div> -->
                                        <!-- End Product label -->
                                        <!--Product Button-->

                                        <!--End Product Button-->
                                    </div>
                                    <!-- End Product Image -->
                                    <!-- Start Product Details -->
                                    <div class="product-details text-center">
                                        <!--Product Vendor-->
                                        <div class="product-vendor">Cricket Trophies</div>
                                        <!--End Product Vendor-->
                                        <!-- Product Name -->
                                        <div class="product-name">
                                            <a href="javascript:void(0)">Gold Individual</a>
                                        </div>
                                        <!-- End Product Name -->
                                        <!-- Product Price -->
                                        <div class="product-price">
                                            <span class="price">₹399.00</span>
                                        </div>
                                        <!-- <div class="add-cart text-center">
                                                    <a href="javascript:void(0)" class="btn btn-secondary btn-lg" style="background: red;">Add to cart</a>
                                                </div> -->
                                        <!-- End Product Price -->
                                        <!-- Product Review -->
                                        <div class="product-review">
                                            <!-- <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i> -->
                                            <span class="caption hidden ms-1">3 Reviews</span>
                                        </div>
                                        <!-- End Product Review -->
                                        <!--Sort Description-->
                                        <p class="sort-desc hidden">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage...</p>
                                        <!--End Sort Description-->
                                        <!-- Variant -->
                                        <!-- <ul class="variants-clr swatches">
                                                    <li class="swatch medium radius black"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="black"></span></li>
                                                    <li class="swatch medium radius maroon"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="maroon"></span></li>
                                                </ul> -->
                                        <!-- End Variant -->
                                        <!-- Product Button -->
                                        <div class="button-action hidden">
                                            <div class="addtocart-btn">
                                                <form class="addtocart" action="#" method="post">
                                                    <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <i class="icon anm anm-cart-l me-2"></i><span class="text">Add
                                                            to Cart</span>
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Product Button -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                            <div class="item col-item">
                                <div class="product-box">
                                    <!-- Start Product Image -->
                                    <div class="product-image">
                                        <!-- Start Product Image -->
                                        <a href="javascript:void(0)" class="product-img rounded-0">
                                            <!-- Image -->
                                            <img class="primary rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/used\cup1.jpg"
                                                src="<?php echo $path ?>img/used\cup1.jpg" alt="Product" title="Product"
                                                width="625" height="808" />
                                            <!-- End Image -->
                                            <!-- Hover Image -->
                                            <img class="hover rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/used\cup2.jpg"
                                                src="<?php echo $path ?>img/used\cup2.jpg" alt="Product" title="Product"
                                                width="625" height="808" />
                                            <!-- End Hover Image -->
                                        </a>
                                        <!-- End Product Image -->
                                        <!-- Product label -->
                                        <!-- <div class="product-labels"><span class="lbl on-sale">Sold out</span></div> -->
                                        <!-- End Product label -->
                                        <!--Product Button-->

                                        <!--End Product Button-->
                                    </div>
                                    <!-- End Product Image -->
                                    <!-- Start Product Details -->
                                    <div class="product-details text-center">
                                        <!--Product Vendor-->
                                        <div class="product-vendor">Cricket Trophies</div>
                                        <!--End Product Vendor-->
                                        <!-- Product Name -->
                                        <div class="product-name">
                                            <a href="javascript:void(0)">Individual Gold</a>
                                        </div>
                                        <!-- End Product Name -->
                                        <!-- Product Price -->
                                        <div class="product-price">
                                            <span class="price">₹2999.00</span>
                                        </div>
                                        <!-- <div class="add-cart text-center">
                                                    <a href="javascript:void(0)" class="btn btn-secondary btn-lg" style="background: red;">Add to cart</a>
                                                </div> -->
                                        <!-- End Product Price -->
                                        <!-- Product Review -->
                                        <div class="product-review">
                                            <!-- <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i> -->
                                            <span class="caption hidden ms-1">15 Reviews</span>
                                        </div>
                                        <!-- End Product Review -->
                                        <!--Sort Description-->
                                        <p class="sort-desc hidden">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage...</p>
                                        <!--End Sort Description-->
                                        <!-- Variant -->
                                        <!-- <ul class="variants-clr swatches">
                                                    <li class="swatch medium radius gray"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="gray"></span></li>
                                                    <li class="swatch medium radius red"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="red"></span></li>
                                                    <li class="swatch medium radius orange"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="orange"></span></li>
                                                    <li class="swatch medium radius yellow"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="yellow"></span></li>
                                                </ul> -->
                                        <!-- End Variant -->
                                        <!-- Product Button -->
                                        <div class="button-action hidden">
                                            <div class="addtocart-btn">
                                                <form class="addtocart" action="#" method="post">
                                                    <a href="#addtocart-modal"
                                                        class="btn btn-md add-to-cart-modal soldOutBtn disabled"
                                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <i class="icon anm anm-cart-l me-2"></i><span class="text">Out
                                                            Of stock</span>
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Product Button -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                            <div class="item col-item">
                                <div class="product-box">
                                    <!-- Start Product Image -->
                                    <div class="product-image">
                                        <!-- Start Product Image -->
                                        <a href="javascript:void(0)" class="product-img rounded-0">
                                            <!-- Image -->
                                            <img class="primary rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/used\cup3.jpg"
                                                src="<?php echo $path ?>img/used\cup3.jpg" alt="Product" title="Product"
                                                width="625" height="808" />
                                            <!-- End Image -->
                                            <!-- Hover Image -->
                                            <img class="hover rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/used\cup4.jpg"
                                                src="<?php echo $path ?>img/used\cup4.jpg" alt="Product" title="Product"
                                                width="625" height="808" />
                                            <!-- End Hover Image -->
                                        </a>
                                        <!-- End Product Image -->
                                        <!-- Product label -->
                                        <!-- <div class="product-labels"><span class="lbl pr-label1">Best seller</span></div> -->
                                        <!-- End Product label -->
                                        <!--Product Button-->

                                        <!--End Product Button-->
                                    </div>
                                    <!-- End Product Image -->
                                    <!-- Start Product Details -->
                                    <div class="product-details text-center">
                                        <!--Product Vendor-->
                                        <div class="product-vendor">Volleyball Trophies</div>
                                        <!--End Product Vendor-->
                                        <!-- Product Name -->
                                        <div class="product-name">
                                            <a href="javascript:void(0)">Individual Gold</a>
                                        </div>
                                        <!-- End Product Name -->
                                        <!-- Product Price -->
                                        <div class="product-price">
                                            <span class="price">₹1399.00</span>
                                        </div>
                                        <!-- <div class="add-cart text-center">
                                                    <a href="javascript:void(0)" class="btn btn-secondary btn-lg" style="background: red;">Add to cart</a>
                                                </div> -->
                                        <!-- End Product Price -->
                                        <!-- Product Review -->
                                        <div class="product-review">
                                            <!-- <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i> -->
                                            <span class="caption hidden ms-1">11 Reviews</span>
                                        </div>
                                        <!-- End Product Review -->
                                        <!--Sort Description-->
                                        <p class="sort-desc hidden">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage...</p>
                                        <!--End Sort Description-->
                                        <!-- Variant -->
                                        <!-- <ul class="variants-clr swatches">
                                                    <li class="swatch medium radius black"><img src="<?php echo $path ?>assets//images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="black" /></li>
                                                    <li class="swatch medium radius maroon"><img src="<?php echo $path ?>assets//images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="maroon" /></li>
                                                </ul> -->
                                        <!-- End Variant -->
                                        <!-- Product Button -->
                                        <div class="button-action hidden">
                                            <div class="addtocart-btn">
                                                <form class="addtocart" action="#" method="post">
                                                    <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <i class="icon anm anm-cart-l me-2"></i><span class="text">Add
                                                            to Cart</span>
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Product Button -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                            <div class="item col-item">
                                <div class="product-box">
                                    <!-- Start Product Image -->
                                    <div class="product-image">
                                        <!-- Start Product Image -->
                                        <a href="javascript:void(0)" class="product-img rounded-0">
                                            <!-- Image -->
                                            <img class="primary rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/used\cup5.jpg"
                                                src="<?php echo $path ?>img/used\cup5.jpg" alt="Product" title="Product"
                                                width="625" height="808" />
                                            <!-- End Image -->
                                            <!-- Hover Image -->
                                            <img class="hover rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/used\cup6.jpg"
                                                src="<?php echo $path ?>img/used\cup6.jpg" alt="Product" title="Product"
                                                width="625" height="808" />
                                            <!-- End Hover Image -->
                                        </a>
                                        <!-- End Product Image -->
                                        <!--Product Button-->

                                        <!--End Product Button-->
                                    </div>
                                    <!-- End Product Image -->
                                    <!-- Start Product Details -->
                                    <div class="product-details text-center">
                                        <!--Product Vendor-->
                                        <div class="product-vendor">Football Trophies</div>
                                        <!--End Product Vendor-->
                                        <!-- Product Name -->
                                        <div class="product-name">
                                            <a href="javascript:void(0)">Glass trophy</a>
                                        </div>
                                        <!-- End Product Name -->
                                        <!-- Product Price -->
                                        <div class="product-price">
                                            <span class="price">₹1399.00</span>
                                        </div>
                                        <!-- <div class="add-cart text-center">
                                                    <a href="javascript:void(0)" class="btn btn-secondary btn-lg" style="background: red;">Add to cart</a>
                                                </div> -->
                                        <!-- End Product Price -->
                                        <!-- Product Review -->
                                        <div class="product-review">
                                            <!-- <i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i> -->
                                            <span class="caption hidden ms-1">0 Reviews</span>
                                        </div>
                                        <!-- End Product Review -->
                                        <!--Sort Description-->
                                        <p class="sort-desc hidden">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage...</p>
                                        <!--End Sort Description-->
                                        <!-- Variant -->
                                        <!-- <ul class="variants-clr swatches">
                                                    <li class="swatch medium radius black"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="black"></span></li>
                                                    <li class="swatch medium radius navy"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="navy"></span></li>
                                                    <li class="swatch medium radius darkgreen"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="darkgreen"></span></li>
                                                </ul> -->
                                        <!-- End Variant -->
                                        <!-- Product Button -->
                                        <div class="button-action hidden">
                                            <div class="addtocart-btn">
                                                <form class="addtocart" action="#" method="post">
                                                    <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <i class="icon anm anm-cart-l me-2"></i><span class="text">Add
                                                            to Cart</span>
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Product Button -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                            <div class="item col-item">
                                <div class="product-box">
                                    <!-- Start Product Image -->
                                    <div class="product-image">
                                        <!-- Start Product Image -->
                                        <a href="javascript:void(0)" class="product-img rounded-0">
                                            <!-- Image -->
                                            <img class="primary rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/used\cup7.jpg"
                                                src="<?php echo $path ?>img/used\cup7.jpg" alt="Product" title="Product"
                                                width="625" height="808" />
                                            <!-- End Image -->
                                            <!-- Hover Image -->
                                            <img class="hover rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/used\cup8.jpg"
                                                src="<?php echo $path ?>img/used\cup8.jpg" alt="Product" title="Product"
                                                width="625" height="808" />
                                            <!-- End Hover Image -->
                                        </a>
                                        <!-- End Product Image -->
                                        <!-- Product label -->
                                        <!-- <div class="product-labels"><span class="lbl pr-label4">Popular</span></div> -->
                                        <!-- End Product label -->
                                        <!--Product Button-->

                                        <!--End Product Button-->
                                    </div>
                                    <!-- End Product Image -->
                                    <!-- Start Product Details -->
                                    <div class="product-details text-center">
                                        <!--Product Vendor-->
                                        <div class="product-vendor">Volleyball Trophies</div>
                                        <!--End Product Vendor-->
                                        <!-- Product Name -->
                                        <div class="product-name">
                                            <a href="javascript:void(0)">Silver Trophy</a>
                                        </div>
                                        <!-- End Product Name -->
                                        <!-- Product Price -->
                                        <div class="product-price">
                                            <span class="price">₹999.00</span>
                                        </div>
                                        <!-- <div class="add-cart text-center">
                                                    <a href="javascript:void(0)" class="btn btn-secondary btn-lg" style="background: red;">Add to cart</a>
                                                </div> -->
                                        <!-- End Product Price -->
                                        <!--Sort Description-->
                                        <p class="sort-desc hidden">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage...</p>
                                        <!--End Sort Description-->
                                        <!-- Product Review -->
                                        <div class="product-review">
                                            <!-- <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i> -->
                                            <span class="caption hidden ms-1">19 Reviews</span>
                                        </div>
                                        <!-- End Product Review -->
                                        <!-- Product Button -->
                                        <div class="button-action hidden">
                                            <div class="addtocart-btn">
                                                <form class="addtocart" action="#" method="post">
                                                    <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <i class="icon anm anm-cart-l me-2"></i><span class="text">Add
                                                            to Cart</span>
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Product Button -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                        </div>

                        <div class="view-collection text-center mt-4 mt-md-5">
                            <a href="javascript:void(0)" class="btn btn-secondary btn-lg"
                                style="background: #ff091a;">View Collection</a>
                        </div>
                    </div>

                    <!-- Best seller -->

                    <style>
                        .product-img img {
                            width: 300px;
                            height: 400px;
                        }
                    </style>

                    <!-- New Arrival -->
                    <div class="grid-products grid-view-items  mt-5 mb-5">
                        <div class="section-header">
                            <h2>New Arrivals</h2>
                            <!-- <p>Browse the huge variety of our best seller</p> -->
                        </div>

                        <div
                            class="row col-row product-options row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">
                            <div class="item col-item">
                                <div class="product-box">
                                    <!-- Start Product Image -->
                                    <div class="product-image">
                                        <!-- Start Product Image -->
                                        <a href="javascript:void(0)" class="product-img rounded-0">
                                            <!-- Image -->
                                            <img class="primary rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/index\th-3610389770.jpg"
                                                src="<?php echo $path ?>img/index\th-3610389770.jpg" alt="Product"
                                                title="Product" width="625" height="808" />
                                            <!-- End Image -->
                                            <!-- Hover Image -->
                                            <img class="hover rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/index\th-61153702.jpg"
                                                src="<?php echo $path ?>img/index\th-61153702.jpg" alt="Product"
                                                title="Product" width="625" height="808" />
                                            <!-- End Hover Image -->
                                        </a>
                                        <!-- End Product Image -->
                                        <!--Product Button-->
                                        <div class="button-set style1">
                                            <!--Cart Button-->
                                            <a href="#addtocart-modal" class="btn-icon addtocart quick-shop-modal"
                                                data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                    data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Select Options"><i class="icon anm anm-cart-l"></i><span
                                                        class="text">Select Options</span></span>
                                            </a>
                                            <!--End Cart Button-->
                                            <!--Quick View Button-->
                                            <a href="#quickview-modal" class="btn-icon quickview quick-view-modal"
                                                data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                                <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                    data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Quick View"><i class="icon anm anm-search-plus-l"></i><span
                                                        class="text">Quick View</span></span>
                                            </a>
                                            <!--End Quick View Button-->
                                            <!--Wishlist Button-->
                                            <a href="javascript:void(0)" class="btn-icon wishlist"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span
                                                    class="text">Add To Wishlist</span></a>
                                            <!--End Wishlist Button-->
                                            <!--Compare Button-->
                                            <!-- <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a> -->
                                            <!--End Compare Button-->
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- End Product Image -->
                                    <!-- Start Product Details -->
                                    <div class="product-details text-center">
                                        <!--Product Vendor-->
                                        <div class="product-vendor">Football Trophies</div>
                                        <!--End Product Vendor-->
                                        <!-- Product Name -->
                                        <div class="product-name">
                                            <a href="javascript:void(0)">Golden trophy</a>
                                        </div>
                                        <!-- End Product Name -->
                                        <!-- Product Price -->
                                        <div class="product-price">
                                            <span class="price">₹1200.00</span>
                                        </div>
                                        <!-- <div class="add-cart text-center">
                                                    <a href="javascript:void(0)" class="btn btn-secondary btn-lg" style="background: red;">Add to cart</a>
                                                </div> -->
                                        <!-- End Product Price -->
                                        <!-- Product Review -->
                                        <div class="product-review">
                                            <!-- <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i> -->
                                            <span class="caption hidden ms-1">8 Reviews</span>
                                        </div>
                                        <!-- End Product Review -->
                                        <!--Sort Description-->
                                        <p class="sort-desc hidden">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage...</p>
                                        <!--End Sort Description-->
                                        <!--Color Variant -->
                                        <!-- <ul class="variants-clr swatches">
                                                    <li class="swatch medium radius"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Navy"><img src="<?php echo $path ?>assets//images/products/product2.jpg" alt="img" width="625" height="808"></span></li>
                                                    <li class="swatch medium radius"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Green"><img src="<?php echo $path ?>assets//images/products/product2-1.jpg" alt="img" width="625" height="808"></span></li>
                                                    <li class="swatch medium radius"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Gray"><img src="<?php echo $path ?>assets//images/products/product2-2.jpg" alt="img" width="625" height="808"></span></li>
                                                    <li class="swatch medium radius"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Orange"><img src="<?php echo $path ?>assets//images/products/product2-3.jpg" alt="img" width="625" height="808"></span></li>
                                                    <li class="swatch medium radius"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Yellow"><img src="<?php echo $path ?>assets//images/products/product2-4.jpg" alt="img" width="625" height="808"></span></li>
                                                    <li class="swatch medium radius"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue"><img src="<?php echo $path ?>assets//images/products/product2-5.jpg" alt="img" width="625" height="808"></span></li>
                                                </ul> -->
                                        <!-- End Variant -->
                                        <!-- Product Button -->
                                        <div class="button-action hidden">
                                            <div class="addtocart-btn">
                                                <form class="addtocart" action="#" method="post">
                                                    <a href="#quickshop-modal"
                                                        class="btn btn-md quick-shop quick-shop-modal"
                                                        data-bs-toggle="modal" data-bs-target="#quickshop_modal">
                                                        <i class="icon anm anm-cart-l me-2"></i><span
                                                            class="text">Select Options</span>
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Product Button -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                            <div class="item col-item">
                                <div class="product-box">
                                    <!-- Start Product Image -->
                                    <div class="product-image">
                                        <!-- Start Product Image -->
                                        <a href="javascript:void(0)" class="product-img rounded-0">
                                            <!-- Image -->
                                            <img class="primary rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/index\cup1.jpg"
                                                src="<?php echo $path ?>img/index\cup1.jpg" alt="Product"
                                                title="Product" width="625" height="808" />
                                            <!-- End Image -->
                                            <!-- Hover Image -->
                                            <img class="hover rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/index\cup3.jpg"
                                                src="<?php echo $path ?>img/index\cup3.jpg" alt="Product"
                                                title="Product" width="625" height="808" />
                                            <!-- End Hover Image -->
                                        </a>
                                        <!-- End Product Image -->
                                        <!-- Product label -->
                                        <!-- <div class="product-labels"><span class="lbl pr-label3">Trending</span></div> -->
                                        <!-- End Product label -->
                                        <!--Product Button-->

                                        <!--End Product Button-->
                                    </div>
                                    <!-- End Product Image -->
                                    <!-- Start Product Details -->
                                    <div class="product-details text-center">
                                        <!--Product Vendor-->
                                        <div class="product-vendor">Kabaadi Trophies</div>
                                        <!--End Product Vendor-->
                                        <!-- Product Name -->
                                        <div class="product-name">
                                            <a href="javascript:void(0)">Star Crest</a>
                                        </div>
                                        <!-- End Product Name -->
                                        <!-- Product Price -->
                                        <div class="product-price">
                                            <span class="price">₹999.00</span>
                                        </div>
                                        <!-- <div class="add-cart text-center">
                                                    <a href="javascript:void(0)" class="btn btn-secondary btn-lg" style="background: red;">Add to cart</a>
                                                </div> -->
                                        <!-- End Product Price -->
                                        <!-- Product Review -->
                                        <div class="product-review">
                                            <!-- <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i> -->
                                            <span class="caption hidden ms-1">10 Reviews</span>
                                        </div>
                                        <!-- End Product Review -->
                                        <!--Sort Description-->
                                        <p class="sort-desc hidden">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage...</p>
                                        <!--End Sort Description-->
                                        <!-- Variant -->
                                        <!-- <ul class="variants-clr swatches">
                                                    <li class="swatch medium radius red"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="red"></span></li>
                                                    <li class="swatch medium radius orange"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="orange"></span></li>
                                                    <li class="swatch medium radius yellow"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="yellow"></span></li>
                                                </ul> -->
                                        <!-- End Variant -->
                                        <!-- Product Button -->
                                        <div class="button-action hidden">
                                            <div class="addtocart-btn">
                                                <form class="addtocart" action="#" method="post">
                                                    <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <i class="icon anm anm-cart-l me-2"></i><span class="text">Add
                                                            to Cart</span>
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Product Button -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                            <div class="item col-item">
                                <div class="product-box">
                                    <!-- Start Product Image -->
                                    <div class="product-image">
                                        <!-- Start Product Image -->
                                        <a href="javascript:void(0)" class="product-img rounded-0">
                                            <!-- Image -->
                                            <img class="primary rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/index\th-81932006.jpg"
                                                src="<?php echo $path ?>img/index\th-81932006.jpg" alt="Product"
                                                title="Product" width="625" height="808" />
                                            <!-- End Image -->
                                            <!-- Hover Image -->
                                            <img class="hover rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/index\th-61153702.jpg"
                                                src="<?php echo $path ?>img/index\th-61153702.jpg" alt="Product"
                                                title="Product" width="625" height="808" />
                                            <!-- End Hover Image -->
                                        </a>
                                        <!-- End Product Image -->
                                        <!-- Product label -->
                                        <!-- <div class="product-labels"><span class="lbl on-sale">50% Off</span></div> -->
                                        <!-- End Product label -->
                                        <!--Product Button-->

                                        <!--End Product Button-->
                                        <!--Product Availability-->
                                        <!-- <div class="product-availability rounded-5">
                                                    <div class="lh-1 d-flex justify-content-between">
                                                        <div class="text-sold">Sold:<strong class="text-primary ms-1">34</strong></div>
                                                        <div class="text-available">Available:<strong class="text-primary ms-1">16</strong></div>
                                                    </div>
                                                    <div class="progress"><div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div></div>
                                                </div> -->
                                        <!--End Product Availability-->
                                    </div>
                                    <!-- End Product Image -->
                                    <!-- Start Product Details -->
                                    <div class="product-details text-center">
                                        <!--Product Vendor-->
                                        <div class="product-vendor">Football Trophies</div>
                                        <!--End Product Vendor-->
                                        <!-- Product Name -->
                                        <div class="product-name">
                                            <a href="javascript:void(0)">Globe Top</a>
                                        </div>
                                        <!-- End Product Name -->
                                        <!-- Product Price -->
                                        <div class="product-price">
                                            <!-- <span class="price old-price">₹2000.00</span> -->
                                            <span class="price">₹1599.00</span>
                                        </div>
                                        <!-- <div class="add-cart text-center">
                                                    <a href="javascript:void(0)" class="btn btn-secondary btn-lg" style="background: red;">Add to cart</a>
                                                </div> -->
                                        <!-- End Product Price -->
                                        <!-- Product Review -->
                                        <div class="product-review">
                                            <!-- <i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i> -->
                                            <span class="caption hidden ms-1">0 Reviews</span>
                                        </div>
                                        <!-- End Product Review -->
                                        <!--Sort Description-->
                                        <p class="sort-desc hidden">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage...</p>
                                        <!--End Sort Description-->
                                        <!-- Variant -->
                                        <!-- <ul class="variants-clr swatches">
                                                    <li class="swatch medium radius black"><img src="<?php echo $path ?>assets//images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="black" /></li>
                                                    <li class="swatch medium radius navy"><img src="<?php echo $path ?>assets//images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="navy" /></li>
                                                    <li class="swatch medium radius darkgreen"><img src="<?php echo $path ?>assets//images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="darkgreen" /></li>
                                                </ul> -->
                                        <!-- End Variant -->
                                        <!-- Product Button -->
                                        <div class="button-action hidden">
                                            <div class="addtocart-btn">
                                                <form class="addtocart" action="#" method="post">
                                                    <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <i class="icon anm anm-cart-l me-2"></i><span class="text">Add
                                                            to Cart</span>
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Product Button -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                            <div class="item col-item">
                                <div class="product-box">
                                    <!-- Start Product Image -->
                                    <div class="product-image">
                                        <!-- Start Product Image -->
                                        <a href="javascript:void(0)" class="product-img rounded-0">
                                            <!-- Image -->
                                            <img class="primary rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/used\cup9.jpg"
                                                src="<?php echo $path ?>img/used\cup9.jpg" alt="Product" title="Product"
                                                width="625" height="808" />
                                            <!-- End Image -->
                                            <!-- Hover Image -->
                                            <img class="hover rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/index\th-2839210236.jpg"
                                                src="<?php echo $path ?>img/index\th-2839210236.jpg" alt="Product"
                                                title="Product" width="625" height="808" />
                                            <!-- End Hover Image -->
                                        </a>
                                        <!-- End Product Image -->
                                        <!-- Product label -->
                                        <!-- <div class="product-labels"><span class="lbl pr-label2">Hot</span></div> -->
                                        <!-- End Product label -->
                                        <!--Product Button-->

                                        <!--End Product Button-->
                                    </div>
                                    <!-- End Product Image -->
                                    <!-- Start Product Details -->
                                    <div class="product-details text-center">
                                        <!--Product Vendor-->
                                        <div class="product-vendor">Cricket Trophies</div>
                                        <!--End Product Vendor-->
                                        <!-- Product Name -->
                                        <div class="product-name">
                                            <a href="javascript:void(0)">Gold Individual</a>
                                        </div>
                                        <!-- End Product Name -->
                                        <!-- Product Price -->
                                        <div class="product-price">
                                            <span class="price">₹399.00</span>
                                        </div>
                                        <!-- <div class="add-cart text-center">
                                                    <a href="javascript:void(0)" class="btn btn-secondary btn-lg" style="background: red;">Add to cart</a>
                                                </div> -->
                                        <!-- End Product Price -->
                                        <!-- Product Review -->
                                        <div class="product-review">
                                            <!-- <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i> -->
                                            <span class="caption hidden ms-1">3 Reviews</span>
                                        </div>
                                        <!-- End Product Review -->
                                        <!--Sort Description-->
                                        <p class="sort-desc hidden">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage...</p>
                                        <!--End Sort Description-->
                                        <!-- Variant -->
                                        <!-- <ul class="variants-clr swatches">
                                                    <li class="swatch medium radius black"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="black"></span></li>
                                                    <li class="swatch medium radius maroon"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="maroon"></span></li>
                                                </ul> -->
                                        <!-- End Variant -->
                                        <!-- Product Button -->
                                        <div class="button-action hidden">
                                            <div class="addtocart-btn">
                                                <form class="addtocart" action="#" method="post">
                                                    <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <i class="icon anm anm-cart-l me-2"></i><span class="text">Add
                                                            to Cart</span>
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Product Button -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                            <div class="item col-item">
                                <div class="product-box">
                                    <!-- Start Product Image -->
                                    <div class="product-image">
                                        <!-- Start Product Image -->
                                        <a href="javascript:void(0)" class="product-img rounded-0">
                                            <!-- Image -->
                                            <img class="primary rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/used\cup1.jpg"
                                                src="<?php echo $path ?>img/used\cup1.jpg" alt="Product" title="Product"
                                                width="625" height="808" />
                                            <!-- End Image -->
                                            <!-- Hover Image -->
                                            <img class="hover rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/used\cup2.jpg"
                                                src="<?php echo $path ?>img/used\cup2.jpg" alt="Product" title="Product"
                                                width="625" height="808" />
                                            <!-- End Hover Image -->
                                        </a>
                                        <!-- End Product Image -->
                                        <!-- Product label -->
                                        <!-- <div class="product-labels"><span class="lbl on-sale">Sold out</span></div> -->
                                        <!-- End Product label -->
                                        <!--Product Button-->

                                        <!--End Product Button-->
                                    </div>
                                    <!-- End Product Image -->
                                    <!-- Start Product Details -->
                                    <div class="product-details text-center">
                                        <!--Product Vendor-->
                                        <div class="product-vendor">Cricket Trophies</div>
                                        <!--End Product Vendor-->
                                        <!-- Product Name -->
                                        <div class="product-name">
                                            <a href="javascript:void(0)">Individual Gold</a>
                                        </div>
                                        <!-- End Product Name -->
                                        <!-- Product Price -->
                                        <div class="product-price">
                                            <span class="price">₹2999.00</span>
                                        </div>
                                        <!-- <div class="add-cart text-center">
                                                    <a href="javascript:void(0)" class="btn btn-secondary btn-lg" style="background: red;">Add to cart</a>
                                                </div> -->
                                        <!-- End Product Price -->
                                        <!-- Product Review -->
                                        <div class="product-review">
                                            <!-- <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i> -->
                                            <span class="caption hidden ms-1">15 Reviews</span>
                                        </div>
                                        <!-- End Product Review -->
                                        <!--Sort Description-->
                                        <p class="sort-desc hidden">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage...</p>
                                        <!--End Sort Description-->
                                        <!-- Variant -->
                                        <!-- <ul class="variants-clr swatches">
                                                    <li class="swatch medium radius gray"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="gray"></span></li>
                                                    <li class="swatch medium radius red"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="red"></span></li>
                                                    <li class="swatch medium radius orange"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="orange"></span></li>
                                                    <li class="swatch medium radius yellow"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="yellow"></span></li>
                                                </ul> -->
                                        <!-- End Variant -->
                                        <!-- Product Button -->
                                        <div class="button-action hidden">
                                            <div class="addtocart-btn">
                                                <form class="addtocart" action="#" method="post">
                                                    <a href="#addtocart-modal"
                                                        class="btn btn-md add-to-cart-modal soldOutBtn disabled"
                                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <i class="icon anm anm-cart-l me-2"></i><span class="text">Out
                                                            Of stock</span>
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Product Button -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                            <div class="item col-item">
                                <div class="product-box">
                                    <!-- Start Product Image -->
                                    <div class="product-image">
                                        <!-- Start Product Image -->
                                        <a href="javascript:void(0)" class="product-img rounded-0">
                                            <!-- Image -->
                                            <img class="primary rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/used\cup3.jpg"
                                                src="<?php echo $path ?>img/used\cup3.jpg" alt="Product" title="Product"
                                                width="625" height="808" />
                                            <!-- End Image -->
                                            <!-- Hover Image -->
                                            <img class="hover rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/used\cup4.jpg"
                                                src="<?php echo $path ?>img/used\cup4.jpg" alt="Product" title="Product"
                                                width="625" height="808" />
                                            <!-- End Hover Image -->
                                        </a>
                                        <!-- End Product Image -->
                                        <!-- Product label -->
                                        <!-- <div class="product-labels"><span class="lbl pr-label1">Best seller</span></div> -->
                                        <!-- End Product label -->
                                        <!--Product Button-->

                                        <!--End Product Button-->
                                    </div>
                                    <!-- End Product Image -->
                                    <!-- Start Product Details -->
                                    <div class="product-details text-center">
                                        <!--Product Vendor-->
                                        <div class="product-vendor">Volleyball Trophies</div>
                                        <!--End Product Vendor-->
                                        <!-- Product Name -->
                                        <div class="product-name">
                                            <a href="javascript:void(0)">Individual Gold</a>
                                        </div>
                                        <!-- End Product Name -->
                                        <!-- Product Price -->
                                        <div class="product-price">
                                            <span class="price">₹1399.00</span>
                                        </div>
                                        <!-- <div class="add-cart text-center">
                                                    <a href="javascript:void(0)" class="btn btn-secondary btn-lg" style="background: red;">Add to cart</a>
                                                </div> -->
                                        <!-- End Product Price -->
                                        <!-- Product Review -->
                                        <div class="product-review">
                                            <!-- <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i> -->
                                            <span class="caption hidden ms-1">11 Reviews</span>
                                        </div>
                                        <!-- End Product Review -->
                                        <!--Sort Description-->
                                        <p class="sort-desc hidden">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage...</p>
                                        <!--End Sort Description-->
                                        <!-- Variant -->
                                        <!-- <ul class="variants-clr swatches">
                                                    <li class="swatch medium radius black"><img src="<?php echo $path ?>assets//images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="black" /></li>
                                                    <li class="swatch medium radius maroon"><img src="<?php echo $path ?>assets//images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="maroon" /></li>
                                                </ul> -->
                                        <!-- End Variant -->
                                        <!-- Product Button -->
                                        <div class="button-action hidden">
                                            <div class="addtocart-btn">
                                                <form class="addtocart" action="#" method="post">
                                                    <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <i class="icon anm anm-cart-l me-2"></i><span class="text">Add
                                                            to Cart</span>
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Product Button -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                            <div class="item col-item">
                                <div class="product-box">
                                    <!-- Start Product Image -->
                                    <div class="product-image">
                                        <!-- Start Product Image -->
                                        <a href="javascript:void(0)" class="product-img rounded-0">
                                            <!-- Image -->
                                            <img class="primary rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/used\cup5.jpg"
                                                src="<?php echo $path ?>img/used\cup5.jpg" alt="Product" title="Product"
                                                width="625" height="808" />
                                            <!-- End Image -->
                                            <!-- Hover Image -->
                                            <img class="hover rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/used\cup6.jpg"
                                                src="<?php echo $path ?>img/used\cup6.jpg" alt="Product" title="Product"
                                                width="625" height="808" />
                                            <!-- End Hover Image -->
                                        </a>
                                        <!-- End Product Image -->
                                        <!--Product Button-->

                                        <!--End Product Button-->
                                    </div>
                                    <!-- End Product Image -->
                                    <!-- Start Product Details -->
                                    <div class="product-details text-center">
                                        <!--Product Vendor-->
                                        <div class="product-vendor">Football Trophies</div>
                                        <!--End Product Vendor-->
                                        <!-- Product Name -->
                                        <div class="product-name">
                                            <a href="javascript:void(0)">Glass trophy</a>
                                        </div>
                                        <!-- End Product Name -->
                                        <!-- Product Price -->
                                        <div class="product-price">
                                            <span class="price">₹1399.00</span>
                                        </div>
                                        <!-- <div class="add-cart text-center">
                                                    <a href="javascript:void(0)" class="btn btn-secondary btn-lg" style="background: red;">Add to cart</a>
                                                </div> -->
                                        <!-- End Product Price -->
                                        <!-- Product Review -->
                                        <div class="product-review">
                                            <!-- <i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i> -->
                                            <span class="caption hidden ms-1">0 Reviews</span>
                                        </div>
                                        <!-- End Product Review -->
                                        <!--Sort Description-->
                                        <p class="sort-desc hidden">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage...</p>
                                        <!--End Sort Description-->
                                        <!-- Variant -->
                                        <!-- <ul class="variants-clr swatches">
                                                    <li class="swatch medium radius black"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="black"></span></li>
                                                    <li class="swatch medium radius navy"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="navy"></span></li>
                                                    <li class="swatch medium radius darkgreen"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="darkgreen"></span></li>
                                                </ul> -->
                                        <!-- End Variant -->
                                        <!-- Product Button -->
                                        <div class="button-action hidden">
                                            <div class="addtocart-btn">
                                                <form class="addtocart" action="#" method="post">
                                                    <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <i class="icon anm anm-cart-l me-2"></i><span class="text">Add
                                                            to Cart</span>
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Product Button -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                            <div class="item col-item">
                                <div class="product-box">
                                    <!-- Start Product Image -->
                                    <div class="product-image">
                                        <!-- Start Product Image -->
                                        <a href="javascript:void(0)" class="product-img rounded-0">
                                            <!-- Image -->
                                            <img class="primary rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/used\cup7.jpg"
                                                src="<?php echo $path ?>img/used\cup7.jpg" alt="Product" title="Product"
                                                width="625" height="808" />
                                            <!-- End Image -->
                                            <!-- Hover Image -->
                                            <img class="hover rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path ?>img/used\cup8.jpg"
                                                src="<?php echo $path ?>img/used\cup8.jpg" alt="Product" title="Product"
                                                width="625" height="808" />
                                            <!-- End Hover Image -->
                                        </a>
                                        <!-- End Product Image -->
                                        <!-- Product label -->
                                        <!-- <div class="product-labels"><span class="lbl pr-label4">Popular</span></div> -->
                                        <!-- End Product label -->
                                        <!--Product Button-->

                                        <!--End Product Button-->
                                    </div>
                                    <!-- End Product Image -->
                                    <!-- Start Product Details -->
                                    <div class="product-details text-center">
                                        <!--Product Vendor-->
                                        <div class="product-vendor">Volleyball Trophies</div>
                                        <!--End Product Vendor-->
                                        <!-- Product Name -->
                                        <div class="product-name">
                                            <a href="javascript:void(0)">Silver Trophy</a>
                                        </div>
                                        <!-- End Product Name -->
                                        <!-- Product Price -->
                                        <div class="product-price">
                                            <span class="price">₹999.00</span>
                                        </div>
                                        <!-- <div class="add-cart text-center">
                                                    <a href="javascript:void(0)" class="btn btn-secondary btn-lg" style="background: red;">Add to cart</a>
                                                </div> -->
                                        <!-- End Product Price -->
                                        <!--Sort Description-->
                                        <p class="sort-desc hidden">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage...</p>
                                        <!--End Sort Description-->
                                        <!-- Product Review -->
                                        <div class="product-review">
                                            <!-- <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i> -->
                                            <span class="caption hidden ms-1">19 Reviews</span>
                                        </div>
                                        <!-- End Product Review -->
                                        <!-- Product Button -->
                                        <div class="button-action hidden">
                                            <div class="addtocart-btn">
                                                <form class="addtocart" action="#" method="post">
                                                    <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <i class="icon anm anm-cart-l me-2"></i><span class="text">Add
                                                            to Cart</span>
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Product Button -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                        </div>

                        <div class="view-collection text-center mt-4 mt-md-5">
                            <a href="javascript:void(0)" class="btn btn-secondary btn-lg"
                                style="background: #ff091a;">View Collection</a>
                        </div>
                    </div>
                    <!-- New Arrival -->
                </div>
            </section>
            <!--End Products With Tabs-->


            <!--Parallax Banner-->

            <!--End Parallax Banner-->

            <!--Testimonial Section-->
            <section class="section testimonial-slider style1">
                <div class="container">
                    <div class="section-header">
                        <!-- <p class="mb-2 mt-0">Happy Customer</p> -->
                        <h2>Reviews by our custimers</h2>
                    </div>

                    <div class="testimonial-wraper">
                        <!--Testimonial Slider Items-->
                        <div class="testimonial-slider-3items gp15 slick-arrow-dots arwOut5">
                            <div class="testimonial-slide">
                                <div class="testimonial-content text-center">
                                    <div class="quote-icon mb-3 mb-lg-4"><img class="blur-up lazyload mx-auto"
                                            data-src="<?php echo $path ?>assets/images/icons/demo1-quote-icon.png"
                                            src="<?php echo $path ?>assets/images/icons/demo1-quote-icon.png" alt="icon"
                                            width="40" height="40" /></div>
                                    <div class="content">
                                        <div class="text mb-2">
                                            <p>Excellent Service</p>
                                        </div>
                                        <div class="product-review my-3">
                                            <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                                class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                                class="icon anm anm-star"></i>
                                            <span class="caption hidden ms-1">24 Reviews</span>
                                        </div>
                                    </div>
                                    <div class="auhimg d-flex-justify-center text-left">
                                        <div class="image"><img class="rounded-circle blur-up lazyload"
                                                data-src="<?php echo $path ?>" src="<?php echo $path ?>" alt="Murali"
                                                width="65" height="65" /></div>
                                        <div class="auhtext ms-3">
                                            <h5 class="authour mb-1">Murali</h5>
                                            <p class="text-muted">Founder &amp; CEO</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-slide">
                                <div class="testimonial-content text-center">
                                    <div class="quote-icon mb-3 mb-lg-4"><img class="blur-up lazyload mx-auto"
                                            data-src="<?php echo $path ?>assets/images/icons/demo1-quote-icon.png"
                                            src="<?php echo $path ?>assets/images/icons/demo1-quote-icon.png" alt="icon"
                                            width="40" height="40" /></div>
                                    <div class="content">
                                        <div class="text mb-2">
                                            <p>Excellent Service</p>
                                        </div>
                                        <div class="product-review my-3">
                                            <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                                class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                                class="icon anm anm-star-o"></i>
                                            <span class="caption hidden ms-1">15 Reviews</span>
                                        </div>
                                    </div>
                                    <div class="auhimg d-flex-justify-center text-left">
                                        <div class="image"><img class="rounded-circle blur-up lazyload"
                                                data-src="<?php echo $path ?>" src="<?php echo $path ?>" alt="Sujith"
                                                width="65" height="65" /></div>
                                        <div class="auhtext ms-3">
                                            <h5 class="authour mb-1">Sujith</h5>
                                            <p class="text-muted">Marketing</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-slide">
                                <div class="testimonial-content text-center">
                                    <div class="quote-icon mb-3 mb-lg-4"><img class="blur-up lazyload mx-auto"
                                            data-src="<?php echo $path ?>assets/images/icons/demo1-quote-icon.png"
                                            src="<?php echo $path ?>assets/images/icons/demo1-quote-icon.png" alt="icon"
                                            width="40" height="40" /></div>
                                    <div class="content">
                                        <div class="text mb-2">
                                            <p>Excellent Service</p>
                                        </div>
                                        <div class="product-review my-3">
                                            <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                                class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i
                                                class="icon anm anm-star-o"></i>
                                            <span class="caption hidden ms-1">17 Reviews</span>
                                        </div>
                                    </div>
                                    <div class="auhimg d-flex-justify-center text-left">
                                        <div class="image"><img class="rounded-circle blur-up lazyload"
                                                data-src="<?php echo $path ?>" src="<?php echo $path ?>" alt="Venkat"
                                                width="65" height="65" /></div>
                                        <div class="auhtext ms-3">
                                            <h5 class="authour mb-1">Venkat</h5>
                                            <p class="text-muted">Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-slide rounded-3">
                                <div class="testimonial-content text-center">
                                    <div class="quote-icon mb-3 mb-lg-4"><img class="blur-up lazyload mx-auto"
                                            data-src="<?php echo $path ?>assets/images/icons/demo1-quote-icon.png"
                                            src="<?php echo $path ?>assets/images/icons/demo1-quote-icon.png" alt="icon"
                                            width="40" height="40" /></div>
                                    <div class="content">
                                        <div class="text mb-2">
                                            <p>Excellent Service</p>
                                        </div>
                                        <div class="product-review my-3">
                                            <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                                class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i
                                                class="icon anm anm-star-o"></i>
                                            <span class="caption hidden ms-1">29 Reviews</span>
                                        </div>
                                    </div>
                                    <div class="auhimg d-flex-justify-center text-left">
                                        <div class="image"><img class="rounded-circle blur-up lazyload"
                                                data-src="<?php echo $path ?>" src="<?php echo $path ?>" alt="Ganapathi"
                                                width="65" height="65" /></div>
                                        <div class="auhtext ms-3">
                                            <h5 class="authour mb-1">Ganapathi</h5>
                                            <p class="text-muted">Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial Slider Items-->
                    </div>
                </div>
            </section>
            <!--End Testimonial section-->


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
                    <button class="close-cart border-0" data-bs-dismiss="offcanvas" aria-label="Close"><i
                            class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Close"></i></button>
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
                    <button class="close-cart border-0" data-bs-dismiss="offcanvas" aria-label="Close"><i
                            class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Close"></i></button>
                    <h4 class="fs-6">Your cart (2 Items)</h4>
                </div>
                <div class="minicart-content">
                    <ul class="m-0 clearfix">
                        <li class="item d-flex justify-content-center align-items-center">
                            <a class="product-image rounded-3" href="product-layout1.html">
                                <img class="blur-up lazyload" data-src="<?php echo $path ?>img/index\th-61153702.jpg"
                                    src="<?php echo $path ?>assets/images/products/cart-product-img1.jpg" alt="product"
                                    title="Product" width="120" height="170" />
                            </a>
                            <div class="product-details">
                                <a class="product-title" href="product-layout1.html">Golden Trophies</a>
                                <div class="variant-cart my-2">Football Trophies</div>
                                <div class="priceRow">
                                    <div class="product-price">
                                        <span class="price">₹1200.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="qtyDetail text-center">
                                <div class="qtyField">
                                    <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                    <input type="text" name="quantity" value="1" class="qty">
                                    <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                </div>
                                <a href="#" class="edit-i remove"><i class="icon anm anm-pencil-ar"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                <a href="#" class="remove"><i class="icon anm anm-times-r" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Remove"></i></a>
                            </div>
                        </li>
                        <li class="item d-flex justify-content-center align-items-center">
                            <a class="product-image rounded-3" href="product-layout1.html">
                                <img class="blur-up lazyload" data-src="<?php echo $path ?>img/used\cup4.jpg"
                                    src="<?php echo $path ?>assets/images/products/cart-product-img2.jpg" alt="product"
                                    title="Product" width="120" height="170" />
                            </a>
                            <div class="product-details">
                                <a class="product-title" href="product-layout1.html">Individual Trophy</a>
                                <div class="variant-cart my-2">Khabaddi Trophies</div>
                                <div class="priceRow">
                                    <div class="product-price">
                                        <span class="price">₹1000.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="qtyDetail text-center">
                                <div class="qtyField">
                                    <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                    <input type="text" name="quantity" value="1" class="qty">
                                    <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                </div>
                                <a href="#" class="edit-i remove"><i class="icon anm anm-pencil-ar"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                <a href="#" class="remove"><i class="icon anm anm-times-r" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Remove"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="minicart-bottom">
                    <!-- <div class="shipinfo">
                            <div class="progress mb-2"><div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div></div>
                            <div class="freeShipMsg"><i class="icon anm anm-truck-l fs-6 me-2 align-middle"></i>Only <span class="money" data-currency-usd="$199.00" data-currency="USD">$199.00</span> away from <b>Free Shipping</b></div>
                            <div class="freeShipMsg d-none"><i class="icon anm anm-truck-l fs-6 me-2 align-middle"></i>Congrats! You are eligible for <b>Free Shipping</b></div>
                        </div> -->
                    <!-- <div class="subtotal clearfix my-3">
                            <div class="totalInfo clearfix mb-1 d-none"><span>Shipping:</span><span class="item product-price">$10.00</span></div>
                            <div class="totalInfo clearfix mb-1 d-none"><span>Tax:</span><span class="item product-price">$0.00</span></div>
                            <div class="totalInfo clearfix"><span>Total:</span><span class="item product-price">$163.00</span></div>

                        </div> -->
                    <!-- <div class="agree-check customCheckbox">
                            <input id="prTearm" name="tearm" type="checkbox" value="tearm" required />
                            <label for="prTearm"> I agree with the </label><a href="#" class="ms-1 text-link">Terms &amp; conditions</a>
                        </div> -->
                    <div class="minicart-action d-flex mt-3">
                        <a href="checkout-style1.html" class="proceed-to-checkout btn btn-primary w-50 me-1">Check
                            Out</a>
                        <a href="cart-style1.html" class="cart-btn btn btn-secondary w-50 ms-1">View Cart</a>
                    </div>
                </div>
            </div>
            <!--MiniCart Content-->
        </div>
        <!--End MiniCart Drawer-->

        <!-- Product Quickshop Modal-->
        <div class="quickshop-modal modal fade" id="quickshop_modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <form method="post" action="#" id="product-form-quickshop"
                            class="product-form align-items-center">
                            <!-- Product Info -->
                            <div class="row g-0 item mb-3">
                                <a class="col-4 product-image" href="product-layout1.html"><img class="blur-up lazyload"
                                        data-src="<?php echo $path ?>assets/images/products/addtocart-modal.jpg"
                                        src="<?php echo $path ?>assets/images/products/addtocart-modal.jpg"
                                        alt="Product" title="Product" width="625" height="800" /></a>
                                <div class="col-8 product-details">
                                    <div class="product-variant ps-3">

                                        <a class="product-title" href="product-layout1.html">Weave Hoodie Sweatshirt</a>
                                        <div class="priceRow mt-2 mb-3">
                                            <div class="product-price m-0"><span class="old-price">$114.00</span><span
                                                    class="price">$99.00</span></div>
                                        </div>
                                        <div class="qtyField">
                                            <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                            <input type="text" name="quantity" value="1" class="qty">
                                            <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Info -->
                            <!-- Swatches Color -->
                            <div class="variants-clr swatches-image clearfix mb-3 swatch-0 option1"
                                data-option-index="0">
                                <label class="label d-flex justify-content-center">Color:<span
                                        class="slVariant ms-1 fw-bold">Black</span></label>
                                <ul class="swatches d-flex-justify-center pt-1 clearfix">
                                    <li class="swatch large radius available active"><img
                                            src="<?php echo $path ?>assets/images/products/swatches/blue-red.jpg"
                                            alt="image" width="70" height="70" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Blue" /></li>
                                    <li class="swatch large radius available"><img
                                            src="<?php echo $path ?>assets/images/products/swatches/blue-red.jpg"
                                            alt="image" width="70" height="70" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Black" /></li>
                                    <li class="swatch large radius available"><img
                                            src="<?php echo $path ?>assets/images/products/swatches/blue-red.jpg"
                                            alt="image" width="70" height="70" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Pink" /></li>
                                    <li class="swatch large radius available green"><span class="swatchLbl"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Green"></span></li>
                                    <li class="swatch large radius soldout yellow"><span class="swatchLbl"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Yellow"></span></li>
                                </ul>
                            </div>
                            <!-- End Swatches Color -->
                            <!-- Swatches Size -->
                            <div class="variants-size swatches-size clearfix mb-4 swatch-1 option2"
                                data-option-index="1">
                                <label class="label d-flex justify-content-center">Size:<span
                                        class="slVariant ms-1 fw-bold">S</span></label>
                                <ul class="size-swatches d-flex-justify-center pt-1 clearfix">
                                    <li class="swatch large radius soldout"><span class="swatchLbl"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="XS">XS</span></li>
                                    <li class="swatch large radius available active"><span class="swatchLbl"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="S">S</span></li>
                                    <li class="swatch large radius available"><span class="swatchLbl"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="M">M</span></li>
                                    <li class="swatch large radius available"><span class="swatchLbl"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="L">L</span></li>
                                    <li class="swatch large radius available"><span class="swatchLbl"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="XL">XL</span></li>
                                </ul>
                            </div>
                            <!-- End Swatches Size -->
                            <!-- Product Action -->
                            <div class="product-form-submit d-flex-justify-center">
                                <button type="submit" name="add" class="btn product-cart-submit me-2"><span>Add to
                                        cart</span></button>
                                <button type="submit" name="sold" class="btn btn-secondary product-sold-out d-none"
                                    disabled="disabled">Sold out</button>
                                <button type="submit" name="buy" class="btn btn-secondary proceed-to-checkout">Buy it
                                    now</button>
                            </div>
                            <!-- End Product Action -->
                            <div class="text-center mt-3"><a class="text-link" href="product-layout1.html">View More
                                    Details</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Quickshop Modal -->

        <!-- Product Addtocart Modal-->
        <div class="addtocart-modal modal fade" id="addtocart_modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <form method="post" action="#" id="product-form-addtocart"
                            class="product-form align-items-center">
                            <h3 class="title mb-3 text-success text-center">Added to cart Successfully!</h3>
                            <div class="row d-flex-center text-center">
                                <div class="col-md-6">
                                    <!-- Product Image -->
                                    <a class="product-image" href="product-layout1.html"><img class="blur-up lazyload"
                                            data-src="<?php echo $path ?>assets/images/products/addtocart-modal.jpg"
                                            src="<?php echo $path ?>assets/images/products/addtocart-modal.jpg"
                                            alt="Product" title="Product" width="625" height="800" /></a>
                                    <!-- End Product Image -->
                                </div>
                                <div class="col-md-6 mt-3 mt-md-0">
                                    <!-- Product Info -->
                                    <div class="product-details">

                                        <a class="product-title" href="product-layout1.html">Golden Trophy</a>
                                        <p class="product-clr my-2 text-muted">Football Trophies</p>
                                    </div>
                                    <div class="addcart-total rounded-5">
                                        <p class="product-items mb-2">There are <strong>1</strong> items in your cart
                                        </p>
                                        <p class="d-flex-justify-center">Total: <span class="price">₹1200.00</span></p>
                                    </div>
                                    <!-- End Product Info -->
                                    <!-- Product Action -->
                                    <div class="product-form-submit d-flex-justify-center">
                                        <a href="#" class="btn btn-outline-primary product-continue w-100">Continue
                                            Shopping</a>
                                        <a href="cart-style1.html"
                                            class="btn btn-secondary product-viewcart w-100 my-2 my-md-3">View Cart</a>
                                        <a href="checkout-style1.html"
                                            class="btn btn-primary product-checkout w-100">Proceed to checkout</a>
                                    </div>
                                    <!-- End Product Action -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Addtocart Modal -->

        <!-- Product Quickview Modal-->
        <div class="quickview-modal modal fade" id="quickview_modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-3 mb-md-0">
                                <!-- Model Thumbnail -->
                                <div id="quickView" class="carousel slide">
                                    <!-- Image Slide carousel items -->
                                    <div class="carousel-inner">
                                        <div class="item carousel-item active" data-bs-slide-number="0">
                                            <img class="blur-up lazyload"
                                                data-src="<?php echo $path ?>assets/images/products/product2.jpg"
                                                src="<?php echo $path ?>assets/images/products/product2.jpg"
                                                alt="product" title="Product" width="625" height="808" />
                                        </div>
                                        <div class="item carousel-item" data-bs-slide-number="1">
                                            <img class="blur-up lazyload"
                                                data-src="<?php echo $path ?>assets/images/products/product2-1.jpg"
                                                src="<?php echo $path ?>assets/images/products/product2-1.jpg"
                                                alt="product" title="Product" width="625" height="808" />
                                        </div>
                                        <div class="item carousel-item" data-bs-slide-number="2">
                                            <img class="blur-up lazyload"
                                                data-src="<?php echo $path ?>assets/images/products/product2-2.jpg"
                                                src="<?php echo $path ?>assets/images/products/product2-2.jpg"
                                                alt="product" title="Product" width="625" height="808" />
                                        </div>
                                        <div class="item carousel-item" data-bs-slide-number="3">
                                            <img class="blur-up lazyload"
                                                data-src="<?php echo $path ?>assets/images/products/product2-3.jpg"
                                                src="<?php echo $path ?>assets/images/products/product2-3.jpg"
                                                alt="product" title="Product" width="625" height="808" />
                                        </div>
                                        <div class="item carousel-item" data-bs-slide-number="4">
                                            <img class="blur-up lazyload"
                                                data-src="<?php echo $path ?>assets/images/products/product2-4.jpg"
                                                src="<?php echo $path ?>assets/images/products/product2-4.jpg"
                                                alt="product" title="Product" width="625" height="808" />
                                        </div>
                                        <div class="item carousel-item" data-bs-slide-number="5">
                                            <img class="blur-up lazyload"
                                                data-src="<?php echo $path ?>assets/images/products/product2-5.jpg"
                                                src="<?php echo $path ?>assets/images/products/product2-5.jpg"
                                                alt="product" title="Product" width="625" height="808" />
                                        </div>
                                    </div>
                                    <!-- End Image Slide carousel items -->
                                    <!-- Thumbnail image -->
                                    <div class="model-thumbnail-img">
                                        <!-- Thumbnail slide -->
                                        <div class="carousel-indicators list-inline">
                                            <div class="list-inline-item active" id="carousel-selector-0"
                                                data-bs-slide-to="0" data-bs-target="#quickView">
                                                <img class="blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/images/products/product2.jpg"
                                                    src="<?php echo $path ?>assets/images/products/product2.jpg"
                                                    alt="product" title="Product" width="625" height="808" />
                                            </div>
                                            <div class="list-inline-item" id="carousel-selector-1" data-bs-slide-to="1"
                                                data-bs-target="#quickView">
                                                <img class="blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/images/products/product2-1.jpg"
                                                    src="<?php echo $path ?>assets/images/products/product2-1.jpg"
                                                    alt="product" title="Product" width="625" height="808" />
                                            </div>
                                            <div class="list-inline-item" id="carousel-selector-2" data-bs-slide-to="2"
                                                data-bs-target="#quickView">
                                                <img class="blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/images/products/product2-2.jpg"
                                                    src="<?php echo $path ?>assets/images/products/product2-2.jpg"
                                                    alt="product" title="Product" width="625" height="808" />
                                            </div>
                                            <div class="list-inline-item" id="carousel-selector-3" data-bs-slide-to="3"
                                                data-bs-target="#quickView">
                                                <img class="blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/images/products/product2-3.jpg"
                                                    src="<?php echo $path ?>assets/images/products/product2-3.jpg"
                                                    alt="product" title="Product" width="625" height="808" />
                                            </div>
                                            <div class="list-inline-item" id="carousel-selector-4" data-bs-slide-to="4"
                                                data-bs-target="#quickView">
                                                <img class="blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/images/products/product2-4.jpg"
                                                    src="<?php echo $path ?>assets/images/products/product2-4.jpg"
                                                    alt="product" title="Product" width="625" height="808" />
                                            </div>
                                            <div class="list-inline-item" id="carousel-selector-5" data-bs-slide-to="5"
                                                data-bs-target="#quickView">
                                                <img class="blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/images/products/product2-5.jpg"
                                                    src="<?php echo $path ?>assets/images/products/product2-5.jpg"
                                                    alt="product" title="Product" width="625" height="808" />
                                            </div>
                                        </div>
                                        <!-- End Thumbnail slide -->
                                        <!-- Carousel arrow button -->
                                        <a class="carousel-control-prev carousel-arrow rounded-1" href="#quickView"
                                            data-bs-target="#quickView" data-bs-slide="prev"><i
                                                class="icon anm anm-angle-left-r"></i></a>
                                        <a class="carousel-control-next carousel-arrow rounded-1" href="#quickView"
                                            data-bs-target="#quickView" data-bs-slide="next"><i
                                                class="icon anm anm-angle-right-r"></i></a>
                                        <!-- End Carousel arrow button -->
                                    </div>
                                    <!-- End Thumbnail image -->
                                </div>
                                <!-- End Model Thumbnail -->
                                <div class="text-center mt-3"><a href="product-layout1.html" class="text-link">View More
                                        Details</a></div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">

                                <div class="product-arrow d-flex justify-content-between">
                                    <h2 class="product-title">Product Quick View Popup</h2>
                                </div>
                                <div class="product-review d-flex mt-0 mb-2">
                                    <div class="rating"><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i></div>
                                    <div class="reviews ms-2"><a href="#">6 Reviews</a></div>
                                </div>
                                <div class="product-info">
                                    <p class="product-vendor">Vendor:<span class="text"><a href="#">Sparx</a></span></p>
                                    <p class="product-type">Product Type:<span class="text">Caps</span></p>
                                    <p class="product-sku">SKU:<span class="text">RF104456</span></p>
                                </div>
                                <div class="pro-stockLbl my-2">
                                    <span class="d-flex-center stockLbl instock d-none"><i
                                            class="icon anm anm-check-cil"></i><span> In stock</span></span>
                                    <span class="d-flex-center stockLbl preorder d-none"><i
                                            class="icon anm anm-clock-r"></i><span> Pre-order Now</span></span>
                                    <span class="d-flex-center stockLbl outstock d-none"><i
                                            class="icon anm anm-times-cil"></i> <span>Sold out</span></span>
                                    <span class="d-flex-center stockLbl lowstock" data-qty="15"><i
                                            class="icon anm anm-exclamation-cir"></i><span> Order now, Only <span
                                                class="items">10</span> left!</span></span>
                                </div>
                                <div class="product-price d-flex-center my-3">
                                    <span class="price old-price">$135.00</span><span class="price">$99.00</span>
                                </div>
                                <div class="sort-description">The standard chunk of Lorem Ipsum used since the 1500s is
                                    reproduced below for those interested.</div>
                                <form method="post" action="#" id="product_form--option" class="product-form">
                                    <div class="product-options d-flex-wrap">
                                        <div class="product-item swatches-image w-100 mb-3 swatch-0 option1"
                                            data-option-index="0">
                                            <label class="label d-flex align-items-center">Color:<span
                                                    class="slVariant ms-1 fw-bold">Blue</span></label>
                                            <ul class="variants-clr swatches d-flex-center pt-1 clearfix">
                                                <li class="swatch large radius available active"><img
                                                        src="<?php echo $path ?>assets/images/products/swatches/blue-red.jpg"
                                                        alt="image" width="70" height="70" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Blue" /></li>
                                                <li class="swatch large radius available"><img
                                                        src="<?php echo $path ?>assets/images/products/swatches/blue-red.jpg"
                                                        alt="image" width="70" height="70" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Black" /></li>
                                                <li class="swatch large radius available"><img
                                                        src="<?php echo $path ?>assets/images/products/swatches/blue-red.jpg"
                                                        alt="image" width="70" height="70" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Pink" /></li>
                                                <li class="swatch large radius available green"><span class="swatchLbl"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Green"></span></li>
                                                <li class="swatch large radius soldout yellow"><span class="swatchLbl"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Yellow"></span></li>
                                            </ul>
                                        </div>
                                        <div class="product-item swatches-size w-100 mb-3 swatch-1 option2"
                                            data-option-index="1">
                                            <label class="label d-flex align-items-center">Size:<span
                                                    class="slVariant ms-1 fw-bold">S</span></label>
                                            <ul class="variants-size size-swatches d-flex-center pt-1 clearfix">
                                                <li class="swatch large radius soldout"><span class="swatchLbl"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="XS">XS</span></li>
                                                <li class="swatch large radius available active"><span class="swatchLbl"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="S">S</span></li>
                                                <li class="swatch large radius available"><span class="swatchLbl"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="M">M</span></li>
                                                <li class="swatch large radius available"><span class="swatchLbl"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="L">L</span></li>
                                                <li class="swatch large radius available"><span class="swatchLbl"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="XL">XL</span></li>
                                            </ul>
                                        </div>
                                        <div class="product-action d-flex-wrap w-100 pt-1 mb-3 clearfix">
                                            <div class="quantity">
                                                <div class="qtyField rounded">
                                                    <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"
                                                            aria-hidden="true"></i></a>
                                                    <input type="text" name="quantity" value="1"
                                                        class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-l"
                                                            aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="addtocart ms-3 fl-1">
                                                <button type="submit" name="add"
                                                    class="btn product-cart-submit w-100"><span>Add to
                                                        cart</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="wishlist-btn d-flex-center">
                                    <a class="add-wishlist d-flex-center me-3" href="wishlist-style1.html"
                                        title="Add to Wishlist"><i class="icon anm anm-heart-l me-1"></i> <span>Add to
                                            Wishlist</span></a>
                                    <a class="add-compare d-flex-center" href="compare-style1.html"
                                        title="Add to Compare"><i class="icon anm anm-random-r me-2"></i> <span>Add to
                                            Compare</span></a>
                                </div>
                                <!-- Social Sharing -->
                                <div class="social-sharing share-icon d-flex-center mx-0 mt-3">
                                    <span class="sharing-lbl">Share :</span>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-facebook"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Facebook"><i
                                            class="icon anm anm-facebook-f"></i><span
                                            class="share-title d-none">Facebook</span></a>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-twitter"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Tweet on Twitter"><i
                                            class="icon anm anm-twitter"></i><span
                                            class="share-title d-none">Tweet</span></a>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-pinterest"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Pin on Pinterest"><i
                                            class="icon anm anm-pinterest-p"></i> <span class="share-title d-none">Pin
                                            it</span></a>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-linkedin"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Instagram"><i
                                            class="icon anm anm-linkedin-in"></i><span
                                            class="share-title d-none">Instagram</span></a>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-whatsapp"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Share on WhatsApp"><i
                                            class="icon anm anm-envelope-l"></i><span
                                            class="share-title d-none">WhatsApp</span></a>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-email"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Share by Email"><i
                                            class="icon anm anm-whatsapp"></i><span
                                            class="share-title d-none">Email</span></a>
                                </div>
                                <!-- End Social Sharing -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Product Quickview Modal-->

        <!--Product Promotion Popup-->
        <!-- <div class="product-notification mobile-hide" id="dismiss">
                <span class="close" aria-hidden="true"><i class="icon anm anm-times-r"></i></span>
                <div class="media d-flex align-items-center">
                    <a href="product-layout1.html" class="mediaImg"><img class="w-100 h-100 blur-up lazyload" src="<?php echo $path ?>assets/images/products/product2-120x170.jpg" data-src="<?php echo $path ?>assets/images/products/product2-120x170.jpg" alt="Cuff Beanie Cap" width="120" height="170" /></a>
                    <div class="media-body ms-3">
                        <p class="smtlt mb-0">Someone purchsed a</p>
                        <h5 class="pname"><a href="product-layout1.html">Cuff Beanie Cap</a></h5>
                        <p class="detail">12 Minutes ago from New York, USA</p>
                    </div>
                </div>
            </div> -->
        <!--End Product Promotion Popup-->

        <!--Newsletter Modal-->
        <!-- <div class="newsletter-modal style3 modal fade" id="newsletter_modal" tabindex="-1" aria-hidden="true">           
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content border-0">
                        <div class="modal-body p-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="newsletter-wrap d-flex flex-column">
                                <div class="newsltr-img d-none d-sm-none d-md-block">
                                    <img class="rounded-bottom-0 blur-up lazyload" data-src="<?php echo $path ?>assets/images/newsletter/newsletter-s6.webp" src="<?php echo $path ?>assets/images/newsletter/newsletter-s6.webp" alt="Join Our Newsletter Get 20% OFF First Order" title="Join Our Newsletter Get 20% OFF First Order" width="582" height="202" />
                                </div>
                                <div class="newsltr-text text-center">
                                    <div class="wraptext mw-100">
                                        <h2 class="title text-transform-none">Join Our Newsletter <br>Get 20% OFF First Order</h2>
                                        <p class="text">Stay Informed! Monthly Tips, Tracks and Discount.</p>
                                        <form action="#" method="post" class="mcNewsletter mb-3">                               
                                            <div class="input-group">
                                                <input type="email" class="form-control input-group-field newsletter-input" name="email" value="" placeholder="Enter your email address..." required />
                                                <button type="submit" class="input-group-btn btn btn-secondary newsletter-submit" name="commit">Subscribe</button>
                                            </div>
                                        </form>
                                        <ul class="list-inline social-icons d-inline-flex justify-content-center mb-3 w-100">
                                            <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="icon anm anm-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="icon anm anm-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Pinterest"><i class="icon anm anm-pinterest-p"></i></a></li>
                                            <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"><i class="icon anm anm-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i class="icon anm anm-instagram"></i></a></li>
                                            <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Youtube"><i class="icon anm anm-youtube"></i></a></li>
                                        </ul>
                                        <div class="customCheckbox checkboxlink clearfix justify-content-center">
                                            <input id="dontshow" name="newsPopup" type="checkbox" />
                                            <label for="dontshow" class="mb-0">Don't show this popup again</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        <!--End Newsletter Modal-->

        <script>
             $(document).ready(function() {
          $(".owl-carousel").owlCarousel({
            items: 1, // Number of items to display at once
            loop: true, // Infinite loop
            margin: 10, // Margin between items
            nav: false,//Show navigation buttons
            dots:true, // Show indicators 
            responsive: {
              0: {
                items: 10 // Number of items to display on small screens
              },
              768: {
                items: 10 // Number of items to display on medium screens
              },
              992: {
                items: 20 // Number of items to display on large screens
              }
            }
          });
        });

        </script>

        <!-- Including Jquery/Javascript -->
        <!-- Plugins JS -->
        <script src="<?php echo $path ?>assets/js/plugins.js"></script>
        <!-- Main JS -->
        <script src="<?php echo $path ?>assets/js/main.js"></script>
        <!--Newsletter Modal Cookies-->
        <script>
            $(window).ready(function () {
                setTimeout(function () {
                    $('#newsletter_modal').modal("show");
                }, 7000);
            });
        </script>
        <!--End Newsletter Modal Cookies-->

    </div>
    <!--End Page Wrapper-->
</body>

<!-- Mirrored from www.annimexweb.com/items/hema/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2023 19:25:20 GMT -->

</html>