<?php
	if($username=="Administrador"){
    	$this->load->view('headers/menu_admin');  
  	}else{
    	$this->load->view('headers/menu_usuario');
  	}
?>
<div class="container">
	<div class="panel panel-primary">
        <div class="panel-heading">
            <h1>Libros Comprados</h1>
        </div>
        <div class="panel-body">
            <div class="row">
            	<div class="col-md-12">
            		<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Usuario</th>
								<th>ISBN</th>
								<th>Nombre del Libro</th>
								<th>Precio</th>
								<th>Fecha de Compra</th>
							</tr>
						</thead>
						<tbody>
						<?php
							if ($Compras != FALSE){
								foreach ($Compras->result() as $row){
									if($username=='Administrador'){
										echo "<tr>";
										echo "<td>".$row->Usuario."</td>";
										echo "<td>".$row->ISBN."</td>";
										echo "<td>".$row->Titulo."</td>";
										echo "<td>".$row->Precio."</td>";
										echo "<td>".$row->Fecha."</td>";
									}else{
										if($username==$row->Usuario){
											echo "<tr>";
											echo "<td>".$row->Usuario."</td>";
											echo "<td>".$row->ISBN."</td>";
											echo "<td>".$row->Titulo."</td>";
											echo "<td>".$row->Precio."</td>";
											echo "<td>".$row->Fecha."</td>";
										}
									}
								}
							}
						?>
						</tbody>
					</table>
				</div>
				<?php
					if($username=='Administrador'){
						?>
						<div class="col-md-12">
							<p><a href="<?=base_url()?>doc/index/>" class="btn btn-success" role="button" aria-haspopup="true" aria-expanded="false">
                    			<span class="glyphicon glyphicon-save"></span>
                      				&nbsp;Descargar PDF
                    			<span class="caret"></span>
                			</a></p>
		                </div>
						<?php
					}
				?>
        	</div>
    	</div>
    </div>
</div>