<?php
	$this->load->view("headers/librerias");
	if (!$this->tank_auth->is_logged_in()) {
 		$this->load->view('headers/menu_inicia');  
  	}
?>

<?php
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
	);
}
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>

<?php
	$attributes = array('class' => 'form-signin'); 
	echo form_open($this->uri->uri_string(),$attributes); 
?>

<h2 class="form-signin-heading">Registro de usuario</h2>
<table>
	<?php if ($use_username) { ?>
	<tr>
		<td class="form-group">
			<?php echo form_label('Nombre de Usuario', $username['id']); ?>
			<?php #echo form_input($username); ?>
			<input 	type="text" name="username" id="username" 
					class="form-control" placeholder="Usuario" 
					maxlength="80" size="30" required autofocus>
		</td>
		<td style="color: red;">
			<?php echo form_error($username['name']); ?>
			<?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?>
		</td>
	</tr>
	<?php } ?>
	<tr>
		<td class="form-group">
			<?php echo form_label('Correo Electronico', $email['id']); ?>
			<?php #echo form_input($email); ?>
			<input 	type="text" name="email" id="email" 
					class="form-control" placeholder="Direccion de correo" 
					maxlength="80" size="30" required autofocus>
		</td>
		<td style="color: red;">
			<?php echo form_error($email['name']); ?>
			<?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?>
		</td>
	</tr>
	<tr>
		<td class="form-group">
			<?php echo form_label('Contraseña', $password['id']); ?>
			<?php #echo form_password($password); ?>
			<input 	type="password" name="password" id="password" 
					class="form-control" placeholder="Contraseña" 
					maxlength="80" size="30" required autofocus>
		</td>
		<td style="color: red;">
			<?php echo form_error($password['name']); ?>
		</td>
	</tr>
	<tr>
		<td class="form-group">
			<?php echo form_label('Confirmar contraseña', $confirm_password['id']); ?>
			<?php #echo form_password($confirm_password); ?>
			<input 	type="password" name="confirm_password" id="confirm_password" 
					class="form-control" placeholder="Confirmar Contraseña" 
					maxlength="80" size="30" required autofocus>
		</td>
		<td style="color: red;">
			<?php echo form_error($confirm_password['name']); ?>
		</td>
	</tr>

	<?php if ($captcha_registration) {
		if ($use_recaptcha) { ?>
	<tr>
		<td colspan="2">
			<div id="recaptcha_image"></div>
		</td>
		<td>
			<!--<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
			<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
			<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>-->
		</td>
	</tr>
	<tr>
		<td>
			<!--<div class="recaptcha_only_if_image">Enter the words above</div>
			<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>-->
		</td>
		<td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
		<td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></td>
		<?php echo $recaptcha_html; ?>
	</tr>
	<?php } else { ?>
	<tr>
		<td colspan="3">
			<p>Enter the code exactly as it appears:</p>
			<?php echo $captcha_html; ?>
		</td>
	</tr>
	<tr>
		<td><?php echo form_label('Confirmation Code', $captcha['id']); ?></td>
		<td><?php echo form_input($captcha); ?></td>
		<td style="color: red;"><?php echo form_error($captcha['name']); ?></td>
	</tr>
	<?php }
	} ?>
</table>
<?php #echo form_submit('register', 'Registrar'); ?>
<input class="btn btn-lg btn-primary btn-block" type="submit" value="Registrar"></input>
<?php echo form_close(); ?>