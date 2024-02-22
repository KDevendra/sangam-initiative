<?php include_once __DIR__ . '/../common/header.php'; ?>
<section class="page-title-area text-white bg_cover mt___147" style="background-image: url('<?php echo base_url(); ?>include/web/custom/About_Banner.jpg');">
   <div class="container">
      <div class="page-title-inner text-center">
         <h1 class="page-title">Join as a Speaker</h1>
         <div class="gd-breadcrumb"><span class="breadcrumb-entry"><a href="<?php echo base_url(''); ?>">Home</a></span><span class="separator"></span><span class="breadcrumb-entry active">Join as a Speaker</span></div>
      </div>
   </div>
</section>
<section class="skills-section pt-50 pb-50">
   <div class="container">
      <div class="row align-items-lg-center">
         <div class="col-xl-12 col-lg-12">
            <div class="skill-content-box mb-35 mr-lg-50 text-center wow fadeInLeft" style="visibility: visible;">
               <div class="section-title mb-25">
                  <span class="sub-title"><img src="<?php echo base_url(''); ?>include/web/custom/technology.png" alt=""> Inspire, Educate, and Influence Audiences Globally</span>
                  <h2>Join as a Speaker: Share Your Expertise with the World</h2>
               </div>
               <p class="mb-30">Join our esteemed community of speakers and elevate your voice on topics that matter. Whether you're a seasoned expert or a rising star in your field, we provide a platform for you to share your knowledge, insights, and experiences with audiences worldwide. Take the stage, make an impact, and become a catalyst for change.
               <p>
            </div>
            <div class="contact-form-wrapper mb-50 wow fadeInRight" style="visibility: visible;">
              <?php if (!empty($this->session->flashdata('error'))) { ?>
                  <div class="alert alert-danger mb-50 alert-dismissible fade show material-shadow" role="alert">
                      <?php echo $this->session->flashdata('error'); ?>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              <?php } ?>
              <?php if (!empty($this->session->flashdata('success'))) { ?>
                  <div class="alert alert-success mb-50 alert-dismissible fade show material-shadow" role="alert">
                      <?php echo $this->session->flashdata('success'); ?>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              <?php } ?>
               <form class="contact-form" action="<?php echo base_url('submit-speaker-request')?>" method="post" enctype="multipart/form-data" >
                  <div class="row">
                     <div class="col-md-4"><label><i class="far fa-user"></i></label><input type="text" class="form_control" placeholder="Full Name" name="full_name" required=""></div>
                     <div class="col-md-4"><label><i class="far fa-envelope"></i></label><input type="email" class="form_control" placeholder="Email Address" name="email" required=""></div>
                     <div class="col-md-4"><label><i class="far fa-phone-plus"></i></label><input type="text" class="form_control" placeholder="Phone Number" name="phone_number" required="" autocomplete="off"></div>
                     <div class="col-md-4"><label><i class="far fa-tasks"></i></label><input type="text" class="form_control" placeholder="Previous Speaking Experience" name="previous_speaking_experience" ></div>
                     <div class="col-md-4"><label><i class="far fa-cogs"></i></label><input type="text" class="form_control" placeholder="Additional Information" name="additional_information" ></div>
                     <div class="col-md-4"><label><i class="far fa-sticky-note"></i></label><input type="text" class="form_control" placeholder="Title of the topic" name="topic_title" ></div>
                     <div class="col-md-4"><label><i class="far fa-comments"></i></label><input type="text" class="form_control" placeholder="Topic Details" name="topic_details" ></div>
                     <div class="col-md-4" style="padding: 0;"><label for="photo_upload" style="margin-top: -10px;">Upload Photo:</label><br><input style="padding: 0 0 5px 0;margin-top: -16px;" type="file" class="form_control" id="photo_upload" name="photo_upload" accept="image/*"></div>
                     <div class="col-md-12">
                       <div class="d-flex justify-content-center">
                          <button style="padding: 15px 30px;font-size: 18px;" class="main-btn primary-btn">Submit Request</button>
                       </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<script>
function updatePlaceholder(input) {
    if (input.files.length > 0) {
        input.setAttribute('placeholder', input.files[0].name);
    } else {
        input.setAttribute('placeholder', 'Upload Photo');
    }
}
</script>
<?php include_once __DIR__ . '/../common/footer.php'; ?>
