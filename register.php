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

        .passshow .cshowpass {
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

            .passshow .cshowpass {
                position: absolute;
                top: 25%;
                left: 85%;
            }


        }

        .showpass button {
            background: none !important;
            border: 0px !important;
        }

        .cshowpass button {
            background: none !important;
            border: 0px !important;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        #reg{
        background-color:#fe030c;
        border:0px !important;
    }

    #reg:hover{
        background-color:#bd001fd0;
        border:0px !important;
    }
    </style>

</head>

<body class="account-page register-page">
    <!--Page Wrapper-->
    <div class="page-wrapper">
        <!-- Body Container -->
        <div id="page-content mb-0">
            <!--Page Header-->
            <div class="page-header text-center bg-white mb-0">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">

                        </div>
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
                                <div class="customer-form">
                                    <h2 class="text-center fs-4 mb-4">Register here if you are a new customer</h2>
                                    <div class="form-row  justify-content-center">
                                        <div class="form-group col-10">
                                            <label for="CustomerUsername" class="d-none">Username <span
                                                    class="required">*</span></label>
                                            <input type="text" placeholder="Username" id="username" required />
                                        </div>
                                        <div class="form-group col-10">
                                            <label for="num" class="d-none">Phone Number <span
                                                    class="required">*</span></label>
                                            <input type="number" placeholder="Enter Your Number" id="num" />
                                        </div>
                                        <div class="form-group col-10 passshow">
                                            <label for="password" class="d-none">Password <span
                                                    class="required">*</span></label>
                                            <input type="password" placeholder="Password" id="password" required />
                                            <div class="showpass"><button id="show"><i
                                                        class="bi bi-eye-fill h2"></i></button></div>

                                        </div>
                                        <div class="form-group col-10 passshow">
                                            <label for="confirmpassword" class="d-none">Confirm Password <span
                                                    class="required">*</span></label>
                                            <input id="confirmpassword" type="password"
                                                placeholder="Confirm Password" required />
                                            <div class="cshowpass"><button id="cshow"><i
                                                        class="bi bi-eye-fill h2"></i></button></div>

                                        </div>
                                        <!-- <div class="form-group col-10">
                                            <div
                                                class="login-remember-forgot d-flex justify-content-between align-items-center">
                                                <div class="agree-check customCheckbox">
                                                    <input id="agree" name="agree" type="checkbox" value="agree"
                                                        required />
                                                    <label for="agree"> I agree to terms & Policy.</label>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="form-group col-10 mb-0">
                                            <input type="submit" id="reg" class="btn btn-primary btn-lg w-100"
                                                value="Register" />
                                        </div>
                                    </div>

                                    <div class="login-signup-text mt-4 mb-2 fs-6 text-center text-muted">Already have an
                                        account? <a href="login.php" class="btn-link">Login now</a></div>
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

        var confirm = $("#confirmpassword");
        var confirmshow = $("#cshow");

        $("#cshow").click(function () {
            if (confirm.attr("type") === "password") {
                confirm.attr("type", "text");
            } else {
                confirm.attr("type", "password");
            }

        });

        $("#reg").click(function () {

            var pass = $("#password");
            var conpass = $("#confirmpassword");

            if (pass.val() !== conpass.val()) {
                toastr.error("Please Check Confirm PassWord", "Incorrect")

            }

        });


        $(document).ready(function () {
            $("#reg").click(function () {

                var user = $("#username").val().trim();
                var num = $("#num").val().trim();
                var pass = $("#password").val();
                var confirmPass = $("#confirmPassword").val();

                if (user == "") {
                    toastr.error("Enter Username", "Empty !");
                } else if (num == "") {
                    toastr.error("Enter Mobile Number", "Empty !");
                } else if (pass == "") {
                    toastr.error("Enter Password", "Empty !");
                }
                else
                {
                    var fd = new FormData();
                    fd.append("Username",user);
                    fd.append("Number",num);
                    fd.append("password",pass);
                    // fd.append("confirmPass",confirmPass);

                    $.ajax({

                        url:'ajax/register.php',
                        type:'post',
                        contentType:false,
                        processData:false,
                        data:fd,

                        success:function(response){
                        var result = JSON.parse(response);

                        if(result.status == "Success")
                        {
                            toastr.success("Successfully Registered","Welcome !")

                            $("#username").val("");
                            $("#num").val("");
                            $("#password").val("");
                            $("#confirmpassword").val("");

                        }

                        else{
                            toastr.error(result.remarks)
                        }
                    }
                    })
                   
                }



            });


        });
    </script>
    <!--End Page Wrapper-->
</body>

<!-- Mirrored from www.annimexweb.com/items/hema/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2023 19:36:44 GMT -->

</html>