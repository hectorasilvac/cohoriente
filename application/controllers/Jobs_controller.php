<?php

defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

class Jobs_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->model('jobs_model');
	}

	public function all()
	{
		$all_jobs 																=	$this->jobs_model->all();

		if ($all_jobs['data'])
		{
			$this->_view->assign('jobs', $all_jobs['data']);
		}
		else
		{
			$this->_view->assign('empty_jobs', $all_jobs['message']);
		}

		$this->_view->assign('title', 'Clasificados | Cohoriente');
		$this->_view->assign('selected_tab', 'jobs');
		$this->_view->display('pages/jobs.tpl');

	}

	public function detail(int $id)
	{
		$detail 																=	$this->jobs_model->detail($id);

		if ($detail['data'])
		{
			$this->_view->assign('detail', $detail['data']);
		}
		else
		{
			$this->_view->assign('empty_detail', $detail['message']);
		}

		$this->_view->assign('title', "{$detail['data']['name']} | Cohoriente");
		$this->_view->display('pages/classified_detail.tpl');
	}

	public function apply()
	{
		$params = $this->input->post();

		if ($params && isset($_FILES['file']) && ! empty($_FILES['file']))
		{
			$this->form_validation->set_rules('url', 'Enlace de la oferta', 'required|valid_url');
			$this->form_validation->set_rules('name', 'Nombre de la oferta', 'required');

			if ($this->form_validation->run())
			{
				$allowed_types 													=	array(
																						'doc'  => 'application/msword',
																						'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
																						'pdf'  => 'application/pdf',
																					);

				if (in_array($_FILES['file']['type'], $allowed_types))
				{
					$mail_sent 													=	$this->process_mail(
																						name:$params['name'],
																						url:$params['url'],
																						file:$_FILES['file']['tmp_name'],
																						file_name:$_FILES['file']['name']
																					);

					echo json_encode($mail_sent);
					exit();
				}
				else
				{
					echo json_encode(array('data' => false, 'message' => 'Formato de archivo no permitido.'));
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
			echo json_encode(array('data' => FALSE, 'message' => 'Los campos enviados no corresponden a los necesarios para ejecutar esta solicitud.'));
			exit();
		}
	}

	private function process_mail(string $name, string $url, string $file, string $file_name): array
	{
		$result           														=	array();
		$mail             														=	new PHPMailer();
		$mail->Mailer     														=	"smtp";
		$mail->SMTPDebug  														=	0;
		$mail->SMTPAuth   														=	TRUE;
		$mail->SMTPSecure 														=	"tls";
		$mail->Port       														=	587;
		$mail->Host       														=	"smtp.mailgun.org";
		$mail->Username   														=	"postmaster@sandbox5daeafcfc4e14c359fbdcc57f9f6269a.mailgun.org";
		$mail->Password   														=	"086703ccf4e5e2bf90d050f1fa3d151a-90346a2d-75850c8e";
		$mail->IsSMTP();
		$mail->IsHTML(TRUE);
		$mail->Subject 															=	"Cohoriente - Candidato/a para la vacante de {$name}";
		$content       															=	"
                                                                                    <!DOCTYPE html>
                                                                                    <html lang='es'>

                                                                                    <head>
                                                                                        <meta charset='UTF-8'>
                                                                                        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                                                                                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                                                                                    </head>

                                                                                    <body>
                                                                                        <p>Cordial saludo,</p>
                                                                                        <p>
																						Se ha recibido una postulación para la vacante de <strong><a href='{$url}' target='_blank'>{$name}</a></strong>.
																						</p>
                                                                                        <p>A continuación encontraras adjunto la hoja de vida del postulante.</p>
                                                                                    </body>
                                                                                    </html>
                                                                                    ";
		$mail->AddAddress("hascardenas@gmail.com", "Jenny Cohoriente"); // TODO: Cambiar por información de Empresa
		$mail->SetFrom("gestion@trabajandofet.co", "Cohoriente");
		$mail->AddReplyTo("hascardenas@gmail.com", "Hector Silva");
		$mail->MsgHTML($content);
		$mail->addAttachment($file, $file_name);

		if ( ! $mail->send())
		{
			$result['data']    													=	FALSE;
			$result['message'] 													=	'Ha ocurrido un error al crear la solicitud, intenta más tarde.';
		}
		else
		{
			$result['data']    													=	TRUE;
			$result['message'] 													=	'Gracias por aplicar a nuestra oferta laboral, si cumples con el perfil te estaremos contactando.';
		}

		return $result;
		exit();
	}
}