<!--Carga el nav de la pagina de acuerdo al usuario (si no esta logueado, si esta logueado como administrador o usuario normal.-->
<?php
  	if (!$this->tank_auth->is_logged_in()) {
    	$this->load->view('barrasDeHerramientas/barraInvitado');  
  	}else{
  		if($username=="Administrador"){
    		$this->load->view('barrasDeHerramientas/barraAdministrador');  
  		}else{
    		$this->load->view('barrasDeHerramientas/BarraUsuarioRegistrado');
  		}
  	}
?>

<!--Inicia codigo de la pagina que muestra el listado de libros de aucerdo a la base de datos.-->
<!--Contenedor que tendra toda la pagina.-->
<div class="container">
  <!--Panel azul donde se mostrarán los libros-->
	<div class="panel panel-primary">
    <!--Titulo del panel-->
    <div class="panel-heading">
      <h1>Todos los Arreglos</h1>
    </div>
    <!--Contenido del panel (libros)-->
    <div class="panel-body">
      <!--Se crean secciones para cada libro-->
      <div class="row">
        <?php
          //Si existen libros entonces muestra la imagen del arreglo, el nombre y el precio
        	if($Arreglos != FALSE){
        		foreach($Arreglos ->result() as $row){
        ?>
        			<div class="col-lg-4">
                <!--Muestra la información de cada libro-->
          			<img src="../ImagenesArreglos/<?=$row->Imagen?>" alt="No se encuentra la imagen en el directorio" width="140" height="140">
          			<h3><?=$row->Nombre?></h3>
          			<h5>Precio: $<?=$row->Precio?></h5>
                <?php
                  //verificamos si esta o no logueado el usuario. //Si esta logueado muestra los el boton de mas detalles desactivado (color rojo)
  							  if (!$this->tank_auth->is_logged_in()) {
                ?>
  								  <p><a class="btn btn-danger" href="<?=base_url()?>ArregloController/SinPermiso" role="button">Mas Detalles &raquo;</a></p>
                    <?php
                      //Si esta logueado muestra los el boton de mas detalles activado (color verde)
  							  }else{
                    ?>
  								  <p><a class="btn btn-success" href="<?=base_url()?>ArregloController/Detalles/<?=$row->Id?>" role="button">Detalles &raquo;</a></p>
                    <?php
                  }
                    ?>
        			</div>
              <?php
		        }
        	}else{
              ?>
            <!--Si no existen libros mostramos un panel color rojo con el detalle de que no existen libros-->
        		<div class="col-md-4">
              <div class="panel panel-danger">
                <div class="panel-heading">
                  <h3 class="panel-title">Error</h3>
                </div>
                <div class="panel-body">
                  <p><h6>No existen Arreglos en la base de datos.</h6></P>
                </div>
            </div>
              </div>
<?php
        	}
?>
      </div>
    </div>
  </div>
</div>