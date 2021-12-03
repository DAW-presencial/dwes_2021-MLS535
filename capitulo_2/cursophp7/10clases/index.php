<?php

error_reporting(E_ALL);
ini_set('display_errors','1');


abstract class UsuarioAbstracto{

    abstract public function edad(int $edad): int;

    public function nombre(string $nombre): string{
        return $nombre;
    }
    public function apellido(string $apellido): string{
        return $apellido;
    }
}

class Usuari extends UsuarioAbstracto{

    public function edad(int $edad): int
    {
        return $edad;
    }
}


$usuario =new Usuari();

echo $usuario->apellido("Ladaria");
echo '<br/>';
echo sprintf('%s %s %d' , $usuario->nombre('Maite',),
                             $usuario->apellido('Ladaria',),
                             $usuario->edad(26)

);
