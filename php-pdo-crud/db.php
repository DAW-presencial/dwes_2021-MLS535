<?php
class db{
    private $db_host = 'localhost';
    private	$db_name = 'agenda_prueba';
    private $db_user = 'root';
    private	$db_pass = '';
   // private $port = "5432";

  public function __construct()
  {
      $this->connect_db();
  }

    public function connect_db(){
//        $database_username = 'root';
//        $database_password = '';
//        $pdo_conn = new PDO( 'mysql:host=localhost;dbname=agenda_pruebas', $database_username, $database_password );
        try {
            $baseDeDatos = new PDO('mysql:host=' . $this->db_host .';dbname=' . $this->db_name, $this->db_user, $this->db_pass);
            $baseDeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $baseDeDatos;

//        $pdo=new PDO("{$this->driver}:host={$this->host};dbname={$this->dbName};charset={$this->charset}", $this->user, $this->pass);
//        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        return $pdo;
        } catch (PDOException $e) {
//        echo "Ocurrió un error con la base de datos <br>";
//        echo $this->error = $e->getMessage();
//        return $e;
            die($e->getMessage());
        }
    }

}

?>