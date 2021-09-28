<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Supplies_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
	}

	public function all()
	{
		$this->_view->assign('title', 'Suministros | Cohoriente');
		$this->_view->assign('selected_tab', 'supplies');
		$this->_view->display('pages/supplies.tpl');
	}
}