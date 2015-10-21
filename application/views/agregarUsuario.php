	<?=$this->load->view('headers/menu');?><br /><br /><br /><br />
	
	<div class="container">
	 <div class="row">
	   <div class="col-md-8">
	  	<h3>Agregar usuarios</h3>
		<form class="form-horizontal" role="form" id="form" name"form" action="<?=base_url()?>main/guardar" method="POST">
			<div class="form-group">
			   <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
			   <div class="col-sm-10">
				  <input type="text" class="form-control" id="username" name="username" placeholder="Ingresa un usuario">
			   </div>
		  	</div>
			<div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="email" name="email" placeholder="Ingresa un email">
				</div>
			</div>
			<div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Contraseña</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa una contraseña">
				</div>
			</div>
			<div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Confirmar contraseña</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar contraseña">
				</div>
			</div>
			<div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Activar</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="activated" name="activated" placeholder="Confirmar aceptación">
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