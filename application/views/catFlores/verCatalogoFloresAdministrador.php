<?=$this->load->view('barrasDeHerramientas/barraAdministrador');?><br/>

 <div class="row">
  <div class="one centered mobile fifth"><h3>Ver Todas Las Flores </h3></div>
</div>

<div class="container">
	<div class="col-md-12">
		<table data-max="15" class="responsive success responsiveTable" style="width: 100%; font-size: 15px;">
			<thead>
				<tr>
					<th>Flor</th>
					<th>Cantidad</th>
					
					<th>Precio</th>
					<th>Fecha Compra</th>
					<th>Acciones</th>
				</tr>
			</thead>	
			<tbody>
			<?php
			if ($enlaces != FALSE){
				foreach ($enlaces->result() as $row) {
				echo "<tr>";
					echo "<td>".$row->nombreProducto."</td>";
					echo "<td>".$row->cantidad."</td>";					
					//echo "<td>".$row->proveedor."</td>";
					echo "<td>$ ".$row->precioCompra."</td>";
					echo "<td>".$row->fechaCompra."</td>";
					echo "<td>";
					echo "<a href='".base_url()."controladorFloresYAccesorios/editarAdmin/".$row->nombreProducto."'><i class='icon-edit icon-2x green'></a></i>";
					echo "&nbsp;&nbsp;&nbsp;";
					echo "<a href='".base_url()."controladorFloresYAccesorios/eliminarFloresAdmin/".$row->nombreProducto."' ><i class='icon-eraser icon-2x red'></a></i>";
				echo "</tr>";
				}
			}
			else{
				echo "<b>No Hay Productos Registrados</b>";
			}	
			?>
			</tbody>
		</table>
	</div>
</div>

</div>