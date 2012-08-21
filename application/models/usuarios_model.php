<?php

class Usuarios_Model extends CI_Model {

    function verificar_usuario($username) {
        $this->db->where('strUsuario', $username);
        $query = $this->db->get('tbl_usuarios');

        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

    function verificar_email($email) {
        $this->db->where('strEmail', $email);
        $query = $this->db->get('tbl_usuarios');

        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }
    
    function login($usuario, $password) {
        $this->db->where('strUsuario', $usuario);
        $this->db->where('strPassword', $password);
        $query = $this->db->get('tbl_usuarios');
        
        if ($query->num_rows() > 0){
            return $query->result();
        } else {
            return false;
        }
    }

    function insertar_usuario($usuario, $nombre_completo, $email, $password) {
        $data = array(
            'strUsuario' => $usuario,
            'strNombreCompleto' => $nombre_completo,
            'strEmail' => $email,
            'strPassword' => $password
        );
        
        return $this->db->insert('tbl_usuarios', $data);

    }

}