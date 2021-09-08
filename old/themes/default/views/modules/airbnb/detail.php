<style>
    .navbar {
        margin-bottom: 0 !important
    }
</style>
<div class="container hiddencls" id="searchcalendardiv">
    <div class="col-lg-12 airfcfx-dd-calendar-cnt">
        <div class="airfcfx-dd-calendar border1  bg_white">

            <div class="table1 margin_top10 margin_left5 margin_bottom10 padd_5_10 checkinalgn">

                <div class="checkindivcls">
                    <label>Check In</label>
                    <input id="check-in-main" type="text" class="form-control" placeholder="DD-MM-YYYY" value="">
                </div>
                <div class="checkindivcls">
                    <label>Check Out</label>
                    <input id="check-out-main" type="text" class="form-control" placeholder="DD-MM-YYYY" value="">
                </div>
                <div class="guestdivcls">
                    <label>Guests</label>
                    <select class="form-control margin10" id="guest-count">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
            </div>
            <!--table1 end-->
            <div class="airfcfx-dd-calendar-rt-txt col-lg-12">Room Type</div>
            <div class="airfcfx-dd-cal-RT">
                <div class="pull-left padleft">
                    <label>
                        <input id="roomtype1" class="airfcfx-search-drop-checkbox" type="checkbox" name="roomtype" value="1">
                        <div class="airfcfx-search-checkbox-text">Entire Place</div>
                    </label>
                </div>
            </div>

            <div class="airfcfx-dd-cal-RT">
                <div class="pull-left padleft">
                    <label>
                        <input id="roomtype2" class="airfcfx-search-drop-checkbox" type="checkbox" name="roomtype" value="2">
                        <div class="airfcfx-search-checkbox-text">Private Room</div>
                    </label>
                </div>
            </div>

            <div class="airfcfx-dd-cal-RT">
                <div class="pull-left padleft">
                    <label>
                        <input id="roomtype3" class="airfcfx-search-drop-checkbox" type="checkbox" name="roomtype" value="3">
                        <div class="airfcfx-search-checkbox-text">Shared Room</div>
                    </label>
                </div>
            </div>
            <div class="airfcfx-search-dd-findplace-btn">
                <button class="airfcfx-findplace-btn airfcfx-panel btn btn_email" onclick="searchlistmains()">Find a place</button>
            </div>
        </div>
        <!--border1 end-->
    </div>
</div>

<style type="text/css">
    .booknow-admin {
        display: block;
    }
</style>

<div class="navbar-fixed-top header_top_invidual">
    <div class="container">
        <div class="row">
            <div class="padding-top10 col-xs-12 col-sm-8">
                <ul class="list-inline">

                    <li><a href="#about" class="black-color rm_text_deco1 text_focus_color highlightcls" id="aboutcls"> About this listing</a></li>

                    <li><a href="#photo" class="black-color rm_text_deco1 text_focus_color highlightcls" id="photocls">Photos </a></li>

                    <!--li><a href="#review" class="text_white rm_text_deco1"> Reviews</a></li-->

                    <li><a href="#video" class="black-color rm_text_deco1 text_focus_color highlightcls" id="videocls">Video</a></li>
                    <li><a href="#host" class="black-color rm_text_deco1 text_focus_color highlightcls" id="hostcls">The Host</a></li>

                    <li><a href="#location" class="black-color rm_text_deco1 text_focus_color highlightcls" id="locationcls">Location</a></li>

                </ul>
            </div>
            <!--col-sm-8 end-->
            <div class="col-xs-12 col-sm-4 padding-right0">
                <div class="bg_white header_adj">
                    <div class="row">
                        <div class="margin_topr10 col-xs-12 col-sm-8">

                            <input type="hidden" id="list_booking" value="perhour" />
                            <h3 class="margin_bottom0"> $20.03 </h3>
                            <input type="hidden" id="ahourlyprice" value="20.03" />
                        </div>
                        <input tabindex='-1' aria-hidden='true' name="listurl" value="https://airfinchscript.com/user/listing/view/M184MTAy" id="listurl">
                        <!--col-sm-8 end-->
                        <button type="button" class="close mobileviewreq" onclick="closereqpopup();" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div class="display-inline-block text-right headreqmob">
                            <p>per hour</p>
                        </div>
                        <!--col-sm-4 end-->
                    </div>
                    <!--row end-->
                </div>
                <!--header_adj end-->
            </div>
            <!--col-sm-4 end-->
        </div>
        <!--row end-->
    </div>
    <!--container end-->
</div>
<!--row end-->

<div class="share-view">
    <div class="banner2" style="background-image:url('<?php echo $theme_url;?>assets/airbnb/albums/images/listings/1552385505_2_0.jpg');" onclick="javascript:$('.preview-gallery').css({'opacity':'1','z-index':'1032'});"></div>
    <div class="sharebtn">
        <a href="#" data-toggle="modal" data-target="#sharemodal">
            <span>
              <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="height:15px; width:15px; display:block; fill:currentColor">
                    <path d="m22.19 8.5h-3.14a.81.81 0 0 0 -.81.8c0 .44.36.8.81.8h2.33v12.31h-18.76v-12.31h3.11c.45 0 .81-.36.81-.8a.81.81 0 0 0 -.81-.8h-3.92a.81.81 0 0 0 -.81.8v13.91c0 .44.36.8.81.8h20.38c.45 0 .81-.36.81-.8v-13.91a.81.81 0 0 0 -.81-.8zm-14.11-3.82c.19 0 .36-.06.51-.18l2.01-1.58.6-.47v13.79c0 .44.36.8.81.8s.81-.36.81-.8v-13.79l.59.47 2.01 1.58a.8.8 0 0 0 .5.18.81.81 0 0 0 .63-.3.79.79 0 0 0 -.13-1.12l-3.92-3.09a.42.42 0 0 0 -.07-.04l-.07-.03-.01-.01-.05-.03a.76.76 0 0 0 -.3-.06.81.81 0 0 0 -.3.06l-.01.01-.06.04-.07.03a.42.42 0 0 0 -.07.04l-3.92 3.09a.79.79 0 0 0 -.13 1.12c.16.19.39.3.63.3z" fill-rule="evenodd"></path>
              </svg>
          </span> Share
        </a>
    </div>
</div>
<div class="bg_white">
    <div class="container tpp">
        <div class="row">
            <input type="hidden" id="listingid" value="3">
            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-6 margin_top20 margin_bottom20">
                <div class="margin_top5">
                    <p class="luxiry-title">Private Room</p>
                </div>
                <h3 class="review-title"><b>
   South Mission Beach Zen-Like Home</b></h3>
                <div class="margin_top5">
                    <p class="luxiry-title">Cottage</p>
                </div>
                <script>
                    //Fb Share listing.
                    function fbShare(url, title, descr, image, winWidth, winHeight) {
                        var winTop = (screen.height / 2) - (winHeight / 2);
                        var winLeft = (screen.width / 2) - (winWidth / 2);
                        window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&picture=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
                    }
                </script>
                <p class="text_gray1">San Diego, California, United States</p>
                <div class="margin_top15 text-left listtypes clearfix">
                    <ul>
                        <li class="margin_top20 listroomdiv">
                            <p class="text_gray1"><span class="review-icons"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 80.13 80.13" style="enable-background:new 0 0 80.13 80.13;" xml:space="preserve">
       <path d="M48.355,17.922c3.705,2.323,6.303,6.254,6.776,10.817c1.511,0.706,3.188,1.112,4.966,1.112   c6.491,0,11.752-5.261,11.752-11.751c0-6.491-5.261-11.752-11.752-11.752C53.668,6.35,48.453,11.517,48.355,17.922z M40.656,41.984   c6.491,0,11.752-5.262,11.752-11.752s-5.262-11.751-11.752-11.751c-6.49,0-11.754,5.262-11.754,11.752S34.166,41.984,40.656,41.984   z M45.641,42.785h-9.972c-8.297,0-15.047,6.751-15.047,15.048v12.195l0.031,0.191l0.84,0.263   c7.918,2.474,14.797,3.299,20.459,3.299c11.059,0,17.469-3.153,17.864-3.354l0.785-0.397h0.084V57.833   C60.688,49.536,53.938,42.785,45.641,42.785z M65.084,30.653h-9.895c-0.107,3.959-1.797,7.524-4.47,10.088   c7.375,2.193,12.771,9.032,12.771,17.11v3.758c9.77-0.358,15.4-3.127,15.771-3.313l0.785-0.398h0.084V45.699   C80.13,37.403,73.38,30.653,65.084,30.653z M20.035,29.853c2.299,0,4.438-0.671,6.25-1.814c0.576-3.757,2.59-7.04,5.467-9.276   c0.012-0.22,0.033-0.438,0.033-0.66c0-6.491-5.262-11.752-11.75-11.752c-6.492,0-11.752,5.261-11.752,11.752   C8.283,24.591,13.543,29.853,20.035,29.853z M30.589,40.741c-2.66-2.551-4.344-6.097-4.467-10.032   c-0.367-0.027-0.73-0.056-1.104-0.056h-9.971C6.75,30.653,0,37.403,0,45.699v12.197l0.031,0.188l0.84,0.265   c6.352,1.983,12.021,2.897,16.945,3.185v-3.683C17.818,49.773,23.212,42.936,30.589,40.741z" fill="#484848"/></svg><!--<img class="margin_bottom5" src="https://airfinchscript.com/images/users.png">--></span>2 Guests</p>
                        </li>
                        <!--col-sm-3 end-->
                        <li class="margin_top20 listroomdiv">
                            <p class="text_gray1"><span class="review-icons"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 525.938 525.938" style="enable-background:new 0 0 525.938 525.938;" xml:space="preserve">
       <path d="M430.312,66.938H286.875v382.5h143.438V66.938z M314.606,258.666c-6.694,0-11.953-5.26-11.953-11.954   s5.259-11.953,11.953-11.953c6.693,0,11.953,5.259,11.953,11.953C326.081,253.406,320.822,258.666,314.606,258.666z" fill="#484848"/>
       <path d="M478.125,525.938V497.25v-28.688V28.688H47.812v439.875v28.688v28.688H76.5V497.25h172.125v28.688h28.688V497.25h172.125   v28.688H478.125z M248.625,459H86.062V57.375h162.562V459z M439.875,459H277.312V57.375h162.562V459z" fill="#484848"/>
       <polygon points="478.125,19.125 497.25,0 28.688,0 47.812,19.125  " fill="#484848"/></svg><!--<img class="margin_bottom5" src="https://airfinchscript.com/images/door.png">--></span> 2 Bedrooms</p>
                        </li>
                        <!--col-sm-3 end-->
                        <li class="margin_top20 listroomdiv">
                            <p class="text_gray1"><span class="review-icons"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 482.924 482.924" style="enable-background:new 0 0 482.924 482.924;" xml:space="preserve" width="20px" height="20px">
       <path d="M54.979,180.626c0-25.204,20.505-45.71,45.71-45.71h102.608c15.933,0,29.981,8.2,38.165,20.595   c8.185-12.396,22.232-20.595,38.165-20.595h102.609c25.204,0,45.709,20.506,45.709,45.71v2.105h11.443v-44.574   c0-27.66-22.503-50.163-50.163-50.163H93.698c-27.66,0-50.163,22.503-50.163,50.163v44.574h11.443V180.626z" fill="#484848"/>
       <path d="M463.712,204.076H19.211C8.618,204.076,0,212.694,0,223.287v111.524c0,10.593,8.618,19.211,19.211,19.211h7.997   l-9.449,26.668c-1.969,5.556,0.94,11.656,6.495,13.624c1.179,0.417,2.382,0.616,3.565,0.616c4.393,0,8.509-2.734,10.06-7.112   l11.975-33.797h383.216l11.975,33.797c1.551,4.378,5.666,7.112,10.06,7.112c1.183,0,2.386-0.199,3.565-0.616   c5.556-1.969,8.464-8.069,6.495-13.624l-9.449-26.668h7.997c10.593,0,19.211-8.618,19.211-19.211V223.287   C482.924,212.694,474.306,204.076,463.712,204.076z" fill="#484848"/>
       <path d="M279.627,156.262c-13.434,0-24.364,10.929-24.364,24.363v2.105h151.336v-2.105c0-13.434-10.929-24.363-24.363-24.363   H279.627z" fill="#484848"/>
       <path d="M100.689,156.262c-13.435,0-24.364,10.93-24.364,24.364v2.104h151.336v-2.105c0-13.434-10.929-24.363-24.364-24.363   H100.689z" fill="#484848"/></svg>
   <!--<img class="margin_bottom5" src="https://airfinchscript.com/images/bed.png">--></span>4 Beds</p>
                        </li>
                        <!--col-sm-3 end-->

                        <li class="margin_top20 listroomdiv">
                            <p class="text_gray1"><span class="review-icons"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 482.924 482.924" style="enable-background:new 0 0 482.924 482.924;" xml:space="preserve" width="20px" height="20px">
       <path d="M54.979,180.626c0-25.204,20.505-45.71,45.71-45.71h102.608c15.933,0,29.981,8.2,38.165,20.595   c8.185-12.396,22.232-20.595,38.165-20.595h102.609c25.204,0,45.709,20.506,45.709,45.71v2.105h11.443v-44.574   c0-27.66-22.503-50.163-50.163-50.163H93.698c-27.66,0-50.163,22.503-50.163,50.163v44.574h11.443V180.626z" fill="#484848"/>
       <path d="M463.712,204.076H19.211C8.618,204.076,0,212.694,0,223.287v111.524c0,10.593,8.618,19.211,19.211,19.211h7.997   l-9.449,26.668c-1.969,5.556,0.94,11.656,6.495,13.624c1.179,0.417,2.382,0.616,3.565,0.616c4.393,0,8.509-2.734,10.06-7.112   l11.975-33.797h383.216l11.975,33.797c1.551,4.378,5.666,7.112,10.06,7.112c1.183,0,2.386-0.199,3.565-0.616   c5.556-1.969,8.464-8.069,6.495-13.624l-9.449-26.668h7.997c10.593,0,19.211-8.618,19.211-19.211V223.287   C482.924,212.694,474.306,204.076,463.712,204.076z" fill="#484848"/>
       <path d="M279.627,156.262c-13.434,0-24.364,10.929-24.364,24.363v2.105h151.336v-2.105c0-13.434-10.929-24.363-24.363-24.363   H279.627z" fill="#484848"/>
       <path d="M100.689,156.262c-13.435,0-24.364,10.93-24.364,24.364v2.104h151.336v-2.105c0-13.434-10.929-24.363-24.364-24.363   H100.689z" fill="#484848"/></svg>
   <!--<img class="margin_bottom5" src="https://airfinchscript.com/images/bed.png">--></span>2 Baths</p>
                        </li>
                    </ul>
                </div>
                <!--row end-->

            </div>
            <!--col-sm-6 end-->
            <div class="col-xs-12 col-sm-2 col-md-2 text-center no-hor-padding">
                <div class="profile review-profile margin_top30 center-block"> <a href="profile/Mi0zODY%3d.html" class="text_gray1 margin_top10 center-block"><img class="img-responsive" src="<?php echo $theme_url;?>assets/airbnb/albums/images/users/usrimg.jpg"></a> </div>
                <a href="profile/Mi0zODY%3d.html" class="text_gray1 margin_top10 margin_bottom5 center-block">Demo</a></div>
            <!--col-sm-2 end-->
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-0 pos_rel wid margin_bottom20">
                <div class="pos_abs make_fix margin_top10 heightFixBook">

                    <div class="border1  bg_white booknow-admin noBottomBorder">

                        <div class="bg_white padding-bottom-none padding-3-type margin_adj clearfix ">

                            <div class="display-inline-block">
                                <h3 class="bold margin_bottom0 font-size22"> $20.03 </h3></div>
                            <!--col-sm-8 end-->
                            <button type="button" class="close mobileviewreq" onclick="closereqpopup();" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <div class="display-inline-block text-right headreqmob">
                                <p>per hour</p>
                            </div>
                            <!--col-sm-4 end-->
                            <div class="country-details col-lg-12 col-md-12 col-sm-12 col-xs-12 no-hor-padding">
                                <p class="margin_top5 place-star-rating"><span class="half-star-span">
                <span class="no-cover-star">
                  <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                </span>
                                    </span><span class="half-star-span">
                <span class="no-cover-star">
                  <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                </span>
                                    </span><span class="half-star-span">
                <span class="no-cover-star">
                  <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                </span>
                                    </span><span class="half-star-span">
                <span class="no-cover-star">
                  <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                </span>
                                    </span><span class="half-star-span">
                <span class="no-cover-star">
                  <svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
                </span>
                                    </span><span class="place-reviews"> 0 </span></p>
                            </div>
                        </div>
                        <!--row end-->
                        <div class="table1 margin_top5 margin_left5 margin_bottom5 padd_5_10 checkinalgn caltxt">

                            <label>Dates</label>
                            <div class="compaine-date checkindivcls">

                                <input type="text" id="startdate" readonly class="font-size12 form-control margin10 cal" placeholder="Check In">

                                <span class="date-vs"><svg fill="#484848" viewBox="0 0 1000 1000"><path d="M694.4 242.4l249.1 249.1c11 11 11 21 0 32L694.4 772.7c-5 5-10 7-16 7s-11-2-16-7c-11-11-11-21 0-32l210.1-210.1H67.1c-13 0-23-10-23-23s10-23 23-23h805.4L662.4 274.5c-21-21.1 11-53.1 32-32.1z"></path></svg></span>

                                <input type="text" id="enddate" readonly class="font-size12 form-control margin10 cal" placeholder="Check Out">

                            </div>
                            <div class="seperate-div guestdivcls">
                                <label>Guests</label>
                                <select class="form-control margin10" id="guests">
                                    <option value=1>1</option>
                                    <option value=2>2</option>
                                </select>

                            </div>
                        </div>
                            <div class="margin_left5 margin_bottom5 padd_5_10 showhoursdiv showhourstimingdiv" style="">
                                <label>Booking Time</label>
                                <select class="form-control" id="booking_time" onchange="changehours();">
                                    <option value="">Select Booking</option>
                                    <option value="07:00-12:00">07:00 AM-12:00 PM</option>
                                    <option value="13:00-18:00">01:00 PM-06:00 PM</option>
                                    <option value="19:00-23:00">07:00 PM-11:00 PM</option>
                                </select>
                                <div class="errcls centertxt" id="booking_time_err"></div>
                            </div>
                      <!--   </div> -->

                            <!--table1 end-->
                            
                       
                        <div id="pricediv" class="hiddencls">
                            <input type="hidden" id="commissionprice">
                            <div class="table1 padd_5_10">
                                <div class="table1">
                                    <div class="tab_cel padding5 "><span id="perprice">
                   20.03</span> x <span id="noofdays"></span> <span id="nameofdays"></span></div>
                                    <div class="tab_cel padding5 " style="text-align:right;">
                                        <b>$ <span id="listtotalprice"></span></b>
                                    </div>
                                </div>
                                <hr class="margin3" />
                                <div class="table1">
                                    <div class="tab_cel padding5 ">Security Deposit + Commission</div>
                                    <div class="tab_cel padding5 " style="text-align:right;">
                                        $ <span id="securitycommprice"></span>
                                    </div>
                                </div>
                                <hr class="margin3" />
                                <div class="table1">
                                    <div class="tab_cel padding5 ">
                                        Site charge + Taxes
                                    </div>
                                    <div class="tab_cel padding5 " style="text-align:right;">
                                        $ <span id="siteprice"></span>
                                    </div>
                                </div>
                                <hr class="margin3" />
                                <div class="table1">
                                    <div class="tab_cel padding5 ">
                                        Cleaning fee + Service fee
                                    </div>
                                    <div class="tab_cel padding5 " style="text-align:right;">
                                        $ <span id="cleaningprice"></span>
                                    </div>
                                </div>
                                <hr class="margin3" />
                                <input type="hidden" name="taxprice" id="taxprice" value="">
                                <input type="hidden" name="siteprice" id="siteprice" value="">
                                <!-- <div class="table1">
               <div class="tab_cel padding5 ">
                  '. Yii::t('app','Occupancy Taxes').'
               </div>
               <div class="tab_cel padding5 " style="text-align:right;">
                  '.$currency_symbol.' <span id="taxprice"></span>
               </div>
           </div><hr class="margin3" />
           -->
                                <div class="table1">
                                    <div class="tab_cel padding5 ">
                                        Total
                                    </div>
                                    <div class="tab_cel padding5 " style="text-align:right;">
                                        $ <span id="totalprice"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="errcls centertxt" id="maxstayerr"></div>
                        <div class="padding10 margin_left5 margin_right5">
                            <form id="form-checkoutpay" action="https://airfinchscript.com/user/listing/sendrequest" method="post" role="form">
                                <input type="hidden" name="_csrf" value="eVRaYVg0YnBANQ4yD38kFQ4zLhktRAYSLBk1Cix7LRg4YzgRCWwOXQ==">
                                <input type="hidden" name="checkoutpay_listid" id="checkoutpay_listid" value="3" />
                                <input type="hidden" name="checkoutpay_startdate" id="checkoutpay_startdate" value="" />
                                <input type="hidden" name="checkoutpay_enddate" id="checkoutpay_enddate" value="" />
                                <input type="hidden" name="checkoutpay_guests" id="checkoutpay_guests" value="" />
                                <input type="hidden" name="checkoutpay_booking_time" id="checkoutpay_booking_time" value="" />
                                <input type="hidden" name="checkoutpay_book_type" id="checkoutpay_book_type" value="reserve" />
                                <button type="submit" onclick="" id="requestbtn" class="brightred btn-pad btn btn-danger full_width"><span>Request To Book</span></button>
                            </form>
                        </div>
                            <center><img id="paypalloadingimg" src="<?php echo $theme_url;?>assets/airbnb/images/load.gif" class="loading" style="margin-top:5px;"></center>
                            <div class="errcls centertxt" id="emailverifyerr"></div>
                        </div>
                        <div class="payment-form hiddencls"></div>
                    </div>
                    <!--border1 end-->
                </div>
                <!--pos_end-->

            </div>
            <!--col-sm-4 end-->

        </div>

    </div>
    <!--row end-->

