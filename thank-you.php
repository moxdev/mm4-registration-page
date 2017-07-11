<?php

session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/millennium-marketing-solutions/inc/akismet.class.php';

// PREVENT DIRECT ACCESS TO THANK YOU PAGE
if ( !isset( $_POST['first-name']) || !isset( $_POST['last-name']) || !isset( $_POST['company']) || !isset( $_POST['job-title']) || !isset( $_POST['email']) ) {
	echo 'This page cannot be accessed directly.';
	exit();
}

if ( empty( $_POST['first-name']) || empty( $_POST['last-name']) || empty( $_POST['company']) || empty( $_POST['job-title']) || empty( $_POST['email'])  ) {
	echo 'You neglected to fill out required form fields.';
	exit();
}

// HIDDEN HONEYPOT
$spa = $_POST["spam"];

if (!empty($spa) && !($spa == "4" || $spa == "four")) {
	echo "We're sorry, but you appear to be a spambot";
    exit ();
}

if($_SERVER['REQUEST_METHOD']=="POST") {
	$WordPressAPIKey = 'c32918c5e5bc';
	$MyBlogURL = 'http://www.mm4solutions.com/';

	$recipients=$_POST["recipients"];
	$to = str_replace("_AT_","@",$recipients);
	//$to='chris@mm4solutions.com';

	$first_name=strip_tags($_POST["first-name"]);
	$last_name=strip_tags($_POST["last-name"]);
	$company=strip_tags($_POST["company"]);
	$title=strip_tags($_POST["job-title"]);
	$email=strip_tags($_POST["email"]);
	$how_hear=strip_tags($_POST["how-hear"]);
	$just_attend=strip_tags($_POST["just-attend"]);
	$expo_seminars=strip_tags($_POST["expo-and-seminars"]);
	$seminar1=strip_tags($_POST["its-academic"]);
	$seminar2=strip_tags($_POST["outside-the-box"]);
	$seminar3=strip_tags($_POST["professional-photos"]);
	$seminar4=strip_tags($_POST["website-essentials"]);
	$comments=strip_tags($_POST["comments"]);

	$comment = array(
		'author' => $first_name . $last_name,
		'email' => $email,
		'website' => $MyBlogURL,
		'body' => $comments
	);

	$akismet = new Akismet($MyBlogURL, $WordPressAPIKey, $comment);

	$from="admin@mm4solutions.com";
	$subject= "I would like to register for the September 14th Marketing Expo and Educational Event";
	$message='"' . $first_name . '","' . $last_name . '","' . $company . '","' . $title . '","' . $email . '","' . $how_hear . '","' . $just_attend . '","' . $expo_seminars . '","' . $seminar1 . '","' . $seminar2 . '","' . $seminar3 . '","' . $seminar4 . '"';
	$header='From: '.$from."\r\n".'Reply-To: '.$from."\r\n".'MIME-Version: 1.0'."\r\n".'Content-type: text/html; charser=iso-8859-1'."\r\n".'X-Mailer: PHP/'.phpversion();

	if ($akismet->isSpam()) {
		//-- THIS IS SPAM, YO!!!!!
		echo "We're sorry, but you appear to be a spambot";
		exit();
	} else {
		@mail($to,$subject,$message,$header);
	}
}
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Millennium Marketing Solutions' Fall Marketing, Design &amp; Digital Expo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <header>
                <span><img class="logo" src="images/logo.svg" alt=""></span><h1>Welcome! Excited for You to Join Us.</h1>
            </header>
            <!--header-->
            <section id="invite">
                <div class="title">
                    <h1>You're Invited!</h1>
                </div>
                <div class="invite-content">
                    <h2><span class="desc">what:</span><span class="info">Marketing Expo and Education Event</span></h2>
                    <h2><span class="desc">when:</span><span class="info">Wednesday, September 14, 2016 from 9:00am - 2:00pm</span></h2>
                    <h2><span class="desc">where:</span><span class="info">Millennium Marketing Solutions <a href="https://www.google.com/maps/place/Millennium+Marketing+Solutions/@39.130104,-76.7946677,17z/data=!3m1!4b1!4m5!3m4!1s0x89b7e73b5c052709:0x3740136e105f7228!8m2!3d39.130104!4d-76.792479" target="_blank">Get Directions</a></span></h2>
                </div>
            </section>
            <!--invite-->
            <section id="about">
                <div class="title">
                    <h1>About the Expo</h1>
                </div>
                <div class="about-content">
                    <p>We invite you and your colleagues to join us for our Marketing Expo and Educational Event. Stay for the</p>
                    <h3>How to get the most from Millennium School of Marketing’s Expo and Educational Event:</h3>
                    <div class="read-more-toggle">
                        <h4>Read More >></h4>
                    </div>
                    <div class="read-more-content">
                        <p>During the event, <span class="blue-words">attend one or all of the educational seminars</span> to gather valuable information about the latest in marketing. In between seminars, <span class="blue-words">meet with industry design and marketing professionals</span> who will provide you with ideas and advice to grow your business. Visit with a variety of factory representatives, <span class="blue-words">see and select from 1000s of promotional products</span>, find the latest in trade show displays, play games, and win prizes, all while enjoying a delicious catered lunch.</p>
                        <p><span class="blue-words">Don’t forget to get your class photo!</span> Steve Shapiro from Commercial Image Photography will be available throughout the day to take your professional headshot—perfect to use for your LinkedIn profile, award entries, or website. Visit with our marketing professionals and factory representatives—we have something for everyone!</p>
                    </div>
                    <!-- read-more -->
                </div>
            </section>
            <!--about-->
            <section id="registration">
                <div class="thank-you-title title">
                    <h1>Thank You For Registering!</h1>
                </div>
                <!-- registration-wrapper -->
                <div class="footer-wrapper">
                    <div class="footer-promo">
                        <a href="http://www.mm4solutions.com"><img id="mm4" src="images/mm_footer_W.svg" alt="Millennium Marketing Solutions" /></a>
                        <img id="wbenc" src="images/wbenc.png" alt="Women's Business Enterprise"/>
                        <a href="https://www.google.com/partners/#a_profile;idtf=5819262343;" target="_blank"><img id="google-partner" src="images/google-partner.gif" alt="Google Partner" /></a>
                    </div>
                    <!-- footer-promo -->
                    <div class="footer-social">
                        <a href="https://www.facebook.com/MillenniumMarketing" id="facebook" class="social-icon" target="_blank"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 18.08 18.08"><defs><clipPath id="clip-path" transform="translate(-272 -375.92)"><rect x="272" y="375.92" width="18.08" height="18.08" style="fill:none"/></clipPath></defs><title>facebook</title><g style="clip-path:url(#clip-path)"><path d="M290.08,391V378.89a3,3,0,0,0-3-3H275a3,3,0,0,0-3,3V391a3,3,0,0,0,3,3H281v-5.09c0-1.69-1.14-1.69-1.14-1.69h-1.14v-2.83H281V383a3.57,3.57,0,0,1,3.42-3.7h2.28v2.82h-2.28a0.78,0.78,0,0,0-.57.85v1.45h2.85v2.83h-2.85v5.16A1.46,1.46,0,0,1,282.8,394h4.31a3,3,0,0,0,3-3" transform="translate(-272 -375.92)" style="fill:#fff"/></g></svg></a>
                        <a href="https://twitter.com/MillenniumMKTG" class="social-icon" target="_blank"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 18.08 18.08"><defs><clipPath id="clip-path" transform="translate(-297 -386.92)"><rect x="297" y="386.92" width="18.08" height="18.08" style="fill:none"/></clipPath></defs><title>twitter</title><g style="clip-path:url(#clip-path)"><path d="M310.52,392.71a4.77,4.77,0,0,0,1.38-.38,4.74,4.74,0,0,1-1,1.08,0.5,0.5,0,0,0-.23.22c0,0.05,0,.15,0,0.26a6.79,6.79,0,0,1-6.84,6.84,6.63,6.63,0,0,1-3.15-.74c-0.53-.34-0.44-0.33-0.44-0.33l0.48,0a4.71,4.71,0,0,0,2.57-.71c0.41-.32-0.11-0.33-0.11-0.33a2.26,2.26,0,0,1-1.57-1.18c-0.15-.48-0.08-0.46-0.08-0.46a2.22,2.22,0,0,0,.38,0,2.39,2.39,0,0,0,.53-0.06,1.27,1.27,0,0,0-.45-0.14,2.4,2.4,0,0,1-1.38-2.25v0a2.41,2.41,0,0,0,1.09.3,2.4,2.4,0,0,1-.74-3.21,6.83,6.83,0,0,0,5,2.51A2.41,2.41,0,0,1,310,392a4.8,4.8,0,0,0,1.52-.58,2.41,2.41,0,0,1-1.06,1.33m4.56,9.33V389.89a3,3,0,0,0-3-3H300a3,3,0,0,0-3,3V402a3,3,0,0,0,3,3h12.15a3,3,0,0,0,3-3" transform="translate(-297 -386.92)" style="fill:#fff"/></g></svg></a>
                        <a href="http://www.linkedin.com/company/628509?trk=tyah" id="linkedin" class="social-icon" target="_blank"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 18.08 18.08"><defs><clipPath id="clip-path" transform="translate(-272 -378.92)"><rect x="263" y="371.92" width="36.08" height="26.08" style="fill:none"/></clipPath></defs><title>linkedin</title><g style="clip-path:url(#clip-path)"><path d="M281.7,387.1v0l0,0h0Zm5.42,6.8h-2.64v-4.25c0-1.07-.38-1.8-1.34-1.8a1.45,1.45,0,0,0-1.36,1,1.8,1.8,0,0,0-.09.64v4.44h-2.64s0-7.2,0-8h2.64v1.13a2.62,2.62,0,0,1,2.38-1.32c1.74,0,3,1.14,3,3.58v4.56Zm-9.36-10.41a1.38,1.38,0,0,1-1.49,1.37h0a1.38,1.38,0,1,1,1.51-1.37M275,387.64a1.44,1.44,0,0,1,1.32-1.69h1.32v8H275v-6.26Zm15.13,6.4V381.89a3,3,0,0,0-3-3H275a3,3,0,0,0-3,3V394a3,3,0,0,0,3,3h12.15a3,3,0,0,0,3-3" transform="translate(-272 -378.92)" style="fill:#fff"/></g></svg></a>
                        <a href="https://plus.google.com/u/0/117229805711574933779/posts" id="google-plus" class="social-icon" target="_blank"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 18.08 18.08"><defs><clipPath id="clip-path" transform="translate(-272 -375.92)"><rect x="272" y="375.92" width="18.08" height="18.08" style="fill:none"/></clipPath></defs><title>google-plus</title><g style="clip-path:url(#clip-path)"><path d="M272.32,391.2a2.14,2.14,0,0,0-.22.33A2.93,2.93,0,0,0,275,394h5.51a1.12,1.12,0,0,0,.11-0.48c0-1.35-1.45-2.09-2.44-2.8A6.58,6.58,0,0,0,277,390a4.55,4.55,0,0,0-.5,0,10.38,10.38,0,0,0-2.76.43,4,4,0,0,0-1.46.8m3.89-5.8a2.28,2.28,0,0,0,1.76-.66,2.9,2.9,0,0,0,.69-1.69c0-1.91-1.1-4.87-3.28-4.87a2.45,2.45,0,0,0-1.84.87,3,3,0,0,0-.52,2c0,1.77.93,4.4,3.18,4.4m-1.32,1.06A4.46,4.46,0,0,1,272,385.4v4.69c1.19-1,3.25-.79,4.25-0.85a2.79,2.79,0,0,1-.79-1.8,2.41,2.41,0,0,1,.26-1c-0.29,0-.58.05-0.84,0.05M286.72,382v3.38h-1.43V382h-3.35v-1.4h3.35v-3.35h1.43v3.35h3.36v-1.74a3,3,0,0,0-3-3H275a3,3,0,0,0-3,3v0.06l0.21-.19a6.89,6.89,0,0,1,4.52-1.48h5.55l-1.48,1.19h-1.61a4.25,4.25,0,0,1,1.6,3.35,4.42,4.42,0,0,1-2.13,3.76,1.87,1.87,0,0,0-.73,1.3,1.46,1.46,0,0,0,.68,1.14l0.95,0.74c1.16,1,2.66,2.11,2.66,3.94a3.57,3.57,0,0,1-.13,1.12,1.54,1.54,0,0,1-.85.18h5.87a3,3,0,0,0,3-3v-9h-3.36Z" transform="translate(-272 -375.92)" style="fill:#fff"/></g></svg></a>
                        <a href="https://www.instagram.com/millenniummktg/" id="instagram" class="social-icon" target="_blank"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17.99 18.11"><defs><clipPath id="clip-path" transform="translate(-297 -386.89)"><rect x="297" y="386.89" width="17.99" height="18.11" style="fill:none"/></clipPath></defs><title>instagram</title><g style="clip-path:url(#clip-path)"><path d="M306,398.26a2.34,2.34,0,1,0-2.41-2.34,2.38,2.38,0,0,0,2.41,2.34" transform="translate(-297 -386.89)" style="fill:#fff"/><path d="M308.74,393.65h1.36a0.54,0.54,0,0,0,.54-0.54v-1.3a0.54,0.54,0,0,0-.54-0.54h-1.36a0.54,0.54,0,0,0-.54.54v1.3a0.54,0.54,0,0,0,.54.54" transform="translate(-297 -386.89)" style="fill:#fff"/><path d="M309.74,396a3.74,3.74,0,0,1-7.48,0,3.52,3.52,0,0,1,.16-1h-1.1v5.08a0.48,0.48,0,0,0,.48.48h8.37a0.48,0.48,0,0,0,.48-0.48V395h-1.06a3.52,3.52,0,0,1,.15,1" transform="translate(-297 -386.89)" style="fill:#fff"/><path d="M312,400.41a1.55,1.55,0,0,1-1.54,1.54h-8.94a1.55,1.55,0,0,1-1.54-1.54v-8.94a1.55,1.55,0,0,1,1.54-1.54h8.94a1.55,1.55,0,0,1,1.54,1.54v8.94Zm-0.27-13.53H300.25a3.23,3.23,0,0,0-3.25,3.22v11.67a3.23,3.23,0,0,0,3.25,3.22h11.49a3.23,3.23,0,0,0,3.25-3.22V390.11a3.23,3.23,0,0,0-3.25-3.22" transform="translate(-297 -386.89)" style="fill:#fff"/></g></svg></a>
                        <a href="https://www.pinterest.com/mm4solutions/" class="social-icon" target="_blank"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 18.11 18.11"><defs><clipPath id="clip-path" transform="translate(-297 -386.89)"><rect x="297" y="386.89" width="18.11" height="18.11" style="fill:none"/></clipPath></defs><title>pinterest</title><g style="clip-path:url(#clip-path)"><path d="M312.26,393.89c0,3.71-2.06,6.49-5.11,6.49a2.72,2.72,0,0,1-2.31-1.18s-0.55,2.18-.67,2.6a7.88,7.88,0,0,1-.94,2,1.17,1.17,0,0,1-1.39.18,13.83,13.83,0,0,1,.42-2.73l1.22-5.16a3.64,3.64,0,0,1-.3-1.5c0-1.4.81-2.45,1.83-2.45a1.27,1.27,0,0,1,1.28,1.42,20.26,20.26,0,0,1-.84,3.36,1.47,1.47,0,0,0,1.49,1.82c1.8,0,3-2.3,3-5,0-2.08-1.4-3.63-3.94-3.63a4.48,4.48,0,0,0-4.66,4.53,2.73,2.73,0,0,0,.62,1.86,0.46,0.46,0,0,1,.14.53l-0.19.76a0.33,0.33,0,0,1-.47.24c-1.32-.54-1.94-2-1.94-3.62,0-2.69,2.27-5.91,6.77-5.91a5.66,5.66,0,0,1,6,5.42m2.86,8.14V389.86a3,3,0,0,0-3-3H300a3,3,0,0,0-3,3V402a3,3,0,0,0,3,3h12.17a3,3,0,0,0,3-3" transform="translate(-297 -386.89)" style="fill:#fff"/></g></svg></a>
                    </div>
                    <!-- footer-social -->
                    <div class="footer-address">
                        <span class="first">10900 Pump House Road, Annapolis Junction, MD 20701</span><br>
                        <span class="second">301.725.8000 | <a href="http://www.mm4solutions.com" target="_blank">www.mm4solutions.com</a></span>
                    </div>
                    <!-- footer-address -->
                </div>
                <!-- footer-social -->
            </section>
            <!--registration-->
        </div>
        <!-- content -->
    </div>
    <!-- wrapper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/min/script-min.js"></script>
</body>

</html>
