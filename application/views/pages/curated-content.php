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
                    <h4 class="card-title mb-0 flex-grow-1">Curated Content</h4>
                    <div class="flex-shrink-0">
                        <button type="button" id="addNewCuratedContent" class="btn btn-primary btn-sm material-shadow-none"><i class="ri-add-line"></i> Add Curated Content</button>
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
function viewCuratedContent(cc_id) {
    var redirectUrl = "<?php echo base_url('curated-content/view/'); ?>" + cc_id;
    window.location.href = redirectUrl;
}
function editCuratedContent(cc_id) {
    var redirectUrl = "<?php echo base_url('curated-content/edit/'); ?>" + cc_id;
    window.location.href = redirectUrl;
}
function approveCuratedContent(cc_id) {
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
                    url: "<?php echo base_url('user-curated-content-ation/approved/'); ?>" + cc_id,
                    dataType: "json",
                    success: function (response) {
                        console.log(response);
                        if (response.status === "success") {
                            swalWithBootstrapButtons
                                .fire({
                                    title: "Approved!",
                                    text: "Curated content has been approved.",
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
                    text: "Your imaginary application is safe :)",
                    icon: "error",
                });
            }
        });
}
function rejectCuratedContent(cc_id) {
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
                    url: "<?php echo base_url('user-curated-content-ation/rejected/'); ?>" + cc_id,
                    dataType: "json",
                    success: function (response) {
                        console.log(response);
                        if (response.status === "success") {
                            swalWithBootstrapButtons
                                .fire({
                                    title: "Rejected!",
                                    text: "Curated content has been rejected.",
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
                            text: "An error occurred while reject the application.",
                            icon: "error",
                        });
                    },
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalWithBootstrapButtons.fire({
                    title: "Cancelled",
                    text: "Your imaginary application is safe :)",
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
            url: "<?php echo base_url('get-curated-content'); ?>",
            type: "GET",
            dataType: "json",
            dataSrc: "data",
        },
        columns: [
            {
                title: "CC Id",
                data: "cc_id",
            },
            {
                title: "Title",
                data: "title",
            },
            {
                title: "Author Name",
                data: "author_name",
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
                    var user_level = "<?php echo $this->session->login['user_level'];?>";
                    var buttons = "";
                    if (user_level === "1") {
                        if (row.status === "1") {
                            var buttons = (buttons +=
                                '<div class="btn-group" role="group" aria-label="Action buttons">' +
                                '<button type="button" class="btn btn-primary btn-sm" onclick="viewCuratedContent(\'' +
                                row.cc_id +
                                "')\">" +
                                " View" +
                                "</button>" +
                                '<button type="button" class="btn btn-info btn-sm" onclick="approveCuratedContent(\'' +
                                row.cc_id +
                                "')\">" +
                                " Approve" +
                                "</button>" +
                                '<button type="button" class="btn btn-danger btn-sm" onclick="rejectCuratedContent(\'' +
                                row.cc_id +
                                "')\">" +
                                " Reject" +
                                "</button>" +
                                "</div>");
                        } else {
                            var buttons =
                                '<div class="btn-group" role="group" aria-label="Action buttons">' +
                                '<button type="button" class="btn btn-primary btn-sm" onclick="viewCuratedContent(\'' +
                                row.cc_id +
                                "')\">" +
                                '<i class="ri-eye-line align-middle"></i> View' +
                                "</button>" +
                                '<button type="button" class="btn btn-warning btn-sm" onclick="editCuratedContent(\'' +
                                row.cc_id +
                                "')\">" +
                                '<i class="ri-edit-2-fill align-middle"></i> Edit' +
                                "</button><div>";
                        }
                    } else {
                        buttons +=
                            '<div class="dropdown d-inline-block">' +
                            '<button class="btn btn-soft-secondary btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">' +
                            '<i class="ri-more-fill align-middle"></i>' +
                            "</button>" +
                            '<ul class="dropdown-menu dropdown-menu-end">' +
                            '<li><a href="javascript:void(0)" class="dropdown-item" onclick="viewCuratedContent(\'' +
                            row.cc_id +
                            '\')"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>' +
                            "</ul>" +
                            "</div>";
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
    $("#addNewCuratedContent").click(function (e) {
        e.preventDefault();
        window.location.href = "<?php echo base_url('curated-content/add'); ?>";
    });
});
</script>
