<div class="contentBody topMargin">
<div class="banner-upd" style="background:#ebeef4">
  <div class="airfcfx-home-cnt-width container">
    <div class="pos_rel banner_text text_white">
      <!--<h1 class="site-name"><span>Airfinch</span></h1>-->
      <h1 style="/*color: !important; */">Explore your dream stay</h1>
      <h4 style="/* color: !important; */">Rent Your Convenient Stays From The Local Host Available In 190+ Countries.  </h4>
      <!-- Validation Message for Search bars.-->
      <!-- End Vaildation Message -->
      <div class="home-search-option airfcfx-home-website-search banner_form margin_bottom30 margin_top40">
        <div class="form-searchwhole clearfix">
          <div class="banner_form_left">
            <div class="error-search" style="color:red !important; margin-left: 45px;"></div>
            <div class="search-svg-icon">
              <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="height: 24px; width: 24px; display: block; fill: rgb(118, 118, 118);">
                <path d="m10.4 18.2c-4.2-.6-7.2-4.5-6.6-8.8.6-4.2 4.5-7.2 8.8-6.6 4.2.6 7.2 4.5 6.6 8.8-.6 4.2-4.6 7.2-8.8 6.6m12.6 3.8-5-5c1.4-1.4 2.3-3.1 2.6-5.2.7-5.1-2.8-9.7-7.8-10.5-5-.7-9.7 2.8-10.5 7.9-.7 5.1 2.8 9.7 7.8 10.5 2.5.4 4.9-.3 6.7-1.7v.1l5 5c .3.3.8.3 1.1 0s .4-.8.1-1.1" fill-rule="evenodd"></path>
              </svg>
            </div>
            <input id="where-to-go-main" type="text" value="" onclick="myFunction()" placeholder="Where do you want to go?" class="form-control form_text1 where-to-go" />
            <input type="hidden" id="latitude" value="">
            <input type="hidden" id="longitude" value="">
          </div>
          <div class="banner_form_right">
            <button class="airfcfx-btn_search btn btn_search width100" type="button" onclick="searchlistmain();">
              <!--<div class="airfcfx-search-icon"></div>-->
              <div class="airfcfx-mobile-search-txt"> Search</div>
            </button>
          </div>
        </div>
        <div id="checking-inputs" class="checking-inputs clearfix" style="display: none;">
          <div class="form-text2 clshome">
            <input type="button" id="daterangepick" name="daterange" class="form-control" value="Dates" />
          </div>
          <div class="form-text2 form-control clshome"><a href="javascript:void(0);" onclick="searchlistroomtype(1);">Entire Place</a></div>
          <div class="form-text2 form-control clshome"><a href="javascript:void(0);" onclick="searchlistroomtype(2);">Private Room</a></div>
          <div class="form-text2 form-control clshome"><a href="javascript:void(0);" onclick="searchlistroomtype(3);">Shared Room</a></div>
          <input type="hidden" id="daterangepick_value" value="" />
        </div>
      </div>
      <!--banner_form end-->
      <div class="airfcfx-home-mobile-cal col-xs-12 no-hor-padding">
        <a href="#" class="airfcfx-input-model" data-toggle="modal" data-target="#airfcfx-mobile-cal">Where to ?</a>
        <a href="#" class="airfcfx-mobile-cal-search" data-toggle="modal" data-target="#airfcfx-mobile-cal">
          <div class="airfcfx-search-icon"></div>
        </a>
      </div>
      <!--mobile calendar popup-->
      <div class="modal fade" id="airfcfx-mobile-cal" role="dialog">
        <div class="modal-dialog mobile-cal-cnt">
          <div class="mobile-cal-header d-flex">
            <button class="close airfcfx-mobile-cal-close align-self-center" type="button" data-dismiss="modal">×</button>
            <div class="align-self-center font-size20 bold">
              Search
            </div>
          </div>
          <div class="mobile-cal-body">
            <input id="where-to-go-mobile" type="text" value="" placeholder="Where do u want to go?" class="mobile-cal-input-100 form-control form_text1 where-to-go" />
            <input type="hidden" id="latitudemobile" value="">
            <input type="hidden" id="longitudemobile" value="">
            <input type="text" name="daterange" id="daterange" class="respance-range mobile-cal-input-50 airfcfx-right-border form_text2 form-control" placeholder="Select Date"/>
            <div class="form-text2 form-control clshome"><a href="#" onclick="searchlistroomtype(1);">Entire Place</a></div>
            <div class="form-text2 form-control clshome"><a href="#" onclick="searchlistroomtype(2);">Private Room</a></div>
            <div class="form-text2 form-control clshome"><a href="#" onclick="searchlistroomtype(3);">Shared Room</a></div>
            <div class="error-searchmobile" style="float:right;"></div>
            <button class="airfcfx-mobile-cal-btn airfcfx-slider-btn btn btn_search" onclick="searchlistmobile();">Search</button>
          </div>
        </div>
      </div>
    </div>
    <!--banner_text end-->
  </div>
  <!--container end-->
