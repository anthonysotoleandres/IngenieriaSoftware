<?php  // registrar usuarios
class registrarC {
    function __construct(){
        $this->registrarM = new registrarM();
    }

    public function registrarUsuarioC(){
        if(isset($_POST['nombreRU'])){
            if($_POST["passwordRU"] === $_POST["ConfipasswordRU"] and $_POST['perfilRU']=="socio"){

                $datosC =array();
                $datosC['nombre'] = $_POST['nombreRU'];
                $datosC['apellido'] = $_POST['apellidoRU'];
                $datosC['usuario'] = $_POST['usernameRU'];
                $datosC['contraseña'] = $_POST['passwordRU'];
                $datosC['email'] = $_POST['emailRU'];
                $datosC['perfil'] = $_POST['perfilRU'];

    
                $resultado = $this->registrarM->registrarUsuariosM($datosC);
             
                header('location: index.php?ruta=RegistroSocio');


            }
            if($_POST["passwordRU"] === $_POST["ConfipasswordRU"] and $_POST['perfilRU']=="administrador"){

                    $datosC =array();
                    $datosC['nombre'] = $_POST['nombreRU'];
                    $datosC['apellido'] = $_POST['apellidoRU'];
                    $datosC['usuario'] = $_POST['usernameRU'];
                    $datosC['contraseña'] = $_POST['passwordRU'];
                    $datosC['email'] = $_POST['emailRU'];
                    $datosC['perfil'] = $_POST['perfilRU'];
    
        
                    $resultado = $this->registrarM->registrarUsuarios1M($datosC);
                 
                    header('location: index.php?ruta=RegistroSocio');  
                }
        }
        return true;
        
    }

    //mostrar empleados
    public function mostrarUsuarioC(){
        $resultado = $this->registrarM->mostrarUsuarioM();
        return $resultado;
    }

    public function mostrarUsuario1C(){
        $resultado = $this->registrarM->mostrarUsuario1M();
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
public function reporteChoferC(){
    $resultado = $this->registrarM->reporteChoferM();
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