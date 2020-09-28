<?php
$mysqli = require_once "conexion.php";
class Estudiante
{
    private $nombre, $grupo;

    public function __construct($nombre, $grupo)
    {
        $this->nombre = $nombre;
        $this->grupo = $grupo;
    }

    public function guardar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO estudiantes
            (nombre, grupo)
                VALUES
                (?, ?)");
        $sentencia->bind_param("ss", $this->nombre, $this->grupo);
        $sentencia->execute();
    }

    public static function obtener()
    {
        global $mysqli;
        $resultado = $mysqli->query("SELECT id, nombre, grupo FROM estudiantes");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
}
