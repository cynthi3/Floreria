<?=$this->load->view('barrasDeHerramientas/barraAdministrador');?> <br>

	<div class="container fadeInUp animated" align="center">
		<h3>Catalogo de Flores Existentes</h3>
		<table data-max="10" class="responsive success responsiveTable" style="width: 60%; font-size: 15px;" >
			<thead>
				<tr>
					<th>Flor</th>
					<th>Cantidad</th>
				<!--	<th>Precio</th>
				<!--	<th>Fecha Compra</th> -->
				<!--	<th>Acciones</th>-->
				</tr>
			</thead>	
			<tbody>
			<?php
			$query = "SELECT nombreProducto, SUM(cantidad) FROM flores GROUP BY nombreProducto"; 
		$result = mysql_query($query) or die(mysql_error());
		while($row = mysql_fetch_array($result)){
				echo "<tr>";
					echo "<td>". $row['nombreProducto']."</td>";
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
<div class="row fadeInUp animated">
	<div class="one twelfth"></div>
  <div class="three twelfths"></div>
		<div class="row">
			<div class="five twelfths"></div>
		<a class="button green" href="<?=base_url()?>controladorFloresYAccesorios/agregaFloresAdmin"><i class=" icon-plus"></i> Agregar Flores a Catalogo</a> </br>
		<div class="five twelfths"></div> </br>
		<div class="five twelfths"></div>
		<a class="button warning" href="<?=base_url()?>controladorFloresYAccesorios/catalogoFloresAdmin"><i class="icon-th-list"></i> Editar Catalogo de Flores</a>
	</div>
</div>