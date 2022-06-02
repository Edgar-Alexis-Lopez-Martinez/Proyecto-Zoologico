<?php
require_once('../class/familias.class.php');
require_once('../class/atracciones.class.php');
$Atracciones->validateRol('Empleado');
$accion = isset($_GET['accion']) ? $_GET['accion'] : null;
$id = isset($_GET['id']) ? $_GET['id'] : null;
$id = is_numeric($id) ? $id : null;
$atracciones = $Atracciones->read();
include('view/header.php');
switch ($accion) {
    case 'create':
        $data = isset($_POST["data"]) ? $_POST["data"] : null;
        if (isset($data["enviar"])) {
            $familias = $Familias->create($data);
            if ($familias) {
                $Familias->alerta("Familia Guardada Correctamente", "success");
                $familias = $Familias->read();
                include('view/familias.php');
            } else {
                $Familias->alerta("Error Familia No Guardada", "danger");
                include('view/familias.form.php');
            }
        } else {
            include('view/familias.form.php');
        }
        break;
    case 'delete':
        $familias = $Familias->delete($id);
        if ($familias) {
            $Familias->alerta("Familia Eliminada", "success");
        } else {
            $Familias->alerta("Familia No Encontrada", "danger");
        }
        $familias = $Familias->read();
        include('view/familias.php');
        break;
    case 'update':
        $data = isset($_POST["data"]) ? $_POST["data"] : null;
        if (isset($data["enviar"])) {
            if (!is_null($id)) {
                $familias = $Familias->update($id, $data);
            }
            if ($familias) {
                $Familias->alerta("Familia Modificada Correctamente", "success");
                $familias = $Familias->read();
                include('view/familias.php');
            } else {
                $Familias->alerta("Error, Familia No Modificada", "danger");
                include('view/familias.form.php');
            }
        } else {
            if (!is_null($id)) {
                $familias = $Familias->readOne($id);
                if (isset($familias[0])) {
                    $data = $familias[0];
                    include('view/familias.form.php');
                } else {
                    $Familias->alerta("La Familia No Existe", "danger");
                    $familias = $Familias->read();
                    include('view/familias.php');
                }
            }
        }
        break;
    case 'read':
    default:
        $familias = $Familias->read();
        include('view/familias.php');
}
include('view/footer.php');

$Zoologico->send_correo("edgarmlmp@gmail.com", "Prueba 2", "Este Es Otro Correo De Prueba");
