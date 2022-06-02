<?php if ($accion == "create") : ?>
    <h1 class="text-center">Nueva Familia</h1>
<?php else : $accion = "update" ?>
    <h1 class="text-center">Modificar Familia</h1>
    <div class="row text-center">
        <div class="col">
            <img class="rounded-circle" src="../<?php echo $data["foto"]; ?>">
        </div>
    </div>
<?php endif ?>
<form method="POST" enctype="multipart/form-data" action="familia.php?accion=<?php echo $accion; ?><?php if ($accion == "update") echo "&id=" . $id; ?>">
    <label class=" form-label">Nombre De La Familia: </label>
    <input class="form-control" type="text" value="<?php echo ($accion == "update") ? $data["familia"] : ""; ?>" name="data[familia]" />
    <label class="form-label">Atracción: </label>
    <select name="data[id_atraccion]" id="" class="form-control">
        <?php
        foreach ($atracciones as $atraccion) :
        ?>
            <option <?php if (isset($data["id_atraccion"])) {
                        if ($data["id_atraccion"] == $atraccion["id_atraccion"]) echo "selected";
                    } ?> value="<?php echo $atraccion["id_atraccion"]; ?>"> <?php echo $atraccion["atraccion"]; ?></option>
        <?php endforeach; ?>
    </select><br />
    <label class="form-label">Foto: </label>
    <input class="form-control" type="file" value="<?php echo ($accion == "update") ? $data["foto"] : ""; ?>" name="foto" />
    <input class="btn btn-primary" type="submit" value="Guardar Familia" name="data[enviar]" />
</form>