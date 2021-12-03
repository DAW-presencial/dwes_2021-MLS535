<?php
error_reporting(0);
session_start();
if (!isset($_COOKIE["usuario"]) && isset($_SESSION["nombre"])) {
    session_destroy();
} else if (!isset($_SESSION["usuario"]) && !isset($_COOKIE["usuario"])) {
    header("location: login.php");
}
$_SESSION["nombre"] = $_COOKIE["usuario"];
?>

<!--<dl>-->
<!--    <dt>Nombre</dt><dd>--><?php //echo $_POST["name"]?><!--</dd>-->
<!--    <dt>Apellido</dt><dd>--><?php //echo $_POST["apellido"]?><!--</dd>-->
<!--    <dt>Date</dt><dd>--><?php //echo $_POST["date"]?><!--</dd>-->
<!--</dl>-->


