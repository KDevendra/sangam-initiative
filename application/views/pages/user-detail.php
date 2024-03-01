<div class="page-content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex justify-content-between">
                     <h5 class="card-title mb-3">User Details</h5>
                     <button type="button" class="btn btn-sm btn-primary " data-bs-toggle="modal" data-bs-target="#sendUserEmail"><i class="ri-mail-unread-fill"></i> Send Email</button>
                  </div>
                  <div class="table-responsive">
                     <table class="table table-borderless mb-0">
                        <tbody>
                           <?php if (isset($userDetail->user_id)) { ?>
                           <tr>
                              <th class="ps-0" scope="row">User Id :</th>
                              <td class="text-muted">
                                 <?php echo $userDetail->user_id; ?>
                              </td>
                           </tr>
                           <?php } ?>
                           <?php if (isset($userDetail->email)) { ?>
                           <tr>
                              <th class="ps-0" scope="row">Email :</th>
                              <td class="text-muted">
                                 <?php echo $userDetail->email; ?>
                              </td>
                           </tr>
                           <?php } ?>
                           <?php if (isset($userDetail->user_name)) { ?>
                           <tr>
                              <th class="ps-0" scope="row">User Name</th>
                              <td class="text-muted">
                                 <?php echo $userDetail->user_name; ?>
                              </td>
                           </tr>
                           <?php } ?>
                           <?php if (isset($userDetail->contact_no)) { ?>
                           <tr>
                              <th class="ps-0" scope="row">Contact No</th>
                              <td class="text-muted">
                                 <?php echo $userDetail->contact_no; ?>
                              </td>
                           </tr>
                           <?php } ?>
                           <?php if (isset($userDetail->register_as)) { ?>
                           <tr>
                              <th class="ps-0" scope="row">Register As</th>
                              <td class="text-muted">
                                 <?php echo $userDetail->register_as; ?>
                              </td>
                           </tr>
                           <?php } ?>
                           <?php if (isset($userDetail->date_of_birth)) { ?>
                           <tr>
                              <th class="ps-0" scope="row">Date of Birth</th>
                              <td class="text-muted">
                                 <?php echo $userDetail->date_of_birth; ?>
                              </td>
                           </tr>
                           <?php } ?>
                           <?php if (isset($userDetail->full_name)) { ?>
                           <tr>
                              <th class="ps-0" scope="row">Full Name</th>
                              <td class="text-muted">
                                 <?php echo $userDetail->full_name; ?>
                              </td>
                           </tr>
                           <?php } ?>
                           <?php if (isset($userDetail->core_competency)) { ?>
                           <tr>
                              <th class="ps-0" scope="row">Core Competency</th>
                              <td class="text-muted">
                                 <?php echo $userDetail->core_competency; ?>
                              </td>
                           </tr>
                           <?php } ?>
                           <?php if (isset($userDetail->core_competency) && $userDetail->core_competency === 'Others') { ?>
                           <tr>
                              <th class="ps-0" scope="row">Other Core Competency</th>
                              <td class="text-muted">
                                 <?php echo $userDetail->other_core_competencie; ?>
                              </td>
                           </tr>
                           <?php } ?>
                           <?php if (isset($userDetail->experience)) { ?>
                           <tr>
                              <th class="ps-0" scope="row">Experience</th>
                              <td class="text-muted">
                                 <?php echo $userDetail->experience; ?>
                              </td>
                           </tr>
                           <?php } ?>
                           <?php if (isset($userDetail->organization_name)) { ?>
                           <tr>
                              <th class="ps-0" scope="row">Organization Name</th>
                              <td class="text-muted">
                                 <?php echo $userDetail->organization_name; ?>
                              </td>
                           </tr>
                           <?php } ?>
                           <?php if (isset($userDetail->potential_interest_areas)) { ?>
                           <tr>
                              <th class="ps-0" scope="row">Potential Interest Areas</th>
                              <td class="text-muted">
                                 <?php echo $userDetail->potential_interest_areas; ?>
                              </td>
                           </tr>
                           <?php } ?>
                           <?php if (isset($userDetail->office_address)) { ?>
                           <tr>
                              <th class="ps-0" scope="row">Office Address</th>
                              <td class="text-muted">
                                 <?php echo $userDetail->office_address; ?>
                              </td>
                           </tr>
                           <?php } ?>
                           <?php if (isset($userDetail->organisation_hq_address)) { ?>
                           <tr>
                              <th class="ps-0" scope="row">Organisation HQ Address</th>
                              <td class="text-muted">
                                 <?php echo $userDetail->organisation_hq_address; ?>
                              </td>
                           </tr>
                           <?php } ?>
                           <?php if (isset($userDetail->website_url)) { ?>
                           <tr>
                              <th class="ps-0" scope="row">Website URL</th>
                              <td class="text-muted">
                                 <?php echo $userDetail->website_url; ?>
                              </td>
                           </tr>
                           <?php } ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="sendUserEmail" class="modal fade" tabindex="-1" aria-labelledby="sendUserEmailLabel" aria-hidden="true" style="display: none;">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="sendUserEmailLabel">Add Your Email Content</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
         </div>
         <div class="modal-body">
            <div class="row row-sm">
               <div class="col-lg-4">
                  <label class="form-label mb-3">To: </label>
               </div>
               <div class="col-lg-8">
                  <input type="text" readonly class="form-control mb-3" name="to" value="<?php echo $userDetail->email;?>" id="to">
               </div>
               <div class="col-lg-4">
                  <label class="form-label mb-3">CC: </label>
               </div>
               <div class="col-lg-8">
                  <input type="text"  class="form-control mb-3" name="cc" id="cc">
               </div>
               <div class="col-lg-4">
                  <label class="form-label mb-3">Subject:</label>
               </div>
               <div class="col-lg-8">
                  <input type="text" name="subject" class="form-control mb-3"  id="subject">
               </div>
               <div class="col-lg-12">
                  <label class="form-label">Message:</label>
                  <input type="hidden" name="user_id" value="<?php echo $userDetail->user_id;?>" id="user_id">
                  <textarea id="message" class="form-control mb-3" name="Message"></textarea>
                  <span id="error_message" class="text-danger"></span>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="savechanges">Send</button>
         </div>
      </div>
   </div>
