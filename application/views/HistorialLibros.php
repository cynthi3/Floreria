<?php
    $this->load->view('headers/menu_admin');
?>
<div class="container">
	<div class="panel panel-primary">
        <div class="panel-heading">
            <h1>Libros Existentes</h1>
        </div>
        <div class="panel-body">
            <div class="row">
            	<div class="col-md-12">
            		<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>ISBN</th>
								<th>Nombre del Libro</th>
								<th>Autor</th>
								<th>Editorial</th>
								<th>Paginas</th>
								<th>Precio</th>
								<th>Cantidad</th>
							</tr>
						</thead>
						<tbody>
						<?php
							if ($libros != FALSE){
								foreach ($libros->result() as $row){
										echo "<tr>";
										echo "<td>".$row->ISBN."</td>";
										echo "<td>".$row->Titulo."</td>";
										echo "<td>".$row->Autor."</td>";
										echo "<td>".$row->Editorial."</td>";
										echo "<td>".$row->Paginas."</td>";
										echo "<td>".$row->Precio."</td>";
										echo "<td>".$row->Cantidad."</td>";
								}
							}
						?>
						</tbody>
					</table>
				</div>
					<div class="col-md-12">
						<p><a href="<?=base_url()?>doc1/index/>" class="btn btn-success" role="button" aria-haspopup="true" aria-expanded="false">
                   			<span class="glyphicon glyphicon-save"></span>
                   				&nbsp;Descargar PDF
                  			<span class="caret"></span>
               			</a></p>
		            </div>
        	</div>
    	</div>
    </div>
</div>