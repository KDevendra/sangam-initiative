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
            <?php if (!empty($this->session->flashdata('success'))) { ?>
            <div class="alert alert-success alert-dismissible fade show material-shadow" role="alert">
               <?php echo $this->session->flashdata('success'); ?>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php } ?>
         </div>
      </div>
      <div class="row">
         <div id="custom-progress-bar"></div>
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header text-center">
                  <h4 class="card-title mb-0">Registration for The Event's</h4>
               </div>
               <div class="card-body form-steps">
                  <?php
                     if (!empty($isExist)) {
                       ?>
                  <div class="col-md-12">
                     <div class="px-lg-4">
                        <div class="card overflow-hidden">
                           <div class="card-body d-flex" style="background-color: #4051891c;">
                              <div class="flex-grow-1">
                                 <h4 class="fs-18 lh-base mb-0">Track Your Application: Status Update  </h4>
                                 <p class="mb-0 mt-2 pt-1 text-muted">You have successfully registered for the event.
                                    Thank you for your interest in Sangam - <span class="text-success"><?php echo $isExist->event_name; ?></span>. Seats are limited, so entry will be based on invitation. Invitation will be sent through email to relevant parties prior to the event date. Participants who receive the invite will be allowed to attend the event.
                                 </p>
                                 <!-- <p class="mb-0 mt-2 pt-1 text-muted">Greetings! Thank you for submitting your application. Your event application, identified as  <span class="text-success"><?php echo $isExist->registration_id; ?></span> is currently in the
                                    <?php
                                       switch ($isExist->status) {
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
                                    stage of processing. To stay informed about its progress, utilize the buttons below to check its status or request assistance.
                                    </p> -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php
                     }
                       else
                       {
                         ?>
                  <form action="<?= base_url('submit-event-registration');?>" method="post" enctype="multipart/form-data">
                     <div class="row">
                        <?php
                           $register_as = $userDetail->register_as;
                           if ($register_as === 'Organization')
                             {

                               ?>
                        <div class="col-md-4 mt-3">
                           <label for="email">Organization Name  <span class="text-danger">*</span></label>
                           <?php if (isset($flag) && $flag === 'view') { ?>
                           <p><?php echo $userDetail->alternate_email; ?></p>
                           <?php } else { ?>
                           <input type="text" readonly class="form-control"  value="<?php echo $userDetail->organization_name;?>" placeholder="Enter a organization name" id="organization_name" name="organization_name">
                           <?php } ?>
                        </div>
                        <!-- <div class="col-md-4 mt-3">
                           <label for="email">Organization Email </label>
                           <?php if (isset($flag) && $flag === 'view') { ?>
                           <p><?php echo $userDetail->alternate_email; ?></p>
                           <?php } else { ?>
                           <input type="email" class="form-control"  value="<?php echo $userDetail->alternate_email;?>" placeholder="Enter a email" id="alternate_email" name="alternate_email">
                           <?php } ?>
                           </div> -->
                        <?php
                           }

                           ?>
                        <div class="col-md-4 mt-3">
                           <label for="full_name">Contact Person Name  <span class="text-danger">*</span></label>
                           <?php if (isset($flag) && $flag === 'view') { ?>
                           <p><?php if (isset($isExist->full_name)) {
                              echo $isExist->full_name;
                              }; ?></p>
                           <?php } else { ?>
                           <input type="text" readonly class="form-control" value="<?php echo $userDetail->full_name;?>" placeholder="Enter a full name" id="full_name" name="full_name">
                           <?php } ?>
                        </div>
                        <div class="col-md-4 mt-3">
                           <label for="email">Email I'd  <span class="text-danger">*</span></label>
                           <?php if (isset($flag) && $flag === 'view') { ?>
                           <p><?php echo $userDetail->email; ?></p>
                           <?php } else { ?>
                           <input type="email" readonly class="form-control"  value="<?php echo $userDetail->email;?>" placeholder="Enter a email" id="email" name="email">
                           <?php } ?>
                        </div>
                        <div class="col-md-4 mt-3">
                           <label for="phone_number">Contact Number <span class="text-danger">*</span></label>
                           <?php if (isset($flag) && $flag === 'view') { ?>
                           <p><?php echo $userDetail->phone_number; ?></p>
                           <?php } else { ?>
                           <input type="text" readonly class="form-control"  value="<?php echo $userDetail->contact_no;?>" placeholder="Enter your phone number" id="phone_number" name="phone_number">
                           <?php } ?>
                        </div>
                        <div class="col-md-4 mt-3">
                           <label for="relevance">Event <span class="text-danger">*</span></label>
                           <?php if (isset($flag) && $flag === 'view') { ?>
                           <p><?php echo $userDetail->event_name; ?></p>
                           <?php } else { ?>
                           <select class="form-control" name="event_name" id="event_name">
                              <option value="">--- Select Option ---</option>
                              <option value="Delhi - India’s Enterprise Hub">Delhi - India’s Enterprise Hub</option>
                              <option value="Bangalore - India’s Silicon Valley">Bangalore - India’s Silicon Valley</option>
                              <option value="Hyderabad - India’s Innovation Hub">Hyderabad - India’s Innovation Hub</option>
                           </select>
                           <?php } ?>
                        </div>
                        <div class="col-md-4 mt-3">
                           <label for="relevance">Venue <span class="text-danger">*</span></label>
                           <?php if (isset($flag) && $flag === 'view') { ?>
                           <p><?php echo $userDetail->location; ?></p>
                           <?php } else { ?>
                           <input type="text" readonly class="form-control" placeholder="Event Value" id="location" name="location">
                           <?php } ?>
                        </div>
                        <div class="col-md-4 mt-3">
                           <label for="relevance">Event Date <span class="text-danger">*</span></label>
                           <?php if (isset($flag) && $flag === 'view') { ?>
                           <p><?php echo $isExist->registration_date; ?></p>
                           <?php } else { ?>
                           <input type="text" readonly class="form-control" placeholder="Event Date" id="event_date" name="event_date">
                           <?php } ?>
                        </div>
                        <div class="col-md-4 mt-3">
                           <label for="plan_to_submit_response">Do you plan to submit response to EoI:</label><br>
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="plan_to_submit_response" id="response_yes" value="Yes">
                              <label class="form-check-label" for="response_yes">Yes</label>
                           </div>
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="plan_to_submit_response" id="response_no" value="No">
                              <label class="form-check-label" for="response_no">No</label>
                           </div>
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="plan_to_submit_response" id="response_maybe" value="Maybe">
                              <label class="form-check-label" for="response_maybe">Maybe</label>
                           </div>
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="plan_to_submit_response" id="response_submitted" value="Already submitted">
                              <label class="form-check-label" for="response_submitted">Already submitted</label>
                           </div>
                        </div>
                        <div class="col-md-4 mt-3">
                           <label for="reason_to_attend">Why do you wish to attend:</label><br>
                           <input type="text" class="form-control" id="other_reason_text" name="other_reason_text" placeholder="Please specify">
                           <!-- <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="reason_to_attend" id="reason_networking" value="Networking">
                              <label class="form-check-label" for="reason_networking">Networking</label>
                              </div>
                              <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="reason_to_attend" id="reason_learning" value="Learning">
                              <label class="form-check-label" for="reason_learning">Learning</label>
                              </div>
                              <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="reason_to_attend" id="reason_socializing" value="Socializing">
                              <label class="form-check-label" for="reason_socializing">Socializing</label>
                              </div>
                              <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="reason_to_attend" id="reason_other" value="Other">
                              <label class="form-check-label" for="reason_other">Other</label>
                              </div>
                              <div class="mt-3" id="other_reason_input" style="display: none;">
                              <input type="text" class="form-control" id="other_reason_text" name="other_reason_text" placeholder="Please specify">
                              </div> -->
                        </div>
                        <div class="col-md-5 mt-3">
                           <label for="questions_to_speaker" style="display: flex;" class="form-label">
                              <span>Would you like to ask questions to the speaker's?</span>
                              <div data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Your relevant questions may be discussed in a session of the outreach program" data-bs-original-title="Your relevant questions may be discussed in a session of the outreach program">
                                 <a href="javascript:void(0)" class="text-muted"><i style="background-color: #344372;border-radius: 50%;margin-left: 5px;border-color: #344372;color: #fff;padding: 0px;" class="ri-info-i"></i></a>
                              </div>
                           </label>
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="ask_questions" id="ask_questions_yes" value="Yes">
                              <label class="form-check-label" for="ask_questions_yes">Yes</label>
                           </div>
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="ask_questions" id="ask_questions_no" value="No">
                              <label class="form-check-label" for="ask_questions_no">No</label>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <textarea class="form-control mt-3 d-none" id="questions_to_speaker" name="questions_to_speaker" rows="4" placeholder="Enter your questions"></textarea>
                        </div>
                        <div class="col-md-12 mt-5">
                           <div class="d-flex justify-content-center">
                              <button class="btn btn-primary" id="submitBtn">Register</button>
                           </div>
                        </div>
                     </div>
                  </form>
                  <?php
                     }

                     ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   $(document).ready(function() {
       $('#event_name').change(function() {
           var selectedEvent = $(this).val();
           var venueInput = $('#location');
           var eventDateInput = $('#event_date');

           switch (selectedEvent) {
               case "Delhi - India’s Enterprise Hub":
                   venueInput.val("IIT Delhi");
                   eventDateInput.val("5th March 2024");
                   break;
               case "Bangalore - India’s Silicon Valley":
                   venueInput.val("IIIT Bangalore");
                   eventDateInput.val("9th March 2024");
                   break;
               case "Hyderabad - India’s Innovation Hub":
                   venueInput.val("To be decided");
                   eventDateInput.val("12th March 2024");
                   break;
               default:
                   venueInput.val("");
                   eventDateInput.val("");
                   break;
           }
       });
       $('input[name="ask_questions"]').change(function() {
           var textarea = $('#questions_to_speaker');
           if ($(this).val() === 'Yes') {
               textarea.removeClass('d-none');
           } else {
               textarea.addClass('d-none');
           }
       });
       $('input[name="reason_to_attend"]').change(function() {
        if ($(this).val() === 'Other') {
            $('#other_reason_input').show();
        } else {
            $('#other_reason_input').hide();
        }
    });
   });
</script>
