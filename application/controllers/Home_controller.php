<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Controlador de la sección de Inicio.
 * 
 * @author		Innovación y Tecnología
 * @category	Controller
 * @copyright 	Copyright (c) 2021, Grupo AW - Área de Innovación y Tecnología.
 * @package		CodeIgniter
 * @version 	1
 */
class Home_controller extends CI_Controller
{
	/**
	 * Inicializa y carga todas las instancias necesarias para ejecutar 
	 * correctamente todos los métodos del Controlador.
	 * 
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	/**
	 * Muestra y gestiona la página de inicio en la sección Inicio.
	 * 
	 * @return void
	 */
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