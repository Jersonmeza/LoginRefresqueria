<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iniciar_controller extends CI_Controller {

    public function __construct(){
        
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('iniciar_model');
    }

	public function index()
	{
        if ($this->session->userdata('consultar')) {
            redirect('principal_controller');
        }else{
           
            $this->load->view('componentes/header.php');
            $this->load->view('Iniciar.php');
            $this->load->view('componentes/foot.php');
        }
           

    }
    
    public function ingresar(){
       
        $Usuario = $this->input->post('usuario');
        $Clave = $this->input->post('clave');
       
        
        $ConsultarUser = $this->iniciar_model->consultar($Usuario, $Clave);

        if ($ConsultarUser == False) {
            echo "Error";
        }else{
            $data = array(
                "usuario"=>$ConsultarUser->usuario,
                "password"=>$ConsultarUser->password
            );

            $this->session->set_userdata($data);
            
        }   
    }


}