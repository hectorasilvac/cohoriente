<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Controlador de la sección de Nosotros.
 * 
 * @author		Innovación y Tecnología
 * @category	Controller
 * @copyright 	Copyright (c) 2021, Grupo AW - Área de Innovación y Tecnología.
 * @package		CodeIgniter
 * @version 	1
 */
class About_controller extends CI_Controller
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
	}

	/**
	 * Muestra la página de inicio de la sección de Nosotros.
	 * 
	 * @return void
	 */
	public function view()
	{
		$this->_view->assign('title', 											'Nosotros | Cohoriente');
		$this->_view->display('pages/about.tpl');
	}
}