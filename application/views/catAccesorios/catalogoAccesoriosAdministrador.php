<?=$this->load->view('barrasDeHerramientas/barraAdministrador');?> <br>

<div class="container fadeInDown animated" align="center">
	<h3>Productos en Existencia</h3>
		<table data-max="10" class="responsive success responsiveTable" style="width: 60%; font-size: 15px;" >
			<thead>
				<tr>
					<th>Articulo</th>
				<!--	<th>Tamaño</th>
					<th>Color</th>
				<!--	<th>Descripcion</th> -->
					<th>Cantidad Total</th>
				<!--	<th>Precio</th> -->
				</tr>
			</thead>	
			<tbody>
			<?php

$query = "SELECT nombre, SUM(cantidad) FROM accesorio GROUP BY nombre"; 
		$result = mysql_query($query) or die(mysql_error());
		while($row = mysql_fetch_array($result)){
				echo "<tr>";
					echo "<td>". $row['nombre']."</td>";
					//echo "<td>".$row->tamano."</td>";
					//echo "<td>".$row->color."</td>";
					//echo "<td>".$row->descripcion."</td>";
					echo "<td>". $row['SUM(cantidad)']."</td>";
					//echo "<td>$ ".$row->precio."</td>";
				echo "</tr>";	
				}
			?>
			</tbody>
		</table>
	</div>
	</br></br>
<div class="row fadeInDown animated">
	<div class="one twelfth"></div>
  <div class="three twelfths"></div>
		<div class="row">
			<div class="five twelfths"></div>
		<a class="button green" href="<?=base_url()?>controladorFloresYAccesorios/agregaAccesoriosAdmin"><i class=" icon-plus"></i> Agregar Productos a Catalogo</a> </br>
		<div class="five twelfths"></div> </br>
		<div class="five twelfths"></div>
		<a class="button warning" href="<?=base_url()?>controladorFloresYAccesorios/catalogoAccesoriosAdmin"><i class="icon-th-list"></i> Editar Catalogo de Accesorios</a>
	</div>
</div>
