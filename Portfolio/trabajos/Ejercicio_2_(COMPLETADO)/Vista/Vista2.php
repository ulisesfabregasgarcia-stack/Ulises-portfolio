<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2 boletín final</title>
    </head>
    <body>
        <h1 style = color:darkblue>Calculo de media, máximo y mínimo de salarios:</h1>
        <hr>
        <form action="../Controlador/Controlador2.php" method="post">
            <p><label for="1">Salario 1: </label><input type="number" id="1" name="salarios[]" placeholder="ingresar" min="0" autofocus></p>
            <p><label for="2">Salario 2: </label><input type="number" id="2" name="salarios[]" placeholder="ingresar" min="0"></p>
            <p><label for="3">Salario 3: </label><input type="number" id="3" name="salarios[]" placeholder="ingresar" min="0"></p>
            <p><label for="4">Salario 4: </label><input type="number" id="4" name="salarios[]" placeholder="ingresar" min="0"></p>
            <p><button>Eviar Salarios</button></p>
        </form>

        <hr>

        <?php
        session_start();

        if (!empty($_SESSION['errores'])) {
            echo "<h2 style = 'color:red'>ERRORES</h2>";
            echo "<ul style = 'color:purple'>";

            if (is_array($_SESSION['errores'])) {

                foreach ($_SESSION['errores'] as $errores) {

                    if (is_array($errores)) {
                        foreach($errores as $mostrar) {
                            echo "<li>.$mostrar.</li>";
                        }
                    } else {
                        echo "<li>".$errores."</li>";
                    }
                }
                echo "</ul>";
                unset($_SESSION['errores']);
                unset($_SESSION['resultados']);
        }

    }



        if (!empty($_SESSION['resultados'])) {
            echo "<h2 style = 'color:blue'>RESULTADOS</h2>";
            echo "<ul style = 'color:green'>";

            if (is_array($_SESSION['resultados'])) {

                foreach ($_SESSION['resultados'] as $indice => $resultados) {

                echo "<li><b>".$indice."</b>: ".$resultados."</li><br>";

             }
            }
                echo "</ul>";
                unset($_SESSION['errores']);
                unset($_SESSION['resultados']);
        }

    
        ?>







    </body>
</html>