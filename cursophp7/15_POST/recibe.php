<?php
if (isset($_POST["submit"])){
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    echo sprintf('Datos enviados: %s %s', $email, $password);
}