</div>
<!--container end-->
</div>
<!--bg_white end-->
<div class="container">

    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8">
            <span id="about" class="scrollhighlight"> </span>
            <!--<h3 class="margin_top30 "><b>About this listing </b></h3>-->

            <p class="margin_top0 showed more-descrip" style="word-wrap:break-word; text-align:justify; ">This fully furnished second story South Mission bayside studio offers relaxed beach living. This studio sleeps 2 (Queen Bed), 2 Beach cruisers & 2 Boogie Boards are provided; private off street parking; steps to the bay and short stroll to the beach.
                <br />
                <br /> Guest access
                <br />
                <br /> Guests will have access to private off-street parking, two beach cruisers and two boogie boards. There is also a small patio with a grill.
                <br />
                <br /> Interaction with guests
                <br />
                <br /> Very limited interaction with guests other than initial booking communications.</p>

            <!--
<div class="border_bottom margin_top10"></div>
<div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="luxury-details">
         <h5 class="luxiry-title">The Space</h5>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <ul>
               <li><span>Accommodates: <b>2</b></span></li>
               <li><span>Property type: <b>Cottage</b></span></li>
               <li><span>Room typ: <b>Private Room</b></span></li>
            </ul>
         </div>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <ul>
               <li><span>Beds: <b>4</b></span></li>
               <li><span>Bathrooms: <b>2</b></span></li>
               <li><span>Bedrooms: <b>2</b></span></li>
            </ul>
         </div>
      </div>
   </div>
</div>
-->

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="luxury-details">
                        <h5 class="luxiry-title">Amenities</h5>
                        <div id="lessamenity">
                            <div class="right-space col-md-6 col-sm-6 col-xs-12">
                                <ul class="displayblock">
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/common/additional_1552310539.png" class="fa fa-television" /> <span>Essentials</span></li>
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/common/additional_1552310631.png" class="fa fa-television" /> <span>Kitchen</span></li>
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/common/additional_1552310719.png" class="fa fa-television" /> <span>Air Conditioning</span></li>
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/common/additional_1552310759.png" class="fa fa-television" /> <span>Heating</span></li>
                                </ul>
                            </div>
                            <div class="right-space col-md-6 col-sm-6 col-xs-12">
                                <ul class="displayblock">
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/common/additional_1552310803.png" class="fa fa-television" /> <span>Wifi</span></li>
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/common/additional_1552310893.png" class="fa fa-television" /> <span>24-Hour Check-in</span></li>
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/common/additional_1552311006.png" class="fa fa-television" /> <span>TV</span></li>
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/common/additional_1552311198.png" class="fa fa-television" /> <span>Cable</span></li>
                                </ul>
                            </div>
                            <div class="margin_top5 col-xs-12 col-sm-4 no-hor-padding">
                                <a class="moresymboltxt" href="javascript:void(0);" onclick="show_more_amenity()">
                                    <p class="text-danger"><b> 
              Show more amenities</b></p>
                                </a>
                            </div>
                        </div>
                        <div id="moreamenity" class="hiddencls">
                            <div class="right-space col-md-6 col-sm-6 col-xs-12">
                                <ul class="displayblock">
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/common/additional_1552310539.png" class="fa fa-television" /> <span>Essentials</span></li>
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/common/additional_1552310631.png" class="fa fa-television" /> <span>Kitchen</span></li>
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/common/additional_1552310719.png" class="fa fa-television" /> <span>Air Conditioning</span></li>
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/common/additional_1552310759.png" class="fa fa-television" /> <span>Heating</span></li>
                                </ul>
                            </div>
                            <div class="right-space col-md-6 col-sm-6 col-xs-12">
                                <ul class="displayblock">
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/common/additional_1552310803.png" class="fa fa-television" /> <span>Wifi</span></li>
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/common/additional_1552310893.png" class="fa fa-television" /> <span>24-Hour Check-in</span></li>
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/common/additional_1552311006.png" class="fa fa-television" /> <span>TV</span></li>
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/common/additional_1552311198.png" class="fa fa-television" /> <span>Cable</span></li>
                                </ul>
                            </div>
                            <div class="right-space col-md-6 col-sm-6 col-xs-12">
                                <ul class="displayblock">
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/common/additional_1552311342.png" class="fa fa-television" /> <span>Hangers</span></li>
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/common/additional_1552311391.png" class="fa fa-television" /> <span>Laptop friendly workspace</span></li>
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/additional/additional_1552309511.png" class="fa fa-television" /> <span>Hot tub</span></li>
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/additional/additional_1552309668.png" class="fa fa-television" /> <span>Cooking basics</span></li>
                                </ul>
                            </div>
                            <div class="right-space col-md-6 col-sm-6 col-xs-12">
                                <ul class="displayblock">
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/additional/additional_1552309828.png" class="fa fa-television" /> <span>Pool</span></li>
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/additional/additional_1552309948.png" class="fa fa-television" /> <span>Free parking on premises</span></li>
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/additional/additional_1552310077.png" class="fa fa-television" /> <span>Gym</span></li>
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/additional/additional_1552310198.png" class="fa fa-television" /> <span>BBQ grill</span></li>
                                </ul>
                            </div>
                            <div class="right-space col-md-6 col-sm-6 col-xs-12">
                                <ul class="displayblock">
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/additional/additional_1552310332.png" class="fa fa-television" /> <span>Washer</span></li>
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/additional/additional_1552310419.png" class="fa fa-television" /> <span>Dryer</span></li>
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/special/additional_1552311523.png" class="fa fa-television" /> <span>Pets allowed</span></li>
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/special/additional_1552311583.png" class="fa fa-television" /> <span>Family/Kid Friendly</span></li>
                                </ul>
                            </div>
                            <div class="right-space col-md-6 col-sm-6 col-xs-12">
                                <ul class="displayblock">
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/special/additional_1552311636.png" class="fa fa-television" /> <span>Events</span></li>
                                    <li><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/special/additional_1552311701.png" class="fa fa-television" /> <span>Wheelchair Accessible</span></li>
                            </div>
                            <div class="margin_top5 col-xs-12 col-sm-4 no-hor-padding">
                                <a href="javascript:void(0);" onclick="show_less_amenity()" class="symboltxt">
                                    <p class=" text-danger"><b>- Less </b></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="border_bottom margin_top10"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="luxury-details">
                        <h5 class="luxiry-title">
            Prices            <span style="text-transform: lowercase;">
              (per hour basis)            </span>
         </h5>
                        <div class="right-space col-md-6 col-sm-6 col-xs-12">
                            <ul>
                                <li><span>Usual Price: <span>$20.03</span></span>
                                </li>
                                <li><span>Security Deposit: <span>$10.27</span></span>
                                </li>

                            </ul>
                        </div>

                        <div class="right-space col-md-6 col-sm-6 col-xs-12">
                            <ul>
                                <li>
                                    <span>Weekend Price: 
                  <span>
                    $19.52                  </span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border_bottom margin_top10"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="luxury-details">
                        <h5 class="luxiry-title">Safety Features</h5>
                        <div class="right-space col-md-6 col-sm-6 col-xs-12">
                            <ul class="">
                                <li><span>Fire extinguisher</span></li>
                            </ul>
                        </div>
                        <div class="right-space col-md-6 col-sm-6 col-xs-12">
                            <ul class="">
                                <li><span>Carbon monoxide detector</span></li>
                            </ul>
                        </div>
                        <div class="right-space col-md-6 col-sm-6 col-xs-12">
                            <ul class="">
                                <li><span>Smoke detector</span></li>
                            </ul>
                        </div>
                        <div class="right-space col-md-6 col-sm-6 col-xs-12">
                            <ul class="">
                                <li><span>First aid kit</span></li>
                            </ul>
                        </div>
                        <div class="right-space col-md-6 col-sm-6 col-xs-12">
                            <ul class="">
                                <li><span>Electric Tools</span></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="border_bottom margin_top10"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="luxury-details">
                        <h5 class="luxiry-title">Booking availability</h5>

                        <div class="right-space col-md-6 col-sm-6 col-xs-12">
                            <ul class="displayblock">
                                <li><span>07:00 AM - 12:00 PM</span></li>
                            </ul>
                        </div>

                        <div class="right-space col-md-6 col-sm-6 col-xs-12">
                            <ul class="displayblock">
                                <li><span>01:00 PM - 06:00 PM</span></li>
                            </ul>
                        </div>

                        <div class="right-space col-md-6 col-sm-6 col-xs-12">
                            <ul class="displayblock">
                                <li><span>07:00 PM - 11:00 PM</span></li>
                            </ul>
                        </div>
                        <div id="viewCalendar" class="right-space col-md-6 col-sm-6 col-xs-12 booknow-admin">
                            <ul class="displayblock">
                                <li>
                                    <span>
                           <a href="javascript:void(0);" onclick="focus_checkin();">
                              <p class="mine-blue-txt margin_top10">View Calendar</p>
                           </a>
                        </span>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="border_bottom margin_top10"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="luxury-details">
                        <h5 class="luxiry-title">Cancellations</h5>
                        <div class="col-md-12 col-sm-12 col-xs-12 no-hor-padding">
                            <ul class="displayblock">
                                <li>
                                    <p>Cancellation Policy Name: <b>Liberal</b></p>
                                </li>
                                <li>
                                    <p>For Guest Attention: Cancel the trip before 15days of your check-in and get a 100% refund (minus service fees and Commission Fees). Cancel within 15 days of your trip - 22% amount will deducted and refunded to you (minus service fees and Commission Fees). Cancellation amount will be credited to Host.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row margin_top10">
                <div class="col-xs-12">
                    <span class=" scrollhighlight" id="photo">
           <h3 class="border_top padding_top15 margin_top0 margin_bottom30"><b>More Photos</b></h3>
           <div class="banner2" style="background-image:url('<?php echo $theme_url;?>assets/airbnb/albums/images/listings/1552385505_2_0.jpg');" onclick="javascript:$('.preview-gallery').css({'opacity':'1','z-index':'1032'});"></div>
           </div>
           </div><!--row end--><ul id="thumb-listed"> 
        <li class="thumb-2"><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/listings/1552385505_2_0.jpg" onclick="javascript:$('.preview-gallery').css({'opacity':'1','z-index':'1032'});"></li> 

        <li class="thumb-3"><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/listings/1552385505_2_0.jpg" onclick="javascript:$('.preview-gallery').css({'opacity':'1','z-index':'1032'});"></li> 

        <li class="thumb-4"><img src="<?php echo $theme_url;?>assets/airbnb/albums/images/listings/1552385505_2_0.jpg" onclick="javascript:$('.preview-gallery').css({'opacity':'1','z-index':'1032'});"></li> 
        </ul><div class="row margin_top10 airfcfx-listing-thumb-img-cnt"><div class="col-xs-12 col-sm-4 airfcfx-listing-thumb-img" >
           <div class="banner1" style="background-image:url('<?php echo $theme_url;?>assets/airbnb/albums/images/listings/1552385505_2_0.jpg);" onclick="javascript:$('.preview-gallery').css({'opacity':'1','z-index':'1032'});"></div>
           </div><div class="col-xs-12 col-sm-4 airfcfx-listing-thumb-img" >
           <div class="banner1" style="background-image:url('<?php echo $theme_url;?>assets/airbnb/albums/images/listings/1552385505_2_0.jpg);" onclick="javascript:$('.preview-gallery').css({'opacity':'1','z-index':'1032'});"></div>
           </div><div class="col-xs-12 col-sm-4 airfcfx-listing-thumb-img" >
           <div class="banner1" style="background-image:url('<?php echo $theme_url;?>assets/airbnb/albums/images/listings/1552385505_2_0.jpg);" onclick="javascript:$('.preview-gallery').css({'opacity':'1','z-index':'1032'});"></div>
           </div></div><!--row end--><link rel="stylesheet" href="<?php echo $theme_url;?>assets/airbnb/css/supersized.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $theme_url;?>assets/airbnb/css/supersized.shutter.css" type="text/css" media="screen" />
