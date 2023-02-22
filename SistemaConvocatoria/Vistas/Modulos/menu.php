
<?php
	$adminC = new AdminC();
?>

<?php if(!$adminC->sesionIniciadaC()): ?>
		
		<!--<a href="index.php?ruta=nuevo_usuario">Registrarce</a></li> -->
		<!--<li><a href="index.php?ruta=recuperar_contraseña">Recuperar Contraseña</a></li> -->

<?php else:?>
<!-- Overlays -->
<div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
<div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>

<!-- Sidebar Navigation Left -->
<aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">

  <!-- Logo -->
  <div class="logo-sn ms-d-block-lg">
    <a class="text-center" href="index.html"> <img src="Vistas\Modulos\unajma1.png" alt="logo" > </a>
  </div>

  <!-- Navigation -->
  <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->
      <li class="menu-item">
          <a href="index.php?ruta=dashboard">
            <span><i class="material-icons fs-16">dashboard</i>Dashboard</span>
          </a>
      </li>
      <!-- /Dashboard -->
      <li class="menu-item">
        <a href="index.php?ruta=proceso_inscripcion" class="has-chevron"data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
          <span><i class="fas fa-pencil-alt"></i>Inscripción</span>
        </a>

          <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
              <li> <a href="index.php?ruta=proceso_inscripcion">Proceso Inscripción</a></li> </li>
              <li> <a href="index.php?ruta=proceso_inscripcion2">Inscribir Integrantes</a> </li>
            </ul>
      </li>
      <!-- Basic UI Elements -->
      <li class="menu-item">
          <a href="" class="has-chevron"data-toggle="collapse" data-target="#basic-elements" aria-expanded="false" aria-controls="basic-elements">
            <span><i class="fa fa-book"></i>Revision del Proyecto</span>
          </a>
          <ul id="basic-elements" class="collapse" aria-labelledby="basic-elements" data-parent="#side-nav-accordion">
        <li> <a href="index.php?ruta=proceso_revision">Integrantes</a> </li>
            <li> <a href="index.php?ruta=proceso_revision2">Documentos</a> </li>
 
          </ul>
      </li>
      <!-- /Basic UI Elements -->
      <!-- Advanced UI Elements -->
      <li class="menu-item">
          <a href="index.php?ruta=proceso_calificacion">
            <span><i class="fa fa-indent"></i>Calificación</span>
          </a>
      </li>
      <!-- /Advanced UI Elements -->
      <li class="menu-item">
          <a href="index.php?ruta=preceso_publicacion">
            <span><i class="fa fa-clipboard"></i>Resultados</span>
          </a>
      </li>
      <!-- /Advanced UI Elements -->
      <li class="menu-item">
          <a href="index.php?ruta=registrar_juez">
            <span><i class="fa fa-address-card"></i>Registro de jurados</span>
          </a>
      </li>
      <!-- /Form Elements -->
     
  </ul>


</aside>



</aside>

<!-- Main Content -->
<main class="body-content">
  <!-- Navigation Bar -->
  <nav class="navbar ms-navbar">

    <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
      <span class="ms-toggler-bar bg-primary"></span>
      <span class="ms-toggler-bar bg-primary"></span>
      <span class="ms-toggler-bar bg-primary"></span>
    </div>
    <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
      
      <li class="ms-nav-item ms-nav-user dropdown">
        <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="ms-user-img ms-img-round float-right" src="Vistas\Modulos\download.png" alt="foto"> </a>
        <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
          <li class="dropdown-menu-header">
            <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Bienvenido</span></h6>
          </li>
          <li class="dropdown-divider"></li>
          <li class="ms-dropdown-list">
            <a class="media fs-14 p-2" href="index.php?ruta=perfil"> <span><i class="flaticon-user mr-2"></i> Perfil</span> </a>
            <!-- <a class="media fs-14 p-2" href="pages\apps\email.html"> <span><i class="flaticon-mail mr-2"></i> Inbox</span> <span class="badge badge-pill badge-info">3</span> </a>
            <a class="media fs-14 p-2" href="pages\prebuilt-pages\user-profile.html"> <span><i class="flaticon-gear mr-2"></i> Account Settings</span> </a> -->
          </li>
          <li class="dropdown-divider"></li>
          <!-- <li class="dropdown-menu-footer">
            <a class="media fs-14 p-2" href="pages\prebuilt-pages\lock-screen.html"> <span><i class="flaticon-security mr-2"></i> Lock</span> </a>
          </li> -->
          <li class="dropdown-menu-footer">
            <a class="media fs-14 p-2" href="index.php?ruta=salir"> <span><i class="flaticon-shut-down mr-2"></i> Salir</span> </a>
          </li>
        </ul>
      </li>
    </ul>

    <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
      <span class="ms-toggler-bar bg-primary"></span>
      <span class="ms-toggler-bar bg-primary"></span>
      <span class="ms-toggler-bar bg-primary"></span>
    </div>
  </nav>

<?php endif; ?>


