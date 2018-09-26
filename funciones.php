<?php 
	function Insertar($nombre, $correo, $contrasena){
		$imagen = $_FILES['imagen']['name'];
		copy($_FILES['imagen']['tmp_name'] , "imagenes/".$imagen);

		include("conexion.php");

		$sql = "INSERT INTO usuarios (nombre,correo,contrasena,imagen)VALUES('$nombre','$correo','$contrasena','$imagen')";

		$res = $conexion->query($sql);

		echo $sql;

		if($res){echo "Insercion exitosa";}
		else{echo "Insercion no exitosa";}
	}



	function Sesion($user, $pass){
		include("conexion.php");

		$sql = "SELECT * FROM usuarios WHERE correo='".addslashes($user)."' AND  contrasena='".addslashes($pass)."' ";
		$res = $conexion->query($sql);

		session_start();
		if($sesion=mysqli_fetch_array($res)){
			echo "entra aqui";
			$_SESSION['user'] = $user;
			$_SESSION['pass'] = $pass;
			header("Location: index.php");
		}
		else{
			header("Location: registro.php");
			}
	}


	function Cerrar_sesion(){
		session_start();
		session_destroy();
		header("Location: registro.php");
	}

	function Insertar_Mensaje($user, $mensaje){
		include("conexion.php");
		$sql = "INSERT INTO conversacion(usuario,mensaje) VALUE('$user','$mensaje')";

		$res = $conexion->query($sql);
		if($res){
			header("Location: index.php"); 
		}
		else{ 
			echo "Insercion no Exitosa";
		}

	}

	

	@$num = $_REQUEST['num'];

	switch ($num) {
		case 1:
			Insertar($_POST['nombre'], $_POST['correo'], $_POST['contrasena']);
			break;
		case 2:
			Sesion($_POST['correo'], $_POST['contrasena']);
			break;
		case 3:
			Cerrar_sesion();
		break;
		case 4:
			session_start();
			$user = $_SESSION['user'];
			Insertar_Mensaje($user,$_POST['mensaje']);
		break;
		
		default:
			echo "Este es el default";
			break;
	}
 ?>