<?php

//clases anonimas
class Usuar{
    protected $database;
    public function __construct($database)
    {
        $this->database=$database;
    }

    public function select(): string{
        return $this->database->select();
    }

}
//clase anonima
$usuario = new Usuar(
    new class {
        public function select(): string{
            return 'CONSULTA SELECT DE USUARIOS';
        }
    }
);

echo $usuario->select();