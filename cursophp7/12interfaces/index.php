<?php

interface crudInterface{

    public function get(): string;
    public function find(int $id): string;
    public function  create (array $array): string;
    public function  update (array $array): string;
    public function delete(int $id): string;
}

class crud implements crudInterface{

    public function get(): string
    {
       return "obtener usuarios";
    }

    public function find(int $id): string
    {
        return "obtener usuario de id";
    }

    public function create(array $array): string
    {
        return serialize($array);
    }

    public function delete(int $id): string
    {
      return "eliminar el usuario con id {$id}";
    }

    public function update(array $array): string
    {
        return serialize($array);
    }
}

$crud = new crud();
echo $crud->get();
echo "<br/>";
echo $crud->find(1);
echo "<br/>";
echo $crud->create(["Maite", 26]);
echo "<br/>";
echo $crud->update([1,"Maite", 26]);
echo "<br/>";
echo $crud->delete(1);