<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear usuarios</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <style>
       *{
           font-family: Arial,sans-serif;
       }

       .boton{
           padding: 1rem;
           background-color: cornflowerblue;
           margin:1.5rem;
           border-radius: 20px;
           color: white;
           text-decoration: none;
       }
       form{
           margin: 1.5rem;
       }
       input{
           margin: 0.5rem;
       }
   </style>

</head>
<body>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8"><h2>Agregar <b>Cliente</b></h2></div>
                <div class="col-sm-4">
                    <a href="index.php" class="boton"><i class="fa fa-arrow-left"></i> Regresar</a>
                </div>
            </div>
        </div>

        <div class="row">
            <form method="post">
                <div class="col-md-6">
                    <label>Nombres:</label>
                    <input type="text" name="nombres" id="nombres" class='form-control' maxlength="100" required >
                </div>

                <div class="col-md-6">
                    <label>Apellidos:</label>
                    <input type="text" name="apellidos" id="apellidos" class='form-control' maxlength="100" required>
                </div>

                <div class="col-md-6">
                    <label>Teléfono:</label>
                    <input type="text" name="telefono" id="telefono" class='form-control' maxlength="15" required >
                </div>

                <div class="col-md-12 pull-right">
                    <hr>
                    <button type="submit" class="boton">Guardar datos</button>
                </div>
            </form>
            <?php
            include ("database.php");
            $clientes= new Database();
            if(isset($_POST) && !empty($_POST)){
                $nombres = $clientes->sanitize($_POST['nombres']);
                $apellidos = $clientes->sanitize($_POST['apellidos']);
                $telefono = $clientes->sanitize($_POST['telefono']);

                $res = $clientes->create($nombres, $apellidos, $telefono);
                if($res){
                    $message= "Datos insertados con éxito";
                    $class="alert alert-success";
                }else{
                    $message="No se pudieron insertar los datos";
                    $class="alert alert-danger";
                }

                ?>
                <div class="<?php echo $class?>">
                    <?php echo $message;?>
                </div>
                <?php
            }

            ?>
        </div>
    </div>
</div>
</body>
</html>