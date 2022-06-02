<?php
/* header('Content-Type: application/json; charset=uft-8');
 *//* require_once('../class/zoologico.class.php');
require_once('../class/atracciones.class.php');
$atracciones = $Atracciones->read();
$isAtracciones = json_encode($atracciones);
ob_clean();
echo $isAtracciones;
die(); */
$departamento = file_get_contents("php://input");
$departamento = json_decode($departamento);
print_r($departamento);
echo $departamento->director;
echo sizeof($departamento->empleados);
$empleados = $departamento->empleados;
foreach ($empleados as $empleado) {
    echo $empleado->apellido;
}
