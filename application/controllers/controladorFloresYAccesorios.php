<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ControladorFloresYAccesorios extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this->load->model('modeloFloresYAccesorios');
		$this->load->helper('url');
		$this->load->library('tank_auth');

	}


	public function index()
	{
		$this->load->view('headers/LibreriasGround');
		$this->load->view('principal');			/* cambiar por pantalla de bienvenida */
		$this->load->view('footers/footer');
	}

/*+++++++++++++++++++++++++++ Funciones de Administrador+++++++++++++++++++++++++ */

//Funciones Flores Admin
	public function agregaFloresAdmin(){		//LISTO
		
			$this->load->view('headers/LibreriasGround');
			$this->load->view('catFlores/agregarFlores');
			$this->load->view('footers/footer');

	}

	public function guardarFloresAdmin(){		//LISTO
		$data = array(
			'nombreProducto' => $this->input->post('nombreProducto',TRUE),
			'precioCompra' => $this->input->post('precioCompra',TRUE),
			'cantidad' => $this->input->post('cantidad',TRUE),
			'proveedor' => $this->input->post('proveedor',TRUE),
			'fechaCompra' =>  date('Y/m/d h:m')	
			);
		$this->modeloFloresYAccesorios->guardar($data);
		redirect("controladorFloresYAccesorios/agregaFloresAdmin");
	}

	public function catalogoFloresAdmin(){

		$data = array(
			'enlaces' => $this->modeloFloresYAccesorios->verTodoFlores(),
			"usuario"=> "Deybi"
			);

		$this->load->view('headers/LibreriasGround',$data);
		$this->load->view('catFlores/verCatalogoFloresCompleto',$data);
		$this->load->view('footers/footer',$data);
	}

	public function eliminarFloresAdmin(){
		echo $idFlor = $this->uri->segment(3);
		$this->modeloFloresYAccesorios->eliminar($idFlor);
		redirect('controladorFloresYAccesorios/catalogoFloresAdmin');
	}

	public  function editarAdmin(){			//editar flores del catalogo
		$idFlor = $this->uri->segment(3);
		$obtenerDatos = $this->modeloFloresYAccesorios->obtenerDatos($idFlor);

		if ($obtenerDatos != FALSE){
			foreach ($obtenerDatos->result() as $row) {
				$id = $row->idFlor;
				$nombreProducto = $row->nombreProducto;
				$precioCompra=$row->precioCompra;
				$cantidad=$row->cantidad;
				$proveedor=$row->proveedor;
				$fechaCompra=$row->fechaCompra;
			}
			$data= array(
				'idFlor' => $idFlor,
				'nombreProducto' => $nombreProducto,
				'precioCompra'  => $precioCompra,
				'cantidad'  => $cantidad,
				'proveedor'  => $proveedor,
				'fechaCompra'  => $fechaCompra
				);
		}else{
			$data = '';
			return FALSE;
		}
		$this->load->view('headers/LibreriasGround');
		$this->load->view('catFlores/editarFlores', $data, $idFlor);
		$this->load->view('footers/footer');

	}

	function editarFlorAdmin(){
		$idFlor=$this->uri->segment(3);
		$data = array(
			'nombreProducto' => $this->input->post('nombreProducto',TRUE),
			'precioCompra' => $this->input->post('precioCompra',TRUE),
			'cantidad' => $this->input->post('cantidad',TRUE),
			'proveedor' => $this->input->post('proveedor',TRUE),
			'fechaCompra' => $this->input->post('fechaCompra',TRUE)
			 );

		$this->modeloFloresYAccesorios->editarFlor($idFlor,$data);
		redirect('controladorFloresYAccesorios/catalogoFloresAdmin');
	}

	/*public function buscar(){
		$query=$this->input->get('query',TRUE);

		if($query){
			$result = $this->bookmarksModel->buscar(trim($query));
			if ($result != FALSE){
				$data = array('result' => $result);
			}else{
				$data = array('result'=>'');
			}
		}else{
			$data = array('result'=>'');
		}

		$this->load->view('headers/librerias');
		$this->load->view('headers/buscar',$data);

	}

*/


