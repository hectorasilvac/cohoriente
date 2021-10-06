<?php

defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Controlador de la sección de Servicios.
 * 
 * @author		Innovación y Tecnología
 * @category	Controller
 * @copyright 	Copyright (c) 2021, Grupo AW - Área de Innovación y Tecnología.
 * @package		CodeIgniter
 * @version 	1
 */
class Services_controller extends CI_Controller
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
	 * Muestra y gestiona la página de tecnología biomédica en la sección de 
	 * Servicios.
	 * 
	 * @return void
	 */
	public function biomedical()
	{
		$this->_view->assign('title', 											'Acompañamiento en Tecnología Biomédica | Cohoriente');
		$this->_view->display('pages/biomedical.tpl');
	}

	/**
	 * Muestra y gestiona la página de oferta de abastecimiento en la sección de 
	 * Servicios.
	 * 
	 * @return void
	 */
	public function supply_offer()
	{
		$this->_view->assign('title', 											'Oferta de Abastecimiento | Cohoriente');
		$this->_view->display('pages/supply_offer.tpl');
	}

	/**
	 * Muestra y gestiona la página de formación y crecimiento en la sección de 
	 * Servicios.
	 * 
	 * @return void
	 */
	public function training()
	{
		$this->_view->assign('title', 											'Formación y Crecimiento | Cohoriente');
		$this->_view->display('pages/training.tpl');
	}

	/**
	 * Muestra y gestiona la página de inicio en la sección de Servicios.
	 * 
	 * @return void
	 */
	public function view()
	{
		$this->_view->assign('title', 											'Servicios | Cohoriente');
		$this->_view->display('pages/services.tpl');
	}
}