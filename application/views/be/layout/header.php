<div class="page-header">
    <!-- BEGIN HEADER TOP -->
    <div class="page-header-top">
        <div class="container">
            <!-- BEGIN LOGO -->
            <div class="page-logo" style='z-index: 1000;'>
                <a href="<?php echo base_url('');?>">                            
                    <img src="<?php echo base_url('assets/images/logo.svg');?>" alt="logo" class="logo-default" style='width: 55px; margin-top: 10px;'>
                </a>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler"></a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">                                                        
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="<?php echo base_url('admin/logout');?>" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" class="img-circle" src="<?php echo base_url('assets/layouts/global/img/avatar.jpg');?>">
                            <span class="username username-hide-mobile">Tisha Gavlik</span>
                        </a>                                
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                    <li class="dropdown-extended quick-sidebar-toggler">    
                        <a href="<?php echo base_url('admin/logout');?>" style="padding: 0px; font-size: 20px; color: #8ea3b6;">                   
                            <i class="icon-logout"></i>
                        </a>
                    </li>
                    <!-- END QUICK SIDEBAR TOGGLER -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- END HEADER TOP -->
    <!-- BEGIN HEADER MENU -->
    <div class="page-header-menu">
        <div class="container">                    
            <!-- BEGIN MEGA MENU -->
            <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
            <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->            
            <div class="hor-menu">                
                <ul class="nav navbar-nav">
                    <li class="menu-dropdown classic-menu-dropdown <?php echo ($parent == 'home' ? 'active' : '');?>">
                        <a href="javascript:;"> Home
                            <span class="arrow"></span>
                        </a>
                        <ul class="dropdown-menu pull-left">
                            <li class="<?php echo ($current == 'GuestBooks' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/home/guestbook');?>" class="nav-link">GuestBooks</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown <?php echo ($parent == 'about-us' ? 'active' : '');?>">
                        <a href="javascript:;"> About Us </a> 
                        <ul class="dropdown-menu pull-left"> 
                            <li class="<?php echo ($current == 'Our Journey' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/about-us/our-journey');?>" class="nav-link">Our Journey</a>
                            </li>                         
                            <li class="<?php echo ($current == 'Local Store' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/about-us/local-store');?>" class="nav-link">Local Store</a>
                            </li>
                            <li class="<?php echo ($current == 'Ingredient Resources' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/about-us/ingredient-resources');?>" class="nav-link">Ingredient Resources</a>
                            </li>                                    
                        </ul>                               
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown <?php echo ($parent == 'Media' ? 'active' : '');?>">
                        <a href="javascript:;"> Media </a>
                        <ul class="dropdown-menu pull-left">                            
                            <li class="<?php echo ($current == 'Photos' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/media/photos');?>" class="nav-link">Photos</a>
                            </li>
                            <li class="<?php echo ($current == 'Videos' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/media/videos');?>" class="nav-link">Videos</a>
                            </li>
                        </ul>  
                    </li>   
                    <li class="menu-dropdown classic-menu-dropdown <?php echo ($parent == 'Explore' ? 'active' : '');?>">
                        <a href="javascript:;"> Explore </a>
                        <ul class="dropdown-menu pull-left">                            
                            <li class="<?php echo ($current == 'Recipe' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/explore/recipe');?>" class="nav-link">Recipe</a>
                            </li>
                            <li class="<?php echo ($current == 'Tutorial' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/explore/tutorial');?>" class="nav-link">Tutorial</a>
                            </li>
                        </ul>  
                    </li>                 
                    <li class="menu-dropdown classic-menu-dropdown <?php echo ($parent == 'Faq' ? 'active' : '');?>">
                        <a href="<?php echo base_url('admin/faq');?>">FAQ</a>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown <?php echo ($parent == 'contact-us' ? 'active' : '');?>">
                        <a href="<?php echo base_url('admin/contact-us');?>">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- END MEGA MENU -->
        </div>
    </div>
    <!-- END HEADER MENU -->
</div>