<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ModeloFloresYAccesorios extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->dbforge();
	}

	function guardar($data){

		$this->db->insert('flores',$data);
	}

	function verTodoFlores(){

		$query= $this->db->get('flores');
		
		if ($query->num_rows()>0){
			return $query;
		}else{
			return FALSE;
		}
	}

	function eliminar($id){

		$this->db->where('id',$id);
		$this->db->delete('flores');
	}

	function obtenerDatos($id){

		$this->db->where('id',$id);
		$query= $this->db->get('flores');
		if ($query->num_rows()>0){
			return $query;
		}else{
			return FALSE;
		}
	}

	function editarFlor($id,$data){
		$this->db->where('id',$id);
		$this->db->update('flores',$data);

	}

	function buscar($query){

		$this->db->like('titulo',$query);
		$query = $this->db->get('bookmarks');
	
		if ($query->num_rows() >0 ){

			return $query;
		}else{
			return FALSE;
		}
	}



	function verTodoAccesorios(){

		$query= $this->db->get('accesorio');
		
		if ($query->num_rows()>0){
			return $query;
		}else{
			return FALSE;
		}
	}

	function guardarAccesorio($data){

		$this->db->insert('accesorio',$data);
	}

	function obtenerAccesorios($nombre){

		$this->db->where('nombre',$nombre);
		$query= $this->db->get('accesorio');
		if ($query->num_rows()>0){
			return $query;
		}else{
			return FALSE;
		}
	}

	function editarAccesorio($nombre,$data){
		$this->db->where('nombre',$nombre);
		$this->db->update('accesorio',$data);

	}

		function eliminarAccesorio($id){

		$this->db->where('id',$id);
		$this->db->delete('accesorios');
	}


}