<?php
require_once('lib/cab.php');
?>

<?php
require_once("lib/conexionBD.php");
$id = $_REQUEST['id'];
$sql = "SELECT * FROM empleados WHERE id_emp = $id";
$query = $con->query($sql);
$row = $query->fetch_array();
?>




<h2 class="center">Modificar Datos del Usuario</h2>



<div class="section container ">
    <div class="row">
        <form action="usuario-modifica-procesa.php?id=<?= $row['id_emp']; ?>" class="col s12" method="post" autocomplete="off" enctype="multipart/form-data">
        
            <div class="row card-panel">
                <div class="input-field col s6">
                    <input type="text" name="nombres" value="<?php echo $row['nombre']; ?>" id="nombre" placeholder="" autofocus class="validate" required>
                    <label for="nombre">Nombres</label>
                </div>
                <div class="input-field col s6">
                    <input type="text" name="apellidos" value="<?php echo $row['apellidos']; ?>" id="apellidos" placeholder="" class="validate" required>
                    <label for="apellidos">Apellidos </label>
                </div>
                <div class="input-field col s6">
                    <input type="number" name="carnet" id="ci" value="<?php echo $row['ci']; ?>" placeholder="" class="validate" required>
                    <label for="ci">Nro. de Carnet </label>
                </div>
                <div class="input-field col s6">
                    <input type="number" name="celular" id="tel" value="<?php echo $row['celular']; ?>" placeholder="" class="validate" required>
                    <label for="tel">Telefono </label>
                </div>
                <div class="input-field col s6">
                    <input type="password" name="pass" id="pass" placeholder="" class="validate" required>
                    <label for="pass">Nueva Contraseña </label>
                </div>
          
                <div class="input-field col s12" align="center">
                    <button type="submit" class="btn green waves-effect waves-light">Guardar</button>

                    <a class="btn red waves-effect waves-light" href="usuarios.php">Volver</a>
                </div>
            </div>
        </form>
    </div>
</div>



<?php

require_once('lib/pie.php');
?>