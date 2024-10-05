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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['form'] = 'welcome/form2';
$route['studentlist'] = 'StudentController/index';
$route['student-form'] ='StudentController/studentform';
$route['student_form_submit']='StudentController/formsubmit';
$route['student_fetch_form']='StudentController/formsubmit';
$route['delete/(:any)']='StudentController/delete_row/$1';//for deleting
$route['update/(:any)']='StudentController/update/$1';// for updating
$route['list']='StudentController/index';
$route['login']='StudentController/loginform';
// $route['findform']='StudentController/loginform';
$route['getform']='StudentController/getformdata';
// $route['loginformdetail']='StudentController/loginformlist';
$route['logout']='StudentController/logout';
$route['dashboard']='StudentController/dashboard';
// $route['login1']='StudentController/loginfordashboard';//for login form ko dashboard vale mein open kiya h 
