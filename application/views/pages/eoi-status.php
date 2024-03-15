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
            </div>
            <?php } ?>
            <?php if (!empty($this->session->flashdata('success'))) { ?>
            <div class="alert alert-success alert-dismissible fade show material-shadow" role="alert">
               <?php echo $this->session->flashdata('success'); ?>
            </div>
            <?php } ?>
         </div>
      </div>
      <div class="row">
         <div id="custom-progress-bar"></div>
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header text-center">
                  <h4 class="card-title mb-0">Expression of Interest (EoI)  Detail</h4>
               </div>
               <div class="card-body form-steps">
                  <?php

                  if (property_exists($userDetail, 'status')) {
                
                     $form_status = $userDetail->status;
                  } else {
                   
                     $form_status = "Undefined";
                   
                  }

                     if ($form_status === '1') {
                     ?>
                        <div class="row gy-5">
                           <div class="col-md-12">
                              <div class="px-lg-4">
                                 <div class="card overflow-hidden">
                                    <div class="card-body d-flex" style="background-color: #4051891c;">
                                       <div class="flex-grow-1">
                                          <h4 class="fs-18 lh-base mb-0">Track Your Progress: Application Status Update  </h4>
                                          <p class="mb-0 mt-2 pt-1 text-muted">Welcome to our application status tracker! We've received your Expression of Interest (EoI) application with ID <span class="text-success"><?php echo $userDetail->application_id; ?></span> and it's currently in the
                                             <?php
                                                switch ($userDetail->status) {
                                                   case '1':
                                                      $status_text = 'Pending';
                                                      $status_class = 'text-warning';
                                                      break;
                                                   case '2':
                                                      $status_text = 'Approved';
                                                      $status_class = 'text-success';
                                                      break;
                                                   case '3':
                                                      $status_text = 'Rejected';
                                                      $status_class = 'text-danger';
                                                      break;
                                                   case '4':
                                                      $status_text = 'Winner';
                                                      $status_class = 'text-info';
                                                      break;
                                                   default:
                                                      $status_text = 'Unknown';
                                                      $status_class = 'text-muted';
                                                }
                                                echo "<span class=\"$status_class\">$status_text</span>";
                                                ?>
                                             stage. To keep you updated on its progress, simply use the buttons below to view the status or reach out for assistance.
                                          </p>
                                          <!-- <div class="d-flex gap-3 mt-4">
                                             <a href="#!" class="btn btn-primary">Download PDF</a>
                                          </div> -->
                                       </div>
                                       <img src="assets/images/bg-d.png" alt="" class="img-fluid">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12" style="margin-top: 0;">
                              <div class="px-lg-4">
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
                                                <input type="text"  class="form-control" readonly id="full_name" name="full_name"  value="<?php  if (isset($userDetail->full_name)) {
                                                   echo  $userDetail->full_name;
                                                   }; ?>" />
                                             </div>
                                             <div class="col-sm-4">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="text"  class="form-control" readonly id="email" name="email"  value="<?php if (isset($userDetail->email)) {
                                                   echo  $userDetail->email;
                                                   }; ?>" />
                                             </div>
                                             <div class="col-sm-4">
                                                <label for="phoneNumber" class="form-label">Phone Number</label>
                                                <input type="text"  class="form-control" readonly id="phoneNumber" name="contact_no"  value="<?php if (isset($userDetail->contact_no)) {
                                                   echo  $userDetail->contact_no;
                                                   }; ?>" />
                                             </div>
                                             <div class="col-sm-4">
                                                <label for="phoneNumber" class="form-label">Date of Birth</label>
                                                <input type="date"  class="form-control" readonly id="date_of_birth" name="date_of_birth"  value="<?php if (isset($userDetail->date_of_birth)) {
                                                   echo  $userDetail->date_of_birth;
                                                   }; ?>" />
                                             </div>
                                             <?php
                                                if (isset($userDetail->register_as) && $userDetail->register_as === 'Individual') {
                                                ?>
                                             <div class="col-sm-4">
                                                <label for="phoneNumber" class="form-label">Experience</label>
                                                <input type="text"  class="form-control" readonly id="experience" name="experience"  value="<?php echo isset($userDetail->experience) ? $userDetail->experience : ''; ?>" />
                                             </div>
                                             <?php
                                                }
                                                ?>
                                             <div class="col-sm-8">
                                                <label for="phoneNumber" class="form-label">Core Competencies</label>
                                                <input type="text"  class="form-control" readonly id="core_competency" name="core_competency" value="<?php if (isset($userDetail->core_competency)) {
                                                   echo  $userDetail->core_competency;
                                                   }; ?>" />
                                             </div>
                                             <?php
                                                if (isset($userDetail->register_as) && $userDetail->register_as === 'Organization') {
                                                ?>
                                             <div class="col-sm-4">
                                                <label for="phoneNumber" class="form-label">Organization Name</label>
                                                <input type="text"  class="form-control" readonly id="organization_name" name="organization_name"  value="<?php echo isset($userDetail->organization_name) ? $userDetail->organization_name : ''; ?>" />
                                             </div>
                                             <?php
                                                }
                                                ?>
                                             <?php
                                                if (isset($userDetail->register_as) && $userDetail->register_as === 'Organization') {
                                                ?>
                                             <div class="col-sm-4">
                                                <label for="phoneNumber" class="form-label">Website URL of the organisation </label>
                                                <input type="text"  class="form-control" readonly id="website_url" name="website_url"  value="<?php echo isset($userDetail->website_url) ? $userDetail->website_url : ''; ?>" />
                                             </div>
                                             <?php
                                                }
                                                ?>
                                             <?php
                                                if (isset($userDetail->register_as) && $userDetail->register_as === 'Organization') {
                                                ?>
                                             <div class="col-sm-4">
                                                <label for="phoneNumber" class="form-label">Organization Email </label>
                                                <input type="text"  class="form-control" readonly id="email" name="email"  value="<?php echo isset($userDetail->email) ? $userDetail->email : ''; ?>" />
                                             </div>
                                             <?php
                                                }
                                                ?>
                                             <?php
                                                if (isset($userDetail->register_as) && $userDetail->register_as === 'Organization') {
                                                ?>
                                             <div class="col-sm-4">
                                                <label for="phoneNumber" class="form-label">Potential Interest Areas</label>
                                                <input type="text"  class="form-control" readonly id="potential_interest_areas" name="potential_interest_areas"  value="<?php echo isset($userDetail->potential_interest_areas) ? implode(',', json_decode($userDetail->potential_interest_areas)) : ''; ?>" />
                                             </div>
                                             <?php
                                                }
                                                ?>
                                             <?php
                                                if (isset($userDetail->register_as) && $userDetail->register_as === 'Organization') {
                                                ?>
                                             <div class="col-sm-4">
                                                <label for="phoneNumber" class="form-label">Office Address</label>
                                                <input type="text"  class="form-control" readonly id="office_address" name="office_address"  value="<?php echo isset($userDetail->office_address) ? $userDetail->office_address : ''; ?>" />
                                             </div>
                                             <?php
                                                }
                                                ?>
                                             <?php
                                                if (isset($userDetail->register_as) && $userDetail->register_as === 'Organization') {
                                                ?>
                                             <div class="col-sm-4">
                                                <label for="phoneNumber" class="form-label">Organisation HQ address</label>
                                                <input type="text"  class="form-control" readonly id="organisation_hq_address" name="organisation_hq_address"  value="<?php echo isset($userDetail->organisation_hq_address) ? $userDetail->organisation_hq_address : ''; ?>" />
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
                                                <textarea name="previous_experience" class="form-control" readonly id="previous_experience" width="100%" rows="3" ><?php if (isset($userDetail->previous_experience)) {
                                                   echo  $userDetail->previous_experience;
                                                   }; ?></textarea>
                                             </div>
                                             <div class="col-sm-12">
                                                <label for="achievements_recognitions" id="additionalInformation" class="form-label">
                                                <span>Achievements or Recognitions</span>
                                                </label>
                                                <textarea name="achievements_recognitions" class="form-control" readonly id="achievements_recognitions" width="100%" rows="3" ><?php if (isset($userDetail->achievements_recognitions)) {
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
                                                <label for="title" class="form-label">Title</label> <input type="text" class="form-control" readonly id="title" name="title"  value="<?php if (isset($userDetail->title)) {
                                                   echo  $userDetail->title;
                                                   }; ?>" />
                                             </div>
                                             <div class="col-sm-4">
                                                <label for="category" class="form-label">Category</label> <input type="text" class="form-control" readonly id="category" name="category"  value="<?php if (isset($userDetail->category)) {
                                                   echo  $userDetail->category;
                                                   }; ?>" />
                                             </div>
                                             <div class="col-sm-4">
                                                <label for="strategic_vision" class="form-label"> Strategic Vision</label>
                                                <textarea name="strategic_vision"  class="form-control" readonly name="strategic_vision" id="strategic_vision" width="100%" rows="2"><?php if (isset($userDetail->strategic_vision)) {
                                                   echo  $userDetail->strategic_vision;
                                                   }; ?></textarea>
                                             </div>
                                             <div class="col-sm-4">
                                                <label for="objectives" class="form-label"> Objectives</label>
                                                <textarea name="objectives"  class="form-control" readonly name="objectives" id="objectives" width="100%" rows="2"><?php if (isset($userDetail->objectives)) {
                                                   echo  $userDetail->objectives;
                                                   }; ?></textarea>
                                             </div>
                                             <div class="col-sm-4">
                                                <label for="project_goals" id="additionalInformation" class="form-label">
                                                <span>Alignment with Project Goals</span>
                                                </label>
                                                <textarea name="project_goals"  name="project_goals" class="form-control" readonly id="project_goals" width="100%" rows="2"><?php if (isset($userDetail->project_goals)) {
                                                   echo  $userDetail->project_goals;
                                                   }; ?></textarea>
                                             </div>
                                             <div class="col-sm-4">
                                                <label for="contribution_to_project_goals" id="additionalInformation" class="form-label">
                                                <span>Contribution to Project Goals</span>
                                                </label>
                                                <textarea name="contribution_to_project_goals"  name="contribution_to_project_goals" class="form-control" readonly id="contribution_to_project_goals" width="100%" rows="2"><?php if (isset($userDetail->contribution_to_project_goals)) {
                                                   echo  $userDetail->contribution_to_project_goals;
                                                   }; ?></textarea>
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
                                                         <?php foreach ($human_resources as $detail) :?>
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
                                                <textarea name="other_pertinent_facts" class="form-control" readonly id="other_pertinent_facts"  width="100%" rows="5"><?php if (isset($userDetail->other_pertinent_facts)) {
                                                   echo  $userDetail->other_pertinent_facts;
                                                   }; ?></textarea>
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
                                                         }; ?> name="certification" id="certification" value="yes" />
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
                              </div>
                           </div>
                        </div>
                  <?php
                     } else {
                       ?>
                           <h5 class="text-primary">Take the Next Step Towards Collaboration</h5>
                           <p>Please note that your Expression of Interest (EoI) application has not been successfully submitted.</p>
                           <p>To ensure that your application is properly processed, please review all required fields and ensure that they are completed accurately. Once all necessary information is provided, kindly resubmit your EoI application.
                           </p>
                           <div class="d-flex justify-content-center">
                              <button type="button" class="btn btn-primary "><a class="text-white" href="<?php echo base_url('eoi-registration')?>">Application Form</a></button>
                           </div>
                  <?php
                     }
                       ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
