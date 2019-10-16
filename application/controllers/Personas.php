<?php

class Personas extends CI_Controller{

    public function __construct(){
        parent::__construct();
        
    $this->load->helper('form');
    $this->load->model('Persona');
    $this->load->database();

    }
  
    public function index(){
        

    }

    public function listado(){

    }

    public function guardar(){
        $this->load->view('personas/guardar');
        
        
            $data["nombre"] = $this->input->post("nombre");
            $data["apellido"] = $this->input->post("apellido");
            $data["edad"] = $this->input->post('edad');

            $this->Persona->insert($data);
        
    }

    public function borrar($data){

    }

}