<!-- <script type="text/javascript" src="<?php echo $theme_url;?>assets/airbnb/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?php echo $theme_url;?>assets/airbnb/js/supersized.3.2.7.min.js"></script>
<script type="text/javascript" src="<?php echo $theme_url;?>assets/airbnb/js/supersized.shutter.min.js"></script>
<script type="text/javascript">
   jQuery(function($){

       $.supersized({

           // Functionality
           slide_interval          :   3000,       // Length between transitions
           transition              :   0,          // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
           transition_speed        :   1500,       // Speed of transition

           // Components                           
           slide_links             :   'blank',    // Individual links for each slide (Options: false, 'num', 'name', 'blank')
           slides                  :   [{image : 'https://airfinchscript.com/albums/images/listings/1552386986_2_0.jpg', title : '', thumb : '/resized.php?src=https://airfinchscript.com/albums/images/listings/1552386986_2_0.jpg&w=200&h=150', url : ''},{image : 'https://airfinchscript.com/albums/images/listings/1552386993_2_0.jpg', title : '', thumb : '/resized.php?src=https://airfinchscript.com/albums/images/listings/1552386993_2_0.jpg&w=200&h=150', url : ''},{image : 'https://airfinchscript.com/albums/images/listings/1552386993_2_1.jpg', title : '', thumb : '/resized.php?src=https://airfinchscript.com/albums/images/listings/1552386993_2_1.jpg&w=200&h=150', url : ''},{image : 'https://airfinchscript.com/albums/images/listings/1552386993_2_2.jpg', title : '', thumb : '/resized.php?src=https://airfinchscript.com/albums/images/listings/1552386993_2_2.jpg&w=200&h=150', url : ''},{image : 'https://airfinchscript.com/albums/images/listings/1552386993_2_3.jpg', title : '', thumb : '/resized.php?src=https://airfinchscript.com/albums/images/listings/1552386993_2_3.jpg&w=200&h=150', url : ''},] // Slideshow Images
       });
   });
   //console.log({image : 'https://airfinchscript.com/albums/images/listings/1552386986_2_0.jpg', title : '', thumb : '/resized.php?src=https://airfinchscript.com/albums/images/listings/1552386986_2_0.jpg&w=200&h=150', url : ''},{image : 'https://airfinchscript.com/albums/images/listings/1552386993_2_0.jpg', title : '', thumb : '/resized.php?src=https://airfinchscript.com/albums/images/listings/1552386993_2_0.jpg&w=200&h=150', url : ''},{image : 'https://airfinchscript.com/albums/images/listings/1552386993_2_1.jpg', title : '', thumb : '/resized.php?src=https://airfinchscript.com/albums/images/listings/1552386993_2_1.jpg&w=200&h=150', url : ''},{image : 'https://airfinchscript.com/albums/images/listings/1552386993_2_2.jpg', title : '', thumb : '/resized.php?src=https://airfinchscript.com/albums/images/listings/1552386993_2_2.jpg&w=200&h=150', url : ''},{image : 'https://airfinchscript.com/albums/images/listings/1552386993_2_3.jpg', title : '', thumb : '/resized.php?src=https://airfinchscript.com/albums/images/listings/1552386993_2_3.jpg&w=200&h=150', url : ''},);
</script> -->
<div class="preview-gallery" style="opacity: 0;z-index:-1;position:relative">
   <div class="gallery-close" onclick="javascript:$('.preview-gallery').css({'opacity':'0','z-index':'-1'});">X</div>
   <!--Thumbnail Navigation-->
   <div id="prevthumb"></div>
   <div id="nextthumb"></div>
   <!--Arrow Navigation-->
   <a id="prevslide" class="load-item"></a>
   <a id="nextslide" class="load-item"></a>
   <div id="thumb-tray" class="load-item">
      <div id="thumb-back"></div>
      <div id="thumb-forward"></div>
   </div>
   <!--Time Bar-->
   <div id="progress-back" class="load-item">
      <div id="progress-bar"></div>
   </div>
   <!--Control Bar-->
   <div id="controls-wrapper" class="load-item">
      <div id="controls">
         <a id="play-button"><img id="pauseplay" src="<?php echo $theme_url;?>assets/airbnb/img/pause.png"/></a>
         <!--Slide counter-->
         <div id="slidecounter">
            <span class="slidenumber"></span> / <span class="totalslides"></span>
                </div>
                <!--Slide captions displayed here-->
                <div id="slidecaption"></div>
                <!--Thumb Tray button-->
                <a id="tray-button"><img id="tray-arrow" src="<?php echo $theme_url;?>assets/airbnb/img/button-tray-up.png"/></a>
                <!--Navigation-->
                <ul id="slide-list"></ul>
            </div>
        </div>
    </div>

</div>
<!--col-sm-8 end-->

</div>
<!--row end-->

</div>
<!--container end-->

<div class="review-cls bg_white margin_top30 hiddencls">
    <div class="container">
        div class="col-xs-12 col-sm-12 col-md-8">
        <h3 class="margin_top20">1 Review <span id="reviewcls"></span></h3>

        <div class="row">
            <div class="col-xs-12 col-sm-8">

                <div class="row">
                    <div class="col-xs-12 col-sm-4 text-center padd_bottom30">
                        <div class="profile margin_top20 center-block" style="background-image:url('<?php echo $theme_url;?>assets/airbnb/albums/images/users/usrimg.jpg);"> </div>
                        <a class="text_gray1 margin_top10 center-block" href="#">Gabrielle</a>
                    </div>
                    <!--col-sm-4 end-->

                    <div class="col-xs-12 col-sm-8">
                        <p>Gabrielle is a delightful person and a fantastic host. Nothing was too much trouble and she made sure I had everything I needed. Gabrielle introduced me to her neighbours/friends, which made me feel like </p>

                        <div class="row margin_top20">
                            <div class="col-xs-12 col-sm-6">
                                <p class="text-muted margin_top10">October 2015</p>
                            </div>
                            <!--col-sm-6 end-->
                            <div class="col-xs-12 col-sm-6 text-right">
                                <button type="button" class="btn btn-default"> <i class="fa fa-thumbs-o-up"></i> Helpful</button>
                            </div>
                            <!--col-sm-6 end-->
                        </div>
                        <!--row end-->

                    </div>
                    <!--col-sm-8 end-->
                </div>
                <!--row end-->

            </div>
            <!--col-sm-8 end-->
        </div>
        <!--row end-->

    </div>
    <!--container end-->
</div>
</div>
<!--bg_white-->
<div class="container">
    <div class="review-cls bg_white clearfix">
        <div class="border_top margin_top0 col-xs-12 col-sm-12 col-md-8 no-hor-padding">
            <h3 class="margin_top20 margin_bottom10"><b>No reviews yet</b></h3>
            <div class="margin_bottom20">Stay here and you could give this host's listing their first review!</div>
        </div>
    </div>
</div>
</div>
</div>
<!-- <span id="host" class="scrollhighlight"></span> -->
<div class="container">

    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8">

            <div class="host-about margin_bottom30 padding_top20 border_top">
                <span id="host" class="scrollhighlight"></span>
                <div class="left-host-desc">
                    <h3>About the Host, Demo</h3>
                    <div class="specify-list">
                        <div class="split-section" style="word-break:break-all;">
                            <span>Tamil Nadu, India.</span> <span>Joined in</span> <span>March 2019.</span>
                        </div>
                        <div class="split-section"><span>Mobile:</span> <span class="margin_right10"> 󰀙 verified,</span> <span> Email :</span> <span class="margin_right10"> 󰀙 verified</span>
                        </div>

                    </div>
                </div>

                <div class="right-host-profile about-host-profile">
                    <a href="profile/Mi0zODY%3d.html"><div class="profile center-block" style="background-image:url('<?php echo $theme_url;?>assets/airbnb/albums/images/users/usrimg.jpg);"> </div></a>
                </div>
                <div class="host-about-lang">

                    <div class="about-host"><span style="word-break: break-all;">I am very quite and interested in computer codes as well as Hacks.</span></div>
                    <div class="languag"><span class="first">Languages :</span>
                        <div class="lang-list">English (UK)<span>,</span> </div>
                        <div class="lang-list">French<span>,</span> </div>
                        <div class="lang-list">Urdu<span>,</span> </div>
                        <div class="lang-list">Arabic<span>,</span> </div>
                    </div>
                </div>

            </div>

            <div class="row hiddencls">

                <div class="col-xs-12 col-sm-4">
                    <p class="margin_top30">Connections</p>
                </div>
                <!--col-sm-4 end-->

                <div class="col-xs-12 col-sm-8">
                    <p class="margin_top20">Are you or your friends connected with this host?</p>
                    <button type="button" class="btn fb_btn margin_top10"> <i class="fa fa-facebook"></i> Connect With Facebook</button>
                </div>
                <!--col-sm-4 end-->

            </div>
            <!--row end-->
            <div class="row hiddencls">

                <div class="col-xs-12 col-sm-4">
                    <p class="margin_top30">Trust</p>
                </div>
                <!--col-sm-4 end-->

                <div class="col-xs-12 col-sm-8">

                    <button type="button" class="btn btn-warning margin_top20"> 1</button>
                    <p>Review</p>
                </div>
                <!--col-sm-4 end-->

            </div>
            <!--row end-->

        </div>
        <!--col-sm-8 end-->
    </div>
    <!--row end-->
    <div id="ytvply" class='col-xs-12 col-sm-8 col-md-8 no-hor-padding margin_bottom40'>
        <object width="644" height="362">
            <param name="movie" value="https://www.youtube.com/v/_YHF7n16gm8?version=3&amp;rel=0&amp;modestbranding=1"></param>
            <param name="allowFullScreen" value="true"></param>
            <param name="allowscriptaccess" value="always">
            <param name="allownetworking" value="internal"></param>
            <embed src="https://www.youtube.com/v/_YHF7n16gm8?version=3&amp;rel=0&amp;modestbranding=1&amp;hl=en_US" type="application/x-shockwave-flash" width="100%" height="362" allowscriptaccess="always" allowfullscreen="true" allownetworking="internal" style='border-radius:5px !important;'>
            </embed>
        </object>
    </div><span id="location" class="scrollhighlight"></span>
    <div class="map margin_bottom30 clearfix">
        <div class="mapview col-xs-12 col-sm-8 col-md-8 no-hor-padding">
            <!--<span class="map1"></span>-->
            <!--span id="location"></span-->
            <div id="map_canvas" frameborder="0" style="border:0; " class="map"></div>
        </div>
        <div class="map-exact-info col-sm-12 col-md-12 no-hor-padding margin_top10">Exact location information is provided after a booking is confirmed.</div>
    </div>
    <h3 class="margin_top30 hiddencls">Explore other options in and around 17th arrondissement </h3>

    <p class="margin_bottom30 hiddencls">More places to stay in 17th arrondissement: Houses · Bed & Breakfasts · Lofts · Villas · Condominiums
        <br />
        <br /> People also stay in Saint-Ouen · Levallois-Perret · Asnieres-sur-Seine · Neuilly-sur-Seine · Courbevoie
    </p>

