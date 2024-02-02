<div class="page-content">
    <div class="container-fluid">
        <div class="profile-foreground position-relative mx-n4 mt-n4">
            <div class="profile-wid-bg">
                <img src="<?php echo base_url('')?>include/admin/images/profile-bg.jpg" alt="" class="profile-wid-img" />
            </div>
        </div>
        <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
            <div class="row g-4">
                <div class="col-auto">
                    <div class="avatar-lg">
                        <img src="<?php echo base_url('')?>include/admin/images/user.png" alt="user-img" class="img-thumbnail rounded-circle" />
                    </div>
                </div>
                <div class="col profileBannerName">
                    <div class="p-2">
                        <h3 class="text-white mb-1">
                            <?php if (!empty($profileData) && isset($profileData->user_name) && $profileData->user_name !== null && $profileData->user_name !== '') { echo $profileData->user_name; } else { echo "No user name available"; } ?>
                        </h3>
                        <p class="text-white text-opacity-75">
                            <?php
                           $user_levels = [
                             0 =>
                            'Development', 1 => 'Admin', 2 => 'User', ]; $user_level = $profileData->user_level; $defaultuser_level = 'User'; echo ($user_levels[$user_level] ?? $defaultuser_level); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="d-flex profile-wrapper">
                        <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab" aria-selected="true">
                                    <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Overview</span>
                                </a>
                            </li>
                            <!-- <li class="nav-item" role="presentation">
                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#activities" role="tab" aria-selected="false" tabindex="-1">
                                    <i class="ri-list-unordered d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Activities</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#projects" role="tab" aria-selected="false" tabindex="-1">
                                    <i class="ri-price-tag-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Projects</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#documents" role="tab" aria-selected="false" tabindex="-1">
                                    <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Documents</span>
                                </a>
                            </li> -->
                        </ul>
                        <div class="flex-shrink-0">
                            <a href="<?php echo base_url('edit-profile/').customEncrypt($profileData->user_id)?>" class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
                        </div>
                    </div>
                    <div class="tab-content pt-4 text-muted">
                        <div class="tab-pane active" id="overview-tab" role="tabpanel">
                            <div class="row">
                                <div class="col-xxl-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3">Info</h5>
                                            <div class="table-responsive">
                                                <?php echo json_encode($this->session->flashdata("response")); ?>
                                               <form action="<?php echo base_url('update-profile-image')?>" method="post"  enctype="multipart/form-data"s >
                                               <input type="text" name="user_id" id="1234" value="sdfdas">
                                              <input type="file" name="profile_document" class="profile-img-file-input" />
                                                <input type="submit" value="click me">
                                            </form>
<script>
$("#profile-img-file-input").change(function (event) {
    var profile_document = event.target.files[0];
    var user_id = "<?php echo $profileData->user_id; ?>";

    $.ajax({
        url: "<?php echo base_url('update-profile-image');?>",
        type: "post",
        data: {profile_document: profile_document, user_id: user_id},
         contentType: false,
       processData: false,
        success: function (response) {
            if (response.status === false) {
                Swal.fire({
                    icon: "error",
                    text: response.message,
                });
            } else if (response.status ===  true) {
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
                                                <table class="table table-borderless mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Full Name :</th>
                                                            <td class="text-muted">
                                                                <?php if (!empty($profileData) && isset($profileData->user_name) && $profileData->user_name !== null && $profileData->user_name !== '') { echo $profileData->user_name; } else {
                                                                echo "No user name available"; } ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Mobile :</th>
                                                            <td class="text-muted">
                                                                <?php if (!empty($profileData) && isset($profileData->contact_no) && $profileData->contact_no !== null && $profileData->contact_no !== '') { echo $profileData->contact_no; }
                                                                else { echo "No Mobile No. available"; } ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">E-mail :</th>
                                                            <td class="text-muted">
                                                                <?php if (!empty($profileData) && isset($profileData->user_id) && $profileData->user_id !== null && $profileData->user_id !== '') { echo $profileData->user_id; } else { echo
                                                                "No E-mail available"; } ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Location :</th>
                                                            <td class="text-muted">
                                                                <?php if (!empty($profileData) && isset($profileData->location) && $profileData->location !== null && $profileData->location !== '') { echo $profileData->location; } else {
                                                                echo "No location available"; } ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Wrong attempt :</th>
                                                            <td class="text-muted">
                                                                <?php if (!empty($profileData) && isset($profileData->wrong_attempt) && $profileData->wrong_attempt !== null && $profileData->wrong_attempt !== '') { echo
                                                                $profileData->wrong_attempt; } else { echo "No wrong attempt available"; } ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Status :</th>
                                                            <td class="text-muted">
                                                                <?php if (!empty($profileData) && isset($profileData->is_active)) { $isActive = $profileData->is_active; echo $isActive == 1 ? '<span class="badge bg-primary">Active user</span>' : ($isActive == 0 ? '
                                                                <span class="badge bg-danger">De-active user</span>' : 'Unknown status'); } else { echo ''; } ?>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th class="ps-0" scope="row">Joining Date</th>
                                                            <td class="text-muted">
                                                                <?php if (!empty($profileData) && isset($profileData->created_at) && $profileData->created_at !== null && $profileData->created_at !== '') { echo $profileData->created_at; }
                                                                else { echo "No joining date available"; } ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="activities" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Activities</h5>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="projects" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Projects</h5>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="documents" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Documents</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

