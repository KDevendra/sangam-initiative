<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8" />
    <title><?php if (isset($title) && !empty($title)) {
                echo $title;
            } else {
                echo "Sangam Initiative";
            } ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?php echo base_url(''); ?>include/web/custom/favicon.png" />
    <script src="<?php echo base_url(''); ?>include/admin/js/layout.js"></script>
    <link href="<?php echo base_url(''); ?>include/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(''); ?>include/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(''); ?>include/admin/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(''); ?>include/admin/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(''); ?>include/admin/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
                                        <div>
                                            <h5 class="text-primary" style="display: flex;justify-content: space-between;">Register for 'Digital Twin: Sangam Initiative' <a href="<?php echo base_url('') ?>"><i class="ri-home-smile-fill"></i></a> </h5>
                                            <p class="text-muted">Join the Transformation of Infrastructure Planning.</p>
                                        </div>
                                        <div class="mt-4">
                                            <form id="sign-up" class="needs-validation" novalidate>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" checked name="register_as" id="register_as1" value="Individual">
                                                    <label class="form-check-label" for="register_as1">Individual</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="register_as" id="register_as2" value="Organization">
                                                    <label class="form-check-label" for="register_as2">Organization</label>
                                                </div>
                                                <div id="contanterIndividual">
                                                    <div class="row mt-3">
                                                        <div class="mb-3 col-md-6">
                                                            <label for="username" class="form-label"> Full Name<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter full name" required />
                                                            <div class="invalid-feedback">
                                                                Please enter name
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label for="dateOfBirth" id="dateOfBirthLable" class="form-label d-flex">
                                                                <span> Date of Birth </span>
                                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Age 18 years or older to register">
                                                                    <a href="javascript:void(0)" class="text-muted"><i class="ri-info-i"></i></a>
                                                                </div>
                                                            </label>
                                                            <input type="date" class="form-control" id="datOfBirth" name="datOfBirth" required="" placeholder="DD-MM-YYYY">

                                                            <div class="invalid-feedback">
                                                                Please select date of birth
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required />
                                                            <div class="invalid-feedback">
                                                                Please enter email
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label for="contactNo" class="form-label">Contact Number<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" minlength="10" maxlength="10" pattern="[789][0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9" id="contactNo" name="contactNo" placeholder="Enter contact number" required />
                                                            <div class="invalid-feedback">
                                                                Please enter contact number
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label" for="password-input">Password<span class="text-danger">*</span></label>
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
                                                        <div class="mb-3 col-md-6" id="feildExperience">
                                                            <label for="Experience" class="form-label">Experience<span class="text-danger">*</span></label>
                                                            <textarea name="experience" class="form-control" required id="experience" rows="1" placeholder="Enter experience" width="100%"></textarea>
                                                            <div class="invalid-feedback">
                                                                Please enter experience
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label for="coreCompetency" class="form-label">Core Competencies<span class="text-danger">*</span></label>
                                                            <select class="form-control" id="coreCompetency" style="height: 40px !important;" name="coreCompetency[]" multiple="multiple" required>
                                                                <option value="Virtual/Digital Twin Layer">Virtual/Digital Twin Layer</option>
                                                                <option value="Dynamic Information Layer">Dynamic Information Layer</option>
                                                                <option value="Utility/Network Layer">Utility/Network Layer</option>
                                                                <option value="Built Environment Layer">Built Environment Layer</option>
                                                                <option value="GIS (Landscape) Layer">GIS (Landscape) Layer</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please select core competencies
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 col-md-12">
                                                            <p class="mb-0 fs-12 text-muted fst-italic">
                                                                By Registration implies acceptance of the Sangam Initiative <a href="#" class="text-primary text-decoration-underline fst-normal fw-medium">Guidelines</a>
                                                            </p>
                                                        </div>
                                                        <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                                            <h5 class="fs-13">Password must contain:</h5>
                                                            <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
                                                            <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                                            <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                                            <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
                                                        </div>
                                                        <div class="mt-0 d-flex justify-content-center">
                                                            <button class="btn btn-primary" id="submitBtn" type="submit">Register Now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="contanterOrganization">
                                                    <div class="row mt-3">
                                                        <div class="mb-3 col-md-6">
                                                            <label for="organizationname" class="form-label"> Organization Name<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="organizationName" name="OrganizationName" placeholder="Enter organization  name" required />
                                                            <div class="invalid-feedback">
                                                                Please enter organization name
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 col-md-6">
                                                            <label for="potentialInterestAreas" class="form-label">Potential Interest Areas<span class="text-danger">*</span></label>
                                                            <select class="form-control" id="potentialInterestAreas" style="height: 40px !important;" name="potentialInterestAreas[]" multiple="multiple" required>
                                                                <option value="Virtual/Digital Twin Layer">Virtual/Digital Twin Layer</option>
                                                                <option value="Dynamic Information Layer">Dynamic Information Layer</option>
                                                                <option value="Utility/Network Layer">Utility/Network Layer</option>
                                                                <option value="Built Environment Layer">Built Environment Layer</option>
                                                                <option value="GIS (Landscape) Layer">GIS (Landscape) Layer</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please select Potential Interest Areas
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label for="officeAddress" class="form-label">Office Address<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="officeAddress" name="officeAddress" placeholder="Enter office address" required />
                                                            <div class="invalid-feedback">
                                                                Please enter office address
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label for="organisationHQAddress" class="form-label">Organisation HQ address</label>
                                                            <input type="text" class="form-control" id="organisationHQAddress" name="organisationHQAddress" placeholder="Enter organisation HQ address" />
                                                            <div class="invalid-feedback">
                                                                Please enter organisation HQ address
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label for="websiteURL" class="form-label">Website URL of the organisation</label>
                                                            <input type="url" class="form-control" id="websiteURL" name="websiteURL" placeholder="Enter Website URL of the organisation" />
                                                            <div class="invalid-feedback">
                                                                Please enter Website URL
                                                            </div>
                                                        </div>
                                                        <div class="mt-0 d-flex justify-content-center" style="gap: 10px;">
                                                            <button class="btn btn-secondary" type="button" id="btnBackToTypeSelection">Previous Step</button>
                                                            <button class="btn btn-primary" id="submitBtn" type="submit">Register Now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="mt-2 text-center">
                                            <p class="mb-0">Already have an account ? <a href="<?php echo base_url('sign-in'); ?>" class="fw-semibold text-primary text-decoration-underline">Login</a></p>
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
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        $(document).ready(function() {
            $('[data-bs-toggle="tooltip"]').tooltip();

            function showLoader() {
                $(".loader").show();
                $('button[type="submit"]').prop("disabled", true).html('<span class="loader"></span>');
            }

            function hideLoader() {
                $(".loader").hide();
                $('button[type="submit"]').prop("disabled", false).html("Register Now");
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
                                    window.location.href = "<?php echo base_url('verify-account/') ?>" + response.user_id;
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
                if (validateForm()) {
                    var $signUp = $(this);
                    var formData = $signUp.serialize();
                    submitForm(formData);
                }
            });

            $('#contanterOrganization').hide();

            $('input[type="radio"][name="register_as"]').change(function() {
                if (this.value === 'Organization') {
                    $('#feildExperience').hide();
                    $('#submitBtn').attr('type', 'button').text('Next Step').attr('id', 'btnNextStapeOrgnation');
                } else if (this.value === 'Individual') {
                    $('#contanterIndividual').show();
                    $('#contanterOrganization').hide();
                    $('#feildExperience').show();
                    $('#btnNextStapeOrgnation').attr('type', 'submit').text('Register Now').attr('id', 'submitBtn');
                }
            });

            $('#coreCompetency').select2({
                placeholder: 'Select core competencies...',
                allowClear: true
            });

            $('#potentialInterestAreas').select2({
                placeholder: 'Select potential interest Areas...',
                allowClear: true
            });

            function validateForm() {
                var isValid = true;

                var fullName = $("#fullName").val();
                if (!fullName) {
                    $("#fullName").addClass("is-invalid");
                    isValid = false;
                } else {
                    $("#fullName").removeClass("is-invalid");
                }

                var dateOfBirth = $("#datOfBirth").val();
                if (!dateOfBirth) {
                    $("#datOfBirth").addClass("is-invalid");
                    isValid = false;
                } else {
                    var dob = new Date(dateOfBirth);
                    var today = new Date();
                    var eighteenYearsAgo = new Date(today.getFullYear() - 18, today.getMonth(), today.getDate());
                    if (dob > eighteenYearsAgo) {
                        $("#datOfBirth").addClass("is-invalid");
                        $("#datOfBirth").next(".invalid-feedback").text("You must be 18 years or older to register.");
                        isValid = false;
                    } else {
                        $("#datOfBirth").removeClass("is-invalid");
                    }
                }

                var email = $("#email").val();
                var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                if (!email || !emailPattern.test(email)) {
                    $("#email").addClass("is-invalid");
                    isValid = false;
                } else {
                    $("#email").removeClass("is-invalid");
                }

                var contactNo = $("#contactNo").val();
                if (!contactNo) {
                    $("#contactNo").addClass("is-invalid");
                    isValid = false;
                } else {
                    $("#contactNo").removeClass("is-invalid");
                }

                var password = $("#password-input").val();
                if (!password) {
                    $("#password-input").addClass("is-invalid");
                    isValid = false;
                } else {
                    $("#password-input").removeClass("is-invalid");
                }

                var coreCompetency = $("#coreCompetency").val();
                if (!coreCompetency || coreCompetency.length === 0) {
                    $("#coreCompetency").next(".select2-container").addClass("is-invalid");
                    isValid = false;
                } else {
                    $("#coreCompetency").next(".select2-container").removeClass("is-invalid");
                }

                var registerAs = $("input[name='register_as']:checked").val();
                if (registerAs === "Individual") {
                    var experience = $("#experience").val();
                    if (!experience) {
                        $("#experience").addClass("is-invalid");
                        isValid = false;
                    } else {
                        $("#experience").removeClass("is-invalid");
                    }
                }
                return isValid;
            }

            $(document).on("click", "#btnNextStapeOrgnation", function() {
                if (validateForm()) {
                    $('#contanterOrganization').show();
                    $('#contanterIndividual').hide();
                    $('#btnNextStapeOrgnation').text('Register Now').attr('id', 'submitBtn');
                }
            });
            $(document).on("click", "#btnBackToTypeSelection", function() {
                $('#contanterOrganization').hide();
                $('#contanterIndividual').show();
                $('#submitBtn').text('Next Step').attr('id', 'btnNextStapeOrgnation');

            });



        });
    </script>
</body>

</html>