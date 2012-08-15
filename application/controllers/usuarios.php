<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuarios extends CI_Controller {
    
    private $error = '';

    function __construct() {
        parent::__construct();

        $this->load->model('Usuarios_Model');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('email');
    }

    function index() {
        $this->iniciar_sesion();
    }

    function iniciar_sesion() {
        
        echo "sdfsdf ".$this->error;
       
        $data['title'] = 'SMAcademy | Iniciar Sesión';
        $data['template'] = 'usuarios/login';
        $data['template_campos'] = array(
            'username' => array(
                'name' => 'usuario',
                'id' => 'usuario',
                'value' => $this->input->post('usuario')
            ),
            'password' => array(
                'name' => 'password',
                'id' => 'password'
            ),
            'message' => $this->error
        );

        $this->load->view('includes/template', $data);
    }
    
    function logout() {
        $this->session->sess_destroy();
        redirect('usuarios/iniciar_sesion');
    }

    function login() {
        $this->form_validation->set_rules('usuario', 'Usuario', 'trim|required|callback__verificar_usuarios');
        $this->form_validation->set_rules('password', 'Contraseña', 'trim|required|md5');

        $this->form_validation->set_message('required', 'El campo %s es requerido');

        if ($this->form_validation->run() == FALSE) {
            $this->iniciar_sesion();
        } else {
            $usuario = $this->input->post('usuario');
            $password = md5($this->input->post('password'));

            $login = $this->Usuarios_Model->login($usuario, $password);

            if ($login) {
                $session = array(
                    'is_login' => TRUE,
                    'username' => $this->input->post('usuario'),
                    'name' => $login[0]->strNombreCompleto
                );

                $this->session->set_userdata($session);
                redirect('index');
            } else {
                $this->error = 'Usuario o Password son incorrectos!';
               
                $this->iniciar_sesion();
            }
        }
    }

    function registar() {
        $data['title'] = 'SMAcademy | Registro de Usuario';
        $data['template'] = 'usuarios/register';
        $data['template_campos'] = array(
            'username' => array(
                'name' => 'usuario',
                'id' => 'usuario',
                'value' => ''
            ),
            'name' => array(
                'name' => 'nombre_completo',
                'id' => 'nombre_completo',
                'value' => ''
            ),
            'email' => array(
                'name' => 'email',
                'id' => 'email',
                'value' => ''
            ),
            'password' => array(
                'name' => 'password',
                'id' => 'password',
                'value' => ''
            ),
            're_password' => array(
                'name' => 're_password',
                'id' => 're_password'
            )
        );

        $this->load->view('includes/template', $data);
    }

    function registrar_usuario() {
        $this->load->library('Guid');

        $this->form_validation->set_rules('usuario', 'Usuario', 'trim|required|callback__verificar_usuario');
        $this->form_validation->set_rules('nombre_completo', 'Nombres', 'trim|required');
        $this->form_validation->set_rules('email', 'eMail', 'trim|required|valid_email|callback__verificar_email');
        $this->form_validation->set_rules('password', 'Contraseña', 'trim|required|md5');
        $this->form_validation->set_rules('re_password', 'Confirmar contraseña', 'trim|required|matches[password]|md5');

        $this->form_validation->set_message('required', 'El campo %s es requerido');
        $this->form_validation->set_message('valid_email', 'El campo %s no es valido');
        $this->form_validation->set_message('_verificar_usuario', 'El %s ya existe');
        $this->form_validation->set_message('_verificar_email', 'El campo %s ya existe');
        $this->form_validation->set_message('matches', 'Las contraseñas no coinciden');

        if ($this->form_validation->run() == FALSE) {
            $this->registar();
        } else {
            $usuario = $this->input->post('usuario');
            $nombre_completo = $this->input->post('nombre_completo');
            $email = $this->input->post('email');
            $password = $this->input->post('re_password');
            $codigo_verificacion = $this->Guid->generate();

            $insert = $this->Usuarios_Model->registrar_usuario($usuario, $nombre_completo, $email, $password, $codigo_verificacion);

            if ($insert == TRUE) {
                $data['title'] = 'SMAcademy CI';
                $data['template'] = 'usuarios/home';

                $this->load->view('includes/template', $data);
            } else {
                
            }
        }
    }

    function verificar_usuario() {
        if ($this->input->is_ajax_request()) {
            $usuario = $this->input->post('usuario');

            if (!$this->_verificar_usuario($usuario)) {
                // Usuario ya existe
            }
        } else {
            $data['title'] = 'SMAcademy CI';
            $data['template'] = '404/404';
            $data['contenido_404'] = 'Error';

            $this->load->view('includes/template', $data);
        }
    }

    function _verificar_usuarios($value) {
        return $this->Usuarios_Model->verificar_usuario($value);
    }

    function _verificar_email($value) {
        return $this->Usuarios_Model->verificar_email($value);
    }

}

?>
