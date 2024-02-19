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
    function viewUser(user_id) {
        var redirectUrl = "<?php echo base_url('users/view/'); ?>" + user_id;
        window.location.href = redirectUrl;
    }

    function editUser(user_id) {
        var redirectUrl = "<?php echo base_url('users/edit/'); ?>" + user_id;
        window.location.href = redirectUrl;
    }

    function deleteUser(user_id) {
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
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('Users/delete/'); ?>" + user_id,
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        if (response.status === 'success') {
                            swalWithBootstrapButtons.fire({
                                title: "Deleted!",
                                text: "Your file has been deleted.",
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
                    text: "Your imaginary file is safe :)",
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
                url: "<?php echo base_url('get-user-list'); ?>",
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
        $("#addNewUser").click(function(e) {
            e.preventDefault();
            window.location.href = "<?php echo base_url('users/add'); ?>";
        });
    });
</script>