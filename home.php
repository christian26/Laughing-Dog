<?php
  $page = "";
  if(isset($_GET['about'])){
    $page = "about";
  }else if(isset($_GET['clients'])){
    $page = "clients";
  }else if(isset($_GET['contact'])){
    $page = "contact";
  }else{
    $page = "home";
  }
?>
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
    <link rel="stylesheet" href="styles/main.css">
    <!-- endbuild -->

    <!--[if lt IE 9]>
      <link rel="stylesheet" href="styles/ie9lt.css">
    <![endif]-->

    <!--[if IE 7]>
      <link rel="stylesheet" href="styles/ie7.css">
    <![endif]-->
    
    <!-- scripts -->
    <script src="scripts/modernizr-2.6.2-respond-1.1.0.min.js?v=1" type="text/javascript"></script>
  </head>
  <body class="<?php echo $page; ?>" data-page="home">
    
    <section class="container" id="main_container">
      <header id="main_header" class="speedUp">
        <?php require('templates/nav.php'); ?>
        <a href="#" id="show-mobile-menu"></a>
      </header>
      <section id="content">
        <?php
          include_once('pages/'.$page.'.php');
        ?>

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
