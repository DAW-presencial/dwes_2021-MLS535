
<?php
include_once 'clase/agenda.php';
$agenda = new agenda();
echo $agenda->id != null ? $agenda->nombres : 'Nuevo Registro'; ?>


<ol class="breadcrumb">
    <li><a href="?c=cliente">Cliente</a></li>
    <li class="active"><?php echo $agenda->id != null ? $agenda->nombres : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=cliente&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $agenda->id; ?>" />


    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombre" value="<?php echo $agenda->nombres; ?>" class="form-control" placeholder="Ingrese su nombre" required>
    </div>

    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="Apellido" value="<?php echo $agenda->apellidos; ?>" class="form-control" placeholder="Ingrese su apellido" required>
    </div>

    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="telefono" value="<?php echo $agenda->telefono; ?>" class="form-control" placeholder="Ingrese su telefono" required>
    </div>


    <hr />

    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>