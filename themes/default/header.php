<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="<?php echo base_url(); ?>uploads/settings/favicon.png" type="image/x-icon" rel="icon">
        <script> var baseurl = "<?php echo base_url(); ?>"; </script>
        <title>AlSalam - The Path Of Peace</title>
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?php echo base_url(); ?>">
        <meta property="og:description" content="">
        <meta property="fb:app_id" content="">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:image:width" content="300">
        <meta property="og:image:height" content="300">
        <meta property="og:image" content="">
        <!--BOOTSTRAP CSS-->
        <link href="<?php echo $theme_url;?>assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo $theme_url;?>assets/css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo $theme_url;?>assets/css/slick.css" rel="stylesheet">
        <link href="<?php echo $theme_url;?>assets/css/jquery.bxslider.css" rel="stylesheet">
        <link href="<?php echo $theme_url;?>assets/css/audio.css" rel="stylesheet">
        <link href="<?php echo $theme_url;?>assets/css/prettyphoto.css" rel="stylesheet">
        <link href="<?php echo $theme_url;?>assets/css/demo-page.css" rel="stylesheet">
        <link href="<?php echo $theme_url;?>assets/css/component.css" rel="stylesheet">
        <link href="<?php echo $theme_url;?>assets/css/hover.css" rel="stylesheet">
        <link href="<?php echo $theme_url;?>assets/css/jQuery-plugin-progressbar.css" rel="stylesheet">
        <link href="<?php echo $theme_url;?>assets/css/chosen.min.css" rel="stylesheet">
        <link href="<?php echo $theme_url;?>assets/css/animate.css" rel="stylesheet">
        <link href="<?php echo $theme_url;?>assets/css/slick-theme.css" rel="stylesheet">
        <link href="<?php echo $theme_url;?>assets/css/typography.css" rel="stylesheet">
        <link href="<?php echo $theme_url;?>assets/css/shotcode.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $theme_url;?>assets/style.css">
        <link rel="stylesheet" href="<?php echo $theme_url;?>assets/svg-icon.css">
        <link rel="stylesheet" href="<?php echo $theme_url;?>assets/css/color.css">
        <link rel="stylesheet" href="<?php echo $theme_url;?>assets/css/responsive.css">
    </head>
    <body>
        <!--WRAPER START-->
        <div class="wraper">
        <header>
            <div class="kode_top2_wrap">
                <!--CONTAINER START-->
                <div class="container">
                    <!--KODE TOP2 ROW START-->
                    <div class="kode_top2_row">
                        <!--KODE TOP2 INFO START-->
                        <div class="kode_top2_info">
                            <ul>
                                <li>
                                    <span><i class="fa fa-envelope"></i>Email Address</span>
                                    <a href="#">info@alsalampk.com</a>
                                </li>
                                <li>
                                    <span><i class="fa icon-technology"></i>Contact No</span>
                                    <a href="#">+92 - 331 - 1 442244</a>
                                </li>
                                <li>
                                    <span><i class="fa fa-calendar"></i>Opening Timings</span>
                                    <a href="#">Mon - Sat  11:00 A.M - 09:00 P.M</a>
                                </li>
                            </ul>
                        </div>
                        <!--KODE TOP2 INFO END-->
                        <!--KODE TOP2 ICON START-->
                        <div class="kode_top2_icon">
                            <ul>
                                <li><a href="#"><i class="fa icon-commerce"></i><span>2</span></a></li>
                                <li>
                                    <div class="kode_search_overlay">
                                        <div class="cp-search-holder">
                                            <button type="button" id="trigger-overlay"><i aria-hidden="true" class="fa fa-search"></i></button>
                                        </div>
                                        <div id="overlay" class="overlay overlay-contentscale">
                                            <button class="overlay-close" type="button">Close</button>
                                            <!--Search Bar Inner Start-->
                                            <div class="cp-search-inner">
                                                <form class="kode-search kode_search-form" method="get" id="searchform">
                                                    <input type="text" name="s" id="s" autocomplete="off" data-default="" />
                                                    <button class="submit" type="submit"><i class="fa fa-search"></i></button>
                                                </form>
                                            </div>
                                            <!--Search Bar Inner End-->
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown">
                                        <div id="dLabel" data-toggle="dropdown">
                                            <img src="<?php $themeurl; ?>assets/images/drop-img.png" alt="">Eng
                                            <span class="fa fa-angle-down"></span>
                                        </div>
                                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                                            <li><a href="#"><img src="<?php $themeurl; ?>assets/images/drop-img.png" alt="">Eng</a></li>
                                            <li><a href="#"><img src="<?php $themeurl; ?>assets/images/drop-img.png" alt="">urdu</a></li>
                                            <li><a href="#"><img src="<?php $themeurl; ?>assets/images/drop-img.png" alt="">Arabic</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <div class="donate_btn">
                                <!-- Button trigger modal -->
                                <div class="medium_btn theme_color_bg btn_hover2" data-toggle="modal" data-target="#myModal">
                                    Donate Us
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="modal-body">
                                                <!--KODE DONATE DES START-->
                                                <div class="kode_donate_des">
                                                    <div class="kode_doantion_amount">
                                                        <h4>Donate Now</h4>
                                                        <div class="kode_amount_list">
                                                            <span>$10</span>
                                                            <span>$25</span>
                                                            <span>$50</span>
                                                            <span>$30</span>
                                                        </div>
                                                        <div class="kf_commet_field">
                                                            <input placeholder="Other Amount" name="email" type="text" value="" data-default="Email*" size="30" required>
                                                        </div>
                                                    </div>
                                                    <!--KODE DONATION ROW START-->
                                                    <div class="kode_donation_row">
                                                        <h4>Billing Information</h4>
                                                        <!--kode AUTHOR WRAP COMMENTS FORM START -->
                                                        <form method="post" class="kode_comment">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="kf_commet_field">
                                                                        <input placeholder="Enter Name" name="author" type="text" value="" data-default="Name*" size="30" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="kf_commet_field">
                                                                        <input placeholder="Your Email" name="author" type="text" value="" data-default="Name*" size="30" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="kf_commet_field">
                                                                        <input placeholder="Your Address" name="author" type="text" value="" data-default="Name*" size="30" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="kode_donation_item">
                                                                        <select class="chosen-select">
                                                                            <option value="Select Course Name">Your Country</option>
                                                                            <option value="saab">Afghanistan</option>
                                                                            <option value="mercedes">Albania</option>
                                                                            <option value="audi">Algeria</option>
                                                                            <option value="mercedes">Albania</option>
                                                                            <option value="audi">Algeria</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="kode_donation_item">
                                                                        <select class="chosen-select">
                                                                            <option value="Select Course Name">Your City</option>
                                                                            <option value="saab">Karachi</option>
                                                                            <option value="mercedes">Rawalpindi</option>
                                                                            <option value="audi">Punjab</option>
                                                                            <option value="mercedes">Faisalabad</option>
                                                                            <option value="audi">Sindh</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="kf_commet_field">
                                                                        <input placeholder="Your Mobile" name="author" type="text" value="" data-default="Name*" size="30" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="kode_payment_list">
                                                                        <h5>Choose Your Payment Method</h5>
                                                                        <ul class="radio_points">
                                                                            <li>
                                                                                <div class="checkbox_radio">
                                                                                    <input type="radio" name="one" id="radio1">
                                                                                    <span></span>
                                                                                    <label for="radio1">Pay Pal</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="checkbox_radio">
                                                                                    <input type="radio" name="one" id="radio2">
                                                                                    <span></span>
                                                                                    <label for="radio2">Stripe</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="checkbox_radio">
                                                                                    <input type="radio" name="one" id="radio3">
                                                                                    <span></span>
                                                                                    <label for="radio3">Credit Card</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="checkbox_radio">
                                                                                    <input type="radio" name="one" id="radio4">
                                                                                    <span></span>
                                                                                    <label for="radio4">Other Source</label>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <p class="form-submit"><button class="medium_btn theme_color_bg">Donate Now</button></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <!--kode AUTHOR WRAP COMMENTS FORM END -->
                                                    </div>
                                                    <!--KODE DONATION ROW END-->
                                                </div>
                                                <!--KODE DONATE DES END-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--KODE TOP2 ICON END-->
                    </div>
                    <!--KODE TOP2 ROW END-->
                </div>
                <!--CONTAINER END-->
            </div>
            <!--KODE TOP2 WRAP END-->
            <!--KODE TOP LOGO WRAP START-->
            <div class="kode_top_logo_wrap them_overlay">
                <!--CONTAINER START-->
                <div class="container">
                    <div class="top_logo" style="max-width: 270px;">
                        <h1><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>uploads/settings/logo.png" alt="kodeforest"></a></h1>
                    </div>
                    <div class="top_time_circle">
                        <ul>
                            <li><a href="#">Fajr</a><span>5:30</span></li>
                            <li><a href="#">Dhur</a><span>1:30</span></li>
                            <li><a href="#">Asar</a><span>5:00</span></li>
                            <li><a href="#">Magrib</a><span>6:30</span></li>
                            <li><a href="#">iSHA</a><span>8:00</span></li>
                        </ul>
                    </div>
                </div>
                <!--CONTAINER END-->
            </div>
            <!--KODE TOP LOGO WRAP END-->
            <!--KODE NAVIGATION WRAP START-->
            <div class="kode_navigation_wrap">
                <!--CONTAINER START-->
                <div class="container">
                    <div class="navigation">
                        <ul>
                            <li>
                                <a class="active" href="#">Home</a>
                                <ul class="kode">
                                    <li><a href="index.html">DEFULT HOME</a></li>
                                    <li><a href="index-1.html">Home page 02</a></li>
                                </ul>
                            </li>

    <!-- menu code start -->
