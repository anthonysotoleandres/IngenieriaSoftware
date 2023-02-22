<?php  //Modelos/empleadosM.php
require_once "conexionBD.php";

class procesoInscripcionM extends ConexionBD{
    function __construct(){
        $this->tablaBD = 'equipoinvestigador';
        $this->tablaBD2 = 'documentos';
        $this->tablaBD3 = 'escuelaprofesional';
        $this->tablaBD4 = 'lineainvestigacion';
        $this->tablaBD5 = 'colaboradores';
        $this->tablaBD6 = 'documentos';

    }
//incribir 1
    public function inscribirM($datosC){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $modalidad=$datosC['Modalidad_idModalidadcol'];
        $lineainv = $datosC['linea_investigacion'];
  

        $query = "UPDATE $this->tablaBD
            SET  
            Modalidad_idModalidadcol='$modalidad', 
            linea_investigacion='$lineainv'
            WHERE idEquipoInvestigador='$iduser'";
        
        $resultado = $cBD->query($query);
        return $resultado;    
    }
//incribir documentos---------------------------------------
    public function inscribirDocM($datos1C){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];
        $fecha=$datos1C['fecha'];
        $archivo1=$datos1C['archivo1'];
        $archivo2=$datos1C['archivo2'];
        $archivo3=$datos1C['archivo3'];
  

        $query = "INSERT INTO $this->tablaBD2 VALUES 
            (NULL,'$fecha','$archivo1','$archivo2','$archivo3','$iduser')";

        $result = $cBD->query($query);
        return $result;
    }
//reporte de las ecuelas---------------------------------------
    public function mostrarEscuelaM(){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $query = "SELECT *FROM equipoinvestigador inner join escuelaprofesional
                    WHERE EscuelaProfesional_idEscuelaProfesional =idEscuelaProfesional 
                    and idEquipoInvestigador ='$iduser'";
        $result = $cBD->query($query);
        return $result;
    }


    //reporte de las elienas de investigacion---------------------------------------
    public function mostrarLineaM(){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $query = "SELECT lineainvestigacion.idLineadeinvestigacion,lineainvestigacion.lineadeinvestigacion FROM `lineainvestigacion`  inner JOIN equipoinvestigador 
        WHERE lineainvestigacion.EscuelaProfesional_idEscuelaProfesional=equipoinvestigador.EscuelaProfesional_idEscuelaProfesional
        AND equipoinvestigador.idEquipoInvestigador ='$iduser'";
        $result = $cBD->query($query);
        return $result;
    }

// REGISTRAR COINVESTIGADORES
public function procesoCoinvestigadorM($datosC){
    $cBD = $this->conectarBD();
    $iduser=$_SESSION['Ingreso'];
    $nombre = $datosC['nombre'];
    $apellido = $datosC['apellidos'];
    $DNI = $datosC['dni'];
    $funcion = $datosC['funcion'];
    $email = $datosC['email'];
    $sexo = $datosC['sexo'];


    
    $query = "INSERT INTO $this->tablaBD5 VALUES 
        (NULL,'$nombre','$apellido','$DNI','$funcion',null,null,null,'$sexo','$email','$iduser')";

    $result = $cBD->query($query);
    return $result;
}

///////////////////////////////////////////////////////////////////
// REGISTRAR COLABORADORES
public function procesoColaboradoresM($datosC){
    $cBD = $this->conectarBD();
    $iduser=$_SESSION['Ingreso'];
    $nombre = $datosC['nombre'];
    $apellido = $datosC['apellidos'];
    $DNI = $datosC['dni'];
    $funcion = $datosC['funcion'];
    $email = $datosC['email'];
    $sexo = $datosC['sexo'];


    
    $query = "INSERT INTO $this->tablaBD5 VALUES 
        (NULL,'$nombre','$apellido','$DNI','$funcion',null,null,null,'$sexo','$email','$iduser')";

    $result = $cBD->query($query);
    return $result;
}
///////////////////////////////////////////////////////////////////
// mostrar colaboradores
public function mostrarColaboradoresM(){
    $cBD = $this->conectarBD();
    $iduser=$_SESSION['Ingreso'];

    $query = "SELECT *
            FROM $this->tablaBD5 WHERE EquipoInvestigador_idEquipoInvestigador =$iduser";

    $result = $cBD->query($query);
    return $result;
}

// mostrar documentos
public function mostrarDocumentosM(){
    $cBD = $this->conectarBD();
    $iduser=$_SESSION['Ingreso'];

    $query = "SELECT *
            FROM $this->tablaBD6 WHERE 	EquipoInvestigador_idEquipoInvestigador =$iduser";

    $result = $cBD->query($query);
    return $result;


}
/// FALTA MOSTRAR PDFS


