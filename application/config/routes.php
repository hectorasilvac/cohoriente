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

 // CLASSIFIEDS
$route['clasificados']                                                          =   'classifieds_controller/view';
$route['clasificados/aplicar']                                                  =   'classifieds_controller/apply';
$route['clasificados/(:num)']                                                   =   'classifieds_controller/detail/$1';

// CONTACT
$route['contacto']                                                              =   'contact_controller/view';
$route['contacto/enviar']                                                       =   'contact_controller/send';
$route['contacto/solicitud-pedido']                                             =   'contact_controller/order_request';
$route['contacto/solicitud-pedido/enviar']                                      =   'contact_controller/send_order';

// PARTNER

$route['asociarte']                                                             =   'partner_controller/view';
$route['asociarte/requisitos']                                                  =   'partner_controller/requirements';
$route['asociarte/beneficios']                                                  =   'partner_controller/benefits';
$route['asociarte/inversion']                                                   =   'partner_controller/invest';
$route['asociarte/solicitud-afiliacion']                                        =   'partner_controller/membership_application';

// SERVICES
$route['servicios']                                                             =   'services_controller/view';
$route['servicios/oferta-abastecimiento']                                       =   'services_controller/supply_offer';
$route['servicios/formacion']                                                   =   'services_controller/training';
$route['servicios/tecnologia-biomedica']                                        =   'services_controller/biomedical';



// TODO: Acomodar de aquí hacia abajo

$route['afiliacion']                                                            =   'pages_controller/view/affiliation_form';
$route['beneficios']                                                            =   'pages_controller/view/benefits';
$route['biomedica']                                                             =   'pages_controller/view/biomedical';


// SUPPLIES
$route['suministros']                                                           =   'supplies_controller/all';


$route['galeria']                                                               =   'pages_controller/view/gallery';
$route['inversion']                                                             =   'pages_controller/view/invest';
$route['nosotros']                                                              =   'pages_controller/view/about_us';
$route['oferta-de-abastecimiento']                                              =   'pages_controller/view/supply_offer';
$route['proveedor']                                                             =   'pages_controller/view/supplier_form';
$route['requisitos']                                                            =   'pages_controller/view/requirements';
// $route['servicios']                                                             =   'pages_controller/view/services';
$route['solicitud-pedido']                                                      =   'pages_controller/view/order_form';


$route['(:any)']                                                                =   'home_controller/view';
$route['default_controller']                                                    =   'home_controller/view';
$route['404_override']                                                          =   '';
$route['translate_uri_dashes']                                                  =   FALSE;
