<?php
//creamos clases invocables sin necesidad de definir ningun metodo mñas
class Blog{
    public function __invoke(string  $name)
    {
        echo "El nombre del blog en la clase ". __CLASS__ ."es {$name}";
    }
}

$blog = new Blog();
$blog("Mi blog");
echo "<br>";

var_dump(is_callable($blog));