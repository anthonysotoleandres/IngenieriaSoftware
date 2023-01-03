<?php  // registrar pasaje
class pasajeC {
    function __construct(){
        $this->pasajeM = new pasajeM();
    }
    // registrar vehiculos
    public function registrarpasajeC(){
        if(isset($_POST['precio1RP'])){
            $datosC =array();
            $datosC['precioRuta1'] = $_POST['precio1RP'];
            $datosC['precioRuta2'] = $_POST['precio2RP'];

     

            $resultado = $this->pasajeM->registrarpasajeM($datosC);
         
            header('location: index.php?ruta=RegistrarPasaje');

        }
    }

    public function reportepasajeC(){

        $resultado = $this->pasajeM->reportepasajeM();
        return $resultado;
    

}



}

?>