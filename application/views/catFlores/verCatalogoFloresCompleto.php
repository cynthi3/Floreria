<?=$this->load->view('barrasDeHerramientas/barraAdministrador');?><br/>

 <div class="container fadeInUp animated">
 	<div class="row">
  <div class="one centered mobile fifth"><h3>Ver Todas Las Flores </h3></div>
</div>
</div>
<div class="container fadeInUp animated" align="center">
	
	
		<table data-max="15" class="responsive success responsiveTable" style="width: 70%; font-size: 15px;" >
			<thead>
				<tr>
					<th>Flor</th>
					<th>Cantidad</th>
					<th>Precio</th>
				<!--	<th>Fecha Compra</th> -->
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
					//echo "<td>".$row->fechaCompra."</td>";
					echo "<td>";
					echo "<a href='".base_url()."controladorFloresYAccesorios/editarAdmin/".$row->idFlor."'><i class='icon-edit icon-2x green'></a></i>";
					echo "&nbsp;&nbsp;&nbsp;";
					echo "<a href='".base_url()."controladorFloresYAccesorios/eliminarFloresAdmin/".$row->idFlor."' ><i class='icon-eraser icon-2x red'></a></i>";
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
	

</br></br>
<div class="row fadeInUp animated">
	<div class="one twelfth"></div>
  <div class="three twelfths"></div>
		<div class="row">
			<div class="five twelfths"></div>
		<a class="button green" href="<?=base_url()?>controladorFloresYAccesorios/agregaFloresAdmin"><i class="icon-th-list"></i>  Agregar Flores</a>
	</div>
</div>