<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8" />
    <title>Two Step Verification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="<?php echo base_url(''); ?>include/admin/images/favicon.ico" />
    <script src="<?php echo base_url(''); ?>include/admin/js/layout.js"></script>
    <link href="<?php echo base_url(''); ?>include/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(''); ?>include/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(''); ?>include/admin/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(''); ?>include/admin/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(''); ?>include/admin/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10">
                        <div class="card overflow-hidden card-bg-fill galaxy-border-none">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="p-lg-4 p-4 auth-one-bg h-100">
                                        <div class="bg-overlay"></div>
                                        <div class="position-relative h-100 d-flex flex-column" id="signUpPage">
                                            <div class="mb-4">
                                                <a href="<?php echo base_url(''); ?>" class="d-flex justify-content-center">
                                                    <img src="<?php echo base_url(''); ?>include/web/custom/Sangam_Initiative_White.png" alt="" height="18" />
                                                </a>
                                            </div>
                                            <div class="mt-auto">
                                                <div class="mb-3">
                                                    <i class="ri-double-quotes-l display-4 text-success"></i>
                                                </div>
                                                <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    </div>
                                                    <div class="carousel-inner text-center text-white-50 pb-5">
                                                        <div class="carousel-item active">
                                                            <p class="fs-15 fst-italic">"Embark on a Journey Through GIS and Satellite Imagery to Uncover New Horizons"</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15 fst-italic">"Connect the World: Telecom Experts Paving the Path Forward."</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15 fst-italic">"Lead the Way in Intelligence with AI, ML, and Big Data Analytics"</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="p-lg-4 p-4">
                                        <div class="mb-4">
                                            <div class="avatar-lg mx-auto">
                                                <div class="avatar-title bg-light text-primary display-5 rounded-circle">
                                                    <i class="ri-mail-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-muted text-center mx-lg-3">
                                            <h4 class="">Verify Your Email</h4>
                                            <p>
                                                Please enter the 6 digit code sent to
                                                <span class="fw-semibold">
                                                    <?php $hiddenEmail = encryptAndPartiallyDisplayEmail($email);
                                                    echo $hiddenEmail; ?>
                                                </span>
                                            </p>
                                        </div>
                                        <div id="serverSideValidation"></div>
                                        <div class="mt-4">
                                            <form id="verify-account" autocomplete="off">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="mb-3">
                                                            <label for="digit1-input" class="visually-hidden">Digit 1</label>
                                                            <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id; ?>" />
                                                            <input type="text" class="form-control form-control-lg bg-light border-light text-center" name="activationCode" onkeyup="moveToNext(1, event)" maxlength="1" id="digit1-input" />
                                                        </div>
                                                    </div>

                                                    <div class="col-2">
                                                        <div class="mb-3">
                                                            <label for="digit2-input" class="visually-hidden">Digit 2</label>
                                                            <input type="text" class="form-control form-control-lg bg-light border-light text-center" name="activationCode" onkeyup="moveToNext(2, event)" maxlength="1" id="digit2-input" />
                                                        </div>
                                                    </div>

                                                    <div class="col-2">
                                                        <div class="mb-3">
                                                            <label for="digit3-input" class="visually-hidden">Digit 3</label>
                                                            <input type="text" class="form-control form-control-lg bg-light border-light text-center" name="activationCode" onkeyup="moveToNext(3, event)" maxlength="1" id="digit3-input" />
                                                        </div>
                                                    </div>

                                                    <div class="col-2">
                                                        <div class="mb-3">
                                                            <label for="digit4-input" class="visually-hidden">Digit 4</label>
                                                            <input type="text" class="form-control form-control-lg bg-light border-light text-center" name="activationCode" onkeyup="moveToNext(4, event)" maxlength="1" id="digit4-input" />
                                                        </div>
                                                    </div>

                                                    <div class="col-2">
                                                        <div class="mb-3">
                                                            <label for="digit5-input" class="visually-hidden">Digit 5</label>
                                                            <input type="text" class="form-control form-control-lg bg-light border-light text-center" name="activationCode" onkeyup="moveToNext(5, event)" maxlength="1" id="digit5-input" />
                                                        </div>
                                                    </div>

                                                    <div class="col-2">
                                                        <div class="mb-3">
                                                            <label for="digit6-input" class="visually-hidden">Digit 6</label>
                                                            <input type="text" class="form-control form-control-lg bg-light border-light text-center" name="activationCode" onkeyup="moveToNext(6, event)" maxlength="1" id="digit6-input" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-2 d-flex justify-content-center">
                                                    <button type="submit" class="btn btn-primary" id="verifyAccountBtn">Verify OTP</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="mt-5 text-center">
                                            <p class="mb-0">Didn't receive a code ? <a href="javscript:void(0)" id="resendCode" class="fw-semibold text-primary text-decoration-underline">Resend</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer galaxy-border-none">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0">
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                <span class="text-white">Sangam Initiative</span> All Rights Reserved.</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="<?php echo base_url(''); ?>include/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(''); ?>include/admin/libs/simplebar/simplebar.min.js"></script>
    <script src="<?php echo base_url(''); ?>include/admin/libs/node-waves/waves.min.js"></script>
    <script src="<?php echo base_url(''); ?>include/admin/libs/feather-icons/feather.min.js"></script>
    <script src="<?php echo base_url(''); ?>include/admin/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="<?php echo base_url(''); ?>include/admin/js/plugins.js"></script>
    <script src="<?php echo base_url(''); ?>include/admin/js/pages/two-step-verification.init.js"></script>
    <script src="<?php echo base_url(''); ?>include/admin/libs/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?php echo base_url(''); ?>include/admin/js/pages/sweetalerts.init.js"></script>
    <script>
        $(document).ready(function() {
            $(".loader").hide();
      

            function showLoader() {
                $(".loader").show();
                $('button[type="submit"]').prop("disabled", true).html('<span class="loader"></span>');
            }

            function hideLoader() {
                $(".loader").hide();
                $('button[type="submit"]').prop("disabled", false).html("Verify OTP");
            }

            function submitForm(formData) {
                $.ajax({
                    url: "<?php echo base_url('post-verify-account'); ?>",
                    type: "post",
                    data: formData,
                    beforeSend: showLoader,
                    success: function(response) {
                        hideLoader();
                        // response = JSON.parse(response);
                        if (response.status === "error") {
                            if (response.validation_errors) {
                                $("#serverSideValidation").show().html(response.validation_errors);
                            } else if (response.message) {
                                Swal.fire({
                                    icon: "error",
                                    text: response.message,
                                });
                            } else {
                                Swal.fire({
                                    icon: "error",
                                    text: "Something went wrong",
                                });
                            }
                        } else if (response.status === "success") {
                            $("#verify-account")[0].reset();
                            Swal.fire({
                                html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#29c5f6,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">' +
                                    response.message +
                                    "</p></div></div>",
                                showCancelButton: !0,
                                showConfirmButton: !1,
                                customClass: {
                                    cancelButton: "btn btn-primary w-xs mb-1"
                                },
                                cancelButtonText: "Redirect Dashboard",
                                buttonsStyling: !1,
                                showCloseButton: !0,
                            }).then(function() {
                                window.location.href = "<?php echo base_url('admin-dashboard') ?>";
                            });

                        }
                    },
                    error: function() {
                        hideLoader();
                        Swal.fire({
                            icon: "error",
                            text: "Something went wrong",
                        });
                    },
                });
            }
            $("#verifyAccountBtn").on("click", function(event) {
                event.preventDefault();
                var user_id = $("#user_id").val();
                var digit1 = $("#digit1-input").val();
                var digit2 = $("#digit2-input").val();
                var digit3 = $("#digit3-input").val();
                var digit4 = $("#digit4-input").val();
                var digit5 = $("#digit5-input").val();
                var digit6 = $("#digit6-input").val();

                function encodeDigits(input) {
                    return input.replace(/\d/g, function(match) {
                        return encodeURIComponent(match);
                    });
                }
                var encodedActivationCode = encodeDigits(digit1 + digit2 + digit3 + digit4 + digit5 + digit6);
                var formData = "user_id=" + encodeURIComponent(user_id) + "&activation_code=" + encodedActivationCode;

                submitForm(formData);
            });
            $("#resendCode").click(function() {
                var user_id = $("#user_id").val();
                $.ajax({
                    url: "<?php echo base_url('resendOTP'); ?>",
                    type: "post",
                    data: {
                        user_id: user_id
                    },
                    beforeSend: showLoader,
                    success: function(response) {
                        hideLoader();
                        //  response = JSON.parse(response);
                        if (response.status === "error") {
                            if (response.validation_errors) {
                                $("#serverSideValidation").show().html(response.validation_errors);
                            } else if (response.message) {
                                Swal.fire({
                                    html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Oops...! Something went Wrong !</h4><p class="text-muted mx-4 mb-0">' +
                                        response.message +
                                        "</p></div></div>",
                                    showCancelButton: !0,
                                    showConfirmButton: !1,
                                    customClass: {
                                        cancelButton: "btn btn-primary w-xs mb-1"
                                    },
                                    cancelButtonText: "Dismiss",
                                    buttonsStyling: !1,
                                    showCloseButton: !0,
                                });
                            } else {
                                Swal.fire({
                                    html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Oops...! Something went Wrong !</h4><p class="text-muted mx-4 mb-0">' +
                                        response.message +
                                        "</p></div></div>",
                                    showCancelButton: !0,
                                    showConfirmButton: !1,
                                    customClass: {
                                        cancelButton: "btn btn-primary w-xs mb-1"
                                    },
                                    cancelButtonText: "Dismiss",
                                    buttonsStyling: !1,
                                    showCloseButton: !0,
                                });
                            }
                        } else if (response.status === "success") {
                            Swal.fire({
                                html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#29c5f6,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">' +
                                    response.message +
                                    "</p></div></div>",
                                showCancelButton: !0,
                                showConfirmButton: !1,
                                customClass: {
                                    cancelButton: "btn btn-primary w-xs mb-1"
                                },
                                cancelButtonText: "Back",
                                buttonsStyling: !1,
                                showCloseButton: !0,
                            });
                        }
                    },
                    error: function() {
                        hideLoader();
                        Swal.fire({
                            icon: "error",
                            text: "Something went wrong",
                        });
                    },
                });
            });
        });
    </script>
</body>

</html>