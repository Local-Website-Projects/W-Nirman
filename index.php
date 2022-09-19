<!DOCTYPE html>
<html lang="en">

<head>
<?php
include ("includes/head.php");
$page = "home";
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
    <section class="hidden-bar">
        <div class="inner-box">
            <div class="cross-icon"><span class="fa fa-times"></span></div>
            <div class="title">
                <h2>Get Appointment</h2>
            </div>

            <!--Appointment Form-->
            <div class="appointment-form">
                <form method="post" action="http://html.commonsupport.xyz/2019/Altoona/contact.html">
                    <div class="form-group">
                        <input type="text" name="text" value="" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" value="" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" value="" placeholder="Phone no." required>
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="theme-btn btn-style-three">Submit now</button>
                    </div>
                </form>
            </div>

            <!--Contact Info Box-->
            <div class="contact-info-box">
                <ul class="info-list">
                    <li><a href="mailto:example@gmail.com">example@gmail.com</a></li>
                    <li><a href="tel:+(123)4567890">+(123) 456 7890</a></li>
                </ul>
                <ul class="social-list clearfix">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Linkedin</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Google +</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
        </div>
    </section>
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
                                <h1>Luna Residencial</h1>
                                <div class="text">Building with excellence and sophistication, <br> exceeding expectations.</div>
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
                                <h1>Luna Residencial</h1>
                                <div class="text">Building with excellence and sophistication, <br> exceeding expectations.</div>
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
                                <h1>Luna Residencial</h1>
                                <div class="text">Building with excellence and sophistication, <br> exceeding expectations.</div>
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
                            <figure class="image wow fadeInLeft" data-wow-delay='600ms'><img src="images/resource/1.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <div class="content-box">
                            <div class="sec-title">
                                <h2 data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="About Company">About Company</h2>
                            </div>
                            <h5>We create functional, beautiful interiors for our clients since 1987.</h5>
                            <div class="text">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. When an unknown printer took a galley of type and scrambled it to make a type specimen book. When an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                            <div class="link-box"><a href="about.html" class="theme-btn btn-style-three">Read More</a></div>
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
                <h2>Interior Service</h2>
            </div>
            <div class="services-box row clearfix">
                <div class="services-carousel owl-carousel owl-theme">
                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-house-1"></i>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Plans and Projects</a></h3>
                                <div class="text">Planning and zoning are important tools for communities in that they provide the opportunity to establish sound and efficient land use patterns.</div>
                                <div class="link-box">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-house"></i>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Conceptual Architecture</a></h3>
                                <div class="text">Planning and zoning are important tools for communities in that they provide the opportunity to establish sound and efficient land use patterns.</div>
                                <div class="link-box">
                                    <a href="#">Read More</a>
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
                                <h3><a href="#">Apartment Buildings</a></h3>
                                <div class="text">Planning and zoning are important tools for communities in that they provide the opportunity to establish sound and efficient land use patterns.</div>
                                <div class="link-box">
                                    <a href="#">Read More</a>
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
                                <h3><a href="#">Plans and Projects</a></h3>
                                <div class="text">Planning and zoning are important tools for communities in that they provide the opportunity to establish sound and efficient land use patterns.</div>
                                <div class="link-box">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-house"></i>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Conceptual Architecture</a></h3>
                                <div class="text">Planning and zoning are important tools for communities in that they provide the opportunity to establish sound and efficient land use patterns.</div>
                                <div class="link-box">
                                    <a href="#">Read More</a>
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
                                <h3><a href="#">Apartment Buildings</a></h3>
                                <div class="text">Planning and zoning are important tools for communities in that they provide the opportunity to establish sound and efficient land use patterns.</div>
                                <div class="link-box">
                                    <a href="#">Read More</a>
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
                                <h3><a href="#">Plans and Projects</a></h3>
                                <div class="text">Planning and zoning are important tools for communities in that they provide the opportunity to establish sound and efficient land use patterns.</div>
                                <div class="link-box">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-house"></i>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Conceptual Architecture</a></h3>
                                <div class="text">Planning and zoning are important tools for communities in that they provide the opportunity to establish sound and efficient land use patterns.</div>
                                <div class="link-box">
                                    <a href="#">Read More</a>
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
                                <h3><a href="#">Apartment Buildings</a></h3>
                                <div class="text">Planning and zoning are important tools for communities in that they provide the opportunity to establish sound and efficient land use patterns.</div>
                                <div class="link-box">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section -->

    <!--Fluid Section One Section -->
    <section class="fluid-section-one">
        <div class="container-fluid clearfix">
            <!--Content Column-->
            <div class="content-column">
                <div class="inner-column">
                    <div class="row clearfix">
                        <!-- Service Block -->
                        <div class="text-column">
                            <div class="inner-box">
                                <h4>Design, followed by Form & Function. Our core values allow us to innovate & push foward.</h4>
                                <div class="text">UNIQUE PERSPECTIVE.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Image Column-->
            <div class="image-column wow fadeInRight animated" style="background-image: url(_images/resource/2.html); visibility: visible; animation-name: fadeInRight;">
                <figure class="image-box"><img src="images/resource/2.jpg" alt=""></figure>
                <div class="video-link"><a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="link" data-fancybox="gallery" data-caption=""> <span class="fa fa-play"></span></a></div>
            </div>
        </div>
    </section>
    <!--End Fluid Section One Section -->

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
                                        <li class="p-tab-btn" data-tab="#p-tab-5">Residential </li>
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
                            <div class="more-project"><a href="portfolio.html">View All Projects <i class="fa fa-arrows-alt"></i></a></div>
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
                                                <img src="images/gallery/1.jpg" alt="" />
                                                <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/1.jpg" class="see-more lightbox-image" data-fancybox="gallery"><span class="flaticon-add"></span></a>
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
                                                <img src="images/gallery/2.jpg" alt="" />
                                                 <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/2.jpg" class="see-more lightbox-image" data-fancybox="gallery"><span class="flaticon-add"></span></a>
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
                                                <img src="images/gallery/3.jpg" alt="" />
                                                 <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/3.jpg" class="see-more lightbox-image" data-fancybox="gallery"><span class="flaticon-add"></span></a>
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
                                                <img src="images/gallery/1.jpg" alt="" />
                                                <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/1.jpg" class="see-more lightbox-image" data-fancybox="gallery"><span class="flaticon-add"></span></a>
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
                                                <img src="images/gallery/2.jpg" alt="" />
                                                 <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/2.jpg" class="see-more lightbox-image" data-fancybox="gallery"><span class="flaticon-add"></span></a>
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
                                                <img src="images/gallery/3.jpg" alt="" />
                                                 <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/3.jpg" class="see-more lightbox-image" data-fancybox="gallery"><span class="flaticon-add"></span></a>
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
                                                <img src="images/gallery/1.jpg" alt="" />
                                                <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/1.jpg" class="see-more lightbox-image" data-fancybox="gallery"><span class="flaticon-add"></span></a>
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
                                                <img src="images/gallery/2.jpg" alt="" />
                                                 <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/2.jpg" class="see-more lightbox-image" data-fancybox="gallery"><span class="flaticon-add"></span></a>
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
                                                <img src="images/gallery/3.jpg" alt="" />
                                                 <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/3.jpg" class="see-more lightbox-image" data-fancybox="gallery"><span class="flaticon-add"></span></a>
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
                                                <img src="images/gallery/1.jpg" alt="" />
                                                <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/1.jpg" class="see-more lightbox-image" data-fancybox="gallery"><span class="flaticon-add"></span></a>
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
                                                <img src="images/gallery/2.jpg" alt="" />
                                                 <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/2.jpg" class="see-more lightbox-image" data-fancybox="gallery"><span class="flaticon-add"></span></a>
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
                                                <img src="images/gallery/3.jpg" alt="" />
                                                 <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/3.jpg" class="see-more lightbox-image" data-fancybox="gallery"><span class="flaticon-add"></span></a>
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
                                                <img src="images/gallery/1.jpg" alt="" />
                                                <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/1.jpg" class="see-more lightbox-image" data-fancybox="gallery"><span class="flaticon-add"></span></a>
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
                                                <img src="images/gallery/2.jpg" alt="" />
                                                 <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/2.jpg" class="see-more lightbox-image" data-fancybox="gallery"><span class="flaticon-add"></span></a>
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
                                                <img src="images/gallery/3.jpg" alt="" />
                                                 <!--Overlay Two-->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="overlay-content">
                                                            <a href="images/gallery/3.jpg" class="see-more lightbox-image" data-fancybox="gallery"><span class="flaticon-add"></span></a>
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

    <!--testimonial Section -->
    <section class="testimonial-section">
        <div class="outer-container clearfix">
            <div class="testmonial-outer">
                <!--Image Column-->
                <div class="image-column wow fadeInLeft animated" style="background-image: url(_images/background/7.html); visibility: visible; animation-name: fadeInLeft;">
                    <figure class="image-box"><img src="images/background/7.jpg" alt=""></figure>
                </div>

                <!--Image Column-->
                <div class="image-column-two wow fadeInRight animated" style="background-image: url(_images/background/6.html); visibility: visible; animation-name: fadeInRight;">
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
                                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of me.
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
                                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of me.
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
                                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of me.
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
                                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of me.
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
                                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of me.
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
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which.</div>
                                <div class="link-box">
                                    <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
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
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which.</div>
                                <div class="link-box">
                                    <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
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
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which.</div>
                                <div class="link-box">
                                    <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                            <div class="number-slide">03</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Skill Section -->
    <section class="skill-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="image-column wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInUp;">
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
                                            <div class="bar-innner"><div class="bar-fill" data-percent="85"><div class="percent"></div></div></div>
                                        </div>
                                    </div>
                                </div>

                                <!--Progress Box-->
                                <div class="progress-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="0ms">
                                    <div class="box-title">AutoCAD</div>
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner"><div class="bar-fill" data-percent="75"><div class="percent"></div></div></div>
                                        </div>
                                    </div>
                                </div>

                                <!--Progress Box-->
                                <div class="progress-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="0ms">
                                    <div class="box-title">Lighting</div>
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner"><div class="bar-fill" data-percent="95"><div class="percent"></div></div></div>
                                        </div>
                                    </div>
                                </div>

                                <!--Progress Box-->
                                <div class="progress-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="0ms">
                                    <div class="box-title">3D Skills</div>
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner"><div class="bar-fill" data-percent="82"><div class="percent"></div></div></div>
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
                                <h3><a href="blog-detail.html">In Good Taste: Mark Finlay Architects & Interiors</a></h3>
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
                                <h3><a href="blog-detail.html">In Good Taste: Mark Finlay Architects & Interiors</a></h3>
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
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section-->

     <!-- Main Footer -->
    <footer class="main-footer">
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row">
                    <!--Big Column-->
                    <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <div class="footer-logo">
                                        <figure>
                                            <a href="index.php"><img src="images/footer-logo.png" alt=""></a>
                                        </figure>
                                    </div>
                                    <div class="widget-content">
                                        <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet morn ings of spring which I enjoy with my whole heart of me.</div>
                                        <div class="social-links">
                                            <ul class="social-icon-two">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                 <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Services</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="#">Plans and Projects</a></li>
                                            <li><a href="#">Conceptual Architecture</a></li>
                                            <li><a href="#">Apartment Buildings</a></li>
                                            <li><a href="#">Skyscrapers Buildings</a></li>
                                            <li><a href="#">Restauration Projects</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Big Column-->
                    <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row clearfix">
                            <!--Footer Column-->
                            <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget gallery-widget">
                                    <h2 class="widget-title">Recent Works</h2>
                                    <div class="widget-content">
                                        <div class="outer clearfix">
                                            <figure class="image">
                                                <a href="images/resource/work-thumb-1.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/work-thumb-1.jpg" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="images/resource/work-thumb-2.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/work-thumb-2.jpg" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="images/resource/work-thumb-3.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/work-thumb-3.jpg" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="images/resource/work-thumb-4.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/work-thumb-4.jpg" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="images/resource/work-thumb-5.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/work-thumb-5.jpg" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="images/resource/work-thumb-6.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/work-thumb-6.jpg" alt=""></a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                 <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Contact Us</h2>
                                    <div class="widget-content">
                                        <ul class="list-address">
                                            <li><i class="fas fa-map-marker-alt"></i>Structure Avenue, Melbourne City, Austalia</li>
                                            <li><i class="fas fa-phone-volume"></i><a href="tel:+321456789012">+321 4567 89 012</a></li>
                                            <li><i class="fas fa-envelope"></i><a href="mailto:">supportyou@altoona.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Project</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="copyright-text">
                        <p>Copyright © 2019 <a href="#">Your Company Name</a> All right reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
