<?php
include("config/db.php");
$usuarios = new db();

?>
<html>
<head>
<title>Agenda de usuarios Maite Ladaria</title>
<style>
body{width:615px;font-family:arial;letter-spacing:1px;line-height:20px;}
.tbl-qa{width: 100%;font-size:0.9em;background-color: #f5f5f5;}
.tbl-qa th.table-header {padding: 5px;text-align: left;padding:10px;}
.tbl-qa .table-row td {padding:10px;background-color: #FDFDFD;vertical-align:top;}
.button_link {color:#FFF;text-decoration:none; background-color:black;padding:10px;}
</style>
</head>
<body>
<?php	
	$pdo_statement = $usuarios->connect_db()->prepare("SELECT * FROM agenda ORDER BY id DESC");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
?>
<div style="text-align:right;margin:20px 0px;"><a href="add.php" class="button_link"><img src="crud-icon/add.png" title="Add New Record" style="vertical-align:bottom;" /> Crear</a></div>
<table class="tbl-qa">
  <thead>
	<tr>
	  <th class="table-header" width="20%">Nombre</th>
	  <th class="table-header" width="40%">Apellido</th>
	  <th class="table-header" width="20%">Telefono</th>
	  <th class="table-header" width="5%">Acciones</th>
	</tr>
  </thead>
  <tbody id="table-body">
	<?php
	if(!empty($result)) { 
		foreach($result as $row) {
	?>
	  <tr class="table-row">
		<td><?php echo $row["nombres"]; ?></td>
		<td><?php echo $row["apellidos"]; ?></td>
		<td><?php echo $row["telefono"]; ?></td>
		<td><a class="ajax-action-links" href='edit.php?id=<?php echo $row['id']; ?>'>Editar<img src="crud-icon/edit.png" title="Edit" /></a> <a class="ajax-action-links" href='delete.php?id=<?php echo $row['id']; ?>'>Eliminar<img src="crud-icon/delete.png" title="Delete" /></a></td>
	  </tr>
    <?php
		}
	}
	?>
  </tbody>
</table>
</body>
</html>