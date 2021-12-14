
<?php
//https://codigofacilito.com/articulos/articulo_16_10_2019_19_05_09
class Connect
{
private $db_host = 'mladaria.ifc33b.cifpfbmoll.eu';
private	$db_name = 'agenda_mladaria';
private $db_user = 'mladaria_usr';
private	$db_pass = 'abc123.';
private $port = "5432";

//private $dbh;
//private $error;
//private $stmt;
//
//    private $driver="pgsql";
//    private $host ="127.0.0.1";
//    private $user="mladaria_usr";
//    private $pass='abc123.';
//    private $dbName="agenda_mladaria";
//    private $charset="utf8";

//public function __construct()
//{
//}

//    public function conexion()
//{
////Set DSN (Data Source Name)
//    try {
//        $baseDeDatos = new PDO('pgsql:host=' . $this->db_host . ';port=' . $this->port . ';dbname=' . $this->db_name, $this->db_user, $this->db_pass);
//        $baseDeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        return $baseDeDatos;
//
////        $pdo=new PDO("{$this->driver}:host={$this->host};dbname={$this->dbName};charset={$this->charset}", $this->user, $this->pass);
////        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
////        return $pdo;
//    } catch (PDOException $e) {
////        echo "Ocurrió un error con la base de datos <br>";
////        echo $this->error = $e->getMessage();
////        return $e;
//        die($e->getMessage());
//    }
//}
    public static function StartUp()
    {
        $pdo = new PDO('pgsql:host=localhost;dbname=agenda_mladaria;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

}
// End Database Class