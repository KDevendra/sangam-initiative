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
                  <h4 class="card-title mb-0">Event Registration Detail</h4>
               </div>
               <div class="card-body form-steps">
                 <form>
                    <div class="row">
                      <div class="col-md-4 mt-3">
                         <label for="email">Registration ID</label>
                         <input type="text" readonly class="form-control" value="<?php echo (!is_null($applicationDetail) && is_object($applicationDetail) && property_exists($applicationDetail, 'registration_id')) ? $applicationDetail->registration_id: 'Error: Application details not found or invalid.'; ?>">
                      </div>
                      <div class="col-md-4 mt-3">
                         <label for="email">User ID</label>
                         <input type="text" readonly class="form-control" value="<?php echo (!is_null($applicationDetail) && is_object($applicationDetail) && property_exists($applicationDetail, 'user_id')) ? $applicationDetail->user_id: 'Error: Application details not found or invalid.'; ?>">
                      </div>
                      <?php
                      $register_as = $applicationDetail->register_as;
                      if ($register_as === 'Organization')
                        {
                          ?>
                          <div class="col-md-4 mt-3">
                             <label for="email">Organization Name</label>
                             <input type="text" readonly class="form-control" value="<?php echo (!is_null($applicationDetail) && is_object($applicationDetail) && property_exists($applicationDetail, 'full_name')) ? $applicationDetail->full_name: 'Error: Application details not found or invalid.'; ?>">
                          </div>
                          <?php
                      }
                      ?>

                      <div class="col-md-4 mt-3">
                         <label for="email">Contact Person Name</label>
                         <input type="text" readonly class="form-control" value="<?php echo (!is_null($applicationDetail) && is_object($applicationDetail) && property_exists($applicationDetail, 'full_name')) ? $applicationDetail->full_name: 'Error: Application details not found or invalid.'; ?>">
                      </div>

                      <div class="col-md-4 mt-3">
                         <label for="email">Email I'd</label>
                         <input type="text" readonly class="form-control" value="<?php echo (!is_null($applicationDetail) && is_object($applicationDetail) && property_exists($applicationDetail, 'email')) ? $applicationDetail->email: 'Error: Application details not found or invalid.'; ?>">
                      </div>
                      <div class="col-md-4 mt-3">
                         <label for="email">Contact Number</label>
                         <input type="text" readonly class="form-control" value="<?php echo (!is_null($applicationDetail) && is_object($applicationDetail) && property_exists($applicationDetail, 'phone_number')) ? $applicationDetail->phone_number: 'Error: Application details not found or invalid.'; ?>">
                      </div>
                      <div class="col-md-4 mt-3">
                         <label for="email">Event</label>
                         <input type="text" readonly class="form-control" value="<?php echo (!is_null($applicationDetail) && is_object($applicationDetail) && property_exists($applicationDetail, 'event_name')) ? $applicationDetail->event_name: 'Error: Application details not found or invalid.'; ?>">
                      </div>
                      <div class="col-md-4 mt-3">
                         <label for="email">Venue</label>
                         <input type="text" readonly class="form-control" value="<?php echo (!is_null($applicationDetail) && is_object($applicationDetail) && property_exists($applicationDetail, 'location')) ? $applicationDetail->location: 'Error: Application details not found or invalid.'; ?>">
                      </div>
                      <div class="col-md-4 mt-3">
                         <label for="email">Event Date</label>
                         <input type="text" readonly class="form-control" value="<?php echo (!is_null($applicationDetail) && is_object($applicationDetail) && property_exists($applicationDetail, 'event_date')) ? $applicationDetail->event_date: 'Error: Application details not found or invalid.'; ?>">
                      </div>
                      <div class="col-md-4 mt-3">
                         <label for="email">Submit response to EoI</label>
                         <input type="text" readonly class="form-control" value="<?php echo (!is_null($applicationDetail) && is_object($applicationDetail) && property_exists($applicationDetail, 'plan_to_submit_response')) ? $applicationDetail->plan_to_submit_response: 'Error: Application details not found or invalid.'; ?>">
                      </div>
                      <div class="col-md-4 mt-3">
                         <label for="email">Wish to attend</label>
                         <input type="text" readonly class="form-control" value="<?php echo (!is_null($applicationDetail) && is_object($applicationDetail) && property_exists($applicationDetail, 'other_reason_text')) ? $applicationDetail->other_reason_text: 'Error: Application details not found or invalid.'; ?>">
                      </div>
                      <div class="col-md-4 mt-3">
                         <label for="email">Ask questions to the speaker's?</label>
                         <input type="text" readonly class="form-control" value="<?php echo (!is_null($applicationDetail) && is_object($applicationDetail) && property_exists($applicationDetail, 'ask_questions')) ? $applicationDetail->ask_questions: 'Error: Application details not found or invalid.'; ?>">
                      </div>
                      <div class="col-md-12 mt-3">
                         <label for="email">Question</label>
                         <textarea name="name" rows="3" class="form-control" cols="80"><?php echo (!is_null($applicationDetail) && is_object($applicationDetail) && property_exists($applicationDetail, 'questions_to_speaker')) ? $applicationDetail->questions_to_speaker: 'Error: Application details not found or invalid.'; ?></textarea>
                      </div>
                      <div class="col-md-12 mt-4">
                        <div class="d-flex justify-content-center" style="gap: 10px;">
                            <?php

                            if (!is_null($applicationDetail) && property_exists($applicationDetail, 'status')) {
                                $status = $applicationDetail->status;
                                if ($status === '1') {
                                    echo '<button type="button" class="btn btn-success" onclick="approveApplication(' . $applicationDetail->registration_id . ')"><i class="ri-check-fill align-middle"></i> Approve</button>';
                                    echo '<button type="button" class="btn btn-danger" onclick="rejectApplication(\'' . $applicationDetail->registration_id . '\')"><i class="ri-check-fill align-middle"></i> Reject</button>';
                                } else {
                                    switch ($status) {
                                        case '1':
                                            $status_text = 'Pending';
                                            $status_class = 'warning';
                                            break;
                                        case '2':
                                            $status_text = 'Event application approved.';
                                            $status_class = 'success';
                                            break;
                                        case '3':
                                            $status_text = 'Event application Rejected.';
                                            $status_class = 'danger';
                                            break;
                                        case '4':
                                            $status_text = 'Winner';
                                            $status_class = 'info';
                                            break;
                                        default:
                                            $status_text = 'Unknown';
                                            $status_class = 'secondary';
                                    }
                                    echo '<div class="alert ' . 'alert-'.$status_class . '">' . $status_text . '</div>';
                                }
                            }
                            ?>

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
function approveApplication(registration_id) {
   const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
         confirmButton: "btn btn-success",
         cancelButton: "btn btn-danger"
      },
      buttonsStyling: false
   });
   swalWithBootstrapButtons.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Yes, approve it!",
      cancelButtonText: "No, cancel!",
      reverseButtons: true
   }).then((result) => {
      if (result.isConfirmed) {
         $.ajax({
            type: "POST",
            url: "<?php echo base_url('event-registration-ation/approved/'); ?>" + registration_id,
            dataType: 'json',
            success: function (response) {
               console.log(response);
               if (response.status === 'success') {
                  swalWithBootstrapButtons.fire({
                     title: "Approved!",
                     text: "Your application has been approved.",
                     icon: "success"
                  }).then(function () {
                     location.reload();
                  });
               }
            },
            error: function (xhr, status, error) {
               swalWithBootstrapButtons.fire({
                  title: "Error",
                  text: "An error occurred while deleting the file.",
                  icon: "error"
               });
            }
         });

      } else if (result.dismiss === Swal.DismissReason.cancel) {
         swalWithBootstrapButtons.fire({
            title: "Cancelled",
            text: "Your imaginary application is safe :)",
            icon: "error"
         });
      }
   });
}
function rejectApplication(registration_id) {
   const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
         confirmButton: "btn btn-success",
         cancelButton: "btn btn-danger"
      },
      buttonsStyling: false
   });
   swalWithBootstrapButtons.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Yes, reject it!",
      cancelButtonText: "No, cancel!",
      reverseButtons: true
   }).then((result) => {
      if (result.isConfirmed) {
         $.ajax({
            type: "POST",
            url: "<?php echo base_url('event-registration-ation/rejected/'); ?>" + registration_id,
            dataType: 'json',
            success: function (response) {
               console.log(response);
               if (response.status === 'success') {
                  swalWithBootstrapButtons.fire({
                     title: "Rejected!",
                     text: "Your application has been approved.",
                     icon: "success"
                  }).then(function () {
                     location.reload();
                  });
               }
            },
            error: function (xhr, status, error) {
               swalWithBootstrapButtons.fire({
                  title: "Error",
                  text: "An error occurred while deleting the file.",
                  icon: "error"
               });
            }
         });

      } else if (result.dismiss === Swal.DismissReason.cancel) {
         swalWithBootstrapButtons.fire({
            title: "Cancelled",
            text: "Your imaginary application is safe :)",
            icon: "error"
         });
      }
   });
}
</script>
