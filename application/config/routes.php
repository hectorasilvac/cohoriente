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

// ABOUT
$route['nosotros']                                                              =   'about_controller/view';

// CLASSIFIEDS
$route['clasificados']                                                          =   'classifieds_controller/view';
$route['clasificados/aplicar']                                                  =   'classifieds_controller/apply';
$route['clasificados/suministros']                                              =   'classifieds_controller/supplies';
$route['clasificados/(:num)']                                                   =   'classifieds_controller/detail/$1';

// CONTACT
$route['contacto']                                                              =   'contact_controller/view';
$route['contacto/enviar']                                                       =   'contact_controller/send';
$route['contacto/solicitud-pedido']                                             =   'contact_controller/order_request';
$route['contacto/solicitud-pedido/enviar']                                      =   'contact_controller/send_order';
$route['contacto/solicitud-proveedor']                                          =   'contact_controller/supplier_request';
$route['contacto/solicitud-proveedor/enviar']                                   =   'contact_controller/send_supplier';

// HOME
$route['inicio']                                                                =   'home_controller/view';

// PARTNER
$route['asociarte']                                                             =   'partner_controller/view';
$route['asociarte/requisitos']                                                  =   'partner_controller/requirements';
$route['asociarte/beneficios']                                                  =   'partner_controller/benefits';
$route['asociarte/inversion']                                                   =   'partner_controller/invest';
$route['asociarte/solicitud-afiliacion']                                        =   'partner_controller/membership_application';
$route['asociarte/solicitud-afiliacion/enviar']                                 =   'partner_controller/send_membership';

// SERVICES
$route['servicios']                                                             =   'services_controller/view';
$route['servicios/1']                                                           =   'services_controller/view';
$route['servicios/oferta-abastecimiento']                                       =   'services_controller/supply_offer';
$route['servicios/formacion']                                                   =   'services_controller/training';
$route['servicios/tecnologia-biomedica']                                        =   'services_controller/biomedical';

// DEFAULT
$route['(:any)']                                                                =   'home_controller/view';
$route['default_controller']                                                    =   'home_controller/view';
$route['404_override']                                                          =   '';
$route['translate_uri_dashes']                                                  =   FALSE;
