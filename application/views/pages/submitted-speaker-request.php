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
                     <li class="breadcrumb-item"><a href="javascript: void(0);">Registered Speaker</a></li>
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
      </div>
      <div class="col-lg-12">
         <div class="card">
            <div class="card-header align-items-center d-flex">
               <h4 class="card-title mb-0 flex-grow-1">Submited Speaker Request</h4>
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
function viewSpeaker(user_id) {
    var redirectUrl = "<?php echo base_url('submitted-speaker-request/view/'); ?>" + user_id;
    window.location.href = redirectUrl;
}
   function initializeDataTable() {
       if ($.fn.DataTable.isDataTable('#ajax-datatables')) {
           $('#ajax-datatables').DataTable().destroy();
       }

       var dataTable = $("#ajax-datatables").DataTable({
           ajax: {
               url: "<?php echo base_url('get-submitted-speaker-request'); ?>",
               type: "GET",
               dataType: "json",
               dataSrc: "data",
           },
           columns: [{
                   title: "Req Id",
                   data: "ap_req"
               },
               {
                   title: "Full Name",
                   data: "full_name"
               },
               {
                   title: "Email Address",
                   data: "email"
               },
               {
                   title: "Contact Number",
                   data: "phone_number"
               },
               {
                   title: "Previous Experience",
                   data: "previous_speaking_experience"
               },
               {
                   title: "Additional Information",
                   data: "additional_information"
               },
               {
                   title: "Request Datetime",
                   data: "created_at",
                   render: function(data, type, row) {
                       return moment(data).format('MMM DD, YYYY hh:mm:ss a');
                   }
               },
               {
                   title: "Action",
                   data: null,
                   orderable: false,
                   render: function(data, type, row) {
                       var buttons =
                           '<div class="dropdown d-inline-block">' +
                           '<button class="btn btn-soft-secondary btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">' +
                           '<i class="ri-more-fill align-middle"></i>' +
                           "</button>" +
                           '<ul class="dropdown-menu dropdown-menu-end">';
                       buttons += '<li><a href="javascript:void(0)" class="dropdown-item" onclick="viewSpeaker(\'' + row.ap_req + '\')"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>';
                       buttons += "</ul></div>";
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
   $(document).ready(function() {
       var dataTable = initializeDataTable();

   });
</script>
