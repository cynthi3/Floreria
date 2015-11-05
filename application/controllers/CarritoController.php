<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CarritoController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('modeloCarrito');
	}

	//Carga la vista de Inicio para los usuarios no registrados
	public function index(){
		$this->load->view('headers/LibreriasGround');
		$this->load->view('Inicio');
		$this->load->view('footers/footer');
	}
	public function ApartarArrelgo(){
		$apartado ='0';
		$precio = $this->input->post('precioArreglo',TRUE);
		$cantidad = $this->input->post('cantidad',TRUE);
		$subtotal = $precio * $cantidad;
		$data = array(
			'Nombre' => $this->input->post('nombreArreglo',TRUE),
            'Precio'=> $precio,
            'Cantidad'=> $cantidad,
            'Subtotal' => $subtotal,
            'Fecha'=> $this->input->post('fecha',TRUE),
            'Usuario'=> $this->input->post('usuario',TRUE),
            'Comprado'=> $apartado
		);
		//se guarda en la base de datos.
		$this->modeloCarrito->ApartarArreglos($data);
		redirect('CarritoController/Ver_Carrito');
	}
	//Funcion que carga la vista de todos los Arreglos existentes en el sistema.
	public function Ver_Carrito($error){
		$username = $this->tank_auth->get_username();
		$data = array(
			'error' => $error,
			'carrito' => $this->modeloCarrito->VerApartados($username),
			'dump' => 0
		);
		$this->load->view('headers/LibreriasGround');
		$this->load->view('VerCarrito', $data);
		$this->load->view('footers/footer');
	}

	public function eliminarArreglo($id){
		if ($id){
			$this->modeloCarrito->EliminarArregloId($id);
			redirect('CarritoController/Ver_Carrito/fail');
		}
	}
	public function confirmarCompra($id){
		$this->modeloCarrito->confirmaCompra($id);
		redirect('CarritoController/Ver_Carrito/exito');
	}
	
}