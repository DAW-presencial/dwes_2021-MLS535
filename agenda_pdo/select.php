<?php
require_once('Connect.php');
$db = new Connect();

// Select Query of One Record (Method 1 - named placeholder)
$db->query("SELECT * FROM `agenda` WHERE id=:id");
$db->bind(':id', 1);
$agenda = $db->result();

// Select Query of One Record (Method 2 - positional placeholder)
$db->query("SELECT * FROM `agenda` WHERE id=?");
$agenda2 = $db->result(array(2));

$db->close(); // Database connection is closed

if( !empty($agenda) )
{
    echo "Method 1 - named placeholder<br />";
    echo $agenda['nombres'] ." ". $agenda['telefono'];
    echo "<br />";
}
if( !empty($agenda2) )
{
    echo "Method 2 - positional placeholder<br />";
    echo $agenda2['nombres'] ." ". $agenda2['telefono'];
}