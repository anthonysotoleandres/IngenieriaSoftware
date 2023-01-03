<?php  
class recuperarC {
    function __construct(){
        $this->recuperarM = new recuperarM();
    }
   //recuperar contraseña
   public function recuperarContraseñaC(){
    if(isset($_POST['emailRC'])){
        if($_POST["passwordRC"] === $_POST["ConfipasswordRC"]){
            $datosC = array();
            $datosC['email'] = $_POST['emailRC'];
            $datosC['pregunta'] = $_POST['preguntaRC'];
            $datosC['respuesta'] = $_POST['respuestaRC'];
            $datosC['password'] = $_POST['passwordRC'];
    
    
            $resultado=$this->recuperarM->recuperarContraseñaM($datosC);
            header('location: index.php?ruta=ingreso');

        }
        else{
            return false;    
        }

        }
    }
}
?>