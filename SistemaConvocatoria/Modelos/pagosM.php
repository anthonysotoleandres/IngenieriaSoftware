<?php  //pagos
require_once "conexionBD.php";

class pagosM extends ConexionBD{
    function __construct(){
        $this->tablaBD = 'pagos';
        $this->tablaBD1 = 'socio';
    }

    public function registrarpagosM($datosC){
        $cBD = $this->conectarBD();

        $monto = $datosC['monto'];
        $fecha = $datosC['fecha'];
        $socio = $datosC['socio_idsocio'];

        $query = "INSERT INTO $this->tablaBD VALUES 
            (NULL,'$monto','$fecha','$socio')";

        $result = $cBD->query($query);
        return $result;
    }
// mostrar pagos
    public function mostrarPagosM(){
        $cBD = $this->conectarBD();  
        $iduser=$_SESSION['Ingreso'];
        $query = "SELECT monto,fecha_pago, socio.nombre
                FROM $this->tablaBD INNER JOIN $this->tablaBD1
                on socio_idsocio= idsocio";
        $result = $cBD->query($query);
        return $result;
    }
    
    

}
