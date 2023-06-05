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
      <input type="text" class="form-control"  name="usuarioI" placeholder="username">
      <label for="floatingInput">Usuario</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="claveI" placeholder="Password">
      <label for="floatingPassword">Constraseña</label>
    </div>
	<h1 class="h4 mb-3 fw-normal">Elige el Perfil</h1>
	<select class="form-select " aria-label="Default select example" name="perfilI" >
		            <option value="administrador">Administrador</option>
                <option value="docente">Docente Investigador</option>
                <option value="jurado">Jurado</option>
	</select>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>
    <p class="mt-5 mb-3 text-muted">&copy; </p>
    <p class="mb-0 mt-3 text-center">¿No tienes una cuenta? <a class="btn-link" href="index.php?ruta=registrar">Crear cuenta</a> </p>
    <p class="mb-0 mt-3 text-center">¿Olvidaste la contraseña? <a class="btn-link"href="" data-toggle="modal" data-target="#login-modal">Recuperar Contraseña</a> </p>
  </form>
  


</main>  

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal">
    <div class="modal-dialog modal-dialog-centered modal-auth" role="document">
    <div class="modal-content mx-auto my-auto" style="max-width: 800px;">

        <div class="modal-body">
        
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <div class="ms-auth-container">
            
            <div class="ms-auth-col">
              <div class="ms-auth-form">
                <form class="needs-validation" novalidate="">
                  <h1>Recuperar Constraseña</h1>
                  <p>Por favor ingrese los siguientes datos para recuperar la contraseña</p>
                  <div class="mb-3">
                    <label for="validationCustom08">Email</label>
                    <div class="input-group">
                      <input type="email" class="form-control" id="validationCustom08" placeholder="Email Address" required="">
                      <div class="invalid-feedback">
                        Ingrese su corre electrónico.
                      </div>
                    </div>
                  </div>
                  <div class="mb-2">
                    <label for="validationCustom09">Contraseña Nueva</label>
                    <div class="input-group">
                      <input type="password" class="form-control" id="validationCustom09" placeholder="Password" required="">
                      <div class="invalid-feedback">
                        Ingrese una nueva contraseña
                      </div>
                    </div>
                  </div>
                  <div class="mb-2">
                    <label for="validationCustom09">Repita Contraseña</label>
                    <div class="input-group">
                      <input type="password" class="form-control" id="validationCustom09" placeholder="Password" required="">
                      <div class="invalid-feedback">
                        Ingrese la nueva contraseña
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-primary mt-4 d-block w-100" type="submit">Recuperar</button>
                  </form>
                  </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>





  </body>
</div>