</div>
<!--container end-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog listpopupwidth" role="document">
        <div class="modal-content">
            <div class="modal-body padding0">
                <div class="toplistdiv" style="display:none;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3>Save to Wish List</h3>
                    <hr />
                </div>
                <div class="airfcfx-leftlistdiv leftlistdiv">
                    <button type="button" class="wish-btn close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="banner2 banner2hgt" style="background-image:url('<?php echo $theme_url;?>assets/airbnb/albums/images/listings/1552385505_2_0.jpg');"></div>
                </div>
                <div class="airfcfx-rightlistdiv-cnt">
                    <div class="airfcfx-rightlistdiv rightlistdiv padding20 wishlisthgt">
                        <div class="airfcfx-topfullviewdiv topfullviewdiv">

                            <h3>Save to Wish List</h3>
                            <hr />
                        </div>
                        <div class="airfcfx-wishlist-contianer" id="listsdiv1">
                        </div>
                    </div>
                    <div class="airfcfx-wish-createlist-cnt">
                        <input type="text" id="newlistname1" class="airfcfx-listtxt listtxt" value="" placeholder="Create New List" maxlength="20">
                        <input type="button" value="create" class="airfcfx-createbtn btn btn-danger createbtn" onclick="create_new_list();">
                    </div>
                    <div class="airfcfx-wishlist-btn-cnt">
                        <input type="button" value="Cancel" class="airfcfx-cancelsze btn btn_email cancelsze cancelbtn borderradius5 " data-dismiss="modal">
                        <input type="button" value="Save" data-dismiss="modal" class="airfcfx-savebtn btn btn-primary savebtn pull-right" onclick="save_lists();">
                        <div class="errcls listerr"></div>
                    </div>
                </div>
            </div>
            <div class="clear">
            </div>
        </div>
    </div>
</div>
<div class="modal" id="contactform" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header no_border">
                <button type="button" class="close" data-dismiss="modal" onclick="checkitclear();" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="model-left-flot">
                        <h1><span>Contact Demo </span></h1>
                        <h5>Languages: English (uk), French, Urdu, Arabic</h5>

                        <p>Once you send a message, Demo the host can respond you to book their home.</p>
                        <p>Make sure you share the following:</p>
                        <ul class="model-host-list">
                            <li>Tell Demo a little about yourself</li>
                            <li>What brings you to this place? Who’s joining you?</li>
                            <li>What do you love about this listing? Mention it!</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="model-right-flot">
                        <div class="form-group clearfix">
                            <label>When are you traveling?</label>
                            <div class="compaine-date checkindivcls">
                                <input type="text" id="checkindate" name="checkindate" readonly class="font-size12 form-control margin10" placeholder="Check In">
                                <span class="date-vs">
                           <svg fill="#484848" viewBox="0 0 1000 1000">
                              <path d="M694.4 242.4l249.1 249.1c11 11 11 21 0 32L694.4 772.7c-5 5-10 7-16 7s-11-2-16-7c-11-11-11-21 0-32l210.1-210.1H67.1c-13 0-23-10-23-23s10-23 23-23h805.4L662.4 274.5c-21-21.1 11-53.1 32-32.1z"></path>
                           </svg>
                        </span>
                                <input type="text" name="checkoutdate" id="checkoutdate" readonly class="font-size12 form-control margin10" placeholder="Check Out">
                            </div>

                        </div>

                        <div class="form-group col-md-12 col-sm-12 padding0">
                            <div class="col-sm-3 col-md-3 padding0">
                                <label>Guests</label>
                                <input type="hidden" name="formtype" value="contacthost" id="contacthost">
                                <input type="hidden" id="userid" value="">
                                <input type="hidden" id="hostid" value="2">
                                <input type="hidden" id="listingid" value="3">
                                <select class="form-control margin10" id="contact_guests">
                                    <option value=1>1</option>
                                    <option value=2>2</option>
                                </select>
                            </div>
                            <div class="col-sm-9 col-md-9" style="display:block; padding: 0px 0px 0px 10px;">
                                <div class="padd_0_10 showhoursdiv showhourscontactdiv">
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-12 col-sm-12 padding0 clearfix">
                            <label>Message host</label>
                            <textarea class="form-control" id="contactmessage" style="resize:none" rows="4" placeholder="Start your message..." maxlength="500"></textarea>

                        </div>
                        <p class="modl-descp col-md-12 col-sm-12 padding0 clearfix">Don’t want to wait? Select “Book” to add your payment information and confirm your reservation instantly.</p>

                        <div class="form-group col-md-12 col-sm-12 padding0 clearfix text-center" style="margin-bottom: 0px !important;">
                            <!--<input type="button" id="send_msg" value="Send Message" class="btn btn_search slider-btn full-width" onclick="send_contact_message();" />-->
                            <button id="send_msg" class="btn btn_search slider-btn full-width" onclick="send_contact_message();">
                                Send Message </button>
                            <img id="loadingimg" src="<?php echo $theme_url;?>assets/airbnb/images/load.gif" class="loading" style="margin-top:-1px;">
                            <div id="succmsg" class="successtxt hiddencls"></div>
                            <br/>
                            <div class="msgerrcls"></div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" id="userid" value="">
            <input type="hidden" id="hostid" value="2">
            <input type="hidden" id="listingid" value="3">
            <div class="clear"></div>
            <br />
            <div class="modal-footer padding0">
                <img id="loginloadimg" src="<?php echo $theme_url;?>assets/airbnb/images/load.gif" class="loading" style="margin-top:-1px;">
                <div id="succmsg" class="successtxt hiddencls">Message Sent Successfully</div>
                <br/>

            </div>
        </div>
        <div class="clear">
        </div>
    </div>
</div>
<!--request book mobile popup-->
<!--instant book mobile popup-->

<!--filter mobile popup-->

<script>
    var map;
    var geocoder;
    var centerChangedLast;
    var reverseGeocodedLast;
    var currentReverseGeocodeResponse;

    function initialize() {
        autocomplete = new google.maps.places.Autocomplete((document
            .getElementById('where-to-go')), {
            types: ['geocode']
        });

        var geocoder = new google.maps.Geocoder();
        var address = 'Mission Point,San Diego';

        var latitude;
        var longitude;

        geocoder.geocode({
            'address': address
        }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                latitude = results[0].geometry.location.lat();
                longitude = results[0].geometry.location.lng();

                var latlng = new google.maps.LatLng(latitude, longitude);
                var myOptions = {
                    zoom: 10,
                    center: latlng,
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

                var myCity = new google.maps.Circle({
                    center: latlng,
                    radius: 7000,
                    strokeColor: "#8fe3de",
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillColor: "#8cdfd9",
                    fillOpacity: 0.4
                });

                myCity.setMap(map);

                geocoder = new google.maps.Geocoder();

                /*var marker = new google.maps.Marker({
                    position: latlng,
                    icon : '../images/green-dot.png',
                    map: map,
                    title: "Hello World!"
                });*/
            }
        });

    }
    google.maps.event.addDomListener(window, 'load', initialize);

    //slideer stop
    $('.carousel').carousel({
        interval: false
    })

    //Nav Fixed
    $(document).ready(function() {
        var a = $(".wid").outerWidth();

        $(".make_fix").css('width', a - 15);

        var project2 = $('.tpp').offset();
        var footer = $('.mapview').offset().top;

        var $window = $(window);
        $window.scroll(function() {
            //start fix
            if ($window.scrollTop() >= project2.top && $window.scrollTop() <= (footer - 150)) {
                $(".make_fix").addClass("fixed");
                jQuery('.header_top_invidual').addClass('filter_menu1');
            } else {
                $(".make_fix").removeClass("fixed");
                jQuery('.header_top_invidual').removeClass('filter_menu1');
            }

        });
    });

    //Owl Carasel
    $(document).ready(function() {

        //var owl = $("#owl-demo");

        /*owl.owlCarousel({
            items : 3, //10 items above 1000px browser width
            itemsDesktop : [3,5], //5 items between 1000px and 901px
            itemsDesktopSmall : [3,3], // betweem 900px and 601px
            itemsTablet: [3,2], //2 items between 600 and 0
            itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
        });*/

        // Custom Navigation Events
        $(".next").click(function() {
            owl.trigger('owl.next');
        })
        $(".prev").click(function() {
            owl.trigger('owl.prev');
        })

    });

    //width of filter

    $(document).ready(function() {
        $(window).scroll(function() {
            $("#startdate").datepicker("hide");
            $("#enddate").datepicker("hide");
            $("#startdate").blur();
            $("#enddate").blur();
            $("#startdatemobile").datepicker("hide");
            $("#enddatemobile").datepicker("hide");
            $("#startdatemobile").blur();
            $("#enddatemobile").blur();
        });
        $("#startdate").keydown(function(event) {
            if (event.which == 13) {
                $("#startdate").readonlyDatepicker(true);
            }
        });
        $("#enddate").keydown(function(event) {
            if (event.which == 13) {
                $("#enddate").readonlyDatepicker(true);
            }
        });
        $("#startdatemobile").keydown(function(event) {
            if (event.which == 13) {
                $("#startdatemobile").readonlyDatepicker(true);
            }
        });
        $("#enddatemobile").keydown(function(event) {
            if (event.which == 13) {
                $("#enddatemobile").readonlyDatepicker(true);
            }
        });
    });
</script>

