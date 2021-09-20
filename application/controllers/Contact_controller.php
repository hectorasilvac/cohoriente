<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

class Contact_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('contact_model');
        $this->load->helper('url_helper');
    }

    public function send()
    {
        $form_rules                                                             =   $this->contact_form_rules();
        $this->form_validation->set_rules($form_rules);

        if ($this->form_validation->run() === FALSE)
        {
            echo json_encode([
                'data'                                                          =>  FALSE,
                'message'                                                       =>  'Los campos enviados no corresponden a los necesarios para ejecutar esta solicitud.',
            ]);
            exit();
        }

        $mail_sent                                                              = $this->send_email(
                                                                                    fullname:$this->input->post('fullname'),
                                                                                    phone:$this->input->post('phone'),
                                                                                    email:$this->input->post('email'),
                                                                                    company:$this->input->post('company'),
                                                                                    form:$this->input->post('form'),
                                                                                    file:$_FILES['file']['tmp_name'],
                                                                                    file_name:$_FILES['file']['name'],
                                                                                );

        echo json_encode($mail_sent);
        exit();
    }

    private function send_email(
        string $fullname,
        string $phone,
        string $email,
        string $company,
        string $form,
        ?string $file,
        ?string $file_name
    ): array
    {
        $info_by_form                                                           =   [
                                                                                        'order' => [
                                                                                            'name' => 'Solicitud de Pedido',
                                                                                        ],
                                                                                    ];

        $mail                                                                   =   new PHPMailer();
        $mail->Mailer                                                           =   "smtp";
        $mail->SMTPDebug                                                        =   0;
        $mail->SMTPAuth                                                         =   TRUE;
        $mail->SMTPSecure                                                       =   "tls";
        $mail->Port                                                             =   587;
        $mail->Host                                                             =   "smtp.mailgun.org";
        $mail->Username                                                         =   "postmaster@sandbox5daeafcfc4e14c359fbdcc57f9f6269a.mailgun.org";
        $mail->Password                                                         =   "086703ccf4e5e2bf90d050f1fa3d151a-90346a2d-75850c8e";
        $mail->IsSMTP();
        $mail->IsHTML(TRUE);
        $mail->AddAddress("hascardenas@gmail.com", "recipient-name");
        $mail->SetFrom("gestion@trabajandofet.co", "from-name");
        $mail->AddReplyTo("hascardenas@gmail.com", "reply-to-name");
        $mail->Subject                                                          =   "Cohoriente - {$info_by_form[$form]['name']}";
        $content                                                                =   "
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
                'data'                                                          =>  FALSE,
                'message'                                                       =>  'Ha ocurrido un error al crear la solicitud, intenta contactarnos a través de otro canal de atención.',
            ];
            exit();
        }

        return [
            'data'                                                              =>  TRUE,
            'message'                                                           =>  'Gracias por crear la solicitud de tu pedido, en breve uno de nuestros asesores te contactará.',
        ];
        exit();
    }

    private function contact_form_rules(): array
    {
        return [
            [
                'field'  => 'fullname',
                'label'  => 'Nombre completo',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Este campo es obligatorio.',
                ],
            ],
            [
                'field'  => 'phone',
                'label'  => 'Teléfono',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Este campo es obligatorio.',
                ],
            ],
            [
                'field'  => 'email',
                'label'  => 'Correo electrónico',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Este campo es obligatorio.',
                ],
            ],
            [
                'field'  => 'company',
                'label'  => 'Nombre de la empresa',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Este campo es obligatorio.',
                ],
            ],
            [
                'field'  => 'form',
                'label'  => 'Nombre de formulario',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Este campo es obligatorio.',
                ],
            ],
        ];
    }
}