<?php
include_once "conexion.php";
include_once "Materia.php";
include_once "encabezado.php";
$materia = Materia::obtenerUna($_GET["id"]);
?>
<div class="row">
    <div class="col-12">
        <h1>Editar materia</h1>
        <form action="actualizar_materia.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $materia->nombre ?>" name="nombre" required type="text" id="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
<?php include_once "pie.php" ?>