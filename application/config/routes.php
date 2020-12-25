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
// Kamar Controller!!
$route['user'] = 'KamarController/user';
$route['owner'] = 'KamarController/owner';
$route['admin'] = 'KamarController/Admin';
$route['info_kamar'] = 'KamarController/info_kamar';
$route['info_kamar_owner'] = 'KamarController/info_kamar_owner';
$route['dashboarduser'] = 'KamarController/user';
$route['userinbox'] = 'KamarController/user_inbox';
$route['tambah_kamar'] = 'KamarController/tambah_kamar';
// Booking Controller!!
$route['payment'] = 'BookingController/payment';
$route['owner_payments'] = 'BookingController/owner_payment';
$route['paymentuser'] = 'BookingController/payment_user';
$route['viewpayment'] = 'BookingController/konfirmasi_payment';
$route['pesankamar'] = 'BookingController/pesankamar';
// User Controller!!
$route['register'] = 'UserController/register';
$route['login'] = 'UserController/login';
$route['logout'] = 'UserController/logout';
$route['getlogin'] = 'UserController/getlogin';
$route['userprofile'] = 'UserController/user_profile';
$route['adminprofile'] = 'UserController/admin_profile';
$route['ownerprofile'] = 'UserController/owner_profile';
$route['home'] = 'UserController/home';
$route['users'] = 'UserController/user_management';
$route['owner_users'] = 'UserController/user_management_owner';
$route['default_controller'] = 'UserController/home';
$route['404_override'] = 'UserController/error';
$route['translate_uri_dashes'] = FALSE;
