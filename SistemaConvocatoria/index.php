<?php //index.php

require_once 'Controladores/rutasC.php';
require_once 'Controladores/adminC.php';
require_once 'Controladores/TareasC.php';
require_once 'Controladores/registrarC.php';
require_once 'Controladores/perfilC.php';
require_once 'Controladores/recuperarC.php';

require_once 'Controladores/pagosC.php';

require_once 'Controladores/ObjetosPerC.php';

require_once 'Controladores/procesoInscripcionC.php';





require_once 'Modelos/rutasM.php';
require_once 'Modelos/adminM.php';
require_once 'Modelos/TareasM.php';
require_once 'Modelos/registrarM.php';
require_once 'Modelos/perfilM.php';
require_once 'Modelos/recuperarM.php';

require_once 'Modelos/pagosM.php';

require_once 'Modelos/ObjetosPerM.php';

require_once 'Modelos/procesoInscripcionM.php';

include 'Vistas/plantilla.php';


?>