<div id="container">
	<h1>Bienvenido <?php echo $usuario?></h1>

	<div id="body">
		<p>Los datos del usuario son:</p>

		<code>
			<p>Carrera: <?=$carrera?></p>
			<p>Edad: <?=$edad?></p>
			<p>Email: <?=$email?></p>
		</code>
		
		<p>Esto es todo por la parte de vistas</p>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>