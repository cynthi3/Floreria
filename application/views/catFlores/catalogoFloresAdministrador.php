<?=$this->load->view('barrasDeHerramientas/barraAdministrador');?> <br>

<div class="container">
 	<div class="row">
 		

 <div class="row">
  <div class="one centered mobile fifth"><h3>Agregar Flores a Catalogo </h3></div>
</div>

<form class="form-horizontal" role="form" id="form" name="form" action="<?=base_url()?>controladorFloresYaccesorios/guardarFloresAdmin" method="POST">

<fieldset>
  <legend>  Nuevo elemento</legend>

    <div class="row">
      <div class="row">
      <div class="one half padded">
        <label for="name">Tipo:</label>
           <span class="select-wrap">
            <select class="unselected" id="nombreProducto" name="nombreProducto" required="true">
                <option value="">Seleccione Tipo de Flor</option>
                <option value="Rosal (Azul)">Rosal (Azul)</option>
                <option value="Rosal (Blanco)">Rosal (Blanco)</option>
                <option value="Rosal (Rojo)">Rosal (Rojo)</option>
                <option value="Rosal (Amarillo)">Rosal (Amarillo)</option>
                <option value="Rosal (Rosado)">Rosal (Rosado)</option>
                <option value="Clavel (Amarillo)">Clavel (Amarillo)</option>
                <option value="Clavel (Rojo)">Clavel (Rojo)</option>
                <option value="Clavel (Morado)">Clavel (Morado)</option>
                <option value="Tulipan (Amarillo)">Tulipan (Amarillo)</option>
                 <option value="Tulipan (Rojo)">Tulipan (Rojo)</option>
            </select></span>
      </div>
    
    <div class="one half padded">
      <label for="inputEmail3" >Proveedor:</label>
         <input type="text" id="proveedor" name="proveedor" placeholder="Seleccione un Proveedor">
    </div>

    </div>
 </div>

<div class="row">
  	<div class="one half padded">
    	<label for="inputEmail3" >Cantidad:</label>
   			 <input type="text" id="cantidad" name="cantidad" placeholder="0"> 	
  	</div>

  	<div class="one half padded">
    	<label for="inputEmail3" >Precio:</label>
   			 <input type="text" id="precioCompra" name="precioCompra" placeholder="$ 0.0">
  	</div>

  </br>
	<div class="form-group" >
    <div align="center">
      <button type="submit" class="btn success" id="guardar" name="guardar">Guardar</button>&nbsp;&nbsp;
       <a href="<?=base_url()?>" class="error button" id="guardar" name="guardar">Cancelar</a>
    </div>
  </div>

</div>
	</fieldset>
</form>

 
</div>

 </div>