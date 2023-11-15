<?php
    include 'datab.php'; 

    function getTotalItems() {
        global $conn;

        $result = mysqli_query($conn, "SELECT COUNT(id) AS total FROM product_data WHERE `status`='Active' AND `product_type`='shield'");

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            return $row['total'];
        }

        return 0;
    }

    $totalItems = getTotalItems();

?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from www.annimexweb.com/items/hema/javascript:void(0) by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2023 19:35:01 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title Of Site -->
    <title>Imax Trophies | Shop</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $path ?>assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo $path ?>assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo $path ?>assets/css/style-min.css">
    <link rel="stylesheet" href="<?php echo $path ?>assets/css/responsive.css">

    <style>
     /* Add some styling for the active category */
.sidebar-categories .lvl1.active-category {
    border: 2px solid #ff6600; /* Adjust the color as needed */
    border-radius: 5px;
    padding: 0 20px;

}

#sidebar_category li{
cursor:pointer !important;
padding:5px 10px;
}




    </style>
</head>

<body class="shop-page shop-left-sidebar-page">
    <!--Page Wrapper-->
    <div class="page-wrapper">
        <!--Header-->
        <?php include('header.php'); ?>
        <!--End Header-->
        <!--Mobile Menu-->

        <!--End Mobile Menu-->

        <!-- Body Container -->


        <style>
            .collection-slider-6items .category-item img {
                width: 180px;
                height: 200px;
            }

            @media screen and (max-width: 567.67px) {
                .collection-slider-6items .category-item img {
                    width: 205px;
                    height: 200px;
                }
            }
        </style>

        <div id="page-content">
            <!--Page Header-->
            <div class="page-header text-center">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                            <div class="page-title">
                                <h1>Product - Shield section</h1>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--End Page Header-->

            <!--Main Content-->
            <div class="container">
                <!--Category Slider-->

                <!-- <section class="section collection-slider pb-0">
                    <div class="container">

                        <div class="collection-slider-5items gp15 arwOut5 hov-arrow">
                            <div class="category-item zoomscal-hov">
                                <a href="shop-left-sidebar.html" class="category-link clr-none">
                                    <div class="zoom-scal zoom-scal-nopb rounded-3"><img class="blur-up lazyload"
                                            data-src="<?php echo $path ?>img\trophy_category\silambam.jpg"
                                            src="<?php echo $path ?>img\trophy_category\silambam.jpg" alt="Men's Jakets"
                                            title="Men's Jakets" width="365" height="365" /></div>
                                    <div class="details mt-3 text-center">
                                        <h4 class="category-title mb-0">Silambam</h4>
                                        <p class="counts">20 Products</p>
                                    </div>
                                </a>
                            </div>
                            <div class="category-item zoomscal-hov">
                                <a href="shop-left-sidebar.html" class="category-link clr-none">
                                    <div class="zoom-scal zoom-scal-nopb rounded-3"><img class="blur-up lazyload"
                                            data-src="<?php echo $path ?>img\trophy_category\vollyball.jpg"
                                            src="<?php echo $path ?>img\trophy_category\vollyball.jpg" alt="Tops"
                                            title="Tops" width="365" height="365" /></div>
                                    <div class="details mt-3 text-center">
                                        <h4 class="category-title mb-0">VollyBall</h4>
                                        <p class="counts">13 Products</p>
                                    </div>
                                </a>
                            </div>
                            <div class="category-item zoomscal-hov">
                                <a href="shop-left-sidebar.html" class="category-link clr-none">
                                    <div class="zoom-scal zoom-scal-nopb rounded-3"><img class="blur-up lazyload"
                                            data-src="<?php echo $path ?>img\trophy_category\soccer.jpg"
                                            src="<?php echo $path ?>img\trophy_category\soccer.jpg" alt="T-Shirts"
                                            title="T-Shirts" width="365" height="365" /></div>
                                    <div class="details mt-3 text-center">
                                        <h4 class="category-title mb-0">Soccer</h4>
                                        <p class="counts">18 Products</p>
                                    </div>
                                </a>
                            </div>
                            <div class="category-item zoomscal-hov">
                                <a href="shop-left-sidebar.html" class="category-link clr-none">
                                    <div class="zoom-scal zoom-scal-nopb rounded-3"><img class="blur-up lazyload"
                                            data-src="<?php echo $path ?>img\trophy_category\jallikattu.jpg"
                                            src="<?php echo $path ?>img\trophy_category\jallikattu.jpg" alt="Shoes"
                                            title="Shoes" width="365" height="365" /></div>
                                    <div class="details mt-3 text-center">
                                        <h4 class="category-title mb-0">Shoes</h4>
                                        <p class="counts">11 Products</p>
                                    </div>
                                </a>
                            </div>
                            <div class="category-item zoomscal-hov">
                                <a href="shop-left-sidebar.html" class="category-link clr-none">
                                    <div class="zoom-scal zoom-scal-nopb rounded-3"><img class="blur-up lazyload"
                                            data-src="<?php echo $path ?>img\trophy_category\badmiton.jpg"
                                            src="<?php echo $path ?>img\trophy_category\badmiton.jpg" alt="Shorts"
                                            title="Shorts" width="365" height="365" /></div>
                                    <div class="details mt-3 text-center">
                                        <h4 class="category-title mb-0">badmiton</h4>
                                        <p class="counts">28 Products</p>
                                    </div>
                                </a>
                            </div>
                            <div class="category-item zoomscal-hov">
                                <a href="shop-left-sidebar.html" class="category-link clr-none">
                                    <div class="zoom-scal zoom-scal-nopb rounded-3"><img class="blur-up lazyload"
                                            data-src="<?php echo $path ?>img\trophy_category\kabadi.jpg"
                                            src="<?php echo $path ?>img\trophy_category\kabadi.jpg" alt="Sunglasses"
                                            title="Sunglasses" width="365" height="365" /></div>
                                    <div class="details mt-3 text-center">
                                        <h4 class="category-title mb-0">Kabaadi</h4>
                                        <p class="counts">24 Products</p>
                                    </div>
                                </a>
                            </div>
                            <div class="category-item zoomscal-hov">
                                <a href="shop-left-sidebar.html" class="category-link clr-none">
                                    <div class="zoom-scal zoom-scal-nopb rounded-3"><img class="blur-up lazyload"
                                            data-src="<?php echo $path ?>img\trophy_category\karate.jpg"
                                            src="<?php echo $path ?>img\trophy_category\karate.jpg" alt="Girls Top"
                                            title="Girls Top" width="365" height="365" /></div>
                                    <div class="details mt-3 text-center">
                                        <h4 class="category-title mb-0">karate</h4>
                                        <p class="counts">26 Products</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                 -->
                
                <!--End Category Slider-->
                <div class="row">
                    <!--Sidebar-->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 sidebar sidebar-bg filterbar">
                        <div class="closeFilter d-block d-lg-none"><i class="icon anm anm-times-r"></i></div>
                        <div class="sidebar-tags sidebar-sticky clearfix">

                            <!--End Filter By-->
                            <!--Categories-->
                            <div class="sidebar-widget clearfix categories filterBox filter-widget">
                                <div class="widget-title">
                                    <h2>Categories</h2>
                                </div>
                                <div class="widget-content filterDD">
                                    <ul class="sidebar-categories scrollspy morelist clearfix" id="sidebar_category">
                                    </ul>
                                </div>
                            </div>
                            <!--Categories -->
                            <!--Price Filter-->
                            <div class="sidebar-widget filterBox filter-widget">
                                <div class="widget-title">
                                    <h2>Price</h2>
                                </div>
                                <form class="widget-content price-filter filterDD" action="#" method="post">
                                    <div id="slider-range" class="mt-2"></div>
                                    <div class="row">
                                        <div class="col-12"><input id="amount" type="text" style="width: 100%;"
                                                placeholder="Ex : ₹1000 to ₹10000"/></div>
                                    </div>
                                </form>
                                <div class="col-4 mt-4"><button class="btn btn-sm" id="filteration">filter</button>
                                </div>
                            </div>
                            <!--End Price Filter-->
                            <!--Color Swatches-->

                            <!--End Color Swatches-->
                            <!--Size Swatches-->
                            <!-- <div class="sidebar-widget filterBox filter-widget">
                                <div class="widget-title">
                                    <h2>Size</h2>
                                </div>
                                <div class="widget-content filter-size filterDD">
                                    <ul class="swacth-list size-swatches d-flex-center clearfix">
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                value="0.5ft">0.5ft</span>
                                        </li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" value="1ft">1ft</span>
                                        </li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                value="1.5ft">1.5ft</span>
                                        </li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" value="2ft">2ft</span>
                                        </li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                value="2.5ft">2.5ft</span>
                                        </li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" value="3ft">3ft</span>
                                        </li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                value="3.5ft">3.5ft</span>
                                        </li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" value="4ft">4ft</span>
                                        </li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                value="4.5ft">4.5ft</span>
                                        </li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" value="5ft">4ft</span>
                                        </li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                value="5.5ft">5.5ft</span>
                                        </li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" value="6">6ft</span>
                                        </li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                value="custom">custom</span>
                                        </li>
                                        <!-- <li class="swatch large radius available active"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XL">XL</span></li>
                                            <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XLL">XLL</span></li>
                                            <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XXL">XXL</span></li>
                                            <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="25">25</span></li>
                                            <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="35">35</span></li>
                                            <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="40">40</span></li> 
                                    </ul>
                                </div>
                            </div> -->
                            
                            <!--End Size Swatches-->
                            <!--Product Brands-->

                            <!--End Product Brands-->
                            <!--Product Tags-->

                            <!--End Product Tags-->
                            <!--Banner-->
                            <!-- <div class="sidebar-widget static-banner p-0">
                                    <a href="javascript:void(0)"><img class="rounded-0 blur-up lazyload" data-src="<?php echo $path ?><?php echo $path ?>assets//images/banners/shop-banner.jpg" src="<?php echo $path ?><?php echo $path ?>assets//images/banners/shop-banner.jpg" alt="image" width="274" height="367"></a>
                                </div> -->
                            <!--End Banner-->
                        </div>
                    </div>
                    <!--End Sidebar-->

                    <!--Products-->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-9 main-col">

                        <div class="search-body mb-5">
                            <form class="form minisearch" id="header-search" action="#" method="get">
                                <!--Search Field-->
                                <div class="d-flex searchField">
                                    <div class="input-box d-flex fl-1">
                                        <input type="text" class="input-text rounded-0 border-start-0 border-end-0"
                                            placeholder="Search for products..." value="" />
                                        <button type="submit"
                                            class="action search d-flex-justify-center btn rounded-start-0"><i
                                                class="icon anm anm-search-l"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--Toolbar-->
                        <div class="toolbar toolbar-wrapper shop-toolbar">
                            <div class="row align-items-center">
                                <div
                                    class="col-4 col-sm-2 col-md-4 col-lg-4 text-left filters-toolbar-item d-flex order-1 order-sm-0">
                                    <button type="button"
                                        class="btn btn-filter icon anm anm-sliders-hr d-inline-flex d-lg-none me-2"><span
                                            class="d-none">Filter</span></button>

                                </div>
                                <div
                                    class="col-12 col-sm-4 col-md-4 col-lg-4 text-center product-count order-0 order-md-1 mb-3 mb-sm-0">
                                    <span class="toolbar-product-count">Showing: <?php echo $totalItems; ?> products</span>
                                </div>
                                <div
                                    class="col-8 col-sm-6 col-md-4 col-lg-4 text-right filters-toolbar-item d-flex justify-content-end order-2 order-sm-2">
                                    <!-- <div class="filters-item d-flex align-items-center">
                                        <label for="ShowBy"
                                            class="mb-0 me-2 text-nowrap d-none d-sm-inline-flex">Show:</label>
                                        <select name="ShowBy" id="ShowBy" class="filters-toolbar-show">
                                            <option value="title-ascending" selected="selected">10</option>
                                            <option>15</option>
                                            <option>20</option>
                                            <option>25</option>
                                            <option>30</option>
                                        </select>
                                    </div> -->
                                    <div class="filters-item d-flex align-items-center ms-2 ms-lg-3">
                                        <label for="SortBy" class="mb-0 me-2 text-nowrap d-none">Sort by:</label>
                                        <select name="SortBy" id="SortBy" class="filters-toolbar-sort">
                                            <option value="featured" selected="selected">Featured</option>
                                            <option value="best-selling">Best selling</option>
                                            <option value="title-ascending">Alphabetically, A-Z</option>
                                            <option value="title-descending">Alphabetically, Z-A</option>
                                            <option value="price-ascending">Price, low to high</option>
                                            <option value="price-descending">Price, high to low</option>
                                            <option value="created-ascending">Date, old to new</option>
                                            <option value="created-descending">Date, new to old</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Toolbar-->

                        <!--Product Grid-->
                        <div class="grid-products grid-view-items">
                            <div class="row col-row product-options row-cols-lg-3 row-cols-md-3 row-cols-sm-3 row-cols-2" id="cart-product">
                                <!-- Your product items go here -->
                            </div>

                            <!-- Pagination -->
                            <nav class="clearfix pagination-bottom">
                                <ul class="pagination justify-content-center">
                                <?php
                                    $itemsPerPage = 30;
                                    $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

                                    // Calculate total pages if total items are greater than 0
                                    if ($totalItems > 0) {
                                        $totalPages = ceil($totalItems / $itemsPerPage);

                                        // Assuming $currentPage is the current page number
                                        for ($i = 1; $i <= $totalPages; $i++) {
                                            $activeClass = ($i == $currentPage) ? 'active' : '';
                                            echo '<li class="page-item ' . $activeClass . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
                                        }
                                    }
                                ?>

                                </ul>
                            </nav>
                            <!-- End Pagination -->
                        </div>

                        <!--End Product Grid-->
                    </div>
                    <!--End Products-->
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
        <script src="<?php echo $path ?>assets//js/plugins.js"></script>
        <!-- Main JS -->
        <script src="<?php echo $path ?>assets//js/main.js"></script>
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
        var priceInputValue;
        var selectedValues = [];
        var selectedValuesOutput;
        var categoryValue;
        var startValue;
        var endValue;
        

        

        $("#slider-range").slider({
            range: true,
            min: 100,
            max: 100000,
            values: [100, 10000],
            slide: function (event, ui) {
                $("#amount").val("₹" + ui.values[0] + " - ₹" + ui.values[1]);
            }
        });


        var setpriceRange = document.getElementById('filteration');
        setpriceRange.addEventListener('click', function (e) {
            e.preventDefault();
            var inputElement = document.getElementById("amount");
            inputString = inputElement.value;
            var priceInputVal = inputString.replace(/₹/g, '');
            var priceInputValue = priceInputVal.split('-').map(value => value.trim());

            startValue = priceInputValue[0];
            endValue = priceInputValue[1];  

            // console.log("Start: " + startValue);
            // console.log("End: " + endValue);
        });


        var swatchList = document.querySelectorAll('.swatch.available');

        swatchList.forEach(function (swatch) {
            swatch.addEventListener('click', function () {
                var value = this.querySelector('.swatchLbl').getAttribute('value');

                if (selectedValues.includes(value)) {
                    // If the value is already in the array, remove it
                    selectedValues = selectedValues.filter(item => item !== value);
                } else {
                    // If the value is not in the array, add it
                    selectedValues.push(value);
                }

                // Toggle the 'active' class to indicate selection
                this.classList.toggle('active');

                displaySelectedValues();
            });
        });

        function displaySelectedValues() {
            // Remove the 'active' class from all items
            swatchList.forEach(function (swatch) {
                swatch.classList.remove('active');
            });

            // Add the 'active' class to selected items
            selectedValues.forEach(function (value) {
                var selectedSwatch = document.querySelector('.swatchLbl[value="' + value + '"]');
                if (selectedSwatch) {
                    selectedSwatch.closest('.swatch').classList.add('active');
                }
            });

            selectedValuesOutput = selectedValues.join(", ");
            console.log("Selected Values: " + selectedValuesOutput);
        }

        var selectedCategory = null;

        $(document).ready(function () {
            var selectedCategory = null;

            // Click event for selecting a category
            $(document).on('click', '#sidebar_category li', function() {
                var categoryValue = $(this).data('value');

                // Highlight the selected category and store the value
                $('#sidebar_category li').removeClass('selected');
                $(this).addClass('selected');

                selectedCategory = categoryValue;
            });

            // Click event for the filter button
            $('#filteration').click(function (e) {
                e.preventDefault();

                if (selectedCategory === null && priceInputValue == '') {
                    toastr.error("Select a category to filter products.", "Error");
                } else if(selectedCategory === null) {
                    var fd = new FormData();

                    fd.append("start", startValue);
                    fd.append("end", endValue);

                    fd.append('product_type', 'shield');

                    fetchingData(fd);
                } else {
                    var fd = new FormData();
                    fd.append("Category", selectedCategory);

                    fd.append("start", startValue);
                    fd.append("end", endValue);

                    fd.append('product_type', 'shield');

                    fetchingData(fd);
                }
            });

            var param = new URLSearchParams(window.location.search);
            var categoryParam = param.get('category');
            var pageParam = param.get('page');
        
            if(pageParam !== null && pageParam !== '') {
                var pages = pageParam;   
                console.log(pageParam);
            }
            
            if(categoryParam !== null && categoryParam !== '') {
                var category = categoryParam;
                console.log(category);
                categoryFilter()
            } else {
                fetchdata();
            }

            function categoryFilter() {
                    console.log('1');

                    var fd = new FormData();
                    fd.append('Category', category);
                    fd.append('product_type', 'meadl');


                    $.ajax({
                        url: 'ajax/products/filter_by_cat_a_pt.php',
                        type: 'post',
                        contentType:false,
                        processData: false,
                        data: fd,

                        success:function(response){
                            var result = JSON.parse(response);

                            if(result.status == 'Success') {
                               

                                var cart = document.getElementById('cart-product');
                                cart.innerHTML = "";
                                
                                var data = result.data;
                                if (Array.isArray(data)) {
                                    data.forEach(function(obj) {
                                        var cartHtml = `

                                                <div class="item col-item">
                                                    <div class="product-box">
                                                        <div class="product-image">
                                                            <a href="product-desc.php?id=${obj.product_id}" class="product-img rounded-0">
                                                                <img class="main-img"
                                                                    data-src="product_images/${obj.product_id}/main/${obj.product_img}"
                                                                    src="product_images/${obj.product_id}/main/${obj.product_img}"
                                                                    alt="Product Main Image" title="Product Main Image" width="625" height="808"  style="height: 300px;" />
                                                                </a>

                                                        </div>
                                                        <div class="product-details text-left">
                                                            <span class="product-vendor">${obj.product_category}</span>
                                                            <div class="product-name">
                                                                <a href="product-desc.php?id=${obj.id}">${obj.product_name}</a>
                                                            </div>
                                                            <div class="product-price">
                                                                <span class="price">₹${obj.product_price}</span>
                                                            </div>
                                                            <p class="sort-desc hidden">${obj.product_desc}</p>
                                                            <div class="button-action hidden">
                                                                <div class="addtocart-btn">
                                                                    <div class="addtocart" action="#" method="post">
                                                                        <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                                            data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                                            <i class="icon anm anm-cart-l me-2"></i><span
                                                                                class="text">Add to Cart</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            `;
                                            cart.insertAdjacentHTML("beforeend", cartHtml);
                                    })
                                } else {
                                    console.error("Data is not an array.");
                                }
                            }
                        }
                    })
                }

            function fetchdata() {

                var fd = new FormData();

                fd.append('page', pages);

                $.ajax({
                    url: 'ajax/shield_list.php',
                    type: 'get',

                    success: function (response) {
                        var result = JSON.parse(response);

                        var cart = document.getElementById('cart-product');

                        if (result.status === 'Success') {
                            var data = result.data;
                            console.log(data);

                            var cart = document.getElementById('cart-product');
                            cart.innerHTML = "";

                            // Use for hover image when needed

                            // <img class="hover"
                            //     data-src="product_images/${product_id}/alt/${alt_img}"
                            //     src="product_images/${product_id}/alt/${alt_img}"
                            //     alt="Product Alt Image" title="Product Alt Image" width="625" height="808" style="display: none;" />


                            if (Array.isArray(data)) {
                                data.forEach(function(obj) {
                                    var cartHtml = `

                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <div class="product-image">
                                                        <a href="product-desc.php?id=${obj.product_id}" class="product-img rounded-0">
                                                            <img class="main-img"
                                                                data-src="product_images/${obj.product_id}/main/${obj.product_img}"
                                                                src="product_images/${obj.product_id}/main/${obj.product_img}"
                                                                alt="Product Main Image" title="Product Main Image" width="625" height="808" />
                                                            </a>

                                                    </div>
                                                    <div class="product-details text-left">
                                                        <span class="product-vendor">${obj.product_category}</span>
                                                        <div class="product-name">
                                                            <a href="product-desc.php?id=${obj.id}">${obj.product_name}</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="price">₹${obj.product_price}</span>
                                                        </div>
                                                        <p class="sort-desc hidden">${obj.product_desc}</p>
                                                        <div class="button-action hidden">
                                                            <div class="addtocart-btn">
                                                                <div class="addtocart" action="#" method="post">
                                                                    <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                                        <i class="icon anm anm-cart-l me-2"></i><span
                                                                            class="text">Add to Cart</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        `;
                                        cart.insertAdjacentHTML("beforeend", cartHtml);
                                })
                            }
                            else {
                                console.error("Data is not an array.");
                                // Handle the non-array data scenario as required
                            } 
                        }
                    }
                })
            }
               
            function fetchingData(formData) {
                
                $.ajax({
                    url: 'ajax/products/filter_products.php',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        console.log(response);
                        var result = JSON.parse(response);
                        
                        if (result.status === "Success") {
                            
                            var cart = document.getElementById('cart-product');
                            cart.innerHTML = "";
                            var data = result.data;

                                                            
                            if (Array.isArray(data)) {
                                data.forEach(function(obj) {
                                    var cartHtml = `

                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <div class="product-image">
                                                        <a href="product-desc.php?id=${obj.product_id}" class="product-img rounded-0">
                                                            <img class="main-img"
                                                                data-src="product_images/${obj.product_id}/main/${obj.product_img}"
                                                                src="product_images/${obj.product_id}/main/${obj.product_img}"
                                                                alt="Product Main Image" title="Product Main Image" width="625" height="808" />
                                                            </a>

                                                    </div>
                                                    <div class="product-details text-left">
                                                        <span class="product-vendor">${obj.product_category}</span>
                                                        <div class="product-name">
                                                            <a href="product-desc.php?id=${obj.id}">${obj.product_name}</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="price">₹${obj.product_price}</span>
                                                        </div>
                                                        <p class="sort-desc hidden">${obj.product_desc}</p>
                                                        <div class="button-action hidden">
                                                            <div class="addtocart-btn">
                                                                <div class="addtocart" action="#" method="post">
                                                                    <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                                        data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                                        <i class="icon anm anm-cart-l me-2"></i><span
                                                                            class="text">Add to Cart</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        `;
                                        cart.insertAdjacentHTML("beforeend", cartHtml);
                                })
                            }
                            
                        } else {

                            
                        //    fetchdata();
                        }
                    },
                    error: function (xhr, status, error) {
                        toastr.error("Error occurred while filtering products", "Error");
                    }
                });
            }
        });

        $(document).ready(function () {
            var product_id;

            function colorList() {
                $.ajax({
                    url: 'dashboard/main/ajax/color/list_color.php',
                    type: 'get',
                    success: function (response) {
                        var result = JSON.parse(response);

                        if (result.status == "Success") {
                            var data = result.data;
                            var colorOptions = document.getElementById("colorOptions");

                            data.map(obj => {
                                var checkbox = document.createElement("input");
                                checkbox.type = "checkbox";
                                checkbox.name =
                                    "productColor[]"; // You can set a name for the checkbox
                                checkbox.value = obj.color;
                                checkbox.style.marginRight = "5px";

                                var label = document.createElement("label");
                                label.style.marginRight = "10px"; // Add margin to the right

                                label.appendChild(checkbox);
                                label.appendChild(document.createTextNode(obj.color));

                                // colorOptions.appendChild(label);
                            });
                        }
                    }
                });
            }
            colorList();

            
            function fetchSidebarCategory() {
    $.ajax({
        url: 'ajax/category_list_sidebar.php',
        method: 'get',

        success: function(response) {
            var result = JSON.parse(response);
            if (result.status === 'Success') {
                var data = result.data;
                var sidebarCty = document.getElementById('sidebar_category');

                data.forEach(function(item) {
                    let category = item.category;
                    let count = item.count;

                    let ctyHtml = `
                        <li class="lvl1 more-item" data-value="${category}">
                            <p class="cat">${category}</p>
                        </li>
                    `;

                    sidebarCty.insertAdjacentHTML("beforeend", ctyHtml);
                });

                // Add click event listener to each category item
                var categoryItems = sidebarCty.querySelectorAll('.lvl1');
                categoryItems.forEach(function(item) {
                    item.addEventListener('click', function() {
                        // Remove active class from all items
                        categoryItems.forEach(function(cItem) {
                            cItem.classList.remove('active-category');
                        });

                        // Add active class to the clicked item
                        item.classList.add('active-category');
                    });
                });
            }
        }
    });
}

fetchSidebarCategory();



        })
    </script>
</body>

<!-- Mirrored from www.annimexweb.com/items/hema/javascript:void(0) by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2023 19:35:01 GMT -->

</html>