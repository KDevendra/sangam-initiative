<?php include_once __DIR__ . '/../common/header.php'; ?>
<section class="banner-section mt__150">
   <video autoplay muted loop id="bgVideo">
      <source src="<?php echo base_url(''); ?>include/web/custom/bg_video.mp4" type="video/mp4" />
   </video>
   <div class="hero-wrapper-one __mp__100">
      <div class="container text-center">
         <h6 class="banner-subtitle">
            Department of Telecommunications (DoT)<br />
            <span>Calls For Expression of Interest (EoI) for participating in </span>
         </h6>
         <div class="d-flex justify-content-center">
            <div class="box_overlay">
               <h1 class="banner-title">Sangam: <span>Digital Twin</span></h1>
               <h4 class="banner-title-sub">AI-driven Insights</h4>
               <h6>PROOF OF CONCEPT (POC)</h6>
               <h5>CONFLUENCE OF INNOVATION</h5>
               <p class="banner-description">Revolutionising Future Infrastructure Planning and Design</p>
            </div>
         </div>
         <div class="hero-button mb-20">
            <a class="main-btn golden-btn mb-10 preRegisBtn" href="<?php echo base_url('expression-of-interest/'); ?>#registerNowEoI" style="background: rgb(227, 25, 25);border-radius: 16px;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);backdrop-filter: blur(10px);-webkit-backdrop-filter: blur(10px);border: 1px solid rgba(255, 255, 255, 0.18);padding: 10px;color: white;width: 300px;text-align: center;opacity: 0.9;width: fit-content;background-color: red !important;">EoI Submission Date Extended till 05 April 2024 </a>
         </div>
         <div class="hero-button mb-20">
            <a class="main-btn golden-btn mb-10 preRegisBtn" href="<?php echo base_url(''); ?>registration"> <i class="far fa-table" aria-hidden="true"></i> Pre-Registration </a>
            <a class="main-btn golden-btn mb-10 preRegisBtn btn_green" href="<?php echo base_url(''); ?>include/web/custom/Download_EoI.pdf" download="" target="_blank">
            <i class="far fa-download" aria-hidden="true"></i> Download EoI
            </a>
         </div>
         <div class="hero-button mb-20">
            <a class="main-btn mb-10 textExploreMore" id="exploreBtn" href="javascript:void(0)"> Explore More <i class="far fa-angle-double-down" aria-hidden="true"></i> </a>
         </div>
      </div>
   </div>
</section>
<section class="about-section pb-50" id="exploreBtnDes">
   <div class="container-fluid">
      <div class="row justify-content-center">
         <div class="col-lg-12">
            <div class="about-wrapper-two gray-bg mt-minus-110 p-r wow fadeInDown" style="visibility: visible;" id="aboutWrapperTwo">
               <div class="row no-gutters justify-content-center">
                  <div class="col-md-12 text-center mb-20">
                     <h2 class="text-white Confluence">Join the Confluence of Innovation: Sangam Digital Twin Eol</h2>
                     <p class="text-white fs_24">
                        <b>Welcome to "Sangam: Digital Twin"</b><br>
                        <span class="fs_18" style="font-family: 'Roboto', sans-serif;">
                        a pioneering invitation to collaborate on the future of infrastructure planning and design.
                        </span>
                     </p>
                     <p class="text-white fs_18" style="font-family: 'Roboto', sans-serif; font-size: 20px;font-style:italic">
                        This initiative is a call to action for
                     </p>
                     <p class="text-white fs_18" style="font-family: 'Roboto', sans-serif; font-size: 20px;">
                        <span><b>public entities, infrastructure planners, tech giants, startups, and academia</b></span>
                     </p>
                     <p class="text-white fs_18" style="font-family: 'Roboto', sans-serif; font-size: 20px;"> to break free from silos and engage in <br>
                        <span style="font-style: italic;"><b>Whole-of-Nation approach.</b></span>
                     </p>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="about-features-item text-center">
                        <div class="icon"><i class="flaticon-target"></i></div>
                        <div class="text">
                           <h3 class="title">Embracing the Future Together</h3>
                           <p>The Sangam Digital Twin Initiative</p>
                           <ul>
                              <li>• Fostering Collaboration Across Sectors.</li>
                              <li>• Harnessing Unified Data and Collective Intelligence.</li>
                              <li>• Innovating with Digital Twins and AI.</li>
                           </ul>
                           <!-- <a class="btn-link read-more" href="javascript:void(0)" data-target="#empowering-innovation">Read More<i class="fas fa-arrow-right"></i></a> -->
                        </div>
                        <div class="description" style="display: none;">
                           <blockquote class="text-white">
                              The Sangam Digital Twin Initiative
                           </blockquote>
                           <ul>
                              <li>Fostering Collaboration Across Sectors.</li>
                              <li>Harnessing Unified Data and Collective Intelligence.</li>
                              <li>Innovating with Digital Twins and AI.</li>
                           </ul>
                        </div>
                        <a class="btn-link back-button" href="javascript:void(0)" style="display: none;">Back<i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="about-features-item item-active text-center">
                        <div class="hover-bg bg_cover" style="background-image: url(<?php echo base_url(''); ?>include/web/custom/Environmental_Data.jpg);"></div>
                        <div class="icon"><i class="flaticon-vision"></i></div>
                        <div class="text">
                           <h3 class="title">Crafting the Blueprint</h3>
                           <p>A Collaborative Journey Towards Innovation</p>
                           <ul>
                              <li>• Shaping Future Infrastructure with Precision.</li>
                              <li>• Empowering Visionary Design with Real-World Data.</li>
                              <li>• Cultivating a Culture of Iterative Innovation.</li>
                           </ul>
                           <!-- <a class="btn-link read-more" href="javascript:void(0)" data-target="#breaking-boundaries">Read More<i class="fas fa-arrow-right"></i></a> -->
                        </div>
                        <div class="description" style="display: none;">
                           <blockquote class="text-white" id="font_white">
                              A Collaborative Journey Towards Innovative
                           </blockquote>
                           <ul>
                              <li>• Shaping Future Infrastructure with Precision.</li>
                              <li>• Empowering Visionary Design with Real-World Data.</li>
                              <li>• Cultivating a Culture of Iterative Innovation.</li>
                           </ul>
                        </div>
                        <a class="btn-link back-button" id="font_white" href="javascript:void(0)" style="display: none;">Back<i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="about-features-item text-center">
                        <div class="icon"><i class="flaticon-management"></i></div>
                        <div class="text">
                           <h3 class="title">Pioneering Precision</h3>
                           <p>Building Tomorrow's Infrastructure Today</p>
                           <ul>
                              <li>• Redefining Infrastructure for a Connected World.</li>
                              <li>• Collaborative Foundation for Visionary Infrastructure.</li>
                              <li>• Harnessing Unified Data for Sustainable Solutions.</li>
                           </ul>
                           <!-- <a class="btn-link read-more" href="javascript:void(0)" data-target="#shaping-the-future">Read More<i class="fas fa-arrow-right"></i></a> -->
                        </div>
                        <div class="description" style="display: none;">
                           <blockquote class="text-white">
                              Building Tomorrow's Infrastructure Today
                           </blockquote>
                           <ul>
                              <li>Redefining Infrastructure for a Connected World.</li>
                              <li>Collaborative Foundation for Visionary Infrastructure.</li>
                              <li>Harnessing Unified Data for Sustainable Solutions.</li>
                           </ul>
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
<!-- <section class="about-section gray-bg pt-50 pb-50">
   <div class="container">
       <div class="row align-items-xl-center">
           <div class="col-xl-6">
               <div class="about-one_image-box  p-r z-1 wow fadeInLeft">
                   <img src="<?php echo base_url(''); ?>include/web/custom/Environmental_Data_02.jpeg" class="about-img-one" alt="About Image">
                   <img src="<?php echo base_url(''); ?>include/web/custom/Generation_Planning_01.jpeg" class="about-img-two" alt="About Image">
                   <img src="<?php echo base_url(''); ?>include/web/custom/About_Img_02.jpeg" class="about-img-three" alt="About Image">
                   <div class="experience-item">
                       <h4>Bring Ideas into Life
                       </h4>
                   </div>
               </div>
           </div>
           <div class="col-xl-6">
               <div class="about-content-box pl-lg-60 mb-0 wow fadeInRight">
                   <div class="section-title mb-30">
                       <span class="sub-title"> <img src="<?php echo base_url(''); ?>include/web/custom/technology.png" alt=""> A journey to Next Generation Planning</span>
                       <h2>About Sangam Initiative</h2>
                   </div>
                   <p class="mb-10 text-justify">Welcome to "Sangam: Digital Twin," a pioneering invitation to collaborate on the future of infrastructure planning and design. This initiative is a call to action for public entities, infrastructure planners, tech giants, startups, and academia to break free from silos and engage in a whole-of-government approach. At the heart of Sangam is the fusion of unified data and collective intelligence, aimed at leveraging advancements in telecom technologies, including 5G and IoT, alongside the latest in computational technologies. Sangam offers a unique platform to visualise existing conditions, predict future scenarios, and test hypotheses in a virtual world, all powered by Digital Twins, AI, and predictive models.</p>
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
   </section> -->
