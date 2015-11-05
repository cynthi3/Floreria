<?php
	$this->load->view('barrasDeHerramientas/BarraUsuarioRegistrado');
?>

<div class="container">
</br>

	<div class="row">
	  <div class="one fifth"></div>
	  <div class="three fifths"></div>
	  <div class="one fifth">
	  		<a href="<?=base_url()?>ArregloController/Ver_Arreglos" class="green button"><i class="icon-plus"> Agregar más productos</i></a></p>
	  </div>
	</div>
</br>

	<div class="row">
<form class="form-horizontal" role="form" id="form" name"form" action="<?=base_url()?>main/historial" method="POST">
			<table class="responsive success responsiveTable">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>Subtotal</th>
						<th>Fecha</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if ($carrito != FALSE){
							foreach ($carrito->result() as $row){
								echo "<tr>";
								echo "<td>".$row->Nombre."</td>";
								echo "<td>".$row->Precio."</td>";
								echo "<td>".$row->Cantidad."</td>";
								echo "<td>".$row->Subtotal."</td>";
								echo "<td>".$row->Fecha."</td>";
								?>
								<td>
									<a href="<?=base_url()?>CarritoController/eliminarArreglo/<?=$row->idCarrito?>" class="red button"><i class="icon-remove-circle"></i></a>
  	 								<a href="<?=base_url()?>CarritoController/confirmarCompra/<?=$row->idCarrito?>" class="green button"><i class="icon-usd"> Comprar</i></a>
								</td>
								<?php
							}
						}
					?>
				</tbody>
			</table>
</form>
</div>
</br>
</br>
<div class="row">
  <div class="one tenth"></div>
  <div class="three tenths"></div>
  <div class="five tenths"></div>
  <div class="one tenth">
  </div>
</div>
<div class="row">
	<?php
			if($error=="exito"){
		?>
				<p class="success dismissible message">Producto Comprado!. Has comprado un Arreglo</p>
		<?php
			}else{
				if($error=="fail"){
		?>
					<p class="success dismissible message">Producto Eliminado!. Has eliminado un Arreglo</p>
		<?php
				}else{}
			}
		?>
</div>
</div>   