<!--KODE BANNER WRAP START-->
<div class="kode_banner_wrap">
    <ul class="bxslider">
        <li>
            <figure class="them_overlay">
                <img src="<?php echo base_url(); ?>uploads/slider/b1.jpg" alt="">
                <div class="kode_banner_text">
                    <div class="large_text">O Mankind</div>
                    <div class="mediume_text wow">Remeber the favor of <span>ALLAH</span> upon you</div>
                    <div class="small_text wow">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words...</div>
                    <div class="koed_banner_btn wow">
                        <a class="medium_btn border margin-right-1 btn_hover" href="#">Read More</a>
                        <a class="medium_btn border btn_hover" href="#">Contact Us</a>
                    </div>
                </div>
            </figure>
        </li>
        <li>
            <figure class="them_overlay">
                <img src="<?php echo base_url(); ?>uploads/slider/b2.jpg" alt="">
                <div class="kode_banner_text">
                    <div class="large_text">O Mankind</div>
                    <div class="mediume_text">Remeber the favor of <span>ALLAH</span> upon you</div>
                    <div class="small_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words...</div>
                    <div class="koed_banner_btn">
                        <a class="medium_btn border margin-right-1 btn_hover" href="#">Read More</a>
                        <a class="medium_btn border btn_hover" href="#">Contact Us</a>
                    </div>
                </div>
            </figure>
        </li>
        <li>
            <figure class="them_overlay">
                <img src="<?php echo base_url(); ?>uploads/slider/b3.jpg" alt="">
                <div class="kode_banner_text">
                    <div class="large_text">O Mankind</div>
                    <div class="mediume_text">Remeber the favor of <span>ALLAH</span> upon you</div>
                    <div class="small_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words...</div>
                    <div class="koed_banner_btn">
                        <a class="medium_btn border margin-right-1 btn_hover" href="#">Read More</a>
                        <a class="medium_btn border btn_hover" href="#">Contact Us</a>
                    </div>
                </div>
            </figure>
        </li>
    </ul>
    <div id="bx-pager" class="pager_link">
        <a data-slide-index="0" href=""><img src="<?php echo base_url(); ?>uploads/slider/b1.jpg" alt="" /></a>
        <a data-slide-index="1" href=""><img src="<?php echo base_url(); ?>uploads/slider/b2.jpg" alt="" /></a>
        <a data-slide-index="2" href=""><img src="<?php echo base_url(); ?>uploads/slider/b3.jpg" alt="" /></a>
    </div>
