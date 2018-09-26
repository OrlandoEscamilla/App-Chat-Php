<?php 

session_start();
	if(isset($_SESSION['user']) and isset($_SESSION['pass'])){
		header("Location: index.php");
	}
	else{
		
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilos.css">
	<title>Chat</title>
</head>
<body>
	<section id="form">
	<?php
		@$form = $_REQUEST['form'];

		if($form == "nuevo"){

			?>
		<form action="funciones.php?num=1" method="POST" enctype="multipart/form-data">
			<h3>Registrate</h3>
			<input type="text" placeholder="Nombre..." name="nombre">
			<input type="email" placeholder="Correo..." name="correo">
			<input type="password" placeholder="Contraseña..." name="contrasena">
			<label>Sube tu imagen</label>
			<input type="file" name="imagen">
			<input type="submit" value="Aceptar">
			<a href="registro.php">Ya te has registrado?</a>
		</form>
			<?php
		}
		else{
			?>
			<form action="funciones.php?num=2" method="post">
				<h3>Iniciar Sesión</h3>
				
				<input type="email" placeholder="Correo..." name="correo">
				<input type="password" placeholder="Contraseña..." name="contrasena">
				<input type="submit" value="Aceptar">
				<a href="registro.php?form=nuevo">No tienes una cuesnta?</a>
			</form>


			<?php
		}

	?>
	
		
	</section>
</body>
	
</html>