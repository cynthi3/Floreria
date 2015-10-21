<!--Se carga el menu de administrador debido a que solo el puede agregar videos.-->
<?=
	$this->load->view('headers/menu_admin');
?>
<!--Se carga la vista para agregar diferentes Videos al mismo tiempo.-->
<br/>
<br/>
<br/>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h3>Editar Usuario</h3>
			<br/>
			<!--Formulario de subir peliculas-->
			<form class="form-horizontal" role="form" id="form" name"form" action="<?=base_url()?>main/editarUsuario" method="POST">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Nombre de Usuario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="username" name="username" value="<?=$username?>">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Correo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="email" name="email" value="<?=$email?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-10">
				  		<input type="text" style="visibility:hidden" class="form-control" name="idi" id="idi" value="<?=$idi?>">
					</div>
				</div>
				<div class="form-group">
    				<div class="col-sm-offset-2 col-sm-10">
      					<button type="submit" class="btn btn-danger" id="guardar" name="guardar">Editar</button>      				
    				</div>
  				</div>
			</form>
	  	</div>
	</div>
</div>	