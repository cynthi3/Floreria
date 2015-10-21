<?php
	$this->load->view("headers/librerias");
	if (!$this->tank_auth->is_logged_in()) {
 		$this->load->view('headers/menu_inicia');  
  	}
?>
<br/><br/>
<h2><?php echo $message; ?></h2>