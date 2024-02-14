<footer class="footer-area footer-wave pt-50 p-r z-1" id="contactUsDes">
    <div class="wave-shapes">
        <img src="<?php echo base_url(''); ?>include/web/images/shape/wave-shape-1.png" class="w-shape one" alt="wave shape">
        <img src="<?php echo base_url(''); ?>include/web/images/shape/wave-shape-2.png" class="w-shape two" alt="wave shape">
    </div>
    <div class="footer-wrapper text-white main-bg p-r z-1">
        <div class="container">
            <div class="footer-widget-area pt-55 pb-40 p-r z-1">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget footer-about-widget mb-40 pr-lg-70 wow fadeInDown">
                            <div class="widget-content">
                                <div class="footer-logo mb-10">
                                    <a href="<?php echo base_url(''); ?>"><img height="80px" src="<?php echo base_url(''); ?>include/web/custom/Department_Of_Telecommunications_White.png" alt="Logo"></a>
                                </div>
                                <p>Sangam is on a mission to transform infrastructure planning and design by converging digital technologies and data.
                                </p>
                                <!-- <a href="" class="main-btn filled-btn filled-white">Contact Us</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-widget contact-info-widget mb-40 wow fadeInUp">
                            <h4 class="widget-title">Get In Touch</h4>
                            <div class="widget-content">
                                <ul class="info-list">
                                    <li>C-DOT Campus, Mandi Road, Mehrauli New Delhi - 110030, India
                                    </li>
                                    <li><a href="mailto:sangam-dot@tcoe.in">Email ID: sangam-dot@tcoe.in</a></li>
                                    <li><a href="tel:+911-26598681-82">+911-26598681-82</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="footer-widget footer-nav-widget mb-40 wow fadeInDown">
                            <h4 class="widget-title">Quick Link</h4>
                            <div class="widget-content">
                                <ul class="footer-nav">
                                    <li><a href="<?php echo base_url('about') ?>">About</a></li>
                                    <li class="processOfSangamBtn"><a href="javascript:void(0)">Process of Sangam</a></li>
                                    <li class="faqsBtn"><a href="javascript:void(0)">FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="footer-widget footer-nav-widget mb-40 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                            <h4 class="widget-title">Important Link</h4>
                            <div class="widget-content">
                                <ul class="footer-nav">
                                    <li><a href="#">EOI</a></li>
                                    <li><a href="#"> Why Join</a></li>
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">Registration</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright-text">
                            <P>Copy&copy; 2023 Sangam Initiative. All Rights Reserved.</P>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="copyright-nav float-lg-right">
                            <ul>
                                <li><a href="javascript:void(0)">Visitor: <?php
                                                                            $visitors = countVisitors();
                                                                            $countVisitors = count($visitors);
                                                                            $formattedNumber = str_pad($countVisitors, 6, "0", STR_PAD_LEFT);
                                                                            echo $formattedNumber;
                                                                            ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="wrapper">
    <section>
        <i class="bx bx-cookie"></i>
        <h4>Cookies Consent</h4>
    </section>
    <div class="content">
        <p>This website use cookies to help you have a superior and more relevant browsing experience on the website.</p>
    </div>
    <div class="controls">
        <button class="button" id="acceptBtn">Accept</button>
        <button class="button" id="declineBtn">Decline</button>
    </div>
