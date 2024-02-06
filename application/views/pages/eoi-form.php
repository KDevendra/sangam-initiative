<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0"><?php $segment = $this->uri->segment(1);
                                        $segmentWithSpaces = str_replace('-', ' ', $segment);
                                        echo ucwords($segmentWithSpaces); ?></h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active"><?php $segment = $this->uri->segment(1);
                                                                $segmentWithSpaces = str_replace('-', ' ', $segment);
                                                                echo ucwords($segmentWithSpaces); ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <?php if (!empty($this->session->flashdata('error'))) { ?>
                    <div class="alert alert-danger alert-dismissible fade show material-shadow" role="alert">
                        <?php echo $this->session->flashdata('error'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php } ?>
                <?php if (!empty($this->session->flashdata('primary'))) { ?>
                    <div class="alert alert-primary alert-dismissible fade show material-shadow" role="alert">
                        <?php echo $this->session->flashdata('primary'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php } ?>
            </div>
            <div id="custom-progress-bar"></div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="card-title mb-0">Expression of Interest (EoI) Form: Digital Twin - Sangam Project</h4>
                    </div>
                    <div class="card-body form-steps">
                        <form class="vertical-navs-step">
                            <div class="row gy-5">
                                <div class="col-lg-4">
                                    <div class="nav flex-column custom-nav nav-pills" role="tablist" aria-orientation="vertical">
                                        <button class="nav-link active" id="personal-information-tab" data-bs-toggle="pill" data-bs-target="#personal-information" type="button" role="tab" aria-controls="personal-information" aria-selected="true">
                                            <span class="step-title me-2">
                                                <i class="ri-close-circle-fill step-icon me-2"></i> Step 1
                                            </span>
                                            Personal Information
                                        </button>
                                        <button class="nav-link" id="additiona-information-tab" data-bs-toggle="pill" data-bs-target="#additiona-information" type="button" role="tab" aria-controls="additiona-information" aria-selected="false">
                                            <span class="step-title me-2">
                                                <i class="ri-close-circle-fill step-icon me-2"></i> Step 2
                                            </span>
                                            Additional Information
                                        </button>
                                        <button class="nav-link" id="details-of-submission-tab" data-bs-toggle="pill" data-bs-target="#details-of-submission" type="button" role="tab" aria-controls="details-of-submission" aria-selected="false">
                                            <span class="step-title me-2">
                                                <i class="ri-close-circle-fill step-icon me-2"></i> Step 3
                                            </span>
                                            Details of Submission
                                        </button>
                                        <button class="nav-link" id="technological-resources-tab" data-bs-toggle="pill" data-bs-target="#technological-resources" type="button" role="tab" aria-controls="technological-resources" aria-selected="false">
                                            <span class="step-title me-2">
                                                <i class="ri-close-circle-fill step-icon me-2"></i> Step 4
                                            </span>
                                            Technological Resources
                                        </button>
                                        <button class="nav-link" id="huuman-resources-commitment-tab" data-bs-toggle="pill" data-bs-target="#huuman-resources-commitment" type="button" role="tab" aria-controls="huuman-resources-commitment" aria-selected="false">
                                            <span class="step-title me-2">
                                                <i class="ri-close-circle-fill step-icon me-2"></i> Step 5
                                            </span>
                                            Human Resources Commitment
                                        </button>
                                        <button class="nav-link" id="other-information-tab" data-bs-toggle="pill" data-bs-target="#other-information" type="button" role="tab" aria-controls="other-information" aria-selected="false">
                                            <span class="step-title me-2">
                                                <i class="ri-close-circle-fill step-icon me-2"></i> Step 6
                                            </span>
                                            Other Information
                                        </button>
                                        <button class="nav-link" id="certification-tab" data-bs-toggle="pill" data-bs-target="#certification" type="button" role="tab" aria-controls="certification" aria-selected="false">
                                            <span class="step-title me-2">
                                                <i class="ri-close-circle-fill step-icon me-2"></i> Step 7
                                            </span>
                                            Certification
                                        </button>
                                        <button class="nav-link" id="lock-application-tab" data-bs-toggle="pill" data-bs-target="#lock-application" type="button" role="tab" aria-controls="lock-application" aria-selected="false">
                                            <span class="step-title me-2">
                                                <i class="ri-close-circle-fill step-icon me-2"></i> Step 8
                                            </span>
                                            Lock Application
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="px-lg-4">
                                        <div class="tab-content">
                                            <div class="tab-pane fade active show" id="personal-information" role="tabpanel" aria-labelledby="personal-information-tab">
                                                <div>
                                                    <h5>Personal Information</h5>
                                                    <p class="text-muted">Please provide your personal details to begin the Expression of Interest (EoI) process.</p>
                                                </div>
                                                <div>
                                                    <div class="row g-3">
                                                        <div class="col-sm-6">
                                                            <label for="firstName" class="form-label">Full Name</label>
                                                            <input type="text" class="form-control" id="full_name" placeholder="Enter first name" value="<?php if (isset($userDetail->full_name)) {
                                                                                                                                                                echo  $userDetail->full_name;
                                                                                                                                                            }; ?>" required="">
                                                            <div class="invalid-feedback">Please enter a first name</div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="email" class="form-label">Email</label>
                                                            <input type="text" class="form-control" id="email" placeholder="Enter email" value="<?php if (isset($userDetail->email)) {
                                                                                                                                                    echo  $userDetail->email;
                                                                                                                                                }; ?>" required="">
                                                            <div class="invalid-feedback">Please enter a organization name</div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="phoneNumber" class="form-label">Phone Number</label>
                                                            <input type="text" class="form-control" id="phoneNumber" placeholder="Enter phone number" value="<?php if (isset($userDetail->contact_no)) {
                                                                                                                                                                    echo  $userDetail->contact_no;
                                                                                                                                                                }; ?>" required="">
                                                            <div class="invalid-feedback">Please enter a phone number</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                    <button type="button" class="btn btn-primary btn-label right ms-auto goToNextStep"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Next Step</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="additiona-information" role="tabpanel" aria-labelledby="additiona-information-tab">
                                                <div>
                                                    <h5>Additional Information</h5>
                                                    <p class="text-muted">Share your previous experience and achievements relevant to the Digital Twin - Sangam project.</p>
                                                </div>
                                                <div>
                                                    <div class="row g-3">
                                                        <div class="col-sm-12">
                                                            <label for="previous_experience" id="additionalInformation" class="form-label">
                                                                <span>Previous Experience in Related Projects</span>
                                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Please provide details of any previous experience in projects related to infrastructure planning and design, Digital Twin technology, or relevant fields.">
                                                                    <a href="javascript:void(0)" class="text-muted"><i class="ri-info-i"></i></a>
                                                                </div>
                                                            </label>
                                                            <textarea name="previous_experience" class="form-control" id="previous_experience" width="100%" rows="3" required\><?php if (isset($userDetail->previous_experience)) {
                                                                                                                                                                                    echo  $userDetail->previous_experience;
                                                                                                                                                                                }; ?></textarea>
                                                            <div class="invalid-feedback">Please enter a previous experience in related projects</div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label for="achievements_recognitions" id="additionalInformation" class="form-label">
                                                                <span>Achievements or Recognitions</span>
                                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Please list any relevant achievements or recognitions in the field of infrastructure planning and design, technology, or innovation.">
                                                                    <a href="javascript:void(0)" class="text-muted"><i class="ri-info-i"></i></a>
                                                                </div>
                                                            </label>
                                                            <textarea name="achievements_recognitions" class="form-control" id="achievements_recognitions" width="100%" rows="3" required\><?php if (isset($userDetail->achievements_recognitions)) {
                                                                                                                                                                                                echo  $userDetail->achievements_recognitions;
                                                                                                                                                                                            }; ?></textarea>
                                                            <div class="invalid-feedback">Please enter a achievements or recognitions</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                    <button type="button" class="btn btn-light btn-label previestab" data-previous="personal-information-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Previous Step</button>
                                                    <button type="button" class="btn btn-primary btn-label right ms-auto goToNextStep"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Next Step</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="details-of-submission" role="tabpanel" aria-labelledby="details-of-submission-tab">
                                                <div>
                                                    <h5>Details of Submission</h5>
                                                    <p class="text-muted">Outline your proposed approach and methodology for the PoC, and ensure alignment with project goals.</p>
                                                </div>
                                                <div>
                                                    <div class="row g-3">
                                                        <div class="col-sm-6">
                                                            <label for="title" class="form-label">Title</label>
                                                            <input type="text" class="form-control" id="title" placeholder="Enter title" value="" required="">
                                                            <div class="invalid-feedback">Please enter a title</div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="category" class="form-label">Category</label>
                                                            <input type="text" class="form-control" id="category" placeholder="Enter category" value="" required="">
                                                            <div class="invalid-feedback">Please enter a category</div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="achievements_recognitions" id="additionalInformation" class="form-label">
                                                                Strategic Vision
                                                            </label>
                                                            <textarea name="achievements_recognitions" class="form-control" id="achievements_recognitions" width="100%" rows="2" required\></textarea>
                                                            <div class="invalid-feedback">Please enter a achievements or recognitions</div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="achievements_recognitions" id="additionalInformation" class="form-label">
                                                                Objectives
                                                            </label>
                                                            <textarea name="achievements_recognitions" class="form-control" id="achievements_recognitions" width="100%" rows="2" required\></textarea>
                                                            <div class="invalid-feedback">Please enter a objectives</div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="achievements_recognitions" id="additionalInformation" class="form-label">
                                                                <span>Alignment with Project Goals</span>
                                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Explain how your proposed approach aligns with the goals of the ' Digital Twin - Sangam' project.">
                                                                    <a href="javascript:void(0)" class="text-muted"><i class="ri-info-i"></i></a>
                                                                </div>
                                                            </label>
                                                            <textarea name="achievements_recognitions" class="form-control" id="achievements_recognitions" width="100%" rows="2" required\></textarea>
                                                            <div class="invalid-feedback">Please enter a alignment with project goals</div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="achievements_recognitions" id="additionalInformation" class="form-label">
                                                                <span>Contribution to Project Goals</span>
                                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Describe how you plan to contribute to the project's goals.">
                                                                    <a href="javascript:void(0)" class="text-muted"><i class="ri-info-i"></i></a>
                                                                </div>
                                                            </label>
                                                            <textarea name="achievements_recognitions" class="form-control" id="achievements_recognitions" width="100%" rows="2" required\></textarea>
                                                            <div class="invalid-feedback">Please enter a contribution to project goals</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                    <button type="button" class="btn btn-light btn-label previestab" data-previous="additiona-information-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Previous Step</button>
                                                    <button type="button" class="btn btn-primary btn-label right ms-auto goToNextStep"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Next Step</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="technological-resources" role="tabpanel" aria-labelledby="technological-resources-tab">
                                                <div>
                                                    <h5>Technological Resources</h5>
                                                    <p class="text-muted">Detail the resources you plan to utilize or offer for the development and demonstration phases of the PoC</p>
                                                </div>
                                                <div>
                                                    <div class="row g-3">
                                                        <div class="col-sm-6">
                                                            <label for="firstName" class="form-label">Category of Resources</label>
                                                            <select class="form-control" id="coreCompetency" style="height: 40px !important;" name="coreCompetency[]" multiple="multiple" required>
                                                                <option value="Use Resource">Use Resource</option>
                                                                <option value="Offer Resource">Offer Resource</option>
                                                                <option value="Both">Both</option>
                                                                <option value="None">None</option>
                                                            </select>
                                                            <div class="invalid-feedback">Please select category of resources</div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="email" class="form-label">Detail of Resources</label>
                                                            <input type="text" class="form-control" id="email" placeholder="Enter detail of resources" value="" required="">
                                                            <div class="invalid-feedback">Please enter a detail of resources</div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label for="achievements_recognitions" id="additionalInformation" class="form-label">
                                                                <span>Suitability of Resources</span>
                                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Explain why these resources are suitable and how they align with the objectives of the PoC.">
                                                                    <a href="javascript:void(0)" class="text-muted"><i class="ri-info-i"></i></a>
                                                                </div>
                                                            </label>
                                                            <textarea name="achievements_recognitions" class="form-control" id="achievements_recognitions" width="100%" rows="2" required\></textarea>
                                                            <div class="invalid-feedback">Please enter a suitability of resources</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                    <button type="button" class="btn btn-light btn-label previestab" data-previous="personal-information-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Previous Step</button>
                                                    <button type="button" class="btn btn-primary btn-label right ms-auto goToNextStep"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Next Step</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="huuman-resources-commitment" role="tabpanel" aria-labelledby="huuman-resources-commitment-tab">
                                                <div>
                                                    <h5>Human Resources Commitment</h5>
                                                    <p class="text-muted">Provide information on the expert resources and developers dedicated to the PoC.</p>
                                                </div>
                                                <div>
                                                    <div class="row g-3">
                                                        <div class="col-sm-12">
                                                            <label for="achievements_recognitions" id="additionalInformation" class="form-label">
                                                                <span>Expert Resources and Developers</span>
                                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Please provide information on the expert resources and developers that will be dedicated to the PoC. Include details of their roles, experience, and extent of involvement during the PoC duration.">
                                                                    <a href="javascript:void(0)" class="text-muted"><i class="ri-info-i"></i></a>
                                                                </div>
                                                            </label>
                                                            <textarea name="achievements_recognitions" class="form-control" id="achievements_recognitions" width="100%" rows="5" required\></textarea>
                                                            <div class="invalid-feedback">Please enter a expert resources and developers</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                    <button type="button" class="btn btn-light btn-label previestab" data-previous="personal-information-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Previous Step</button>
                                                    <button type="button" class="btn btn-primary btn-label right ms-auto goToNextStep"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Next Step</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="other-information" role="tabpanel" aria-labelledby="other-information-tab">
                                                <div>
                                                    <h5>Other Information</h5>
                                                    <p class="text-muted">Share any other pertinent facts, items, or unique offerings related to your participation in the EoI process.</p>
                                                </div>
                                                <div>
                                                    <div class="row g-3">
                                                        <div class="col-sm-12">
                                                            <label for="achievements_recognitions" id="additionalInformation" class="form-label">
                                                                <span>Other Pertinent Facts or Offerings</span>
                                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="If there are any other pertinent facts, items, or unique offerings that you wish to mention, please include them here. This may include innovative ideas, potential collaborations, or specific advantages your participation brings to the PoC.">
                                                                    <a href="javascript:void(0)" class="text-muted"><i class="ri-info-i"></i></a>
                                                                </div>
                                                            </label>
                                                            <textarea name="achievements_recognitions" class="form-control" id="achievements_recognitions" width="100%" rows="5" required\></textarea>
                                                            <div class="invalid-feedback">Please enter a other pertinent facts or offerings</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                    <button type="button" class="btn btn-light btn-label previestab" data-previous="personal-information-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Previous Step</button>
                                                    <button type="button" class="btn btn-primary btn-label right ms-auto goToNextStep"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Next Step</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="certification" role="tabpanel" aria-labelledby="certification-tab">
                                                <div>
                                                    <h5>Certification</h5>
                                                    <p class="text-muted">Certify your organization's authorization to submit the Expression of Interest (EoI) response.</p>
                                                    <div>
                                                        <div class="row g-3">
                                                            <div class="col-sm-12">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="register_as" id="register_as1" value="Individual">
                                                                    <label class="form-check-label" for="register_as1">I certify that my organization ____ has authorized me to submit the above response to the EoI</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                    <button type="button" class="btn btn-light btn-label previestab" data-previous="personal-information-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Previous Step</button>
                                                    <button type="button" class="btn btn-primary btn-label right ms-auto goToNextStep"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Next Step</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#coreCompetency').select2({
        placeholder: 'Select core competencies...',
        allowClear: true
    });
    $(".form-steps").each(function() {
        var l = $(this);

        l.find(".nexttab").each(function() {
            var t = $(this);
            var e = l.find('button[data-bs-toggle="pill"]');

            e.on("show.bs.tab", function() {
                $(this).addClass("done");
            });

            t.on("click", function() {
                l.addClass("was-validated");
                l.find(".tab-pane.show .form-control").each(function() {
                    var e = $(this);
                    if (e.val().length > 0 && e.val().match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)) {
                        var t = $(this).attr("data-nexttab");
                        $("#" + t).click();
                        l.removeClass("was-validated");
                    }
                });
            });
        });

        l.find(".previestab").each(function() {
            var o = $(this);
            o.on("click", function() {
                var e = o.attr("data-previous");
                var t = o.closest("form").find(".custom-nav .done").length;
                for (var r = t - 1; r < t; r++) {
                    if (o.closest("form").find(".custom-nav .done")[r]) {
                        o.closest("form").find(".custom-nav .done")[r].classList.remove("done");
                    }
                }
                $("#" + e).click();
            });
        });

        var a = l.find('button[data-bs-toggle="pill"]');
        a.each(function(o, r) {
            $(r).attr("data-position", o);
            $(r).on("click", function() {
                l.removeClass("was-validated");
                if ($(r).attr("data-progressbar")) {
                    var e = $("#custom-progress-bar").find("li").length - 1;
                    var t = o / e * 100;
                    $("#custom-progress-bar").find(".progress-bar").css("width", t + "%");
                }
                l.find(".custom-nav .done").removeClass("done");
                for (var t = 0; t <= o; t++) {
                    if ($(a[t]).hasClass("active")) {
                        $(a[t]).removeClass("done");
                    } else {
                        $(a[t]).addClass("done");
                    }
                }
            });
        });
    });
</script>