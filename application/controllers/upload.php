<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Upload extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('upload_model');
    }
 
    function index() {
        //CARGAMOS LA VISTA DEL FORMULARIO
        $error = array('error' => '');
        if ($this->tank_auth->is_logged_in()){
            $this->load->view('headers/librerias');
            $this->load->view('agregar',$error);
            $this->load->view('footer');
        }else{
            echo "No tienes permisos para entrar";
        }
    }
 
    //FUNCIÓN PARA SUBIR LA IMAGEN Y VALIDAR EL TÍTULO
    function do_upload() {
        $data = array(
            'titulo' => $this->input->post('titulo',TRUE),
            'ruta'=> $this->input->post('ruta',TRUE),
            'username'=> $this->input->post('username',TRUE)
        );

        $this->upload_model->subir($data);
        redirect('main/agregar');
    }
    public function eliminar(){
        $this->load->model('upload_model');
        $id = $this->uri->segment(3);
        if ($id){
            $this->upload_model->eliminarId($id);
            redirect('main/ver');
        }
    }
    function subirimagen(){
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '20000';
            $config['max_width'] = '202400';
            $config['max_height'] = '200800';
            $this->load->library('upload', $config);
            //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
            if (!$this->upload->do_upload()) {
                $error = array('error' => $this->upload->display_errors(), 'username' => $this->tank_auth->get_username());
                if ($this->tank_auth->is_logged_in()){
                    $this->load->view('headers/librerias');
                    $this->load->view('agregar2',$error);
                    $this->load->view('footer');
                }else{  
                    echo "No tienes permisos para entrar";
                }
            }else{
                //EN OTRO CASO SUBIMOS LA IMAGEN, CREAMOS LA MINIATURA Y HACEMOS 
                //ENVÍAMOS LOS DATOS AL MODELO PARA HACER LA INSERCIÓN
                $file_info = $this->upload->data();
                //USAMOS LA FUNCIÓN create_thumbnail Y LE PASAMOS EL NOMBRE DE LA IMAGEN,
                //ASÍ YA TENEMOS LA IMAGEN REDIMENSIONADA
                //$this->_create_thumbnail($file_info['file_name']);
                $data = array('upload_data' => $this->upload->data());
                $titulo = $this->input->post('titulo');
                $imagen = $file_info['file_name'];
                $username = $this->input->post('username');
                $subir2 = $this->upload_model->subir2($titulo,$imagen,$username);
                $error = array('error' => 'Imagen subida Exitosamente','username' => $this->tank_auth->get_username());
                if ($this->tank_auth->is_logged_in()){
                    $this->load->view('headers/librerias');
                    $this->load->view('agregar2',$error);
                    $this->load->view('footer');
                }else{  
                    echo "No tienes permisos para entrar";
                }
                //$data['titulo'] = $titulo;
                //$data['imagen'] = $imagen;
                //$this->load->view('imagen_subida_view', $data);
            }
    }
}