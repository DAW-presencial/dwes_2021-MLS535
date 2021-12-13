<?php
require_once('Connect.php');
$db = new Connect();

// Update Query (Method 1 - named placeholder)
$db->query("UPDATE `agenda` SET `nombres`=:nombres WHERE id=:id");
$db->bind(':nombres', 'Audi 2');
$db->bind(':id', 1);
$db->execute();
$update1 = $db->rowCount();

// Update Query (Method 2 - positional placeholder)
$db->query("UPDATE `agenda` SET `nombres`=? WHERE id=?");
$db->execute(array('BMW 2', 2));
$update2 = $db->rowCount();

$db->close(); // Database connection is closed
echo "Method 1 - named placeholder<br />";
echo $update1;
echo "<br />";
echo "Method 2 - positional placeholder<br />";
echo $update2;