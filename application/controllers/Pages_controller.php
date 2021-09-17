<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function view($page = 'home')
    {
        if ( ! file_exists(APPPATH . 'views/pages/' . $page . '.tpl'))
        {
            show_404();
        }

        $page_names = [
            'about_us'                                                          =>  'Nosotros',
            'affiliation_form'                                                  =>  'Afiliación',
            'benefits'                                                          =>  'Beneficios',
            'biomedical'                                                        =>  'Acompañamiento en Tecnología Biomédica',
            'contact'                                                           =>  'Contacto',
            'classifieds'                                                       =>  'Clasificados',
            'home'                                                              =>  'Inicio',
            'gallery'                                                           =>  'Galería',
            'invest'                                                            =>  'Inversión',
            'order_form'                                                        =>  '¿Tienes un Pedido para Nosotros?',
            'partner'                                                           =>  'Asociarte',
            'requirements'                                                      =>  'Requisitos',
            'supplier_form'                                                     =>  '¿Quieres ser un Proveedor?',
            'supply_offer'                                                      =>  'Oferta de Abastecimiento',
            'services'                                                          =>  'Servicios',
            'training'                                                          =>  'Formación y Crecimiento',
        ];

        $title                                                                  =   $page_names[$page] . ' | Cohoriente';

        $this->_view->assign('title', $title);
        $this->_view->display("pages/{$page}.tpl");
        exit();
    }
}
