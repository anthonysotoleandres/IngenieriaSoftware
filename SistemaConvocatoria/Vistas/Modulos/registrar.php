<?php
$registrarC = new registrarC();
$registrarC->registrarUsuarioC();

?>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper ms-auth">

<div class="ms-auth-container">
  <div class="ms-auth">
    <img src="Vistas\Modulos\investigacion_0.jpg" >
  </div>
  <div class="ms-auth-col">
    <div class="ms-auth-form">
      <form method="post" action="" id ="forregistrar"class="needs-validation" >
        <h1>Registrarce</h1>
        <p>Por favor llene los campos para continuar</p>
        <div class="form-row">
          <div class="col-md-6 ">
            <label for="validationCustom01">Nombre</label>
            <div class="input-group">
              <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre" name="nombreRU" required>
              <div class="valid-feedback">
                Se ve bien!
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
            <label for="validationCustom02">Apellidos</label>
            <div class="input-group">
              <input type="text" class="form-control" id="validationCustom02" placeholder="Apellidos" name="apellidoRU" required>
              <div class="valid-feedback">
              Se ve bien!
              </div>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-12 ">
            <label for="validationCustom03">Email</label>
            <div class="input-group">
              <input type="email" class="form-control" id="validationCustom03" placeholder="ejemplo@gmail.com" name="emailRU"required>
              <div class="invalid-feedback">
              Proporcione un correo electrónico válido.
              </div>
            </div>
          </div>
          <div class="col-md-12 ">
            <label for="validationCustom03">Nombre de Usuario</label>
            <div class="input-group">
              <input type="text" class="form-control" id="validationCustom03" placeholder="Usuario" name="usernameRU"required>
              <div class="invalid-feedback">
              Se ve bien!
              </div>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-12 ">
              <label for="validationCustom04">Contraseña</label>
              <div class="input-group">
                <input type="password" class="form-control" id="validationCustom04" placeholder="Password" name="passwordRU">
                <div class="invalid-feedback">
                  Proporcione una contraseña.
                </div>
              </div>
            </div>
          <div class="col-md-12 ">
            <label for="validationCustom04">Confirme tu Contraseña</label>
            <div class="input-group">
              <input type="password" class="form-control" id="validationCustom04" placeholder="Confirma Password" name="ConfipasswordRU">
              <div class="invalid-feedback">
                Proporcione una contraseña.
              </div>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-6 ">
            <label for="validationCustom01">Perfil</label>
            <div class="input-group">
            <select  select class="form-control" aria-label="Default select example" name="perfilRU"readonly>
               
               <option value="docente">Docente Investigador</option>
         </select>
            </div>
          </div>
          <div class="col-md-6 ">
            <label for="validationCustom02">Escuela Profesional</label>
            <div class="input-group">
            <select  select class="form-control" aria-label="Default select example" name="escuelaRU">
                <option value="" disabled selected>Seleccione la Escuela Profesional</option>
                <option value=1>Ingenieria de Sistemas</option>
                <option value=2>Ingenieria de Agroindustrial</option>
                <option value=3>Ingenieria Ambiental</option>
                <option value=4>Contabilidad</option>
                <option value=5>Educacion Primaria Intercultural</option>
         </select>
            </div>
          </div>
        </div>

        <button class="btn btn-primary mt-4 d-block w-100" type="submit">Crear Cuenta</button>
        
        <p class="mb-0 mt-3 text-center">Tienes una cuenta Ingrese? <a class="btn-link" href="index.php?ruta=ingreso">Aqui</a> </p>
      </form>

    </div>
  </div>
</div>

</div>
