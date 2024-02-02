<div class="page-content">
   <div class="container-fluid">
      <div class="position-relative mx-n4 mt-n4">
         <div class="profile-wid-bg profile-setting-img">
            <img src="<?php echo base_url('')?>include/admin/images/profile-bg.jpg" class="profile-wid-img" alt="" />
            <div class="overlay-content">
               <div class="text-end p-3">
                  <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                     <input id="profile-foreground-img-file-input" type="file" class="profile-foreground-img-file-input" />
                     <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light"> <i class="ri-image-edit-line align-bottom me-1"></i> Change Cover </label>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xxl-3">
            <div class="card mt-n5">
               <div class="card-body p-4">
                  <div class="text-center">
                     <div class="profile-user position-relative d-inline-block mx-auto mb-4">
                        <img src="<?php echo base_url('')?>include/admin/images/user.png" class="rounded-circle avatar-xl img-thumbnail user-profile-image material-shadow" alt="user-profile-image" />
                        <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                           <input id="profile-img-file-input" type="file" class="profile-img-file-input" />
                           <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                           <span class="avatar-title rounded-circle bg-light text-body material-shadow">
                           <i class="ri-camera-fill"></i>
                           </span>
                           </label>
                        </div>
                     </div>
                     <h5 class="fs-16 mb-1"> <?php if (!empty($profileData) && isset($profileData->user_name) && $profileData->user_name !== null && $profileData->user_name !== '') { echo $profileData->user_name; } else {
                                                                echo "No user name available"; } ?></h5>
                     <p class="text-muted mb-0">  <?php
                           $user_levels = [
                             0 =>
                            'Development', 1 => 'Admin', 2 => 'User', ]; $user_level = $profileData->user_level; $defaultuser_level = 'User'; echo ($user_levels[$user_level] ?? $defaultuser_level); ?>
                        </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xxl-9">
            <div class="card mt-xxl-n5">
               <div class="card-header">
                  <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                     <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab" aria-selected="true"> <i class="fas fa-home"></i> Personal Details </a>
                     </li>
                     <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab" aria-selected="false" tabindex="-1"> <i class="far fa-user"></i> Change Password </a>
                     </li>
                     <!-- <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#experience" role="tab" aria-selected="false" tabindex="-1">
                            <i class="far fa-envelope"></i> Experience
                        </a>
                        </li>
                        <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#privacy" role="tab" aria-selected="false" tabindex="-1">
                            <i class="far fa-envelope"></i> Privacy Policy
                        </a>
                        </li> -->
                  </ul>
               </div>
               <div class="card-body p-4">
                  <div class="tab-content">
                     <div class="tab-pane active" id="personalDetails" role="tabpanel">
                        <form action="javascript:void(0);">
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="mb-3">
                                    <label for="user_name" class="form-label">Full Name </label>
                                    <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter your full name" value="<?php if (!empty($profileData) && isset($profileData->user_name) && $profileData->user_name !== null && $profileData->user_name !== '') { echo $profileData->user_name;}?>" />
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="mb-3">
                                    <label for="contact_no" class="form-label">Mobile </label>
                                    <input type="text" class="form-control" id="contact_no" placeholder="Enter your mobile" value="<?php if (!empty($profileData) && isset($profileData->contact_no) && $profileData->contact_no !== null && $profileData->contact_no !== '') { echo $profileData->contact_no;}?>" />
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="mb-3">
                                    <label for="user_id" class="form-label">Email Address </label>
                                    <input type="email" readonly class="form-control" id="user_id" name="user_id" placeholder="Enter your email address" value="<?php if (!empty($profileData) && isset($profileData->user_id) && $profileData->user_id !== null && $profileData->user_id !== '') { echo $profileData->user_id;}?>" />
                                    <div class="text-danger" id="userIdFocusMessage"></div>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="mb-3">
                                    <label for="location" class="form-label">Location </label>
                                    <input type="text" class="form-control" id="location" name="location" placeholder="Enter your location" value="<?php if (!empty($profileData) && isset($profileData->location) && $profileData->location !== null && $profileData->location !== '') { echo $profileData->location;}?>" />
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="hstack gap-2 justify-content-end">
                                    <button type="submit" class="btn btn-primary">Updates</button>
                                    <button type="button" class="btn btn-soft-success">Cancel</button>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="tab-pane" id="changePassword" role="tabpanel">
                        <form action="javascript:void(0);">
                           <div class="row g-2">
                              <div class="col-lg-4">
                                 <div>
                                    <label for="oldpasswordInput" class="form-label">Old Password*</label>
                                    <input type="password" class="form-control" id="oldpasswordInput" placeholder="Enter current password" />
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div>
                                    <label for="newpasswordInput" class="form-label">New Password*</label>
                                    <input type="password" class="form-control" id="newpasswordInput" placeholder="Enter new password" />
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div>
                                    <label for="confirmpasswordInput" class="form-label">Confirm Password*</label>
                                    <input type="password" class="form-control" id="confirmpasswordInput" placeholder="Confirm password" />
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="mb-3">
                                    <a href="javascript:void(0);" class="link-primary text-decoration-underline">Forgot Password ?</a>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="text-end">
                                    <button type="submit" class="btn btn-success">Change Password</button>
                                 </div>
                              </div>
                           </div>
                        </form>
                        <div class="mt-4 mb-3 border-bottom pb-2">
                           <div class="float-end">
                              <a href="javascript:void(0);" class="link-primary">All Logout</a>
                           </div>
                           <h5 class="card-title">Login History</h5>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                           <div class="flex-shrink-0 avatar-sm">
                              <div class="avatar-title bg-light text-primary rounded-3 fs-18 material-shadow">
                                 <i class="ri-smartphone-line"></i>
                              </div>
                           </div>
                           <div class="flex-grow-1 ms-3">
                              <h6>iPhone 12 Pro</h6>
                              <p class="text-muted mb-0">Los Angeles, United States - March 16 at 2:47PM</p>
                           </div>
                           <div>
                              <a href="javascript:void(0);">Logout</a>
                           </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                           <div class="flex-shrink-0 avatar-sm">
                              <div class="avatar-title bg-light text-primary rounded-3 fs-18 material-shadow">
                                 <i class="ri-tablet-line"></i>
                              </div>
                           </div>
                           <div class="flex-grow-1 ms-3">
                              <h6>Apple iPad Pro</h6>
                              <p class="text-muted mb-0">Washington, United States - November 06 at 10:43AM</p>
                           </div>
                           <div>
                              <a href="javascript:void(0);">Logout</a>
                           </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                           <div class="flex-shrink-0 avatar-sm">
                              <div class="avatar-title bg-light text-primary rounded-3 fs-18 material-shadow">
                                 <i class="ri-smartphone-line"></i>
                              </div>
                           </div>
                           <div class="flex-grow-1 ms-3">
                              <h6>Galaxy S21 Ultra 5G</h6>
                              <p class="text-muted mb-0">Conneticut, United States - June 12 at 3:24PM</p>
                           </div>
                           <div>
                              <a href="javascript:void(0);">Logout</a>
                           </div>
                        </div>
                        <div class="d-flex align-items-center">
                           <div class="flex-shrink-0 avatar-sm">
                              <div class="avatar-title bg-light text-primary rounded-3 fs-18 material-shadow">
                                 <i class="ri-macbook-line"></i>
                              </div>
                           </div>
                           <div class="flex-grow-1 ms-3">
                              <h6>Dell Inspiron 14</h6>
                              <p class="text-muted mb-0">Phoenix, United States - July 26 at 8:10AM</p>
                           </div>
                           <div>
                              <a href="javascript:void(0);">Logout</a>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane" id="experience" role="tabpanel"></div>
                     <div class="tab-pane" id="privacy" role="tabpanel"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
$("#profile-img-file-input").change(function (event) {
    var profile_document = event.target.files[0];
    var user_id = "<?php echo $profileData->user_id; ?>";

    $.ajax({
        url: "<?php echo base_url('update-profile-image');?>",
        type: "post",
        data: {profile_document: profile_document, user_id: user_id},
        success: function (response) {
            if (response.status === "error") {
                Swal.fire({
                    icon: "error",
                    text: response.message,
                });
            } else if (response.status === "success") {
                // Redirect to a new page after a successful update
                window.location.href = "<?php echo base_url('redirect-url');?>";
            } else {
                Swal.fire({
                    icon: "error",
                    text: "Something went wrong",
                });
            }
        },
        error: function () {
            Swal.fire({
                icon: "error",
                text: "Something went wrong",
            });
        },
    });
});

</script>