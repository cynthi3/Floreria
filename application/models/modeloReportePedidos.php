<?php
class modeloReportePedidos extends CI_Model {
 
    function __construct()
    {
        parent::__construct();
    }
 
    /* Devuelve la lista de alumnos que se encuentran en la tabla tblalumno */
    function obtenerPedidos()
    {
        $this->load->database();
        $pedidos = $this->db->get('pedido');
        return $pedidos->result();
    }
}
?>;