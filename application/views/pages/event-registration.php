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
                    <div class="card-header">
                        <h5 class="card-title mb-0">Registered User's List</h5>
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
                success: function(response) {
                    console.log(response);
                    if (response.status === 'success') {
                        swalWithBootstrapButtons.fire({
                            title: "Approved!",
                            text: "Your application has been approved.",
                            icon: "success"
                        }).then(function() {
                            var userLevel = "0";
                            var userId = "2";
                            var dataTable = initializeDataTable(userLevel, userId);
                        });
                    }
                },
                error: function(xhr, status, error) {
                    swalWithBootstrapButtons.fire({
                        title: "Error",
                        text: "An error occurred while deleting the file.",
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
function rejectedApplication(registration_id) {
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
                success: function(response) {
                    console.log(response);
                    if (response.status === 'success') {
                        swalWithBootstrapButtons.fire({
                            title: "Rejected!",
                            text: "Your application has been approved.",
                            icon: "success"
                        }).then(function() {
                            var userLevel = "0";
                            var userId = "2";
                            var dataTable = initializeDataTable(userLevel, userId);
                        });
                    }
                },
                error: function(xhr, status, error) {
                    swalWithBootstrapButtons.fire({
                        title: "Error",
                        text: "An error occurred while deleting the file.",
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
        columns: [{
                title: "User Name",
                data: "full_name"
            },
            {
                title: "Reg ID",
                data: "registration_id"
            },
            {
                title: "Contact Number",
                data: "phone_number"
            },
            {
                title: "Email Address",
                data: "email"
            },
            {
                title: "Event",
                data: "event_name"
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
                title: "Status",
                data: "status",
                render: function(data, type, row) {
                    var status_text, st
