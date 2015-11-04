<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ArregloController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('ArregloModel');
		$this->load->library('tank_auth');
	}

	//Carga la vista de Inicio para los usuarios no registrados
	public function index(){
		$this->load->view('headers/LibreriasGround');
		$this->load->view('Inicio');
		$this->load->view('footers/footer');
	}

	//Carga la vista Agregar Arreglo
	public function Agregar_Arreglo($error){
		$username = $this->tank_auth->get_username();
		$data = array('error' => $error);
		if ($this->tank_auth->is_logged_in()){
			if($username=="Administrador"){
				$this->load->view('headers/LibreriasGround');
				$this->load->view('Arreglos/ArregloAgregar',$data);
				$this->load->view('footers/footer');
			}else{
				redirect('ArregloController/SinPermiso');
			}
		}else{
			redirect('ArregloModel/SinPermiso');
		}
	}
	//Carga la vista de sin permiso para quienes intenten accesar sin autorización
	public function SinPermiso(){
		$this->load->view('headers/LibreriasGround');
		$this->load->view('Arreglos/SinAcceso');
		$this->load->view('footers/footer');
	}
	//Funcion que guarda un arreglo floral en la base de datos.
	public function Guardar_Arreglo(){
		//Las siguientes instrucciones son para guardar la imagen en la carpeta
		//Como se ocupara el nombre de la imagen posteriormente se guarda en una variable ($nombreimagen)
		$nombreimagen = $_FILES['imagen']['name'];
		$ruta1=$_FILES['imagen']['tmp_name'];
		//se define la ruta (la carpeta) en que se guardaran las imagenes.
		$ruta = "ImagenesArreglos/";
		opendir($ruta);
		//esta variable se repite por que sin esto no funciona el carga de imagen.
		$ruta1=$_FILES['imagen']['tmp_name'];
		//se define el destino 
		$destino = $ruta.$nombreimagen;
		//se copia el archivo imagen a la carpeta destino.
		copy($ruta1,$destino);
		//se crea un arreglo con los campos del formulario para mandarlo a guardar a la base de datos
		$data = array(
			'Imagen' => $this->input->post('imagen',TRUE),
            'Nombre'=> $this->input->post('nombre',TRUE),
            'Modelo'=> $this->input->post('modelo',TRUE),
            'Descripcion'=> $this->input->post('descripcion',TRUE),
            'Categoria'=> $this->input->post('categoria',TRUE),
            'Precio'=> $this->input->post('precio',TRUE),
		);
		//se guarda en la base de datos.
		$this->ArregloModel->GuardarArreglo($data);
		redirect('ArregloController/Agregar_Arreglo/exito');
	}
	//Funcion que carga la vista de todos los Arreglos existentes en el sistema.
	public function Ver_Arreglos(){
		$data = array(
			'username'=> $this->tank_auth->get_username(),
			'Arreglos' => $this->ArregloModel->VerArreglos(),
			'dump' => 0
		);
		$this->load->view('headers/LibreriasGround');
		$this->load->view('Arreglos/ArregloVer', $data);
		$this->load->view('footers/footer');
	}
	//Carga la vista de mas informacion por arreglo
	public function Detalles($id){
		$username = $this->tank_auth->get_username();
		$data = array(
				'username'=> $username,
				'enlace' => $this->ArregloModel->ArregloEspecifico($id),
				'dump' => 0
			);
		$this->load->view('headers/LibreriasGround');
		$this->load->view('Arreglos/ArregloInformacion', $data);
		$this->load->view('footers/footer');
	}
	//Funcion que carga la vista de Editar arreglo
	public function EditarArreglo($id){
		$username = $this->tank_auth->get_username();
		if ($id){
			$data= $this->ArregloModel->BuscarArregloID($id);
			if ($this->tank_auth->is_logged_in()){
				if($username=="Administrador"){
					$this->load->view('headers/LibreriasGround');
					$this->load->view('Arreglos/ArregloCambio',$data);
					$this->load->view('footers/footer');
				}else{
					redirect('ArregloController/SinPermiso');
				}
			}else{
				redirect('ArregloController/SinPermiso');
			}
		}
	}
	//Funcion que guarda los cambios en la base de datos de arreglos, de acuerdo al id
	public function GuardarCambios(){
		$id = $this->input->post('idi',TRUE);
		$data = array(
            'Nombre'=> $this->input->post('nombre',TRUE),
            'Modelo'=> $this->input->post('modelo',TRUE),
            'Descripcion'=> $this->input->post('descripcion',TRUE),
            'Categoria'=> $this->input->post('categoria',TRUE),
            'Precio'=> $this->input->post('precio',TRUE),
		);
		$this->ArregloModel->ActualizarArreglo($id,$data);
		redirect('ArregloController/Ver_Arreglos');
	}
	//Funcion que eliminar un arreglo de acuerdo al id
	public function EliminarArreglo($id){
		if ($id){
			$this->ArregloModel->EliminarArregloId($id);
			redirect('ArregloController/Ver_Arreglos');
		}
	}
}