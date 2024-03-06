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
           <a href="<?php echo base_url('admin-dashboard') ?>" class="logo logo-dark">
               <span class="logo-sm">
                   <img src="<?php echo base_url(''); ?>include/web/custom/favicon.png" alt="" height="22" />
               </span>
               <span class="logo-lg">
                   <img src="<?php echo base_url(''); ?>include/admin/images/logo-dark.png" alt="" height="17" />
               </span>
           </a>
           <a href="<?php echo base_url('admin-dashboard') ?>" class="logo logo-light">
               <span class="logo-sm">
                   <img src="<?php echo base_url(''); ?>include/web/custom/favicon.png" alt="" height="22" />
               </span>
               <span class="logo-lg">
                   <img src="<?php echo base_url(''); ?>include/web/custom/Department_Of_Telecommunications_White.png" alt="" height="70" />
               </span>
           </a>
           <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
               <i class="ri-record-circle-line"></i>
           </button>
       </div>
       <div class="dropdown sidebar-user m-1 rounded">
           <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <span class="d-flex align-items-center gap-2">
                   <img class="rounded header-profile-user" src="<?php echo base_url(''); ?>include/admin/images/users/user-dummy-img.jpg" alt="Header Avatar" />
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

                    // Add Dashboard only if it hasn't been added before and the user level matches
                    if (!$dashboardAdded && $userLevel === '1') {
                        $html .=   '<li class="nav-item"><a class="nav-link menu-link"  href="' . base_url('admin-dashboard') . '"><i class="ri-dashboard-3-fill"></i> <span data-key="t-Dashboard">Dashboard</span></a></li>';

                        $dashboardAdded = true;
                    } elseif (!$dashboardAdded && $userLevel !== '1') {
                        $html .= '<li class="nav-item"><a class="nav-link menu-link" href="' . base_url('user-dashboard') . '"><i class="ri-dashboard-3-fill"></i>Dashboard</a></li>';
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

                    if ($userLevel === '1') {
                        $html .=   '<li class="nav-item"><a class="nav-link menu-link"  href="' . base_url('admin-dashboard') . '"><i class="ri-dashboard-3-fill"></i> <span data-key="t-Dashboard">Dashboard</span></a></li>';
                    } elseif ($userLevel !== '1') {
                        $html .= '<li class="nav-item"><a class="nav-link menu-link" href="' . base_url('user-dashboard') . '"><i class="ri-dashboard-3-fill"></i>Dashboard</a></li>';
                    }
                    $html .= '</ul>';

                    return $html;
                }

                $userLevel = $this->session->login['user_level'];
                $menuItems = checkMenuAccess($userLevel);
                $menuHtml = generateMenuHtml($menuItems, $userLevel);
                echo $menuHtml;
                ?>

           </div>
       </div>
       <div class="sidebar-background"></div>
   </div>
   <div class="vertical-overlay"></div>
