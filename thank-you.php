<?php


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
  // $to = str_replace("_AT_","@",$recipients);
  $to='sbiggs@mm4solutions.com';

  $first_name=strip_tags($_POST["first-name"]);
  $last_name=strip_tags($_POST["last-name"]);
  $company=strip_tags($_POST["company"]);
  $title=strip_tags($_POST["job-title"]);
  $email=strip_tags($_POST["email"]);
  $how_hear=strip_tags($_POST["how-hear"]);

  $session1=strip_tags($_POST["session-1"]);
  $session2=strip_tags($_POST["session-2"]);
  $session3=strip_tags($_POST["session-3"]);
  $session4=strip_tags($_POST["session-4"]);
  $session5=strip_tags($_POST["session-5"]);
  $session6=strip_tags($_POST["session-6"]);
  $session7=strip_tags($_POST["session-7"]);

  $comment = array(
    'author' => $first_name . $last_name,
    'email' => $email,
    'website' => $MyBlogURL,
    'body' => $comments
  );


  $from="admin@mm4solutions.com";
  $subject= "What is the subject?";
  $message='"' . $first_name . '","' . $last_name . '","' . $company . '","' . $title . '","' . $email . '","' . $how_hear . '","' . $session1 . '","' . $session2 . '","' . $session3 . '","' . $session4 . '","' . $session5 . '","' . $session6 . '","' . $session7 . '"';
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
  <title>Millennium Marketing Solutions' School of Marketing</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <div class="wrapper">
    <div class="content">

      <header>
        <div class="flex-container">
          <h1>Register for Upcoming Events</h1>
          <img class="gbites" src="images/google-bites.svg" alt="Google Bites logo">
          <img class="mm4-header" src="images/logo.svg" alt="Millennium Marketing Solutions logo">
        </div>
      </header>
      <!--header-->

      <div class="main-content">
        <div class="flex-container">
          <section id="announcement" class="flex-child">
            <h2 class="section-heading">Next Up</h2>
            <div class="announcement-wrapper innner-wrapper">
              <ul>
                <li class="what">Digital Marketing for the Retail Industry<span><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis enim fugiat harum, ullam ea consectetur, minus cumque dolor error magnam.</small></span></li>
                <li class="when">Wednesday,  July 12, 2017 from 11:30am – 1:00pm</li>
                <li class="where">Millennium Marketing Solutions<span><a href="https://www.google.com/maps/place/Millennium+Marketing+Solutions/@39.130104,-76.7946677,17z/data=!3m1!4b1!4m5!3m4!1s0x89b7e73b5c052709:0x3740136e105f7228!8m2!3d39.130104!4d-76.792479" target="_blank">Get Directions</a></span></li>
              </ul>
            </div><!-- announcement-wrapper -->
          </section><!--#announcement-->
          <section id="event-details" class="flex-child">
            <h2 class="section-heading">About the Expo</h2>
            <div class="event-details-wrapper inner-wrapper">
              <p>We invite you and your colleagues to join us for our 2017 marketing and educational events. Take a seat with industry professionals and explore the challenges and trends shaping marketing today. We’ll discuss smart strategies to help you achieve your goals and move your business forward.</p>

              <p class="list-header">0ur marketing and educational subjects include:</p>

              <div class="list-content">

                <ul>
                  <li>Brand Strategy</li>
                  <li>Promotional Products, Gifts & Apparel</li>
                  <li>Printing,  Mailing & Fulfillment</li>
                  <li>Google Partner Seminars</li>
                  <li>Digital Marketing</li>
                  <li>Trade Show Graphics & Hardware</li>
                  <li>Online Company Marketing Stores</li>
                  <li>e-Publishing</li>
                </ul>

              </div>

              <p>Have a suggestion, we would live to hear more. Please email <a href="mailto:events@mm4solutions.com">events@mm4solutions.com</a> and share your idea.</p>
            </div><!-- event-details-wrapper -->
          </section><!--#event-details-->
        </div><!-- flex-wrapper -->

        <section id="registration" class="flex-child">
          <h2 class="thank-you-title">Thank You For Registering!</h2>
        </section><!--#registration-->
      </div><!-- main-content -->

      <footer>
        <div class="footer-wrapper flex-container">
          <div class="footer-logos flex-child">
            <a href="http://www.mm4solutions.com" target="_blank"><img id="mm4" src="images/logo-footer-mm4.png"></a>
            <span><img id="wbenc" src="images/logo-footer-wbenc.png"></span>
            <a href="https://www.google.com/partners/#a_profile;idtf=5819262343;" target="_blank"><img id="google-partner" src="images/logo-footer-google-partner.png" alt="Google Partner" /></a>
          </div><!-- footer-logos -->

          <div class="social-wrapper flex-child">
            <div class="footer-social">
              <a href="https://www.facebook.com/MillenniumMarketing" id="facebook" class="social-icon" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><title>icon-facebook</title><path fill="#fff" d="M37.5 0h-35A2.5 2.5 0 0 0 0 2.5v35A2.5 2.5 0 0 0 2.5 40h18.75V25h-5v-6.25h5V15c0-5.15 2.9-8.75 7.5-8.75h5v6.25h-2.5q-3.75 0-3.75 3.75v2.5h6.25L32.5 25h-5v15h10a2.5 2.5 0 0 0 2.5-2.5v-35A2.5 2.5 0 0 0 37.5 0z"/></svg></a>

              <a href="https://twitter.com/MillenniumMKTG" class="social-icon" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><title>icon-twitter</title><path fill="#fff" d="M37.5 0h-35A2.5 2.5 0 0 0 0 2.5v35A2.5 2.5 0 0 0 2.5 40h35a2.5 2.5 0 0 0 2.5-2.5v-35A2.5 2.5 0 0 0 37.5 0zm-7.57 15c0 .2 0 .44 0 .65A14.37 14.37 0 0 1 15.36 30a14.68 14.68 0 0 1-7.86-2.27 10.5 10.5 0 0 0 7.58-2.1 5.12 5.12 0 0 1-4.8-3.5 5.08 5.08 0 0 0 1 .1 5.32 5.32 0 0 0 1.33-.23 5.07 5.07 0 0 1-4.1-4.9s0 0 0-.07a5.17 5.17 0 0 0 2.32.63 5 5 0 0 1-2.28-4.2 5 5 0 0 1 .7-2.54A14.65 14.65 0 0 0 19.8 16.2a5.18 5.18 0 0 1-.13-1.2 5.08 5.08 0 0 1 5.13-5 5.16 5.16 0 0 1 3.74 1.6 10.4 10.4 0 0 0 3.26-1.22 5.05 5.05 0 0 1-2.26 2.8 10.35 10.35 0 0 0 2.95-.8A10.4 10.4 0 0 1 29.92 15z"/></svg></a>

              <a href="http://www.linkedin.com/company/628509?trk=tyah" id="linkedin" class="social-icon" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><title>icon-linkedin</title><path fill="#fff" d="M37.5 0h-35A2.5 2.5 0 0 0 0 2.5v35A2.5 2.5 0 0 0 2.5 40h35a2.5 2.5 0 0 0 2.5-2.5v-35A2.5 2.5 0 0 0 37.5 0zM13.75 31.25h-5v-17.5h5zm-2.5-18.75a2.5 2.5 0 1 1 2.5-2.5 2.5 2.5 0 0 1-2.5 2.5zm20 18.75h-5v-10a2.26 2.26 0 0 0-2.5-2.5 2.25 2.25 0 0 0-2.5 2.5v10h-5v-17.5h5v2.5c.28-1.23.9-2.5 4.37-2.5 5 0 5.63 3.75 5.63 8.75z"/></svg></a>

              <a href="https://plus.google.com/u/0/117229805711574933779/posts" id="google-plus" class="social-icon" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><title>icon-google-plus</title><path fill="#fff" d="M18.4 13.8c0-2-1.2-6-4.2-6-1.2 0-2.6.8-2.6 3.4 0 2.4 1.2 5.8 4 5.8a3.06 3.06 0 0 0 2.8-3.2zm-1.2 9.8h-.6a14.8 14.8 0 0 0-3.6.6 3.64 3.64 0 0 0-3 3.4c0 2.2 2 4.4 6 4.4 3 0 4.8-2 4.8-4 0-1.4-1-2.4-3.6-4.4zM36 0H4a4 4 0 0 0-4 4v32a4 4 0 0 0 4 4h32a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4zM14.2 34.4c-5.6 0-8.2-3.2-8.2-6a5.27 5.27 0 0 1 3-4.8 13.37 13.37 0 0 1 6.2-1.8 2.65 2.65 0 0 1-.6-2 1.8 1.8 0 0 1 .2-1H14a6.1 6.1 0 0 1-6.4-6c0-3.4 2.6-7.2 8.2-7.2h8.4l-.6.6-1.4 1.4-.2.2h-1.4a6 6 0 0 1 1.8 4.4c0 2.8-1.4 4.2-3.2 5.4a1.68 1.68 0 0 0-.8 1.4 1.35 1.35 0 0 0 .8 1.2 4.37 4.37 0 0 0 1 .6c1.6 1.2 3.8 2.6 3.8 5.8 0 3.6-2.6 7.8-9.8 7.8zM34 20h-4v4h-2v-4h-4v-2h4v-4h2v4h4z"/></svg></a>

              <a href="https://www.instagram.com/millenniummktg/" id="instagram" class="social-icon" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><title>icon-instagram</title><path fill="#fff" d="M5.13 0h29.73A5 5 0 0 1 40 5.13v29.73A5 5 0 0 1 34.85 40H5.13A5 5 0 0 1 0 34.85V5.13A5 5 0 0 1 5.13 0zm24 4.44a1.8 1.8 0 0 0-1.8 1.8v4.3a1.8 1.8 0 0 0 1.8 1.8h4.52a1.8 1.8 0 0 0 1.8-1.8v-4.3a1.8 1.8 0 0 0-1.8-1.8zm6.34 12.47H32a11.7 11.7 0 0 1 .5 3.44 12.44 12.44 0 0 1-24.86 0 11.68 11.68 0 0 1 .5-3.43H4.5v16.9A1.6 1.6 0 0 0 6 35.4h27.85a1.6 1.6 0 0 0 1.6-1.6V16.9zM20 12.14a7.8 7.8 0 1 0 8 7.78 7.9 7.9 0 0 0-8-7.77z"/></svg></a>

              <a href="https://www.pinterest.com/mm4solutions/" class="social-icon" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><title>icon-pinterest</title><path fill="#fff" d="M36 0H4a4 4 0 0 0-4 4v32a4 4 0 0 0 4 4h32a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4zM22 28.4a5.45 5.45 0 0 1-4.2-1.8l-2 6.4-.2.4a2.1 2.1 0 0 1-1.8 1 2.22 2.22 0 0 1-2.2-2.2V32l.2-.4 3.6-11.2a10.4 10.4 0 0 1-.4-3c0-3.4 1.8-4.4 3.4-4.4 1.4 0 2.8.6 2.8 2.6 0 2.6-1.8 4-1.8 6a2.65 2.65 0 0 0 2.6 2.6c4.6 0 6.4-3.6 6.4-6.8a8.24 8.24 0 0 0-8.4-8 8.24 8.24 0 0 0-8.4 8 8.27 8.27 0 0 0 1 3.8 1.8 1.8 0 0 1 .2 1 1.9 1.9 0 0 1-2 2 2.1 2.1 0 0 1-1.8-1 12.22 12.22 0 0 1-1.6-6 12.25 12.25 0 0 1 12.4-12 12.25 12.25 0 0 1 12.4 12c.2 5.6-3 11.2-10.2 11.2z"/></svg></a>
            </div><!-- footer-social -->

            <div class="footer-address">
              <div itemscope itemtype="http://schema.org/Restaurant">
                <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                  <span itemprop="streetAddress">10900 Pump House Road</span>
                  <span itemprop="addressLocality">Annapolis Junction</span>,
                  <span itemprop="addressRegion">MD</span> <span itemprop="postalCode">20701</span>
                </div>
                <span itemprop="telephone">301.725.8000</span> | <a itemprop="url" href="http://www.mm4solutions.com" target="_blank">www.mm4solutions.com</a>
              </div>
            </div><!-- footer-address -->

          </div><!-- social-wrapper -->
        </div><!-- footer-wrapper -->
      </footer>
    </div>
    <!-- content -->
  </div>
  <!-- wrapper -->

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="js/min/script-min.js"></script> -->
</body>

</html>
