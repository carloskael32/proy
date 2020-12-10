
<?php
session_start();
require_once('conexionBD.php');

$ci = $_POST['ci'];
$pass = md5($_POST['pass']);

$sql =  "SELECT empleados.id_emp, cargo, empleados.celular, empleados.pass, empleados.nombre, empleados.apellidos, empleados.ci
FROM empleados, roles
WHERE empleados.id_emp = roles.id_emp  AND empleados.ci = '$ci' AND empleados.pass = '$pass' LIMIT 1";

$result = $con->query($sql);

foreach ($result as $consulta) {
    $id = $consulta["id_emp"];
    $cargo = $consulta["cargo"];
    $nombre = $consulta["nombre"];
    $ape = $consulta["apellidos"];
}

if ($result->num_rows > 0) {

    $_SESSION["id_emp"] = $id;
    $_SESSION["cargo"] = $cargo;
    $_SESSION["nombre"] = $nombre;
    $_SESSION["apellidos"] = $ape;
    
    print "<script>alert(\"Bienvenido  \");window.location='../inicio.php';</script>";
} else {
    print "<script>alert(\"Empleado no Registrado.\");window.location='../index.php';</script>";
}


?>