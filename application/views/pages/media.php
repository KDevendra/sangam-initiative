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
                    <h4 class="card-title mb-0 flex-grow-1">Media Content</h4>
                    <div class="flex-shrink-0">
                        <button type="button" id="addNewmedia" class="btn btn-primary btn-sm material-shadow-none"><i class="ri-add-line"></i> Add Media</button>
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
function viewmedia(media_id) {
    var redirectUrl = "<?php echo base_url('media/view/'); ?>" + media_id;
    window.location.href = redirectUrl;
}
function editmedia(media_id) {
    var redirectUrl = "<?php echo base_url('media/edit/'); ?>" + media_id;
    window.location.href = redirectUrl;
}
function deletemedia(media_id) {
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
                  url: "<?php echo base_url('user-media-ation/delete/'); ?>" + media_id,
                  dataType: "json",
                  success: function (response) {
                      console.log(response);
                      if (response.status === "success") {
                          swalWithBootstrapButtons
                              .fire({
                                  title: "Deleted!",
                                  text: "Media has been deleted.",
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
                          text: "An error omediaurred while approve the application.",
                          icon: "error",
                      });
                  },
              });

            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalWithBootstrapButtons.fire({
                    title: "Cancelled",
                    text: "Your Media safe :)",
                    icon: "error",
                });
            }
        });
}
function approvemedia(media_id) {
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
            confirmButtonText: "Yes, approve it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: true,
        })
        .then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('user-media-ation/approved/'); ?>" + media_id,
                    dataType: "json",
                    success: function (response) {
                        console.log(response);
                        if (response.status === "success") {
                            swalWithBootstrapButtons
                                .fire({
                                    title: "Approved!",
                                    text: "Media has been approved.",
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
                            text: "An error omediaurred while approve the application.",
                            icon: "error",
                        });
                    },
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalWithBootstrapButtons.fire({
                    title: "Cancelled",
                    text: "Your Media safe :)",
                    icon: "error",
                });
            }
        });
}
function rejectmedia(media_id) {
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
            confirmButtonText: "Yes, reject it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: true,
        })
        .then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('user-media-ation/rejected/'); ?>" + media_id,
                    dataType: "json",
                    success: function (response) {
                        console.log(response);
                        if (response.status === "success") {
                            swalWithBootstrapButtons
                                .fire({
                                    title: "Rejected!",
                                    text: "Media has been rejected.",
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
                            text: "An error omediaurred while reject the application.",
                            icon: "error",
                        });
                    },
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalWithBootstrapButtons.fire({
                    title: "Cancelled",
                    text: "Your Media safe :)",
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
            url: "<?php echo base_url('get-media'); ?>",
            type: "GET",
            dataType: "json",
            dataSrc: "data",
        },
        columns: [
            {
                title: "Media Id",
                data: "media_id",
            },
            {
                title: "Title",
                data: "title",
            },
            {
                title: "Datetime",
                data: "created_at",
                render: function (data, type, row) {
                    return moment(data).format("MMM DD, YYYY hh:mm:ss a");
                },
            },
            {
                title: "Action",
                data: null,
                orderable: false,
                render: function (data, type, row) {
                  var buttons =
                '<div class="btn-group" role="group" aria-label="Action buttons">' +
                '<button type="button" class="btn btn-primary btn-sm" onclick="viewmedia(\'' +
                row.media_id +
                "')\">" +
                '<i class="ri-eye-line align-middle"></i> View' +
                "</button>" +
                '<button type="button" class="btn btn-warning btn-sm" onclick="editmedia(\'' +
                row.media_id +
                "')\">" +
                '<i class="ri-edit-2-fill align-middle"></i> Edit' +
                "</button>" +
                '<button type="button" class="btn btn-danger btn-sm" onclick="deletemedia(\'' +
                row.media_id +
                "')\">" +
                '<i class="ri-delete-bin-6-fill"></i> Delete' +
                "</button>" +
                "</div>";
                    return buttons;
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
    $("#addNewmedia").click(function (e) {
        e.preventDefault();
        window.location.href = "<?php echo base_url('media/add'); ?>";
    });
});
</script>
