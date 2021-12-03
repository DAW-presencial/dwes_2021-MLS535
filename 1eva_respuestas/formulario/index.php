
<dl>
    <dt>First name</dt><dd><?php echo $_POST["name"]?></dd>
    <dt>Last name</dt><dd><?php echo $_POST["apellido"]?></dd>
    <dt>Last name</dt><dd><?php echo $_POST["date"]?></dd>

</dl>
<?php

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
?>