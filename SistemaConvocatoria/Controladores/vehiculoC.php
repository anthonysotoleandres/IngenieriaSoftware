<?php  // registrar vehiculos
class vehiculoC {
    function __construct(){
        $this->vehiculoM = new vehiculoM();
    }
    // registrar vehiculos
    public function registrarVehiculoC(){
        if(isset($_POST['placaRV'])){
            $datosC =array();
            $datosC['placa'] = $_POST['placaRV'];
            $datosC['color'] = $_POST['colorRV'];
            $datosC['marca'] = $_POST['marcaRV'];
            $datosC['modelo'] = $_POST['modeloRV'];
            $datosC['tipo_vehiculo'] = $_POST['tipoRV'];
            $datosC['socio_idsocio'] = $_POST['socioRV'];
     

            $resultado = $this->vehiculoM->registrarVehiculoM($datosC);
         
            header('location: index.php?ruta=RegistrarVehiculo');

        }
    }

    //mostrar VEHICULOS
    public function mostrarVehiculoC(){
        $resultado = $this->vehiculoM->mostrarVehiculoM();
        return $resultado;


    }

        //mostrar numero de VEHICULOS
        public function mostrarNumeroVehiculoC(){
            $resultado = $this->vehiculoM->mostrarNumeroVehiculoM();
            return $resultado;
    
    
        }


}

?>