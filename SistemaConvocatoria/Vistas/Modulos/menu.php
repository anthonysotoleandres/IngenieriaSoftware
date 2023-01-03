
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
          <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
             <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
           </a>
          <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
            <li> <a href="index.html">Crypto Currency</a> </li>
            <li> <a href="pages\dashboard\web-analytics.html"> Web Analytics </a> </li>
            <li> <a href="pages\dashboard\social-media.html">Social Media</a> </li>
            <li> <a href="pages\dashboard\project-management.html">Project Management</a> </li>
            <li> <a href="pages\dashboard\client-management.html">Client Management</a> </li>
          </ul>
      </li>
      <!-- /Dashboard -->
      <li class="menu-item">
        <a href="index.php?ruta=proceso_inscripcion">
          <span><i class="material-icons fs-16">widgets</i>Inscripción</span>
        </a>
      </li>
      <!-- Basic UI Elements -->
      <li class="menu-item">
          <a href="#" class="has-chevron" data-toggle="collapse" data-target="#basic-elements" aria-expanded="false" aria-controls="basic-elements">
            <span><i class="material-icons fs-16">filter_list</i>Basic UI Elements</span>
          </a>
          <ul id="basic-elements" class="collapse" aria-labelledby="basic-elements" data-parent="#side-nav-accordion">
            <li> <a href="pages\ui-basic\accordions.html">Accordions</a> </li>
            <li> <a href="pages\ui-basic\alerts.html">Alerts</a> </li>
            <li> <a href="pages\ui-basic\buttons.html">Buttons</a> </li>
            <li> <a href="pages\ui-basic\breadcrumbs.html">Breadcrumbs</a> </li>
            <li> <a href="pages\ui-basic\badges.html">Badges</a> </li>
            <li> <a href="pages\ui-basic\cards.html">Cards</a> </li>
            <li> <a href="pages\ui-basic\progress-bars.html">Progress Bars</a> </li>
            <li> <a href="pages\ui-basic\preloaders.html">Pre-loaders</a> </li>
            <li> <a href="pages\ui-basic\pagination.html">Pagination</a> </li>
            <li> <a href="pages\ui-basic\tabs.html">Tabs</a> </li>

            <li> <a href="pages\ui-basic\typography.html">Typography</a> </li>
          </ul>
      </li>
      <!-- /Basic UI Elements -->
      <!-- Advanced UI Elements -->
      <li class="menu-item">
          <a href="#" class="has-chevron" data-toggle="collapse" data-target="#advanced-elements" aria-expanded="false" aria-controls="advanced-elements">
            <span><i class="material-icons fs-16">code</i>Advanced UI Elements</span>
          </a>
          <ul id="advanced-elements" class="collapse" aria-labelledby="advanced-elements" data-parent="#side-nav-accordion">
            <li> <a href="pages\ui-advanced\draggables.html">Draggables</a> </li>
            <li> <a href="pages\ui-advanced\sliders.html">Sliders</a> </li>
            <li> <a href="pages\ui-advanced\modals.html">Modals</a> </li>
            <li> <a href="pages\ui-advanced\rating.html">Rating</a> </li>
            <li> <a href="pages\ui-advanced\tour.html">Tour</a> </li>
            <li> <a href="pages\ui-advanced\cropper.html">Cropper</a> </li>
            <li> <a href="pages\ui-advanced\range-slider.html">Range Slider</a> </li>
          </ul>
      </li>
      <!-- /Advanced UI Elements -->
      <li class="menu-item">
          <a href="pages\animation.html">
            <span><i class="material-icons fs-16">format_paint</i>Animations</span>
          </a>
      </li>
      <!-- Form Elements -->
      <li class="menu-item">
          <a href="#" class="has-chevron" data-toggle="collapse" data-target="#form-elements" aria-expanded="false" aria-controls="form-elements">
            <span><i class="material-icons fs-16">input</i>Form Elements</span>
          </a>
          <ul id="form-elements" class="collapse" aria-labelledby="form-elements" data-parent="#side-nav-accordion">
            <li> <a href="pages\form\form-elements.html">Form Elements</a> </li>
            <li> <a href="pages\form\form-layout.html">Form Layouts</a> </li>
            <li> <a href="pages\form\form-validation.html">Form Validation</a> </li>
            <li> <a href="pages\form\form-wizard.html">Form Wizard</a> </li>
          </ul>
      </li>
      <!-- /Form Elements -->
      <!-- Charts -->
      <li class="menu-item">
          <a href="#" class="has-chevron" data-toggle="collapse" data-target="#charts" aria-expanded="false" aria-controls="charts">
            <span><i class="material-icons fs-16">equalizer</i>Charts</span>
          </a>
          <ul id="charts" class="collapse" aria-labelledby="charts" data-parent="#side-nav-accordion">
            <li> <a href="pages\charts\chartjs.html">Chart JS</a> </li>
            <li> <a href="pages\charts\morris-charts.html">Morris Chart</a> </li>
          </ul>
      </li>
      <!-- /Charts -->
      <!-- Tables -->
      <li class="menu-item">
          <a href="#" class="has-chevron" data-toggle="collapse" data-target="#tables" aria-expanded="false" aria-controls="tables">
            <span><i class="material-icons fs-16">tune</i>Tables</span>
          </a>
          <ul id="tables" class="collapse" aria-labelledby="tables" data-parent="#side-nav-accordion">
            <li> <a href="pages\tables\basic-tables.html">Basic Tables</a> </li>
            <li> <a href="pages\tables\data-tables.html">Data tables</a> </li>
          </ul>
      </li>
      <!-- /Tables -->
      <!-- Popups -->
      <li class="menu-item">
          <a href="#" class="has-chevron" data-toggle="collapse" data-target="#popups" aria-expanded="false" aria-controls="popups">
            <span><i class="material-icons fs-16">message</i>Popups</span>
          </a>
          <ul id="popups" class="collapse" aria-labelledby="popups" data-parent="#side-nav-accordion">
            <li> <a href="pages\popups\sweet-alerts.html">Sweet Alerts</a> </li>
            <li> <a href="pages\popups\toast.html">Toast</a> </li>
          </ul>
      </li>
      <!-- /Popups -->
      <!-- Icons -->
      <li class="menu-item">
          <a href="#" class="has-chevron" data-toggle="collapse" data-target="#icons" aria-expanded="false" aria-controls="icons">
            <span><i class="material-icons fs-16">border_color</i>Icons</span>
          </a>
          <ul id="icons" class="collapse" aria-labelledby="icons" data-parent="#side-nav-accordion">
            <li> <a href="pages\icons\fontawesome.html">Fontawesome</a> </li>
            <li> <a href="pages\icons\flaticons.html">Flaticons</a> </li>
            <li> <a href="pages\icons\materialize.html">Materialize</a> </li>
          </ul>
      </li>
      <!-- /Icons -->
      <!-- Maps -->
      <li class="menu-item">
          <a href="#" class="has-chevron" data-toggle="collapse" data-target="#maps" aria-expanded="false" aria-controls="maps">
            <span><i class="material-icons fs-16">map</i>Maps</span>
          </a>
          <ul id="maps" class="collapse" aria-labelledby="maps" data-parent="#side-nav-accordion">
            <li> <a href="pages\maps\google-maps.html">Google Maps</a> </li>
            <li> <a href="pages\maps\vector-maps.html">Vector Maps</a> </li>
          </ul>
      </li>
      <!-- /Maps -->
      <!-- Pages -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages">
          <span><i class="material-icons fs-16">insert_drive_file</i>Pages</span>
        </a>
        <ul id="pages" class="collapse" aria-labelledby="pages" data-parent="#side-nav-accordion">
          <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#authentication" aria-expanded="false" aria-controls="authentication">Authentication</a>
            <ul id="authentication" class="collapse" aria-labelledby="authentication" data-parent="#pages">
              <li> <a href="pages\prebuilt-pages\default-login.html">Default Login</a> </li>
              <li> <a href="pages\prebuilt-pages\modal-login.html">Modal Login</a> </li>
              <li> <a href="pages\prebuilt-pages\default-register.html">Default Registration</a> </li>
              <li> <a href="pages\prebuilt-pages\modal-register.html">Modal Registration</a> </li>
              <li> <a href="pages\prebuilt-pages\lock-screen.html">Lock Screen</a> </li>
            </ul>
          </li>
          <li> <a href="pages\prebuilt-pages\coming-soon.html">Coming Soon</a> </li>
          <li> <a href="pages\prebuilt-pages\error.html">Error Page</a> </li>
          <li class="menu-item"> <a href="pages\prebuilt-pages\faq.html"> FAQ </a> </li>
          <li class="menu-item"> <a href="pages\prebuilt-pages\portfolio.html"> Portfolio </a> </li>
          <li class="menu-item"> <a href="pages\prebuilt-pages\user-profile.html"> User Profile </a> </li>
          <li class="menu-item"> <a href="pages\prebuilt-pages\invoice.html"> Invoice </a> </li>
        </ul>
      </li>
      <!-- /Pages -->
      <!-- Apps -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#apps" aria-expanded="false" aria-controls="apps">
          <span><i class="material-icons fs-16">phone_iphone</i>Apps</span>
        </a>
        <ul id="apps" class="collapse" aria-labelledby="apps" data-parent="#side-nav-accordion">
          <li> <a href="pages\apps\chat.html">Chat</a> </li>
          <li> <a href="pages\apps\email.html">Email</a> </li>
          <li> <a href="pages\apps\to-do-list.html">To-do List</a> </li>
        </ul>
      </li>
      <!-- /Apps -->
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
        <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="ms-user-img ms-img-round float-right" src="" alt="foto"> </a>
        <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
          <li class="dropdown-menu-header">
            <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Bienvenido</span></h6>
          </li>
          <li class="dropdown-divider"></li>
          <li class="ms-dropdown-list">
            <a class="media fs-14 p-2" href="pages\prebuilt-pages\user-profile.html"> <span><i class="flaticon-user mr-2"></i> Perfil</span> </a>
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


