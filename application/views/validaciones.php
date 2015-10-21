	<?=$this->load->view('headers/menu');?><br /><br /><br /><br />

	<div class="container">
	 <div class="row">
	   <div class="col-md-8">
	  	<h3>Validaciones</h3>
		<form class="form-horizontal" role="form" id="form" name"form" action="" method="POST">
			<div class="form-group">
			   <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
			   <div class="col-sm-10">
				  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa un nombre">
			   </div>
		  	</div>
			<div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Edad</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="edad" name="edad" placeholder="Ingresa una edad">
				</div>
			</div>
			<div class="form-group">
    			<div class="col-sm-offset-2 col-sm-10">
      			<button type="submit" class="btn btn-danger" id="guardar" name="guardar">Guardar</button>      				
    			</div>
  			</div>
		</form>
	  </div>
	</div>
</div>