</div>
<!--banner end-->
<div class="airfcfx-home-cnt-width container">
  <div class="margin_top50 margin_bottom15 margin_left10 margin_right10">
    <h1 class="airfcfx-txt-home">Traverse the world</h1>
    <h4>See the best destinations people are travelling around the world.</h4>
  </div>
  <div class="airfcfx-country-cnt col-xs-12 col-sm-12 col-md-12 col-lg-12 no-hor-padding">
    <?php for ($i = 1; $i <= 8; $i++) { ?>
    <div class="airfcfx-country place-image">
      <a href="<?php echo base_url(AIRBNB); ?>detail" class="airfcfx-country-img-show col-xs-12 col-sm-12 col-md-12 col-lg-12 no-hor-padding">
        <div class="images-display-padding">
          <div class="airfcfx-country-img" style="background-image:url('<?php echo $theme_url;?>assets/airbnb/albums/images/listings/1552384592_2_0.jpg') !important;"></div>
        </div>
        <div class="country-details similar-prices">
          <p class="place margin_left5">Private Room . 4 Beds</p>
          <p class="siml-text2 margin_left5 fa-1x">South Mission Beach Zen-Like Home</p>
          <p class="full-price margin_left5">$20.03 per hour</p>
          <p class="place-star-rating margin_left5 coldiv">
            <span class="half-star-span">
              <span class="no-cover-star">
                <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;">
                  <path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
                </svg>
              </span>
            </span>
            <span class="half-star-span">
              <span class="no-cover-star">
                <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;">
                  <path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
                </svg>
              </span>
            </span>
            <span class="half-star-span">
              <span class="no-cover-star">
                <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;">
                  <path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
                </svg>
              </span>
            </span>
            <span class="half-star-span">
              <span class="no-cover-star">
                <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;">
                  <path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
                </svg>
              </span>
            </span>
            <span class="half-star-span">
              <span class="no-cover-star">
                <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;">
                  <path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
                </svg>
              </span>
            </span>
            <span class="place-reviews"> 0 </span>
          </p>
        </div>
      </a>
    </div>
    <?php } ?>
  </div>
  <div class="show-all margin_left10 margin_right10">
    <button type="button" onclick="javascript:searchtraverseworld();" class="show-more-btn">
      <span class="load-more-image">Show all(11) </span>
      <div class="right-arrow">
        <svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="height: 10px; width: 10px; fill: currentcolor;">
          <path d="m4.29 1.71a1 1 0 1 1 1.42-1.41l8 8a1 1 0 0 1 0 1.41l-8 8a1 1 0 1 1 -1.42-1.41l7.29-7.29z" fill-rule="evenodd"></path>
        </svg>
      </div>
    </button>
  </div>
</div>
<div class="airfcfx-home-cnt-width container">
  <div class="margin_top50 padding10">
    <h1 class="airfcfx-txt-home">Featured Homes</h1>
  </div>
  <div class="airfcfx-country-cnt col-xs-12 col-sm-12 col-md-12 col-lg-12 no-hor-padding">
    <?php for ($i = 1; $i <= 8; $i++) { ?>
    <div class="airfcfx-homerecent-pad-10 col-xs-12 col-sm-3">
      <a class="rm_text_deco" href="<?php echo base_url(AIRBNB); ?>detail">
        <div class="item">
          <div class="bg_img borderradius5" style="background-image:url('<?php echo $theme_url;?>assets/airbnb/albums/images/listings/1552384592_2_0.jpg');">                                </div>
          <p class="siml-text1 margin_left5 small text_gray1 margin_right60"><b>  Private Room . <span>4 Beds</span></b></p>
          <p class="siml-text2 margin_left5 fa-1x">South Mission Beach Zen-Like Home </p>
          <div class="margin_left5 similar-prices">
            <div class="hrs-price"><span>  $ 20.03 per hour</span></div>
          </div>
          <div class="margin_left5 similar-ratings">
            <div class="country-details">
              <p class="place-star-rating">
                <span class="half-star-span">
                  <span class="no-cover-star">
                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;">
                      <path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
                    </svg>
                  </span>
                </span>
                <span class="half-star-span">
                  <span class="no-cover-star">
                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;">
                      <path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
                    </svg>
                  </span>
                </span>
                <span class="half-star-span">
                  <span class="no-cover-star">
                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;">
                      <path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
                    </svg>
                  </span>
                </span>
                <span class="half-star-span">
                  <span class="no-cover-star">
                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;">
                      <path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
                    </svg>
                  </span>
                </span>
                <span class="half-star-span">
                  <span class="no-cover-star">
                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;">
                      <path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
                    </svg>
                  </span>
                </span>
                <span class="place-reviews"> 0 </span>
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <?php } ?>
  </div>
  <div class="show-all margin_left10 margin_right10">
    <button type="button" class="show-more-btn" onclick="javascript:searchfeatured();">
      <span class="load-more-image">Show all(9) </span>
      <div class="right-arrow">
        <svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="height: 10px; width: 10px; fill: currentcolor;">
          <path d="m4.29 1.71a1 1 0 1 1 1.42-1.41l8 8a1 1 0 0 1 0 1.41l-8 8a1 1 0 1 1 -1.42-1.41l7.29-7.29z" fill-rule="evenodd"></path>
        </svg>
      </div>
    </button>
  </div>
</div>
<div class="airfcfx-home-cnt-width container">
  <div class="margin_top50 padding10">
    <h1 class="airfcfx-txt-home">Homes around the world</h1>
  </div>
  <div class="airfcfx-country-cnt col-xs-12 col-sm-12 col-md-12 col-lg-12 no-hor-padding">
     <?php for ($i = 1; $i <= 8; $i++) { ?>
    <div class="airfcfx-homerecent-pad-10 col-xs-12 col-sm-3">
      <a class="rm_text_deco" href="user/listing/view/MzNfMTczNQ%3d%3d.html">
        <div class="item">
          <div class="bg_img borderradius5" style="background-image:url('<?php echo $theme_url;?>assets/airbnb/albums/images/listings/1552384592_2_0.jpg');">                                </div>
          <p class="siml-text1 margin_left5 small text_gray1 margin_right60"><b>  Private Room . <span>3 Beds</span></b></p>
          <p class="siml-text2 margin_left5 fa-1x">Large Boutique Condo by Metro </p>
          <div class="margin_left5 similar-prices">
            <div class="full-price"><span>  $ 317.81 per night</span></div>
          </div>
          <div class="margin_left5 similar-ratings">
            <div class="country-details">
              <p class="place-star-rating">
                <span class="half-star-span">
                  <span class="no-cover-star">
                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;">
                      <path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
                    </svg>
                  </span>
                </span>
                <span class="half-star-span">
                  <span class="no-cover-star">
                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;">
                      <path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
                    </svg>
                  </span>
                </span>
                <span class="half-star-span">
                  <span class="no-cover-star">
                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;">
                      <path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
                    </svg>
                  </span>
                </span>
                <span class="half-star-span">
                  <span class="no-cover-star">
                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;">
                      <path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
                    </svg>
                  </span>
                </span>
                <span class="half-star-span">
                  <span class="no-cover-star">
                    <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;">
                      <path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
                    </svg>
                  </span>
                </span>
                <span class="place-reviews"> 0 </span>
            </div>
          </div>
        </div>
      </a>
    </div>
    <?php } ?>
  </div>
  <div class="show-all margin_left10 margin_right10">
    <button type="button" class="show-more-btn" onclick="javascript:searcharound();">
      <span class="load-more-image">Show all(33) </span>
      <div class="right-arrow">
        <svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="height: 10px; width: 10px; fill: currentcolor;">
          <path d="m4.29 1.71a1 1 0 1 1 1.42-1.41l8 8a1 1 0 0 1 0 1.41l-8 8a1 1 0 1 1 -1.42-1.41l7.29-7.29z" fill-rule="evenodd"></path>
        </svg>
      </div>
    </button>
  </div>