<style>
   .desk {
   font-size: 16px;
   font-family: arial;
   }
</style>
<section class="working-process-section">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xl-9 col-lg-12">
            <div class="section-title text-center mb-60 wow fadeInDown" style="visibility: visible;">
               <span class="sub-title"> <img src="<?php echo base_url(''); ?>include/web/custom/technology.png" alt="" /> A journey to Next Generation Planning</span>
               <h2>Digital Twin Delivers on....</h2>
            </div>
         </div>
      </div>
      <div class="working-process-wrapper wow fadeInUp" style="visibility: visible;">
         <div class="row no-lg-gutters">
            <div class="col-lg-4 col-md-6">
               <div class="single-process-item">
                  <div class="inner-process-item">
                     <div class="step padding_top_16px">NEW KNOWLEDGE</div>
                     <div class="icon"><img src="<?php echo base_url(''); ?>include/web/custom/Visualise.png" alt="" /></div>
                     <div class="text">
                        <h4 class="title">Visualise and create new knowledge by integrating and connecting disparate data sets</h4>
                        <p>Advanced Visualization</p>
                        <p>System Integration Management</p>
                        <img src="<?php echo base_url(''); ?>include/web/images/line.png" alt="Line" />
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="single-process-item">
                  <div class="inner-process-item">
                     <div class="step">OPERATIONAL EFFICIENCY</div>
                     <div class="icon"><img src="<?php echo base_url(''); ?>include/web/custom/Performance.png" alt="" /></div>
                     <div class="text">
                        <h4 class="title">
                           Analyse and understand the performance of assets/services <br />
                           <br />
                           Make the right decisions in real time
                        </h4>
                        <p>Dashboard and reporting</p>
                        <p>Performance Integration</p>
                        <p>Insights and Analytics</p>
                        <img src="<?php echo base_url(''); ?>include/web/images/line.png" alt="Line" />
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="single-process-item">
                  <div class="inner-process-item">
                     <div class="step">SIMULATE AND LOOK INTO FUTURE</div>
                     <div class="icon"><img src="<?php echo base_url(''); ?>include/web/custom/Artificial_Intelligence_.png" alt="" /></div>
                     <div class="text">
                        <h4 class="title">Ability to make accurate predictions using Machine Learning (ML), Deep Learning (DL) and Artificial Intelligence (AI)</h4>
                        <p>Automation (AI/ML/DL)</p>
                        <p>Simulation/Scenario modelling</p>
                        <p>Forecasting</p>
                        <p>Feature Creation and Extraction</p>
                        <img src="<?php echo base_url(''); ?>include/web/images/line.png" alt="Line" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="features-section pt-50 pb-0" id="matterNowDes">
   <div class="container-fluid">
      <div class="row align-items-end">
         <div class="col-md-12">
            <div class="section-title text-center mb-20 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
               <span class="sub-title">
                  <img src="<?php echo base_url(''); ?>include/web/custom/technology.png" alt="" />
                  Why does it matter now?
                  <!-- The Evolution of Digital Twin Technology -->
               </span>
               <h2>Decade of Change in Data and Processing</h2>
            </div>
         </div>
         <div class="col-lg-12">
            <div class="features-image-box mb-20 wow fadeInLeft text-center" style="visibility: visible;">
               <img src="<?php echo base_url(''); ?>include/web/custom/Matters_Now.png" class="img-fluid" alt="Features Image" />
            </div>
         </div>
      </div>
   </div>
