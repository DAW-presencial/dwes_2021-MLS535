<?php
error_reporting(E_ALL);
ini_set('display_errors','1');

class Database{
    public $name ="pruebas";

    public function __construct(){

    }

    public function select(): string{
        return "SELECT * FROM usuarios";
    }
}

class Usuarios{
    protected $database;


    public function __construct(Database $database){
        $this->database =$database;
    }

    public function selectUsuario(): string{
        return $this->database->select();
    }

    //metodos magicos ponerlos al final de la clase
    public function __toString(){

        return serialize($this->database);
    }
}

$database = new Database;
$usuario =new Usuarios($database);
var_dump($usuario);
echo $usuario ->selectUsuario();