<?php  //Modelos/empleadosM.php
require_once "conexionBD.php";

class perfilM extends ConexionBD{
    function __construct(){
        $this->tablaBD = 'administrador';
        $this->tablaBD1 = 'socio';
    }

   public function registrarTareasM($datosC){
        $cBD = $this->conectarBD();
        $titul = $datosC['titulo'];
        $conteni = $datosC['contenido'];
        $registro = $datosC['fecha_registro'];
        $vencimiento = $datosC['fecha_vencimiento'];
        $priori = $datosC['prioridad'];
        $query = "INSERT INTO $this->tablaBD VALUES 
            (Null,'$titul', '$conteni', '$registro', '$vencimiento', '$priori')";

        $result = $cBD->query($query);

        return $result;
    }
    // mostrar perfil de usuario
    public function mostrarPerfilM(){
        $cBD = $this->conectarBD();

            $iduser=$_SESSION['Ingreso'];
            $query = "SELECT *
                    FROM $this->tablaBD where idadministrador =$iduser ";
            $result = $cBD->query($query);
            return $result;

    }
    // mostrar perfil de socios
    public function mostrarPerfilM1(){
        $cBD = $this->conectarBD();
                 
            $iduser=$_SESSION['Ingreso'];
            $query = "SELECT *
                    FROM $this->tablaBD1 where idsocio =$iduser ";
            $result = $cBD->query($query);
            return $result;

    }




    // mostrar nombre para tablon
    public function mostrarNombreM(){
        $cBD = $this->conectarBD();
        $query = "SELECT *
                FROM $this->tablaBD where id_usuario =$iduser ";
        $result = $cBD->query($query);
        return $result;
    }

    public function editarPerfilM($datosC){
        $cBD = $this->conectarBD();
        $id = $datosC['idadmin'];
        $query = "SELECT *
                FROM $this->tablaBD WHERE idadministrador='$id'";
        $result = $cBD->query($query);
        return $result;
    }
// actualizar perfil
    public function actualizarPerfilM($datosC){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $nom = $datosC['nombre'];
        $apell = $datosC['apellido'];
        $user = $datosC['usuario'];
        $perfi = $datosC['perfil'];
        $telf = $datosC['telefono'];
        $direc = $datosC['direccion'];
        $eda = $datosC['edad'];
        $sex = $datosC['sexo'];
        $emai = $datosC['email'];

        
        $query = "UPDATE $this->tablaBD
            SET 
            nombre='$nom', 
            apellido='$apell',
            usuario='$user', 
            perfil='$perfi',
            telefono='$telf',
            direccion='$direc',
            edad='$eda',
            sexo='$sex',
            email='$emai'
            WHERE idadministrador='$iduser'";
        
        $resultado = $cBD->query($query);
        return $resultado;    
    }


    /*
    public function borrarTareasM($datosC){
        $cBD = $this->conectarBD();
        extract($datosC);
        $query = "DELETE FROM $this->tablaBD WHERE titulo='$id'";
        $resultado = $cBD->query($query);
    }
    */
} 
?>