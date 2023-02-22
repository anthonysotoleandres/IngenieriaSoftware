<?php
$registrarC = new registrarC();
$registrarC->registrarJuradoC();

?>
<!-- Body Content Wrapper -->

<!-- inscripcion de Coinvestigadores -->
<div class="row">
        <div class="col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>Registrar Jurado</h6>
            </div>
            <div class="ms-panel-body">
              
              <form method="post" action=""class="needs-validation" >
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Nombre</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre Completo" name="nombreRJ" require="">
                      <div class="valid-feedback">
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Apellidos</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom02" placeholder="Apellido Completo"name="apellidoRJ">
                      <div class="valid-feedback">
                       
                      </div>
                    </div>
                  </div>

                 

                </div>
            <!-- segunda linea -->
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Usuario</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom01" placeholder="Usuario"name="usuarioRJ">
                      <div class="valid-feedback">
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Email</label>
                    <div class="input-group">
                      <input type="email" class="form-control" id="validationCustom02" placeholder="Ejemplo@gmail.com"name="emailRJ">
                      <div class="valid-feedback">
                       
                      </div>
                    </div>
                  </div>


                  <div class="col-md-4 mb-3">
                    <label for="validationCustomUsername">Perfil</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustomUsername" placeholder="Juez" value="jurado" aria-describedby="inputGroupPrepend" name="perfilRJ"readonly>
                      <div class="invalid-feedback">
                     
                      </div>
                    </div>
                  </div>
                </div>
                <!-- tercera linea -->
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">DNI</label>
                    <div class="input-group">
                      <input type="number" class="form-control" id="validationCustom01" name="dniRJ">
                      <div class="valid-feedback">
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Profesion</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom02" placeholder="Ejem: Ing. Civil"name="profesionRJ">
                      <div class="valid-feedback">
                       
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 ">
                    <label for="validationCustom02">Escuela Profesional</label>
                    <div class="input-group">
                    <select  select class="form-control" aria-label="Default select example" name="escuelaRJ">
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
                <!-- cuarta linea -->
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03">Contraseña</label>
                    <div class="input-group">
                      <input type="password" class="form-control" id="validationCustom03" name="passwordRJ">
                      <div class="invalid-feedback">
                       
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom04">Repetir Contraseña</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="ConfipasswordRJ">

                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom05">Género</label>
                    <div class="input-group">
                        <select class="form-control" name="generoRJ">
                          <option value="Masculino">Masculino</option>
                          <option value="Femenino">Femenino</option>
                        </select>
                      </div>
                    </div>                 
                </div>
                <button class="btn btn-primary" type="submit">Registrar</button>
              </form>
            </div>
          </div>


          </div>
          </div>
          </div>


          