<script>
    // Calendar Update - AK
    var dateRange = [];
    var beforedate = [];
    var afterdate = [];

    $(function() {
        var hourbased = $('#hour_booking').val();
        var booking = $('#booking').val();
        startdate = '';
        enddate = '';
        maxstay = 0;
        minstay = 1;
        listid = 3;
        bookingavailability = 'always';
        startdates = "";
        enddates = "";

        if (booking == 'pernight' || booking == 'perhour') {
            for (i = 0; i < startdates.length; i++) {
                for (var d = new Date((startdates[i] * 1000)); d <= new Date(enddates[i] * 1000); d.setDate(d.getDate() + 1)) {
                    dateRange.push($.datepicker.formatDate('yy-mm-dd', d));
                }
            }
        }

        // alert(dateRange);
        var sdate = new Date(startdate * 1000);
        var edate = new Date(enddate * 1000);
        var sedate = new Date(enddate * 1000);

        /*if(booking != 'perhour') {
           sedate = new Date(sedate.setDate(sedate.getDate()-1));   
        }*/

        if (startdate == "") {
            sdate = "";
        }

        if (enddate == "") {
            edate = "";
            sedate = "";
        }
        //alert(sdate);

        if (sdate != "") {
            todaydate = new Date();
            if (sdate < todaydate) {
                minimumdate = new Date();
                endminimumdate = new Date();

                if (hourbased == 'no' || booking == 'pernight') {
                    endminimumdate.setDate(endminimumdate.getDate() + 1);
                }
            } else {
                minimumdate = new Date(sdate.setDate(sdate.getDate()));
                endminimumdate = new Date(sdate.setDate(sdate.getDate() + 1));
            }
        } else {
            minimumdate = new Date();
            endminimumdate = new Date();
            endminimumdate.setDate(endminimumdate.getDate() + 1);
        }

        $("#checkindate").datepicker({
            beforeShowDay: checkinDisableDate,
            minDate: minimumdate,
            maxDate: sedate,
            beforeShow: function() {

            },
            onSelect: function(selectedDate) {
                var booking = $('#booking').val();
                var booking_time = $('#booking_time').val();

                var orginalDate = new Date(selectedDate);

                if (booking == 'pernight') {
                    $("#checkoutdate").val("");
                }

                if (booking == 'perhour') {
                    $("#checkoutdate").datepicker("option", 'maxDate', edate);
                    var startdates = $('#checkindate').val();
                    $('#checkoutdate').val(startdates);
                    showcontactbooking();
                    return false;
                }
            },
            onClose: function(selectedDate) {
                var start_date = $('#checkindate').val();
                if (booking == 'pernight' && $.trim(start_date) != "") {
                    $("#checkoutdate").datepicker('show');
                }
            }
        });

        $("#checkoutdate").datepicker({
            beforeShowDay: disableDates,
            minDate: endminimumdate,
            maxDate: edate,
            beforeShow: function() {
                var start_date = $('#checkindate').val();
                if (booking == "pernight") {
                    if (start_date != "") {
                        var start_date = $("#checkindate").val();

                        if (bookingavailability == "onetime" || bookingavailability == "always") {
                            if (enddate != "" && bookingavailability == "onetime") {
                                var ot_min_date = new Date(start_date);
                                ot_min_date.setDate(ot_min_date.getDate() + minstay);

                                var ot_max_date = new Date(start_date);
                                ot_max_date.setDate(ot_max_date.getDate() + maxstay);

                                var ot_end_date = new Date(edate);
                                ot_end_date.setDate(ot_end_date.getDate());

                                var ot_flag = 0;

                                if (ot_min_date <= ot_end_date && ot_end_date < ot_max_date) {
                                    $("#checkoutdate").datepicker("option", 'minDate', ot_min_date);
                                    $("#checkoutdate").datepicker("option", 'maxDate', ot_end_date);
                                    var orginalDate = ot_end_date;
                                    var end_date = $.datepicker.formatDate('mm/dd/yy', ot_end_date);
                                    ot_flag = 1;
                                } else if (ot_end_date < ot_min_date) {
                                    var orginalDate = new Date();
                                    orginalDate.setDate(orginalDate.getDate() - 1);
                                    $("#checkoutdate").datepicker("option", 'maxDate', orginalDate);
                                } else {
                                    $("#checkoutdate").datepicker("option", 'minDate', ot_min_date);
                                    $("#checkoutdate").datepicker("option", 'maxDate', ot_max_date);
                                    var orginalDate = ot_max_date;
                                    var end_date = $.datepicker.formatDate('mm/dd/yy', ot_max_date);
                                    ot_flag = 1;
                                }
                            } else if (bookingavailability == "always") {
                                var orginalDate = new Date(start_date);
                                orginalDate.setDate(orginalDate.getDate() + maxstay);
                                var end_date = $.datepicker.formatDate('mm/dd/yy', orginalDate);
                                ot_flag = 1;
                            }

                            if (ot_flag == 1) {
                                var start_date = new Date(start_date);
                                var end_date = new Date(end_date);
                                var checkdateRange = [];
                                var bCnt = 0;
                                var bDate;
                                var bDateFormat;

                                selstartdate = start_date.getTime();
                                selenddate = end_date.getTime();

                                // Selected Date
                                for (var dates = new Date(selstartdate); dates < new Date(selenddate); dates.setDate(dates.getDate() + 1)) {
                                    checkdateRange.push($.datepicker.formatDate('yy-mm-dd', dates));
                                }

                                // sort all blocked and reservation date by ASC.
                                var disableCheck = [];
                                disableCheck = disableCheck.sort(SortByDate);

                                for (a = 0; a < checkdateRange.length; a++) {
                                    if ($.inArray(checkdateRange[a], disableCheck) >= 0 && bCnt == 0) {
                                        bCnt++;
                                        bDate = checkdateRange[a];
                                    }
                                }

                                if (bCnt > 0 && typeof(bDate) != 'undefined') {
                                    bDateFormat = new Date(bDate);
                                    bDateFormat = $.datepicker.formatDate('mm/dd/yy', bDateFormat);
                                    var orginalDate = new Date(bDateFormat);

                                    timeDiff = Math.abs(orginalDate.getTime() - start_date.getTime());
                                    var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

                                    if (diffDays >= minstay) {
                                        var start_date = $("#checkindate").val();
                                        var minOrginalDate = new Date(start_date);
                                        minOrginalDate.setDate(minOrginalDate.getDate() + minstay);
                                        $("#checkoutdate").datepicker("option", 'minDate', minOrginalDate);
                                        orginalDate.setDate(orginalDate.getDate());
                                        $("#checkoutdate").datepicker("option", 'maxDate', orginalDate);
                                    } else {
                                        // disable all dates
                                        var orginalDate = new Date();
                                        orginalDate.setDate(orginalDate.getDate() - 1);
                                        $("#checkoutdate").datepicker("option", 'maxDate', orginalDate);
                                    }
                                } else {
                                    var minOrginalDate = new Date(start_date);
                                    minOrginalDate.setDate(minOrginalDate.getDate() + minstay);
                                    $("#checkoutdate").datepicker("option", 'minDate', minOrginalDate);
                                    $("#checkoutdate").datepicker("option", 'maxDate', orginalDate);
                                }
                            }
                        } else {
                            $("#checkindate").datepicker('hide');
                            return false;
                        }
                    } else {
                        $("#checkindate").datepicker('show');
                        return false;
                    }
                } else if (booking == "perhour") {
                    $("#checkindate").datepicker('show');
                    return false;
                }
            },
            onSelect: function(selectedDate) {
                var booking = $('#booking').val();
                var booking_time = $('#booking_time').val();
                var orginalDate = new Date(selectedDate);

                if (booking == 'perhour') {
                    showcontactbooking();
                    return false;
                }
            },
            onClose: function(selectedDate) {
                var cStartdate = $("#checkindate").val();
                if ($.trim(cStartdate) == "" && booking == 'pernight') {
                    $("#checkindate").datepicker('show');
                }
            }
        });

        $("#startdate").datepicker({
            beforeShowDay: checkinDisableDate,
            minDate: minimumdate,
            maxDate: sedate,
            beforeShow: function() {

            },
            onSelect: function(selectedDate) {
                //choose booking starts
                $("#booking_duration_err").html("");
                var booking = $('#booking').val();
                var booking_time = $('#booking_time').val();
                var booking_duration = $('#booking_duration').val();

                var orginalDate = new Date(selectedDate);

                if (booking == 'pernight') {
                    $("#enddate").val("");
                    $('#showhoursdiv').hide();
                }

                if (booking == 'perhour') {
                    $("#enddate").datepicker("option", 'maxDate', edate);
                    var startdates = $('#startdate').val();
                    $('#enddate').val(startdates);
                    $('#showhoursdiv').show();
                    showbooking();
                    return false;
                }
            },
            onClose: function(selectedDate) {
                var start_date = $('#startdate').val();
                if (booking == 'pernight' && $.trim(start_date) != "") {
                    $("#enddate").datepicker('show');
                }
            }
        });

        $("#enddate").datepicker({
            beforeShowDay: disableDates,
            minDate: endminimumdate,
            maxDate: edate,
            beforeShow: function() {
                var start_date = $('#startdate').val();
                if (booking == "pernight") {
                    if (start_date != "") {
                        var start_date = $("#startdate").val();

                        if (bookingavailability == "onetime" || bookingavailability == "always") {
                            if (enddate != "" && bookingavailability == "onetime") {
                                var ot_min_date = new Date(start_date);
                                ot_min_date.setDate(ot_min_date.getDate() + minstay);

                                var ot_max_date = new Date(start_date);
                                ot_max_date.setDate(ot_max_date.getDate() + maxstay);

                                var ot_end_date = new Date(edate);
                                ot_end_date.setDate(ot_end_date.getDate());

                                var ot_flag = 0;

                                if (ot_min_date <= ot_end_date && ot_end_date < ot_max_date) {
                                    $("#enddate").datepicker("option", 'minDate', ot_min_date);
                                    $("#enddate").datepicker("option", 'maxDate', ot_end_date);
                                    var orginalDate = ot_end_date;
                                    var end_date = $.datepicker.formatDate('mm/dd/yy', ot_end_date);
                                    ot_flag = 1;
                                } else if (ot_end_date < ot_min_date) {
                                    var orginalDate = new Date();
                                    orginalDate.setDate(orginalDate.getDate() - 1);
                                    $("#enddate").datepicker("option", 'maxDate', orginalDate);
                                } else {
                                    $("#enddate").datepicker("option", 'minDate', ot_min_date);
                                    $("#enddate").datepicker("option", 'maxDate', ot_max_date);
                                    var orginalDate = ot_max_date;
                                    var end_date = $.datepicker.formatDate('mm/dd/yy', ot_max_date);
                                    ot_flag = 1;
                                }
                            } else if (bookingavailability == "always") {
                                var orginalDate = new Date(start_date);
                                orginalDate.setDate(orginalDate.getDate() + maxstay);
                                var end_date = $.datepicker.formatDate('mm/dd/yy', orginalDate);
                                ot_flag = 1;
                            }

                            if (ot_flag == 1) {
                                var start_date = new Date(start_date);
                                var end_date = new Date(end_date);
                                var checkdateRange = [];
                                var bCnt = 0;
                                var bDate;
                                var bDateFormat;

                                selstartdate = start_date.getTime();
                                selenddate = end_date.getTime();

                                // Selected Date
                                for (var dates = new Date(selstartdate); dates < new Date(selenddate); dates.setDate(dates.getDate() + 1)) {
                                    checkdateRange.push($.datepicker.formatDate('yy-mm-dd', dates));
                                }

                                // sort all blocked and reservation date by ASC.
                                var disableCheck = [];
                                disableCheck = disableCheck.sort(SortByDate);

                                for (a = 0; a < checkdateRange.length; a++) {
                                    if ($.inArray(checkdateRange[a], disableCheck) >= 0 && bCnt == 0) {
                                        bCnt++;
                                        bDate = checkdateRange[a];
                                    }
                                }

                                if (bCnt > 0 && typeof(bDate) != 'undefined') {
                                    bDateFormat = new Date(bDate);
                                    bDateFormat = $.datepicker.formatDate('mm/dd/yy', bDateFormat);
                                    var orginalDate = new Date(bDateFormat);

                                    timeDiff = Math.abs(orginalDate.getTime() - start_date.getTime());
                                    var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

                                    if (diffDays >= minstay) {
                                        var start_date = $("#startdate").val();
                                        var minOrginalDate = new Date(start_date);
                                        minOrginalDate.setDate(minOrginalDate.getDate() + minstay);
                                        $("#enddate").datepicker("option", 'minDate', minOrginalDate);
                                        orginalDate.setDate(orginalDate.getDate());
                                        $("#enddate").datepicker("option", 'maxDate', orginalDate);
                                    } else {
                                        // disable all dates
                                        var orginalDate = new Date();
                                        orginalDate.setDate(orginalDate.getDate() - 1);
                                        $("#enddate").datepicker("option", 'maxDate', orginalDate);
                                    }
                                } else {
                                    var minOrginalDate = new Date(start_date);
                                    minOrginalDate.setDate(minOrginalDate.getDate() + minstay);
                                    $("#enddate").datepicker("option", 'minDate', minOrginalDate);
                                    $("#enddate").datepicker("option", 'maxDate', orginalDate);
                                }
                            }
                        } else {
                            $("#startdate").datepicker('hide');
                            return false;
                        }
                    } else {
                        $("#startdate").datepicker('show');
                        return false;
                    }
                } else if (booking == "perhour") {
                    $("#startdate").datepicker('show');
                    return false;
                }
            },
            onSelect: function(selectedDate) {
                $("#booking_duration_err").html("");
                var booking = $('#booking').val();
                var booking_time = $('#booking_time').val();
                var booking_duration = $('#booking_duration').val();
                var orginalDate = new Date(selectedDate);

                if (booking == 'perhour') {
                    showbooking();
                    return false;
                }

                pricecalculation('reserve');
            },
            onClose: function(selectedDate) {
                var cStartdate = $("#startdate").val();
                if ($.trim(cStartdate) == "" && booking == 'pernight') {
                    $("#startdate").datepicker('show');
                }
            }
        });

        $("#startdatemobile").datepicker({
            beforeShowDay: disableDates,
            minDate: minimumdate,
            maxDate: sedate,
            beforeShow: function() {

            },
            onSelect: function(selectedDate) {
                //choose booking starts
                $("#booking_duration_mobile_err").html("");
                var booking_time = $('#booking_time_mobile').val();
                var booking_duration = $('#booking_duration_mobile').val();
                var orginalDate = new Date(selectedDate);
                if (hourbased == 'no' || booking == 'pernight') {
                    orginalDate.setDate(orginalDate.getDate() + 1);
                    $("#enddatemobile").datepicker("option", 'minDate', orginalDate);
                    $('#showhoursdiv_mobile').hide();
                } else {
                    $("#enddatemobile").datepicker("option", 'maxDate', edate);
                }
                if (hourbased == 'yes' && booking == 'perhour') {
                    var startdates = $('#startdatemobile').val();
                    //$("#enddate").datepicker("setDate", new Date());
                    $('#enddatemobile').val(startdates);
                    $('#showhoursdiv_mobile').show();
                }
                if (booking == 'perhour') {
                    showbooking_mobile();
                    return false;
                }
                stdates = $("#startdatemobile").val();
                stdate = new Date(stdates);
                eddates = $("#enddatemobile").val();
                eddate = new Date(eddates);
                var seldateRange = [];
                if (stdates != "" && eddates != "") {
                    timeDiff = Math.abs(eddate.getTime() - stdate.getTime());
                    var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

                    selstartdate = stdate.getTime();
                    selenddate = eddate.getTime();
                    for (var dates = new Date(selstartdate); dates < new Date(selenddate); dates.setDate(dates.getDate() + 1)) {
                        seldateRange.push($.datepicker.formatDate('yy-mm-dd', dates));
                    }
                    var scnt = 0;
                    for (a = 0; a < seldateRange.length; a++) {
                        if ($.inArray(seldateRange[a], dateRange) >= 0) {
                            scnt++;
                        }
                    }
                    if (scnt > 0) {
                        $("#pricedivmobile").hide();
                        $("#requestbtn_mobile").attr("disabled", true);
                        $("#maxstayerrmobile").html("Can not book those days");
                    } else {
                        scnt = 0;
                        $("#requestbtn_mobile").attr("disabled", true);
                        $("#maxstayerrmobile").html("");
                        if (diffDays > maxstay && maxstay != 0 && booking != 'perhour') {
                            $("#pricedivmobile").hide();
                            $("#requestbtn_mobile").attr("disabled", true);
                            $("#maxstayerrmobile").html("Maximum stay should be " + maxstay + " nights")
                        } else if (diffDays < minstay && minstay != 0 && booking != 'perhour') {
                            $("#pricediv").hide();
                            $("#requestbtn").attr("disabled", true);
                            $("#maxstayerr").html("Minimum stay should be " + minstay + " nights")
                        } else {
                            $.ajax({
                                url: baseurl + '/user/listing/showpricedetail', // point to server-side PHP script 
                                type: "POST",
                                async: false,
                                data: {
                                    listid: listid,
                                    noofdays: diffDays,
                                    booking_time: booking_time,
                                    booking_duration: booking_duration,
                                },
                                success: function(res) {
                                    result = res.split("***");
                                    listtotal = parseFloat(result[1]) + parseFloat(result[2]) + parseFloat(result[5]);
                                    totalprice = parseFloat(listtotal) + parseFloat(result[3]) + parseFloat(result[4]);
                                    listtotal = listtotal.toFixed(2);
                                    totalprice = totalprice.toFixed(2);
                                    if (booking == 'pernight') {
                                        anightlyprice = $('#anightlyprice').val();
                                        $("#perpricemobile").html(anightlyprice);
                                    } else {
                                        ahourlyprice = $('#ahourlyprice').val();
                                        $("#perpricenobile").html(ahourlyprice);
                                    }
                                    $("#taxpricemobile").html(result[4]);
                                    $("#sitepricemobile").html(result[3]);
                                    $("#listtotalpricemobile").html(listtotal);
                                    $("#totalpricemobile").html(totalprice);
                                    $("#pricedivmobile").show();
                                    $("#noofdaysmobile").html(result[6]);
                                    $("#nameofdaysmobile").html(result[7]);
                                    $("#commissionpricemobile").val(result[2]);
                                    $("#requestbtn_mobile").attr("disabled", false);
                                    $("#maxstayerrmobile").html("");
                                }
                            });
                        }
                    }
                }
            },
            onClose: function(selectedDate) {
                $("#enddatemobile").datepicker('show');
            }
        });

        $("#enddatemobile").datepicker({
            beforeShowDay: disableDates,
            minDate: endminimumdate,
            maxDate: edate,
            beforeShow: function() {

            },
            onSelect: function(selectedDate) {
                //choose booking starts
                var booking = $('#booking').val();
                $("#booking_duration_mobile_err").html("");
                var booking_time = $('#booking_time_mobile').val();
                var booking_duration = $('#booking_duration_mobile').val();

                //choose booking ends
                var orginalDate = new Date(selectedDate);
                if (hourbased == 'no' || booking == 'pernight') {
                    orginalDate.setDate(orginalDate.getDate() - 1);
                    $('#showhoursdiv_mobile').hide();
                } else {
                    $("#startdatemobile").datepicker("option", 'maxDate', orginalDate);
                }
                if (hourbased == 'yes' && booking == 'perhour') {
                    var startdates = $('#enddatemobile').val();
                    $('#startdatemobile').val(startdates);
                    $('#showhoursdiv_mobile').show();
                }
                if (booking == 'perhour') {
                    showbooking_mobile();
                    return false;
                }
                stdates = $("#startdatemobile").val();
                stdate = new Date(stdates);
                eddates = $("#enddatemobile").val();
                eddate = new Date(eddates);
                var seldateRange = [];
                if (stdates != "" && eddates != "") {
                    timeDiff = Math.abs(eddate.getTime() - stdate.getTime());
                    var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
                    selstartdate = stdate.getTime();
                    selenddate = eddate.getTime();
                    for (var dates = new Date(selstartdate); dates < new Date(selenddate); dates.setDate(dates.getDate() + 1)) {
                        seldateRange.push($.datepicker.formatDate('yy-mm-dd', dates));
                    }
                    var ecnt = 0;
                    for (b = 0; b < seldateRange.length; b++) {
                        if ($.inArray(seldateRange[b], dateRange) >= 0) {
                            ecnt++;
                        }
                    }
                    if (ecnt > 0) {
                        $("#pricedivmobile").hide();
                        $("#requestbtn_mobile").attr("disabled", true);
                        $("#maxstayerrmobile").html("Can not book those days");
                    } else {
                        ecnt = 0;
                        $("#requestbtn_mobile").attr("disabled", true);
                        $("#maxstayerrmobile").html("");
                        if (diffDays > maxstay && maxstay != 0 && booking != 'perhour') {
                            $("#pricedivmobile").hide();
                            $("#requestbtn_mobile").attr("disabled", true);
                            $("#maxstayerrmobile").html("Maximum stay should be " + maxstay + " nights")
                        } else if (diffDays < minstay && minstay != 0 && booking != 'perhour') {
                            $("#pricediv").hide();
                            $("#requestbtn").attr("disabled", true);
                            $("#maxstayerr").html("Minimum stay should be " + minstay + " nights")
                        } else {
                            $.ajax({
                                url: baseurl + '/user/listing/showpricedetail', // point to server-side PHP script 
                                type: "POST",
                                async: false,
                                data: {
                                    listid: listid,
                                    noofdays: diffDays,
                                    booking_time: booking_time,
                                    booking_duration: booking_duration
                                },
                                success: function(res) {
                                    result = res.split("***");
                                    listtotal = parseFloat(result[1]) + parseFloat(result[2]) + parseFloat(result[5]);
                                    totalprice = parseFloat(listtotal) + parseFloat(result[3]) + parseFloat(result[4]);
                                    listtotal = listtotal.toFixed(2);
                                    totalprice = totalprice.toFixed(2);
                                    if (booking == 'pernight') {
                                        anightlyprice = $('#anightlyprice').val();
                                        $("#perpricemobile").html(anightlyprice);
                                    } else {
                                        ahourlyprice = $('#ahourlyprice').val();
                                        $("#perpricemobile").html(ahourlyprice);
                                    }
                                    $("#taxpricemobile").html(result[4]);
                                    $("#sitepricemobile").html(result[3]);
                                    $("#listtotalpricemobile").html(listtotal);
                                    $("#totalpricemobile").html(totalprice);
                                    $("#pricedivmobile").show();
                                    $("#noofdaysmobile").html(result[6]);
                                    $("#nameofdaysmobile").html(result[7]);
                                    $("#commissionpricemobile").val(result[2]);
                                    $("#requestbtn_mobile").attr("disabled", false);
                                    $("#maxstayerrmobile").html("");
                                }
                            });
                        }
                    }
                }
            }
        });

    });

    var disableDates = function(dt) {
        var disabledDates = [];
        var dateString = jQuery.datepicker.formatDate('yy-mm-dd', dt);
        return [disabledDates.indexOf(dateString) == -1];
    }

    var checkinDisableDate = function(dt) {
        var checkinDisableDate = [];
        var dateString = jQuery.datepicker.formatDate('yy-mm-dd', dt);
        return [checkinDisableDate.indexOf(dateString) == -1];
    }

    function focus_checkin() {
        var visible = $("#startdate").datepicker("widget").is(":visible");
        $("#startdate").datepicker(visible ? "hide" : "show");
        //$("#startdate").datepicker('show');
    }

    function pricecalculation(elem) { // elem = reserve ? inquiry;
        if (elem == "reserve") {
            stdates = $("#startdate").val();
            eddates = $("#enddate").val();
        } else if (elem == "inquiry") {
            stdates = $("#checkindate").val();
            eddates = $("#checkoutdate").val();
        } else {
            stdates = "";
            eddates = "";
        }
        var bookDuration = $('#booking').val();
        if ($.trim(stdates) != "" && $.trim(eddates) != "" && elem == "reserve") {
            var booking_time = $('#booking_time').val();
            $.ajax({
                url: baseurl + '/user/listing/showpricedetail', // point to server-side PHP script 
                type: "POST",
                async: false,
                data: {
                    listid: listid,
                    booking_time: booking_time,
                    start_date: $('#startdate').val(),
                    end_date: $('#enddate').val()
                },
                success: function(res) {
                    result = res.split("***");
                    listtotal = parseFloat(result[1]);
                    securitycommprice = parseFloat(result[2]) + parseFloat(result[5]);
                    totalprice = parseFloat(listtotal) + parseFloat(result[3]) + parseFloat(result[4]) + parseFloat(result[10]) + parseFloat(result[11]) + parseFloat(result[2]) + parseFloat(result[5]);

                    listtotal = listtotal.toFixed(2);
                    totalprice = totalprice.toFixed(2);
                    securitycommprice = securitycommprice.toFixed(2);

                    let cleaninfees, servicefees, siteprice;
                    if (parseFloat(result[10]) == '') {
                        cleaninfees = 0;
                    } else {
                        cleaninfees = parseFloat(result[10]);
                    }

                    if (parseFloat(result[11]) == '') {
                        servicefees = 0;
                    } else {
                        servicefees = parseFloat(result[11]);
                    }

                    cleaninfees = cleaninfees + servicefees;
                    cleaninfees = cleaninfees.toFixed(2);

                    siteprice = parseFloat(result[3]) + parseFloat(result[4]);
                    siteprice = siteprice.toFixed(2);

                    //$("#taxprice").html(result[4]);
                    $("#perprice").html(result[0]);
                    $("#checkoutpay_taxprice").val(result[4]);
                    $("#siteprice").html(siteprice);
                    $("#checkoutpay_siteprice").val(result[3]);
                    $("#listtotalprice").html(listtotal);
                    $("#securitycommprice").html(securitycommprice);
                    $("#totalprice").html(totalprice);
                    $("#pricediv").show();
                    $("#noofdays").html(result[6]);
                    $("#nameofdays").html(result[7]);
                    $("#cleaningprice").html(cleaninfees);
                    $("#commissionprice").val(result[2]);
                    $("#checkoutpay_commissionprice").val(result[2]);
                    $("#checkoutpay_commissionprice").val(result[2]);
                    if (bookDuration == "pernight" && result[14] == "1") {
                        $(".pricePopup").html(result[13]);
                        $("#btnPopup").show();
                        $(".pricePopup").removeClass('selected');
                    } else {
                        $("#btnPopup").hide();
                        $(".pricePopup").removeClass('selected');
                    }
                    //$("#checkoutpay_weekendcount").val(weekendCount.length);
                    var stripeMoney = parseFloat(result[15]);
                    if (stripeMoney >= 90000000) {
                        $("#requestbtn").hide();
                        $("#maxstayerr").html("Sorry! Payment Exceeds 9 Crore");
                    } else if (stripeMoney < 10) {
                        $("#requestbtn").hide();
                        $("#maxstayerr").html("Sorry! Payment must reach atleast $10");
                    } else {
                        $("#requestbtn").show();
                        $("#maxstayerr").html("");
                    }
                }
            });
        }
    }
