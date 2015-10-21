<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class Upload_model extends CI_Model {
 
    public function construct() {
        parent::__construct();
    }
    
    //FUNCIÓN PARA INSERTAR LOS DATOS DE LA IMAGEN SUBIDA
    function subir($data){
        $this->db->insert('imagenes', $data);
    }
    function subir2($titulo,$imagen,$username){
        $data = array(
            'titulo' => $titulo,
            'ruta' => "uploads/thumbs/".$imagen,
            'username' => $username
        );
        return $this->db->insert('imagenes', $data);
    }
    function obtenerImagenes(){
       $query = $this->db->get('imagenes');
        if ($query->num_rows() > 0){
            return $query;
        }else{
            return FALSE;
        }
    }
    function eliminarId($id){
        $this->db->where('id', $id); 
        $this->db->delete('imagenes');
    }

}