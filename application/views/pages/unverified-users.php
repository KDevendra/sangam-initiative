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
                        <h5 class="card-title mb-0">Unverified User's List</h5>
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
    function initializeDataTable() {
        if ($.fn.DataTable.isDataTable('#ajax-datatables')) {
            $('#ajax-datatables').DataTable().destroy();
        }

        var dataTable = $("#ajax-datatables").DataTable({
            ajax: {
                url: "<?php echo base_url('get-unverified-user-list'); ?>",
                type: "GET",
                dataType: "json",
                dataSrc: "data",
            },
            columns: [{
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
                        // buttons += '<li><a href="javascript:void(0)" class="dropdown-item" onclick="editUser(\'' + row.user_id + '\')"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>';
                        // buttons += '<li><a href="javascript:void(0)" class="dropdown-item" onclick="deleteUser(\'' + row.user_id + '\')"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li>';
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