</script>
<style>
    #map_canvas {
        width: 100%;
        height: 450px;
    }
    
    .owl-item {
        float: left;
    }
</style>
<div class="modal fade" id="reviewpopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog emergency_width" role="document">
        <div class="modal-content">
            <div class="modal-header no_border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form id="password-form" action="https://airfinchscript.com/user/listing/view/M180MDA=" method="post" role="form">
                    <input type="hidden" name="_csrf" value="eVRaYVg0YnBANQ4yD38kFQ4zLhktRAYSLBk1Cix7LRg4YzgRCWwOXQ==">
                    <input type="hidden" id="tripid" value="">
                    <div class="form-group">
                        Your Ratings : <span class="text-warning">
               <i class="fa fa-star-o static-rating rating one cur" id="rateone" onclick="ratingClick('1');"></i>
               <i class="fa fa-star-o static-rating rating two cur" id="ratetwo" onclick="ratingClick('2');"></i>
               <i class="fa fa-star-o static-rating rating three cur" id="ratethree" onclick="ratingClick('3');"></i>
               <i class="fa fa-star-o static-rating rating four cur" id="ratefour" onclick="ratingClick('4');"></i>
               <i class="fa fa-star-o static-rating rating five cur" id="ratefive" onclick="ratingClick('5');"></i>
               </span> &nbsp;
                        <span class="current-rate">0</span> Out of 5 </div>
                    <div class="form-group">
                        Your Review :
                        <textarea maxlength="180" id="reviewmsg" rows="3" cols="25" style="vertical-align: middle; padding:15px !important; "></textarea>
                    </div>
                    <div class="login_or border_bottom margin_top10"></div>
                    <div class="form-group text-center">
                        <input type="button" class="btn btn_email margin_top10" id="reviewsave" value="Save " onclick="savereview();">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<input type="hidden" name="hour_booking" id="hour_booking" value="yes" />
<input type="hidden" name="booking" id="booking" value="perhour" />

<script type="text/javascript">
    $(document).on("click", "ul.list-inline > li > a", function() {
        var id = $(this).attr('id');
        $('.highlightcls').attr("style", "color:#484848 !important");
        $('#' + id).attr("style", "color:#ff5a5f !important");
    });

    function SortByDate(a, b) {
        var amyDate = a.split("-");
        var aNewDate = new Date(amyDate[1] + "," + amyDate[2] + "," + amyDate[0]).getTime();
        var bmyDate = b.split("-");
        var bNewDate = new Date(bmyDate[1] + "," + bmyDate[2] + "," + bmyDate[0]).getTime();
        return ((aNewDate < bNewDate) ? -1 : ((aNewDate > bNewDate) ? 1 : 0));
    }

    function showtiming() {
        $('#booking_duration_err').html('');
        $("#pricediv").hide();
        $('#startdate').val('');
        $('#enddate').val('');
        var booking_duration = $('#booking_duration').val();
        if (booking_duration == 'perhour') {
            $('.showhourstimingdiv').show();
            $('#booking').val(booking_duration);
        } else {
            $('.showhourstimingdiv').hide();
            $('#booking').val(booking_duration);
        }
    }

    function showtiming_mobile() {
        $('#booking_duration_mobile_err').html('');
        $("#pricedivmobile").hide();
        $('#startdatemobile').val('');
        $('#enddatemobile').val('');
        var booking_duration = $('#booking_duration_mobile').val();
        if (booking_duration == 'perhour') {
            $('.showhourstimingdiv_mobile').show();
            $('#booking').val(booking_duration);
        } else {
            $('.showhourstimingdiv_mobile').hide();
            $('#booking').val(booking_duration);
        }
    }

    function showbooking_mobile() {
        listid = 3;
        var startdate = $('#startdatemobile').val();
        var booking = $('#booking').val();
        if (booking == 'perday') {
            booking = $('#booking_duration_mobile').val();
        }
        $.ajax({
            url: baseurl + '/user/listing/showbookingtimemobile', // point to server-side PHP script 
            type: "POST",
            async: false,
            data: {
                date: startdate,
                booking: booking,
                listid: listid
            },
            success: function(res) {
                //alert(res);
                $('.showhourstimingdiv_mobile').html(res);
                $("#pricedivmobile").hide();
            }
        });
    }

    function showbooking() {
        listid = 3;
        var startdate = $('#startdate').val();
        var booking = $('#booking').val();
        if (booking == 'perday') {
            booking = $('#booking_duration').val();
        }
        $.ajax({
            url: baseurl + '/user/listing/showbookingtime', // point to server-side PHP script 
            type: "POST",
            async: false,
            data: {
                date: startdate,
                booking: booking,
                listid: listid,
                flag: ""
            },
            success: function(res) {
                //alert(res);
                $('.showhourstimingdiv').html(res);
                $("#pricediv").hide();
            }
        });
    }

    function showcontactbooking() {
        listid = 3;
        var startdate = $('#checkindate').val();
        var booking = $('#booking').val();

        $.ajax({
            url: baseurl + '/user/listing/showbookingtime', // point to server-side PHP script 
            type: "POST",
            async: false,
            data: {
                date: startdate,
                booking: booking,
                listid: listid,
                flag: "contacthost"
            },
            success: function(res) {
                $('.showhourscontactdiv').html(res);
            }
        });
    }

    function changehours() {
        var booking_time = $('#booking_time').val();

        if (booking_time != "" && booking_time != null) {
            listid = 3;
            var startdate = $('#startdate').val();
            var enddate = $('#enddate').val();

            if (startdate == "") {
                $("#startdate").datepicker('show');
                return false;
            }

            if (enddate == "") {
                $("#enddate").datepicker('show');
                return false;
            }

            $.ajax({
                url: baseurl + '/user/listing/showpricedetail', // point to server-side PHP script 
                type: "POST",
                async: false,
                data: {
                    listid: listid,
                    start_date: startdate,
                    end_date: enddate,
                    booking_time: booking_time
                },
                success: function(res) {
                    if ($.trim(res) == "invalid") {
                        $("#requestbtn").attr("disabled", false);
                        $("#maxstayerr").html("Oops! Error.");
                    } else {
                        $("#maxstayerr").html("");
                        result = res.split("***");

                        listtotal = parseFloat(result[1]);
                        securitycommprice = parseFloat(result[2]) + parseFloat(result[5]);
                        totalprice = parseFloat(listtotal) + parseFloat(result[3]) + parseFloat(result[4]) + parseFloat(result[10]) + parseFloat(result[11]) + parseFloat(result[2]) + parseFloat(result[5]);
                        totalprice = parseFloat(result[12]);
                        var stripeMoney = parseFloat(result[15]);

                        listtotal = listtotal.toFixed(2);
                        totalprice = totalprice.toFixed(2);
                        securitycommprice = securitycommprice.toFixed(2);

                        $("#perprice").html(parseFloat(result[0]));
                        let cleaninfees, servicefees, siteprice;

                        cleaninfees = (parseFloat(result[10]) == '') ? 0 : parseFloat(result[10]);
                        servicefees = (parseFloat(result[11]) == '') ? 0 : parseFloat(result[11]);

                        cleaninfees = cleaninfees + servicefees;
                        cleaninfees = cleaninfees.toFixed(2);

                        // Site Charge and Taxes
                        siteprice = parseFloat(result[3]) + parseFloat(result[4]);
                        siteprice = siteprice.toFixed(2);

                        //$("#checkoutpay_taxprice").val(result[4]);
                        $("#siteprice").html(siteprice);
                        $("#listtotalprice").html(listtotal);
                        $("#securitycommprice").html(securitycommprice);
                        $("#totalprice").html(totalprice);
                        $("#pricediv").show();

                        $("#noofdays").html(result[6]);
                        $("#nameofdays").html(result[7]);
                        $("#cleaningprice").html(cleaninfees);

                        if (stripeMoney >= 90000000) {
                            $("#requestbtn").hide();
                            $("#maxstayerr").html("Sorry! Payment Exceeds 9 Crore");
                        } else if (stripeMoney < 10) {
                            $("#requestbtn").hide();
                            $("#maxstayerr").html("Sorry! Payment must reach atleast $10");
                        } else {
                            $("#requestbtn").show();
                            $("#maxstayerr").html("");
                        }

                        $("#booking_duration_err").html("");
                        $("#booking_time_err").html("");
                    }
                }
            });
        } else {
            $("#pricediv").hide();
            return false;
        }
    }

    function changehours_mobile() {
        var booking_time = $('#booking_time_mobile').val();
        if (booking_time != "" && booking_time != null) {
            listid = 3;
            var startdate = $('#startdatemobile').val();
            var enddate = $('#enddatemobile').val();
            if (startdate == "") {
                $("#startdatemobile").datepicker('show');
                return false;
            }
            if (enddate == "") {
                $("#enddatemobile").datepicker('show');
                return false;
            }
            var booking_duration = $('#booking_duration_mobile').val();
            if (booking_duration == "" || booking_duration == undefined) {
                booking_duration = $("#booking").val();
            } else {
                booking_duration = booking_duration;
            }
            diffDays = 1;
            $.ajax({
                url: baseurl + '/user/listing/showpricedetail', // point to server-side PHP script 
                type: "POST",
                async: false,
                data: {
                    listid: listid,
                    noofdays: diffDays,
                    start_date: startdate,
                    end_date: enddate,
                    booking_time: booking_time,
                    booking_duration: booking_duration,
                },
                success: function(res) {
                    result = res.split("***");
                    listtotal = parseFloat(result[1]) + parseFloat(result[2]) + parseFloat(result[5]);
                    totalprice = parseFloat(listtotal) + parseFloat(result[3]) + parseFloat(result[4]);
                    listtotal = listtotal.toFixed(2);
                    totalprice = totalprice.toFixed(2);
                    if (booking == 'pernight') {
                        anightlyprice = $('#anightlyprice').val();
                        $("#perpricemobile").html(anightlyprice);
                    } else {
                        ahourlyprice = $('#ahourlyprice').val();
                        $("#perpricemobile").html(ahourlyprice);
                    }
                    $("#taxpricemobile").html(result[4]);
                    $("#sitepricemobile").html(result[3]);
                    $("#listtotalpricemobile").html(listtotal);
                    $("#totalpricemobile").html(totalprice);
                    $("#pricedivmobile").show();
                    $("#noofdaysmobile").html(result[6]);
                    $("#nameofdaysmobile").html(result[7]);
                    $("#commissionpricemobile").val(result[2]);
                    $("#requestbtn_mobile").attr("disabled", false);
                    $("#maxstayerrmobile").html("");
                    $("#booking_duration_mobile_err").html("");
                    $("#booking_time_err").html("");
                }
            });
        } else {
            $("#pricedivmobile").hide();
            return false;
        }
    }

    $('span').tooltip();
    $(window).on('scroll', function() {
        $('.scrollhighlight').each(function() {
            if ($(window).scrollTop() >= $(this).offset().top - 100) {
                var id = $(this).attr('id');
                $('.highlightcls').attr("style", "color:#484848 !important");
                $('#' + id + 'cls').attr("style", "color:#ff5a5f !important");
            }
        });
    });

    $('#contactmessage').keyup(function() {
        var yourInput = $(this).val();
        re = /[<>\{\}\[\]\\\/]/gi;
        var isSplChar = re.test(yourInput);
        if (isSplChar) {
            //var no_spl_char = yourInput.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
            var no_spl_char = yourInput.replace(/[<>\{\}\[\]\\\/]/gi, '');
            $(this).val(no_spl_char);
        }
    });

    function initMapmain() {
        autocomplete = new google.maps.places.Autocomplete((document
            .getElementById('where-to-go-main')), {
            types: ['geocode']
        });
    }
    google.maps.event.addDomListener(window, 'load', initMapmain);

    $(document).ready(function() {
        // Configure/customize these variables.
        var showChar = 150; // How many characters are shown by default
        var ellipsestext = "...";
        var moretext = "Show more >";
        var lesstext = "Show less";

        $('.more').each(function() {
            var content = $(this).html();

            if (content.length > showChar) {

                var c = content.substr(0, showChar);
                var h = content.substr(showChar, content.length - showChar);

                var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

                $(this).html(html);
            }

        });

        $(".morelink").click(function() {
            if ($(this).hasClass("less")) {
                $(this).removeClass("less");
                $(this).html(moretext);
            } else {
                $(this).addClass("less");
                $(this).html(lesstext);
            }
            $(this).parent().prev().toggle();
            $(this).prev().toggle();
            return false;
        });
    });
