<?php include_once __DIR__ . '/../common/header.php'; ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Landscaping, Gardening, Florists, Groundskeeping">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sangam Initiative</title>
    <link rel="shortcut icon" href="<?php echo base_url(''); ?>include/web/images/favicon.ico" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>include/web/fonts/flaticon/flaticon_gadden.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>include/web/fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>include/web/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>include/web/vendor/magnific-popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>include/web/vendor/slick/slick.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>include/web/vendor/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>include/web/vendor/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>include/web/vendor/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>include/web/css/default.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>include/web/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>include/web/css/custom.css">
</head>

<body>
    <div class="preloader">
        <div class="loader">
            <div class="pre-shadow"></div>
            <div class="pre-box"></div>
        </div>
    </div>
    <div class="modal fade search-modal" id="search-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form>
                    <div class="form_group">
                        <input type="search" class="form_control" placeholder="Search here" name="search">
                        <label><i class="fa fa-search"></i></label>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade sidebar-panel-wrapper" id="sidebar-modal">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <button class="close" data-dismiss="modal"><i class="far fa-times"></i></button>
                <div class="sidebar-wrapper">
                    <div class="sidebar-information-area">
                        <div class="row no-gutters">
                            <div class="col-lg-4 sidebar-widget">
                                <div class="sidebar-info-widget">
                                    <a href="index.html" class="footer-logo"><img src="<?php echo base_url(''); ?>include/web/images/logo/logo-white.png" alt="Brand Logo"></a>
                                    <p>Sed ut perspiciatis unde omni natus voluptatem accusantium doloremque laudantium aperia maquep quae abillo
                                        inventore veritatis architecto
                                    </p>
                                    <div class="social-item">
                                        <h6>Follow Us</h6>
                                        <ul class="social-link">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 sidebar-widget">
                                <div class="sidebar-info-widget">
                                    <h4 class="title">Get In Touch</h4>
                                    <div class="contact-info-item-two">
                                        <h6 class="title"><i class="far fa-map-marker-alt"></i>Location</h6>
                                        <p>558 Main Street, 2nd Block
                                            Melbourne, Australia
                                        </p>
                                    </div>
                                    <div class="contact-info-item-two">
                                        <h6 class="title"><i class="far fa-envelope-open"></i>Email Us</h6>
                                        <p><a href="mailto:support@gmail.com">support@gmail.com</a></p>
                                    </div>
                                    <div class="contact-info-item-two">
                                        <h6 class="title"><i class="far fa-phone-plus"></i>Hotline</h6>
                                        <p><a href="tel:+000(123)45688">+000 (123) 456 88</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 sidebar-widget">
                                <div class="sidebar-info-widget">
                                    <h4 class="title">Newsletter</h4>
                                    <form>
                                        <div class="form_group">
                                            <input type="email" class="form_control" placeholder="Email Address" required>
                                            <button class="main-btn secondary-btn">Subscribe Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-gallery pt-80">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-4">
                                <div class="single-gallery-item">
                                    <div class="gallery-img">
                                        <img src="<?php echo base_url(''); ?>include/web/images/gallery/sgl-1.jpg" alt="Gallery Image">
                                        <div class="hover-overlay">
                                            <a href="<?php echo base_url(''); ?>include/web/images/gallery/sgl-1.jpg" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-4">
                                <div class="single-gallery-item">
                                    <div class="gallery-img">
                                        <img src="<?php echo base_url(''); ?>include/web/images/gallery/sgl-2.jpg" alt="Gallery Image">
                                        <div class="hover-overlay">
                                            <a href="<?php echo base_url(''); ?>include/web/images/gallery/sgl-2.jpg" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-4">
                                <div class="single-gallery-item">
                                    <div class="gallery-img">
                                        <img src="<?php echo base_url(''); ?>include/web/images/gallery/sgl-3.jpg" alt="Gallery Image">
                                        <div class="hover-overlay">
                                            <a href="<?php echo base_url(''); ?>include/web/images/gallery/sgl-3.jpg" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-4">
                                <div class="single-gallery-item">
                                    <div class="gallery-img">
                                        <img src="<?php echo base_url(''); ?>include/web/images/gallery/sgl-4.jpg" alt="Gallery Image">
                                        <div class="hover-overlay">
                                            <a href="<?php echo base_url(''); ?>include/web/images/gallery/sgl-4.jpg" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-4">
                                <div class="single-gallery-item">
                                    <div class="gallery-img">
                                        <img src="<?php echo base_url(''); ?>include/web/images/gallery/sgl-5.jpg" alt="Gallery Image">
                                        <div class="hover-overlay">
                                            <a href="<?php echo base_url(''); ?>include/web/images/gallery/sgl-6.jpg" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-4">
                                <div class="single-gallery-item">
                                    <div class="gallery-img">
                                        <img src="<?php echo base_url(''); ?>include/web/images/gallery/sgl-6.jpg" alt="Gallery Image">
                                        <div class="hover-overlay">
                                            <a href="<?php echo base_url(''); ?>include/web/images/gallery/sgl-6.jpg" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header-area header-one transparent-header">
        <div class="container-fluid">
            <div class="header-top-bar text-white main-bg d-none d-xl-block">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="top-left">
                            <span>Welcome to Gadden a modern Gardening & Landscape Contact Us</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="top-right float-lg-right">
                            <ul class="social-link">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-navigation">
            <div class="nav-overlay"></div>
            <div class="container-fluid">
                <div class="primary-menu">
                    <div class="site-branding">
                        <a href="index.html" class="brand-logo"><img src="<?php echo base_url(''); ?>include/web/images/logo/logo-black.png" alt="Site Logo"></a>
                    </div>
                    <div class="nav-menu">
                        <div class="mobile-logo mb-30 d-block d-xl-none">
                            <a href="index.html" class="brand-logo"><img src="<?php echo base_url(''); ?>include/web/images/logo/logo-black.png" alt="Site Logo"></a>
                        </div>
                        <div class="nav-search mb-30 d-block d-xl-none ">
                            <form>
                                <div class="form_group">
                                    <input type="email" class="form_control" placeholder="Search Here" name="email" required>
                                    <button class="search-btn"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <nav class="main-menu">
                            <ul>
                                <li class="menu-item"><a href="">Home</a></li>
                                <li class="menu-item"><a href="">About</a></li>
                                <li class="menu-item has-children">
                                    <a href="#">Outreach</a>
                                    <ul class="sub-menu">
                                        <li><a href="">Outreach 1</a></li>
                                        <li><a href="">Outreach 2</a></li>
                                        <li><a href="">Outreach 3</a></li>
                                        <li><a href="">Outreach 4</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children">
                                    <a href="#">Networking</a>
                                    <ul class="sub-menu">
                                        <li><a href="">Individual</a></li>
                                        <li><a href="">Group</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children">
                                    <a href="#">EOI</a>
                                    <ul class="sub-menu">
                                        <li><a href="">Skilled Independent</a></li>
                                        <li><a href="">Skilled Nominated </a></li>
                                        <li><a href="">Skilled worked Regional</a></li>
                                        <li><a href="">Business Innovation and Investment</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="">Contact Us</a></li>
                            </ul>
                        </nav>
                        <div class="menu-button mt-40 d-xl-none">
                            <a href="" class="main-btn secondary-btn">Registration</a>
                        </div>
                    </div>
                    <div class="nav-right-item">
                        <div class="menu-button d-xl-block d-none">
                            <a href="" class="main-btn primary-btn">Registration</a>
                        </div>
                        <div class="bar-button" data-toggle="modal" data-target="#sidebar-modal">
                            <img src="<?php echo base_url(''); ?>include/web/images/bar.png" alt="Image">
                        </div>
                        <div class="navbar-toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="banner-section">
        <div class="hero-wrapper-one gray-bg">
            <div class="shape shape-one animate-float-y"><span><img src="<?php echo base_url(''); ?>include/web/images/hero/shape-1.png" alt="shape"></span></div>
            <div class="shape shape-two animate-float-x"><span><img src="<?php echo base_url(''); ?>include/web/images/hero/shape-2.png" alt="shape"></span></div>
            <div class="shape shape-three animate-float-x"><span><img src="<?php echo base_url(''); ?>include/web/images/hero/shape-3.png" alt="shape"></span></div>
            <div class="container">
                <div class="row align-items-lg-center">
                    <div class="col-xl-6 col-lg-12">
                        <div class="hero-content">
                            <h1 class="wow fadeInUp" data-wow-delay=".4s">Experience the future of planning</h1>
                            <p class="wow fadeInDown" data-wow-delay=".6s">Embark on a transformative journey with Sangam Initiative, charting the course towards next-generation planning</p>
                            <div class="hero-button mb-30 wow fadeInUp" data-wow-delay=".7s">
                                <a href="" class="main-btn golden-btn mb-10">Explore More</a>
                                <a href="" class="main-btn filled-btn mb-10">How It Work</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="hero-image-box d-xl-block d-none wow fadeInRight" data-wow-delay=".75s">
                            <img src="<?php echo base_url(''); ?>include/web/custom/Experience_the_future_of_planning.jpg" alt="Hero Image">
                            <div class="shape hero-svg">
                                <svg width="237" height="569" viewBox="0 0 237 569" fill="none">
                                    <path d="M0.552583 568.307L1.99989 0.226473C1.99989 0.226473 237.025 -9.37181 236.276 284.731C235.527 578.834 0.552583 568.307 0.552583 568.307Z" fill="#F1D2A9" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service-bgc-section p-r z-1 main-bg pt-50 pb-50">
        <div class="shape shape-one"><span><img src="<?php echo base_url(''); ?>include/web/images/shape/leaf-1.png" alt="Leaf Png"></span></div>
        <div class="shape shape-two"><span><img src="<?php echo base_url(''); ?>include/web/images/shape/leaf-2.png" alt="Leaf Png"></span></div>
        <div class="shape shape-three"><span><img src="<?php echo base_url(''); ?>include/web/images/shape/leaf-3.png" alt="Leaf Png"></span></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-12">
                    <!--====== Section Title ======-->
                    <div class="section-title text-white text-center mb-50 wow fadeInDown">
                        <span class="sub-title"></i>What We Do</span>
                        <h2>The Sangam Initiative caters to individuals like you and your work</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-sm-12">
                    <div class="single-service-item mb-30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-info">
                            <div class="shape icon-shape"> <img src="<?php echo base_url(''); ?>include/web/custom/BIM_Gen_Designers.png" alt=""></div>
                            <div class="icon">
                                <img src="<?php echo base_url(''); ?>include/web/custom/BIM_Gen_Designers.png" alt="">
                            </div>
                            <h4 class="title"><a href="">BIM/Gen Designers</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-12">
                    <div class="single-service-item mb-30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-info">
                            <div class="shape icon-shape"> <img src="<?php echo base_url(''); ?>include/web/custom/BIM_Gen_Designers.png" alt=""></div>
                            <div class="icon">
                                <img src="<?php echo base_url(''); ?>include/web/custom/BIM_Gen_Designers.png" alt="">
                            </div>
                            <h4 class="title"><a href="">BIM/Gen Designers</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-12">
                    <div class="single-service-item mb-30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-info">
                            <div class="shape icon-shape"> <img src="<?php echo base_url(''); ?>include/web/custom/BIM_Gen_Designers.png" alt=""></div>
                            <div class="icon">
                                <img src="<?php echo base_url(''); ?>include/web/custom/BIM_Gen_Designers.png" alt="">
                            </div>
                            <h4 class="title"><a href="">AI/ML Experts/Big Data Analysts</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-12">
                    <div class="single-service-item mb-30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-info">
                            <div class="shape icon-shape"> <img src="<?php echo base_url(''); ?>include/web/custom/BIM_Gen_Designers.png" alt=""></div>
                            <div class="icon">
                                <img src="<?php echo base_url(''); ?>include/web/custom/BIM_Gen_Designers.png" alt="">
                            </div>
                            <h4 class="title"><a href="">M2M & IoT</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-12">
                    <div class="single-service-item mb-30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-info">
                            <div class="shape icon-shape"> <img src="<?php echo base_url(''); ?>include/web/custom/BIM_Gen_Designers.png" alt=""></div>
                            <div class="icon">
                                <img src="<?php echo base_url(''); ?>include/web/custom/BIM_Gen_Designers.png" alt="">
                            </div>
                            <h4 class="title"><a href="">System Integration</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-12">
                    <div class="single-service-item mb-30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-info">
                            <div class="shape icon-shape"> <img src="<?php echo base_url(''); ?>include/web/custom/BIM_Gen_Designers.png" alt=""></div>
                            <div class="icon">
                                <img src="<?php echo base_url(''); ?>include/web/custom/BIM_Gen_Designers.png" alt="">
                            </div>
                            <h4 class="title"><a href="">Environmental Data Experts</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-12">
                    <div class="single-service-item mb-30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-info">
                            <div class="shape icon-shape"> <img src="<?php echo base_url(''); ?>include/web/custom/BIM_Gen_Designers.png" alt=""></div>
                            <div class="icon">
                                <img src="<?php echo base_url(''); ?>include/web/custom/BIM_Gen_Designers.png" alt="">
                            </div>
                            <h4 class="title"><a href="">Event Planners</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-12">
                    <div class="single-service-item mb-30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-info">
                            <div class="shape icon-shape"> <img src="<?php echo base_url(''); ?>include/web/custom/BIM_Gen_Designers.png" alt=""></div>
                            <div class="icon">
                                <img src="<?php echo base_url(''); ?>include/web/custom/BIM_Gen_Designers.png" alt="">
                            </div>
                            <h4 class="title"><a href="">Telecom Experts</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-area footer-wave pt-50 p-r z-1">
        <div class="wave-shapes">
            <img src="<?php echo base_url(''); ?>include/web/images/shape/wave-shape-1.png" class="w-shape one" alt="wave shape">
            <img src="<?php echo base_url(''); ?>include/web/images/shape/wave-shape-2.png" class="w-shape two" alt="wave shape">
        </div>
        <div class="footer-wrapper text-white main-bg p-r z-1">
            <div class="shape shape-one animate-float-y"><span><img src="<?php echo base_url(''); ?>include/web/images/shape/tree.png" alt="Tree Image"></span></div>
            <div class="shape shape-two animate-float-y"><span><img src="<?php echo base_url(''); ?>include/web/images/shape/tree2.png" alt="Tree Image"></span></div>
            <div class="container">
                <!--====== Footer Widget ======-->
                <div class="footer-widget-area pt-55 pb-40 p-r z-1">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <!--====== Footer Widget ======-->
                            <div class="footer-widget footer-about-widget mb-40 pr-lg-70 wow fadeInDown">
                                <div class="widget-content">
                                    <div class="footer-logo mb-25">
                                        <a href="index.html"><img src="<?php echo base_url(''); ?>include/web/images/logo/logo-white.png" alt="Logo"></a>
                                    </div>
                                    <p>Quis autem eum reprehenderit volutate
                                        velit quam molestiae conseuatur
                                    </p>
                                    <a href="contact.html" class="main-btn filled-btn filled-white">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <!--====== Footer Widget ======-->
                            <div class="footer-widget contact-info-widget mb-40 wow fadeInUp">
                                <h4 class="widget-title">Get In Touch</h4>
                                <div class="widget-content">
                                    <ul class="info-list">
                                        <li>558 Main Street, 2nd Block
                                            Melbourne, Australia
                                        </li>
                                        <li><a href="mailto:support@gmail.com">support@gmail.com</a></li>
                                        <li><a href="tel:+000(123)45688">+000 (123) 456 88</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12">
                            <!--====== Footer Widget ======-->
                            <div class="footer-widget footer-nav-widget mb-40 wow fadeInDown">
                                <h4 class="widget-title">Quick Link</h4>
                                <div class="widget-content">
                                    <ul class="footer-nav">
                                        <li><a href="#">About Company</a></li>
                                        <li><a href="#">Popular Services</a></li>
                                        <li><a href="#">Need a Career ?</a></li>
                                        <li><a href="#">Meet Our Team</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!--====== Footer Widget ======-->
                            <div class="footer-widget footer-gallery-widget float-lg-right mb-40 wow fadeInUp">
                                <h4 class="widget-title">Gallery</h4>
                                <div class="widget-content">
                                    <ul class="gallery-list">
                                        <li>
                                            <a href="#">
                                                <img src="<?php echo base_url(''); ?>include/web/images/gallery/thumb-widget-1.jpg" alt="Image">
                                                <div class="hover-overlay">
                                                    <i class="fas fa-arrow-right"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?php echo base_url(''); ?>include/web/images/gallery/thumb-widget-2.jpg" alt="Image">
                                                <div class="hover-overlay">
                                                    <i class="fas fa-arrow-right"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?php echo base_url(''); ?>include/web/images/gallery/thumb-widget-3.jpg" alt="Image">
                                                <div class="hover-overlay">
                                                    <i class="fas fa-arrow-right"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?php echo base_url(''); ?>include/web/images/gallery/thumb-widget-4.jpg" alt="Image">
                                                <div class="hover-overlay">
                                                    <i class="fas fa-arrow-right"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?php echo base_url(''); ?>include/web/images/gallery/thumb-widget-5.jpg" alt="Image">
                                                <div class="hover-overlay">
                                                    <i class="fas fa-arrow-right"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?php echo base_url(''); ?>include/web/images/gallery/thumb-widget-6.jpg" alt="Image">
                                                <div class="hover-overlay">
                                                    <i class="fas fa-arrow-right"></i>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=== Copyright Area ===-->
                <div class="copyright-area">
                    <div class="row">
                        <div class="col-lg-6">
                            <!--====== Copyright Text ======-->
                            <div class="copyright-text">
                                <P>Copy&copy; 2023 Gadden. All Rights Reserved.</P>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!--====== Copyright Nav ======-->
                            <div class="copyright-nav float-lg-right">
                                <ul>
                                    <li><a href="#">Setting & Privacy</a></li>
                                    <li><a href="#">Faqs</a></li>
                                    <li><a href="#">Food Menu</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" class="back-to-top"><i class="far fa-angle-up"></i></a>
    <script src="<?php echo base_url(''); ?>include/web/vendor/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url(''); ?>include/web/vendor/popper/popper.min.js"></script>
    <script src="<?php echo base_url(''); ?>include/web/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(''); ?>include/web/vendor/slick/slick.min.js"></script>
    <script src="<?php echo base_url(''); ?>include/web/vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(''); ?>include/web/vendor/isotope.min.js"></script>
    <script src="<?php echo base_url(''); ?>include/web/vendor/imagesloaded.min.js"></script>
    <script src="<?php echo base_url(''); ?>include/web/vendor/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(''); ?>include/web/vendor/jquery.waypoints.js"></script>
    <script src="<?php echo base_url(''); ?>include/web/vendor/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url(''); ?>include/web/vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(''); ?>include/web/vendor/wow.min.js"></script>
    <script src="<?php echo base_url(''); ?>include/web/js/theme.js"></script>
</body>

</html>
<?php include_once __DIR__ . '/../common/footer.php'; ?>