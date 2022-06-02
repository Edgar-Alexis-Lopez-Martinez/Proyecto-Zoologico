<?php
require_once('../class/alimentos.class.php');
$Alimentos->validateRol('Empleado');
$accion = isset($_GET['accion']) ? $_GET['accion'] : null;
$id = isset($_GET['id']) ? $_GET['id'] : null;
$id = is_numeric($id) ? $id : null;
include('view/header.php');
switch ($accion) {
    case 'create':
        $data = isset($_POST["data"]) ? $_POST["data"] : null;
        if (isset($data["enviar"])) {
            $alimentos = $Alimentos->create($data);
            if ($alimentos) {
                $Alimentos->alerta("Alimento Guardado Correctamente", "success");
                $alimentos = $Alimentos->read();
                include('view/alimentos.php');
            } else {
                $Alimentos->alerta("Error Alimento No Guardado", "danger");
                include('view/alimentos.form.php');
            }
        } else {
            include('view/alimentos.form.php');
        }
        break;
    case 'delete':
        $alimentos = $Alimentos->delete($id);
        if ($alimentos) {
            $Alimentos->alerta("Alimento Eliminado", "success");
        } else {
            $Alimentos->alerta("Alimento No Encontrado", "danger");
        }
        $alimentos = $Alimentos->read();
        include('view/alimentos.php');
        break;
    case 'update':
        $data = isset($_POST["data"]) ? $_POST["data"] : null;
        if (isset($data["enviar"])) {
            if (!is_null($id)) {
                $alimentos = $Alimentos->update($id, $data);
            }
            if ($alimentos) {
                $Alimentos->alerta("Alimento Modificado Correctamente", "success");
                $alimentos = $Alimentos->read();
                include('view/alimentos.php');
            } else {
                $Alimentos->alerta("Error, Alimento No Modificado", "danger");
                include('view/alimentos.form.php');
            }
        } else {
            if (!is_null($id)) {
                $alimentos = $Alimentos->readOne($id);
                if (isset($alimentos[0])) {
                    $data = $alimentos[0];
                    include('view/alimentos.form.php');
                } else {
                    $Alimentos->alerta("El Alimento No Existe", "danger");
                    $alimentos = $Alimentos->read();
                    include('view/alimentos.php');
                }
            }
        }
        break;
    case 'read':
    default:
        $alimentos = $Alimentos->read();
        include('view/alimentos.php');
}
include('view/footer.php');
