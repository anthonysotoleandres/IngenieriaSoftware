<?php  //Modelos/registrarM.php
require_once "conexionBD.php";

class registrarM extends ConexionBD{
    function __construct(){
        $this->tablaBD = 'socio';
        $this->tablaBD1= 'administrador';
        $this->tablaBD2= 'chofer';
    }
// REGISTRAR SOCIOS
    public function registrarUsuariosM($datosC){
        $cBD = $this->conectarBD();
        $nombr = $datosC['nombre'];
        $apellid = $datosC['apellido'];
        $usernam = $datosC['usuario'];
        $pw_tem = $datosC['contraseña'];
        $emai = $datosC['email'];
        $perfi = $datosC['perfil'];

 

        $nombre = mysql_entities_fix_string($cBD,$nombr);
        $apellido = mysql_entities_fix_string($cBD,$apellid);
        $username = mysql_entities_fix_string($cBD,$usernam);
        $pw_temp = mysql_entities_fix_string($cBD,$pw_tem);

        $email = mysql_entities_fix_string($cBD,$emai);
        $perfil = mysql_entities_fix_string($cBD,$perfi);

        $password = password_hash($pw_temp, PASSWORD_DEFAULT);

        $query = "INSERT INTO $this->tablaBD VALUES 
            (NULL,'$nombre','$apellido','$username','$password',null,null,null,null,'$email',null,1,'$perfil')";

        $result = $cBD->query($query);
        return $result;
    }
// REGISTRAR ADMINISTRADORES

public function registrarUsuarios1M($datosC){
    $cBD = $this->conectarBD();
    $nombr = $datosC['nombre'];
    $apellid = $datosC['apellido'];
    $usernam = $datosC['usuario'];
    $pw_tem = $datosC['contraseña'];
    $emai = $datosC['email'];
    $perfi = $datosC['perfil'];

    $nombre = mysql_entities_fix_string($cBD,$nombr);
    $apellido = mysql_entities_fix_string($cBD,$apellid);
    $username = mysql_entities_fix_string($cBD,$usernam);
    $pw_temp = mysql_entities_fix_string($cBD,$pw_tem);
    $email = mysql_entities_fix_string($cBD,$emai);
    $perfil = mysql_entities_fix_string($cBD,$perfi);

    $password = password_hash($pw_temp, PASSWORD_DEFAULT);

    $query = "INSERT INTO $this->tablaBD1 VALUES 
        (NULL,'$nombre','$apellido','$username','$password','$perfil',null,null,null,null,'$email',1)";

    $result = $cBD->query($query);
    return $result;
}



///////////////////////////////////////////////////////////////
    public function mostrarUsuarioM(){
        $cBD = $this->conectarBD();
        $query = "SELECT *
                FROM $this->tablaBD ";
        $result = $cBD->query($query);
        return $result;
    }


    public function mostrarUsuario1M(){
        $cBD = $this->conectarBD();
        $query = "SELECT *
                FROM $this->tablaBD1 ";
        $result = $cBD->query($query);
        return $result;
    }
    public function mostrarUsuario2M(){
        $cBD = $this->conectarBD();
        $query = "SELECT *
                FROM $this->tablaBD2 ";
        $result = $cBD->query($query);
        return $result;
    }
//registrar choferes
    public function registrarChoferM($datosC){
        $cBD = $this->conectarBD();

        $nombr = $datosC['nombre'];
        $apellid = $datosC['apellido'];
        $telefo = $datosC['telefono'];
        $direcc = $datosC['direccion'];
        $edad = $datosC['edad'];
        $gener = $datosC['sexo'];
        $emai = $datosC['email'];
        $licen = $datosC['licencia'];

 

        $nombre = mysql_entities_fix_string($cBD,$nombr);
        $apellido = mysql_entities_fix_string($cBD,$apellid);
        $telefono = mysql_entities_fix_string($cBD,$telefo);
        $direccion = mysql_entities_fix_string($cBD,$direcc);
        $edad = mysql_entities_fix_string($cBD,$edad);
        $genero = mysql_entities_fix_string($cBD,$gener);
        $email = mysql_entities_fix_string($cBD,$emai);
        $licencia = mysql_entities_fix_string($cBD,$licen);

        $query = "INSERT INTO $this->tablaBD2 VALUES 
            (NULL,'$nombre','$apellido','$telefono','$direccion','$edad','$genero','$email','$licencia',1)";

        $result = $cBD->query($query);
        return $result;
    }

