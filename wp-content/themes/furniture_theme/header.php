<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Mobile Web-app fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Meta tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/img/icon.png">

    <!--Title-->
    <title>The Royal Furniture| Best Furniture Shop</title>
    <?php wp_head(); ?>
    <!--CSS bundle -->
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" />
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/css/animate.css" />
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.css" />
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/css/ion-range-slider.css" />
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/css/linear-icons.css" />
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/css/magnific-popup.css" />
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css" />
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/css/theme.css" />

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">


</head>

<body>
    <style>
        .nav-item {
            color: black;
            font-size: 14px;
            font-weight: 600;
            border-bottom: 1px solid #000;
        }

        ul.dropdown {
            position: absolute;
            background: black;
            padding: 25px;
            visibility: hidden;
            transition: all 1s ease-in-out;
        }

        ul.dropdown li a {
            color: white !important;
            font-weight: 500;
            font-size: 16px;
        }

        .drop-main:hover>ul.dropdown {
            visibility: visible;
        }

        ul.dropdown li a:hover {
            background-color: #000 !important;
        }

        ul.dropdown li:hover {
            background-color: #000 !important;
        }

        @media only screen and (min-width: 768px) {
            .drop-main {
                position: relative;
            }

            .navbar-nav {
                margin-right: 45px;
            }

            .nav-item {
                margin-left: 35px;
                border-bottom: unset;
            }
        }

        @media only screen and (max-width: 768px) {
            ul.dropdown {
                position: unset;
                background: white;
                padding: 0;
                visibility: visible;
                transition: all 1s ease-in-out;
                display: none;
            }

            .drop-main:hover>ul.dropdown {
                display: block;
            }

            ul.dropdown li:hover {
                background-color: #fff !important;
            }

            ul.dropdown li a {
                color: black !important;
                font-weight: 500;
                font-size: 16px;
            }

            ul.dropdown li a:hover {
                background-color: #fff !important;
            }
        }
    </style>
    <div class="page-loader">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <style>
        .witho-fix {
            display: none;
        }

        @media only screen and (min-width: 768px) {
            .d-image {
                display: block !important;
            }

            .navbar {
                position: absolute;
                background: #F2F2F2;
                top: 0;
                left: 0;
            }

            .nvb {
                background: transparent !important;
            }

            #navbarCollapse {
                justify-content: center;
            }

            .nvb .navbar-nav {
                background: white;
                border-radius: 5px;
            }

            .nvb .navbar-nav li:last-child {
                margin-right: 35px;
            }

            .with-fix {
                display: none;
            }
        }
    </style>
    <div class="wrapper1">

        <!-- ======================== Navigation ======================== -->

        <nav class="navbar navbar-expand-md mb-2">
            <div class="container">
                <a href="<?php echo home_url(); ?>" class="navbar-brand">
                    <img class="witho-fix" src="<?php bloginfo('template_directory'); ?>/assets/img/logo2.png" style="max-width:180px;" alt="">
                    <img class="with-fix" src="<?php bloginfo('template_directory'); ?>/assets/img/royal-logo.png" style="max-width:175px;" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon">
                        <i class="fas fa-bars"></i>
                    </span>
                </button>
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-md-0 ml-auto">
                        <li class="nav-item">
                          
                            <a href="<?php echo home_url(); ?>/products?product=curtains" class="nav-link">
                                Curtains
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo home_url(); ?>/products?product=Mattresses" class="nav-link">
                                Mattresses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo home_url(); ?>/products?product=Upholstery" class="nav-link">
                                Upholstery
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo home_url(); ?>/products?product=Wallpapers" class="nav-link">
                                Wallpapers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo home_url(); ?>/products?product=Blinds" class="nav-link">
                                Blinds
                            </a>
                        </li>
                        <li class="nav-item drop-main">
                            <span class="nav-link">
                                Others
                            </span>
                            <ul class="dropdown">
                                <li class="dropdown-item"><a href="<?php echo home_url(); ?>/products?product=Customised Sofas">Customised Sofas</a></li>
                                <li class="dropdown-item"><a href="<?php echo home_url(); ?>/products?product=Flooring">Flooring</a></li>
                                <li class="dropdown-item"><a href="<?php echo home_url(); ?>/products?product=Carpets">Carpets</a></li>
                                <li class="dropdown-item"><a href="<?php echo home_url(); ?>/products?product=Accessories">Accessories</a></li>
                                <li class="dropdown-item"><a href="<?php echo home_url(); ?>/products?product=hospitality-cat">Hospitality</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo home_url(); ?>/about" class="nav-link">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo home_url(); ?>/contact" class="nav-link">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- ========================  Header content ======================== -->