<?php
  		if($username=="Administrador"){
        $this->load->view('barrasDeHerramientas/barraAdministrador');  
  		}else{
        $this->load->view('barrasDeHerramientas/BarraUsuarioRegistrado');
  		}
?>
<div class="container">
	<div class="panel panel-primary">
        <div class="panel-heading">
            <h1>Informacion del Libro</h1>
        </div>
        <div class="panel-body">
            <div class="row">
<?php
        			if($enlace != FALSE){
        				foreach($enlace ->result() as $row){
?>
        					  <div class="col-xs-6 col-md-4">
          						<img src="../ImagenesArreglos/<?=$row->Imagen?>" alt="No se encuentra la imagen en el directorio" width="140" height="140">
                    </div>
                    <div class="col-xs-6 col-md-8">
                      <h1>Nombre: <?=$row->Nombre?></h1>
                      <h2>Modelo: <?=$row->Modelo?></h2>
                      <h6>Descripción:</h6>
                      <p><?=$row->Descripcion?></p>
                      <h3>Precio:
                        <span class="label label-success">
                          <span class="glyphicon glyphicon-usd"></span>&nbsp;<?=$row->Precio?>
                        </span>
                      </h3>
<?php
                        if($username=="Administrador"){
?>
                            <a class="btn btn-success" href="<?=base_url()?>ArregloController/EditarArreglo/<?=$row->Id?>" role="button">Editar</a>
                            <a class="btn btn-danger" href="<?=base_url()?>ArregloController/EliminarArreglo/<?=$row->Id?>" role="button">Eliminar</a></p>
<?php
                        }else{
?>
                            <a class="btn btn-Success" href="#" role="button">Comprar</a></p>
<?php
                        }
                  }
              }
?>
        					</div>
    		    </div>
        </div>
    </div>
</div>