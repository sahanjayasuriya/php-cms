<?php include 'config/config.php';?>
<?php include 'lib/Database.php';?>
<?php include 'helpers/Format.php';?>

<?php
    $db = new Database();
    $fm = new Format();
?>
<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Horanaapi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Horanaapi.com" />
    <meta name="keywords" content="horanaapi, blog, sinhala, horana" />
    <meta name="author" content="horanaapi" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <!--Stylesheets-->
    <link rel="stylesheet" href="stylesheets/animate.css">
    <link rel="stylesheet" href="stylesheets/icomoon.css">
    <link rel="stylesheet" href="stylesheets/bootstrap.css">
    <link rel="stylesheet" href="stylesheets/superfish.css">
    <link rel="stylesheet" href="stylesheets/style.css">

    <!--Javascripts-->
    <script src="javascripts/modernizr-2.6.2.min.js"></script>
    <!--[if lt IE 9]>
    <script src="javascripts/respond.min.js"></script>
    <![endif]-->
    <script src="javascripts/jquery.min.js"></script>
    <script src="javascripts/jquery.easing.1.3.js"></script>
    <script src="javascripts/bootstrap.min.js"></script>
    <script src="javascripts/jquery.waypoints.min.js"></script>
    <script src="javascripts/sticky.js"></script>
    <script src="javascripts/jquery.stellar.min.js"></script>
    <script src="javascripts/hoverIntent.js"></script>
    <script src="javascripts/superfish.js"></script>
    <script src="javascripts/main.js"></script>
</head>
<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 text-left fh5co-link">
                        <span class="headerTel">0777 186 155</span>
                    </div>
                    <div class="col-md-6 col-sm-6 text-right fh5co-social">
                        <a href="#" class="grow"><i class="icon-facebook2 ic"></i></a>
                        <a href="#" class="grow"><i class="icon-twitter2"></i></a>
                        <a href="#" class="grow"><i class="icon-instagram2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <header id="fh5co-header-section" class="sticky-banner">
            <div class="container">
                <div class="nav-header">
                    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                    <h1 id="fh5co-logo"><a href="index.php"><img src="images/logo.png"></a></h1>
                    <!-- START #fh5co-menu-wrap -->
                    <nav id="fh5co-menu-wrap" role="navigation">
                        <ul class="sf-menu" id="fh5co-primary-menu">
                            <li class="active">
                                <a href="index.php">මුල් පිටුව</a>
                            </li>
                            <li>
                                <a href="#" class="fh5co-sub-ddown">සේවා</a>
                                <ul class="fh5co-sub-menu">
                                    <li><a href="#">ණය පහසුකම</a></li>
                                    <li><a href="#">කෑම බීම ගෙදරටම</a></li>
                                    <li><a href="#">රැකියා</a></li>
                                    <li><a href="#">උදව්</a></li>
                                </ul>
                            </li>
                            <li><a href="about.php">අපි ගැන</a></li>
                            <li><a href="contact.php">අපට අමතන්න</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>