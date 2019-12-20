<footer>
    <!--WIDGET WRAP START-->
    <div class="widget_wrap them_overlay">
        <!--CONTAINER START-->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget_logo">
                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>uploads/settings/logo.png" alt=""></a>
                        <p>There are many variations of passages of Lorem Ipsum availableThere are many variations of passages of Lorem Ipsum available...</p>
                        <ul class="widget_call_info">
                            <li><a href="#"><i class="fa fa-map-marker"></i>505 North State Street,  Apartment #4, Chicago</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i>+92 - 334 - 2797084</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i>support@islamicmadrasa.com</a></li>
                        </ul>
                        
                        <ul class="widget_social_icon">
                        <?php
                        $ctr=0;
                        foreach ($social_icons as $key) {
                        $ctr++;
                        ?>
                        <li><a class="hvr-ripple-out" href="<?php echo $key->url ?>"><i class="<?php echo $key->class ?>"></i></a></li> 
                        <?php } ?>
                        </ul>
 

<!-- Alert!! when you design footer menu then uncomment this footer menu code & pest in your footer menu code (thank you)-->

                        <!--start footer menu -->

<!-- <ul class="widget_social_icon"> -->
<!-- <?php function footer_menu($footer_menus){ ?>
   <?php foreach($footer_menus as $menu){ ?>
       <li><a href="<?php echo base_url(); echo $menu->slug;  ?>"><?php echo $menu->name; ?></a> 
      <?php  if(!empty($menu->sub)){ ?>
            <ul>
       <?php footer_sub_menu($menu->sub); ?>
            </ul>
      <?php  } ?>
   <?php } ?>
 <?php } ?> -->

 <!-- <?php function footer_sub_menu($sub_menu){ ?>
   <?php foreach($sub_menu as $menu){ ?>
<li><a href="<?php echo base_url(); echo $menu->slug; ?>"><?php echo $menu->name; ?></a></li>
     <?php   if(!empty($menu->sub)){ ?>
         <?php   footer_sub_menu($menu->sub); ?> -->
            <!-- </ul> -->
            <!-- </li>
       <?php }       ?>
<?php    } ?>
<?php } ?>
<?php footer_menu($footer_menus); ?>

                        </ul> -->

                        <!-- end footer menu -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget_event">
                        <h4 class="widget_title">Latest Events</h4>
                        <ul class="kode_calender_detail">
                            <li>
                                <div class="kode_calender_list">
                                    <span>23 <i>April</i></span>
                                    <div class="kode_event_text">
                                        <h6><a href="#">Awarness Of Islam EventAt Monday</a></h6>
                                        <p>Sunday <span>09 : 45 a.m</span> to <span>9:30 p.m</span></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="kode_calender_list">
                                    <span>23 <i>April</i></span>
                                    <div class="kode_event_text">
                                        <h6><a href="#">Awarness Of Islam EventAt Monday</a></h6>
                                        <p>Sunday <span>09 : 45 a.m</span> to <span>9:30 p.m</span></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="kode_calender_list">
                                    <span>23 <i>April</i></span>
                                    <div class="kode_event_text">
                                        <h6><a href="#">Awarness Of Islam EventAt Monday</a></h6>
                                        <p>Sunday <span>09 : 45 a.m</span> to <span>9:30 p.m</span></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget_event">
                        <h4 class="widget_title">Get In Touch</h4>
                        <form method="post" class="comment-form">
                            <div class="kode-left-comment-sec">
                                <div class="kf_commet_field">
                                    <input placeholder="Your Name" name="author" type="text" value="" data-default="Name*" size="30" required>
                                </div>
                                <div class="kf_commet_field">
                                    <input placeholder="Your Email" name="email" type="text" value="" data-default="Email*" size="30" required>
                                </div>
                            </div>
                            <div class="kode_textarea">
                                <textarea placeholder="Your Message" name="comment"></textarea>
                            </div>
                            <button name="submit" type="submit" class="medium_btn bg_transparent border btn_hover">Submit Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--CONTAINER END-->
    </div>
    <!--WIDGET WRAP END-->
    <!--WIDGET COPYRIGHT START-->
    <div class="widget_copyright">
        <!--CONTAINER START-->
        <div class="container">
            <div class="copyright_text">
                <p>Copyright© 2017. All Rights <a href="#">Reserved alsalam.com</a></p>
                <a id="child-topbtn" class="top_btn hvr-wobble-vertical" href="#"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
            </div>
        </div>
        <!--CONTAINER END-->
    </div>
    <!--WIDGET COPYRIGHT END-->
</footer>
</div>
<!--WRAPER END-->





<!--JavaScript-->
<script src="<?php echo $theme_url;?>assets/js/jquery.js"></script>
<script src="<?php echo $theme_url;?>assets/js/bootstrap.js"></script>
<script src="<?php echo $theme_url;?>assets/js/slick.min.js"></script>
<script src="<?php echo $theme_url;?>assets/js/wow.min.js"></script>
<script src="<?php echo $theme_url;?>assets/js/jquery.bxslider.min.js"></script>
<script src="<?php echo $theme_url;?>assets/js/jQuery-plugin-progressbar.js"></script>
<script src="<?php echo $theme_url;?>assets/js/chosen.jquery.min.js"></script>
<script src="<?php echo $theme_url;?>assets/js/modernizr.custom.js"></script>
<script src="<?php echo $theme_url;?>assets/js/jquery.dlmenu.js"></script>
<script src="<?php echo $theme_url;?>assets/js/musicplayer.js"></script>
<script src="<?php echo $theme_url;?>assets/js/jquery.prettyphoto.js"></script>
<script src="<?php echo $theme_url;?>assets/js/jquery.downCount.js"></script>
<script src="<?php echo $theme_url;?>assets/js/waypoints-min.js"></script>
<script src="<?php echo $theme_url;?>assets/js/custom.js"></script>





</body>
</html>