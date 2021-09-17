<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
        $form_rules = $this->contact_form_rules();
        $this->form_validation->set_rules($form_rules);

        if ($this->form_validation->run() === FALSE)
        {
            echo json_encode([
                'data'    => FALSE,
                'message' => 'Los campos enviados no corresponden a los necesarios para ejecutar esta solicitud.',
            ]);
            exit();
        }

        $this->send_email();

        print_r('se envío');
        exit();

        // $this->contact_model->send();
        // exit();
    }

    private function send_email()
    {

        // $config =   [
        //     'protocol'      =>  'smtp',
        //     'smtp_host'     =>  'smtp.mailgun.org',
        //     'smtp_port'     =>  587,
        //     'smtp_user'     =>  'postmaster@sandbox5daeafcfc4e14c359fbdcc57f9f6269a.mailgun.org',
        //     'smtp_pass'     =>  '086703ccf4e5e2bf90d050f1fa3d151a-90346a2d-75850c8e',
        //     'smtp_crypto'   =>  'ssl',
        //     // 'mailtype'      =>  'html',
        //     'mailtype'      =>  'text',
        //     'charset'       =>  'utf-8',
        //     'wordwrap'      =>  TRUE
        // ];

        // $config =   array(
        //     'protocol'      =>  'sendmail',
        //     'smtp_host'     =>  'mail.trabajandofet.co',
        //     'smtp_port'     =>  '587',
        //     'smtp_user'     =>  'gestion@trabajandofet.co',
        //     'smtp_pass'     =>  'YVsR)uTXFVmi',
        //     'smtp_crypto'   =>  'ssl',
        //     'mailtype'      =>  'html',
        //     'charset'       =>  'utf-8',
        //     'wordwrap'      =>  TRUE
        // );

        $this->load->library('email');

        // $this->email->from('contacto@cohoriente.co', 'Cohoriente');
        $this->email->from('gestion@trabajandofet.co', 'Prueba');
        $this->email->to('hascardenas@gmail.com');
        $this->email->subject('Email test');
        $this->email->message('Testing the email class.');
        $this->email->send();

        echo $this->email->print_debugger(); 
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

    // echo '<pre>';
    // print_r();
    // echo '</pre>';
    // exit();

}


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