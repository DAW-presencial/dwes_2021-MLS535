<?php

//el metodo magico __call nos permite acceder a metodos(funciones) que no son accesibles.

class Logger{
    public function message(Shop $shop){
        print_r($shop->getMessage());
    }
}

class Shop{
    protected $logger;
    public function __construct(Logger $logger)
    {
        $this->logger=$logger;
    }

    public function getMessage(): string{
        return  "Nuevo mensaje";
    }
//capturar un metodo si existe o no existe
    public function __call($name, $arguments)
    {
        if (method_exists($this->logger, $name)){
            return $this->logger->{$name}($this);
        }
        else{
            echo "El metodo {$name} no existe";
        }
    }
}

$shop= new Shop(new Logger());
var_dump($shop);
//si queremos capturar este metodo dentro de logger tendriamos que utilizar call
echo $shop->message();
echo "<br>";
echo $shop->othermessage();