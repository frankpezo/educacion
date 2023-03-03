<!doctype html>
<html lang="es">
<!--
CRUD con SQL Server y PHP
================================
Este archivo define un encabezado que es
incluido y reutilizado por otros archivos
================================
  Plantilla inicial de Bootstrap 4
-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Conexión de PHP con SQL Server usando PDO">
    <meta name="author" content="RONY TORRES M">
    <title>SQL Server y PHP usando PDO | CURSO DE BI FISI UNAP</title>
    <!-- Cargar el CSS de Boostrap-->
    <link href="./bootstrap.min.css" rel="stylesheet">
    <!-- Cargar estilos propios -->
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <!-- Definición del menú -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" target="_blank" href="#">SQL SERVER + PHP | CURSO DE BI | FISI-UNAP</a>
        <div class="collapse navbar-collapse" id="miNavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./listar.php">Listar (Libro)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./listar.php">Listar (cursor)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./formulario.php">Agregar</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Termina la definición del menú -->
    <main role="main" class="container">
        