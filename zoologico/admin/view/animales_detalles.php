<h1 class="text-center"><?php echo $animal[0]['animal']; ?></h1>
<a class="btn btn-success" href="animal.php?accion=create_animal&id=<?php echo $animal[0]['id_animal']; ?>" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
    </svg>ㅤAgregar</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nacimiento</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $cont = 1;
        foreach ($animales_detalles as $animal_detalle) :
        ?>
            <tr>
                <td><?php echo $animal_detalle["nacimiento"]; ?></td>
                <td><?php echo $animal_detalle["cantidad"]; ?></td>
                <td><a class="btn btn-danger" href="animal.php?accion=delete_animal&id=<?php echo $animal[0]['id_animal']; ?>&consecutivo=<?php echo $animal_detalle['consecutivo']; ?>" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                        </svg></a>
                </td>
            </tr>
        <?php $cont++;
        endforeach; ?>
    </tbody>
</table>
<?php echo "Se Encontraron " . $cont - 1 . " Animales"; ?>