<?php
//variables de tipo GET. Permite pasar datos a la url y que se pueden modificar Y NOS PERMITE VER LOS PARAMETROS DE LA URL

$cupon= filter_var($_GET['cupon'], FILTER_SANITIZE_STRING) ?? 'CODIGO';
if (!$cupon){
    var_dump("No hay cupon");
}
echo $cupon;
echo "<br/>";
$usuario= filter_var($_GET['usuario'], FILTER_SANITIZE_STRING) ?? 'CODIGO';
if (!$usuario){
    var_dump("No hay Usuario");
}
echo $usuario;
