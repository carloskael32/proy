<?php
include_once('lib/cab.php');
?>



<h2 class="center">Nuevo Empleado</h2>



<div class="section container ">
    <div class="row">
        <form action="usuario-insertar-procesa.php" class="col s12" method="post" autocomplete="off">
            <div class="row card-panel">
                <div class="input-field col s6">
                    <input type="text" name="nombres" id="nombre" autofocus class="validate" required>
                    <label for="nombre">Nombres</label>
                </div>
                <div class="input-field col s6">
                    <input type="text" name="apellidos" id="apellidos" class="validate" required>
                    <label for="apellidos">Apellidos </label>
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
                    <input type="password" name="pass" id="pass" class="validate" required>
                    <label for="pass">Contraseña </label>
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
include_once('lib/pie.php');
?>