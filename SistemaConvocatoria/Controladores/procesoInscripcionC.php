<?php  // registrar PROCESO DE INSCRIPCION
class procesoInscripcionC {
    function __construct(){
        $this->procesoInscripcionM = new procesoInscripcionM();
    }
    // registrar proceso Inscripcion
        public function procesoInscripcionregistrarC(){
            if(isset($_POST['tipoPI'])){
                $datosC =array();
                $datosC['Modalidad_idModalidadcol'] = $_POST['tipoPI'];
                $datosC['linea_investigacion'] = $_POST['investigacionPI'];
 
                $datos1C =array();
                $datos1C['fecha'] = $_POST['fechaPI'];
                $datos1C['archivo1'] = $_POST['documento1PI'];
                $datos1C['archivo2'] = $_POST['documento2PI'];
                $datos1C['archivo3'] = $_POST['documento3PI'];

                $resultado = $this->procesoInscripcionM->inscribirM($datosC);

                $resultado1 = $this->procesoInscripcionM->inscribirDocM($datos1C);
             
                header('location: index.php?ruta=proceso_inscripcion');
    
            }
        }
    
    // registrar proceso coinvestigador
    public function procesoCoinvestigadorC(){
        if(isset($_POST['nombreCI'])){
            $datosC =array();
            $datosC['nombre'] = $_POST['nombreCI'];
            $datosC['apellidos'] = $_POST['apellidoCI'];
            $datosC['dni'] = $_POST['dniCI'];
            $datosC['funcion'] = $_POST['funcionCI'];
            $datosC['email'] = $_POST['emailCI'];
            $datosC['sexo'] = $_POST['generoCI'];
            

            $resultado = $this->procesoInscripcionM->procesoCoinvestigadorM($datosC);
         
            header('location: index.php?ruta=proceso_inscripcion2');

        }
    }

        // registrar proceso colaboradores
        public function procesoColaboradoresC(){
            if(isset($_POST['nombreCL'])){
                $datosC =array();
                $datosC['nombre'] = $_POST['nombreCL'];
                $datosC['apellidos'] = $_POST['apellidoCL'];
                $datosC['dni'] = $_POST['dniCL'];
                $datosC['funcion'] = $_POST['funcionCL'];
                $datosC['email'] = $_POST['emailCL'];
                $datosC['sexo'] = $_POST['generoCL'];
                
    
                $resultado = $this->procesoInscripcionM->procesoColaboradoresM($datosC);
             
                header('location: index.php?ruta=proceso_inscripcion2');
    
            }
        }

    //mostrar escuelas
    public function mostrarEscuelaC(){
        $resultado = $this->procesoInscripcionM->mostrarEscuelaM();
        return $resultado;
    }

    public function mostrarLineaC(){
            $resultado = $this->procesoInscripcionM->mostrarLineaM();
            return $resultado;
        

    }

//mostrar Colaboradores  
public function mostrarColaboradoresC(){
    $resultado = $this->procesoInscripcionM->mostrarColaboradoresM();
    return $resultado;
}

//mostrar Colaboradores  
public function mostrarDocumentosC(){
    $resultado = $this->procesoInscripcionM->mostrarDocumentosM();
 

    return $resultado;
}

//mostrar PDFSS FALTAAAAAAAAAAAAAAAAAAA
public function mostrararchivoC(){
    if(isset($_GET['iddocument'])){
        $datosC = array();
        $datosC['idDocumentos'] = $_GET['iddocument'];
        $resultado=$this->procesoInscripcionM->mostrararchivoM($datosC);
    
         
    }
}
//mo
public function borrarColaboradoresC(){
    if(isset($_GET['idcola'])){
        $datosC = array();
        $datosC['idColaboradores'] = $_GET['idcola'];
        $resultado=$this->procesoInscripcionM->borrarColaboradoresM($datosC);
      
        
    }
}

        // registrar PUNTUACION
        public function registrarPuntucionC(){
            if(isset($_POST['proyectoCA'])){
                $datosC =array();
                $datosC['valor1'] = $_POST['radioExample'];
                $datosC['valor2'] = $_POST['radioExample2'];
                $datosC['valor3'] = $_POST['radioExample3'];
                $datosC['valor4'] = $_POST['radioExample4'];
                $datosC['valor5'] = $_POST['radioExample5'];
                $datosC['valor6'] = $_POST['radioExample6'];
                $datosC['valor7'] = $_POST['radioExample7'];
                $datosC['valor8'] = $_POST['radioExample8'];
                $datosC['valor9'] = $_POST['radioExample9'];
                $datosC['valor10'] = $_POST['radioExample10'];
                $datosC['valor11'] = $_POST['radioExample11'];
                $datosC['valor12'] = $_POST['radioExample12'];
                $datosC['valor13'] = $_POST['radioExample13'];
                $datosC['valor14'] = $_POST['radioExample14'];
                $datosC['valor15'] = $_POST['radioExample15'];
                $datosC['valor16'] = $_POST['radioExample16'];
                $datosC['valor17'] = $_POST['radioExample17'];
                $datosC['valor18'] = $_POST['radioExample18'];
                $datosC['valor19'] = $_POST['radioExample19'];
                $datosC['valor20'] = $_POST['radioExample20'];

                $datos1C =array();
                $datos1C['PDF'] = $_POST['proyectoCA'];

                $suma = 0; // Variable acumuladora para almacenar la suma de los valores
                for ($i = 1; $i <= 20; $i++) {
                  $clave = 'valor' . $i; // Formar el nombre de la clave dinámicamente
                  if (isset($datosC[$clave])) { // Comprobar si la clave existe en el array
                    $suma += $datosC[$clave]; // Sumar el valor de la clave a la variable acumuladora
                  }
                }
                
                $resultado = $this->procesoInscripcionM->registrarPuntucionM($datos1C,$suma);
    
            }
        }
        // Mostrar Documentos
        public function mostrarPDFC(){
            $resultado = $this->procesoInscripcionM->mostrarPDFM();
            return $resultado;
        }

