<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class bookmarksModel extends CI_Model {

	function __construct(){
		parent::__construct();
	}
	//==================Acciones de Libro===================================
	//Guarda una Libro en la base de datos
	function GuardarLibro($data){
		$this->db->insert('libros', $data);
	}
	//Busca un libro de acuerdo al titulo
	function BuscarLibro($query){
		$this->db->like('Titulo', $query);
		$query = $this->db->get('libros');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return FALSE;
		}
	}
	//Muestra todas los libros existentes en la base de datos
	function verLibros(){
		$query = $this->db->get('Libros');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return FALSE;
		}
	}
	//Busca un libro de acuerdo al ID
	function BuscarLibroId($id){
		$this->db->where('id',$id);
		$query = $this->db->get('Libros');
		if ($query->num_rows() > 0){
			foreach ($query->result() as $row){
				$idi = $row->Id;
				$Portada = $row->Portada;
				$ISBN = $row->ISBN;
				$Titulo = $row->Titulo;
				$Autor = $row->Autor;
				$Sinopsis = $row->Sinopsis;
				$Paginas = $row->Paginas;
				$Fecha = $row->Fecha;
				$Calificacion = $row->Calificacion;
				$Editorial = $row->Editorial;
				$Precio = $row->Precio;
				$Genero = $row->Genero;
				$Idioma = $row->Idioma;
				$Cantidad = $row->Cantidad;

			}
			$data = array(
				'idi'=>$idi,
				'Portada'=>$Portada,
				'ISBN'=>$ISBN,
				'Titulo'=>$Titulo,
				'Autor'=>$Autor,
				'Sinopsis'=>$Sinopsis,
				'Paginas'=>$Paginas,
				'Fecha'=>$Fecha,
				'Calificacion'=>$Calificacion,
				'Editorial'=>$Editorial,
				'Precio'=>$Precio,
				'Genero'=>$Genero,
				'Idioma'=>$Idioma,
				'Cantidad'=>$Cantidad
			);
			return $data;
		}else{
			return FALSE;
		}
	}
	function LibroEspe($id){
		$this->db->where('id',$id);
		$query = $this->db->get('Libros');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return FALSE;
		}
	}
	//Actualiza en la base de datos una pelicula de acuerdo al ID
	function ActualizarLibro($id,$data){
		$this->db->where('id',$id);
		$this->db->update('Libros', $data);
	}
	//Elimina una pelicula de acuerdo al ID
	function eliminarlibroId($id){
		$this->db->where('id', $id); 
		$this->db->delete('Libros');
	}
	//==================Termina Acciones de Peliculas=======================

	//==================Acciones de Usuarios================================
	//Regresa todos los usuarios existentes en la base de dartos
	function verUsuarios(){
		$query = $this->db->get('users');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return FALSE;
		}
	}
	//Busca un usuario de acuerdo a un id
	function BuscarUsuarioId($id){
		$this->db->where('id',$id);
		$query = $this->db->get('users');
		if ($query->num_rows() > 0){
			foreach ($query->result() as $row){
				$idi = $row->id;
				$username = $row->username;
				$email = $row->email;
			}
			$data = array(
				'idi' => $idi,
				'username' => $username,
            	'email'=> $email
			);
			return $data;
		}else{
			$data = '';
			return FALSE;
		}
	}
	//Actualiza usuario en la base de datos
	function ActualizarUsuario($id,$data){
		$this->db->where('id',$id);
		$this->db->update('users', $data);
	}
	//Elimina un usuario de la base de datos
	function eliminarUsuarioId($id){
		$this->db->where('id', $id); 
		$this->db->delete('users');
	}
	//Cambia el valor a uno en la tabla usuarios
	function validarUsu($id){
		$data = array('activated' => '1');
		$this->db->where ('id',$id);
		$this->db->update('users', $data);
	}
	function BuscarUsu($query){
		$this->db->like('username', $query);
		$query = $this->db->get('users');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return FALSE;
		}
	}
	//==================Termina Acciones de Usuarios========================

	function GuardarCompra($data){
		$this->db->insert('Compras', $data);
	}
	function VerCompras(){
		//variable query guarda lo que se tenga en la tabla historial.
		$query=$this->db->get('Compras');
		//si tiene datos regresa la variable y si no regresa falso
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return FALSE;
		}
	}
	function ConsultaCompra($ISBN,$username){
		$this->db->where('ISBN', $ISBN);
		$query = $this->db->get('Compras');
		if($query != FALSE){
        	foreach($query->result() as $row){
				if($row->Usuario==$username){
					return TRUE;
				}
        	}
        	return FALSE;
		}else{
			return FALSE;
		}
	}
	function ConsultaLibro($ISBN){
		$this->db->where('ISBN',$ISBN);
		$query = $this->db->get('Libros');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return FALSE;
		}
	}

	function LibroMenos($ISBN){
		$this->db->where('ISBN',$ISBN);
		$query = $this->db->get('Libros');
		if ($query->num_rows() > 0){
			foreach($query->result() as $row){
				$cantidad = $row->Cantidad;
        	}
		}
		$cantidad = $cantidad - '1';
		$data = array('Cantidad' => $cantidad);
		$this->db->where ('ISBN',$ISBN);
		$this->db->update('Libros', $data);
	}
}