</div>
<!--  Featured Destinations  -->
<div class="destination-slider">
  <div class="airfcfx-home-cnt-width container">
    <div class="margin_left10 margin_right10">
      <h1 class="bold-font margin_top20 home-title">Explore Destinations</h1>
      <h4>Browse beautiful homes with all the comforts of home</h4>
      <div class="row">
        <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
          <div class="MultiCarousel-inner">
                 <?php for ($i = 1; $i <= 6; $i++) { ?>
            <div class="item">
              <div class="pad15">
                <a href="search/United%20Arab%20Emirates.html"><img class="desintn-lsider-imag" src="<?php echo $theme_url;?>assets/airbnb/albums/images/listings/1552384592_2_0.jpg"alt="london"></a>
              </div>
              <div class="country-name">
                <span class="airfcfx-country-txt">United Arab Emirates</span>
              </div>
            </div>
            <?php }?>
          <!-- <button class="btn btn-primary leftLst">
            <svg viewBox="0 0 18 18" role="img" aria-label="Previous" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;">
              <path d="m13.7 16.29a1 1 0 1 1 -1.42 1.41l-8-8a1 1 0 0 1 0-1.41l8-8a1 1 0 1 1 1.42 1.41l-7.29 7.29z" fill-rule="evenodd"></path>
            </svg>
          </button>
          <button class="btn btn-primary rightLst">
            <svg viewBox="0 0 18 18" role="img" aria-label="Next" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;">
              <path d="m4.29 1.71a1 1 0 1 1 1.42-1.41l8 8a1 1 0 0 1 0 1.41l-8 8a1 1 0 1 1 -1.42-1.41l7.29-7.29z" fill-rule="evenodd"></path>
            </svg>
          </button> -->
        </div>
      </div>
    </div>
  </div>
