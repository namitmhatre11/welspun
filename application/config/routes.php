<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['admin/delete_media/(:any)'] = 'admin/delete_media/$1';
$route['admin/add_social/(:any)'] = 'admin/add_social/$1';
$route['admin/add_images/(:any)'] = 'admin/add_images/$1';
$route['admin/add_video/(:any)'] = 'admin/add_video/$1';
$route['admin/view_social/(:any)'] = 'admin/view_social/$1';
$route['admin/view_videos/(:any)'] = 'admin/view_videos/$1';
$route['admin/view_images/(:any)'] = 'admin/view_images/$1';
$route['admin/add_media/(:any)'] = 'admin/add_media/$1';
$route['admin/edit_player/(:any)/(:any)'] = 'admin/edit_player/$1/$2';
$route['admin/edit_player/(:any)'] = 'admin/edit_player/$1';
$route['admin/delete_player/(:any)'] = 'admin/delete_player/$1';
$route['admin/add_player'] = 'admin/add_player';
$route['admin/logout'] = 'admin/logout';
$route['admin/dashbord'] = 'admin/dashbord';
$route['admin/login'] = 'admin/login';
$route['admin'] = 'admin';
$route['news/show_table'] = 'news/show_table';
$route['news/create'] = 'news/create';
$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';
//$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
