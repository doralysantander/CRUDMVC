<?php
require_once 'Model/cita.php';// es como traer el codigo 
//crear un clase citacontroller por que estamos trabajando con cita una buena practica citacontroller
class CitaController{
    // para la instanciacion de la clase
    private $model;
    
    public function __CONSTRUCT(){
        // a esa variable model le instanciamos la clase Cita
        $this->model = new Cita();
    }
    public function Home(){
        require_once 'View/header.php';
        require_once 'View/home.php';
        require_once 'View/footer.php';
    }

    // funcion inserta el encabezado, cuerpo y el footer
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/cita.php';
        require_once 'View/footer.php';
    }
    // el crud permite crear esa nueva cita y trabajar con los parametrso que tenga
    public function Crud(){
        $alm = new Cita();
        //$_REQUEST se utiliza para leer el formulario, en este caso que esta en cita-editar 
        if(isset($_REQUEST['id_cita'])){
            $alm = $this->model->getting($_REQUEST['id_cita']);
        }
        
        require_once 'View/header.php';
        require_once 'View/cita-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new Cita();
        // captura todos los datos que hay formulario y los pasa bd
        $alm->id_cita = $_REQUEST['id_cita'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->documento = $_REQUEST['documento'];
        $alm->fecha_actual = $_REQUEST['fecha_actual'];
        $alm->consulta = $_REQUEST['consulta'];
      

        // SI ID PERSONA ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA PERSONA, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->id_cita > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);

       //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->idpersona > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/
        //redireccionar de nuevo al index
        header('Location: index.php');
    }
    
    public function Eliminar(){
        //captura e id y llama al metodo eliminar
        $this->model->Eliminar($_REQUEST['id_cita']);
        //lo redirecciona
        header('Location: index.php');
    }
}
