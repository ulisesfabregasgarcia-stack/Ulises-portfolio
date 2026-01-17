<?php
session_start();

    if (!isset($_SESSION['int'])) {

        $_SESSION['int'] = 0;
    }

    if (!isset($_SESSION['errores'])) {

        $_SESSION['errores'] = [];
    }

    if (!isset($_SESSION['result'])) {

        $_SESSION['result'] = [];
    }



while ($_SESSION['int'] < 3) {

    $_SESSION['int']++;

    require_once "../Modelo/Modelo4.php";

    $usuario = usuarioVS($_POST['usuario']);
    $contraseña = contraseñaVS($_POST['cont']);
    $rol = rolVS($_POST['rol']);
    
if ($_SESSION['int'] !==3) {
    header ("Location: ../Vista/Vista4.php");
    exit;
}    


}



if ($_SESSION['int'] ===3 && !empty($_SESSION['errores'])) { 

unset($_SESSION['errores']);
$_SESSION['errores'][] = 'INTENTOS MÁXIMOS ALCANZADOS';
$_SESSION['int'] = 0;

header ("Location: ../Vista/Vista4.php");
exit;

} else {

    $_SESSION['int'] = 0;
    header ("Location: ../Vista/Vista4.php");
    exit;
}


?>