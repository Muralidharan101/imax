<style>
    .logoImg img {
        display: block;
        max-width: 180px;
        width: 180px;
        height: 80px;

    }

</style>
<header class="header d-flex align-items-center header-1 header-fixed" style="background: #fe0609;">
    <div class="container">        
        <div class="row">
            <!--Logo-->
            <div class="logo col-5 col-sm-3 col-md-3 col-lg-2 mb-2 align-self-center">
                <a class="logo1" href="javascript:void(0)"><img src="<?php echo $path ?>img/logo/logo1.png" alt="Hema Multipurpose Html Template" title="Hema Multipurpose Html Template" style="width: 100px;"/></a>

            </div>
            <!--End Logo-->
            <style>
                #AccessibleNav li.lvl1 a {
                    color: white;
                }
            </style>
            <!--Menu-->
            <div class="col-1 col-sm-1 col-md-1 col-lg-7 align-self-center d-menu-col">
                <nav class="navigation" id="AccessibleNav">
                    <ul id="siteNav" class="site-nav medium center">
                        <li class="lvl1"><a href="home">Home</a>
                        </li>
                        <li class="lvl1"><a href="aboutUs.php">About us</a>
                        </li>
                        <li class="lvl1 parent dropdown">
                            <a>
                                Shop
                                <i class="icon anm anm-angle-down-l"></i>
                            </a>
                            <ul class="dropdown">
                                <li><a href="shop_trophy.php" class="site-nav lvl-2">Trophies</a></li>
                                <li><a href="shop_medal.php" class="site-nav lvl-2">Medals</a></li>
                                <li><a href="shop_sheild.php" class="site-nav lvl-2">Shields</a></li>
                            </ul>
                        </li>
                        <li class="lvl1"><a href="gallery.php">Gallery</a>
                        </li> 
                        <li class="lvl1"><a href="contact.php">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--End Menu-->
            <!--Right Icon-->
            <div class="col-7 col-sm-9 col-md-9 col-lg-3  align-self-center icons-col text-right">
                <div class="d-flex justify-content-end">
                    <div class="select-wrap language-picker float-start" style="margin-right: 10px;">
                        <ul class="default-option">
                            <li><div class="option english"><div class="icon"><img src="<?php echo $path ?>assets/images/flag/english.png" alt="english" width="24" height="24"></div><span style="color: #fff;">English</span></div></li>
                        </ul>
                        <ul class="select-ul" style="background: #a71c21;">
                            <li><div class="option english"><div class="icon"><img src="<?php echo $path ?>assets/images/flag/english.png" alt="english" width="24" height="24"></div><span style="color: #fff;">English</span></div></li>
                            <li><div class="option arabic"><div class="icon"><img src="<?php echo $path ?>assets/images/flag/india.png" alt="தமிழ்" width="24" height="24" style="height: 10px !important;"></div><span style="color: #fff;">தமிழ்</span></div></li>
                            <li><div class="option english"><div class="icon"><img src="<?php echo $path ?>assets/images/flag/india.png" alt="हिन्दी " width="24" height="24" style="height: 10px !important;"></div><span style="color: #fff;">हिन्दी </span></div></li>
                        </ul>
                    </div>
                    <div class="account-parent iconset">
                        <a href="tel:+917010303571">
                            <i class="icon anm anm-phone-l me-2" style="color: #fff;"></i>
                        </a>
                    </div>
                    <!--End Search-->
                    <!--Account-->
                    <div class="account-parent iconset">
                        <div class="account-link" title="Account"><i class="hdr-icon icon anm anm-user-al" style="color: #fff;"></i></div>
                        <div id="accountBox">
                            <div class="customer-links">
                                <ul class="m-0">
                                    <li><a href="javascript:void(0)"><i class="icon anm anm-sign-in-al"></i>Sign In</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon anm anm-user-al"></i>Register</a></li>
                                    <li><a href="my-account.php"><i class="icon anm anm-user-cil"></i>My Account</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon anm anm-heart-l"></i>Wishlist</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon anm anm-random-r"></i>Compare</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon anm anm-sign-out-al"></i>Sign out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Account-->
                    <!--Wishlist-->
                    <!-- <div class="wishlist-link iconset" title="Wishlist"><a href="wishlist-style1.html"><i class="hdr-icon icon anm anm-heart-l"></i><span class="wishlist-count">0</span></a></div> -->
                    <!--End Wishlist-->
                    <!--Minicart-->
                    <div class="header-cart iconset" title="Cart">
                        <a href="cart-section.php" class="header-cart btn-minicart clr-none"><i class="hdr-icon icon anm anm-cart-l"></i><span class="cart-count">2</span></a>
                    </div>
                    <!--End Minicart-->
                    <!--Mobile Toggle-->
                    <button type="button" class="iconset pe-0 menu-icon js-mobile-nav-toggle mobile-nav--open d-lg-none" title="Menu"><i class="hdr-icon icon anm anm-times-l" style="color: #fff;"></i><i class="hdr-icon icon anm anm-bars-r"></i></button>
                    <!--End Mobile Toggle-->
                </div>
                
            </div>
            <!--End Right Icon-->
        </div>
    </div>
