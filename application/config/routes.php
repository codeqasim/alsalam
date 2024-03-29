<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Main routes
$route['default_controller'] ="home";
$route['sitemap\.xml'] = "Sitemap";
$route['404_override'] = 'home/error';
$route['translate_uri_dashes'] = FALSE;

$route['signup'] = "home/signup";
$route['signin'] = "home/signin";
$route['register_action'] = "home/register_action";

$route[ADMINURI.'accounts/chagne_order'] = "admin/accounts/chagne_order";
$route[ADMINURI.'cms/chagne_order'] = "admin/cms/chagne_order";
$route[ADMINURI.'cms/page_headings'] = "admin/cms/page_headings";
$route[ADMINURI.'accounts/delete_all'] = "admin/accounts/delete_all";
$route[ADMINURI.'accounts/update_status'] = "admin/accounts/update_status";
$route[ADMINURI.'admin/menu_status'] = "admin/menu_status";
$route[ADMINURI.'accounts/delete_all_account_type'] = "admin/accounts/delete_all_account_type";
$route[ADMINURI.'accounts/types([a-zA-Z0-9]*)'] = "admin/accounts/types$1";
$route[ADMINURI.'accounts/(:any)'] = "admin/accounts/index/$1";
$route[ADMINURI.'login'] = "admin/auth/login";
$route[ADMINURI.'blog/(:any)'] = "home/blog_detail/$1";

$route['newslatters'] = "dashboard/newslatters";
$route['page/(:any)'] = "dashboard/page";


$route['blogs/details/(:any)'] = "blogs/details/$1";
$route['blogs/(:any)'] = "blogs/index/$1";
$route['blog/search/(:any)'] = "blogs/search/$1";

/* Modules URL */
$route[AIRBNB.'home'] = "airbnb";
$route[AIRBNB.'listing'] = "airbnb/list";
$route[AIRBNB.'detail'] = "airbnb/details";
$route[AIRBNB.'booking'] = "airbnb/booking";
$route[AIRBNB.'help'] = "airbnb/help";
$route[AIRBNB.'policies'] = "airbnb/policies";
$route[AIRBNB.'reservation'] = "airbnb/reservation";
$route[AIRBNB.'contact'] = "airbnb/contact";






