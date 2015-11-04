<!--Se carga el menu de administrador debido a que solo el puede agregar Arreglos.-->
<?=
	$this->load->view('barrasDeHerramientas/barraAdministrador');
?>
<div class="container">
	<div class="row">
		<h1 class="zero museo-slab">Editar Arreglo</h1>
    </div>
  	<!--Iniciamos el formulario para agregar un nuevo arreglo, la accion de este formulario esta en guardar_arreglo del controlador de arreglo.-->
    <form id="form" name="form" action="<?=base_url()?>ArregloController/GuardarCambios" method="POST">
		<fieldset>
  			<legend>Nuevo Articulo</legend>
    		<div class="row">
				<!--Para evitar que la imagen se pierda solo modificaremos los campos texto la imagen ya no por eso en este formulario ya no va
				el campo de imagen.-->
				<!--Mostramos el nombre a modificar-->
      			<div class="one third padded">
			        <label class="col-sm-2 control-label">Nombre:</label>
					<input type="text" id="nombre" name="nombre" value="<?=$Nombre?>">
      			</div>
				<!--Mostramos el modelo a modificar-->
   				<div class="one third padded">
		        	<label class="col-sm-2 control-label">Color:</label>
					<input type="text" id="modelo" name="modelo" value="<?=$Modelo?>">
    			</div>
  			</div>
			<div class="row">
				<!--Mostramos la descripcion a modificar-->
   				<div class="three sixth padded">
		        	<label for="message">Descripcion:</label>
        			<textarea id="descripcion" name="descripcion" type="text" value="<?=$Descripcion?>"></textarea>
    			</div>
				<!--Mostramos las categorias a modificar-->
  				<div class="three sixth padded">
		    		<label for="inputEmail3" >Categoria:</label>
    				<select class="form-control" id="categoria" name="categoria" value="<?=$Categoria?>">
		                <option value="">Seleccione un Tipo</option>
                		<option value="Aniversario">Aniversario</option>
                		<option value="Cumpleaños">Cumpleaños</option>
                		<option value="Bodas">Bodas</option>
                		<option value="Graduacion">Gradiacion</option>
                		<option value="Funerarios">Funerarios</option>
                		<option value="Especiales">Especiales</option>
                		<!--Se pueden Agregar Mas categorias por el momento lo dejo asi.-->
            		</select>	
    			</div>
				<!--Mostramos el Precio a modificar-->
				<div class="three sixth padded">
		    		<label for="inputEmail3" >Precio:</label>
   					<input type="text"  id="precio" name="precio" value="<?=$Precio?>">    	
  				</div>
  				<div class="three sixth padded">
   					<input type="text" style="visibility:hidden" name="idi" id="idi" value="<?=$idi?>"> 	
  				</div>
			</div>
  			</br>
			<div class="form-group">
		    	<div align="center">
      				<button type="submit" class="info" id="guardar" name="guardar">Guardar</button> &nbsp;
    			</div>
  			</div>
		</fieldset>
	</form>
</div>