<?php

//FUNCIONES DE VALIDACIONES DE FORMULARIO

function NombreVS($nombref) {

    $nombref=trim($nombref);
    $nombref=htmlspecialchars($nombref);

    if(!isset($nombref) || $nombref==="") {
        $_SESSION['errores'][]= "Error, nombre iválido";
        header("Location:../Vista/Vista1.php");
        exit;
    }

    $_SESSION['resultados']['nombre']=$nombref;
}

function EmailVS($emailf) {

    $emailf=trim($emailf);
    $emailf=filter_var($emailf,FILTER_SANITIZE_EMAIL);

    if(!isset($emailf) || $emailf==="" || !filter_var($emailf,FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errores'][]= "Error, email iválido";
        header("Location:../Vista/Vista1.php");
        exit;
        
    } 

    $_SESSION['resultados']['email']=$emailf;

}

function EdadVS($edadf) {

    $edadf=trim($edadf);
    $edadf=filter_var($edadf,FILTER_SANITIZE_NUMBER_INT);

    if(!isset($edadf) || $edadf==="" || !filter_var($edadf,FILTER_VALIDATE_INT)) {
        $_SESSION['errores'][]= "Error, edad iválida";
        header("Location:../Vista/Vista1.php");
        exit;
    }

    $_SESSION['resultados']['edad']=$edadf;

}

function ArrayVS($array) {


    if(!isset($array) || !is_array($array) || empty($array)) {
        $_SESSION['errores'][]= "Error, curso iválido";
        header("Location:../Vista/Vista1.php");
        exit;
    }

    $arrayf=[];
    foreach($array as $valor) {
            $valor_limpio=filter_var($valor,FILTER_SANITIZE_SPECIAL_CHARS);
            $valor_limpio=trim($valor_limpio);
            $arrayf[]=$valor_limpio;
        }

    $_SESSION['resultados']['cursos']=$arrayf;
}


?>