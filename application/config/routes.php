<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['tasks/home'] = 'TaskController';
$route['tasks/add'] = 'TaskController/create';
$route['tasks/store'] = 'TaskController/store';
$route['tasks/edit/(:any)'] = 'TaskController/edit/$1';
$route['tasks/update/(:any)'] = 'TaskController/update/$1';
$route['tasks/delete/(:any)'] = 'TaskController/delete/$1';
$route['tasks/test'] = 'TaskController/test';
