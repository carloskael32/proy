<?php
include_once('lib/cab.php');
?>

<?php
require_once('lib/conexionBD.php');

if ($_SESSION['cargo'] == 'administrador') {
    $id_emp = $_SESSION['id_emp'];
    $sql = "SELECT id_pre, clientes.ci, monto, cuota, empleados.id_emp, clientes.nombre, clientes.apellidos
FROM prestamos,clientes, empleados
WHERE prestamos.id_cli = clientes.id_cli and clientes.id_emp = empleados.id_emp";
    $result =  $con->query($sql);
    $usuarios = array();
    while ($fila =  $result->fetch_array()) {
        $usuarios[] = $fila;
    }
} else {
    $id_emp = $_SESSION['id_emp'];
    $sql = "SELECT id_pre, prestamos.id_emp, clientes.ci, monto, cuota,  clientes.nombre, clientes.apellidos
FROM clientes,prestamos
WHERE prestamos.id_emp = '$id_emp' AND prestamos.id_cli = clientes.id_cli ";
    $result =  $con->query($sql);
    $usuarios = array();
    while ($fila =  $result->fetch_array()) {
        $usuarios[] = $fila;
    }
}
?>

<h2 class="center">Prestamos</h2>
<br><br>


<div>
    <table class="centered responsive-table">
        <thead>
            <tr>
                <th>ID de Asesor</th>
                <th>Nro. CI. de Cliente</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Monto Prestado</th>
                <th>Couta Mensual</th>
                <th colspan="3">Detalles</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <?php foreach ($usuarios as $item) : ?>
            <tr>
                <td><?= $item['id_emp'] ?></td>
                <td><?= $item['ci'] ?></td>
                <td><?= $item['nombre'] ?></td>
                <td><?= $item['apellidos'] ?></td>
                <td><?= $item['monto'] ?></td>
                <td><?= $item['cuota'] ?></td>

                <td>
                    <a target="_blank" href="reporte-prestamos.php?id=<?= $item['id_pre'] ?>">
                        <button class="btn blue waves-effect waves-light">Plan de Pagos
                            <i class="material-icons right">assignment</i>
                        </button>
                    </a>
                </td>

                <?php
                    if ($_SESSION['cargo'] == 'administrador') {
                ?>


                    <td>
                        <a href="prestamo-elimina.php?id=<?= $item['id_pre'] ?>">
                            <button class="btn waves-effect waves-light red">Eliminar
                                <i class="material-icons right">delete</i>
                            </button>
                        </a>
                    </td>
                <?php
                    }
                ?>
            </tr>
        <?php endforeach ?>


        </tbody>
    </table>
</div>

<div class="fixed-action-btn">

    <a href="prestamo-insertar.php" class="btn-floating red btn-large waves-effect waves-light">
        <i class="material-icons large">add</i>
    </a>




</div>




<?php
include_once('lib/pie.php');
?>