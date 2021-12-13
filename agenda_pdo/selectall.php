<?php
require_once('Connect.php');
$db = new Connect();

// Select Query of All Records
$db->query("SELECT * FROM `agenda`");
$agenda = $db->resultSet();

$db->close(); // Database connection is closed

if( !empty($agenda) )
{
    foreach($agenda as $contactos)
    {
        echo $contactos['nombres'] ." ". $contactos['telefono'];
        echo "<br />";
    }
}