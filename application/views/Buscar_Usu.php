<!--Vista de imagenes-->
<?php
	$this->load->view('headers/menu_admin');
?>
<div class="container">
	<br/>
	<br/>
	<div id="body">
		<h3>Buscar</h3>
		<br/>
		<br/>
		<form id="form" method="GET" action="<?=base_url()?>index.php/main/BuscarUsuario">
			<input type="text" class="form-control" id="query" name="query" placeholder="Ingresa Informacion">
			<br/>
			<button type="submit" class="btn btn-danger" id="Buscar" name="Buscar">Buscar</button>
		</form>
		<br/>
		<br/>
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Nombre de Usuario</th>
					<th>Correo</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php
					if ($result){
						foreach ($result->result() as $row){
							if($row->username!='Administrador'){
								echo "<tr>";
								echo "<td>".$row->username."</td>";
								echo "<td>".$row->email."</td>";
								echo "<td>";
									echo "<a href='".base_url()."index.php/bookmarks/editarUsuarios/".$row->id."' class='label label-success'>
											<span class='glyphicon glyphicon-pencil'></a></span>";
									echo "&nbsp; &nbsp;";
									echo "<a href='".base_url()."index.php/bookmarks/eliminarUsuarios/".$row->id."' class='label label-danger'>";
									echo "<span class='glyphicon glyphicon-minus'></a></span>";
									echo "&nbsp; &nbsp;";
									if($row->activated=='0'){
										echo "<a href='".base_url()."index.php/bookmarks/validarUsuarios/".$row->id."' class='label label-warning'>";
										echo "<span class='glyphicon glyphicon-ok'></a></span>";
									}	
									echo "</tr>";
							}
						}
					}
				?>
			</tbody>
		</table>	
	</div>
</div>