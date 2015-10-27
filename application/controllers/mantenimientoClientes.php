<?php
 
class MantenimientoClientes extends CI_Controller {
 
 public function __construct() {
 parent::__construct();
 }
 
 function index() {
 $this->load->model('modeloMantenimientoAdministrador'); //cargamos el modelo
 
 $data['page_title'] = "Cliente";
 
 //Obtener datos de la tabla 'contacto'
 $usuario = $this->modeloMantenimientoAdministrador->getData(); //llamamos a la función getData() del modelo creado anteriormente.
 
 $data['usuario'] = $usuario;
 
 //load de vistas
 $this->load->view('headers/LibreriasGround');
 $this->load->view('footers/footer');
 $this->load->view('vistaAdministrador', $data); //llamada a la vista, que crearemos posteriormente
 	}

 function alta() {
 //recogemos los datos obtenidos por POST
 $data['nombresCliente'] = $_POST['txtNombre'];
 $data['apellidosCliente'] = $_POST['txtApellido'];	
 $data['direccionCliente'] = $_POST['txtDireccion'];
 $data['telefonoCelular'] = $_POST['txtCelular'];
 $data['telefonoCasa'] = $_POST['txtCasa'];
 //llamamos al modelo, concretamente a la función insert() para que nos haga el insert en la base de datos.
 $this->load->model('modeloMantenimientoAdministrador');
 $this->modeloMantenimientoAdministrador->insert($data);
 //volvemos a visualizar la tabla
 $this->index();
 }

 function baja() {
 //obtenemos el nombre
 $nombre = $_POST['txtNombre'];
 //cargamos el modelo y llamamos a la función baja(), pasándole el nombre del registro que queremos borrar.
 $this->load->model('modeloMantenimientoAdministrador');
 $this->modeloMantenimientoAdministrador->baja($nombre);
 //mostramos la vista de nuevo.
 $this->index();
 }
 function accion() {
 //cargamos el modelo y obtenemos la información del contacto seleccionado.
 $this->load->model('modeloMantenimientoAdministrador');
 $data['usuario'] = $this->modeloMantenimientoAdministrador->obtenerCliente($_POST['editar']);

 //cargamos la vista para editar la información, pasandole dicha información.
 $this->load->view('editar', $data);
 }
 
 function editar() {
 //recogemos los datos por POST
 $data['idCliente'] = $_POST['idCliente'];
 $data['nombre'] = $_POST['txtNombre'];
 $data['apellido'] = $_POST['txtApellido'];
 $data['direccion'] = $_POST['txtDireccion'];
 $data['telefonoCelular'] = $_POST['txtCelular'];
 $data['telefonoCasa'] = $_POST['txtCasa'];
 
 //cargamos el modelo y llamamos a la función update()
 $this->load->model('modeloMantenimientoAdministrador');
 $this->modeloMantenimientoAdministrador->update($data);
 //volvemos a cargar la primera vista
 $this->index();
 }


 }
?>