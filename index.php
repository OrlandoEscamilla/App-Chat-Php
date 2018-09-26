<?php 
session_start();
	if(isset($_SESSION['user']) and isset($_SESSION['pass'])){

	}
	else{
		header("Location: registro.php");
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
	<section id="main">
		<iframe src="conversacion.php" id="iframe"></iframe>
		<div>
			<form action="funciones.php?num=4" method="post">
				<input class="text" type="text" placeholder="Mensaje..." name="mensaje">
				<input type="submit" value="Enviar" >
			</form>
		</div>
	</section>
	<a href="funciones.php?num=3">Cerrar sesion</a>
</body>
	
</html>