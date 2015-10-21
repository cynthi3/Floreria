<?php 
 $this->load->view("headers/librerias");
 if (!$this->tank_auth->is_logged_in()) {
    $this->load->view('headers/menu_inicia');  
  }
?>

<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Correo o usuario';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>


<?php
	$attributes = array('class' => 'form-signin'); 
	echo form_open($this->uri->uri_string(), $attributes); 
?>

<h2 class="form-signin-heading">Inicio de Sesión</h2>
<table>
	<tr>
		<td class="form-group">
			<?php				 							
				echo form_label($login_label, $login['id']); 
			?>
			<?php #echo form_input($login); ?>
			<input 	type="text" name="<?php echo $login['name']; ?>" id="<?php echo $login['id']; ?>" 
					class="form-control" placeholder="Direccion de correo" 
					maxlength="80" size="30" required autofocus>
		</td>
		<td style="color: red;">
			<?php echo form_error($login['name']); ?>
			<?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
		</td>
	</tr>
	<tr>
		<td class="form-group">
			<?php 
				echo form_label('Contraseña', $password['id']);
			 ?>
			<?php #echo form_password($password); ?>
			<input 	type="password" name="<?php echo $password['name']; ?>" id="<?php echo $password['id']; ?>" 
					class="form-control" placeholder="Contraseña" 
					maxlength="80" size="30" required autofocus>
		</td>
		<td style="color: red;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></td>
	</tr>

	<?php if ($show_captcha) {
		if ($use_recaptcha) { ?>
	<tr>
		<td colspan="2">
			<div id="recaptcha_image"></div>
		</td>
		<td>
			<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
			<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
			<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="recaptcha_only_if_image">Enter the words above</div>
			<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
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

	<tr>
		<td colspan="3">
			<?php echo form_checkbox($remember); ?>
			<?php echo form_label('Recordar sesión', $remember['id']); ?>
			<!--?php echo anchor('/auth/forgot_password/', '¿Has olvidado tu contraseña?'); ?-->
			<!--?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Registrar'); ?-->
		</td>
	</tr>
</table>
<?php
	#echo form_submit('submit', 'Entrar', $att); 
?>
<input class="btn btn-lg btn-primary btn-block" type="submit" value="Entrar"></input>
<?php echo form_close(); ?>