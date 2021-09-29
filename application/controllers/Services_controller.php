<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Services_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
	}

	public function view()
	{
		$this->_view->assign('title', 'Servicios | Cohoriente');
		$this->_view->display('pages/services.tpl');
	}

	public function biomedical()
	{
		$this->_view->assign('title', 'Acompañamiento en Tecnología Biomédica | Cohoriente');
		$this->_view->display('pages/biomedical.tpl');
	}

	public function supply_offer()
	{
		$this->_view->assign('title', 'Oferta de Abastecimiento | Cohoriente');
		$this->_view->display('pages/supply_offer.tpl');
	}

	public function training()
	{
		$this->_view->assign('title', 'Formación y Crecimiento | Cohoriente');
		$this->_view->display('pages/training.tpl');
	}
}