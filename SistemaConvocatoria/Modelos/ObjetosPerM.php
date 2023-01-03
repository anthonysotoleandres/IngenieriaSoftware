<?php  //pagos
require_once "conexionBD.php";

class ObjetosPerM extends ConexionBD{
    function __construct(){
        $this->tablaBD = 'objeto_perdidos';
    }

    public function registrarObjetosPerdidosM($datosC){
        $cBD = $this->conectarBD();

        $objeto_perdidos = $datosC['objeto_perdido'];
        $fecha = $datosC['fecha'];
        $chofer = $datosC['chofer_idchofer'];
        $descripcion = $datosC['descripcion'];

        $query = "INSERT INTO $this->tablaBD VALUES 
            (NULL,'$descripcion','$objeto_perdidos','$chofer','$fecha')";

        $result = $cBD->query($query);
        return $result;
    }
}
