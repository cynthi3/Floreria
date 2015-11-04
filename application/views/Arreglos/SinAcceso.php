<?php
  //si no esta logueado muestra un mensaje de que debe estar registrado.
  if (!$this->tank_auth->is_logged_in()) {
      $this->load->view('barrasDeHerramientas/barraInvitado');  
?>
      <p class="warning message">Error!!. Debes estar registrado para poder tener acceso a esta sección.</p>
<?php
  //Si esta logueado y no es administrador muestra un mensaje que dice que debe ser administrador.
  }else{
        $this->load->view('barrasDeHerramientas/BarraUsuarioRegistrado');
?>
      <p class="warning message">Error!!. Debes ser Administrador para tener acceso a esta sección.</p>
<?php } ?>