</div>
<!--KODE BANNER WRAP END-->
<!--KODE MOSQUES WRAP STRAT-->
<div class="kode_mosques_wrap">
    <!--CONTAINER STRAT-->
    <div class="container">
        <!--ROW STRAT-->
        <div class="row">
            <div class="col-md-6">
                
                <?php foreach ($about_us as $key ) { ?>
                <div class="kode_mosque_row">
                    <div class="kode_mosque_des">
                        <div class="kode_mosque_fig">
                            <figure class="them_overlay">
                                <img src="<?php echo base_url('uploads/about_us/'. $key->image1);?>" alt="" />
                                <figcaption>
                                    <h6><a href="<?php echo $key->url1; ?>"><?php echo $key->text1; ?></a></h6>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="kode_mosque_fig">
                            <figure class="them_overlay">
                                <img src="<?php echo base_url('uploads/about_us/'. $key->image2);?>" alt="" />
                                <figcaption>
                                    <h6><a href="<?php echo $key->url2; ?>"><?php echo $key->text2; ?></a></h6>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="kode_mosque_des">
                        <div class="kode_mosque_fig">
                            <figure class="them_overlay">
                                <img style="height: 386px; width: 265px;" src="<?php echo base_url('uploads/about_us/'. $key->image3);?>" alt="" />
                                <figcaption>
                                    <h6><a href="<?php echo $key->url3; ?>"><?php echo $key->text3; ?></a></h6>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
            <div class="col-md-6">
                <div class="kode_mosque_text">
                    <div class="section_hdg">
                        <a href="#"><img src="<?php $themeurl; ?>assets/images/hdg-img.png" alt=""></a>
                        <h3>About Us</h3>
                        <span><i class="fa icon-building"></i></span>
                    </div>
                    <?php foreach ($about_us as $key) { ?>
                    <div class="kode_mosque_item">
                        <p><?php echo $key->text; ?></p>
                        <ul class="kode_counter_mosque">
                            <li>
                                <span class="counter"><?php echo $key->madaris; ?></span>
                                <h6><a href="#">Madrasas</a></h6>
                            </li>
                            <li>
                                <span class="counter"><?php echo $key->mosques; ?></span>
                                <h6><a href="#">Mosques</a></h6>
                            </li>
                            <li>
                                <span class="counter"><?php echo $key->students; ?></span>
                                <h6><a href="#">Students</a></h6>
                            </li>
                            <li>
                                <span class="counter"><?php echo $key->imams; ?></span>
                                <h6><a href="#">Imams</a></h6>
                            </li>
                        </ul>
                        <div class="koed_banner_btn">
                            <a class="medium_btn border margin-right-1 btn_hover" href="#">Read More</a>
                            <a class="medium_btn border btn_hover" href="#">Join Us Now</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
        <!--ROW END-->
    </div>
    <!--CONTAINER END-->
</div>
<!--KODE MOSQUES WRAP END-->
<!--KODE PILLARS WRAP START-->
<div class="kode_pillars_wrap them_overlay">
    <!--CONTAINER START-->
    <div class="container">
        <!--SECTION HDG START-->
        <div class="section_hdg hdg_2">
            <a href="#"><img src="<?php $themeurl; ?>assets/images/hdg-img-2.png" alt=""></a>
            <h3>Pillars Of Islam</h3>
            <span><i class="fa icon-building"></i></span>
        </div>
        <!--SECTION HDG END-->
        <div class="kode_pillars_row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ul class="nav nav-tabs kode_pillars_item">
                        <li>
                            <a class="left_bottom hvr-ripple-out" href="#tab" data-toggle="tab">
                                <span><i class="fa icon-interface"></i></span>
                                <h6>Shahdah</h6>
                            </a>
                        </li>
                        <li>
                            <a class="left_center hvr-ripple-out" href="#tab1" data-toggle="tab">
                                <span><i class="fa icon-people-1"></i></span>
                                <h6>Salah</h6>
                            </a>
                        </li>
                        <li>
                            <a class="center hvr-ripple-out" href="#tab2" data-toggle="tab">
                                <span><i class="fa icon-money"></i></span>
                                <h6>Zakat</h6>
                            </a>
                        </li>
                        <li>
                            <a class="right_center hvr-ripple-out" href="#tab3" data-toggle="tab">
                                <span><i class="fa icon-monuments-1"></i></span>
                                <h6>Hajj</h6>
                            </a>
                        </li>
                        <li>
                            <a class="right_bottom hvr-ripple-out" href="#tab4" data-toggle="tab">
                                <span><i class="fa icon-book-1"></i></span>
                                <h6>Fasting</h6>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab">
                            <div class="kode_pillars_text">
                                <span><i class="fa icon-building"></i></span>
                                <h4>The Islamic Pillars</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority is have suffered alteration in some form...</p>
                            </div>
                        </div>
                        <div class="tab-pane fade in" id="tab1">
                            <div class="kode_pillars_text">
                                <span><i class="fa icon-people-1"></i></span>
                                <h4>Salah</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority is have suffered alteration in some form...</p>
                            </div>
                        </div>
                        <div class="tab-pane fade in" id="tab2">
                            <div class="kode_pillars_text">
                                <span><i class="fa icon-money"></i></span>
                                <h4>Zakat</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority is have suffered alteration in some form...</p>
                            </div>
                        </div>
                        <div class="tab-pane fade in" id="tab3">
                            <div class="kode_pillars_text">
                                <span><i class="fa icon-monuments-1"></i></span>
                                <h4>Hajj</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority is have suffered alteration in some form...</p>
                            </div>
                        </div>
                        <div class="tab-pane fade in" id="tab4">
                            <div class="kode_pillars_text">
                                <span><i class="fa icon-book-1"></i></span>
                                <h4>Fasting</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority is have suffered alteration in some form...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--CONTAINER END-->
</div>
<!--KODE PILLARS WRAP END-->
<!--KODE SERVICES WRAP START-->
<div class="kode_services_wrap">
    <!--CONTAINER START-->
    <div class="container">
        <!--SECTION HDG START-->
        <div class="section_hdg hdg_2 hdg_3">
            <a href="#"><img src="<?php $themeurl; ?>assets/images/hdg-img.png" alt=""></a>
            <h3>Our Services</h3>
            <span><i class="fa icon-building"></i></span>
        </div>
        <!--SECTION HDG END-->
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="kode_service_des">
                    <figure>
                        <img src="<?php $themeurl; ?>assets/extra-images/service.jpg" alt="">
                    </figure>
                    <div class="kode_service_text">
                        <span><i class="fa icon-book"></i></span>
                        <h4><a href="#">Quran Class</a ></h4>
                        <p><i class="fa fa-clock-o"></i>Timing : 09:00 A.M  -  03:00 P.M</p>
                        <a class="right_arrow hvr-ripple-out" href="#"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="kode_service_des">
                    <figure>
                        <img src="<?php $themeurl; ?>assets/extra-images/service1.jpg" alt="">
                    </figure>
                    <div class="kode_service_text">
                        <span><i class="fa icon-social"></i></span>
                        <h4><a href="#">Counselling</a ></h4>
                        <p><i class="fa fa-clock-o"></i>Timing : 04:00 A.M  -  06:00 P.M</p>
                        <a class="right_arrow hvr-ripple-out" href="#"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="kode_service_des">
                    <figure>
                        <img src="<?php $themeurl; ?>assets/extra-images/service2.jpg" alt="">
                    </figure>
                    <div class="kode_service_text">
                        <span><i class="fa icon-people"></i></span>
                        <h4><a href="#">Nikah Services</a></h4>
                        <p><i class="fa fa-clock-o"></i>Timing : 03:00 A.M  -  01:00 P.M</p>
                        <a class="right_arrow hvr-ripple-out" href="#"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="kode_service_des">
                    <figure>
                        <img src="<?php $themeurl; ?>assets/extra-images/service3.jpg" alt="">
                    </figure>
                    <div class="kode_service_text">
                        <span><i class="fa icon-islam"></i></span>
                        <h4><a href="#">Hadith School</a ></h4>
                        <p><i class="fa fa-clock-o"></i>Timing : 07:00 A.M  -  04:00 P.M</p>
                        <a class="right_arrow hvr-ripple-out" href="#"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="kode_service_des">
                    <figure>
                        <img src="<?php $themeurl; ?>assets/extra-images/service4.jpg" alt="">
                    </figure>
                    <div class="kode_service_text">
                        <span><i class="fa icon-monuments-1"></i></span>
                        <h4><a href="#">Funeral Services</a ></h4>
                        <p><i class="fa fa-clock-o"></i>Timing : 09:00 A.M  -  01:00 P.M</p>
                        <a class="right_arrow hvr-ripple-out" href="#"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="kode_service_des">
                    <figure>
                        <img src="<?php $themeurl; ?>assets/extra-images/service5.jpg" alt="">
                    </figure>
                    <div class="kode_service_text">
                        <span><i class="fa icon-monuments"></i></span>
                        <h4><a href="#">Our CAcademies</a ></h4>
                        <p><i class="fa fa-clock-o"></i>Timing : 08:00 A.M  -  03:00 P.M</p>
                        <a class="right_arrow hvr-ripple-out" href="#"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="service_btn">
                    <a class="medium_btn background-bg-dark btn_hover" href="#">View All Services</a>
                </div>
            </div>
        </div>
    </div>
    <!--CONTAINER END-->
</div>
<!--KODE SERVICES WRAP END-->
<!--KODE PRAY WRAP START-->
<div class="kode_pray_wrap them_overlay">
    <!--CONTAINER START-->
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="kode_pray_text">
                    <h2>Remember Your GOD</h2>
                    <h5>Weekely Programs For Tafseer ul Quran</h5>
                    <p>There are many variations of passages of Lorem Ipsum available, but the suffered alteration in some form, by injected humour, or randomised words but the majority have suffered alteration in some form, by injected humour, or randomised words...</p>
                    <div class="kode_pray_btn">
                        <a class="small_btn background-bg-dark margin-right btn_hover" href="#">Read More</a>
                        <a class="small_btn background-bg-dark margin-right btn_hover" href="#">Contact Us </a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="kode_pray_fig">
                    <figure>
                        <img src="<?php $themeurl; ?>assets/images/pray.png" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!--CONTAINER END-->
</div>
<!--KODE PRAY WRAP END-->
<!--KODE GALLERY3 WRAP START-->
<div class="kode_gallery3_wrap wrap_2">
    <!--CONTAINER START-->
    <div class="container">
        <!--SECTION HDG START-->
        <div class="section_hdg hdg_2 hdg_3">
            <a href="#"><img src="<?php $themeurl; ?>assets/images/hdg-img.png" alt=""></a>
            <h3>Member’s Gallery</h3>
            <span><i class="fa icon-building"></i></span>
        </div>
        <!--SECTION HDG END-->
        <div class="gallery-slide">
            <div>
                <div class="kode_gallery3_row">
                    <div class="kode_gallery3_des">
                        <div class="kode_gallery3_fig">
                            <figure class="them_overlay">
                                <img src="<?php $themeurl; ?>assets/extra-images/member_g.jpg" alt="">
                            </figure>
                        </div>
                        <div class="kode_gallery3_fig">
                            <figure class="them_overlay">
                                <img src="<?php $themeurl; ?>assets/extra-images/member_g1.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="kode_gallery3_fig fig_2">
                        <figure class="them_overlay">
                            <img src="<?php $themeurl; ?>assets/extra-images/member_g2.jpg" alt="">
                        </figure>
                    </div>
                    <div class="kode_gallery3_des">
                        <div class="kode_gallery3_fig">
                            <figure class="them_overlay">
                                <img src="<?php $themeurl; ?>assets/extra-images/member_g.jpg" alt="">
                            </figure>
                        </div>
                        <div class="kode_gallery3_fig">
                            <figure class="them_overlay">
                                <img src="<?php $themeurl; ?>assets/extra-images/member_g1.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="kode_gallery3_row">
                    <div class="kode_gallery3_des">
                        <div class="kode_gallery3_fig">
                            <figure class="them_overlay">
                                <img src="<?php $themeurl; ?>assets/extra-images/member_g.jpg" alt="">
                            </figure>
                        </div>
                        <div class="kode_gallery3_fig">
                            <figure class="them_overlay">
                                <img src="<?php $themeurl; ?>assets/extra-images/member_g1.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="kode_gallery3_fig fig_2">
                        <figure class="them_overlay">
                            <img src="<?php $themeurl; ?>assets/extra-images/member_g2.jpg" alt="">
                        </figure>
                    </div>
                    <div class="kode_gallery3_des">
                        <div class="kode_gallery3_fig">
                            <figure class="them_overlay">
                                <img src="<?php $themeurl; ?>assets/extra-images/member_g.jpg" alt="">
                            </figure>
                        </div>
                        <div class="kode_gallery3_fig">
                            <figure class="them_overlay">
                                <img src="<?php $themeurl; ?>assets/extra-images/member_g1.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--CONTAINER END-->
</div>
<!--KODE GALLERY3 WRAP END-->
<!--KODE TEAM WRAP START-->
<div class="kode_team_wrap">
    <!--CONTAINER START-->
    <div class="container">
        <!--SECTION HDG START-->
        <div class="section_hdg hdg_2 hdg_3">
            <a href="#"><img src="<?php $themeurl; ?>assets/images/hdg-img.png" alt=""></a>
            <h3>Our Team</h3>
            <span><i class="fa icon-building"></i></span>
        </div>
        <!--SECTION HDG END-->
        <div class="kode-team-slide">
            <div>
                <div class="kode_tem_fig">
                    <figure>
                        <img src="<?php $themeurl; ?>assets/extra-images/team.jpg" alt="">
                        <figcaption>
                            <h4>Sheikh Hassan</h4>
                            <p>CEO</p>
                            <ul class="kode_social_icon">
                                <li><a class="hvr-ripple-out" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="hvr-ripple-out" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="hvr-ripple-out" href="#"><i class="fa fa-tumblr"></i></a></li>
                            </ul>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div>
                <div class="kode_tem_fig">
                    <figure>
                        <img src="<?php $themeurl; ?>assets/extra-images/team1.jpg" alt="">
                        <figcaption>
                            <h4>Qasim Hussain</h4>
                            <p>CTO</p>
                            <ul class="kode_social_icon">
                                <li><a class="hvr-ripple-out" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="hvr-ripple-out" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="hvr-ripple-out" href="#"><i class="fa fa-tumblr"></i></a></li>
                            </ul>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div>
                <div class="kode_tem_fig">
                    <figure>
                        <img src="<?php $themeurl; ?>assets/extra-images/team2.jpg" alt="">
                        <figcaption>
                            <h4>Younis MD</h4>
                            <p>PHP Developer</p>
                            <ul class="kode_social_icon">
                                <li><a class="hvr-ripple-out" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="hvr-ripple-out" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="hvr-ripple-out" href="#"><i class="fa fa-tumblr"></i></a></li>
                            </ul>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div>
                <div class="kode_tem_fig">
                    <figure>
                        <img src="<?php $themeurl; ?>assets/extra-images/team3.jpg" alt="">
                        <figcaption>
                            <h4>Shahid</h4>
                            <p>PHP Developer</p>
                            <ul class="kode_social_icon">
                                <li><a class="hvr-ripple-out" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="hvr-ripple-out" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="hvr-ripple-out" href="#"><i class="fa fa-tumblr"></i></a></li>
                            </ul>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!--CONTAINER END-->
</div>
<!--KODE TEAM WRAP END-->
<!--KODE CAUSE WRAP START-->
<div class="kode_cause_wrap them_overlay">
    <!--KODE CAUSE DES START-->
    <div class="kode_cause_des">
        <!--SECTION HDG START-->
        <div class="section_hdg hdg_2">
            <a href="#"><img src="<?php $themeurl; ?>assets/images/hdg-img-2.png" alt=""></a>
            <h3>Noble Cause</h3>
            <span><i class="fa icon-building"></i></span>
        </div>
        <!--SECTION HDG END-->
        <div class="kode_cause_text">
            <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words but the majority have suffered alteration in some form, by injected humour, or randomised words...</p>
            <div class="kode_cause_canvas">
                <div class="kode_canvas_detail">
                    <div class="progress-bar position" data-percent="65" data-duration="1000" data-color="#3d3d3d,#d2973b"></div>
                </div>
                <ul class="kode_canvas_text">
                    <li>
                        <h5>Amount Received</h5>
                        <h4>$2,0000</h4>
                    </li>
                    <li>
                        <h5>Targeted Amount</h5>
                        <h4>$3,0000</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--KODE CAUSE DES END-->
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
                            <p class="form-submit"><button class="medium_btn theme_color_bg btn_hover2">Donate Now</button></p>
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
<!--KODE CAUSE WRAP END-->
<!--KODE BLOG WRAP START-->
<div class="kode_blog_wrap">
    <!--CONTAINER START-->
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="kode_blog_row">
                    <!--SECTION HDG START-->
                    <div class="section_hdg">
                        <a href="#"><img src="<?php $themeurl; ?>assets/images/hdg-img.png" alt=""></a>
                        <h3>Our BLog</h3>
                        <span><i class="fa icon-building"></i></span>
                    </div>
                    <!--SECTION HDG END-->
                    <div class="kode_blog_list">
                        <ul>
                            <li>
                                <div class="kode_blog_fig">
                                    <figure class="them_overlay">
                                        <img src="<?php $themeurl; ?>assets/extra-images/blog.jpg" alt="">
                                        <a class="plus_icon hvr-ripple-out" data-rel="prettyPhoto" href="<?php $themeurl; ?>assets/extra-images/blog.jpg"><i class="fa fa-plus"></i></a>
                                    </figure>
                                    <div class="kode_blog_text">
                                        <ul class="kode_meta">
                                            <li><a href="#"><i class="fa fa-calendar"></i>05 April , 2017</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i>By Admin</a></li>
                                        </ul>
                                        <h5>Protest Against New Hijab law is Announced </h5>
                                        <ul class="kode_meta meta_2">
                                            <li><a href="#"><i class="fa fa-comments"></i>23 Comments</a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i>654 Likes</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="kode_blog_fig">
                                    <figure class="them_overlay">
                                        <img src="<?php $themeurl; ?>assets/extra-images/blog1.jpg" alt="">
                                        <a class="plus_icon hvr-ripple-out" data-rel="prettyPhoto" href="<?php $themeurl; ?>assets/extra-images/blog1.jpg"><i class="fa fa-plus"></i></a>
                                    </figure>
                                    <div class="kode_blog_text">
                                        <ul class="kode_meta">
                                            <li><a href="#"><i class="fa fa-calendar"></i>05 April , 2017</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i>By Admin</a></li>
                                        </ul>
                                        <h5>Protest Against New Hijab law is Announced </h5>
                                        <ul class="kode_meta meta_2">
                                            <li><a href="#"><i class="fa fa-comments"></i>23 Comments</a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i>654 Likes</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="kode_blog_fig">
                                    <figure class="them_overlay">
                                        <img src="<?php $themeurl; ?>assets/extra-images/blog2.jpg" alt="">
                                        <a class="plus_icon hvr-ripple-out" data-rel="prettyPhoto" href="<?php $themeurl; ?>assets/extra-images/blog2.jpg"><i class="fa fa-plus"></i></a>
                                    </figure>
                                    <div class="kode_blog_text">
                                        <ul class="kode_meta">
                                            <li><a href="#"><i class="fa fa-calendar"></i>05 April , 2017</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i>By Admin</a></li>
                                        </ul>
                                        <h5>Protest Against New Hijab law is Announced </h5>
                                        <ul class="kode_meta meta_2">
                                            <li><a href="#"><i class="fa fa-comments"></i>23 Comments</a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i>654 Likes</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="kode_event_row">
                    <!--SECTION HDG START-->
                    <div class="section_hdg">
                        <a href="#"><img src="<?php $themeurl; ?>assets/images/hdg-img.png" alt=""></a>
                        <h3>Our Events</h3>
                        <span><i class="fa icon-building"></i></span>
                    </div>
                    <!--SECTION HDG END-->
                    <!--KODE EVENT DES START-->
                    <div class="kode_event_des">
                        <div class="koed_event_timer">
                            <figure class="them_overlay">
                                <img src="<?php $themeurl; ?>assets/extra-images/timer.jpg" alt="">
                                <figcaption>
                                    <h5>NExt Event In :</h5>
                                    <ul class="countdown">
                                        <li>
                                            <span class="days">52</span>
                                            <p class="">Days</p>
                                        </li>
                                        <li>
                                            <span class="hours">19</span>
                                            <p class="">HRS</p>
                                        </li>
                                        <li>
                                            <span class="minutes">85</span>
                                            <p class="">Mins</p>
                                        </li>
                                        <li>
                                            <span class="seconds">96</span>
                                            <p class="">Secs</p>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
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
                    <!--KODE EVENT DES END-->
                </div>
            </div>
        </div>
    </div>
    <!--CONTAINER END-->
</div>
<!--KODE BLOG WRAP END-->
<!--KODE CLIENT WRAP START-->
<div class="kode_client_wrap">
    <!--CONTAINER START-->
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!--SECTION HDG START-->
                <div class="section_hdg">
                    <a href="#"><img src="<?php $themeurl; ?>assets/images/hdg-img.png" alt=""></a>
                    <h3>Our Client</h3>
                    <span><i class="fa icon-building"></i></span>
                </div>
                <!--SECTION HDG END-->
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="kode_client_text">
                            <p>here are many variations of passages of Lorem Ipsum available...</p>
                            <h6>Aima Shiekh</h6>
                            <figure>
                                <img src="<?php $themeurl; ?>assets/extra-images/client.jpg" alt="">
                            </figure>
                            <figure class="fig_hover">
                                <img src="<?php $themeurl; ?>assets/extra-images/client1.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="kode_client_text">
                            <p>here are many variations of passages of Lorem Ipsum available...</p>
                            <h6>Shiekh Aziz</h6>
                            <figure>
                                <img src="<?php $themeurl; ?>assets/extra-images/client1.jpg" alt="">
                            </figure>
                            <figure class="fig_hover">
                                <img src="<?php $themeurl; ?>assets/extra-images/client2.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="kode_client_text">
                            <p>here are many variations of passages of Lorem Ipsum available...</p>
                            <h6>Aima Shiekh</h6>
                            <figure>
                                <img src="<?php $themeurl; ?>assets/extra-images/client2.jpg" alt="">
                            </figure>
                            <figure class="fig_hover">
                                <img src="<?php $themeurl; ?>assets/extra-images/client3.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="kode_client_text">
                            <p>here are many variations of passages of Lorem Ipsum available...</p>
                            <h6>Aima Shiekh</h6>
                            <figure>
                                <img src="<?php $themeurl; ?>assets/extra-images/client3.jpg" alt="">
                            </figure>
                            <figure class="fig_hover">
                                <img src="<?php $themeurl; ?>assets/extra-images/client.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!--KODE PRODUCT LIST START-->
                <div class="kode_product_list">
                    <h5>Our Products</h5>
                    <div class="kode-product-slide">
                        <div>
                            <figure>
                                <img src="<?php $themeurl; ?>assets/extra-images/product.jpg" alt="">
                                <h6>Sale</h6>
                            </figure>
                            <div class="kode_product_text">
                                <h5>Product Title Here</h5>
                                <span>$160.00</span>
                                <span>$140.00</span>
                            </div>
                            <div class="kode_product_rating">
                                <ul class="rating_star">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                                <ul class="product_icon">
                                    <li><a href="#"><i class="fa fa-cart-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <figure>
                                <img src="<?php $themeurl; ?>assets/extra-images/product.jpg" alt="">
                                <h6>Sale</h6>
                            </figure>
                            <div class="kode_product_text">
                                <h5>Product Title Here</h5>
                                <span>$180.00</span>
                                <span>$130.00</span>
                            </div>
                            <div class="kode_product_rating">
                                <ul class="rating_star">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                                <ul class="product_icon">
                                    <li><a href="#"><i class="fa fa-cart-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--KODE PRODUCT LIST END-->
            </div>
        </div>
    </div>
    <!--CONTAINER END-->
</div>
<!--KODE CLIENT WRAP END-->
<!--KODE NEWSLETTER WRAP START-->
<div class="kode_newsletter_wrap">
    <!--CONTAINER START-->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="kode_newsletter_des">
                    <span><i class="fa fa-envelope"></i></span>
                    <div class="kode_newsletter_text">
                        <h5><a href="#">Newsletter Sign Up</a></h5>
                        <p>For Latest Updates & For Majalis</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="kode_newsletter_form">
                    <form>
                        <div class="kf_commet_field">
                            <input placeholder="Enter Your Email" name="url" type="text" value="" data-default="Website" size="30" required>
                            <button class="medium_btn background-bg-dark">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--CONTAINER END-->
</div>
<!--KODE NEWSLETTER WRAP END-->