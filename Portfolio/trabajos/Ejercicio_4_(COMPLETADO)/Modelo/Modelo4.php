<?php

function rolVS($rol) {

    if (!isset($rol) || trim($rol) ==="") {
        $_SESSION['errores'][] = 'Error, rol no encontrado';
        return null;
    } else {
        $rol = trim($rol);
        $rol = htmlspecialchars($rol);
    }

    switch ($rol) {
        case "admin":
            $_SESSION['result']['Elección'] = 'Ha escogido <i>administrador</i>';
            break;
        case "editor":
            $_SESSION['result']['Elección'] = 'Ha escogido <i>editor</i>';
            break;
        case "invitado":
            $_SESSION['result']['Elección'] = 'Ha escogido <i>invitado</i>';
            break;
    }
    return $rol;

}

function usuarioVS($usuario) {

    if (!isset($usuario) || trim($usuario) ==="") {
        $_SESSION['errores'][] = 'Error, usuario no encontrado';
        return null;
    } else {
        $usuario = trim($usuario);
        $usuario = htmlspecialchars($usuario);
        $_SESSION['result']['Usuario'] = $usuario;
        return $usuario;
    }  
}

function contraseñaVS($contraseña) {

    if (!isset($contraseña) || trim($contraseña) ==="") {
        $_SESSION['errores'][] = 'Error, contraseña no encontrada';
        return null;
    } else {
        $contraseña = trim($contraseña);
        $contraseña = htmlspecialchars($contraseña);
        $_SESSION['result']['Contraseña'] = $contraseña;
        return $contraseña;
    }
   
}
?>