</div>
<div id="myCarousel" class="airfcfx-margin-55 carousel slide" data-ride="carousel">
  <div class="border_top border_bottom1 airfcfx-home-cnt-width container">
    <div id="carousel-example-generic" class="airfcfx-carousel carousel slide margin_top30 margin_bottom30" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div class="airfcfx-slide_one slide_one" style="background-image:url('<?php echo $theme_url;?>assets/airbnb/admin/images/buttonsliders/1552374599.jpg');"></div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-hor-padding">
            <div class="airfcfx-carousel-caption carousel-caption slide_caption1">
              <h1>Profits from guest stay</h1>
              <h4>Admin can earn commission from guest who books stays through their online vacation rental platform.</h4>
              <a target="_blank" href="index.html">
              <button class="slider-btn airfcfx-slider-btn btn btn_search">Earnings from guest</button>
              </a>
            </div>
          </div>
          <!-- col-sm-4 end -->
        </div>
        <div class="item">
          <div class="airfcfx-slide_one slide_one" style="background-image:url('<?php echo $theme_url;?>assets/airbnb/admin/images/buttonsliders/1552374599.jpg');"></div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-hor-padding">
            <div class="airfcfx-carousel-caption carousel-caption slide_caption1">
              <h1>Hosting in community based platform</h1>
              <h4>Become a host into this collabarative online space renting platform to get reached around huge number of travellers.</h4>
              <a target="_blank" href="index.html">
              <button class="slider-btn airfcfx-slider-btn btn btn_search">Earnings on host listing</button>
              </a>
            </div>
          </div>
          <!-- col-sm-4 end -->
        </div>
        <div class="item">
          <div class="airfcfx-slide_one slide_one" style="background-image:url('<?php echo $theme_url;?>assets/airbnb/admin/images/buttonsliders/1552374599.jpg');"></div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-hor-padding">
            <div class="airfcfx-carousel-caption carousel-caption slide_caption1">
              <h1>Revenue on every booking</h1>
              <h4>Being an Admin through this Airfinch script, earn commission from the host on every successful property booking. </h4>
              <a target="_blank" href="index.html">
              <button class="slider-btn airfcfx-slider-btn btn btn_search">Earn revenue</button>
              </a>
            </div>
          </div>
          <!-- col-sm-4 end -->
        </div>
      </div>
    </div>
    <!-- slide end -->
  </div>
  <!-- container end -->
  <div class="airfcfx-home-cnt-width explore-content container">
    <div class="text-center margin_top40 margin_bottom40">
      <h1 class="airfcfx-txt-home">Explore the world</h1>
      <h4>See where people are traveling, all around the world.</h4>
    </div>
    <div class="airfcfx-reason_one-cnt col-xs-12 col-sm-4">
      <div class="airfcfx-places airfcfx-reason_one reason_one">
        <div class="reason-icon-left">
          <img class="reason-plce-img" src="<?php echo $theme_url;?>assets/airbnb/images/places.png">
        </div>
        <div class="reason-right-txt">
          <h1 class="text_black reason-content-title">999500+ Places</h1>
          <p class="reason_text">Perfect for seekers, artistic types and intellectuals as we are in the heart of the arty/academic/spiritual community of Cape Town.</p>
          <!--<div class="airfcfx-support-block-line"></div>-->
        </div>
      </div>
      <!-- reason_one end -->
    </div>
    <!-- col-sm-4 end -->
    <div class="airfcfx-reason_one-cnt col-xs-12 col-sm-4">
      <div class="airfcfx-customers airfcfx-reason_one reason_one">
        <div class="reason-icon-left">
          <img class="reason-plce-img" src="<?php echo $theme_url;?>assets/airbnb/images/team.png">
        </div>
        <div class="reason-right-txt">
          <h1 class="text_black reason-content-title">1348500+ Customers</h1>
          <p class="reason_text">One large, lovely room with a double and single bed perfect for singles, two friends, couples, and couples with one child.</p>
          <!--<div class="airfcfx-support-block-line"></div>-->
        </div>
      </div>
      <!-- reason_one end -->
    </div>
    <!-- col-sm-4 end -->
    <div class="airfcfx-reason_one-cnt col-xs-12 col-sm-4">
      <div class="airfcfx-support  airfcfx-reason_one reason_one">
        <div class="reason-icon-left">
          <img class="reason-plce-img" src="<?php echo $theme_url;?>assets/airbnb/images/customer-service.png">
        </div>
        <div class="reason-right-txt">
          <h1 class="text_black reason-content-title">24/7 Support</h1>
          <p class="reason_text">If you need help while traveling or hosting, contact us at our toll free number: 1800 2504 4520 1255</p>
          <!--<div class="airfcfx-support-block-line"></div>-->
        </div>
      </div>
      <!-- reason_one end -->
    </div>
    <!-- col-sm-4 end -->
  </div>
  <!-- Container end -->
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog login_width" role="document">
      <div class="modal-content">
        <div class="modal-header no_border clearfix">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
              <svg viewBox="0 0 24 24" role="img" aria-label="Close" focusable="false" style="display: block; fill: rgb(0, 0, 0); height: 16px; width: 16px;">
                <path fill-rule="evenodd" d="M23.25 24a.744.744 0 0 1-.53-.22L12 13.062 1.28 23.782a.75.75 0 0 1-1.06-1.06L10.94 12 .22 1.28A.75.75 0 1 1 1.28.22L12 10.94 22.72.22a.749.749 0 1 1 1.06 1.06L13.062 12l10.72 10.72a.749.749 0 0 1-.53 1.28">
              </svg>
            </span>
          </button>
        </div>
        <div class="modal-body text-center">
          <div id="w0" class="auth-clients">
            <ul class="auth-clients clear">
              <li class="auth-client"><a class="auth-link facebook" href="https://www.facebook.com/dialog/oauth?display=popup&amp;client_id=1038770532958761&amp;response_type=code&amp;redirect_uri=https%3A%2F%2Fairfinchscript.com%2Fusers%2Fauth%3Fauthclient%3Dfacebook&amp;xoauth_displayname=My%20Application&amp;scope=email" data-popup-width="860" data-popup-height="480"><span class="auth-icon facebook"></span></a></li>
            </ul>
          </div>
          <div id="gSignInWrapper">
            <div id="customBtn" class="customGPlusSignIn">
              <span class="icon"></span>
              <span class="buttonText">Signup with Google</span>
            </div>
          </div>
          <script>startApp();</script>
          <div class="login_or border_bottom "><span>or</span></div>
          <!--<h2 class="login-popup-title">join in to continue</h2>
            <div class="login-tiltl">Signup with </div>--><a href="#" class="text-danger">
          </a>
          <form id="form-signup" action="https://airfinchscript.com/signup" method="post" role="form">
            <input type="hidden" name="_csrf" value="TTFhcDBzV290UDUjZzgRCjpWFQhFAzMNGHwOG0Q8GAcMBgMAYSs7Qg==">
            <div class="form-group field-signupform-firstname required">
              <input type="text" id="firstname" class="form-control margin_top30 margin_bottom10" name="SignupForm[firstname]" maxlength="30" placeholder="First Name" onkeypress="return isAlpha(event)">
              <p class="help-block help-block-error"></p>
            </div>
            <div class="form-group field-signupform-lastname required">
              <input type="text" id="lastname" class="form-control margin_bottom10" name="SignupForm[lastname]" maxlength="30" placeholder="Last Name" onkeypress="return isAlpha(event)">
              <p class="help-block help-block-error"></p>
            </div>
            <div class="form-group field-signupform-email required">
              <input type="text" id="email" class="form-control margin_bottom10" name="SignupForm[email]" placeholder="Email Address">
              <p class="help-block help-block-error"></p>
            </div>
            <!--?= $form->errorSummary($model); ?-->
            <div class="form-group field-signupform-password required">
              <input type="password" id="password" class="form-control margin_bottom10" name="SignupForm[password]" placeholder="Password">
              <p class="help-block help-block-error"></p>
            </div>
            <p class="text-right text-danger margin_bottom10 show-paswrd">
              <a href="#" onclick="javascript:ToggleSignup();">Show password</a>
            </p>
            <div class="bdaycls">
              <label>Birthday ?</label>
              <p>To sign up, you must be 18 or older. Other people won’t see your birthday.</p>
              <br />
              <select name="SignupForm[year]" class="bdayselcls slctFix" id="byear">
                <option value="0000">Year</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1966">1966</option>
                <option value="1965">1965</option>
                <option value="1964">1964</option>
                <option value="1963">1963</option>
                <option value="1962">1962</option>
                <option value="1961">1961</option>
                <option value="1960">1960</option>
                <option value="1959">1959</option>
                <option value="1958">1958</option>
                <option value="1957">1957</option>
                <option value="1956">1956</option>
                <option value="1955">1955</option>
                <option value="1954">1954</option>
                <option value="1953">1953</option>
                <option value="1952">1952</option>
                <option value="1951">1951</option>
                <option value="1950">1950</option>
                <option value="1949">1949</option>
                <option value="1948">1948</option>
                <option value="1947">1947</option>
                <option value="1946">1946</option>
                <option value="1945">1945</option>
                <option value="1944">1944</option>
                <option value="1943">1943</option>
                <option value="1942">1942</option>
                <option value="1941">1941</option>
                <option value="1940">1940</option>
                <option value="1939">1939</option>
                <option value="1938">1938</option>
                <option value="1937">1937</option>
                <option value="1936">1936</option>
                <option value="1935">1935</option>
                <option value="1934">1934</option>
                <option value="1933">1933</option>
                <option value="1932">1932</option>
                <option value="1931">1931</option>
                <option value="1930">1930</option>
                <option value="1929">1929</option>
                <option value="1928">1928</option>
                <option value="1927">1927</option>
                <option value="1926">1926</option>
                <option value="1925">1925</option>
                <option value="1924">1924</option>
                <option value="1923">1923</option>
                <option value="1922">1922</option>
                <option value="1921">1921</option>
                <option value="1920">1920</option>
                <option value="1919">1919</option>
                <option value="1918">1918</option>
                <option value="1917">1917</option>
                <option value="1916">1916</option>
                <option value="1915">1915</option>
                <option value="1914">1914</option>
                <option value="1913">1913</option>
                <option value="1912">1912</option>
                <option value="1911">1911</option>
                <option value="1910">1910</option>
                <option value="1909">1909</option>
                <option value="1908">1908</option>
                <option value="1907">1907</option>
                <option value="1906">1906</option>
                <option value="1905">1905</option>
                <option value="1904">1904</option>
                <option value="1903">1903</option>
                <option value="1902">1902</option>
                <option value="1901">1901</option>
                <option value="1900">1900</option>
              </select>
              <select name="SignupForm[month]" class="bdayselcls slctFix" id="bmonth" >
                <option value="0">Month</option>
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
              </select>
              <select name="SignupForm[day]" class="bdayselcls slctFix" id="bday">
                <option value="0">Day
              </select>
            </div>
            <div class="has-error">
              <p id="bdayerr" class="help-block help-block-error"></p>
            </div>
            <div class="margin_top10 text-left font_size12 margin_bottom10">
              <p>By signing up, I agree to AirFinch's <a href="user/help/terms.html" target="_blank" class="text-danger">Terms and Conditions.</a> </p>
            </div>
            <div class="form-group">
              <button type="submit" id="signup_btn" class="btn btn_email margin_top10 width100" name="signup-button">Sign up</button>
            </div>
            <img alt="loading" id="signuploadimg" src="<?php echo $theme_url;?>assets/airbnb/images/load.gif" class="loading" style="margin-top:-1px;">
          </form>
          <!--<p class="changeover">Already have an Airbnb account? <a data-dismiss="modal" data-toggle="modal" href="#loginModal">Log in</a></p>-->
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog login_width" role="document">
      <div class="modal-content">
        <div class="modal-header no_border clearfix">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
              <svg viewBox="0 0 24 24" role="img" aria-label="Close" focusable="false" style="display: block; fill: rgb(0, 0, 0); height: 16px; width: 16px;">
                <path fill-rule="evenodd" d="M23.25 24a.744.744 0 0 1-.53-.22L12 13.062 1.28 23.782a.75.75 0 0 1-1.06-1.06L10.94 12 .22 1.28A.75.75 0 1 1 1.28.22L12 10.94 22.72.22a.749.749 0 1 1 1.06 1.06L13.062 12l10.72 10.72a.749.749 0 0 1-.53 1.28">
              </svg>
            </span>
          </button>
        </div>
        <div class="modal-body text-center">
          <div id="w1" class="auth-clients">
            <ul class="auth-clients clear">
              <li class="auth-client"><a class="auth-link facebook" href="https://www.facebook.com/dialog/oauth?display=popup&amp;client_id=1038770532958761&amp;response_type=code&amp;redirect_uri=https%3A%2F%2Fairfinchscript.com%2Fusers%2Fauth%3Fauthclient%3Dfacebook&amp;xoauth_displayname=My%20Application&amp;scope=email" data-popup-width="860" data-popup-height="480"><span class="auth-icon facebook"></span></a></li>
            </ul>
          </div>
          <div id="gSignInWrapper">
            <div id="customBtnLogin" class="customGPlusSignIn">
              <span class="icon"></span>
              <span class="buttonText">Signup with Google</span>
            </div>
          </div>
          <script>startAppLogin();</script>
          <div class="login_or border_bottom"><span>or</span></div>
          <!--<h2 class="login-popup-title">Log in to continue</h2>-->
          <a href="#" class="text-danger"></a>
          <form id="login-form" action="https://airfinchscript.com/login" method="post" role="form">
            <input type="hidden" name="_csrf" value="TTFhcDBzV290UDUjZzgRCjpWFQhFAzMNGHwOG0Q8GAcMBgMAYSs7Qg==">
            <div class="form-group field-signupform-email required">
              <input type="text" id="login-email" class="form-control margin_top30 margin_bottom10" name="SignupForm[email]" value="demo@airfinch.com" placeholder="Email">
              <p class="help-block help-block-error"></p>
            </div>
            <div class="form-group field-signupform-password required">
              <input type="password" id="login-password" class="form-control margin_bottom10" name="SignupForm[password]" value="123456" placeholder="Password">
              <p class="help-block help-block-error"></p>
            </div>
            <div class="checkboxatrb">
              <label>
                <span class="check-cover">
                  <input class="form-control" id="login-rememberMe" name="SignupForm[rememberMe]" type="checkbox">
                  <div class="airfcfx-search-checkbox-text"></div>
                </span>
                <span class="check-cover bold-font">&nbsp;&nbsp;Remember me</span>
              </label>
            </div>
            <p class="text-right text-danger margin_bottom10 show-paswrd">
              <a href="#" onclick="javascript:Toggle();">Show password</a>
            </p>
            <div class="form-group">
              <button type="submit" class="btn btn_email margin_top10 width100" name="login-button">Login</button>
            </div>
            <img alt="loading" id="loginloadimg" src="<?php echo $theme_url;?>assets/airbnb/images/load.gif" class="loading" style="margin-top:-1px;">
          </form>
          <p class="text-center text-danger margin_bottom10">
            <a href="#" data-toggle="modal" data-target="#myModalpass" id="forgotpass">
            Forgot Password?                    </a>
          </p>
          <!-- <p class="changeover">Don’t have an account? <a data-dismiss="modal" data-toggle="modal" href="#signupModal">Sign up</a></p>-->
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="myModalpass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog login_width" role="document">
      <div class="modal-content">
        <div class="modal-header no_border clearfix">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
              <svg viewBox="0 0 24 24" role="img" aria-label="Close" focusable="false" style="display: block; fill: rgb(0, 0, 0); height: 16px; width: 16px;">
                <path fill-rule="evenodd" d="M23.25 24a.744.744 0 0 1-.53-.22L12 13.062 1.28 23.782a.75.75 0 0 1-1.06-1.06L10.94 12 .22 1.28A.75.75 0 1 1 1.28.22L12 10.94 22.72.22a.749.749 0 1 1 1.06 1.06L13.062 12l10.72 10.72a.749.749 0 0 1-.53 1.28">
              </svg>
            </span>
          </button>
        </div>
        <div class="modal-body text-center">
          Enter the email address associated with your account, and we'll email you a link to reset your password.
          <form id="password-form" action="https://airfinchscript.com/forgotpassword" method="post" role="form">
            <input type="hidden" name="_csrf" value="TTFhcDBzV290UDUjZzgRCjpWFQhFAzMNGHwOG0Q8GAcMBgMAYSs7Qg==">
            <div class="form-group field-passwordresetrequestform-email">
              <input type="text" id="passwordresetrequestform-email" class="form-control margin_top30" name="PasswordResetRequestForm[email]" placeholder="Email">
              <p class="help-block help-block-error"></p>
            </div>
            <div class="login_or border_bottom"></div>
            <div class="form-group">
              <button type="submit" class="btn btn_email margin_top10 width100" name="reset-button">Send Reset Link</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script>
  $('.carousel').carousel({
     interval: 4000
  });
  $(document).ready(function() {
         var hourbased='yes';
     		$("#where-to-go-main").val("");
     		$("#check-in-main").val("");
     		$("#check-out-main").val("");
         $('#forgotpass').click(function () {
     	  $("#forgotpass").attr('data-dismiss','modal');
     	 /*document.cookie = "dismiss=true";
     	  // Load up a new modal...
     	  $('#loginModal').hide();
     	  $("#loginModal").removeClass("in");
     	  $(".modal-backdrop").remove();*/
     	     $("body").css("padding-right","0px");
     	   });

         //$(document).on('keyup',"", function (event) {
         $("#check-in-main").keydown(function(event){
             if (event.which == 13) {
             $("#check-in-main").readonlyDatepicker(true);
             }
         });
         $("#check-out-main").keydown(function(event){
             if (event.which == 13) {
             $("#check-out-main").readonlyDatepicker(true);
             }
         });
        $(function () {
             $("#check-in-main").datepicker({
             	minDate:new Date(),
                     onSelect: function (selected) {
                         var dt = new Date(selected);
                         if(hourbased=='no')
                         {
                           dt.setDate(dt.getDate() + 1);
                           $("#check-out-main").datepicker("option", "minDate", dt);
                         }
                         //
             			     //$("#check-out").datepicker('show');
                         //
                     },
             		onClose: function (selectedDate) {
             			$("#check-out-main").datepicker('show');
             		}
                 });
                 edate = new Date();
                  if(hourbased=='no'){ edate.setDate(edate.getDate()+1); }
                     $("#check-out-main").datepicker({
                 		minDate:edate,
                         onSelect: function (selected) {
                             var dt = new Date(selected);
                             if(hourbased=='no'){dt.setDate(dt.getDate() - 1);}
                             $("#check-in-main").datepicker("option", "maxDate", dt);
                         }
                     });

          });

         $("#check-in-mobile").keydown(function(event){
             if (event.which == 13) {
             $("#check-in-mobile").readonlyDatepicker(true);
             }
         });
         $("#check-out-mobile").keydown(function(event){
             if (event.which == 13) {
             $("#check-out-mobile").readonlyDatepicker(true);
             }
         });
         $(function () {
             $("#check-in-mobile").datepicker({
               minDate:new Date(),
                     onSelect: function (selected) {
                         var dt = new Date(selected);
                         if(hourbased=='no')
                         {
                           dt.setDate(dt.getDate() + 1);
                            //$("#check-out").datepicker('show');
                           $("#check-out-mobile").datepicker("option", "minDate", dt);
                         }
                     },
                 onClose: function (selectedDate) {
                   $("#check-out-mobile").datepicker('show');
                 }
                 });
               edate = new Date();
               if(hourbased=='no'){ edate.setDate(edate.getDate()+1);}
                   $("#check-out-mobile").datepicker({
                   minDate:edate,
                       onSelect: function (selected) {
                           var dt = new Date(selected);
                            if(hourbased=='no'){dt.setDate(dt.getDate() - 1)};
                           $("#check-in-mobile").datepicker("option", "maxDate", dt);
                       }
                   });

           });
  });




  function close_model_popup()
  {
  $("#welcomepopup").removeClass("in");
  $("#welcomepopup").css("display","none");
  }

  function initMapmain() {
  autocomplete = new google.maps.places.Autocomplete((document
  		.getElementById('where-to-go-main')), {
  	types : [ 'geocode' ],
     change: function(event, ui) {
       if (ui.item == null) {
           $("#where-to-go-main").val("");
           $("#where-to-go-main").focus();
       }
     },
  });
  }

  function initMapmobile() {
   autocomplete = new google.maps.places.Autocomplete((document
       .getElementById('where-to-go-mobile')), {
     types : [ 'geocode' ]
   });
  }

  google.maps.event.addDomListener(window, 'load', initMapmain);
  google.maps.event.addDomListener(window, 'load', initMapmobile);
