<?php
class modeloReporteInventario extends CI_Model {
 
    function __construct()
    {
        parent::__construct();
    }
 
    /* Devuelve la lista de alumnos que se encuentran en la tabla tblalumno */
    function obtenerInventario()
    {
        $this->load->database();
        $inventario = $this->db->get('flores');
        return $inventario->result();
    }
}
?>;