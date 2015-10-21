<!--Se carga el menu de administrador debido a que solo el puede agregar Libros.-->
<?=
	$this->load->view('headers/menu_admin');
?>
<!--Se carga la vista para agregar diferentes libros al mismo tiempo.-->
<br/>
<br/>
<br/>
<br/>
<div class="container">
	<div class="panel panel-primary">
        <div class="panel-heading">
            <h3>Agregar Libro</h3>
			<?php
				if($error=="exito"){
					?>
						<div class="alert alert-success" role="alert">
        					<strong>Libro Agregado!</strong> Tu has agregado correctamente un libro
      					</div>
					<?php
				}else{
					if($error=="fail"){
						?>
							<div class="alert alert-danger" role="alert">
        						<strong>Error!</strong> No se ha podido guardar intente de nuevo.
      						</div>
						<?php
					}else{}
				}
			?>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" id="form" name"form" action="<?=base_url()?>main/GuardarLibro" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Portada</label>
					<div class="col-sm-10">
						<input type="file" name="portada" class="form-control"/>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">ISBN</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="isbn" name="isbn" placeholder="Ingresa un ISBN">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Titulo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingresa un titulo">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Autor</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="autor" name="autor" placeholder="Ingresa un autor">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Sinopsis</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="sinopsis" name="sinopsis" placeholder="Ingresa una sinopsis">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">N° de Paginas</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="paginas" name="paginas" placeholder="N° de paginas">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Fecha de Libro</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="fecha" name="fecha" placeholder="Ingresa una fecha">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Calificación</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="calificacion" name="calificacion" placeholder="Ingresa una Calificación">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Editorial</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="editorial" name="editorial" placeholder="Ingresa una editorial">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Precio</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="precio" name="precio" placeholder="Ingresa una precio">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Genero</label>
					<div class="col-sm-10">
						<select class="form-control" id="genero" name="genero">
  							<option value="Accion">Accion</option>
  							<option value="Comedia">Comedia</option>
 							<option value="Romance">Romance</option>
 							<option value="Infantil">Infantil</option>
 						</select>
					</div>
				</div>
				<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Idioma</label>
					<div class="col-sm-10">
				  		<input type="text" class="form-control" id="idioma" name="idioma" placeholder="Ingresa una idioma">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Cantidad</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cantidad" name="cantidad">
					</div>
				</div>
				<div class="form-group">
    				<div class="col-sm-offset-2 col-sm-10">
      					<button type="submit" class="btn btn-primary">Guardar</button>      				
    				</div>
  				</div>
			</form>
        </div>
    </div>
</div>	