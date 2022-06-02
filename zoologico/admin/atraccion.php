<?php
require_once('../class/atracciones.class.php');
$Atracciones->validateRol('Empleado');
$accion = isset($_GET['accion']) ? $_GET['accion'] : null;
$id = isset($_GET['id']) ? $_GET['id'] : null;
$id = is_numeric($id) ? $id : null;
include('view/header.php');
switch ($accion) {
    case 'create':
        $data = isset($_POST["data"]) ? $_POST["data"] : null;
        if (isset($data["enviar"])) {
            $atracciones = $Atracciones->create($data);
            if ($atracciones) {
                $Atracciones->alerta("Atraccion Insertada Correctamente", "success");
                $atracciones = $Atracciones->read();
                include('view/atracciones.php');
            } else {
                $Atracciones->alerta("Error Atraccion No Guardada", "danger");
                include('view/atracciones.form.php');
            }
        } else {
            include('view/atracciones.form.php');
        }
        break;
    case 'delete':
        $atracciones = $Atracciones->delete($id);
        if ($atracciones) {
            $Atracciones->alerta("Atraccion Eliminada", "success");
        } else {
            $Atracciones->alerta("Atraccion No Encontrada", "danger");
        }
        $atracciones = $Atracciones->read();
        include('view/atracciones.php');
        break;
    case 'update':
        $data = isset($_POST["data"]) ? $_POST["data"] : null;
        if (isset($data["enviar"])) {
            if (!is_null($id)) {
                $atracciones = $Atracciones->update($id, $data);
            }
            if ($atracciones) {
                $Atracciones->alerta("Atraccion Modificada Correctamente", "success");
                $atracciones = $Atracciones->read();
                include('view/atracciones.php');
            } else {
                $Atracciones->alerta("Error, Atraccion No Modificada", "danger");
                include('view/atracciones.form.php');
            }
        } else {
            if (!is_null($id)) {
                $atracciones = $Atracciones->readOne($id);
                if (isset($atracciones[0])) {
                    $data = $atracciones[0];
                    include('view/atracciones.form.php');
                } else {
                    $Atracciones->alerta("La Atraccion No Existe", "danger");
                    $atracciones = $Atracciones->read();
                    include('view/atracciones.php');
                }
            }
        }
        break;
    case 'reporte':
        ob_clean();
        $atracciones = $Atracciones->read();
        ob_start();
        include('view/atracciones.reporte.php');
        $variable = ob_get_clean();
        $Atracciones->pdf('P', 'A4', $variable, 'prueba.pdf');
        break;
    case 'read':
    default:
        $atracciones = $Atracciones->read();
        include('view/atracciones.php');
}
include('view/footer.php');
