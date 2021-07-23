<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Nauti T's Creation | FAQ</title>
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
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-transparent header-light fixed-top header-reverse-scroll">
                <div class="container-lg nav-header-container">
                    <div class="col-auto col-sm-6 col-lg-2 mr-auto pl-lg-0">
                        <a class="navbar-brand" href="<?php echo base_url();?>">
                            <img src="<?php echo base_url('assets/images/logo.svg');?>" class="default-logo" alt="">
                            <img src="<?php echo base_url('assets/images/logo.svg');?>" class="alt-logo" alt="">
                            <img src="<?php echo base_url('assets/images/logo.svg');?>" class="mobile-logo" alt="">
                        </a>
                    </div>
                    <div class="col-auto menu-order px-lg-0">
                        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
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
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="#" class="nav-link text-uppercase">Explore</a>  
                                    <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown"><a href="<?php echo base_url('recipe');?>">Recipe</a></li>
                                        <li class="dropdown"><a href="<?php echo base_url('tutorial');?>">Tutorial</a></li>
                                    </ul>                             
                                </li>
                                <li class="nav-item dropdown megamenu active">
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
        </header>
        <!-- end header -->
        <!-- start page title -->
        <section class="parallax half-section" data-parallax-background-ratio="0.5" style="background-image:url('<?php echo base_url('assets/images/faq_background.jpg');?>');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-7 col-md-9 d-flex flex-column justify-content-center align-items-center small-screen">
                        <div class="page-title-large text-center margin-40px-bottom">
                            <h1 class="alt-font text-white font-weight-500 letter-spacing-minus-1 mb-0">How can we help you?</h1>
                        </div>
                        <div class="newsletter-style-02 position-relative w-100">
                            <form action="<?php echo base_url('faq');?>" method="get">
                                <input class="search-input1 large-input border-radius-4px m-0 border-0" name="query" placeholder="Type keywords to find answers" type="text" value='<?php echo $Question;?>'>
                                <button type="submit" class="btn btn-medium text-extra-dark-gray border-left border-0 border-color-extra-medium-gray font-weight-600 py-0 search-button1"><i class="fas fa-search text-fast-blue margin-10px-right"></i>search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->        
        <!-- start section -->
        <section class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center margin-7-rem-bottom">
                        <span class="d-block alt-font margin-5px-bottom">Most common questions</span>
                        <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Frequently asked questions</h5>
                    </div>
                    <div class="col-12 col-lg-12 md-margin-50px-bottom sm-margin-30px-bottom wow animate__fadeIn">
                        <div class="panel-group accordion-event accordion-style-03" id="accordion2" data-active-icon="fa-angle-down" data-inactive-icon="fa-angle-right">                                                    
                            <?php
                            $count = 0;
                            foreach ($faqs as $row) {
                                $count++;
                                ?>
                            <!-- start accordion item -->
                            <div class="panel bg-white box-shadow-small border-radius-5px">
                                <div class="panel-heading active-accordion">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne" aria-expanded="false">
                                        <div class="panel-title">
                                            <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500"><?php echo $row['Name'];?></span>
                                            <i class="indicator fas fa-angle-down text-fast-blue icon-extra-small"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse <?php echo ($count == 1 ? 'show' : '');?>" data-parent="#accordion2">
                                    <div class="panel-body"><?php echo $row['Value'];?></div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                                <?php
                            }
                            ?>
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