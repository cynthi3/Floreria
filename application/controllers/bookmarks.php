<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Bookmarks extends CI_Controller{
	//Constructor de Controlador
	function __constructor(){
		parent::__constructor();
	}
	//Index por default del controlador
	public function index(){
		$this->load->view('headers/librerias');
		$this->load->view('bookmarks/main');
		$this->load->view('footer');
	}
	//====================Acciones de Peliculas=======================
	//Carga la vista para editar Pelicula de acuerdo a un id en especifico.
	public function editarPeliculas(){
		$this->load->model('bookmarksModel');
		$id = $this->uri->segment(3);
		if ($id){
			$data= $this->bookmarksModel->BuscarpeliculaId($id);
			if ($this->tank_auth->is_logged_in()){
				$this->load->view('headers/librerias');
				$this->load->view('Editar_Peli',$data);
				$this->load->view('footer');
			}else{
				echo "No tienes permisos para entrar";
			}
		}
	}
	//Elimina Una pelicula
	public function eliminarPeliculas(){
		$this->load->model('bookmarksModel');
		$id = $this->uri->segment(3);
		if ($id){
			$this->bookmarksModel->eliminarpeliculaId($id);
			redirect('main/ver_Peliculas');
		}
	}
	//====================Termina Acciones de Peliculas===============

	//====================Acciones de Usuarios========================
	//Carga la vista para editar usuario de acuerdo a un id en especifico.
	public function editarUsuarios(){
		$this->load->model('bookmarksModel');
		$id = $this->uri->segment(3);
		if ($id){
			$data = $this->bookmarksModel->BuscarUsuarioId($id);
			if ($this->tank_auth->is_logged_in()){
				$this->load->view('headers/librerias');
				$this->load->view('Editar_Usuario',$data);
				$this->load->view('footer');
			}else{
				echo "No tienes permisos para entrar";
			}
		}
	}
	public function eliminarUsuarios(){
		$this->load->model('bookmarksModel');
		$id = $this->uri->segment(3);
		if ($id){
			$this->bookmarksModel->eliminarUsuarioId($id);
			redirect('main/ver_usuarios');
		}
	}
	public function validarUsuarios(){
		$this->load->model('bookmarksModel');
		$id = $this->uri->segment(3);
		if ($id){
			$this->bookmarksModel->validarUsu($id);
			redirect('main/ver');
		}
	}
	//====================Termina Acciones de Usuarios================
}
	