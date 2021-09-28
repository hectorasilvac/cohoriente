<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

class Mail {

        private function process_mail(
            string $subject,
            string $body,
            ?string $file = null,
            ?string $file_name = null,

            // string $fullname,
            // string $phone,
            // string $email,
            // string $company,
            // string $form,

        ): array {
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
            $mail->IsSMTP();
            $mail->IsHTML(true);
            $mail->Subject                                                          =   $subject;
            $file_message                                                           =   null;
            if (isset($file) && isset($file_name)) {
                $mail->addAttachment($file, $file_name);
                $file_message                                                       =   'Adjunto a este correo, encontraras un archivo con más información.';
            }
    
            $content                                                                =   $body;
            $mail->AddAddress("hascardenas@gmail.com", "Jenny Cohoriente"); // TODO: Cambiar por información de Empresa
            $mail->SetFrom("gestion@trabajandofet.co", "Cohoriente");
            $mail->AddReplyTo("{$email}", "{$fullname}");
            $mail->MsgHTML($content);
    
    
            if (! $mail->send()) {
                $result['data']                                                     =   false;
                $result['message']                                                  =   'Ha ocurrido un error al crear la solicitud, intenta contactarnos a través de otro canal de atención.';
            } else {
                $result['data']                                                     =   true;
                $result['message']                                                  =   $info_by_form[$form]['success'];
            }
    
            return $result;
            exit();
        }

        // private function process_mail(
        //     string $fullname,
        //     string $phone,
        //     string $email,
        //     string $company,
        //     string $form,
        //     ?string $file = null,
        //     ?string $file_name = null,
        // ): array {
        //     $result                                                                 =   array();
        //     $info_by_form                                                           =   array(
        //                                                                                     'order' => array(
        //                                                                                         'name' => 'Solicitud de Pedido',
        //                                                                                         'success' => 'Gracias por crear la solicitud de tu pedido, en breve uno de nuestros asesores te contactará.',
        //                                                                                     ),
        //                                                                                     'supplier' => array(
        //                                                                                         'name' => 'Solicitud de Proveedor',
        //                                                                                         'success' => 'Gracias por crear la solicitud para ser uno de nuestros proveedores, en breve uno de nuestros asesores te contactará.'
        //                                                                                     ),
        //                                                                                 );
    
        //     $mail                                                                   =   new PHPMailer();
        //     $mail->Mailer                                                           =   "smtp";
        //     $mail->SMTPDebug                                                        =   0;
        //     $mail->SMTPAuth                                                         =   true;
        //     $mail->SMTPSecure                                                       =   "tls";
        //     $mail->Port                                                             =   587;
        //     $mail->Host                                                             =   "smtp.mailgun.org";
        //     $mail->Username                                                         =   "postmaster@sandbox5daeafcfc4e14c359fbdcc57f9f6269a.mailgun.org";
        //     $mail->Password                                                         =   "086703ccf4e5e2bf90d050f1fa3d151a-90346a2d-75850c8e";
        //     $mail->IsSMTP();
        //     $mail->IsHTML(true);
        //     $mail->Subject                                                          =   "Cohoriente - {$info_by_form[$form]['name']}";
        //     $file_message                                                           =   null;
        //     if (isset($file) && isset($file_name)) {
        //         $mail->addAttachment($file, $file_name);
        //         $file_message                                                       =   'Adjunto a este correo, encontraras un archivo con más información.';
        //     }
    
        //     $content                                                                =   "
        //                                                                                 <!DOCTYPE html>
        //                                                                                 <html lang='es'>
    
        //                                                                                 <head>
        //                                                                                     <meta charset='UTF-8'>
        //                                                                                     <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        //                                                                                     <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        //                                                                                 </head>
    
        //                                                                                 <body>
        //                                                                                     Cordial saludo,
        //                                                                                     <br>
        //                                                                                     <br>
        //                                                                                     Se ha recibido una <strong>{$info_by_form[$form]['name']}</strong> por parte de {$fullname}, a continuación se relacionan los datos de
        //                                                                                     contacto:
        //                                                                                     <br>
        //                                                                                     <p>
        //                                                                                         <strong>Nombre completo:</strong>
        //                                                                                         {$fullname}
        //                                                                                     </p>
        //                                                                                     <p>
        //                                                                                         <strong>Teléfono:</strong>
        //                                                                                         {$phone}
        //                                                                                     </p>
        //                                                                                     <p>
        //                                                                                         <strong>Correo electrónico:</strong>
        //                                                                                         {$email}
        //                                                                                     </p>
        //                                                                                     <p>
        //                                                                                         <strong>Nombre de la empresa:</strong>
        //                                                                                         {$company}
        //                                                                                     </p>
        //                                                                                     <p>{$file_message}</p>
        //                                                                                 </body>
        //                                                                                 </html>
        //                                                                                 ";
        //     $mail->AddAddress("hascardenas@gmail.com", "Jenny Cohoriente"); // TODO: Cambiar por información de Empresa
        //     $mail->SetFrom("gestion@trabajandofet.co", "Cohoriente");
        //     $mail->AddReplyTo("{$email}", "{$fullname}");
        //     $mail->MsgHTML($content);
    
    
        //     if (! $mail->send()) {
        //         $result['data']                                                     =   false;
        //         $result['message']                                                  =   'Ha ocurrido un error al crear la solicitud, intenta contactarnos a través de otro canal de atención.';
        //     } else {
        //         $result['data']                                                     =   true;
        //         $result['message']                                                  =   $info_by_form[$form]['success'];
        //     }
    
        //     return $result;
        //     exit();
        // }
}