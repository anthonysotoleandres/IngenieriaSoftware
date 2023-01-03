<?php  //pagos
require_once "conexionBD.php";

class pasajeM extends ConexionBD{
    function __construct(){
        $this->tablaBD = 'pasaje';
    }

    public function registrarpasajeM($datosC){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $precio1 = $datosC['precioRuta1'];
        $precio2 = $datosC['precioRuta2'];
 

        $query = "INSERT INTO $this->tablaBD VALUES 
            (NULL,'$precio1','$precio2','$iduser')";

        $result = $cBD->query($query);
        return $result;
    }


    public function reportepasajeM(){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $query = "SELECT *
                FROM $this->tablaBD where administrador_idadministrador =$iduser ";
        $result = $cBD->query($query);
        return $result;
    }
}
