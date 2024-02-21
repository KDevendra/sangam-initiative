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
                        <h4 class="card-title mb-0">Report a Problem</h4>
                    </div>
                    <div class="card-body form-steps">
                        <form action="<?= base_url('submit-report-issue/add');?>" method="post" enctype="multipart/form-data">
                          <div class="alert alert-warning alert-dismissible fade show material-shadow text-center" role="alert">
                              Help us improve your experience! If you encounter any issues while using our website, please report them here. Your feedback is invaluable in ensuring a smooth and seamless user experience for everyone
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>

                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label for="useCaseTitle">Issue Title <span class="text-danger">*</span></label>
                                    <?php if (isset($flag) && $flag === 'view') { ?>
                                        <p><?php echo $userDetail->issue_title; ?></p>
                                    <?php } else { ?>
                                        <input type="text" class="form-control" placeholder="Enter issue title" id="issue_title" name="issue_title">
                                    <?php } ?>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="useCaseTitle">Reported By <span class="text-danger">*</span></label>
                                    <?php if (isset($flag) && $flag === 'view') { ?>
                                        <p><?php echo $userDetail->reported_by; ?></p>
                                    <?php } else { ?>
                                        <input type="text" class="form-control" readonly placeholder="Enter User Id"  value="<?php echo $this->session->login['user_id'];?>" id="reported_by" name="reported_by">
                                    <?php } ?>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="abstract">Issue Description <span class="text-danger">*</span></label>
                                    <?php if (isset($flag) && $flag === 'view') { ?>
                                        <p><?php echo $userDetail->issue_description; ?></p>
                                    <?php } else { ?>
                                        <textarea class="form-control" rows="5" placeholder="Summarize issue in description" id="issue_description" name="issue_description"></textarea>
                                    <?php } ?>
                                </div>


                                <div class="col-md-12 mt-3">
                                    <div class="d-flex justify-content-center">
                                        <?php if (isset($flag) && $flag === 'view') { ?>

                                        <?php } else { ?>
                                            <button class="btn btn-primary" id="submitBtn">Report Issue</button>
                                        <?php } ?>

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
