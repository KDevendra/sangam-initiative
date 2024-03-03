<?php include_once __DIR__ . '/../common/header.php'; ?>
<section class="page-title-area text-white bg_cover mt___147" style="background-image: url('<?php echo base_url(); ?>include/web/custom/About_Banner.jpg');">
   <div class="container">
      <div class="page-title-inner text-center">
         <h1 class="page-title">Curated Content</h1>
         <div class="gd-breadcrumb"><span class="breadcrumb-entry"><a href="<?php echo base_url(''); ?>">Home</a></span><span class="separator"></span><span class="breadcrumb-entry active">Curated Content</span></div>
      </div>
   </div>
</section>
<section class="blog-details-section pt-50 pb-50">
   <div class="container">
      <div class="row">
         <div class="col-xl-12 col-lg-12">
            <div class="blog-details-wrapper">
               <div class="blog-post wow fadeInUp">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="entry-content text-center">
                          <?php if (!empty($curatedContentDetail->image)): ?>
                             <img src="<?php echo base_url('uploads/cc_image/' . $curatedContentDetail->image); ?>" alt="<?php echo $curatedContentDetail->title;?>">
                          <?php endif; ?>

                           <h3 class="mt-2"><?php echo $curatedContentDetail->title;?></h3>
                           <h5 class="mt-2"><?php echo $curatedContentDetail->sub_title;?></h5>
                           <?php if (!empty($curatedContentDetail->link)): ?>
                           <a class="pb-2 btn-link" target="_blank" href="<?php echo $curatedContentDetail->link?>">View Link</a>
                           <?php endif; ?>
                           <?php echo $curatedContentDetail->content;?>
                           <!-- <div class="d-flex justify-content-center">
                              <div class="post-meta">
                                 <span class="author"><span>Author:</span> <?php echo $curatedContentDetail->author_name;?></span>
                                 <span class="date"><span>Post Date:</span> <?php
                                    $dateString = $curatedContentDetail->created_at;
                                    $date = new DateTime($dateString);
                                    echo $date->format('d F Y');
                                    ?>
                                 </span>
                              </div>
                           </div> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php include_once __DIR__ . '/../common/footer.php'; ?>
