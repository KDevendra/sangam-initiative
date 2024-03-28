<?php include_once __DIR__ . '/../common/header.php'; ?>
<section class="page-title-area text-white bg_cover mt___147" style="background-image: url('<?php echo base_url(); ?>include/web/custom/About_Banner.jpg');">
   <div class="container">
      <div class="page-title-inner text-center">
         <h1 class="page-title">Media</h1>
         <div class="gd-breadcrumb">
            <span class="breadcrumb-entry"><a href="<?php echo base_url(''); ?>">Home</a></span><span class="separator"></span><span class="breadcrumb-entry active">Media</span>
         </div>
      </div>
   </div>
</section>
<section class="container pt-50 pb-50">
   <div class="row">
      <?php foreach ($media as $list): ?>
      <div class="col-md-4 mb-4">
         <div class="single-testimonial-item">
            <div class="testimonial-inner-content text-center">
               <div class="d-flex justify-content-center">
                  <img src="<?php if (isset($list['image']) && !empty($list['image'])) { echo base_url('uploads/media_image/') . $list['image'];}?>" alt="<?php if (isset($list['title']) && !empty($list['title'])) { echo $list['title'];}else{echo "";}?>">
               </div>
               <div class="quote-rating-box d-flex justify-content-center">
                  <div class="ratings-box">
                     <h5>
                     <a href="<?php if (isset($list['title_link']) && !empty($list['title_link'])) { echo $list['title_link'];}else{echo "javascript:void(0)";}?>" ><?php if (isset($list['title']) && !empty($list['title'])) { echo $list['title'];}else{echo "";}?></a></h6>
                     <p><b><?php if (isset($list['sub_title']) && !empty($list['sub_title'])) { echo $list['sub_title'];}else{echo "";}?></b> </p>
                  </div>
               </div>
               <div class="text-center">
                  <h6> <a href="<?php if (isset($list['custom_title_link']) && !empty($list['custom_title_link'])) { echo $list['custom_title_link'];}else{echo "";}?>" target="_blank"><?php if (isset($list['custom_title']) && !empty($list['custom_title'])) { echo $list['custom_title'];}else{echo "";}?></a> </h6>
               </div>
            </div>
            <div class="d-flex justify-content-center align-item-center" style="gap: 10px;">
               <?php if (isset($list['facebook_link']) && !empty($list['facebook_link'])) {?><a class="text-decoration-underline mt-20 text-danger d-flex justify-content-center align-items-center"  href="<?php if (isset($list['facebook_link']) && !empty($list['facebook_link'])) { echo $list['facebook_link'];}else{echo "";}?>" target="_blank"><img height="30px" src="<?php echo base_url('');?>include/web/custom/facebook.png" alt="<?php if (isset($list['title']) && !empty($list['title'])) { echo $list['title'];}else{echo "";}?>"></a>
               <?php
                  }else{echo "";}?>
                  <?php if (isset($list['instagram_link']) && !empty($list['instagram_link'])) {?><a class="text-decoration-underline mt-20 text-danger d-flex justify-content-center align-items-center"  href="<?php if (isset($list['instagram_link']) && !empty($list['instagram_link'])) { echo $list['instagram_link'];}else{echo "";}?>" target="_blank"><img height="30px" src="<?php echo base_url('');?>include/web/custom/instagram.png" alt="<?php if (isset($list['title']) && !empty($list['title'])) { echo $list['title'];}else{echo "";}?>"></a>
                  <?php
                     }else{echo "";}?>
                     <?php if (isset($list['linkedin_link']) && !empty($list['linkedin_link'])) {?><a class="text-decoration-underline mt-20 text-danger d-flex justify-content-center align-items-center"  href="<?php if (isset($list['linkedin_link']) && !empty($list['linkedin_link'])) { echo $list['linkedin_link'];}else{echo "";}?>" target="_blank"><img height="30px" src="<?php echo base_url('');?>include/web/custom/linkedin.png" alt="<?php if (isset($list['title']) && !empty($list['title'])) { echo $list['title'];}else{echo "";}?>"></a>
                     <?php
                        }else{echo "";}?>
                        <?php if (isset($list['pid_link']) && !empty($list['pid_link'])) {?><a class="text-decoration-underline mt-20 text-danger d-flex justify-content-center align-items-center"  href="<?php if (isset($list['pid_link']) && !empty($list['pid_link'])) { echo $list['pid_link'];}else{echo "";}?>" target="_blank"><img height="30px" src="<?php echo base_url('');?>include/web/custom/PIB.png" alt="<?php if (isset($list['title']) && !empty($list['title'])) { echo $list['title'];}else{echo "";}?>"></a>
                        <?php
                           }else{echo "";}?>
                           <?php if (isset($list['youtube_link']) && !empty($list['youtube_link'])) {?><a class="text-decoration-underline mt-20 text-danger d-flex justify-content-center align-items-center"  href="<?php if (isset($list['youtube_link']) && !empty($list['youtube_link'])) { echo $list['youtube_link'];}else{echo "";}?>" target="_blank"><img height="30px" src="<?php echo base_url('');?>include/web/custom/youtube.png" alt="<?php if (isset($list['title']) && !empty($list['title'])) { echo $list['title'];}else{echo "";}?>"></a>
                           <?php
                              }else{echo "";}?>


            </div>
         </div>
      </div>
      <?php endforeach; ?>
   </div>
</section>
<?php include_once __DIR__ . '/../common/footer.php'; ?>
