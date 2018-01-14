<?php
session_start();
if (isset($_POST["checkIn"]) && !empty($_POST["checkIn"]) && isset($_POST["checkOut"]) && !empty($_POST["checkOut"])) {
    $_SESSION['checkin_date'] = date('M d, Y', strtotime($_POST['checkIn']));
    $_SESSION['checkout_date'] = date('M d, Y', strtotime($_POST['checkOut']));
    $_SESSION['checkin_db'] = date('y-m-d', strtotime($_POST['checkIn']));
    $_SESSION['checkout_db'] = date('y-m-d', strtotime($_POST['checkOut']));
    $_SESSION['datetime1'] = new DateTime($_SESSION['checkin_db']);
    $_SESSION['datetime2'] = new DateTime($_SESSION['checkout_db']);
    $_SESSION['checkin_unformat'] = $_POST["checkIn"];
    $_SESSION['checkout_unformat'] = $_POST["checkOut"];
    $_SESSION['interval'] = $_SESSION['datetime1']->diff($_SESSION['datetime2']);

    $_SESSION['total_night'] = $_SESSION['interval']->format('%d');

}
// if (isset($_POST["totalAdults"])) {
//     $_SESSION['adults'] = $_POST["totalAdults"];
// }

// if (isset($_POST["totalChildren"])) {
//     $_SESSION['children'] = $_POST["totalChildren"];
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Reservation Step</title>

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
    <!-- <div id="preloader">
        <span class="preloader-dot"></span>
    </div> -->
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
                            <a href="register.php">register</a>
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

        <!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">

            <div class="awe-overlay"></div>

            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>RESERVATION</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                    </div>
                </div>

            </div>

        </section>
        <!-- END / SUB BANNER -->

        <!-- RESERVATION -->
        <section class="section-reservation-page bg-white">

            <div class="container">
                <div class="reservation-page">

                    <!-- STEP -->
                    <div class="reservation_step">
                        <ul>
                            <li><a href="sessiondestroy.php"><span>1.</span>  Choose Date</a></li>
                            <li class="active"><a href="#"><span>2.</span> Choose Room</a></li>
                            <li><a href="#"><span>3.</span> Make a Reservation</a></li>
                            <li><a href="#"><span>4.</span> Confirmation</a></li>
                        </ul>
                    </div>
                    <!-- END / STEP -->

                    <div class="row">

                        <!-- SIDEBAR -->
                        <div class="col-md-4 col-lg-3">

                            <div class="reservation-sidebar">

                                <!-- SIDEBAR AVAILBBILITY -->
                                <div class="reservation-sidebar_availability bg-gray">

                                    <!-- HEADING -->
                                    <h2 class="reservation-heading">YOUR RESERVATION</h2>
                                    <!-- END / HEADING -->

                                    <h6 class="check_availability_title">your stay dates</h6>

                                    <div class="check_availability-field">
                                        <label>Arrive</label>
                                        <?php echo $_SESSION['checkin_date']; ?>
                                    </div>

                                    <div class="check_availability-field">
                                        <label>Depature</label>
                                        <?php echo $_SESSION['checkout_date']; ?>
                                    </div>

                                    <form action="sessiondestroy.php" method="post">
                                    <button class="awe-btn awe-btn-13" type='submit'>EDIT RESERVATION</button>
                                    </form>
                                </div>
                                <div class="reservation-sidebar_availability bg-gray" id="roomselected" style="display:none;">
                                <label for="submit-form" class="awe-btn awe-btn-13">Proceed To Book
                                </label>
                                </div>
                                <!-- END / SIDEBAR AVAILBBILITY -->
                            </div>

                        </div>
                        <!-- END / SIDEBAR -->

                        <!-- CONTENT -->
                        <div class="col-md-8 col-lg-9">

                            <div class="reservation_content">

                                <!-- RESERVATION ROOM -->
                                <div class="reservation-room">


                                <?php
include './dbconnect.php';
// check available room
$datestart = date('y-m-d', strtotime($_SESSION['checkin_unformat']));
$dateend = date('y-m-d', strtotime($_SESSION['checkout_unformat']));

$result = mysql_query("SELECT r.room_id, (r.total_room-br.total) as availableroom from room as r LEFT JOIN (

										SELECT roombook.room_id, sum(roombook.totalroombook) as total from roombook where roombook.booking_id IN
											(
												SELECT b.booking_id as bookingID from booking as b
												where
												(b.checkin_date between '" . $datestart . "' AND '" . $dateend . "')
												OR
												(b.checkout_date between '" . $dateend . "' AND '" . $datestart . "')


											)

										group by roombook.room_id
										)
										as br

					 ON r.room_id = br.room_id");
