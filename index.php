<?php
    ob_start();
    session_start();
    require_once 'dbconnect.php';
    
    // select loggedin users detail
    $res=mysql_query("SELECT * FROM admin WHERE adminID=".$_SESSION['user']);
    $userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Index</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="images/favicon.png" />

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="css/lib/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/font-lotusicon.css">
    <link rel="stylesheet" type="text/css" href="css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/lib/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/lib/settings.css">
    <link rel="stylesheet" type="text/css" href="css/lib/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/devStyle.css">
    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<!--[if IE 7]> <body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]> <body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]> <body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->

<body>
    <!--<![endif]-->


    <!-- PRELOADER -->
    <div id="preloader">
        <span class="preloader-dot"></span>
    </div>
    <!-- END / PRELOADER -->

    <!-- PAGE WRAP -->
    <div id="page-wrap">

        <!-- HEADER -->
        <header id="header" class="header-v2">

            <!-- HEADER TOP -->
            <div class="header_top">
                <div class="container">
                    <div class="header_left float-left">
                        <span>
                            <i class="lotus-icon-cloud"></i> 27 °C</span>
                        <span>
                            <i class="lotus-icon-location"></i> Montalban, Rodriguez Rizal, PH</span>
                        <span>
                            <i class="lotus-icon-phone"></i> +63 915 6789 321</span>
                    </div>
                    
                    <?php
                    if(!$_SESSION['isAdmin']){
                        echo "
                        <div class='header_right float-right'>
                        <span class='login-register'>
                            <a href='login.html'>Login</a>
                            <a href='register.html'>register</a>
                        </span>
                        </div>";
                    }
                    ?>
                    
                </div>
            </div>
            <!-- END / HEADER TOP -->

            <!-- HEADER LOGO & MENU -->
            <div class="header_content" id="header_content">

                <div class="container">
                    <!-- HEADER LOGO -->
                    <div class="header_logo">
                        <a href="#">
                            <img src="images/logo-header.png" alt="">
                        </a>
                    </div>
                    <!-- END / HEADER LOGO -->

                    <!-- HEADER MENU -->
                    <nav class="header_menu">
                        <ul class="menu">
                            <li class="current-menu-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="about.html">About</a>
                            </li>

                            <li>
                                <a href="#">Room
                                    <span class="fa fa-caret-down"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="room-1.html">Room 1</a>
                                    </li>
                                    <li>
                                        <a href="room-5.html">Room 2</a>
                                    </li>
                                    <li>
                                        <a href="room-6.html">Room 3</a>
                                    </li>
                                    <li>
                                        <a href="room-detail.html">Room Detail</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Reservation
                                    <span class="fa fa-caret-down"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="reservation-step-1.html">Reservation Step 1</a>
                                    </li>
                                    <li>
                                        <a href="reservation-step-2.html">Reservation Step 2</a>
                                    </li>
                                    <li>
                                        <a href="reservation-step-3.html">Reservation Step 3</a>
                                    </li>
                                    <li>
                                        <a href="reservation-step-4.html">Reservation Step 4</a>
                                    </li>
                                    <li>
                                        <a href="reservation-step-5.html">Reservation Step 5</a>
                                    </li>
                                    <li>
                                        <a href="check-out.html">Check Out</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Gallery
                                    <span class="fa fa-caret-down"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="gallery.html">Gallery Style 1</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                            <?php 
                            if($_SESSION['isAdmin']){
                            echo "
                            <li>
                                <a href='#'>Hi ".$userRow['username']."!
                                    <span class='fa fa-caret-down'></span>
                                </a>
                                <ul class='sub-menu'>
                                    <li>
                                        <a href='logout.php?logout'>Logout</a>
                                    </li>
                                </ul>
                            </li>";
                            }
                            ?>
                        </ul>
                    </nav>
                    <!-- END / HEADER MENU -->

                    <!-- MENU BAR -->
                    <span class="menu-bars">
                        <span></span>
                    </span>
                    <!-- END / MENU BAR -->

                </div>
            </div>
            <!-- END / HEADER LOGO & MENU -->

        </header>
        <!-- END / HEADER -->

        <!-- BANNER SLIDER -->
        <section class="section-slider">
            <h1 class="element-invisible">Slider</h1>
            <div id="slider-revolution">
                <ul>
                    <li data-transition="fade">
                        <img src="images/slider/img-1.jpg" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center"
                            alt="">

                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="100" data-speed="700" data-start="1500"
                            data-easing="easeOutBack">
                            <img src="images/slider/hom1-slide1.png" alt="icons">
                        </div>

                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="240" data-speed="700" data-start="1500"
                            data-easing="easeOutBack">
                            WELCOME TO
                        </div>

                        <div class="tp-caption sfb fadeout slider-caption slider-caption-sub-1" data-x="center" data-y="280" data-speed="700" data-easing="easeOutBack"
                            data-start="2000">VENERACION'S RESORTS</div>

                        <a href="#" class="tp-caption sfb fadeout awe-btn awe-btn-12 awe-btn-slider" data-x="center" data-y="380" data-easing="easeOutBack"
                            data-speed="700" data-start="2200">VIEW NOW</a>
                    </li>

                    <li data-transition="fade">
                        <img src="images/slider/img-1.jpg" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center"
                            alt="">

                        <div class="tp-caption sft fadeout" data-x="center" data-y="195" data-speed="700" data-start="1300" data-easing="easeOutBack">
                            <img src="images/icon-slider-1.png" alt="">
                        </div>

                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-sub-3" data-x="center" data-y="220" data-speed="700"
                            data-start="1500" data-easing="easeOutBack">
                            <!-- EACH HOTEL IS -->
                            COME AND
                        </div>

                        <div class="tp-caption sfb fadeout slider-caption slider-caption-3" data-x="center" data-y="260" data-speed="700" data-easing="easeOutBack"
                            data-start="2000">
                            <!-- UNIQUE 60% -->
                            VISIT US
                        </div>

                        <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-3" data-x="center" data-y="365" data-easing="easeOutBack"
                            data-speed="700" data-start="2200">
                            RIGHT NOW
                        </div>

                        <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-3" data-x="center" data-y="395" data-easing="easeOutBack"
                            data-speed="700" data-start="2400">
                            <img src="images/icon-slider-2.png" alt="">
                        </div>
                    </li>

                </ul>
            </div>

        </section>
        <!-- END / BANNER SLIDER -->

        <!-- CHECK AVAILABILITY -->
        <section class="section-check-availability">
            <div class="container">
                <div class="check-availability">
                    <div class="row">
                        <div class="col-lg-3">
                            <h2>ROOMS & RATES</h2>
                        </div>
                        <div class="col-lg-9">
                            <div class="availability-form">
                                <input type="text" class="awe-calendar from" placeholder="Arrival Date">
                                <input type="text" class="awe-calendar to" placeholder="Departure Date">

                                <select class="awe-select">
                                    <option>Adults</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                                <select class="awe-select">
                                    <option>Children</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                                <div class="vailability-submit">
                                    <button class="awe-btn awe-btn-13">FIND THE BEST RATE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / CHECK AVAILABILITY -->

        <!-- ACCOMMODATIONS -->
        <section class="section-accommo_1 bg-white">
            <div class="container">

                <div class="accomd-modations_1">

                    <h2 class="heading">ACCOMMODATIONS</h2>

                    <div class="accomd-modations-content_1">

                        <div class="accomd-modations-slide_1">

                            <!-- ITEM -->
                            <div class="accomd-modations-room_1">

                                <div class="img">
                                    <a href="#">
                                        <img src="images/room/img-2.jpg" alt="">
                                    </a>
                                </div>

                                <div class="text">
                                    <h2>
                                        <a href="#">Luxury Room</a>
                                    </h2>
                                    <p class="desc">Cum sociis natoque penatibus et magnis dis part urient montes, nascetur ridiculus mus.
                                        Vestib ulum id ligula porta felis euis.</p>
                                    <div class="wrap-price">
                                        <p class="price">
                                            <span class="amout">₱320</span> /days
                                        </p>
                                        <a href="#" class="awe-btn awe-btn-default">VIEW DETAIL</a>
                                    </div>
                                </div>

                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="accomd-modations-room_1">
                                <div class="img">
                                    <a href="#">
                                        <img src="images/room/img-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="text">
                                    <h2>
                                        <a href="#">Luxury Room</a>
                                    </h2>
                                    <p class="desc">Cum sociis natoque penatibus et magnis dis part urient montes, nascetur ridiculus mus.
                                        Vestib ulum id ligula porta felis euis.</p>
                                    <div class="wrap-price">
                                        <p class="price">
                                            <span class="amout">₱320</span> /days
                                        </p>
                                        <a href="#" class="awe-btn awe-btn-default">VIEW DETAIL</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="accomd-modations-room_1">
                                <div class="img">
                                    <a href="#">
                                        <img src="images/room/img-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="text">
                                    <h2>
                                        <a href="#">Luxury Room</a>
                                    </h2>
                                    <p class="desc">Cum sociis natoque penatibus et magnis dis part urient montes, nascetur ridiculus mus.
                                        Vestib ulum id ligula porta felis euis.</p>
                                    <div class="wrap-price">
                                        <p class="price">
                                            <span class="amout">₱320</span> /days
                                        </p>
                                        <a href="#" class="awe-btn awe-btn-default">VIEW DETAIL</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="accomd-modations-room_1">
                                <div class="img">
                                    <a href="#">
                                        <img src="images/room/img-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="text">
                                    <h2>
                                        <a href="#">Luxury Room</a>
                                    </h2>
                                    <p class="desc">Cum sociis natoque penatibus et magnis dis part urient montes, nascetur ridiculus mus.
                                        Vestib ulum id ligula porta felis euis.</p>
                                    <div class="wrap-price">
                                        <p class="price">
                                            <span class="amout">₱320</span> /days
                                        </p>
                                        <a href="#" class="awe-btn awe-btn-default">VIEW DETAIL</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- ACCOMMODATIONS -->

        <!-- SECTION GUESTBOOK - EVENT DEAD -->
        <section class="section-guestbook-event bg-white">
            <div class="container">

                <div class="guestbook-event">
                    <div class="row">

                        <div class="col-md-6">

                            <h2 class="heading">GUEST BOOK</h2>

                            <div class="guestbook-content_1 owl-single">

                                <!-- ITEM -->
                                <div class="guestbook-item_1">
                                    <div class="img">
                                        <img src="images/avatar/img-5.jpg" alt="">
                                        <span>
                                            <strong>Khen</strong>From Metro Manila, Philippines</span>
                                    </div>

                                    <div class="text">
                                        <p>Both the outstanding staff and the beautiful room made our first visit such a success!</p>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="guestbook-item_1">
                                    <div class="img">
                                        <img src="images/avatar/img-5.jpg" alt="">
                                        <span>
                                            <strong>Khen</strong>From Metro Manila, Philippines</span>
                                    </div>

                                    <div class="text">
                                        <p>Both the outstanding staff and the beautiful room made our first visit such a success!</p>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                            </div>

                        </div>

                        <div class="col-md-6">
                            <h2 class="heading">GUEST BOOK</h2>

                            <div class="event-slide owl-single">
                                <!-- ITEM -->
                                <div class="event-item">
                                    <div class="img hover-zoom">
                                        <a href="#">
                                            <img src="images/home/eventdeal/img-1.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="event-item">
                                    <div class="img hover-zoom">
                                        <a href="#">
                                            <img src="images/home/eventdeal/img-1.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- END / SECTION GUESTBOOK - EVENT DEAD -->

        <!-- ABOUT -->
        <section class="section-home-about bg-white">
            <div class="container">
                <div class="home-about">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="img">
                                <a href="#">
                                    <img src="images/home/about/img-1.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text">
                                <h2 class="heading">ABOUT US</h2>
                                <span>Lorem Ipsum is simply dummy text</span>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece
                                    of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,
                                    a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure
                                    Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of
                                    the word in classical literature, discovered the undoubtable source</p>
                                <a href="#" class="awe-btn awe-btn-default">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / ABOUT -->

        <!-- OUR BEST -->
        <section class="section-our-best bg-white">
            <div class="container">

                <div class="our-best">
                    <div class="row">

                        <div class="col-md-6 col-md-push-6">
                            <div class="img">
                                <img src="images/home/ourbest/img-1.jpg" alt="">
                            </div>
                        </div>

                        <div class="col-md-6 col-md-pull-6 ">
                            <div class="text">
                                <h2 class="heading">Our Best</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                    took a galley of type and scrambled it to make a type specimen book. It has survived
                                    not only five centuries, but also the leap into electronic typesetting, remaining essentially
                                    unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                    Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                    including versions of Lorem Ipsum.
                                </p>
                                <ul>
                                    <li>
                                        <img src="images/home/ourbest/icon-3.png" alt="icon">Best Rooms 5 Star</li>
                                    <li>
                                        <img src="images/home/ourbest/icon-2.png" alt="icon">Wet Bar with Refrigerator</li>
                                    <li>
                                        <img src="images/home/ourbest/icon-1.png" alt="icon">Breakfast each morning</li>
                                    <li>
                                        <img src="images/home/ourbest/icon-6.png" alt="icon">Views to Veneracion's Resort</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- END / OUR BEST -->

        <!-- FOOTER -->
        <footer id="footer">

            <!-- FOOTER TOP -->
            <div class="footer_top">
                <div class="container">
                    <div class="row">

                        <!-- WIDGET MAILCHIMP -->
                        <div class="col-lg-9">
                            <div class="mailchimp">
                                <h4>News &amp; Offers</h4>
                                <div class="mailchimp-form">
                                    <form action="#" method="POST">
                                        <input type="text" name="email" placeholder="Your email address" class="input-text">
                                        <button class="awe-btn">SIGN UP</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END / WIDGET MAILCHIMP -->

                        <!-- WIDGET SOCIAL -->
                        <div class="col-lg-3">
                            <div class="social">
                                <div class="social-content">

                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END / WIDGET SOCIAL -->

                    </div>
                </div>
            </div>
            <!-- END / FOOTER TOP -->

            <!-- FOOTER CENTER -->
            <div class="footer_center">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-lg-5">
                            <div class="widget widget_logo">
                                <div class="widget-logo">
                                    <div class="img">
                                        <a href="#">
                                            <img src="images/logo-footer.png" alt="">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <p>
                                            <i class="lotus-icon-location"></i> Montalban, Rodriguez Rizal, PH</p>
                                        <p>
                                            <i class="lotus-icon-phone"></i> +63 915 6789 321</p>
                                        <p>
                                            <i class="fa fa-envelope-o"></i>
                                            <a href="mailto:hello@yopmail.com">hello@yopmail.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">Page site</h4>
                                <ul>
                                    <li>
                                        <a href="#">Guest Book</a>
                                    </li>
                                    <li>
                                        <a href="#">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="#">Event</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xs-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">ABOUT</h4>
                                <ul>
                                    <li>
                                        <a href="">About</a>
                                    </li>
                                    <li>
                                        <a href="">Blog</a>
                                    </li>
                                    <li>
                                        <a href="">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="">Coming Soon</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xs-4 col-lg-3">
                            <div class="widget widget_tripadvisor">
                                <h4 class="widget-title">Tripadvisor</h4>
                                <div class="tripadvisor">
                                    <p>Now with hotel reviews by</p>
                                    <img src="images/tripadvisor.png" alt="">
                                    <span class="tripadvisor-circle">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i class="part"></i>
                                    </span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- END / FOOTER CENTER -->

            <!-- FOOTER BOTTOM -->
            <div class="footer_bottom">
                <div class="container">
                    <p>&copy; 2017 Veneracion's Resort All rights reserved.</p>
                </div>
            </div>
            <!-- END / FOOTER BOTTOM -->

        </footer>
        <!-- END / FOOTER -->

    </div>
    <!-- END / PAGE WRAP -->


    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="js/lib/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/lib/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lib/bootstrap-select.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true"></script>
    <script type="text/javascript" src="js/lib/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/lib/owl.carousel.js"></script>
    <script type="text/javascript" src="js/lib/jquery.appear.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/lib/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/lib/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/lib/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</body>

</html>