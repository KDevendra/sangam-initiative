<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php if (isset($title) && !empty($title)) {
                echo $title;
            } else {
                echo "Sangam Initiative";
            } ?></title>
    <link rel="shortcut icon" href="<?php echo base_url(''); ?>include/web/custom/favicon.png" />
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
    <!-- <div class="preloader">
        <div class="loader">
            <div class="pre-shadow"></div>
            <div class="pre-box"></div>
        </div>
    </div> -->
    <!-- <div class="modal fade search-modal" id="search-modal">
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
    </div> -->
    <div class="modal fade sidebar-panel-wrapper" id="sidebar-modal">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <button class="close" data-dismiss="modal"><i class="far fa-times"></i></button>
                <div class="sidebar-wrapper">
                    <div class="sidebar-information-area">
                        <div class="row no-gutters">
                            <div class="col-lg-4 sidebar-widget">
                                <div class="sidebar-info-widget">
                                    <a href="<?php echo base_url(''); ?>" class="footer-logo"><img src="<?php echo base_url(''); ?>include/web/custom/Department_Of_Telecommunications_White.png" height="100px" alt="Brand Logo"></a>
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
                                <img src="<?php echo base_url('') ?>include/web/custom/sancharsaathi.png" alt="<?php echo base_url(''); ?>">
                                <img src="<?php echo base_url('') ?>include/web/custom/india-gov-in.png" alt="<?php echo base_url(''); ?>">
                                <!-- <img src="<?php echo base_url('') ?>include/web/custom/Department_Of_Telecommunications.png" alt="<?php echo base_url(''); ?>"> -->
                                <img src="<?php echo base_url('') ?>include/web/custom/g20-logo.png" alt="<?php echo base_url(''); ?>">
                                <img src="<?php echo base_url('') ?>include/web/custom/azadi-mahotsav.png" alt="<?php echo base_url(''); ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="primary-menu">
                    <div class="site-branding">
                        <a href="<?php echo base_url(''); ?>" class="brand-logo"><img src="<?php echo base_url(''); ?>include/web/custom/Department_Of_Telecommunications.png" alt="Site Logo"></a>
                    </div>
                    <div class="nav-menu">
                        <div class="mobile-logo mb-30 d-block d-xl-none">
                            <a href="<?php echo base_url(''); ?>" class="brand-logo"><img src="<?php echo base_url(''); ?>include/web/custom/Department_Of_Telecommunications.png" alt="Site Logo"></a>
                        </div>
                        <!-- <div class="nav-search mb-30 d-block d-xl-none ">
                            <form>
                                <div class="form_group">
                                    <input type="email" class="form_control" placeholder="Search Here" name="email" required>
                                    <button class="search-btn"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div> -->
                        <nav class="main-menu">
                            <ul>
                                <li class="menu-item"><a href="<?php echo base_url(''); ?>">Home</a></li>
                                <li class="menu-item has-children">
                                    <a href="<?php echo base_url('about'); ?>">About</a>
                                    <ul class="sub-menu">
                                        <li><a href="javascript:void(0)" class="aptChoiceBtn">Why is Sangam an apt choice?
                                            </a>
                                        </li>
                                        <li><a href="javascript:void(0)" id="matterNowBtn">Why does it matter now?</a></li>
                                        <li><a href="javascript:void(0)" class="whyToJoinBtn">Why to join
                                            </a>
                                        </li>
                                        <li><a href="<?php echo base_url('get-involved');?>">Get involved
                                            </a>
                                        </li>
                                        <li><a href="javascript:void(0)" class="processOfSangamBtn">Process of Sangam
                                            </a>
                                        </li>
                                        <li><a href="javascript:void(0)" class="faqsBtn">FAQs
                                            </a>
                                        </li>
                                        <li><a href="javascript:void(0)" id="curatedContentBtn">Curated Content
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="eligibilityGuidelinesBtn">Eligibility Guidelines </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children">
                                    <a href="<?php echo base_url('events'); ?>">Events </a>
                                    <ul class="sub-menu">
                                        <li><a href="<?php echo base_url('events/upcoming-events'); ?>">Our Upcoming Events</a></li>
                                        <li><a href="<?php echo base_url('events/dashboard'); ?>">Dashboard</a></li>
                                        <li><a href="<?php echo base_url('events/why-attend'); ?>">Why Attend?</a></li>
                                        <li><a href="<?php echo base_url('events/speakers'); ?>">Speakers</a></li>
                                        <li><a href="<?php echo base_url('events'); ?>">Schedule</a></li>
                                        <li><a href="<?php echo base_url('events/register'); ?>">Register for the event</a></li>

                                    </ul>
                                </li>
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0)">Expression of Interest</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?php echo base_url('expression-of-interest'); ?>">About EoI</a></li>
                                        <li><a href="<?php echo base_url('expression-of-interest/purpose') ?>">Purpose of EoI </a></li>
                                        <li><a href="javascrip:void(0)" class="stagesOfEoIBtn">Stages of EoI</a></li>
                                        <li><a href="javascript:void(0)" class="whyToJoinBtn">Why Participate</a></li>
                                        <li><a href="<?php echo base_url('expression-of-interest/participation-details'); ?>" class="participateBtn">Participation Details</a></li>
                                        <li><a href="<?php echo base_url('registration'); ?>">Submit Response</a></li>

                                    </ul>
                                </li>
                                <li class="menu-item"><a href="javascript:void(0)" class="contactUsBtn">Contact Us</a></li>
                            </ul>
                        </nav>
                        <div class="menu-button mt-40 d-xl-none text-center">
                            <a href="<?php echo base_url('get-involved') ?>" class="main-btn primary-btn">Get involved</a>
                            <a href="<?php echo base_url('living-list') ?>" class="main-btn primary-btn mb-10">Living List</a>
                            <a href="<?php echo base_url('registration') ?>" class="main-btn secondary-btn mb-10">Pre-Registration</a>
                        </div>
                    </div>
                    <div class="nav-right-item">
                        <div class="menu-button d-xl-block d-none">
                            <a href="<?php echo base_url('get-involved') ?>" class="main-btn primary-btn">Get involved</a>
                            <a href="<?php echo base_url('living-list') ?>" class="main-btn primary-btn">Living List</a>
                            <a href="<?php echo base_url('registration') ?>" class="main-btn primary-btn">Pre-Registration</a>
                        </div>
                        <!-- <div class="bar-button" data-toggle="modal" data-target="#sidebar-modal">
                            <img src="<?php echo base_url(''); ?>include/web/images/bar.png" alt="Image">
                        </div> -->
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
