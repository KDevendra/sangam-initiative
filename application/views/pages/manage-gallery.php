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
            <div class="card card-height-100">
               <div class="card-header text-center">
                  <h4 class="card-title mb-0 flex-grow-1">Manage gallery</h4>
               </div>
               <div class="card-body">
                  <form class="dropzone" id="my-awesome-dropzone">
                      <div class="row">
                          <div class="col-md-6">
                            <select class="form-control" name="event_name" id="event_name">
                               <option value="">--- Select Option ---</option>
                               <option value="Delhi - India’s Enterprise Hub">Delhi - India’s Enterprise Hub</option>
                               <option value="Bangalore - India’s Silicon Valley">Bangalore - India’s Silicon Valley</option>
                               <option value="Hyderabad - India’s Innovation Hub">Hyderabad - India’s Innovation Hub</option>
                            </select>
                            <p class="text-danger" id="error_event_name"></p>
                          </div>
                          <div class="col-md-6">
                            <input type="text" readonly class="form-control" placeholder="Event Value" id="location" name="location">
                          </div>
                      </div>
                  </form>
                  <div class="d-flex justify-content-center">
                     <button type="button" class="btn btn-sm btn-primary mt-2" id="uploadButton"><i class="ri-upload-cloud-2-fill"></i> Upload</button>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header align-items-center d-flex">
                  <h4 class="card-title mb-0 flex-grow-1">Gallery Images</h4>
               </div>
               <div class="card-body">
                  <table id="example" class="display table table-bordered dt-responsive" style="width: 100%;"></table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="imageViewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <img id="modalImage" width="100%" src="" alt="Image">
      </div>
    </div>
  </div>
</div>
<script>
function viewImage(imageUrl) {
    var imageUrl = "<?php echo base_url('');?>" + imageUrl;
    $("#modalImage").attr("src", imageUrl);
    $("#imageViewModal").modal("show");
}
function deleteImage(id) {
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
                    url: "<?php echo base_url('delete-image/delete/'); ?>" + id,
                    dataType: "json",
                    success: function (response) {
                        console.log(response);
                        if (response.status === "success") {
                            swalWithBootstrapButtons
                                .fire({
                                    title: "Deleted!",
                                    text: "Image has been deleted.",
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
function initializeDataTable() {
    if ($.fn.DataTable.isDataTable("#example")) {
        $("#example").DataTable().destroy();
    }

    var dataTable = $("#example").DataTable({
        ajax: {
            url: "<?php echo base_url('get-gallery-images'); ?>",
            type: "GET",
            dataType: "json",
            dataSrc: "data",
        },
        columns: [
            {
                title: "Event Name",
                data: "event_name",
            },
            {
                title: "Venue",
                data: "location",
            },
            {
                title: "Image",
                data: "file_path",
                render: function (data, type, row) {
                    return '<img src="' + data + '" alt="Image" style="max-width: 100%; max-height: 100px;">';
                },
            },
            {
                title: "Upload Datetime",
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
                        '<button type="button" class="btn btn-primary btn-sm" onclick="viewImage(\'' +
                        row.file_path +
                        "')\">View</button>" +
                        '<button type="button" class="btn btn-danger btn-sm" onclick="deleteImage(\'' +
                        row.id +
                        "')\">" +
                        " Delete" +
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
function showLoader() {
    $(".loader").show();
    $("#savechanges").prop("disabled", true).html('<span class="loader"></span>');
}
function hideLoader() {
    $(".loader").hide();
    $("#savechanges").prop("disabled", false).html("Send");
}
var $ = jQuery.noConflict();
$(document).ready(function () {
    var dataTable = initializeDataTable();
    var myDropzone = new Dropzone("#my-awesome-dropzone", {
        url: "<?php echo base_url('AdminController/upload_image');?>",
        maxFilesize: 5,
        acceptedFiles: "image/*",
        addRemoveLinks: true,
        dictDefaultMessage: "Drop images here or click to upload",
        autoProcessQueue: false,
        init: function () {
            var dropzone = this;
            document.getElementById("uploadButton").addEventListener("click", function () {
                dropzone.processQueue();
            });
            this.on("sending", function (file, xhr, formData) {
                formData.append("event_name", document.getElementById("event_name").value);
                formData.append("location", document.getElementById("location").value);
            });
            this.on("success", function (file, response) {
                console.log(response);
                dropzone.removeFile(file);
            });
            this.on("removedfile", function (file) {});
        },
    });
    $("#event_name").change(function () {
        var selectedEvent = $(this).val();
        var venueInput = $("#location");
        var eventDateInput = $("#event_date");
        switch (selectedEvent) {
            case "Delhi - India’s Enterprise Hub":
                venueInput.val("Delhi");
                break;
            case "Bangalore - India’s Silicon Valley":
                venueInput.val("Bangalore");
                break;
            case "Hyderabad - India’s Innovation Hub":
                venueInput.val("Hyderabad");
                break;
            default:
                venueInput.val("");
                break;
        }
        var eventName = $("#event_name").val();
        if (!eventName) {
            $("#error_event_name").text("Please select an event name.");
            return false;
        } else {
            $("#error_event_name").text("");
        }
    });
    $("#uploadButton").on("click", function () {
        var eventName = $("#event_name").val();
        if (!eventName) {
            $("#error_event_name").text("Please select an event name.");
            return false;
        }
        myDropzone.processQueue();
        myDropzone.on("queuecomplete", function () {
            initializeDataTable();
        });
    });
});
</script>
