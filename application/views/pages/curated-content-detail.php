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
                  <form class="vertical-navs-step" action="<?php echo base_url('submit-curated-content'); ?>" method="post" enctype="multipart/form-data">
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
                                          <div class="col-sm-3">
                                             <label for="firstName" class="form-label">Title <span class="text-danger">*</span></label>
                                             <input type="text"  class="form-control" id="title" name="title" placeholder="Enter title" value="<?php if (isset($userDetail->title)) {
                                                echo  $userDetail->title;
                                                }; ?>" />
                                          </div>
                                          <div class="col-sm-3">
                                             <label for="sub_title" class="form-label">Sub Title</label>
                                             <input type="text"  class="form-control" id="sub_title" name="sub_title" placeholder="Enter sub title" value="<?php if (isset($userDetail->sub_title)) {
                                                echo  $userDetail->sub_title;
                                                }; ?>" />
                                          </div>
                                          <div class="col-sm-3">
                                             <label for="image" class="form-label">Image</label>
                                             <input type="file"  class="form-control" id="image" name="image"  />
                                          </div>
                                          <div class="col-sm-3">
                                             <label for="link" class="form-label">Link</label>
                                             <input type="url"  class="form-control" id="link" name="link" placeholder="Enter Link URL"  value="<?php if (isset($userDetail->link)) {
                                                echo  $userDetail->link;
                                                }; ?>" />
                                          </div>
                                          <div class="col-sm-12">
                                              <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                                              <textarea name="content" id="content"><?php if (isset($userDetail->content)) {echo $userDetail->content;}; ?></textarea>
                                          </div>

                                       </div>
                                    </div>
                                    <div class="d-flex align-items-start gap-3 mt-4">
                                       <button type="submit" class="btn btn-primary">Save Details</button>
                                    </div>
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
<script>
  ClassicEditor
    .create( document.querySelector( '#content' ) )
    .then( content => {
      console.log( content );
    } )
    .catch( error => {
      console.error( error );
    } );
</script>
