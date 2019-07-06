<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal_controller extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

	public function index()
	{
             
          $this->load->view('componentes/header.php');
          $this->load->view('Principal.php');
          $this->load->view('componentes/foot.php');

    }
    
    public function cerrarSession(){
        $this->session->sess_destroy();
        
    }
  
}