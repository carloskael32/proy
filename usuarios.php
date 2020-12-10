<?php
include_once('lib/cab.php');
?>

<?php
require_once('lib/conexionBD.php');
$sql = "select * from empleados";
$result =  $con->query($sql);
$usuarios = array();
while ($fila =  $result->fetch_array()) {
    $usuarios[] = $fila;
}
?>
<h2 class="center"> Usuarios</h2>
<br><br>


<div>
    <table class="centered responsive-table">
        <thead>
            <tr>
                <th>ID Usuarios</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Nro. de Carnet</th>
                <th>Telefono</th>
                <th colspan="2">Opciones</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($usuarios as $item) : ?>
                <tr>
                    <td><?= $item['id_emp'] ?></td>
                    <td><?= $item['nombre'] ?></td>
                    <td><?= $item['apellidos'] ?></td>
                    <td><?= $item['ci'] ?></td>
                    <td><?= $item['celular'] ?></td>



         
                    <td>
                        <a href="usuario-modifica.php?id=<?= $item['id_emp'] ?>">
                            <button class="btn waves-effect waves-light blue">Editar
                                <i class="material-icons right">edit</i>
                            </button>
                        </a>
                    </td>
                    <td>
                        <a href="usuario-elimina.php?id=<?= $item['id_emp'] ?>">
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

    <a class="btn-floating red btn-large">
        <i class="material-icons large">add</i>
    </a>

    <ul>
        <li>
            <a href="usuario-insertar.php" class="btn-floating green btn-large">

                <i class="material-icons">person_add</i>

            </a>
        </li>
    </ul>


</div>




<?php
include_once('lib/pie.php');
?>