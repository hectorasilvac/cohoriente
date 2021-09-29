<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Partner_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
	}

	public function view()
	{
		$this->_view->assign('title', 'Asociarte | Cohoriente');
		$this->_view->display('pages/partner.tpl');
	}

	public function requirements()
	{
		$this->_view->assign('title', 'Requisitos | Cohoriente');
		$this->_view->display('pages/requirements.tpl');
	}

	public function benefits()
	{
		$this->_view->assign('title', 'Beneficios | Cohoriente');
		$this->_view->display('pages/benefits.tpl');
	}

	public function invest()
	{
		$this->_view->assign('title', 'Inversión | Cohoriente');
		$this->_view->display('pages/invest.tpl');
	}

	public function membership_application()
	{
		$this->_view->assign('title', '¿Quieres ser Uno de Nosotros? | Cohoriente');
		$this->_view->display('pages/membership_application.tpl');
	}
}