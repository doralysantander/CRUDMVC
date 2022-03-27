<div class="">
    <!-- c es = cita y a=crud, para darles valor de al c y a-->
    <a class="btn btn-info btnAgregar" href="?c=Cita&a=Crud"> 
        <i class="fa-solid fa-file-circle-plus"></i>&nbsp; Agregar cita
    </a>

    <a class="btn btn-dark btnGit" href="https://github.com/doralysantander/Crud-Consultorio"  target="_blank" > 
        <i class="fa-brands fa-github"></i>&nbsp; Ir a repositorio de Git
    </a>
</div>

<div class="row py-5 m-auto;">
    <div class="col-lg-12">
        <div class="table-responsive container-fluid display compact ">
            <table id="example" class="hover display compact " style="width:100%">
                <thead style="background-color: #e3f2fd;">
                    <tr>
                        <th>Nombres</th>
                        <th>Documento</th>
                        <th>Fecha de cita</th>
                        <th >Consulta</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!--invocando el metodo listar que esta en model cita, los datos de listar guarga en $r -->
                <?php foreach($this->model->Listar() as $r): ?>
                    <tr>
                        <td><?php echo $r->nombre; ?></td>
                        <td><?php echo $r->documento; ?></td>
                        <td><?php echo $r->fecha_actual; ?></td>
                        <td><?php echo $r->consulta; ?></td>

                        <td>
                            <a class="btn btn-outline-success" href="?c=Cita&a=Crud&id_cita=<?php echo $r->id_cita; ?>">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                            <a class="btn btn-outline-danger" href="?c=Cita&a=Eliminar&id_cita=<?php echo $r->id_cita; ?>">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table> 
        </div>
    </div>
</div>
