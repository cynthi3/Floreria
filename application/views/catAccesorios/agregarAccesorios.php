<?=$this->load->view('barrasDeHerramientas/barraAdministrador');?> <br>

<div class="container fadeInDown animated">
 	<div class="row">

 <div class="row">
  <div class="one centered mobile fifth "><h3>Agregar Accesorios </h3></div>
</div>

<form id="form" name="form" action="<?=base_url()?>controladorFloresYAccesorios/guardarAccesorioAdmin" method="POST">

<fieldset>
  <legend>Nuevo Articulo</legend>

    <div class="row">
      <div class="one third padded">
        <label>Articulo:</label>
            <select class="form-control" id="nombre" name="nombre" required="true">
                <option value="">Seleccione un Articulo:</option>
                <option value="Canasta">Canasta</option>
                <option value="Moño">Moño</option>
                <option value="Plumas">Plumas</option>
                 <option value="Celofan">Celofan</option>
                  <option value="Calcomanias">Calcomanias</option>
            </select>
       </div>

      <div class="one third padded">
        <label >Tamaño:</label>
        
            <select class="form-control" id="tamano" name="tamano" required="true">
                <option value="">Seleccione un Tamaño</option>
                <option value="Pequeño">Pequeño</option>
                <option value="Mediano">Mediano</option>
                <option value="Grande">Grande</option>
                <option value="XGrande">Extra Grande</option>
            </select>
      </div>
    
   <div class="one third padded">
        <label >Color:</label>
        <div >
            <select class="form-control" id="color" name="color" required="true">
                <option value="">Seleccione un color</option>
                <option value="Rosa">Rosado</option>
                <option value="Azul">Azul</option>
                <option value="Violeta">Violeta</option>
                <option value="Naranja">Anaranjado</option>
                <option value="Rojo">Rojo</option>
            </select>
        </div>
    </div>
    
  </div>


<div class="row">
   <div class="three sixth padded">
        <label for="message">Descripcion:</label>
        <textarea id="descripcion" name="descripcion" type="text" placeholder="Descripcion del producto"></textarea>
    </div>


  	<div class="three sixth padded">
    	<label for="inputEmail3" >Cantidad:</label>
    		
   			 <input type="text"  id="cantidad" name="cantidad" placeholder="0">
    		
  	</div>

  	<div class="three sixth padded">
    	<label for="inputEmail3" >Precio:</label>
    		
   			 <input type="text"  id="precio" name="precio" placeholder="$ 0.0">
    	
  	</div>

</div>

  </br>
	<div class="form-group">
    <div align="center">
      <button type="submit" class="info" id="guardar" name="guardar">Guardar</button> &nbsp;
      <a class="error button" href="<?=base_url()?>controladorFloresYAccesorios/smallCatalogoAcc" class="error" id="cancelar" name="cancelar"> Cancelar</a>
  
        </div>
  </div>


	</fieldset>
</form>


 </div>
</div>