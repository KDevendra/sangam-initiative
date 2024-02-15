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
                        <?php echo $this->session->flashdata('error'); ?> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php } ?>
                <?php if (!empty($this->session->flashdata('primary'))) { ?>
                    <div class="alert alert-primary alert-dismissible fade show material-shadow" role="alert">
                        <?php echo $this->session->flashdata('primary'); ?> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                        <form class="vertical-navs-step" action="<?php echo base_url('submit-eoi-registration'); ?>" method="post" enctype="multipart/form-data">
                            <div class="row gy-5">
                                <div class="col-lg-4">
                                    <div class="nav flex-column custom-nav nav-pills" role="tablist" aria-orientation="vertical">
                                        <button class="nav-link active" id="personal-information-tab" data-bs-toggle="pill" data-bs-target="#personal-information" type="button" role="tab" aria-controls="personal-information" aria-selected="true">
                                            <span class="step-title me-2"> <i class="ri-shield-user-fill"></i> Step 1 </span> Personal Information
                                        </button>
                                        <button class="nav-link" id="additiona-information-tab" data-bs-toggle="pill" data-bs-target="#additiona-information" type="button" role="tab" aria-controls="additiona-information" aria-selected="false">
                                            <span class="step-title me-2"> <i class="ri-file-info-fill"></i> Step 2 </span> Additional Information
                                        </button>
                                        <button class="nav-link" id="details-of-submission-tab" data-bs-toggle="pill" data-bs-target="#details-of-submission" type="button" role="tab" aria-controls="details-of-submission" aria-selected="false">
                                            <span class="step-title me-2"> <i class="ri-lightbulb-flash-fill"></i> Step 3 </span> Details of Submission
                                        </button>
                                        <button class="nav-link" id="technological-resources-tab" data-bs-toggle="pill" data-bs-target="#technological-resources" type="button" role="tab" aria-controls="technological-resources" aria-selected="false">
                                            <span class="step-title me-2"> <i class="ri-file-edit-fill"></i> Step 4 </span> Technological Resources
                                        </button>
                                        <button class="nav-link" id="huuman-resources-commitment-tab" data-bs-toggle="pill" data-bs-target="#huuman-resources-commitment" type="button" role="tab" aria-controls="huuman-resources-commitment" aria-selected="false">
                                            <span class="step-title me-2"> <i class="ri-survey-fill"></i> Step 5 </span> Human Resources Commitment
                                        </button>
                                        <button class="nav-link" id="other-information-tab" data-bs-toggle="pill" data-bs-target="#other-information" type="button" role="tab" aria-controls="other-information" aria-selected="false">
                                            <span class="step-title me-2"> <i class="ri-booklet-fill"></i> Step 6 </span> Other Information
                                        </button>
                                        <button class="nav-link" id="certification-tab" data-bs-toggle="pill" data-bs-target="#certification" type="button" role="tab" aria-controls="certification" aria-selected="false">
                                            <span class="step-title me-2"> <i class="ri-shield-check-fill"></i> Step 7 </span> Certification
                                        </button>
                                        <button class="nav-link" id="lock-application-tab" data-bs-toggle="pill" data-bs-target="#lock-application" type="button" role="tab" aria-controls="lock-application" aria-selected="false">
                                            <span class="step-title me-2"> <i class="ri-file-lock-fill"></i> Step 8 </span> Lock Application Submission
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="px-lg-4">
                                        <div class="tab-content">
                                            <?php if (!empty($this->session->flashdata('error'))) { ?>
                                                <div class="alert alert-danger alert-dismissible fade show material-shadow" role="alert">
                                                    <?php echo $this->session->flashdata('error'); ?>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            <?php } ?>
                                            <?php if (!empty($this->session->flashdata('success'))) { ?>
                                                <div class="alert alert-success alert-dismissible fade show material-shadow" role="alert">
                                                    <?php echo $this->session->flashdata('success'); ?>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            <?php } ?>
                                            <div class="tab-pane fade active show" id="personal-information" role="tabpanel" aria-labelledby="personal-information-tab">
                                                <div>
                                                    <h5 class="text-primary">Personal Information</h5>
                                                    <p class="text-muted">Please provide your personal details to begin the Expression of Interest (EoI) process.</p>
                                                </div>
                                                <div>
                                                    <div class="row g-3">
                                                        <div class="col-sm-6">
                                                            <label for="firstName" class="form-label">Full Name</label>
                                                            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter first name" value="<?php if (isset($userDetail->full_name)) {
                                                                                                                                                                                echo  $userDetail->full_name;
                                                                                                                                                                            }; ?>" />
                                                            <div class="invalid-feedback">Please enter a first name</div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="email" class="form-label">Email</label>
                                                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter email" value="<?php if (isset($userDetail->email)) {
                                                                                                                                                                    echo  $userDetail->email;
                                                                                                                                                                }; ?>" />
                                                            <div class="invalid-feedback">Please enter a organization name</div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="phoneNumber" class="form-label">Phone Number</label>
                                                            <input type="text" class="form-control" id="phoneNumber" name="contact_no" placeholder="Enter phone number" value="<?php if (isset($userDetail->contact_no)) {
                                                                                                                                                                                    echo  $userDetail->contact_no;
                                                                                                                                                                                }; ?>" />
                                                            <div class="invalid-feedback">Please enter a phone number</div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="phoneNumber" class="form-label">Date of Birth</label>
                                                            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="Select date of birth" value="<?php if (isset($userDetail->date_of_birth)) {
                                                                                                                                                                                            echo  $userDetail->date_of_birth;
                                                                                                                                                                                        }; ?>" />
                                                            <div class="invalid-feedback">Please enter a date of birth</div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="phoneNumber" class="form-label">Experience</label>
                                                            <input type="text" class="form-control" id="experience" name="experience" placeholder="Enter experience" value="<?php if (isset($userDetail->experience)) {
                                                                                                                                                                                echo  $userDetail->experience;
                                                                                                                                                                            }; ?>" />
                                                            <div class="invalid-feedback">Please enter a experience</div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="phoneNumber" class="form-label">Core Competencies</label>
                                                            <input type="text" class="form-control" id="phoneNumber" placeholder="Enter phone number" value="<?php if (isset($userDetail->core_competency)) {
                                                                                                                                                                    echo  $userDetail->core_competency;
                                                                                                                                                                }; ?>" />
                                                            <div class="invalid-feedback">Please enter a core competencies</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                    <!-- <button type="submit" class="btn btn-primary btn-label right ms-auto"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Save Draft</button> -->
                                                    <button type="button" class="btn btn-primary btn-label right ms-auto goToNextStep"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Next Step</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="additiona-information" role="tabpanel" aria-labelledby="additiona-information-tab">
                                                <div>
                                                    <h5 class="text-primary">Additional Information</h5>
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
                                                            <textarea name="previous_experience" class="form-control" id="previous_experience" width="100%" rows="3" placeholder="Write your previous experience "><?php if (isset($userDetail->previous_experience)) {
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
                                                            <textarea name="achievements_recognitions" class="form-control" id="achievements_recognitions" width="100%" rows="3" placeholder="Write your achievements or recognitions "><?php if (isset($userDetail->achievements_recognitions)) {
                                                                                                                                                                                                                                            echo  $userDetail->achievements_recognitions;
                                                                                                                                                                                                                                        }; ?></textarea>
                                                            <div class="invalid-feedback">Please enter a achievements or recognitions</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                    <button type="button" class="btn btn-light btn-label goToPreviousStep"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Previous Step</button>
                                                    <button type="button" class="btn btn-primary btn-label right ms-auto goToNextStep"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Next Step</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="details-of-submission" role="tabpanel" aria-labelledby="details-of-submission-tab">
                                                <div>
                                                    <h5 class="text-primary">Details of Submission</h5>
                                                    <p class="text-muted">Outline your proposed approach and methodology for the PoC, and ensure alignment with project goals.</p>
                                                </div>
                                                <div>
                                                    <div class="row g-3">
                                                        <div class="col-sm-6">
                                                            <label for="title" class="form-label">Title</label> <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="" />
                                                            <div class="invalid-feedback">Please enter a title</div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="category" class="form-label">Category</label> <input type="text" class="form-control" id="category" name="category" placeholder="Enter category" value="" />
                                                            <div class="invalid-feedback">Please enter a category</div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="strategic_vision" class="form-label"> Strategic Vision </label>
                                                            <textarea name="strategic_vision" placeholder="Write vision" class="form-control" name="strategic_vision" id="strategic_vision" width="100%" rows="2"></textarea>
                                                            <div class="invalid-feedback">Please enter a vision</div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="objectives" class="form-label"> Objectives </label>
                                                            <textarea name="objectives" placeholder="Write objectives" class="form-control" name="objectives" id="objectives" width="100%" rows="2"></textarea>
                                                            <div class="invalid-feedback">Please enter a objectives</div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="project_goals" id="additionalInformation" class="form-label">
                                                                <span>Alignment with Project Goals</span>
                                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Explain how your proposed approach aligns with the goals of the ' Digital Twin - Sangam' project.">
                                                                    <a href="javascript:void(0)" class="text-muted"><i class="ri-info-i"></i></a>
                                                                </div>
                                                            </label>
                                                            <textarea name="project_goals" placeholder="Write project goals" name="project_goals" class="form-control" id="project_goals" width="100%" rows="2"></textarea>
                                                            <div class="invalid-feedback">Please enter a alignment with project goals</div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="contribution_to_project_goals" id="additionalInformation" class="form-label">
                                                                <span>Contribution to Project Goals</span>
                                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Describe how you plan to contribute to the project's goals.">
                                                                    <a href="javascript:void(0)" class="text-muted"><i class="ri-info-i"></i></a>
                                                                </div>
                                                            </label>
                                                            <textarea name="contribution_to_project_goals" placeholder="Write contribution" name="contribution_to_project_goals" class="form-control" id="contribution_to_project_goals" width="100%" rows="2"></textarea>
                                                            <div class="invalid-feedback">Please enter a contribution to project goals</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                    <button type="button" class="btn btn-light btn-label goToPreviousStep"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Previous Step</button>
                                                    <button type="button" class="btn btn-primary btn-label right ms-auto goToNextStep"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Next Step</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="technological-resources" role="tabpanel" aria-labelledby="technological-resources-tab">
                                                <div>
                                                    <h5 class="text-primary">Technological Resources</h5>
                                                    <p class="text-muted">Detail the resources you plan to utilize or offer for the development and demonstration phases of the PoC</p>
                                                </div>
                                                <div>
                                                    <div class="row g-3">
                                                        <div id="resourceSection">
                                                            <div class="resource-input-group">
                                                                <div class="row">
                                                                    <div class="col-md-4 mt-2">
                                                                        <label for="technological_category" class="form-label">Category</label>
                                                                        <select class="form-control use-resource" id="technological_category" name="technological_category">
                                                                            <option value="" disabled selected>----Select----</option>
                                                                            <option value="Use Resource">Use Resource</option>
                                                                            <option value="Offer Resource">Offer Resource</option>
                                                                            <option value="Others">Others</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-4 mt-2">
                                                                        <label for="technological_type_of_resource" class="form-label">Type of resource</label>
                                                                        <select class="form-control offer-resource" id="technological_type_of_resource" name="technological_type_of_resource">
                                                                            <option value="" disabled selected>----Select----</option>
                                                                            <option value="Software">Software</option>
                                                                            <option value="Hardware">Hardware</option>
                                                                            <option value="Others">Others</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-4 mt-2">
                                                                        <label for="details" class="form-label">Details of Resource</label> <input type="text" class="form-control" name="technological_details[]" placeholder="Details of Resource" />
                                                                    </div>
                                                                    <div class="col-md-4 mt-2">
                                                                        <label for="specification" class="form-label">Specification</label> <input type="text" class="form-control" name="specification[]" placeholder="Specification" />
                                                                    </div>
                                                                    <div class="col-md-4 mt-2">
                                                                        <label for="purpose" class="form-label">Purpose of Resource</label> <input type="text" class="form-control" name="purpose[]" placeholder="Purpose of Resource" />
                                                                    </div>
                                                                    <div class="col-md-4 mt-2">
                                                                        <label for="alignment" class="form-label">Alignment</label> <input type="text" class="form-control" name="alignment[]" placeholder="How they align with objective" />
                                                                    </div>
                                                                </div>
                                                                <button type="button" class="removeresource btn btn-sm btn-danger mt-2"><i class="las la-trash-alt fs-18 align-middle"></i> Remove</button>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-center">
                                                            <button type="button" id="addresource" class="btn btn-sm btn-primary"><i class="las la-plus fs-13 align-middle"></i> Add Resource</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                    <button type="button" class="btn btn-light btn-label goToPreviousStep"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Previous Step</button>
                                                    <button type="button" class="btn btn-primary btn-label right ms-auto goToNextStep"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Next Step</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="huuman-resources-commitment" role="tabpanel" aria-labelledby="huuman-resources-commitment-tab">
                                                <div>
                                                    <h5 class="text-primary">Human Resources Commitment</h5>
                                                    <p class="text-muted">Provide information on the expert resources and developers dedicated to the PoC.</p>
                                                </div>
                                                <div>
                                                    <div class="row g-3">
                                                        <div id="humanResourceSection">
                                                            <div class="humanResource-input-group">
                                                                <div class="row">
                                                                    <div class="col-md-4 mt-2">
                                                                        <label for="human_category" class="form-label">Category</label>
                                                                        <select class="form-control use-humanResource" name="human_category">
                                                                            <option value="" disabled selected>----Select----</option>
                                                                            <option value="Use Resource">Use Resource</option>
                                                                            <option value="Offer Resource">Offer Resource</option>
                                                                            <option value="Others">Others</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-4 mt-2">
                                                                        <label for="offerhumanResource" class="form-label">Type of resource</label>
                                                                        <select class="form-control offer-humanResource" name="human_type_of_resource">
                                                                            <option value="" disabled selected>----Select----</option>
                                                                            <option value="Developer">Developer</option>
                                                                            <option value="Planner">Planner</option>
                                                                            <option value="Manager">Manager</option>
                                                                            <option value="Expert">Expert</option>
                                                                            <option value="Nodal">Nodal</option>
                                                                            <option value="Others">Others</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-4 mt-2">
                                                                        <label for="details" class="form-label">Name and contact details</label>
                                                                        <input type="text" class="form-control" name="human_details[]" placeholder="Details of humanResource" />
                                                                    </div>
                                                                    <div class="col-md-4 mt-2">
                                                                        <label for="role" class="form-label">Role</label> <input type="text" class="form-control" name="role[]" placeholder="Role" />
                                                                    </div>
                                                                    <div class="col-md-4 mt-2">
                                                                        <label for="experience" class="form-label">Experience</label> <input type="text" class="form-control" name="human_experience[]" placeholder="Experience of human resource" />
                                                                    </div>
                                                                    <div class="col-md-4 mt-2">
                                                                        <label for="extent_of_involvement" class="form-label">Extent of involvement in PoC</label>
                                                                        <input type="text" class="form-control" name="extent_of_involvement[]" placeholder="PoC of human resource" />
                                                                    </div>
                                                                    <div class="col-md-4 mt-2">
                                                                        <label for="firstName" class="form-label">Alignment</label> <input type="text" class="form-control" name="human_alignment[]" placeholder="How they align with objective" />
                                                                    </div>
                                                                </div>
                                                                <button type="button" class="removehumanResource btn btn-sm btn-danger mt-2"><i class="las la-trash-alt fs-18 align-middle"></i> Remove</button>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-center">
                                                            <button type="button" id="addhumanResource" class="btn btn-sm btn-primary"><i class="las la-plus fs-13 align-middle"></i> Add Human Resource</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                    <button type="button" class="btn btn-light btn-label goToPreviousStep"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Previous Step</button>
                                                    <button type="button" class="btn btn-primary btn-label right ms-auto goToNextStep"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Next Step</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="other-information" role="tabpanel" aria-labelledby="other-information-tab">
                                                <div>
                                                    <h5 class="text-primary">Other Information</h5>
                                                    <p class="text-muted">Share any other pertinent facts, items, or unique offerings related to your participation in the EoI process.</p>
                                                </div>
                                                <div>
                                                    <div class="row g-3">
                                                        <div class="col-sm-12">
                                                            <label for="other_pertinent_facts" id="additionalInformation" class="form-label">
                                                                <span>Other Pertinent Facts or Offerings</span>
                                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="If there are any other pertinent facts, items, or unique offerings that you wish to mention, please include them here. This may include innovative ideas, potential collaborations, or specific advantages your participation brings to the PoC.">
                                                                    <a href="javascript:void(0)" class="text-muted"><i class="ri-info-i"></i></a>
                                                                </div>
                                                            </label>
                                                            <textarea name="other_pertinent_facts" class="form-control" id="other_pertinent_facts" placeholder="Please enter a other pertinent facts or offerings" width="100%" rows="5"></textarea>
                                                            <div class="invalid-feedback">Please enter a other pertinent facts or offerings</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                    <button type="button" class="btn btn-light btn-label goToPreviousStep"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Previous Step</button>
                                                    <button type="button" class="btn btn-primary btn-label right ms-auto goToNextStep"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Next Step</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="certification" role="tabpanel" aria-labelledby="certification-tab">
                                                <div>
                                                    <h5 class="text-primary">Certification</h5>
                                                    <p class="text-muted">Certify your organization's authorization to submit the Expression of Interest (EoI) response.</p>
                                                    <div>
                                                        <div class="row g-3">
                                                            <div class="col-sm-12">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="certification" id="certification" value="yes" />
                                                                    <label class="form-check-label" for="certification">I certify that my organization ____ has authorized me to submit the above response to the EoI</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                    <button type="button" class="btn btn-light btn-label goToPreviousStep"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Previous Step</button>
                                                    <button type="button" class="btn btn-primary btn-label right ms-auto goToNextStep"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Next Step</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="lock-application" role="tabpanel" aria-labelledby="lock-application-tab">
                                                <div>
                                                    <h5 class="text-primary">Lock Application Submission</h5>
                                                    <p class="text-muted">Certify your organization's authorization to submit the Expression of Interest (EoI) response.</p>
                                                    <div>
                                                        <div class="row g-3">
                                                            <div class="col-sm-12"></div>
                                                        </div>
                                                    </div>
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
    function validateFields() {
        var isValid = true;
        // $(".tab-pane.active")
        //     .find("input, textarea")
        //     .each(function() {
        //         if ($(this).prop("") && !$(this).val()) {
        //             isValid = false;
        //             $(this).addClass("is-invalid");
        //         } else {
        //             $(this).removeClass("is-invalid");
        //         }
        //     });
        return isValid;
    }

    function goToNextStep() {
        if (validateFields()) {
            var activeTab = $(".nav-link.active");
            var nextTab = activeTab.next(".nav-link");
            if (nextTab.length !== 0) {
                activeTab.removeClass("active");
                nextTab.addClass("active");
                var targetId = nextTab.attr("data-bs-target");
                $(targetId).addClass("active show").siblings(".tab-pane").removeClass("active show");
            }
        }
    }

    function goToPreviousStep() {
        var activeTab = $(".nav-link.active");
        var prevTab = activeTab.prev(".nav-link");
        if (prevTab.length !== 0) {
            activeTab.removeClass("active");
            prevTab.addClass("active");
            var targetId = prevTab.attr("data-bs-target");
            $(targetId).addClass("active show").siblings(".tab-pane").removeClass("active show");
        }
    }

    $(document).ready(function() {
        $(".goToNextStep").click(function() {
            goToNextStep();
        });
        $(".goToPreviousStep").click(function() {
            goToPreviousStep();
        });

        function generateUniqueId() {
            return Math.random().toString(36).substr(2, 9);
        }

        var maxResourceGroups = 2;

        function addResourceInput() {
            if ($("#resourceSection .resource-input-group").length >= maxResourceGroups) {
                Swal.fire({
                    title: "Maximum Limit Reached",
                    text: "You have reached the maximum number of resource input groups allowed.",
                    icon: "error",
                });
                return;
            }

            var newresource = $(".resource-input-group:first").clone();
            newresource.find("input").val("");
            newresource.find(".removeresource").prop("disabled", false);
            newresource.find(".use-resource, .offer-resource").removeClass("select2-hidden-accessible").next(".select2-container").remove();
            newresource.appendTo("#resourceSection");
        }

        $("#addresource").click(addResourceInput);
        $("#resourceSection").on("click", ".removeresource", function() {
            var resourceGroup = $(this).closest(".resource-input-group");
            if ($("#resourceSection .resource-input-group").length > 1) {
                resourceGroup.remove();
            } else {
                Swal.fire({
                    title: "Oppps!",
                    text: "At least one resource input is !",
                    icon: "error",
                });
            }
        });
        var maxhumanResourceGroups = 2;

        function addhumanResourceInput() {
            if ($("#humanResourceSection .humanResource-input-group").length >= maxhumanResourceGroups) {
                Swal.fire({
                    title: "Maximum Limit Reached",
                    text: "You have reached the maximum number of humanResource input groups allowed.",
                    icon: "error",
                });
                return;
            }

            var newhumanResource = $(".humanResource-input-group:first").clone();
            newhumanResource.find("input").val("");
            newhumanResource.find(".removehumanResource").prop("disabled", false);
            newhumanResource.find(".use-humanResource, .offer-humanResource").removeClass("select2-hidden-accessible").next(".select2-container").remove();
            newhumanResource.appendTo("#humanResourceSection");
        }

        $("#addhumanResource").click(addhumanResourceInput);
        $("#humanResourceSection").on("click", ".removehumanResource", function() {
            var humanResourceGroup = $(this).closest(".humanResource-input-group");
            if ($("#humanResourceSection .humanResource-input-group").length > 1) {
                humanResourceGroup.remove();
            } else {
                Swal.fire({
                    title: "Oppps!",
                    text: "At least one humanResource input is !",
                    icon: "error",
                });
            }
        });

        $(".vertical-navs-step").submit(function(event) {
            event.preventDefault();
            if (validateFields()) {
                goToNextStep();
                $(this).unbind('submit').submit();
            } else {}
        });
    });
</script>