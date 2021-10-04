<?php

defined('BASEPATH') or exit('No direct script access allowed');

class About_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function view()
	{
		$this->_view->assign('title', 											'Nosotros | Cohoriente');
		$this->_view->display('pages/about.tpl');
	}
}