<?php
require_once("db.php");
$usuarios= new db();
$pdo_statement=$usuarios->connect_db()->prepare("delete from clientes where id=" . $_GET['id']);
$pdo_statement->execute();
header('location:index.php');
?>