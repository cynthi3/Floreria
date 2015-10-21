	  <!--Navbar -->
<?php
  if (!$this->tank_auth->is_logged_in()) {
    $this->load->view('headers/menu_inicia');  
  }
?>
	<!-- End Navbar -->
    <div class="container">
	  <div class="starter-template">
      	<br /><br />
        <h1>Biblioteca Virtual LibrosKronoz.com</h1>
        <br/><br/>
        <p class="lead"> En esta pagina puedes ver y comprar libros a tu antojo. Si quieres disfrutar de mas privilegios puedes registrarte gratuitamente.</p>
      </div>
    </div>



