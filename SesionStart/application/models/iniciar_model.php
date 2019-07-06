<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iniciar_model extends CI_Model {
    
    public function consultar($Usuario, $Clave){
     
        $query = $this->db->query("SELECT * FROM usuarios WHERE usuario='$Usuario' AND password='$Clave';");
        
        if ($query->num_rows()>0) {
            return $query->row();
        }else{
            return false;
        }

    }
}