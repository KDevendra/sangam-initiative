<?php include_once __DIR__ . '/../common/admin-header.php'; ?>
<div id="layout-wrapper">
   <?php include_once __DIR__ . '/../common/top-navbar.php'; ?>
   <?php include_once __DIR__ . '/../common/leftside-bar.php'; ?>
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

<?php include_once __DIR__ . '/../common/admin-footer.php'; ?>