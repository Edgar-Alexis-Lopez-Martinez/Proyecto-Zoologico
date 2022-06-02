<?php if ($accion == "create") : ?>
    <h1 class="text-center">Nueva Atraccion</h1>
<?php else : $accion = "update" ?>
    <h1 class="text-center">Modificar Atraccion</h1>
    <div class="row text-center">
        <div class="col">
            <img class="rounded-circle" src="../<?php echo $data["foto"]; ?>">
        </div>
    </div>
<?php endif ?>
<form method="POST" enctype="multipart/form-data" action="atraccion.php?accion=<?php echo $accion; ?><?php if ($accion == "update") echo "&id=" . $id; ?>">
    <label class=" form-label">Nombre De La Atraccion: </label>
    <input class="form-control" type="text" value="<?php echo ($accion == "update") ? $data["atraccion"] : ""; ?>" name="data[atraccion]" />
    <label class="form-label">Descripcion: </label>
    <textarea class="form-control" name="data[descripcion]"><?php echo ($accion == "update") ? $data["descripcion"] : ""; ?></textarea>
    <label class="form-label">Latitud: </label>
    <input class="form-control" type="text" value="<?php echo ($accion == "update") ? $data["latitud"] : ""; ?>" name="data[latitud]" />
    <label class="form-label">Longitud: </label>
    <input class="form-control" type="text" value="<?php echo ($accion == "update") ? $data["longitud"] : ""; ?>" name="data[longitud]" />
    <label class="form-label">Foto: </label>
    <input class="form-control" type="file" value="<?php echo ($accion == "update") ? $data["foto"] : ""; ?>" name="foto" />
    <input class="btn btn-primary" type="submit" value="Guardar Atraccion" name="data[enviar]" />
</form>