<?php

class Personas extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper('form');
    }
  
    public function index(){
        

    }

    public function listado(){

    }

    public function guardar(){
        $this->load->view('personas/guardar');

    }

    public function borrar(){

    }

}
