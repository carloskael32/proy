<?php
include_once('lib/cab.php');
?>

<?php
require_once('lib/conexionBD.php');
$sql = "SELECT empleados.id_emp,id, nombre, ci, cargo
FROM empleados, roles
WHERE roles.id_emp = empleados.id_emp";
$result =  $con->query($sql);
$roles = array();
while ($fila =  $result->fetch_array()) {
    $roles[] = $fila;
}

?>


<h2 class="center">Roles</h2>
<br>
<div class="container">
    <table class="centered responsive-table">
        <thead>
            <tr>
                <th>Id Usuario</th>
                <th>Nombres</th>
                <th>Carnet de Identidad</th>
                <th>Cargo</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($roles as $item) : ?>
                <tr>
                    <td><?= $item['id_emp'] ?></td>
                    <td><?= $item['nombre'] ?></td>
                    <td><?= $item['ci'] ?></td>
                    <td><?= $item['cargo'] ?></td>


                    <td>
                        <a href="roles-elimina.php?id=<?= $item['id'] ?>">
                            <button class="btn waves-effect waves-light red">Eliminar
                                <i class="material-icons right">delete</i>
                            </button>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>



        </tbody>
    </table>
</div>





<div class="fixed-action-btn">

    <a href="roles-insertar.php" class="btn-floating red btn-large waves-effect waves-light">
        <i class="material-icons large">add</i>
    </a>




</div>


<?php
include_once('lib/pie.php');
?>