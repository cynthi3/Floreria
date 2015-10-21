<!--Carga el nav de la pagina de acuerdo al usuario (si no esta logueado, si esta logueado como administrador o usuario normal.-->
<?php
  	if (!$this->tank_auth->is_logged_in()) {
    	$this->load->view('headers/menu_inicia');  
  	}else{
  		if($username=="Administrador"){
    		$this->load->view('headers/menu_admin');  
  		}else{
    		$this->load->view('headers/menu_usuario');
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
      <h1>Todos los Libros</h1>
    </div>
    <!--Contenido del panel (libros)-->
    <div class="panel-body">
      <!--Se crean secciones para cada libro-->
      <div class="row">
        <?php
          //Si existen libros entonces muestra la portada, el titulo, el autor, el precio y un boton para mas detalles.
        	if($libros != FALSE){
        		foreach($libros ->result() as $row){
        ?>
        			<div class="col-lg-4">
                <!--Muestra la información de cada libro-->
          			<img src="../Imagenes/<?=$row->Portada?>" alt="No se encuentra la imagen en el directorio" width="140" height="140">
          			<h3><?=$row->Titulo?></h2>
          			<h5><?=$row->Autor?></h6>
          			<h6>$ <?=$row->Precio?></h6>
                <?php
                  //verificamos si esta o no logueado el usuario. //Si esta logueado muestra los el boton de mas detalles desactivado (color rojo)
  							  if (!$this->tank_auth->is_logged_in()) {
                ?>
  								  <p><a class="btn btn-danger" href="<?=base_url()?>main/SinPermiso" role="button">Mas Detalles &raquo;</a></p>
                    <?php
                      //Si esta logueado muestra los el boton de mas detalles activado (color verde)
  							  }else{
                    ?>
  								  <p><a class="btn btn-success" href="<?=base_url()?>main/MasInfo/<?=$row->Id?>" role="button">Mas Detalles &raquo;</a></p>
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
                  <p><h6>No existen libros.</h6></P>
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