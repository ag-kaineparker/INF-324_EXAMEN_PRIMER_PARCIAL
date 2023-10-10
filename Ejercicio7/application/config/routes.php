<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//$routes->setAutoRoute(true);
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Rutas para el controlador Welcome
$route['welcome'] = 'welcome/index';  // Ruta para la página principal
$route['modificar_estudiante/(:any)'] = 'welcome/modificar_estudiante/$1';
$route['agregar_estudiante'] = 'welcome/agregar_estudiante';
$route['eliminar_estudiante/(:any)'] = 'welcome/eliminar_estudiante/$1';
