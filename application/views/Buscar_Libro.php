<!--Carga el nav de la pagina de acuerdo al usuario (si no esta logueado, si esta logueado como administrador o usuario normal.-->
<?php
  	if (!$this->tank_auth->is_logged_in()) {
    	$this->load->view('headers/menu_inicia');  
  	}else{
  		if($username=="Administrador"){
    		$this->load->view('headers/menu_admin');  
  		}else{
    		$this->load->view('headers/menu_usuario');
  		}
  	}
?>
<!--Inicia codigo de la pagina que muestra el formulario de busqueda y el listado de libros buscados de aucerdo al titulo en la base de datos.-->
<div class="container">
	<!--Div que contiene el formulario de muestra.-->
	<div class="row">
		<h1>Buscar Libro por "Titulo"</h1>
		<br/>
		<div class="col-md-6">
			<form id="form" method="GET" action="<?=base_url()?>index.php/main/BuscarLibro">
				<input type="text" class="form-control" id="query" name="query" placeholder="Ingresa Informacion">
				<br/>
				<button type="submit" class="btn btn-primary" id="Buscar" name="Buscar">Buscar</button>
			</form>
		</div>
	</div>
	<!--div que contiene los resultados de la base de datos.-->
	<div class="row">
		<br/>
		<br/>
		<?php
			if($Vez=='1'){
				?>
					<div class="panel panel-warning">
            			<div class="panel-heading">
              				<h3 class="panel-title">Resultados</h3>
            			</div>
            			<div class="panel-body">
              				Busca un libro para mostrar resultados.
            			</div>
          			</div>
          		<?php
			}else{
				?>
					<div class="panel panel-success">
            			<div class="panel-heading">
              				<h3 class="panel-title">Resultados</h3>
            			</div>
            			<div class="panel-body">
              				<table class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>ISBN</th>
										<th>Titulo</th>
										<th>Autor</th>
										<th>Paginas</th>
										<th>Idioma</th>
										<th>Precio</th>
										<th>Mas información</th>
									</tr>
								</thead>
								<tbody>
									<?php
										if ($result){
											foreach ($result->result() as $row){
												echo "<tr>";
												echo "<td>".$row->ISBN."</td>";
												echo "<td>".$row->Titulo."</td>";
												echo "<td>".$row->Autor."</td>";
												echo "<td>".$row->Paginas."</td>";
												echo "<td>".$row->Idioma."</td>";
												echo "<td>".$row->Precio."</td>";
												echo "<td>";
												if (!$this->tank_auth->is_logged_in()) {
  									?>
  													<p><a class="btn btn-danger" href="<?=base_url()?>main/SinPermiso" role="button">
  														<span class='glyphicon glyphicon-list'></a></span></p>
  									<?php
  													}else{
  									?>
  													<p><a class="btn btn-success" href="<?=base_url()?>main/MasInfo/<?=$row->Id?>" role="button">
  														<span class='glyphicon glyphicon-list'></a></span></p>
  									<?php
  													}
												echo "</tr>";
											}
										}
									?>
								</tbody>
							</table>
            			</div>
          			</div>
				<?php
			}
		?>	
	</div>
</div>