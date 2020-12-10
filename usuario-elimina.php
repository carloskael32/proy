<?php

require_once ('lib/conexionBD.php');

	$id = $_REQUEST['id'];
	

	$sql = "DELETE FROM empleados WHERE id_emp = '$id'";
    $resultado = $con->query($sql);
    



	if($resultado){

			header("Location: usuarios.php");

		}else{
			echo "Error al Eliminar";
			header("Location: usuarios.php");	
		}



		


?>
