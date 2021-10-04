<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function view()
	{
		$this->_view->assign('title', 											'Inicio | Cohoriente');
		$this->_view->assign('path_supply', 									site_url('servicios/oferta-abastecimiento'));
		$this->_view->assign('path_training',									site_url('servicios/formacion'));
		$this->_view->assign('path_biomedical',									site_url('servicios/tecnologia-biomedica'));
		$this->_view->assign('path_services',									site_url('servicios'));
		$this->_view->display('pages/home.tpl');
	}
}