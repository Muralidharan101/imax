<?php
    require_once 'datab.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from www.annimexweb.com/items/hema/index4-electronic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2023 19:27:26 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title Of Site -->
    <title>IMAX Trophies | Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $path ?>assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo $path ?>assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo $path ?>assets/css/style-min.css">
    <link rel="stylesheet" href="<?php echo $path ?>assets/css/responsive.css">
</head>

<body class="template-index index-demo4">
    <!--Page Wrapper-->
    <div class="page-wrapper">
            <!--Header-->
            <?php include('header.php'); ?>
        <!-- Body Container -->
        <div id="page-content" class="mb-0">
            <!--Home Slideshow-->
            <section class="slideshow slideshow-wrapper image-below-content-mobile">
                    <div class="home-slideshow slick-arrow-dots circle-dots">
                        <div class="slide">
                            <div class="slideshow-wrap">
                                <picture>
                                    <source media="(max-width:767px)" srcset="<?php echo $path ?>main/img/banner1.jpg" width="1100" height="800">
                                    <img class="blur-up lazyload" src="<?php echo $path ?>main/img/banner1.jpg" alt="slideshow" title="" width="1920" height="800"/>
                                </picture> 
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slideshow-wrap">
                                <picture>

                                    <source media="(max-width:767px)" srcset="<?php echo $path ?>main/img/banner2.jpg" width="1100" height="800">

                                    <img class="blur-up lazyload" src="<?php echo $path ?>main/img/banner2.jpg" alt="slideshow" title="" width="1920" height="800"/>
                                </picture>
                            </div>
                        </div>
                      
                    </div>
                </section>
            <!--End Home Slideshow-->

            <!-- <video controls muted autoplay loop>
                <source src="../assets/img/imax_trophies.mp4" type="video/mp4">
            </video> -->

            <div class="destination-section section pb-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="about-details px-50 py-5">
                                <h2 class="fs-4 mb-3">Discover the Excellence of Our Trophies.</h2>
                                <p>At IMAX Trophies, we take immense pride in the art of recognition. Our trophy
                                    collection represents the epitome of craftsmanship, designed to honor achievements,
                                    celebrate victories, and etch moments in time. With a wide array of options for
                                    every occasion, we invite you to explore the essence of our trophies:</p>

                                <!-- <p>From championship cups to elegant plaques, from sparkling crystal to timeless metal,
                                    our trophies are a testament to your achievements and the recognition they deserve.
                                    Join us in celebrating success and let our trophies tell the story of your journey.
                                    At IMAX Trophies, we are more than just a trophy store; we are the keepers of your
                                    proudest moments.</p> -->
                                    <a class="btn btn-secondary explore-btn" href="aboutUs.php">Read more <i
                                            class="icon anm anm-arw-right ms-2"></i></a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="about-images mt-4 mt-md-0">
                                <div class="row g-3">
                                        <video class="rounded-0 blur-up lazyload" controls muted autoplay loop width="700" height="827">
                                        <source src="../assets/img/imax_trophies.mp4" type="video/mp4">
                                        </video> 

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <section class="section collection-slider pt-0">
                <div class="container">
                    <div class="section-header style2 d-flex-center justify-content-sm-between">
                        <div class="section-header-left text-start">
                            <h2 class="text-dark">Shop By Category</h2>
                            <p>Shop our new arrivals from established category</p>
                        </div>
                        
                    </div>

                    <div class="collection-slider-3items slick-arrow-dots gp15 arwOut5 hov-arrow circle-arrow">
                        <div class="category-item zoomscal-hov overlay-content">
                            <a href="shop_trophy.php?type=trophy" class="category-link clr-none">
                                <div class="zoom-scal"><img class="blur-up lazyload" style="width:360px;height:360px"
                                data-src="<?php echo $path ?>img/index/trop1.png" src="<?php echo $path ?>img/index/trop1.png" alt="collection"
                                        title="" width="416" height="416" /></div>
                                <div class="details whiteText text-center p-0">
                                    <h4 class="category-title h2 text-uppercase mb-2 pb-1">Trophies</h4>
                                    <span class="category-btn btn-brd fw-500 text-uppercase">Shop Now</span>
                                </div>
                            </a>
                        </div>
                        <div class="category-item zoomscal-hov overlay-content">
                            <a href="shop_medal.php?type=medal" class="category-link clr-none">
                                <div class="zoom-scal"><img style="width:360px;height:360px" class="blur-up lazyload"
                                data-src="<?php echo $path ?>assets/img/shields/shield 33.jpg" src="<?php echo $path ?>assets/img/shields/shield 33.jpg" alt="collection" title=""
                                        width="416px" height="416px" /></div>
                                <div class="details whiteText text-center p-0">
                                    <h4 class="category-title h2 text-uppercase mb-2 pb-1">Medals</h4>
                                    <span class="category-btn btn-brd fw-500 text-uppercase">Shop Now</span>
                                </div>
                            </a>
                        </div>
                        <div class="category-item zoomscal-hov overlay-content">
                            <a href="shop_sheild.php?type=sheild" class="category-link clr-none">
                                <div class="zoom-scal"><img style="width:360px;height:360px" class="blur-up lazyload"
                                data-src="<?php echo $path ?>assets/img/shields/medal 2.jpg" src="<?php echo $path ?>assets/img/shields/medal 2.jpg" alt="collection" title=""
                                        width="416" height="416" /></div>
                                <div class="details whiteText text-center p-0">
                                    <h4 class="category-title h2 text-uppercase mb-2 pb-1">Sheilds</h4>
                                    <span class="category-btn btn-brd fw-500 text-uppercase">Shop Now</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--Products Slider-->
            <section class="section product-banner-slider">
                <div class="container">
                    <div class="section-header style2 d-flex-center justify-content-sm-between">
                        <div class="section-header-left text-start">
                            <h2 class='text-dark'>Our Best collections</h2>
                            <p>Shop our best sellers from established trophies</p>
                        </div>
                       
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 mb-4 mb-lg-0">
                            <div class="ctg-bnr-wrap one position-relative h-100">
                                <div class="ctg-image ratio ratio-1x1 h-100">
                                    <img class="blur-up lazyload"
                                        data-src="<?php echo $path ?>assets/img/slider/cup22.jpg"
                                        src="<?php echo $path ?>assets/img/slider/cup22.jpg" alt="collection"
                                        width="390" height="483" />
                                </div>
                                <div class="ctg-content text-white d-flex-justify-center flex-nowrap flex-column h-100">
                                    <h2 class="ctg-title text-white m-0"><span class="d-block">Trophies</span>
                                        Collections</h2>
                                    <p class="ctg-des mt-3 mb-4">Shop our weekly edit of what's new in online at IMAX
                                        collections.</p>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                            <div
                                class="grid-products product-slider-3items gp15 arwOut5 hov-arrow circle-arrow arrowlr-0">
                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="shop" class="product-img">
                                                <!-- Image -->
                                                <img class="primary blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/img/trophy/trophy 11.jpg"
                                                    src="<?php echo $path ?>assets/img/trophy/trophy 11.jpg"
                                                    alt="Product" title="Product" width="625" height="625" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/img//trophy/trophy 11.jpg"
                                                    src="<?php echo $path ?>assets/img/trophy/trophy 11.jpg"
                                                    alt="Product" title="Product" width="625" height="625" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->

                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-left">
                                            <!--Product Vendor-->
                                            <div class="product-vendor">Crikcet Collection</div>
                                            <!--End Product Vendor-->
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="shop">Cricket Stump Trophy</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                              <!-- Product Price -->
                                              <div class="product-price">
                                                <span class="price old-price">₹1099.00</span><span
                                                    class="price">₹999.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!-- End Product Price -->

                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="shop" class="product-img">
                                                <!-- Image -->
                                                <img class="primary blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/img/trophy/trophy 22.jpg"
                                                    src="<?php echo $path ?>assets/img/trophy/trophy 22.jpg"
                                                    alt="Product" title="Product" width="625" height="625" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/img/trophy/trophy 22.jpg"
                                                    src="<?php echo $path ?>assets/img/trophy/trophy 22.jpg"
                                                    alt="Product" title="Product" width="625" height="625" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!-- Product label -->
                                            <div class="product-labels radius"><span class="lbl on-sale">Sale</span>
                                            </div>
                                            <!-- End Product label -->

                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-left">
                                            <!--Product Vendor-->
                                            <div class="product-vendor">Cricket Collection</div>
                                            <!--End Product Vendor-->
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="shop">Double Pillar Edition</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price old-price">₹1099.00</span><span
                                                    class="price">₹999.00</span>
                                            </div>
                                            <!-- End Product Price -->

                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img">
                                                <!-- Image -->
                                                <img class="primary blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/img/trophy/trophy 33.jpg"
                                                    src="<?php echo $path ?>assets/img/trophy/trophy 33.jpg"
                                                    alt="Product" title="Product" width="625" height="625" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/img/trophy/trophy 33.jpg"
                                                    src="<?php echo $path ?>assets/img/trophy/trophy 33.jpg"
                                                    alt="Product" title="Product" width="625" height="625" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!-- Product label -->
                                            <div class="product-labels radius"><span class="lbl pr-label3">New</span>
                                            </div>
                                            <!-- End Product label -->

                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-left">
                                            <!--Product Vendor-->
                                            <div class="product-vendor">Cricket Collection</div>
                                            <!--End Product Vendor-->
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="shop">King Crown Cup</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price old-price">₹1099.00</span><span
                                                    class="price">₹999.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>

                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img">
                                                <!-- Image -->
                                                <img class="primary blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/img/trophy/trophy 44.jpg"
                                                    src="<?php echo $path ?>assets/img/trophy/trophy 44.jpg"
                                                    alt="Product" title="Product" width="625" height="625" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/img/trophy/trophy 44.jpg"
                                                    src="<?php echo $path ?>assets/img/trophy/trophy 44.jpg"
                                                    alt="Product" title="Product" width="625" height="625" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!-- Product label -->
                                            <div class="product-labels radius"><span class="lbl pr-label2">Hot</span>
                                            </div>
                                            <!-- End Product label -->

                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-left">
                                            <!--Product Vendor-->
                                            <div class="product-vendor">Kabaddi Collection</div>
                                            <!--End Product Vendor-->
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="shop">Hero Cup</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price old-price">₹1099.00</span><span
                                                    class="price">₹999.00</span>
                                            </div>
                                            <!-- End Product Price -->

                                           
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>

                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img">
                                                <!-- Image -->
                                                <img class="primary blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/img/trophy/trophy 55.jpg"
                                                    src="<?php echo $path ?>assets/img/trophy/trophy 55.jpg"
                                                    alt="Product" title="Product" width="625" height="625" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/img/trophy/trophy 55.jpg"
                                                    src="<?php echo $path ?>assets/img/trophy/trophy 55.jpg"
                                                    alt="Product" title="Product" width="625" height="625" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!-- Product label -->
                                            <div class="product-labels radius"><span class="lbl pr-label4">Sale</span>
                                            </div>
                                            <!-- End Product label -->

                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-left">
                                            <!--Product Vendor-->
                                            <div class="product-vendor">Trophy Collection</div>
                                            <!--End Product Vendor-->
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="shop">Crown Cup</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price old-price">₹1099.00</span><span
                                                    class="price">₹999.00</span>
                                            </div>
                                            <!-- End Product Price -->

                                        
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>

                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img">
                                                <!-- Image -->
                                                <img class="primary blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/img/trophy/trophy 66.jpg"
                                                    src="<?php echo $path ?>assets/img/trophy/trophy 66.jpg"
                                                    alt="Product" title="Product" width="625" height="625" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/img/trophy/trophy 66.jpg"
                                                    src="<?php echo $path ?>assets/img/trophy/trophy 66.jpg"
                                                    alt="Product" title="Product" width="625" height="625" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!-- Product label -->
                                            <div class="product-labels radius"><span class="lbl pr-label3">New</span>
                                            </div>
                                            <!-- End Product label -->

                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-left">
                                            <!--Product Vendor-->
                                            <div class="product-vendor">Cricket Collection</div>
                                            <!--End Product Vendor-->
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="shop">All Star Cup</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                             <div class="product-price">
                                                <span class="price old-price">₹1099.00</span><span
                                                    class="price">₹999.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Products Slider-->

            <!--Shop By Category-->
            <section class="section collection-slider pt-0">
                <div class="container">
                    <div class="section-header style2 d-flex-center justify-content-sm-between">
                        <div class="section-header-left text-start">
                            <h2 class="text-dark">Shop By Category</h2>
                            <p>Shop our new arrivals from established category</p>
                        </div>
                        
                    </div>

                    <div class="collection-slider-3items slick-arrow-dots gp15 arwOut5 hov-arrow circle-arrow">
                        <div class="category-item zoomscal-hov overlay-content">
                            <a href="shop_trophy.php?category=football" class="category-link clr-none">
                                <div class="zoom-scal"><img class="blur-up lazyload" style="width:416px;height:416px"
                                        data-src="<?php echo $path ?>assets/img/trophy/football.jpeg"
                                        src="<?php echo $path ?>assets/img/trophy/football.jpeg" alt="collection"
                                        title="" width="416" height="416" /></div>
                                <div class="details whiteText text-center p-0">
                                    <h4 class="category-title h2 text-uppercase mb-2 pb-1">Football</h4>
                                    <span class="category-btn btn-brd fw-500 text-uppercase">Shop Now</span>
                                </div>
                            </a>
                        </div>
                        <div class="category-item zoomscal-hov overlay-content">
                            <a href="shop_trophy.php?category=cricket" class="category-link clr-none">
                                <div class="zoom-scal"><img style="width:416px;height:416px" class="blur-up lazyload"
                                        data-src="<?php echo $path ?>assets/img/trophy/cricket.jpg"
                                        src="<?php echo $path ?>assets/img/trophy/cricket.jpg" alt="collection" title=""
                                        width="416px" height="416px" /></div>
                                <div class="details whiteText text-center p-0">
                                    <h4 class="category-title h2 text-uppercase mb-2 pb-1">Cricket</h4>
                                    <span class="category-btn btn-brd fw-500 text-uppercase">Shop Now</span>
                                </div>
                            </a>
                        </div>
                        <div class="category-item zoomscal-hov overlay-content">
                            <a href="shop_trophy.php?category=kabaddi" class="category-link clr-none">
                                <div class="zoom-scal"><img style="width:416px;height:416px" class="blur-up lazyload"
                                        data-src="<?php echo $path ?>assets/img/trophy/kabaddi.jpg"
                                        src="<?php echo $path ?>assets/img/trophy/kabaddi.jpg" alt="collection" title=""
                                        width="416" height="416" /></div>
                                <div class="details whiteText text-center p-0">
                                    <h4 class="category-title h2 text-uppercase mb-2 pb-1">Kabaddi</h4>
                                    <span class="category-btn btn-brd fw-500 text-uppercase">Shop Now</span>
                                </div>
                            </a>
                        </div>
                        <div class="category-item zoomscal-hov overlay-content">
                            <a href="shop_trophy.php?category=batmiton" class="category-link clr-none">
                                <div class="zoom-scal"><img style="width:416px;height:416px" class="blur-up lazyload"
                                        data-src="<?php echo $path ?>assets/img/trophy/badminton.jpg"
                                        src="<?php echo $path ?>assets/img/trophy/badminton.jpg" alt="collection"
                                        title="" width="416" height="416" /></div>
                                <div class="details whiteText text-center p-0">
                                    <h4 class="category-title h2 text-uppercase mb-2 pb-1">Badminton </h4>
                                    <span class="category-btn btn-brd fw-500 text-uppercase">Shop Now</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Shop By Category-->


            
            <!-- <section class="section collection-slider section-text section-clr">
                    <div class="container">
                        <div class="image-text-slider3items gp15 arwOut5 hov-arrow">
                            <div class="category-item zoomscal-hov">
                                <a href="shop_trophy.php?type=trophy" class="category-link clr-none">
                                    <div class="zoom-scal zoom-scal-nopb"><img class="blur-up lazyload" data-src="<?php echo $path ?>img/index/trop1.png" src="<?php echo $path ?>img/index/trop1.png" alt="collection" title="" width="220" height="260" /></div>
                                    <div class="details mt-4 text-left">
                                        <h4 class="category-title">Trophies</h4>
                                        <p class="dec">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical.</p>
                                        <span class="btn btn-secondary">Shop Now</span>
                                    </div>
                                </a>
                            </div>
                            <div class="category-item zoomscal-hov">
                                <a href="shop_medal.php?type=medal" class="category-link clr-none">
                                    <div class="zoom-scal zoom-scal-nopb"><img class="blur-up lazyload" data-src="<?php echo $path ?>assets/img/shields/shield 44.jpg" src="<?php echo $path ?>assets/img/shields/shield 44.jpg" alt="collection" title="" width="220" height="260" /></div>
                                    <div class="details mt-4 text-left">
                                        <h4 class="category-title">Medals</h4>
                                        <p class="dec">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical.</p>
                                        <span class="btn btn-secondary">Shop Now</span>
                                    </div>
                                </a>
                            </div>
                            <div class="category-item zoomscal-hov">
                                <a href="shop_sheild.php/type=sheild" class="category-link clr-none">
                                    <div class="zoom-scal zoom-scal-nopb"><img class="blur-up lazyload" data-src="<?php echo $path ?>assets/img/shields/medal 2.png" src="<?php echo $path ?>assets/img/shields/medal 2.png" alt="collection" title="" width="220" height="260" /></div>
                                    <div class="details mt-4 text-left">
                                        <h4 class="category-title">Sheilds</h4>
                                        <p class="dec">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical.</p>
                                        <span class="btn btn-secondary">Shop Now</span>
                                    </div>
                                </a>
                            </div>                           
                        </div>
                    </div>

                </section> -->

            

            <!--Products Slider-->

            <section class="section product-banner-slider pt-0">
                <div class="container">
                    <div class="section-header style2 d-flex-center justify-content-sm-between">
                        <div class="section-header-left text-start">
                            <h2 class="text-dark">New Arrivals of Trophies</h2>
                            <p>Shop our new arrivals from established brands</p>
                        </div>
                        <div class="section-header-right text-start text-sm-end mt-3 mt-sm-0">
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                            <div
                                class="grid-products product-slider-3items gp15 arwOut5 hov-arrow circle-arrow arrowlr-0">
                                <div class="item col-item">
                                    <div class="product-box">
                                        
                                        <div class="product-image">
                                           
                                            <a href="shop" class="product-img">
                                                
                                                <img class="primary blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/img/trophy/trophy 77.jpg"
                                                    src="<?php echo $path ?>assets/img/trophy/trophy 77.jpg"
                                                    alt="Product" title="Product" width="625" height="625" />
                                                
                                                <img class="hover blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/img/trophy/trophy 77.jpg"
                                                    src="<?php echo $path ?>assets/img/trophy/trophy 77.jpg"
                                                    alt="Product" title="Product" width="625" height="625" />

                                            </a>



                                        </div>
                                       
                                        <div class="product-details text-left">
                                            
                                            <div class="product-vendor">Cricket</div>
  
                                            <div class="product-name">
                                                <a href="shop">Cricket Grand Cup</a>
                                            </div>
                                        
                                            <div class="product-price">
                                                <span class="price old-price">₹1099.00</span><span
                                                    class="price">₹999.00</span>
                                            </div>
                                           
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="item col-item">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <a href="shop" class="product-img">
                                                <img class="primary blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/img/trophy/trophy 44.jpg"
                                                    src="<?php echo $path ?>assets/img/trophy/trophy 44.jpg"
                                                    alt="Product" title="Product" width="625" height="625" />
                                                <img class="hover blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/img/trophy/trophy 44.jpg"
                                                    src="<?php echo $path ?>assets/img/trophy/trophy 44.jpg"
                                                    alt="Product" title="Product" width="625" height="625" />
                                            </a>


                                        </div>
                                        <div class="product-details text-left">
                                            <div class="product-vendor">Trophy</div>
                                            <div class="product-name">
                                                <a href="shop">King Grand Cup</a>
                                            </div>
                                            <div class="product-price">
                                                <span class="price old-price">₹1099.00</span><span
                                                    class="price">₹999.00</span>
                                            </div>

                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="item col-item">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <a href="shop" class="product-img">
                                                <img class="primary blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/img/trophy/trophy 66.jpg"
                                                    src="<?php echo $path ?>assets/img/trophy/trophy 66.jpg"
                                                    alt="Product" title="Product" width="625" height="625" />
                                                <img class="hover blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/img/trophy/trophy 66.jpg"
                                                    src="<?php echo $path ?>assets/img/trophy/trophy 66.jpg"
                                                    alt="Product" title="Product" width="625" height="625" />
                                            </a>
                                            <div class="product-labels radius"><span class="lbl pr-label3">New</span>
                                            </div>

                                        </div>
                                        <div class="product-details text-left">
                                            <div class="product-vendor">Trophy</div>
                                            <div class="product-name">
                                                <a href="shop">All Star Cup</a>
                                            </div>
                                            <div class="product-price">
                                                <span class="price old-price">$298.00</span><span
                                                    class="price">$199.00</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="item col-item">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <a href="shop" class="product-img">
                                                <img class="primary blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/img/trophy/trophy 33.jpg"
                                                    src="<?php echo $path ?>assets/img/trophy/trophy 33.jpg"
                                                    alt="Product" title="Product" width="625" height="625" />
                                                <img class="hover blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/img/trophy/trophy 33.jpg"
                                                    src="<?php echo $path ?>assets/img/trophy/trophy 33.jpg"
                                                    alt="Product" title="Product" width="625" height="625" />
                                            </a>
                                            <div class="product-labels radius"><span class="lbl pr-label3">Sale</span>
                                            </div>

                                        </div>
                                        <div class="product-details text-left">
                                            <div class="product-vendor">Trophy</div>
                                            <div class="product-name">
                                                <a href="shop">King Crown Cup</a>
                                            </div>
                                            <div class="product-price">
                                                <span class="price">$199.00</span>
                                            </div>

                                        
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 mt-4 mt-lg-0">
                            <div class="ctg-bnr-wrap two position-relative h-100">
                                <div class="ctg-image ratio ratio-1x1 h-100">
                                    <img class="blur-up lazyload"
                                        data-src="<?php echo $path ?>assets/img/slider/cup44.jpg"
                                        src="<?php echo $path ?>assets/img/slider/cup44.jpg" alt="collection"
                                        width="309" height="483" />
                                </div>
                                <div class="ctg-content text-white d-flex-justify-center flex-nowrap flex-column h-100">
                                    <h2 class="ctg-title text-white m-0"><span class="d-block">Best Offers</span> </h2>
                                    <p class="saleText text-uppercase mb-0">30% Off</p>
                                    <p class="ctg-des mt-1 mb-4">On all new arrival product</p>
                                    <a class="btn btn-secondary explore-btn" href="shop">Shop Now <i
                                            class="icon anm anm-arw-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="section product-banner-slider pt-0">
                <div class="container">
                    <div class="section-header style2 d-flex-center justify-content-sm-between">
                        <div class="section-header-left text-start">
                            <h2 class="text-dark">New Arrivals of medals</h2>
                            <p>Shop our new arrivals from established brands</p>
                        </div>

                    </div>
                    
                    <div class="row">
                     
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 mb-4 mb-lg-0">
                            <div class="ctg-bnr-wrap one position-relative h-100">
                                <div class="ctg-image ratio ratio-1x1 h-100">
                                    <img class="blur-up lazyload"
                                        data-src="<?php echo $path ?>assets/img/slider/cup44.jpg"
                                        src="<?php echo $path ?>assets/img/slider/cup44.jpg" alt="collection"
                                        width="390" height="483" />
                                </div>
                                <div class="ctg-content text-white d-flex-justify-center flex-nowrap flex-column h-100">
                                    <h2 class="ctg-title text-white m-0">Medal collections</h2>
                                    <p class="ctg-des mt-3 mb-4">Shop our weekly edit of what's new in online at IMAX
                                        collections.</p>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                            <div
                                class="grid-products product-slider-3items gp15 arwOut5 hov-arrow circle-arrow arrowlr-0">
                               

                                <div class="item col-item">

