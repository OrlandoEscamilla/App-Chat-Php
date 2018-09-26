<?php 
	header("refresh:2, conversacion.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilos.css">
	<title>Chat</title>
</head>
<body>
	<?php 
		include("conexion.php");
		$sql = "SELECT * FROM conversacion";
		$res = $conexion->query($sql);
		while($mensaje = $res->fetch_assoc()){
			$correo = $mensaje['usuario'];
			$sql2 = "SELECT * FROM usuarios WHERE correo = '$correo'";
			$res2 = $conexion->query($sql2);
			$usuario = $res2->fetch_assoc();
	
	 ?>		
			<div class="mensaje">
				<img src="imagenes/<?php echo $usuario['imagen']; ?>"/>
				<span><?php echo $usuario['nombre']; ?>, Dice: </span>
				<p><?php echo $mensaje['mensaje']; ?></p>
			</div>
			<?php 
			 }
			 ?>
			
</body>	
</html>