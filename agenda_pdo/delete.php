<?php
require_once('Connect.php');
$db = new Connect();

// Delete Query (Method 1 - named placeholder)
$db->query("DELETE FROM `agenda` WHERE id=:id");
$db->bind(':id', 1);
$db->execute();
$delete1 = $db->rowCount();

// Delete Query (Method 2 - positional placeholder)
$db->query("DELETE FROM `agenda` WHERE id=?");
$db->execute(array(2));
$delete2 = $db->rowCount();

$db->close(); // Database connection is closed
echo "Method 1 - named placeholder<br />";
echo $delete1;
echo "<br />";
echo "Method 2 - positional placeholder<br />";
echo $delete2;