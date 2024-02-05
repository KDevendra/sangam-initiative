<div class="page-content">
    <div class="container-fluid">
        <div class="profile-foreground position-relative mx-n4 mt-n4">
            <div class="profile-wid-bg">
                <img src="<?php echo base_url('') ?>include/admin/images/profile-bg.jpg" alt="" class="profile-wid-img" />
            </div>
        </div>
        <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
            <div class="row g-4">
                <div class="col-auto">
                    <div class="avatar-lg">
                        <img src="<?php echo base_url('') ?>include/admin/images/user.png" alt="user-img" class="img-thumbnail rounded-circle" />
                    </div>
                </div>
                <div class="col profileBannerName">
                    <div class="p-2">
                        <h3 class="text-white mb-1">
                            <?php if (!empty($profileData) && isset($profileData->user_name) && $profileData->user_name !== null && $profileData->user_name !== '') {
                                echo ucwords($profileData->user_name);
                            } else {
                                echo "No user name available";
                            } ?>
                        </h3>
                        <p class="text-white text-opacity-75">
                            <?php
                            $user_levels = [
                                0 =>
                                'Development', 1 => 'Admin', 2 => 'User',
                            ];
                            $user_level = $profileData->user_level;
                            $defaultuser_level = 'User';
                            echo ($user_levels[$user_level] ?? $defaultuser_level); ?>
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
                            <?php if (!empty($profileData) && isset($profileData->register_as) && $profileData->register_as !== null && $profileData->register_as === 'Organization') { ?>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link fs-14" data-bs-toggle="tab" href="#organization" role="tab" aria-selected="false" tabindex="-1">
                                        <i class="ri-list-unordered d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block"> Organization </span>
                                    </a>
                                </li>
                            <?php } else { ?>
                            <?php } ?>
                        </ul>
                        <div class="flex-shrink-0">
                            <a href="<?php echo base_url('edit-profile/') . customEncrypt($profileData->email) ?>" class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
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
                                                <table class="table table-borderless mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Registered As :</th>
                                                            <td class="text-muted">
                                                                <?php if (!empty($profileData) && isset($profileData->register_as) && $profileData->register_as !== null && $profileData->register_as !== '') {
                                                                    echo $profileData->register_as;
                                                                } else {
                                                                    echo "No register as available";
                                                                } ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Full Name :</th>
                                                            <td class="text-muted">
                                                                <?php if (!empty($profileData) && isset($profileData->user_name) && $profileData->user_name !== null && $profileData->user_name !== '') {
                                                                    echo $profileData->user_name;
                                                                } else {
                                                                    echo "No user name available";
                                                                } ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Date of Birth :</th>
                                                            <td class="text-muted">
                                                                <?php if (!empty($profileData) && isset($profileData->user_name) && $profileData->user_name !== null && $profileData->user_name !== '') {
                                                                    echo $profileData->user_name;
                                                                } else {
                                                                    echo "No user name available";
                                                                } ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">E-mail :</th>
                                                            <td class="text-muted">
                                                                <?php if (!empty($profileData) && isset($profileData->email) && $profileData->email !== null && $profileData->email !== '') {
                                                                    echo $profileData->email;
                                                                } else {
                                                                    echo
                                                                    "No E-mail available";
                                                                } ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Contact Number :</th>
                                                            <td class="text-muted">
                                                                <?php if (!empty($profileData) && isset($profileData->contact_no) && $profileData->contact_no !== null && $profileData->contact_no !== '') {
                                                                    echo $profileData->contact_no;
                                                                } else {
                                                                    echo "No Mobile No. available";
                                                                } ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Experience :</th>
                                                            <td class="text-muted">
                                                                <?php if (!empty($profileData) && isset($profileData->experience) && $profileData->experience !== null && $profileData->experience !== '') {
                                                                    echo $profileData->experience;
                                                                } else {
                                                                    echo "No experience available";
                                                                } ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Core Competencies :</th>
                                                            <td class="text-muted">
                                                                <?php
                                                                if (!empty($profileData) && isset($profileData->core_competency) && $profileData->core_competency !== null && $profileData->core_competency !== '') {
                                                                    $coreCompetencies = json_decode($profileData->core_competency);
                                                                    if ($coreCompetencies !== null && !empty($coreCompetencies)) {
                                                                        foreach ($coreCompetencies as $competency) {
                                                                            echo $competency . "<br>";
                                                                        }
                                                                    } else {
                                                                        echo "No core competencies available";
                                                                    }
                                                                } else {
                                                                    echo "No core competencies available";
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Wrong attempt :</th>
                                                            <td class="text-muted">
                                                                <?php if (!empty($profileData) && isset($profileData->wrong_attempt) && $profileData->wrong_attempt !== null && $profileData->wrong_attempt !== '') {
                                                                    echo
                                                                    $profileData->wrong_attempt;
                                                                } else {
                                                                    echo "No wrong attempt available";
                                                                } ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Status :</th>
                                                            <td class="text-muted">
                                                                <?php if (!empty($profileData) && isset($profileData->is_active)) {
                                                                    $isActive = $profileData->is_active;
                                                                    echo $isActive == 1 ? '<span class="badge bg-primary">Active</span>' : ($isActive == 0 ? '
                                                                <span class="badge bg-danger">De-Active</span>' : 'Unknown status');
                                                                } else {
                                                                    echo '';
                                                                } ?>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th class="ps-0" scope="row">Joining Date</th>
                                                            <td class="text-muted">
                                                                <?php if (!empty($profileData) && isset($profileData->created_at) && $profileData->created_at !== null && $profileData->created_at !== '') {
                                                                    echo $profileData->created_at;
                                                                } else {
                                                                    echo "No joining date available";
                                                                } ?>
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
                        <div class="tab-pane fade" id="organization" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Organization</h5>
                                    <div class="table-responsive">
                                        <table class="table table-borderless mb-0">
                                            <tbody>
                                                <tr>
                                                    <th class="ps-0" scope="row">Organization Name :</th>
                                                    <td class="text-muted">
                                                        <?php if (!empty($profileData) && isset($profileData->organization_name) && $profileData->organization_name !== null && $profileData->organization_name !== '') {
                                                            echo $profileData->organization_name;
                                                        } else {
                                                            echo "No organization name available";
                                                        } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-0" scope="row">Potential Interest Areas :</th>
                                                    <td class="text-muted">
                                                        <?php
                                                        if (!empty($profileData) && isset($profileData->potential_interest_areas) && $profileData->potential_interest_areas !== null && $profileData->potential_interest_areas !== '') {
                                                            $potential_interest_areas = json_decode($profileData->potential_interest_areas);
                                                            if ($potential_interest_areas !== null && !empty($potential_interest_areas)) {
                                                                foreach ($potential_interest_areas as $potential_interest_areas) {
                                                                    echo $potential_interest_areas . "<br>";
                                                                }
                                                            } else {
                                                                echo "No potential interest areas available";
                                                            }
                                                        } else {
                                                            echo "No potential interest areas  available";
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-0" scope="row">Office Address :</th>
                                                    <td class="text-muted">
                                                        <?php if (!empty($profileData) && isset($profileData->office_address) && $profileData->office_address !== null && $profileData->office_address !== '') {
                                                            echo
                                                            $profileData->office_address;
                                                        } else {
                                                            echo "No office address available";
                                                        } ?>
                                                    </td>


                                                <tr>
                                                    <th class="ps-0" scope="row">Organisation HQ address</th>
                                                    <td class="text-muted">
                                                        <?php if (!empty($profileData) && isset($profileData->organisation_hq_address) && $profileData->organisation_hq_address !== null && $profileData->organisation_hq_address !== '') {
                                                            echo $profileData->organisation_hq_address;
                                                        } else {
                                                            echo "No organisation HQ address available";
                                                        } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-0" scope="row">Website URL of the organisation</th>
                                                    <td class="text-muted">
                                                        <?php if (!empty($profileData) && isset($profileData->website_url) && $profileData->website_url !== null && $profileData->website_url !== '') {
                                                            echo $profileData->website_url;
                                                        } else {
                                                            echo "No website url available";
                                                        } ?>
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
            </div>
        </div>
    </div>
</div>