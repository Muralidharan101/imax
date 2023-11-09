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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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
                        <div class="row faqs-style mt-4 mt-md-0">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-10 mx-auto">
                                <div class="accordion" id="accordionFaq">
                                    <div class="section pt-0">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button">Product
                                                    Cart</button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse show"
                                                data-bs-parent="#accordionFaq">
                                                <div class="accordion-body">
                                                    <!--Cart Form-->
                                                    <div class="cart-table table-bottom-brd form">
                                                        <table class="table align-middle">
                                                            <thead
                                                                class="cart-row cart-header small-hide position-relative">
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
                                                                <tr class="cart-row cart-flex position-relative"
                                                                    id="product-carts">
                                                                </tr>
                                                            </tbody>
                                                            <tfoot>
                                                            </tfoot>
                                                        </table>
                                                        <button id="placeOrderButton"
                                                            class="btn btn-lg my-4 checkout w-100"
                                                            style="background-color:orangered;"
                                                            onclick="toggleAccordions()">Place Order</button>
                                                    </div>
                                                    <!--End Cart Form-->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed mb-0" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">Delievery
                                                    Section</button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionFaq">
                                                <div class="accordion-body">
                                                    <!--Cart Form-->
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-4">
                                                        <div class="product-review-form new-review-form">
                                                            <h3 class="spr-form-title">order No: <span
                                                                    id="ref_no"></span></h3>

                                                            <fieldset class="row spr-form-contact">
                                                                <div class="col-sm-6 spr-form-contact-name form-group">
                                                                    <label class="spr-form-label" for="nickname">Name
                                                                        <span class="required">*</span></label>
                                                                    <input class="spr-form-input spr-form-input-text"
                                                                        id="username" type="text" name="name"
                                                                        >
                                                                </div>
                                                                <div class="col-sm-6 spr-form-contact-email form-group">
                                                                    <label class="spr-form-label" for="email">Email
                                                                        <span class="required">*</span></label>
                                                                    <input class="spr-form-input spr-form-input-email "
                                                                        id="useremail" type="email" name="email"
                                                                        >
                                                                </div>
                                                                <div class="col-sm-6 spr-form-review-title form-group">
                                                                    <label class="spr-form-label" for="review">Mobile.No
                                                                        <span class="required">*</span></label>
                                                                    <input class="spr-form-input spr-form-input-text "
                                                                        id="usermobile" type="tel" name="review">
                                                                </div>
                                                                <!-- <div class="col-sm-6 spr-form-review-title form-group">
                                                    <label class="spr-form-label" for="review">Coupen code</label>
                                                    <input class="spr-form-input spr-form-input-text " id="review" type="text" name="review">
                                                </div> -->
                                                                <div class="col-12 spr-form-review-body form-group">
                                                                    <label class="spr-form-label"
                                                                        for="message">Address<span
                                                                            class="required">*</span></label>
                                                                    <div class="spr-form-input">
                                                                        <textarea
                                                                            class="spr-form-input spr-form-input-textarea"
                                                                            id="useraddress" name="message" rows="3"
                                                                            style="resize:none;"></textarea>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <div class="spr-form-actions clearfix">
                                                                <!-- <input type="submit" class="btn btn-primary spr-button spr-button-primary" value="Submit" onclick="closeSecondAccordion()"> -->
                                                                <input
                                                                    class="btn btn-primary spr-button spr-button-primary"
                                                                    id="form-submited" value="Submit">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Cart Form-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!--End Cart Content-->

                    <!--Cart Sidebar-->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 cart-footer">
                        <div class="cart-info sidebar-sticky">
                            <div class="cart-order-detail cart-col">
                                <div class="row g-0 border-bottom pb-2">
                                    <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Subtotal</strong></span>
                                    <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"
                                        id="grand-total"><span class="money" id="total-price"></span></span>
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
                                    <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"
                                        id="tax-total"><span id="gst-total"></span></span>
                                </div>

                                <div class="row g-0 pt-2">
                                    <span class="col-6 col-sm-6 cart-subtotal-title fs-6"><strong>Total</strong></span>
                                    <span
                                        class="col-6 col-sm-6 cart-subtotal-title fs-5 cart-subtotal text-end text-primary">
                                        <b id="grandTotalWithTax"></b></span>
                                </div>



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
            <div class="quickview-modal modal fade" id="quickview_modal" tabindex="-1" style="display: none;"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">



                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-3 mb-md-0">
                                    <div class="spr-form-actions clearfix">
                                        <img src="img\qr.jpg" alt="">
                                        <p>UPI - <b>Q79891202@ybl</b></p>
                                        <div style="background-color:white;">
                                            <p class="cart-shipping mt-3">Note : Send a WhatsApp message with your order
                                                number after making a payment.</p>
                                        </div>
                                        <br>
                                        <button class="btn btn-primary spr-button spr-button-primary"
                                            style="background-color:limegreen;"><i class="bi bi-whatsapp"></i>&nbsp;Send
                                            message</button>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-3 mb-md-0">
                                    <div class="spr-form-actions clearfix">
                                        <p class="cart-shipping mt-3">1. Goods once sold will not be taken back</p>

                                        <p class="cart-shipping mt-3">2. If any damage occurred while transport, Company
                                            not responsible for that.</p>

                                        <p class="cart-shipping mt-3">3. Subject to
                                            'Manapparai Jurisdiction' only.
                                            Notes : Stickering included + metal cups all</p>
                                        <!-- <p class="cart-shipping fst-normal freeShipclaim"><i
                                        class="me-2 align-middle icon anm anm-truck-l"></i><b>FREE SHIPPING</b> ELIGIBLE
                                </p> -->
                                        <div class="customCheckbox cart-tearm">
                                            <input type="checkbox" value="allen-vela" id="cart-tearm">
                                            <label for="cart-tearm">I agree with the terms and conditions</label>
                                        </div>
                                        <button id="cartCheckout" class="btn btn-lg my-4 checkout w-100"
                                            style="background-color:orangered;">Proceed To Checkout</button>
                                    </div>
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
            function toggleAccordions() {
                // Close the first accordion
                var collapseOne = new bootstrap.Collapse(document.getElementById('collapseOne'), {
                    toggle: true
                });
                collapseOne.hide();

                // Open the second accordion
                var collapseTwo = new bootstrap.Collapse(document.getElementById('collapseTwo'), {
                    toggle: true
                });
                collapseTwo.show();
            }

            function closeSecondAccordion() {
                // Close the second accordion
                var collapseTwo = new bootstrap.Collapse(document.getElementById('collapseTwo'), {
                    toggle: true
                });
                collapseTwo.hide();
            }

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

                    product_quantity,
                    product_size, grand_total = 0,
                    taxRate = 0.12;


                var cartTearmCheckbox = document.getElementById('cart-tearm');
                var cartCheckoutButton = document.getElementById('cartCheckout');

                // Initially, hide the "Proceed To Checkout" button
                // cartCheckoutButton.style.display = 'none';
                cartCheckoutButton.disabled = true;
                // Add an event listener to the checkbox
                cartTearmCheckbox.addEventListener('change', function () {
                    // Check if the checkbox is checked
                    if (cartTearmCheckbox.checked) {
                        // If checked, display the "Proceed To Checkout" button
                        // cartCheckoutButton.style.display = 'block';
                        cartCheckoutButton.disabled = false;
                    } else {
                        // If unchecked, hide the "Proceed To Checkout" button
                        // cartCheckoutButton.style.display = 'none';
                        cartCheckoutButton.disabled = true;
                    }
                });


                $('#form-submited').click(function(){
              
                var username = $("#username").val().trim();
                console.log(username);
                
                var useremail = $("#useremail").val().trim();
                console.log(useremail);
                
                var usermobile = $("#usermobile").val().trim();
                console.log(usermobile);

                var useraddress = $("#useraddress").val().trim();
                console.log(useraddress);

                if(username == "")
                {
                    toastr.error('Enter name here !', 'Empty');
                }
                else if(useremail == "")
                {
                    toastr.error('Enter mail here !', 'Empty');
                }
                else if(usermobile == "")
                {
                    toastr.error('Enter mobile number here !', 'Empty');
                }
                else if(useraddress == "")
                {
                    toastr.error('Enter address here !', 'Empty');
                }
              
                else
                {
                    var fd = new FormData();

                    fd.append("username", username);
                    fd.append("useremail", useremail);
                    fd.append("usermobile", usermobile);
                    fd.append("useraddress", useraddress);

                    var modal = $('#quickview_modal');
                    modal.modal('show');

            $.ajax({
                        url: 'ajax',
                        data: fd,
                        type:'post',
                        contentType: false,
                        processData: false,
                        success: function(response)
                        {
                                // console.log(response);
                                data = JSON.parse(response);
                                console.log(data);
                                if(data.status == 'Success')
                                {
                                    toastr.success('Welcome!', 'Success');

                                    $("#username").val("");
                                    $("#useremail").val("");
                                    $("#usermobile").val("");
                                    $("#useraddress").val("");
                                }
                                else
                                {
                                    toastr.error('Error!', 'Error Found!')
                                }
                            }
                        });
                }

            })
                    


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

                                    var product_cart = document.getElementById(
                                        'product-carts');
                                    var grandtotal = document.getElementById('grand-total');
                                    var taxtotal = document.getElementById('tax-total');
                                    var grandTotTax = document.getElementById(
                                        'grandTotalWithTax');

                                    console.log(value.product_id)

                                    product_id = value.product_id;
                                    product_category = value.product_category;
                                    cart_id = value.cart_id;
                                    product_name = value.product_name;
                                    product_price = value.product_price;
                                    product_quantity = value.quantity;
                                    // product_size=value.size;

                                    var total_price_cart = value.product_price * value
                                        .quantity;

                                    grand_total += total_price_cart;

                                    tax_total = grand_total * taxRate;

                                    var grandTotalWithTax = grand_total + tax_total;



                                    grandtotal.innerHTML = grand_total;
                                    taxtotal.innerHTML = tax_total;
                                    grandTotTax.innerHTML = '₹' + grandTotalWithTax;

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



            $('#place_order').on('click', function (e) {
                var product_id = $('.tr').map(function () {
                    return $(this).data('id');
                }).get();

                // var size = $('.size').map(function(){
                //     var size_val = $(this).text().trim();
                //     // console.log($(this).html());
                //     return  $(this).text().trim();
                // }).get();

                var price = $('.price').map(function () {
                    var price_val = $(this).html();
                    // console.log($(this).html());
                    return $(this).html();
                }).get();

                var quantity = $('.qty').map(function () {
                    var quantity_val = $(this).val();
                    return $(this).val();
                }).get();

                var total_price = $('.total_price').map(function () {
                    var total_val = $(this).html();
                    // console.log($(this));
                    return $(this).html();
                }).get();

                var product_id_arr = JSON.stringify(product_id);
                // var size_arr       = JSON.stringify(size);
                var quantity_arr = JSON.stringify(quantity);
                var price_arr = JSON.stringify(price);
                var total_price = JSON.stringify(total_price);

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

                    success: function (response) {
                        var result = JSON.parse(response);

                        if (result.status == 'Success') {
                            toastr.success('Order Placed');
                        } else {
                            toastr.error('Unable to place order');
                        }
                    }
                })
            });

            $(document).ready(function () {
                $(document).on('click', '.qtyBtn.plus, .qtyBtn.minus', function () {
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
                        success: function (response) {
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
                        error: function (xhr, status, error) {
                            console.log(xhr
                            .responseText); // Log the error response for debugging
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