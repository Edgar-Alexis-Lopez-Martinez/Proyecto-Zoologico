<?php
require_once('../class/zoologico.class.php');
$accion = isset($_GET['accion']) ? $_GET['accion'] : null;
include_once('view/header_sin_menu.php');
switch ($accion) {
    case 'login':
        if (isset($_POST['correo']) && isset($_POST['contrasena'])) {
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];
            if ($Zoologico->validateEmail($correo)) {
                if ($Zoologico->login($correo, $contrasena)) {
                    header('Location: index.php');
                    //redirigir
                } else {
                    $Zoologico->alerta('Usuario Y Contraseña Equivocado', 'danger');
                }
            }
        }
        break;
    case 'logOut':
        $Zoologico->logOut();
        break;
    case 'olvido':
        if (isset($_POST['correo'])) {
            $correo = $_POST['correo'];
            if ($Zoologico->validateEmail($correo)) {
                if ($Zoologico->recuperar($correo)) {
                    echo 'Ok';
                } else {
                    $Zoologico->alertaError('Correo Electronico Invalido', 'danger');
                }
            } else {
                $Zoologico->alertaError('Correo Electronico Invalido', 'danger');
            }
        }
        include_once('view/login.olvido.php');
        break;
    case 'restablecer':
        if (isset($_GET['correo']) && isset($_GET['token'])) {
            $correo = $_GET['correo'];
            $token = $_GET['token'];
            if ($Zoologico->validarToken($correo, $token)) {
                include_once('view/login.restablecer.php');
            } else {
                $Zoologico->alertaError('El Token Caduco', 'danger');
            }
        } else {
            $Zoologico->alertaError('Un Error Grave A Ocurrido', 'danger');
        }
        break;
    case 'nueva':
        if (isset($_GET['correo']) && isset($_POST['token']) && isset($_POST['contrasena'])) {
            $correo = $_GET['correo'];
            $contrasena = $_POST['contrasena'];
            $token = $_POST['token'];
            if ($Zoologico->validarToken($correo, $token)) {
                if ($Zoologico->nuevaContrasena($correo, $contrasena, $token)) {
                    $Zoologico->alerta("Su Contraseña Fue Cambiada, Porfavr Inicie Sesion", "success");
                    include_once('view/login.php');
                } else {
                    $Zoologico->alertaError("Error Al Cambiar La Contraseña");
                }
                include_once('view/login.restablecer.php');
            } else {
                $Zoologico->alertaError('El Token Caduco', 'danger');
            }
        } else {
            $Zoologico->alertaError('Un Error Grave A Ocurrido', 'danger');
        }
        break;
    default:
        include('view/login.php');
}
include_once('view/footer.php');
