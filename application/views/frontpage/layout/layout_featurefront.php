<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home - DKM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->


    <!-- all css here -->
    <link rel="stylesheet" href="<?php echo $this->common->theme_custome(); ?>assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $this->common->theme_custome(); ?>assets\css\magnific-popup.css">
    <link rel="stylesheet" href="<?php echo $this->common->theme_custome(); ?>assets\css\owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $this->common->theme_custome(); ?>assets\css\font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $this->common->theme_custome(); ?>assets\css\flaticon.css">
    <link rel="stylesheet" href="<?php echo $this->common->theme_custome(); ?>assets\css\ionicons.min.css">
    <link rel="stylesheet" href="<?php echo $this->common->theme_custome(); ?>assets\css\headline.css">
    <link rel="stylesheet" href="<?php echo $this->common->theme_custome(); ?>assets\css\animate.min.css">
    <link rel="stylesheet" href="<?php echo $this->common->theme_custome(); ?>assets\css\material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?php echo $this->common->theme_custome(); ?>assets\css\meanmenu.css">
    <link rel="stylesheet" href="<?php echo $this->common->theme_custome(); ?>assets\css\Pe-icon-7-stroke.css">
    <link rel="stylesheet" href="<?php echo $this->common->theme_custome(); ?>assets\css\bundle.css">
    <link rel="stylesheet" href="<?php echo $this->common->theme_custome(); ?>assets\css\style.css">
    <link rel="stylesheet" href="<?php echo $this->common->theme_custome(); ?>assets\css\responsive.css">
    <script src="<?php echo $this->common->theme_custome(); ?>assets\js\vendor\modernizr-2.8.3.min.js"></script>
</head>

<body>
    <header>
        <!-- header-top-area-start -->
        <div class="header-top-area blue-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 site-branding">
                        <div class="header-logo">
                            <a href="index.html"><img src="<?php echo $this->common->theme_custome(); ?>\assets\img\logo\1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-9 d-none d-md-block">
                        <div class="header-left">
                            <div class="header-text">
                                <div class="header-icon">
                                    <i class="fa fa-phone"></i>
                                    <i class="paint-roller"></i>
                                </div>
                                <div class="header-info">
                                    <span class="phone">+00-1202-235</span>
                                    <span class="gmail">hmend@gmail.com</span>
                                </div>
                            </div>
                            <div class="header-text">
                                <div class="header-icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="header-info">
                                    <span class="phone">2020 Willshire Glen,</span>
                                    <span class="gmail">Alpharetta,USA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 d-block d-md-none d-lg-block">
                        <div class="header-left-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-vimeo"></i></a>
                            <a href="#"><i class="fa fa-tumblr"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- main-menu-area-start -->
        <div id="header-sticky" class="main-menu-area gray-bg ">
            <div class="container">
                <div class="row">
                    <div class=" col-xl-10 col-lg-8">
                        <div class="main-menu">
                            <?php 
                            $this->load->view('frontpage/layout/layout_menu');?>
                        </div>
                    </div>
                    <div class=" col-xl-2 col-lg-4">
                        <div class="make-appointment">
                            <img src="<?php echo $this->common->theme_custome(); ?>\assets\img\logo\2.png" alt="">
                            <a href="#">make appointment</a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-menu-area-end -->
    </header>
        
        
        <?=$content?>
        
    <footer>
        <!-- footer-top-area-start -->
        <div class="footer-top-area gray-bg pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 pr-0">
                        <div class="footer-wrapper mb-30">
                            <h2 class="footer-section">about us</h2>
                            <div class="footer-text">
                                <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempo
                                    incididunt ut labore et dolore ma gnall aliqua. Ut enim ad minim. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 offset-lg-1 col-md-4">
                        <div class="footer-wrapper mb-30">
                            <h2 class="footer-section">SUPPORT</h2>
                            <ul class="footer-menu">
                                <li><a href="#">Documentation</a></li>
                                <li><a href="#">Forums</a></li>
                                <li><a href="#">Language Packs</a></li>
                                <li><a href="#">Release Status</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 offset-lg-1 d-block d-md-none d-lg-block">
                        <div class="footer-wrapper mb-30">
                            <h2 class="footer-section">link</h2>
                            <ul class="footer-menu">
                                <li><a href="#">Our Company</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Recent Work</a></li>
                                <li><a href="#">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="footer-wrapper mb-30">
                            <h2 class="footer-section">address</h2>
                            <ul class="footer-link">
                                <li><i class="fa fa-phone"></i><span>1st floor dhaka bangladesh</span></li>
                                <li><i class="fa fa-envelope-open"></i><span>(801) 2345 - 6789</span></li>
                                <li><i class="fa fa-envelope-open"></i><span>admin@yourmail.com</span></li>
                                <li><i class="fa fa-clock-o"></i><span>Sat - Fry: 9:00 am- 2:00pm</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-top-area-end -->
        <!-- footer-bottom-area-start -->
        <div class="footer-bottom-area gray-bg-1 ptb-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="copyright">
                            <p>Copyright © 2019 <a href="#">Hmend</a> All Right Reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-vimeo"></i></a>
                            <a href="#"><i class="fa fa-tumblr"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom-area-end -->
    </footer>
    

    <script src="<?php echo $this->common->theme_custome(); ?>\assets\js\vendor\jquery-1.12.0.min.js"></script>
    <script src="<?php echo $this->common->theme_custome(); ?>\assets\js\popper.min.js"></script>
    <script src="<?php echo $this->common->theme_custome(); ?>\assets\js\bootstrap.min.js"></script>
    <script src="<?php echo $this->common->theme_custome(); ?>\assets\js\headline.js"></script>
    <script src="<?php echo $this->common->theme_custome(); ?>\assets\js\jquery.magnific-popup.min.js"></script>
    <script src="<?php echo $this->common->theme_custome(); ?>\assets\js\jquery.scrollUp.min.js"></script>
    <script src="<?php echo $this->common->theme_custome(); ?>\assets\js\isotope.pkgd.min.js"></script>
    <script src="<?php echo $this->common->theme_custome(); ?>\assets\js\imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo $this->common->theme_custome(); ?>\assets\js\jquery.counterup.min.js"></script>
    <script src="<?php echo $this->common->theme_custome(); ?>\assets\js\waypoints.min.js"></script>
    <script src="<?php echo $this->common->theme_custome(); ?>\assets\js\jquery.parallax-1.1.3.js"></script>
    <script src="<?php echo $this->common->theme_custome(); ?>\assets\js\owl.carousel.min.js"></script>
    <script src="<?php echo $this->common->theme_custome(); ?>\assets\js\jquery.meanmenu.js"></script>
    <script src="<?php echo $this->common->theme_custome(); ?>\assets\js\ajax-mail.js"></script>
    <script src="<?php echo $this->common->theme_custome(); ?>\assets\js\plugins.js"></script>
    <script src="<?php echo $this->common->theme_custome(); ?>\assets\js\main.js"></script>
    <!-- /.scroll-to-top -->
    
  
</body>

</html>