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

    <!-- Bnner Section -->
    <section class="banner-section">
        <div class="carousel-column">
            <div class="carousel-outer">
                <ul class="banner-carousel owl-carousel owl-theme">

                    <!-- Slide Item -->
                    <li class="slide-item" style="background-image: url(images/main-slider/image-1.jpg);">
                        <div class="auto-container">
                            <div class="content-box">
                                <h1>Nirman Architecture & Development</h1>
                                <div class="text">The great buildings that changed the world <br> all start with a
                                    visionary
                                </div>
                                <div class="link-box">
                                    <a href="#" class="theme-btn btn-style-one">Our Service</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Slide Item -->
                    <li class="slide-item" style="background-image: url(images/main-slider/image-2.jpg);">
                        <div class="auto-container">
                            <div class="content-box">
                                <h1>Nirman Architecture & Development</h1>
                                <div class="text">Take the opportunity to re-imagine, <br> how your space can serve its
                                    purpose
                                </div>
                                <div class="link-box">
                                    <a href="#" class="theme-btn btn-style-one">Our Service</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Slide Item -->
                    <li class="slide-item" style="background-image: url(images/main-slider/image-5.jpg);">
                        <div class="auto-container">
                            <div class="content-box">
                                <h1>Nirman Architecture & Development</h1>
                                <div class="text">Where else can you be inspired by the people, <br> who make world
                                    class architecture happen?
                                </div>
                                <div class="link-box">
                                    <a href="#" class="theme-btn btn-style-one">Our Service</a>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
                <ul class="thumbs-carousel owl-carousel owl-theme">
                    <li class="thumb-box">
                        <figure><img src="images/resource/special-thumb-2.jpg" alt=""></figure>
                    </li>
                    <li class="thumb-box">
                        <figure><img src="images/resource/special-thumb-3.jpg" alt=""></figure>
                    </li>
                    <li class="thumb-box">
                        <figure><img src="images/resource/special-thumb-1.jpg" alt=""></figure>
                    </li>
                </ul>
            </div>
        </div>

        <div class="social-links">
            <ul class="social-icon-three">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href="#"><i class="fab fa-skype"></i></a></li>
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
                                    data-text="About Company">About Company</h2>
                            </div>
                            <h5>We create functional, beautiful interiors for our clients since 1987.</h5>
                            <div class="text">When an unknown printer took a galley of type and scrambled it to make a
                                type specimen book. It has survived not only five centuries. When an unknown printer
                                took a galley of type and scrambled it to make a type specimen book. When an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.
                            </div>
                            <div class="link-box">
                                <a href="#" class="theme-btn btn-style-one">Read More</a>
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
                                <i class="flaticon-office-building"></i>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Master Plan</a></h3>
                                <div class="text">A master plan includes analysis, recommendations, and proposals for a
                                    site's population, economy, housing, transportation, community facilities, and land
                                    use. It is based on public input, surveys, planning initiatives, existing
                                    development, physical characteristics, and social and economic conditions.
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
                                <h3><a href="#">Engineering Design</a></h3>
                                <div class="text">Engineering design is the method of identification and solving
                                    engineering problems. Engineering design can have different forms, but they all
                                    include a common attribute: any type of engineering design is a process. The main
                                    types of engineering design are: Original design, sometimes called innovative
                                    design.
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
                                <h3><a href="#">Conceptual Architecture</a></h3>
                                <div class="text">Conceptual design takes the clients imaginary space and creates a
                                    beautiful structure based on the information provided to the architect. It is an
                                    essential part of the architectural process in which the homeowner should share
                                    their personal needs and wants.
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
                                <h3><a href="#">Apartment Buildings</a></h3>
                                <div class="text">An apartment building is a “building containing more than one dwelling
                                    unit. Apartment buildings are those structures containing three or more living units
                                    with independent cooking and bathroom facilities, whether designated as apartment
                                    houses, condominiums, or garden apartments.
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
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like
                                    these sweet mornings of spring which.
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
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like
                                    these sweet mornings of spring which.
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
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like
                                    these sweet mornings of spring which.
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
                                        <li class="p-tab-btn active-btn" data-tab="#p-tab-1">All Projects</li>
                                        <li class="p-tab-btn" data-tab="#p-tab-2">Commercial</li>
                                        <li class="p-tab-btn" data-tab="#p-tab-3">Hospitality</li>
                                        <li class="p-tab-btn" data-tab="#p-tab-4">Interior Design</li>
                                        <li class="p-tab-btn" data-tab="#p-tab-5">Residential</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="text-column">
                        <div class="inner-box">
                            <div class="text">Commerical</div>
                            <h3>Buritis Belo Horizonte</h3>
                            <h6>Cayler Offices</h6>
                            <div class="link-box"><a href="#" class="theme-btn btn-style-three">Read More</a></div>
                            <div class="more-project"><a href="portfolio.html">View All Projects <i
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
                            <div class="p-tab active-tab" id="p-tab-1">
                                <div class="projects-carousel owl-theme owl-carousel">

                                    <!--Project Block-->
                                    <div class="project-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="images/gallery/1.jpg" alt=""/>
                                                <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/1.jpg"
                                                               class="see-more lightbox-image"
                                                               data-fancybox="gallery"><span
                                                                        class="flaticon-add"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Project Block-->
                                    <div class="project-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="images/gallery/2.jpg" alt=""/>
                                                <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/2.jpg"
                                                               class="see-more lightbox-image"
                                                               data-fancybox="gallery"><span
                                                                        class="flaticon-add"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Project Block-->
                                    <div class="project-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="images/gallery/3.jpg" alt=""/>
                                                <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/3.jpg"
                                                               class="see-more lightbox-image"
                                                               data-fancybox="gallery"><span
                                                                        class="flaticon-add"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!--Portfolio Tab / Active Tab-->
                            <div class="p-tab" id="p-tab-2">
                                <div class="projects-carousel owl-theme owl-carousel">

                                    <!--Project Block-->
                                    <div class="project-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="images/gallery/1.jpg" alt=""/>
                                                <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/1.jpg"
                                                               class="see-more lightbox-image"
                                                               data-fancybox="gallery"><span
                                                                        class="flaticon-add"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Project Block-->
                                    <div class="project-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="images/gallery/2.jpg" alt=""/>
                                                <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/2.jpg"
                                                               class="see-more lightbox-image"
                                                               data-fancybox="gallery"><span
                                                                        class="flaticon-add"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Project Block-->
                                    <div class="project-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="images/gallery/3.jpg" alt=""/>
                                                <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/3.jpg"
                                                               class="see-more lightbox-image"
                                                               data-fancybox="gallery"><span
                                                                        class="flaticon-add"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!--Portfolio Tab / Active Tab-->
                            <div class="p-tab" id="p-tab-3">
                                <div class="projects-carousel owl-theme owl-carousel">

                                    <!--Project Block-->
                                    <div class="project-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="images/gallery/1.jpg" alt=""/>
                                                <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/1.jpg"
                                                               class="see-more lightbox-image"
                                                               data-fancybox="gallery"><span
                                                                        class="flaticon-add"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Project Block-->
                                    <div class="project-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="images/gallery/2.jpg" alt=""/>
                                                <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/2.jpg"
                                                               class="see-more lightbox-image"
                                                               data-fancybox="gallery"><span
                                                                        class="flaticon-add"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Project Block-->
                                    <div class="project-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="images/gallery/3.jpg" alt=""/>
                                                <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/3.jpg"
                                                               class="see-more lightbox-image"
                                                               data-fancybox="gallery"><span
                                                                        class="flaticon-add"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!--Portfolio Tab / Active Tab-->
                            <div class="p-tab" id="p-tab-4">
                                <div class="projects-carousel owl-theme owl-carousel">

                                    <!--Project Block-->
                                    <div class="project-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="images/gallery/1.jpg" alt=""/>
                                                <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/1.jpg"
                                                               class="see-more lightbox-image"
                                                               data-fancybox="gallery"><span
                                                                        class="flaticon-add"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Project Block-->
                                    <div class="project-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="images/gallery/2.jpg" alt=""/>
                                                <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/2.jpg"
                                                               class="see-more lightbox-image"
                                                               data-fancybox="gallery"><span
                                                                        class="flaticon-add"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Project Block-->
                                    <div class="project-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="images/gallery/3.jpg" alt=""/>
                                                <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/3.jpg"
                                                               class="see-more lightbox-image"
                                                               data-fancybox="gallery"><span
                                                                        class="flaticon-add"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!--Portfolio Tab / Active Tab-->
                            <div class="p-tab" id="p-tab-5">
                                <div class="projects-carousel owl-theme owl-carousel">

                                    <!--Project Block-->
                                    <div class="project-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="images/gallery/1.jpg" alt=""/>
                                                <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/1.jpg"
                                                               class="see-more lightbox-image"
                                                               data-fancybox="gallery"><span
                                                                        class="flaticon-add"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Project Block-->
                                    <div class="project-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="images/gallery/2.jpg" alt=""/>
                                                <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/2.jpg"
                                                               class="see-more lightbox-image"
                                                               data-fancybox="gallery"><span
                                                                        class="flaticon-add"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Project Block-->
                                    <div class="project-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="images/gallery/3.jpg" alt=""/>
                                                <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/3.jpg"
                                                               class="see-more lightbox-image"
                                                               data-fancybox="gallery"><span
                                                                        class="flaticon-add"></span></a>
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
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Expert Team Person</h2>
            </div>

            <div class="row clearfix">
                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="team.html"><img src="images/resource/7.jpg" alt=""></a></div>
                            <ul class="social-links">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <h3 class="name"><a href="team.html">Marry Scott</a></h3>
                            <span class="designation">Planning Manager</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="team.html"><img src="images/resource/8.jpg" alt=""></a></div>
                            <ul class="social-links">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <h3 class="name"><a href="team.html">Michael Dow</a></h3>
                            <span class="designation">CEO & Founder</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="team.html"><img src="images/resource/9.jpg" alt=""></a></div>
                            <ul class="social-links">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>

                        </div>
                        <div class="info-box">
                            <h3 class="name"><a href="team.html">Lili Jameson</a></h3>
                            <span class="designation">Senior Interior</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="team.html"><img src="images/resource/10.jpg" alt=""></a></div>
                            <ul class="social-links">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <h3 class="name"><a href="team.html">Jack Smith</a></h3>
                            <span class="designation">Project Manager</span>
                        </div>
                    </div>
                </div>

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
                                    <div class="box-title">Interior Design</div>
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
                                    <div class="box-title">AutoCAD</div>
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="bar-fill" data-percent="75">
                                                    <div class="percent"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Progress Box-->
                                <div class="progress-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="0ms">
                                    <div class="box-title">Lighting</div>
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="bar-fill" data-percent="95">
                                                    <div class="percent"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Progress Box-->
                                <div class="progress-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="0ms">
                                    <div class="box-title">3D Skills</div>
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
                                    <!-- Testimonial Block -->
                                    <div class="testimonial-block">
                                        <div class="inner-box">
                                            <div class="text">A wonderful serenity has taken possession of my entire
                                                soul, like these sweet mornings of spring which I enjoy with my whole
                                                heart. I am alone, and feel the charm of existence in this spot, which
                                                was created for the bliss of souls like mine. I am so happy, my dear
                                                friend, so absorbed in the exquisite sense of me.
                                            </div>

                                            <div class="info-box">
                                                <div class="image-box"><img src="images/resource/6.jpg" alt=""></div>
                                                <div class="text-box">
                                                    <h5 class="name">Jane Smith</h5>
                                                    <span class="designation">CEO, InDesign</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Testimonial Block -->
                                    <div class="testimonial-block">
                                        <div class="inner-box">
                                            <div class="text">A wonderful serenity has taken possession of my entire
                                                soul, like these sweet mornings of spring which I enjoy with my whole
                                                heart. I am alone, and feel the charm of existence in this spot, which
                                                was created for the bliss of souls like mine. I am so happy, my dear
                                                friend, so absorbed in the exquisite sense of me.
                                            </div>

                                            <div class="info-box">
                                                <div class="image-box"><img src="images/resource/6.jpg" alt=""></div>
                                                <div class="text-box">
                                                    <h5 class="name">Jane Smith</h5>
                                                    <span class="designation">CEO, InDesign</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Testimonial Block -->
                                    <div class="testimonial-block">
                                        <div class="inner-box">
                                            <div class="text">A wonderful serenity has taken possession of my entire
                                                soul, like these sweet mornings of spring which I enjoy with my whole
                                                heart. I am alone, and feel the charm of existence in this spot, which
                                                was created for the bliss of souls like mine. I am so happy, my dear
                                                friend, so absorbed in the exquisite sense of me.
                                            </div>

                                            <div class="info-box">
                                                <div class="image-box"><img src="images/resource/6.jpg" alt=""></div>
                                                <div class="text-box">
                                                    <h5 class="name">Jane Smith</h5>
                                                    <span class="designation">CEO, InDesign</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Testimonial Block -->
                                    <div class="testimonial-block">
                                        <div class="inner-box">
                                            <div class="text">A wonderful serenity has taken possession of my entire
                                                soul, like these sweet mornings of spring which I enjoy with my whole
                                                heart. I am alone, and feel the charm of existence in this spot, which
                                                was created for the bliss of souls like mine. I am so happy, my dear
                                                friend, so absorbed in the exquisite sense of me.
                                            </div>

                                            <div class="info-box">
                                                <div class="image-box"><img src="images/resource/6.jpg" alt=""></div>
                                                <div class="text-box">
                                                    <h5 class="name">Jane Smith</h5>
                                                    <span class="designation">CEO, InDesign</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Testimonial Block -->
                                    <div class="testimonial-block">
                                        <div class="inner-box">
                                            <div class="text">A wonderful serenity has taken possession of my entire
                                                soul, like these sweet mornings of spring which I enjoy with my whole
                                                heart. I am alone, and feel the charm of existence in this spot, which
                                                was created for the bliss of souls like mine. I am so happy, my dear
                                                friend, so absorbed in the exquisite sense of me.
                                            </div>

                                            <div class="info-box">
                                                <div class="image-box"><img src="images/resource/6.jpg" alt=""></div>
                                                <div class="text-box">
                                                    <h5 class="name">Jane Smith</h5>
                                                    <span class="designation">CEO, InDesign</span>
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


    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title text-left">
                <h2>Latest News Update</h2>
            </div>
            <div class="news-box row">
                <div class="news-carousel owl-theme">
                    <!-- News Block -->
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

                    <!-- News Block -->
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

                    <!-- News Block -->
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
    </section>
    <!--End News Section -->

    <!--Clients Section-->
    <section class="clients-section">
        <div class="auto-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure>
                    </li>
                </ul>
            </div>
        </div>
    </section>
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
