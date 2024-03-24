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
         <div id="custom-progress-bar"></div>
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header text-center">
                  <h4 class="card-title mb-0">Expression of Interest (EoI) Form: Digital Twin - Sangam Project</h4>
               </div>
               <div class="card-body form-steps">
                  <form class="vertical-navs-step" action="<?php echo base_url('submit-eoi-registration'); ?>" method="post" enctype="multipart/form-data">
                     <input type="hidden" name="registration_step" />
                     <div class="row gy-5">
                        <div class="col-lg-4">
                           <div class="nav flex-column custom-nav nav-pills" role="tablist" aria-orientation="vertical">
                              <button disabled class="nav-link active" id="personal-information-tab" data-bs-toggle="pill" data-bs-target="#personal-information" type="button" role="tab" aria-controls="personal-information" aria-selected="true">
                                 <span class="step-title me-2"> <i class="ri-shield-user-fill"></i> Step 1 </span> Personal Information
                              </button>
                              <button disabled class="nav-link" id="additiona-information-tab" data-bs-toggle="pill" data-bs-target="#additiona-information" type="button" role="tab" aria-controls="additiona-information" aria-selected="false">
                                 <span class="step-title me-2"> <i class="ri-file-info-fill"></i> Step 2 </span> Additional Information
                              </button>
                              <button disabled class="nav-link" id="details-of-submission-tab" data-bs-toggle="pill" data-bs-target="#details-of-submission" type="button" role="tab" aria-controls="details-of-submission" aria-selected="false">
                                 <span class="step-title me-2"> <i class="ri-lightbulb-flash-fill"></i> Step 3 </span> Details of Submission
                              </button>
                              <button disabled class="nav-link" id="technological-resources-tab" data-bs-toggle="pill" data-bs-target="#technological-resources" type="button" role="tab" aria-controls="technological-resources" aria-selected="false">
                                 <span class="step-title me-2"> <i class="ri-file-edit-fill"></i> Step 4 </span> Technological Resources
                              </button>
                              <button disabled class="nav-link" id="huuman-resources-commitment-tab" data-bs-toggle="pill" data-bs-target="#huuman-resources-commitment" type="button" role="tab" aria-controls="huuman-resources-commitment" aria-selected="false">
                                 <span class="step-title me-2"> <i class="ri-survey-fill"></i> Step 5 </span> Human Resources Commitment
                              </button>
                              <button disabled class="nav-link" id="other-information-tab" data-bs-toggle="pill" data-bs-target="#other-information" type="button" role="tab" aria-controls="other-information" aria-selected="false">
                                 <span class="step-title me-2"> <i class="ri-booklet-fill"></i> Step 6 </span> Other Information
                              </button>
                              <button disabled class="nav-link" id="certification-tab" data-bs-toggle="pill" data-bs-target="#certification" type="button" role="tab" aria-controls="certification" aria-selected="false">
                                 <span class="step-title me-2"> <i class="ri-shield-check-fill"></i> Step 7 </span> Certification
                              </button>
                              <button disabled class="nav-link" id="lock-application-tab" data-bs-toggle="pill" data-bs-target="#lock-application" type="button" role="tab" aria-controls="lock-application" aria-selected="false">
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
                                             <input type="text" readonly class="form-control" id="full_name" name="full_name" placeholder="Enter first name" value="<?php if (isset($userDetail->full_name)) {
                                                                                                                                                                        echo  $userDetail->full_name;
                                                                                                                                                                     }; ?>" />
                                             <div class="invalid-feedback">Please enter a first name</div>
                                          </div>
                                          <div class="col-sm-6">
                                             <label for="email" class="form-label">Email</label>
                                             <input type="text" readonly class="form-control" id="email" name="email" placeholder="Enter email" value="<?php if (isset($userDetail->email)) {
                                                                                                                                                            echo  $userDetail->email;
                                                                                                                                                         }; ?>" />
                                             <div class="invalid-feedback">Please enter a organization name</div>
                                          </div>
                                          <div class="col-sm-6">
                                             <label for="phoneNumber" class="form-label">Phone Number</label>
                                             <input type="text" readonly class="form-control" id="phoneNumber" name="contact_no" placeholder="Enter phone number" value="<?php if (isset($userDetail->contact_no)) {
                                                                                                                                                                              echo  $userDetail->contact_no;
                                                                                                                                                                           }; ?>" />
                                             <div class="invalid-feedback">Please enter a phone number</div>
                                          </div>
                                          <div class="col-sm-6">
                                             <label for="phoneNumber" class="form-label">Date of Birth</label>
                                             <input type="date" readonly class="form-control" id="date_of_birth" name="date_of_birth" placeholder="Select date of birth" value="<?php if (isset($userDetail->date_of_birth)) {
                                                                                                                                                                                    echo  $userDetail->date_of_birth;
                                                                                                                                                                                 }; ?>" />
                                             <div class="invalid-feedback">Please enter a date of birth</div>
                                          </div>
                                          <?php
                                          if (isset($userDetail->register_as) && $userDetail->register_as === 'Individual') {
                                          ?>
                                             <div class="col-sm-6">
                                                <label for="phoneNumber" class="form-label">Experience</label>
                                                <input type="text" readonly class="form-control" id="experience" name="experience" placeholder="Enter experience" value="<?php echo isset($userDetail->experience) ? $userDetail->experience : ''; ?>" />
                                                <div class="invalid-feedback">Please enter an experience</div>
                                             </div>
                                          <?php
                                          }
                                          ?>
                                          <div class="col-sm-12">
                                             <label for="phoneNumber" class="form-label">Core Competencies</label>
                                             <input type="text" readonly class="form-control" id="core_competency" name="core_competency" placeholder="Enter Core Competencies" value="<?php if (isset($userDetail->core_competency)) {
                                                                                                                                                                                          echo  $userDetail->core_competency;
                                                                                                                                                                                       }; ?>" />
                                             <div class="invalid-feedback">Please enter a core competencies</div>
                                          </div>
                                          <?php
                                          if (isset($userDetail->register_as) && $userDetail->register_as === 'Organization') {
                                          ?>
                                             <div class="col-sm-6">
                                                <label for="phoneNumber" class="form-label">Organization Name</label>
                                                <input type="text" readonly class="form-control" id="organization_name" name="organization_name" placeholder="Enter organization_name" value="<?php echo isset($userDetail->organization_name) ? $userDetail->organization_name : ''; ?>" />
                                                <div class="invalid-feedback">Please enter an Organization Name</div>
                                             </div>
                                          <?php
                                          }
                                          ?>
                                          <?php
                                          if (isset($userDetail->register_as) && $userDetail->register_as === 'Organization') {
                                          ?>
                                             <div class="col-sm-6">
                                                <label for="phoneNumber" class="form-label">Website URL of the organisation </label>
                                                <input type="text" readonly class="form-control" id="website_url" name="website_url" placeholder="Enter website_url" value="<?php echo isset($userDetail->website_url) ? $userDetail->website_url : ''; ?>" />
                                                <div class="invalid-feedback">Please enter an Website URL of the organisation </div>
                                             </div>
                                          <?php
                                          }
                                          ?>
                                          <?php
                                          if (isset($userDetail->register_as) && $userDetail->register_as === 'Organization') {
                                          ?>
                                             <div class="col-sm-6">
                                                <label for="phoneNumber" class="form-label">Organization Email </label>
                                                <input type="text" readonly class="form-control" id="email" name="email" placeholder="Enter email" value="<?php echo isset($userDetail->email) ? $userDetail->email : ''; ?>" />
                                                <div class="invalid-feedback">Please enter an Organization Email </div>
                                             </div>
                                          <?php
                                          }
                                          ?>
                                          <?php
                                          if (isset($userDetail->register_as) && $userDetail->register_as === 'Organization') {
                                          ?>
                                             <div class="col-sm-6">
                                                <label for="phoneNumber" class="form-label">Potential Interest Areas</label>
                                                <?php
                                              $potential_interest_areas = isset($userDetail->potential_interest_areas) ? $userDetail->potential_interest_areas : '';

                                              // Check if the value is a JSON string
                                              $decoded_areas = json_decode($potential_interest_areas);

                                              // If JSON decoding is successful and it's an array, implode the array; otherwise, use the original value
                                              $potential_interest_areas = is_array($decoded_areas) && json_last_error() === JSON_ERROR_NONE ? implode(',', $decoded_areas) : $potential_interest_areas;

                                              ?>
                                              <input type="text" class="form-control" readonly id="potential_interest_areas" name="potential_interest_areas" value="<?php echo $potential_interest_areas; ?>" />
                                                <div class="invalid-feedback">Please enter an Potential Interest Areas</div>
                                             </div>
                                          <?php
                                          }
                                          ?>
                                          <?php
                                          if (isset($userDetail->register_as) && $userDetail->register_as === 'Organization') {
                                          ?>
                                             <div class="col-sm-6">
                                                <label for="phoneNumber" class="form-label">Office Address</label>
                                                <input type="text" readonly class="form-control" id="office_address" name="office_address" placeholder="Enter office_address" value="<?php echo isset($userDetail->office_address) ? $userDetail->office_address : ''; ?>" />
                                                <div class="invalid-feedback">Please enter an Office Address</div>
                                             </div>
                                          <?php
                                          }
                                          ?>
                                          <?php
                                          if (isset($userDetail->register_as) && $userDetail->register_as === 'Organization') {
                                          ?>
                                             <div class="col-sm-6">
                                                <label for="phoneNumber" class="form-label">Organisation HQ address</label>
                                                <input type="text" readonly class="form-control" id="organisation_hq_address" name="organisation_hq_address" placeholder="Enter organisation_hq_address" value="<?php echo isset($userDetail->organisation_hq_address) ? $userDetail->organisation_hq_address : ''; ?>" />
                                                <div class="invalid-feedback">Please enter an Organisation HQ address</div>
                                             </div>
                                          <?php
                                          }
                                          ?>
                                       </div>
                                    </div>
                                    <div class="d-flex align-items-start gap-3 mt-4">
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
                                             <textarea name="previous_experience" class="form-control" id="previous_experience" width="100%" rows="3" placeholder="Write your previous experience "><?php if (isset($userDetail->previous_experience)) {echo  $userDetail->previous_experience;} ?></textarea>
                                             <small class="text-primary">Limit 3000 characters</small>
                                             <div class="invalid-feedback">Please enter a previous experience in related projects</div>
                                          </div>
                                          <div class="col-sm-12">
                                             <label for="achievements_recognitions" id="additionalInformation" class="form-label">
                                                <span>Achievements or Recognitions</span>
                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Please list any relevant achievements or recognitions in the field of infrastructure planning and design, technology, or innovation.">
                                                   <a href="javascript:void(0)" class="text-muted"><i class="ri-info-i"></i></a>
                                                </div>
                                             </label>
                                             <textarea name="achievements_recognitions" class="form-control" id="achievements_recognitions" width="100%" rows="3" placeholder="Write your achievements or recognitions "><?php if (isset($userDetail->achievements_recognitions)) {echo  $userDetail->achievements_recognitions;} ?></textarea>
                                             <small class="text-primary">Limit 3000 characters</small>
                                             <div class="invalid-feedback">Please enter a achievements or recognitions</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="d-flex align-items-start gap-3 mt-4">
                                       <button type="button" class="btn btn-light btn-label goToPreviousStep"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Previous Step</button>
                                      <button type="submit" class="btn btn-info right ms-auto saveDraftBtn">Save Draft</button>
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
                                             <label for="title" class="form-label">Title <span class="text-danger">*</span></label> <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="<?php if (isset($userDetail->title)) {
                                                                                                                                                                                                                                          echo  $userDetail->title;
                                                                                                                                                                                                                                       }; ?>" />
                                                                                                                                                                                                                                          <small class="text-primary">Limit 100 characters</small>
                                             <div class="invalid-feedback">Please enter a title</div>
                                          </div>
                                          <div class="col-sm-6">
                                             <label for="category" class="form-label">Category <span class="text-danger">*</span></label> <input type="text" class="form-control" id="category" name="category" placeholder="Enter category" value="<?php if (isset($userDetail->category)) {
                                                                                                                                                                                                                                                         echo  $userDetail->category;
                                                                                                                                                                                                                                                      }; ?>" />
                                                                                                                                                                                                                                                      <small class="text-primary">Limit 100 characters</small>
                                             <div class="invalid-feedback">Please enter a category</div>
                                          </div>
                                          <div class="col-sm-6">
                                             <label for="strategic_vision" class="form-label"> Strategic Vision <span class="text-danger">*</span></label>
                                             <textarea name="strategic_vision" placeholder="Write vision" class="form-control" name="strategic_vision" id="strategic_vision" width="100%" rows="2"><?php if (isset($userDetail->strategic_vision)) {
                                                                                                                                                                                                      echo  $userDetail->strategic_vision;
                                                                                                                                                                                                   }; ?></textarea>
                                                                                                                                                                                                    <small class="text-primary">Limit 500 characters</small>
                                             <div class="invalid-feedback">Please enter a vision</div>
                                          </div>
                                          <div class="col-sm-6">
                                             <label for="objectives" class="form-label"> Objectives <span class="text-danger">*</span></label>
                                             <textarea name="objectives" placeholder="Write objectives" class="form-control" name="objectives" id="objectives" width="100%" rows="2"><?php if (isset($userDetail->objectives)) {
                                                                                                                                                                                          echo  $userDetail->objectives;
                                                                                                                                                                                       }; ?></textarea>
                                                                                                                                                                                       <small class="text-primary">Limit 500 characters</small>
                                             <div class="invalid-feedback">Please enter a objectives</div>
                                          </div>
                                          <div class="col-sm-6">
                                             <label for="project_goals" id="additionalInformation" class="form-label">
                                                <span>Alignment with Project Goals <span class="text-danger">*</span></span>
                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Explain how your proposed approach aligns with the goals of the ' Digital Twin - Sangam' project.">
                                                   <a href="javascript:void(0)" class="text-muted"><i class="ri-info-i"></i></a>
                                                </div>
                                             </label>
                                             <textarea name="project_goals" placeholder="Write project goals" name="project_goals" class="form-control" id="project_goals" width="100%" rows="2"><?php if (isset($userDetail->project_goals)) {
                                                                                                                                                                                                      echo  $userDetail->project_goals;
                                                                                                                                                                                                   }; ?></textarea>
                                                                                                                                                                                                    <small class="text-primary">Limit 1200 characters</small>
                                             <div class="invalid-feedback">Please enter a alignment with project goals</div>
                                          </div>
                                          <div class="col-sm-6">
                                             <label for="contribution_to_project_goals" id="additionalInformation" class="form-label">
                                                <span>Contribution to Project Goals <span class="text-danger">*</span></span>
                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Describe how you plan to contribute to the project's goals.">
                                                   <a href="javascript:void(0)" class="text-muted"><i class="ri-info-i"></i></a>
                                                </div>
                                             </label>
                                             <textarea name="contribution_to_project_goals" placeholder="Write contribution" name="contribution_to_project_goals" class="form-control" id="contribution_to_project_goals" width="100%" rows="2"><?php if (isset($userDetail->contribution_to_project_goals)) {
                                                                                                                                                                                                                                                   echo  $userDetail->contribution_to_project_goals;
                                                                                                                                                                                                                                                }; ?></textarea>
                                                                                                                                                                                                                                                <small class="text-primary">Limit 1200 characters</small>
                                             <div class="invalid-feedback">Please enter a contribution to project goals</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="d-flex align-items-start gap-3 mt-4">
                                       <button type="button" class="btn btn-light btn-label goToPreviousStep"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Previous Step</button>
                                       <button type="submit" class="btn btn-info right ms-auto saveDraftBtn">Save Draft</button>
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
                                             <?php foreach ($technical_details as $detail) : ?>
                                                <div class="resource-input-group">
                                                   <div class="row">
                                                      <div class="col-md-4 mt-2">
                                                         <label for="technological_category" class="form-label">Category</label>
                                                         <select class="form-control use-resource" name="technological_category[]">
                                                            <option value="">----Select----</option>
                                                            <option value="Use Resource" <?php echo ($detail['category'] === 'Use Resource') ? 'selected' : ''; ?>>Use Resource</option>
                                                            <option value="Offer Resource" <?php echo ($detail['category'] === 'Offer Resource') ? 'selected' : ''; ?>>Offer Resource</option>
                                                            <option value="Others" <?php echo ($detail['category'] === 'Others') ? 'selected' : ''; ?>>Others</option>
                                                         </select>
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="technological_type_of_resource" class="form-label">Type of resource</label>
                                                         <select class="form-control offer-resource" name="technological_type_of_resource[]">
                                                            <option value="">----Select----</option>
                                                            <option value="Software" <?php echo ($detail['type_of_resource'] === 'Software') ? 'selected' : ''; ?>>Software</option>
                                                            <option value="Hardware" <?php echo ($detail['type_of_resource'] === 'Hardware') ? 'selected' : ''; ?>>Hardware</option>
                                                            <option value="Others" <?php echo ($detail['type_of_resource'] === 'Others') ? 'selected' : ''; ?>>Others</option>
                                                         </select>
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="details" class="form-label">Details of Resource</label>
                                                         <input type="text" class="form-control" name="technological_details[]" value="<?php echo $detail['details']; ?>" placeholder="Details of Resource" />
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="specification" class="form-label">Specification</label>
                                                         <input type="text" class="form-control" name="specification[]" value="<?php echo $detail['specification']; ?>" placeholder="Specification" />
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="purpose" class="form-label">Purpose of Resource</label>
                                                         <input type="text" class="form-control" name="purpose[]" value="<?php echo $detail['purpose']; ?>" placeholder="Purpose of Resource" />
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="alignment" class="form-label">Alignment</label>
                                                         <input type="text" class="form-control" name="alignment[]" value="<?php echo $detail['alignment']; ?>" placeholder="How they align with objective" />
                                                      </div>
                                                   </div>
                                                   <button type="button" class="removeresource btn btn-sm btn-danger mt-2"><i class="las la-trash-alt fs-18 align-middle"></i> Remove</button>
                                                </div>
                                             <?php endforeach; ?>
                                             <?php
                                             if (isset($userDetail->technological_category)) {
                                             ?>
                                                <div class="resource-input-group">
                                                   <div class="row">
                                                      <div class="col-md-4 mt-2">
                                                         <label for="technological_category" class="form-label">Category</label>
                                                         <select class="form-control use-resource" name="technological_category[]">
                                                            <option value="" selected>----Select----</option>
                                                            <option value="Use Resource">Use Resource</option>
                                                            <option value="Offer Resource">Offer Resource</option>
                                                            <option value="Others">Others</option>
                                                         </select>
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="technological_type_of_resource" class="form-label">Type of resource</label>
                                                         <select class="form-control offer-resource" name="technological_type_of_resource[]">
                                                            <option value="" selected>----Select----</option>
                                                            <option value="Software">Software</option>
                                                            <option value="Hardware">Hardware</option>
                                                            <option value="Others">Others</option>
                                                         </select>
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="details" class="form-label">Details of Resource</label>
                                                         <input type="text" class="form-control" name="technological_details[]" placeholder="Details of Resource" />
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="specification" class="form-label">Specification</label>
                                                         <input type="text" class="form-control" name="specification[]" placeholder="Specification" />
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="purpose" class="form-label">Purpose of Resource</label>
                                                         <input type="text" class="form-control" name="purpose[]" placeholder="Purpose of Resource" />
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="alignment" class="form-label">Alignment</label>
                                                         <input type="text" class="form-control" name="alignment[]" placeholder="How they align with objective" />
                                                      </div>
                                                   </div>
                                                   <button type="button" class="removeresource btn btn-sm btn-danger mt-2"><i class="las la-trash-alt fs-18 align-middle"></i> Remove</button>
                                                </div>
                                             <?php }
                                             ?>
                                          </div>
                                          <div class="d-flex justify-content-center">
                                             <button type="button" id="addresource" class="btn btn-sm btn-primary"><i class="las la-plus fs-13 align-middle"></i> Add Resource</button>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="d-flex align-items-start gap-3 mt-4">
                                       <button type="button" class="btn btn-light btn-label goToPreviousStep"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Previous Step</button>
                                      <button type="submit" class="btn btn-info right ms-auto saveDraftBtn">Save Draft</button>
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
                                             <?php foreach ($human_resources as $human_resource) : ?>
                                                <div class="humanResource-input-group">
                                                   <div class="row">
                                                      <div class="col-md-4 mt-2">
                                                         <label for="human_category" class="form-label">Category</label>
                                                         <select class="form-control use-humanResource" name="human_category[]">
                                                            <option value="" selected>----Select----</option>
                                                            <option value="Use Resource" <?php echo ($human_resource['human_category'] === 'Use Resource') ? 'selected' : ''; ?>>Use Resource</option>
                                                            <option value="Offer Resource" <?php echo ($human_resource['human_category'] === 'Offer Resource') ? 'selected' : ''; ?>>Offer Resource</option>
                                                            <option value="Others" <?php echo ($human_resource['human_category'] === 'Others') ? 'selected' : ''; ?>>Others</option>
                                                         </select>
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="offerhumanResource" class="form-label">Type of resource</label>
                                                         <select class="form-control offer-humanResource" name="human_type_of_resource[]">
                                                            <option value="" selected>----Select----</option>
                                                            <option value="Developer" <?php echo ($human_resource['human_type_of_resource'] === 'Developer') ? 'selected' : ''; ?>>Developer</option>
                                                            <option value="Planner" <?php echo ($human_resource['human_type_of_resource'] === 'Planner') ? 'selected' : ''; ?>>Planner</option>
                                                            <option value="Manager" <?php echo ($human_resource['human_type_of_resource'] === 'Manager') ? 'selected' : ''; ?>>Manager</option>
                                                            <option value="Expert" <?php echo ($human_resource['human_type_of_resource'] === 'Expert') ? 'selected' : ''; ?>>Expert</option>
                                                            <option value="Nodal" <?php echo ($human_resource['human_type_of_resource'] === 'Nodal') ? 'selected' : ''; ?>>Nodal</option>
                                                            <option value="Others" <?php echo ($human_resource['human_type_of_resource'] === 'Others') ? 'selected' : ''; ?>>Others</option>
                                                         </select>
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="details" class="form-label">Name and contact details</label>
                                                         <input type="text" class="form-control" name="human_details[]" value="<?php echo $human_resource['human_details']; ?>" placeholder="Details of humanResource" />
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="role" class="form-label">Role</label>
                                                         <input type="text" class="form-control" name="role[]" value="<?php echo $human_resource['role']; ?>" placeholder="Role" />
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="experience" class="form-label">Experience</label>
                                                         <input type="text" class="form-control" name="human_experience[]" value="<?php echo $human_resource['human_experience']; ?>" placeholder="Experience of human resource" />
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="extent_of_involvement" class="form-label">Extent of involvement in PoC</label>
                                                         <input type="text" class="form-control" name="extent_of_involvement[]" value="<?php echo $human_resource['extent_of_involvement']; ?>" placeholder="PoC of human resource" />
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="firstName" class="form-label">Alignment</label>
                                                         <input type="text" class="form-control" name="human_alignment[]" value="<?php echo $human_resource['human_alignment']; ?>" placeholder="How they align with objective" />
                                                      </div>
                                                   </div>
                                                   <button type="button" class="removehumanResource btn btn-sm btn-danger mt-2"><i class="las la-trash-alt fs-18 align-middle"></i> Remove</button>
                                                </div>
                                             <?php endforeach; ?>
                                             <?php
                                             if (isset($userDetail->technological_category)) { ?>
                                                <div class="humanResource-input-group">
                                                   <div class="row">
                                                      <div class="col-md-4 mt-2">
                                                         <label for="human_category" class="form-label">Category</label>
                                                         <select class="form-control use-humanResource" name="human_category[]">
                                                            <option value="" selected>----Select----</option>
                                                            <option value="Use Resource">Use Resource</option>
                                                            <option value="Offer Resource">Offer Resource</option>
                                                            <option value="Others">Others</option>
                                                         </select>
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="offerhumanResource" class="form-label">Type of resource</label>
                                                         <select class="form-control offer-humanResource" name="human_type_of_resource[]">
                                                            <option value="" selected>----Select----</option>
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
                                                         <label for="role" class="form-label">Role</label>
                                                         <input type="text" class="form-control" name="role[]" placeholder="Role" />
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="experience" class="form-label">Experience</label>
                                                         <input type="text" class="form-control" name="human_experience[]" placeholder="Experience of human resource" />
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="extent_of_involvement" class="form-label">Extent of involvement in PoC</label>
                                                         <input type="text" class="form-control" name="extent_of_involvement[]" placeholder="PoC of human resource" />
                                                      </div>
                                                      <div class="col-md-4 mt-2">
                                                         <label for="firstName" class="form-label">Alignment</label>
                                                         <input type="text" class="form-control" name="human_alignment[]" placeholder="How they align with objective" />
                                                      </div>
                                                   </div>
                                                   <button type="button" class="removehumanResource btn btn-sm btn-danger mt-2"><i class="las la-trash-alt fs-18 align-middle"></i> Remove</button>
                                                </div>
                                             <?php
                                             }
                                             ?>
                                          </div>
                                          <div class="d-flex justify-content-center">
                                             <button type="button" id="addhumanResource" class="btn btn-sm btn-primary"><i class="las la-plus fs-13 align-middle"></i> Add Human Resource</button>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="d-flex align-items-start gap-3 mt-4">
                                       <button type="button" class="btn btn-light btn-label goToPreviousStep"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Previous Step</button>
                                        <button type="submit" class="btn btn-info right ms-auto saveDraftBtn">Save Draft</button>
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
                                                <span>Upload Document</span>
                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Only PDF file (Max-size: 5MB)">
                                                   <a href="javascript:void(0)" class="text-muted"><i class="ri-info-i"></i></a>
                                                </div>
                                             </label>
                                             <input type="file" class="form-control" name="upload_document" id="upload_document">
                                             <?php if (isset($userDetail->upload_document) && !empty($userDetail->upload_document) && strpos($userDetail->upload_document, "Error") === false) : ?>
                                                                                   <a target="_blank" href="<?php echo base_url('uploads/upload_document/') . $userDetail->upload_document; ?>">View File</a>
                                                                               <?php endif; ?>
                                          </div>
                                          <div class="col-sm-12">
                                             <label for="other_pertinent_facts" id="additionalInformation" class="form-label">
                                                <span>Other Pertinent Facts or Offerings</span>
                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="If there are any other pertinent facts, items, or unique offerings that you wish to mention, please include them here. This may include innovative ideas, potential collaborations, or specific advantages your participation brings to the PoC.">
                                                   <a href="javascript:void(0)" class="text-muted"><i class="ri-info-i"></i></a>
                                                </div>
                                             </label>
                                             <textarea name="other_pertinent_facts" class="form-control" id="other_pertinent_facts" placeholder="Please enter a other pertinent facts or offerings" width="100%" rows="5"><?php if (isset($userDetail->other_pertinent_facts)) {
                                               echo $userDetail->other_pertinent_facts;
                                                                                                                                                                                                                           }; ?></textarea>
                                                                                                                                                                                                                           <small class="text-primary">Limit 3000 characters</small>
                                             <div class="invalid-feedback">Please enter a other pertinent facts or offerings</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="d-flex align-items-start gap-3 mt-4">
                                       <button type="button" class="btn btn-light btn-label goToPreviousStep"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Previous Step</button>
                                    <button type="submit" class="btn btn-info right ms-auto saveDraftBtn">Save Draft</button>
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
                                                   <input class="form-check-input blink-text" style="border: 1px solid black;" type="radio" <?php if (isset($userDetail->certification)) {
                                                                                                                                                if ($userDetail->certification === 'yes') {
                                                                                                                                                   echo "checked";
                                                                                                                                                }
                                                                                                                                             }; ?> name="certification" id="certification" value="yes" checked readonly />
                                                   <label class="form-check-label" for="certification">I certify that the individual submitting this response is duly authorized by the relevant organization to do so on its behalf. The organization acknowledges and authorizes the submission of this response in response to the Expression of Interest (EoI).</label>
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
                                       <!-- <h5 class="text-primary">Lock Application Submission</h5>
                                          <p class="text-muted">Certify your organization's authorization to submit the Expression of Interest (EoI) response.</p> -->
                                       <div>
                                          <div class="row g-3">
                                             <div class="col-sm-12">
                                                <?php if (isset($userDetail->certification)) {
                                                   if ($userDetail->certification === 'yes') {
                                                ?>
                                                      <div class="card">
                                                         <div class="bg-warning-subtle position-relative">
                                                            <div class="card-body p-5">
                                                               <div class="text-center">
                                                                  <h3>Application Preview</h3>
                                                                  <p class="mb-0 text-muted">Please check all the steps before the final submit of application.</p>
                                                               </div>
                                                            </div>
                                                            <div class="shape">
                                                               <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="1440" height="60" preserveAspectRatio="none" viewBox="0 0 1440 60">
                                                                  <g mask="url(&quot;#SvgjsMask1001&quot;)" fill="none">
                                                                     <path d="M 0,4 C 144,13 432,48 720,49 C 1008,50 1296,17 1440,9L1440 60L0 60z" style="fill: var(--vz-secondary-bg);"></path>
                                                                  </g>
                                                                  <defs>
                                                                     <mask id="SvgjsMask1001">
                                                                        <rect width="1440" height="60" fill="#ffffff"></rect>
                                                                     </mask>
                                                                  </defs>
                                                               </svg>
                                                            </div>
                                                         </div>
                                                         <div class="card-body p-4">
                                                           <div class="tab-content">
                                                              <?php if (!empty($this->session->flashdata('error'))) { ?>
                                                              <div class="alert alert-danger alert-dismissible fade show material-shadow" role="alert">
                                                                 <?php echo $this->session->flashdata('error'); ?>
                                                              </div>
                                                              <?php } ?>
                                                              <?php if (!empty($this->session->flashdata('success'))) { ?>
                                                              <div class="alert alert-success alert-dismissible fade show material-shadow" role="alert">
                                                                 <?php echo $this->session->flashdata('success'); ?>
                                                              </div>
                                                              <?php } ?>
                                                              <div class="tab-pane fade active show mt-2" id="personal-information" role="tabpanel" aria-labelledby="personal-information-tab">
                                                                 <div>
                                                                    <h5 class="text-primary">Personal Information</h5>
                                                                 </div>
                                                                 <div>
                                                                    <div class="row g-3">
                                                                       <div class="col-sm-4">
                                                                          <label for="firstName" class="form-label">Full Name</label>
                                                                          <input type="text"  class="form-control" readonly id="full_name"   value="<?php  if (isset($userDetail->full_name)) {
                                                                             echo  $userDetail->full_name;
                                                                             }; ?>" />
                                                                       </div>
                                                                       <div class="col-sm-4">
                                                                          <label for="email" class="form-label">Email</label>
                                                                          <input type="text"  class="form-control" readonly id="email"   value="<?php if (isset($userDetail->email)) {
                                                                             echo  $userDetail->email;
                                                                             }; ?>" />
                                                                       </div>
                                                                       <div class="col-sm-4">
                                                                          <label for="phoneNumber" class="form-label">Phone Number</label>
                                                                          <input type="text"  class="form-control" readonly id="phoneNumber"   value="<?php if (isset($userDetail->contact_no)) {
                                                                             echo  $userDetail->contact_no;
                                                                             }; ?>" />
                                                                       </div>
                                                                       <div class="col-sm-4">
                                                                          <label for="phoneNumber" class="form-label">Date of Birth</label>
                                                                          <input type="date"  class="form-control" readonly id="date_of_birth"   value="<?php if (isset($userDetail->date_of_birth)) {
                                                                             echo  $userDetail->date_of_birth;
                                                                             }; ?>" />
                                                                       </div>
                                                                       <?php
                                                                          if (isset($userDetail->register_as) && $userDetail->register_as === 'Individual') {
                                                                          ?>
                                                                       <div class="col-sm-4">
                                                                          <label for="phoneNumber" class="form-label">Experience</label>
                                                                          <input type="text"  class="form-control" readonly id="experience"   value="<?php echo isset($userDetail->experience) ? $userDetail->experience : ''; ?>" />
                                                                       </div>
                                                                       <?php
                                                                          }
                                                                          ?>
                                                                       <div class="col-sm-8">
                                                                          <label for="phoneNumber" class="form-label">Core Competencies</label>
                                                                          <input type="text"  class="form-control" readonly id="core_competency"value="<?php if (isset($userDetail->core_competency)) {
                                                                             echo  $userDetail->core_competency;
                                                                             }; ?>" />
                                                                       </div>
                                                                       <?php
                                                                          if (isset($userDetail->register_as) && $userDetail->register_as === 'Organization') {
                                                                          ?>
                                                                       <div class="col-sm-4">
                                                                          <label for="phoneNumber" class="form-label">Organization Name</label>
                                                                          <input type="text"  class="form-control" readonly id="organization_name"   value="<?php echo isset($userDetail->organization_name) ? $userDetail->organization_name : ''; ?>" />
                                                                       </div>
                                                                       <?php
                                                                          }
                                                                          ?>
                                                                       <?php
                                                                          if (isset($userDetail->register_as) && $userDetail->register_as === 'Organization') {
                                                                          ?>
                                                                       <div class="col-sm-4">
                                                                          <label for="phoneNumber" class="form-label">Website URL of the organisation </label>
                                                                          <input type="text"  class="form-control" readonly id="website_url"   value="<?php echo isset($userDetail->website_url) ? $userDetail->website_url : ''; ?>" />
                                                                       </div>
                                                                       <?php
                                                                          }
                                                                          ?>
                                                                       <?php
                                                                          if (isset($userDetail->register_as) && $userDetail->register_as === 'Organization') {
                                                                          ?>
                                                                       <div class="col-sm-4">
                                                                          <label for="phoneNumber" class="form-label">Organization Email </label>
                                                                          <input type="text"  class="form-control" readonly id="email"   value="<?php echo isset($userDetail->email) ? $userDetail->email : ''; ?>" />
                                                                       </div>
                                                                       <?php
                                                                          }
                                                                          ?>
                                                                       <?php
                                                                          if (isset($userDetail->register_as) && $userDetail->register_as === 'Organization') {
                                                                          ?>
                                                                       <div class="col-sm-4">
                                                                          <label for="phoneNumber" class="form-label">Potential Interest Areas</label>
                                                                          <?php
                                                                        $potential_interest_areas = isset($userDetail->potential_interest_areas) ? $userDetail->potential_interest_areas : '';

                                                                        // Check if the value is a JSON string
                                                                        $decoded_areas = json_decode($potential_interest_areas);

                                                                        // If JSON decoding is successful and it's an array, implode the array; otherwise, use the original value
                                                                        $potential_interest_areas = is_array($decoded_areas) && json_last_error() === JSON_ERROR_NONE ? implode(',', $decoded_areas) : $potential_interest_areas;

                                                                        ?>
                                                                        <input type="text" class="form-control" readonly id="potential_interest_areas" value="<?php echo $potential_interest_areas; ?>" />

                                                                       </div>
                                                                       <?php
                                                                          }
                                                                          ?>
                                                                       <?php
                                                                          if (isset($userDetail->register_as) && $userDetail->register_as === 'Organization') {
                                                                          ?>
                                                                       <div class="col-sm-4">
                                                                          <label for="phoneNumber" class="form-label">Office Address</label>
                                                                          <input type="text"  class="form-control" readonly id="office_address"   value="<?php echo isset($userDetail->office_address) ? $userDetail->office_address : ''; ?>" />
                                                                       </div>
                                                                       <?php
                                                                          }
                                                                          ?>
                                                                       <?php
                                                                          if (isset($userDetail->register_as) && $userDetail->register_as === 'Organization') {
                                                                          ?>
                                                                       <div class="col-sm-4">
                                                                          <label for="phoneNumber" class="form-label">Organisation HQ address</label>
                                                                          <input type="text"  class="form-control" readonly id="organisation_hq_address"   value="<?php echo isset($userDetail->organisation_hq_address) ? $userDetail->organisation_hq_address : ''; ?>" />
                                                                       </div>
                                                                       <?php
                                                                          }
                                                                          ?>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                              <div class="tab-pane fade active show mt-2" id="additiona-information" role="tabpanel" aria-labelledby="additiona-information-tab">
                                                                 <div>
                                                                    <h5 class="text-primary">Additional Information</h5>
                                                                 </div>
                                                                 <div>
                                                                    <div class="row g-3">
                                                                       <div class="col-sm-12">
                                                                          <label for="previous_experience" id="additionalInformation" class="form-label">
                                                                          <span>Previous Experience in Related Projects</span>
                                                                          </label>
                                                                          <textarea  class="form-control" readonly id="previous_experience" width="100%" rows="3" ><?php if (isset($userDetail->previous_experience)) {
                                                                             echo  $userDetail->previous_experience;
                                                                             }; ?></textarea>
                                                                       </div>
                                                                       <div class="col-sm-12">
                                                                          <label for="achievements_recognitions" id="additionalInformation" class="form-label">
                                                                          <span>Achievements or Recognitions</span>
                                                                          </label>
                                                                          <textarea  class="form-control" readonly id="achievements_recognitions" width="100%" rows="3" ><?php if (isset($userDetail->achievements_recognitions)) {
                                                                             echo  $userDetail->achievements_recognitions;
                                                                             }; ?></textarea>
                                                                       </div>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                              <div class="tab-pane fade active show mt-2" id="details-of-submission" role="tabpanel" aria-labelledby="details-of-submission-tab">
                                                                 <div>
                                                                    <h5 class="text-primary">Details of Submission</h5>
                                                                 </div>
                                                                 <div>
                                                                    <div class="row g-3">
                                                                       <div class="col-sm-4">
                                                                          <label for="title" class="form-label">Title</label> <input type="text" class="form-control" readonly id="title"  value="<?php if (isset($userDetail->title)) {
                                                                             echo  $userDetail->title;
                                                                             }; ?>" />
                                                                             <small class="text-primary">Limit 100 characters</small>
                                                                       </div>
                                                                       <div class="col-sm-4">
                                                                          <label for="category" class="form-label">Category</label> <input type="text" class="form-control" readonly id="category"   value="<?php if (isset($userDetail->category)) {
                                                                             echo  $userDetail->category;
                                                                             }; ?>" />
                                                                             <small class="text-primary">Limit 100 characters</small>
                                                                       </div>
                                                                       <div class="col-sm-4">
                                                                          <label for="strategic_vision" class="form-label"> Strategic Vision</label>
                                                                          <textarea   class="form-control" readonly  id="strategic_vision" width="100%" rows="2"><?php if (isset($userDetail->strategic_vision)) {
                                                                             echo  $userDetail->strategic_vision;
                                                                             }; ?></textarea>
                                                                             <small class="text-primary">Limit 500 characters</small>
                                                                       </div>
                                                                       <div class="col-sm-4">
                                                                          <label for="objectives" class="form-label"> Objectives</label>
                                                                          <textarea   class="form-control" readonly  id="objectives" width="100%" rows="2"><?php if (isset($userDetail->objectives)) {
                                                                             echo  $userDetail->objectives;
                                                                             }; ?></textarea>
                                                                             <small class="text-primary">Limit 500 characters</small>
                                                                       </div>
                                                                       <div class="col-sm-4">
                                                                          <label for="project_goals" id="additionalInformation" class="form-label">
                                                                          <span>Alignment with Project Goals</span>
                                                                          </label>
                                                                          <textarea   class="form-control" readonly id="project_goals" width="100%" rows="2"><?php if (isset($userDetail->project_goals)) {
                                                                             echo  $userDetail->project_goals;
                                                                             }; ?></textarea>
                                                                             <small class="text-primary">Limit 1200 characters</small>
                                                                       </div>
                                                                       <div class="col-sm-4">
                                                                          <label for="contribution_to_project_goals" id="additionalInformation" class="form-label">
                                                                          <span>Contribution to Project Goals</span>
                                                                          </label>
                                                                          <textarea   class="form-control" readonly id="contribution_to_project_goals" width="100%" rows="2"><?php if (isset($userDetail->contribution_to_project_goals)) {
                                                                             echo  $userDetail->contribution_to_project_goals;
                                                                             }; ?></textarea>
                                                                             <small class="text-primary">Limit 1200 characters</small>
                                                                       </div>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                              <div class="tab-pane fade active show mt-2" id="technological-resources" role="tabpanel" aria-labelledby="technological-resources-tab">
                                                                 <div>
                                                                    <h5 class="text-primary">Technological Resources</h5>
                                                                 </div>
                                                                 <div>
                                                                    <div class="row g-3">
                                                                       <div id="resourceSection">
                                                                          <div class="table-responsive">
                                                                             <table class="table table-bordered table-nowrap">
                                                                                <thead>
                                                                                   <tr>
                                                                                      <th scope="col">S.No.</th>
                                                                                      <th scope="col">Category</th>
                                                                                      <th scope="col">Type of resource</th>
                                                                                      <th scope="col">Details of Resource</th>
                                                                                      <th scope="col">Specification</th>
                                                                                      <th scope="col">Purpose of Resource</th>
                                                                                      <th scope="col">Alignment</th>
                                                                                   </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                   <?php $i=1; foreach ($technical_details as $detail) :?>
                                                                                   <tr>
                                                                                      <th scope="row"><?php echo $i++;?></th>
                                                                                      <td><?php echo $detail['category']; ?></td>
                                                                                      <td><?php echo $detail['type_of_resource']; ?></td>
                                                                                      <td><?php echo $detail['details']; ?></td>
                                                                                      <td><?php echo $detail['specification']; ?></td>
                                                                                      <td><?php echo $detail['purpose']; ?></td>
                                                                                      <td><?php echo $detail['alignment']; ?></td>
                                                                                   </tr>
                                                                                   <?php endforeach; ?>
                                                                                </tbody>
                                                                             </table>
                                                                          </div>
                                                                       </div>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                              <div class="tab-pane fade active show" id="huuman-resources-commitment" role="tabpanel" aria-labelledby="huuman-resources-commitment-tab">
                                                                 <div>
                                                                    <h5 class="text-primary">Human Resources Commitment</h5>
                                                                 </div>
                                                                 <div>
                                                                    <div class="row g-3">
                                                                       <div id="humanResourceSection">
                                                                          <div class="table-responsive">
                                                                             <table class="table table-bordered table-nowrap">
                                                                                <thead>
                                                                                   <tr>
                                                                                      <th scope="col">S.No.</th>
                                                                                      <th scope="col">Category</th>
                                                                                      <th scope="col">Type of resource</th>
                                                                                      <th scope="col">Name and contact details</th>
                                                                                      <th scope="col">Role</th>
                                                                                      <th scope="col">Experience</th>
                                                                                      <th scope="col">Extent of involvement in PoC</th>
                                                                                      <th scope="col">Alignment</th>
                                                                                   </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                   <?php $i=1; foreach ($human_resources as $detail) :?>
                                                                                   <tr>
                                                                                      <th scope="row"><?php echo $i++;?></th>
                                                                                      <td><?php echo $detail['human_category']; ?></td>
                                                                                      <td><?php echo $detail['human_type_of_resource']; ?></td>
                                                                                      <td><?php echo $detail['human_details']; ?></td>
                                                                                      <td><?php echo $detail['human_experience']; ?></td>
                                                                                      <td><?php echo $detail['role']; ?></td>
                                                                                      <td><?php echo $detail['extent_of_involvement']; ?></td>
                                                                                      <td><?php echo $detail['human_alignment']; ?></td>
                                                                                   </tr>
                                                                                   <?php endforeach; ?>
                                                                                </tbody>
                                                                             </table>
                                                                          </div>
                                                                       </div>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                              <div class="tab-pane fade active show mt-2" id="other-information" role="tabpanel" aria-labelledby="other-information-tab">
                                                                 <div>
                                                                    <h5 class="text-primary">Other Information</h5>
                                                                 </div>
                                                                 <div>
                                                                    <div class="row g-3">
                                                                       <div class="col-sm-12">
                                                                          <label for="other_pertinent_facts" id="additionalInformation" class="form-label">
                                                                          </label>
                                                                          <textarea  class="form-control" readonly id="other_pertinent_facts"  width="100%" rows="5"><?php if (isset($userDetail->other_pertinent_facts)) {
                                                                             echo  $userDetail->other_pertinent_facts;
                                                                             }; ?></textarea>
                                                                             <label for="uploadDocument" class="form-label mt-2">Upload Document </label><br>
                                                                             <?php if (isset($userDetail->upload_document) && !empty($userDetail->upload_document) && strpos($userDetail->upload_document, "Error") === false) : ?>
                                                                                                                   <a target="_blank" href="<?php echo base_url('uploads/upload_document/') . $userDetail->upload_document; ?>">View File</a>
                                                                                                               <?php endif; ?>
                                                                       </div>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                              <div class="tab-pane fade active show mt-2" id="certification" role="tabpanel" aria-labelledby="certification-tab">
                                                                 <div>
                                                                    <h5 class="text-primary">Certification</h5>
                                                                    <div>
                                                                       <div class="row g-3">
                                                                          <div class="col-sm-12">
                                                                             <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" type="radio" <?php if (isset($userDetail->certification)) {
                                                                                   if ($userDetail->certification === 'yes') {
                                                                                      echo "checked";
                                                                                   }
                                                                                   }; ?>  id="certification" value="yes" />
                                                                                <label class="form-check-label" for="certification">I certify that the individual submitting this response is duly authorized by the relevant organization to do so on its behalf. The organization acknowledges and authorizes the submission of this response in response to the Expression of Interest (EoI).</label>
                                                                             </div>
                                                                          </div>
                                                                       </div>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                              <div class="tab-pane fade active show mt-2" id="lock-application" role="tabpanel" aria-labelledby="lock-application-tab">
                                                                 <div>
                                                                    <div>
                                                                       <div class="row g-3">
                                                                          <div class="col-sm-12">
                                                                          </div>
                                                                       </div>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                           </div>
                                                           <div class="text-end">
                                                               <?php
                                                               if ($userDetail->status === '0') {
                                                               ?>
                                                               <div class="d-flex align-items-start gap-3 mt-4">
                                                              <button type="button" class="btn btn-light btn-label goToPreviousStep"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Previous Step</button>
                                                                  <button type="button" onclick="downloadApplication('<?php echo $userDetail->application_id;?>')" class="btn btn-info right ms-auto" style="display:block;"><i class="ri-download-2-line"></i> Download PDF</button>

                                                              <button type="button" class="btn btn-danger btn-label right ms-auto"  id="finalSubmit" ><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Final Submit</button>
                                                           </div>
                                                               <?php } else {
                                                               ?>
                                                                  <div class="d-flex align-items-start gap-3 mt-4">
                                                                     <button type="button" class="btn btn-light btn-label goToPreviousStep"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Previous Step</button>
                                                                     <button type="button" onclick="downloadApplication('<?php echo $userDetail->application_id;?>')" class="btn btn-info right ms-auto" style="display:block;"><i class="ri-download-2-line"></i> Download PDF</button>

                                                                     <button type="button" disabled class="btn btn-primary btn-label right ms-auto"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Application Submitted</button>
                                                                  </div>
                                                               <?php
                                                               }

                                                               ?>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   <?php
                                                   } else {
                                                   ?>
                                                      <div class="card">
                                                         <div class="bg-warning-subtle position-relative">
                                                            <div class="card-body p-5">
                                                               <div class="text-center">
                                                                  <h3>Lock Application Submission</h3>
                                                                  <p class="mb-0 text-muted">Certify your organization's authorization to submit the Expression of Interest (EoI) response.</p>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <?php
                                                      ?>
                                                      <?php
                                                      ?>
                                                   <?php
                                                   }
                                                } else {
                                                   ?>
                                                   <p class="mb-0 text-muted">Please confirm your declaration before proceeding with the final submission of your Expression of Interest (EoI) application.</p>
                                                   <div class="d-flex align-items-start gap-3 mt-4">
                                                      <button type="button" class="btn btn-light btn-label goToPreviousStep"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Previous Step</button>
                                                   </div>
                                                <?php
                                                } ?>
                                             </div>
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
   var maxResourceGroups = 8;
   var maxhumanResourceGroups = 8;
   function downloadApplication(application_id) {
   var redirectUrl = "<?php echo base_url('download-eoi-application/'); ?>" + application_id;
   window.location.href = redirectUrl;
   }
   function validateFields() {
      var isValid = true;
      var registrationStepValue = $("input[name='registration_step']").val();
      if (registrationStepValue === "Step_3_Details_of_Submission") {
         $(".tab-pane.active")
            .find("input, textarea")
            .each(function() {
               if (!$(this).val()) {
                  isValid = false;
                  $(this).addClass("is-invalid");
               } else {
                  isValid = true;
                  $(this).removeClass("is-invalid");
               }
            });
      }

      return isValid;
   }


   function setActiveTabInLocalStorage(tabId, registrationStepValue) {
      localStorage.setItem('activeTab', tabId);
      localStorage.setItem('registrationStep', registrationStepValue);
   }

   function getActiveTabFromLocalStorage() {
      return localStorage.getItem('activeTab');
   }

   function getRegistrationStepFromLocalStorage() {
      return localStorage.getItem('registrationStep');
   }

   function setRegistrationStepValue() {
      var registrationStepValue = getRegistrationStepFromLocalStorage();
      if (registrationStepValue) {
         $("input[name='registration_step']").val(registrationStepValue);
      } else {
         var firstTab = $(".nav-link:first");
         if (firstTab.length !== 0) {
            $("input[name='registration_step']").val(firstTab.text().trim().replace(/\s+/g, '_'));
         }
      }
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

            var registrationStepValue = nextTab.text().trim().replace(/\s+/g, '_');
            $("input[name='registration_step']").val(registrationStepValue);

            setActiveTabInLocalStorage(targetId, registrationStepValue);
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

         var registrationStepValue = prevTab.text().trim().replace(/\s+/g, '_');
         $("input[name='registration_step']").val(registrationStepValue);

         setActiveTabInLocalStorage(targetId, registrationStepValue);
      }
   }

   function setActiveTabOnPageLoad() {
      var activeTabId = getActiveTabFromLocalStorage();
      if (activeTabId) {
         $(activeTabId).addClass("active show").siblings(".tab-pane").removeClass("active show");
         $(activeTabId + "-tab").addClass("active").siblings(".nav-link").removeClass("active");
      }
   }

   function showLoader() {
      $(".loader").show();
      $('button[type="submit"]').prop("disabled", true).html('<span class="loader"></span>');
   }

   function hideLoader() {
      $(".loader").hide();
      $('button[type="submit"]').prop("disabled", false).html("Register Now");
   }

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
      newhumanResource.find("select").val("");
      newhumanResource.find(".removehumanResource").prop("disabled", false);
      newhumanResource.find(".use-humanResource, .offer-humanResource").removeClass("select2-hidden-accessible").next(".select2-container").remove();
      newhumanResource.appendTo("#humanResourceSection");
   }

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
      newresource.find("select").val("");
      newresource.find(".removeresource").prop("disabled", false);
      newresource.find(".use-resource, .offer-resource").removeClass("select2-hidden-accessible").next(".select2-container").remove();
      newresource.appendTo("#resourceSection");
   }

   function generateUniqueId() {
      return Math.random().toString(36).substr(2, 9);
   }

   $(document).ready(function() {

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
      $('#finalSubmit').click(function() {

         Swal.fire({
            title: "Are you sure?",
            text: "By clicking 'I'm Understand', you will submit the form.",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, I'm Understand",
            cancelButtonText: "No, cancel",
            closeOnConfirm: false,
            closeOnCancel: false
         }).then((result) => {
            if (result.isConfirmed) {
               $.ajax({
                  url: "<?php echo base_url('post-final-submit'); ?>",
                  type: "post",
                  beforeSend: showLoader,
                  success: function(response) {
                     hideLoader();
                     if (response.status === "error") {
                        Swal.fire({
                           icon: "error",
                           text: response.message,
                        });
                     } else if (response.status === "success") {
                        Swal.fire({
                           title: "Success!",
                           text: "Your EoI form submitted",
                           icon: "success"
                        }).then((result) => {
                           if (result.isConfirmed) {
                              window.location.href = "<?php echo base_url('eoi-status') ?>";
                           }
                        })
                     } else if (response.status === "validation_errors") {

                        return false;

                     } else {
                        Swal.fire({
                           icon: "error",
                           text: "Something went wrong",
                        });
                     }
                  },
                  error: function() {
                     hideLoader();
                     Swal.fire({
                        icon: "error",
                        text: "Something went wrong",
                     });
                  },
               });
            }
         });
      });
      $(".goToNextStep").click(function() {
         goToNextStep();
      });

      $(".goToPreviousStep").click(function() {
         goToPreviousStep();
      });

      $(document).ready(function() {
         setActiveTabOnPageLoad();
         setRegistrationStepValue();
      });
      $(document).keydown(function(e) {
         if (e.ctrlKey && e.keyCode == 82) {
            localStorage.clear();
         }
      });
   });
</script>
