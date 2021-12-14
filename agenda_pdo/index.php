<?php
include_once 'clase/agenda.php';
$obj = new agenda()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AGENDA USUARIOS</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <style>
        *{
            font-family: Arial,sans-serif;
        }

        table{
            border:solid black;
            margin: 25px;
        }

        .boton{
            padding: 1rem;
            background-color: cornflowerblue;
            margin:1.5rem;
            border-radius: 20px;
            color: white;
            text-decoration: none;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8"><h2>Listado de la <b>AGENDA</b></h2></div>
                <div class="col-sm-4">
                    <a href="create.php" class="boton" ><i class="fa fa-plus"></i> Agregar cliente</a>
                </div>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
            </thead>

            <tbody>
            <?php

        foreach($obj->Listar() as $r): ?>
            <tr>
                <td><?php echo $id =$r->id; ?></td>
                <td><?php echo $r->nombres; ?></td>
                <td><?php echo $r->apellidos; ?></td>
                <td><?php echo $r->telefono; ?></td>
                <td>
                <tr>
                    <td>
                        <a href="update.php?id=<?php echo $id;?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a href="<?php $obj->Eliminar($id) ;?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                    </td>
                </tr>
        <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>