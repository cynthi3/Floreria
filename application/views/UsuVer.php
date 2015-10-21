<!--Se invoca el menu de administrador-->
<?=$this->load->view('headers/menu_usuario');?>
<br/>
<br/>
<br/>
<br/>

<div class="clearfix">&nbsp;</div>

<div class="container">
	<div class="col-md-8">
		<h2>Ver todas las peliculas</h2>
	</div>
</div>
<form class="form-horizontal" role="form" id="form" name"form" action="<?=base_url()?>main/historial" method="POST">
	<div class="container">
		<div class="col-md-12">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Titulo</th>
						<th>Sinopsis</th>
						<th>Genero</th>
						<th>Calificación</th>
						<th>URL</th>
						<th>Me gusta</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if ($enlaces != FALSE){
							foreach ($enlaces->result() as $row){
								echo "<tr>";
								echo "<td>".$row->nombre."</td>";
								echo "<td>".$row->sinopsis."</td>";
								echo "<td>".$row->genero."</td>";
								echo "<td>".$row->calificacion."</td>";
								//echo "<td>".$row->ruta."</td>";
								echo "<td>";
								echo "<a href='".$row->ruta."' role='button' type='submit' class='btn btn-success' target='_new'>Ver pelicula</a>";	
									//echo "<a href='".$row->ruta."' role='button' type='submit' class='btn btn-success' target='_new'>Ver pelicula</a>";
								echo "<td>";	
								echo "<input type='submit' class='btn btn-primary' value='Me gusta'></input>";
								//echo "window.location='UsuVer.php';"
								echo "</tr>";
							}
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</form>