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

        $data['title'] = ucfirst($page);

        $this->_view->display("pages/{$page}.tpl");
        exit();
    }
}
