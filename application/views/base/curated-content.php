<?php include_once __DIR__ . '/../common/header.php'; ?>
<section class="page-title-area text-white bg_cover mt___147" style="background-image: url('<?php echo base_url(); ?>include/web/custom/About_Banner.jpg');">
   <div class="container">
      <div class="page-title-inner text-center">
         <h1 class="page-title">Curated Content</h1>
         <div class="gd-breadcrumb"><span class="breadcrumb-entry"><a href="<?php echo base_url(''); ?>">Home</a></span><span class="separator"></span><span class="breadcrumb-entry active">Curated Content</span></div>
      </div>
   </div>
</section>
<section class="blog-details-section pt-100">
   <div class="container">
      <div class="row">
         <div class="col-xl-12 col-lg-12">
            <div class="blog-details-wrapper">
               <div class="blog-post wow fadeInUp">
                  <!-- <div class="post-meta">
                     <span class="author"><img src="assets/images/blog/author-thumb-4.jpg" alt="author"><a href="blog-details.html"><span>By</span> Michael</a></span>
                     <span class="date"><a href="blog-details.html">25 December 2022</a></span>
                     <span class="comment"><a href="blog-details.html">5 Comments</a></span>
                  </div> -->
                  <div class="row">
                      <div class="col-md-8">
                        <div class="entry-content">
                           <h3 class="title"><?php echo $curatedContentDetail->title;?></h3>
                           <?php echo $curatedContentDetail->content;?>
                        </div>
                      </div>
                      <div class="col-md-4">
                           <img src="<?php echo base_url('uploads/cc_image/' . $curatedContentDetail->image); ?>" alt="">
                      </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php include_once __DIR__ . '/../common/footer.php'; ?>