</section>
<section class="features-seciton pt-50 pb-20">
   <div class="container">
      <div class="row align-items-xl-end">
         <div class="col-lg-5">
            <div class="features-image-box mb-20 wow fadeInLeft" style="visibility: visible;"><img src="<?php echo base_url(''); ?>include/web/custom/3D_Modelling.png" alt="Features Image" /></div>
         </div>
         <div class="col-lg-7">
            <div class="features-content-box mb-20 wow fadeInRight" style="visibility: visible;">
               <h6 class="mb-35">From 3D Modelling to full Digital Technology with AI-Driven Insight</h6>
               <ul class="features-list features_list_block">
                  <li><i class="fal fa-long-arrow-right"></i>The Origins in 3D Modelling: Setting the Foundation <span>From Concept to High-Fidelity 3D Modelling</span></li>
                  <li><i class="fal fa-long-arrow-right"></i>The IoT Revolution: Bringing the Real World into Digital <span>IoT: The Gateway to Real-World Data</span></li>
                  <li><i class="fal fa-long-arrow-right"></i>The Role of Cloud Computing: Scalability and Accessibility <span>Cloud Computing: The Backbone of Digital Twin Scalability</span></li>
                  <li><i class="fal fa-long-arrow-right"></i>The Rise of AI: Enhancing Perception and Decision-Making <span>AI: Elevating Awareness and Insights in Digital Twins</span></li>
                  <li><i class="fal fa-long-arrow-right"></i>The Power of Community, Tools, and Standards: Accelerating Innovation <span>"Harnessing Collective Knowledge for Efficient Digital Twin Development</span></li>
               </ul>
               <a class="main-btn primary-btn" href="<?php echo base_url('why-does-it-matter-now'); ?>">Know More</a>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="gallery-section gray-bg pt-50 pb-50" id="aptChoiceDes">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-12">
            <div class="section-title text-center mb-20 wow fadeInDown">
               <span class="sub-title"> <img src="<?php echo base_url(''); ?>include/web/custom/technology.png" alt="" /> Why is Sangam an Apt Choice?</span>
               <h2>The Blueprint for Future Infrastructure Planning</h2>
            </div>
         </div>
      </div>
      <div class="projects-slider-three wow fadeInUp">
         <div class="single-project-item-three">
            <div class="single-blog-post-four mb-40 wow fadeInLeft">
               <div class="entry-content">
                  <h4 class="entry-title"><a href="javascript:void(0)">Sangam as a Model for National Infrastructure</a></h4>
                  <div class="row">
                     <div class="col-md-9">
                        <h6>Sangam: A Model for National Infrastructure Excellence</h6>
                        <p>Explore how Sangam serves as a microcosm for national infrastructure planning, showcasing cutting-edge approaches in design and strategy.</p>
                     </div>
                     <div class="d-none d-lg-block col-md-3">
                        <div class="d-flex justify-content-center">
                           <img src="<?php echo base_url(''); ?>include/web/custom/National_Infrastructure.jpg" alt="Post Thumbnail" />
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="single-project-item-three">
            <div class="single-blog-post-four mb-40 wow fadeInLeft">
               <div class="entry-content">
                  <h4 class="entry-title"><a href="javascript:void(0)">Bridging the Gap Between Reality and Planning</a></h4>
                  <div class="row">
                     <div class="col-md-9">
                        <h6>Transforming Insights into Action</h6>
                        <p>Discover how Sangam leverages nuanced, contextualized insights to create plans that closely align with real-world scenarios and needs.</p>
                     </div>
                     <div class="d-none d-lg-block col-md-3">
                        <div class="d-flex justify-content-center">
                           <img src="<?php echo base_url(''); ?>include/web/custom/Reality_and_Planning.jpg" alt="Post Thumbnail" />
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="single-project-item-three">
            <div class="single-blog-post-four mb-40 wow fadeInLeft">
               <div class="entry-content">
                  <h4 class="entry-title"><a href="javascript:void(0)">Navigating Uncertainties with Scenario Thinking</a></h4>
                  <div class="row">
                     <div class="col-md-9">
                        <h6>Mastering Uncertainties in Infrastructure Design</h6>
                        <p>Learn how Sangam employs scenario thinking to anticipate and mitigate uncertainties, leading to more resilient infrastructure development..</p>
                     </div>
                     <div class="d-none d-lg-block col-md-3">
                        <div class="d-flex justify-content-center">
                           <img src="<?php echo base_url(''); ?>include/web/custom/Scenario_Thinking.jpg" alt="Post Thumbnail" />
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="single-project-item-three">
            <div class="single-blog-post-four mb-40 wow fadeInLeft">
               <div class="entry-content">
                  <h4 class="entry-title"><a href="javascript:void(0)">Breaking Silos in Collaborative Planning</a></h4>
                  <div class="row">
                     <div class="col-md-9">
                        <h6>Fostering Collaboration in Infrastructure Planning</h6>
                        <p>See how Sangam encourages the sharing of ideas and resources, breaking traditional silos and enhancing collective input during the planning process.</p>
                     </div>
                     <div class="d-none d-lg-block col-md-3">
                        <div class="d-flex justify-content-center">
                           <img src="<?php echo base_url(''); ?>include/web/custom/Collaborative_Planning.jpg" alt="Post Thumbnail" />
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="single-project-item-three">
            <div class="single-blog-post-four mb-40 wow fadeInLeft">
               <div class="entry-content">
                  <h4 class="entry-title"><a href="javascript:void(0)">Cognitive Approach: Bridging Planning and Execution</a></h4>
                  <div class="row">
                     <div class="col-md-9">
                        <h6>Enhancing Execution with Cognitive Clarity</h6>
                        <p>Discover Sangam’s cognitive approach, which emphasises clear, continuous communication and proactive responses to bridge the gap between plans and their execution.</p>
                     </div>
                     <div class="d-none d-lg-block col-md-3">
                        <div class="d-flex justify-content-center">
                           <img src="<?php echo base_url(''); ?>include/web/custom/Planning_and_Execution.jpg" alt="Post Thumbnail" />
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="single-project-item-three">
            <div class="single-blog-post-four mb-40 wow fadeInLeft">
               <div class="entry-content">
                  <h4 class="entry-title"><a href="javascript:void(0)">From Thought to Reality: Opportunity to Innovate</a></h4>
                  <div class="row">
                     <div class="col-md-9">
                        <h6>Transforming Ideas into Tangible Solutions</h6>
                        <p>Sangam offers a unique opportunity to morph innovative thoughts into tangible realities, paving the way for groundbreaking infrastructure development.</p>
                     </div>
                     <div class="d-none d-lg-block col-md-3">
                        <div class="d-flex justify-content-center">
                           <img src="<?php echo base_url(''); ?>include/web/custom/Opportunity_to_Innovate.jpg" alt="Post Thumbnail" />
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="single-project-item-three">
            <div class="single-blog-post-four mb-40 wow fadeInLeft">
               <div class="entry-content">
                  <h4 class="entry-title"><a href="javascript:void(0)">Engaging the Public in Design and Planning</a></h4>
                  <div class="row">
                     <div class="col-md-9">
                        <h6>Incorporating Public Insight into Infrastructure Design</h6>
                        <p>Learn about Sangam’s inclusive approach, where public engagement is integral to the planning and design phase, ensuring every suggestion is valued and considered.</p>
                     </div>
                     <div class="d-none d-lg-block col-md-3">
                        <div class="d-flex justify-content-center">
                           <img src="<?php echo base_url(''); ?>include/web/custom/Tech_Infrastructure.jpg" alt="Post Thumbnail" />
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="about-section pt-50 pb-50" id="processOfSangamDes">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="section-title text-center mb-20 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
               <span class="sub-title"> <img src="<?php echo base_url(''); ?>include/web/custom/technology.png" alt="" />Participant Outreach and Engagement </span>
               <h2>Process of Sangam</h2>
               <p class="fs_18">
                  <span>
                  <b>DoT would begin this journey </b> with a campaign to engage with potential participants, <b>including industry experts, academia, and other relevant stakeholders,</b>
                  <span style="font-style: italic;">to aware widespread awareness and interest.</span>
                  </span>
               </p>
               <p class="desk"><b>DoT plans to conduct three physical (in-person) meetings before the deadline for EoI submission. </b>And planned meetings are <span style="font-style:italic">aimed to engage prospective candidates and generate enthusiasm for participation</span>.<b> <br>The agenda is crafted to offer a diverse and enriching experience,</b>
                  <span style="font-style: italic; font-size:17px">featuring speakers who are leaders and innovators in their respective fields.</span>
               </p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6 first_stage">
            <div class="about-three_content-box wow fadeInRight" style="visibility: visible;">
               <div class="section-title mb-25 wow fadeInUp text-center" style="visibility: visible;">
                  <span class="sub-title">STAGE-I</span>
                  <h3>Exploratory Phase</h3>
               </div>
               <div class="fancy-about-item mb-40 wow fadeInUp" style="visibility: visible;">
                  <div class="text">
                     <h5>
                        <i class="far fa-angle-double-right"></i>Clarity on the Horizon <br />
                        <small>Understanding 'Digital Twin: Sangam'</small>
                     </h5>
                     <p>
                        Begin your journey with a clear understanding of the 'Digital Twin: Sangam' initiative. This stage is designed to illuminate the project's objectives, scope, and potential impact, setting a solid foundation
                        for all participants.
                     </p>
                  </div>
               </div>
               <div class="fancy-about-item mb-40 wow fadeInUp" style="visibility: visible;">
                  <div class="text">
                     <h5>
                        <i class="far fa-angle-double-right"></i>Creative Exploration <br />
                        <small>Unleashing Potential</small>
                     </h5>
                     <p>
                        Encouraged to push the boundaries of conventional thinking, participants delve into the realm of possibilities. This phase is all about innovation, allowing for the exploration of creative solutions and novel
                        approaches within the framework of 'Digital Twin: Sangam'.
                     </p>
                  </div>
               </div>
               <div class="fancy-about-item mb-40 wow fadeInUp" style="visibility: visible;">
                  <div class="text">
                     <h5>
                        <i class="far fa-angle-double-right"></i>Confidence in Commitment <br />
                        <small>Shaping Stage-II</small>
                     </h5>
                     <p>
                        With a firm grasp of the initiative's goals and a creative mind-set in place, participants are poised to confidently select their path for Stage-II. This critical juncture is about making informed decisions
                        on how to contribute most effectively to the collective vision of 'Digital Twin: Sangam'.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 second_stage">
            <div class="about-three_content-box wow fadeInRight" style="visibility: visible;">
               <div class="section-title mb-25 wow fadeInUp text-center" style="visibility: visible;">
                  <span class="sub-title">STAGE-II</span>
                  <h3>Advancing the Vision</h3>
               </div>
               <div class="fancy-about-item mb-40 wow fadeInUp" style="visibility: visible;">
                  <div class="text">
                     <h5><i class="far fa-angle-double-right"></i>Defining Exact Requirements</h5>
                     <p>Building upon the clarity achieved in Stage-I, Stage-II focuses on articulating precise requirements for the selected use cases, ensuring a solid foundation for development.</p>
                  </div>
               </div>
               <div class="fancy-about-item mb-40 wow fadeInUp" style="visibility: visible;">
                  <div class="text">
                     <h5><i class="far fa-angle-double-right"></i>Collaborative Development</h5>
                     <p>Encouraging participants to work together in refining and developing their ideas into actionable solutions, leveraging the collective intelligence and resources gathered during the exploratory phase.</p>
                  </div>
               </div>
               <div class="fancy-about-item mb-40 wow fadeInUp" style="visibility: visible;">
                  <div class="text">
                     <h5><i class="far fa-angle-double-right"></i>Preparation for Implementation</h5>
                     <p>
                        Participants finalise their proposals, readying them for the practical demonstration phase. This stage solidifies the confidence and commitment to turn imaginative concepts into reality, setting the stage for
                        impactful innovation.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="service-bgc-section p-r z-1 main-bg pt-50 pb-50" id="whyToJoinDes">
   <div class="shape shape-one">
      <span><img src="<?php echo base_url(''); ?>include/web/custom/network.png" alt="Leaf Png" /></span>
   </div>
   <div class="shape shape-two">
      <span><img src="<?php echo base_url(''); ?>include/web/custom/network.png" alt="Leaf Png" /></span>
   </div>
   <div class="shape shape-three">
      <span><img src="<?php echo base_url(''); ?>include/web/images/shape/leaf-3.png" alt="Leaf Png" /></span>
   </div>
   <div class="container-fluid">
      <div class="row justify-content-center">
         <div class="col-xl-9 col-lg-12">
            <div class="section-title text-white text-center mb-80 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
               <span class="sub-title text-white"><img src="<?php echo base_url(''); ?>include/web/custom/technology_white.png" alt="" />Why to Join</span>
               <h3>Transforming Infrastructure with Digital Twin: Sangam</h3>
               <p class="mt-1">
                  <b>Be part of a collaborative effort to redefine infrastructure planning and design</b> <br> The <span style="font-style: italic;">"Digital Twin: Sangam" </span><br>PoC <b> is not just a project; it's a leap into the future</b> of how we conceive, plan, and build our world.<br> <b>Your
                  expertise and innovation can help shape sustainable, efficient, and integrated infrastructure systems </b><span style="font-style: italic;"> for generations to come.</span>
               </p>
            </div>
         </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="single-service-item-two mb-60 wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">
               <div class="icon"><img src="<?php echo base_url(''); ?>include/web/custom/Virtual_World_Creators.png" /></div>
               <div class="text">
                  <h4 class="title"><a href="javascript:void(0)">Virtual World Creators</a></h4>
                  <h6 class="title"><a>Crafting Immersive Realities</a></h6>
                  <p><b>Contribution:</b> Bring your skills in creating detailed, immersive virtual environments to help visualize infrastructure projects in unprecedented detail.</p>
                  <p><b>Opportunity:</b> Lead in the development of interactive models that enable stakeholders like AR/VR, gaming engine platform providers to explore and test infrastructure designs before they are built.</p>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="single-service-item-two mb-60 wow fadeInUp" data-wow-delay=".25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
               <div class="icon"><img src="<?php echo base_url(''); ?>include/web/custom/Computation_Power_Providers.png" /></div>
               <div class="text">
                  <h4 class="title"><a href="javascript:void(0)">Computation Power Providers</a></h4>
                  <h6 class="title"><a>Powering the Future of Planning</a></h6>
                  <p><b>Contribution:</b> Offer the computational resources necessary for running complex simulations and analytics, supporting the backbone of Digital Twin technology.</p>
                  <p><b>Opportunity:</b> Computation Power Providers at the forefront can showcase privacy Enhancing Technologies (PETs), robust API capabilities, essential for intergating Digital Twin, AI, and ML technologies.</p>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="single-service-item-two mb-60 wow fadeInDown" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
               <div class="icon"><img src="<?php echo base_url(''); ?>include/web/custom/Connectivity_and_Device_Integration_Specialists.png" /></div>
               <div class="text">
                  <h4 class="title"><a href="javascript:void(0)">Connectivity and Device Integration Specialists</a></h4>
                  <h6 class="title"><a>Bridging the Digital and Physical</a></h6>
                  <p><b>Contribution:</b> Integrate sensors, AR/VR devices, telecom and IoT technology to gather and provide real-time data, enhancing the Digital Twin with live updates and interactions.</p>
                  <p><b>Opportunity:</b> Pioneer in connecting the digital and physical realms, offering new dimensions of interaction and data collection.</p>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="single-service-item-two mb-60 wow fadeInUp" data-wow-delay=".35s" style="visibility: visible; animation-delay: 0.35s; animation-name: fadeInUp;">
               <div class="icon"><img src="<?php echo base_url(''); ?>include/web/custom/Mobility_Data_Providers.png" /></div>
               <div class="text">
                  <h4 class="title"><a href="javascript:void(0)">Mobility Data Providers</a></h4>
                  <h6 class="title"><a>Mapping Movements, Shaping Futures</a></h6>
                  <p>
                     <b>Contribution:</b> Supply mobility data and insights that illuminate human and vehicular movement patterns, critical for planning efficient and responsive infrastructure.
                  </p>
                  <p>
                     <b>Opportunity:</b> Unlock the
                     potential of mobility data to predict and plan for future infrastructure needs, optimizing flow and reducing congestion.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="single-service-item-two mb-60 wow fadeInUp" data-wow-delay=".35s" style="visibility: visible; animation-delay: 0.35s; animation-name: fadeInUp;">
               <div class="icon"><img src="<?php echo base_url(''); ?>include/web/custom/Geospatial_Data_Specialists.png" /></div>
               <div class="text">
                  <h4 class="title"><a href="javascript:void(0)">Geospatial Data Specialists</a></h4>
                  <h6 class="title"><a>Laying the Groundwork for Innovation</a></h6>
                  <p><b>Contribution:</b> Provide essential geospatial data, tools, and utilities that form the foundation of every Digital Twin, ensuring accuracy and relevance.</p>
                  <p><b>Opportunity:</b> Position yourself as a key player in creating data-rich, geographically accurate digital representations of future projects.</p>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="single-service-item-two mb-60 wow fadeInUp" data-wow-delay=".35s" style="visibility: visible; animation-delay: 0.35s; animation-name: fadeInUp;">
               <div class="icon"><img src="<?php echo base_url(''); ?>include/web/custom/Utility_Network_Innovators.png" /></div>
               <div class="text">
                  <h4 class="title"><a href="javascript:void(0)">Utility Network Innovators</a></h4>
                  <h6 class="title"><a>Energizing the Digital Twin Ecosystem</a></h6>
                  <p>
                     <b>Contribution:</b> Contribute utility network data to enhance the Digital Twin with critical infrastructure information, from power grids to water systems.
                  </p>
                  <p><b>Opportunity:</b> Spearhead innovations in
                     integrating essential services into the planning phase, ensuring sustainability and efficiency.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="single-service-item-two mb-60 wow fadeInUp" data-wow-delay=".35s" style="visibility: visible; animation-delay: 0.35s; animation-name: fadeInUp;">
               <div class="icon"><img src="<?php echo base_url(''); ?>include/web/custom/Startups_and_Solution_Developers.png" /></div>
               <div class="text">
                  <h4 class="title"><a href="javascript:void(0)">Startups and Solution Developers</a></h4>
                  <h6 class="title"><a>Building Tomorrow’s Solutions, Today</a></h6>
                  <p><b>Contribution:</b> Leverage your agility and innovation to develop new solutions that address the unique challenges of infrastructure design and operation.</p>
                  <p><b>Opportunity:</b> Capture emerging markets by introducing innovative products and services that meet the evolving demands of the infrastructure sector.</p>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="single-service-item-two mb-60 wow fadeInUp" data-wow-delay=".35s" style="visibility: visible; animation-delay: 0.35s; animation-name: fadeInUp;">
               <div class="icon"><img src="<?php echo base_url(''); ?>include/web/custom/Academics_and_Industry_Experts.png" /></div>
               <div class="text">
                  <h4 class="title"><a href="javascript:void(0)">Academics and Industry Experts</a></h4>
                  <h6 class="title"><a>Shaping the Future through Knowledge</a></h6>
                  <p><b>Contribution:</b> Apply your expertise in computation, AI, data science, visualization, or engineering to advance the development of the Digital Twin technology.</p>
                  <p><b>Opportunity:</b> Influence the direction of infrastructure planning and design, contributing to the education of the next generation of engineers and planners.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="about-section pt-50 pb-50" id="eligibilityGuidelinesDes">
   <div class="container">
      <div class="about-wrapper white-bg wow fadeInUp">
         <div class="section-title text-center mb-20 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
            <span class="sub-title"><img src="<?php echo base_url(''); ?>include/web/custom/technology.png" alt="" /> Requirements</span>
            <h2>Registration Eligibility Guidelines</h2>
         </div>
         <div class="row align-items-xl-center">
            <div class="col-xl-8 col-lg-8">
               <div class="about-three_content-box wow fadeInRight">
                  <div class="row">
                     <!-- <div class="col-md-12">
                        <div class="buttonTab mb-30">
                            <ul class="nav nav" role="tablist">
                                <li class="nav-item active"><button data-toggle="tab" role="tab" data-rb-event-key="tab1" aria-selected="true" class="nav-link nav-link active" aria-expanded="true">Individuals</button></li>
                                <li class="nav-item"><button data-toggle="tab" role="tab" data-rb-event-key="tab2" aria-selected="false" class="nav-link nav-link" aria-expanded="false">Organizations</button></li>
                            </ul>
                        </div>
                        </div> -->
                     <div class="col-md-12">
                        <div class="fancy-about-item fancy_about_item__ mb-40 content-individuals">
                           <div class="text">
                              <h5>Final Selection and Participation Criteria</h5>
                              <ul class="check-style-one mb-10">
                                 <li><i class="far fa-check"></i>Final list of participants will be announced <b class="p__5px"> based on the responses received to the EoI.</b></li>
                                 <li><i class="far fa-check"></i><b>It is an experimental initiative, broad participation is encouraged</b></li>
                                 <li><i class="far fa-check"></i>Participants are expected to get engaged</li>
                                 <li>
                                    <ul class="m__25px">
                                       <li>⦿ to get engaged earnestly, proactively, and with a focus on the success of the PoC.</li>
                                       <li>⦿ <b>to get get engaged with the spirit of collaboration</b> and innovation,</li>
                                       <li>⦿ to ensure that their <b>contributions are aligned with the goals and requirements of the' PoC.</b></li>
                                    </ul>
                                 </li>
                              </ul>
                              <h5 class="color_reed">Important Note on Continued Participation</h5>
                              <ul class="check-style-one mb-60 ___Important_Note m__25px">
                                 <li>
                                    <i class="far fa-exclamation-circle color_reed"></i><b>Potential Delisting: </b>Participants may be delisted for lack of relevant competence, inactivity, or if their participation hinders the
                                    PoC's progress
                                 </li>
                                 <li>
                                    <i class="far fa-exclamation-circle color_reed"></i><b>No Obligation for Explanation:</b> The DoT reserves the right to delist participants without providing detailed reasons, focusing on the
                                    PoC's success.
                                 </li>
                                 <li>
                                    <i class="far fa-exclamation-circle color_reed"></i><b>No Financial Liability: </b>Participants delisted from the project will not receive financial compensation or coverage for any related
                                    costs from the DoT.
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="fancy-about-item fancy_about_item__ mb-40 hide-content content-organizations">
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
                     <a href="<?php echo base_url(''); ?>include/web/custom/Download_EoI.pdf" download="" target="_blank">
                        <div class="single-info-item style-one mb-20 wow fadeInUp" style="visibility: visible;">
                           <div class="shape shape-one">
                              <span><img src="<?php echo base_url(''); ?>include/web/images/shape/info-shape-1.png" alt="shape" /></span>
                           </div>
                           <div class="info">
                              <h4 class="title mb-0">
                                 <i class="far fa-download" aria-hidden="true"></i>
                                 For More Details Refer to EoI Document
                              </h4>
                              <span>Access Registration Details and Participation Eligibility</span>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-12">
                     <a href="<?php echo base_url('registration'); ?>">
                        <div class="single-info-item style-two mb-20 wow fadeInDown" style="visibility: visible;">
                           <div class="shape shape-one">
                              <span><img src="<?php echo base_url(''); ?>include/web/images/shape/info-shape-1.png" alt="shape" /></span>
                           </div>
                           <div class="info">
                              <h4 class="title mb-0">
                                 <i class="far fa-handshake" aria-hidden="true"></i>
                                 Register for Event
                              </h4>
                              <span class="text-white">&nbsp;</span>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-12">
                     <a href="<?php echo base_url('registration'); ?>">
                        <div class="single-info-item style-one mb-20 wow fadeInUp" style="visibility: visible;">
                           <div class="shape shape-one">
                              <span><img src="<?php echo base_url(''); ?>include/web/images/shape/info-shape-2.png" alt="shape" /></span>
                           </div>
                           <div class="info">
                              <h4 class="title mb-0">
                                 <i class="far fa-pencil" aria-hidden="true"></i>
                                 Pre-Registration
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
<!-- <section class="about-section" id="participateDes">
   <div class="container-fluid">
       <div class="about-wrapper gray-bg wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
           <div class="container">
               <div class="row align-items-xl-center">
                   <div class="col-xl-12 col-lg-12">
                       <div class="about-three_content-box pl-lg-0 wow fadeInRight text-center" style="visibility: visible; animation-name: fadeInRight;">
                           <div class="section-title mb-25 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                               <span class="sub-title">Participate</span>
                               <h2>Participate in Our Exciting Upcoming Content!</h2>
                           </div>
                           <p class="mb-40 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">Join us as we embark on an exhilarating journey of content creation! Your participation is key to shaping the direction of our upcoming material. Dive into interactive discussions, share your ideas, and contribute your unique perspective. Together, let's make our content truly exceptional.</p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   </section> -->
