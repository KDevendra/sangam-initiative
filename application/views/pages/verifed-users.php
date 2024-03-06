<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0"><?php $segment = $this->uri->segment(1); $segmentWithSpaces = str_replace('-', ' ', $segment); echo ucwords($segmentWithSpaces); ?></h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Registered User</a></li>
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Verified User's List</h4>
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
<div id="sendUserEmailModel" class="modal fade" tabindex="-1" aria-labelledby="sendUserEmailLabel" aria-hidden="true" style="display: none;">
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
                 <input type="text" readonly class="form-control mb-3" name="to" value="" id="to">
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
                 <textarea id="message" class="form-control mb-3" name="Message"></textarea>
                 <span id="error_message" class="text-danger"></span>
              </div>
           </div>
        </div>
        <div class="modal-footer">
           <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
           <button type="button" class="btn btn-primary" id="savechanges">Send</button>
        </div>
     </div>
  </div>
</div>
<script>
function viewUser(user_id) {
    var redirectUrl = "<?php echo base_url('users/view/'); ?>" + user_id;
    window.location.href = redirectUrl;
}
function initializeDataTable() {
    if ($.fn.DataTable.isDataTable("#example")) {
        $("#example").DataTable().destroy();
    }

    var dataTable = $("#example").DataTable({
        ajax: {
            url: "<?php echo base_url('get-verified-user-list'); ?>",
            type: "GET",
            dataType: "json",
            dataSrc: "data",
        },
        columns: [
            {
                title: "",
                data: null,
                orderable: false,
                render: function (data, type, row) {
                    return '<div class="form-check"><input class="form-check-input fs-15" type="checkbox" id="check_' + row.user_id + '" value="' + row.user_id + '"></div>';
                },
            },
            {
                title: "User Name",
                data: "user_name",
            },
            {
                title: "User ID",
                data: "user_id",
            },
            {
                title: "Contact Number",
                data: "contact_no",
            },
            {
                title: "Email Address",
                data: "email",
            },
            {
                title: "Registration Datetime ",
                data: "created_at",
                render: function (data, type, row) {
                    return moment(data).format("MMM DD, YYYY hh:mm:ss a");
                },
            },
            {
                title: "Status",
                data: "is_verified",
                render: function (data, type, row) {
                    return data == 1 ? '<span class="badge bg-success">Verified</span>' : '<span class="badge bg-danger">Unverified</span>';
                },
            },
            {
                title: "Action",
                data: null,
                orderable: false,
                render: function (data, type, row) {
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
var $ = jQuery.noConflict();
$(document).ready(function () {
    var dataTable = initializeDataTable();
    var editor;
    ClassicEditor.create(document.querySelector("#message"))
        .then((newEditor) => {
            editor = newEditor;
        })
        .catch((error) => {
            console.error(error);
        });
    function showLoader() {
        $(".loader").show();
        $("#savechanges").prop("disabled", true).html('<span class="loader"></span>');
    }
    function hideLoader() {
        $(".loader").hide();
        $("#savechanges").prop("disabled", false).html("Send");
    }
    $("#sendEmailButton").click(function () {
        var checkedEmails = [];
        var atLeastOneChecked = false;
        dataTable.rows().every(function () {
            var rowData = this.data();
            if ($(this.node()).find('input[type="checkbox"]').prop("checked")) {
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
        $("#to").val(checkedEmails.join(", "));
        $("#sendUserEmailModel").modal("show");
    });
    $(document).on("click", "#savechanges", function () {
    var isValid = true;
    var message = editor.getData();
    var to = $("#to").val();
    var cc = $("#cc").val();
    var subject = $("#subject").val();
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
            cc: cc || null,
            subject: subject || null,
        };
        $.ajax({
            url: "<?php echo base_url('send-busk-message')?>",
            type: "post",
            data: postData,
            beforeSend: showLoader,
            success: function (response) {
                hideLoader();
                if (response.status === "success") {
                    $("#remark").val("");
                    $("#cc").val("");
                    $("#subject").val("");
                    $("#sendUserEmailModel").modal("hide");
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
                    text: textStatus,
                });
            },
        });
    }
});
});
</script>
