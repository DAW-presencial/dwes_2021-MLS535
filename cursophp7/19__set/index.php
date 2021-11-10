<?php
//nos permite establecer una nueva propiedad accediendo con el __set sin necesidad de realizar setter y getters y nos permite acceder a una clase protegida. Con este set permite añadir propiedades de manera dinamica.

class coche{
    protected $piezas =[];

    public function __set(string $name,string $value)
{
        $this->piezas[$name] = $value;
}

}

$coche = new Coche();
$coche-> ruedas=4;
var_dump($coche);