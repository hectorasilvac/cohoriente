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
        echo '<pre>';
                print_r('xdses');
        echo '</pre>';
        exit();

    

        // $form_rules = $this->contact_form_rules();
        // $this->form_validation->set_rules($form_rules);

        // if ($this->form_validation->run() === false)
        // {
        //     echo json_encode([
        //         'data'    => false,
        //         'message' => 'Los campos enviados no corresponden a los necesarios para ejecutar esta solicitud.',
        //     ]);
        //     exit();
        // }

        // $data_file = base64_encode($_FILES);

        // $this->send_email($_FILES);
        // exit();

        // $this->contact_model->send();
        // exit();
    }

    private function send_email($file)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Mailer     = "smtp";
        $mail->SMTPDebug  = 0;
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;
        $mail->Host       = "smtp.mailgun.org";
        $mail->Username   = "postmaster@sandbox5daeafcfc4e14c359fbdcc57f9f6269a.mailgun.org";
        $mail->Password   = "086703ccf4e5e2bf90d050f1fa3d151a-90346a2d-75850c8e";
        $mail->IsHTML(true);
        $mail->AddAddress("hascardenas@gmail.com", "recipient-name");
        $mail->SetFrom("gestion@trabajandofet.co", "from-name");
        $mail->AddReplyTo("hascardenas@gmail.com", "reply-to-name");
        $mail->Subject = "Choroiente - Prueba";
        $content       = "<b>Thissssss is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";
        $mail->MsgHTML($content);
        $mail->addAttachment($file['file']['tmp_name'], $file['file']['name']);

        if ( ! $mail->send())
        {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
        else
        {
            echo 'The email message was sent.';
        }
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
        ];
    }

}

// echo '<pre>';
// print_r();
// echo '</pre>';
// exit();

//         $this->form_validation->set_rules('name_user', 'Nombres', 'required');
//         $this->form_validation->set_rules('lastname_user', 'Apellidos', 'required');
//         $this->form_validation->set_rules('user', 'Usuario', 'required');
//         $this->form_validation->set_rules('password_user', 'Contraseña', array('required', 'min_length[8]'));
//         $this->form_validation->set_rules('email_user', 'Correo', 'required');
//         $this->form_validation->set_rules('id_role', 'Rol', 'required');

//         if($this->form_validation->run())
//         {
//             $data                                                               =   array();
//             $data['id_role']                                                    =   $params['id_role'];
//             $data['git_company']                                                =   'T';
//             $data['name_user']                                                  =   ucwords(mb_strtolower($this->_trabajandofet_model->accents($params['name_user'])));
//             $data['lastname_user']                                              =   ucwords(mb_strtolower($this->_trabajandofet_model->accents($params['lastname_user'])));
//             $data['email_user']                                                 =   $this->_trabajandofet_model->user_name($params['email_user']);
//             $data['user']                                                       =   $this->_trabajandofet_model->user_name($params['user']);
//             $password_user_text                                                 =   $params['password_user'];
//             $data['password_user']                                              =   password_hash($params['password_user'], PASSWORD_DEFAULT);
//             $data['user_insert']                                                =   $this->session->userdata['id_user'];

//             if (isset($params['id_aspirant']) && $params['id_aspirant'] != '')
//             {
//                 $data['id_aspirant']                                            =   $params['id_aspirant'];
//             }
//             else
//             {
//                 unset($params['id_aspirant']);
//             }

//             $this->db->trans_start();

//             $answer                                                             =   $this->_trabajandofet_model->insert_data($data, 'git_users');

//             if ($answer && isset($params['flags']))
//             {
//                 foreach ($params['flags'] as $key => $value)
//                 {
//                     $flag['id_user']                                            =   $answer;
//                     $flag['id_flag']                                            =   $value;
//                     $flag['git_company']                                        =   'T';
//                     $flag['user_insert']                                        =   $data['user_insert'];

//                     $this->_trabajandofet_model->insert_data($flag, 'git_users_flags');
//                 }
//             }

//             $this->db->trans_complete();

// if(in_array('ADD', $this->actions))
// {
//     $params                                                             =   $this->security->xss_clean($_POST);

//     if ($params)
//     {
//         $exist_module                                                   =   $this->_modules_model->exist_module($params);

//         if ($exist_module['data'])
//         {
//             $add                                                        =   $this->_modules_model->add($params);

//             echo json_encode($add);
//             exit();
//         }
//         else
//         {
//             echo json_encode($exist_module);
//             exit();
//         }
//     }
//     else
//     {
//         if ($this->input->method(TRUE) == 'GET')
//         {
//             header("Location: " . site_url('modules'));
//         }
//         else
//         {
//             echo json_encode(array('data'=> FALSE, 'message' => 'Los campos enviados no corresponden a los necesarios para ejecutar esta solicitud.'));
//         }

//         exit();
//     }
// }
// else
// {
//     if ($this->input->method(TRUE) == 'GET')
//     {
//         header("Location: " . site_url('modules'));
//     }
//     else
//     {
//         echo json_encode(array('data'=> FALSE, 'message' => 'No cuentas con los permisos necesarios para ejecutar esta solicitud.'));
//     }

//     exit();
// }