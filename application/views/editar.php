	<p><b>Editar enlaces</b></p>

	<?=$this->load->view('headers/menu');?><br /><br />

	<form id="form" name"form" action="<?=base_url()?>main/editarEnlace/<?=$id?>" method="POST">
		<label for="titulo">Titulo</label>
		<input type="text" size="20" name="titulo" id="titulo" value="<?=$titulo?>"/>
		<br />
		<br />
		<label for="url">URL</label>
		<input type="text" size="40" name="url" id="url" value="<?=$url?>" />
		<p><input type="submit" name="editar" id="editar" value="Editar enlace" /></p>
	</form>
</div>