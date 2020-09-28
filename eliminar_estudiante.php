<?php
include_once "conexion.php";
include_once "Estudiante.php";
Estudiante::eliminar($_GET["id"]);
header("Location: mostrar_estudiantes.php");
