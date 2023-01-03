<?php  //Modelos/empleadosM.php
require_once "conexionBD.php";

class TareasM extends ConexionBD{
    function __construct(){
        $this->tablaBD = 'tareas_task';
        $this->tablaBD2 = 'usuarios';
        $this->tablaBD3 = 'private';
        $this->tablaBD4 = 'comentarios';
    }

    public function registrarTareasM($datosC){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $titul = $datosC['titulo'];
        $conteni = $datosC['contenido'];
        $registro = $datosC['fecha_registro'];
        $vencimiento = $datosC['fecha_vencimiento'];
        $priori = $datosC['prioridad'];
        $estado = $datosC['estado'];
        
        if($estado == 'publico'){
            $query = "INSERT INTO $this->tablaBD VALUES 
            ($iduser,'$titul', '$conteni', '$registro', '$vencimiento', '$priori','$estado')";

            $result = $cBD->query($query);
            return $result;
        }
        else{
            $query = "INSERT INTO $this->tablaBD3 VALUES 
            ($iduser,'$titul', '$conteni', '$registro', '$vencimiento', '$priori','$estado')";

            $result = $cBD->query($query);
            return $result;
        }
    }
// mostrar tareas publicas
    public function mostrarTareasM(){
        $cBD = $this->conectarBD();  
        $iduser=$_SESSION['Ingreso'];
        $query = "SELECT usuarios_idusuarios,nombre,titulo,contenido,fecha_registro,fecha_vencimiento,prioridad
                FROM $this->tablaBD INNER JOIN $this->tablaBD2
                on usuarios_idusuarios = id_usuario ";
        $result = $cBD->query($query);
        return $result;
    }
// mostrar tareas privadas

    public function mostrarTareasPrivateM(){
        $cBD = $this->conectarBD();  
        $iduser=$_SESSION['Ingreso'];
        $query = "SELECT nombre,titulo,contenido,fecha_registro,fecha_vencimiento,prioridad
                FROM $this->tablaBD3 INNER JOIN $this->tablaBD2
                usuarios on usuarios_idusuarios = id_usuario  WHERE usuarios_idusuarios=$iduser ";
        $result = $cBD->query($query);
        return $result;
    }




    public function editarTareasM($datosC){
        $cBD = $this->conectarBD();
        $id = $datosC['titulo'];
        $query = "SELECT titulo
                FROM $this->tablaBD WHERE titulo='$id'";
        $result = $cBD->query($query);
        return $result;
    }
//
    public function actualizarTareasM($datosC){
        $cBD = $this->conectarBD();
        $variable=$datosC['titulo_1'];
        $titul = $datosC['titulo'];
        $conteni = $datosC['contenido'];
        $registro = $datosC['fecha_registro'];
        $vencimiento = $datosC['fecha_vencimiento'];
        $priori = $datosC['prioridad'];
        $estado = $datosC['estado'];

        $query = "UPDATE $this->tablaBD
            SET  
            titulo='$titul', 
            contenido='$conteni',
            fecha_registro='$registro',
            fecha_vencimiento='$vencimiento', 
            prioridad='$priori',
            estado='$estado'
            WHERE titulo='$variable'";
        echo $query;
        $resultado = $cBD->query($query);
        return $resultado;    
    }


    public function borrarTareasM($datosC){
        $cBD = $this->conectarBD();
        $conteni = $datosC['titulo_2'];
        $query = "DELETE FROM $this->tablaBD WHERE titulo='$conteni'";
        $resultado = $cBD->query($query);
    }
// borrar tareas private

    public function borrarTareasPrivadasM($datosC){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];
        $title = $datosC['titulo_3'];
        $query = "DELETE FROM private WHERE titulo='$title' ";
        $resultado = $cBD->query($query);
    }   


//agreagar comentarios
    public function agregarComentariosM($datosC){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];
        $comentario=$datosC['comentario'];
        $query = "INSERT INTO $this->tablaBD4 VALUES 
                    ($iduser,'$comentario')";

        $result = $cBD->query($query);
        return $result;
    }
} 
?>