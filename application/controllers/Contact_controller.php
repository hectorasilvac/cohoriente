<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

class Contact_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
    }

    public function send_mail()
    {
        $params                                                                 =   $this->input->post();

        if ($params)
        {

            echo '<pre>';
            print_r($_FILES);
            echo '</pre>';
            exit();

            $result                                                             =   array();
            $form_rules                                                         =   $this->get_form_rules();
            $this->form_validation->set_rules($form_rules);

            if ($this->form_validation->run())
            {
                $params['fullname']                                             =   trim($params['fullname']);
                $params['phone']                                                =   trim($params['phone']);
                $params['email']                                                =   trim($params['email']);
                $params['company']                                              =   trim($params['company']);

                if (isset($_FILES) && count($_FILES['file']) > 0)
                {
                    $allowd_types                                               =   array(
                                                                                        'doc' => 'application/msword',
                                                                                        'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                                                                                        'pdf' => 'application/pdf',
                                                                                    );

                    if (in_array($_FILES['file']['type'], $allowd_types))
                    {
                        $mail_sent                                              =   $this->process_mail(
                                                                                        fullname:$params['fullname'],
                                                                                        phone:$params['phone'],
                                                                                        email:$params['email'],
                                                                                        company:$params['company'],
                                                                                        form:$params['form'],
                                                                                        file:$_FILES['file']['tmp_name'],
                                                                                        file_name:$_FILES['file']['name'],
                                                                                    );

                        echo json_encode($mail_sent);
                        exit();
                    }
                    else
                    {
                        echo json_encode(array('data'=> FALSE, 'message' => 'Tipo no archivo no permitido'));
                        exit();
                    }
                }
                else
                {
                    $mail_sent                                                  =   $this->process_mail(
                                                                                        fullname:$params['fullname'],
                                                                                        phone:$params['phone'],
                                                                                        email:$params['email'],
                                                                                        company:$params['company'],
                                                                                        form:$params['form'],
                                                                                    );

                    echo json_encode($mail_sent);
                    exit();
                }

                // $email_sent                                                     =   $this->process_mail();
        // {
        //     echo json_encode([
        //         'data'    => FALSE,
        //         'message' => 'Los campos enviados no corresponden a los necesarios para ejecutar esta solicitud.',
        //     ]);
        //     exit();
        // }

        // $mail_sent = $this->process_mail(
        //     fullname:$this->input->post('fullname'),
        //     phone:$this->input->post('phone'),
        //     email:$this->input->post('email'),
        //     company:$this->input->post('company'),
        //     form:$this->input->post('form'),
        //     file:$_FILES['file']['tmp_name'],
        //     file_name:$_FILES['file']['name'],
        // );

        // echo json_encode($mail_sent);
        // exit();

        // $result['data']                                                     =   FALSE;
        // $result['message']                                                  =   'Completa todos los campos.';

            }
            else
            {

            }
            // print_r('xd');
        }
        else
        {
            // print_r('else');

                    // print_r($this->input->post());

        // exit();
        }       
    }

    private function process_mail(
        string $fullname,
        string $phone,
        string $email,
        string $company,
        string $form,
        ?string $file = NULL,
        ?string $file_name = NULL,
    ): array
    {
        $info_by_form = [
            'order' => [
                'name' => 'Solicitud de Pedido',
            ],
        ];

        $mail             = new PHPMailer();
        $mail->Mailer     = "smtp";
        $mail->SMTPDebug  = 0;
        $mail->SMTPAuth   = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;
        $mail->Host       = "smtp.mailgun.org";
        $mail->Username   = "postmaster@sandbox5daeafcfc4e14c359fbdcc57f9f6269a.mailgun.org";
        $mail->Password   = "086703ccf4e5e2bf90d050f1fa3d151a-90346a2d-75850c8e";
        $mail->IsSMTP();
        $mail->IsHTML(TRUE);
        $mail->AddAddress("hascardenas@gmail.com", "recipient-name");
        $mail->SetFrom("gestion@trabajandofet.co", "from-name");
        $mail->AddReplyTo("hascardenas@gmail.com", "reply-to-name");
        $mail->Subject = "Cohoriente - {$info_by_form[$form]['name']}";
        $content       = "
                                                                                    <!DOCTYPE html>
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
                                                                                        Se ha recibido una <strong>{$info_by_form[$form]['name']}</strong> por parte de {$fullname}, a continuación se relacionan los datos de
                                                                                        contacto:
                                                                                        <br>
                                                                                        <p>
                                                                                            <strong>Nombre completo:</strong>
                                                                                            {$fullname}
                                                                                        </p>
                                                                                        <p>
                                                                                            <strong>Teléfono:</strong>
                                                                                            {$phone}
                                                                                        </p>
                                                                                        <p>
                                                                                            <strong>Correo electrónico:</strong>
                                                                                            {$email}
                                                                                        </p>
                                                                                        <p>
                                                                                            <strong>Nombre de la empresa:</strong>
                                                                                            {$company}
                                                                                        </p>
                                                                                        <p>Adjunto a este correo, encontraras un archivo con más información.</p>
                                                                                    </body>
                                                                                    </html>
                                                                                    ";
        $mail->MsgHTML($content);
        $mail->addAttachment($file, $file_name);

        if ( ! $mail->send())
        {
            return [
                'data'    => FALSE,
                'message' => 'Ha ocurrido un error al crear la solicitud, intenta contactarnos a través de otro canal de atención.',
            ];
            exit();
        }

        return [
            'data'    => TRUE,
            'message' => 'Gracias por crear la solicitud de tu pedido, en breve uno de nuestros asesores te contactará.',
        ];
        exit();
    }

    private function get_form_rules(): array
    {
        return array(
            array(
                'field'  => 'fullname',
                'label'  => 'Nombre completo',
                'rules'  => 'required',
                'errors' => array(
                    'required' => 'Este campo es obligatorio.',
                ),
            ),
            array(
                'field'  => 'phone',
                'label'  => 'Teléfono',
                'rules'  => 'required',
                'errors' => array(
                    'required' => 'Este campo es obligatorio.',
                ),
            ),
            array(
                'field'  => 'email',
                'label'  => 'Correo electrónico',
                'rules'  => 'required',
                'errors' => array(
                    'required' => 'Este campo es obligatorio.',
                ),
            ),
            array(
                'field'  => 'company',
                'label'  => 'Nombre de la empresa',
                'rules'  => 'required',
                'errors' => array(
                    'required' => 'Este campo es obligatorio.',
                ),
            ),
            array(
                'field'  => 'form',
                'label'  => 'Nombre de formulario',
                'rules'  => 'required',
                'errors' => array(
                    'required' => 'Este campo es obligatorio.',
                ),
            ),
        );
    }
}