</div>
<script>
   var editor;
   ClassicEditor
       .create(document.querySelector('#message'))
       .then(newEditor => {
           editor = newEditor;
       })
       .catch(error => {
           console.error(error);
       });
       function showLoader() {
          $(".loader").show();
          $('#savechanges').prop("disabled", true).html('<span class="loader"></span>');
       }

       function hideLoader() {
          $(".loader").hide();
          $('#savechanges').prop("disabled", false).html("Send");
       }
   $(document).on("click", "#savechanges", function() {
       var isValid = true;
       var message = editor.getData();
       var to = $("#to").val();
       var cc = $("#cc").val();
       var subject = $("#subject").val();
       var user_id = $("#user_id").val();
       if (!message) {
           $("#error_message").text("Message is required.");
           isValid = false;
       } else {
           $("#error_message").text("");
       }
       if (isValid) {
           var postData = {
               to: to || null,
               message: message || null,
               user_id: user_id || null,
               cc: cc || null,
               subject: subject || null,
           };
           $.ajax({
               url: "<?php echo base_url('post-send-message')?>",
               type: 'post',
               data: postData,
                 beforeSend: showLoader,
               success: function(response) {
                 hideLoader();
                   if (response.status === 'success') {
                       $("#remark").val("");
                       $("#user_id").val("");
                       $("#cc").val("");
                       $("#subject").val("");
                       $("#user_id").val("");
                       $("#modelCreateMenu").modal('hide');
                       Swal.fire({
                           icon: "success",
                           title: "Success",
                           text: response.message,
                       }).then((result) => {
                           if (result.isConfirmed) {
                               location.reload();
                           }
                       });
                   } else {
                       Swal.fire({
                           icon: "error",
                           title: "Error",
                           text: response.message,
                       });
                   }
               },
               error: function(xhr, textStatus, errorThrown) {
                 hideLoader();
                   Swal.fire({
                       icon: "error",
                       title: "Error",
                       text: response.message,
                   });
               }
           });
       }
   });
</script>
