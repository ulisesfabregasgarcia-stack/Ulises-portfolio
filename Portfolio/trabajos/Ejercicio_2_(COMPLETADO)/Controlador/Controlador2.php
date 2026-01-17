<?php
session_start();

require_once "../Modelo/Modelo2.php";

if (!isset($_SESSION['errores'])) {

    $_SESSION['errores'] = [];
}

if (!isset($_SESSION['resultados'])) {

    $_SESSION['resultados'] = [];
}

$salarios=$_POST['salarios'] ?? null;

$salariosvs=SalariosVS($salarios);

Media($salariosvs);
Max_Min($salariosvs);

header ("Location: ../Vista/Vista2.php");
exit;



?>