//Funciones Accesorios Admin

public function agregaAccesoriosAdmin(){		//LISTO
		
			$this->load->view('headers/LibreriasGround');
			$this->load->view('catAccesorios/agregarAccesorios');
			$this->load->view('footers/footer');

	}

	public function catalogoAccesoriosAdmin(){

		$data = array(
			'enlaces' => $this->modeloFloresYAccesorios->verTodoAccesorios(),
			"usuario"=> "Deybi"
			);

		$this->load->view('headers/LibreriasGround',$data);
		$this->load->view('catAccesorios/verCatalogoAccesoriosAdministrador',$data);
		$this->load->view('footers/footer',$data);
	}

	public function guardarAccesorioAdmin(){			//LISTO
		$data = array(
			"nombre" => $this->input->post('nombre',TRUE),
			'cantidad' => $this->input->post('cantidad',TRUE),
			'precio' => $this->input->post('precio',TRUE),
			"tipo" => $this->input->post('tipo',TRUE),
			"tamano" => $this->input->post('tamano',TRUE),
			'color' => $this->input->post('color',TRUE),
			'descripcion' => $this->input->post('descripcion',TRUE)			
			);
		$this->modeloFloresYAccesorios->guardarAccesorio($data);
		redirect("controladorFloresYAccesorios/agregaAccesoriosAdmin");
	}


		public  function editarAccesoriosAdmin(){
		$idAcc = $this->uri->segment(3);
		$obtenerDatos = $this->modeloFloresYAccesorios->obtenerAccesorios($idAcc);

		if ($obtenerDatos != FALSE){
			foreach ($obtenerDatos->result() as $row) {
				$id = $row->idAcc;
				$nombre = $row->nombre;
				$cantidad=$row->cantidad;
				$precio=$row->precio;
				$tipo = $row->tipo;
				$tamano = $row->tamano;
				$color=$row->color;
				$descripcion=$row->descripcion;
			}
			$data= array(
				'idAcc' => $idAcc,
				'nombre' => $nombre,
				'cantidad'  => $cantidad,
				'precio'  => $precio,
				'tipo'  => $tipo,
				'tamano'  => $tamano,
				'color'  => $color,
				'descripcion'  => $descripcion				
				);
		}else{
			$data = '';
			return FALSE;
		}
		$this->load->view('headers/LibreriasGround');
		$this->load->view('catAccesorios/editarCatalogoAccesorios', $data,$idAcc);
		$this->load->view('footers/footer');

	}

	function editarUnAccesorioAdmin(){
		$idAcc=$this->uri->segment(3);
		$data = array(
			'nombre' => $this->input->post('nombre',TRUE),
			'cantidad' => $this->input->post('cantidad',TRUE),
			'precio' => $this->input->post('precio',TRUE),
			'tipo' => $this->input->post('tipo',TRUE),
			'tamano' => $this->input->post('tamano',TRUE),
			'color' => $this->input->post('color',TRUE),
			'descripcion' => $this->input->post('descripcion',TRUE)						
			 );

		$this->modeloFloresYAccesorios->editarAccesorio($idAcc,$data);
		redirect('controladorFloresYAccesorios/catalogoAccesoriosAdmin');
	}

		public function eliminaAccesorioAdmin(){
		echo $id = $this->uri->segment(3);
		$this->modeloFloresYAccesorios->eliminarAccesorio($id);
		redirect('controladorFloresYAccesorios/catalogoAccesoriosAdmin');
	}

////////////////////////////////////////////////////


function smallCatalogoAcc(){

	$this->load->view('headers/LibreriasGround');
	$this->load->view('catAccesorios/catalogoAccesoriosAdministrador');
	$this->load->view('footers/footer');

}




function smallCatalogoFlores(){

	$this->load->view('headers/LibreriasGround');
	$this->load->view('catFlores/catalogoReducidoFlores');
	$this->load->view('footers/footer');

}



}