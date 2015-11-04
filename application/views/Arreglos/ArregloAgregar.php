<!--Se carga el menu de administrador debido a que solo el puede agregar Arreglos.-->
<?=
	$this->load->view('barrasDeHerramientas/barraAdministrador');
?>
<!--Se carga la vista para agregar diferentes libros al mismo tiempo.-->
<div class="container">
	<div class="row">
		<h1 class="zero museo-slab">Agregar Arreglo</h1>
            <!--Mostramos si existe algun error, Si es la primera vez en recibimos un 1 por lo que no entran en los if y no muestra nada
        	Sin embargo, cuando ya guardamos por primera vez dependera de que sucede, si se guarda correctamente recibimos exito y mostramos
        	el mensaje de exito pero si existe un error recibimos fail y mostramos el mensaje de error-->
		<?php
			if($error=="exito"){
		?>
				<p class="success dismissible message">Arreglo Agregado!. Has agregado correctamente un Arreglo</p>
		<?php
			}else{
				if($error=="fail"){
		?>
					<p class="error message">Error!. No se ha podido guardar intente de nuevo.</p>
		<?php
				}else{}
			}
		?>
    </div>
    <form id="form" name="form" action="<?=base_url()?>ArregloController/Guardar_Arreglo" method="POST">
		<fieldset>
  			<legend>Nuevo Articulo</legend>
    		<div class="row">
	    		<!--Agregamos la imagen-->
      			<div class="one third padded">
		        	<label class="col-sm-2 control-label">Imagen:</label>
					<input type="file" name="imagen" class="form-control"/>
       			</div>
				<!--Agregamos un nombre-->
      			<div class="one third padded">
			        <label class="col-sm-2 control-label">Nombre:</label>
	        		<input type="text" id="nombre" name="nombre" placeholder="Ingresa un nombre">
      			</div>
				<!--Agregamos un Modelo-->
   				<div class="one third padded">
		        	<label class="col-sm-2 control-label">Modelo:</label>
					<input type="text" id="modelo" name="modelo" placeholder="Ingresa un modelo">
    			</div>
  			</div>
			<div class="row">
				<!--Agregamos una descripción-->
   				<div class="three sixth padded">
		        	<label for="message">Descripcion:</label>
        			<textarea id="descripcion" name="descripcion" type="text" placeholder="Descripcion del producto"></textarea>
    			</div>
				<!--Agregamos una categoria-->
  				<div class="three sixth padded">
		    		<label for="inputEmail3" >Categoria:</label>
    				<select class="form-control" id="categoria" name="categoria">
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
				<!--Agregamos un Precio-->
				<div class="three sixth padded">
		    		<label for="inputEmail3" >Precio:</label>
   					<input type="text"  id="precio" name="precio" placeholder="$ 0.0">    	
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