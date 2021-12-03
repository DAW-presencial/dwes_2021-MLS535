<?php

class Padre {
//
    private $prueba = "hola";


    function __get($var) {
        echo  $this->$var;
        return $this->$var;
    }

    function __set($var, $value) {
        if (isset($this->{$var})) {
            return $this->{$var};
        }
        echo "<p>__set: no exite";
    }

}

class Hijo extends Padre {


}

$obj = new Hijo();
@$prueba = $obj->privada;
@$obj->noexiste = 7;