<!-- decirle al usuario donde esta ubicado dentro del sitio ej home/contactos-->
<div class="breadcrumb alert alert-info alert-dismissible fade show" role="alert">
    <i class="fa-solid fa-triangle-exclamation"></i>&nbsp;&nbsp;
    <strong>
        <a class="btnCitas" href="?c=Cita">Citas &nbsp;&nbsp;</a>
    </strong>
    <li class="active"><?php echo $alm->id_cita != null ? $alm->nombre : ' Usted va a agregar una nueva cita'; ?></li>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>



<form class="container-fluid row g-3 needs-validation py-3"  action="?c=Cita&a=Guardar" method="post" enctype="multipart/form-data" >
    <input type="hidden" name="id_cita" value="<?php echo $alm->id_cita; ?>" />

    <div class="col-md-6">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $alm->nombre; ?>" class="form-control" placeholder="Ingrese su nombre y Apellido" autofocus data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="col-md-6">
        <label>Documento:</label>
        <input type="text" name="documento" value="<?php echo $alm->documento; ?>" class="form-control" placeholder="Ingrese su documento" data-validacion-tipo="requerido|min:7" />
    </div>
    
    <div class="col-md-6">
        <label>Fecha de cita:</label>
        <input type="datetime-local" name="fecha_actual" value="<?php echo $alm->fecha_actual; ?>" class="form-control" placeholder="Ingrese la fecha cita" data-validacion-tipo="requerido|date" />
    </div>
    
    <div class="col-md-6">
        <label>Consulta:</label>
        <input type="text" name="consulta" value="<?php echo $alm->consulta; ?>" class="form-control" placeholder="Ingrese tipo consulta" data-validacion-tipo="requerido|min:8" />
    </div>
    <br><br>
    <br><br>
    <div class="text-right">
        <a class="btn btn-info btnRegresar" href="?c=Cita"> 
            <i class="fa-solid fa-circle-arrow-left"></i>&nbsp;&nbsp; Regresar
        </a>

        <button class="btn btn-success btnGuardar">
            <i class="fa-regular fa-floppy-disk"></i>&nbsp;&nbsp; Guardar
        </button>
    </div>
</form>

<!--validaciones campos ...en php validate que valida email numero telefono esta hecha en php-->
<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>

