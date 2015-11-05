<?=$this->load->view('barrasDeHerramientas/barraAdministrador');?> <br>




<div class="container">
		
	 <div class="row">
  <div class="one centered mobile fifth"><h3>Ver Todos Los Articulos</h3></div>
</div>
	
</div>

<div class="container" align="center">
	
		<table class="responsive success responsiveTable" style="width: 80%; font-size: 15px;" >
			<thead>
				<tr>
					<th>Articulo</th>
					<th>Tamaño</th>
					<th>Color</th>
					<th>Descripcion</th>
					<th>Cantidad</th>
					<th>Precio</th>
					<th>Acciones</th>
				</tr>
			</thead>	
			<tbody>
			<?php
			if ($enlaces != FALSE){
				foreach ($enlaces->result() as $row) {
				echo "<tr>";
					echo "<td>".$row->nombre."</td>";
					echo "<td>".$row->tamano."</td>";
					echo "<td>".$row->color."</td>";
					echo "<td>".$row->descripcion."</td>";
					echo "<td>".$row->cantidad."</td>";
					echo "<td>$ ".$row->precio."</td>";
					echo "<td>";
					echo "<a href='".base_url()."controladorFloresYAccesorios/editarAccesoriosAdmin/".$row->idAcc."' ><i class='icon-edit icon-2x green'></a></i>";
					echo "&nbsp;&nbsp;&nbsp;";
					echo "<a href='".base_url()."controladorFloresYAccesorios/eliminaAccesorioAdmin/".$row->idAcc."' ><span class='icon-eraser icon-2x red'></a></span>";
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

