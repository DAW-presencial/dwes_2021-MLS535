<?php


require_once('Connect.php');
$db = new Connect();

// Insert Query (Method 1 - named placeholders)
$db->query("INSERT INTO `agenda` (`nombres`,`apellidos` ,`telefono`) VALUES (:nombres, :telefono)");
$db->bind(":nombres", 'Audi');
$db->bind(":apellidos", 'MCKENCY');
$db->bind(":telefono", '1909');
$db->execute(); // 1 Record Added Successfully
$insert1 = $db->lastInsertId();

$db->bind(":nombres", 'BMW');
$db->bind(":apellidos", 'MCKENCY');
$db->bind(":telefono", '1916');
$db->execute(); // 1 More Record Added Successfully
$insert2 = $db->lastInsertId();

// Insert Query (Method 2 - positional placeholders)
$db->query("INSERT INTO `agenda` (`nombres`,`apellidos`, `telefono`) VALUES (?, ?, ?)");
$db->execute(array('Mercedes', 'Mario','1926')); // 1 Record Added Successfully
$insert3 = $db->lastInsertId();
$db->execute(array('Tesla', 'Paco','2003')); // 1 More Record Added Successfully
$insert4 = $db->lastInsertId();

$db->close(); // Database connection is closed
echo "Method 1 - named placeholder<br />";
echo $insert1 . "<br />";
echo $insert2 . "<br />";
echo "Method 2 - positional placeholder<br />";
echo $insert3 . "<br />";
echo $insert4 . "<br />";