<?php
include_once "conexion.php";
include_once "Nota.php";
$nota = new Nota($_POST["puntaje"], $_POST["id_estudiante"], $_POST["id_materia"]);
$nota->guardar();
header("Location: notas_estudiante.php?id=" . $_POST["id_estudiante"]);
