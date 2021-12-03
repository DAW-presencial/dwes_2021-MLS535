<?php
error_reporting(E_ALL);
ini_set('display_errors','1');

class Usuario{
    /**
     * @var int
     */
    public $id;
    /**
     * @var array
     */
    public $usuarios;

    public function __construct(int $id){
        $this->id= $id; //inicializamos la variable para que se pueda ver
        $this->usuarios=['iparra','mladaria','andres'];
    }

    //definimos un metodo

    public function getNombre(): string{
        return  $this->usuarios[$this->id];
    }

    public function recorrerUsuarios(): string{
        $resultado = "";
        foreach ($this->usuarios as $usuario){
            $resultado .= "<br /> {$usuario}";
        }
        return $resultado;
    }

    public function encontrarUsuario (int $id = null): string{
        return $this->usuarios[$id ?? $this->id];
    }

}

//utilizar una clase
$usuario = new Usuario(1);
//var_dump($usuario);
echo '<br>';
echo $usuario->id;
echo '<br>';
echo $usuario->getNombre();
echo '<br>';
echo $usuario->recorrerUsuarios();
echo '<br>';
echo $usuario->encontrarUsuario(2);