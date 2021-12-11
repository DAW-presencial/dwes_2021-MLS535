<?php
if (isset($_GET['id'])){
    $id=intval($_GET['id']);
} else {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACTUALIZAR USUARIOS</title>
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
                <div class="col-sm-8"><h2>Editar <b>Cliente</b></h2></div>
                <div class="col-sm-4">
                    <a href="index.php" class="boton"><i class="fa fa-arrow-left"></i> Regresar</a>
                </div>
            </div>
        </div>
        <?php

        include ("database.php");
        $clientes= new Database();

        if(isset($_POST) && !empty($_POST)){
            $nombres = $clientes->sanitize($_POST['nombres']);
            $apellidos = $clientes->sanitize($_POST['apellidos']);
            $telefono = $clientes->sanitize($_POST['telefono']);
            $id_cliente=intval($_POST['id_cliente']);
            $res = $clientes->update($nombres, $apellidos, $telefono,$id_cliente);
            if($res){
                $message= "Datos actualizados con éxito";
                $class="alert alert-success";

            }else{
                $message="No se pudieron actualizar los datos";
                $class="alert alert-danger";
            }

            ?>
            <div class="<?php echo $class?>">
                <?php echo $message;?>
            </div>
            <?php
        }
        $datos_cliente=$clientes->single_record($id);
        ?>
        <div class="row">
            <form method="post">
                <div class="col-md-6">
                    <label>Nombres:</label>
                    <input type="text" name="nombres" id="nombres" class='form-control' maxlength="100" required  value="<?php echo $datos_cliente->nombres;?>">
                    <input type="hidden" name="id_cliente" id="id_cliente" class='form-control' maxlength="100"   value="<?php echo $datos_cliente->id;?>">
                </div>
                <div class="col-md-6">
                    <label>Apellidos:</label>
                    <input type="text" name="apellidos" id="apellidos" class='form-control' maxlength="100" required value="<?php echo $datos_cliente->apellidos;?>">
                </div>
                <div class="col-md-6">
                    <label>Teléfono:</label>
                    <input type="text" name="telefono" id="telefono" class='form-control' maxlength="15" required value="<?php echo $datos_cliente->telefono;?>">
                </div>

                <div class="col-md-12 pull-right">
                    <hr>
                    <button type="submit" class="boton">Actualizar datos</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>