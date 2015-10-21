<!--Vista de imagenes-->
<?php
	$this->load->view('headers/menu_usuario');
?>
<div class="container">
	<br/>
	<br/>
	<div id="body">
		<h3>Buscar</h3>
		<br/>
		<br/>
		<form id="form" method="GET" action="<?=base_url()?>index.php/main/Usu_BP">
			<input type="text" class="form-control" id="query" name="query" placeholder="Ingresa Informacion">
			<br/>
			<button type="submit" class="btn btn-danger" id="Buscar" name="Buscar">Buscar</button>
		</form>
		<br/>
		<br/>
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Titulo</th>
					<th>Genero</th>
					<th>Calificación</th>
					<th>URL</th>
				</tr>
			</thead>
			<tbody>
				<?php
					if ($result){
						foreach ($result->result() as $row){
							echo "<tr>";
							echo "<td>".$row->nombre."</td>";
							echo "<td>".$row->genero."</td>";
							echo "<td>".$row->calificacion."</td>";
							echo "<td><a href='".$row->ruta."' target='_blank'>".$row->ruta."</a></td>";
						}
					}
				?>
			</tbody>
		</table>	
	</div>
</div>