<?php function fetch_menuu($header_menus){ ?>
   <?php foreach($header_menus as $menu){ ?>
       <li><a href="<?php echo base_url(); echo $menu->slug;  ?>"><?php echo $menu->name; ?></a> 
      <?php  if(!empty($menu->sub)){ ?>
            <ul class="kode">
       <?php fetch_sub_menuu($menu->sub); ?>
            </ul>
      <?php  } ?>
   <?php } ?>
 <?php } ?>

 <?php function fetch_sub_menuu($sub_menu){ ?>
   <?php foreach($sub_menu as $menu){ ?>
<li><a href="<?php echo base_url(); echo $menu->slug; ?>"><?php echo $menu->name; ?></a></li>
     <?php   if(!empty($menu->sub)){ ?>
         <?php   fetch_sub_menuu($menu->sub); ?>
            <!-- </ul> -->
            </li>
       <?php }       ?>
<?php    } ?>
<?php } ?>
<?php fetch_menuu($header_menus); ?>
<!-- menu code end -->


                            <!-- <li><a href="about-us.html">About Us</a></li>
                            <li>
                                <a href="#">Services</a>
                                <ul class="kode">
                                    <li><a href="service.html">service</a></li>
                                    <li><a href="service-01.html">service 01</a></li>
                                    <li><a href="service02.html">service 02</a></li>
                                    <li><a href="service-detail.html">service detail</a></li>
                                    <li><a href="service-sidebar.html">service sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Projects</a>
                                <ul class="kode">
                                    <li><a href="project.html">project</a></li>
                                    <li><a href="project-01.html">project 01</a></li>
                                    <li><a href="project-list.html">project list</a></li>
                                    <li><a href="project-detail.html">project detail</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">blog</a>
                                <ul class="kode">
                                    <li><a href="blog.html">blog</a></li>
                                    <li><a href="blog01.html">blog 01</a></li>
                                    <li><a href="blog-detail.html">blog detail</a></li>
                                    <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">portfolio</a>
                                <ul class="kode">
                                    <li><a href="portfolio.html">portfolio</a></li>
                                    <li><a href="portfolio-01.html">portfolio 01</a></li>
                                    <li><a href="portfolio-02.html">portfolio 02</a></li>
                                    <li><a href="portfolio-detail.html">portfolio detail</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul class="kode">
                                    <li><a href="event.html">event</a></li>
                                    <li><a href="404.html">404 page</a></li>
                                    <li><a href="shop.html">shop page</a></li>
                                    <li><a href="coming-soon.html">coming soon</a></li>
                                    <li><a href="event-detail.html">event detail</a></li>
                                    <li><a href="event-sidebar.html">event sidebar</a></li>
                                    <li><a href="team-detail.html">team detail</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">Contact</a></li> -->
                        </ul>
                        <!--DL Menu Start-->
                        <div id="kode-responsive-navigation" class="dl-menuwrapper">
                            <button class="dl-trigger">Open Menu</button>
                            <ul class="dl-menu">
                                <li>
                                    <a class="active" href="#">Home</a>
                                    <ul class="dl-submenu">
                                        <li><a href="index.html">DEFULT HOME</a></li>
                                        <li><a href="index-1.html">Home page 02</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item kode-parent-menu"><a href="about-us.html">About Us</a></li>
                                <li class="menu-item kode-parent-menu">
                                    <a href="#">Services</a>
                                    <ul class="dl-submenu">
                                        <li><a href="service.html">service</a></li>
                                        <li><a href="service-01.html">service 01</a></li>
                                        <li><a href="service02.html">service 02</a></li>
                                        <li><a href="service-detail.html">service detail</a></li>
                                        <li><a href="service-sidebar.html">service sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item kode-parent-menu">
                                    <a href="#">Projects</a>
                                    <ul class="dl-submenu">
                                        <li><a href="project.html">project</a></li>
                                        <li><a href="project-01.html">project 01</a></li>
                                        <li><a href="project-list.html">project list</a></li>
                                        <li><a href="project-detail.html">project detail</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item kode-parent-menu">
                                    <a href="#">blog</a>
                                    <ul class="dl-submenu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog01.html">blog 01</a></li>
                                        <li><a href="blog-detail.html">blog detail</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item kode-parent-menu">
                                    <a href="#">portfolio</a>
                                    <ul class="dl-submenu">
                                        <li><a href="portfolio.html">portfolio</a></li>
                                        <li><a href="portfolio-01.html">portfolio 01</a></li>
                                        <li><a href="portfolio-02.html">portfolio 02</a></li>
                                        <li><a href="portfolio-detail.html">portfolio detail</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item kode-parent-menu">
                                    <a href="#">Pages</a>
                                    <ul class="dl-submenu">
                                        <li><a href="event.html">event</a></li>
                                        <li><a href="404.html">404 page</a></li>
                                        <li><a href="shop.html">shop page</a></li>
                                        <li><a href="coming-soon.html">coming soon</a></li>
                                        <li><a href="event-detail.html">event detail</a></li>
                                        <li><a href="event-sidebar.html">event sidebar</a></li>
                                        <li><a href="team-detail.html">team detail</a></li>
                                    </ul>
                                </li>
                                <?php if (isUserLogin() && $page = "home"): ?>
                                <li class="margin_top10"><a href="<?php echo base_url(); ?>airbnb/logout" class="rm_text_deco"></a></li>
                                <?php if (isUserLogin() && $page != "home"): ?>
                                <form method="GET" action="<?php echo base_url()?>Listing/listing_search">
                                    <div class="pos_rel pull-left search_sec">
                                        <select class="form-control" id="here" name="search">
                                        </select>
                                    </div>
                                    <input type="submit" value="submit" class="btn btn-light" style="margin-top: 24px;margin-left: 14px;">
                                </form>
                                <?php endif; ?>
                                <?php else: ?>
                                <li><a href="<?=base_url('')?>register">Sign up</a>
                                </li>
                                <li><a href="<?=base_url('');?>login">Log in</a>
                                </li>
                                <?php endif; ?>
                                <li><a href="contact-us.html">contact Us</a></li>
                            </ul>
                        </div>
                        <!--DL Menu END-->
                    </div>
                </div>
                <!--CONTAINER END-->
            </div>
            <!--KODE NAVIGATION WRAP END-->
        </header>