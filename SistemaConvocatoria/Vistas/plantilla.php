<!DOCTYPE html>  <!-- Vistas/plantilla.php-->
<html lang="es">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>SistemaConvocatoria</title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="Vistas\vendors\iconic-fonts\font-awesome\css\all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="Vistas\vendors\iconic-fonts\flat-icons\flaticon.css">
  <link rel="stylesheet" href="Vistas\vendors\iconic-fonts\cryptocoins\cryptocoins.css">
  <link rel="stylesheet" href="Vistas\vendors\iconic-fonts\cryptocoins\cryptocoins-colors.css">
  <!-- Bootstrap core CSS -->
  <link href="Vistas\assets\css\bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="Vistas\assets\css\jquery-ui.min.css" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->
  <link href="Vistas\assets\css\slick.css" rel="stylesheet">
  <!-- Mystic styles -->
  <link href="Vistas\assets\css\style.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
  
</head>
<?php
// Desactivar toda las notificaciónes del PHP

error_reporting(0);

?>
<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
	<?php
		include 'Modulos/menu.php';
	?>

<div class="ms-content-wrapper">
		<?php
			$rutasC = new RutasC();
			$modulo = $rutasC->procesaRutasC();
			include $modulo;
		?>
 </div>   
</main>
</div>
  </div>
</div>
<!-- SCRIPTS -->
<!-- Global Required Scripts Start -->
<script src="Vistas\assets\js\jquery-3.5.1.min.js"></script>
<script src="Vistas\assets\js\popper.min.js"></script>
<script src="Vistas\assets\js\bootstrap.min.js"></script>
<script src="Vistas\assets\js\perfect-scrollbar.js"> </script>
<script src="Vistas\assets\js\jquery-ui.min.js"> </script>
<!-- Global Required Scripts End -->

<!-- Page Specific Scripts Start -->
<script src="Vistas\assets\js\slick.min.js"> </script>
<script src="Vistas\assets\js\moment.js"> </script>
<script src="Vistas\assets\js\jquery.webticker.min.js"> </script>
<script src="Vistas\assets\js\Chart.bundle.min.js"> </script>
<script src="Vistas\assets\js\Chart.Financial.js"> </script>
<script src="Vistas\assets\js\cryptocurrency.js"> </script>

<script src="Vistas\assets\js\jquery.steps.min.js"> </script>
<script src="Vistas\Modulos\form-wizard.js"> </script>
<!-- Page Specific Scripts Finish -->

<!-- Mystic core JavaScript -->
<script src="Vistas\assets\js\framework.js"></script>
<!-- Settings -->
<script src="Vistas\assets\js\settings.js"></script>

<script src="Vistas\assets\js\jquery.min.js"></script>

<script src="Vistas\Modulos\consulta.js"> </script>


  <!-- Page Specific Scripts Start -->
  <script src="Vistas\assets\js\datatables.min.js"> </script>
  <script src="Vistas\Modulos\data-tables.js"> </script>

</body>
</html>