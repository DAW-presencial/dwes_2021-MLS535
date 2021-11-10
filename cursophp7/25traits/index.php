<?php
//simular la herencia multiple

trait  Cart{
    protected $cart=[];
}

trait Session{
    public function login(): string{
        return "Has iniciado sesion";
    }
}

class User{
    //el trait pasa a ser como una clase. Simular la herencia multiple en php
    use Cart, Session;

    public function getCart(){
        return $this->cart;
    }
}

$user = new User();

var_dump($user);
echo "\n";
var_dump($user->getCart());
echo "\n";
echo $user->login();