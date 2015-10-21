	  <!--Navbar -->
<?php
  if($username=="Administrador"){
    $this->load->view('headers/menu_admin');  
  } else{
    $this->load->view('headers/menu_usuario');
  }
?>
	<!-- End Navbar -->
    <div class="container">
	  <div class="starter-template">
      	<br /><br />
        <h1>Bienvenido <?php echo $username; ?></h1>
        <?php if($username=="Administrador"){ ?>
          <p class="lead">Puedes administrar tus usuarios y los libros que desees</p>
        <?php }else{ ?>
          <p class="lead">Visualiza y compra tus libros favoritos</p>
        <?php } ?>
      </div>
    </div>



