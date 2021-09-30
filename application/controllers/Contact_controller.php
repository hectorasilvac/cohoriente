<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Contact_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->library('mail');
	}

	public function view()
	{
		$this->_view->assign('title', 'Contacto | Cohoriente');
		$this->_view->display('pages/contact.tpl');
	}

	public function order_request()
	{
		$this->_view->assign('title', '¿Tienes un Pedido para Nosotros? | Cohoriente');
		$this->_view->display('pages/order_request.tpl');
	}

	public function send()
	{
		$params 																=	$this->input->post();

		if ($params)
		{
			$this->form_validation->set_rules('fullname', 'Nombre completo', 'required');
			$this->form_validation->set_rules('phone', 'Teléfono', 'required');
			$this->form_validation->set_rules('email', 'Correo electrónico', 'required');
			$this->form_validation->set_rules('message', 'Mensaje', 'required');

			if ($this->form_validation->run())
			{
				$params['fullname'] 											=	trim($params['fullname']);
				$params['phone']    											=	trim($params['phone']);
				$params['email']    											=	trim($params['email']);
				$params['message']  											=	trim($params['message']);

				$body 															=	"<!DOCTYPE html>
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
																						Se ha recibido un nuevo mensaje enviado desde el formulario de Contacto del sitio web de Cohoriente, a continuación
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
																							<strong>Mensaje:</strong>
																							{$params['message']}
																						</p>
																					</body>
																					</html>";

				$send_mail 														=	$this->mail->send(
																						subject: 'Plataforma Cohoriente - Contacto',
																						body: $body,
																						recipient_name: 'Hector Silva', // TODO: Cambiar por real
																						recipient_email: 'hascardenas@gmail.com', // ODO: Cambiar por real
																						sender_name: $params['fullname'],
																						sender_email: $params['email'],
																						success_message: 'Gracias por tu mensaje, en breve responderemos tu inquietud.',
																					);

				echo json_encode($send_mail);
				exit();
			}
			else
			{
				echo json_encode(array('data' => false, 'message' => 'Completa todos los campos.'));
				exit();
			}
		}
		else
		{
			if ($this->input->method(true) === 'GET')
			{
				header('Location: /home');
			}
			else
			{
				echo json_encode(array('data' => false, 'message' => 'Los campos enviados no corresponden a los necesarios para ejecutar esta solicitud.'));
			}
			exit();
		}
	}

	public function send_order()
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
																						Se ha recibido una nueva <strong>Solicitud de Pedido</strong>, a continuación
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
																						subject: 'Plataforma Cohoriente - Solicitud de Pedido',
																						body: $body,
																						recipient_name: 'Hector Silva', // TODO: Cambiar por real
																						recipient_email: 'hascardenas@gmail.com', // TODO: Cambiar por real
																						sender_name: $params['fullname'],
																						sender_email: $params['email'],
																						success_message: 'Gracias por crear la solicitud de tu pedido, en breve uno de nuestros asesores te contactará.',
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

	public function supplier_request()
	{
		$this->_view->assign('title', '¿Quieres ser un Proveedor? | Cohoriente');
		$this->_view->display('pages/supplier_request.tpl');
	}

	public function send_supplier()
	{
		$params = $this->input->post();

		if ($params)
		{
			$this->form_validation->set_rules('fullname', 'Nombre completo', 'required');
			$this->form_validation->set_rules('phone', 'Teléfono', 'required');
			$this->form_validation->set_rules('email', 'Correo electrónico', 'required');
			$this->form_validation->set_rules('company', 'Nombre de empresa', 'required');

			if ($this->form_validation->run())
			{
				$body 															= "<!DOCTYPE html>
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
																						Se ha recibido una nueva <strong>Solicitud de Proveedor</strong>, a continuación
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
																					</body>
																					</html>";

				$send_mail 														=	$this->mail->send(
																						subject:'Plataforma Cohoriente - Solicitud de Proveedor',
																						body:$body,
																						recipient_name:'Hector Silva', // TODO: Cambiar por real
																						recipient_email:'hascardenas@gmail.com', // TODO: Cambiar por real
																						sender_name:$params['fullname'],
																						sender_email:$params['email'],
																						success_message:'Gracias por crear la solicitud para ser uno de nuestros proveedores , en breve uno de nuestros asesores te contactará.',
																					);

				echo json_encode($send_mail);
				exit();

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