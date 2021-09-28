<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
	}

	public function view()
	{
		$this->_view->assign('title', 'Inicio | Cohoriente');
		$this->_view->display('pages/home.tpl');
	}
}