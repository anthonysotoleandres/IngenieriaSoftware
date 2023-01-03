<?php  // registrar pagos
class ObjetosPerC {
    function __construct(){
        $this->ObjetosPerM = new ObjetosPerM();
    }
    // registrar vehiculos
    public function registrarObjetosPerdidosC(){
        if(isset($_POST['socioRO'])){
            $datosC =array();
            $datosC['chofer_idchofer'] = $_POST['socioRO'];
            $datosC['objeto_perdido'] = $_POST['objetoRO'];
            $datosC['descripcion'] = $_POST['descripcionRO'];
            $datosC['fecha'] = $_POST['fechaRO'];

     

            $resultado = $this->ObjetosPerM->registrarObjetosPerdidosM($datosC);
         
            header('location: index.php?ruta=RegistrarObjetosPerdidos');

        }
    }





}

?>