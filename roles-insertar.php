<?php
include_once('lib/cab.php');
?>

<?php
require_once('lib/conexionBD.php');
$sql = "select * from empleados";
$result =  $con->query($sql);
$user = array();
while ($fila =  $result->fetch_array()) {
  $user[] = $fila;
}
?>



<div class="container">

  <h2 class="center">Asignar Roles a Empleados</h2>
  <br>


  <form action="roles-insertar-procesa.php" method="post">
    <div class="row card-panel">

      <div class="input-field col s6">
        

        <select name="id_emp" class="form-control">

          <option value="">-- Seleccione --</option>

          <?php foreach ($user as $item) : ?>
            <option value="<?= $item['id_emp'] ?>"><?= $item['nombre']; ?> <?= $item['apellidos']; ?> | CI.: <?= $item['ci']; ?></option>
          <?php endforeach ?>

        </select>
        <label for="">Datos del Empleado</label>
      </div>

      <div class="input-field col s6">
        

        <select name="cargo" class="form-control">

          <option value="">-- Seleccione --</option>

          <option value="administrador">Administrador</option>
          <option value="empleado">Empleado</option>


        </select>
        <label for="">Cargo</label>
      </div>



      <div class="input-field col s12" align="center">
        <button type="submit" class="btn green waves-effect waves-light">Guardar</button>
        <a class="btn red waves-effect waves-light" href="roles.php">Volver</a>
      </div>

    </div>
  </form>





</div>






<?php
include_once('lib/pie.php');
?>