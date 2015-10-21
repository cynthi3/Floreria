<div id="container"><br /><br />
	<h1>Bienvenido</h1>

	<div id="body">
		<p><b>Buscar</b></p>

		<?=$this->load->view('headers/menu');?>

		<br /><br />
		<form id="form" method="GET" action="<?=base_url()?>index.php/main/buscar">
			<input type="text" id="query" name="query"/>
			<input type="submit" id="buscar" value="Buscar"/>
		</form>

		<br /><br />

		<?php
			if ($result) {
				foreach ($result->result() as $row){
					echo "<a href='".$row->url."' target='_blank'>".$row->titulo."</a><br />";
				}
			}
		?>	

	</div>