<div class="product-box">
    <!-- Start Product Image -->
    <div class="product-image">
        <!-- Start Product Image -->
        <a href="shop" class="product-img">
            <!-- Image -->
            <img style ="height:325px" class="primary blur-up lazyload"
                data-src="<?php echo $path ?>assets/img/shields/medal 1.jpg"
                src="<?php echo $path ?>assets/img/shields/medal 1.jpg"
                alt="Product" title="Product" width="625" height="625" />
            <!-- End Image -->
            <!-- Hover Image -->
            <img style ="height:325px" class="hover blur-up lazyload"
                data-src="<?php echo $path ?>assets/img/shields/medal 1.jpg"
                src="<?php echo $path ?>assets/img/shields/medal 1.jpg"
                alt="Product" title="Product" width="625" height="625" />
            <!-- End Hover Image -->
        </a>
        <!-- End Product Image -->


    </div>
    <!-- End Product Image -->
    <!-- Start Product Details -->
    <div class="product-details text-left">
        <!--Product Vendor-->
        <div class="product-vendor">Horse Riding</div>
        <!--End Product Vendor-->
        <!-- Product Name -->
        <div class="product-name">
            <a href="shop">Horse Show Medal</a>
        </div>
        <!-- End Product Name -->
        <!-- Product Price -->
        <div class="product-price">
            <span class="price old-price">₹1099.00</span><span
                class="price">₹999.00</span>
        </div>
        <!-- End Product Price -->

        <!-- Product Button -->
      
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
        <a href="shop" class="product-img">
            <!-- Image -->
            <img style ="height:325px" class="primary blur-up lazyload"
                data-src="<?php echo $path ?>assets/img/shields/medal 3.jpg"
                src="<?php echo $path ?>assets/img/shields/medal 3.jpg"
                alt="Product" title="Product" width="625" height="625" />
            <!-- End Image -->
            <!-- Hover Image -->
            <img style ="height:325px" class="hover blur-up lazyload"
                data-src="<?php echo $path ?>assets/img/shields/medal 3.jpg"
                src="<?php echo $path ?>assets/img/shields/medal 3.jpg"
                alt="Product" title="Product" width="625" height="625" />
            <!-- End Hover Image -->
        </a>
        <!-- End Product Image -->


    </div>
    <!-- End Product Image -->
    <!-- Start Product Details -->
    <div class="product-details text-left">
        <!--Product Vendor-->
        <div class="product-vendor">General</div>
        <!--End Product Vendor-->
        <!-- Product Name -->
        <div class="product-name">
            <a href="shop">Cusatomized Medal</a>
        </div>
        <!-- End Product Name -->
        <!-- Product Price -->
        <div class="product-price">
            <span class="price old-price">₹1099.00</span><span
                class="price">₹999.00</span>
        </div>
        <!-- End Product Price -->

        <!-- Product Button -->
       
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
        <a href="shop" class="product-img">
            <!-- Image -->
            <img style ="height:325px" class="primary blur-up lazyload"
                data-src="<?php echo $path ?>assets/img/shields/medal 4.jpg"
                src="<?php echo $path ?>assets/img/shields/medal 4.jpg"
                alt="Product" title="Product" width="625" height="725" />
            <!-- End Image -->
            <!-- Hover Image -->
            <img style ="height:325px" class="hover blur-up lazyload"
                data-src="<?php echo $path ?>assets/img/shields/medal 4.jpg"
                src="<?php echo $path ?>assets/img/shields/medal 4.jpg"
                alt="Product" title="Product" width="625" height="725" />
            <!-- End Hover Image -->
        </a>
        <!-- End Product Image -->


    </div>
    <!-- End Product Image -->
    <!-- Start Product Details -->
    <div class="product-details text-left">
        <!--Product Vendor-->
        <div class="product-vendor">General</div>
        <!--End Product Vendor-->
        <!-- Product Name -->
        <div class="product-name">
            <a href="shop">Marathon Medal</a>
        </div>
        <!-- End Product Name -->
        <!-- Product Price -->
        <div class="product-price">
            <span class="price old-price">₹1099.00</span><span
                class="price">₹999.00</span>
        </div>
        <!-- End Product Price -->

        <!-- Product Button -->
        
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
        <a href="shop" class="product-img">
            <!-- Image -->
            <img style ="height:325px" class="primary blur-up lazyload"
                data-src="<?php echo $path ?>assets/img/shields/medal 2.jpg"
                src="<?php echo $path ?>assets/img/shields/medal 2.jpg"
                alt="Product" title="Product" width="625" height="725" />
            <!-- End Image -->
            <!-- Hover Image -->
            <img style ="height:325px" class="hover blur-up lazyload"
                data-src="<?php echo $path ?>assets/img/shields/medal 2.jpg"
                src="<?php echo $path ?>assets/img/shields/medal 2.jpg"
                alt="Product" title="Product" width="625" height="725" />
            <!-- End Hover Image -->
        </a>
        <!-- End Product Image -->


    </div>
    <!-- End Product Image -->
    <!-- Start Product Details -->
    <div class="product-details text-left">
        <!--Product Vendor-->
        <div class="product-vendor">General</div>
        <!--End Product Vendor-->
        <!-- Product Name -->
        <div class="product-name">
            <a href="shop">Marathon Medal</a>
        </div>
        <!-- End Product Name -->
        <!-- Product Price -->
        <div class="product-price">
            <span class="price old-price">₹1099.00</span><span
                class="price">₹999.00</span>
        </div>
        <!-- End Product Price -->

        <!-- Product Button -->
       
        <!-- End Product Button -->
    </div>
    <!-- End product details -->
