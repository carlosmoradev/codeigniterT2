<?php

class Inicio extends CI_Controller {
    
    public function index(){

        $this->data['titulo'] = 'Título desde el controlador';
        // $this->data['cabecera'] = 'templates/header';
        $this->load->view('templates/header', $this->data);
        $this->load->view('templates/content', $this->data);
        $this->load->view('templates/footer', $this->data);
    }
}