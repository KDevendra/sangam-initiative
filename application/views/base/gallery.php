<?php include_once __DIR__ . '/../common/header.php'; ?>
<section class="page-title-area text-white bg_cover mt___147" style="background-image: url('<?php echo base_url(); ?>include/web/custom/About_Banner.jpg');">
    <div class="container">
        <div class="page-title-inner text-center">
            <h1 class="page-title">Gallery</h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="<?php echo base_url(''); ?>">Home</a></span><span class="separator"></span><span class="breadcrumb-entry active">Gallery</span>
            </div>
        </div>
    </div>
</section>
<section class="gallery-section pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="project-filter mb-50 d-flex justify-content-center">
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".delhi">Delhi</li>
                    <li data-filter=".bangalore">Bangalore</li>
                    <li data-filter=".hyderabad">Hyderabad</li>
                </ul>
            </div>
        </div>
        <div class="row gallery-active">
            <?php
          $filteredImages = [];
          foreach ($galleryImages as $list) {
              $imagePath = $list['file_path'];
              if (file_exists($imagePath)) {
                  $location = $list['location'];
                  $event_name = $list['event_name'];
                  $filteredImages[] = ['file_path' =>  $imagePath, 'alt_text' => $imagePath, 'location' => $location, 'event_name'=>$event_name, ]; } } foreach ($filteredImages as $image): ?>
            <div class="col-md-3 item <?= strtolower($image['location']);?>">
                <div class="single-project-item mb-30 wow fadeInLeft popup-gallery">
                    <div class="project-img">
                        <a href="<?= $image['file_path']; ?>" title="<?= $image['event_name']; ?>"><img src="<?= $image['file_path']; ?>" /></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php include_once __DIR__ . '/../common/footer.php'; ?>