<section class="project-section gray-bg pt-50 pb-50" id="outreachDes">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-10">
            <div class="section-title text-center mb-30 wow fadeInDown">
               <span class="sub-title"><img src="<?php echo base_url(''); ?>include/web/custom/technology.png" alt="" /> Weaving the Fabric of Events</span>
               <h2>Outreach Programs</h2>
               <h5 class="mt-10">Will be held before EoI Submission Deadline</h5>
            </div>
         </div>
      </div>
      <div class="projects-slider-four wow fadeInUp" data-wow-delay=".2s">
         <div class="single-project-item-four">
            <div class="project-img">
               <img src="<?php echo base_url(''); ?>include/web/custom/Picture1.jpg" alt="Project Image" />
               <div class="hover-content">
                  <div class="text text-white">
                     <!-- <h3 class="title"><a href="javascript:void(0)">Sangam – Delhi: India’s Enterprise Hub</a></h3> -->
                     <h5>Bridging the gap between Innovation and Planning</h5>
                     <p>Come and be a part of the opening event of Sangam. Participating in Sangam outreach program gives you an opportunity to position yourself as a key player for infrastructure planning and design by connecting, collaborating and engaging in insightful discussions with professionals from diverse industries.</p>
                  </div>
               </div>
               <div class="project-content">
                  <div class="text text-white">
                     <!-- <h3 class="title"><a href="javascript:void(0)">Sangam – Delhi: India’s Enterprise Hub</a></h3> -->
                  </div>
               </div>
            </div>
            <div class="text_for_outreach">
               <p class="title"><a href="javascript:void(0)">Sangam – <b>Delhi</b> <br> <span>India’s Enterprise Hub</span> </a></p>
               <h5><i class="far fa-map-marker" aria-hidden="true"></i> Venue: IIT Delhi</h5>
               <h4><i class="far fa-calendar" aria-hidden="true"></i> Date: 5th March 2024</h4>
               <!-- <p> <span style="background-color: #ddddddba;color: #dc3545;border-radius: 5px;padding: 0px 5px;font-size: 15px;">Deadline</span> 3rd March 2024</p> -->
               <div class="d-flex justify-content-center align-item-center"style="gap: 10px;">
                  <!-- <a class="btn btn-success text-white mt-20" href="javascrip:void(0)">Completed</a> -->
                  <a class="text-decoration-underline mt-20 text-danger d-flex justify-content-center align-items-center" href="https://www.youtube.com/live/0y82KMyOqi8?si=8tB_7xbc6VIevabt" target="_blank"><img height="40px" src="<?php echo base_url(''); ?>include/web/custom/youtube.png"  alt=""> </a>
                  <a class="text-decoration-underline mt-20 text-danger d-flex justify-content-center align-items-center" href="https://pib.gov.in/PressReleasePage.aspx?PRID=2011745" target="_blank"><img height="35px" src="<?php echo base_url(''); ?>include/web/custom/PIB.png"  alt=""> </a>
               </div>
            </div>
         </div>
         <div class="single-project-item-four">
            <div class="project-img">
               <img src="<?php echo base_url(''); ?>include/web/custom/Picture2.jpg" alt="Project Image" />
               <div class="hover-content">
                  <div class="text text-white">
                     <!-- <h3 class="title"><a href="">Sangam – Bengaluru: India’s Silicon Valley</a></h3> -->
                     <h5>Confluence of Minds and Data</h5>
                     <p>Sangam- Bengaluru gives a platform for intersectoral interaction. Come and connect with industry experts, explore possibilities to contribute for better and efficient infrastructure planning and design.</p>
                  </div>
               </div>
               <div class="project-content">
                  <div class="text text-white">
                     <!-- <h3 class="title"><a href="javascript:void(0)">Sangam – Bengaluru: India’s Silicon Valley</a></h3> -->
                  </div>
               </div>
            </div>
            <div class="text_for_outreach">
               <p class="title"><a href="javascript:void(0)">Sangam – <b>Bangalore</b> <br> <span>India’s Silicon Valley</span> </a></p>
               <h5><i class="far fa-map-marker" aria-hidden="true"></i> Venue: IIIT Bangalore</h5>
               <h4><i class="far fa-calendar" aria-hidden="true"></i> Date: 9th March 2024</h4>
               <!-- <p> <span style="background-color: #ddddddba;color: #dc3545;border-radius: 5px;padding: 0px 5px;font-size: 15px;">Deadline</span> 8th March 2024</p> -->
               <div class="d-flex justify-content-center" style="gap:10px">
                  <!-- <a class="btn btn-success text-white mt-20" href="javascrip:void(0)">Completed</a> -->
                  <a class="text-decoration-underline mt-20 text-danger d-flex justify-content-center align-items-center" href="https://www.youtube.com/live/xDDH7UzCgoo?si=HGgl5vba-z08hgcf" target="_blank"><img height="40px" src="<?php echo base_url(''); ?>include/web/custom/youtube.png"  alt=""> </a>
                  <a class="text-decoration-underline mt-20 text-danger d-flex justify-content-center align-items-center" href="https://pib.gov.in/PressReleaseIframePage.aspx?PRID=2013083" target="_blank"><img height="35px" src="<?php echo base_url(''); ?>include/web/custom/PIB.png"  alt=""> </a>
               </div>
            </div>
         </div>
         <div class="single-project-item-four">
            <div class="project-img">
               <img src="<?php echo base_url(''); ?>include/web/custom/Picture3.jpg" alt="Project Image" />
               <div class="hover-content">
                  <div class="text text-white">
                     <!-- <h3 class="title"><a href="javascript:void(0)">Sangam – Hyderabad: India’s Innovation Hub</a></h3> -->
                     <h5>Confluence of Innovators and Opportunities</h5>
                     <p>
                        Experience Sangam- Hyderabad, an opportunity to share your ideas, knowledge and innovative solutions with professionals from diverse sectors.
                     </p>
                  </div>
               </div>
               <div class="project-content">
                  <div class="text text-white">
                     <!-- <h3 class="title"><a href="javascript:void(0)">Sangam – Hyderabad: India’s Innovation Hub</a></h3> -->
                  </div>
               </div>
            </div>
            <div class="text_for_outreach">
               <p class="title"><a href="javascript:void(0)">Sangam – <b>Hyderabad</b> <br> <span>India’s Innovation Hub</span> </a></p>
               <h5><i class="far fa-map-marker" aria-hidden="true"></i> Venue: IIIT Hyderabad</h5>
               <h4><i class="far fa-calendar" aria-hidden="true"></i> Date: 12th March 2024</h4>
               <!-- <p> <span style="background-color: #ddddddba;color: #dc3545;border-radius: 5px;padding: 0px 5px;font-size: 15px;">Deadline</span> 11th March 2024</p> -->
               <div class="d-flex justify-content-center align-item-center" style="gap:10px">
                  <!-- <a class="btn btn-success text-white mt-20" href="javascrip:void(0)">Completed</a> -->
                  <a class="text-decoration-underline mt-20 text-danger d-flex justify-content-center align-items-center" href="https://www.youtube.com/live/OiPtJ9dixEE?si=sduB_rVhbmCHNcty" target="_blank"><img src="<?php echo base_url(''); ?>include/web/custom/youtube.png" height="40px;" alt=""> </a>
                  <a class="text-decoration-underline mt-20 text-danger d-flex justify-content-center align-items-center" href="https://pib.gov.in/PressReleasePage.aspx?PRID=2013934" target="_blank"><img  src="<?php echo base_url(''); ?>include/web/custom/PIB.png" height="35px"  alt=""> </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section id="registerForTheEventDes" class="cta-bg-section bg_cover pt-50 pb-50 p-r z-1" style="background-image: url('<?php echo base_url(''); ?>include/web/custom/Banner_3.jpg');">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-7">
            <div class="cta-content-box text-white mb-50 wow fadeInLeft" style="visibility: visible;">
               <div class="section-title mb-20">
                  <span class="sub-title text-white"><img src="<?php echo base_url(''); ?>include/web/custom/technology_white.png" alt=""></i>Sangam 2024: Uniting Minds, Inspiring Change</span>
                  <h2>Register Now for the Ultimate Confluence of Ideas</h2>
               </div>
               <p class="mb-35">Join us for Sangam 2024, a premier event where innovation meets inspiration. With locations in Delhi, Bangalore, and Hyderabad, Sangam offers a platform for thought leaders, industry experts, and enthusiasts to come together and exchange ideas that shape the future. Don't miss your chance to be part of this transformative experience. Register now before it's too late.</p>
               <a class="main-btn golden-btn preRegisBtn btn_green" href="<?php echo base_url('registration'); ?>">Register for Event</a>
            </div>
         </div>
         <div class="col-lg-5">
            <div class="wow fadeInRight" style="visibility: visible;"><img style="border-radius: 5px;" src="<?php echo base_url(''); ?>include/web/custom/bg_image.jpg" alt="Image"></div>
         </div>
      </div>
   </div>
