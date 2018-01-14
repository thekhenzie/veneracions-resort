<?php
session_start();
include './dbconnect.php';

if (!isset($_SESSION['room_id'])) {
    $_SESSION['room_id'] = array();
    $_SESSION['roomname'] = array();
    $_SESSION['roomqty'] = array();
    $_SESSION['guestqty'] = array();
    $_SESSION['ind_rate'] = array();
    $_SESSION['total_amount'] = 0;
    $_SESSION['deposit'] = 0;
}

$result = mysql_query("SELECT * from room");
if (mysql_num_rows($result) > 0) {

    $count = 0;

    while ($row = mysql_fetch_array($result)) {

        if (isset($_POST["qtyroom" . $row['room_id'] . ""]) && !empty($_POST["qtyroom" . $row['room_id'] . ""])) {
            if (isset($_POST["qtyguest" . $row['room_id'] . ""]) && !empty($_POST["qtyguest" . $row['room_id'] . ""])) {
                $_SESSION['room_id'][$count] = $_POST["selectedroom" . $row['room_id'] . ""];
                $_SESSION['roomqty'][$count] = $_POST["qtyroom" . $row['room_id'] . ""];
                $_SESSION['guestqty'][$count] = $_POST["qtyguest" . $row['room_id'] . ""];
                $_SESSION['roomname'][$count] = $_POST["room_name" . $row['room_id'] . ""];
                $_SESSION['ind_rate'][$count] = $row['rate'] * $_POST["qtyroom" . $row['room_id'] . ""];
                $_SESSION['total_amount'] = ($row['rate'] * $_POST["qtyroom" . $row['room_id'] . ""] * $_SESSION['total_night']) + $_SESSION['total_amount'];
                $_SESSION['deposit'] = $_SESSION['total_amount'] * 0.15;
                $count = $count + 1;
            }
        }
    }

}

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <!-- TITLE -->
        <title>Reservation Step 5</title>

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

        <!-- MAIN STYLE -->
        <link rel="stylesheet" type="text/css" href="css/style.css">


    </head>


    <body>
        <!--<![endif]-->


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
                            <span>
                                <i class="lotus-icon-cloud"></i> 27 °C</span>
                            <span>
                                <i class="lotus-icon-location"></i> Montalban, Rodriguez Rizal, PH</span>
                            <span>
                                <i class="lotus-icon-phone"></i> +63 915 6789 321</span>
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
                            <a href="#">
                                <img src="images/logo-header.png" alt="">
                            </a>
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
                                        <!-- <li>
                                        <a href="gallery-2.html">Gallery Style 2</a>
                                    </li>
                                    <li>
                                        <a href="gallery-3.html">Gallery Style 3</a>
                                    </li> -->
                                    </ul>
                                </li>
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
                                <li>
                                    <a href="sessiondestroy.php">
                                        <span>1.</span> Choose Date</a>
                                </li>
                                <li>
                                    <a href="unsetroomchosen.php">
                                        <span>2.</span> Choose Room</a>
                                </li>
                                <li class="active">
                                    <a href="#">
                                        <span>3.</span> Make a Reservation</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>4.</span> Confirmation</a>
                                </li>
                            </ul>
                        </div>
                        <!-- END / STEP -->

                        <div class="row">

                            <!-- SIDEBAR -->
                            <div class="col-md-4 col-lg-3">

                                <div class="reservation-sidebar">

                                    <!-- RESERVATION DATE -->
                                    <div class="reservation-date bg-gray">

                                        <!-- HEADING -->
                                        <h2 class="reservation-heading">Dates</h2>
                                        <!-- END / HEADING -->

                                        <ul>
                                            <li>
                                                <span>Check-In</span>
                                                <span>
                                                    <?php echo $_SESSION['checkin_date']; ?>
                                                </span>
                                            </li>
                                            <li>
                                                <span>Check-Out</span>
                                                <span>
                                                    <?php echo $_SESSION['checkout_date']; ?>
                                                </span>
                                            </li>
                                            <li>
                                                <span>Total Nights</span>
                                                <span>
                                                    <?php echo $_SESSION['total_night']; ?>
                                                </span>
                                            </li>
                                            <li>
                                                <span>Total Rooms</span>
                                                <span>
                                                    <?php echo array_sum($_SESSION['roomqty']); ?> of
                                                    <?php echo array_sum($_SESSION['roomqty']); ?>
                                                </span>
                                            </li>
                                            <li>
                                                <span>Total Guests</span>
                                                <span>
                                                    <?php echo array_sum($_SESSION['guestqty']);?>
                                                </span>
                                            </li>
                                        </ul>

                                    </div>
                                    <!-- END / RESERVATION DATE -->

                                    <!-- ROOM SELECT -->
                                    <div class="reservation-room-selected bg-gray">

                                        <!-- HEADING -->
                                        <h2 class="reservation-heading">Selected Rooms</h2>
                                        <!-- END / HEADING -->

                                        <!-- ITEM -->
                                        <?php
                                        $no = 1;
                                    for ($i=0; $i < count($_SESSION['room_id']); $i++) { 
                                    
                                    echo '
                                    <div class="reservation-room-seleted_item">

                                        <h6>ROOM '.$no.'</h6>
                                        <span class="reservation-option">'.$_SESSION['guestqty'][$i].' Guest</span>&nbsp;
                                        <span class="reservation-option">'.$_SESSION['roomqty'][$i].' Room</span>&nbsp;
                                        <span class="reservation-option">'.($_SESSION['ind_rate'][$i]/$_SESSION['roomqty'][$i]).'/day</span>
                                        <div class="reservation-room-seleted_name has-package">
                                            <h2>
                                                <a>'.$_SESSION['roomname'][$i].'</a>
                                            </h2>
                                        </div>

                                        <div class="reservation-room-seleted_package">
                                            <h6>RATE</h6>
                                            <ul>';
                                            for($x=1; $x<=$_SESSION['total_night'];$x++){
                                                $date = strtotime('+'.$x.' day', strtotime($_SESSION['checkin_unformat']));
                                                echo '
                                                <li>
                                                    <span>'.date("M d, Y",$date).'  '.$_SESSION['roomqty'][$i].' x ₱'.($_SESSION['ind_rate'][$i]/$_SESSION['roomqty'][$i]).'</span>
                                                    <span>₱'.$_SESSION['ind_rate'][$i].'.00</span>
                                                </li>';
                                            }
                                                
                                    echo '            
                                            </ul>

                                            <ul>
                                                <li>
                                                    <span>Service</span>
                                                    <span>Free</span>
                                                </li>
                                                <li>
                                                    <span>Tax</span>
                                                    <span--</span>
                                                </li>
                                            </ul>

                                        </div>

                                        <div class="reservation-room-seleted_total-room">
                                            TOTAL Room '.$no.'
                                            <span class="reservation-amout">₱'.$_SESSION['ind_rate'][$i]*$_SESSION['total_night'].'.00</span>
                                        </div>

                                    </div> ';
                                    $no+=1;
                                    }
                                    ?>
                                            <!-- END / ITEM -->

                                            <!-- TOTAL -->
                                            <div class="reservation-room-seleted_total bg-blue">
                                                <label>TOTAL</label>
                                                <span class="reservation-total">₱
                                                    <?php echo $_SESSION['total_amount'];?>.00</span>
                                            </div>
                                            <!-- END / TOTAL -->

                                    </div>
                                    <!-- END / ROOM SELECT -->

                                </div>

                            </div>
                            <!-- END / SIDEBAR -->

                            <!-- CONTENT -->
                            <div class="col-md-8 col-lg-9">

                                <div class="reservation_content">

                                    <div class="reservation-billing-detail">

                                        <!-- <p class="reservation-login">Returning customer?
                                        <a href="#">Click here to login</a>
                                    </p> -->
                                    <form action='insertandemail.php' method='post' onSubmit='return validateForm(this);'>
                                        <h4>BILLING DETAILS</h4>
                                       
                                        <label>Country
                                            <sup>*</sup>
                                        </label>
                                        <select class="awe-select" name="country" id="country" disabled>
                                            <option>Philippines</option>
                                            <option>United States</option>
                                        </select>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>First Name
                                                    <sup>*</sup>
                                                </label>
                                                <input required class="input-text" name="firstname" type="text" value="<?php if (isset($_SESSION['firstname']) && !empty($_SESSION['firstname'])) {echo $_SESSION['firstname'];}?>" pattern="[a-zA-Z\s]+" Title="Only alphabet characters are allowed" placeholder="e.g. Juan" />
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Last Name
                                                    <sup>*</sup>
                                                </label>
                                                <input required class="input-text" name="lastname" type="text" value="<?php if (isset($_SESSION['lastname']) && !empty($_SESSION['lastname'])) {echo $_SESSION['lastname'];}?>" pattern="[a-zA-Z\s]+" Title="Only alphabet characters allowed" placeholder="e.g. Dela Cruz" />
                                            </div>
                                        </div>

                                        <label>Address Line 1
                                            <sup>*</sup>
                                        </label>
                                        <input required class="input-text" name="addressline1" type="text" value="<?php if (isset($_SESSION['addressline1']) && !empty($_SESSION['addressline1'])) {echo $_SESSION['addressline1'];}?>"   placeholder=""/>
                                        <label>Address Line 2
                                        </label>
                                        <input class="input-text" name="addressline2" type="text" value="<?php if (isset($_SESSION['addressline2']) && !empty($_SESSION['addressline2'])) {echo $_SESSION['addressline2'];}?>"  placeholder=""/ />

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Town / City
                                                    <sup>*</sup>
                                                </label>
                                                <input required class="input-text" name="city" type="text"  value="<?php if (isset($_SESSION['city']) && !empty($_SESSION['city'])) {echo $_SESSION['city'];}?>" pattern= "[a-zA-Z0-9\s]+" Title="Special characters such as ( ) * & ^ % $ & etc are not allowed"  placeholder=""/ />
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Zip/Postcode
                                                    <sup>*</sup>
                                                </label>
                                                <input required class="input-text" name="postcode" type="number"  value="<?php if (isset($_SESSION['postcode']) && !empty($_SESSION['postcode'])) {echo $_SESSION['postcode'];}?>" placeholder="e.g. 1600"/ />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Email Address
                                                    <sup>*</sup>
                                                </label>
                                                <input required class="input-text" name="email" type="email" value="<?php if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {echo $_SESSION['email'];}?>" placeholder="" />
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Phone
                                                    <sup>*</sup>
                                                </label>
                                                <input required class="input-text" name="phone" type="number" value="<?php if (isset($_SESSION['phone']) && !empty($_SESSION['phone'])) {echo $_SESSION['phone'];}?>" pattern= "[a-zA-Z0-9\s]+" Title="Special characters such as ( ) * & ^ % $ & etc are not allowed"  placeholder=""/ />
                                            </div>
                                        </div>

                                        <label>Order Notes</label>
                                        <textarea class="input-textarea"  name="specialrequirements" placeholder="Notes about your order, eg. special notes for delivery"><?php if (isset($_SESSION['special_requirement']) && !empty($_SESSION['special_requirement'])) {echo $_SESSION['special_requirement'];}?></textarea>

                                        <label class="label-radio">
                                            <input type="radio" class="input-radio"> Create an account?
                                        </label>

                                        <p class="reservation-code">
                                            You have a coupon?
                                            <a href="#">Click here to enter your code</a>
                                        </p>

                                        <ul class="option-bank">
                                            <li>
                                                <label class="label-radio">
                                                    <input type="radio" class="input-radio" name="chose-bank"> Direct Bank Transfer
                                                </label>
                                                <p>Make your payment directly into our bank account. Please use your Order ID
                                                    as the payment reference. Your order won’t be shipped until the funds
                                                    have cleared in our account.</p>
                                            </li>

                                            <li>
                                                <label class="label-radio">
                                                    <input type="radio" class="input-radio" name="chose-bank"> Cheque Payment
                                                </label>
                                            </li>

                                            <li>
                                                <label class="label-radio">
                                                    <input type="radio" class="input-radio" name="chose-bank"> Credit Card
                                                </label>

                                                <img src="images/icon-card.jpg" alt="">
                                            </li>

                                        </ul>
                                        <button class="awe-btn awe-btn-13" type="submit" >PLACE ORDER</button>
                                    </form>
                                    </div>

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
                                            <a href="#">Restaurant</a>
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
                        <?php var_dump($_SESSION);?>
                    </div>
                </div>
                <!-- END / FOOTER BOTTOM -->

            </footer>
            <!-- END / FOOTER -->

        </div>
        <!-- END / PAGE WRAP -->


        <script>
            function validateForm(form) {
                var fname = form.firstname.value;
                var lname = form.lastname.value;
                var email = form.email.value;
                var phone = form.phone.value;
                var add1 = form.addressline1.value;
                var postcode = form.postcode.value;
                var city = form.city.value;
                var state = form.state.value;
                var country = form.country.value;
                if (fname == null || lname == null || email == null || phone == null || add1 == null || postcode == null || city == null || state == null || country == null || fname == "" || lname == "" || email == "" || phone == "" || add1 == "" || postcode == "" || city == "" || state == "" || country == "") {
                    alert("Please fill in all the fields mark with *.");

                    return false;
                }

            }
        </script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="build/js/intlTelInput.js"></script>
        <script>
            $("#phone").intlTelInput({
                //autoFormat: false,
                //autoHideDialCode: false,
                defaultCountry: "my",
                //nationalMode: true,
                //numberType: "MOBILE",
                //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
                preferredCountries: ['my', 'us'],
                //responsiveDropdown: true,
                utilsScript: "lib/libphonenumber/build/utils.js"
            });
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