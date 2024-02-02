<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8" />
    <title>Sign Up | Sangam Initiative - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden m-0 card-bg-fill galaxy-border-none">
                            <div class="row justify-content-center g-0">
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4 auth-one-bg h-100">
                                        <div class="bg-overlay"></div>
                                        <div class="position-relative h-100 d-flex flex-column">
                                            <div class="mb-4">
                                                <a href="<?php echo base_url(''); ?>" class="d-block">
                                                    <img src="<?php echo base_url(''); ?>include/admin/images/logo-light.png" alt="" height="18" />
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
                                                            <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15 fst-italic">" The theme is really great with an amazing customer support."</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h5 class="text-primary">Register Account</h5>
                                            <p class="text-muted">Embark on the Future: Create Your Sangam Account Now.</p>
                                        </div>
                                        <div class="mt-4">
                                            <form id="sign-up" class="needs-validation" novalidate>
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required />
                                                    <div class="invalid-feedback">
                                                        Please enter email
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="contactNo" class="form-label">Contact Number <span class="text-danger">*</span></label>
                                                    <input type="contactNo" class="form-control" id="contactNo" name="contactNo" placeholder="Enter contact number" required />
                                                    <div class="invalid-feedback">
                                                        Please enter contact number
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter username" required />
                                                    <div class="invalid-feedback">
                                                        Please enter username
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="password-input">Password</label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" name="password" id="password-input" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required />
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none" type="button" id="password-addon">
                                                            <i class="ri-eye-fill align-middle"></i>
                                                        </button>
                                                        <div class="invalid-feedback">
                                                            Please enter password
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <p class="mb-0 fs-12 text-muted fst-italic">
                                                        By registering you agree to the Sangam Initiative <a href="#" class="text-primary text-decoration-underline fst-normal fw-medium">Terms of Use</a>
                                                    </p>
                                                </div>
                                                <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                                    <h5 class="fs-13">Password must contain:</h5>
                                                    <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
                                                    <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                                    <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                                    <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
                                                </div>
                                                <div class="mt-4">
                                                    <button class="btn btn-success w-100" type="submit">Sign Up</button>
                                                </div>

                                            </form>
                                        </div>
                                        <div class="mt-5 text-center">
                                            <p class="mb-0">Already have an account ? <a href="<?php echo base_url('sign-in'); ?>" class="fw-semibold text-primary text-decoration-underline"> Signin</a></p>
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
                                <span class="text-white">Sangam Initiative</span>. Website Design & Developed by <a class="text-white" href="https://www.apwebworld.com" target="_blank">AP Web World</a>
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
    <script src="<?php echo base_url(''); ?>include/admin/js/pages/form-validation.init.js"></script>
    <script src="<?php echo base_url(''); ?>include/admin/js/pages/passowrd-create.init.js"></script>
    <script src="<?php echo base_url(''); ?>include/admin/libs/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?php echo base_url(''); ?>include/admin/js/pages/sweetalerts.init.js"></script>
    <script>
        $(document).ready(function() {
            function showLoader() {
                $(".loader").show();
                $('button[type="submit"]').prop("disabled", true).html('<span class="loader"></span>');
            }

            function hideLoader() {
                $(".loader").hide();
                $('button[type="submit"]').prop("disabled", false).html("Sign Up");
            }

            function submitForm(formData) {
                $.ajax({
                    url: "<?php echo base_url('post-sign-up'); ?>",
                    type: "post",
                    data: formData,
                    beforeSend: showLoader,
                    success: function(response) {
                        hideLoader();
                        if (response.status === "error") {
                            Swal.fire({
                                icon: "error",
                                text: response.message,
                            });
                        } else if (response.status === "success") {
                            Swal.fire({
                                html: '<div class="mt-3"><div class="avatar-lg mx-auto"><div class="avatar-title bg-light text-success display-5 rounded-circle"><i class="ri-mail-send-fill"></i></div></div><div class="mt-4 pt-2 fs-15"><h4 class="fs-20 fw-semibold">Verify Your Email</h4><p class="text-muted mb-0 mt-3 fs-13">We have sent you a verification email, <br/> Please check it.</p></div></div>',
                                showCancelButton: !1,
                                customClass: {
                                    confirmButton: "btn btn-primary mb-1"
                                },
                                confirmButtonText: "Verify Email",
                                buttonsStyling: !1,
                                showCloseButton: !0,
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "<?php echo base_url('verify-account/') ?>" + response.data;
                                }
                            });
                        } else {
                            Swal.fire({
                                icon: "error",
                                text: "Something went wrong",
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
            $("#sign-up").on("submit", function(event) {
                event.preventDefault();
                var $signUp = $(this);
                var formData = $signUp.serialize();
                submitForm(formData);
            });
        });
    </script>
</body>
</html>