</div>
</div>

                            </div>
                        </div>


                        <!-- <div class="col-12 col-sm-12 col-md-12 col-lg-3 mt-4 mt-lg-0">

                            <div class="ctg-bnr-wrap two position-relative h-100">
                                <div class="ctg-image ratio ratio-1x1 h-100">
                                    <img class="blur-up lazyload"
                                        data-src="<?php echo $path ?>assets/img/slider/cup44.jpg"
                                        src="<?php echo $path ?>assets/img/slider/cup44.jpg" alt="collection"
                                        width="309" height="483" />
                                </div>
                                <div class="ctg-content text-white d-flex-justify-center flex-nowrap flex-column h-100">
                                    <h2 class="ctg-title text-white m-0"><span class="d-block">Best Offers</span> </h2>
                                    <p class="saleText text-uppercase mb-0">30% Off</p>
                                    <p class="ctg-des mt-1 mb-4">On all new arrival product</p>
                                    <a class="btn btn-secondary explore-btn" href="shop">Shop Now <i
                                            class="icon anm anm-arw-right ms-2"></i></a>
                                </div>
                            </div>

                        </div> -->
      </div>
                </div>
            </section>
            
            <section class="section product-banner-slider pt-0">
                <div class="container">
                    <div class="section-header style2 d-flex-center justify-content-sm-between">
                        <div class="section-header-left text-start">
                            <h2 class="text-dark">New Arrivals of sheilds</h2>
                            <p>Shop our new arrivals from established brands</p>
                        </div>
                        <div class="section-header-right text-start text-sm-end mt-3 mt-sm-0">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                            <div
                                class="grid-products product-slider-3items gp15 arwOut5 hov-arrow circle-arrow arrowlr-0">
                                <div class="item col-item">

