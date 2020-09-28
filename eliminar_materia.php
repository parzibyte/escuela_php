<?php
include_once "conexion.php";
include_once "Materia.php";
Materia::eliminar($_GET["id"]);
header("Location: mostrar_materias.php");
