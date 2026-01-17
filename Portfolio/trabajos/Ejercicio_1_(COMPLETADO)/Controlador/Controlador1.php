<?php
session_start();

if (!isset($_SESSION['errores'])){
    $_SESSION['errores']=[];
}

if (!isset($_SESSION['resultados'])){
    $_SESSION['resultados']=[];
}

require_once "../Modelo/Modelo1.php";

NombreVS($_POST['nombre']);

EdadVS($_POST['edad']);

EmailVS($_POST['email']);

$cursos=$_POST['curso'] ?? null;
ArrayVS($cursos);

header("Location: ../Vista/Vista1.php");
exit;

?>