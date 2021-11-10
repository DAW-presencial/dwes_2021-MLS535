<?php
//así hacemos el tipo de retorno de tipo string
function holaMundo(): string {
    return "hola Mundo";
}
//para imprimir lo que hay dentro de la funcion en el retorno
echo holaMundo();

echo "<br/>";

//funcion anonima:

$holamundo = function (): string{
    return "hola Mundo";
};

//hay que invocar la funcion con los parentesis para que aparezca;
echo $holamundo();

echo "<br/>";

function saluda(string $nombre): string{
    return sprintf('Hola %s', $nombre);
}

echo saluda('Maite');
echo "<br/>";

//Si no le pasamos ningun parametro cogerá el valor de Maria
function saludar(string $nombre='Maria'): string{
    return sprintf('Hola %s', $nombre);
}

echo saludar();
echo "<br/>";
//intdiv nos permite retornar el entero de una division. El split operator nos permite pasar numeros varios numeros enteros (...) lo convierte en un array de enteros

function integer_division(...$ints): int {
    return intdiv($ints[0], $ints[1]);
};

echo integer_division(10,4); //devolverá 2.

echo "<br/>";
//intdiv nos permite retornar el entero de una division. El split operator nos permite pasar numeros varios numeros enteros (...) lo convierte en un array de enteros

function recorrer_usuarios(...$usuarios): string {
    $resultado ='';
    foreach ($usuarios as $usuario) {
    $resultado .= "<br/>{$usuario}";
   }
    return $resultado;
}

echo recorrer_usuarios('usuario1', 'usuario2','usuario3');
echo "<br/>";
//List nos permite definir el id, nombre y apellido del array usuariosComplejo.
function recorrer_usuarios_list($usuarios =[]):string{
    $resultado ='';
    foreach ($usuarios as $usuario) {
        list($id,$nombre,$apellido) = $usuario;
        $resultado .= "<br/>{$id},{$nombre},{$apellido}";
    }
    return $resultado;
}
$usuariosComplejo =[
    [1,"Maite","Ladaria"],
    [3, "Luis", "Lobo"],
    [4, "Juan", "Castillo"],
    [5, "Maria", "Berrio"],
];

echo recorrer_usuarios_list($usuariosComplejo);