</script>
<style type="text/css">
    .morecontent span {
        display: none;
    }
    
    .morelink {
        display: block;
    }
</style>

<div class="modal fade" id="report-user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header clearfix">
                <span class="modal-title">Do you want to anonymously report this user?</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
            <svg viewBox="0 0 24 24" role="img" aria-label="Close" focusable="false" style="display: block; fill: rgb(0, 0, 0); height: 16px; width: 16px;">
               <path fill-rule="evenodd" d="M23.25 24a.744.744 0 0 1-.53-.22L12 13.062 1.28 23.782a.75.75 0 0 1-1.06-1.06L10.94 12 .22 1.28A.75.75 0 1 1 1.28.22L12 10.94 22.72.22a.749.749 0 1 1 1.06 1.06L13.062 12l10.72 10.72a.749.749 0 0 1-.53 1.28">
            </svg>
          </span>
                </button>
            </div>

            <div class="modal-body report-user-pop">
                <p>If so, please choose one of the following reasons.</p>

            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="report-success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header clearfix">
                <span class="modal-title">Thank You</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
            <svg viewBox="0 0 24 24" role="img" aria-label="Close" focusable="false" style="display: block; fill: rgb(0, 0, 0); height: 16px; width: 16px;">
               <path fill-rule="evenodd" d="M23.25 24a.744.744 0 0 1-.53-.22L12 13.062 1.28 23.782a.75.75 0 0 1-1.06-1.06L10.94 12 .22 1.28A.75.75 0 1 1 1.28.22L12 10.94 22.72.22a.749.749 0 1 1 1.06 1.06L13.062 12l10.72 10.72a.749.749 0 0 1-.53 1.28">
            </svg>
          </span>
                </button>
            </div>
            <div class="modal-body report-user-pop">
                <div class="body-report">
                    <p>Thanks for taking the time to report this listing. These reports help make Airfinch better for everyone, so we take them seriously. We’ll reach out if we have questions about your report.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="delete-report" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header clearfix">
                <span class="modal-title">Thank You</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
            <svg viewBox="0 0 24 24" role="img" aria-label="Close" focusable="false" style="display: block; fill: rgb(0, 0, 0); height: 16px; width: 16px;">
               <path fill-rule="evenodd" d="M23.25 24a.744.744 0 0 1-.53-.22L12 13.062 1.28 23.782a.75.75 0 0 1-1.06-1.06L10.94 12 .22 1.28A.75.75 0 1 1 1.28.22L12 10.94 22.72.22a.749.749 0 1 1 1.06 1.06L13.062 12l10.72 10.72a.749.749 0 0 1-.53 1.28">
            </svg>
          </span>
                </button>
            </div>
            <div class="modal-body report-user-pop">
                <div class="body-report">
                    <p>Your report was deleted.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade in" id="sharemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm share-modal" role="document">
        <div class="modal-content">
            <div class="modal-header no_border clearfix">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
            <svg viewBox="0 0 24 24" role="img" aria-label="Close" focusable="false" style="display: block; fill: rgb(0, 0, 0); height: 16px; width: 16px;">
              <path fill-rule="evenodd" d="M23.25 24a.744.744 0 0 1-.53-.22L12 13.062 1.28 23.782a.75.75 0 0 1-1.06-1.06L10.94 12 .22 1.28A.75.75 0 1 1 1.28.22L12 10.94 22.72.22a.749.749 0 1 1 1.06 1.06L13.062 12l10.72 10.72a.749.749 0 0 1-.53 1.28"></path>
            </svg>
          </span>
                </button>
            </div>
            <div class="modal-body">
                <h2>Share</h2>
                <p>Check out this awesome listing on Airfinch: The World Famous Seashell House ~ Casa Caracol - Houses for Rent in Isla Mujeres</p>
                <ul class="share-option-list">

                    <li>
                        <a href="javascript:fbShare('M184MTAy.html', 'South Mission Beach Zen-Like Home', 'This fully furnished second story South Mission bayside studio offers relaxed beach living. This studio sleeps 2 (Queen Bed), 2 Beach cruisers & 2 Boogie Boards are provided; private off street parking; steps to the bay and short stroll to the beach.

Guest access

Guests will have access to private off-street parking, two beach cruisers and two boogie boards. There is also a small patio with a grill.

Interaction with guests

Very limited interaction with guests other than initial booking communications.', '<?php echo $theme_url;?>assets/airbnb/albums/images/listings/1552386986_2_0.jpg', 520, 350);">
                            <i class=""> <svg viewBox="0 0 32 32" role="presentation" aria-hidden="true" focusable="false" style="height: 18px; width: 18px; display: block; fill: rgb(72, 72, 72);"><path d="m8 14.41v-4.17c0-.42.35-.81.77-.81h2.52v-2.08c0-4.84 2.48-7.31 7.42-7.35 1.65 0 3.22.21 4.69.64.46.14.63.42.6.88l-.56 4.06c-.04.18-.14.35-.32.53-.21.11-.42.18-.63.14-.88-.25-1.78-.35-2.8-.35-1.4 0-1.61.28-1.61 1.73v1.8h4.52c.42 0 .81.42.81.88l-.35 4.17c0 .42-.35.71-.77.71h-4.21v16c0 .42-.35.81-.77.81h-5.21c-.42 0-.8-.39-.8-.81v-16h-2.52a.78.78 0 0 1 -.78-.78" fill-rule="evenodd"></path></svg></i>
                            <span> Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a id="tweetShare" href="javascript:void(0);">
                            <i class=""><svg viewBox="0 0 32 32" role="presentation" aria-hidden="true" focusable="false" style="height: 18px; width: 18px; display: block; fill: rgb(72, 72, 72);"><path d="m31 6.36c-1.16.49-2.32.82-3.55.95 1.29-.76 2.22-1.87 2.72-3.38a13.05 13.05 0 0 1 -3.91 1.51c-1.23-1.28-2.75-1.94-4.51-1.94-3.41 0-6.17 2.73-6.17 6.12 0 .49.07.95.17 1.38-4.94-.23-9.51-2.6-12.66-6.38-.56.95-.86 1.97-.86 3.09 0 2.07 1.03 3.91 2.75 5.06-1-.03-1.92-.3-2.82-.76v.07c0 2.89 2.12 5.42 4.94 5.98-.63.17-1.16.23-1.62.23-.3 0-.7-.03-1.13-.13a6.07 6.07 0 0 0 5.74 4.24c-2.22 1.74-4.78 2.63-7.66 2.63-.56 0-1.06-.03-1.43-.1 2.85 1.84 6 2.76 9.41 2.76 7.29 0 12.83-4.01 15.51-9.3 1.36-2.66 2.02-5.36 2.02-8.09v-.46c-.03-.17-.03-.3-.03-.33a12.66 12.66 0 0 0 3.09-3.16" fill-rule="evenodd"></path></svg></i>
                            <span>Twitter</span>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:recipient@domain.com&subject=New%20listing%20is%20waiting%20for%20you">
                            <i class=""><svg viewBox="0 0 32 32" role="presentation" aria-hidden="true" focusable="false" style="height: 18px; width: 18px; display: block; fill: rgb(72, 72, 72);"><path d="m17.42 18.99c.14-.12.86-.76 2.08-1.86l10.43 8.66h-27.76l10.35-8.67c1.24 1.1 1.98 1.74 2.12 1.85.83.65 1.93.63 2.78.02m11.89-10.67-4.83 4.34c-1.51 1.35-2.8 2.51-3.86 3.46l10.35 8.6c.01.01.01.02.02.03v-17.81c0-.04-.02-.07-.02-.11a3.73 3.73 0 0 0 -.08.07zm-25.19-.7a5347.74 5347.74 0 0 0 4.69 4.19c3.94 3.52 6.51 5.79 6.75 5.97a.76.76 0 0 0 .92.03c.21-.18 2.82-2.52 7.01-6.28l4.82-4.33 1.35-1.21h-27.37l.29.26zm3.66 5.28a4436.65 4436.65 0 0 1 -4.66-4.16c-.56-.5-1.07-.96-1.53-1.37l-.57-.51c0 .03-.01.05-.01.07v17.89l10.38-8.7c-1-.89-2.2-1.95-3.61-3.21" fill-rule="evenodd"></path></svg></i>
                            <span>Email</span>
                        </a>

                    </li>
                    <li>
                        <a href="#" id="copylinktext">
                            <i class=""><svg viewBox="0 0 32 32" role="presentation" aria-hidden="true" focusable="false" style="height: 18px; width: 18px; display: block; fill: rgb(72, 72, 72);"><path d="m25.78 1.74c0 .41-.33.74-.74.74h-19.55v25.5a.74.74 0 1 1 -1.49 0v-25.75c0-.68.56-1.23 1.24-1.23h19.81c.41 0 .74.33.74.74zm3.22 3.46v25.76a.98.98 0 0 1 -.99.98h-19.8a.99.99 0 0 1 -.99-.98v-25.76c0-.54.44-.98.99-.98h19.81c.54 0 .99.45.99.98zm-17.82 3.47c0 .27.22.5.5.5h5.94a.49.49 0 1 0 0-.99h-5.94a.5.5 0 0 0 -.5.5zm13.86 13.87a.5.5 0 0 0 -.5-.5h-12.87a.49.49 0 1 0 0 .99h12.87a.5.5 0 0 0 .5-.5zm0-3.96a.5.5 0 0 0 -.5-.5h-12.87a.5.5 0 1 0 0 .99h12.87a.5.5 0 0 0 .5-.5zm0-3.96a.5.5 0 0 0 -.5-.5h-12.87a.5.5 0 1 0 0 .99h12.87a.5.5 0 0 0 .5-.5z" fill-rule="evenodd"></path></svg></i>

                            <span>Copy Link</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="modal fade in" id="emailmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg embad-modal" role="document">
        <div class="modal-content">
            <div class="modal-header no_border clearfix">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
            <svg viewBox="0 0 24 24" role="img" aria-label="Close" focusable="false" style="display: block; fill: rgb(0, 0, 0); height: 16px; width: 16px;">
              <path fill-rule="evenodd" d="M23.25 24a.744.744 0 0 1-.53-.22L12 13.062 1.28 23.782a.75.75 0 0 1-1.06-1.06L10.94 12 .22 1.28A.75.75 0 1 1 1.28.22L12 10.94 22.72.22a.749.749 0 1 1 1.06 1.06L13.062 12l10.72 10.72a.749.749 0 0 1-.53 1.28"></path>
            </svg>
          </span>
                </button>
            </div>
            <div class="modal-body">
                <div class="embad-details clearfix">
                    <div class="left-half">
                        <div class="share-embad-link">
                            <div class="embad-listing">
                                <h1>Share this home</h1>
                                <p>Send to:</p>
                                <input type="email" name="recipient_email[]" id="recipient_email" class="form-control" placeholder="Please add comma(,) to add multiple email address.">
                                <input type="hidden" name="hiddenemailfield" id="hiddenemailfield" />

                                <input type="hidden" name="listingname" value="South Mission Beach Zen-Like Home" id="listingname">
                                <input type="hidden" name="listingproperty" value="Private Room" id="listingproperty">
                                <input type="hidden" name="description" value="This fully furnished second story South Mission bayside studio offers relaxed beach living. This studio sleeps 2 (Queen Bed), 2 Beach cruisers & 2 Boogie Boards are provided; private off street parking; steps to the bay and short stroll to the beach.