</header>


<div class="mobile-nav-wrapper" role="navigation">
    <div class="closemobileMenu">Close Menu <i class="icon anm anm-times-l"></i></div>
    <ul id="MobileNav" class="mobile-nav">
        <li class="lvl1 parent dropdown"><a href="home">Home <i class="icon anm anm-angle-down-l"></i></a></li>

        
        <li class="lvl1 parent megamenu"><a href="aboutUs.php">About us </a></li>

        <li class="lvl1 parent megamenu"><a href="#">Shop <i class="icon anm anm-angle-down-l"></i></a>

            <ul class="lvl-2">
                <li><a href="shop_trophy.php" class="site-nav">Trophies</a></li>
                <li><a href="shop_medal.php" class="site-nav">Medals</a></li>
                <li><a href="shop_sheild.php" class="site-nav">Sheilds</a></li>
            </ul>
        </li>

        <li class="lvl1 parent megamenu"><a href="gallery.php">Gallery </a></li>
        <li class="lvl1 parent dropdown"><a href="contact.php">Contact Us</a></li>


        <li class="mobile-menu-bottom">
            <div class="mobile-links">
                <ul class="list-inline d-inline-flex flex-column w-100">
                    <li><a href="login.html" class="d-flex align-items-center"><i
                                class="icon anm anm-sign-in-al"></i>Sign In</a></li>
                    <li><a href="register.html" class="d-flex align-items-center"><i
                                class="icon anm anm-user-al"></i>Register</a></li>
                    <li><a href="my-account.html" class="d-flex align-items-center"><i
                                class="icon anm anm-user-cil"></i>My Account</a></li>
                    <li class="title h5">Need Help?</li>
                    <li><a href="tel:401234567890" class="d-flex align-items-center"><i
                                class="icon anm anm-phone-l"></i> (+40) 123 456 7890</a></li>
                    <li><a href="mailto:info@example.com" class="d-flex align-items-center"><i
                                class="icon anm anm-envelope-l"></i> info@example.com</a></li>
                </ul>
            </div>
            <div class="mobile-follow mt-2">
                <h5 class="title">Follow Us</h5>
                <ul class="list-inline social-icons d-inline-flex mt-1">
                    <li class="list-inline-item"><a href="#" title="Facebook"><i
                                class="icon anm anm-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" title="Twitter"><i class="icon anm anm-twitter"></i></a>
                    </li>
                    <li class="list-inline-item"><a href="#" title="Pinterest"><i
                                class="icon anm anm-pinterest-p"></i></a></li>
                    <li class="list-inline-item"><a href="#" title="Linkedin"><i
                                class="icon anm anm-linkedin-in"></i></a></li>
                    <li class="list-inline-item"><a href="#" title="Instagram"><i
                                class="icon anm anm-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" title="Youtube"><i class="icon anm anm-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>