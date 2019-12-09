<!DOCTYPE html>
<html lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no" />
    <link href="<?php echo base_url(); ?>uploads/settings/favicon.png" type="image/x-icon" rel="icon">
    <script> var baseurl = "<?php echo base_url(); ?>"; </script>
    <title>TECFARE</title>
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo base_url(); ?>">
    <meta property="og:description" content="">
    <meta property="fb:app_id" content="">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:image" content="">
    <link href="<?php echo $theme_url;?>assets/airbnb/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $theme_url;?>assets/airbnb/css/style.css" rel="stylesheet">
    <link href="<?php echo $theme_url;?>assets/airbnb/css/jquery-ui.min.css" rel="stylesheet">
    <link href="<?php echo $theme_url;?>assets/airbnb/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $theme_url;?>assets/airbnb/css/style1.css" rel="stylesheet">
    <link href="<?php echo $theme_url;?>assets/airbnb/938cd62d/authchoice.css" rel="stylesheet">
    <link href="<?php echo $theme_url;?>assets/airbnb/css/site.css" rel="stylesheet">
    <script src="<?php echo $theme_url;?>assets/airbnb/js/jquery.js"></script>
    <script src="<?php echo $theme_url;?>assets/airbnb/js/bootstrap.js"></script>
    <script src="<?php echo $theme_url;?>assets/airbnb/js/front.js"></script>
    <script type="text/javascript" src="<?php echo $theme_url;?>assets/airbnb/js/moment.js"></script>
    <script type="text/javascript" src="<?php echo $theme_url;?>assets/airbnb/js/daterangepicker.js"></script>
    <style>
        .alert-success {
            position: absolute;
            right: -50%;
            width: 50%;
            transition: all 1s !important;
            overflow: hidden !important;
            z-index: 1001 !important;
        }
        
        .flashcss {
            right: 0%;
        }
    </style>
    <style>
        #customBtn,
        #customBtnLogin {
            display: inline-block;
            background: #fff;
            color: #444;
            width: 100%;
            border-radius: 3px;
            border: thin solid #888;
            white-space: nowrap;
            padding: 3px
        }
        
        #customBtn:hover,
        #customBtnLogin:hover {
            cursor: pointer
        }
        
        span.label {
            font-family: serif;
            font-weight: 400
        }
        
        span.icon {
            background: url(https://google-developers.appspot.com/identity/sign-in/g-normal.png) transparent 5px 50% no-repeat;
            display: inline-block;
            vertical-align: middle;
            width: 42px;
            height: 42px
        }
        
        span.buttonText {
            display: inline-block;
            vertical-align: middle;
            padding-left: 0;
            padding-right: 0;
            font-size: 18px;
            font-weight: 700;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-default menu_bg">
<div class="airfcfx-home-cnt-width-header">  
<div class="padding-left-15 navbar-header">
<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="airfcfx-mobile-navbar navbar-toggle collapsed" type="button">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="<?php echo base_url(); ?>" class="navbar-brand">
<img src="<?php echo base_url(); ?>uploads/settings/logo.png" alt="" class="logoimg logomobile" />
</a>
</div>
<div class="navbar-collapse collapse" id="navbar">
<ul class="airfcfx-home-menu nav navbar-nav navbar-right">
<?php if (isUserLogin() && $page = "home"): ?>
<li class="dropdown">
<a href="/user/messages/inbox/traveling" class="dropdown-toggle airfcfx-menu-link"><span class="airfcfx-menu">Messages</span>
</a>
</li>
<li class="dropdowns respNotis">
<a href="" aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="airfcfx-menu-link dropdown-toggle pos_rel">
Notification
</a>
<ul class="home-menu dropdown-menu profil_menu">
<li class="margin_top15 margin_bottom15">
<a href="/user/listing/usernotifications" class="home-menu-text">
Notification
<span class="note_count">(17)</span>
<span class="note_view">View all</span>
</a>
</li>
<li class="border_bottom"></li>
<li class="note-msg margin_top15 margin_bottom15"><span class="">You got reservation from <a href="/profile/My03MQ==">Aswad</a>
at <a href="/user/listing/view/OF82NTA1">Luxury Villa with Pool &amp; Ocean View</a></span>
</li>
<li class="border_bottom"></li>
<li class="note-msg margin_top15 margin_bottom15"><span class="">You got reservation from <a href="/profile/My0yMDM=">Aswad</a>
at <a href="/user/listing/view/M18yMDU2">South Mission Beach Zen-Like Home</a></span>
</li>
<li class="border_bottom"></li>
<li class="note-msg margin_top15 margin_bottom15"><span class=""><a href="/profile/My05NTY=">Aswad</a>
sent review on <a href="/user/listing/view/MTNfMzU0MA==">Charming cottage in Landour</a></span>
</li>
<li class="border_bottom"></li>
<li class="note-msg margin_top15 margin_bottom15"><span class="">You got reservation from <a href="/profile/My00MjM=">Aswad</a>
at <a href="/user/listing/view/MTNfMTc4Ng==">Charming cottage in Landour</a></span>
</li>
<li class="border_bottom"></li>
<li class="note-msg margin_top15 margin_bottom15"><span class=""><a href="/profile/My0xNjA=">Aswad</a>
sent review on <a href="/user/listing/view/MzJfNTY3NA==">Elegant 3BDR Apartment - Downtown</a></span>
</li>
</ul>
</li>
<li class="respNoti">
<a href="/user/listing/usernotifications" class="airfcfx-menu-help-txt">        Notifications                               </a>
</li>
<li>
<a href="" class="airfcfx-menu-help-txt">       Help                                </a>
</li>
<li>
<a href="/dashboard" aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle pos_rel margin_right padd_right_60">
<span class="profile_pict" style="background-image:url(" <?php echo base_url()?>asset/assets/albums/images/users/usrimg.jpg&amp;w=35&amp;h=35)></span> </a>
<ul class="airfcfx-arrow-dropdown dropdown-menu padding20 profil_menu">
<a href="<?php echo base_url()?>dashboard" class="rm_text_deco">
<li class="margin_top10 margin_bottom10">Dashboard</li>
</a>
<div class="border_bottom">
</div>
<div class="border_bottom"></div>
<a href="" class="rm_text_deco">
<li class="margin_top10 margin_bottom10">Account Settings</li>
</a>
<div class="border_bottom"></div>
<a href="<?php echo base_url(); ?>airbnb/logout" class="rm_text_deco">
<li class="margin_top10">Logout</li>
</a>
</ul>
</li>
<?php if (isUserLogin() && $page != "home"): ?>
<form method="GET" action="<?php echo base_url()?>Listing/listing_search">
<div class="pos_rel pull-left search_sec">
<select class="form-control" id="here" name="search">
</select>
</div>
<input type="submit" value="submit" class="btn btn-light" style="margin-top: 24px;margin-left: 14px;">
</form>
</div>
<?php endif; ?>
<?php else: ?>
<li><a href="<?=base_url('')?>register">Sign up</a>
</li>
<li><a href="<?=base_url('');?>login">Log in</a>
</li>
<?php endif; ?>
</ul>
</div>
</nav>
</div>
</nav>