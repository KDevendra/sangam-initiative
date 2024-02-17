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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
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
                                                    <img src="<?php echo base_url(''); ?>include/web/custom/Department_Of_Telecommunications_White.png" alt="" height="18" />
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
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h5 class="text-primary" style="display: flex;justify-content: space-between;">Forgot Account Details<a href="<?php echo base_url('') ?>"><i class="ri-home-smile-fill"></i></a> </h5>
                                            <p class="text-muted">Welcome to Sangam: Your gateway to digital transformation.</p>
                                            <div id="serverSideValidation"></div>
                                        </div>
                                        <div class="mt-4">
                                            <form id="forgot-password">
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                                                        <input class="form-control" placeholder="Enter your email" required name="email" type="text" />
                                      
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label" for="captcha-input">Captcha <span class="text-danger">*</span></label>
                                                        <div class="position-relative auth-pass-inputgroup">
                                                            <div class="catpchaparent">
                                                                <div class="capchchild">
                                                                    <input type="text" class="form-control" id="valiIpt" placeholder="Enter CAPTCHA" name="captcha_code" maxlength="4" autocomplete="off" pattern="[0-9 .]+" required />
                                            
                                                                </div>
                                                                <div class="capchchild">
                                                                    <canvas id="valicode"></canvas>
                                                                </div>
                                                                <div class="capchchild" id="toggle" style="cursor: pointer;margin-top: 8px;">
                                                                    <button type="button" class="btn btn-sm btn-danger" id="refreshButton"><i class="ri-restart-line"></i> Refresh</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-0 d-flex justify-content-center">
                                                    <button class="btn btn-primary" type="submit">Next</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="mt-2 text-center">
                                            <p class="mb-0">Already have an account ? <a href="<?php echo base_url('login'); ?>" class="fw-semibold text-primary text-decoration-underline">Login</a></p>
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
    <script src="<?php echo base_url(''); ?>include/admin/libs/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?php echo base_url(''); ?>include/admin/js/pages/sweetalerts.init.js"></script>
    <script>
        function randomColor() {
            let r = Math.floor(Math.random() * 256);
            let g = Math.floor(Math.random() * 256);
            let b = Math.floor(Math.random() * 256);
            return "rgb(" + r + "," + g + "," + b + ")";
        }

        function getImgValiCode() {
            let showNum = [];
            let canvasWinth = 120;
            let canvasHeight = 38;
            let canvas = document.getElementById("valicode");
            let context = canvas.getContext("2d");
            canvas.width = canvasWinth;
            canvas.height = canvasHeight;
            let sCode = "0,1,2,3,4,5,6,7,8,9";
            let saCode = sCode.split(",");
            let saCodeLen = saCode.length;
            for (let i = 0; i <= 3; i++) {
                let sIndex = Math.floor(Math.random() * saCodeLen);
                let sDeg = (Math.random() * 30 * Math.PI) / 180;
                let cTxt = saCode[sIndex];
                showNum[i] = cTxt.toLowerCase();
                let x = 10 + i * 20;
                let y = 20 + Math.random() * 8;
                context.font = "bold 25px Arial";
                context.translate(x, y);
                context.rotate(sDeg);
                context.fillStyle = randomColor();
                context.fillText(cTxt, 0, 0);
                context.rotate(-sDeg);
                context.translate(-x, -y);
            }
            for (let i = 0; i <= 5; i++) {
                context.strokeStyle = randomColor();
                context.beginPath();
                context.moveTo(Math.random() * canvasWinth, Math.random() * canvasHeight);
                context.lineTo(Math.random() * canvasWinth, Math.random() * canvasHeight);
                context.stroke();
            }
            for (let i = 0; i < 30; i++) {
                context.strokeStyle = randomColor();
                context.beginPath();
                let x = Math.random() * canvasWinth;
                let y = Math.random() * canvasHeight;
                context.moveTo(x, y);
                context.lineTo(x + 1, y + 1);
                context.stroke();
            }
            rightCode = showNum.join("");
        }

        function createCaptcha() {
            let valiIpt = document.querySelector("#valiIpt");
            let toggleBtn = document.querySelector("#toggle");
            toggleBtn.addEventListener(
                "click",
                function() {
                    getImgValiCode();
                    valiIpt.value = "";
                },
                false
            );
            getImgValiCode();
            valiIpt.value = "";
        }
        $(document).ready(function() {
            createCaptcha();
            const captcha_code = $("input[name='captcha_code']");
            const isZero = (value) => (value === "0" ? false : true);
            const isRequired = (value) => (value === "" ? false : true);
            const isBetween = (length, min, max) => (length < min || length > max ? false : true);
            const isPasswordSecure = (password) => {
                const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
                return re.test(password);
            };
            const checkCaptcha = () => {
                const min = 4;
                const max = 4;
                const captcha = captcha_code.val().trim();
                if (!isRequired(captcha)) {

                    return false;
                } else if (captcha != rightCode) {
                    return false;
                } else if (!isBetween(captcha.length, min, max)) {
                    return false;
                }
                return true;
            };
            $.validator.addMethod(
                "customPattern",
                function(value, element, pattern) {
                    return this.optional(element) || pattern.test(value);
                },
                "Invalid format"
            );
            $.validator.addMethod(
                "checkCaptcha",
                function(value, element) {
                    return checkCaptcha();
                },
                "Captcha code is invalid."
            );
            $("#resetBtn").click(function(event) {
                createCaptcha();
            });
            $("#serverSideValidation").hide();
            $(".loader").hide();
            $.validator.addMethod(
                "customPattern",
                function(value, element, pattern) {
                    return this.optional(element) || pattern.test(value);
                },
                "Invalid format"
            );

            function showLoader() {
                $(".loader").show();
                $('button[type="submit"]').prop("disabled", true).html('<span class="loader"></span>');
            }

            function hideLoader() {
                $(".loader").hide();
                $('button[type="submit"]').prop("disabled", false).html("Next");
            }

            function submitForm(formData) {
                $.ajax({
                    url: "<?php echo base_url('post-forgot-password'); ?>",
                    type: "post",
                    data: formData,
                    beforeSend: showLoader,
                    success: function(response) {
                        hideLoader();
                        if (response.status === "error") {
                            if (response.validation_errors) {
                                $("#serverSideValidation").show().html(response.validation_errors);
                            } else if (response.message) {
                                Swal.fire({
                                    icon: "error",
                                    // title: "Error",
                                    text: response.message,
                                });
                            } else {
                                Swal.fire({
                                    icon: "error",
                                    // title: "Error",
                                    text: "Something went wrong",
                                });
                            }
                        } else if (response.status === "success") {
                            $("#forgot-password")[0].reset();
                            window.location.href = "<?php echo base_url('verify-reset-password/') ?>" + response.data;
                        }
                    },
                    error: function() {
                        hideLoader();
                        Swal.fire({
                            icon: "error",
                            // title: "Error",
                            text: "Something went wrong",
                        });
                    },
                });
            }
            $("#forgot-password").validate({
                rules: {
                    email: {
                        required: true,
                        email: true,
                        maxlength: 100,
                    },
                    captcha_code: {
                        required: true,
                        checkCaptcha: true,
                    },

                },
                messages: {
                    email: {
                        required: "Please enter email",
                        email: "Please enter a valid email",
                        maxlength: "Email must not exceed 100 characters",
                    },
                    captcha_code: {
                        required: "Captcha cannot be blank.",
                        checkCaptcha: "Captcha code is invalid.",
                    },

                },
                submitHandler: function(form) {
                    var $signUp = $(form);
                    var formData = $signUp.serialize();
                    submitForm(formData);
                },
            });
        });
    </script>
    <?php
    if (ENVIRONMENT === 'development') {
    } else {
    ?>
        <script>
            $(document).on("contextmenu", function() {
                return false;
            });
            $("body").css({
                "-webkit-user-select": "none",
                "-moz-user-select": "none",
                "-ms-user-select": "none",
                "user-select": "none",
            });
            $("input, textarea").css({
                "-webkit-user-select": "auto",
                "-moz-user-select": "auto",
                "-ms-user-select": "auto",
                "user-select": "auto",
            });
            $(document).on("keydown", function(event) {
                if ((event.ctrlKey || event.metaKey) && (event.keyCode === 70 || event.keyCode === 85)) {
                    event.preventDefault();
                }
            });
            document.addEventListener("keydown", function(event) {
                if ((event.ctrlKey || event.metaKey) && (event.keyCode === 67 || event.keyCode === 77)) {
                    event.preventDefault();
                }
            });
            document.addEventListener("keydown", function(event) {
                if ((event.ctrlKey || event.metaKey) && event.shiftKey && (event.code === "KeyC" || event.code === "KeyM")) {
                    event.preventDefault();
                    event.stopPropagation();
                }
            });
        </script>
        <?php
    }
        ?>t
</body>

</html>