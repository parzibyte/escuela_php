<?php
include_once "conexion.php";
include_once "Estudiante.php";
$estudiante = new Estudiante($_POST["nombre"], $_POST["grupo"]);
$estudiante->guardar();
header("Location: mostrar_estudiantes.php");
