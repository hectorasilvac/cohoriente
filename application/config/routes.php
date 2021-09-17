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
|    example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|    https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|    $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|    $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|    $route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:    my-controller/index    -> my_controller/index
|        my-controller/my-method    -> my_controller/my_method
 */
$route['afiliacion']                                                            =   'pages_controller/view/affiliation_form';
$route['asociarte']                                                             =   'pages_controller/view/partner';
$route['beneficios']                                                            =   'pages_controller/view/benefits';
$route['biomedica']                                                             =   'pages_controller/view/biomedical';
$route['clasificados']                                                          =   'pages_controller/view/classifieds';
$route['contacto']                                                              =   'pages_controller/view/contact';
$route['contacto/enviar']                                                       =   'contact_controller/send';
$route['formacion']                                                             =   'pages_controller/view/training';
$route['galeria']                                                               =   'pages_controller/view/gallery';
$route['inversion']                                                             =   'pages_controller/view/invest';
$route['nosotros']                                                              =   'pages_controller/view/about_us';
$route['oferta-de-abastecimiento']                                              =   'pages_controller/view/supply_offer';
$route['proveedor']                                                             =   'pages_controller/view/supplier_form';
$route['requisitos']                                                            =   'pages_controller/view/requirements';
$route['servicios']                                                             =   'pages_controller/view/services';
$route['solicitud-pedido']                                                      =   'pages_controller/view/order_form';

$route['(:any)']                                                                =   'pages_controller/view/$1';

$route['default_controller']                                                    =   'pages_controller/view';
$route['404_override']                                                          =   '';
$route['translate_uri_dashes']                                                  =   FALSE;
