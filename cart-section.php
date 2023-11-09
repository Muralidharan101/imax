<?php
    include 'datab.php'; 
    include 'ajax/session.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from www.annimexweb.com/items/hema/cart-style1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:28:53 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title Of Site -->
    <title>Imax | Cart Section</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $path; ?>assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/style-min.css">
    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/responsive.css">
</head>

<body class="cart-page cart-style1-page">
    <!--Page Wrapper-->
    <div class="page-wrapper">


        <!--Header-->
        <?php include 'header.php';?>
        <!--End Header-->



        <!-- Body Container -->
        <div id="page-content">
            <!--Page Header-->
            <div class="page-header text-center">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                            <div class="page-title">
                                <h1>Your Cart</h1>
                            </div>
                            <!--Breadcrumbs-->
                            <div class="breadcrumbs"></div>
                            <!--End Breadcrumbs-->
                        </div>
                    </div>
                </div>
            </div>
            <!--End Page Header-->

            <!--Main Content-->
            <div class="container">
                <div class="row">
                    <!--Cart Content-->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 main-col">

                        <!--End Alert msg-->

                        <!--Cart Form-->
                        <div class="cart-table table-bottom-brd form">
                            <table class="table align-middle">
                                <thead class="cart-row cart-header small-hide position-relative">
                                    <tr>
                                        <th class="action">&nbsp;</th>
                                        <th colspan="2" class="text-start">Product</th>
                                        <!-- <th class="text-center">Size</th> -->
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="cart-row cart-flex position-relative" id="product-carts">
                                    </tr>
                                </tbody>
                                <tfoot>
                                </tfoot>
                            </table>
                        </div >
                        <!--End Cart Form-->

                    </div>
                    <!--End Cart Content-->

                    <!--Cart Sidebar-->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 cart-footer">
                        <div class="cart-info sidebar-sticky">
                            <div class="cart-order-detail cart-col">
                                <div class="row g-0 border-bottom pb-2">
                                    <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Subtotal</strong></span>
                                    <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                            class="money" id="total-price"></span></span>
                                </div>
                                <div class="row g-0 border-bottom py-2">
                                    <span class="col-6 col-sm-6 cart-subtotal-title"><strong>CGST</strong></span>
                                    <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                            class="money">6%</span></span>
                                </div>
                                <div class="row g-0 border-bottom py-2">
                                    <span class="col-6 col-sm-6 cart-subtotal-title"><strong>SGST</strong></span>
                                    <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                            class="money">6%</span></span>
                                </div>
                                <!-- <div class="row g-0 border-bottom py-2">
                                    <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Shipping</strong></span>
                                    <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                            class="money">₹50</span></span>
                                </div> -->
                                <div class="row g-0 border-bottom py-2">
                                    <span class="col-6 col-sm-6 cart-subtotal-title"><strong>GST calc</strong></span>
                                    <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                            id="gst-total"></span></span>
                                </div>

                                <div class="row g-0 pt-2">
                                    <span class="col-6 col-sm-6 cart-subtotal-title fs-6"><strong>Total</strong></span>
                                    <span
                                        class="col-6 col-sm-6 cart-subtotal-title fs-5 cart-subtotal text-end text-primary">
                                        <b id="grand-total-price"></b></span>
                                </div>

                                <p class="cart-shipping mt-3">Shipping &amp; taxes calculated at checkout</p>
                                <!-- <p class="cart-shipping fst-normal freeShipclaim"><i
                                        class="me-2 align-middle icon anm anm-truck-l"></i><b>FREE SHIPPING</b> ELIGIBLE
                                </p> -->
                                <div class="customCheckbox cart-tearm">
                                    <input type="checkbox" value="allen-vela" id="cart-tearm">
                                    <label for="cart-tearm">I agree with the terms and conditions</label>
                                </div>
                                <a id="cartCheckout" class="btn btn-lg my-4 checkout w-100"
                                    style="background-color:orangered;">Proceed To Checkout</a>
                                <!-- <div class="paymnet-img text-center"><img
                                        src="<?php echo $path; ?>assets/images/icons/safepayment.png" alt="Payment"
                                        width="299" height="28" /></div> -->
                            </div>
                        </div>
                    </div>
                    <!--End Cart Sidebar-->
                </div>
            </div>
            <!--End Main Content-->
            <div class="quickview-modal modal fade" id="quickview_modal" tabindex="-1" style="display: none;" aria-hidden="true">           
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" fdprocessedid="8upl9f"></button>
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-3 mb-md-0">
                                    <p class>Reference No: <span id="ref_no"></span></p>   
                                    
                                    <label for=""></label>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="product-arrow d-flex justify-content-between">
                                        <h2 class="product-title">Product Quick View Popup</h2>
                                    </div>
                                    <div class="product-review d-flex mt-0 mb-2">
                                        <div class="rating"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i></div>
                                        <div class="reviews ms-2"><a href="#">6 Reviews</a></div>
                                    </div>
                                    <div class="product-info">
                                        <p class="product-vendor">Vendor:<span class="text"><a href="#">HVL</a></span></p>  
                                        <p class="product-sku">SKU:<span class="text">RF104</span></p>
                                    </div>
                                    <div class="pro-stockLbl my-2">
                                        <span class="d-flex-center stockLbl instock d-none"><span> In stock</span></span>
                                        <span class="d-flex-center stockLbl preorder d-none"><span> Pre-order Now</span></span>
                                        <span class="d-flex-center stockLbl outstock d-none"><span>Sold out</span></span>
                                    </div>
                                    <div class="product-price d-flex-center my-3">
                                        <span class="price old-price">$135.00</span><span class="price">$129.00</span>
                                    </div>
                                    <div class="sort-description">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</div>
                                    <form method="post" action="#" id="product_form--option" class="product-form">
                                        <div class="product-options d-flex-wrap">
                                            <div class="product-item swatches-image w-100 mb-3 swatch-0 option1" data-option-index="0">
                                                <label class="label d-flex align-items-center">Color:<span class="slVariant ms-1 fw-bold">Blue</span></label>
                                                <ul class="variants-clr swatches d-flex-center pt-1 clearfix">
                                                    <li class="swatch large radius available blue"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Blue" aria-label="Blue"></span></li>
                                                    <li class="swatch large radius available black"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Black" aria-label="Black"></span></li>
                                                    <li class="swatch large radius available pink"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Pink" aria-label="Pink"></span></li>
                                                    <li class="swatch large radius available green"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Green" aria-label="Green"></span></li>
                                                    <li class="swatch large radius soldout yellow"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Yellow" aria-label="Yellow"></span></li>
                                                </ul>
                                            </div>
                                            <div class="product-item swatches-size w-100 mb-3 swatch-1 option2" data-option-index="1">
                                                <label class="label d-flex align-items-center">Size:<span class="slVariant ms-1 fw-bold">S</span></label>
                                                <ul class="variants-size size-swatches d-flex-center pt-1 clearfix">
                                                    <li class="swatch large radius soldout"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="XS">XS</span></li>
                                                    <li class="swatch large radius available active"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="S">S</span></li>
                                                    <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="M">M</span></li>
                                                    <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="L">L</span></li>
                                                    <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="XL">XL</span></li>
                                                </ul>
                                            </div>
                                            <div class="product-action d-flex-wrap w-100 pt-1 mb-3 clearfix">
                                                <!-- <div class="quantity">
                                                    <div class="qtyField">
                                                        <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r" aria-hidden="true"></i></a>
                                                        <input type="text" name="quantity" value="1" class="product-form__input qty" data-ddg-inputtype="unknown" fdprocessedid="5j73d7">
                                                        <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-l" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>                                 -->
                                                <div class="addtocart ms-3 fl-1">
                                                    <button type="submit" name="add" class="btn product-cart-submit w-100" fdprocessedid="1o7zza"><span>Add to cart</span></button>
                                                    <button type="submit" name="sold" class="btn btn-secondary product-sold-out w-100 d-none" disabled="disabled"><span>Sold out</span></button>
                                                    <button type="submit" name="buy" class="btn btn-secondary proceed-to-checkout w-100 d-none"><span>Buy it now</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="wishlist-btn d-flex-center">
                                        <a class="add-wishlist d-flex-center me-3" href="wishlist-style1.html" title="Add to Wishlist"><i class="icon anm anm-heart-l me-1"></i> <span>Add to Wishlist</span></a>
                                        <a class="add-compare d-flex-center" href="compare-style1.html" title="Add to Compare"><i class="icon anm anm-random-r me-2"></i> <span>Add to Compare</span></a>
                                    </div>
                                    <!-- Social Sharing -->
                                    <div class="social-sharing share-icon d-flex-center mx-0 mt-3">
                                        <span class="sharing-lbl">Share :</span>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Share on Facebook"><i class="icon anm anm-facebook-f"></i><span class="share-title d-none">Facebook</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-twitter" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Tweet on Twitter"><i class="icon anm anm-twitter"></i><span class="share-title d-none">Tweet</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-pinterest" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Pin on Pinterest"><i class="icon anm anm-pinterest-p"></i> <span class="share-title d-none">Pin it</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-linkedin" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Share on Instagram"><i class="icon anm anm-linkedin-in"></i><span class="share-title d-none">Instagram</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-whatsapp" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Share on WhatsApp"><i class="icon anm anm-envelope-l"></i><span class="share-title d-none">WhatsApp</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-email" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Share by Email"><i class="icon anm anm-whatsapp"></i><span class="share-title d-none">Email</span></a>
                                    </div>
                                    <!-- End Social Sharing -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Body Container -->

        <!--Scoll Top-->
        <div id="site-scroll" style="background-color:orangered;"><i class="icon anm anm-arw-up"></i></div>
        <!--End Scoll Top-->

        <!-- Including Jquery/Javascript -->
        <!-- Plugins JS -->
        <script src="<?php echo $path; ?>assets/js/plugins.js"></script>
        <!-- Main JS -->
        <script src="<?php echo $path; ?>assets/js/main.js"></script>

        <!--Toastr  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
            integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
            console.log(customer_id);

            $(document).ready(function () {                  
                var product_id,
                product_category,
                cart_id,
                product_name,
                product_price,
                product_quantity;      
                // product_size
                function postdata() {
                    var formData = new FormData();
                    formData.append("customer_id", customer_id);

                    $.ajax({
                        url: 'ajax/list_cart.php',
                        type: 'post',
                        contentType: false,
                        processData: false,
                        data: formData,
                        success: function (response) {

                            var result = JSON.parse(response);
                            if (result.status == "Success") {
                                var data = result.data;
                                console.log(data);
                                data.map(function (value) {

                                    var product_cart = document.getElementById('product-carts');

                                    console.log(value.product_id) 
                                    
                                    product_id=value.product_id;
                                    product_category=value.product_category;
                                    cart_id=value.cart_id;
                                    product_name=value.product_name;
                                    product_price=value.product_price;
                                    product_quantity=value.quantity;
                                    // product_size=value.size;

                                    var total_price_cart = value.product_price*value.quantity;
                    
                                    let html = `
                                                <tr class="tr" data-id="${value.product_id}">
                                                <td class="cart-delete text-center small-hide">
                                                    <button class="removeCookieButton" data-id="">
                                                    <div class="cart-remove remove-icon position-static" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove from Cart">
                                                        <i class="icon anm anm-times-r"></i>
                                                    </div>
                                                    </button>
                                                </td>
                                                <td class="cart-image cart-flex-item">
                                                <a href=""><img class="cart-image rounded-0 blur-up lazyload" data-src="<?php echo $path; ?>main/product_images/${value.img_id}/main/${value.product_img}" src="<?php echo $path; ?>main/product_images/${value.cart_id}/main/${value.product_img}" alt="" width="120" height="170" /></a>
                                                </td>
                                                <td class="cart-meta small-text-left cart-flex-item">
                                                    <div class="cart-price d-md-none">₹
                                                    <span class="price fw-500">${value.product_price}</span>
                                                    </div>
                                                </td>
                                               
                                                <td class="cart-price cart-flex-item text-center small-hide">₹
                                                    <span class="money">${value.product_price}</span>
                                                </td>
                                                <td class="cart-update-wrapper cart-flex-item text-end text-md-center">
                                                    <div class="cart-qty d-flex justify-content-end justify-content-md-center">
                                                    <div class="qtyField">
                                                        <button class="qtyBtn minus" data-id="" ><i class="icon anm anm-minus-r"></i></button>
                                                        <input class="cart-qty-input qty" type="text" value="${value.quantity}"/>
                                                        <button class="qtyBtn plus" data-id="" ><i class="icon anm anm-plus-r"></i></button>
                                                    </div>
                                                    </div>
                                                    <button id="removemobile" class="removeMb d-md-none d-inline-block text-decoration-underline mt-2 me-3" data-id="">Remove</button>
                                                </td>
                                            
                                            <td class="cart-price cart-flex-item text-center small-hide">₹
                                            <span class="total_price fw-500" id="money-view-">${total_price_cart}</span>
                                            </td>
                                            </tr>
                                            `;

                                    product_cart.insertAdjacentHTML('beforebegin', html);


                                })
                            } else {
                                toastr.error("Unable To Add Product", "Error");
                            }
                        }
                    })
                };
                postdata()
            })

            $('#cartCheckout').on('click', function() {
                // $('#ref_no').text('ON' + Math.floor(10000 + Math.random() * 90000));

                var modal = $('#quickview_modal');
                modal.modal('show');
            });


            $('#place_order').on('click', function(e) { 
                var product_id = $('.tr').map(function(){
                    return $(this).data('id');
                }).get();

                // var size = $('.size').map(function(){
                //     var size_val = $(this).text().trim();
                //     // console.log($(this).html());
                //     return  $(this).text().trim();
                // }).get();

                var price = $('.price').map(function(){
                    var price_val = $(this).html();
                    // console.log($(this).html());
                    return $(this).html();
                }).get();

                var quantity = $('.qty').map(function(){
                    var quantity_val = $(this).val();
                    return $(this).val();
                }).get();

                var total_price = $('.total_price').map(function(){
                    var total_val = $(this).html();
                    // console.log($(this));
                    return $(this).html();
                }).get();

                var product_id_arr = JSON.stringify(product_id);
                // var size_arr       = JSON.stringify(size);
                var quantity_arr   = JSON.stringify(quantity);
                var price_arr      = JSON.stringify(price);
                var total_price    = JSON.stringify(total_price);

                console.log(customer_id);
                console.log(product_id_arr);
                // console.log(size_arr);
                console.log(quantity_arr);
                console.log(price_arr);
                console.log(total_price);


                var fd = new FormData();
                
                fd.append('customer_id', customer_id);
                fd.append('product_id', product_id_arr);
                // fd.append('size', size_arr);
                fd.append('quantity', quantity_arr);
                fd.append('price', price_arr);
                fd.append('total_price', total_price);

                $.ajax({
                    url: 'ajax/checkout.php',
                    method: 'post',
                    processData: false,
                    contentType: false,
                    data: fd,

                    success:function(response){
                        var result = JSON.parse(response);

                        if(result.status == 'Success') {
                            toastr.success('Order Placed');
                        } else {
                            toastr.error('Unable to place order');
                        }
                    }
                })
            });

            $(document).ready(function() {
                $(document).on('click', '.qtyBtn.plus, .qtyBtn.minus', function() {
                    var button = $(this);
                    var inputField = button.siblings('.cart-qty-input');
                    var currentValue = parseInt(inputField.val());
                    var productId = inputField.closest('.tr').data('id');
                    // console.log(currentValue);

                    if (button.hasClass('plus')) {
                        currentValue += 1;
                        // console.log(currentValue);
                    } else if (button.hasClass('minus') && currentValue > 1) {
                        currentValue -= 1;
                        // console.log(currentValue);

                    } else {
                        return; // If the value is 1 and minus is clicked or other unexpected case, don't send an update
                    }

                    var formData = new FormData();
                    formData.append('product_id', productId);
                    formData.append('customer_id', customer_id);
                    formData.append('quantity', currentValue);

                    $.ajax({
                        type: 'POST',
                        url: 'ajax/update_quantity.php',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            console.log(response); 
                            var result = JSON.parse(response)
                            if (result.status === 'Success') {
                                // inputField.val('');
                                // console.log(currentValue);
                                inputField.val(currentValue);
                            } else {
                                console.log('Update failed');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.log(xhr.responseText); // Log the error response for debugging
                            console.log('Error in the AJAX request:', status, error);
                        }
                    });
                });
            });








            // function sendCartToBackend() {
            //     // Retrieve the customer ID or any other necessary information
                
            //     // Collect all products in the cart or relevant cart data
            //     var cartProducts = []; // Store products or cart data here

            //     // Loop through the products in the cart or relevant HTML elements to collect product information
            //     // For example, let's assume products are listed in a table with 'data' attributes containing product details
            //     var productRows = document.querySelectorAll('.cart-product-row'); // Replace with your actual selector
                
            //     productRows.forEach(function(row) {
            //         var productInfo = {
            //             product_id: row.dataset.productId,
                    
            //         };
            //         cartProducts.push(productInfo);
            //     });

            //     // Prepare data to be sent to the backend
            //     var data = {
            //         customer_id: customer_id,
            //         cart: cartProducts
            //     };

            //     // Send data to the backend via AJAX
            //     $.ajax({
            //         url: 'your_backend_endpoint_for_checkout', // Replace this with your actual checkout endpoint
            //         type: 'POST',
            //         contentType: 'application/json',
            //         data: JSON.stringify(data),
            //         success: function(response) {
            //             // Handle the response from the backend after the checkout request
            //             // For example, show a success message or redirect the user to the confirmation page
            //         },
            //         error: function(error) {
            //             // Handle errors if the request fails
            //             // For example, display an error message to the user
            //         }
            //     });
            // }

           

        </script>



    </div>
    <!--End Page Wrapper-->
</body>

<!-- Mirrored from www.annimexweb.com/items/hema/cart-style1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:28:55 GMT -->

</html>