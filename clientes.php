<?php
include_once('lib/cab.php');
?>
<?php
require_once('lib/conexionBD.php');

$id_emp = $_SESSION['id_emp'];

if ($_SESSION['cargo'] == 'administrador') {
    $sql = "SELECT * FROM clientes ";
    $result =  $con->query($sql);
    $usuarios = array();
    while ($fila =  $result->fetch_array()) {
        $usuarios[] = $fila;
    }
} else {
    $sql = "SELECT * FROM clientes WHERE clientes.id_emp = $id_emp";
    $result =  $con->query($sql);
    $usuarios = array();
    while ($fila =  $result->fetch_array()) {
        $usuarios[] = $fila;
    }
}
?>

<h2 class="center">Clientes</h2>
<br><br>


<div>
    <table class="centered responsive-table">
        <thead>
            <tr>
                <th>Id de Asesor</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Nro. de Carnet</th>
                <th>Celular</th>
                <th>Direccion</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <?php foreach ($usuarios as $item) : ?>
                    <td><?= $item['id_emp'] ?></td>

                    <td><?= $item['nombre'] ?></td>
                    <td><?= $item['apellidos'] ?></td>
                    <td><?= $item['ci'] ?></td>
                    <td><?= $item['celular'] ?></td>
                    <td><?= $item['direccion'] ?></td>


                    <td>
                        <a href="cliente-modifica.php?id=<?= $item['id_cli'] ?>">
                        <button class="btn waves-effect waves-light blue">Editar
                            <i class="material-icons right">edit</i>
                        </button>
                        </a>
                    </td>
                    <td>
                    <a href="cliente-elimina.php?id=<?= $item['id_cli'] ?>">
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
            <a href="cliente-insertar.php" class="btn-floating green btn-large waves-effect waves-light">

                <i class="material-icons">person_add</i>

            </a>
        </li>
    </ul>


</div>




<?php
include_once('lib/pie.php');
?>