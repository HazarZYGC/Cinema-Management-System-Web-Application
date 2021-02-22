<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'main';
$route['frontend'] = 'movies';
$route['frontend/'] = 'moviesingle';
$route['frontend/(:any)'] = 'moviesingle/detay';
$route['frontend/(:any)'] = 'theatermovielist/detay';
$route['frontend/(:any)'] = 'updatemoviepage/detay';
$route['frontend/(:any)'] = 'updatesessionpage/detay';
$route['frontend/(:any)'] = 'ticketrent/detay';
$route['frontend/(:any)'] = 'reserveticket/detay';
$route['frontend/(:any)'] = 'ticketshow/detay';
$route['frontend'] = 'adminpanel';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