        // Mostrar Documentos
        public function mostrarDocentesC(){
            $resultado = $this->procesoInscripcionM->mostrarDocentesM();
            return $resultado;
        }

        // Mostrar PERFIL
        public function mostrarPerfilC(){
            $resultado = $this->procesoInscripcionM->mostrarPerfilM();
            return $resultado;
        }
///////////////////////////////////////////////////////////////////////////////////////////
        // Contar Docentes
        public function contarDocentesC(){
            $resultado = $this->procesoInscripcionM->contarDocentesM();
            return $resultado;
        }

        // Contar jurado
        public function contarJuradoC(){
            $resultado = $this->procesoInscripcionM->contarJuradoM();
            return $resultado;
        }
         // Contar documentos
         public function contarDocumentosC(){
            $resultado = $this->procesoInscripcionM->contarDocumentosM();
            return $resultado;
        }       

        // Contar colaboradores
        public function contarColaboradoresC(){
            $resultado = $this->procesoInscripcionM->contarColaboradoresM();
            return $resultado;
        }


// MOSTRAR JURADOS
        public function mostrarJuradosC(){
            $resultado = $this->procesoInscripcionM->mostrarJuradosM();
            return $resultado;
        }













    public function mostrarUsuario2C(){
        $resultado = $this->registrarM->mostrarUsuario2M();
        return $resultado;
    }

    //registrar choferes
    public function registrarChoferC(){
        if(isset($_POST['nombreRC'])){
                $datosC =array();
                $datosC['nombre'] = $_POST['nombreRC'];
                $datosC['apellido'] = $_POST['apellidoRC'];
                $datosC['telefono'] = $_POST['telefonoRC'];
                $datosC['direccion'] = $_POST['direccionRC'];
                $datosC['edad'] = $_POST['edadRC'];
                $datosC['sexo'] = $_POST['sexoRC'];
                $datosC['email'] = $_POST['emailRC'];
                $datosC['licencia'] = $_POST['licenciaRC'];

    
                $resultado = $this->registrarM->registrarChoferM($datosC);
             
                header('location: index.php?ruta=RegistroChoferes');
            }
            else{
            return false;
                }
        
        return true;
    }
//mostrar chofer    
    public function mostrarChoferC(){
        $resultado = $this->registrarM->mostrarChoferM();
        return $resultado;
    }

    public function mostrarChofer1C(){
        $resultado = $this->registrarM->mostrarChofer1M();
        return $resultado;
    }


// numero de chofer
    public function mostrarNumeroChoferC(){
        $resultado = $this->registrarM->mostrarNumeroChoferM();
        return $resultado;
    }
// numero de socios
public function mostrarNumeroSociosC(){
    $resultado = $this->registrarM->mostrarNumeroSociosM();
    return $resultado;
}

// numero de administradores
public function mostrarNumeroAdminC(){
    $resultado = $this->registrarM->mostrarNumeroAdminM();
    return $resultado;
}



// reporte chofer
public function reporteSociosC(){
    $resultado = $this->registrarM->reporteSociosM();
    return $resultado;
}
// reporte administrador
public function reporteAdminC(){
    $resultado = $this->registrarM->reporteAdminM();
    return $resultado;
}


public function borrarAdminC(){
    if(isset($_GET['idadmin'])){
        $datosC = array();
        $datosC['idadmin1'] = $_GET['idadmin'];
        $resultado=$this->registrarM->borrarAdminM($datosC);
        header('location: index.php?ruta=ReporteAdmin');
    }
}



public function borrarSociosC(){
    if(isset($_GET['idadmin'])){
        $datosC = array();
        $datosC['idsocios1'] = $_GET['idadmin'];

        $resultado=$this->registrarM->borrarSociosM($datosC);
        header('location: index.php?ruta=ReporteSocios');
    }
}


public function borrarChoferC(){
    if(isset($_GET['idadmin'])){
        $datosC = array();
        $datosC['idchofer_1'] = $_GET['idadmin'];

        $resultado=$this->registrarM->borrarChoferM($datosC);
        header('location: index.php?ruta=ReporteChoferes');
    }
}
/*
    //editar empleados
    public function editarTareasC(){
        if(isset($_GET['usuarios_idusuarios'])){
            $datosC = array('usuarios_idusuarios'=>$_GET['usuarios_idusuarios']);
            $resultado = $this->TareasM->editarTareasM($datosC);
            $rows = $resultado->fetch_array(MYSQLI_ASSOC);
            return $rows;
        }
    }

    //actualizar empleados
    public function actualizarTareasC(){
        if(isset($_POST['nombreE'])){
            $datosC = array(    'usuarios_idusuarios'=>$_POST['idusuarios_idusuariosE'],
                                'titulo'=>$_POST['tituloE'],
                                'contenido'=>$_POST['contenidoE'],
                                'fecha_registro' => $_POST['fecha_registroE'],
                                'fecha_vencimiento' => $_POST['fecha_vencimientoE'],
                                'prioridad' => $_POST['prioridadE'],
                            );
            $resultado = $this->TareasM->actualizarTareasM($datosC);
            header("location: index.php?ruta=tareas");
        }
    }

    //borrar empleado
    public function borrarTareasC(){
        if(isset($_GET['id'])){
            $datosC = array('id' => $_GET['id']);
            $this->TareasM->borrarTareasM($datosC);
            header('location: index.php?ruta=tareas');
        }
    }
}
*/
}
?>