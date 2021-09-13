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
            'home' => 'Inicio',
            'services' => 'Servicios',
            'about_us' => 'Nosotros',
        ]; 

        $title = $page_names[$page] . ' | Cohoriente';

        $this->_view->assign('title', $title);
        $this->_view->display("pages/{$page}.tpl");
        exit();
    }
}
