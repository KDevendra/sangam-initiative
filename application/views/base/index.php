<?php include_once __DIR__ . '/../common/header.php'; ?>
<style>
    .banner-section {
        position: relative;
    }

    .hero-wrapper-one {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        width: 100%;
    }
</style>
<section class="banner-section mt__150">
    <video autoplay="" muted="" loop="" id="bgVideo">
        <source src="<?php echo base_url('') ?>include/web/custom/bg_video.mp4" type="video/mp4">
    </video>
    <div class="hero-wrapper-one __mp__100">
        <div class="container text-center">
            <div class="row align-items-lg-center">
                <div class="col-md-12">
                    <h6 class="mb-20" style="color: #fff;font-size: 20px;background-color: #00000082;padding: 20px;border-radius: 5px;">
                        Department of Telecommunications calls for Expression of Interest For
                    </h6>
                    <h1 class="fadeInUp mb-20" style="visibility: visible;  animation-name: fadeInUp;color: #fff;">Sangam: Digital Twin</h1>
                    <p class="fadeInDown mb-20" style="color: #fff;font-size: 24px;padding: 12px 30px;border-radivisibility: visible; animation-delay: 0.6s; animation-name: fadeInDown;/*! background-colorus: 5px;font-weight: bold;">Confluence of Innovation: Revolutionizing Future Infrastructure Planning</p>
                    <div class="hero-button mb-20  fadeInUp" style="visibility: visible; margin: 15px; animation-name: fadeInUp;"><a style="gap: 5px;margin:5px" class="main-btn golden-btn mb-10 preRegisBtn" href="<?php echo base_url('') ?>registration"> <i class="far  fa-table" aria-hidden="true"></i> Pre-Registration</a><a class="main-btn filled-btn mb-10 exploreBtn" id="exploreBtn" style="margin:5px" href="javascript:void(0)">Explore More</a></div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="about-section pb-50" id="exploreBtnDes">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="about-wrapper-two gray-bg mt-minus-110 p-r wow fadeInDown" style="visibility: visible;" id="aboutWrapperTwo">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="about-features-item text-center">
                                <div class="icon"><i class="flaticon-target"></i></div>
                                <div class="text">
                                    <h3 class="title">Empowering Innovation</h3>
                                    <p>Welcome to the forefront of a transformative journey with "Digital Twin: Sangam," where</p>
                                    <a class="btn-link read-more" href="javascript:void(0)" data-target="#empowering-innovation">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                                <div class="description" style="display: none;">
                                    <blockquote class="text-white">
                                        The Dawn of Collaborative Infrastructure Design
                                    </blockquote>
                                    <p>Welcome to the forefront of a transformative journey with "Digital Twin: Sangam," where we envision reshaping the world of infrastructure planning and design. Historically, the process of planning and designing infrastructure has been constrained by limited experimental iterations, a lack of feedback loops, and a narrow scope of imagination due to restricted access to comprehensive data. "Digital Twin: Sangam" aims to revolutionise this paradigm by unlocking the full potential of unlimited data access, harnessing the advancements in computation, connectivity, and collaborative innovation.</p>
                                </div>
                                <a class="btn-link back-button" href="javascript:void(0)" style="display: none;">Back<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="about-features-item item-active text-center">
                                <div class="hover-bg bg_cover" style="background-image: url(<?php echo base_url('') ?>include/web/custom/Environmental_Data.jpg);"></div>
                                <div class="icon"><i class="flaticon-vision"></i></div>
                                <div class="text">
                                    <h3 class="title">Breaking Boundaries</h3>
                                    <p>Our mission is to break free from traditional silos and foster a dynamic environment</p>
                                    <a class="btn-link read-more" href="javascript:void(0)" data-target="#breaking-boundaries">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                                <div class="description" style="display: none;">
                                    <blockquote class="text-white" id="font_white">
                                        From Limited Data to Infinite Possibilities
                                    </blockquote>
                                    <p>Our mission is to break free from traditional silos and foster a dynamic environment of co-designing and co-creation. By integrating cutting-edge computational and communication technologies with collective intelligence, we open a new realm of possibilities where infrastructure planning becomes a participatory, inclusive, and iterative process. Imagine a world where every stakeholder has a voice in shaping our shared future, where feedback loops enrich our understanding, and where our imagination is bound only by the extent of our data.
                                    </p>
                                </div>
                                <a class="btn-link back-button" id="font_white" href="javascript:void(0)" style="display: none;">Back<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="about-features-item text-center">
                                <div class="icon"><i class="flaticon-management"></i></div>
                                <div class="text">
                                    <h3 class="title">Shaping the Future</h3>
                                    <p>Join us in pioneering an approach that not only addresses the current challenges in infrastructure development</p>
                                    <a class="btn-link read-more" href="javascript:void(0)" data-target="#shaping-the-future">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                                <div class="description" style="display: none;">
                                    <blockquote class="text-white">
                                        Co-Creation for a Sustainable World
                                    </blockquote>
                                    <p>Join us in pioneering an approach that not only addresses the current challenges in infrastructure development but also sets a new standard for how societies build, adapt, and thrive. "Digital Twin: Sangam" is not just about creating more efficient and sustainable infrastructure; it's about creating a future where technology and collaboration pave the way for a world that understands and meets the needs of its inhabitants like never before.
                                    </p>
                                </div>
                                <a class="btn-link back-button" href="javascript:void(0)" style="display: none;">Back<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-section gray-bg pt-50 pb-50">
    <div class="container">
        <div class="row align-items-xl-center">
            <div class="col-xl-6">
                <div class="about-one_image-box  p-r z-1 wow fadeInLeft">
                    <div class="shape shape-one"><span></span></div>
                    <img src="<?php echo base_url(''); ?>include/web/custom/Environmental_Data_01.jpg" class="about-img-one" alt="About Image">
                    <img src="<?php echo base_url(''); ?>include/web/custom/Generation_Planning.jpg" class="about-img-two" alt="About Image">
                    <img src="<?php echo base_url(''); ?>include/web/custom/About_M2M_&_IoT.png" class="about-img-three" alt="About Image">
                    <div class="experience-item">
                        <h4>Bring Ideas into Life
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-content-box pl-lg-60 mb-50 wow fadeInRight">
                    <div class="section-title mb-30">
                        <span class="sub-title"> <img src="<?php echo base_url(''); ?>include/web/custom/technology.png" alt=""> A journey to Next Generation Planning</span>
                        <h2>About Sangam Initiative</h2>
                    </div>
                    <p class="mb-10 text-justify">Welcome to "Sangam: Digital Twin," a pioneering invitation to collaborate on the future of infrastructure planning and design. This initiative is a call to action for public entities, infrastructure planners, tech giants, startups, and academia to break free from silos and engage in a whole-of-government approach. At the heart of Sangam is the fusion of unified data and collective intelligence, aimed at leveraging advancements in telecom technologies, including 5G and IoT, alongside the latest in computational technologies. Sangam offers a unique platform to visualise existing conditions, predict future scenarios, and test hypotheses in a virtual world, all powered by Digital Twins, AI, and predictive models.</p>
                    <div class="">
                        <div class="tooltip-container">
                            <a href="javascript:void(0)" " class=" main-btn primary-btn main-btn__custom mb-10">Crafting the Blueprint</a>
                            <div class="tooltip-content">
                                <h6 class="text-center mb-2">A Collaborative Journey Towards Innovative Infrastructure</h6>
                                <p>
                                    This effort is more than just an exploration; it's an opportunity to shape future infrastructure with precision and purpose. By bringing together diverse minds and data, we aim to foster a space where imagining possibilities and perfecting solutions through iterative experiments and data-driven feedback becomes the norm. Visionary design, informed by reality, is at the core of Sangam, empowering participants to harness the full potential of Digital Twins and AI for infrastructure that is not only future-ready but is crafted with informed, purposeful precision.
                                </p>
                            </div>
                        </div>
                        <div class="tooltip-container">
                            <a href="javascript:void(0)" class="main-btn filled-btn mb-10  main-btn__custom">Pioneering Precision</a>
                            <div class="tooltip-content">
                                <h6 class="text-center mb-2">Building Tomorrow's Infrastructure Today</h6>
                                <p>
                                    Join us in this ambitious journey to redefine infrastructure design and planning, where your expertise and insights can contribute to building a more connected, sustainable, and innovative world. Together, let's build a foundation for visionary infrastructure, informed by the collective intelligence and unified data of today's brightest minds.
                                </p>
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
        <div class="about-wrapper  wow fadeInUp" style="visibility: visible;">
            <div class="container">
                <div class="row align-items-xl-center">
                    <div class="col-xl-5 col-lg-12">
                        <div class="about-two_image-box wow fadeInLeft" style="visibility: visible;"><img src="<?php echo base_url('') ?>include/web/custom/Sangam_Initiative.png"></div>
                    </div>
                    <div class="col-xl-7 col-lg-12">
                        <div class="about-three_content-box pl-lg-70 wow fadeInRight" style="visibility: visible;">
                            <div class="section-title mb-25 wow fadeInUp" style="visibility: visible;">
                                <span class="sub-title"><img src="<?php echo base_url(''); ?>include/web/custom/technology.png" alt="">Transforming Infrastructure Planning</span>
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
<section class="gallery-section gray-bg  pt-50 pb-50" id="apt-choice">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="section-title text-center mb-50 wow fadeInDown">
                    <span class="sub-title"> <img src="<?php echo base_url(''); ?>include/web/custom/technology.png" alt=""> Why is Sangam an Apt Choice?</span>
                    <h2>The Blueprint for Future Infrastructure Planning</h2>
                </div>
            </div>
        </div>
        <div class="projects-slider-three wow fadeInUp">
            <div class="single-project-item-three mb-30">
                <div class="single-blog-post-four mb-40 wow fadeInLeft">
                    <div class="entry-content">
                        <h4 class="entry-title"><a href="javascript:void(0)">Sangam as a Model for National Infrastructure</a></h4>
                        <div class="row">
                            <div class="col-md-9">
                                <h6>Sangam: A Model for National Infrastructure
                                    Excellence
                                </h6>
                                <p>Explore how Sangam serves as a microcosm for
                                    national infrastructure planning, showcasing cutting-edge
                                    approaches in design and strategy.
                                </p>
                            </div>
                            <div class="d-none d-lg-block col-md-3">
                                <div class="d-flex justify-content-center">
                                    <img src="<?php echo base_url(''); ?>include/web/custom/National_Infrastructure.jpg" alt="Post Thumbnail">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-project-item-three mb-30">
                <div class="single-blog-post-four mb-40 wow fadeInLeft">
                    <div class="entry-content">
                        <h4 class="entry-title"><a href="javascript:void(0)">Bridging the Gap Between Reality and Planning</a></h4>
                        <div class="row">
                            <div class="col-md-9">
                                <h6>Transforming Insights into Action</h6>
                                <p>Discover how Sangam leverages nuanced, contextualized insights to create plans that closely align with real-world scenarios and needs.</p>
                                </p>
                            </div>
                            <div class="d-none d-lg-block col-md-3">
                                <div class="d-flex justify-content-center">
                                    <img src="<?php echo base_url(''); ?>include/web/custom/Reality_and_Planning.jpg" alt="Post Thumbnail">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-project-item-three mb-30">
                <div class="single-blog-post-four mb-40 wow fadeInLeft">
                    <div class="entry-content">
                        <h4 class="entry-title"><a href="javascript:void(0)">Navigating Uncertainties with Scenario Thinking</a></h4>
                        <div class="row">
                            <div class="col-md-9">
                                <h6>Mastering Uncertainties in Infrastructure Design</h6>
                                <p>Learn how Sangam employs scenario thinking to
                                    anticipate and mitigate uncertainties, leading to more resilient
                                    infrastructure development..
                                </p>
                            </div>
                            <div class="d-none d-lg-block col-md-3">
                                <div class="d-flex justify-content-center">
                                    <img src="<?php echo base_url(''); ?>include/web/custom/Scenario_Thinking.jpg" alt="Post Thumbnail">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-project-item-three mb-30">
                <div class="single-blog-post-four mb-40 wow fadeInLeft">
                    <div class="entry-content">
                        <h4 class="entry-title"><a href="javascript:void(0)">Breaking Silos in Collaborative Planning</a></h4>
                        <div class="row">
                            <div class="col-md-9">
                                <h6>Fostering Collaboration in Infrastructure Planning</h6>
                                <p>See how Sangam encourages the sharing of ideas and
                                    resources, breaking traditional silos and enhancing collective
                                    input during the planning process.
                                </p>
                            </div>
                            <div class="d-none d-lg-block col-md-3">
                                <div class="d-flex justify-content-center">
                                    <img src="<?php echo base_url(''); ?>include/web/custom/Collaborative_Planning.jpg" alt="Post Thumbnail">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-project-item-three mb-30">
                <div class="single-blog-post-four mb-40 wow fadeInLeft">
                    <div class="entry-content">
                        <h4 class="entry-title"><a href="javascript:void(0)">Cognitive Approach: Bridging Planning and Execution</a></h4>
                        <div class="row">
                            <div class="col-md-9">
                                <h6>Enhancing Execution with Cognitive Clarity</h6>
                                <p>Discover Sangam’s cognitive approach, which
                                    emphasises clear, continuous communication and proactive
                                    responses to bridge the gap between plans and their execution.
                                </p>
                            </div>
                            <div class="d-none d-lg-block col-md-3">
                                <div class="d-flex justify-content-center">
                                    <img src="<?php echo base_url(''); ?>include/web/custom/Planning_and_Execution.jpg" alt="Post Thumbnail">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-project-item-three mb-30">
                <div class="single-blog-post-four mb-40 wow fadeInLeft">
                    <div class="entry-content">
                        <h4 class="entry-title"><a href="javascript:void(0)">From Thought to Reality: Opportunity to Innovate</a></h4>
                        <div class="row">
                            <div class="col-md-9">
                                <h6>Transforming Ideas into Tangible Solutions</h6>
                                <p>Sangam offers a unique opportunity to morph
                                    innovative thoughts into tangible realities, paving the way for
                                    groundbreaking infrastructure development.
                                </p>
                            </div>
                            <div class="d-none d-lg-block col-md-3">
                                <div class="d-flex justify-content-center">
                                    <img src="<?php echo base_url(''); ?>include/web/custom/Opportunity_to_Innovate.jpg" alt="Post Thumbnail">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-project-item-three mb-30">
                <div class="single-blog-post-four mb-40 wow fadeInLeft">
                    <div class="entry-content">
                        <h4 class="entry-title"><a href="javascript:void(0)">Engaging the Public in Design and Planning</a></h4>
                        <div class="row">
                            <div class="col-md-9">
                                <h6>Incorporating Public Insight into Infrastructure
                                    Design
                                </h6>
                                <p>Learn about Sangam’s inclusive approach, where
                                    public engagement is integral to the planning and design phase,
                                    ensuring every suggestion is valued and considered.
                                </p>
                            </div>
                            <div class="d-none d-lg-block col-md-3">
                                <div class="d-flex justify-content-center">
                                    <img src="<?php echo base_url(''); ?>include/web/custom/Tech_Infrastructure.jpg" alt="Post Thumbnail">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="features-seciton pt-50 pb-0" id="does-it-matter">
    <div class="container-fluid p-0">
        <div class="row align-items-xl-end">
            <div class="col-md-12">
                <div class="section-title text-center mb-50 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                    <h2>Why It Matters Now?</h2>
                </div>
            </div>
            <div class="col-lg-12 p-0">
                <div class="features-image-box mb-20 wow fadeInLeft d-flex justify-content-center" style="visibility: visible;">
                    <img src="<?php echo base_url(''); ?>include/web/custom/Matters_Now.png" alt="Features Image">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="features-seciton pt-50 pb-50" id="does-it-matter">
    <div class="container">
        <div class="row align-items-xl-end">
            <div class="col-md-12">
                <div class="section-title text-center mb-50 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                    <span class="sub-title"> <img src="http://localhost/sangam-initiative/include/web/custom/technology.png" alt=""> The Evolution of Digital Twin Technology</span>
                    <h2>Decade of Change in Data and Processing</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="features-image-box mb-20 wow fadeInLeft" style="visibility: visible;"><img src="<?php echo base_url(''); ?>include/web/custom/BG_Element.png" alt="Features Image"></div>
            </div>
            <div class="col-lg-6">
                <div class="features-content-box mb-20 wow fadeInRight" style="visibility: visible;">
                    <p class="mb-35">From 3D Modelling to full Digital Technology with AI-Driven Insight</p>
                    <ul class="features-list">
                        <li><i class="fal fa-long-arrow-right"></i>The Origins in 3D Modelling: Setting the Foundation</li>
                        <li><i class="fal fa-long-arrow-right"></i>The IoT Revolution: Bringing the Real World into Digital</li>
                        <li><i class="fal fa-long-arrow-right"></i>The Role of Cloud Computing: Scalability and Accessibility </li>
                        <li><i class="fal fa-long-arrow-right"></i>The Rise of AI: Enhancing Perception and Decision-Making </li>
                        <li><i class="fal fa-long-arrow-right"></i>The Power of Community, Tools, and Standards: Accelerating Innovation </li>
                    </ul>
                    <a class="main-btn primary-btn" href="">Learn More Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service-bgc-section p-r z-1 main-bg pt-50 pb-50" id="why-to-Join">
    <div class="shape shape-one"><span><img src="<?php echo base_url('') ?>include/web/custom/network.png" alt="Leaf Png"></span></div>
    <div class="shape shape-two"><span><img src="<?php echo base_url('') ?>include/web/custom/network.png" alt="Leaf Png"></span></div>
    <div class="shape shape-three">
        <span><img src="<?php echo base_url(''); ?>include/web/images/shape/leaf-3.png" alt="Leaf Png"></span>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-12">
                <div class="section-title text-white text-center mb-50 wow fadeInDown">
                    <span class="sub-title text-white"><img src="<?php echo base_url(''); ?>include/web/custom/technology_white.png" alt=""> Why to Join</span>
                    <h2>The Sangam Initiative caters to individuals like you and your work</h2>
                    <p class="mt-1">Be part of a collaborative effort to redefine infrastructure planning and design. The "Digital Twin: Sangam" PoC is not just a project; it's a leap into the future of how we conceive, plan, and build our world. Your expertise and innovation can help shape sustainable, efficient, and integrated infrastructure systems for generations to come.
                    </p>
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
<section class="about-section" id="participate">
    <div class="container-fluid">
        <div class="about-wrapper gray-bg wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="container">
                <div class="row align-items-xl-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="about-three_content-box pl-lg-70 wow fadeInRight text-center" style="visibility: visible; animation-name: fadeInRight;">
                            <div class="section-title mb-25 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                <span class="sub-title">Get Involved</span>
                                <h2>Participate in Our Exciting Upcoming Content!</h2>
                            </div>
                            <p class="mb-40 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">Join us as we embark on an exhilarating journey of content creation! Your participation is key to shaping the direction of our upcoming material. Dive into interactive discussions, share your ideas, and contribute your unique perspective. Together, let's make our content truly exceptional.</p>
                        </div>
                    </div>
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
                    <span class="sub-title text-white"><img src="<?php echo base_url(''); ?>include/web/custom/technology_white.png" alt=""> Why Choose Us</span>
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
<section class="about-section pt-50 pb-50">
    <div class="container">
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
                            <a href="<?php echo base_url('registration'); ?>">
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
                    <h2>Outreach Programs </h2>
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
                    <h2>Networking Events</h2>
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
<section class="features-section mt-50" id="faqs">
    <div class="container">
        <div class="row align-items-xl-center">
            <div class="col-lg-12 text-center">
                <div class="section-title mb-55 wow fadeInLeft" style="visibility: visible;">
                    <span class="sub-title"><img src="<?php echo base_url(''); ?>include/web/custom/technology.png" alt=""> Answers to Common Queries about Participation and Submission</span>
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
            <div class="col-md-12">
                <div class="section-title text-center mb-50 wow fadeInDown">
                    <span class="sub-title"><img src="<?php echo base_url(''); ?>include/web/custom/technology.png" alt=""> Discussion</span>
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
<?php include_once __DIR__ . '/../common/footer.php'; ?>