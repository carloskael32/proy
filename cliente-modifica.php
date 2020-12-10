<?php
require_once('lib/cab.php');
?>

<?php
require_once("lib/conexionBD.php");
$id = $_REQUEST['id'];
$sql = "SELECT * FROM clientes WHERE id_cli = $id";
$query = $con->query($sql);
$row = $query->fetch_array();
?>




<h2 class="center">Modificar Datos del Cliente</h2>

<div class="container">






    <form class="text-left" name="modificar" action="cliente-modifica-procesa.php?id=<?= $row['id_cli']; ?>" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="row card-panel">


            <div class="input-field col s6">
                <input type="text" name="nombres" id="nombre" value="<?php echo $row['nombre']; ?>" required autofocus>
                <label for="nombre">Nombres</label>
            </div>

            <div class="input-field col s6">
                <input type="text" class="form-control" name="apellidos" value="<?php echo $row['apellidos']; ?>">
                <label for="form17">Apellidos</label>
            </div>

            <div class="input-field col s6">
                <input type="text" class="form-control" name="carnet" value="<?php echo $row['ci']; ?>">
                <label for="form17">Carnet de Identidad</label>
            </div>

            <div class="input-field col s6">
                <input type="text" class="form-control" name="celular" value="<?php echo $row['celular']; ?>">
                <label for="form17">Nro. de Celular</label>
            </div>


            <div class="input-field col s12">
                <input type="text" class="form-control" name="dir" value="<?= $row['direccion']; ?>" required>
                <label for="form18">Direccion</label>
            </div>



            <div align="center">
                <button type="submit" class="btn green waves-effect waves-light">Guardar</button>

                <a class="btn red waves-effect waves-light" href="clientes.php">Volver</a>

            </div>

            <div>&nbsp;</div>
        </div>
    </form>

</div>

<?php

require_once('lib/pie.php');
?>