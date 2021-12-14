<?php
include("config/db.php");
$usuarios= new db();
if(!empty($_POST["add_record"])) {
	$sql = "INSERT INTO agenda ( nombres, apellidos, telefono ) VALUES ( :nombres, :apellidos, :telefono )";

    $pdo_statement = $usuarios->connect_db()->prepare( $sql );
		
	$result = $pdo_statement->execute( array( ':nombres'=>$_POST['nombres'], ':apellidos'=>$_POST['apellidos'], ':telefono'=>$_POST['telefono'] ) );
	if (!empty($result) ){
	  header('location:index.php');
	}
}
?>
<html>
<head>
<title>Añadir un nuevo usuario</title>
<style>
body{width:615px;font-family:arial;letter-spacing:1px;line-height:20px;}
.button_link {color:#FFF;text-decoration:none; background-color:black;padding:10px;}
.frm-add {border: #c3bebe 1px solid;
    padding: 30px;}
.demo-form-heading {margin-top:0px;font-weight: 500;}	
.demo-form-row{margin-top:20px;}
.demo-form-field{width:300px;padding:10px;}
.demo-form-submit{color:#FFF;background-color:#414444;padding:10px 50px;border:0px;cursor:pointer;}
</style>
</head>
<body>
<div style="margin:20px 0px;text-align:right;"><a href="index.php" class="button_link">Volver a la lista</a></div>
<div class="frm-add">
<h1 class="demo-form-heading">Añadir un nuevo usuario</h1>
<form name="frmAdd" action="" method="POST">
  <div class="demo-form-row">
	  <label>Nombre: </label><br>
	  <input type="text" name="nombres" class="demo-form-field" required />
  </div>
  <div class="demo-form-row">
	  <label>Apellido: </label><br>
      <input type="text" name="apellidos" class="demo-form-field" required />
  </div>
  <div class="demo-form-row">
	  <label>Telefono: </label><br>
	  <input type="number" name="telefono" class="demo-form-field" required />
  </div>
  <div class="demo-form-row">
	  <input name="add_record" type="submit" value="Añadir" class="demo-form-submit">
  </div>
  </form>
</div> 
</body>
</html>