</div>
<a href="#" class="back-to-top"><i class="far fa-angle-up"></i></a>
<script src="<?php echo base_url(''); ?>include/web/vendor/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url(''); ?>include/web/vendor/popper/popper.min.js"></script>
<script src="<?php echo base_url(''); ?>include/web/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(''); ?>include/web/vendor/slick/slick.min.js"></script>
<script src="<?php echo base_url(''); ?>include/web/vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(''); ?>include/web/vendor/isotope.min.js"></script>
<script src="<?php echo base_url(''); ?>include/web/vendor/imagesloaded.min.js"></script>
<script src="<?php echo base_url(''); ?>include/web/vendor/jquery.counterup.min.js"></script>
<script src="<?php echo base_url(''); ?>include/web/vendor/jquery.waypoints.js"></script>
<script src="<?php echo base_url(''); ?>include/web/vendor/nice-select/js/jquery.nice-select.min.js"></script>
<script src="<?php echo base_url(''); ?>include/web/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url(''); ?>include/web/vendor/wow.min.js"></script>
<script src="<?php echo base_url(''); ?>include/web/js/theme.js"></script>
<script>
    function scrollToElement(targetElementId, offset) {
        var $targetElement = $('#' + targetElementId);
        if ($targetElement.length) {
            var targetOffset = $targetElement.offset().top - offset;
            $('html, body').animate({
                scrollTop: targetOffset
            }, 1500);
        } else {
            console.error("Target element with ID '" + targetElementId + "' not found.");
        }
    }

    $(document).ready(function() {
        $('.nav-link').hover(function() {
            var target = $(this).data('target');
            $('.tab-pane').removeClass('active');
            $(target).addClass('active');
            $('.nav-link').removeClass('active');
            $(this).addClass('active');
        });
        $(".content-organizations").hide();
        $(".buttonTab ul li button").click(function() {
            var tabKey = $(this).attr("data-rb-event-key");
            $(".fancy_about_item__").hide();
            if (tabKey === "tab1") {
                $(".content-individuals").show();
            } else if (tabKey === "tab2") {
                $(".content-organizations").show();
            }
        });
        $(".read-more").click(function() {
            $(".about-features-item").not($(this).closest(".about-features-item")).slideUp();
            $(this).closest(".about-features-item").parent().removeClass("col-lg-4 col-md-6 col-sm-12").addClass("col-md-12");
            $(this).closest(".about-features-item").find(".description").slideDown(1000);
            $(this).closest(".about-features-item").find(".back-button").show();
            $(this).hide();
            $(this).closest(".about-features-item").find('.text p').hide();
        });
        $(".back-button").click(function() {
            $(this).closest(".about-features-item").parent().addClass("col-md-12").addClass("col-lg-4 col-md-6 col-sm-12");
            $(this).closest(".about-features-item").find(".description").slideUp();
            $(".about-features-item").slideDown(1000);
            $(".back-button").hide();
            $(".read-more").slideDown(1000);
            $(".about-features-item .text p").slideDown(1000);
        });
        $('#EoILearnMore').on('click', function(event) {
            event.preventDefault();
            scrollToElement('EoILearnMoreDes', 200);
            var buttonId = $(this).attr('id');
            localStorage.setItem(buttonId + '_scrollTarget', 'EoILearnMoreDes');
            window.location.href = "<?php echo base_url(''); ?>";
        });
        $('.stagesOfEoIBtn').on('click', function(event) {
            event.preventDefault();
            scrollToElement('EoILearnMoreDes', 200);
            var buttonId = $(this).attr('id');
            localStorage.setItem(buttonId + '_scrollTarget', 'stagesOfEoIDes');
            window.location.href = '<?php echo base_url(''); ?>expression-of-interest';
        });
        $('#exploreBtn').on('click', function(event) {
            event.preventDefault();
            var offset = $('#exploreBtnDes').offset().top - 420;
            $('html, body').animate({
                scrollTop: offset
            }, 1500);
        });

        $('.aptChoiceBtn').on('click', function(event) {
            event.preventDefault();
            scrollToElement('aptChoiceDes', 0);
            var buttonId = $(this).attr('id');
            localStorage.setItem(buttonId + '_scrollTarget', 'aptChoiceDes');
            window.location.href = "<?php echo base_url(''); ?>";
        });
        $('#matterNowBtn').on('click', function(event) {
            event.preventDefault();
            scrollToElement('matterNowDes', 0);
            var buttonId = $(this).attr('id');
            localStorage.setItem(buttonId + '_scrollTarget', 'matterNowDes');
            window.location.href = "<?php echo base_url(''); ?>";
        });
        $('.howToJoin').on('click', function(event) {
            event.preventDefault();
            scrollToElement('matterNowDes', 0);
            var buttonId = $(this).attr('id');
            localStorage.setItem(buttonId + '_scrollTarget', 'processOfSangamDes');
            window.location.href = "<?php echo base_url(''); ?>";
        });
        $('.whyToJoinBtn').on('click', function(event) {
            event.preventDefault();
            scrollToElement('aptChoiceDes', 0);
            var buttonId = $(this).attr('id');
            localStorage.setItem(buttonId + '_scrollTarget', 'whyToJoinDes');
            window.location.href = "<?php echo base_url(''); ?>";
        });
        $('.contactUsBtn').on('click', function(event) {
            event.preventDefault();
            scrollToElement('aptChoiceDes', 0);
            var buttonId = $(this).attr('id');
            localStorage.setItem(buttonId + '_scrollTarget', 'contactUsDes');
            window.location.href = "<?php echo base_url(''); ?>";
        });
        $('.participateBtn').on('click', function(event) {
            event.preventDefault();
            scrollToElement('participateDes', 0);
            var buttonId = $(this).attr('id');
            localStorage.setItem(buttonId + '_scrollTarget', 'participateDes');
            window.location.href = "<?php echo base_url(''); ?>";
        });
        $('.processOfSangamBtn').on('click', function(event) {
            event.preventDefault();
            scrollToElement('participateDes', 0);
            var buttonId = $(this).attr('id');
            localStorage.setItem(buttonId + '_scrollTarget', 'processOfSangamDes');
            window.location.href = "<?php echo base_url(''); ?>";
        });
        $('.faqsBtn').on('click', function(event) {
            event.preventDefault();
            scrollToElement('participateDes', 0);
            var buttonId = $(this).attr('id');
            localStorage.setItem(buttonId + '_scrollTarget', 'faqsDes');
            window.location.href = "<?php echo base_url(''); ?>";
        });
        $('.eligibilityGuidelinesBtn').on('click', function(event) {
            event.preventDefault();
            scrollToElement('participateDes', 0);
            var buttonId = $(this).attr('id');
            localStorage.setItem(buttonId + '_scrollTarget', 'eligibilityGuidelinesDes');
            window.location.href = "<?php echo base_url(''); ?>";
        });
        $('.outreachBtn').on('click', function(event) {
            event.preventDefault();
            scrollToElement('outreachDes', 0);
            var buttonId = $(this).attr('id');
            localStorage.setItem(buttonId + '_scrollTarget', 'outreachDes');
            window.location.href = "<?php echo base_url(''); ?>";
        });
        $('#curatedContentBtn').on('click', function(event) {
            event.preventDefault();
            scrollToElement('participateDes', 0);
            var buttonId = $(this).attr('id');
            localStorage.setItem(buttonId + '_scrollTarget', 'curatedContentDes');
            window.location.href = "<?php echo base_url(''); ?>";
        });

        $('#EoILearnMore,.outreachBtn, .aptChoiceBtn, .eligibilityGuidelinesBtn, #matterNowBtn, .participateBtn, .whyToJoinBtn,.contactUsBtn, .processOfSangamBtn, .stagesOfEoIBtn, .faqsBtn, #curatedContentBtn').each(function() {
            var buttonId = $(this).attr('id');
            var scrollTarget = localStorage.getItem(buttonId + '_scrollTarget');
            if (scrollTarget) {
                localStorage.removeItem(buttonId + '_scrollTarget');
                scrollToElement(scrollTarget, buttonId === 'EoILearnMore' ? 200 : (buttonId === 'exploreBtn' ? 210 : 100));
            }
        });
        $('.icon-btn').click(function() {
            $('.testimonial-section').toggleClass('full-width');
        });
    });
    const cookieBox = document.querySelector(".wrapper"),
        buttons = document.querySelectorAll(".button");
    const executeCodes = () => {
        if (document.cookie.includes("codinglab")) return;
        cookieBox.classList.add("show");
        buttons.forEach((button) => {
            button.addEventListener("click", () => {
                cookieBox.classList.remove("show");
                if (button.id == "acceptBtn") {
                    document.cookie = "cookieBy= codinglab; max-age=" + 60 * 60 * 24 * 30;
                }
            });
        });
    };
    window.addEventListener("load", executeCodes);
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
?>
</body>

</html>