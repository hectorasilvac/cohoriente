<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jobs_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function all(): array
	{
		$result 																=	array();

		$this->db->select('id_job AS id,company_name_job AS company_name, company_logo_job AS company_logo, name_job AS name, brief_job AS brief, contract_job AS contract, schedule_job AS schedule, salary_job AS salary, requirements_job AS requirements, benefits_job AS benefits');
		$query 																	=	$this->db->get('coh_jobs');

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

	public function detail(int $id): array
	{
		$result 																=	array();

		$this->db->select('id_job AS id,company_name_job AS company_name, company_logo_job AS company_logo, name_job AS name, brief_job AS brief, contract_job AS contract, schedule_job AS schedule, salary_job AS salary, requirements_job AS requirements, benefits_job AS benefits');
		$this->db->where('id_job', $id);
		$query 																	=	$this->db->get('coh_jobs');

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
}