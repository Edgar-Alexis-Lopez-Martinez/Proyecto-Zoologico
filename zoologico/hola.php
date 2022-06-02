<?php

    $file = fopen("atracciones.txt","r") or exit("Unable To Open File!");
    $atracciones = array();

    while(!feof($file)){
        $linea = fgets($file);
        $atraccion = explode("|", $linea);
        array_push($atracciones,$atraccion);
    }
    fclose($file);
    foreach($atracciones as $atraccion){
        echo "<h1>".$atraccion[0]."</h1>";
        ?>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.6443516020076!2d<?php$atraccion[2];?>!3d<?phpecho $atraccion[1]?>!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0d609cf675dd%3A0x427bbdf5dd07bb5f!2sZool%C3%B3gico%20de%20Morelia!5e0!3m2!1ses!2smx!4v1646159258791!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <?php
    }   
?>