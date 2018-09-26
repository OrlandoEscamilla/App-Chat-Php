<?php 
	$conexion = new mysqli("localhost","root","","chat");
	if($conexion){
		print("");
	}
	else{
		print("conexion no exitosa"); 	
	}

 ?>