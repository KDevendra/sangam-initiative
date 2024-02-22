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
                        <h4 class="card-title mb-0">Detail of Submitted Speaker Request</h4>
                    </div>
                    <div class="card-body form-steps">
                        <form action="<?= base_url('submit-submit-use-cases/') . $flag . ($flag === 'edit' ? "/" . $clientDetail->case_id : '') ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-4 mt-3">
                                    <label for="useCaseTitle">Full Name </label>
                                    <?php if (isset($flag) && $flag === 'view') { ?>
                                        <p><?php echo $userDetail->full_name; ?></p>
                                    <?php } ?>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <label for="abstract">Email Address </label>
                                    <?php if (isset($flag) && $flag === 'view') { ?>
                                        <p><?php echo $userDetail->email; ?></p>
                                    <?php } ?>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label for="objective">Phone Number </label>
                                    <?php if (isset($flag) && $flag === 'view') { ?>
                                        <p><?php echo $userDetail->phone_number; ?></p>
                                    <?php }  ?>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label for="targetArea">Previous Speaking Experience</label>
                                    <?php if (isset($flag) && $flag === 'view') { ?>
                                        <p><?php echo $userDetail->previous_speaking_experience; ?></p>
                                    <?php } ?>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label for="relevance">Additional Information</label>
                                    <?php if (isset($flag) && $flag === 'view') { ?>
                                        <p><?php echo $userDetail->additional_information; ?></p>
                                    <?php }  ?>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label for="technologies">Title of the Topic</label>
                                    <?php if (isset($flag) && $flag === 'view') { ?>
                                        <p><?php echo $userDetail->topic_title; ?></p>
                                    <?php } ?>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label for="dataSources">Topic Details</label>
                                    <?php if (isset($flag) && $flag === 'view') { ?>
                                        <p><?php echo $userDetail->topic_details; ?></p>
                                    <?php }?>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label for="expectedOutcomes">Upload Photo</label>
                                    <?php if (isset($flag) && $flag === 'view') { ?>
                                      <?php
                                      if(!empty($userDetail->photo_upload))
                                      {
                                        ?>
                                        <p>  <a target="_blank" href="<?php echo base_url('uploads/photo_upload/').$userDetail->photo_upload;?>">View File</a></p>
                                      <?php
                                    }
                                      else
                                      {
                                        echo "No file uploaded";
                                      }

                                      ?>
                                    <?php }  ?>
                                </div>


                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
