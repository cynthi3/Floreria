<!--ver usuarios-->
	<?=$this->load->view('headers/menu_admin');?><br /><br /><br /><br />

	<div class="clearfix">&nbsp;</div>

	<div class="container">
	   <div class="col-md-8">
		<h2>Ver todos los usuarios</h2>
	   </div>
	</div>

	<div class="container">
		<div class="col-md-12">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Usuario</th>
						<th>Correo</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
				<?php
					if ($enlaces != FALSE){
						foreach ($enlaces->result() as $row){
							echo "<tr>";
							echo "<td>".$row->username."</td>";
							echo "<td>".$row->email."</td>";
							echo "<td>";
								echo "<a href='".base_url()."index.php/bookmarks/eliminar/".$row->id."' class='label label-danger'>";
								echo "<span class='glyphicon glyphicon-minus'></a></span>";
								echo "&nbsp; &nbsp;";
								echo "<a href='".base_url()."index.php/bookmarks/validar/".$row->id."' class='label label-warning'>";
								echo "<span class='glyphicon glyphicon-ok'></a></span>";
								echo "</tr>";
							//echo "<td><a href=".base_url()."main/editar/".$row->id.">Editar</a> | ";
							//echo "<a href=".base_url()."main/eliminar/".$row->id.">Eliminar</a></td>";
						}
					}
				?>

				</tbody>
			</table>
		</div>
	</div>

	<!--<table align="center">
		<tr>
			<td align="center"><h4>Título</h4></td>
			<td align="center"><h4>URL</h4></td>
			<td></td>
			<td></td>
		</tr>
	</table>-->

</div>