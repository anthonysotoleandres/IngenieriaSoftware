<?php  //Modelos/empleadosM.php
require_once "conexionBD.php";

class recuperarM extends ConexionBD{
    function __construct(){
        $this->tablaBD = 'usuarios';
    }
    public function recuperarContraseñaM($datosC){
        $cBD = $this->conectarBD();  

        $emailRC=$datosC['email'];
        $preguntaRC =$datosC['pregunta'];
        $respuestaRC = $datosC['respuesta'];
        $passwordRC = $datosC['password'];

        $pw_temp = mysql_entities_fix_string($cBD,$passwordRC);

        $password = password_hash($pw_temp, PASSWORD_DEFAULT);

        $query = "UPDATE $this->tablaBD
            SET password='$password'   
            WHERE email='$emailRC' AND respuesta='$respuestaRC'";

        echo $query;
        $resultado = $cBD->query($query);
        return $resultado;  
} 
}
?>