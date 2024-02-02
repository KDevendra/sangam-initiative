<?php include_once __DIR__ . '/../common/header.php'; ?>
<!DOCTYPE html>
<html lang="en">

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
                                    <a href="index.html" class="footer-logo"><img src="<?php echo base_url(''); ?>include/web/custom/Department_Of_Telecommunications_White.png" alt="Brand Logo"></a>
                                    <p>Sangam is on a mission to transform infrastructure planning and design by converging digital technologies and data. </p>
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
        <div class="header-navigation">
            <div class="nav-overlay"></div>
            <div class="container-fluid">
                <div class="header-top-bar text-white main-bg d-xl-block topNavbar">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="imgPerent">
                                <img src="<?php echo base_url('') ?>include/web/custom/india-gov-in.png" alt="">
                                <img src="<?php echo base_url('') ?>include/web/custom/g20-logo.png" alt="">
                                <img src="<?php echo base_url('') ?>include/web/custom/swachh-bharat.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="primary-menu">
                    <div class="site-branding">
                        <a href="index.html" class="brand-logo"><img src="<?php echo base_url(''); ?>include/web/custom/Department_Of_Telecommunications.png" alt="Site Logo"></a>
                    </div>
                    <div class="nav-menu">
                        <div class="mobile-logo mb-30 d-block d-xl-none">
                            <a href="index.html" class="brand-logo"><img src="<?php echo base_url(''); ?>include/web/custom/Department_Of_Telecommunications.png" alt="Site Logo"></a>
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
                                <li class="menu-item"><a href="">Schedule</a></li>
                                <li class="menu-item has-children">
                                    <a href="#">Outreach</a>
                                    <ul class="sub-menu">
                                        <li><a href="">Sequence of Events
                                            </a>
                                        </li>
                                        <li><a href="">Speakers</a></li>
                                        <li><a href="">Registration details
                                            </a>
                                        </li>
                                        <li><a href="">Who can participate
                                            </a>
                                        </li>
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
                                <li class="menu-item"><a href="">Why Attending</a></li>
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
                        <div class="hero-image-box d-xl-block  wow fadeInRight" data-wow-delay=".75s">
                            <img src="<?php echo base_url(''); ?>include/web/custom/Experience_the_future_of_planning.jpg" alt="Hero Image">
                            <div class="shape hero-svg">
                                <svg width="237" height="569" viewBox="0 0 237 569" fill="none">
                                    <path d="M0.552583 568.307L1.99989 0.226473C1.99989 0.226473 237.025 -9.37181 236.276 284.731C235.527 578.834 0.552583 568.307 0.552583 568.307Z" fill="#29c5f6" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service-bgc-section p-r z-1 main-bg pt-50 pb-50">
        <div class="shape shape-one"><span><img src="<?php echo base_url('') ?>include/web/custom/network.png" alt="Leaf Png"></span></div>
        <div class="shape shape-two"><span><img src="<?php echo base_url('') ?>include/web/custom/network.png" alt="Leaf Png"></span></div>
        <div class="shape shape-three">
            <span><img src="<?php echo base_url(''); ?>include/web/images/shape/leaf-3.png" alt="Leaf Png"></span>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-12">
                    <div class="section-title text-white text-center mb-50 wow fadeInDown">
                        <span class="sub-title text-white"><img src="http://localhost/sangam-initiative/include/web/custom/technology_white.png" alt=""> What We Do</span>
                        <h2>The Sangam Initiative caters to individuals like you and your work</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-sm-12">
                    <div class="single-service-item mb-30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-info">
                            <div class="shape icon-shape"> <img src="<?php echo base_url(''); ?>include/web/custom/GIS.png" alt=""></div>
                            <div class="icon">
                                <img src="<?php echo base_url(''); ?>include/web/custom/Top_GIS_Sat Imagery.png" alt="">
                            </div>
                            <h4 class="title"><a href="">GIS/Sat Imagery</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-12">
                    <div class="single-service-item mb-30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-info">
                            <div class="shape icon-shape"> <img src="<?php echo base_url(''); ?>include/web/custom/BIM_Gen_Designers.png" alt=""></div>
                            <div class="icon">
                                <img src="<?php echo base_url(''); ?>include/web/custom/Top_BIM_Gen Designers.png" alt="">
                            </div>
                            <h4 class="title"><a href="">BIM/Gen Designers</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-12">
                    <div class="single-service-item mb-30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-info">
                            <div class="shape icon-shape"> <img src="<?php echo base_url(''); ?>include/web/custom/artifical-intelligence.png" alt=""></div>
                            <div class="icon">
                                <img src="<?php echo base_url(''); ?>include/web/custom/Top_Artifical_Intelligence.png" alt="">
                            </div>
                            <h4 class="title"><a href="">AI/ML Experts/Big Data Analysts</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-12">
                    <div class="single-service-item mb-30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-info">
                            <div class="shape icon-shape"> <img src="<?php echo base_url(''); ?>include/web/custom/internet-of-things.png" alt=""></div>
                            <div class="icon">
                                <img src="<?php echo base_url(''); ?>include/web/custom/Top_Internet_of_Things.png" alt="">
                            </div>
                            <h4 class="title"><a href="">M2M & IoT</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-12">
                    <div class="single-service-item mb-30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-info">
                            <div class="shape icon-shape"> <img src="<?php echo base_url(''); ?>include/web/custom/System-Integration.png" alt=""></div>
                            <div class="icon">
                                <img src="<?php echo base_url(''); ?>include/web/custom/Top_System_Integration.png" alt="">
                            </div>
                            <h4 class="title"><a href="">System Integration</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-12">
                    <div class="single-service-item mb-30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-info">
                            <div class="shape icon-shape"> <img src="<?php echo base_url(''); ?>include/web/custom/Environmental-Data-Experts.png" alt=""></div>
                            <div class="icon">
                                <img src="<?php echo base_url(''); ?>include/web/custom/Top_Environmental_Data_Experts.png" alt="">
                            </div>
                            <h4 class="title"><a href="">Environmental Data Experts</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-12">
                    <div class="single-service-item mb-30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-info">
                            <div class="shape icon-shape"> <img src="<?php echo base_url(''); ?>include/web/custom/Event-Planners.png" alt=""></div>
                            <div class="icon">
                                <img src="<?php echo base_url(''); ?>include/web/custom/Top_Event_Planners.png" alt="">
                            </div>
                            <h4 class="title"><a href="">Event Planners</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-12">
                    <div class="single-service-item mb-30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-info">
                            <div class="shape icon-shape"> <img src="<?php echo base_url(''); ?>include/web/custom/Telecom-Experts.png" alt=""></div>
                            <div class="icon">
                                <img src="<?php echo base_url(''); ?>include/web/custom/Top_Telecom_Experts.png" alt="">
                            </div>
                            <h4 class="title"><a href="">Telecom Experts</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-section">
        <div class="container-fluid">
            <div class="about-wrapper gray-bg wow fadeInUp" style="visibility: visible;">
                <div class="container">
                    <div class="row align-items-xl-center">
                        <div class="col-xl-5 col-lg-12">
                            <div class="about-two_image-box wow fadeInLeft" style="visibility: visible;"><img src="<?php echo base_url('') ?>include/web/custom/Upcoming_Future.jpg"></div>
                        </div>
                        <div class="col-xl-7 col-lg-12">
                            <div class="about-three_content-box pl-lg-70 wow fadeInRight" style="visibility: visible;">
                                <div class="section-title mb-25 wow fadeInUp" style="visibility: visible;">
                                    <span class="sub-title"><img src="http://localhost/sangam-initiative/include/web/custom/technology.png" alt="">Transforming Infrastructure Planning</span>
                                    <h2>Upcoming Future Infrastructure Summit 2024</h2>
                                </div>
                                <p class="mb-40 wow fadeInDown" style="visibility: visible;">Get ready for the upcoming Future Infrastructure Summit 2024! Explore revolutionary opportunities in infrastructure planning and design, from integrating Digital Twin technology to crafting future-ready frameworks. Connect with industry leaders and experts to shape the future of infrastructure. Join us and be part of the revolution.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-section pt-50 pb-50">
        <div class="container">
            <div class="row align-items-xl-center">
                <div class="col-xl-6">
                    <div class="about-one_image-box  p-r z-1 wow fadeInLeft">
                        <div class="shape shape-one"><span></span></div>
                        <img src="<?php echo base_url(''); ?>include/web/custom/Environmental_Data.jpg" class="about-img-one" alt="About Image">
                        <img src="<?php echo base_url(''); ?>include/web/custom/Generation_Planning.jpg" class="about-img-two" alt="About Image">
                        <img src="<?php echo base_url(''); ?>include/web/custom/About_M2M_&_IoT.png" class="about-img-three" alt="About Image">
                        <div class="experience-item">
                            <h2 class="number"><span class="count">10</span>+</h2>
                            <h4>Years Of
                                Experience
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-content-box pl-lg-60 mb-50 wow fadeInRight">
                        <div class="section-title mb-30">
                            <span class="sub-title"> <img src="<?php echo base_url(''); ?>include/web/custom/technology.png" alt=""> About Sangam Initiative</span>
                            <h2>A journey to next generation planning</h2>
                        </div>
                        <p class="mb-10 text-justify">Sangam is on a mission to transform infrastructure planning and design by converging digital technologies and data.</p>
                        <p class="mb-30 text-justify">The <b>Digital Twin initiative</b> is strategically crafted to demonstrate a practical use case in the realm of infrastructure planning and design. It adopts a data-driven, unified approach, displaying how integrated data analytics can significantly improve the process of infrastructure development. This initiative may serve as a model for leveraging comprehensive data insights to streamline and optimize the planning and designing phases of infrastructure projects.</p>
                        <a href="<?php echo base_url(''); ?>" class="main-btn primary-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="choose-bg-section bg_cover p-r z-1 pt-50 pb-50" style="background-image: url(<?php echo base_url(''); ?>include/web/custom/Banner_1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-12">
                    <div class="section-title text-white text-center mb-50 wow fadeInDown">
                        <span class="sub-title text-white"><img src="http://localhost/sangam-initiative/include/web/custom/technology_white.png" alt=""> Why Choose Us</span>
                        <h2>Why Join 'Digital Twin: Sangam' PoC?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="choose-wrapper wow fadeInUp">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="choose-tab-pane">
                                    <div class="choose-nav-tab">
                                        <ul class="nav">
                                            <li class="nav-item">
                                                <button class="nav-link " data-toggle="tab" data-target="#tab1">Generating Social Impact</button>
                                            </li>
                                            <li class="nav-item">
                                                <button class="nav-link active" data-toggle="tab" data-target="#tab2">Exploring Innovative Opportunities in Digital Twins</button>
                                            </li>
                                            <li class="nav-item">
                                                <button class="nav-link" data-toggle="tab" data-target="#tab3">Influencing Socially Relevant Infrastructure Projects</button>
                                            </li>
                                            <li class="nav-item">
                                                <button class="nav-link" data-toggle="tab" data-target="#tab4">Engaging with GIS and BIM Professionals</button>
                                            </li>
                                            <li class="nav-item">
                                                <button class="nav-link" data-toggle="tab" data-target="#tab5">Contributing to Developing Foundational Models</button>
                                            </li>
                                            <li class="nav-item">
                                                <button class="nav-link" data-toggle="tab" data-target="#tab6">Addressing Practical Challenges</button>
                                            </li>
                                            <li class="nav-item">
                                                <button class="nav-link" data-toggle="tab" data-target="#tab7">Focusing on Sustainable Development Goals (SDGs)</button>
                                            </li>
                                            <li class="nav-item">
                                                <button class="nav-link" data-toggle="tab" data-target="#tab8">Being Part of Technological Advancement</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="tab-content">
                                    <div class="tab-pane " id="tab1">
                                        <div class="choose-content-box">
                                            <h5 class="mb-10">Generating Social Impact Through Innovative Infrastructure Planning</h5>
                                            <p>Through an innovative approach for planning and designing public infrastructures.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane show active" id="tab2">
                                        <div class="choose-content-box">
                                            <ul class="check-style-one">
                                                <h5 class="mb-10">Exploring Innovative Opportunities in Digital Twins</h5>
                                                <li>Pioneering the fusion of Digital Twin technology with AI, ML, and IoT to revolutionize infrastructure planning.</li>
                                                <li>Utilizing data to generate vital insights for infrastructure progress and exploring monetization strategies.</li>
                                                <li>Showcasing solutions that facilitate data sharing with an emphasis on cutting-edge computation and telecom technologies while enhancing privacy</li>
                                                <li>Developing data fusion techniques to enrich insights by incorporating diverse sources through advanced statistical and mathematical modeling.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        <div class="choose-content-box">
                                            <h5 class="mb-10">Influencing Socially Relevant Infrastructure Projects</h5>
                                            <p>Utilizing Generative AI to synthesize public input into actionable design insights effectively mapped onto Digital Twins.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab4">
                                        <div class="choose-content-box">
                                            <h5 class="mb-10">Engaging with GIS and BIM Professionals</h5>
                                            <p>Collaborating with professionals from GIS, BIM, telecom, virtual worlds, and more in a dynamic environment.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab5">
                                        <div class="choose-content-box">
                                            <h5 class="mb-10">Contributing to Developing Foundational Models</h5>
                                            <ul class="check-style-one">
                                                <li>Developing a foundational model framework applicable across a wide range of data insight-driven solutions.
                                                </li>
                                                <li>Learning from the creation of state-of-the-art solutions in infrastructure planning, designing, and management.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab6">
                                        <div class="choose-content-box">
                                            <h5 class="mb-10">Addressing Practical Challenges</h5>
                                            <ul class="check-style-one">
                                                <li>Playing a key role in managing large-scale events and complex infrastructure.
                                                </li>
                                                <li>Receiving acknowledgment for contributions to a pioneering project with national and global implications.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab7">
                                        <div class="choose-content-box">
                                            <h5 class="mb-10">Focusing on Sustainable Development Goals (SDGs)</h5>
                                            <ul class="check-style-one">
                                                <li>Tackling SDG challenges focusing on environmental impact mitigation and sustainability.
                                                </li>
                                                <li>Connecting with industry leaders, innovators, and government bodies to broaden professional circles.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab8">
                                        <div class="choose-content-box">
                                            <h5 class="mb-10">Being Part of Technological Advancement</h5>
                                            <p>Being an integral part of a project that propels technological advancement and digital development in India.
                                            </p>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-section">
        <div class="container-fluid">
            <div class="about-wrapper white-bg wow fadeInUp">
                <div class="section-title text-center mb-20 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                    <span class="sub-title"><img src="<?php echo base_url(''); ?>include/web/custom/technology.png" alt=""> Requirements</span>
                    <h2>Registration Eligibility Guidelines</h2>
                </div>
                <div class="row align-items-xl-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="about-three_content-box wow fadeInRight">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="buttonTab mb-30">
                                        <ul class="nav nav" role="tablist">
                                            <li class="nav-item active"><button data-toggle="tab" role="tab" data-rb-event-key="tab1" aria-selected="true" class="nav-link nav-link active" aria-expanded="true">Individuals</button></li>
                                            <li class="nav-item"><button data-toggle="tab" role="tab" data-rb-event-key="tab2" aria-selected="false" class="nav-link nav-link" aria-expanded="false">Organizations</button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fancy-about-item mb-40  content-individuals">
                                        <div class="text">
                                            <h5> Registration Eligibility Guidelines for Individuals</h5>
                                            <ul class="check-style-one mb-60">
                                                <li><i class="far fa-check"></i>Legal Age: Individuals must be of legal age in their jurisdiction.</li>
                                                <li><i class="far fa-check"></i>Identity Verification: All users must provide valid identification documents.</li>
                                                <li><i class="far fa-check"></i>Compliance with Policies: Users must agree to our terms of service and privacy policy.</li>
                                                <li><i class="far fa-check"></i>Respectful Conduct: Harassment or abusive behavior is not tolerated.</li>
                                                <li><i class="far fa-check"></i>No Duplicate Accounts: Each user is permitted one account only.</li>
                                                <li><i class="far fa-check"></i>Accurate Information: Users must provide truthful information during registration.</li>
                                                <li><i class="far fa-check"></i>Security Awareness: Users are responsible for securing their account credentials.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="fancy-about-item mb-40  hide-content content-organizations">
                                        <div class="text">
                                            <h5>Registration Eligibility Guidelines for Organizations</h5>
                                            <ul class="check-style-one mb-60">
                                                <li><i class="far fa-check"></i> Legal Age: Individuals must be of legal age in their jurisdiction.</li>
                                                <li><i class="far fa-check"></i> Identity Verification: All users must provide valid identification documents.</li>
                                                <li><i class="far fa-check"></i> Compliance with Policies: Users must agree to our terms of service and privacy policy.</li>
                                                <li><i class="far fa-check"></i> Respectful Conduct: Harassment or abusive behavior is not tolerated.</li>
                                                <li><i class="far fa-check"></i> No Duplicate Accounts: Each user is permitted one account only.</li>
                                                <li><i class="far fa-check"></i> Accurate Information: Users must provide truthful information during registration.</li>
                                                <li><i class="far fa-check"></i> Security Awareness: Users are responsible for securing their account credentials.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="row justify-content-center width100EligibilityBox">
                            <div class="col-md-12">
                                <a href="">
                                    <div class="single-info-item style-one mb-20 wow fadeInUp" style="visibility: visible;">
                                        <div class="shape shape-one"><span><img src="<?php echo base_url(''); ?>include/web/images/shape/info-shape-1.png" alt="shape"></span></div>
                                        <div class="info">
                                            <h4 class="title mb-0"><i class="far fa-file" aria-hidden="true"></i>
                                                Guidelines Download
                                            </h4>
                                            <span>Access Registration Details and Participation Eligibility</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12">
                                <a href="">
                                    <div class="single-info-item style-two mb-20 wow fadeInDown" style="visibility: visible;">
                                        <div class="shape shape-one"><span><img src="<?php echo base_url(''); ?>include/web/images/shape/info-shape-1.png" alt="shape"></span></div>
                                        <div class="info">
                                            <h4 class="title mb-0"><i class="far fa-handshake" aria-hidden="true"></i>
                                                Participation Criteria
                                            </h4>
                                            <span class="text-white">Learn Who Meets the Requirements to Get Involved</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12">
                                <a href="">
                                    <div class="single-info-item style-one mb-20 wow fadeInUp" style="visibility: visible;">
                                        <div class="shape shape-one"><span><img src="<?php echo base_url(''); ?>include/web/images/shape/info-shape-2.png" alt="shape"></span></div>
                                        <div class="info">
                                            <h4 class="title mb-0"><i class="far fa-pencil" aria-hidden="true"></i>
                                                Register Now
                                            </h4>
                                            <span>Take the First Step Towards Participation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="working-process-section pt-50 pb-50">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-xl-9 col-lg-12">
                     <div class="section-title text-center mb-60 wow fadeInDown">
                         <span class="sub-title">Working Process</span>
                         <h2>Stages of Sangam</h2>
                     </div>
                 </div>
             </div>
             <div class="working-process-wrapper wow fadeInUp">
                 <div class="row no-lg-gutters">
                     <div class="col-lg-3 col-md-6">
                         <div class="single-process-item">
                             <div class="inner-process-item">
                                 <div class="step">Step 01</div>
                                 <div class="icon">
                                     <i class="flaticon-landscape"></i>
                                 </div>
                                 <div class="text">
                                     <h4 class="title">Choose Landscape</h4>
                                     <p>Sed ut perspiciatis omnis
                                         volunteer accusa
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                         <div class="single-process-item">
                             <div class="inner-process-item">
                                 <div class="step">Step 02</div>
                                 <div class="icon">
                                     <i class="flaticon-industry"></i>
                                 </div>
                                 <div class="text">
                                     <h4 class="title">Design and
                                         Planting
                                     </h4>
                                     <p>Sed ut perspiciatis omnis
                                         volunteer accusa
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                         <div class="single-process-item">
                             <div class="inner-process-item">
                                 <div class="step">Step 03</div>
                                 <div class="icon">
                                     <i class="flaticon-microscope"></i>
                                 </div>
                                 <div class="text">
                                     <h4 class="title">Completion
                                         & Testing
                                     </h4>
                                     <p>Sed ut perspiciatis omnis
                                         volunteer accusa
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                         <div class="single-process-item">
                             <div class="inner-process-item">
                                 <div class="step">Step 04</div>
                                 <div class="icon">
                                     <i class="flaticon-bus-stop"></i>
                                 </div>
                                 <div class="text">
                                     <h4 class="title">Transportation &
                                         Maintenance
                                     </h4>
                                     <p>Sed ut perspiciatis omnis
                                         volunteer accusa
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         </section> -->
    <section class="features-section-two p-r z-1">
        <div class="features-wrapper-two main-bg wow fadeInDown">
            <div class="counter-area">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter-item-two wow fadeInDown">
                            <div class="inner-counter">
                                <div class="icon">
                                </div>
                                <h2 class="number"><span class="count">7</span></h2>
                                <p>Events</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter-item-two wow fadeInUp">
                            <div class="inner-counter">
                                <div class="icon">
                                </div>
                                <h2 class="number"><span class="count">10000</span>+</h2>
                                <p>Attendance and Participation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter-item-two wow fadeInDown">
                            <div class="inner-counter">
                                <div class="icon">
                                </div>
                                <h2 class="number"><span class="count">20</span>+</h2>
                                <p>Area Of Interest</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter-item-two wow fadeInUp">
                            <div class="inner-counter">
                                <div class="icon">
                                </div>
                                <h2 class="number"><span class="count">20</span>+</h2>
                                <p>Sponsor's</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="project-section  pt-50 pb-50">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-10">
                    <div class="section-title text-center mb-30 wow fadeInDown">
                        <span class="sub-title"><img src="<?php echo base_url(''); ?>include/web/custom/technology.png" alt=""> Weaving the Fabric of Events</span>
                        <h2>Our Networking Event's </h2>
                    </div>
                </div>
            </div>
            <div class="projects-slider-four wow fadeInUp" data-wow-delay=".2s">
                <div class="single-project-item-four">
                    <div class="project-img">
                        <img src="<?php echo base_url(''); ?>include/web/custom/Delhi_Networking_Summit.jpg" alt="Project Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="">Connecting Professionals, Building Bridges</a></h3>
                                <p>Delhi Networking Summit, where professionals from various industries gather to connect, collaborate, and create opportunities for growth. Engage in insightful discussions, expand your network.</p>
                                <a href="" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="project-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="">Delhi Networking Summit</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-project-item-four">
                    <div class="project-img">
                        <img src="<?php echo base_url(''); ?>include/web/custom/Bangalore_Business_Forum.jpg" alt="Project Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="">Navigating Innovation, Driving Success</a></h3>
                                <p>Bangalore Business Forum, where innovation meets entrepreneurship. Connect with industry experts, explore emerging trends, and unlock new opportunities to propel your business forward.</p>
                                <a href="" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="project-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="">Bangalore Business Forum</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-project-item-four">
                    <div class="project-img">
                        <img src="<?php echo base_url(''); ?>include/web/custom/Hyderabad_Professional_Networking.jpg" alt="Project Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="">Networking for Success</a></h3>
                                <p>Experience the Hyderabad Professional Mixer, your gateway to success in the city of pearls! An evening of networking, knowledge sharing, and collaboration awaits you with professionals from diverse industries. </p>
                                <a href="" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="project-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="">Hyderabad Professional Mixer</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-project-item-four">
                    <div class="project-img">
                        <img src="<?php echo base_url(''); ?>include/web/custom/Delhi_Networking_Summit.jpg" alt="Project Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="">Connecting Professionals, Building Bridges</a></h3>
                                <p>Delhi Networking Summit, where professionals from various industries gather to connect, collaborate, and create opportunities for growth. Engage in insightful discussions, expand your network.</p>
                                <a href="" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="project-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="">Delhi Networking Summit</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-project-item-four">
                    <div class="project-img">
                        <img src="<?php echo base_url(''); ?>include/web/custom/Bangalore_Business_Forum.jpg" alt="Project Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="">Navigating Innovation, Driving Success</a></h3>
                                <p>Bangalore Business Forum, where innovation meets entrepreneurship. Connect with industry experts, explore emerging trends, and unlock new opportunities to propel your business forward.</p>
                                <a href="" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="project-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="">Bangalore Business Forum</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-project-item-four">
                    <div class="project-img">
                        <img src="<?php echo base_url(''); ?>include/web/custom/Hyderabad_Professional_Networking.jpg" alt="Project Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="">Networking for Success</a></h3>
                                <p>Experience the Hyderabad Professional Mixer, your gateway to success in the city of pearls! An evening of networking, knowledge sharing, and collaboration awaits you with professionals from diverse industries. </p>
                                <a href="" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="project-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="">Hyderabad Professional Mixer</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-50">
                <div class="col-lg-10">
                    <div class="section-title text-center mb-30 wow fadeInDown">
                        <h2>Our Outreach Program's </h2>
                    </div>
                </div>
            </div>
            <div class="projects-slider-four wow fadeInUp" data-wow-delay=".2s">
                <div class="single-project-item-four">
                    <div class="project-img">
                        <img src="<?php echo base_url(''); ?>include/web/custom/NextGen_Synergy.jpg" alt="Project Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="">Collaborating Towards a Future of Possibilities</a></h3>
                                <p>Step into the future with our NextGen Synergy initiative. We're tearing down barriers and fostering collaboration across sectors in real-time. Through dynamic approaches like scenario modeling and evidence-based integration planning, we're reshaping the landscape of innovation. </p>
                                <a href="" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="project-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="">NextGen Synergy: Bridging Boundaries for Innovation</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-project-item-four">
                    <div class="project-img">
                        <img src="<?php echo base_url(''); ?>include/web/custom/Collaborative_Solutions.jpg" alt="Project Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="">Collaborative Solutions for Future Challenges</a></h3>
                                <p>Experience the power of synergy with our innovative program. We're bringing together diverse perspectives and expertise to tackle tomorrow's challenges. Through cutting-edge techniques like scenario modeling and evidence-based integration planning.</p>
                                <a href="" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="project-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="">Synergize: Shaping Tomorrow, Together</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-project-item-four">
                    <div class="project-img">
                        <img src="<?php echo base_url(''); ?>include/web/custom/Building_Bridges_Across_Sectors.jpg" alt="Project Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="">Building Bridges Across Sectors</a></h3>
                                <p>Our program brings together stakeholders from various sectors to tackle complex challenges. Through forward-thinking approaches like scenario modeling and evidence-based integration planning.</p>
                                <a href="" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="project-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="">Unified Futures: Collaborating for Change</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-project-item-four">
                    <div class="project-img">
                        <img src="<?php echo base_url(''); ?>include/web/custom/NextGen_Synergy.jpg" alt="Project Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="">Collaborating Towards a Future of Possibilities</a></h3>
                                <p>Step into the future with our NextGen Synergy initiative. We're tearing down barriers and fostering collaboration across sectors in real-time. Through dynamic approaches like scenario modeling and evidence-based integration planning, we're reshaping the landscape of innovation. </p>
                                <a href="" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="project-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="">NextGen Synergy: Bridging Boundaries for Innovation</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-project-item-four">
                    <div class="project-img">
                        <img src="<?php echo base_url(''); ?>include/web/custom/Collaborative_Solutions.jpg" alt="Project Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="">Collaborative Solutions for Future Challenges</a></h3>
                                <p>Experience the power of synergy with our innovative program. We're bringing together diverse perspectives and expertise to tackle tomorrow's challenges. Through cutting-edge techniques like scenario modeling and evidence-based integration planning.</p>
                                <a href="" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="project-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="">Synergize: Shaping Tomorrow, Together</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-project-item-four">
                    <div class="project-img">
                        <img src="<?php echo base_url(''); ?>include/web/custom/Building_Bridges_Across_Sectors.jpg" alt="Project Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="">Building Bridges Across Sectors</a></h3>
                                <p>Our program brings together stakeholders from various sectors to tackle complex challenges. Through forward-thinking approaches like scenario modeling and evidence-based integration planning.</p>
                                <a href="" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="project-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="">Unified Futures: Collaborating for Change</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features-section mt-50">
        <div class="container">
            <div class="row align-items-xl-center">
                <div class="col-lg-12 text-center">
                    <div class="section-title mb-55 wow fadeInLeft" style="visibility: visible;">
                        <span class="sub-title"><img src="http://localhost/sangam-initiative/include/web/custom/technology.png" alt=""> Answers to Common Queries about Participation and Submission</span>
                        <h2>Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq-section">
        <div class="container">
            <div class="accordion" id="accordionOne">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-content-box wow fadeInLeft">
                            <div class="accordion-card mb-15">
                                <div class="accordion-header">
                                    <h6 class="accordion-title" data-toggle="collapse" data-target="#collapse0" aria-expanded="false">
                                        What is the purpose of the 'Digital Twin: Sangam' Proof of Concept (PoC)?
                                    </h6>
                                </div>
                                <div id="collapse0" class="accordion-collapse collapse" data-parent="#accordionOne">
                                    <div class="accordion-body">
                                        <p>The 'Digital Twin: Sangam' PoC aims to revolutionize infrastructure planning and design by integrating Digital Twin technology with AI, ML, and IoT. It seeks to generate social impact through innovative approaches while showcasing the fusion of digital technologies with infrastructure planning to address real-world challenges effectively.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card mb-15">
                                <div class="accordion-header">
                                    <h6 class="accordion-title collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="false">
                                        Who should join the 'Digital Twin: Sangam' PoC?
                                    </h6>
                                </div>
                                <div id="collapse1" class="accordion-collapse collapse" data-parent="#accordionOne">
                                    <div class="accordion-body">
                                        <p>Individuals or organizations involved in creating virtual worlds, providing data technologies, offering dynamic data insights, GIS/BIM technologies, utility and transport network mapping, setting standards, or contributing to viable business models can join. The PoC welcomes participants with diverse expertise and interests in shaping the future of digital infrastructure planning.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card mb-15">
                                <div class="accordion-header">
                                    <h6 class="accordion-title collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false">
                                        What are the benefits of joining the 'Digital Twin: Sangam' PoC?
                                    </h6>
                                </div>
                                <div id="collapse2" class="accordion-collapse collapse" data-parent="#accordionOne">
                                    <div class="accordion-body">
                                        <p>Joining the PoC offers numerous benefits, including opportunities to contribute to pioneering projects with national and global implications, showcasing innovative solutions, networking with industry leaders and government bodies, and being part of a transformative initiative shaping the future of infrastructure planning and development.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card mb-15">
                                <div class="accordion-header">
                                    <h6 class="accordion-title collapsed" data-toggle="collapse" data-target="#collapse8" aria-expanded="false">
                                        Where will the 'Digital Twin: Sangam' Proof of Concept take place?
                                    </h6>
                                </div>
                                <div id="collapse8" class="accordion-collapse collapse" data-parent="#accordionOne">
                                    <div class="accordion-body">
                                        <p>The 'Digital Twin: Sangam' PoC will be held in Varanasi, India. Varanasi serves as the venue for innovation, providing a conducive environment for exploring transformative approaches to infrastructure planning and design. The city's rich cultural heritage and dynamic landscape make it an ideal location for showcasing the integration of Digital Twin technology with state-of-the-art digital communication and computational tools.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card mb-15">
                                <div class="accordion-header">
                                    <h6 class="accordion-title collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false">
                                        What is the Expression of Interest (EoI) about?
                                    </h6>
                                </div>
                                <div id="collapse4" class="accordion-collapse collapse" data-parent="#accordionOne">
                                    <div class="accordion-body">
                                        <p>The Expression of Interest (EoI) is an invitation extended by the Department of Telecommunications (DoT) to industry leaders, tech companies, experts, startups, institutions, and innovators. It focuses on participating in a Proof of Concept (PoC) aimed at revolutionizing infrastructure planning and design through the integration of Digital Twin technology with comprehensive mobility insights.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-content-box wow fadeInRight">
                            <div class="accordion-card mb-15">
                                <div class="accordion-header">
                                    <h6 class="accordion-title" data-toggle="collapse" data-target="#collapse6" aria-expanded="false">
                                        How is the final selection and participation criteria determined?
                                    </h6>
                                </div>
                                <div id="collapse6" class="accordion-collapse collapse" data-parent="#accordionOne">
                                    <div class="accordion-body">
                                        <p>The selection criteria emphasize creative and innovative thinking, relevant experience in Digital Twin technology or related fields, and the potential to contribute significantly to the PoC. Applicants are evaluated based on their competence and active involvement in project activities. The Department of Telecommunications reserves the right to delist participants who do not meet the criteria or adversely impact the progress of the PoC.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card mb-15">
                                <div class="accordion-header">
                                    <h6 class="accordion-title" data-toggle="collapse" data-target="#collapse5" aria-expanded="false">
                                        What are the stages involved in the EoI process?
                                    </h6>
                                </div>
                                <div id="collapse5" class="accordion-collapse collapse" data-parent="#accordionOne">
                                    <div class="accordion-body">
                                        <p>The EoI process consists of two stages:
                                        </p>
                                        <ul>
                                            <li>The First Stage involves setting the foundation for collaborative innovation, where participants contribute to developing solutions using digital twin technologies. It includes activities such as understanding the broader impact, inspiring innovation, collaborative problem-solving, and networking.
                                            </li>
                                            <li>The Second Stage brings together startups, industry leaders, and stakeholders to develop and demonstrate solutions within the context of the PoC. It focuses on translating innovative ideas into practical, scalable solutions.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card mb-15">
                                <div class="accordion-header">
                                    <h6 class="accordion-title collapsed" data-toggle="collapse" data-target="#collapse7" aria-expanded="false">
                                        What are the conditions for continued participation in the first stage of the EoI?
                                    </h6>
                                </div>
                                <div id="collapse7" class="accordion-collapse collapse" data-parent="#accordionOne">
                                    <div class="accordion-body">
                                        <p>Participants are expected to contribute meaningfully to the PoC by demonstrating competence in their respective areas and maintaining active involvement in project activities. Failure to meet these expectations may result in delisting from the project. Participants are not obligated to provide specific reasons for delisting, and the Department of Telecommunications will not bear any financial liabilities resulting from delisting.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card mb-15">
                                <div class="accordion-header">
                                    <h6 class="accordion-title" data-toggle="collapse" data-target="#collapse9" aria-expanded="false">
                                        What are the submission requirements for the Expression of Interest (EoI)?
                                    </h6>
                                </div>
                                <div id="collapse9" class="accordion-collapse collapse" data-parent="#accordionOne">
                                    <div class="accordion-body">
                                        <p>The submission requirements for the EoI include personal and organizational details, previous experience in related projects, and any relevant achievements or recognitions. Additionally, participants are required to provide details of their proposed approach or methodology, technological resources they plan to use, human resources commitment, and any additional information they deem pertinent. Participants must also certify that their organization has authorized them to submit the response to the EoI.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card mb-15">
                                <div class="accordion-header">
                                    <h6 class="accordion-title" data-toggle="collapse" data-target="#collapse3" aria-expanded="false">
                                        How does the pre-registration process work?
                                    </h6>
                                </div>
                                <div id="collapse3" class="accordion-collapse collapse" data-parent="#accordionOne">
                                    <div class="accordion-body">
                                        <p>The pre-registration process requires providing personal and organizational details, including name, date of birth, organizational email, mobile number, and organizational information such as core competencies and potential interest areas. Individuals and organizations can register based on their respective categories, and validation checks are conducted for accuracy.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team-section pt-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-50 wow fadeInDown">
                        <span class="sub-title"><img src="<?php echo base_url(''); ?>include/web/custom/technology.png" alt=""> Team Member</span>
                        <h2>Meet Our Speaker's</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-item-two mb-40 wow fadeInDown" data-wow-delay=".2s">
                        <div class="member-img">
                            <img src="<?php echo base_url(''); ?>include/web/custom/Benjamin_Hughes.jpg" alt="Team Image">
                            <div class="social-box">
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4 class="title"><a href="">Benjamin Hughes</a></h4>
                            <p>Senior Speaker</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-item-two mb-40 wow fadeInUp" data-wow-delay=".25s">
                        <div class="member-img">
                            <img src="<?php echo base_url(''); ?>include/web/custom/Chester_J_Thurman.jpg" alt="Team Image">
                            <div class="social-box">
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4 class="title"><a href="">Chester J. Thurman</a></h4>
                            <p>Junior Speaker</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-item-two mb-40 wow fadeInDown" data-wow-delay=".3s">
                        <div class="member-img">
                            <img src="<?php echo base_url(''); ?>include/web/custom/Benjamin_Hughes_.jpg" alt="Team Image">
                            <div class="social-box">
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4 class="title"><a href="">Benjamin Hughes</a></h4>
                            <p>Senior Speaker</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="experience-box mt-25 mb-40 text-center wow fadeInUp" data-wow-delay=".35s">
                        <h2 class="fill-text">25+</h2>
                        <h4>Experience Speaker's</h4>
                        <a href="" class="btn-link">View All Member <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-section pt-50 pb-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-12">
                    <div class="section-title text-center mb-50 wow fadeInDown">
                        <span class="sub-title"><img src="http://localhost/sangam-initiative/include/web/custom/technology.png" alt=""> Discussion</span>
                        <h2>Join the Tech Talk</h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider-one wow fadeInUp">
                <div class="single-testimonial-item">
                    <div class="testimonial-inner-content">
                        <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium
                            doloremque laudantium, totam rem aperiam eaque quae abillo inventore veritatis et quasi architecto
                        </p>
                        <div class="author-thumb-title">
                            <div class="author-thumb">
                                <img src="<?php echo base_url(''); ?>include/web/images/testimonial/thumb-1.jpg" alt="Author Image">
                            </div>
                            <div class="author-title">
                                <h6 class="title">Douglas D. Hall</h6>
                                <p class="position">CEO & Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial-item">
                    <div class="testimonial-inner-content">
                        <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium
                            doloremque laudantium, totam rem aperiam eaque quae abillo inventore veritatis et quasi architecto
                        </p>
                        <div class="author-thumb-title">
                            <div class="author-thumb">
                                <img src="<?php echo base_url(''); ?>include/web/images/testimonial/thumb-2.jpg" alt="Author Image">
                            </div>
                            <div class="author-title">
                                <h6 class="title">Douglas D. Hall</h6>
                                <p class="position">CEO & Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial-item">
                    <div class="testimonial-inner-content">
                        <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium
                            doloremque laudantium, totam rem aperiam eaque quae abillo inventore veritatis et quasi architecto
                        </p>
                        <div class="author-thumb-title">
                            <div class="author-thumb">
                                <img src="<?php echo base_url(''); ?>include/web/images/testimonial/thumb-3.jpg" alt="Author Image">
                            </div>
                            <div class="author-title">
                                <h6 class="title">Brian L. Swinton</h6>
                                <p class="position">Web Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial-item">
                    <div class="testimonial-inner-content">
                        <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium
                            doloremque laudantium, totam rem aperiam eaque quae abillo inventore veritatis et quasi architecto
                        </p>
                        <div class="author-thumb-title">
                            <div class="author-thumb">
                                <img src="<?php echo base_url(''); ?>include/web/images/testimonial/thumb-1.jpg" alt="Author Image">
                            </div>
                            <div class="author-title">
                                <h6 class="title">Timothy V. Kim</h6>
                                <p class="position">SR Manager</p>
                            </div>
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
            <div class="container">
                <div class="footer-widget-area pt-55 pb-40 p-r z-1">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget footer-about-widget mb-40 pr-lg-70 wow fadeInDown">
                                <div class="widget-content">
                                    <div class="footer-logo mb-25">
                                        <a href="index.html"><img src="<?php echo base_url(''); ?>include/web/custom/Department_Of_Telecommunications_White.png" alt="Logo"></a>
                                    </div>
                                    <p>Sangam is on a mission to transform infrastructure planning and design by converging digital technologies and data.
                                    </p>
                                    <a href="" class="main-btn filled-btn filled-white">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget contact-info-widget mb-40 wow fadeInUp">
                                <h4 class="widget-title">Get In Touch</h4>
                                <div class="widget-content">
                                    <ul class="info-list">
                                        <li>558 Main Street, 2nd Block
                                            Melbourne, India
                                        </li>
                                        <li><a href="mailto:support@gmail.com">support@gmail.com</a></li>
                                        <li><a href="tel:+000(123)45688">+000 (123) 456 88</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12">
                            <div class="footer-widget footer-nav-widget mb-40 wow fadeInDown">
                                <h4 class="widget-title">Quick Link</h4>
                                <div class="widget-content">
                                    <ul class="footer-nav">
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Schedule</a></li>
                                        <li><a href="#">Sequence of Events</a></li>
                                        <li><a href="#">Speakers</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12">
                            <div class="footer-widget footer-nav-widget mb-40 wow fadeInDown">
                                <h4 class="widget-title">Important Link</h4>
                                <div class="widget-content">
                                    <ul class="footer-nav">
                                        <li><a href="#">EOI</a></li>
                                        <li><a href="#"> Why Attending</a></li>
                                        <li><a href="#">Registration Details</a></li>
                                        <li><a href="#">Registration</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-area">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="copyright-text">
                                <P>Copy&copy; 2023 Sangam Initiative. All Rights Reserved.</P>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="copyright-nav float-lg-right">
                                <ul>
                                    <li><a href="#">Setting & Privacy</a></li>
                                    <li><a href="#">Faqs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="wrapper">
        <section>
            <i class="bx bx-cookie"></i>
            <h4>Cookies Consent</h4>
        </section>
        <div class="content">
            <p>This website use cookies to help you have a superior and more relevant browsing experience on the website.</p>
        </div>
        <div class="controls">
            <button class="button" id="acceptBtn">Accept</button>
            <button class="button" id="declineBtn">Decline</button>
        </div>
    </div>
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
    <script>
        $(document).ready(function() {
            $('.nav-link').hover(function() {
                var target = $(this).data('target');
                $('.tab-pane').removeClass('active');
                $(target).addClass('active');
                $('.nav-link').removeClass('active');
                $(this).addClass('active');
            });
            $(".content-organizations").hide();
            $(".buttonTab ul li button").click(function() {
                var tabKey = $(this).attr("data-rb-event-key");
                $(".fancy-about-item").hide();
                if (tabKey === "tab1") {
                    $(".content-individuals").show();
                } else if (tabKey === "tab2") {
                    $(".content-organizations").show();
                }
            });
        });
        const cookieBox = document.querySelector(".wrapper"),
            buttons = document.querySelectorAll(".button");
        const executeCodes = () => {
            if (document.cookie.includes("codinglab")) return;
            cookieBox.classList.add("show");
            buttons.forEach((button) => {
                button.addEventListener("click", () => {
                    cookieBox.classList.remove("show");
                    if (button.id == "acceptBtn") {
                        document.cookie = "cookieBy= codinglab; max-age=" + 60 * 60 * 24 * 30;
                    }
                });
            });
        };
        window.addEventListener("load", executeCodes);
    </script>
</body>

</html>
<?php include_once __DIR__ . '/../common/footer.php'; ?>