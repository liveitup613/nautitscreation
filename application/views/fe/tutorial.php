<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Nauti T's Creation | Turtorial</title>
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
    </head>
    <body data-mobile-nav-style="classic">
        <!--start header-->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent header-light fixed-top header-reverse-scroll">
                <div class="container-lg nav-header-container">
                    <div class="col-auto col-sm-6 col-lg-2 mr-auto pl-lg-0">
                        <a class="navbar-brand" href="<?php echo base_url();?>">                            
                            <img src="<?php echo base_url('assets/images/logo.svg');?>" class="default-logo" alt="" style="filter:invert(0%);">
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
                                        <li class="dropdown"><a href="<?php echo base_url('recipe');?>">Recipe</a></li>
                                        <li class="dropdown active"><a href="<?php echo base_url('tutorial');?>">Tutorial</a></li>
                                    </ul>                             
                                </li>
                                <li class="nav-item dropdown megamenu">
                                    <a href="<?php echo base_url('faq');?>" class="nav-link text-uppercase">FAQ</a>
                                </li>
                                <li class="nav-item dropdown megamenu">
                                    <a href="<?php echo base_url('contact-us');?>" class="nav-link text-uppercase">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>                    
                </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header -->
        <!-- start page title -->
        <section class="half-section parallax" style="background-image:linear-gradient(to bottom, #9b9dd7, #fff);">
            <div class="container">
                <div class="row align-items-stretch justify-content-center extra-small-screen">
                    <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">                        
                        <h2 class="text-extra-dark-gray alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Tutorials</h2>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 filter-content">
                        <ul class="portfolio-boxed portfolio-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-large text-center">
                            <li class="grid-sizer"></li>
                            <?php 
                            foreach ($Resources as $resource) {                                
                                ?>                       
                            <li class="grid-item wow animate__fadeIn">
                                <?php
                                    if ($resource['Thumbnail'] == '')                                
                                        echo '<a href="https://www.youtube.com/watch?v='.$resource['Attach'].'" class="popup-youtube">';
                                    else
                                        echo '<a href="'.base_url('assets/videos/'.$resource['Attach']).'" class="popup-youtube">';
                                ?>                                
                                    <div class="portfolio-box box-shadow-portfolio">
                                        <div class="portfolio-image bg-gradient-sky-blue-pink">
                                        <?php
                                            if ($resource['Thumbnail'] == '')
                                                echo '<img src="https://i.ytimg.com/vi/'.$resource['Attach'].'/hqdefault.jpg" alt="" />';
                                            else
                                                echo '<img src="'.base_url('assets/images/thumbnails/'.$resource['Thumbnail']).'" alt="" />';
                                        ?>  
                                            <div class="portfolio-hover justify-content-end d-flex flex-column">
                                                <div class="bg-white padding-30px-lr padding-15px-tb w-100 d-flex align-items-center align-self-end text-left border-radius-3px xl-padding-20px-lr">
                                                    <div class="mr-auto">
                                                        <div class="text-medium-gray alt-font margin-5px-top text-small text-uppercase">Tutorial</div>
                                                        <div class="font-weight-500 alt-font text-extra-dark-gray text-uppercase"><?php echo $resource['Title'];?></div>
                                                    </div>
                                                    <div class="ml-auto"><i class="line-icon-Arrow-OutRight icon-extra-medium text-extra-dark-gray  position-relative top-3px"></i></div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>                                                             
                            <?php
                            }                            
                            ?>                                                     
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section class="p-0">            
            
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
                            <div>
                            <?php                                
                                $emails = explode(",", $Contact[2]['Value']);
                                foreach($emails as $email) 
                                    echo '<i class="feather icon-feather-mail icon-very-small margin-10px-right text-white"></i><a href="mailto:'.$email.'" class="text-golden-hover">' . trim($email) . '</a><br>';
                            ?>
                            </div>
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
                            <a href="<?php echo base_url();?>" class="footer-logo"><img src="<?php echo base_url('assets/images/logo.svg');?>"></a>
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