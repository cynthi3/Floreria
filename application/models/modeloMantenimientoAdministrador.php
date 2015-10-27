<?php
 class modeloMantenimientoAdministrador extends CI_Model {
 
 function modeloMantenimientoAdministrador() {
 parent::__construct(); 
 }
 
function getData(){
 $usuario = $this->db->get('cliente'); 
 return $usuario->result(); //devolvemos el resultado de lanzar la query.
 }

 function insert($data) {
 $this->db->set('nombresCliente', $data['nombresCliente']);
 $this->db->set('apellidosCliente', $data['apellidosCliente']);
 $this->db->set('direccionCliente', $data['direccionCliente']);
 $this->db->set('telefonoCelular', $data['telefonoCelular']);
 $this->db->set('telefonoCasa', $data['telefonoCasa']);
 $this->db->insert('cliente');
 }
 function baja ($nombre) {
 $this->db->where('nombresCliente', $nombre);
 $this->db->delete('cliente');
 }
 function obtenerCliente($idCliente) {
$this->db->select('idCliente, nombresCliente, apellidosCliente,direccionCliente, telefonoCelular, telefonoCasa');
$this->db->from('cliente');
$this->db->where('idCliente = ' . $idCliente);
$cliente = $this->db->get();
return $cliente->result();
}
function update($data) {
 $this->db->set('nombresCliente', $data['nombre']);
 $this->db->set('apellidosCliente', $data['apellido']);
 $this->db->set('direccionCliente', $data['direccion']);
 $this->db->set('telefonoCelular', $data['telefonoCelular']);
 $this->db->set('telefonoCasa', $data['telefonoCasa']);
 $this->db->where('idCliente', $data['idCliente']);
 $this->db->update('cliente');
 }

}
