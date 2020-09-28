<?php
include_once "conexion.php";
include_once "Materia.php";
$materia = new Materia($_POST["nombre"], $_POST["id"]);
$materia->actualizar();
header("Location: mostrar_materias.php");