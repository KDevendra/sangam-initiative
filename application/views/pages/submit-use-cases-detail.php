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
                        <h4 class="card-title mb-0">Suggest Use Case: Digital Twin - Sangam Project</h4>
                    </div>
                    <div class="card-body form-steps">
                        <form action="<?= base_url('submit-submit-use-cases/') . $flag . ($flag === 'edit' ? "/" . $clientDetail->case_id : '') ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-4 mt-3">
                                    <label for="useCaseTitle">Title of the Use Case <span class="text-danger">*</span></label>
                                    <?php if (isset($flag) && $flag === 'view') { ?>
                                        <p><?php echo $userDetail->title; ?></p>
                                    <?php } else { ?>
                                        <input type="text" class="form-control" placeholder="Enter a concise and descriptive title" id="useCaseTitle" name="title">
                                    <?php } ?>
                                </div>
                                <div class="<?php if (isset($flag) && $flag === 'view') {echo "col-md-12";} else {echo "col-md-4";}?> mt-3">
                                    <label for="abstract">Abstract <span class="text-danger">*</span></label>
                                    <?php if (isset($flag) && $flag === 'view') { ?>
                                        <p><?php echo $userDetail->abstract; ?></p>
                                    <?php } else { ?>
                                        <textarea class="form-control" rows="1" placeholder="Summarize the core idea and purpose briefly" id="abstract" name="abstract"></textarea>
                                    <?php } ?>
                                </div>
                                <div class="<?php if (isset($flag) && $flag === 'view') {echo "col-md-12";} else {echo "col-md-4";}?> mt-3">
                                    <label for="objective">Objective <span class="text-danger">*</span></label>
                                    <?php if (isset($flag) && $flag === 'view') { ?>
                                        <p><?php echo $userDetail->objective; ?></p>
                                    <?php } else { ?>
                                        <input type="text" class="form-control" placeholder="Clearly define the objective or problem to address" id="objective" name="objective">
                                    <?php } ?>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label for="targetArea">Target Area</label>
                                    <?php if (isset($flag) && $flag === 'view') { ?>
                                        <p><?php echo $userDetail->target_areas; ?></p>
                                    <?php } else { ?>
                                        <textarea class="form-control" rows="1" placeholder="Identify specific areas of application" id="targetArea" name="target_areas"></textarea>
                                    <?php } ?>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label for="relevance">Relevance to Sangam Initiative</label>
                                    <?php if (isset($flag) && $flag === 'view') { ?>
                                        <p><?php echo $userDetail->relevance; ?></p>
                                    <?php } else { ?>
                                        <textarea class="form-control" rows="1" placeholder="Explain alignment with Sangam Initiative goals" id="relevance" name="relevance"></textarea>
                                    <?php } ?>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label for="technologies">Technologies Utilized</label>
                                    <?php if (isset($flag) && $flag === 'view') { ?>
                                        <p><?php echo $userDetail->technologies_used; ?></p>
                                    <?php } else { ?>
                                        <input type="text" class="form-control" placeholder="List key technologies used in the use case" id="technologies" name="technologies_used">
                                    <?php } ?>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label for="dataSources">Data Sources</label>
                                    <?php if (isset($flag) && $flag === 'view') { ?>
                                        <p><?php echo $userDetail->data_sources; ?></p>
                                    <?php } else { ?>
                                        <textarea class="form-control" rows="1" placeholder="Describe data sources and any requirements" id="dataSources" name="data_sources"></textarea>
                                    <?php } ?>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label for="expectedOutcomes">Expected Outcomes</label>
                                    <?php if (isset($flag) && $flag === 'view') { ?>
                                        <p><?php echo $userDetail->expected_outcomes; ?></p>
                                    <?php } else { ?>
                                        <textarea class="form-control" rows="1" placeholder="Outline anticipated results and impact" id="expectedOutcomes" name="expected_outcomes"></textarea>
                                    <?php } ?>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label for="innovativeAspects">Innovative Aspects</label>
                                    <?php if (isset($flag) && $flag === 'view') { ?>
                                        <p><?php echo $userDetail->innovative_aspects; ?></p>
                                    <?php } else { ?>
                                        <textarea class="form-control" rows="1" placeholder="Highlight unique features or approaches" id="innovativeAspects" name="innovative_aspects"></textarea>
                                    <?php } ?>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label for="challenges">Feasibility and Challenges</label>
                                    <?php if (isset($flag) && $flag === 'view') { ?>
                                        <p><?php echo $userDetail->feasibility_and_challenges; ?></p>
                                    <?php } else { ?>
                                        <textarea class="form-control" rows="1" placeholder="Discuss feasibility and potential challenges" id="challenges" name="feasibility_and_challenges"></textarea>
                                    <?php } ?>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label for="uploadRelevantDocument">  Upload Relevant Document  <span class="text-danger">(PDF & Max Size:2MB)</span></label>

                                    <?php if (isset($flag) && $flag === 'view') { ?>
                                      <?php
                                      if (isset($userDetail->upload_relevant_document) && strpos($userDetail->upload_relevant_document, "Error") !== false) {

                                              echo "Error: The upload_relevant_document contains the substring 'Error'.";
                                          } elseif (isset($userDetail->upload_relevant_document) && !empty($userDetail->upload_relevant_document)) {

                                              $fileLink = base_url('uploads/upload_relevant_document/') . $userDetail->upload_relevant_document;

                                              echo "<a href='" . $fileLink . "' target='_blank'>View File</a>";
                                          } else {

                                              echo "No upload_relevant_document available.";
                                          }

                                      ?>
                                    <?php } else { ?>
                                      <input type="file" name="upload_relevant_document" class="form-control">
                                    <?php } ?>
                                </div>

                                <div class="col-md-12 mt-3">
                                    <div class="d-flex justify-content-center">
                                        <?php if (isset($flag) && $flag === 'view') { ?>

                                        <?php } else { ?>
                                            <button class="btn btn-primary" id="submitBtn">Submit Case</button>
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
