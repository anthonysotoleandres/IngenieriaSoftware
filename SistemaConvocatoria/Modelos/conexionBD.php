<?php  //Modelos/conexcionBD.php
class ConexionBD{
    public function conectarBD(){
        $cBD = new mysqli('localhost','root','','bd_etc',3360);
        return $cBD;
    }
}
?>