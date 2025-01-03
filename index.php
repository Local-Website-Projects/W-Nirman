<?php
include("config/dbconfig.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("includes/head.php");
    $page = "home";
    ?>
</head>

<body>

<div class="page-wrapper">


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

    <!-- Bnner Section -->
    <section class="banner-section">
        <div class="carousel-column">
            <div class="carousel-outer">
                <video loop muted autoplay>
                    <source src="video/city_new.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="overlay">
                </div>
                <h1>
                    Nirman Architecture & Development
                    <br/>
                    <a href="contact.php" class="theme-btn btn-style-one">
                        Contact Us
                    </a>
                </h1>
            </div>
        </div>

        <div class="social-links">
            <ul class="social-icon-three">
                <li><a href="https://www.facebook.com/nirman.ad22/" target="_blank"><i
                                class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://www.instagram.com/nirman.ad22" target="_blank"><i class="fab fa-instagram"></i></a>
                </li>
                <li><a href="mailto:info@nirmanad.org"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href="https://api.whatsapp.com/send?phone=8801765774465" target="_blank"><i
                                class="fab fa-whatsapp"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
        </div>
    </section>
    <!-- End Bnner Section -->

    <!-- About Section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row">
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image wow fadeInLeft" data-wow-delay='600ms'><img src="images/resource/1.jpg"
                                                                                             alt=""></figure>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <div class="content-box">
                            <div class="sec-title">
                                <h2 data-animation-child class="title-fill" data-animation="title-fill-anim"
                                    data-text="About Company">About NIRMAN</h2>
                            </div>
                            <h5>We create functional, beautiful interiors, exteriors and Constructions for our clients
                                since
                                2017.</h5>
                            <div class="text"> Nirman Architecture & Development is one of the most reputed Company in
                                Bangladesh,
                                engaged in designing & developing luxurious housing & commercial projects, tourism,
                                building construction services, health and agriculture industry.
                            </div>
                            <div class="link-box">
                                <a href="about_us.php" class="theme-btn btn-style-one">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section -->

    <!-- Services Section -->
    <section class="services-section" style="background-image: url(images/background/1.jpg);">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Our Service</h2>
            </div>
            <div class="services-box row clearfix">
                <div class="services-carousel owl-carousel owl-theme">
                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-house"></i>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Architectural Design</a></h3>
                                <div class="text">Architectural design is primarily concerned with functionality. A
                                    building has to meet the needs of the person or people using it. Safety is also a
                                    primary concern; a new building needs to be structurally sound, designed to
                                    withstand the test of time and built in-line with current building regulations.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-town-2"></i>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Interior Design</a></h3>
                                <div class="text">The art or practice of planning and supervising the design and
                                    execution of architectural interiors and their furnishings.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-urban"></i>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Structural Design</a></h3>
                                <div class="text">Structural design is the methodical investigation of the stability,
                                    strength and rigidity of structures. The basic objective in structural analysis and
                                    design is to produce a structure capable of resisting all applied loads without
                                    failure during its intended life
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-town"></i>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Electrical Design</a></h3>
                                <div class="text">Electrical design is the process of planning and creating electrical
                                    equipment, such as electrical components, schematics, lighting equipment, power
                                    systems and telecommunications infrastructure.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-town-1"></i>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Construction</a></h3>
                                <div class="text">The definition of construction is the process of making something, the
                                    occupation of building or the way that something is put together. An example of
                                    construction is the creating and decorating of a new ice cream shoppe in a store
                                    that previously was a shoe store.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-town-1"></i>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Plan Approval</a></h3>
                                <div class="text">The developer/builder's architect has to submit the building plan for
                                    approval. He has to submit the proposed plan with all the required documents now the
                                    proposal goes for two levels of check.
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-house-1"></i>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Plumbing Design</a></h3>
                                <div class="text">A plumbing designer is a designer or engineer whose duties revolve
                                    around creating plumbing systems. Your responsibilities could include working to
                                    create a residential plumbing system, a fire suppression “sprinkler” system,
                                    drainage networks, or municipal or commercial plumbing systems.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-house-1"></i>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Cost Estimate</a></h3>
                                <div class="text">Cost estimation in project management is the process of forecasting
                                    the financial and other resources needed to complete a project within a defined
                                    scope. Cost estimation accounts for each element required for the project—from
                                    materials to labor—and calculates a total amount that determines a project's budget.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-house-1"></i>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Development</a></h3>
                                <div class="text">The process of land development involves changing a landscape to
                                    better suit the needs of those who seek to inhabit it. This could be for industrial,
                                    residential, or commercial purposes. Numerous specialists work together to create a
                                    plan for the land in question.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-house-1"></i>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Supervision</a></h3>
                                <div class="text">Supervision is an accountable, two-way process, which supports,
                                    motivates and enables the development of good practice for individual social care
                                    workers. As a result, this improves the quality of service provided by the
                                    organisation. Supervision is a vital part of individual performance management.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-house-1"></i>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Soil Test</a></h3>
                                <div class="text">In construction, a soil test commonly refers to the analysis of a soil
                                    sample to determine nutrient content, composition, and other characteristics such as
                                    the acidity or pH level.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-house-1"></i>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">3D Visualization</a></h3>
                                <div class="text">3D visualization refers to the process where graphical content is
                                    created using 3D software. Similar terms include 3D rendering, excellent
                                    computer-generated imagery (CGI), 3D graphics and so on.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section -->

    <!-- Services Section -->
    <section class="services-section style-two" style="background-image: url(images/background/9.jpg);">
        <div class="auto-container">
            <div class="services-box row clearfix">
                <div class="services-carousel-two owl-carousel owl-theme">
                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="lower-content">
                                <h3><a href="#">Perfect Design</a></h3>
                                <div class="text">At the very beginning we design a beautiful design and plan for you so
                                    that you face no issues in the further development process for your construction.
                                </div>
                            </div>
                            <div class="number-slide">01</div>
                        </div>
                    </div>
                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="lower-content">
                                <h3><a href="#">Carefully Planned</a></h3>
                                <div class="text">Then we plan the complete construction process for you and we make
                                    sure that there is no hole in the complete plan.
                                </div>
                            </div>
                            <div class="number-slide">02</div>
                        </div>
                    </div>
                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="lower-content">
                                <h3><a href="#">Smartly Execute</a></h3>
                                <div class="text">At the final stage we execute the plan, and provides all necessary
                                    support to you. After completion we deliver you your dream construction.
                                </div>
                            </div>
                            <div class="number-slide">03</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Project Section-->
    <section class="project-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-title text-left">
                        <div class="clearfix">
                            <div class="pull-left">
                                <h2>Our Projects</h2>
                            </div>
                            <div class="tab-btns-box pull-right">
                                <!--Tabs Header-->
                                <div class="tabs-header">
                                    <ul class="product-tab-btns clearfix">
                                        <li class="p-tab-btn active-btn" data-tab="#p-tab">All Projects</li>
                                        <?php
                                        $catagory = $con->query("SELECT `id`, `c_name` FROM `category`");
                                        while ($row = mysqli_fetch_assoc($catagory)) {
                                            ?>
                                            <li class="p-tab-btn"
                                                data-tab="#p-tab-<?php echo $row["id"]; ?>"><?php echo $row["c_name"]; ?></li>
                                            <?php
                                        }
                                        ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="text-column">
                        <div class="inner-box">
                            <div class="text">Nirman</div>
                            <h3>Architecture & Development</h3>
                            <h6>Our Works</h6>
                            <div class="link-box"><a href="#" class="theme-btn btn-style-three">Read More</a></div>
                            <div class="more-project"><a href="portfolio.php">View All Projects <i
                                            class="fa fa-arrows-alt"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <!--Porfolio Tabs-->
                    <div class="project-tab">

                        <!--Tabs Content-->
                        <div class="p-tabs-content">

                            <!--Portfolio Tab / Active Tab-->
                            <div class="p-tab active-tab" id="p-tab">
                                <div class="projects-carousel owl-theme owl-carousel">
                                    <?php
                                    $portfolio = $con->query("SELECT `category_id`, `image` FROM `portfolio` order by id desc");
                                    while ($rows = mysqli_fetch_assoc($portfolio)) {
                                        ?>
                                        <!--Project Block-->
                                        <div class="project-block">
                                            <div class="inner-box">
                                                <div class="image">
                                                    <img src="<?php echo $rows["image"]; ?>" alt=""/>
                                                    <!--Overlay Two-->
                                                    <div class="overlay-box">
                                                        <div class="overlay-inner">
                                                            <div class="overlay-content">
                                                                <a href="<?php echo $rows["image"]; ?>"
                                                                   class="see-more lightbox-image"
                                                                   data-fancybox="gallery"><span
                                                                            class="flaticon-add"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>

                            <?php
                            $catagory = $con->query("SELECT `id` FROM `category`");
                            while ($row = mysqli_fetch_assoc($catagory)) {
                                $cat_id = $row["id"];
                                ?>
                                <!--Portfolio Tab / Active Tab-->
                                <div class="p-tab" id="p-tab-<?php echo $cat_id; ?>">
                                    <div class="projects-carousel owl-theme owl-carousel">
                                        <?php
                                        $portfolio = $con->query("SELECT `category_id`, `image` FROM `portfolio` WHERE `category_id` = '$cat_id' order by id desc");
                                        while ($rows = mysqli_fetch_assoc($portfolio)) {
                                            ?>
                                            <!--Project Block-->
                                            <div class="project-block">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <img src="<?php echo $rows["image"]; ?>" alt=""/>
                                                        <!--Overlay Two-->
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <div class="overlay-content">
                                                                    <a href="<?php echo $rows["image"]; ?>"
                                                                       class="see-more lightbox-image"
                                                                       data-fancybox="gallery"><span
                                                                                class="flaticon-add"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Expert Team Person</h2>
            </div>

            <div class="row clearfix d-flex justify-content-center">
                <?php
                $team = $con->query("SELECT * FROM `team`");
                while ($row = mysqli_fetch_assoc($team)) {
                    ?>
                    <div class="team-block col-lg-3 col-md-3 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><img src="<?php echo $row['image']; ?>" alt=""></div>
                                <ul class="social-links">
                                    <li><a href="<?php echo $row['facebook']; ?>" target="_blank"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="mailto:<?php echo $row['google']; ?>"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="https://api.whatsapp.com/send?phone=88<?php echo $row['whatsapp']; ?>" target="_blank"><i
                                                    class="fab fa-whatsapp"></i></a></li>
                                    <li><a href="<?php echo $row['twiter']; ?>" target="_blank"><i
                                                    class="fab fa-twitter"></i></a></li>
                                    <li><a href="<?php echo $row['linkedin']; ?>" target="_blank"><i
                                                    class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="info-box">
                                <h3 class="name">Engr. B M Mujahidul Alam</h3>
                                <span class="designation">Managing Director & Structural Engineer</span>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>

            </div>
        </div>
    </section>
    <!--End Team Section -->

    <!--Skill Section -->
    <section class="skill-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="image-column wow fadeInLeft animated"
                             style="visibility: visible; animation-name: fadeInUp;">
                            <figure class="image-box"><img src="images/resource/11.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
                <!--Skills Column-->
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="skills-column">
                        <div class="sec-title text-left">
                            <h2>Our Expertise</h2>
                        </div>
                        <div class="inner-box">
                            <!--Progress Levels-->
                            <div class="progress-levels">
                                <!--Progress Box-->
                                <div class="progress-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="0ms">
                                    <div class="box-title">Architecture Design</div>
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="bar-fill" data-percent="85">
                                                    <div class="percent"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Progress Box-->
                                <div class="progress-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="0ms">
                                    <div class="box-title">Structural Design</div>
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="bar-fill" data-percent="89">
                                                    <div class="percent"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Progress Box-->
                                <div class="progress-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="0ms">
                                    <div class="box-title">Interrior Design</div>
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="bar-fill" data-percent="93">
                                                    <div class="percent"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Progress Box-->
                                <div class="progress-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="0ms">
                                    <div class="box-title">Construction</div>
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="bar-fill" data-percent="88">
                                                    <div class="percent"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Progress Box-->
                                <div class="progress-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="0ms">
                                    <div class="box-title">Land Development</div>
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="bar-fill" data-percent="82">
                                                    <div class="percent"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End testimonial Section -->

    <!--testimonial Section -->
    <section class="testimonial-section">
        <div class="outer-container clearfix">
            <div class="testmonial-outer">
                <!--Image Column-->
                <div class="image-column wow fadeInLeft animated"
                     style="background-image: url(_images/background/7.html); visibility: visible; animation-name: fadeInLeft;">
                    <figure class="image-box"><img src="images/background/7.jpg" alt=""></figure>
                </div>

                <!--Image Column-->
                <div class="image-column-two wow fadeInRight animated"
                     style="background-image: url(_images/background/6.html); visibility: visible; animation-name: fadeInRight;">
                    <figure class="image-box"><img src="images/background/6.jpg" alt=""></figure>
                </div>
            </div>

            <!-- Testimonial Column -->
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial-column clearfix">
                            <div class="inner-column">
                                <div class="sec-title text-left">
                                    <h2>Clients Testimonials</h2>
                                </div>
                                <div class="testimonial-carousel owl-carousel owl-theme">
                                    <?php
                                    $review = $con->query("SELECT * FROM `review` where status = '1'");
                                    while ($row = mysqli_fetch_assoc($review)) {
                                        ?>

                                        <!-- Testimonial Block -->
                                        <div class="testimonial-block">
                                            <div class="inner-box">
                                                <div class="text"><?php echo $row["message"]; ?>
                                                </div>

                                                <div class="info-box">
                                                    <div class="image-box"><img src="images/resource/6.jpg" alt="">
                                                    </div>
                                                    <div class="text-box">
                                                        <h5 class="name"><?php echo $row["name"]; ?></h5>
                                                        <span class="designation"><?php echo $row["designation"] . ', ' . $row["company"]; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--End testimonial Section -->


    <!-- News Section -->
    <!--<section class="news-section">
        <div class="auto-container">
            <div class="sec-title text-left">
                <h2>Latest News Update</h2>
            </div>
            <div class="news-box row">
                <div class="news-carousel owl-theme">

                    <div class="news-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/resource/12.jpg" alt=""></figure>
                                <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
                            </div>
                            <div class="caption-box">
                                <div class="post-date">25 <span>JUN</span></div>
                                <ul class="info">
                                    <li><i class="far fa-user"></i>admin</li>
                                    <li><i class="far fa-comments"></i>Comment 03</li>
                                </ul>
                                <h3><a href="blog-detail.html">In Good Taste: Mark Finlay Architects & Interiors</a>
                                </h3>
                            </div>
                        </div>
                    </div>


                    <div class="news-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/resource/13.jpg" alt=""></figure>
                                <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
                            </div>
                            <div class="caption-box">
                                <div class="post-date">17 <span>FEB</span></div>
                                <ul class="info">
                                    <li><i class="far fa-user"></i>admin</li>
                                    <li><i class="far fa-comments"></i>Comment 03</li>
                                </ul>
                                <h3><a href="blog-detail.html">In Good Taste: Mark Finlay Architects & Interiors</a>
                                </h3>
                            </div>
                        </div>
                    </div>


                    <div class="news-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/resource/14.jpg" alt=""></figure>
                                <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
                            </div>
                            <div class="caption-box">
                                <div class="post-date">27 <span>MAR</span></div>
                                <ul class="info">
                                    <li><i class="far fa-user"></i>admin</li>
                                    <li><i class="far fa-comments"></i>Comment 03</li>
                                </ul>
                                <h3><a href="blog-detail.html">Temporary Pavilion for a Belgian Canal</a></h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>-->
    <!--End News Section -->

    <!--Clients Section-->
    <?php
    include("includes/clients.php");
    ?>
    <!--End Clients Section-->

    <!-- Main Footer -->
    <?php
    include("includes/footer.php");
    ?>
    <!-- End Main Footer -->


</div>
<?php
if (isset($_SESSION['status'])) {
    if ($_SESSION['status'] && $_SESSION['status'] != '') {
        ?>
        <script>
            Swal.fire({
                icon: '<?php echo $_SESSION['status_code'];?>',
                title: '<?php echo $_SESSION['status_title'];?>',
                text: '<?php echo $_SESSION['status'];?>'
            })
        </script>
        <?php
        unset($_SESSION['status']);
    }
}
?>

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
<script>

</script>
</body>
</html>
