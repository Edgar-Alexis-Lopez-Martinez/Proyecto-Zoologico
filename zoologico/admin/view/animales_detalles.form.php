<h1 class="text-center"><?php echo $animal[0]['animal']; ?></h1>
<form method="POST" action="animal.php?accion=create_animal&id=<?php echo $animal[0]['id_animal']; ?>">
    <label class="form-label">Fecha De Nacimiento: </label>
    <input class="form-control" type="date" name="data[nacimiento]" pattern="\d{4}-\d{1,2}-\d{1,2}" />
    <label class="form-label">Cantidad: </label>
    <input class="form-control" type="number" name="data[cantidad]" />
    <input class="btn btn-primary" type="submit" value="Guardar Animal" name="data[enviar]" />
</form>