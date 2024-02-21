<!DOCTYPE html>
<html  lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default" >
   <head>
      <meta charset="utf-8" />
      <title><?php if (isset($title) && !empty($title)) {echo $title; } else {echo "Sangam Initiative";} ?></title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="shortcut icon" href="<?php echo base_url(''); ?>include/web/custom/favicon.png" />
      <link href="<?php echo base_url(''); ?>include/admin/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url(''); ?>include/admin/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
      <script src="<?php echo base_url(''); ?>include/admin/js/layout.js"></script>
      <link href="<?php echo base_url(''); ?>include/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url(''); ?>include/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url(''); ?>include/admin/css/app.min.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url(''); ?>include/admin/css/custom.min.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url(''); ?>include/admin/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
      <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
      <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
      <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
      <script src="<?php echo base_url(''); ?>include/admin/libs/sweetalert2/sweetalert2.min.js"></script>
      <script src="<?php echo base_url(''); ?>include/admin/js/pages/sweetalerts.init.js"></script>
      <script src="<?php echo base_url(''); ?>include/admin/libs/moment/moment.js"></script>
   </head>
   <body>
      <div id="layout-wrapper">
         <header id="page-topbar">
            <div class="layout-width">
               <div class="navbar-header">
                  <div class="d-flex">
                     <div class="navbar-brand-box horizontal-logo">
                        <a href="<?php echo base_url('admin-dashboard')?>" class="logo logo-dark">
                        <span class="logo-sm">
                        <img src="<?php echo base_url('');?>include/web/custom/Department_Of_Telecommunications_White.png" alt="" />
                        </span>
                        <span class="logo-lg">
                        <img src="<?php echo base_url('');?>include/web/custom/Department_Of_Telecommunications_White.png" alt="" />
                        </span>
                        </a>
                        <a href="<?php echo base_url('admin-dashboard')?>" class="logo logo-light">
                        <span class="logo-sm">
                        <img src="<?php echo base_url('');?>include/web/custom/Department_Of_Telecommunications_White.png" alt=""  />
                        </span>
                        <span class="logo-lg">
                        <img src="<?php echo base_url('');?>include/web/custom/Department_Of_Telecommunications_White.png" alt=""  />
                        </span>
                        </a>
                     </div>
                     <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger material-shadow-none" id="topnav-hamburger-icon">
                     <span class="hamburger-icon">
                     <span></span>
                     <span></span>
                     <span></span>
                     </span>
                     </button>
                     <form class="app-search d-none d-md-block">
                        <div class="position-relative">
                           <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="" />
                           <span class="mdi mdi-magnify search-widget-icon"></span>
                           <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                           <div data-simplebar style="max-height: 320px;">
                              <div class="dropdown-header">
                                 <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                              </div>
                              <div class="dropdown-item bg-transparent text-wrap">
                                 <a href="<?php echo base_url('admin-dashboard')?>" class="btn btn-soft-secondary btn-sm rounded-pill">how to setup <i class="mdi mdi-magnify ms-1"></i></a>
                                 <a href="<?php echo base_url('admin-dashboard')?>" class="btn btn-soft-secondary btn-sm rounded-pill">buttons <i class="mdi mdi-magnify ms-1"></i></a>
                              </div>
                              <div class="dropdown-header mt-2">
                                 <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                              </div>
                              <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                              <span>Analytics Dashboard</span>
                              </a>
                              <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                              <span>Help Center</span>
                              </a>
                              <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                              <span>My account settings</span>
                              </a>
                              <div class="dropdown-header mt-2">
                                 <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                              </div>
                              <div class="notification-list">
                                 <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                    <div class="d-flex">
                                       <img src="<?php echo base_url('');?>include/admin/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic" />
                                       <div class="flex-grow-1">
                                          <h6 class="m-0">Angela Bernier</h6>
                                          <span class="fs-11 mb-0 text-muted">Manager</span>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                    <div class="d-flex">
                                       <img src="<?php echo base_url('');?>include/admin/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic" />
                                       <div class="flex-grow-1">
                                          <h6 class="m-0">David Grasso</h6>
                                          <span class="fs-11 mb-0 text-muted">Web Designer</span>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                    <div class="d-flex">
                                       <img src="<?php echo base_url('');?>include/admin/images/users/avatar-5.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic" />
                                       <div class="flex-grow-1">
                                          <h6 class="m-0">Mike Bunch</h6>
                                          <span class="fs-11 mb-0 text-muted">React Developer</span>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                           <div class="text-center pt-3 pb-1">
                              <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All Results <i class="ri-arrow-right-line ms-1"></i></a>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="d-flex align-items-center">
                     <div class="dropdown d-md-none topbar-head-dropdown header-item">
                        <button type="button" class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-search fs-22"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                           <form class="p-3">
                              <div class="form-group m-0">
                                 <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username" />
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="ms-1 header-item d-none d-sm-flex">
                        <button type="button" class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                        <i class="bx bx-fullscreen fs-22"></i>
                        </button>
                     </div>
                     <div class="ms-1 header-item d-none d-sm-flex">
                        <button type="button" class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class="bx bx-moon fs-22"></i>
                        </button>
                     </div>
                     <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                           <!-- <button type="button"
                           class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle"
                           id="page-header-notifications-dropdown"
                           data-bs-toggle="dropdown"
                           data-bs-auto-close="outside"
                           aria-haspopup="true"
                           aria-expanded="false"
                           >
                           <i class="bx bx-bell fs-22"></i>
                           <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">3<span class="visually-hidden">unread messages</span></span>
                           </button> -->
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                           <div class="dropdown-head bg-primary bg-pattern rounded-top">
                              <div class="p-3">
                                 <div class="row align-items-center">
                                    <div class="col">
                                       <h6 class="m-0 fs-16 fw-semibold text-white">Notifications</h6>
                                    </div>
                                    <div class="col-auto dropdown-tabs">
                                       <span class="badge bg-light text-body fs-13"> 4 New</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="px-2 pt-2">
                                 <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom" data-dropdown-tabs="true" id="notificationItemsTab" role="tablist">
                                    <li class="nav-item waves-effect waves-light">
                                       <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab" role="tab" aria-selected="true">
                                       All (4)
                                       </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                       <a class="nav-link" data-bs-toggle="tab" href="#messages-tab" role="tab" aria-selected="false">
                                       Messages
                                       </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                       <a class="nav-link" data-bs-toggle="tab" href="#alerts-tab" role="tab" aria-selected="false">
                                       Alerts
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="tab-content position-relative" id="notificationItemsTabContent">
                              <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                                 <div data-simplebar style="max-height: 300px;" class="pe-2">
                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                       <div class="d-flex">
                                          <div class="avatar-xs me-3 flex-shrink-0">
                                             <span class="avatar-title bg-info-subtle text-info rounded-circle fs-16">
                                             <i class="bx bx-badge-check"></i>
                                             </span>
                                          </div>
                                          <div class="flex-grow-1">
                                             <a href="#!" class="stretched-link">
                                                <h6 class="mt-0 mb-2 lh-base">Your <b>Elite</b> author Graphic Optimization <span class="text-secondary">reward</span> is ready!</h6>
                                             </a>
                                             <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                             </p>
                                          </div>
                                          <div class="px-2 fs-15">
                                             <div class="form-check notification-check">
                                                <input class="form-check-input" type="checkbox" value="" id="all-notification-check01" />
                                                <label class="form-check-label" for="all-notification-check01"></label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                       <div class="d-flex">
                                          <img src="<?php echo base_url('');?>include/admin/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs flex-shrink-0" alt="user-pic" />
                                          <div class="flex-grow-1">
                                             <a href="#!" class="stretched-link">
                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                             </a>
                                             <div class="fs-13 text-muted">
                                                <p class="mb-1">Answered to your comment on the cash flow forecast's graph 🔔.</p>
                                             </div>
                                             <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                             </p>
                                          </div>
                                          <div class="px-2 fs-15">
                                             <div class="form-check notification-check">
                                                <input class="form-check-input" type="checkbox" value="" id="all-notification-check02" />
                                                <label class="form-check-label" for="all-notification-check02"></label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                       <div class="d-flex">
                                          <div class="avatar-xs me-3 flex-shrink-0">
                                             <span class="avatar-title bg-danger-subtle text-danger rounded-circle fs-16">
                                             <i class="bx bx-message-square-dots"></i>
                                             </span>
                                          </div>
                                          <div class="flex-grow-1">
                                             <a href="#!" class="stretched-link">
                                                <h6 class="mt-0 mb-2 fs-13 lh-base">You have received <b class="text-success">20</b> new messages in the conversation</h6>
                                             </a>
                                             <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                             </p>
                                          </div>
                                          <div class="px-2 fs-15">
                                             <div class="form-check notification-check">
                                                <input class="form-check-input" type="checkbox" value="" id="all-notification-check03" />
                                                <label class="form-check-label" for="all-notification-check03"></label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                       <div class="d-flex">
                                          <img src="<?php echo base_url('');?>include/admin/images/users/avatar-8.jpg" class="me-3 rounded-circle avatar-xs flex-shrink-0" alt="user-pic" />
                                          <div class="flex-grow-1">
                                             <a href="#!" class="stretched-link">
                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                             </a>
                                             <div class="fs-13 text-muted">
                                                <p class="mb-1">We talked about a project on linkedin.</p>
                                             </div>
                                             <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                             </p>
                                          </div>
                                          <div class="px-2 fs-15">
                                             <div class="form-check notification-check">
                                                <input class="form-check-input" type="checkbox" value="" id="all-notification-check04" />
                                                <label class="form-check-label" for="all-notification-check04"></label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="my-3 text-center view-all">
                                       <button type="button" class="btn btn-soft-success waves-effect waves-light">View All Notifications <i class="ri-arrow-right-line align-middle"></i></button>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel" aria-labelledby="messages-tab">
                                 <div data-simplebar style="max-height: 300px;" class="pe-2">
                                    <div class="text-reset notification-item d-block dropdown-item">
                                       <div class="d-flex">
                                          <img src="<?php echo base_url('');?>include/admin/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic" />
                                          <div class="flex-grow-1">
                                             <a href="#!" class="stretched-link">
                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">James Lemire</h6>
                                             </a>
                                             <div class="fs-13 text-muted">
                                                <p class="mb-1">We talked about a project on linkedin.</p>
                                             </div>
                                             <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                <span><i class="mdi mdi-clock-outline"></i> 30 min ago</span>
                                             </p>
                                          </div>
                                          <div class="px-2 fs-15">
                                             <div class="form-check notification-check">
                                                <input class="form-check-input" type="checkbox" value="" id="messages-notification-check01" />
                                                <label class="form-check-label" for="messages-notification-check01"></label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="text-reset notification-item d-block dropdown-item">
                                       <div class="d-flex">
                                          <img src="<?php echo base_url('');?>include/admin/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic" />
                                          <div class="flex-grow-1">
                                             <a href="#!" class="stretched-link">
                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                             </a>
                                             <div class="fs-13 text-muted">
                                                <p class="mb-1">Answered to your comment on the cash flow forecast's graph 🔔.</p>
                                             </div>
                                             <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                             </p>
                                          </div>
                                          <div class="px-2 fs-15">
                                             <div class="form-check notification-check">
                                                <input class="form-check-input" type="checkbox" value="" id="messages-notification-check02" />
                                                <label class="form-check-label" for="messages-notification-check02"></label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="text-reset notification-item d-block dropdown-item">
                                       <div class="d-flex">
                                          <img src="<?php echo base_url('');?>include/admin/images/users/avatar-6.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic" />
                                          <div class="flex-grow-1">
                                             <a href="#!" class="stretched-link">
                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Kenneth Brown</h6>
                                             </a>
                                             <div class="fs-13 text-muted">
                                                <p class="mb-1">Mentionned you in his comment on 📃 invoice #12501.</p>
                                             </div>
                                             <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                <span><i class="mdi mdi-clock-outline"></i> 10 hrs ago</span>
                                             </p>
                                          </div>
                                          <div class="px-2 fs-15">
                                             <div class="form-check notification-check">
                                                <input class="form-check-input" type="checkbox" value="" id="messages-notification-check03" />
                                                <label class="form-check-label" for="messages-notification-check03"></label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="text-reset notification-item d-block dropdown-item">
                                       <div class="d-flex">
                                          <img src="<?php echo base_url('');?>include/admin/images/users/avatar-8.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic" />
                                          <div class="flex-grow-1">
                                             <a href="#!" class="stretched-link">
                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                             </a>
                                             <div class="fs-13 text-muted">
                                                <p class="mb-1">We talked about a project on linkedin.</p>
                                             </div>
                                             <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                <span><i class="mdi mdi-clock-outline"></i> 3 days ago</span>
                                             </p>
                                          </div>
                                          <div class="px-2 fs-15">
                                             <div class="form-check notification-check">
                                                <input class="form-check-input" type="checkbox" value="" id="messages-notification-check04" />
                                                <label class="form-check-label" for="messages-notification-check04"></label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="my-3 text-center view-all">
                                       <button type="button" class="btn btn-soft-success waves-effect waves-light">View All Messages <i class="ri-arrow-right-line align-middle"></i></button>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade p-4" id="alerts-tab" role="tabpanel" aria-labelledby="alerts-tab"></div>
                              <div class="notification-actions" id="notification-actions">
                                 <div class="d-flex text-muted justify-content-center">
                                    Select
                                    <div id="select-content" class="text-body fw-semibold px-1">0</div>
                                    Result <button type="button" class="btn btn-link link-danger p-0 ms-3" data-bs-toggle="modal" data-bs-target="#removeNotificationModal">Remove</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="dropdown ms-sm-3 header-item topbar-user">
                        <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                        <img class="rounded-circle header-profile-user" src="<?php echo base_url('');?>include/admin/images/users/user-dummy-img.jpg" alt="Header Avatar" />
                        <span class="text-center ms-xl-2">
                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"> <?php echo  $this->session->login['user_name']; ?></span>
                        <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">
                        <?php
                           $user_levels = [
                             0 =>
                                    'Development', 1 => 'Admin', 2 => 'User', ]; $user_level = $this->session->login['user_level']; $defaultuser_level = 'User'; echo '
                                    <p class="main-notification-text">' . ($user_levels[$user_level] ?? $defaultuser_level) . '</p>
                                    '; ?>
                        </span>
                        </span>
                        </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                           <h6 class="dropdown-header">
                              Welcome
                              <?php echo  $this->session->login['user_name']; ?>!
                           </h6>
                           <a class="dropdown-item" href="<?php echo base_url('profile');?>"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                           <?php
                              $user_level = $this->session->login['user_level']; if ($user_level === '0') { ?>
                           <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Theme Customizer</span></a>
                           <?php
                              }
                              ?>
                           <a class="dropdown-item" href="<?php echo base_url('report-issue');?>"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Report Issue</span></a>
                           <div class="dropdown-divider"></div>
                           <?php
                              $user_level = $this->session->login['user_level']; if ($user_level === '0') { ?>
                           <a class="dropdown-item" href="<?php echo base_url('project-settings')?>">
                           <span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span>
                           </a>
                           <?php
                              }
                              ?>
                           <a class="dropdown-item" href="<?php echo base_url('logout')?>"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                  </div>
                  <div class="modal-body">
                     <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width: 100px; height: 100px;"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                           <h4>Are you sure ?</h4>
                           <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                        </div>
                     </div>
                     <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="app-menu navbar-menu">
            <div class="navbar-brand-box">
               <a href="<?php echo base_url(''); ?>admin-dashboard" class="logo logo-dark">
               <span class="logo-sm">
               <img src="<?php echo base_url(''); ?>include/web/custom/favicon.png" alt=""  style="height: 60px;" />
               </span>
               <span class="logo-lg">
               <img src="<?php echo base_url(''); ?>include/admin/images/logo-dark.png" alt=""  />
               </span>
               </a>
               <a href="<?php echo base_url(''); ?>admin-dashboard" class="logo logo-light">
               <span class="logo-sm">
               <img src="<?php echo base_url(''); ?>include/web/custom/favicon.png" alt="" style="height: 60px;" />
               </span>
               <span class="logo-lg">
               <img src="<?php echo base_url(''); ?>include/web/custom/Department_Of_Telecommunications_White.png" height="60px" alt="" />
               </span>
               </a>
               <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
               <i class="ri-record-circle-line"></i>
               </button>
            </div>
            <div class="dropdown sidebar-user m-1 rounded">
               <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <span class="d-flex align-items-center gap-2">
               <img class="rounded header-profile-user" src="<?php echo base_url(''); ?>include/admin/images/users/avatar-1.jpg" alt="Header Avatar" />
               <span class="text-start">
               <span class="d-block fw-medium sidebar-user-name-text">Anna Adame</span>
               <span class="d-block fs-14 sidebar-user-name-sub-text"><i class="ri ri-circle-fill fs-10 text-success align-baseline"></i> <span class="align-middle">Online</span></span>
               </span>
               </span>
               </button>
               <div class="dropdown-menu dropdown-menu-end">
                  <h6 class="dropdown-header">Welcome Anna!</h6>
                  <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                  <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                  <a class="dropdown-item" href="apps-tasks-kanban.html"><i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
                  <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="pages-profile.html">
                  <i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$5971.67</b></span>
                  </a>
                  <a class="dropdown-item" href="pages-profile-settings.html">
                  <span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span>
                  </a>
                  <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                  <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
               </div>
            </div>
            <div id="scrollbar">
               <div class="container-fluid">
                  <div id="two-column-menu"></div>
                  <?php
                     function generateMenuHtml($menuItems, $userLevel, $dashboardAdded = false)
                     {
                         $currentUrl = current_url();
                         $html = '<ul class="navbar-nav" id="navbar-nav">';

                         if (!$dashboardAdded && $userLevel === '1') {
                             $html .= '<li class="nav-item"><a class="nav-link menu-link"  href="' . base_url('admin-dashboard') . '"><i class="ri-dashboard-3-fill"></i> <span data-key="t-Dashboard">Dashboard</span></a></li>';
                             $dashboardAdded = true;
                         } elseif (!$dashboardAdded && $userLevel !== '1') {
                             $html .= '<li class="nav-item"><a class="nav-link menu-link"  href="' . base_url('user-dashboard') . '"><i class="ri-dashboard-3-fill"></i> <span data-key="t-Dashboard">Dashboard</span></a></li>';
                             $dashboardAdded = true;
                         }

                         foreach ($menuItems as $menuItem) {
                             $hasAccess = isset($menuItem['has_access']) ? $menuItem['has_access'] : false;
                             if (!$hasAccess) {
                                 continue;
                             }

                             $html .= '<li class="nav-item">';
                             $html .= '<a class="nav-link menu-link';

                             if ($currentUrl == base_url($menuItem['url'])) {
                                 $html .= ' active';
                             }

                             if (isset($menuItem['children'])) {
                                 $html .= ' collapsed" href="#sidebar' . ucfirst($menuItem['url']) . '" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar' . ucfirst($menuItem['url']) . '"';
                             } else {
                                 $html .= '" href="' . base_url($menuItem['url']) . '"';
                             }
                             $html .= '>';
                             $html .= '<i class="ri-' . $menuItem['icon'] . '"></i> <span data-key="t-' . strtolower($menuItem['label']) . '">' . $menuItem['label'] . '</span>';
                             $html .= '</a>';
                             if (isset($menuItem['children'])) {
                                 $html .= '<div class="collapse menu-dropdown" id="sidebar' . ucfirst($menuItem['url']) . '">';
                                 $html .= '<ul class="nav nav-sm flex-column">';
                                 $html .= generateMenuHtml($menuItem['children'], $userLevel, $dashboardAdded);
                                 $html .= '</ul>';
                                 $html .= '</div>';
                             }

                             $html .= '</li>';
                         }

                         $html .= '</ul>';

                         return $html;
                     }

                     $userLevel = $this->session->login['user_level'];
                     $menuItems = checkMenuAccess($userLevel);
                     $menuHtml = generateMenuHtml($menuItems, $userLevel);
                     echo $menuHtml;
                     if ($userLevel === '1') {
                         echo '<ul class="navbar-nav" id="navbar-nav">';
                         // echo '<li class="nav-item"><a class="nav-link menu-link"  href="' . base_url('blogs') . '"><i class="ri-pages-line"></i> <span data-key="t-blogs">Blogs</span></a></li>';
                         echo '<li class="nav-item"><a class="nav-link menu-link"  href="' . base_url('reported-issue') . '"><i class="ri-error-warning-fill"></i> <span data-key="t-Reported Issue">Reported Issue</span></a></li>';
                         echo '</ul>';
                     }
                     ?>
               </div>
            </div>
            <div class="sidebar-background"></div>
         </div>
         <div class="vertical-overlay"></div>
         <div class="main-content">
            <?php include_once __DIR__ . '/../' . $page_name . '.php'; ?>
            <footer class="footer">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-sm-12 text-center">
                        Copyright © 2024 <b><a href="javascript:void(0)">Sangam Initiative</a></b> All Rights Reserved.
                     </div>
                  </div>
               </div>
            </footer>
         </div>
      </div>
      <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
      <i class="ri-arrow-up-line"></i>
      </button>
      <div id="preloader">
         <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
               <span class="visually-hidden">Loading...</span>
            </div>
         </div>
      </div>
      <script src="<?php echo base_url(''); ?>include/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo base_url(''); ?>include/admin/libs/simplebar/simplebar.min.js"></script>
      <script src="<?php echo base_url(''); ?>include/admin/libs/node-waves/waves.min.js"></script>
      <script src="<?php echo base_url(''); ?>include/admin/libs/feather-icons/feather.min.js"></script>
      <script src="<?php echo base_url(''); ?>include/admin/js/pages/plugins/lord-icon-2.1.0.js"></script>
      <script src="<?php echo base_url(''); ?>include/admin/js/plugins.js"></script>
      <script src="<?php echo base_url(''); ?>include/admin/libs/apexcharts/apexcharts.min.js"></script>
      <script src="<?php echo base_url(''); ?>include/admin/libs/jsvectormap/js/jsvectormap.min.js"></script>
      <script src="<?php echo base_url(''); ?>include/admin/libs/jsvectormap/maps/world-merc.js"></script>
      <script src="<?php echo base_url(''); ?>include/admin/libs/swiper/swiper-bundle.min.js"></script>
      <script src="<?php echo base_url(''); ?>include/admin/js/pages/dashboard-ecommerce.init.js"></script>
      <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
      <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
      <script src="<?php echo base_url(''); ?>include/admin/js/app.js"></script>
      <script>
         $("input[name='data-layout'], input[name='sidebar_user_profile_avatar']").change(function (e) {
             e.preventDefault();
             const layout = $("input[name='data-layout']").val();
             const avatar = $("input[name='sidebar_user_profile_avatar']").val();
             $.ajax({
                 url: "<?php echo base_url(''); ?>theme-customizer-options",
                 method: "POST",
                 data: {
                     layout: layout,
                     avatar: avatar,
                 },
                 success: function (response) {
                     console.log(response);
                 },
                 error: function (xhr, status, error) {
                     console.error(xhr.responseText);
                 },
             });
         });
         function getGreetingMessage() {
             var currentHour = new Date().getHours();
             if (currentHour >= 5 && currentHour < 12) {
                 return "Good morning!";
             } else if (currentHour >= 12 && currentHour < 18) {
                 return "Good afternoon!";
             } else {
                 return "Good evening!";
             }
         }
         function applyStylesBasedOnTime() {
             var greetingMessage = getGreetingMessage();
             var greetingContainer = $("#greeting-container");
             var greetingMessageElement = $("#greeting-message");

             if (new Date().getHours() >= 5 && new Date().getHours() < 12) {
                 greetingContainer.addClass("morning-style");
             } else {
                 greetingContainer.addClass("default-style");
             }
             greetingMessageElement.text(greetingMessage);
         }
         applyStylesBasedOnTime();
         $('#user_id').focus(function () {

            $("#userIdFocusMessage").html("Email address can't be changed.");
         });
         $('#user_id').blur(function () {
            $("#userIdFocusMessage").html("");
         });
      </script>
   </body>
</html>
