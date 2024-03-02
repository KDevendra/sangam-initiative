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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Registered User</a></li>
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
                <div class="card card-height-100">
                    <div class="card-header text-center">
                        <h4 class="card-title mb-0 flex-grow-1">EoI Application Analytics</h4>

                    </div>
                    <div class="card-body">
                        <div class="row row-cols-md-3 row-cols-1">
                            <div class="col col-lg border-end">
                                <div class="py-4 px-3">
                                    <h5 class="text-muted text-uppercase fs-13">Total</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h2 class="mb-0">
                                                <span class="counter-value" data-target="<?php echo $total; ?>"><?php echo $total; ?></span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg border-end">
                                <div class="mt-3 mt-md-0 py-4 px-3">
                                    <h5 class="text-muted text-uppercase fs-13">Approved</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h2 class="mb-0">
                                                <span class="counter-value" data-target="<?php echo $approved; ?>"><?php echo $approved; ?></span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg border-end">
                                <div class="mt-3 mt-md-0 py-4 px-3">
                                    <h5 class="text-muted text-uppercase fs-13">Pending</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h2 class="mb-0">
                                                <span class="counter-value" data-target="<?php echo $pending; ?>"><?php echo $pending; ?></span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg border-end">
                                <div class="mt-3 mt-lg-0 py-4 px-3">
                                    <h5 class="text-muted text-uppercase fs-13">Rejected</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h2 class="mb-0">
                                                <span class="counter-value" data-target="<?php echo $rejected; ?>"><?php echo $rejected; ?></span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg">
                                <div class="mt-3 mt-lg-0 py-4 px-3">
                                    <h5 class="text-muted text-uppercase fs-13">Incompleted</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h2 class="mb-0">
                                                <span class="counter-value" data-target="<?php echo $incompleted; ?>"><?php echo $incompleted; ?></span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0"><?php if (isset($flag)) {
                          echo ucwords($flag);}?> Application List</h5>
                    </div>
                    <div class="card-body">
                        <table id="ajax-datatables" class="display table table-bordered dt-responsive" style="width: 100%;"></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    if (isset($flag)) {
        if ($flag === "incomplete") {
            $statusValue = 0;
        } elseif ($flag === "pending") {
            $statusValue = 1;
        } elseif ($flag === "approved") {
            $statusValue = 2;
        } elseif ($flag === "rejected") {
            $statusValue = 3;
        } else {
            $statusValue = 4;
        }
    } else {
        $statusValue = '';
    }
?>
<script>
function viewUser(application_id) {
   var redirectUrl = "<?php echo base_url('eoi-application/view/'); ?>" + application_id;
   window.location.href = redirectUrl;
}

