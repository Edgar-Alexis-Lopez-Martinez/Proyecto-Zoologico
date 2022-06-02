<?php
require_once('../class/animales.class.php');
require_once('../class/familias.class.php');
require_once('../class/alimentos.class.php');
$Animales->validateRol('Empleado');
$accion = isset($_GET['accion']) ? $_GET['accion'] : null;
$id = isset($_GET['id']) ? $_GET['id'] : null;
$consecutivo = isset($_GET['consecutivo']) ? $_GET['consecutivo'] : null;
$id = is_numeric($id) ? $id : null;
$familias = $Familias->read();
$alimentos = $Alimentos->read();
include('view/header.php');
switch ($accion) {
    case 'create':
        $data = isset($_POST["data"]) ? $_POST["data"] : null;
        if (isset($data["enviar"])) {
            $animales = $Animales->create($data);
            if ($animales) {
                $Animales->alerta("Animal Guardado Correctamente", "success");
                $animales = $Animales->read();
                include('view/animales.php');
            } else {
                $Animales->alerta("Error Animal No Guardado", "danger");
                include('view/animales.form.php');
            }
        } else {
            include('view/animales.form.php');
        }
        break;
    case 'delete':
        $animales = $Animales->delete($id);
        if ($animales) {
            $Animales->alerta("Animal Eliminado", "success");
        } else {
            $Animales->alerta("Animal No Encontrado", "danger");
        }
        $animales = $Animales->read();
        include('view/animales.php');
        break;
    case 'update':
        $data = isset($_POST["data"]) ? $_POST["data"] : null;
        if (isset($data["enviar"])) {
            if (!is_null($id)) {
                $animales = $Animales->update($id, $data);
            }
            if ($animales) {
                $Animales->alerta("Animal Modificado Correctamente", "success");
                $animales = $Animales->read();
                include('view/animales.php');
            } else {
                $Animales->alerta("Error, Animal No Modificado", "danger");
                include('view/animales.form.php');
            }
        } else {
            if (!is_null($id)) {
                $animales = $Animales->readOne($id);
                $misAlimentos = $Animales->read_aa($id);
                if (isset($animales[0])) {
                    $data = $animales[0];
                    include('view/animales.form.php');
                } else {
                    $Animales->alerta("El Animal No Existe", "danger");
                    $animales = $Animales->read();
                    include('view/animales.php');
                }
            }
        }
        break;
    case 'edit':
        $animal = $Animales->readOne($id);
        $animales_detalles = $Animales->read_animal($id);
        include('view/animales_detalles.php');
        break;
    case 'delete_animal':
        if (!is_null($consecutivo) && !is_null($id)) {
            $animales = $Animales->delete_animal($id, $consecutivo);
            if ($animales) {
                $Animales->alerta("Registro Borrado", "success");
            } else {
                $Animales->alerta("El Registro No A Sido Borrado", "danger");
            }
            $animal = $Animales->readOne($id);
            $animales_detalles = $Animales->read_animal($id);
            include('view/animales_detalles.php');
        }
        break;
    case 'create_animal':
        if (isset($_POST['data']['enviar'])) {
            $data = $_POST['data'];
            $animal = $Animales->create_animal($data, $id);
            if ($animal)
                $Animales->alerta("Registro Insertado", "success");
            else
                $Animales->alerta("El Registro No A Sido Insertado", "danger");
            $animal = $Animales->readOne($id);
            $animales_detalles = $Animales->read_animal($id);
            include('view/animales_detalles.php');
        } else {
            $animal = $Animales->readOne($id);
            include('view/animales_detalles.form.php');
        }
        break;
    case 'read':
    default:
        $animales = $Animales->read();
        include('view/animales.php');
}
include('view/footer.php');
