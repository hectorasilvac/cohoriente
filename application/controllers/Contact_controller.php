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

	public function send()
	{
		$this->mail->test();
		exit();

		$params = $this->input->post();

		if ($params)
		{
			$this->form_validation->set_rules('fullname', 'Nombre completo', 'required');
			$this->form_validation->set_rules('phone', 'Teléfono', 'required');
			$this->form_validation->set_rules('email', 'Correo electrónico', 'required');
			$this->form_validation->set_rules('message', 'Mensaje', 'required');

			if ($this->form_validation->run())
			{
				$params['fullname'] = trim($params['fullname']);
				$params['phone']    = trim($params['phone']);
				$params['email']    = trim($params['email']);
				$params['message']  = trim($params['message']);

				$mail_sent = $this->process_mail(
					fullname:$params['fullname'],
					phone:$params['phone'],
					email:$params['email'],
					company:$params['company'],
					form:$params['form'],
				);

				echo json_encode($mail_sent);
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

}
