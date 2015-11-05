<?=$this->load->view('barrasDeHerramientas/barraAdministrador');?> <br>

<div class="container fadeInUp animated">
 	<div class="row">
 		<div class="col-md-8">

 	<h3 align="center">Editar Flor <u><?=$nombreProducto?></u> </h3>

<form role="form" id="form" name="form" action="<?=base_url()?>controladorFloresYAccesorios/editarFlorAdmin/<?=$idFlor?>" method="POST">
<fieldset>
  <legend>Editar Flor</legend>
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
         <input type="text" id="proveedor" name="proveedor" placeholder="Seleccione un Proveedor" value="<?=$proveedor?>">
    </div>

    </div>
 </div>

<div class="row">
    <div class="one half padded">
      <label for="inputEmail3" >Cantidad:</label>
         <input type="text" id="cantidad" name="cantidad" placeholder="0" value="<?=$cantidad?>">  
    </div>

    <div class="one half padded">
      <label for="inputEmail3" >Precio:</label>
         <input type="text" id="precioCompra" name="precioCompra" placeholder="$ 0.0" value="<?=$precioCompra?>">
    </div>

  </br>
  <div class="form-group" >
    <div align="center">
      <button type="submit" class="btn success" id="guardar" name="guardar">Guardar</button>&nbsp;&nbsp;
       <a href="<?=base_url()?>controladorFloresYAccesorios/catalogoFloresAdmin" class="error button" id="guardar" name="guardar">Cancelar</a>
    </div>
  </div>

</div>
	</fieldset>
</form>

 </div>
</div>

 </div>