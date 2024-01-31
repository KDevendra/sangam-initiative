<!DOCTYPE html>
<html <?php $options=themeCustomizerOptions(); ?>
   lang="en" data-layout="<?php echo (!empty($options->layout)) ? $options->layout : 'vertical'; ?>" data-topbar="<?php echo (!empty($options->topbar)) ? $options->topbar : 'light'; ?>" data-sidebar="<?php echo (!empty($options->sidebar))
      ? $options->sidebar : 'dark'; ?>" data-sidebar-size="<?php echo (!empty($options->sidebar_size)) ? $options->sidebar_size : 'lg'; ?>" data-sidebar-image="<?php echo (!empty($options->sidebar_image)) ? $options->sidebar_image : 'none';
      ?>" data-preloader="<?php echo (!empty($options->preloader)) ? $options->preloader : 'disable'; ?>" data-theme="<?php echo (!empty($options->theme)) ? $options->theme : 'default'; ?>" data-theme-colors="<?php echo (!empty($options->theme_colors))
      ? $options->theme_colors : 'default'; ?>" >
   <head>
      <meta charset="utf-8" />
      <title>Dashboard</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
      <meta content="Themesbrand" name="author" />
      <link rel="shortcut icon" href="<?php echo base_url('');?>include/admin/images/favicon.ico" />
      <link href="<?php echo base_url('');?>include/admin/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url('');?>include/admin/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
      <script src="<?php echo base_url('');?>include/admin/js/layout.js"></script>
      <link href="<?php echo base_url('');?>include/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url('');?>include/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url('');?>include/admin/css/app.min.css" rel="stylesheet" type="text/css" />
              <link href="<?php echo base_url('');?>include/admin/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
          <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
          
                  <script src="<?php echo base_url('');?>include/admin/libs/sweetalert2/sweetalert2.min.js"></script>
        <script src="<?php echo base_url('');?>include/admin/js/pages/sweetalerts.init.js"></script>
   </head>
   <body>