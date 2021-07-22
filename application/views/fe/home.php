<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Nauti T's Creation</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="description" content="It's NOT just jelly, it's a CREATION">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="<?php echo base_url('favicon.svg');?>" />
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-icons.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/theme-vendors.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/responsive.css');?>" />
    <style>
    #instructions {
        position: absolute;
        color: #fff;
        bottom: 0;
        padding-bottom: 6px;
        font-family: sans-serif;
        width: 100%;
        text-align: center;
        pointer-events: none;
    }

    @import url(https://fonts.googleapis.com/css?family=Montserrat);
   

    svg {
        display: block;
        font: 2.2rem 'Roboto';
        width: 960px;
        height: 300px;
        margin: 0 auto;
    }

    .text-copy {
        fill: none;
        stroke: white;
        stroke-dasharray: 6% 29%;
        stroke-width: 1px;
        stroke-dashoffset: 0%;
        animation: stroke-offset 5.5s infinite linear;
    }

    .text-copy:nth-child(1) {
        stroke: #fff;
        animation-delay: -1;
    }

    .text-copy:nth-child(2) {
        stroke: #fff;
        animation-delay: -2s;
    }

    .text-copy:nth-child(3) {
        stroke: #fff;
        animation-delay: -3s;
    }

    .text-copy:nth-child(4) {
        stroke: #fff;
        animation-delay: -4s;
    }

    .text-copy:nth-child(5) {
        stroke: #fff;
        animation-delay: -5s;
    }

    @keyframes stroke-offset {
        100% {
            stroke-dashoffset: -35%;
        }
    }
    </style>
</head>

<body data-mobile-nav-style="classic">
    <!-- start header -->
    <header>
        <nav
            class="navbar navbar-expand-lg navbar-light bg-transparent header-light fixed-top navbar-boxed header-reverse-scroll">
            <div class="container-fluid nav-header-container">
                <div class="col-auto col-sm-6 col-lg-2 mr-auto pl-lg-0 padding-5px-tb">
                    <a class="navbar-brand" href="<?php base_url('');?>">
                        <img src="<?php echo base_url('assets/images/logo.svg');?>" class="default-logo" alt="">
                        <img src="<?php echo base_url('assets/images/logo.svg');?>" class="alt-logo" alt="">
                        <img src="<?php echo base_url('assets/images/logo.svg');?>" class="mobile-logo" alt="">
                    </a>
                </div>
                <div class="col-auto col-lg-8 menu-order px-lg-0">
                    <button class="navbar-toggler float-right" type="button" data-toggle="collapse"
                        data-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav alt-font">
                            <li class="nav-item dropdown megamenu active">
                                <a href="<?php echo base_url('');?>" class="nav-link text-uppercase">Home</a>
                            </li>
                            <li class="nav-item dropdown megamenu">
                                <a href="<?php echo base_url('about-me');?>" class="nav-link text-uppercase">About
                                    Me</a>
                            </li>
                            <li class="nav-item dropdown megamenu">
                                <a href="https://nauti-ts-creations.square.site/s/shop"
                                    class="nav-link text-uppercase">Shop</a>
                            </li>
                            <li class="nav-item dropdown megamenu">
                                <a href="<?php echo base_url('media');?>" class="nav-link text-uppercase">Media</a>
                            </li>
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="#" class="nav-link text-uppercase">Explore</a>
                                <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"
                                    aria-hidden="true"></i>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown"><a href="<?php echo base_url('recipe');?>">Recipe</a></li>
                                    <li class="dropdown"><a href="<?php echo base_url('tutorial');?>">Tutorial</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown megamenu">
                                <a href="<?php echo base_url('faq');?>" class="nav-link text-uppercase">FAQ</a>
                            </li>
                            <li class="nav-item dropdown megamenu">
                                <a href="<?php echo base_url('contact-us');?>" class="nav-link text-uppercase">Contact
                                    Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- end header -->
    <!-- start hero section -->
    <section class="parallax p-0" data-parallax-background-ratio="0.5"
        style="background-image: url('<?php echo base_url('assets/images/background_1.png');?>'); ">
        <div class="opacity-extra-medium-2 bg-extra-dark-gray"></div>
        <div id="three-container" style='position:absolute; z-index: 1000'></div>
        <div class="position-relative" style='height: 100vh'>
            <div class="row justify-content-center">
                <video autoplay="" loop="" muted=""
                    style='max-height: 120vh; display: block; position: absolute; width: auto; height: auto; -webkit-filter: brightness(1.0); filter: brightness(1.0); '>                    
                    <source src="<?php echo base_url('assets/videos/background.mp4');?>" type="video/mp4">
                </video>
                <div style='position: absolute; bottom: 20%; z-index: 2000'>
                    <svg viewBox="0 0 960 300">
                        <symbol id="s-text">
                            <text text-anchor="middle" x="50%" y="80%">IT'S NOT JUST JELLY, IT'S A CREATION</text>
                        </symbol>

                        <g class="g-ants">
                            <use xlink:href="#s-text" class="text-copy"></use>
                            <use xlink:href="#s-text" class="text-copy"></use>
                            <use xlink:href="#s-text" class="text-copy"></use>
                            <use xlink:href="#s-text" class="text-copy"></use>
                            <use xlink:href="#s-text" class="text-copy"></use>
                        </g>
                    </svg>
                </div>
                <div class="down-section text-center"><a href="#about" class="section-link up-down-ani"><i
                            class="ti-mouse icon-small bounce text-white"></i></a></div>
            </div>
        </div>
    </section>
    <!-- end hero section -->
    <!-- start section -->
    <section id="about"
        class="padding-nine-top padding-seven-bottom xs-padding-8-rem-top xs-padding-8-rem-bottom overlap-height xs-background-image-none wow animate__fadeIn"
        style="background: url('<?php echo base_url('assets/images/home-restaurant-bg-01.jpg');?>') no-repeat center top">
        <div class="container">
            <div class="row align-items-center overlap-gap-section">
                <div class="col-12 col-lg-2 md-margin-25px-bottom text-center text-sm-left wow animate__zoomIn"
                    data-wow-delay="0.1s">
                    <img src="<?php echo base_url('assets/images/home-restaurant-img-01.png');?>" alt="" />
                </div>
                <div class="col-12 col-xl-4 col-lg-5 col-sm-7 text-center text-sm-left md-margin-20px-bottom wow animate__fadeIn"
                    data-wow-delay="0.3s">
                    <h5 class="alt-font font-weight-500 text-extra-dark-gray mb-0 letter-spacing-minus-1px">Now enjoy a
                        creation by <span class="font-weight-700">Tisha Gavlik</span> on Nauti T's Creation</h5>
                </div>
                <div class="col-12 col-lg-5 col-md-7 col-sm-8 text-center text-sm-left padding-1-rem-left lg-padding-15px-left wow animate__fadeIn"
                    data-wow-delay="0.5s">
                    <p class="margin-20px-bottom">George Tillman, Jr. once said Food was a labor of love you felt by
                        cooking it and eating it. This quote inspires me at every moment I spend producing my creations
                        that puts a smile on customer's face.</p>
                    <a href="<?php echo base_url('about-me');?>"
                        class="btn btn-link btn-extra-large text-extra-dark-gray">My Story</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="p-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-xl-6 p-0 wow animate__fadeIn" data-wow-delay="0.2s">
                    <div class="d-block d-md-flex flex-column flex-md-row h-100">
                        <div class="col-12 col-md-6 cover-background sm-h-700px"
                            style="background-image: url('<?php echo base_url('assets/images/about-me-2.png');?>')">
                        </div>
                        <div
                            class="col-12 col-md-6 bg-light-cream d-flex flex-column justify-content-center text-left padding-3-rem-lr xl-padding-15px-lr lg-padding-5-rem-all md-padding-2-half-rem-lr">
                            <img src="<?php echo base_url('assets/images/home-restaurant-img-05.png');?>"
                                class="align-self-start margin-20px-bottom" alt="" />
                            <h4
                                class="alt-font font-weight-300 text-extra-dark-gray letter-spacing-minus-1px w-85 margin-3-rem-bottom xs-w-100 xs-margin-15px-bottom">
                                Master Chef <span class="font-weight-600">message</span></h4>
                            <span
                                class="text-large text-extra-dark-gray line-height-30px d-block w-75 margin-20px-bottom xs-margin-30px-bottom xl-w-80 xs-w-100">"For
                                me, cooking is an expression of the land where you are and the culture of that
                                place"</span>
                            <p class="w-75 xs-w-100">My inspiration are my Customers, that encourage me to create unique
                                creations that always have you coming back for more</p>
                            <img src="<?php echo base_url('assets/images/hand_sign.png');?>"
                                class="align-self-start margin-25px-top xs-margin-10px-top" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="d-flex flex-column">
                        <a href="<?php echo base_url('recipe');?>">
                            <div class="row">
                                <div class="col-12 col-sm-6 cover-background order-2 xs-h-300px lg-h-350px wow animate__fadeIn"
                                    data-wow-delay="0.2s"
                                    style="background-image: url('<?php echo base_url('assets/images/delicious_recipe.png');?>')">
                                </div>
                                <div class="col-12 col-sm-6 bg-extra-dark-gray order-1 lg-h-350px wow animate__fadeIn"
                                    data-wow-delay="0.4s">
                                    <div
                                        class="text-center padding-6-rem-lr padding-8-rem-tb xl-padding-6-rem-tb xl-padding-4-rem-lr lg-padding-7-rem-lr sm-padding-6-rem-lr">
                                        <span
                                            class="alt-font font-weight-500 text-golden letter-spacing-1px text-medium d-block text-uppercase margin-20px-bottom">Best
                                            of recipes</span>
                                        <h4 class="alt-font text-white mb-0"><span
                                                class="font-weight-600">Delicious</span> Recipes</h4>
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-12 col-sm-6 order-2 order-sm-1 px-0 cover-background xs-h-300px lg-h-350px wow animate__fadeIn"
                                    data-wow-delay="0.6s"
                                    style="background-image: url('<?php echo base_url('assets/images/healthy_food.png');?>'); min-height: 350px;">
                                </div>
                                <div class="col-12 col-sm-6 order-2 order-sm-1 px-0 cover-background xs-h-300px lg-h-350px wow animate__fadeIn"
                                    data-wow-delay="0.6s"
                                    style="background-image: url('<?php echo base_url('assets/images/healthy_food1.jpg');?>')">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-lg-4 col-md-6 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom wow animate__fadeIn">
                    <div
                        class="d-flex flex-row align-items-center justify-content-center text-center margin-5px-bottom">
                        <span class="w-25px h-1px bg-golden opacity-4"></span>
                        <div class="alt-font text-extra-medium text-golden padding-10px-lr">happy customers</div>
                        <span class="w-25px h-1px bg-golden opacity-4"></span>
                    </div>
                    <h5 class="alt-font font-weight-600 text-extra-dark-gray text-uppercase letter-spacing-minus-1px">
                        Our Guestbook</h5>
                </div>
            </div>
            <div class="row margin-6-rem-bottom xs-margin-2-half-rem-bottom">
                <div class="col-12 p-0 wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="swiper-simple-arrow-style-1">
                        <div class="swiper-container padding-15px-all black-move"
                            data-slider-options='{ "loop": false, "slidesPerView": 1, "spaceBetween": 30, "observer": true, "observeParents": true, "navigation": { "nextEl": ".swiper-button-next-nav-4", "prevEl": ".swiper-button-previous-nav-4" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "autoplay": { "delay": 3000, "disableOnInteraction": false },  "breakpoints": { "992": { "slidesPerView": 2 }, "768": { "slidesPerView": 1 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                <?php
                                    foreach ($guestbooks as $guestbook) {
                                    ?>

                                <!-- start testimonial item -->
                                <div class="swiper-slide">
                                    <div class="testimonials testimonials-style-04 last-paragraph-no-margin">
                                        <div
                                            class="testimonials-bubble border-radius-5px border-all border-color-extra-light-gray bg-white padding-30px-tb padding-40px-lr margin-35px-bottom">
                                            <p>
                                                <?php
                                                        echo nl2br($guestbook['Feedback']);
                                                    ?>
                                            </p>
                                        </div>
                                        <div class="author padding-20px-lr">
                                            <img class="rounded-circle w-60px h-60px margin-15px-right"
                                                src="<?php echo base_url('assets/images/person/'.$guestbook['Avatar']);?>"
                                                alt="">
                                            <div class="d-inline-block align-middle">
                                                <span
                                                    class="alt-font text-medium font-weight-500 line-height-16px text-extra-dark-gray d-block"><?php echo $guestbook['Client'];?></span>
                                                <a href="#" class="text-very-small letter-spacing-2px"><i
                                                        class="fas fa-star text-orange"></i><i
                                                        class="fas fa-star text-orange"></i><i
                                                        class="fas fa-star text-orange"></i><i
                                                        class="fas fa-star text-orange"></i><i
                                                        class="fas fa-star text-orange"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end testimonial item -->

                                <?php
                                    }
                                    ?>
                            </div>
                        </div>
                        <!-- start slider navigation -->
                        <!-- <div class="swiper-button-next-nav-4 swiper-button-next slider-navigation-style-01 light box-shadow-double-large"><i class="feather icon-feather-arrow-right"></i></div>
                            <div class="swiper-button-previous-nav-4 swiper-button-prev slider-navigation-style-01 light box-shadow-double-large"><i class="feather icon-feather-arrow-left"></i></div> -->
                        <!-- end slider navigation -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-light-cream" id="experience">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom wow animate__fadeIn">
                    <div
                        class="d-flex flex-row align-items-center justify-content-center text-center margin-5px-bottom">
                        <span class="w-25px h-1px bg-golden opacity-4"></span>
                        <div class="alt-font text-extra-medium text-golden padding-10px-lr">Featured Items</div>
                        <span class="w-25px h-1px bg-golden opacity-4"></span>
                    </div>
                    <h5 class="alt-font font-weight-600 text-extra-dark-gray text-uppercase letter-spacing-minus-1px">
                        Explore our wide selection today</h5>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center">
                <!-- start interactive banner item -->
                <div class="col text-center interactive-banners-style-10 md-margin-50px-bottom sm-margin-30px-bottom wow animate__fadeIn"
                    data-wow-delay="0.2s">
                    <figure class="border-radius-6px overflow-hidden">
                        <img src="<?php echo base_url('assets/images/products/strawberry.png');?>" alt="" />
                        <figcaption>
                            <div class="opacity-medium-2 bg-extra-dark-gray"></div>
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <a href="https://nauti-ts-creations.square.site/product/strawberry/33?cp=true&sa=true&sbp=false&q=false"
                                    class="bg-golden z-index-1 padding-1-half-rem-all text-extra-medium line-height-20px rounded-circle w-110px h-110px text-uppercase alt-font text-white d-flex flex-column justify-content-center"
                                    target="blank">Only<span
                                        class="font-weight-600 text-extra-dark-gray letter-spacing-minus-1px">$7.00</span></a>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="post-details text-center margin-40px-top sm-margin-20px-top">
                        <span
                            class="text-extra-dark-gray font-weight-500 alt-font d-block text-golden-hover text-uppercase">Strawberry</span>
                    </div>
                </div>
                <!-- end interactive banner item -->
                <!-- start interactive banner item -->
                <div class="col text-center interactive-banners-style-10 md-margin-50px-bottom sm-margin-30px-bottom wow animate__fadeIn"
                    data-wow-delay="0.4s">
                    <figure class="border-radius-6px overflow-hidden">
                        <img src="<?php echo base_url('assets/images/products/lemon_pucker_up.png');?>" alt="" />
                        <figcaption>
                            <div class="opacity-medium-2 bg-extra-dark-gray"></div>
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <a href="https://nauti-ts-creations.square.site/product/lemon-pucker-up-seasonal/36?cp=true&sa=true&sbp=false&q=false"
                                    target="blank"
                                    class="bg-golden z-index-1 padding-1-half-rem-all text-extra-medium line-height-20px rounded-circle w-110px h-110px text-uppercase alt-font text-white d-flex flex-column justify-content-center">Only<span
                                        class="font-weight-600 text-extra-dark-gray letter-spacing-minus-1px">$7.00</span></a>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="post-details text-center margin-40px-top sm-margin-20px-top">
                        <span
                            class="text-extra-dark-gray font-weight-500 alt-font d-block text-golden-hover text-uppercase">Lemon
                            Pucker Up</span>
                    </div>
                </div>
                <!-- end interactive banner item -->
                <!-- start interactive banner item -->
                <div class="col text-center interactive-banners-style-10 wow animate__fadeIn" data-wow-delay="0.6s">
                    <figure class="border-radius-6px overflow-hidden">
                        <img src="<?php echo base_url('assets/images/products/apple_butter.png');?>" alt="" />
                        <figcaption>
                            <div class="opacity-medium-2 bg-extra-dark-gray"></div>
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <a href="https://nauti-ts-creations.square.site/product/apple-butter/24?cp=true&sa=true&sbp=false&q=false"
                                    target="blank"
                                    class="bg-golden z-index-1 padding-1-half-rem-all text-extra-medium line-height-20px rounded-circle w-110px h-110px text-uppercase alt-font text-white d-flex flex-column justify-content-center">Only<span
                                        class="font-weight-600 text-extra-dark-gray letter-spacing-minus-1px">$7.00</span></a>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="post-details text-center margin-40px-top sm-margin-20px-top">
                        <span
                            class="text-extra-dark-gray font-weight-500 alt-font d-block text-golden-hover text-uppercase">Apple
                            Butter</span>
                    </div>
                </div>
                <!-- end interactive banner item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="big-section">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2">
                <!-- start feature box item -->
                <div class="col text-center md-margin-40px-bottom last-paragraph-no-margin wow animate__fadeIn"
                    data-wow-delay="0.1s">
                    <i
                        class="feather icon-feather-map-pin icon-small text-golden margin-25px-bottom sm-margin-10px-bottom d-block"></i>
                    <div
                        class="text-extra-dark-gray text-uppercase text-medium font-weight-600 alt-font letter-spacing-1px margin-10px-bottom">
                        Contact us</div>
                    <p class="lg-w-100 md-w-60 sm-w-75 sm-margin-10px-bottom mx-auto"><?php echo $Contact[0]['Value'];?>
                    </p>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col text-center md-margin-40px-bottom last-paragraph-no-margin wow animate__fadeIn"
                    data-wow-delay="0.2s">
                    <i
                        class="feather icon-feather-phone-call icon-small text-golden margin-25px-bottom sm-margin-10px-bottom d-block"></i>
                    <div
                        class="text-extra-dark-gray text-uppercase text-medium font-weight-600 alt-font letter-spacing-1px margin-10px-bottom">
                        Let's Talk</div>
                    <p class="w-70 lg-w-100 sm-margin-10px-bottom mx-auto">Phone: <?php echo $Contact[1]['Value'];?></p>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col text-center xs-margin-40px-bottom last-paragraph-no-margin wow animate__fadeIn"
                    data-wow-delay="0.3s">
                    <i
                        class="feather icon-feather-mail icon-small text-golden margin-25px-bottom sm-margin-10px-bottom d-block"></i>
                    <div
                        class="text-extra-dark-gray text-uppercase text-medium font-weight-600 alt-font letter-spacing-1px margin-10px-bottom">
                        Email</div>
                    <p class="lg-w-100 sm-margin-10px-bottom mx-auto">
                        <?php                                
                                $emails = explode(",", $Contact[2]['Value']);
                                foreach($emails as $email) 
                                    echo '<a href="mailto:'.$email.'" class="text-golden-hover">' . $email . '</a>';
                            ?>
                    </p>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col text-center xs-margin-40px-bottom last-paragraph-no-margin wow animate__fadeIn"
                    data-wow-delay="0.4s">
                    <i
                        class="feather icon-feather-globe icon-small text-golden text-pink margin-25px-bottom sm-margin-10px-bottom d-block"></i>
                    <div
                        class="text-extra-dark-gray text-uppercase text-medium font-weight-600 alt-font letter-spacing-1px margin-10px-bottom">
                        Days and Hours</div>
                    <p class="w-75 lg-w-100 md-w-60 sm-w-75 sm-margin-10px-bottom mx-auto">
                        <?php 
                            foreach ($Hour as $hour) {
                                echo $hour['Name'] . '. ' . $hour['Value'] . '<br />';
                            }
                        ?>
                    </p>
                </div>
                <!-- end feature box item -->
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start footer -->
    <footer
        class="footer-restaurant footer-light padding-60px-tb border-top border-color-black-transparent md-padding-80px-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-4 sm-margin-15px-bottom">
                    <ul
                        class="alt-font footer-horizontal-link d-flex flex-column flex-sm-row justify-content-center justify-content-md-start text-center text-uppercase text-small">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Media</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-5 text-center text-center last-paragraph-no-margin">
                    <p class="alt-font text-small text-uppercase">Copyright&copy; Nauti T's Creation Ltd. | All rights
                        reserved</p>
                </div>
                <div class="col-12 col-md-3 text-center text-md-right">
                    <div class="social-icon-style-12">
                        <ul class="extra-small-icon">
                            <?php
                                    foreach ($Social as $social) {
                                        echo '<li><a class="'.$social['Name'].'"  href="' . $social['Value'] .'" target="_blank"><i class="fab fa-'. $social['Name'].'"></i></a></li>';
                                    }
                                ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- start scroll to top -->
    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
    <!-- end scroll to top -->
    <!-- javascript -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/theme-vendors.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/main.js');?>"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/three.js/r75/three.min.js'></script>
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/175711/bas.js'></script>
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/175711/TextGeometry.js'></script>
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/175711/FontUtils.js'></script>
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/175711/pnltri.min.js'></script>
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/175711/droid_sans_bold.typeface.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js'></script>

    <script>
    //capture the window loading
    window.onload = init;

    function init() {
        var root = new THREERoot({
            createCameraControls: false,
            antialias: true,
            fov: 60
        });

        //setup the scene
        root.renderer.setClearColor(0x000000, 0);
        root.renderer.setPixelRatio(window.devicePixelRatio || 1);
        root.camera.position.set(0, 0, 400);


        //create the text animation variable

        var textAnimation = createTextAnimation("WELCOME TO");
        textAnimation.position.y = 50;
        root.scene.add(textAnimation);

        var textAnimation1 = createTextAnimation("NAUTI T'S CREATIONS");
        textAnimation1.position.y = -10;
        root.scene.add(textAnimation1);

        //set the timeline aspects of the animation

        var tl = new TimelineMax({
            repeat: -1, //-1 loop
            repeatDelay: 2.0,
            yoyo: true
        });
        tl.fromTo(textAnimation, 3, //4
            {
                animationProgress: 1.0
            }, {
                animationProgress: 0.0,
                ease: Power1.easeInOut
            },
            0
        );

        var t2 = new TimelineMax({
            repeat: -1, //-1 loop
            repeatDelay: 2.0,
            yoyo: true
        });
        t2.fromTo(textAnimation1, 3, //4
            {
                animationProgress: 1.0
            }, {
                animationProgress: 0.0,
                ease: Power1.easeInOut
            },
            0
        );

        createTweenScrubber(tl);
        createTweenScrubber(t2);
    }

    //create the text to be animated

    function createTextAnimation(text) {
        var geometry = generateTextGeometry(text, {
            size: 14,
            height: 0,
            font: 'droid sans',
            weight: 'bold',
            style: 'normal',
            anchor: {
                x: 0.5,
                y: 0.5,
                z: 0.0
            }
        });

        THREE.BAS.Utils.separateFaces(geometry);

        return new TextAnimation(geometry);
    }

    //mathematical details of the animation

    function generateTextGeometry(text, params) {
        var geometry = new THREE.TextGeometry(text, params);

        geometry.computeBoundingBox();

        geometry.userData = {};
        geometry.userData.size = {
            width: geometry.boundingBox.max.x - geometry.boundingBox.min.x,
            height: geometry.boundingBox.max.y - geometry.boundingBox.min.y,
            depth: geometry.boundingBox.max.z - geometry.boundingBox.min.z
        };

        var anchorX = geometry.userData.size.width * -params.anchor.x;
        var anchorY = geometry.userData.size.height * -params.anchor.y;
        var anchorZ = geometry.userData.size.depth * -params.anchor.z;
        var matrix = new THREE.Matrix4().makeTranslation(anchorX, anchorY, anchorZ);

        geometry.applyMatrix(matrix);

        return geometry;
    }


    ////////////////////
    // CLASSES
    ////////////////////

    function TextAnimation(textGeometry) {
        var bufferGeometry = new THREE.BAS.ModelBufferGeometry(textGeometry);

        var aAnimation = bufferGeometry.createAttribute('aAnimation', 2);
        var aCentroid = bufferGeometry.createAttribute('aCentroid', 3);
        var aControl0 = bufferGeometry.createAttribute('aControl0', 3);
        var aControl1 = bufferGeometry.createAttribute('aControl1', 3);
        var aEndPosition = bufferGeometry.createAttribute('aEndPosition', 3);

        var faceCount = bufferGeometry.faceCount;
        var i, i2, i3, i4, v;

        var size = textGeometry.userData.size;

        var maxDelayX = 2.0;
        var maxDelayY = 0.25;
        var minDuration = 2;
        var maxDuration = 8;
        var stretch = 0.25;

        this.animationDuration = maxDelayX + maxDelayY + maxDuration - 3;
        this._animationProgress = 0;

        for (i = 0, i2 = 0, i3 = 0, i4 = 0; i < faceCount; i++, i2 += 6, i3 += 9, i4 += 12) {
            var face = textGeometry.faces[i];
            var centroid = THREE.BAS.Utils.computeCentroid(textGeometry, face);

            // animation
            var delayX = Math.max(0, (centroid.x / size.width) * maxDelayX);
            var delayY = Math.max(0, (1.0 - (centroid.y / size.height)) * maxDelayY);
            var duration = THREE.Math.randFloat(minDuration, maxDuration);

            for (v = 0; v < 6; v += 2) {
                aAnimation.array[i2 + v] = delayX + delayY + Math.random() * stretch;
                aAnimation.array[i2 + v + 1] = duration;
            }

            // centroid
            for (v = 0; v < 9; v += 3) {
                aCentroid.array[i3 + v] = centroid.x;
                aCentroid.array[i3 + v + 1] = centroid.y;
                aCentroid.array[i3 + v + 2] = centroid.z;
            }

            // ctrl
            var c0x = centroid.x + THREE.Math.randFloat(40, 120);
            var c0y = centroid.y + size.height * THREE.Math.randFloat(0.0, 12.0);
            var c0z = THREE.Math.randFloatSpread(120);

            var c1x = centroid.x + THREE.Math.randFloat(80, 120) * -1;
            var c1y = centroid.y + size.height * THREE.Math.randFloat(0.0, 12.0);
            var c1z = THREE.Math.randFloatSpread(120);

            for (v = 0; v < 9; v += 3) {
                aControl0.array[i3 + v] = c0x;
                aControl0.array[i3 + v + 1] = c0y;
                aControl0.array[i3 + v + 2] = c0z;

                aControl1.array[i3 + v] = c1x;
                aControl1.array[i3 + v + 1] = c1y;
                aControl1.array[i3 + v + 2] = c1z;
            }

            // end position
            var x, y, z;

            x = centroid.x + THREE.Math.randFloatSpread(120);
            y = centroid.y + size.height * THREE.Math.randFloat(0.0, 12.0);
            z = THREE.Math.randFloat(-20, 20);

            for (v = 0; v < 9; v += 3) {
                aEndPosition.array[i3 + v] = x;
                aEndPosition.array[i3 + v + 1] = y;
                aEndPosition.array[i3 + v + 2] = z;
            }
        }

        var material = new THREE.BAS.BasicAnimationMaterial({
            shading: THREE.FlatShading,
            side: THREE.DoubleSide,
            transparent: true,
            uniforms: {
                uTime: {
                    type: 'f',
                    value: 0
                }
            },
            shaderFunctions: [
                THREE.BAS.ShaderChunk['cubic_bezier'],
                THREE.BAS.ShaderChunk['ease_out_cubic']
            ],
            shaderParameters: [
                'uniform float uTime;',
                'attribute vec2 aAnimation;',
                'attribute vec3 aCentroid;',
                'attribute vec3 aControl0;',
                'attribute vec3 aControl1;',
                'attribute vec3 aEndPosition;'
            ],
            shaderVertexInit: [
                'float tDelay = aAnimation.x;',
                'float tDuration = aAnimation.y;',
                'float tTime = clamp(uTime - tDelay, 0.0, tDuration);',
                'float tProgress =  ease(tTime, 0.0, 1.0, tDuration);'
                //'float tProgress = tTime / tDuration;'
            ],
            shaderTransformPosition: [
                'vec3 tPosition = transformed - aCentroid;',
                'tPosition *= 1.0 - tProgress;',
                'tPosition += aCentroid;',
                'tPosition += cubicBezier(tPosition, aControl0, aControl1, aEndPosition, tProgress);',
                'transformed = tPosition;'

                // 'vec3 tPosition = transformed;',
                // 'tPosition *= 1.0 - tProgress;',
                // 'tPosition += cubicBezier(transformed, aControl0, aControl1, aEndPosition, tProgress);',
                // 'tPosition += mix(transformed, aEndPosition, tProgress);',
                // 'transformed = tPosition;'
            ]
        }, {
            diffuse: 0xffffff //0000
        });

        THREE.Mesh.call(this, bufferGeometry, material);

        this.frustumCulled = false;
    }
    TextAnimation.prototype = Object.create(THREE.Mesh.prototype);
    TextAnimation.prototype.constructor = TextAnimation;

    Object.defineProperty(TextAnimation.prototype, 'animationProgress', {
        get: function() {
            return this._animationProgress;
        },
        set: function(v) {
            this._animationProgress = v;
            this.material.uniforms['uTime'].value = this.animationDuration * v;
        }
    });

    function THREERoot(params) {
        params = utils.extend({
            antialias: false,

            fov: 60,
            zNear: 1,
            zFar: 10000,

            createCameraControls: true
        }, params);

        this.renderer = new THREE.WebGLRenderer({
            antialias: params.antialias,
            alpha: true
        });
        document.getElementById('three-container').appendChild(this.renderer.domElement);

        this.camera = new THREE.PerspectiveCamera(
            params.fov,
            window.innerWidth / window.innerHeight,
            params.zNear,
            params.zfar
        );

        this.scene = new THREE.Scene();

        if (params.createCameraControls) {
            this.controls = new THREE.OrbitControls(this.camera, this.renderer.domElement);
        }

        this.resize = this.resize.bind(this);
        this.tick = this.tick.bind(this);

        this.resize();
        this.tick();

        window.addEventListener('resize', this.resize, false);
    }
    THREERoot.prototype = {
        tick: function() {
            this.update();
            this.render();
            requestAnimationFrame(this.tick);
        },
        update: function() {
            this.controls && this.controls.update();
        },
        render: function() {
            this.renderer.render(this.scene, this.camera);
        },
        resize: function() {
            this.camera.aspect = window.innerWidth / window.innerHeight;
            this.camera.updateProjectionMatrix();

            this.renderer.setSize(window.innerWidth, window.innerHeight);
        }
    };

    ////////////////////
    // UTILS
    ////////////////////

    var utils = {
        extend: function(dst, src) {
            for (var key in src) {
                dst[key] = src[key];
            }

            return dst;
        },
        randSign: function() {
            return Math.random() > 0.5 ? 1 : -1;
        }
    };

    function createTweenScrubber(tween, seekSpeed) {
        seekSpeed = seekSpeed || 0.001;

        function stop() {
            TweenMax.to(tween, 2, {
                timeScale: 0
            });
        }

        function resume() {
            TweenMax.to(tween, 2, {
                timeScale: 1
            });
        }

        function seek(dx) {
            var progress = tween.progress();
            var p = THREE.Math.clamp((progress + (dx * seekSpeed)), 0, 1);

            tween.progress(p);
        }

        var _cx = 0;

        // desktop
        var mouseDown = false;
        document.body.style.cursor = 'pointer';

        window.addEventListener('mousedown', function(e) {
            mouseDown = true;
            document.body.style.cursor = 'ew-resize';
            _cx = e.clientX;
            stop();
        });
        window.addEventListener('mouseup', function(e) {
            mouseDown = false;
            document.body.style.cursor = 'pointer';
            resume();
        });
        window.addEventListener('mousemove', function(e) {
            if (mouseDown === true) {
                var cx = e.clientX;
                var dx = cx - _cx;
                _cx = cx;

                seek(dx);
            }
        });
        // mobile
        window.addEventListener('touchstart', function(e) {
            _cx = e.touches[0].clientX;
            stop();
            e.preventDefault();
        });
        window.addEventListener('touchend', function(e) {
            resume();
            e.preventDefault();
        });
        window.addEventListener('touchmove', function(e) {
            var cx = e.touches[0].clientX;
            var dx = cx - _cx;
            _cx = cx;

            seek(dx);
            e.preventDefault();
        });
    }

    // var TxtRotate = function(el, toRotate, period) {
    //     this.toRotate = toRotate;
    //     this.el = el;
    //     this.period = parseInt(period, 10) || 2000;
    //     this.txt = '';
    //     this.tick();
    //     this.isDeleting = false;
    // };

    // TxtRotate.prototype.tick = function() {
    //     var fullTxt = this.toRotate;

    //     if (this.isDeleting) {
    //         this.txt = fullTxt.substring(0, this.txt.length - 1);
    //     } else {
    //         this.txt = fullTxt.substring(0, this.txt.length + 1);
    //     }

    //     this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

    //     var that = this;
    //     var delta = 100;

    //     if (this.isDeleting) {
    //         delta /= 2;
    //     }

    //     if (!this.isDeleting && this.txt === fullTxt) {
    //         delta = this.period;
    //         this.isDeleting = true;
    //     } else if (this.isDeleting && this.txt === '') {
    //         this.isDeleting = false;
    //         delta = 500;
    //     }

    //     setTimeout(function() {
    //         that.tick();
    //     }, delta);
    // };

    // window.onload = function() {
    //     console.log('windows start');
    //     var elements = document.getElementsByClassName('txt-rotate');
    //     for (var i = 0; i < elements.length; i++) {
    //         var toRotate = elements[i].getAttribute('data-rotate');
    //         var period = elements[i].getAttribute('data-period');
    //         if (toRotate) {
    //             new TxtRotate(elements[i], toRotate, period);
    //         }
    //     }
    //     // INJECT CSS
    //     var css = document.createElement("style");
    //     css.type = "text/css";
    //     document.body.appendChild(css);
    // };
    </script>
</body>

</html>