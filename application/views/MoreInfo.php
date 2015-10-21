<?php
  		if($username=="Administrador"){
    		$this->load->view('headers/menu_admin');  
  		}else{
    		$this->load->view('headers/menu_usuario');
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
        			if($enlaces != FALSE){
        				foreach($enlaces ->result() as $row){
?>
        					  <div class="col-xs-6 col-md-4">
          						<img src="../Imagenes/<?=$row->Portada?>" alt="No se encuentra la imagen en el directorio" width="140" height="140">
                    </div>
                    <div class="col-xs-6 col-md-8">
                      <h1>Titulo: <?=$row->Titulo?></h1>
                      <h2>Autor: <?=$row->Autor?></h2>
                      <h4>Editorial: <?=$row->Editorial?></h4>
                      <p>ISBN: <?=$row->ISBN?></p>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Numero de paginas:</th>
                            <th>Fecha:</th>
                            <th>Calificación</th>
                            <th>Genero</th>
                            <th>Idioma:</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?=$row->Paginas?></td>
                            <td><?=$row->Fecha?></td>
                            <td><?=$row->Calificacion?></td>
                            <td><?=$row->Genero?> </td>
                            <td><?=$row->Idioma?></td>
                          </tr>
                        </tbody>
                      </table>
                      <h6>Sinopsis:</h6>
                      <p><?=$row->Sinopsis?></p>
                      <h3>Precio:
                        <span class="label label-success">
                          <span class="glyphicon glyphicon-usd"></span>&nbsp;<?=$row->Precio?>
                        </span>
                      </h3>
<?php
                        if($username=="Administrador"){
?>
                            <a class="btn btn-success" href="<?=base_url()?>main/VisEditarLibro/<?=$row->Id?>" role="button">Editar</a>
                            <a class="btn btn-danger" href="<?=base_url()?>main/EliminarLibro/<?=$row->Id?>" role="button">Eliminar</a></p>
<?php
                        }else{
                          if($Comprado== FALSE and $row->Cantidad > 0){
?>
                              <p>
                                <a href="<?=base_url()?>main/ComprarLibro/<?=$row->ISBN?>/<?=$username?>" class="btn btn-success" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-usd"></span>&nbsp;Comprar
                              </a></p>                          
<?php
                          }else{
                              if($Comprado== TRUE and $row->Cantidad > 0){
?>
                                <div class="alert alert-success" role="alert">
                                  <strong>Libro Comprado!</strong> Tu ya has comprado este libro
                                </div>
<?php
                              }else{
?>
                                <div class="alert alert-danger" role="alert">
                                  <strong>Libro Agotado!</strong> Ya no tenemos mas este libro
                                </div>
<?php

                              }
                          }
                        }
                  }
              }
?>
        					</div>
    		    </div>
        </div>
    </div>
</div>