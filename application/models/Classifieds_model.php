<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Modelo de la sección de Clasificados.
 * 
 * @author		Innovación y Tecnología
 * @category	model
 * @copyright 	Copyright (c) 2021, Grupo AW - Área de Innovación y Tecnología.
 * @package		CodeIgniter
 * @version 	1
 */
class Classifieds_model extends CI_Model
{
	/**
	 * Inicializa y carga todas las instancias necesarias para ejecutar 
	 * correctamente todos los métodos del Modelo.
	 * 
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Consulta en la base de datos y obtiene el detalle de la oferta laboral.
	 * 
	 * @param int $id
	 * 
	 * @return array
	 */
	public function detail(int $id): array
	{
		$result 																=	array();

		$this->db->select('id_cla AS id, company_name_cla AS company_name, company_logo_cla AS company_logo, name_cla AS name, brief_cla AS brief, contract_cla AS contract, schedule_cla AS schedule, salary_cla AS salary, requirements_cla AS requirements, benefits_cla AS benefits');
		$this->db->where('id_cla', $id);
		$query 																	=	$this->db->get('coh_classifieds');

		if ($query->num_rows() > 0)
		{
			$result['data']    													=	$query->row_array();
			$result['message'] 													=	NULL;
		}
		else
		{
			$result['data']    													=	FALSE;
			$result['message'] 													=	'No se encontró información del empleo.';
		}

		return $result;
		exit();
	}

	/**
	 * Consulta en la base de datos y obtiene todas las ofertas laborales.
	 * 
	 * @return array
	 */
	public function view(): array
	{
		$result 																=	array();

		$this->db->select('id_cla AS id,company_name_cla AS company_name, company_logo_cla AS company_logo, name_cla AS name, brief_cla AS brief, contract_cla AS contract, schedule_cla AS schedule, salary_cla AS salary, requirements_cla AS requirements, benefits_cla AS benefits');
		$query 																	=	$this->db->get('coh_classifieds');

		if ($query->num_rows() > 0)
		{
			$result['data']    													=	$query->result_array();
			$result['message'] 													=	NULL;
		}
		else
		{
			$result['data']    													=	FALSE;
			$result['message'] 													=	'Actualmente no hay ofertas laborales, te invitamos a revisar más adelante.';
		}

		return $result;
		exit();
	}
}