Guest access

Guests will have access to private off-street parking, two beach cruisers and two boogie boards. There is also a small patio with a grill.

Interaction with guests

Very limited interaction with guests other than initial booking communications." id="description">

                                <div class="erremail-field"></div>
                                <span>Note: For send multiple email address add comma(,) to end of each email addresses.</span>
                                <div class="mesage">
                                    <p>Personal message:</p>
                                    <textarea class="mesagearea" id="messages" name="messages" rows="5"></textarea>
                                    <input type="hidden" name="sendmaillist" id="sendmaillist" value="sendmaillist" />
                                    <input type="hidden" name="listingname" id="listingname" value="South Mission Beach Zen-Like Home">
                                    <div class="errtextarea"></div>
                                </div>

                                <div class="mail-btn">
                                    <button type="submit" id="getValues" class="btn btn_primary " name="sendemail-button" onClick="sendlistemail();">Send</button>
                                </div>
                                <div>
                                    <br/>
                                    <img id="loginloadimg" src="<?php echo $theme_url;?>assets/airbnb/images/load.gif" class="loading" style="margin-top:-1px;"> </div>
                                <div id="mail-msg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="right-half">
                        <div class="home-image">
                            <div class="share-home-img">
                                <img src="<?php echo $theme_url;?>assets/airbnb/albums/images/listings/1552386986_2_0.jpg" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function validateEmail(email) {
        //alert(email);
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
    (function($) {
        $.fn.multipleInput = function() {
            return this.each(function() {
                // list of email addresses as unordered list
                $list = $('<ul/>');
                // input
                var $input = $('<input type="email" id="recipient_email" name="recipient_email" class="email_search multiemail"/>').keyup(function(event) {
                    if (event.which == 13 || event.which == 32 || event.which == 188) {
                        if (event.which == 188) {
                            var val = $(this).val().slice(0, -1); // remove space/comma from value
                        } else {
                            var val = $(this).val(); // key press is space or comma                        
                        }
                        if (validateEmail(val)) {
                            // append to list of emails with remove button
                            $list.append($('<li class="multipleInput-email"><span>' + val + '</span></li>')
                                .append($('<a href="#" class="multipleInput-close" title="Remove"><i class="glyphicon glyphicon-remove-sign"></i></a>')
                                    .click(function(e) {
                                        $(this).parent().remove();
                                        e.preventDefault();
                                    })
                                )
                            );
                            $(this).attr('placeholder', '');
                            // empty input
                            $(this).val('');
                        } else {
                            $('.erremail-field').html('Please enter valid email id').css('color', 'red');
                        }
                    }
                });
                // container div
                var $container = $('<div class="multipleInput-container" />').click(function() {
                    $input.focus();
                });
                // insert elements into DOM
                $container.append($list).append($input).insertAfter($(this));
                return $(this).hide();
            });
        };
    })(jQuery);
    $('#recipient_email').multipleInput();
</script>
<style type="text/css">
    body {
        padding-right: 0 !important;
    }
    
    #listurl {
        color: #fff;
    }
</style>
<script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
    });
    //Twitter Links
    var link = document.getElementById('tweetShare');
    var url = window.location;
    $('#tweetShare').click(function(event) {
        event.preventDefault();
        window.open("https://twitter.com/share?url=" + encodeURIComponent(url));
    });

    function myFunction() {
        /*var copyText = $("#listurl").val();*/
        var copyText = document.getElementById('listurl');
        copyText.select();
        document.execCommand("Copy");
        alert("Copied the text: " + copyText.value);
    }

    function copyText(element) {

        var range, selection, worked;

        if (document.body.createTextRange) {
            range = document.body.createTextRange();
            range.moveToElementText(element);
            range.select();
        } else if (window.getSelection) {
            selection = window.getSelection();
            range = document.createRange();
            range.selectNodeContents(element);
            selection.removeAllRanges();
            selection.addRange(range);
        }

        try {
            document.execCommand('copy');
            alert('text copied');
        } catch (err) {
            alert('unable to copy text');
        }
    }

    $(document).ready(function() {
        $('.togglehost').click(function() {
            $("#startdate").datepicker("hide");
            $("#enddate").datepicker("hide");
        });

        function checkitclear() {
            //$('#contactmessage').val('');
            $("#checkindate").datepicker("hide");
            $("#checkoutdate").datepicker("hide");
            $('.msgerrcls').val('');
            $('.msgerrcls').hide();
        }
    });

    // New Contact Host Update ENDS - AK

    var input = document.querySelector("input#listurl"); // select the input field

    function showpropval(val) {
        var selectedValues = getSelectValues(this); // get selected values
        input.value = test.join(','); // join them in a comma separated list
        input.select(); // select offscreen inputs text
        document.execCommand("copy"); // copy it
        this.focus(); // focus back on original, so we don't see any glitches
    }

    // credits to: https://stackoverflow.com/questions/5866169/how-to-get-all-selected-values-of-a-multiple-select-box
    function getSelectValues(select) {
        var result = [];
        var options = select && select.options;
        var opt;

        for (var i = 0, iLen = options.length; i < iLen; i++) {
            opt = options[i];

            if (opt.selected) {
                result.push(opt.value || opt.text);
            }
        }
        return result;
    }
</script>
<style type="text/css">
    #listurl {
        position: absolute;
        left: -9999px;
    }
</style>
<script type="text/javascript">
    document.getElementById('copylinktext').addEventListener('click', function() {
        var textarea = document.createElement('textarea');
        //textarea.textContent = 'copied text';
        textarea.textContent = document.getElementById('listurl').value;
        document.body.appendChild(textarea);

        var selection = document.getSelection();
        var range = document.createRange();
        //  range.selectNodeContents(textarea);
        range.selectNode(textarea);
        selection.removeAllRanges();
        selection.addRange(range);

        console.log('copy success', document.execCommand('copy'));
        selection.removeAllRanges();

        document.body.removeChild(textarea);
        alert('Link has been copied');

    });

    $('#recipient_email').click(function() {
        $('#mail-msg').html('');
    });

    $(document).ready(function() {
        $("#btnPopup").click(function() {
            if ($(".pricePopup").hasClass('selected')) {
                $(".pricePopup").removeClass('selected');
                //$(".pricePopup").hide();
            } else {
                $(".pricePopup").addClass('selected');
                //$(".pricePopup").show(); 
            }
        })
    });
</script>

<style type="text/css">
    #taxprice {
        display: none;
    }
    
    .showed.more-descrip {
        font-weight: 300;
        font-size: 17px;
        letter-spacing: 0.2px;
        color: #484848;
    }
    
    #thumb-listed {
        display: inline-block;
        list-style: none;
        position: relative;
        left: 0px;
        padding: 0 0px;
        min-width: 450px;
        max-width: 665px;
    }
    
    ul#thumb-listed li {
        background: #111;
        list-style: none;
        display: inline;
        width: 150px;
        height: 108px;
        overflow: hidden;
        float: left;
        margin: 0;
        cursor: pointer;
    }
    
    #loadingimg.loading {
        margin: 10px auto 0px !important;
    }
    
    .msgerrcls {
        text-align: center;
    }
    
    #btnPopup {
        padding: 0px;
        margin: 0 0 0 5px;
        background: none;
        border: none;
        position: relative;
        top: 2px;
    }
    
    .pricePopup.selected {
        display: block;
    }
    
    .pricePopup {
        display: none;
        position: absolute;
        margin-top: 12px;
    }
    
    .pricePopup svg {
        width: 20px !important;
        height: 10px !important;
        top: 6px;
        position: relative;
        left: 45%;
        right: 55%;
        transform: rotate(180deg);
    }
    
    .pricePopup svg .path1 {
        fill: rgb(255, 255, 255) !important
    }
    
    .pricePopup svg .path2 {
        stroke: rgb(235, 235, 235) !important;
        fill: transparent !important;
    }
    
    .calcPopup {
        padding: 20px;
        background: rgb(255, 255, 255) none repeat scroll 0% 0% !important;
        border: 1px solid rgb(235, 235, 235) !important;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px !important;
        min-height: 150px;
        overflow-y: scroll;
        max-height: 225px;
        border-radius: 5px !important;
    }
    
    td.popCol {
        padding: 8px 10px !important;
        font-size: 12px;
        font-weight: 500;
    }
    
    td.pricepopCol {
        text-align: right;
    }
    
    .map-exact-info {
        overflow-wrap: break-word !important;
        font-size: 16px !important;
        font-weight: 400 !important;
        line-height: 1.375em !important;
        color: rgba(72, 72, 72, 0.70) !important
    }
    
    .savedbtn {
        position: absolute;
        top: 15px;
        right: 130px;
        background: #fff;
        padding: 10px 20px;
        border-radius: 3px;
        text-align: center;
        border: 1px solid #f1f1f1;
        color: #484848;
    }
    
    .savedbtn a,
    .savedbtn i {
        color: #484848;
    }
    
    @media(max-width:750px) {
        #viewCalendar {
            display: none;
        }
    }
</style>

<script src="<?php echo $theme_url;?>assets/airbnb/c0b7f169/yii.js"></script>
<script src="<?php echo $theme_url;?>assets/airbnb/c0b7f169/yii.activeForm.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#form-checkoutpay').yiiActiveForm([], []);
        jQuery('#password-form').yiiActiveForm([], []);
    });
</script>
<script>
    /*$(document).ready(function(){
      loginSession = readCookie('PHPSESSID');
      function readCookie(name) {
          var nameEQ = escape(name) + "=";
          var ca = document.cookie.split(';');//console.log(document.cookie);
          for (var i = 0; i < ca.length; i++) {
              var c = ca[i];
              while (c.charAt(0) === ' ') c = c.substring(1, c.length);
              if (c.indexOf(nameEQ) === 0) return unescape(c.substring(nameEQ.length, c.length));
          }
          return null;
      }
      if (typeof timerId != 'undefined'){
        clearInterval(timerId);
      }
      var timerId = setInterval(function() {
        var currentSession = readCookie('PHPSESSID');
          if(loginSession != currentSession) {
            console.log('in reload '+loginSession+" "+currentSession);
            window.location = 'https://airfinchscript.com/';
            clearInterval(timerId);
              //Or whatever else you want!
          }

      },1000);
    });*/

    $(document).ready(function() {
        $("#check-in").keydown(function(event) {
            if (event.which == 13) {
                $("#check-in").readonlyDatepicker(true);
            }
        });
        $("#check-out").keydown(function(event) {
            if (event.which == 13) {
                $("#check-out").readonlyDatepicker(true);
            }
        });
        $("#check-in").datepicker({
            minDate: new Date(),
            onSelect: function(selected) {
                var dt = new Date(selected);
                dt.setDate(dt.getDate() + 1);
                $("#check-out").datepicker("option", "minDate", dt);
            },
            onClose: function(selectedDate) {
                $("#check-out").datepicker('show');
            }
        });
        edate = new Date();
        edate.setDate(edate.getDate() + 1);
        $("#check-out").datepicker({
            minDate: edate,
            onSelect: function(selected) {
                var dt = new Date(selected);
                dt.setDate(dt.getDate() - 1);
                $("#check-in").datepicker("option", "maxDate", dt);
            }
        });

        $("#check-in-main").datepicker({
            minDate: new Date(),
            onSelect: function(selected) {
                var dt = new Date(selected);
                dt.setDate(dt.getDate() + 1);
                $("#check-out-main").datepicker("option", "minDate", dt);
            },
            onClose: function(selectedDate) {
                $("#check-out-main").datepicker('show');
            }
        });
        edate = new Date();
        edate.setDate(edate.getDate() + 1);
        $("#check-out-main").datepicker({
            minDate: edate,
            onSelect: function(selected) {
                var dt = new Date(selected);
                dt.setDate(dt.getDate() - 1);
                $("#check-in-main").datepicker("option", "maxDate", dt);
            }
        });
    });
</script>
</body>

<!-- Mirrored from airfinchscript.com/user/listing/view/M180MDA= by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jul 2019 15:35:35 GMT -->

</html>

<script type="text/javascript" src="<?php echo $theme_url;?>assets/airbnb/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo $theme_url;?>assets/airbnb/js/jquery-ui.min.js"></script>

<style type="text/css">
    ul.home-menu {
        padding: 0px 20px !important;
    }
    
    ul.home-menu li a.home-menu-text,
    ul.home-menu li a.home-menu-text:focus {
        padding: 0px;
        background: transparent;
        color: #484848 !important;
        font-size: 15px !important;
        font-family: Circular, -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, sans-serif;
        font-weight: 600;
        /*letter-spacing: 0.5px !important;*/
        opacity: 0.9;
    }
    
    ul.home-menu li a.home-menu-text:hover {
        background: transparent !important;
        color: #484848 !important;
    }
    
    ul.home-menu li.note-msg a:hover {
        background: transparent !important;
        color: #FE5771 !important;
    }
    
    .note_count {
        font-size: 14px !important;
    }
    
    .note_view {
        font-size: 14px !important;
        font-weight: 500 !important;
        float: right;
    }
    
    .notify-round {
        fill: rgb(0, 132, 137) !important;
        height: 6px !important;
        position: absolute !important;
        top: 50% !important;
        transform: translate3d(4px, -8px, 0px) !important;
        width: 6px !important;
        animation-name: keyframe_p1skye !important;
        animation-duration: 0.5s !important;
        animation-timing-function: ease !important;
        animation-fill-mode: both !important;
        opacity: 1 !important;
        right: 10px !important;
    }
    
    body {
        overflow-y: visible !important;
    }
</style>