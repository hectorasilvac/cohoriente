<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Classifieds_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('classifieds_model');
		$this->load->library('mail');
	}

	public function view()
	{
		$all_classifieds 														=	$this->classifieds_model->view();

		if ($all_classifieds['data'])
		{
			$this->_view->assign('jobs',										$all_classifieds['data']);
		}
		else
		{
			$this->_view->assign('empty_jobs', 									$all_classifieds['message']);
		}

		$this->_view->assign('title', 											'Clasificados | Cohoriente');
		$this->_view->assign('path_classifieds', 								site_url('clasificados'));
		$this->_view->assign('path_supplies', 									site_url('clasificados/suministros'));
		$this->_view->assign('selected_tab', 									'jobs');
		$this->_view->display('pages/classifieds.tpl');

	}

	public function detail(int $id)
	{
		$detail 																=	$this->classifieds_model->detail($id);

		if ($detail['data'])
		{
			$this->_view->assign('detail', 										$detail['data']);
		}
		else
		{
			$this->_view->assign('empty_detail', 								$detail['message']);
		}

		$this->_view->assign('title', 											"{$detail['data']['name']} | Cohoriente");
		$this->_view->display('pages/classified_detail.tpl');
	}

	public function supplies()
	{
		$this->_view->assign('title', 											'Suministros | Cohoriente');
		$this->_view->assign('path_classifieds', 								site_url('clasificados'));
		$this->_view->assign('path_supplies', 									site_url('clasificados/suministros'));
		$this->_view->assign('selected_tab', 									'supplies');
		$this->_view->display('pages/supplies.tpl');
	}

	public function apply()
	{
		$params 																=	$this->input->post();

		if ($params)
		{
			$this->form_validation->set_rules('url', 'Enlace de la oferta', 'required|valid_url');
			$this->form_validation->set_rules('name', 'Nombre de la oferta', 'required');

			if ($this->form_validation->run())
			{
				$params['url'] 													=	trim($params['url']);
				$params['name']    												=	trim($params['name']);

				if (isset($_FILES) && count($_FILES['file']) > 0)
                {
					$body 														=	"<!DOCTYPE html>
																					<html lang='es'>
																					<head>
																						<meta charset='UTF-8'>
																						<meta http-equiv='X-UA-Compatible' content='IE=edge'>
																						<meta name='viewport' content='width=device-width, initial-scale=1.0'>
																					</head>
																					<body>
																						<p>Cordial saludo,</p>
																						<p>
																							Se ha recibido una postulación para la vacante de <strong><a href='{$params['url']}' target='_blank'>{$params['name']}</a></strong>.
																						</p>
																						<p>A continuación encontraras adjunto la hoja de vida del postulante.</p>
																					</body>
																					</html>";
                    $allowd_types                                               =   array(
                                                                                        'doc' => 'application/msword',
                                                                                        'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                                                                                        'pdf' => 'application/pdf',
                                                                                    );

                    if (in_array($_FILES['file']['type'], $allowd_types))
                    {
						$send_mail 												=	$this->mail->send(
																						subject: "Plataforma Cohoriente - Candidato/a para la vacante de {$params['name']}",
																						body: $body,
																						recipient_name: 'Hector Silva', // TODO: Cambiar por real
																						recipient_email: 'hascardenas@gmail.com', // TODO: Cambiar por real
																						sender_name: 'Plataforma Cohoriente',
																						sender_email: 'contacto@cohoriente.com', // TODO: Cambiar por real
																						success_message: 'Gracias por aplicar a nuestra oferta laboral, si cumples con el perfil te estaremos contactando.',
																						file: $_FILES['file']['tmp_name'],
																						file_name: $_FILES['file']['name'],
																					);
						
						echo json_encode($send_mail);
						exit();

                    }
                    else
                    {
                        echo json_encode(array('data'=> FALSE, 'message' => 'Formato de archivo no permitido'));
                        exit();
                    }
                }
                else
                {
					echo json_encode(array('data' => FALSE, 'message' => 'Debes adjuntar un archivo.'));
                    exit();
                }
				
			}
			else
			{
				echo json_encode(array('data' => FALSE, 'message' => 'Completa todos los campos.'));
				exit();
			}
		}
		else
		{
			if ($this->input->method(true) === 'GET')
			{
				header('Location: /inicio');
			}
			else
			{
				echo json_encode(array('data' => FALSE, 'message' => 'Los campos enviados no corresponden a los necesarios para ejecutar esta solicitud.'));
			}
			exit();
		}
	}
}