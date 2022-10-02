<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("includes/head.php");
    $page = "contact";
    ?>
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <?php
    include("includes/preloader.php");
    ?>

    <!-- Main Header-->
    <?php
    include("includes/navbar.php");
    ?>
    <!--End Main Header -->

    <!--Form Back Drop-->
    <div class="form-back-drop"></div>

    <!-- Hidden Bar -->
    <?php
    include("includes/contact_form_side.php");
    ?>
    <!--End Hidden Bar -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/27.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Contact Us</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php"><span class="fas fa-home"></span> Home</a></li>
                    <li><span class="far fa-arrow-alt-circle-right"></span> Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- Contact Page Section -->
    <section class="contact-page-section" style="background-image:url(images/background/12.png)">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Contact Us</h2>
            </div>
            <div class="row">
                <!-- Form Column -->
                <div class="form-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Contact Form -->
                        <div class="contact-form">
                            <form method="post" action="includes/contact_form_submission.php">
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="username" placeholder="Name" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="phone" placeholder="Phone" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="email" name="email" placeholder="Email Address" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="company" placeholder="Company">
                                    </div>


                                    <div class="form-group col-lg-12 col-md-12">
                                        <textarea name="message" placeholder="Massage" required></textarea>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 text-center">
                                        <button class="theme-btn btn-style-one " type="submit" name="submit-form">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Page Section -->

    <section class="contact-page-info">
        <div class="auto-container">
            <div class="info-column">
                <div class="inner-column">
                    <div class="contact-info row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="info-box"><i class="flaticon-pin"></i> <span>Location</span> <br> H-150, Road-9,
                                Sonadanda R/A, <br> 1st Phase, Khulna
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="info-box"><i class="flaticon-phone-reciever"></i> <span>Call us</span> <br><a
                                        href="tel:+8801765774465">+880 176 577 4465</a>, <a href="tel:+881653585678">+880
                                    196 504 6542</a></div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="info-box"><i class="flaticon-message"></i> <span>Email</span> <br> <a
                                        href="mailto:info@nirmanad.org">info@nirmanad.org</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Clients Section-->
    <?php
    include ("includes/clients.php");
    ?>
    <!--End Clients Section-->


    <!-- Main Footer -->
    <?php
    include("includes/footer.php");
    ?>
    <!-- End Main Footer -->


</div>


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/script.js"></script>
<!-- Color Setting -->
<script src="js/color-settings.js"></script>
</body>

<!-- Mirrored from html.commonsupport.xyz/2019/Altoona/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Sep 2022 10:51:59 GMT -->
</html>
