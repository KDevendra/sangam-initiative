<div class="page-content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
               <h4 class="mb-sm-0"><?php
               $segment = $this->uri->segment(1);
               $segmentWithSpaces = str_replace('-', ' ', $segment);
               echo ucwords($segmentWithSpaces);
               ?></h4>
               <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                     <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                     <li class="breadcrumb-item active"><?php
                     $segment = $this->uri->segment(1);
                     $segmentWithSpaces = str_replace('-', ' ', $segment);
                     echo ucwords($segmentWithSpaces);
                     ?></li>
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
                  <h4 class="card-title mb-0">Media Section</h4>
               </div>
               <div class="card-body form-steps">
                  <form class="vertical-navs-step" action="<?php echo base_url('submit-media'); ?>" method="post" enctype="multipart/form-data" >
                     <input type="hidden" name="media_id" value="<?php if (!empty($mediaDetail->media_id)) {
                         echo $mediaDetail->media_id;
                     } ?>">
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
                                          <!-- <div class="col-sm-4">
                                             <label for="firstName" class="form-label">Status</label>
                                             <?php if ($mediaDetail->status === '1') { ?>
                                             <p><span class="badge bg-info">Pending</span></p>
                                           <?php } elseif ($mediaDetail->status === '2') { ?>
                                             <p><span class="badge bg-success">Approved</span></p>
                                             <?php } else { ?>
                                             <p><span class="badge bg-danger">Rejected</span></p>
                                             <?php } ?>
                                          </div> -->
                                          <?php } ?>
                                          <div class="col-sm-4">
                                             <label for="firstName" class="form-label">
                                                Title <?php if (isset($flag) && $flag === 'view') { ?>
                                                <?php } else { ?>
                                                <span class="text-danger">*</span>
                                                <?php } ?>
                                             </label>
                                             <?php if (isset($flag) && $flag === 'view') { ?>
                                             <p><?php echo $mediaDetail->title; ?></p>
                                             <?php } else { ?>
                                             <input type="text"  class="form-control" id="title" name="title" placeholder="Enter title" value="<?php if (isset($mediaDetail->title)) {
                                                 echo $mediaDetail->title;
                                             } ?>" />
                                             <?php } ?>
                                          </div>
                                          <div class="col-sm-4">
                                             <label for="firstName" class="form-label">Title Link </label>
                                             <?php if (isset($flag) && $flag === 'view') { ?>
                                             <p>
                                                <?php if (isset($mediaDetail->title_link) && !empty($mediaDetail->title_link)) {
                                                    echo "<a href='" . $mediaDetail->title_link . "' target='_blank'>View Link</a>";
                                                } ?>
                                             </p>
                                             <?php } else { ?>
                                             <input type="text"  class="form-control" id="title_link" name="title_link" placeholder="Enter title link" value="<?php if (isset($mediaDetail->title_link)) {
                                                 echo $mediaDetail->title_link;
                                             } ?>" />
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
                                             <p><?php echo $mediaDetail->sub_title; ?></p>
                                             <?php } else { ?>
                                             <input type="text"  class="form-control" id="sub_title" name="sub_title" placeholder="Enter sub title" value="<?php if (isset($mediaDetail->sub_title)) {
                                                 echo $mediaDetail->sub_title;
                                             } ?>" />
                                             <?php } ?>
                                          </div>


                                          <div class="col-sm-4">
                                             <label for="link" class="form-label">Facebook link</label>
                                             <?php if (isset($flag) && $flag === 'view') { ?>
                                             <p>
                                                <?php if (isset($mediaDetail->facebook_link) && !empty($mediaDetail->facebook_link)) {
                                                    echo "<a href='" . $mediaDetail->facebook_link . "' target='_blank'>View Link</a>";
                                                } ?>
                                             </p>
                                             <?php } else { ?>
                                             <input type="text"  class="form-control" id="facebook_link" name="facebook_link" placeholder="Enter link URL"  value="<?php if (isset($mediaDetail->facebook_link)) {
                                                 echo $mediaDetail->facebook_link;
                                             } ?>" />
                                             <?php } ?>
                                          </div>


                                          <div class="col-sm-4">
                                             <label for="link" class="form-label">Instagram Link</label>
                                             <?php if (isset($flag) && $flag === 'view') { ?>
                                             <p>
                                                <?php if (isset($mediaDetail->instagram_link) && !empty($mediaDetail->instagram_link)) {
                                                    echo "<a href='" . $mediaDetail->instagram_link . "' target='_blank'>View Link</a>";
                                                } ?>
                                             </p>
                                             <?php } else { ?>
                                             <input type="text"  class="form-control" id="instagram_link" name="instagram_link" placeholder="Enter link URL"  value="<?php if (isset($mediaDetail->instagram_link)) {
                                                 echo $mediaDetail->instagram_link;
                                             } ?>" />
                                             <?php } ?>
                                          </div>

                                          <div class="col-sm-4">
                                             <label for="link" class="form-label">Linkedin Link</label>
                                             <?php if (isset($flag) && $flag === 'view') { ?>
                                             <p>
                                                <?php if (isset($mediaDetail->linkedin_link) && !empty($mediaDetail->linkedin_link)) {
                                                    echo "<a href='" . $mediaDetail->linkedin_link . "' target='_blank'>View Link</a>";
                                                } ?>
                                             </p>
                                             <?php } else { ?>
                                             <input type="text"  class="form-control" id="linkedin_link" name="linkedin_link" placeholder="Enter link URL"  value="<?php if (isset($mediaDetail->linkedin_link)) {
                                                 echo $mediaDetail->linkedin_link;
                                             } ?>" />
                                             <?php } ?>
                                          </div>

                                          <div class="col-sm-4">
                                             <label for="link" class="form-label">PIB Link</label>
                                             <?php if (isset($flag) && $flag === 'view') { ?>
                                             <p>
                                                <?php if (isset($mediaDetail->pid_link) && !empty($mediaDetail->pid_link)) {
                                                    echo "<a href='" . $mediaDetail->pid_link . "' target='_blank'>View Link</a>";
                                                } ?>
                                             </p>
                                             <?php } else { ?>
                                             <input type="text"  class="form-control" id="pid_link" name="pid_link" placeholder="Enter link URL"  value="<?php if (isset($mediaDetail->pid_link)) {
                                                 echo $mediaDetail->pid_link;
                                             } ?>" />
                                             <?php } ?>
                                          </div>

                                          <div class="col-sm-4">
                                             <label for="link" class="form-label">Youtube Link</label>
                                             <?php if (isset($flag) && $flag === 'view') { ?>
                                             <p>
                                                <?php if (isset($mediaDetail->youtube_link) && !empty($mediaDetail->youtube_link)) {
                                                    echo "<a href='" . $mediaDetail->youtube_link . "' target='_blank'>View Link</a>";
                                                } ?>
                                             </p>
                                             <?php } else { ?>
                                             <input type="text"  class="form-control" id="youtube_link" name="youtube_link" placeholder="Enter link URL"  value="<?php if (isset($mediaDetail->youtube_link)) {
                                                 echo $mediaDetail->youtube_link;
                                             } ?>" />
                                             <?php } ?>
                                          </div>
                                          <div class="col-sm-4">
                                             <label for="link" class="form-label">Other</label>
                                             <?php if (isset($flag) && $flag === 'view') { ?>
                                             <p><?php echo $mediaDetail->custom_title; ?></p>
                                             <?php } else { ?>
                                             <input type="text"  class="form-control" id="custom_title" name="custom_title" placeholder="Enter Other"  value="<?php if (isset($mediaDetail->custom_title)) {
                                                 echo $mediaDetail->custom_title;
                                             } ?>" />
                                             <?php } ?>
                                          </div>
                                          <div class="col-sm-4">
                                             <label for="link" class="form-label">Other Link</label>
                                             <?php if (isset($flag) && $flag === 'view') { ?>
                                             <p>
                                                <?php if (isset($mediaDetail->custom_title_link) && !empty($mediaDetail->custom_title_link)) {
                                                    echo "<a href='" . $mediaDetail->custom_title_link . "' target='_blank'>View Link</a>";
                                                } ?>
                                             </p>
                                             <?php } else { ?>
                                             <input type="text"  class="form-control" id="custom_title_link" name="custom_title_link" placeholder="Enter link URL"  value="<?php if (isset($mediaDetail->custom_title_link)) {
                                                 echo $mediaDetail->custom_title_link;
                                             } ?>" />
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
                                                <?php if (isset($list->image) && strpos($list->image, "Error") !== false) {
                                                    echo "Error: The image contains the substring 'Error'.";
                                                } elseif (isset($mediaDetail->image) && !empty($mediaDetail->image)) {
                                                    $fileLink = base_url('uploads/media_image/') . $mediaDetail->image;

                                                    echo "<a href='" . $fileLink . "' target='_blank'>View File</a>";
                                                } else {
                                                    echo "No image available.";
                                                } ?>
                                             </p>
                                             <?php } else { ?>
                                             <input type="file"  class="form-control" id="media_image" name="media_image"  />
                                             <?php if (isset($flag) && $flag === 'edit' && !empty($mediaDetail->image)) { ?>
                                             <a target="_blank" href="<?php echo base_url('uploads/media_image/') . $mediaDetail->image; ?>">View File</a>
                                             <?php } ?>
                                             <?php } ?>
                                          </div>
                                       </div>
                                    </div>
                                    <?php if (isset($flag) && $flag === 'view') {
                                    } else {
                                         ?>
                                    <div class="d-flex justify-content-center gap-3 mt-4">
                                       <button type="submit" class="btn btn-primary">Save Details</button>
                                    </div>
                                    <?php
                                    } ?>
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
