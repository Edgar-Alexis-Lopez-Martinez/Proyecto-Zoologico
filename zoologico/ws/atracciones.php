<?php
include_once('../class/zoologico.class.php');
include_once('../class/atracciones.class.php');
$accion = $_SERVER['REQUEST_METHOD'];
$datos = array();
switch ($accion) {
    case 'POST':
        //$data = file_get_contents('php://input');
        // $data = json_decode($data,true);
        $data[0] = $_POST;
        if (isset($_GET['id_atraccion'])) {
            $id = $_GET['id_atraccion'];
            foreach ($data as $atraccion) {
                $atracciones = $Atracciones->update($id, $atraccion);
                $status = 200;
                $mensaje = 'Se actualizo el registro correctamente';
            }
        } else {
            foreach ($data as $atraccion) {
                $atracciones = $Atracciones->create($atraccion);
                $status = 200;
                $mensaje = 'Se creo el registro correctamente';
            }
        }

        break;

    case 'DELETE':
        if (isset($_GET['id_atraccion'])) {
            $id_atracciones = $_GET['id_atraccion'];
            $cantidad = $Atracciones->delete($id_atraccion);
            $status = 200;
            $mensaje = 'Se ha eliminado con exito la atracción';
        } else {
            $status = 404;
            $mensaje = 'No se ha encontrado la atracción a eliminar';
        }

        break;

    case 'GET':
    default:
        if (isset($_GET['id_atraccion'])) {
            $id_atracciones = $_GET['id_atraccion'];
            $datos = $Atracciones->readOne($id_atraccion);
        } else {
            $datos = $Atracciones->read();
        }
        $datos = $Atracciones->read();
        $status = 200;
        $mensaje = 'Se han procesado con exito las atracciones';
}
$Zoologico->json($datos, $status, $mensaje);
