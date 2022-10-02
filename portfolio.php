<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("includes/head.php");
    $page = "portfolio";
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
    <section class="page-title" style="background-image:url(images/background/26.jpg);">
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
                        <?php
                        $catagory = $con->query("SELECT `id`, `c_name` FROM `category`");
                        while ($row = mysqli_fetch_assoc($catagory)) {
                            ?>
                            <li class="filter" data-role="button"
                                data-filter=".<?php echo 'cat-' . $row["id"]; ?>"><?php echo $row["c_name"]; ?></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>

                <div class="items-container row clearfix">

                    <!--Default Portfolio Item-->
                    <?php
                    $catagory = $con->query("SELECT * FROM `category`");
                    while ($row = mysqli_fetch_assoc($catagory)) {
                        $cat_name = $row["c_name"];
                        $cat_id = $row["id"];
                        $portfolio = $con->query("SELECT `category_id`, `image`,`caption` FROM `portfolio` WHERE `category_id` = '$cat_id'");
                        while ($rows = mysqli_fetch_assoc($portfolio)) {
                            ?>
                            <div class="default-portfolio-item small-column masonry-item all <?php echo 'cat-' . $cat_id; ?>">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="<?php echo $rows["image"]; ?>" alt=""></figure>
                                    <!--Overlay Box-->
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <div class="content-inner">
                                                    <div class="tags"><?php echo $rows["caption"]; ?></div>
                                                </div>
                                                <a href="<?php echo $rows["image"]; ?>" class="lightbox-image link"
                                                   data-fancybox="images" data-caption="" title=""><span
                                                            class="icon flaticon-add"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!--End Gallery Section-->


    <!--clients section-->
    <?php
    include("includes/clients.php");
    ?>


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
