<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>archivo enviado</title>

</head>

<body>
<div class="main">
    <h1>Subir archivo con PHP:</h1>
    <?php
    //Solo un archivo
    $directorio = 'archivos/';
    //__DIR__
    $subir_archivo = $directorio.basename($_FILES['subir_archivo']['name']);

    echo "<div>";
    if (move_uploaded_file($_FILES['subir_archivo']['tmp_name'], $subir_archivo)) {
        echo "El archivo es válido y se cargó correctamente.<br><br>";
        //echo"<a href='".$subir_archivo."' target='_blank'><img src='".$subir_archivo."' width='150'></a>";
        var_dump($_FILES);
    } else {
        echo "La subida ha fallado";
        var_dump($_FILES);
    }
    echo "</div>";
    ?>
    <br>



</div>
</body>
</html>