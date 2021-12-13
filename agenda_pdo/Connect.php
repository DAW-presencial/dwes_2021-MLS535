
<?php
//https://www.allphptricks.com/php-crud-pdo-prepared-statements/
class Connect
{
private $db_host = '127.0.0.1';
private	$db_name = 'agenda_mladaria';
private $db_user = 'root';
private	$db_pass = '';

private $dbh;
private $error;
private $stmt;

public function __construct()
{
//Set DSN (Data Source Name)
$dsn = 'pgsql:host='.$this->db_host.';dbname='.$this->db_name;
$db_options = array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
try
{
$this->dbh = new PDO($dsn, $this->db_user, $this->db_pass, $db_options);
}
catch(PDOException $e)
{
echo $this->error = $e->getMessage();
}
}

public function query($query)
{
$this->stmt = $this->dbh->prepare($query);
}

public function bind($param, $value, $type = null)
{
if(is_null($type))
{
switch(true)
{
case is_int($value);
$type = PDO::PARAM_INT;
break;
case is_bool($value);
$type = PDO::PARAM_BOOL;
break;
case is_null($value);
$type = PDO::PARAM_NULL;
break;
default;
$type = PDO::PARAM_STR;

}
}
$this->stmt->bindValue($param, $value, $type);
}

public function execute($array = null)
{
return $this->stmt->execute($array);
}

public function lastInsertId()
{
return $this->dbh->lastInsertId();
}

public function rowCount()
{
return $this->stmt->rowCount();
}

public function result($array = null)
{
$this->execute($array);
return $this->stmt->fetch();
}

public function resultSet($array = null)
{
$this->execute($array);
return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function close()
{
return $this->dbh = null;
}

}
// End Database Class