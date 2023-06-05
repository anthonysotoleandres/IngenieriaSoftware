<?php
if (isset($_POST['tipoPI'])) {
$registrarC = new procesoInscripcionC();
$registrarC->procesoInscripcionregistrarC();

$empleados= $registrarC->mostrarEscuelaC();
$investigacion= $registrarC->mostrarLineaC();

}
?>

      <div class="row">
        <div class="col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header">
              <h6>Proceso de Inscripción</h6>
            </div>
            <div class="ms-panel-body">
              <form method="post" action="" class="ms-form-wizard style1-wizard" id="default-wizard">

                <h3>Modalidad</h3>
                <div class="ms-wizard-step">
                  <div class="form-row">

                    <div class="col-md-6 mb-3">
                    <label>Elija Modalidad</label>
                      <div class="input-group">
                        <select class="form-control" name="tipoPI">
                          <option value=1>Proyecto de Investigación tipo 1</option>
                          <option value=2>Proyecto de Investigación tipo 2</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="ms-card card-gradient-info">
                          <div class="ms-card-body" >
                            <h6 style="text-align: center;">Proyecto de Investigación Tipo 1</h6>
                            <p style="text-align: center;">Investigaciones diciplinares o interdisciplinares que requieran uso de materiales de laboratorio, insumos, consumible y/o sustancias quimicas</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6 mb-3" >
                        <div class="ms-card card-gradient-info">
                          <div class="ms-card-body" id="carta">
                            <h6 style="text-align: center;">Proyecto de Investigación Tipo 2</h6>
                            <p style="text-align: center;"> Investigaciones diciplinares o interdisciplinares que demanden recojo de información ( de campo, encuestas, entrevistas y otros) y por su naturaleza no requieran de materiales de laboratorio, insumos y sustancias quimicas o similares.</p>
                          </div>

                        </div>
                      </div>

                  </div>
                </div>
                <!-- siguiente-->
                <h3>Linea de Investigación</h3>
                <div class="ms-wizard-step">
                  <div class="form-row">

                  <div class="col-md-6 mb-3">
                    <label>Escuela Profesional</label>
                      <div class="input-group">
                        <select class="form-control" name="escuelaPI" readonly>
                          <?php foreach($empleados as $empleado): ?>
                            <option value=<?=$empleado['idEscuelaProfesional']?> ><span><?=$empleado['Escuela']?></span></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6 mb-3">
                    <label>Lineas de Investigacion</label>
                      <div class="input-group">
                        <select class="form-control" name="investigacionPI">

                          <?php foreach($investigacion as $investigacio): ?>
                            <option value=<?=$investigacio['idLineadeinvestigacion']?> ><span><?=$investigacio['lineadeinvestigacion']?></span></option>
                          <?php endforeach; ?>
       
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <h3>Documentos</h3>
                <div class="ms-wizard-step">
                  <div class="form-row">

                    <div class="col-md-6 mb-3">
                    <label>Proyecto de Investigacion</label>
                      <div class="custom-file">
                      <input type="file" class="form-control" id="validatedCustomFile" aria-describedby="inputGroupFileAddon04" aria-label="Upload"name="documento1PI">
                        <label class="custom-file" for="validatedCustomFile"></label>   
                      </div>
                  </div>
                  

                  
                  <div class="col-md-6 mb-3">
                    <label>Documento Solicitado</label>
                      <div class="custom-file">
                      <input type="file" class="form-control" id="validatedCustomFile" aria-describedby="inputGroupFileAddon04" aria-label="Upload"name="documento2PI">
                        <label class="custom-file" for="validatedCustomFile"></label>   
                      </div>
                  </div>

                  
                  <div class="col-md-6 mb-3">
                    <label>Experiencia</label>
                      <div class="custom-file">
                      <input type="file" class="form-control" id="validatedCustomFile" aria-describedby="inputGroupFileAddon04" aria-label="Upload"name="documento3PI">
                        <label class="custom-file" for="validatedCustomFile"></label>   
                      </div>
                  </div>

                  <div class="col-sm-6">
                    <label for="firstName" class="form-label">Fecha</label>
                      <?php
                        date_default_timezone_set("America/Lima"); // fecha horarioa
                        $hoy = date("dMY", time()); //sacando la fecha
                      ?>
                    <input  class="form-control"type="text" value=<?=$hoy?> name="fechaPI" readonly>
                  </div>

                </div>  
                <button style="position: absolute;top: 80%;"id="miBoton" class="btn btn-primary" type="submit">Finalizar</button>
                <style>
                  #miBoton {
                    margin-left: 810px;
                                
                    }
                </style>
              </form>
            </div>
          </div>
        </div>
      </div>


    



    
