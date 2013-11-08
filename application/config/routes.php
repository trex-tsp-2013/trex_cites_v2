<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

/*$route['default_controller'] = 'pages/view';
$route['pages'] = 'pages/view';
//$route['(:any)'] = 'pages/view/$1';
$route['pages/login'] = 'pages/login';*/

$route['default_controller'] = 'auth';
$route['auth/create_user'] = 'auth/create_user';
$route['pages'] = 'pages_c';
$route['auth/logout'] = 'auth/logout';
$route['pages/form15/(:any)'] ='form15_c/form15/$1';
$route['pages/preview15'] ='form15_c/preview15';
$route['pages/save15'] = 'form15_c/save15';
$route['pages/about'] = 'pages_c/about';
$route['officers'] = 'officers_c';
$route['officers/lists/(:any)'] = 'officers_c/lists/$1'; // from officer_c
$route['form15/list15/(:any)'] = 'form15_c/list15/$1';   // from officer_c to form15_c 
$route['form15/show15/(:any)'] = 'form15_c/show15/$1';
$route['pages/status/(:any)'] = 'pages_c/status/$1';
$route['form15/update']='form15_c/update_stat15';

$route['pages/forms/form16']='form16_c/';

$route['pages/trans1']='trans_c/trans1';
$route['pages/trans2']='trans_c/trans2';
$route['pages/trans3']='trans_c/trans3';
$route['pages/trans4']='trans_c/trans4';
$route['pages/trans5']='trans_c/trans5';
$route['pages/trans6']='trans_c/trans6';


/* End of file routes.php */
/* Location: ./application/config/routes.php */