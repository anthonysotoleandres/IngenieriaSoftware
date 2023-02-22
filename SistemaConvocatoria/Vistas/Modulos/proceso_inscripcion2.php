<?php
$registrarC = new procesoInscripcionC();
$registrarC->procesoCoinvestigadorC();
$registrarC->procesoColaboradoresC();


?>
<!-- inscripcion de Coinvestigadores -->
      <div class="row">
        <div class="col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>Inscripcion de Coinvestigadores</h6>
            </div>
            <div class="ms-panel-body">
              
              <form method="post" action=""class="needs-validation" >
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Nombre</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom01" name="nombreCI">
                      <div class="valid-feedback">
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Apellido</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom02" name="apellidoCI">
                      <div class="valid-feedback">
                       
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustomUsername">Función</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustomUsername" placeholder="Coinvestigador" value="Coinvestigador" aria-describedby="inputGroupPrepend" name="funcionCI"readonly>
                      <div class="invalid-feedback">
                     
                      </div>
                    </div>
                  </div>

                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03">DNI</label>
                    <div class="input-group">
                      <input type="number" class="form-control" id="validationCustom03" name="dniCI">
                      <div class="invalid-feedback">
                       
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom04">Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Ejemplo@gmail.com"name="emailCI">

                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom05">Género</label>
                    <div class="input-group">
                        <select class="form-control" name="generoCI">
                          <option value="Masculino">Masculino</option>
                          <option value="Femenino">Femenino</option>
                        </select>
                      </div>
                    </div>                 
                </div>
                <button class="btn btn-primary" type="submit">Inscribir</button>
              </form>
            </div>
          </div>
        <!-- inscripcion de colaboradores -->
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>inscripcion de colaboradores(estudiantes, egresados y/o administrativo)</h6>
            </div>
            <div class="ms-panel-body">

            <form method="post" action=""class="needs-validation" >
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Nombre</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom01" name="nombreCL">
                      <div class="valid-feedback">
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Apellido</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom02" name="apellidoCL">
                      <div class="valid-feedback">
                       
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustomUsername">Función</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustomUsername" placeholder="Colaborador" value="Colaborador"aria-describedby="inputGroupPrepend" name="funcionCL"readonly>
                      <div class="invalid-feedback">
             
                      </div>
                    </div>
                  </div>

                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03">DNI</label>
                    <div class="input-group">
                      <input type="number" class="form-control" id="validationCustom03" name="dniCL">
                      <div class="invalid-feedback">
              
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom04">Email</label>
                    <div class="input-group">
                        <input type="email" id="validationCustom04" class="form-control" placeholder="Ejemplo@gmail.com" name="emailCL">

                       
                        
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom05">Género</label>
                    <div class="input-group">
                        <select class="form-control" name="generoCL">
                          <option value="Masculino">Masculino</option>
                          <option value="Femenino">Femenino</option>
                        </select>
                      </div>
                    </div>                 
                </div>
                <button class="btn btn-primary" type="submit">Inscribir</button>
              </form>
            </div>
          </div>
          </div>
          </div>


          