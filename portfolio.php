<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include ("includes/head.php");
    $page = "portfolio";
    ?>
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <?php
    include ("includes/preloader.php");
    ?>

    <!-- Main Header-->
    <?php
    include ("includes/navbar.php");
    ?>
    <!--End Main Header -->

    <!--Form Back Drop-->
    <div class="form-back-drop"></div>

    <!-- Hidden Bar -->
    <?php
    include ("includes/contact_form_side.php");
    ?>
    <!--End Hidden Bar -->


    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/24.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Portfolio</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php"><span class="fas fa-home"></span> Home</a></li>
                    <li><span class="far fa-arrow-alt-circle-right"></span> Portfolio</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!--Gallery Section-->
    <section class="gallery-section">
        <!--Sortable Masonry-->
        <div class="sortable-masonry">
            <div class="auto-container">
                <!--Filter-->
                <div class="filters">

                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">All Projects</li>
                        <li class="filter" data-role="button" data-filter=".commercial">Commercial</li>
                        <li class="filter" data-role="button" data-filter=".hospitality">Hospitality</li>
                        <li class="filter" data-role="button" data-filter=".interior-design">Interior Design</li>
                        <li class="filter" data-role="button" data-filter=".residential">Residential</li>
                    </ul>
                </div>

                <div class="items-container row clearfix">

                    <!--Default Portfolio Item-->
                    <div class="default-portfolio-item column-gallery masonry-item all hospitality">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/2-1.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <div class="content-inner">
                                            <div class="tags">Commercial</div>
                                            <h3><a href="project-detail.html">Tessellation Walls</a></h3>
                                        </div>
                                        <a href="images/gallery/2-1.jpg" class="lightbox-image link" data-fancybox="images" data-caption="" title=""><span class="icon flaticon-add"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div class="default-portfolio-item small-column masonry-item all residential commercial">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/2-2.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <div class="content-inner">
                                            <div class="tags">Commercial</div>
                                            <h3><a href="project-detail.html">Tessellation Walls</a></h3>
                                        </div>
                                        <a href="images/gallery/2-2.jpg" class="lightbox-image link" data-fancybox="images" data-caption="" title=""><span class="icon flaticon-add"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div class="default-portfolio-item small-column masonry-item all commercial interior-design residential">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/2-3.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <div class="content-inner">
                                            <div class="tags">Commercial</div>
                                            <h3><a href="project-detail.html">Tessellation Walls</a></h3>
                                        </div>
                                        <a href="images/gallery/2-3.jpg" class="lightbox-image link" data-fancybox="images" data-caption="" title=""><span class="icon flaticon-add"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div class="default-portfolio-item small-column masonry-item all residential">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/2-4.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <div class="content-inner">
                                            <div class="tags">Commercial</div>
                                            <h3><a href="project-detail.html">Tessellation Walls</a></h3>
                                        </div>
                                        <a href="images/gallery/2-4.jpg" class="lightbox-image link" data-fancybox="images" data-caption="" title=""><span class="icon flaticon-add"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div class="default-portfolio-item small-column masonry-item all residential">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/2-5.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <div class="content-inner">
                                            <div class="tags">Commercial</div>
                                            <h3><a href="project-detail.html">Tessellation Walls</a></h3>
                                        </div>
                                        <a href="images/gallery/2-5.jpg" class="lightbox-image link" data-fancybox="images" data-caption="" title=""><span class="icon flaticon-add"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div class="default-portfolio-item column-gallery masonry-item all commercial residential">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/2-6.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <div class="content-inner">
                                            <div class="tags">Commercial</div>
                                            <h3><a href="project-detail.html">Tessellation Walls</a></h3>
                                        </div>
                                        <a href="images/gallery/2-6.jpg" class="lightbox-image link" data-fancybox="images" data-caption="" title=""><span class="icon flaticon-add"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div class="default-portfolio-item small-column masonry-item all interior-design">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/2-9.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <div class="content-inner">
                                            <div class="tags">Commercial</div>
                                            <h3><a href="project-detail.html">Tessellation Walls</a></h3>
                                        </div>
                                        <a href="images/gallery/2-9.jpg" class="lightbox-image link" data-fancybox="images" data-caption="" title=""><span class="icon flaticon-add"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div class="default-portfolio-item small-column masonry-item all interior-design">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/2-8.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <div class="content-inner">
                                            <div class="tags">Commercial</div>
                                            <h3><a href="project-detail.html">Tessellation Walls</a></h3>
                                        </div>
                                        <a href="images/gallery/2-8.jpg" class="lightbox-image link" data-fancybox="images" data-caption="" title=""><span class="icon flaticon-add"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="default-portfolio-item small-column masonry-item all interior-design">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/2-7.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <div class="content-inner">
                                            <div class="tags">Commercial</div>
                                            <h3><a href="project-detail.html">Tessellation Walls</a></h3>
                                        </div>
                                        <a href="images/gallery/2-7.jpg" class="lightbox-image link" data-fancybox="images" data-caption="" title=""><span class="icon flaticon-add"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="load-more-btn text-center">
                    <a href="#" class="theme-btn btn-style-four">View More</a>
                </div>
            </div>
        </div>
    </section>
    <!--End Gallery Section-->


    <!--clients section-->
    <?php
    include ("includes/clients.php");
    ?>



    <!-- Main Footer -->
    <?php
    include ("includes/footer.php");
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
<script src="js/isotope.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/script.js"></script>
<!-- Color Setting -->
<script src="js/color-settings.js"></script>
</body>

<!-- Mirrored from html.commonsupport.xyz/2019/Altoona/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Sep 2022 10:51:59 GMT -->
</html>
