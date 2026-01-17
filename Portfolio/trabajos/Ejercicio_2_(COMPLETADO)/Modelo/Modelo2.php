<?php

function SalariosVS($salariosf) {

    $Asal_limp=[];
    $todosvacios=true;


    if (!isset($salariosf) || !is_array($salariosf)) {

        $_SESSION['errores'][] = "Error, salarios incorrectos";
        return null;

    } else {

        foreach ($salariosf as $sal) {
            if ($sal !=="") {
            $todosvacios=false;
            }
        }

        if ($todosvacios) {
        $_SESSION['errores'][] = "Error, todos los salarios se encuentran vacios";
        return null;
        }
    
        foreach ($salariosf as $sal) {

            if ($sal==="") {

                $_SESSION['errores'][] = "Error, salarios vacios";
                return null;

            } elseif(!is_numeric($sal)) {

                $_SESSION['errores'][] = "Error, tiene que ser un valor numérico";
                return null;

            } else {

                $sal_limp = trim($sal);
                $sal_limp =floatval($sal);
                $sal_limp = htmlspecialchars($sal);
                $Asal_limp[]=$sal_limp;
            }
        }
        return $Asal_limp;
    }
}


function Media($salariosf) {

    $suma = 0;
    $i = 0;
    $media = 0;
    

    if (isset($salariosf) && !empty($salariosf)) {
        foreach ($salariosf as $sal) {

        $suma = $suma + $sal;
        $i = $i + 1;
    }

    $media = $suma/$i;

    $_SESSION['resultados']['Media'] = $media;

    }
}

function Max_Min($salariosf) {

    $max=-1;
    $min=1000000;

    if (isset($salariosf) && !empty($salariosf)) {
        foreach($salariosf as $sal) {

        if ($sal > $max) {

            $max = $sal;
        }  
    }

    foreach($salariosf as $sal) {

        if ($sal < $min) {

            $min = $sal;
        }  
    }
    $_SESSION['resultados']['Máximo'] = $max;
    $_SESSION['resultados']['Mínimo'] = $min;

    }
}



?>