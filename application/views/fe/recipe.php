<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Nauti T's Creation | Recipe</title>
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
                                        <li class="dropdown active"><a href="<?php echo base_url('recipe');?>">Recipe</a></li>
                                        <li class="dropdown"><a href="<?php echo base_url('tutorial');?>">Tutorial</a></li>
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
        <section class="padding-nine-lr bg-light-gray parallax " data-parallax-background-ratio="0.5" style="background-image:url('<?php echo base_url('assets/images/recipe_home_background.png');?>');">
            <div class="container">
                <div class="row align-items-stretch justify-content-center extra-small-screen">
                    <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">                        
                        <h2 class="text-extra-dark-gray alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Recipes</h2>
                    </div>
                </div>
            </div>

            <div class="container-fluid margin-80px-top">
                <div class="row">
                    <div class="col-12 blog-content xs-no-padding-lr">
                        <ul class="blog-modern blog-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-double-extra-large">
                            <li class="grid-sizer"></li>   
                            <?php
                            foreach ($resources as $row) {
                                ?>
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn">
                                <div class="blog-post" style='box-shadow: 0 10px 20px rgba(0,0,0,.6);'>
                                    <a href="<?php echo base_url('recipe/'.$row['ID']);?>">
                                    <div class="blog-post-image bg-gradient-fast-blue-purple" style="background-image: url('<?php echo base_url('assets/images/recipes/'.$row['Attach']);?>'); min-height: 250px; background-size: cover;">
                                    </div>                                    
                                    <div class="post-details bg-white text-center padding-3-rem-all xl-padding-2-rem-all">                                        
                                        <p class="alt-font text-extra-dark-gray text-extra-dark-gray-hover text-large line-height-26px d-block margin-20px-bottom"><?php echo $row['Title'];?></p>                                        
                                    </div>
                                    </a>
                                </div>
                            </li>
                            <!-- end blog item -->
                                <?php
                            }
                            ?>                                                                         
                        </ul>                       
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start footer -->
        <footer class="footer-dark bg-slate-blue">
            <div class="footer-top padding-five-tb lg-padding-eight-tb md-padding-50px-tb">
                <div class="container">
                    <div class="row">
                        <!-- start footer column -->
                        <div class="col-12 col-lg-3 col-sm-6 md-margin-40px-bottom xs-margin-25px-bottom">
                            <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Company</span>
                            <ul>
                                <li><a href="<?php echo base_url('about-me');?>">About</a></li>
                                <li><a href="https://nauti-ts-creations.square.site/s/shop">Shop</a></li>
                                <li><a href="<?php echo base_url('media');?>">Media</a></li>
                                <li><a href="<?php echo base_url('contact-us');?>">Contact Us</a></li>
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
                            <p>Copyright&copy; Nauti T's Creation LLC. | All rights reserved</p>
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