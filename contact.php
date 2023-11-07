<?php
    require_once 'datab.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from www.annimexweb.com/items/hema/contact-style1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2023 19:36:32 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title Of Site -->
    <title>IMAX Trophies | Contact Us</title>
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo $path ?>assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo $path ?>assets/css/style-min.css">
    <link rel="stylesheet" href="<?php echo $path ?>assets/css/responsive.css">
</head>

<body class="contact-page contact-style1-page">
    <!--Page Wrapper-->
    <div class="page-wrapper">


        <!--Header-->
        <?php include('header.php'); ?>

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
                                <h1>Contact Us</h1>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--End Page Header-->

            <!--Main Content-->
            <div class="container contact-style1">
                <!-- Contact Form - Details -->
                <div class="contact-form-details section pt-0">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                            <!-- Contact Form -->
                            <div class="formFeilds contact-form form-vertical mb-4 mb-md-0">
                                <div class="section-header">
                                    <h2>Let's Get in touch!</h2>
                                    <p>You can contact us any way that is convenient for you. We are available 24/7 via
                                        fax or email. You can also use a quick contact form below or visit our office
                                        personally. We would be happy to answer your questions.</p>
                                </div>

                                <div id="contact-form" class="contact-form">
                                    <div class="form-row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" id="ContactName" name="name" class="form-control"
                                                    placeholder="Name" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" id="ContactEmail" name="email" class="form-control"
                                                    placeholder="Email" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input class="form-control" type="tel" id="ContactPhone" name="phone"
                                                    pattern="[0-9\-]*" placeholder="Phone Number" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" id="ContactSubject" name="subject"
                                                    class="form-control" placeholder="Subject" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea id="ContactMessage" name="message" class="form-control"
                                                    rows="5" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group mailsendbtn mb-0 w-100">
                                                <input id="submit" class="btn btn-lg" type="submit" name="contactus"
                                                    value="Send Message" />
                                                <div class="loading"><img class="img-fluid"
                                                        src="<?php echo $path ?>assets/images/icons/ajax-loader.gif"
                                                        alt="loading" width="16" height="16"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="response-msg"></div>
                            </div>
                            <!-- End Contact Form -->
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                            <!-- Contact Details -->
                            <div class="contact-details bg-block">
                                <h3 class="mb-3 fs-5">Store information</h3>
                                <ul class="list-unstyled">
                                    <li class="mb-2 address">
                                        <strong class="d-block mb-2">Address :</strong>
                                        <p><i class="icon anm anm-map-marker-al me-2 d-none"></i>3/5311, Trichy Road , MANAPPARAI, 621306.</p>
                                    </li>
                                    <li class="mb-2 phone"><strong>Phone :</strong><i
                                            class="icon anm anm-phone me-2 d-none"></i> <a href="tel:+91 98765 43210">+91 98765 43210</a></li>
                                    <li class="mb-0 email"><strong>Email :</strong><i
                                            class="icon anm anm-envelope-l me-2 d-none"></i> <a
                                            href="mailto:sarandrj@gmail.com">sarandrj@gmail.com</a></li>
                                </ul>
                                <hr>
                                <div class="open-hours">
                                    <strong class="d-block mb-2">Opening Hours</strong>
                                    <p class="lh-lg">
                                    Mon - Sat, 9am - 6pm<br>Sunday, Holiday
                                    </p>

                                    <strong class="d-block mb-2">Customer Care & Whatsapp Chat</strong>
                                    <p class="lh-lg">
                                    Mon-Sun , 24/7 
                                    </p>
                                </div>
                                <hr>
                                <div class="follow-us">
                                    <label class="d-block mb-3"><strong>Stay Connected</strong></label>
                                    <ul class="list-inline social-icons">
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
                                                data-bs-placement="top" title="Instagram"><i
                                                    class="icon anm anm-linkedin-in"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Google plus"><i
                                                    class="icon anm anm-google-plus-g"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Whatsapp"><i
                                                    class="icon anm anm-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Contact Details -->
                        </div>
                    </div>
                </div>
                <!-- End Contact Form - Details -->

                <!-- Contact Map -->
                <div class="contact-maps section p-0">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                           
                           
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d250900.72396840103!2d78.3972128914809!3d10.709488117379088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baa6f0fa20143ab%3A0xce39e30dda6c9240!2sIMAX%20Trophies!5e0!3m2!1sen!2sin!4v1698669568595!5m2!1sen!2sin" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                              
                            
                        </div>
                    </div>
                </div>
                <!-- End Contact Map -->
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
        <script src="<?php echo $path ?>assets/js/plugins.js"></script>
        <!-- Main JS -->
        <script src="<?php echo $path ?>assets/js/main.js"></script>

        <!-- Contact Form JS -->

    </div>
    <!--End Page Wrapper-->

    <!--Toastr  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>

    $(document).ready(function(){

        $("#submit").click(function(){

            var name = $("#ContactName").val().trim();
            var email = $("#ContactEmail").val().trim();
            var phone = $("#ContactPhone").val().trim();
            var subject = $("#ContactSubject").val().trim();
            var message = $("#ContactMessage").val().trim();

            if(name == ''){
                toastr.info("Enter Your Name","Empty")
            }

            else if(email == ''){
                toastr.info("Enter Your Email","Empty")

            }

            else if (phone == ''){
                toastr.info("Enter Your Number","Empty")

            }

            else if (subject == ''){
                toastr.info("Enter Your Subject","Empty")

            }

            else if (message == '')
            {
                 toastr.info("Enter Your Message","Empty")

            }

            else {
                var fd = new FormData();
                fd.append("name",name);
                fd.append("email",email);
                fd.append("phone",phone);
                fd.append("subject",subject);
                fd.append("message",message);

                $.ajax({

                    url:'ajax',
                    type:'post',
                    processData:false,
                    contentType:false,
                    data:fd,

                    success:function(response){
                        var result = JSON.parse(response);
                        if(result.status == "Success"){
                            toastr.success("Sent Successfully","Thank You");
                            $("#ContactName").val("");
                            $("#ContactEmail").val("");
                            $("#ContactPhone").val("");
                            $("#ContactSubmit").val("");
                            $("#ContactMessage").val("");
                        }
                        else{
                            toastr.info("Unable to Send","Error")
                        }
                    }

                });
            }
        });

    });


    </script>
</body>

<!-- Mirrored from www.annimexweb.com/items/hema/contact-style1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2023 19:36:35 GMT -->

</html>