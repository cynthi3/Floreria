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

	function eliminar($idFlor){

		$this->db->where('idFlor',$idFlor);
		$this->db->delete('flores');
	}

	function obtenerDatos($id){

		$this->db->where('idFlor',$id);
		$query= $this->db->get('flores');
		if ($query->num_rows()>0){
			return $query;
		}else{
			return FALSE;
		}
	}

	function editarFlor($idFlor,$data){
		$this->db->where('idFlor',$idFlor);
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



/////////////////////////////////////////////////

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

	function obtenerAccesorios($idAcc){

		$this->db->where('idAcc',$idAcc);
		$query= $this->db->get('accesorio');
		if ($query->num_rows()>0){
			return $query;
		}else{
			return FALSE;
		}
	}

	function editarAccesorio($idAcc,$data){
		$this->db->where('idAcc',$idAcc);
		$this->db->update('accesorio',$data);

	}

		function eliminarAccesorio($id){

		$this->db->where('idAcc',$id);
		$this->db->delete('accesorio');
	}


}