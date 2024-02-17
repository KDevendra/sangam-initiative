<?php include_once __DIR__ . '/../common/header.php'; ?>
<section class="page-title-area text-white bg_cover mt___147" style="background-image: url('<?php echo base_url(); ?>include/web/custom/About_Banner.jpg');">
    <div class="container">
        <div class="page-title-inner text-center">
            <h1 class="page-title">Use Cases</h1>
            <div class="gd-breadcrumb"><span class="breadcrumb-entry"><a href="<?php echo base_url(''); ?>">Home</a></span><span class="separator"></span><span class="breadcrumb-entry active">Use Cases</span></div>
        </div>
    </div>
</section>
<section class="skills-section pt-50 pb-50">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-xl-6 col-lg-6">
                <div class="service-info-wrapper pr-lg-40 wow fadeInDown" style="visibility: visible;">
                    <h3 class="title">Use Case Submission Form
                    </h3>
                    <ul class="check-style-one d-block mb-40">
                        <li><b>1. Title of the Use Case:</b> Provide a concise and descriptive title for your suggested use case. </li>
                        <li><b> 2. Abstract:</b> Briefly summarize the use case, highlighting its core idea and purpose.</li>
                        <li><b> 3. Objective:</b> Clearly define the objective or the problem that the use case aims to address.</li>
                        <li><b> 4. Relevance to Sangam Initiative:</b> Explain how your use case aligns with the goals and themes of the Sangam Initiative, such as unified data, AI-driven insights, and infrastructure planning and design.</li>
                        <li><b> 5. Target Area(s):</b> Identify the specific area(s) your use case applies to (e.g., transportation, environment).</li>
                        <li><b> 6. Technologies Utilized:</b> List the key technologies that will be leveraged in your use case (e.g., Digital Twin, AI/ML, IoT, 5G).</li>
                        <li><b> 7. Data Sources and Requirements:</b> Describe the data sources that will be used and any specific data requirements or considerations.</li>
                        <li><b> 8. Expected Outcomes and Impact:</b> Outline the anticipated outcomes of the use case and its potential impact on infrastructure planning and design.</li>
                        <li><b> 9. Innovative Aspects:</b> Highlight any innovative features or approaches that distinguish your use case.</li>
                        <li><b> 10. Feasibility and Implementation Challenges:</b> Briefly discuss the feasibility of the use case and any anticipated challenges in its implementation.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form-wrapper mb-50 wow fadeInRight" style="visibility: visible;">
                    <form class="contact-form" id="caseSubmissionForm">
                        <div class="form_group"><label for="useCaseTitle"><i class="far fa-shield"></i></label><input type="text" class="form_control" placeholder="Enter a concise and descriptive title" id="useCaseTitle" name="title"></div>
                        <div class="form_group"><label for="abstract"><i class="far fa-lightbulb"></i></label><textarea class="form_control" rows="1" placeholder="Summarize the core idea and purpose briefly" id="abstract" name="abstract"></textarea></div>
                        <div class="form_group"><label for="objective"><i class="far fa-exclamation-triangle"></i></label><input type="text" class="form_control" placeholder="Clearly define the objective or problem to address" id="objective" name="objective"></div>
                        <div class="form_group"><label for="targetArea"><i class="far fa-transgender-alt"></i></label><textarea class="form_control" rows="1" placeholder="Identify specific areas of application" id="targetArea" name="target_areas"></textarea></div>
                        <div class="form_group"><label for="relevance"><i class="far fa-pen-fancy"></i></label><textarea class="form_control" rows="1" placeholder="Explain alignment with Sangam Initiative goals" id="relevance" name="relevance"></textarea></div>
                        <div class="form_group"><label for="technologies"><i class="far fa-tasks"></i></label><input type="text" class="form_control" placeholder="List key technologies used in the use case" id="technologies" name="technologies_used"></div>
                        <div class="form_group"><label for="dataSources"><i class="far fa-database"></i></label><textarea class="form_control" rows="1" placeholder="Describe data sources and any requirements" id="dataSources" name="data_sources"></textarea></div>
                        <div class="form_group"><label for="expectedOutcomes"><i class="far fa-cogs"></i></label><textarea class="form_control" rows="1" placeholder="Outline anticipated results and impact" id="expectedOutcomes" name="expected_outcomes"></textarea></div>
                        <div class="form_group"><label for="innovativeAspects"><i class="far fa-star"></i></label><textarea class="form_control" rows="1" placeholder="Highlight unique features or approaches" id="innovativeAspects" name="innovative_aspects"></textarea></div>
                        <div class="form_group"><label for="challenges"><i class="far fa-pen-fancy"></i></label><textarea class="form_control" rows="1" placeholder="Discuss feasibility and potential challenges" id="challenges" name="feasibility_and_challenges"></textarea></div>
                        <div class="form_group"><button class="btn btn-primary" id="submitBtn">Send Message</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once __DIR__ . '/../common/footer.php'; ?>