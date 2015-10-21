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
            <h3>Editar Libro</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" id="form" name"form" action="<?=base_url()?>main/EditarLibro" method="POST">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Portada</label>
					<div class="col-sm-10">
						<input type="file" name="portada" class="form-control"/>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">ISBN</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="isbn" name="isbn" value="<?=$ISBN?>">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Titulo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="titulo" name="titulo" value="<?=$Titulo?>">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Autor</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="autor" name="autor" value="<?=$Autor?>">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Sinopsis</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="sinopsis" name="sinopsis" value="<?=$Sinopsis?>">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">N° de Paginas</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="paginas" name="paginas" value="<?=$Paginas?>">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Fecha de Libro</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="fecha" name="fecha" value="<?=$Fecha?>">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Calificación</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="calificacion" name="calificacion" value="<?=$Calificacion?>">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Editorial</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="editorial" name="editorial" value="<?=$Editorial?>">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Precio</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="precio" name="precio" value="<?=$Precio?>">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Genero</label>
					<div class="col-sm-10">
						<select class="form-control" id="genero" name="genero" value="<?=$Genero?>">
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
				  		<input type="text" class="form-control" id="idioma" name="idioma" value="<?=$Idioma?>">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Cantidad</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cantidad" name="cantidad" value="<?=$Cantidad?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-10">
				  		<input type="text" style="visibility:hidden" class="form-control" name="idi" id="idi" value="<?=$idi?>">
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