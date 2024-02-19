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
                        <h5 class="card-title mb-0">Application's List</h5>
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
    function viewUser(application_id) {
        var redirectUrl = "<?php echo base_url('eoi-application/view/'); ?>" + application_id;
        window.location.href = redirectUrl;
    }

    function initializeDataTable() {
        if ($.fn.DataTable.isDataTable('#ajax-datatables')) {
            $('#ajax-datatables').DataTable().destroy();
        }

        var dataTable = $("#ajax-datatables").DataTable({
            ajax: {
                url: "<?php echo base_url('get-eoi-application'); ?>",
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
                    title: "Status",
                    data: "status",
                    render: function(data, type, row) {
                        return (data == 1) ? '<span class="badge bg-warning">Pending</span>' : '<span class="badge bg-danger">Unverified</span>';
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
                        buttons += '<li><a href="javascript:void(0)" class="dropdown-item" onclick="viewUser(\'' + row.application_id + '\')"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>';
                        // buttons += '<li><a href="javascript:void(0)" class="dropdown-item" onclick="editUser(\'' + row.application_id + '\')"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>';
                        // buttons += '<li><a href="javascript:void(0)" class="dropdown-item" onclick="deleteUser(\'' + row.application_id + '\')"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li>';
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

    function animateCounter(element, target) {
        var current = 0;
        var increment = 1;
        var speed = 20;

        var interval = setInterval(function() {
            if (current >= target) {
                clearInterval(interval);
                current = target;
            }
            element.text(current);
            current += increment;
        }, speed);
    }
    var $ = jQuery.noConflict();
    $(document).ready(function() {
        var dataTable = initializeDataTable();

    });
</script>
