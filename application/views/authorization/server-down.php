<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">
    <head>
        <meta charset="utf-8" />
        <title>Server Down</title>
        <link rel="shortcut icon" href="<?php echo base_url('');?>include/web/custom/favicon.png" />
        <script src="<?php echo base_url('');?>include/admin/js/layout.js"></script>
        <link href="<?php echo base_url('');?>include/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('');?>include/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('');?>include/admin/css/app.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('');?>include/admin/css/custom.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
            <div class="bg-overlay"></div>
            <div class="auth-page-content overflow-hidden pt-lg-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5">
                            <div class="card overflow-hidden card-bg-fill">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <img src="https://img.themesbrand.com/velzon/images/auth-offline.gif" alt="" height="210" />
                                        <h3 class="mt-4 fw-semibold">We're currently server down</h3>
                                        <p class="text-muted mb-4 fs-14">We can't show you this images because you aren't connected to the internet. When you’re back online refresh the page or hit the button below</p>
                                        <button class="btn btn-success btn-border" onClick="window.location.href=window.location.href"><i class="ri-refresh-line align-bottom"></i> Refresh</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url('');?>include/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url('');?>include/admin/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo base_url('');?>include/admin/libs/node-waves/waves.min.js"></script>
        <script src="<?php echo base_url('');?>include/admin/libs/feather-icons/feather.min.js"></script>
        <script src="<?php echo base_url('');?>include/admin/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="<?php echo base_url('');?>include/admin/js/plugins.js"></script>
    </body>
</html>
