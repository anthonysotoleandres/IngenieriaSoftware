<?php  // Controladores/empleadosC.php
class TareasC {
    function __construct(){
        $this->TareasM = new TareasM();
    }
    // registrar tareas
    public function registrarTareasC(){
        if(isset($_POST['tituloR'])){
            $datosC =array();
            $datosC['titulo'] = $_POST['tituloR'];
            $datosC['contenido'] = $_POST['contenidoR'];
            $datosC['fecha_registro'] = $_POST['fecha_registroR'];
            $datosC['fecha_vencimiento'] = $_POST['fecha_vencimientoR'];
            $datosC['prioridad'] = $_POST['prioridadR'];
            $datosC['estado'] = $_POST['estadoR'];

            $resultado = $this->TareasM->registrarTareasM($datosC);
         
            header('location: index.php?ruta=tareas');

        }
    }

    //mostrar taraeas publicas
    public function mostrarTareasC(){
        $resultado = $this->TareasM->mostrarTareasM();
        return $resultado;


    }
    //mostrar tareas privadas
    public function mostrarTareasPrivateC(){
        $resultado = $this->TareasM->mostrarTareasPrivateM();
        return $resultado;


    }
    //borrar tareas privadas
    public function borrarTareasPrivadasC(){
        if(isset($_GET['titulo'])){
            $datosC = array();
            $datosC['titulo_3'] = $_GET['titulo'];
            $resultado=$this->TareasM->borrarTareasPrivadasM($datosC);
            header('location: index.php?ruta=tareasprivate');
        }
    }

    //editar empleados*****
    public function editarTareasC(){
        if(isset($_GET['titulo'])){
            $datosC = array('titulo'=>$_GET['titulo']);
            $resultado = $this->TareasM->editarTareasM($datosC);
            $rows = $resultado->fetch_array(MYSQLI_ASSOC);
            return $rows;
        }
    }

    //actualizar empleados
    public function actualizarTareasC(){
        if(isset($_POST['tituloE'])){
            $datosC =array();
            $datosC['titulo_1'] = $_POST['tituloE'];
            $datosC['titulo'] = $_POST['tituloR'];
            $datosC['contenido'] = $_POST['contenidoR'];
            $datosC['fecha_registro'] = $_POST['fecha_registroR'];
            $datosC['fecha_vencimiento'] = $_POST['fecha_vencimientoR'];
            $datosC['prioridad'] = $_POST['prioridadR'];
            $datosC['estado'] = $_POST['estadoR'];

            $resultado = $this->TareasM->actualizarTareasM($datosC);
            header("location: index.php?ruta=tareas");
        }
    }

    //borrar empleado
    public function borrarTareasC(){
        if(isset($_GET['titulo'])){
            $datosC = array();
            $datosC['titulo_2'] = $_GET['titulo'];
            $resultado=$this->TareasM->borrarTareasM($datosC);
            header('location: index.php?ruta=tareas');
        }
    }

    //agregar comentarios
    public function agregarComentariosC(){
        if(isset($_POST['comentarioC'])){
            $datosC =array();
            $datosC['comentario'] = $_POST['comentarioC'];

            $resultado = $this->TareasM->agregarComentariosM($datosC);

            header("location: index.php?ruta=tareas");
        }
    }

}

      

?>