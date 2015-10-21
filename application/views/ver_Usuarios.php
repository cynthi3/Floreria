<!--ver usuarios-->
<?=$this->load->view('headers/menu_admin');?>

<div class="container">
	<div class="panel panel-success">
        <div class="panel-heading">
        	<h1>Usuarios del Sistema</h1>
        </div>
        <div class="panel-body">
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
</div>