<?=$this->load->view('barras/barraAdministrador');?> <br>

<div class="container">
 	<div class="row">

 <div class="row">
  <div class="one centered mobile fifth"><h3>Agregar Accesorios </h3></div>
</div>

<form id="form" name="form" action="<?=base_url()?>controladorFloresYAccesorios/guardarAccesorioAdmin" method="POST">

<fieldset>
  <legend>Nuevo Articulo</legend>

    <div class="row">
      <div class="one third padded">
        <label>Articulo:</label>
            <select class="form-control" id="nombre" name="nombre">
                <option value="">Seleccione un Articulo:</option>
                <option value="canasta">Canasta</option>
                <option value="mono">Moño</option>
                <option value="plumas">Plumas</option>
                 <option value="celofan">Celofan</option>
                  <option value="calcomanias">Calcomanias</option>
            </select>
       </div>

      <div class="one third padded">
        <label >Tamaño:</label>
        
            <select class="form-control" id="tamano" name="tamano">
                <option value="">Seleccione un Tamaño</option>
                <option value="pequeno">Pequeño</option>
                <option value="mediano">Mediano</option>
                <option value="grande">Grande</option>
                <option value="xgrande">Extra Grande</option>
            </select>
      </div>
    
   <div class="one third padded">
        <label >Color:</label>
        <div >
            <select class="form-control" id="color" name="color">
                <option value="">Seleccione un color</option>
                <option value="rosa">Rosado</option>
                <option value="azul">Azul</option>
                <option value="violeta">Violeta</option>
                <option value="naranja">Anaranjado</option>
                <option value="rojo">Rojo</option>
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
      <a class="error button" href="<?=base_url()?>" class="error" id="cancelar" name="cancelar"> Cancelar</a>
  
        </div>
  </div>


	</fieldset>
</form>


 </div>
</div>