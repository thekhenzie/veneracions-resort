<?php
ob_start();
session_start();
if( isset($_SESSION['user'])!="" ){
	header("Location: index.php");
}
include_once 'dbconnect.php';

if(isset($_POST['signUp'])) {
		
	$username = trim($_POST['username']);
	$emailAddress = trim($_POST['emailAddress']);
	$password = trim($_POST['password']);
	
	$username = strip_tags($username);
	$emailAddress = strip_tags($emailAddress);
	$upassword = strip_tags($password);
	
	// password encrypt using SHA256();
	//$password = hash('sha256', $password);
	$password = $upassword;
	// check emailAddress exist or not
	$query = "SELECT emailAddress FROM admin WHERE emailAddress='$emailAddress'";
	$result = mysql_query($query);
	
	$count = mysql_num_rows($result); // if emailAddress not found then proceed
	if ($count==0) {
		$query = "INSERT INTO admin(username, emailAddress, password) VALUES('$username','$emailAddress','$password')";
		$res = mysql_query($query);
		
		if ($res) {
			$errTyp = "success";
			$errMSG = "Successfully registered, you may login now";
		} else {
			$errTyp = "danger";
			$errMSG = "Something went wrong, try again later...";	
		}	
			
	} else {
		$errTyp = "warning";
		$errMSG = "Email address already in use.";
	}
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Register</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="images/favicon.png"/>

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
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->


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
                        <span><i class="lotus-icon-cloud"></i> 27 °C</span>
                        <span><i class="lotus-icon-location"></i> Montalban, Rodriguez Rizal, PH</span>
                        <span><i class="lotus-icon-phone"></i> +63 915 6789 321</span>
                    </div>
                    <div class="header_right float-right">

                        <span class="login-register">
                            <a href="login.php">Login</a>
                            <a class="active" href="register.php">register</a>
                        </span>

                    </div>
                </div>
            </div>
            <!-- END / HEADER TOP -->
            
            <!-- HEADER LOGO & MENU -->
            <div class="header_content" id="header_content">

                <div class="container">
                    <!-- HEADER LOGO -->
                    <div class="header_logo">
                        <a href="#"><img src="images/logo-header.png" alt=""></a>
                    </div>
                    <!-- END / HEADER LOGO -->
                    
                    <!-- HEADER MENU -->
                    <nav class="header_menu">
                        <ul class="menu">
                            <li class="current-menu-item">
                                <a href="index.php">Home</a>
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
                                    <!-- <li>
                                        <a href="room-2.html">Room 2</a>
                                    </li>
                                    <li>
                                        <a href="room-3.html">Room 3</a>
                                    </li>
                                    <li>
                                        <a href="room-4.html">Room 4</a>
                                    </li> -->
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
                            <!-- <li>
                                <a href="#">Restaurant
                                    <span class="fa fa-caret-down"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="restaurants-1.html">Restaurant 1</a>
                                    </li>
                                    <li>
                                        <a href="restaurants-2.html">Restaurant 2</a>
                                    </li>
                                    <li>
                                        <a href="restaurants-3.html">Restaurant 3</a>
                                    </li>
                                    <li>
                                        <a href="restaurants-4.html">Restaurant 4</a>
                                    </li>
                                </ul>
                            </li> -->
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
                            <!-- <li>
                                <a href="#">Page
                                    <span class="fa fa-caret-down"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">Guest Book
                                            <span class="fa fa-caret-right"></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="guest-book.html">Guest Book 1</a>
                                            </li>
                                            <li>
                                                <a href="guest-book-2.html">Guest Book 2</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">Event
                                            <span class="fa fa-caret-right"></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="events.html">Events</a>
                                            </li>
                                            <li>
                                                <a href="events-fullwidth.html">Events Fullwidth</a>
                                            </li>
                                            <li>
                                                <a href="events-detail.html">Events Detail</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="attractions.html">Attractions</a>
                                    </li>
                                    <li>
                                        <a href="#">Term Condition
                                            <span class="fa fa-caret-right"></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="term-condition.html">Term Condition 1</a>
                                            </li>
                                            <li>
                                                <a href="term-condition-2.html">Term Condition 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="">Activiti
                                            <span class="fa fa-caret-down"></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="activiti.html">Activiti</a>
                                            </li>
                                            <li>
                                                <a href="activiti-detail.html">Activiti Detail</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="check-out.html">Check Out</a>
                                    </li>
                                    <li>
                                        <a href="shortcode.html">ShortCode</a>
                                    </li>
                                    <li>
                                        <a href="page-404.html">404 Page</a>
                                    </li>
                                    <li>
                                        <a href="comingsoon.html">Coming Soon</a>
                                    </li>
                                </ul>
                            </li> -->
                            <li>
                                <a href="#">Gallery
                                    <span class="fa fa-caret-down"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="gallery.html">Gallery Style 1</a>
                                    </li>
                                    <!-- <li>
                                        <a href="gallery-2.html">Gallery Style 2</a>
                                    </li>
                                    <li>
                                        <a href="gallery-3.html">Gallery Style 3</a>
                                    </li> -->
                                </ul>
                            </li>
                            <!-- <li>
                                <a href="#">Blog
                                    <span class="fa fa-caret-down"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="blog.html">Blog</a>
                                    </li>
                                    <li>
                                        <a href="blog-detail.html">Blog Detail</a>
                                    </li>
                                    <li>
                                        <a href="blog-detail-fullwidth.html">Blog Detail Fullwidth</a>
                                    </li>
                                </ul>
                            </li> -->
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
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

        <!-- ACCOUNT -->
        <section class="section-account parallax bg-11">
            <div class="awe-overlay"></div>
            <div class="container">
                <div class="login-register">
                    <div class="text text-center">       
                        <h2>REGISTER FORM</h2>
                        <p>If you no have account in Veneracion's Resort! Register and feeling</p>
                        <form method="post" class="account_form" autocomplete="off">
                        <?php
                        if ( isset($errMSG) ) {
                            
                            ?>
                            <div class="form-group">
                            <div class="alert alert-dismissable alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info"></i> <?php echo $errMSG; ?>
                            </div>
                            </div>
                            <?php
                        }
                        ?>
                            <div class="field-form">
                                <input type="text" name="username" class="field-text" placeholder="User name*" required>
                            </div>
                            <div class="field-form">
                                <input type="email" name="emailAddress" class="field-text" placeholder="Email Address*" required>
                            </div>
                            <div class="field-form"> 
                                <input type="password" name="password" class="field-text" placeholder="Password*" required>
                            </div>
                            <div class="field-form field-submit">
                                <button name="signUp" class="awe-btn awe-btn-13">REGISTER</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / ACCOUNT -->

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
                                        <input type="text" name="emailAddress" placeholder="Your email address address" class="input-text">
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
                                     
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
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
                                        <a href="#"><img src="images/logo-footer.png" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <p><i class="lotus-icon-location"></i> Montalban, Rodriguez Rizal, PH</p>
                                        <p><i class="lotus-icon-phone"></i> +63 915 6789 321</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="mailto:lotushotel@gmail.com">lotushotel@gmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">Page site</h4>
                                <ul>
                                    <li><a href="#">Guest Book</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Event</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xs-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">ABOUT</h4>
                                <ul>
                                    <li><a href="">About</a></li>
                                    <li><a href="">Blog</a></li>
                                    <li><a href="">Contact Us</a></li>
                                    <li><a href="">Coming Soon</a></li>
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