public function mostrararchivoM($datosC){
    $cBD = $this->conectarBD();
    $iduser=$_SESSION['Ingreso'];


    $query = "SELECT archivo1
            FROM $this->tablaBD6 WHERE 	EquipoInvestigador_idEquipoInvestigador =$iduser";

    $result = $cBD->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $contenido_pdf = $row["archivo1"];
        $pdf_base64 = base64_encode($contenido_pdf);
        return '<embed src="data:application/pdf;base64,' . $pdf_base64 . '" type="application/pdf" />';
    } else {
        return false; // El archivo PDF no se encontró en la base de datos
    }


}

/// borrar admin
public function borrarColaboradoresM($datosC){
    $cBD = $this->conectarBD();
    $iduser=$_SESSION['Ingreso'];

    $IDE = $datosC['idColaboradores'];

    $query = "DELETE FROM $this->tablaBD5 WHERE idColaboradores='$IDE'AND $this->tablaBD5.EquipoInvestigador_idEquipoInvestigador = '$iduser'";
    $resultado = $cBD->query($query);

    return $resultado;
}


/// // registrar PUNTUACION 
public function registrarPuntucionM($datos1C,$suma){
    $cBD = $this->conectarBD();
    
    $IDE = $datos1C['PDF'];
    $cantidad = $suma;

    if($suma>=55){

        $query = "UPDATE `equipoinvestigador` SET `puntaje` = '$cantidad',`resultado` = 'APROBADO'
        WHERE `equipoinvestigador`.`idEquipoInvestigador` = '$IDE'";
    
        $resultado = $cBD->query($query);
    
        return $resultado;

    }
    else{

        $query = "UPDATE `equipoinvestigador` SET `puntaje` = '$cantidad',`resultado` = 'NO APROBADO'
        WHERE `equipoinvestigador`.`idEquipoInvestigador` = '$IDE'";
    
        $resultado = $cBD->query($query);
    
        return $resultado;

    }
    

}

/// /MOSTRAR PDFS
public function mostrarPDFM(){
    $cBD = $this->conectarBD();
    $iduser=$_SESSION['Ingreso'];

    $query = "SELECT archivo1,nombre,apellidos,EquipoInvestigador_idEquipoInvestigador FROM `documentos`, equipoinvestigador 
        WHERE EquipoInvestigador_idEquipoInvestigador=idEquipoInvestigador";

    $result = $cBD->query($query);
    return $result;

}

/// /MOSTRAR DOCENTES
public function mostrarDocentesM(){
    $cBD = $this->conectarBD();
    $iduser=$_SESSION['Ingreso'];

    $query = "SELECT * FROM `equipoinvestigador`,escuelaprofesional
    WHERE EscuelaProfesional_idEscuelaProfesional=idEscuelaProfesional";

    $result = $cBD->query($query);
    return $result;

}


/// /MOSTRAR PERFIL
public function mostrarPerfilM(){
    $cBD = $this->conectarBD();
    $iduser=$_SESSION['Ingreso'];

    $query = "SELECT * FROM `administrador`WHERE idadministrador= '$iduser'";

    $result = $cBD->query($query);
    return $result;

}
////////////////////////////////////////////////////////////////////////////////////////////

/// /Contar Docentes
public function contarDocentesM(){
    $cBD = $this->conectarBD();
    
            $query = "SELECT COUNT(*) as numero FROM  equipoinvestigador";
            $result = $cBD->query($query);
            return $result;

}

/// /Contar JURADO
public function contarJuradoM(){
    $cBD = $this->conectarBD();
    
            $query = "SELECT COUNT(*) as numero FROM  jurado";
            $result = $cBD->query($query);
            return $result;

}
/// /Contar DocUMENTOS
public function contarDocumentosM(){
    $cBD = $this->conectarBD();
    
            $query = "SELECT COUNT(*) as numero FROM  documentos";
            $result = $cBD->query($query);
            return $result;

}

/// /Contar COLABORADORES
public function contarColaboradoresM(){
    $cBD = $this->conectarBD();
    
            $query = "SELECT COUNT(*) as numero FROM  colaboradores";
            $result = $cBD->query($query);
            return $result;

}

/// /MOSTRAR JURADOS
public function mostrarJuradosM(){
    $cBD = $this->conectarBD();
    $iduser=$_SESSION['Ingreso'];

    $query = "SELECT * FROM `jurado`";

    $result = $cBD->query($query);
    return $result;

}



} 
?>