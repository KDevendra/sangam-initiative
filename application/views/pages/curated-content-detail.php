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
         <div id="custom-progress-bar"></div>
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header text-center">
                  <h4 class="card-title mb-0">Curated Content</h4>
               </div>
               <div class="card-body form-steps">
                  <form class="vertical-navs-step" action="<?php echo base_url('submit-curated-content');?>" method="post" enctype="multipart/form-data" >
                     <input type="hidden" name="cc_id" value="<?php if (!empty($curatedContentDetail->cc_id)) {
                        echo  $curatedContentDetail->cc_id;
                        }?>">
                     <div class="row gy-5">
                        <div class="col-lg-12">
                           <div class="px-lg-4">
                              <div class="tab-content">
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
                                 <div class="tab-pane fade active show" id="personal-information" role="tabpanel" aria-labelledby="personal-information-tab">
                                    <div>
                                       <div class="row g-3">
                                          <?php if (isset($flag) && $flag === 'view') { ?>
                                          <div class="col-sm-4">
                                             <label for="firstName" class="form-label">Status</label>
                                             <?php if ($curatedContentDetail->status === '1') { ?>
                                             <p><span class="badge bg-info">Pending</span></p>
                                             <?php } else if ($curatedContentDetail->status === '2') { ?>
                                             <p><span class="badge bg-success">Approved</span></p>
                                             <?php } else { ?>
                                             <p><span class="badge bg-danger">Rejected</span></p>
                                             <?php } ?>
                                          </div>
                                          <?php } ?>
                                          <div class="col-sm-4">
                                             <label for="firstName" class="form-label">
                                                Title <?php if (isset($flag) && $flag === 'view') { ?>
                                                <?php } else { ?>
                                                <span class="text-danger">*</span>
                                                <?php } ?>
                                             </label>
                                             <?php if (isset($flag) && $flag === 'view') { ?>
                                             <p><?php echo $curatedContentDetail->title; ?></p>
                                             <?php } else { ?>
                                             <input type="text"  class="form-control" id="title" name="title" placeholder="Enter title" value="<?php if (isset($curatedContentDetail->title)) {
                                                echo  $curatedContentDetail->title;
                                                }; ?>" />
                                             <?php } ?>
                                          </div>
                                          <div class="col-sm-4">
                                             <label for="firstName" class="form-label">Title Link </label>
                                             <?php if (isset($flag) && $flag === 'view') { ?>
                                             <p>
                                                <?php
                                                   if (isset($curatedContentDetail->title_link) && !empty($curatedContentDetail->title_link)) {
                                                       echo "<a href='" . $curatedContentDetail->title_link . "' target='_blank'>View Link</a>";
                                                   }
                                                   ?>
                                             </p>
                                             <?php } else { ?>
                                             <input type="text"  class="form-control" id="title_link" name="title_link" placeholder="Enter Title Link" value="<?php if (isset($curatedContentDetail->title_link)) {
                                                echo  $curatedContentDetail->title_link;
                                                }; ?>" />
                                             <?php } ?>
                                          </div>
                                          <div class="col-sm-4">
                                             <label for="sub_title" class="form-label">
                                                Sub Title <?php if (isset($flag) && $flag === 'view') { ?>
                                                <?php } else { ?>
                                                <span class="text-danger">*</span>
                                                <?php } ?>
                                             </label>
                                             <?php if (isset($flag) && $flag === 'view') { ?>
                                             <p><?php echo $curatedContentDetail->sub_title; ?></p>
                                             <?php } else { ?>
                                             <input type="text"  class="form-control" id="sub_title" name="sub_title" placeholder="Enter sub title" value="<?php if (isset($curatedContentDetail->sub_title)) {
                                                echo  $curatedContentDetail->sub_title;
                                                }; ?>" />
                                             <?php } ?>
                                          </div>
                                          <div class="col-sm-4">
                                             <label for="link" class="form-label">Custom</label>
                                             <?php if (isset($flag) && $flag === 'view') { ?>
                                             <p><?php echo $curatedContentDetail->custom_title; ?></p>
                                             <?php } else { ?>
                                             <input type="text"  class="form-control" id="custom_title" name="custom_title" placeholder="Enter Link URL"  value="<?php if (isset($curatedContentDetail->custom_title)) {
                                                echo  $curatedContentDetail->custom_title;
                                                }; ?>" />
                                             <?php } ?>
                                          </div>
                                          <div class="col-sm-4">
                                             <label for="link" class="form-label">Custom Link</label>
                                             <?php if (isset($flag) && $flag === 'view') { ?>
                                             <p>
                                                <?php
                                                   if (isset($curatedContentDetail->custom_title_link) && !empty($curatedContentDetail->custom_title_link)) {
                                                       echo "<a href='" . $curatedContentDetail->custom_title_link . "' target='_blank'>View Link</a>";
                                                   }
                                                   ?>
                                             </p>
                                             <?php } else { ?>
                                             <input type="text"  class="form-control" id="custom_title_link" name="custom_title_link" placeholder="Enter Link URL"  value="<?php if (isset($curatedContentDetail->custom_title_link)) {
                                                echo  $curatedContentDetail->custom_title_link;
                                                }; ?>" />
                                             <?php } ?>
                                          </div>
                                          <div class="col-sm-4">
                                             <label for="image" class="form-label">
                                                Image <?php if (isset($flag) && $flag === 'view') { ?>
                                                <?php } else { ?>
                                                <span class="text-danger">*</span>
                                                <?php } ?>
                                             </label>
                                             <?php if (isset($flag) && $flag === 'view') { ?>
                                             <p>
                                                <?php
                                                if (isset($list->image) && strpos($list->image, "Error") !== false) {
                                                    
                                                        echo "Error: The image contains the substring 'Error'.";
                                                    } elseif (isset($curatedContentDetail->image) && !empty($curatedContentDetail->image)) {

                                                        $fileLink = base_url('uploads/cc_image/') . $curatedContentDetail->image;

                                                        echo "<a href='" . $fileLink . "' target='_blank'>View File</a>";
                                                    } else {

                                                        echo "No image available.";
                                                    }
                                                   ?>
                                             </p>
                                             <?php } else { ?>
                                             <input type="file"  class="form-control" id="cc_image" name="cc_image"  />
                                             <?php if (isset($flag) && $flag === 'edit' && !empty($curatedContentDetail->image))
                                                {
                                                ?>
                                             <a target="_blank" href="<?php echo base_url('uploads/cc_image/').$curatedContentDetail->image;?>">View File</a>
                                             <?php
                                                }?>
                                             <?php } ?>
                                          </div>
                                       </div>
                                    </div>
                                    <?php if (isset($flag) && $flag === 'view') {
                                       } else { ?>
                                    <div class="d-flex justify-content-center gap-3 mt-4">
                                       <button type="submit" class="btn btn-primary">Save Details</button>
                                    </div>
                                    <?php } ?>
                                 </div>
                              </div>
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
