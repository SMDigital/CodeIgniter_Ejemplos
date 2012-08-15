<?php

class Index extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->_is_login();
    }

    function index() {
        $data['title'] = 'SMAcademy CI';
        $data['template'] = 'home/home';

        $this->load->view('includes/template', $data);
    }

    function _is_login() {
        $is_login = $this->session->userdata('is_login');

        if ($is_login != TRUE) {
            redirect('usuarios/iniciar_sesion');
        }
    }

}

?>
