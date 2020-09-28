<?php
include_once "conexion.php";
include_once "Estudiante.php";
include_once "encabezado.php";
$estudiante = Estudiante::obtenerUno($_GET["id"]);
?>
<div class="row">
    <div class="col-12">
        <h1>Editar estudiante</h1>
        <form action="actualizar_estudiante.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $estudiante->nombre ?>" name="nombre" required type="text" id="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="grupo">Grupo</label>
                <input value="<?php echo $estudiante->grupo ?>" name="grupo" required type="text" id="grupo" class="form-control" placeholder="Grupo">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
<?php include_once "pie.php" ?>