<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Nauti T's Creation | Explore</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="description" content="Litho is a clean and modern design, BootStrap 4 responsive, business and portfolio multipurpose HTML5 template with 36+ ready homepage demos.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="images/favicon.svg">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-icons.min.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/theme-vendors.min.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/responsive.css');?>" />
    </head>
    <body data-mobile-nav-style="classic">
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg navbar-white bg-transparent header-light fixed-top header-reverse-scroll">
                <div class="container-lg nav-header-container">
                    <div class="col-auto col-sm-6 col-lg-2 mr-auto pl-lg-0">
                        <a class="navbar-brand" href="index.html">
                            <img src="<?php echo base_url('assets/images/logo.svg');?>" class="default-logo" alt="" style='filter: invert(0%);'>
                            <img src="<?php echo base_url('assets/images/logo.svg');?>" class="alt-logo" alt="">
                            <img src="<?php echo base_url('assets/images/logo.svg');?>" class="mobile-logo" alt="">
                        </a>
                    </div>
                    <div class="col-auto col-lg-8 menu-order px-lg-0">
                        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav alt-font">
                                <li class="nav-item dropdown megamenu">
                                    <a href="<?php echo base_url('');?>" class="nav-link text-uppercase">Home</a>                                    
                                </li>
                                <li class="nav-item dropdown megamenu">
                                    <a href="<?php echo base_url('about-me');?>" class="nav-link text-uppercase">About Me</a>                                    
                                </li>
                                <li class="nav-item dropdown megamenu">
                                    <a href="https://nauti-ts-creations.square.site/s/shop" class="nav-link text-uppercase">Shop</a>                                    
                                </li>            
                                <li class="nav-item dropdown megamenu">
                                    <a href="<?php echo base_url('media');?>" class="nav-link text-uppercase">Media</a>                                   
                                </li>
                                <li class="nav-item dropdown simple-dropdown active">
                                    <a href="#" class="nav-link text-uppercase">Explore</a>  
                                    <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown active"><a href="<?php echo base_url('recipe');?>">Recipe</a></li>
                                        <li class="dropdown"><a href="<?php echo base_url('tutorial');?>">Tutorial</a></li>
                                    </ul>                             
                                </li>
                                <li class="nav-item dropdown megamenu">
                                    <a href="<?php echo base_url('faq');?>" class="nav-link text-uppercase">FAQ</a>
                                </li>
                                <li class="nav-item dropdown megamenu">
                                    <a href="<?php echo base_url('contact-us');?>" class="nav-link text-uppercase">Contat Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header -->
         <!-- start banner section -->
         <section class="big-section cover-background overlap-height padding-70px-bottom" style="background-image: url('<?php echo base_url('assets/images/blog-post-layout-03-img-01.jpg');?>');">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-6 col-lg-7 col-sm-8 overlap-gap-section text-center">
                        <div class="d-inline-block text-center text-uppercase margin-25px-bottom text-yellow-ochre-light">
                            <a href="blog-grid.html" class="alt-font d-inline-block align-middle text-yellow-ochre-light text-extra-dark-gray-hover">Recipe</a><span class="text-extra-large d-inline-block align-middle">&nbsp;&nbsp;&#8226;&nbsp;&nbsp;</span><a href="blog-grid.html" class="alt-font d-inline-block align-middle text-yellow-ochre-light text-extra-dark-gray-hover"><?php echo date('j F, Y', $Recipe['DateAdded']);?></a>
                        </div>
                        <h4 class="alt-font text-extra-dark-gray font-weight-500 letter-spacing-minus-1px margin-35px-bottom"><?php echo $Recipe['Title'];?></h4>
                    </div>
                </div>
            </div>
        </section>
        <!-- start slider section -->
        <section class="pb-0 padding-60px-top position-relative overflow-visible">
            <div class="slider-blog-banner swiper-container black-move overlap-section-one-fourth" data-slider-options='{ "loop": true, "centeredSlides": true, "slidesPerView": "auto", "speed": 1000, "keyboard": { "enabled": true, "onlyInViewport": true }, "pagination": { "el": ".swiper-pagination", "clickable": true }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" } }'>
                <div class="swiper-wrapper">
                    
                    <?php
                        foreach ($Recipe['images'] as $row) {
                            ?>
                    <!-- start slider item -->
                    <div class="swiper-slide w-55 sm-w-100">
                        <div class="w-100 padding-15px-lr" style="background-image: url('<?php echo base_url('assets/images/recipes/'.$row['Attach']);?>'); background-size: contain; background-position:center; background-repeat: no-repeat; min-height: 35rem;"> 
                        </div>
                    </div>
                    <!-- end slider item -->
                <?php
                        }
                    ?>
                </div>
                <!-- <div class="swiper-pagination swiper-pagination-big swiper-light-pagination"></div> -->
                <div class="swiper-button-prev rounded-circle slider-navigation-style-07 box-shadow-large bg-white"><i class="feather icon-feather-arrow-left text-extra-dark-gray"></i></div>
                <div class="swiper-button-next rounded-circle slider-navigation-style-07 box-shadow-large bg-white"><i class="feather icon-feather-arrow-right text-extra-dark-gray"></i></div>
            </div>  
        </section>
        <!-- end slider section -->
        <!-- start section -->
        <section>
            <div class="container">
                <div class="row justify-content-center">                    
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start parallax section -->
        <section class="parallax overlap-height pb-md-0" data-parallax-background-ratio="0.5" style="background-image: url('<?php echo base_url('assets/images/recipe_background.jpg');?>');">
            <div class="opacity-very-light bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-7 col-md-9 col-sm-10 text-center overlap-gap-section wow animate__fadeIn">                        
                        <h4 class="alt-font font-weight-500 text-white margin-8-rem-bottom sm-no-margin-bottom">Ingredients & Process</h4>
                    </div>
                </div>
            </div>
        </section>
        <!-- end parallax section -->
        <!-- start section -->
        <section class="pt-md-0 position-relative overflow-visible">
            <div class="container">
                <div class="z-index-6 overlap-section">
                    <div class="d-flex flex-column">
                        <div class="row m-lg-0">
                            <div class="col-12 col-md-6 order-2 order-md-1 bg-light-cream text-center padding-6-half-rem-all lg-padding-4-rem-all last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.2s">
                                <h6 class="alt-font text-extra-dark-gray font-weight-500 d-inline-block">Ingredients</h6>
                                <div><?php echo $Recipe['Ingredients'];?></div>
                            </div>
                            <div class="col-12 col-md-6 order-1 order-md-2 hover-option-6 cover-background sm-h-300px wow animate__fadeIn" data-wow-delay="0.4s" style="background-image: url('<?php echo base_url('assets/images/recipes/'.$Recipe['images'][1]['Attach']);?>')"></div>
                        </div>
                        <div class="row m-lg-0">
                            <div class="col-12 col-md-6 hover-option-6 cover-background sm-h-300px wow animate__fadeIn" data-wow-delay="0.8s" style="background-image: url('<?php echo base_url('assets/images/recipes/'.$Recipe['images'][2]['Attach']);?>')"></div>
                            <div class="col-12 col-md-6 bg-light-cream text-center padding-6-half-rem-all lg-padding-4-rem-all last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.6s">
                                <h6 class="alt-font text-extra-dark-gray font-weight-500 d-inline-block">Process</h6>
                                <div style="text-align: left;">
                                <?php 
                                    $out = str_replace('font-family', 'font-fa', $Recipe['Process']);
                                    echo $out;
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </section>
        <!-- end section -->        
        <!-- start footer -->
        <footer class="footer-dark bg-slate-blue">
            <div class="footer-top padding-five-tb lg-padding-eight-tb md-padding-50px-tb">
                <div class="container">
                    <div class="row">
                        <!-- start footer column -->
                        <div class="col-12 col-lg-3 col-sm-6 md-margin-40px-bottom xs-margin-25px-bottom">
                            <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Company</span>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Media</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- end footer column -->
                        <!-- start footer column -->
                        <div class="col-12 col-lg-6 col-sm-6 xs-margin-25px-bottom">
                            <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Get in touch</span>
                            <p class="w-85 margin-15px-bottom"><?php echo $Contact[0]['Value'];?></p>
                            <div><i class="feather icon-feather-phone-call icon-very-small margin-10px-right text-white"></i><?php echo $Contact[1]['Value'];?></div>
                            <div><i class="feather icon-feather-mail icon-very-small margin-10px-right text-white"></i><a href="#"><?php echo $Contact[2]['Value'];?></a></div>
                        </div>
                        <!-- end footer column -->
                        <!-- start footer column -->
                        <div class="col-12 col-lg-3 col-sm-6">
                            <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom">Days and Hours</span>                            
                            <ul>
                                <?php
                                    foreach ($Hour as $hour) {
                                        echo '<li>'. $hour['Name'] . '. '. $hour['Value'] .'</li>';
                                    }
                                ?> 
                            </ul>                                                            
                        </div>
                        <!-- end footer column -->
                    </div>
                </div>
            </div>
            <div class="footer-bottom padding-40px-tb border-top border-color-white-transparent">
                <div class="container"> 
                    <div class="row align-items-center">
                        <div class="col-12 col-md-3 text-center text-md-left sm-margin-20px-bottom">
                            <a href="index.html" class="footer-logo"><img src="<?php echo base_url('assets/images/logo.svg');?>" style="filter: invert(100%);"></a>
                        </div>
                        <div class="col-12 col-md-6 text-center last-paragraph-no-margin sm-margin-20px-bottom">
                            <p>Copyright&copy; Nauti T's Creation Ltd. | All rights reserved</p>
                        </div>
                        <div class="col-12 col-md-3 text-center text-md-right">
                            <div class="social-icon-style-12">
                                <ul class="extra-small-icon light">
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
    </body>
</html>