</script>
<script>
  $( document ).ready(function() {

  $(".modal").on("hidden.bs.modal", function(){
      $(".help-block").html("");
      $(".form-group").removeClass("has-error");
  });

     $("#w2-success-0").css("display","block");
     $("#w2-success-0").css("right","0");
  });
  setTimeout(function() {
  	$("#w2-success-0").css("right","-845px");
  }, 4000);
</script>
<script>
  function myFunction() {
     var element = document.getElementById("checking-inputs");
     element.classList.toggle("checking-inputs-mystyle");
  }
</script>
<script type="text/javascript">
  $(function() {
      $('input[name="daterange"]').daterangepicker({
        //startDate: moment(),
        //endDate: moment().add(1, "days"),
        autoUpdateInput: false,
        locale: {
            cancelLabel: 'Clear'
        }
      });

      $('input[name="daterange"]').on('apply.daterangepicker', function(ev, picker) {
        var pStartDate = picker.startDate.format('MM/DD/YYYY');
        var pEndDate = picker.endDate.format('MM/DD/YYYY');

        if(pStartDate == pEndDate){
          var pStartDates = picker.startDate;
          //var pEndDates = picker.endDate.add(1, "days");
          var pEndDates = picker.endDate;
          $('#daterangepick_value').val(pStartDates.format('MM/DD/YYYY') + ' - ' +pEndDates.format('MM/DD/YYYY'));
           //$(this).val(pStartDates.format('DD MMM') + ' - ' + pEndDates.format('DD MMM'));
           $(this).val(pStartDates.format('DD MMM'));
        } else {
          $('#daterangepick_value').val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
          $(this).val(picker.startDate.format('DD MMM') + ' - ' + picker.endDate.format('DD MMM'));
        }
      });

      $('input[name="daterange"]').on('cancel.daterangepicker', function(ev, picker) {
          $('#daterangepick').data('daterangepicker').setStartDate(moment());
          $('#daterangepick').data('daterangepicker').setEndDate(moment());
          $(this).val('Dates');
          $('#daterangepick_value').val('');
      });

  });
