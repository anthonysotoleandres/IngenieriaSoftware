<?php  // Controladores/empleadosC.php
class perfilC {
    function __construct(){
        $this->perfilM = new perfilM();
    }
    //mostrar perfil de usuario
    public function mostrarPerfilC(){

            $resultado = $this->perfilM->mostrarPerfilM();
            return $resultado;
        

    }

    //mostrar nombre en el tablon
    public function mostrarNombreC(){
        $resultado = $this->perfilM->mostrarNombreM();
        return $resultado;
    }


    //editar usuarios
    public function editarPerfilC(){
        if(isset($_GET['idadmin'])){
            $datosC = array('idadmin'=>$_GET['idadmin']);
            $resultado = $this->perfilM->editarPerfilM($datosC);
            $rows = $resultado->fetch_array(MYSQLI_ASSOC);
            return $rows;
        }
    }
        //actualizar usuarios
    public function actualizarPerfilC(){
        if(isset($_POST['nombreE'])){
            $datosC = array();  
            $datosC['nombre']= $_POST['nombreE'];
            $datosC['apellido']= $_POST['apellidoE'];
            $datosC['usuario']= $_POST['usuarioE'];
            $datosC['perfil']= $_POST['perfilE'];
            $datosC['telefono']= $_POST['telefonoE'];
            $datosC['direccion']= $_POST['direccionE'];
            $datosC['edad']= $_POST['edadE'];
            $datosC['sexo']= $_POST['sexoE'];
            $datosC['email']= $_POST['emailE'];
                        
            $resultado = $this->perfilM->actualizarPerfilM($datosC);
            header("location: index.php?ruta=ReportAdmin");
        }
    }
}
?>