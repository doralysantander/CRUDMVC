            <div class="row">
                <div class="col-xs-12">
                    <br>
                    <footer>
                        
                    </footer>                
                </div>    
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
        <!-- <script src="/assets/datatable_intro/jquery/jquery.min.js"></script>
        <script src="/assets/datatable_intro/popper/popper.min.js"></script>
        <script src="/assets/datatable_intro/bootstrap/js/bootstrap.min.js"></script> -->

        <script type="text/javascript" src="/assets/datatable_intro/dataTables/datatables.min.js"></script>
        <script type="text/javascript" src="/assets/datatable_intro/main.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        
        <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    //para canbiar el lenguaje a español
                    "language": {
                        "lengthMenu": "Mostrar _MENU_ registros por página",
                        "zeroRecords": "No se encontraron resultados en su búsqueda",
                        "searchPlaceholder": "Buscar registros",
                        "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
                        "infoEmpty": "No existen registros",
                        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                        "search": "Buscar:",
                        "oPaginate": {
                            "sFirst": "Primero",
                            "sLast": "Último",
                            "sNext": "Siguiente",
                            "sPrevious": "Anterior"
                        }, 
                    }
                } );
            });
        </script>

</body>
</html>