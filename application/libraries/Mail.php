<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

class Mail
{
	public function send(
		string $subject,
		string $body,
		string $recipient_name,
		string $recipient_email,
		string $sender_name,
		string $sender_email,
		?string $success_message = 'Correo enviado correctamente.',
        ?string $error_message = 'Ha ocurrido un error al crear la solicitud, intenta contactarnos a través de otro canal de atención.',
		?string $file = NULL,
		?string $file_name = NULL,
	): array 
    {
		$result                                                                 =   array();
		$mail                                                                   =   new PHPMailer();
		$mail->Mailer                                                           =   "smtp";
		$mail->SMTPDebug                                                        =   0;
		$mail->SMTPAuth                                                         =   true;
		$mail->SMTPSecure                                                       =   "tls";
		$mail->Port                                                             =   587;
		$mail->Host                                                             =   "smtp.mailgun.org";
		$mail->Username                                                         =   "postmaster@sandbox5daeafcfc4e14c359fbdcc57f9f6269a.mailgun.org";
		$mail->Password                                                         =   "086703ccf4e5e2bf90d050f1fa3d151a-90346a2d-75850c8e";
        $mail->Subject                                                          =   $subject;
		$mail->AddAddress($recipient_email, $recipient_name);
		$mail->IsSMTP();
		$mail->IsHTML(true);
		$mail->SetFrom("contacto@cohoriente.co", "Cohoriente");
		$mail->AddReplyTo($sender_email, $sender_name);
		$mail->MsgHTML($body);

		if (isset($file) && isset($file_name))
		{
			$mail->addAttachment($file, $file_name);
		}

		if ( ! $mail->send())
		{
			$result['data']                                                     =   FALSE;
			$result['message']                                                  =   $error_message;
		}
		else
		{
			$result['data']                                                     =   TRUE;
			$result['message']                                                  =   $success_message;
		}

		return $result;
		exit();
	}
}