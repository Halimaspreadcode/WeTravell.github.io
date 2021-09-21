<!DOCTYPE html>
<html lang="en">

<head>
  <title>WETRAVEL - programmer votre voyage dès maintenant</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">WETRAVEL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="hotel.html" class="nav-link">Hotels</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">A propos</a></li>
          <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <div class="hero-wrap js-fullheight" style="background-image: url('images/page2.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <script src="http://code.jquery.com/jquery-1.7.min.js"></script>
          <script>
            $(function() {
              var messages = [],
                index = 0;

              messages.push('du DESERT DE LOUMPOUL');
              messages.push('de la RESERVE DE DJOUDJ');
              messages.push('du PONT FAIDHERBE');
              messages.push('de la LANGUE DE BARBARIE');
              messages.push('du VILLAGE DE GUELAKH');


              function cycle() {
                $('#some-id').html(messages[index]);
                index++;

                if (index === messages.length) {
                  index = 0;
                }

                setTimeout(cycle, 1000);
              }

              cycle();
            });
          </script>

          <p class="breadcrumbs" style="margin-top : -7%;" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2">
              A la découverte &ensp; <span id="some-id" style="color: #000000; font-weight: bold;"></span></span> </p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contactez-nous</h1>
          <span class="textDesc">Laissez nous un avis, un commentaire ou un message et nous vous répondrons le plus rapidement possible.</span>

          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            <span class="mr-2bis">
              <a href="mailto:wetravel@gmail.com">
                <span class="icon-send">&ensp;</span>WeTravel@gmail.com
              </a>
            </span>
          <div class="formContainer">
            <div id="fcf-form">
              <form id="fcf-form-id" class="fcf-form-class" method="post" action="contact.php">

                <div class="fcf-form-group">
                  <div class="fcf-input-group">
                    <input type="text" id="Name" placeholder="Votre nom" name="Name" class="fcf-form-control" required>
                  </div>
                </div>

                <div class="fcf-form-group">
                  <div class="fcf-input-group">
                    <input type="email" id="Email" placeholder="Votre adresse mail" name="Email" class="fcf-form-control" required>
                  </div>
                </div>

                <div class="fcf-form-group">
                  <div class="fcf-input-group">
                    <textarea id="Message" name="Message" placeholder="Message" class="fcf-form-control" rows="3" maxlength="3000" required></textarea>
                  </div>
                </div>

                <div class="fcf-form-group">
                  <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">ENVOYER</button>
                </div>

              </form>
              <?php
              if (isset($_POST['Email'])) {

                // EDIT THE 2 LINES BELOW AS REQUIRED
                $email_to = "halima.gueye@gmail.com";
                $email_subject = "Client Contact";

                function problem($error)
                {
                  echo "We are very sorry, but there were error(s) found with the form you submitted. ";
                  echo "These errors appear below.<br><br>";
                  echo $error . "<br><br>";
                  echo "Please go back and fix these errors.<br><br>";
                  die();
                }

                // validation expected data exists
                if (
                  !isset($_POST['Name']) ||
                  !isset($_POST['Email']) ||
                  !isset($_POST['Message'])
                ) {
                  problem('We are sorry, but there appears to be a problem with the form you submitted.');
                }

                $name = $_POST['Name']; // required
                $email = $_POST['Email']; // required
                $message = $_POST['Message']; // required

                $error_message = "";
                $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

                if (!preg_match($email_exp, $email)) {
                  $error_message .= 'The Email address you entered does not appear to be valid.<br>';
                }

                $string_exp = "/^[A-Za-z .'-]+$/";

                if (!preg_match($string_exp, $name)) {
                  $error_message .= 'The Name you entered does not appear to be valid.<br>';
                }

                if (strlen($message) < 2) {
                  $error_message .= 'The Message you entered do not appear to be valid.<br>';
                }

                if (strlen($error_message) > 0) {
                  problem($error_message);
                }

                $email_message = "Form details below.\n\n";

                function clean_string($string)
                {
                  $bad = array("content-type", "bcc:", "to:", "cc:", "href");
                  return str_replace($bad, "", $string);
                }

                $email_message .= "Name: " . clean_string($name) . "\n";
                $email_message .= "Email: " . clean_string($email) . "\n";
                $email_message .= "Message: " . clean_string($message) . "\n";

                // create email headers
                $headers = 'From: ' . $email . "\r\n" .
                  'Reply-To: ' . $email . "\r\n" .
                  'X-Mailer: PHP/' . phpversion();
                @mail($email_to, $email_subject, $email_message, $headers);
              ?>
                <script>
                  alert("Texte")
                </script>

              <?php
              }
              ?>
            </div>
          </div>
          </p>

        </div>
      </div>
    </div>
  </div>



  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">WeTravel</h2>
            <p>
              Programmez votre prochain voyage dès maintenant.
            </p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Informations</h2>
            <ul class="list-unstyled">
              <li><a href="about.html" class="py-2 d-block">A propos</a></li>
              <li><a href="contact.php" class="py-2 d-block">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Version</h2>
            <ul class="list-unstyled">
              <li><p  class="py-2 d-block">BETA</p></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Avez vous une question?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">
                    Dakar, Sénégal</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+221 33 824 44 24</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span
                      class="text">WeTravel@gmail.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> All rights reserved</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>