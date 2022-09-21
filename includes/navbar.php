<?php
include ("config/dbconfig.php");
?>

<header class="main-header header-style-one">
    <div class="auto-container">
        <div class="main-box clearfix">
            <div class="logo-box">
                <div class="logo"><a href="index.php"><img src="images/logo.png" alt="" title=""></a></div>
            </div>

            <div class="nav-outer clearfix">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md ">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon flaticon-menu"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li <?php if ($page == "home"){?>class="current"<?php }?>><a href="index.php">Home</a>
                            </li>
                            <li <?php if($page == "about"){?>class="current"<?php } ?>><a href="about_us.php">About Us</a>
                            </li>
                            <li <?php if($page == "service"){?>class="current"<?php } ?>><a href="services.php">Service</a>
                            </li>
                            <li <?php if($page == "portfolio"){?>class="current"<?php } ?>><a href="portfolio.php">Portfolio</a></li>
                            <li <?php if ($page == "contact"){?>class="current"<?php }?>><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
                <!-- Main Menu End-->
                <div class="outer-box clearfix">
                    <!--Search Box-->

                    <button class="nav-toggler"><span class="fa fa-phone"></span></button>
                </div>
            </div>
        </div>
    </div>
</header>