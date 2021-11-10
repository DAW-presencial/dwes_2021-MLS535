<?php
//Una constante nunca cambia y no es posible cambiar ese valor. Las credenciales siempre van a ser las mismas.
//site_name seria la constante y cursosdesarrolloweb seria la variable.
define('SITE_NAME', 'cursosdesarrolloweb');
//ACCEDIENDO A LA CONSTANTE
echo SITE_NAME;

const TECNOLOGIAS = [
    "php", "js", "vuejs", "laravel"
];
echo '<br>';
echo TECNOLOGIAS[0];
echo '<pre>';
var_dump(TECNOLOGIAS);
echo '</pre>';