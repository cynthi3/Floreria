<?=$this->load->view('barraAdministrador');?> <br><br>

<div class="container">
 	<div class="row">
 		<div class="col-md-8">

 <!--<div class="starter-template">-->
</br>

 	<h3>Editar Flor Especifica </h3></br>

<form class="form-horizontal" role="form" id="form" name="form" action="<?=base_url()?>main/editarFlor/<?=$id?>" method="POST">

    <div class="form-group">
        <label class="col-sm-2 control-label">Tipo:</label>
        <div class="col-sm-4 selectContainer">
            <select class="form-control" id="tipo" name="tipo" >
                <option value="">Seleccione un tipo</option>
                <option value="rosa">Rosal</option>
                <option value="clavel">Clavel</option>
                <option value="tulipan">Tulipan</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Color:</label>
        <div class="col-sm-4 selectContainer">
            <select class="form-control" id="color" name="color">
                <option value="">Seleccione un color</option>
                <option value="pink">Rosado</option>
                <option value="blue">Azul</option>
                <option value="violet">Violeta</option>
                <option value="orange">Anaranjado</option>
            </select>
        </div>
    </div>

  	<div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">Cantidad:</label>
    		<div class="col-sm-2">
   			 <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="0" value="<?=$cantidad?>">
    		</div>
  	</div>

  	<div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">Precio:</label>
    		<div class="col-sm-2">
   			 <input type="text" class="form-control" id="precio" name="precio" placeholder="$ 0.0" value="<?=$precio?>">
    		</div>
  	</div>

	<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success" id="guardar" name="guardar">Guardar</button>
    </div>
  </div>


	
</form>

 </div>
</div>

 </div>