<?php
require_once("config/db.php");
$usuarios= new db();
$pdo_statement=$usuarios->connect_db()->prepare("delete from agenda where id=" . $_GET['id']);
$pdo_statement->execute();
header('location:index.php');
?>