</script>
<script type="text/javascript">
  $(document).ready(function () {
  var itemsMainDiv = ('.MultiCarousel');
  var itemsDiv = ('.MultiCarousel-inner');
  var itemWidth = "";

  $('.leftLst, .rightLst').click(function () {
      var condition = $(this).hasClass("leftLst");
      if (condition)
          click(0, this);
      else
          click(1, this)
  });

  ResCarouselSize();

  $(window).resize(function () {
      ResCarouselSize();
  });

  //this function define the size of the items
  function ResCarouselSize() {
      var incno = 0;
      var dataItems = ("data-items");
      var itemClass = ('.item');
      var id = 0;
      var btnParentSb = '';
      var itemsSplit = '';
      var sampwidth = $(itemsMainDiv).width();
      var bodyWidth = $('body').width();
      $(itemsDiv).each(function () {
          id = id + 1;
          var itemNumbers = $(this).find(itemClass).length;
          btnParentSb = $(this).parent().attr(dataItems);
          itemsSplit = btnParentSb.split(',');
          $(this).parent().attr("id", "MultiCarousel" + id);


          if (bodyWidth >= 1200) {
              incno = itemsSplit[3];
              itemWidth = sampwidth / incno;
          }
          else if (bodyWidth >= 992) {
              incno = itemsSplit[2];
              itemWidth = sampwidth / incno;
          }
          else if (bodyWidth >= 768) {
              incno = itemsSplit[1];
              itemWidth = sampwidth / incno;
          }
          else if (bodyWidth >= 550) {
              incno = itemsSplit[1];
              itemWidth = sampwidth / incno;
          }
          else {
              incno = itemsSplit[0];
              itemWidth = sampwidth / incno;
          }
          $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
          $(this).find(itemClass).each(function () {
              $(this).outerWidth(itemWidth);
          });

          $(".leftLst").addClass("over");
          $(".rightLst").removeClass("over");

      });
  }
  //this function used to move the items
  function ResCarousel(e, el, s) {
      var leftBtn = ('.leftLst');
      var rightBtn = ('.rightLst');
      var translateXval = '';
      var divStyle = $(el + ' ' + itemsDiv).css('transform');
      var values = divStyle.match(/-?[\d\.]+/g);
      var xds = Math.abs(values[4]);
      if (e == 0) {
          translateXval = parseInt(xds) - parseInt(itemWidth * s);
          $(el + ' ' + rightBtn).removeClass("over");

          if (translateXval <= itemWidth / 2) {
              translateXval = 0;
              $(el + ' ' + leftBtn).addClass("over");
          }
      }
      else if (e == 1) {
          var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
          translateXval = parseInt(xds) + parseInt(itemWidth * s);
          $(el + ' ' + leftBtn).removeClass("over");

          if (translateXval >= itemsCondition - itemWidth / 2) {
              translateXval = itemsCondition;
              $(el + ' ' + rightBtn).addClass("over");
          }
      }
      $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
  }

  //It is used to get some elements from btn
  function click(ell, ee) {
      var Parent = "#" + $(ee).parent().attr("id");
      var slide = $(Parent).attr("data-slide");
      ResCarousel(ell, Parent, slide);
  }

  });


  function searchfeatured()
  {
      window.location.href = "search/type/featured.html";
      return false;
  }


  function searcharound()
  {
      window.location.href = "search/type/anywhere.html";
      return false;
  }

  function searchtraverseworld()
  {
      window.location.href = "search/type/traverse.html";
      return false;
  }


  function Toggle() {
          var temp = document.getElementById("login-password");
          if (temp.type === "password") {
              temp.type = "text";
          }
          else {
              temp.type = "password";
          }
      }

  function ToggleSignup() {
          var temp = document.getElementById("password");
          if (temp.type === "password") {
              temp.type = "text";
          }
          else {
              temp.type = "password";
          }
      }
