<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('bookmarksModel');
		$this->load->model('upload_model');

	}

	//Carga la vista de inicio para usuarios no registrados.
	public function index(){
		$this->load->view('headers/librerias');
		$this->load->view('Inicio');
		$this->load->view('footer');
	}

	//Carga la vista una vez que se inicio sesion.
	public function principal(){
		$data = array('username' => $this->tank_auth->get_username());
		$this->load->view('headers/librerias');
		$this->load->view('principal', $data);
		$this->load->view('footer');
	}

	//Funcion que carga la vista donde se muestra que no tiene permisos para entrar a la seccion solicitada.
	public function SinPermiso(){
		$data = array('username' => $this->tank_auth->get_username());
		$this->load->view('headers/librerias');
		$this->load->view('SinAcceso',$data);
		$this->load->view('footer');
	}

	//Funcion que carga la vista para agregar un libro.
	public function Agregar_Libro($error){
		$username = $this->tank_auth->get_username();
		$data = array('error' => $error);
		if ($this->tank_auth->is_logged_in()){
			if($username=="Administrador"){
				$this->load->view('headers/librerias');
				$this->load->view('Agregar_Libro',$data);
				$this->load->view('footer');
			}else{
				redirect('main/SinPermiso');
			}
		}else{
			redirect('main/SinPermiso');
		}	
	}

	//Funcion que guarda un libro en la base de datos con ayuda del modelo bookmarksmodel.php
	public function GuardarLibro(){
		$nombre = $_FILES['portada']['name'];
		$ruta1=$_FILES['portada']['tmp_name'];
		$ruta = "Imagenes/";
		opendir($ruta);
		$ruta1=$_FILES['portada']['tmp_name'];
		$destino = $ruta.$nombre;
		copy($ruta1,$destino);
		$data = array(
			'Portada' => $nombre,
            'ISBN'=> $this->input->post('isbn',TRUE),
            'Titulo'=> $this->input->post('titulo',TRUE),
            'Autor'=> $this->input->post('autor',TRUE),
            'Sinopsis'=> $this->input->post('sinopsis',TRUE),
            'Paginas'=> $this->input->post('paginas',TRUE),
            'Fecha'=> $this->input->post('fecha',TRUE),
            'Calificacion'=> $this->input->post('calificacion',TRUE),
            'Editorial'=> $this->input->post('editorial',TRUE),
            'Precio'=> $this->input->post('precio',TRUE),
            'Genero'=> $this->input->post('genero',TRUE),
            'Idioma'=> $this->input->post('idioma',TRUE),
            'Cantidad'=> $this->input->post('cantidad',TRUE)
		);
		$this->bookmarksModel->GuardarLibro($data);
		redirect('main/Agregar_Libro/exito');
	}

	//Funcion que carga la vista de todos los libros existentes en el sistema.
	public function Ver_Libros(){
		$data = array(
			'username'=> $this->tank_auth->get_username(),
			'libros' => $this->bookmarksModel->VerLibros(),
			'dump' => 0
		);
		$this->load->view('headers/librerias');
		$this->load->view('Ver_Libros', $data);
		$this->load->view('footer');
	}

	//Carga la vista de mas informacion
	public function MasInfo($id){
		$username = $this->tank_auth->get_username();
		$enlaces1 = $this->bookmarksModel->LibroEspe($id);
		if($enlaces1 != FALSE){
        	foreach($enlaces1 ->result() as $row){
        		$ISBN = $row->ISBN;
				$comprado = $this->bookmarksModel->ConsultaCompra($ISBN,$username);
        	}
        }
		$data = array(
			'Comprado' => $comprado,
			'username'=> $username,
			'enlaces' => $this->bookmarksModel->LibroEspe($id),
			'dump' => 0
		);
		$this->load->view('headers/librerias');
		$this->load->view('MoreInfo', $data);
		$this->load->view('footer');
	}

	//Funcion que carga la vista de Editar Libro
	public function VisEditarLibro($id){
		$username = $this->tank_auth->get_username();
		if ($id){
			$data= $this->bookmarksModel->BuscarLibroId($id);
			if ($this->tank_auth->is_logged_in()){
				if($username=="Administrador"){
					$this->load->view('headers/librerias');
					$this->load->view('Editar_Libro',$data);
					$this->load->view('footer');
				}else{
					redirect('main/SinPermiso');
				}
			}else{
				redirect('main/SinPermiso');
			}
		}
	}

	//Funcion que se comunica con el modelo para actualizar la información de una pelicula
	public function EditarLibro(){
		$id = $this->input->post('idi',TRUE);
		$nombre = $_FILES['portada']['name'];
		$ruta1=$_FILES['portada']['tmp_name'];
		$ruta = "Imagenes/";
		opendir($ruta);
		$ruta1=$_FILES['portada']['tmp_name'];
		$destino = $ruta.$nombre;
		copy($ruta1,$destino);
		$data = array(
			'Portada' => $nombre,
            'ISBN'=> $this->input->post('isbn',TRUE),
            'Titulo'=> $this->input->post('titulo',TRUE),
            'Autor'=> $this->input->post('autor',TRUE),
            'Sinopsis'=> $this->input->post('sinopsis',TRUE),
            'Paginas'=> $this->input->post('paginas',TRUE),
            'Fecha'=> $this->input->post('fecha',TRUE),
            'Calificacion'=> $this->input->post('calificacion',TRUE),
            'Editorial'=> $this->input->post('editorial',TRUE),
            'Precio'=> $this->input->post('precio',TRUE),
            'Genero'=> $this->input->post('genero',TRUE),
            'Idioma'=> $this->input->post('idioma',TRUE),
            'Cantidad'=> $this->input->post('cantidad',TRUE)
		);
		$this->bookmarksModel->ActualizarLibro($id,$data);
		redirect('main/Ver_Libros');
	}

	//Funcion que eliminar un libro
	public function EliminarLibro($id){
		if ($id){
			$this->bookmarksModel->eliminarlibroId($id);
			redirect('main/Ver_Libros');
		}
	}

	//Funcion que compra un libro.
	public function ComprarLibro($ISBN,$username){
		$Libro = $this->bookmarksModel->ConsultaLibro($ISBN);
		if($Libro!=FALSE){
			foreach($Libro ->result() as $row){
        		$ISBN = $row->ISBN;
        		$Titulo = $row->Titulo;
        		$Precio = $row->Precio;
        		$Cantidad = $row->Cantidad;
        	}
		}
		$data = array(
			'ISBN'=> $ISBN,
			'Titulo' => $Titulo,
			'Precio' => $Precio,
			'Fecha' => date('Y/m/d h:m'),
			'Usuario' => $username
		);
		if($Cantidad>0){
			$this->bookmarksModel->GuardarCompra($data);
			$this->bookmarksModel->LibroMenos($ISBN);
		}
		redirect('main/VerCompras');
	}

	//Funcion que carga la vista de buscar un libro por titulo.
	public function Buscar_libros($vez){
		$data = array(
			'result' => '',
			'Vez'=>$vez,
			'username'=> $this->tank_auth->get_username()
		);
		$this->load->view('headers/librerias');
		$this->load->view('Buscar_Libro',$data);
		$this->load->view('footer');
	}

	//Funcion que busca un libro de acuerdo al titulo en la base de datos con ayuda del modelo
	public function BuscarLibro(){
		$query = $this->input->get('query', TRUE);
		if ($query){
			$result = $this->bookmarksModel->BuscarLibro(trim($query));
			//trim quita espacios en blanco
			if ($result != FALSE){
				$data = array('result' => $result,
							  'Vez' => '2',
							  'username'=> $this->tank_auth->get_username());
			}else{
				$data = array('result' => '',
							  'Vez' => '2',
							  'username'=> $this->tank_auth->get_username());
			}
		}else{
			$data = array('result' => '',
						  'Vez' => '2',
						  'username'=> $this->tank_auth->get_username());
		}
		$this->load->view('headers/librerias');
		$this->load->view('Buscar_Libro', $data);
		$this->load->view('footer');
	}

	//Muestra la vista con todos los usuarios que tiene la base de datos
	public function ver_usuarios(){
		$data = array(
			'enlaces' => $this->bookmarksModel->verUsuarios(),
			'dump' => 0
		);
		$this->load->view('headers/librerias');
		$this->load->view('ver_usuarios', $data);
		$this->load->view('footer');
	}
	//Actualiza la informacion de acuerdo a un id
	public function editarUsuario(){
		$id = $this->input->post('idi',TRUE);
		$data = array(
			'username' => $this->input->post('username',TRUE),
            'email'=> $this->input->post('email',TRUE)
		);
		$this->bookmarksModel->ActualizarUsuario($id,$data);
		redirect('main/ver_usuarios');
	}
	//Carga vista para buscar un usuario
	public function Buscar_Usuario(){
		$data = array('result' => '');
		if ($this->tank_auth->is_logged_in()){
			$this->load->view('headers/librerias');
			$this->load->view('Buscar_Usu',$data);
			$this->load->view('footer');
		}else{
			echo "No tienes permisos para entrar";
		}
	}
	//Busca usuario de acuerdo al id
	public function BuscarUsuario(){
		$data = array();
		$query = $this->input->get('query', TRUE);
		if ($query){
			$result = $this->bookmarksModel->buscarUsu(trim($query));
			//trim quita espacios en blanco
			if ($result != FALSE){
				$data = array('result' => $result);
			}else{
				$data = array('result' => '');
			}
		}else{
			$data = array('result' => '');
		}
		$this->load->view('headers/librerias');
		$this->load->view('Buscar_Usu', $data);
		$this->load->view('footer');
	}

	public function UsuarioVer(){
		$data = array(
			'enlaces' => $this->bookmarksModel->VerPeliculas(),
			'dump' => 0
		);
		if ($this->tank_auth->is_logged_in()){
			$this->load->view('headers/librerias');
			$this->load->view('UsuVer',$data);
			$this->load->view('footer');
		}else{
			echo "No tienes permisos para entrar";
		}
	}

	public function UsuarioBusca(){
		$data = array('result' => '');
		if ($this->tank_auth->is_logged_in()){
			$this->load->view('headers/librerias');
			$this->load->view('UsuBusca',$data);
			$this->load->view('footer');
		}else{
			echo "No tienes permisos para entrar";
		}
	}

	public function Usu_BP(){
		$data = array();
		$query = $this->input->get('query', TRUE);
		if ($query){
			$result = $this->bookmarksModel->buscarPelicula(trim($query));
			//trim quita espacios en blanco
			if ($result != FALSE){
				$data = array('result' => $result);
			}else{
				$data = array('result' => '');
			}
		}else{
			$data = array('result' => '');
		}
		$this->load->view('headers/librerias');
		$this->load->view('UsuBusca', $data);
		$this->load->view('footer');
	}

	public function VerCompras(){
		$data = array(
			'username' => $this->tank_auth->get_username(),
			'Compras' => $this->bookmarksModel->VerCompras(),
			'dump' => 0
		);
		$this->load->view('headers/librerias');
		$this->load->view('historial', $data);
		$this->load->view('footer');
		
	}
	public function VerLibros(){
		$data = array(
			'libros' =>$this->bookmarksModel->VerLibros(),
			'dump' => 0
		);
		$this->load->view('headers/librerias');
		$this->load->view('HistorialLibros', $data);
		$this->load->view('footer');
		
	}
	//==============Termina Videoteca para usuarios===========
}