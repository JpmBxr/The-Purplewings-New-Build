<?php require('partials/head.php') ?>

<body>
    <?php require('partials/nav.php') ?>

    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="space">
        <div class="container">
            <div class="contact-feature-wrap">
                <div class="contact-feature">
                    <div class="box-icon icon-btn"><i class="fas fa-phone"></i></div>
                    <div class="media-body">
                        <h3 class="box-title">Phone Number</h3>
                        <p class="box-text"><a href="tel:+(91) 9525-950748">+(91) 9525-950748</a> <a
                                href="tel:+(91) 7277-728129">+(91) 7277-728129</a></p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="contact-feature">
                    <div class="box-icon icon-btn"><i class="fas fa-envelope"></i></div>
                    <div class="media-body">
                        <h3 class="box-title">Email Address</h3>
                        <p class="box-text"><a href="mailto:join@thepurplewings.in">join@thepurplewings.in</a>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="contact-feature">
                    <div class="box-icon icon-btn"><i class="fas fa-location-dot"></i></div>
                    <div class="media-body">
                        <h3 class="box-title">Our Address</h3>
                        <p class="box-text">Bailey Road, Patna.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require('partials/footer_hc.php') ?>

    <?php require('partials/getquote_popup.php') ?>

    <!-- Your custom JavaScript -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var getQuoteBtn1 = document.getElementById("getQuoteBtn1");
        var closeFormBtn = document.getElementById("closeFormBtn");
        var contactFormPopup = document.getElementById("contactFormPopup");

        function openPopup() {
            contactFormPopup.style.display = "block";
        }

        function closePopup() {
            contactFormPopup.style.display = "none";
        }

        getQuoteBtn1.addEventListener("click", openPopup);
        closeFormBtn.addEventListener("click", closePopup);
    });
    </script>
    <!-- End Popup -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- Custom JS Files -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/form.js"></script>

</body>
<!-- Mirrored from html.onertheme.com/tronix/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2024 11:52:03 GMT -->

</html>