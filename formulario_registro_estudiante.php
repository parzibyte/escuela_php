<?php include "encabezado.php" ?>
<div class="row">
    <div class="col-12">
        <h1>Registro de estudiante</h1>
        <form action="guardar_estudiante.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input name="nombre" required type="text" id="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="grupo">Grupo</label>
                <input name="grupo" required type="text" id="grupo" class="form-control" placeholder="Grupo">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
<?php include "pie.php" ?>