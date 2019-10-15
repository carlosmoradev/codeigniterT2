<?php

class Persona extends CI_Model {

    public $table = 'personas';  /* **variable global que hace referencia a la tabla */
    public $table_id = 'persona_id';

    public function __construct() {

    }

    //funcion de busqueda
    function find($id){
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where($this->table_id, $id);

        $query = $this->db->get();
        return $query->row();

    }
    function findAll(){
        $this->db->select();
        $this->db->from($this->table);
        // $this->db->where($this->table_id);

        $query = $this->db->get();
        return $query->result();

    }

    function insert($data){ /**$data es lo que se recibe como parametro */
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();  /**buena practica retornar el id del registro insertado */
    }

    function update($id, $data){
        $this->db->update($this->table, $data);
        $this->db->where($this->table_id, $id);
    }

    function delete($id){
        $this->db->delete($this->table);
        $this->db->where($this->table_id, $id);
    }
}