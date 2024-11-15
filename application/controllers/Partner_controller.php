<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Controlador de la sección de Asociarte.
 * 
 * @author		Innovación y Tecnología
 * @category	Controller
 * @copyright 	Copyright (c) 2021, Grupo AW - Área de Innovación y Tecnología.
 * @package		CodeIgniter
 * @version 	1
 */
class Partner_controller extends CI_Controller
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
		$this->load->library('mail');
	}

	/**
	 * Muestra y gestiona la página de beneficios en la sección de Clasificados.
	 * 
	 * @return void
	 */
	public function benefits()
	{
		$this->_view->assign('title', 											'Beneficios | Cohoriente');
		$this->_view->display('pages/benefits.tpl');
	}

	/**
	 * Muestra y gestiona la página de inversión en la sección de Clasificados.
	 * 
	 * @return void
	 */
	public function invest()
	{
		$this->_view->assign('title', 											'Inversión | Cohoriente');
		$this->_view->display('pages/invest.tpl');
	}

	/**
	 * Muestra y gestiona la página de solicitud de afiliación en la sección de 
	 * Clasificados.
	 * 
	 * @return void
	 */
	public function membership_application()
	{
		$this->_view->assign('title', 											'¿Quieres ser Uno de Nosotros? | Cohoriente');
		$this->_view->assign('path_send', 										site_url('asociarte/solicitud-afiliacion/enviar'));
		$this->_view->display('pages/membership_application.tpl');
	}

	/**
	 * Muestra y gestiona la página de requisitos en la sección de Clasificados.
	 * 
	 * @return void
	 */
	public function requirements()
	{
		$this->_view->assign('title', 											'Requisitos | Cohoriente');
		$this->_view->display('pages/requirements.tpl');
	}

	/**
	 * Envía un correo electrónico a la persona encargada de las solicitudes de 
	 * afiliación, con información del postulante.
	 *
	 * Recibe los parámetros "fullname", "phone", "email" y "company" a través 
	 * del método $_POST y el parámetro "file" a través del método $_FILE, 
	 * realiza la validación y a través de la librería Mail procesa el envío del 
	 * correo.
	 * 
	 * @return void
	 */
	public function send_membership()
	{
		$params 																=	$this->input->post();

		if ($params)
		{
			$this->form_validation->set_rules('fullname', 'Nombre completo', 'required');
			$this->form_validation->set_rules('phone', 'Teléfono', 'required');
			$this->form_validation->set_rules('email', 'Correo electrónico', 'required');
			$this->form_validation->set_rules('company', 'Nombre de empresa', 'required');

			if ($this->form_validation->run())
			{
				$params['fullname'] 											=	trim($params['fullname']);
				$params['phone']    											=	trim($params['phone']);
				$params['email']    											=	trim($params['email']);
				$params['company']  											=	trim($params['company']);

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
																						Cordial saludo,
																						<br>
																						<br>
																						Se ha recibido una nueva <strong>Solicitud de Afiliación</strong>, a continuación
																						se
																						relaciona la información del remitente:
																						<br>
																						<p>
																							<strong>Nombre completo:</strong>
																							{$params['fullname']}
																						</p>
																						<p>
																							<strong>Teléfono:</strong>
																							{$params['phone']}
																						</p>
																						<p>
																							<strong>Correo electrónico:</strong>
																							{$params['email']}
																						</p>
																						<p>
																							<strong>Nombre de la empresa:</strong>
																							{$params['company']}
																						</p>
																						<p>Adjunto a este correo, encontraras un archivo con más información.</p>
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
																						subject: 'Plataforma Cohoriente - Solicitud de Afiliacion',
																						body: $body,
																						recipient_name: 'Hector Silva', // TODO: Cambiar por real
																						recipient_email: 'hascardenas@gmail.com', // TODO: Cambiar por real
																						sender_name: $params['fullname'],
																						sender_email: $params['email'],
																						success_message: 'Gracias por crear la solicitud para ser asociado, en breve uno de nuestros asesores le contactará.',
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

	/**
	 * Muestra y gestiona la página de inicio en la sección de Asociarte.
	 * 
	 * @return void
	 */
	public function view()
	{
		$this->_view->assign('title', 											'Asociarte | Cohoriente');
		$this->_view->assign('path_download_bylaws', 							site_url('resources/pdf/estatutos.pdf'));
		$this->_view->assign('path_requirements', 								site_url('asociarte/requisitos'));
		$this->_view->assign('path_benefits', 									site_url('asociarte/beneficios'));
		$this->_view->assign('path_invest', 									site_url('asociarte/inversion'));
		$this->_view->assign('path_affiliation', 								site_url('asociarte/solicitud-afiliacion'));
		$this->_view->display('pages/partner.tpl');
	}
}