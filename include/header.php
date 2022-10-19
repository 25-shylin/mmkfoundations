<?php include('include/database.php') ?>
<!DOCTYPE html>

<html lang="zxx">

<head>

    <!-- ** Basic Page Needs ** -->
    <meta charset="utf-8">
    <title>MMK FOUNDATION</title>

    <!-- ** Mobile Specific Metas ** -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="MMK FOUNDATION">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="MMK FOUNDATION">
    <meta name="generator" content="MMK FOUNDATION">
    <meta name="p:domain_verify" content="40a2823fec1404b71a37ea73a3ded5dd"/>
    <meta name="facebook-domain-verification" content="dmxbq45whcsdzb6ae5vzoxuw3uqri3" />
    <!-- ** Plugins Needed for the Project ** -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick/slick-theme.css">
    <!-- FancyBox -->
    <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="plugins/animation/animate.min.css">
    <!-- jquery-ui -->
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.css">
    <!-- timePicker -->
    <link rel="stylesheet" href="plugins/timePicker/timePicker.css">

    <!-- Stylesheets -->
    <link href="css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Twitter universal website tag code -->
    <script>
        ! function(e, t, n, s, u, a) {
            e.twq || (s = e.twq = function() {
                    s.exe ? s.exe.apply(s, arguments) : s.queue.push(arguments);
                }, s.version = '1.1', s.queue = [], u = t.createElement(n), u.async = !0, u.src = '//static.ads-twitter.com/uwt.js',
                a = t.getElementsByTagName(n)[0], a.parentNode.insertBefore(u, a))
        }(window, document, 'script');
        // Insert Twitter Pixel ID and Standard Event data below
        twq('init', 'o8irh');
        twq('track', 'PageView');
    </script>
    <!-- End Twitter universal website tag code -->

</head>