<div class="product-box">
    <!-- Start Product Image -->
    <div class="product-image">
        <!-- Start Product Image -->
        <a href="shop" class="product-img">
            <!-- Image -->
            <img class="primary blur-up lazyload"
                data-src="<?php echo $path ?>assets/img/shields/shield 11.jpg"
                src="<?php echo $path ?>assets/img/shields/shield 11.jpg"
                alt="Product" title="Product" width="625" height="625" />
            <!-- End Image -->
            <!-- Hover Image -->
            <img class="hover blur-up lazyload"
                data-src="<?php echo $path ?>assets/img/shields/shield 11.jpg"
                src="<?php echo $path ?>assets/img/shields/shield 11.jpg"
                alt="Product" title="Product" width="625" height="625" />
            <!-- End Hover Image -->
        </a>
        <!-- End Product Image -->


    </div>
    <!-- End Product Image -->
    <!-- Start Product Details -->
    <div class="product-details text-left">
        <!--Product Vendor-->
        <div class="product-vendor">General</div>
        <!--End Product Vendor-->
        <!-- Product Name -->
        <div class="product-name">
            <a href="shop">Grand Shield</a>
        </div>
        <!-- End Product Name -->
        <!-- Product Price -->
        <div class="product-price">
            <span class="price old-price">₹1099.00</span><span
                class="price">₹999.00</span>
        </div>
        <!-- End Product Price -->

        <!-- Product Button -->
      
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
        <a href="shop" class="product-img">
            <!-- Image -->
            <img class="primary blur-up lazyload"
                data-src="<?php echo $path ?>assets/img/shields/shield 22.jpg"
                src="<?php echo $path ?>assets/img/shields/shield 22.jpg"
                alt="Product" title="Product" width="625" height="625" />
            <!-- End Image -->
            <!-- Hover Image -->
            <img class="hover blur-up lazyload"
                data-src="<?php echo $path ?>assets/img/shields/shield 22.jpg"
                src="<?php echo $path ?>assets/img/shields/shield 22.jpg"
                alt="Product" title="Product" width="625" height="625" />
            <!-- End Hover Image -->
        </a>
        <!-- End Product Image -->


    </div>
    <!-- End Product Image -->
    <!-- Start Product Details -->
    <div class="product-details text-left">
        <!--Product Vendor-->
        <div class="product-vendor">General</div>
        <!--End Product Vendor-->
        <!-- Product Name -->
        <div class="product-name">
            <a href="shop">Special Shield</a>
        </div>
        <!-- End Product Name -->
        <!-- Product Price -->
        <div class="product-price">
            <span class="price old-price">₹1099.00</span><span
                class="price">₹999.00</span>
        </div>
        <!-- End Product Price -->

        <!-- Product Button -->
      
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
        <a href="shop" class="product-img">
            <!-- Image -->
            <img class="primary blur-up lazyload"
                data-src="<?php echo $path ?>assets/img/shields/shield 33.jpg"
                src="<?php echo $path ?>assets/img/shields/shield 33.jpg"
                alt="Product" title="Product" width="625" height="625" />
            <!-- End Image -->
            <!-- Hover Image -->
            <img class="hover blur-up lazyload"
                data-src="<?php echo $path ?>assets/img/shields/shield 33.jpg"
                src="<?php echo $path ?>assets/img/shields/shield 33.jpg"
                alt="Product" title="Product" width="625" height="625" />
            <!-- End Hover Image -->
        </a>
        <!-- End Product Image -->


    </div>
    <!-- End Product Image -->
    <!-- Start Product Details -->
    <div class="product-details text-left">
        <!--Product Vendor-->
        <div class="product-vendor">General</div>
        <!--End Product Vendor-->
        <!-- Product Name -->
        <div class="product-name">
            <a href="shop">Grand Shield</a>
        </div>
        <!-- End Product Name -->
        <!-- Product Price -->
        <div class="product-price">
            <span class="price old-price">₹1099.00</span><span
                class="price">₹999.00</span>
        </div>
        <!-- End Product Price -->

        <!-- Product Button -->
    
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
        <a href="shop" class="product-img">
            <!-- Image -->
            <img class="primary blur-up lazyload"
                data-src="<?php echo $path ?>assets/img/shields/shield40.jpg"
                src="<?php echo $path ?>assets/img/shields/shield40.jpg"
                alt="Product" title="Product" width="625" height="625" />
            <!-- End Image -->
            <!-- Hover Image -->
            <img class="hover blur-up lazyload"
                data-src="<?php echo $path ?>assets/img/shields/shield40.jpg"
                src="<?php echo $path ?>assets/img/shields/shield40.jpg"
                alt="Product" title="Product" width="625" height="625" />
            <!-- End Hover Image -->
        </a>
        <!-- End Product Image -->


    </div>
    <!-- End Product Image -->
    <!-- Start Product Details -->
    <div class="product-details text-left">
        <!--Product Vendor-->
        <div class="product-vendor">General</div>
        <!--End Product Vendor-->
        <!-- Product Name -->
        <div class="product-name">
            <a href="shop">General Event Shield</a>
        </div>
        <!-- End Product Name -->
        <!-- Product Price -->
        <div class="product-price">
            <span class="price old-price">₹1099.00</span><span
                class="price">₹999.00</span>
        </div>
        <!-- End Product Price -->

        <!-- Product Button -->
        
        <!-- End Product Button -->
    </div>
    <!-- End product details -->
