<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4 boletín final</title>
    </head>
    <body>
        <h1 style = color:darkblue>Simulación de login:</h1>
        <hr>
        <form action="../Controlador/Controlador4.php" method="post">
            <p><label for="1"><b>Usuario: </b></label><input type="text" id="1" name="usuario" maxlength="100" placeholder="Ingresar" autofocus></p>
            <p><label for="2"><b>Contraseña: </b></label><input type="text" id="2" name="cont" maxlength="50" placeholder="Ingresar"></p>
            <p><label for="3"><b>Rol: </b></label>
            <select for="3" name="rol"></p>
            <option value="" disabled selected>-- Seleccione un rol --</option>
            <option value="admin">Administrador</option>
            <option value="editor">Editor</option>
            <option value="invitado">invitado</option>
            </select>
            <p><button>ENVIAR</button></p>
        </form>
        <hr>
        <?php
        session_start();

    

        if (!empty($_SESSION['errores'])) {
                echo "<h2 style = 'color:red'>ERRORES</h2>";
                echo "<ul style = 'color:red'>";
                foreach($_SESSION['errores'] as $mostrar ) {
                    echo "<li>".$mostrar."</li>";
                }
                echo "</ul>";

            } elseif (!empty($_SESSION['result'])) {
                echo "<h2 style = 'color:green'>DATOS</h2>";
                echo "<ul style = 'color:green'>";
                foreach($_SESSION['result'] as $indice => $mostrar ) {
                    echo "<li><b>".$indice."</b>: ".$mostrar."</li>";
                }
                echo "</ul>";
                $_SESSION['int'] = 0;
                
            }

            unset($_SESSION['errores']);
            unset($_SESSION['result']);
       
        ?>
    </body>
</html>