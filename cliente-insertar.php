<?php
include_once('lib/cab.php');
?>

<h2 class="center">Nuevo Cliente</h2>

<div class="section container ">
    <div class="row">
        <form action="cliente-insertar-procesa.php" class="col s12" method="post" autocomplete="off">
            <div class="row card-panel">

                <div class="input-field col s6">
                    <input type="text" name="id_emp" id="id" value="<? echo $_SESSION['id_emp'] ?> | <? echo $_SESSION['nombre'] ?> <? echo $_SESSION['apellidos'] ?>" readonly>
                    <label for="id">Datos del Asesor</label>
                </div>

                <div class="input-field col s6">
                    <input type="text" name="nombres" id="apellidos" class="validate" required autofocus>
                    <label for="nombres">Nombres </label>
                </div>

                <div class="input-field col s6">
                    <input type="text" id="apellidos" name="apellidos" class="validate" required>
                    <label for="apellidos">Apellidos</label>
                </div>

                <div class="input-field col s6">
                    <input type="number" name="carnet" id="ci" class="validate" required>
                    <label for="ci">Nro. de Carnet </label>
                </div>
                <div class="input-field col s6">
                    <input type="number" name="celular" id="tel" class="validate" required>
                    <label for="tel">Telefono </label>
                </div>
                <div class="input-field col s6">
                    <input type="text" name="dir" id="dir">
                    <label for="text">Direccion </label>

                </div>

                <div align="center">
                    <button type="submit" class="btn green waves-effect waves-light">Guardar</button>

                    <a class="btn red waves-effect waves-light" href="clientes.php">Volver</a>
                </div>
            </div>
        </form>
    </div>
</div>



</form>





<?php
include_once('lib/pie.php');
?>