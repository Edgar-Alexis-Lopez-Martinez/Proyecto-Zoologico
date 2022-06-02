<?php
$dbh = new PDO('mysql:dbname=zoologico;host=localhost', 'zoologico', '12345');
$sth = $dbh->prepare("SELECT * FROM atraccion");
$sth->execute();

/* Obtener todas las filas restantes del conjunto de resultados */
print("Obtener todas las filas restantes del conjunto de resultados:\n");
$result = $sth->fetchAll();
print_r($result);
