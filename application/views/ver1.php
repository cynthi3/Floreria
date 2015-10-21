<!--Vista de imagenes-->
<?php
	if($username=="admin"){
		$this->load->view('headers/menu_admin');	
	} else{
		$this->load->view('headers/menu');
	}
?>
<div class="clearfix">&nbsp;</div>
<div class="container">
	<div class="col-md-8">
		<h2>Imágenes guardadas</h2>
	</div>
</div>
<div class="container">
 	<div class="row">
 		<?php
			if ($enlaces1 != FALSE){
				foreach ($enlaces1->result() as $row){
		?>      <div class="row">
				    <div class="col-sm-20 col-md-18">

    			        <div class="thumbnail">

						<?php echo "<h3 align='center'><td>".$row->titulo."</td></h3>"; ?> 
					    <img src="<?php echo $row->ruta;?>" class="img" alt="Cinque Terre" width="400" height="300" crop="top"></img>
					        <div class="caption">
					         	<?php 
					         	if($username==$row->username or "admin"==$username){
					            	echo "<p><a href='".base_url()."index.php/upload/eliminar/".$row->id."' class='btn btn-primary' rol='botton'> Eliminar</a><p>";
					    		}
					            ?>
					
      				        </div>
      				    </div>

                    </div>
  				</div>
		<?php
				}
			}
		?>
 	</div>
</div>