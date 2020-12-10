<?php
session_start();
if (!isset($_SESSION['id_emp'])) {

    print "<script>alert(\"Acceso Denegado \");window.location='index.php';</script>";
}
$cargo = $_SESSION['cargo'];
$nombre = $_SESSION['nombre'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">



    <title>Prestamos</title>
</head>

<body>

    <nav class="purple">
      
        <div class="nav-wrapper">
        
            <!--<div class="nav-wrapper">-->
            <a href="#" class="brand-logo "> &nbsp; Prestamos</a>
            
            <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                <i class="material-icons">menu</i>
            </a>
            
            <ul class="right hide-on-med-and-down">
                <li class="green">
                    <a href="#">
                        <? echo $_SESSION['cargo']?> |
                        <? echo $_SESSION['nombre'] ?>
                        <i class="material-icons left">perm_identity</i>
                    </a>

                </li>
                <li> <a href="inicio.php">Inicio
                            <i class="material-icons right">home</i>
                        </a>
                    </li>
                <?php
                if ($cargo == 'administrador') {
                ?>

            
                    <li> <a href="usuarios.php">Usuarios
                            <i class="material-icons right">person</i>
                        </a>
                    </li>

                    <li> <a href="roles.php">Roles
                            <i class="material-icons right">build</i>
                        </a>
                    </li>

                    <li> <a href="clientes.php">Clientes
                            <i class="material-icons right">perm_contact_calendar</i>
                        </a>
                    </li>

                    <li> <a href="prestamos.php">Prestamos
                            <i class="material-icons right">monetization_on</i>
                        </a>
                    </li>
                <?php
                } else {
                ?>
                    <li> <a href="clientes.php">Clientes
                            <i class="material-icons right">perm_contact_calendar</i>
                        </a>
                    </li>

                    <li> <a href="prestamos.php">Prestamos
                            <i class="material-icons right">monetization_on</i>
                        </a>
                    </li>
                <?php


                }
                ?>

                <li> <a href="lib/logout.php">Cerrar Sesion
                        <i class="material-icons right">logout</i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <br>
        <li class="green">
            <a href="#">
                <? echo $_SESSION['cargo']?> |
                <? echo $_SESSION['nombre'] ?>
                <i class="material-icons left">perm_identity</i>
            </a>
        </li>


        <hr>
        <li> <a href="inicio.php">Inicio
                <i class="material-icons ">home</i>
            </a>
        </li>
        <hr>
        <li> <a href="usuarios.php">Usuarios
                <i class="material-icons">person</i>
            </a>
        </li>
        <hr>
        <li> <a href="roles.php">Roles
                <i class="material-icons">build</i>
            </a>
        </li>
        <hr>
        <li> <a href="clientes.php">Clientes
                <i class="material-icons">perm_contact_calendar</i>
            </a>
        </li>
        <hr>
        <li> <a href="prestamos.php">Prestamos
                <i class="material-icons">monetization_on</i>
            </a>
        </li>
        <hr>
        <li> <a href="lib/logout.php">Cerrar Sesion
                <i class="material-icons">logout</i>
            </a>
        </li>
    </ul>



    <!-- Begin page content -->
    <main role="main">