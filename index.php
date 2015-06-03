<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Garden State">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Garden State</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="196x196" href="images/touch/chrome-touch-icon-196x196.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Web Starter Kit">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- Favicons -->

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <!-- build:css styles/components/main.min.css -->
    <link rel="stylesheet" href="styles/h5bp.css">
    <!-- <link rel="stylesheet" href="styles/components/components.css"> -->
    <link rel="stylesheet" href="styles/main.css?v=2">
    <!-- endbuild -->

    <!--[if lt IE 9]>
      <link rel="stylesheet" href="styles/ie9lt.css">
    <![endif]-->

    <!-- scripts -->
    <script src="scripts/modernizr-2.6.2-respond-1.1.0.min.js?v=1" type="text/javascript"></script>
  </head>
  <body class="home" data-page="home">
    
    <section class="container" id="main_container">
      <header id="main_header" class="speedUp">
        <?php require('templates/nav.php'); ?>
        <a href="#" id="show-mobile-menu"></a>
      </header>
      <section id="content">
        <?php
          //include_once('pages/'.$page.'.php');
        ?>

        <div id="home" class="page-content speedUp">
          <div class="inner speedUp">
            <div class="logo"><img src="images/home-logo.png" /></div>
            <div class="content-nav">
                  <?php include('templates/nav.php'); ?>
                </div>
                <?php require('templates/social-icons.php'); ?>
          </div>
        </div>

        <div id="about" class="page-content speedUp">
          <div class="inner speedUp">
            <div class="column first">
              <h1>ABOUT US</h1>
            </div>
           <div class="column second">
              <p><strong>Garden State</strong> is a Global Communications and Marketing consultancy specialising in interiors, design, men's & women's fashion & lifestyle brands.</p>
              <p>With over 15 year's PR & marketing experience working within Luxury Fashion, lifestyle, & FMCG brands including <strong>Paul Smith, Reebok, Casio, Ben Sherman</strong> our aim is to help our clients build and promote their brands through authentic, forward thinking multi-channel communication and marketing.</p>
            </div>
            <div class="column third">
              <p class="services"><strong>Services:</strong></p>
                <ul>
                  <li>Brand Development & Marketing Strategy</li>
                  <li>PR & Communication Strategy</li>
                  <li>Digital & Content Marketing</li>
                  <li>Social Media Strategy</li>
                  <li>Production + Events</li>
                </ul>
            </div>
          </div>
        </div>

        <div id="clients" class="page-content speedUp">
          <div class="inner speedUp">
            <h1>CLIENTS</h1>
            <p>
              Garden State works with a variety of clients and offers a bespoke service to each of them to hit their business objectives.
            </p>
            <div class="client-logos">
              <a href="http://www.matthewmillermenswear.com" target="_blank" class="matthew-miller speedUp">
                <p>Marketing and Strategic partnerships</p></a>
              <a href="http://www.other-shop.com" target="_blank" class="other-shop speedUp">
                <p>Marketing and Strategic partnerships</p></a>
              <a href="http://galvinbrothers.co.uk" target="_blank" class="galvin speedUp">
                <p>Marketing and Strategic partnerships</p></a>
              <a href="http://www.bettymagazine.org.uk" target="_blank" class="betty speedUp">
                <p>Marketing and Strategic partnerships</p></a>
              <a href="http://stylepb.com/" target="_blank" class="style-pb speedUp"><p>PR & Marketing services</p></a>
              <a href="http://www.darkroomlondon.com" target="_blank" class="darkroom speedUp"><p>PR & Marketing services</p></a>
                <a href="http://fuel-design.com" target="_blank" class="fuel speedUp">
                <p>PR & Events</p></a>
              <a href="http://likedigitalmedia.com" target="_blank" class="ldm speedUp"><p>PR & Marketing services</p></a>
            </div>
            <!-- <table>
              <tr>
                <td><a href="#" class="other-shop speedUp"></a></td>
                <td><a href="#" class="galvin speedUp"></a></td>
                <td><a href="#" class="matthew-miller speedUp"></a></td>
              </tr>
              <tr>
                <td><a href="#" class="betty speedUp"></a></td>
                <td><a href="#" class="style-pb speedUp"></a></td>
                <td><a href="#" class="darkroom speedUp"></a></td>
              </tr>
            </table> -->
          </div>
        </div>

        <div id="contact" class="page-content speedUp">
          <div class="inner speedUp">
            <div class="logo"><img src="images/home-logo.png" /></div>
            <div class="enquiries">
              <p>For all enquiries please contact</p>
              <a href="mailto:press@gardenstate.co.uk" class="contact-email left"><span>press@gardenstate.co.uk</span></a>
              <div class="or"><span>or</div>
              <a href="mailto:info@gardenstate.co.uk" class="contact-email right"><span>info@gardenstate.co.uk</span></a>
            </div>
            <?php require('templates/social-icons.php'); ?>
          </div>
        </div>

      </section>
    </section>


    <!-- build:js scripts/main.min.js -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/velocity/0.2.1/jquery.velocity.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/velocity/0.2.1/velocity.ui.min.js"></script>
    <script src="scripts/main.js"></script>
    <!-- endbuild -->

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-XXXXX-X');
      ga('send', 'pageview');
    </script>
    <!-- Built with love using Web Starter Kit -->
  </body>
</html>
