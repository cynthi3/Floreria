<?=$this->load->view('barrasDeHerramientas/barraAdministrador');?> <br>

<div class="container">
 	<div class="row">
 		<div class="col-md-8">

 	<h3 align="center">Editar Flor <?=$nombreProducto?> </h3>

<form role="form" id="form" name="form" action="<?=base_url()?>controladorFloresYAccesorios/editarFlorAdmin" method="POST">
<fieldset>
  <legend>Editar Flor</legend>
    <div class="row">
      <div class="row">
      <div class="one half padded">
        <label for="name">Tipo:</label>
           <span class="select-wrap">
            <select class="unselected" id="nombreProducto" name="nombreProducto">
                <option value="">Seleccione Tipo de Flor</option>
                <option value="R_A">Rosal (Azul)</option>
                <option value="R_B">Rosal (Blanco)</option>
                <option value="R_RE">Rosal (Rojo)</option>
                <option value="R_AM">Rosal (Amarillo)</option>
                <option value="R_RO">Rosal (Rosado)</option>
                <option value="C_A">Clavel (Amarillo)</option>
                <option value="C_R">Clavel (Rojo)</option>
                <option value="C_M">Clavel (Morado)</option>
                <option value="T_A">Tulipan (Amarillo)</option>
                 <option value="T_R">Tulipan (Rojo)</option>
            </select></span>
      </div>
    
      <div class="one half padded">
        <label for="name">Proveedor:</label>
        <span class="select-wrap">
            <select class="unselected" id="color" name="color">
                <option value="">Seleccione un Proveedor</option>
                <!--Proveedores-->
            </select></span>
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