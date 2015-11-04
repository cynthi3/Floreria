<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ArregloModel extends CI_Model {

	function __construct(){
		parent::__construct();
	}
	//Guarda un arreglo en la base de datos
	function GuardarArreglo($data){
		$this->db->insert('arreglos', $data);
	}
	//Muestra todas los Arreglos existentes en la base de datos
	function verArreglos(){
		$query = $this->db->get('arreglos');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return FALSE;
		}
	}
	function ArregloEspecifico($id){
		$this->db->where('id',$id);
		$query = $this->db->get('arreglos');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return FALSE;
		}
	}
	//Busca un arreglo de acuerdo al ID
	function BuscarArregloID($id){
		$this->db->where('id',$id);
		$query = $this->db->get('arreglos');
		if ($query->num_rows() > 0){
			foreach ($query->result() as $row){
				$idi = $row->Id;
				$Imagen = $row->Imagen;
				$Nombre = $row->Nombre;
				$Modelo = $row->Modelo;
				$Descripcion = $row->Descripcion;
				$Categoria = $row->Categoria;
				$Precio = $row->Precio;
			}
			$data = array(
				'idi' => $idi,
				'Imagen' => $Imagen,
				'Nombre' => $Nombre,
				'Modelo' => $Modelo,
				'Descripcion' => $Descripcion,
				'Categoria' => $Categoria,
				'Precio' => $Precio
			);
			return $data;
		}else{
			return FALSE;
		}
	}
	//Actualiza en la base de datos el arreglo de acuerdo al id
	function ActualizarArreglo($id,$data){
		$this->db->where('id',$id);
		$this->db->update('arreglos', $data);
	}
	//Elimina un arreglo de la base de datos de acuerdo al id
	function EliminarArregloId($id){
		$this->db->where('id', $id); 
		$this->db->delete('arreglos');
	}
}