echo mysql_error();
if (mysql_num_rows($result) > 0) {
    echo '<p><b>Choose Your Room</b></p><hr class="line">';
    print '<form action="reservation-step-5.php" method="post"><div class="availability-form">';

    while ($row = mysql_fetch_array($result)) {

        if ($row['availableroom'] != null && $row['availableroom'] > 0) {

            $sub_result = mysql_query("select room.* from room where room.room_id = " . $row['room_id'] . " ");

            if (mysql_num_rows($sub_result) > 0) {

                while ($sub_row = mysql_fetch_array($sub_result)) {

                    echo '<div class="reservation-room_item">
                            <h2 class="reservation-room_name">
                            <a href="#">' . $sub_row['room_name'] . '</a>
                            </h2>
                            <div class="reservation-room_img">
                                <a href="#">
                                    <img src="' . $sub_row['imgpath'] . '" alt="">
                                </a>
                            </div>
                            <div class="reservation-room_text">
                                <div class="reservation-room_desc">
                                    <p>' . $sub_row['occupancy'] . '</p>
                                </div><p></p>
                                <b><span class="reservation-room_amout">' . $row['availableroom'] . ' room available</span></b>
                                <div class="clear"></div>
                                <p class="reservation-room_price">
                                    <span class="reservation-room_amout">₱ ' . $sub_row['rate'] . '</span> / days
                                </p>
                                <br/><br/>
                        <span><b>No. of room: </b></span>
                        <select class="form-control" name="qtyroom' . $sub_row2['room_id'] . '" id="room' . $sub_row2['room_id'] . '" onChange="selection(' . $sub_row['room_id'] . ')"  style="width:100%; color:black;" ;">
                        <option  value="0">0</option>';
                    $i = 1;
                    while ($i <= $sub_row2['total_room']) {
                        echo '<option value="' . $i . '">' . $i . '</option>';
                        $i = $i + 1;
                    }
                    echo '</select><br/>
                    <span><b>No. of guest: </b></span>
                    <select class="form-control" name="qtyguest' . $sub_row2['room_id'] . '" id="guest' . $sub_row2['room_id'] . '" style="width:100%; color:black;" ;">
                                <option value="0">0</option>';
                    $i = 1;
                    while ($i <= $sub_row2['occupancy']) {
                        echo '<option value="' . $i . '">' . $i . '</option>';
                        $i = $i + 1;
                    }
                    echo '</select>
                            </div>

                            <input type=hidden name="selectedroom' . $sub_row['room_id'] . '"  id="selectedroom' . $sub_row['room_id'] . '" value="' . $sub_row['room_id'] . '">
                            <input type=hidden name="room_name' . $sub_row['room_id'] . '" id="room_name' . $sub_row['room_id'] . '" value="' . $sub_row['room_name'] . '">
                            </div><hr/>';

                }

            }
        } else if ($row['availableroom'] == null) {
            $sub_result2 = mysql_query("SELECT room.* from room where room.room_id = " . $row['room_id'] . " ");
            if (mysql_num_rows($sub_result2) > 0) {
                while ($sub_row2 = mysql_fetch_array($sub_result2)) {

                    echo '<div class="reservation-room_item">
                    <h2 class="reservation-room_name">
                    <a href="#">' . $sub_row2['room_name'] . '</a>
                    </h2>
                    <div class="reservation-room_img">
                        <a href="#">
                            <img src="' . $sub_row2['imgpath'] . '" alt="">
                        </a>
                    </div>
                    <div class="reservation-room_text">
                        <div class="reservation-room_desc">
                            <p>' . $sub_row2['descriptions'] . '</p>
                        </div><p></p>
                        <b><span class="reservation-room_amout">' . $sub_row2['total_room'] . ' room available</span></b>
                        <div class="clear"></div>
                        <p class="reservation-room_price">
                            <span class="reservation-room_amout">₱ ' . $sub_row2['rate'] . '</span> / days
                        </p>
                        <br/><br/>
                        <span><b>No. of room: </b></span>
                        <select class="form-control" name="qtyroom' . $sub_row2['room_id'] . '" id="room' . $sub_row2['room_id'] . '" onChange="selection(' . $sub_row['room_id'] . ')"  style="width:100%; color:black;" ;">
                        <option  value="0">0</option>';
                    $i = 1;
                    while ($i <= $sub_row2['total_room']) {
                        echo '<option value="' . $i . '">' . $i . '</option>';
                        $i = $i + 1;
                    }
                    echo '</select><br/>
                    <span><b>No. of guest: </b></span>
                    <select class="form-control" name="qtyguest' . $sub_row2['room_id'] . '" id="guest' . $sub_row2['room_id'] . '" style="width:100%; color:black;" ;">
                                <option value="0">0</option>';
                    $i = 1;
                    while ($i <= $sub_row2['occupancy']) {
                        echo '<option value="' . $i . '">' . $i . '</option>';
                        $i = $i + 1;
                    }
                    echo '</select>
                    </div>
                    <input type=hidden name="selectedroom' . $sub_row2['room_id'] . '"  id="selectedroom' . $sub_row2['room_id'] . '" value="' . $sub_row2['room_id'] . '">
                    <input type=hidden name="room_name' . $sub_row2['room_id'] . '" id="room_name' . $sub_row2['room_id'] . '" value="' . $sub_row2['room_name'] . '">

                    </div> <hr/>';
                }

            }
        }
    }
} else {
    echo '<p><b>No room available</b></p><hr>';
}
print '<button type="submit" id="submit-form" class="hidden" style="display:none">Book</button>';
print '	</form></div>';

?>

                                </div>
                                <!-- END / RESERVATION ROOM -->

                            </div>

                        </div>
                        <!-- END / CONTENT -->

                    </div>
                </div>
            </div>

        </section>
        <!-- END / RESERVATION -->

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
                                        <p><i class="fa fa-envelope-o"></i> <a href="mailto:hello@yopmail.com">hello@yopmail.com</a></p>
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

    <script>
    function selection(id) {
	var e = document.getElementById('roomselected').style.display='block';
    }
    </script>

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