</section>
<section class="project-section gray-bg pt-50 pb-50">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-10">
            <div class="section-title text-center mb-30 wow fadeInDown">
               <h2>Networking Events</h2>
               <h5 class="mt-10">Will be held after EoI submission during 1st stage</h5>
            </div>
         </div>
      </div>
      <div class="projects-slider-four wow fadeInUp" data-wow-delay=".2s">
         <div class="single-project-item-four">
            <div class="project-img">
               <img src="<?php echo base_url(''); ?>include/web/custom/NextGen_Synergy.jpg" alt="Project Image" />
               <div class="hover-content">
                  <div class="text text-white">
                     <h3 class="title"><a href="">Coming Soon</a></h3>
                     <!-- <p>Step into the future with our NextGen Synergy initiative. We're tearing down barriers and fostering collaboration across sectors in real-time. Through dynamic approaches like scenario modeling and evidence-based integration planning, we're reshaping the landscape of innovation. </p> -->
                     <a href="" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                  </div>
               </div>
               <div class="project-content">
                  <div class="text text-white">
                     <h3 class="title"><a href="">Coming Soon</a></h3>
                  </div>
               </div>
            </div>
         </div>
         <div class="single-project-item-four">
            <div class="project-img">
               <img src="<?php echo base_url(''); ?>include/web/custom/Collaborative_Solutions.jpg" alt="Project Image" />
               <div class="hover-content">
                  <div class="text text-white">
                     <h3 class="title"><a href="">Coming Soon</a></h3>
                     <!-- <p>Experience the power of synergy with our innovative program. We're bringing together diverse perspectives and expertise to tackle tomorrow's challenges. Through cutting-edge techniques like scenario modeling and evidence-based integration planning.</p> -->
                     <a href="" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                  </div>
               </div>
               <div class="project-content">
                  <div class="text text-white">
                     <h3 class="title"><a href="">Coming Soon</a></h3>
                  </div>
               </div>
            </div>
         </div>
         <div class="single-project-item-four">
            <div class="project-img">
               <img src="<?php echo base_url(''); ?>include/web/custom/Building_Bridges_Across_Sectors.jpg" alt="Project Image" />
               <div class="hover-content">
                  <div class="text text-white">
                     <h3 class="title"><a href="">Coming Soon</a></h3>
                     <!-- <p>Our program brings together stakeholders from various sectors to tackle complex challenges. Through forward-thinking approaches like scenario modeling and evidence-based integration planning.</p> -->
                     <a href="" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                  </div>
               </div>
               <div class="project-content">
                  <div class="text text-white">
                     <h3 class="title"><a href="">Coming Soon</a></h3>
                  </div>
               </div>
            </div>
         </div>
         <div class="single-project-item-four">
            <div class="project-img">
               <img src="<?php echo base_url(''); ?>include/web/custom/NextGen_Synergy.jpg" alt="Project Image" />
               <div class="hover-content">
                  <div class="text text-white">
                     <h3 class="title"><a href="">Coming Soon</a></h3>
                     <!-- <p>Step into the future with our NextGen Synergy initiative. We're tearing down barriers and fostering collaboration across sectors in real-time. Through dynamic approaches like scenario modeling and evidence-based integration planning, we're reshaping the landscape of innovation. </p> -->
                     <a href="" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                  </div>
               </div>
               <div class="project-content">
                  <div class="text text-white">
                     <h3 class="title"><a href="">Coming Soon</a></h3>
                  </div>
               </div>
            </div>
         </div>
         <div class="single-project-item-four">
            <div class="project-img">
               <img src="<?php echo base_url(''); ?>include/web/custom/Collaborative_Solutions.jpg" alt="Project Image" />
               <div class="hover-content">
                  <div class="text text-white">
                     <h3 class="title"><a href="">Coming Soon</a></h3>
                     <!-- <p>Experience the power of synergy with our innovative program. We're bringing together diverse perspectives and expertise to tackle tomorrow's challenges. Through cutting-edge techniques like scenario modeling and evidence-based integration planning.</p> -->
                     <a href="" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                  </div>
               </div>
               <div class="project-content">
                  <div class="text text-white">
                     <h3 class="title"><a href="">Coming Soon</a></h3>
                  </div>
               </div>
            </div>
         </div>
         <div class="single-project-item-four">
            <div class="project-img">
               <img src="<?php echo base_url(''); ?>include/web/custom/Building_Bridges_Across_Sectors.jpg" alt="Project Image" />
               <div class="hover-content">
                  <div class="text text-white">
                     <h3 class="title"><a href="">Coming Soon</a></h3>
                     <!-- <p>Our program brings together stakeholders from various sectors to tackle complex challenges. Through forward-thinking approaches like scenario modeling and evidence-based integration planning.</p> -->
                     <a href="" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                  </div>
               </div>
               <div class="project-content">
                  <div class="text text-white">
                     <h3 class="title"><a href="">Coming Soon</a></h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="features-section mt-50" id="faqsDes">
   <div class="container">
      <div class="row align-items-xl-center">
         <div class="col-lg-12 text-center">
            <div class="section-title mb-55 wow fadeInLeft" style="visibility: visible;">
               <span class="sub-title"><img src="<?php echo base_url(''); ?>include/web/custom/technology.png" alt="" /> Answers to Common Queries about Participation and Submission</span>
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
                           <p>
                              The 'Digital Twin: Sangam' PoC aims to revolutionize infrastructure planning and design by integrating Digital Twin technology with AI, ML, and IoT. It seeks to generate social impact through
                              innovative approaches while showcasing the fusion of digital technologies with infrastructure planning to address real-world challenges effectively.
                           </p>
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
                           <p>
                              Individuals or organizations involved in creating virtual worlds, providing data technologies, offering dynamic data insights, GIS/BIM technologies, utility and transport network mapping, setting
                              standards, or contributing to viable business models can join. The PoC welcomes participants with diverse expertise and interests in shaping the future of digital infrastructure planning.
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
                           <p>
                              Joining the PoC offers numerous benefits, including opportunities to contribute to pioneering projects with national and global implications, showcasing innovative solutions, networking with industry
                              leaders and government bodies, and being part of a transformative initiative shaping the future of infrastructure planning and development.
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
                           <p>
                              The Sangam Digital Twin PoC will be held in one of the major cities of India which will serve as a venue for innovation, providing a conducive environment for exploring transformative approaches to
                              infrastructure planning and design.
                           </p>
                           <p></p>
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
                           <p>
                              The Expression of Interest (EoI) is an invitation extended by the Department of Telecommunications (DoT) to industry leaders, tech companies, experts, startups, institutions, and innovators. It
                              focuses on participating in a Proof of Concept (PoC) aimed at revolutionizing infrastructure planning and design through the integration of Digital Twin technology with comprehensive mobility
                              insights.
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
                           <p>
                              The selection criteria emphasize creative and innovative thinking, relevant experience in Digital Twin technology or related fields, and the potential to contribute significantly to the PoC.
                              Applicants are evaluated based on their competence and active involvement in project activities. The Department of Telecommunications reserves the right to delist participants who do not meet the
                              criteria or adversely impact the progress of the PoC.
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
                           <p>The EoI process consists of two stages:</p>
                           <ul>
                              <li>
                                 The First Stage involves setting the foundation for collaborative innovation, where participants contribute to developing solutions using digital twin technologies. It includes activities such as
                                 understanding the broader impact, inspiring innovation, collaborative problem-solving, and networking.
                              </li>
                              <li>
                                 The Second Stage brings together startups, industry leaders, and stakeholders to develop and demonstrate solutions within the context of the PoC. It focuses on translating innovative ideas into
                                 practical, scalable solutions.
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
                           <p>
                              Participants are expected to contribute meaningfully to the PoC by demonstrating competence in their respective areas and maintaining active involvement in project activities. Failure to meet these
                              expectations may result in delisting from the project. Participants are not obligated to provide specific reasons for delisting, and the Department of Telecommunications will not bear any financial
                              liabilities resulting from delisting.
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
                           <p>
                              The submission requirements for the EoI include personal and organizational details, previous experience in related projects, and any relevant achievements or recognitions. Additionally, participants
                              are required to provide details of their proposed approach or methodology, technological resources they plan to use, human resources commitment, and any additional information they deem pertinent.
                              Participants must also certify that their organization has authorized them to submit the response to the EoI.
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
                           <p>
                              The pre-registration process requires providing personal and organizational details, including name, date of birth, organizational email, mobile number, and organizational information such as core
                              competencies and potential interest areas. Individuals and organizations can register based on their respective categories, and validation checks are conducted for accuracy.
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
<section class="about-section" id="curatedContentDes">
   <div class="container-fluid">
      <div class="about-wrapper gray-bg wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
         <div class="container">
            <div class="row align-items-xl-center">
               <div class="col-xl-12 col-lg-12">
                  <div class="about-three_content-box pl-lg-0 wow fadeInRight text-center" style="visibility: visible; animation-name: fadeInRight;">
                     <div class="section-title mb-25 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <span class="sub-title">Curated Content </span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="testimonial-slider-one wow fadeInUp">
               <?php foreach ($curatedContentList as $list): ?>
                 <div class="single-testimonial-item">
                    <div class="testimonial-inner-content text-center">
                       <div class="d-flex justify-content-center">
                          <img src="<?php if (isset($list['image']) && !empty($list['image'])) { echo base_url('uploads/cc_image/') . $list['image'];}?>" alt="<?php if (isset($list['title']) && !empty($list['title'])) { echo $list['title'];}else{echo "";}?>">
                       </div>
                       <div class="quote-rating-box d-flex justify-content-center">
                          <div class="ratings-box">
                             <h5>
                             <a href="<?php if (isset($list['title_link']) && !empty($list['title_link'])) { echo $list['title_link'];}else{echo "javascript:void(0)";}?>" ><?php if (isset($list['title']) && !empty($list['title'])) { echo $list['title'];}else{echo "";}?></a></h6>
                             <p><b><?php if (isset($list['sub_title']) && !empty($list['sub_title'])) { echo $list['sub_title'];}else{echo "";}?></b> </p>
                          </div>
                       </div>
                       <div class="text-center">
                          <h6> <a href="<?php if (isset($list['custom_title_link']) && !empty($list['custom_title_link'])) { echo $list['custom_title_link'];}else{echo "";}?>" target="_blank"><?php if (isset($list['custom_title']) && !empty($list['custom_title'])) { echo $list['custom_title'];}else{echo "";}?></a> </h6>
                       </div>
                    </div>
                 </div>
               <?php endforeach; ?>
               <div class="single-testimonial-item">
                  <div class="testimonial-inner-content text-center">
                     <div class="d-flex justify-content-center">
                        <img src="<?php echo base_url(''); ?>include/web/custom/Curated_Content_ESRI.png" alt="">
                     </div>
                     <div class="quote-rating-box d-flex justify-content-center">
                        <div class="ratings-box">
                           <h5>
                           <a href="https://www.youtube.com/watch?v=s8SB0QvuRxI" target="_blank">ArcGIS</a></h6>
                           <p> <b>A Foundation for Digital Twins</b> </p>
                        </div>
                     </div>
                     <div class="text-center">
                        <h6> <a href="https://www.esri.in/" target="_blank">ESRI</a> </h6>
                     </div>
                  </div>
               </div>
               <div class="single-testimonial-item">
                  <div class="testimonial-inner-content text-center">
                     <div class="d-flex justify-content-center">
                        <img src="<?php echo base_url(''); ?>include/web/custom/Curated_Content_Blue_Sky.webp" alt="">
                     </div>
                     <div class="quote-rating-box d-flex justify-content-center">
                        <div class="ratings-box">
                           <h5>
                           <a href="https://blueskyhq.io/blog/spacetime-building-a-digital-twin-of-our-planet" target="_blank">SpaceTime™</a></h6>
                           <p> <b>Building a Digital Twin of our Planet</b> </p>
                        </div>
                     </div>
                     <div class="text-center">
                        <h6> <a href="https://blueskyhq.io/" target="_blank">Blue Sky Analytics</a> </h6>
                     </div>
                  </div>
               </div>
               <div class="single-testimonial-item">
                  <div class="testimonial-inner-content text-center">
                     <div class="d-flex justify-content-center">
                        <img src="<?php echo base_url(''); ?>include/web/custom/Curated_Content_Genesys.jpg" alt="">
                     </div>
                     <div class="quote-rating-box d-flex justify-content-center">
                        <div class="ratings-box">
                           <h5>
                           <a href="https://www.igenesys.com/3d-digital-twin" target="_blank">Genesys’s </a></h6>
                           <p> <b>3D- Digital Twin</b> </p>
                        </div>
                     </div>
                     <div class="text-center">
                        <h6> <a href="https://www.igenesys.com/" target="_blank">Genesys</a> </h6>
                     </div>
                  </div>
               </div>
               <div class="single-testimonial-item">
                  <div class="testimonial-inner-content text-center">
                     <div class="d-flex justify-content-center">
                        <img src="<?php echo base_url(''); ?>include/web/custom/Curated_Content_Bentley.png" alt="">
                     </div>
                     <div class="quote-rating-box d-flex justify-content-center">
                        <div class="ratings-box">
                           <h5>
                           <a href="https://www.bentley.com/software/digital-twins/" target="_blank">Digital Twins and iTwin Platform</a></h6>
                           <p> <b>Connect The Physical And Virtual World</b> </p>
                        </div>
                     </div>
                     <div class="text-center">
                        <h6> <a href="https://www.bentley.com/" target="_blank">Bentley</a> </h6>
                     </div>
                  </div>
               </div>
               <div class="single-testimonial-item">
                  <div class="testimonial-inner-content text-center">
                     <div class="d-flex justify-content-center">
                        <img src="<?php echo base_url(''); ?>include/web/custom/Curated_Content_NAYAN.png" alt="">
                     </div>
                     <div class="quote-rating-box d-flex justify-content-center">
                        <div class="ratings-box">
                           <h5>
                           <a href="https://traffic.nayan.co/" target="_blank">High Precision Video Analytics and AI Data</a></h6>
                        </div>
                     </div>
                     <div class="text-center">
                        <h6> <a href="https://nayan.co/" target="_blank">NAYAN</a> </h6>
                     </div>
                  </div>
               </div>
               <div class="single-testimonial-item">
                  <div class="testimonial-inner-content text-center">
                     <div class="d-flex justify-content-center">
                        <img src="<?php echo base_url(''); ?>include/web/custom/Curated_Content_JIO.png" alt="">
                     </div>
                     <div class="quote-rating-box d-flex justify-content-center">
                        <div class="ratings-box">
                           <h5>
                           <a href="https://www.jio.com/business/jio-mixed-reality" target="_blank">Mixed Reality </a></h6>
                           <p> <b>Deliver the perfect blend of physical and digital worlds</b> </p>
                        </div>
                     </div>
                     <div class="text-center">
                        <h6> <a href="https://www.jio.com/" target="_blank">Jio</a> </h6>
                     </div>
                  </div>
               </div>
               <div class="single-testimonial-item">
                  <div class="testimonial-inner-content text-center">
                     <div class="d-flex justify-content-center">
                        <img src="<?php echo base_url(''); ?>include/web/custom/Curated_Content_Microsoft.png" alt="">
                     </div>
                     <div class="quote-rating-box d-flex justify-content-center">
                        <div class="ratings-box">
                           <h5>
                           <a href="https://azure.microsoft.com/en-in/products/digital-twins" target="_blank">Azure Digital Twins</a></h6>
                           <p> <b>Create live, digital models of the physical world</b> </p>
                        </div>
                     </div>
                     <div class="text-center">
                        <h6> <a href="https://azure.microsoft.com/en-in/" target="_blank">Microsoft</a> </h6>
                     </div>
                  </div>
               </div>
               <div class="single-testimonial-item">
                  <div class="testimonial-inner-content text-center">
                     <div class="d-flex justify-content-center">
                        <img src="<?php echo base_url(''); ?>include/web/custom/Curated_Content_Meta.jpg" alt="">
                     </div>
                     <div class="quote-rating-box d-flex justify-content-center">
                        <div class="ratings-box">
                           <h5>
                           <a href="https://about.meta.com/metaverse/#virtual-reality" target="_blank">Virtual reality</a></h6>
                           <p> <b>Explore new worlds and shared experiences</b> </p>
                        </div>
                     </div>
                     <div class="text-center">
                        <h6> <a href="https://about.meta.com/" target="_blank">Meta</a> </h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- <div class="sticky-button-eoi">
   <a href="<?php echo base_url('expression-of-interest/'); ?>#registerNowEoI">
   <span style="margin-bottom:0">EoI Submission Date Extended</span>
   <span style="margin-bottom:0">05 April 2024</span>
   </a>
</div> -->
<?php include_once __DIR__ . '/../common/footer.php'; ?>
