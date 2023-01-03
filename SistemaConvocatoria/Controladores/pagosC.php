<?php  // registrar pagos
class pagosC {
    function __construct(){
        $this->pagosM = new pagosM();
    }
    // registrar vehiculos
    public function registrarpagosC(){
        if(isset($_POST['socioRP'])){
            $datosC =array();
            $datosC['socio_idsocio'] = $_POST['socioRP'];
            $datosC['monto'] = $_POST['montoRP'];
            $datosC['fecha'] = $_POST['fechaRP'];

     

            $resultado = $this->pagosM->registrarpagosM($datosC);
         
            header('location: index.php?ruta=RegistrarPagos');

        }
    }

    //mostrar pagos
    public function mostrarPagosC(){
        $resultado = $this->pagosM->mostrarPagosM();
        return $resultado;
    }



}

?>