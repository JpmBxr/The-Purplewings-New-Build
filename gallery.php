<?php require('partials/head.php') ?>

<body>
    <?php require('partials/nav.php') ?>
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Our Gallery</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li>Our Gallery</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="overflow-hidden space">
        <div class="container">
            <div class="row gy-30 gallery-row filter-active">
                <div class="col-md-6 col-xxl-auto filter-item">
                    <div class="gallery-card style2">
                        <div class="box-img"><img src="assets/img/gallery/gallery_2_1.jpg" alt="gallery image"> <a
                                href="assets/img/gallery/gallery_2_1.jpg" class="icon-btn popup-image"><i
                                    class="far fa-magnifying-glass-plus"></i></a></div>
                        <div class="box-content">
                            <p class="box-subtitle">IT Solution</p>
                            <h3 class="box-title"><a href="index.php">Service Consoltation</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto filter-item">
                    <div class="gallery-card style2">
                        <div class="box-img"><img src="assets/img/gallery/gallery_2_2.jpg" alt="gallery image"> <a
                                href="assets/img/gallery/gallery_2_2.jpg" class="icon-btn popup-image"><i
                                    class="far fa-magnifying-glass-plus"></i></a></div>
                        <div class="box-content">
                            <p class="box-subtitle">IT Solution</p>
                            <h3 class="box-title"><a href="index.php">Website Security</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto filter-item">
                    <div class="gallery-card style2">
                        <div class="box-img"><img src="assets/img/gallery/gallery_2_3.jpg" alt="gallery image"> <a
                                href="assets/img/gallery/gallery_2_3.jpg" class="icon-btn popup-image"><i
                                    class="far fa-magnifying-glass-plus"></i></a></div>
                        <div class="box-content">
                            <p class="box-subtitle">IT Solution</p>
                            <h3 class="box-title"><a href="index.php">Cross-Industry Expertise</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto filter-item">
                    <div class="gallery-card style2">
                        <div class="box-img"><img src="assets/img/gallery/gallery_2_4.jpg" alt="gallery image"> <a
                                href="assets/img/gallery/gallery_2_4.jpg" class="icon-btn popup-image"><i
                                    class="far fa-magnifying-glass-plus"></i></a></div>
                        <div class="box-content">
                            <p class="box-subtitle">IT Solution</p>
                            <h3 class="box-title"><a href="index.php">Business Solution</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto filter-item">
                    <div class="gallery-card style2">
                        <div class="box-img"><img src="assets/img/gallery/gallery_2_5.jpg" alt="gallery image"> <a
                                href="assets/img/gallery/gallery_2_5.jpg" class="icon-btn popup-image"><i
                                    class="far fa-magnifying-glass-plus"></i></a></div>
                        <div class="box-content">
                            <p class="box-subtitle">IT Solution</p>
                            <h3 class="box-title"><a href="index.php">Service Consoltation</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto filter-item">
                    <div class="gallery-card style2">
                        <div class="box-img"><img src="assets/img/gallery/gallery_2_6.jpg" alt="gallery image"> <a
                                href="assets/img/gallery/gallery_2_6.jpg" class="icon-btn popup-image"><i
                                    class="far fa-magnifying-glass-plus"></i></a></div>
                        <div class="box-content">
                            <p class="box-subtitle">IT Solution</p>
                            <h3 class="box-title"><a href="index.php">Website Security</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <button id="getQuoteBtn2" class="ot-btn">Get Quote</button>
                <!-- <a href="project.php" class="ot-btn">View More</a> -->
            </div>
        </div>
    </div>

    <?php require('partials/footer_asgt.php') ?>

    <?php require('partials/getquote_popup.php') ?>
    <!-- Your custom JavaScript -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var getQuoteBtn1 = document.getElementById("getQuoteBtn1");
        var getQuoteBtn2 = document.getElementById("getQuoteBtn2");
        var closeFormBtn = document.getElementById("closeFormBtn");
        var contactFormPopup = document.getElementById("contactFormPopup");

        function openPopup() {
            contactFormPopup.style.display = "block";
        }

        function closePopup() {
            contactFormPopup.style.display = "none";
        }

        getQuoteBtn1.addEventListener("click", openPopup);
        getQuoteBtn2.addEventListener("click", openPopup);
        closeFormBtn.addEventListener("click", closePopup);
    });
    </script>
    <!-- End Popup -->
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- Custom JS Files -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/form.js"></script>
</body>
<!-- Mirrored from html.onertheme.com/tronix/project.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2024 11:51:52 GMT -->

</html>