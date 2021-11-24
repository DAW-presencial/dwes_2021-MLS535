<?php
//Metodo magico get nos permite acceder a propiedades que están en un ambito privado o protegidas

class kProducto{
    protected $nombre;
    protected $qty;

    /**
     * @return mixed
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param mixed $qty
     */
    public function setQty( int $qty)
    {
        $this->qty = $qty;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

//metodo mágico get nos permite acceder desde fuera como lo estamos haciendo en la linea 40
        public function __get(string $name)
     {
    if (!property_exists($this, $name)){
        die("la propiedad {$name} no existe");
    }
    return $this->{$name};
     }


}

$producto =new Producto();
$producto->setNombre("Producto 1");
$producto->setQty("25");
echo "<b>Con getter:</b>";
echo "<br>";
echo $producto->getQty();
echo "<br>";
echo $producto->getNombre();
echo "<br>";
echo "<b>Con el metodo mágico __get: </b>";
echo "<br>";
echo $producto->nombre;
echo "<br>";
echo $producto->qty;