    //mostrar choferes
    public function mostrarChoferM(){
        $cBD = $this->conectarBD();

        $query = "SELECT ROW_NUMBER() OVER(ORDER BY idchofer ASC) as Orden,
                            nombre, apellido
                    FROM $this->tablaBD2 WHERE mod(idchofer,2) = 0";
        $result = $cBD->query($query);
        return $result;
    }

    public function mostrarChofer1M(){
        $cBD = $this->conectarBD();

        $query = "SELECT ROW_NUMBER() OVER(ORDER BY idchofer ASC) as Orden,
                            nombre, apellido
                    FROM $this->tablaBD2 WHERE mod(idchofer,2) <> 0";
        $result = $cBD->query($query);
        return $result;
    }



        //numero choferes
        public function mostrarNumeroChoferM(){
            $cBD = $this->conectarBD();
    
            $query = "SELECT COUNT(*) as numero FROM  $this->tablaBD2";
            $result = $cBD->query($query);
            return $result;
        }
        //numero choferes
        public function mostrarNumeroSociosM(){
            $cBD = $this->conectarBD();
    
            $query = "SELECT COUNT(*) as numero FROM  $this->tablaBD";
            $result = $cBD->query($query);
            return $result;
        }

        public function mostrarNumeroAdminM(){
            $cBD = $this->conectarBD();
    
            $query = "SELECT COUNT(*) as numero FROM  $this->tablaBD1";
            $result = $cBD->query($query);
            return $result;
        }
//reporte chofer
        public function reporteChoferM(){
            $cBD = $this->conectarBD();
    
            $query = "SELECT idchofer,nombre,apellido,telefono,direccion,edad,sexo,email,licencia   
            FROM  $this->tablaBD2";
            $result = $cBD->query($query);
            return $result;
        }
//reporte chofer --------- falta numero vehiculos
public function reporteSociosM(){
    $cBD = $this->conectarBD();
    $query = "SELECT idsocio,nombre,apellido,usuario,telefono,direccion,edad,sexo,email 
    FROM  $this->tablaBD";
    $result = $cBD->query($query);
    return $result;
}

//reporte admin--------- 
public function reporteAdminM(){
    $cBD = $this->conectarBD();
    $query = "SELECT idadministrador,nombre,apellido,usuario,telefono,direccion,edad,sexo,email 
    FROM  $this->tablaBD1";
    $result = $cBD->query($query);
    return $result;
}
/// borrar admin
public function borrarAdminM($datosC){
    $cBD = $this->conectarBD();
    $conteni = $datosC['idadmin1'];
    $query = "DELETE FROM $this->tablaBD1 WHERE idadministrador='$conteni'AND $this->tablaBD1.empresa_idempresa = 1";
    $resultado = $cBD->query($query);
}

/// borrar socios
public function borrarSociosM($datosC){
    $cBD = $this->conectarBD();
    $conteni = $datosC['idsocios1'];
    $query = "DELETE FROM $this->tablaBD WHERE $this->tablaBD.idsocio='$conteni'AND $this->tablaBD.empresa_idempresa = 1";
    $resultado = $cBD->query($query);
}


/// borrar admin
public function borrarChoferM($datosC){
    $cBD = $this->conectarBD();
    $conteni = $datosC['idchofer_1'];
    $query = "DELETE FROM chofer WHERE idchofer=$conteni AND chofer.empresa_idempresa = 1";
    $resultado = $cBD->query($query);
}
/*
    public function editarTareasM($datosC){
        $cBD = $this->conectarBD();
        $id = $datosC['usuarios_idusuarios'];
        $query = "SELECT titulo,contenido,fecha_registro,fecha_vencimiento,prioridad
                FROM $this->tablaBD WHERE usuarios_idusuarios='$id'";
        $result = $cBD->query($query);
        return $result;
    }

    public function actualizarTareasM($datosC){
        $cBD = $this->conectarBD();
        extract($datosC);
        $query = "UPDATE $this->tablaBD
            SET  
            titulo='$titul', 
            contenido='$conteni', 
            fecha_registro='$registro', 
            fecha_vencimiento='$vencimeinto', 
            prioridad='$priori'
            WHERE usuarios_idusuarios='$id'";
        echo $query;
        $resultado = $cBD->query($query);
        return $resultado;    
    }

    public function borrarTareasM($datosC){
        $cBD = $this->conectarBD();
        extract($datosC);
        $query = "DELETE FROM $this->tablaBD WHERE titulo='$id'";
        $resultado = $cBD->query($query);
    }
} */
}
?>