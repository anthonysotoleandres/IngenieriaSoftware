<?php //  Modelos/rutasM.php
class RutasM{
    public function procesaRutasM($ruta){
        if( $ruta == "ingreso" || 
            $ruta == 'dashboard' ||
            $ruta == 'salir' ||
            $ruta == 'perfil' ||
            $ruta == 'editarperfil' ||
            $ruta == 'borrar' ||

            $ruta == 'proceso_inscripcion' ||
            $ruta == 'proceso_inscripcion2' ||
            $ruta == 'proceso_revision' ||
            $ruta == 'proceso_revision2' ||
            $ruta == 'proceso_calificacion' ||
            $ruta == 'preceso_publicacion' ||
            $ruta == 'registrar_juez' ||
            $ruta == 'dashboard' ||
            $ruta == 'cargar' ||
            $ruta == 'registrar' ||
            $ruta == 'editar')
        {
            $pagina = "Vistas/Modulos/".$ruta. ".php";
        }
        else if($ruta == 'index'){
            $pagina = "Vistas/Modulos/ingreso.php";
        }
        else {
            $pagina = "Vistas/Modulos/ingreso.php";
        }
        return $pagina;
    }

}
?>