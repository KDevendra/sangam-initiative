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
         </div>
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header align-items-center d-flex">
                   <h4 class="card-title mb-0 flex-grow-1">Unverified User's List</h4>
                   <div class="flex-shrink-0">
                       <button type="button" id="sendEmailButton" class="btn btn-primary btn-sm material-shadow-none"><i class="ri-mail-unread-fill"></i> Send Email</button>
                   </div>
               </div>
               <div class="card-body">
                  <table id="example" class="display table table-bordered dt-responsive" style="width: 100%;"></table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
function initializeDataTable() {
    if ($.fn.DataTable.isDataTable('#example')) {
        $('#example').DataTable().destroy();
    }

    var dataTable = $("#example").DataTable({
        ajax: {
            url: "<?php echo base_url('get-unverified-user-list'); ?>",
            type: "GET",
            dataType: "json",
            dataSrc: "data",
        },
        columns: [{
                title: "",
                data: null,
                orderable: false,
                render: function(data, type, row) {
                    return '<div class="form-check"><input class="form-check-input fs-15" type="checkbox" id="check_' + row.user_id + '" value="' + row.user_id + '"></div>';
                }
            },
            {
                title: "User Name",
                data: "user_name"
            },
            {
                title: "User ID",
                data: "user_id"
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
                title: "Registration Datetime ",
                data: "created_at",
                render: function(data, type, row) {
                    return moment(data).format('MMM DD, YYYY hh:mm:ss a');
                }
            },
            {
                title: "Status",
                data: "is_verified",
                render: function(data, type, row) {
                    return (data == 1) ? '<span class="badge bg-success">Verified</span>' : '<span class="badge bg-danger">Unverified</span>';
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
                    buttons += '<li><a href="javascript:void(0)" class="dropdown-item" onclick="viewUser(\'' + row.user_id + '\')"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>';


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

function showLoader() {
    $(".loader").show();
    $('#sendEmailButton').prop("disabled", true).html('<span class="loader"></span>');
}

function hideLoader() {
    $(".loader").hide();
    $('#sendEmailButton').prop("disabled", false).html("<i class='ri-mail-unread-fill'></i> Send Email");
}
var $ = jQuery.noConflict();
$(document).ready(function() {
    var dataTable = initializeDataTable();
    $('#sendEmailButton').click(function() {
        var checkedEmails = [];
        var atLeastOneChecked = false;
        dataTable.rows().every(function() {
            var rowData = this.data();
            if ($(this.node()).find('input[type="checkbox"]').prop('checked')) {
                checkedEmails.push(rowData.email);
                atLeastOneChecked = true;
            }
        });

        if (!atLeastOneChecked) {
            Swal.fire({
                icon: "error",
                text: "Please select at least one email to send.",
            });
            return;
        }

        $.ajax({
            url: "<?php echo base_url('send-email-unverified-users')?>",
            type: 'POST',
            data: {
                emails: checkedEmails
            },
            beforeSend: showLoader,
            success: function(response) {
                hideLoader();
                Swal.fire({
                    icon: "success",
                    text: "The email has been sent successfully.",
                });
            },
            error: function(xhr, status, error) {
                hideLoader();
                Swal.fire({
                    icon: "error",
                    text: "Something went wrong",
                });
            }
        });
    });

});
</script>
