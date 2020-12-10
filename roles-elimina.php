<?php

require_once ('lib/conexionBD.php');

	$id = $_REQUEST['id'];
	

	$sql = "DELETE FROM roles WHERE id = '$id'";
    $resultado = $con->query($sql);
    



	if($resultado){

			header("Location: roles.php");

		}else{
			echo "Error al Eliminar";
			header("Location: roles.php");	
		}



		


?>
