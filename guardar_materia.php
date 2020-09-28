<?php
include_once "Materia.php";
$materia = new Materia($_POST["nombre"]);
$materia->guardar();
header("Location: mostrar_materias.php");
