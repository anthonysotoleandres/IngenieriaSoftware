<?php  //vehiculos
require_once "conexionBD.php";

class vehiculoM extends ConexionBD{
    function __construct(){
        $this->tablaBD = 'vehiculos';
        $this->tablaBD1 = 'socio';
    }

    public function registrarVehiculoM($datosC){
        $cBD = $this->conectarBD();

        $placa = $datosC['placa'];
        $color = $datosC['color'];
        $marca = $datosC['marca'];
        $modelo = $datosC['modelo'];
        $tipo_vehiculo = $datosC['tipo_vehiculo'];
        $socio = $datosC['socio_idsocio'];
        $query = "INSERT INTO $this->tablaBD VALUES 
            (NULL,'$placa','$color','$marca','$modelo','$tipo_vehiculo','$socio')";

        $result = $cBD->query($query);
        return $result;
    }

// mostrar VEHICULOS

public function mostrarVehiculoM(){
    $cBD = $this->conectarBD();  
    $iduser=$_SESSION['Ingreso'];
    $query = "SELECT placa,color,marca,modelo,tipo_vehiculo, socio.nombre
            FROM $this->tablaBD INNER JOIN $this->tablaBD1
            on socio_idsocio= idsocio";
    $result = $cBD->query($query);
    return $result;
}


// mostrar numero VEHICULOS
public function mostrarNumeroVehiculoM(){
    $cBD = $this->conectarBD();  
    $iduser=$_SESSION['Ingreso'];
    $query = "SELECT COUNT(*) as numero FROM  $this->tablaBD ";
    $result = $cBD->query($query);
    return $result;
}



}
