<div class="page-content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
               <h4 class="mb-sm-0"><?php $segment = $this->uri->segment(1); $segmentWithSpaces = str_replace('-', ' ', $segment); echo ucwords($segmentWithSpaces); ?></h4>
               <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                     <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                     <li class="breadcrumb-item active"><?php $segment = $this->uri->segment(1); $segmentWithSpaces = str_replace('-', ' ', $segment); echo ucwords($segmentWithSpaces); ?></li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xl-12 col-md-12">
            <?php if (!empty($this->session->flashdata('error'))) { ?>
            <div class="alert alert-danger alert-dismissible fade show material-shadow" role="alert">
               <?php echo $this->session->flashdata('error'); ?>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php } ?>
            <?php if (!empty($this->session->flashdata('success'))) { ?>
            <div class="alert alert-success alert-dismissible fade show material-shadow" role="alert">
               <?php echo $this->session->flashdata('success'); ?>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php } ?>
         </div>
      </div>
      <div class="col-lg-12">
         <div class="card">
            <div class="card-header align-items-center d-flex">
               <h4 class="card-title mb-0 flex-grow-1">Expression Of Interest</h4>
               <div class="flex-shrink-0">
                 <?php
                         if (isset($checkEoIApplication) && $checkEoIApplication->num_rows() === 0) {
                             ?>
                             <button type="button" id="addNewExpressionOfInterest" class="btn btn-primary btn-sm material-shadow-none"><i class="ri-add-line"></i>EoI Registration</button>
                             <?php
                         } elseif (isset($canReapply) && $canReapply) {
                             ?>
                             <button type="button" id="reApplyNewExpressionOfInterest" class="btn btn-primary btn-sm material-shadow-none"><i class="ri-add-line"></i>Re-Apply</button>
                             <?php
                         } else {
                             ?>

                             <?php
                         }
                         ?>
               </div>
            </div>
            <div class="card-body">
               <table id="ajax-datatables" class="display table table-bordered dt-responsive" style="width: 100%;"></table>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   function viewExpressionOfInterest(application_id) {
       var redirectUrl = "<?php echo base_url('eoi-status/'); ?>" + application_id;
       window.location.href = redirectUrl;
   }
   function editExpressionOfInterest(application_id) {
       var redirectUrl = "<?php echo base_url('eoi-registration/edit/'); ?>" + application_id;
       window.location.href = redirectUrl;
   }
   function downloadApplication(application_id) {
   var redirectUrl = "<?php echo base_url('download-eoi-application/'); ?>" + application_id;
   window.location.href = redirectUrl;
   }
   function deleteExpressionOfInterest(application_id) {
       const swalWithBootstrapButtons = Swal.mixin({
           customClass: {
               confirmButton: "btn btn-success",
               cancelButton: "btn btn-danger",
           },
           buttonsStyling: false,
       });
       swalWithBootstrapButtons
           .fire({
               title: "Are you sure?",
               text: "You won't be able to revert this!",
               icon: "warning",
               showCancelButton: true,
               confirmButtonText: "Yes, delete it!",
               cancelButtonText: "No, cancel!",
               reverseButtons: true,
           })
           .then((result) => {
               if (result.isConfirmed) {
                 $.ajax({
                     type: "POST",
                     url: "<?php echo base_url('user-expression-of-interest-ation/delete/'); ?>" + application_id,
                     dataType: "json",
                     success: function (response) {
                         if (response.status === "success") {
                             swalWithBootstrapButtons
                                 .fire({
                                     title: "Deleted!",
                                     text: "EoI application has been deleted.",
                                     icon: "success",
                                 })
                                 .then(function () {
                                     var dataTable = initializeDataTable();
                                 });
                         }
                     },
                     error: function (xhr, status, error) {
                         swalWithBootstrapButtons.fire({
                             title: "Error",
                             text: "An error occurred while approve the application.",
                             icon: "error",
                         });
                     },
                 });

               } else if (result.dismiss === Swal.DismissReason.cancel) {
                   swalWithBootstrapButtons.fire({
                       title: "Cancelled",
                       text: "Your curated content safe :)",
                       icon: "error",
                   });
               }
           });
   }
   function initializeDataTable() {
       if ($.fn.DataTable.isDataTable("#ajax-datatables")) {
           $("#ajax-datatables").DataTable().destroy();
       }

       var dataTable = $("#ajax-datatables").DataTable({
           ajax: {
               url: "<?php echo base_url('get-expression-of-interest'); ?>",
               type: "GET",
               dataType: "json",
               dataSrc: "data",
           },
           columns: [
               {
                   title: "Application No.",
                   data: "application_id",
               },
               {
                   title: "User Id",
                   data: "user_id",
               },
               {
                   title: "Email",
                   data: "email",
               },
               {
                   title: "Full Name",
                   data: "full_name",
               },
               {
                   title: "Submission Datetime",
                   data: "created_at",
                   render: function (data, type, row) {
                       return moment(data).format("MMM DD, YYYY hh:mm:ss a");
                   },
               },
               {
                   title: "Status",
                   data: "status",
                   render: function (data, type, row) {
                       switch (data) {
                           case "0":
                               return '<span class="badge bg-info">Incomplete</span>';
                           case "1":
                               return '<span class="badge bg-warning">Pending</span>';
                           case "2":
                               return '<span class="badge bg-success">Approved</span>';
                           case "3":
                               return '<span class="badge bg-danger">Rejected</span>';
                           default:
                               return '<span class="badge bg-secondary">Unknown</span>';
                       }
                   },
               },
               {
                   title: "Action",
                   data: null,
                   orderable: false,
                   render: function (data, type, row) {
                   switch (row.status) {
                       case "0":
                           var editButton =
                               '<button type="button" class="btn btn-warning btn-sm" onclick="editExpressionOfInterest(\'' +
                               row.application_id +
                               "')\">" +
                               '<i class="ri-edit-2-fill align-middle"></i> Edit' +
                               "</button>";
                           return '<div class="btn-group" role="group" aria-label="Action buttons">' + editButton + '</div>';

                       case "1":
                           var viewButton =
                               '<button type="button" class="btn btn-primary btn-sm" onclick="viewExpressionOfInterest(\'' +
                               row.application_id +
                               "')\">" +
                               '<i class="ri-eye-line align-middle"></i> View' +
                               "</button>";

                           var pdfButton =
                               '<button type="button" class="btn btn-danger btn-sm" onclick="downloadApplication(\'' +
                               row.application_id +
                               "')\">" +
                               '<i class="ri-download-2-line align-middle"></i> PDF' +
                               "</button>";

                           return '<div class="btn-group" role="group" aria-label="Action buttons">' + viewButton + pdfButton + '</div>';
                           case "2":
                               var viewButton =
                                   '<button type="button" class="btn btn-primary btn-sm" onclick="viewExpressionOfInterest(\'' +
                                   row.application_id +
                                   "')\">" +
                                   '<i class="ri-eye-line align-middle"></i> View' +
                                   "</button>";

                               var pdfButton =
                                   '<button type="button" class="btn btn-danger btn-sm" onclick="downloadApplication(\'' +
                                   row.application_id +
                                   "')\">" +
                                   '<i class="ri-download-2-line align-middle"></i> PDF' +
                                   "</button>";

                               return '<div class="btn-group" role="group" aria-label="Action buttons">' + viewButton + pdfButton + '</div>';
                           case "3":
                               var viewButton =
                                   '<button type="button" class="btn btn-primary btn-sm" onclick="viewExpressionOfInterest(\'' +
                                   row.application_id +
                                   "')\">" +
                                   '<i class="ri-eye-line align-middle"></i> View' +
                                   "</button>";

                               var pdfButton =
                                   '<button type="button" class="btn btn-danger btn-sm" onclick="downloadApplication(\'' +
                                   row.application_id +
                                   "')\">" +
                                   '<i class="ri-download-2-line align-middle"></i> PDF' +
                                   "</button>";

                               return '<div class="btn-group" role="group" aria-label="Action buttons">' + viewButton + pdfButton + '</div>';

                       default:
                           return '';
                   }
               },

               },

           ],
           responsive: true,
       });
       dataTable.order([1, "desc"]).draw();
       return dataTable;
   }
   function animateCounter(element, target) {
       var current = 0;
       var increment = 1;
       var speed = 20;

       var interval = setInterval(function () {
           if (current >= target) {
               clearInterval(interval);
               current = target;
           }
           element.text(current);
           current += increment;
       }, speed);
   }
   var $ = jQuery.noConflict();
   $(document).ready(function () {
       var dataTable = initializeDataTable();
       $("#addNewExpressionOfInterest").click(function (e) {
           e.preventDefault();
           window.location.href = "<?php echo base_url('eoi-registration'); ?>";
       });
       $("#reApplyNewExpressionOfInterest").click(function (e) {
           e.preventDefault();
           window.location.href = "<?php echo base_url('eoi-registration/re-apply'); ?>";
       });
   });
</script>
