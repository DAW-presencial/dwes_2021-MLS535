<?php
$usuario = "Maite Ladaria";
echo $usuario;
$usuario = "haciendomagia";
echo "<br>";
echo $usuario;
echo "<br>";

//la coma es un .
$preciocurso= 9.99;
echo "<br>";
$tecnologias = [
    "php", "js", "vuejs", "laravel"
];

echo $tecnologias; //solo mostrará Array
//CON VAR_DUMP NOS MUESTRA EL ARRAY
echo "<pre>";
var_dump($tecnologias);
echo "</pre>";
//acceder al array
echo "<br>";
echo $tecnologias[2];
echo "<br>";
$usuarioObjeto = new stdClass();

//Puntero -> Nos va a permitir definir una propiedad dentro de un objeto
$usuarioObjeto -> nombre = "Maite Ladaria";
$usuarioObjeto -> edad = "26";
var_dump($usuarioObjeto);

//Para poder acceder al nombre del objeto solo tendríamos que hacer lo siguiente
echo $usuarioObjeto->nombre;