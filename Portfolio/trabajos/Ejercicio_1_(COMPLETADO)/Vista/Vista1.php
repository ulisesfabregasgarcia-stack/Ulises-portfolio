<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio final 1</title>
    </head>
    <body>
        <h1>Formulario de cursos</h1>

        <?php
        session_start();

        if(!empty($_SESSION['errores'])) {
            echo "<ul style= 'color:red'>";
            foreach ($_SESSION['errores'] as $mostrar_errores) {
                echo "<li>$mostrar_errores</li>";
            }
            
        }
        echo "</ul>";
        unset($_SESSION['errores']);

        if(!empty($_SESSION['resultados'])) {
            echo "<h2>Resultados</h2>";
            echo "<ul style= 'color:green'>";
            foreach ($_SESSION['resultados'] as $resultado) {
                if (is_array($resultado)) {
                    echo "<p><b>Cursos:</b></p>";
                    foreach($resultado as $v) {
                        echo "<li>$v</li>";
                    }
                } else {
                    echo "<li>$resultado</li>";
                }
            }
            
        }
        echo "</ul>";
        unset($_SESSION['resultados']);
        ?>


        <form action="../Controlador/Controlador1.php" method="post">
            <p><label for="1">Nombre: </label><input id="1" type="text" name="nombre" maxlength="50" placeholder="ingresar" autofocus>
            <p><label for="2">Email: </label><input id="2" type="email" name="email" maxlength="100" placeholder="ingresar">
            <p><label for="3">Edad: </label><input id="3" type="number" name="edad" min="0" max="130" placeholder="ingresar">
            <h2>Cursos:</h2>
            <p><label for="4">Primero </label><input id="4" type="checkbox" name="curso[]" value="primero">
            <p><label for="5">Segundo </label><input id="5" type="checkbox" name="curso[]" value="segundo">
            <p><label for="6">Tercero </label><input id="6" type="checkbox" name="curso[]" value="tercero">
            <p><label for="7">Cuarto </label><input id="7" type="checkbox" name="curso[]" value="cuarto">
            <p><button>ENVIAR</button></p>
        </form>
    </body>
</html>