</div>
</div>


                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 mt-4 mt-lg-0">
                            <div class="ctg-bnr-wrap two position-relative h-100">
                                <div class="ctg-image ratio ratio-1x1 h-100">
                                    <img class="blur-up lazyload"
                                        data-src="<?php echo $path ?>assets/img/slider/cup44.jpg"
                                        src="<?php echo $path ?>assets/img/slider/cup44.jpg" alt="collection"
                                        width="309" height="483" />
                                </div>
                                <div class="ctg-content text-white d-flex-justify-center flex-nowrap flex-column h-100">
                                    <h2 class="ctg-title text-white m-0"><span class="d-block">Best Offers</span> </h2>
                                    <p class="saleText text-uppercase mb-0">30% Off</p>
                                    <p class="ctg-des mt-1 mb-4">On all new arrival product</p>
                                    <a class="btn btn-secondary explore-btn" href="shop">Shop Now <i
                                            class="icon anm anm-arw-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            

            <!--End Products Slider-->

            <!--Collection banner
            <section class="section collection-banners two-one-bnr py-0">
                <div class="container">
                    <div class="collection-banner-grid two-bnr">
                        <div class="row sp-row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 collection-banner-item">
                                <div class="collection-item sp-col">

                                    <div class="img">
                                        <iframe width="560" height="455"
                                            src="https://www.youtube.com/embed/1sLGPZcgrlc?si=gUpjPnPwAnv8DNae"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>


                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 collection-banner-item">
                                <div class="collection-item sp-col">
                                    <div class="img">
                                        <iframe width="560" height="455"
                                            src="https://www.youtube.com/embed/jNwKXGWtEbA?si=M0JfzrP8y2YyUiDe"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            End Collection banner-->

            <!--Testimonial Section-->
            <section class="section testimonial-slider style1 pb-0">
                <div class="container">
                    <div class="section-header">
                        <p class="mb-2 mt-0">Happy Customer</p>
                        <h2 class="text-dark">Reviews</h2>
                    </div>

                    <div class="testimonial-wraper">
                        <!--Testimonial Slider Items-->
                        <div class="testimonial-slider-3items gp15 slick-arrow-dots arwOut5">
                            <div class="testimonial-slide rounded-3">
                                <div class="testimonial-content text-center">
                                    <div class="quote-icon mb-3 mb-lg-4"><img class="blur-up lazyload mx-auto"
                                            data-src="<?php echo $path ?>assets/images/icons/demo1-quote-icon.png"
                                            src="<?php echo $path ?>assets/images/icons/demo1-quote-icon.png" alt="icon"
                                            width="40" height="40" /></div>
                                    <div class="content">
                                        <div class="text mb-2">
                                            <p>Fantastic customer service! From helping us choose the perfect trophies
                                                to accommodating our tight deadlines , the staff at this trophy shop
                                                wend above and beyond. The personalized service made the entire process
                                                enjoyable.
                                            </p>
                                        </div>
                                        <div class="product-review my-3">
                                            <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                                class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                                class="icon anm anm-star"></i>
                                            <span class="caption hidden ms-1">24 Reviews</span>
                                        </div>
                                    </div>
                                    <div class="auhimg d-flex-justify-center text-left">

                                        <div class="auhtext ms-3">
                                            <h5 class="authour mb-1 text-dark">Ankur yadav yadav </h5>
                                            <p class="text-muted">Google</p>

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
                                            <p>Great experience Repeat customer for life! After the amazing experience
                                                with this trophy shop, we're definitely coming back for all our future
                                                trophy and award needs. Highly recommended for anyone seeking quality
                                                and professionalism

                                            </p>
                                        </div>
                                        <div class="product-review my-3">
                                            <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                                class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                                class="icon anm anm-star"></i>
                                            <span class="caption hidden ms-1">15 Reviews</span>
                                        </div>
                                    </div>
                                    <div class="auhimg d-flex-justify-center text-left">

                                        <div class="auhtext ms-3">
                                            <h5 class="authour mb-1 text-dark">Sumit Kharub
                                            </h5>
                                            <p class="text-muted">Google</p>
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
                                            <p>Exceptional craftsmanship! The trophies we ordered for our company awards
                                                ceremony were beautifully designed and expertly engraved. The attention
                                                to detail truly sets this trophy shop apart.
                                            </p>
                                        </div>
                                        <div class="product-review my-3">
                                            <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                                class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                                class="icon anm anm-star"></i>
                                            <span class="caption hidden ms-1">17 Reviews</span>
                                        </div>
                                    </div>
                                    <div class="auhimg d-flex-justify-center text-left">

                                        <div class="auhtext ms-3">
                                            <h5 class="authour mb-1 text-dark">Manas bagga</h5>
                                            <p class="text-muted">Google</p>
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
                                            <p>Sir your products are very attractive and effective and your quality are
                                                very impresive....I simply suggest to everyone pls don't go any other
                                                place buy from here quality products and very nice customer
                                                service.
                                                Highly recommend.
                                            </p>
                                        </div>
                                        <div class="product-review my-3">
                                            <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                                class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                                class="icon anm anm-star"></i>
                                            <span class="caption hidden ms-1">29 Reviews</span>
                                        </div>
                                    </div>
                                    <div class="auhimg d-flex-justify-center text-left">

                                        <div class="auhtext ms-3">
                                            <h5 class="authour mb-1 text-dark">Junaid Saifi
                                            </h5>
                                            <p class="text-muted">Google</p>
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
            <br><br>

            <hr class="m-0">



        </div>
        <!-- End Body Container -->
        <?php include "footer.php"; ?>
        <!--Footer-->

        <!--End Footer-->

        <!--Scoll Top-->
        <div id="site-scroll" class="rounded-circle"><i class="icon anm anm-angle-up-r"></i></div>
        <!--End Scoll Top-->

        <!--MiniCart Drawer-->
        <div id="minicart-drawer" class="minicart-right-drawer offcanvas offcanvas-end" tabindex="-1">
            <!--MiniCart Empty-->
            <div id="cartEmpty" class="cartEmpty d-flex-justify-center flex-column text-center p-3 text-muted d-none">
                <div class="minicart-header d-flex-center justify-content-between w-100">
                    <h4 class="fs-6 body-font">Your cart (0 Items)</h4>
                    <button class="close-cart border-0" data-bs-dismiss="offcanvas" aria-label="Close"><i
                            class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Close"></i></button>
                </div>
                <div class="cartEmpty-content mt-4">
                    <i class="icon anm anm-basket-l fs-1 text-muted"></i>
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
                    <h4 class="fs-6 body-font">Your cart (2 Items)</h4>
                </div>
                <div class="minicart-content">
                    <ul class="m-0 clearfix">
                        <li class="item d-flex justify-content-center align-items-center">
                            <a class="product-image" href="product-layout1.html">
                                <img class="blur-up lazyload"
                                    data-src="<?php echo $path ?>assets/images/products/cart-electronic-product-img1.jpg"
                                    src="<?php echo $path ?>assets/images/products/cart-electronic-product-img1.jpg"
                                    alt="product" title="Product" width="120" height="170" />
                            </a>
                            <div class="product-details">
                                <a class="product-title" href="product-layout1.html">IdeaPad Intel</a>
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
                                <a href="#" class="edit-i remove"><i class="icon anm anm-pencil-ar"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                <a href="#" class="remove"><i class="icon anm anm-times-r" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Remove"></i></a>
                            </div>
                        </li>
                        <li class="item d-flex justify-content-center align-items-center">
                            <a class="product-image" href="product-layout1.html">
                                <img class="blur-up lazyload"
                                    data-src="<?php echo $path ?>assets/images/products/cart-electronic-product-img2.jpg"
                                    src="<?php echo $path ?>assets/images/products/cart-electronic-product-img2.jpg"
                                    alt="product" title="Product" width="120" height="170" />
                            </a>
                            <div class="product-details">
                                <a class="product-title" href="product-layout1.html">Extensa Laptop</a>
                                <div class="variant-cart my-2">Yellow / M</div>
                                <div class="priceRow">
                                    <div class="product-price">
                                        <span class="price old-price">₹1099.00</span><span class="price">₹999.00</span>
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
                    <div class="shipinfo">
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>
                        <div class="freeShipMsg"><i class="icon anm anm-truck-l fs-6 me-2 align-middle"></i>Only <span
                                class="money" data-currency-usd="$199.00" data-currency="USD">$199.00</span> away from
                            <b>Free Shipping</b></div>
                        <div class="freeShipMsg d-none"><i
                                class="icon anm anm-truck-l fs-6 me-2 align-middle"></i>Congrats! You are eligible for
                            <b>Free Shipping</b></div>
                    </div>
                    <div class="subtotal clearfix my-3">
                        <div class="totalInfo clearfix mb-1 d-none"><span>Shipping:</span><span
                                class="item product-price">$10.00</span></div>
                        <div class="totalInfo clearfix mb-1 d-none"><span>Tax:</span><span
                                class="item product-price">$0.00</span></div>
                        <div class="totalInfo clearfix"><span>Total:</span><span
                                class="item product-price">$163.00</span></div>

                    </div>
                    <div class="agree-check customCheckbox">
                        <input id="prTearm" name="tearm" type="checkbox" value="tearm" required />
                        <label for="prTearm"> I agree with the </label><a href="#" class="ms-1 text-link">Terms &amp;
                            conditions</a>
                    </div>
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
                                        data-src="<?php echo $path ?>assets/images/products/electronic-product1.jpg"
                                        src="<?php echo $path ?>assets/images/products/electronic-product1.jpg"
                                        alt="Product" title="Product" width="625" height="625" /></a>
                                <div class="col-8 product-details">
                                    <div class="product-variant ps-3">
                                        <div class="variant-cart mb-1">Electronic</div>
                                        <a class="product-title" href="product-layout1.html">Digital SLR Camera</a>
                                        <div class="priceRow mt-2 mb-3">
                                            <div class="product-price m-0"><span class="old-price">₹1099.00</span><span
                                                    class="price">₹999.00</span></div>
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
                                <button type="submit" name="add"
                                    class="btn btn-primary product-cart-submit me-2"><span>Add to cart</span></button>
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
                                            data-src="<?php echo $path ?>assets/images/products/electronic-product1.jpg"
                                            src="<?php echo $path ?>assets/images/products/electronic-product1.jpg"
                                            alt="Product" title="Product" width="625" height="625" /></a>
                                    <!-- End Product Image -->
                                </div>
                                <div class="col-md-6 mt-3 mt-md-0">
                                    <!-- Product Info -->
                                    <div class="product-details">
                                        <div class="variant-cart mb-1">Electronic</div>
                                        <a class="product-title" href="product-layout1.html">Digital SLR Camera</a>
                                        <p class="product-clr my-2 text-muted">Black / XL</p>
                                    </div>
                                    <div class="addcart-total rounded-5">
                                        <p class="product-items mb-2">There are <strong>1</strong> items in your cart
                                        </p>
                                        <p class="d-flex-justify-center">Total: <span class="price">₹1099.00</span></p>
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
                                                data-src="<?php echo $path ?>assets/images/products/electronic-product1.jpg"
                                                src="<?php echo $path ?>assets/images/products/electronic-product1.jpg"
                                                alt="product" title="Product" width="625" height="625" />
                                        </div>
                                        <div class="item carousel-item" data-bs-slide-number="1">
                                            <img class="blur-up lazyload"
                                                data-src="<?php echo $path ?>assets/images/products/electronic-product2.jpg"
                                                src="<?php echo $path ?>assets/images/products/electronic-product2.jpg"
                                                alt="product" title="Product" width="625" height="625" />
                                        </div>
                                        <div class="item carousel-item" data-bs-slide-number="2">
                                            <img class="blur-up lazyload"
                                                data-src="<?php echo $path ?>assets/images/products/electronic-product3.jpg"
                                                src="<?php echo $path ?>assets/images/products/electronic-product3.jpg"
                                                alt="product" title="Product" width="625" height="625" />
                                        </div>
                                        <div class="item carousel-item" data-bs-slide-number="3">
                                            <img class="blur-up lazyload"
                                                data-src="<?php echo $path ?>assets/images/products/electronic-product4.jpg"
                                                src="<?php echo $path ?>assets/images/products/electronic-product4.jpg"
                                                alt="product" title="Product" width="625" height="625" />
                                        </div>
                                        <div class="item carousel-item" data-bs-slide-number="4">
                                            <img class="blur-up lazyload"
                                                data-src="<?php echo $path ?>assets/images/products/electronic-product5.jpg"
                                                src="<?php echo $path ?>assets/images/products/electronic-product5.jpg"
                                                alt="product" title="Product" width="625" height="625" />
                                        </div>
                                        <div class="item carousel-item" data-bs-slide-number="5">
                                            <img class="blur-up lazyload"
                                                data-src="<?php echo $path ?>assets/images/products/electronic-product6.jpg"
                                                src="<?php echo $path ?>assets/images/products/electronic-product6.jpg"
                                                alt="product" title="Product" width="625" height="625" />
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
                                                    data-src="<?php echo $path ?>assets/images/products/electronic-product1.jpg"
                                                    src="<?php echo $path ?>assets/images/products/electronic-product1.jpg"
                                                    alt="product" title="Product" width="625" height="625" />
                                            </div>
                                            <div class="list-inline-item" id="carousel-selector-1" data-bs-slide-to="1"
                                                data-bs-target="#quickView">
                                                <img class="blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/images/products/electronic-product2.jpg"
                                                    src="<?php echo $path ?>assets/images/products/electronic-product2.jpg"
                                                    alt="product" title="Product" width="625" height="625" />
                                            </div>
                                            <div class="list-inline-item" id="carousel-selector-2" data-bs-slide-to="2"
                                                data-bs-target="#quickView">
                                                <img class="blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/images/products/electronic-product3.jpg"
                                                    src="<?php echo $path ?>assets/images/products/electronic-product3.jpg"
                                                    alt="product" title="Product" width="625" height="625" />
                                            </div>
                                            <div class="list-inline-item" id="carousel-selector-3" data-bs-slide-to="3"
                                                data-bs-target="#quickView">
                                                <img class="blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/images/products/electronic-product4.jpg"
                                                    src="<?php echo $path ?>assets/images/products/electronic-product4.jpg"
                                                    alt="product" title="Product" width="625" height="625" />
                                            </div>
                                            <div class="list-inline-item" id="carousel-selector-4" data-bs-slide-to="4"
                                                data-bs-target="#quickView">
                                                <img class="blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/images/products/electronic-product5.jpg"
                                                    src="<?php echo $path ?>assets/images/products/electronic-product5.jpg"
                                                    alt="product" title="Product" width="625" height="625" />
                                            </div>
                                            <div class="list-inline-item" id="carousel-selector-5" data-bs-slide-to="5"
                                                data-bs-target="#quickView">
                                                <img class="blur-up lazyload"
                                                    data-src="<?php echo $path ?>assets/images/products/electronic-product6.jpg"
                                                    src="<?php echo $path ?>assets/images/products/electronic-product6.jpg"
                                                    alt="product" title="Product" width="625" height="625" />
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
                                <div class="product-subtitle">Electronic</div>
                                <div class="product-arrow d-flex justify-content-between">
                                    <h2 class="product-title">Product Quick View Popup</h2>
                                    <div class="arrows d-flex">
                                        <a class="pro-next" href="product-layout2.html" title="Previous"><i
                                                class="icon anm anm-angle-left-l"></i></a>
                                        <a class="pro-prev" href="product-layout3.html" title="Next"><i
                                                class="icon anm anm-angle-right-l"></i></a>
                                    </div>
                                </div>
                                <div class="product-review d-flex mt-0 mb-2">
                                    <div class="rating"><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i></div>
                                    <div class="reviews ms-2"><a href="#">6 Reviews</a></div>
                                </div>
                                <div class="product-info">
                                    <p class="product-vendor">Vendor:<span class="text"><a
                                                href="#">Electronic</a></span></p>
                                    <p class="product-type">Product Type:<span class="text">Camera</span></p>
                                    <p class="product-sku">SKU:<span class="text">RF104</span></p>
                                </div>
                                <div class="pro-stockLbl my-2">
                                    <span class="d-flex-center stockLbl instock d-none"><i
                                            class="icon anm anm-check-cil text-primary"></i><span> In
                                            stock</span></span>
                                    <span class="d-flex-center stockLbl preorder d-none"><i
                                            class="icon anm anm-clock-r text-primary"></i><span> Pre-order
                                            Now</span></span>
                                    <span class="d-flex-center stockLbl outstock d-none"><i
                                            class="icon anm anm-times-cil text-primary"></i> <span>Sold
                                            out</span></span>
                                    <span class="d-flex-center stockLbl lowstock" data-qty="15"><i
                                            class="icon anm anm-exclamation-cir text-primary"></i><span> Order now, Only
                                            <span class="items">10</span> left!</span></span>
                                </div>
                                <div class="product-price d-flex-center my-3">
                                    <span class="price old-price">$135.00</span><span class="price">₹999.00</span>

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
                                                    class="btn btn-primary product-cart-submit w-100"><i
                                                        class="icon anm anm-basket-l me-2"></i><span>Add to
                                                        cart</span></button>
                                                <button type="submit" name="sold"
                                                    class="btn btn-secondary product-sold-out w-100 d-none"
                                                    disabled="disabled"><span>Sold out</span></button>
                                                <button type="submit" name="buy"
                                                    class="btn btn-secondary proceed-to-checkout w-100 d-none"><span>Buy
                                                        it now</span></button>
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

        <!--Newsletter Modal-->
        <div class="newsletter-modal style4 modal fade" id="newsletter_modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content border-0">
                    <div class="modal-body p-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="newsletter-wrap d-flex flex-row align-items-center">
                            <div class="newsltr-img col-12 col-md-5 d-none d-sm-none d-md-block">
                                <img class="rounded-end-0 blur-up lazyload"
                                    data-src="<?php echo $path ?>assets/images/newsletter/newsletter-s10.jpg"
                                    src="<?php echo $path ?>assets/images/newsletter/newsletter-s10.jpg" alt="image"
                                    width="350" height="466" />
                            </div>
                            <div class="newsltr-text col-12 col-md-7 text-center text-md-start">
                                <div class="wraptext mw-100 text-center">
                                    <h2 class="title mb-2">Hey Good Looking</h2>
                                    <p class="text mb-3">Here is your <b>10% DISCOUNT</b> to get something new.</p>
                                    <form action="#" method="post" class="mcNewsletter mb-3">
                                        <div class="input-group">
                                            <input type="email" class="form-control input-group-field newsletter-input"
                                                name="email" value="" placeholder="Enter your email address..."
                                                required />
                                            <button type="submit"
                                                class="input-group-btn btn btn-secondary newsletter-submit"
                                                name="commit"><i class="anm anm-arw-right"></i></button>
                                        </div>
                                    </form>
                                    <ul
                                        class="list-inline social-icons d-inline-flex justify-content-center mb-3 w-100">
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Facebook"><i
                                                    class="icon anm anm-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Twitter"><i
                                                    class="icon anm anm-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Pinterest"><i
                                                    class="icon anm anm-pinterest-p"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Linkedin"><i
                                                    class="icon anm anm-linkedin-in"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Instagram"><i
                                                    class="icon anm anm-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Youtube"><i
                                                    class="icon anm anm-youtube"></i></a></li>
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
        </div>
        <!--End Newsletter Modal-->


        <!-- Including Jquery/Javascript -->
        <!-- Plugins JS -->
        <script src="<?php echo $path ?>assets/js/plugins.js"></script>
        <!-- Main JS -->
        <script src="<?php echo $path ?>assets/js/main.js"></script>

        <!--Newsletter Modal Cookies-->
        <!-- <script>
                $(window).ready(function () {
                    setTimeout(function () {
                        $('#newsletter_modal').modal("show");
                    }, 7000);
                });
            </script> -->
        <!--End Newsletter Modal Cookies-->

    </div>
    <!--End Page Wrapper-->
</body>

<!-- Mirrored from www.annimexweb.com/items/hema/index4-electronic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2023 19:28:19 GMT -->

</html>