<?php require('partials/head.php') ?>

<body>
    <?php require('partials/nav.php') ?>
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Team</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li>Team</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="space">
        <div class="container">
            <div class="about-card-wrap">
                <div class="about-card-img"><img src="assets/img/team/team.jpg" alt="Team"></div>
                <div class="about-card">
                    <h2 class="about-card_title">Sidhyarth</h2>
                    <p class="about-card_desig">Co-Founder & Managing Director</p>
                    <p class="about-card_text">As the Co-Founder and Managing Director of The Purplewings, Sidhyarth
                        co-launched the
                        company, His dedication to helping brands succeed on Amazon, without relying on automated
                        systems, drives The Purplewings’ commitment to excellence.</p>
                    <div class="ot-social"><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a> <a
                            target="_blank" href="#"><i class="fab fa-twitter"></i></a> <a target="_blank" href="#"><i
                                class="fab fa-instagram"></i></a> <a target="_blank" href="#"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a target="_blank" href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                    <div class="team-info-wrap">
                        <div class="team-info">
                            <div class="box-icon icon-btn"><i class="fas fa-user"></i></div>
                            <div class="media-body">
                                <p class="box-text">Experience</p>
                                <h3 class="box-title">More Than 5 Years</h3>
                            </div>
                        </div>
                        <div class="team-info">
                            <div class="box-icon icon-btn"><i class="fas fa-phone"></i></div>
                            <div class="media-body">
                                <p class="box-text">Mobile</p>
                                <h3 class="box-title"><a href="+(91) 9525-950748">+(91) 9525-950748</a></h3>
                            </div>
                        </div>
                        <div class="team-info">
                            <div class="box-icon icon-btn"><i class="fas fa-envelope"></i></div>
                            <div class="media-body">
                                <p class="box-text">Email</p>
                                <h3 class="box-title"><a href="join@thepurplewings.in">join@thepurplewings.in</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="fw-semibold mb-20 pt-5 mt-xl-4">Team</h4>
            <p class="mb-4">It sounds like Sidhyarth is a certified Service Provider Network (SPN) professional with
                expertise in Amazon India. With over 5 years of experience, Sidhyarth likely has a strong background in
                managing and optimizing service provider networks, particularly within the context of Amazon's
                infrastructure and services.</p>

            <p class="mb-2">Service Provider Networks often involve the provision of network services to other
                businesses or clients. In the context of Amazon India, this could include managing and optimizing the
                network infrastructure that supports various Amazon services and products.</p>

            <p class="mb-2">If you have specific questions or if there's more information you'd like to know about
                Sidhyarth's role or the Service Provider Network in the context of Amazon India, feel free to provide
                more details.</p>
        </div>
    </section>

    <?php require('partials/footer_asgt.php') ?>

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
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- Custom JS Files -->
    <script src="assets/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/form.js"></script>
</body>
<!-- Mirrored from html.onertheme.com/tronix/team-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2024 11:51:49 GMT -->

</html>