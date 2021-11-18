<html>

<head>
    <meta charset="UTF-8">
    <title>Agenda de usuarioss Maite</title>
    <style>
        * {
            background-color: #F6CDD3;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <!-- Creamos un php-login-script-level-1 que lo envia al servidor y vuelve a hacer lo mismo
y debemos distinguir si viene de primeras o de segundas y debemos preguntar en la url si llega el submit-->
    <?php

    /**
     * @author Maite Ladaria Sanchez <mladaria@cifpfbmoll.eu>
     * Con este código se pretende crear una pequeña agenda con un array asociativo clave => valor
     */

    /**
     * isset — Determina si una variable está definida y no es null
     *
     * $ _GET es una variable súper global de PHP que se utiliza para recopilar datos de formularios
     * después de enviar un php-login-script-level-1 HTML con method = "get". $ _GET también puede recopilar datos enviados en la URL.
     */
    if (isset($_GET['usuarios'])) {

        $usuarios = $_GET['usuarios'];
    } else
        $usuarios = array();

    if (isset($_GET['submit'])) {
        //filter_input — Toma una variable externa concreta por su nombre y opcionalmente la filtra
        //la instrucción $_GET['nombre'] sirve para recuperar la información recibida y es similar a filter_input.
        $nombre_agenda =  filter_input(INPUT_GET, 'nombre'); //$_GET['nombre'];
        $telefono_agenda = filter_input(INPUT_GET, 'telefono'); //$_GET['telefono'];
        if (empty($nombre_agenda)) {
            echo '<h2 style="color:red";><b>Por favor introduce un nombre y un telefono en el php-login-script-level-1</b></h2>';
        }
        //empty() determina si una variable está vacía
        elseif (empty($telefono_agenda)) {
            //unset() destruye una o más variables especificadas
            unset($usuarios[$nombre_agenda]);
            echo "Se ha eliminado un usuario";
        } else {
            //Dentro de usuarios[] $nombre_agenda es la clave y $telefono_agenda es el valor
            $usuarios[$nombre_agenda] = $telefono_agenda;
            echo 'Se ha añadido o modificado un nuevo usuario';
        }
    }
    ?>
    <h1>Agenda de usuarios</h1>
    <h3>Instrucciones de uso:</h3>
    <h4>Cada vez que se envíe el formulario:</h4>
    <ol>
        <li>Si el nombre está vacío, se mostrará una advertencia.</li>
        <li>Si el nombre que se introdujo no existe en la agenda, y el número de teléfono no está vacío, se añadirá a la agenda.</li>
        <li>Si el nombre que se introdujo ya existe en la agenda y se indica un número de teléfono, se sustituirá el número de teléfono anterior.</li>
        <li>Si el nombre que se introdujo ya existe en la agenda y no se indica número de teléfono, se eliminará de la agenda la entrada correspondiente a ese nombre.</li>
    </ol>
    <form name="form" method="get">
        <?php
        //recorremos el array asignando clave valor con un foreach
        foreach ($usuarios as $nombre => $telefono) {
            //utilizamos el input con tipo hidden para esconder los valores.
            echo "<input type='hidden' name='usuarios[" . $nombre . "]' value='" . $telefono . "' />";
        }
        //https://thomashunter.name/posts/2011-03-19-submitting-multi-dimensional-array-data-to-php
        ?>

        <label>Nombre de usuario: </label>
        <input type="text" name="nombre" value="" />
        <label>Telefono: </label>
        <input type="number" name="telefono" value="" />

        <input type="submit" name="submit" value="Enviar" />

    </form>

    <?php
    /**
     * Comprueba si en el array hay usuarioss, en caso de que sea igual a 0 saldrá el mensaje de que no hay y en caso
     * de que haya usuarioss creará una lista con el nombre (clave) y el telefono(valor).
     * sizeof() => cuenta todos los elementos de un array.
     */
    if (sizeof($usuarios) == 0) {
        echo "<p><b> No hay contactos en la agenda.</b> </p>";
    } else {

        echo "<ol>";
        foreach ($usuarios as $nombre => $telefono) {
            echo "<li>" . $nombre . ": " . $telefono . "</li>";
        }
        echo "</ol>";
    }
    //echo 'hola';
    //var_dump($usuarios);

    ?>
</body>

</html>