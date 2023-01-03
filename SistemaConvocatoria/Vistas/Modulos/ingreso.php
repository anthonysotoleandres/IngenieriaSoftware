<?php
$adminC = new AdminC();
$resultado = $adminC->IngresoC();

?>
    <style>


html,
body {
  height: 100%;
  text-align: center;
}

body {

  background-color: #f5f5f5;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
}


    </style>

<body class="text-center">

<main class="form-signin w-100 m-auto">
  <form method="post" action="">
    <img class="" src="Vistas\Modulos\unajma.png" alt=""  width="100" height="100">
    
    <h1 class="h3 mb-3 fw-normal">Ingreso</h1>

    <div class="form-floating">
      <input type="text" class="form-control"  name="usuarioI" placeholder="name@example.com">
      <label for="floatingInput">Usuario</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="claveI" placeholder="Password">
      <label for="floatingPassword">Constraseña</label>
    </div>
	<h1 class="h4 mb-3 fw-normal">Elige el Perfil</h1>
	<select class="form-select " aria-label="Default select example" name="perfilI" >
		<option value="administrador">Administrador</option>
                <option value="socio">Responsable</option>
	</select>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; </p>
  </form>
</main>  
  </body>
</div>
<?php if (!$resultado):?>
	<script>
		alert("Datos invalidos");
	</script>
<?php endif;?>


