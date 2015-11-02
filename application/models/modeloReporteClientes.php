<?php
class modeloReporteClientes extends CI_Model {
 
    function __construct()
    {
        parent::__construct();
    }
 
    /* Devuelve la lista de alumnos que se encuentran en la tabla tblalumno */
    function obtenerClientes()
    {
        $this->load->database();
        $clientes = $this->db->get('cliente');
        return $clientes->result();
    }
}
?>;