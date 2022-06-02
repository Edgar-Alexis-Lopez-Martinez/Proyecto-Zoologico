<img src="../images/logo_tec.jpg" alt="logo" style="width: 100%" />
<h1 style="color: red">Atracciones</h1>
<br />
<table>
    <thead>
        <tr>
            <th>Num</th>
            <th>Nombre Atracción</th>
            <th>Descripción</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $cont = 1;
        foreach ($atracciones as $atraccion) :
        ?>
            <tr>
                <th><?php echo $cont; ?></th>
                <td><?php echo $atraccion["atraccion"]; ?></td>
                <td><?php echo substr($atraccion["descripcion"], 0, 50) . "..."; ?></td>
            </tr>
        <?php $cont++;
        endforeach;  ?>
    </tbody>
</table>