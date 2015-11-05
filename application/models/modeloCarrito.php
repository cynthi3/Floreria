<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modeloCarrito extends CI_Model {

	function __construct(){
		parent::__construct();
	}
	function ApartarArreglos($data){
		$this->db->insert('carrito', $data);
	}
	function VerApartados($username){
		$this->db->where('Usuario',$username);
		$this->db->where('Comprado','0');
		$query = $this->db->get('carrito');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return FALSE;
		}
	}
	function EliminarArregloId($id){
		$this->db->where('idCarrito', $id); 
		$this->db->delete('carrito');
	}
	function confirmaCompra($id){
		$data = array('Comprado' => '1');
		$this->db->where('idCarrito', $id);
		$this->db->update('carrito', $data);
	}
}