function initializeDataTable() {
   if ($.fn.DataTable.isDataTable('#ajax-datatables')) {
      $('#ajax-datatables').DataTable().destroy();
   }
   var status = <?php echo isset($statusValue) ? $statusValue : "''"; ?> ;
   var dataTable = $("#ajax-datatables").DataTable({
      ajax: {
         url: "<?php echo base_url('get-eoi-application/'); ?>" + status,
         type: "GET",
         dataType: "json",
         dataSrc: "data",
      },
      columns: [{
            title: "Full Name",
            data: "full_name"
         },
         {
            title: "Application ID",
            data: "application_id"
         },
         {
            title: "Contact Number",
            data: "contact_no"
         },
         {
            title: "Email Address",
            data: "email"
         },
         {
            title: "Application Datetime",
            data: "created_at",
            render: function (data, type, row) {
               return moment(data).format('MMM DD, YYYY hh:mm:ss a');
            }
         },
         {
            title: "Status",
            data: "status",
            render: function (data, type, row) {
               switch (data) {
                  case '0':
                     return '<span class="badge bg-info">Incomplete</span>';
                  case '1':
                     return '<span class="badge bg-warning">Pending</span>';
                  case '2':
                     return '<span class="badge bg-success">Approved</span>';
                  case '3':
                     return '<span class="badge bg-danger">Rejected</span>';
                  default:
                     return '<span class="badge bg-secondary">Unknown</span>';
               }
            }
         },
         {
            title: "Action",
            data: null,
            orderable: false,
            render: function (data, type, row) {
               var status = row.status;
               if (status === '0') {
                  return '<a href="javascript:void(0)" class="btn btn-sm btn-primary send-email-btn" data-email="' + row.email + '" data-userid="' + row.user_id + '" data-bs-toggle="modal" data-bs-target="#sendUserEmail"><i class="ri-mail-send-fill"></i></a>';
               } else {
                  return '<div class="dropdown d-inline-block">' +
                     '<button class="btn btn-soft-secondary btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">' +
                     '<i class="ri-more-fill align-middle"></i>' +
                     '</button>' +
                     '<ul class="dropdown-menu dropdown-menu-end">' +
                     '<li><a href="javascript:void(0)" class="dropdown-item" onclick="viewUser(\'' + row.application_id + '\')"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>' +
                     '<li><a href="javascript:void(0)" class="dropdown-item send-email-btn"  data-email="' + row.email + '" data-userid="' + row.user_id + '" data-bs-toggle="modal" data-bs-target="#sendUserEmail"><i class="ri-mail-send-fill align-bottom me-2 text-muted"></i> Send Email</a></li>' +
                     '</ul>' +
                     '</div>';
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
   var editor;
   ClassicEditor
      .create(document.querySelector('#message'))
      .then(newEditor => {
         editor = newEditor;
      })
      .catch(error => {
         console.error(error);
      });

   function showLoader() {
      $(".loader").show();
      $('#savechanges').prop("disabled", true).html('<span class="loader"></span>');
   }

   function hideLoader() {
      $(".loader").hide();
      $('#savechanges').prop("disabled", false).html("Send");
   }
   $(document).on("click", "#savechanges", function () {
      var isValid = true;
      var message = editor.getData();
      var to = $("#to").val();
      var cc = $("#cc").val();
      var subject = $("#subject").val();
      var user_id = $("#user_id").val();
      if (!message) {
         $("#error_message").text("Message is required.");
         isValid = false;
      } else {
         $("#error_message").text("");
      }
      if (isValid) {
         var postData = {
            to: to || null,
            message: message || null,
            user_id: user_id || null,
            cc: cc || null,
            subject: subject || null,
         };
         $.ajax({
            url: "<?php echo base_url('post-send-message')?>",
            type: 'post',
            data: postData,
            beforeSend: showLoader,
            success: function (response) {
               hideLoader();
               if (response.status === 'success') {
                  $("#remark").val("");
                  $("#user_id").val("");
                  $("#cc").val("");
                  $("#subject").val("");
                  $("#user_id").val("");
                  $("#modelCreateMenu").modal('hide');
                  Swal.fire({
                     icon: "success",
                     title: "Success",
                     text: response.message,
                  }).then((result) => {
                     if (result.isConfirmed) {
                        location.reload();
                     }
                  });
               } else {
                  Swal.fire({
                     icon: "error",
                     title: "Error",
                     text: response.message,
                  });
               }
            },
            error: function (xhr, textStatus, errorThrown) {
               hideLoader();
               Swal.fire({
                  icon: "error",
                  title: "Error",
                  text: response.message,
               });
            }
         });
      }
   });
   $(document).on('click', '.send-email-btn', function () {
      var email = $(this).data('email');
      var userId = $(this).data('userid');
      $('#to').val(email);
      $('#user_id').val(userId);
   });

});
</script>
<div id="sendUserEmail" class="modal fade" tabindex="-1" aria-labelledby="sendUserEmailLabel" aria-hidden="true" style="display: none;">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="sendUserEmailLabel">Add Your Email Content</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
         </div>
         <div class="modal-body">
            <div class="row row-sm">
               <div class="col-lg-4">
                  <label class="form-label mb-3">To: </label>
               </div>
               <div class="col-lg-8">
                  <input type="text" readonly class="form-control mb-3" name="to" id="to">
               </div>
               <div class="col-lg-4">
                  <label class="form-label mb-3">CC: </label>
               </div>
               <div class="col-lg-8">
                  <input type="text"  class="form-control mb-3" name="cc" id="cc">
               </div>
               <div class="col-lg-4">
                  <label class="form-label mb-3">Subject:</label>
               </div>
               <div class="col-lg-8">
                  <input type="text" name="subject" class="form-control mb-3"  id="subject">
               </div>
               <div class="col-lg-12">
                  <label class="form-label">Message:</label>
                  <input type="hidden" name="user_id" id="user_id">
                  <textarea id="message" class="form-control mb-3" name="Message"></textarea>
                  <span id="error_message" class="text-danger"></span>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="savechanges">Send</button>
         </div>
      </div>
   </div>
</div>
