<div class="page-content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
               <h4 class="mb-sm-0"><?php $segment = $this->uri->segment(1);
                  $segmentWithSpaces = str_replace('-', ' ', $segment);
                  echo ucwords($segmentWithSpaces); ?></h4>
               <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                     <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                     <li class="breadcrumb-item active"><?php $segment = $this->uri->segment(1);
                        $segmentWithSpaces = str_replace('-', ' ', $segment);
                        echo ucwords($segmentWithSpaces); ?></li>
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
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header">
                  <h5 class="card-title mb-0">Registered Application's List</h5>
               </div>
               <div class="card-body">
                  <table id="ajax-datatables" class="display table table-bordered dt-responsive" style="width: 100%;"></table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
function viewApplication(registration_id) {
    var redirectUrl = "<?php echo base_url('event-registration/view/'); ?>" + registration_id;
    window.location.href = redirectUrl;
}
function approveApplication(registration_id) {
   const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
         confirmButton: "btn btn-success",
         cancelButton: "btn btn-danger"
      },
      buttonsStyling: false
   });
   swalWithBootstrapButtons.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Yes, approve it!",
      cancelButtonText: "No, cancel!",
      reverseButtons: true
   }).then((result) => {
      if (result.isConfirmed) {
         $.ajax({
            type: "POST",
            url: "<?php echo base_url('event-registration-ation/approved/'); ?>" + registration_id,
            dataType: 'json',
            success: function (response) {
               console.log(response);
               if (response.status === 'success') {
                  swalWithBootstrapButtons.fire({
                     title: "Approved!",
                     text: "Your application has been approved.",
                     icon: "success"
                  }).then(function () {
                     var dataTable = initializeDataTable();
                  });
               }
            },
            error: function (xhr, status, error) {
               swalWithBootstrapButtons.fire({
                  title: "Error",
                  text: "An error occurred while approve the application.",
                  icon: "error"
               });
            }
         });

      } else if (result.dismiss === Swal.DismissReason.cancel) {
         swalWithBootstrapButtons.fire({
            title: "Cancelled",
            text: "Your imaginary application is safe :)",
            icon: "error"
         });
      }
   });
}
function rejectApplication(registration_id) {
   const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
         confirmButton: "btn btn-success",
         cancelButton: "btn btn-danger"
      },
      buttonsStyling: false
   });
   swalWithBootstrapButtons.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Yes, reject it!",
      cancelButtonText: "No, cancel!",
      reverseButtons: true
   }).then((result) => {
      if (result.isConfirmed) {
         $.ajax({
            type: "POST",
            url: "<?php echo base_url('event-registration-ation/rejected/'); ?>" + registration_id,
            dataType: 'json',
            success: function (response) {
               console.log(response);
               if (response.status === 'success') {
                  swalWithBootstrapButtons.fire({
                     title: "Rejected!",
                     text: "Your application has been approved.",
                     icon: "success"
                  }).then(function () {
                     var dataTable = initializeDataTable();
                  });
               }
            },
            error: function (xhr, status, error) {
               swalWithBootstrapButtons.fire({
                  title: "Error",
                  text: "An error occurred while reject the application.",
                  icon: "error"
               });
            }
         });

      } else if (result.dismiss === Swal.DismissReason.cancel) {
         swalWithBootstrapButtons.fire({
            title: "Cancelled",
            text: "Your imaginary application is safe :)",
            icon: "error"
         });
      }
   });
}
function initializeDataTable() {
   if ($.fn.DataTable.isDataTable('#ajax-datatables')) {
      $('#ajax-datatables').DataTable().destroy();
   }

   var dataTable = $("#ajax-datatables").DataTable({
      ajax: {
         url: "<?php echo base_url('get-event-registration'); ?>",
         type: "GET",
         dataType: "json",
         dataSrc: "data",
      },
      columns: [
        {
           title: "Reg ID",
           data: "registration_id"
        },
        {
            title: "Applicant Name",
            data: "full_name"
         },

         {
            title: "Vanue",
            data: "location"
         },
         {
            title: "Event Date",
            data: "event_date"
         },
         {
             title: "Registration Datetime ",
             data: "created_at",
             render: function(data, type, row) {
                 return moment(data).format('MMM DD, YYYY hh:mm:ss a');
             }
         },
         {
            title: "Status",
            data: "status",
            render: function (data, type, row) {
               var status_text, status_class;
               switch (data) {
                  case '1':
                     status_text = 'Pending';
                     status_class = 'bg-warning';
                     break;
                  case '2':
                     status_text = 'Approved';
                     status_class = 'bg-success';
                     break;
                  case '3':
                     status_text = 'Rejected';
                     status_class = 'bg-danger';
                     break;
                  case '4':
                     status_text = 'Winner';
                     status_class = 'bg-info';
                     break;
                  default:
                     status_text = 'Unknown';
                     status_class = 'bg-secondary';
               }
               return '<span class="badge ' + status_class + '">' + status_text + '</span>';
            }
         },
         {
            title: "Action",
            data: null,
            orderable: false,
            render: function (data, type, row) {
               if (row.status === '1') {
                  var buttons =
                     '<div class="btn-group" role="group" aria-label="Action buttons">' +
                     '<button type="button" class="btn btn-primary btn-sm" onclick="viewApplication(\'' + row.registration_id + '\')">' +
                     '<i class="ri-eye-line align-middle"></i> View' +
                     '</button>' +
                     '<button type="button" class="btn btn-success btn-sm" onclick="approveApplication(\'' + row.registration_id + '\')">' +
                     '<i class="ri-check-fill align-middle"></i> Approve' +
                     '</button>' +
                     '<button type="button" class="btn btn-danger btn-sm" onclick="rejectApplication(\'' + row.registration_id + '\')">' +
                     '<i class="ri-close-fill align-middle"></i> Reject' +
                     '</button>' +
                     '</div>';
               } else {
                  var buttons = '<div class="btn-group" role="group" aria-label="Action buttons">' +
                  '<button type="button" class="btn btn-primary btn-sm" onclick="viewApplication(\'' + row.registration_id + '\')">' +
                  '<i class="ri-eye-line align-middle"></i> View' +
                  '</button></div>';
               }
               return buttons;
            },
         },

      ],
      responsive: true,
   });
   dataTable.order([1, "desc"]).draw();
   return dataTable;
}
var $ = jQuery.noConflict();
$(document).ready(function () {
   var dataTable = initializeDataTable();
});
</script>
