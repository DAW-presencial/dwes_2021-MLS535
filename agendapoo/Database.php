<?php
class Database{
    private $con;
    private $dbhost="localhost";
    private $dbuser="root";
    private $dbpass="";
    private $dbname="agenda_prueba";
    function __construct(){
        $this->connect_db();
    }

    public function connect_db(){
        $this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
        if(mysqli_connect_error()){
            die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
        }
    }

    public function sanitize($var){
        $return = mysqli_real_escape_string($this->con, $var);
        return $return;
    }
    public function create($nombres,$apellidos,$telefono){
        $sql = "INSERT INTO `clientes` (nombres, apellidos, telefono) VALUES ('$nombres', '$apellidos', '$telefono')";
        $res = mysqli_query($this->con, $sql);
        if($res){
            return true;
        }else{
            return false;
        }
    }
    public function read(){
        $sql = "SELECT * FROM `clientes`";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    public function single_record($id){
        $sql = "SELECT * FROM `clientes` where id='$id'";
        $res = mysqli_query($this->con, $sql);
        $return = mysqli_fetch_object($res );
        return $return ;
    }
    public function update($nombres,$apellidos,$telefono, $id){
        $sql = "UPDATE `clientes` SET nombres='$nombres', apellidos='$apellidos', telefono='$telefono' WHERE id=$id";
        $res = mysqli_query($this->con, $sql);
        if($res){
            return true;
        }else{
            return false;
        }
    }
    public function delete($id){
        $sql = "DELETE FROM clientes WHERE id=$id";
        $res = mysqli_query($this->con, $sql);
        if($res){
            return true;
        }else{
            return false;
        }
    }
}
