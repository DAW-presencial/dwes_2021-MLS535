<?php
require "vendor/autoload.php";

//dispatcher generar la ruta que necesitamos  y atenderá a nuestra solucitud
//Lanzar un servidor php -S localhost:5000

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $route)
{
    $route->addRoute("GET", "/usuario{id}", "getAllusers" );
});

$httpMethod = $_SERVER["REQUEST_METHOD"];

$uri = rawurldecode(parse_url($_SERVER["REQUEST_URI"],  PHP_URL_PATH));

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

var_dump($routeInfo);

switch ($routeInfo[0]){
    case \FastRoute\Dispatcher::NOT_FOUND:
        echo "Ruta no encontrada";
        break;
    case \FastRoute\Dispatcher:: METHOD_NOT_ALLOWED:
        echo "Ruta no permitida";
        break;
    case \FastRoute\Dispatcher:: FOUND:
        $handler = $routeInfo[1];
        $param = $routeInfo[2];
        var_dump($param);
        break;
}

var_dump($uri);
function getAllusers(){
    echo "Obtener todos los usuarios";
}



