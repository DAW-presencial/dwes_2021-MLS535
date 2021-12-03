<?php
function obtieneFactorial($numero){
    $factorial = 1;
    for ($i = 1; $i <= $numero; $i++){
        $factorial = $factorial * $i;
    }
    return $factorial;
}

//Ejemplo
$numero = 170;
$resultado = obtieneFactorial($numero);
echo "Factorial de $numero  = $resultado";
?>