</script>
<script>
  $(document).on('change', '#bmonth, #byear', function(e){
      var year = $('#byear').val();
      var month = $('#bmonth').val();
      if(month>0 && month<=12 && year > 0) {
        var getDaysInMonth = function(month,year) {
         return new Date(year, month, 0).getDate();
        };
        var totalDays = getDaysInMonth(month, year);
        var count;
        var totalText = "";
        for(count = 1; count<=totalDays; count++) {
          totalText+="<option value='"+count+"'>"+count+"</option>";
        }
        $('#bday').html(totalText);
      }
  });
</script>
<?php //include 'footer.php';?>
<!-- footer end -->
<script src="<?php echo $theme_url;?>assets/airbnb/c0b7f169/yii.js"></script>
<script src="<?php echo $theme_url;?>assets/airbnb/938cd62d/authchoice.js"></script>
<script src="<?php echo $theme_url;?>assets/airbnb/c0b7f169/yii.validation.js"></script>
<script src="<?php echo $theme_url;?>assets/airbnb/c0b7f169/yii.activeForm.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {
  $('#w0').authchoice();
  jQuery('#form-signup').yiiActiveForm([{"id":"signupform-firstname","name":"firstname","container":".field-signupform-firstname","input":"#signupform-firstname","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {value = yii.validation.trim($form, attribute, []);yii.validation.required(value, messages, {"message":"Firstname cannot be blank."});yii.validation.string(value, messages, {"message":"Firstname must be a string.","min":3,"tooShort":"Firstname should contain at least 3 characters.","max":255,"tooLong":"Firstname should contain at most 255 characters.","skipOnEmpty":1});}},{"id":"signupform-lastname","name":"lastname","container":".field-signupform-lastname","input":"#signupform-lastname","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {value = yii.validation.trim($form, attribute, []);yii.validation.required(value, messages, {"message":"Lastname cannot be blank."});yii.validation.string(value, messages, {"message":"Lastname must be a string.","min":3,"tooShort":"Lastname should contain at least 3 characters.","max":255,"tooLong":"Lastname should contain at most 255 characters.","skipOnEmpty":1});}},{"id":"signupform-email","name":"email","container":".field-signupform-email","input":"#signupform-email","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {value = yii.validation.trim($form, attribute, []);yii.validation.required(value, messages, {"message":"Email cannot be blank."});yii.validation.string(value, messages, {"message":"Email must be a string.","max":255,"tooLong":"Email should contain at most 255 characters.","skipOnEmpty":1});}},{"id":"signupform-password","name":"password","container":".field-signupform-password","input":"#signupform-password","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Password cannot be blank."});}}], []);
  $('#w1').authchoice();
  jQuery('#login-form').yiiActiveForm([{"id":"signupform-email","name":"email","container":".field-signupform-email","input":"#signupform-email","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {value = yii.validation.trim($form, attribute, []);yii.validation.required(value, messages, {"message":"Email cannot be blank."});yii.validation.string(value, messages, {"message":"Email must be a string.","max":255,"tooLong":"Email should contain at most 255 characters.","skipOnEmpty":1});}},{"id":"signupform-password","name":"password","container":".field-signupform-password","input":"#signupform-password","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Password cannot be blank."});}}], []);
  jQuery('#password-form').yiiActiveForm([], {"validateOnSubmit":false});
  });
</script>
<script type="text/javascript" src="<?php echo $theme_url;?>assets/airbnb/js/jquery-ui.min.js"></script>
<script>
  $(document).ready(function(){

  	var docHeight = $(window).height();
  	   var footerHeight = $('.footer').height();
  	   var footerTop = $('.footer').position().top + footerHeight;

  	   if (footerTop < docHeight) {
  	    $('.footer').css('margin-top', 10+ (docHeight - footerTop) + 'px');
  	   }

  	$("body").css("overflow-x","hidden");
  	$(".alert-success").addClass("flashcss");

  	$("#closebutton").click(function(){
  		$(".alert-success").removeClass("flashcss");
  	});

  	if($('body > div > div.alert').hasClass('alert-success')){
  		setTimeout(function(){
             $(".alert-success").removeClass("flashcss");
       	},5000);
  	}

  	});
</script>
<style type="text/css">
  ul.home-menu{padding:0 20px!important}ul.home-menu li a.home-menu-text,ul.home-menu li a.home-menu-text:focus{padding:0;background:0 0;color:#484848!important;font-size:15px!important;font-family:Circular,-apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,sans-serif;font-weight:600;opacity:.9}ul.home-menu li a.home-menu-text:hover{background:0 0!important;color:#484848!important}ul.home-menu li.note-msg a:hover{background:0 0!important;color:#fe5771!important}.note_count{font-size:14px!important}.note_view{font-size:14px!important;font-weight:500!important;float:right}.notify-round{fill:#008489!important;height:6px!important;position:absolute!important;top:50%!important;transform:translate3d(4px,-8px,0)!important;width:6px!important;animation-name:keyframe_p1skye!important;animation-duration:.5s!important;animation-timing-function:ease!important;animation-fill-mode:both!important;opacity:1!important;right:10px!important}
</style>
</body>
</html>