<?php
  //si no esta logueado muestra un mensaje de que debe estar registrado.
  if (!$this->tank_auth->is_logged_in()) {
    $this->load->view('headers/menu_inicia');
?>
    <div class="container">
      <div class="alert alert-danger" role="alert">
        <strong>Error!!!</strong> Debes estar registrado para poder tener acceso a esta sección.
      </div>
    </div>
<?php
  //Si esta logueado y no es administrador muestra un mensaje que dice que debe ser administrador.
  }else{
      if($username!="Administrador"){
?>
        <div class="container">
          <div class="alert alert-danger" role="alert">
            <strong>Error!!!</strong> Debes ser Administrador para tener acceso a esta sección.
          </div>
        </div>
<?php
        $this->load->view('headers/menu_usuario');
      }
    }
?>  