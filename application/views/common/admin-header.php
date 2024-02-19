<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default" data-bs-theme="light" data-layout-width="fluid" data-layout-position="fixed" data-layout-style="default" data-body-image="none" data-sidebar-visibility="show">

<head>
   <meta charset="utf-8" />
   <title><?php if (isset($title) && !empty($title)) {
               echo $title;
            } else {
               echo "Sangam Initiative";
            } ?></title>
   <link rel="shortcut icon" href="<?php echo base_url(''); ?>include/web/custom/favicon.png" />
   <link href="<?php echo base_url(''); ?>include/admin/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url(''); ?>include/admin/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
   <script src="<?php echo base_url(''); ?>include/admin/js/layout.js"></script>
   <link href="<?php echo base_url(''); ?>include/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url(''); ?>include/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url(''); ?>include/admin/css/app.min.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url(''); ?>include/admin/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
   <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
   <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
   <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
   <link href="<?php echo base_url(''); ?>include/admin/css/custom.min.css" rel="stylesheet" type="text/css" />
   <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
   <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
   <script src="<?php echo base_url(''); ?>include/admin/libs/sweetalert2/sweetalert2.min.js"></script>
   <script src="<?php echo base_url(''); ?>include/admin/js/pages/sweetalerts.init.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
   <script src="<?php echo base_url(''); ?>include/admin/libs/moment/moment.js"></script>
</head>

<body class="twocolumn-panel">