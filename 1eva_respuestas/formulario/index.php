<?php
error_reporting(0);


session_start();

if (isset($_COOKIE["usuario"])) {
    $_SESSION["nombre"] = $_COOKIE["usuario"];
    header("location: users-layout.php");
} else {
    if (isset($_POST["submit"])) {
        $name = filter_input(INPUT_POST, "name");
        $apellido = filter_input(INPUT_POST, "apellido");
        $fecha = filter_input(INPUT_POST, "date");

        if ($name !== "") {
            if (isset($_POST["submit"])) {
                setcookie("usuario", $name, time() + 80000);
                $_SESSION["nombre"] = $name;
                header("location: users-layout.php");
            } else {
                session_start();
                $_SESSION["nombre"] = $name;
                header("location: users-layout.php");
            }

        } else {
            displayFormulario();
        }

    } else {
        displayFormulario();
    }
}

//Solo un archivo
$directorio = "./archivos/";
//__DIR__
$subir_archivo = $directorio.basename($_FILES['file1']['name']) ;
$subir_archivo1 = $directorio.basename($_FILES['file2']['name']);

if($_FILES['file1']['tmp_name']) {
    // Se ha enviado el archivo file1
    // Aquí habría que validar el arhivo y si valida, entonces hacer el upload con PHP
    if (move_uploaded_file($_FILES['file1']['tmp_name'],  $subir_archivo)){
        echo " Upload correcto";
    }else{
        echo " Upload ha fallado";
    }
} else {
    echo ' No se recibió archivo 1';
}
if($_FILES['file2']['name']) {
    if (move_uploaded_file($_FILES['file2']['tmp_name'],  $subir_archivo1)){
        echo "Upload correcto";
    }else{
        echo "Upload ha fallado";
    }
} else {
    echo 'No se recibió archivo 2';
}
function displayFormulario()
{
    ?>
    <form action="" method="post">
        Nombre: <input name="name" type="text" placeholder="username..."><br>
        Nombre: <input name="apellido" type="text" placeholder="apellido..."><br>
        Fecha: <input name="date" type="date"><br>
        Selecciona el archivo 1:
        <br>
        <input type="file" name="file1">
        </p>
        <p>
            Selecciona el archivo 2:
            <br>
            <input type="file" name="file2">
        </p>
        <input name="submit" type="submit" value="Submit">
    </form>
    <?php
}