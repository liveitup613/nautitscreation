<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Nauti T's Creation | Contact Us</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="description" content="It's NOT just jelly, it's a CREATION">
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
            <nav class="navbar navbar-expand-lg navbar-dark bg-transparent header-light fixed-top border-color-black-transparent header-reverse-scroll">
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
                                <li class="nav-item dropdown megamenu">
                                    <a href="<?php echo base_url('faq');?>" class="nav-link text-uppercase">FAQ</a>
                                </li>
                                <li class="nav-item dropdown megamenu active">
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
        <section class="" style="background-image: url('<?php echo base_url('assets/images/Contact-Us-Banner.png');?>'); background-size: cover;">            
            <div class="container">
                <div class="d-flex flex-column flex-md-row justify-content-center extra-small-screen align-items-end"> 
                    <div class="w-100 w-md-50 page-title-extra-small">                        
                    </div>                                       
                </div>
            </div>
        </section>
        <!-- end page title --> 
        <!-- start section -->
        <section class="bg-light-cream">
            <div class="container">
                <div class="row align-items-begin">
                    <div class="col-12 col-lg-5 col-md-4 sm-margin-30px-bottom">
                        <h5 class="alt-font w-70 text-gradient-orange-pink font-weight-900 mb-0 lg-w-65 md-w-100">How can we help you today?</h5>
                    </div>
                    <div class="col-12 col-lg-7 col-md-8">
                        <div class="row">
                            <div class="col-12 col-sm-6 xs-margin-30px-bottom"> 
                                <span class="alt-font d-block text-extra-dark-gray font-weight-500 margin-10px-bottom text-extra-large">Location</span>
                                <p class="w-80 margin-5px-bottom lg-w-90 text-black"><?php echo $Contact[0]['Value'];?></p>
                                <span class="d-block margin-10px-bottom text-black"><span class="font-weight-600">Phone:</span><br><?php echo $Contact[1]['Value'];?></span>                                
                                <span class="d-block margin-10px-bottom text-black"><span class="font-weight-600">Email:</span><br>
                                <?php 
                                    $emails = explode(",", $Contact[2]['Value']);
                                    foreach($emails as $email) 
                                        echo '<a href="mailto:'.$email.'" class="text-golden-hover text-black">' . trim($email) . '</a><br>';
                                ?>
                                </span>                                
                            </div>
                            <div class="col-12 col-sm-6">
                                <span class="alt-font d-block text-extra-dark-gray font-weight-500 margin-10px-bottom text-extra-large">Hours</span>
                                <ul class="text-black margin-20px-left">
                                    <?php
                                        foreach ($Hour as $hour) {
                                            echo '<li><span class="font-weight-600">'. $hour['Name'] . '</span>. '. $hour['Value'] .'</li>';
                                        }
                                    ?>
                                </ul>                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->        
        <!-- start section -->
        <section class="big-section wow animate__fadeIn parallax" style="background-image: url('<?php echo base_url('assets/images/contact-form.jpg');?>');">
            <div class="opacity-extra-medium-2 bg-light-cream" style="opacity: 0.8;"></div>
            <div class="container">
                <div class="row align-items-end justify-content-center">
                    <div class="col-12 offset-lg-2 col-lg-6 col-md-8 md-margin-50px-bottom">   
                        <h4 class="alt-font text-black font-weight-600">Stay in the Jam</h4>
                        <form action="email-templates/contact-form.php" method="post" class="alt-font text-extra-dark-gray">
                            <input class="input-border-bottom border-color-extra-dark-gray bg-transparent placeholder-dark large-input px-0 margin-25px-bottom border-radius-0px required" type="text" name="name" placeholder="Your name" />
                            <input class="input-border-bottom border-color-extra-dark-gray bg-transparent placeholder-dark large-input px-0 margin-25px-bottom border-radius-0px required" type="email" name="email" placeholder="Your email address" />
                            <input class="input-border-bottom border-color-extra-dark-gray bg-transparent placeholder-dark large-input px-0 margin-25px-bottom border-radius-0px" type="tel" name="phone" placeholder="Mobile no" />
                            <textarea class="input-border-bottom border-color-extra-dark-gray bg-transparent placeholder-dark large-input px-0 margin-35px-bottom border-radius-0px" name="comment" rows="5" placeholder="How can we help you?"></textarea>
                            <input type="hidden" name="redirect" value="">
                            <button class="btn btn-medium btn-dark-gray mb-0 submit" type="submit">send message</button>
                            <div class="form-results d-none"></div>
                        </form>                     
                    </div>
                    <div class="col-12 col-lg-4 col-md-4">
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start map section -->
        <section class="no-padding-tb wow animate__fadeIn">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-0">
                        <div class="map-style-3 h-800px xs-h-300px">                            
                            <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3535.000196072372!2d-97.22324683454617!3d27.62451058282632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8668fbcb41be7b13%3A0x92e7a5353e19a9d2!2s14254%20S%20Padre%20Island%20Dr%2C%20Corpus%20Christi%2C%20TX%2078418%2C%20USA!5e0!3m2!1sen!2s!4v1625238540329!5m2!1sen!2s"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end map section -->        
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
                            <a href="<?php echo base_url();?>" class="footer-logo"><img src="<?php echo base_url('assets/images/logo.svg');?>" alt="" style="filter: invert(100%);"></a>
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