<body>
    <div class="page-wrapper">
        <!--header top-->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="top-left text-center text-md-left">
                            <h6>Opening Hours : Monday to Saturday- 10am to 5pm</h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="top-right text-center text-md-right">
                            <ul class="social-links">
                                <li>
                                    <a href="https://www.facebook.com/MMK-Foundation-101077255894364/" aria-label="facebook" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/foundation_mmk" aria-label="twitter" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UC2MmfK-7oyUA5W6ojfu_yzA" aria-label="google-plus" target="_blank">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/mmk_ngo/" aria-label="instagram" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://in.pinterest.com/atturmmk/" aria-label="pinterest" target="_blank">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header top-->

        <!--Header Upper-->
        <section class="header-uper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-3">
                        <div class="logo">
                            <a href="index.php">
                                <img loading="lazy" class="img-fluid" src="images/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9">
                        <div class="right-side">
                            <ul class="contact-info pl-0 mb-4 mb-md-0">
                                <li class="item text-left">
                                    <div class="icon-box">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <strong>Email</strong>
                                    <br>
                                    <a href="mailto:director@mmkfoundation.org">
                                        <span>director@mmkfoundation.org</span>
                                    </a>
                                </li>
                                <li class="item text-left">
                                    <div class="icon-box">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <strong>Call Now</strong>
                                    <br>
                                    <span>04282 - 251797</span>
                                </li>
                            </ul>
                            <div class="link-btn text-center text-lg-right">
                                <a href="donate.php" class="btn-style-one">Donate Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Header Upper-->


        <!--Main Header-->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarLinks">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <!-- <li class="nav-item dropdown @@blogs">
                            <a class="nav-link dropdown-toggle " href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item @@blogDetails" href="covid-19.php">Covid-19</a></li>
                                <li><a class="dropdown-item @@blogDetails" href="testimonial.php">Our Testimonials</a></li>


                            </ul>
                        </li> -->
                        <li class="nav-item dropdown @@blogs">
                            <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Who We Are</a>

                            <ul class="dropdown-menu" id="aboutus" aria-labelledby="navbarDropdown">
                                <!-- <li class="nav-item dropdown @@blogs">
                                    <a class="nav-link  aboutus" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About us &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu dropabout" aria-labelledby="navbarDropdown">
                                    <li class="nav-item dropdown  @@blogs">
                                        <a class="nav-link dropdown-toggle aboutus" href="aboutus.php" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">About the Organization</a>
                                        <ul class="dropdown-menu aboutorg " aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item @@blogDetails" href="awards-and-recognitions.php">Awards & Recognitions</a></li>
                                            <li><a class="dropdown-item @@blogDetails" href="innovations.php">Innovations</a></li>
                                            <li><a class="dropdown-item @@blogDetails" href="touching-lives.php">Touching Lives </a></li>
                                        </ul>
                                        <li><a class="dropdown-item @@blogDetails " href="people-behind-mmk.php">Our Team</a></li>

                                    </ul>
                                </li> -->
                                <li><a class="dropdown-item @@blogDetails" href="aboutus.php">About us </a></li>
                                <li><a class="dropdown-item @@blogDetails" href="volunteer-individuals.php">Become Volunteers </a></li>
                                <li><a class="dropdown-item @@blogDetails" href="our-partners.php">Our Partners</a></li>
                                <li><a class="dropdown-item @@blogDetails" href="faq.php">FaQs</a></li>
                                <li><a class="dropdown-item @@blogDetails" href="careers.php">Careers</a></li>
                                <!-- <li><a class="dropdown-item @@blogDetails" href="vision-mission.php">Vision & Mission</a></li> -->
                                <!-- <li><a class="dropdown-item @@blogDetails" href="where-we-work.php">Where We Work</a></li> -->
                                <!-- <li><a class="dropdown-item @@blogDetails" href="people-behind-mmk.php">People Behind MMK</a></li> -->


                            </ul>
                        </li>

                        <li class="nav-item dropdown @@blogs">
                            <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Work </a>

                            <ul class="dropdown-menu ourwork" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item @@blogDetails" href="education.php">Education </a></li>
                                <li><a class="dropdown-item @@blogDetails" href="health.php">Health</a></li>
                                <li><a class="dropdown-item @@blogDetails" href="livelihood.php">Livelihood </a></li>
                                <!-- <li><a class="dropdown-item @@blogDetails" href="women-empowerment.php">Women Empowerment</a></li> -->
                                <li><a class="dropdown-item @@blogDetails" href="disaster-response.php">Disaster Response</a></li>

                                <li><a class="dropdown-item @@blogDetails" href="environmental-protection.php">Environmental Protection</a></li>
                                <li><a class="dropdown-item @@blogDetails" href="kid-for-kid.php"> Kid for Kid</a></li>



                            </ul>
                        </li>

                        <!-- <li class="nav-item dropdown @@blogs">
                            <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Achievements </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item @@blogDetails" href="impact.php">Impact</a></li>
                                <li><a class="dropdown-item @@blogDetails" href="innovations.php">Innovations</a></li>
                                <li><a class="dropdown-item @@blogDetails" href="touching-lives.php">Touching Lives </a></li>
                                <li><a class="dropdown-item @@blogDetails" href="our-partners.php">Our Partners</a></li>
                                <li><a class="dropdown-item @@blogDetails" href="testimonials.php">Testimonials</a></li>
                                <li><a class="dropdown-item @@blogDetails" href="awards-and-recognitions.php">Awards & Recognitions</a></li>

                            </ul>
                        </li> -->


                        <li class="nav-item dropdown @@blogs">
                            <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Make A Difference</a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item @@blogDetails" href="individuals.php">Individuals</a></li>
                                <li><a class="dropdown-item @@blogDetails" href="corporates.php">Corporates</a></li>
                                <li><a class="dropdown-item @@blogDetails" href="institutions.php">Institutions</a></li>
                                <li><a class="dropdown-item @@blogDetails" href="schools.php">Schools</a></li>
                                <!-- <li><a class="dropdown-item @@blogDetails" href="awareness-camps.php">Awareness Camps</a></li>
                                <li><a class="dropdown-item @@blogDetails" href="careers.php">Careers</a></li>
                                <li><a class="dropdown-item @@blogDetails" href="support-us.php">Support Us</a></li>
                                <li><a class="dropdown-item @@blogDetails" href="faq.php">FaQs</a></li> -->

                            </ul>
                        </li>

                        <!-- <li class="nav-item @@contact">
                            <a class="nav-link" href="covid-19.php">Covid-19</a>
                        </li>
                         -->
                        <li class="nav-item dropdown @@blogs">
                            <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Media Center</a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item @@blogDetails" href="events.php">Events</a></li>
                                <li><a class="dropdown-item @@blogDetails" href="gallery.php">Gallery</a></li>



                            </ul>
                        </li>
                        <li class="nav-item @@contact">
                            <a class="nav-link" href="contactus.php">Contact Us</a>
                        </li>
                        <!-- <li class="nav-item @@contact">
                            <a class="nav-link" href="volunteer-individuals.php">Volunteers</a>
                        </li> -->
                        <!-- <li class="nav-item dropdown @@blogs">
                            <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sign in</a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item @@blogDetails" href="volunteers/index.php">Volunteers</a></li>
                                <li><a class="dropdown-item @@blogDetails" href="employee/index.php">Employee</a></li>
                                <li><a class="dropdown-item @@blogDetails" href="donner/index.php">Donner</a></li>


                            </ul>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!--End Main Header -->